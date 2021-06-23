@extends('admin.layout.index')

@section('title', 'الاعضاء')

@section('content')

<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">الاسم</th>
            <th scope="col">البريد الاكتروني</th>
            <th scope="col">التحكم</th>
        </tr>
    </thead>
    <tbody>
        @foreach($users as $user)
        <tr>
            <th scope="row">{{$user->id}}</th>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>
                <x-actions :actions="['edit','delete']" :route="$route" :id="$user->id" />
            </td>
        </tr>
        @endforeach

    </tbody>
</table>
@endsection