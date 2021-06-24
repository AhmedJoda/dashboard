@extends('admin.layout.index')

@section('title', 'اضافة عضو')

@section('content')
    <div>
        <div class="p-2">
            <form method="post" action="{{url('admin\users')}}">
                @csrf
                <div class="form-body text-white">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">الاسم</label>
                                <input name="name" class="form-control" value="{{old('name')}}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">البريد</label>
                                <input name="email" class="form-control" value="{{old('email')}}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">كلمة السر</label>
                                <input name="password" class="form-control" value="{{old('password')}}">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 text-center">
                        <button type="submit" class="btn btn-success">انشاء</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
