<?php

namespace App\Traits;

use Illuminate\Support\Facades\File;
use LogicException;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

trait JodaResources
{
    final public function __construct()
    {
        if (!isset($this->model)) {
            throw new LogicException(get_class($this) . ' is using JodaResources it must have at least a $model value');
        }

        $array = explode('\\', Str::lower($this->model));
        $name = end($array);
        
        if (!isset($this->name)) {
            $this->name = $name;
            $this->pluralName = Str::plural($this->name);
        }

        if (!isset($this->view)) {
            $this->view = $name;
        }

        if (!isset($this->route)) {
            $this->route = $this->pluralName ;
        }
    }



    public function index()
    {
        if (method_exists($this, 'query')) {
            ${$this->pluralName} = $this->query($this->model::query())->get();
        } else {
            ${$this->pluralName} = $this->model::all();
        }
        
        $index = ${$this->pluralName};
        $route = $this->route;
        return view("{$this->view}.index", compact($this->pluralName, 'index', 'route'));
    }


    public function create()
    {
        $route = $this->route;
        return view("{$this->view}.create", compact('route'));
    }


    public function store()
    {
        $this->validateRequest();
        
        $this->beforeStore();
        $data = $this->uploadFilesIfExist();
        $this->model::create($data);

        $this->afterStore();

        session()->flash('success', trans('admin.added'));

        return redirect(route("$this->route.index"));
    }


    public function show($id)
    {
        ${$this->name} = $this->model::find($id);
        $show = $this->model::find($id);
        return view("$this->view.show", compact($this->name, 'show'));
    }


    public function edit($id)
    {
        ${$this->name} = $this->model::find($id);
        $edit = $this->model::find($id);
        return view("$this->view.edit", compact($this->name, 'edit'));
    }


    public function update($id)
    {
        $this->validateRequest();
        
        $this->beforeUpdate();

        $data = $this->uploadFilesIfExist();
        $this->model::find($id)->update($data);

        $this->afterUpdate();

        session()->flash('success', trans('admin.updated'));

        return redirect(route("$this->route.index"));
    }


    public function destroy($id)
    {
        $this->beforeDestroy();

        ${$this->name}  = $this->model::find($id);
        $this->deleteFilesIfExist(${$this->name});
        ${$this->name}->delete();

        $this->afterDestroy();

        session()->flash('success', trans('admin.deleted'));

        return redirect(route("$this->route.index"));
    }


    public function validateRequest()
    {
        $rules = isset($this->model::$rules) ? $this->model::$rules : null;
        if ($rules) {
            request()->validate($rules);
        }
    }

    public function uploadFilesIfExist()
    {
        if (!file_exists(public_path('uploads'))) {
            mkdir(public_path('uploads'), 0777, true);
        }

        $data = request()->except("_token", '_method');
        if (isset($this->files)) {
            foreach ($this->files as $file) {
                if (request()->hasFile($file) and request()->$file) {
                    $fileName =
                        auth()->user()->id . '-' .
                        time() . '.' .
                        request()->file($file)->getClientOriginalExtension();
                    $data[$file] = request()->file($file)->move(
                        "uploads/{$this->pluralName}",
                        $fileName
                    );
                }
            }
        }
        return $data;
    }
    public function deleteFilesIfExist($model)
    {
        if (isset($this->files)) {
            foreach ($this->files as $file) {
                // dd($model->$file);
                File::delete($model->$file);
            }
        }
    }

    public function beforeStore()
    {
    }

    public function afterStore()
    {
    }
    public function beforeUpdate()
    {
    }

    public function afterUpdate()
    {
    }
    public function beforeDestroy()
    {
    }

    public function afterDestroy()
    {
    }
}
