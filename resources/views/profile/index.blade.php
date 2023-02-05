@extends('layouts.app')
@section('content')

<h1 class="mt4">ユーザー一覧</h1>

@if(session('message'))
    <div class="alert alert-success">{{ session('message') }}</div>
@endif

<table class="table" style="background-color:white;">
    <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">名前</th>
            <th scope="col">email</th>
            <th scope="col">avatar</th>
            <th scope="col">編集</th>
            <th scope="col">削除</th>
        </tr>
    </thead>
    <tbody>
        @foreach($users as $user)
            <tr>
                <th scope="row">{{ $user->id }}</th>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td><img src="{{ asset('storage/avatar/'.($user->avatar??'user_default.jpg')) }}" class="rouded-circle" style="width:40px;height:40px;"></td>
                <td>
                    <a href="{{ route('profile.edit', $user->id) }}">
                        <button class="btn btn-primary">編集</button>
                    </a>
                </td>
                <td>
                    <form method="post" action="{{ route('profile.delete', $user) }}">
                    @csrf
                    @method('delete')
                        <button type="submit" class="btn btn-danger">
                            削除
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection