@extends('layouts.app')
@section('content')

@if(session('messsage'))
    <div class="col-8 mx-auto alert alert-success">{{ session('message') }}</div>
@endif

@if($errors->any())
<div class="col-8 mx-auto alert alert-danger">
    <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<div class="container ml-auto col-12 col-md-10 col-lg-8" style="background-color:white;">
    <div class="row">
        <div class="col-md-10 mt-6 mx-auto">
            <div class="card-body">
                <h1 class="mt4">プロフィール編集</h1>
                <form method="post" action="{{ route('profile.update', $user) }}" enctype="multipart/form-data">
                @csrf
                @method('put')
                    <div class="form-group">
                        <label for="name">お名前</label>
                        <input type="text" name="name" id="name" value="{{ old('name', $user->name) }}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="email">メールアドレス</label>
                        <input type="email" name="email" id="email" value="{{ old('email', $user->email) }}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="avatar">アバター変更(サイズは1MBまで)</label>
                        <img src="{{ asset('storage/avatar/'.($user->avatar??'user_default.jpg')) }}" class="d-block rouded-circle mb-3" style="width:100px;height:100px;">
                        <div>
                            <input type="file" name="avatar" id="avatar">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="password">パスワード(8文字以上)</label>
                        <input type="password" name="password" id="password" class="form-control" placeholder="パスワードを入力してください" autocomplete="new-password" required>
                    </div>
                    <div class="form-group">
                        <label for="password-confirm">パスワード再入力</label>
                        <input type="password" name="password_confirmation" id="password-confirm" class="form-control" placeholder="パスワードを再入力してください" autocomplete="new-password" required>
                    </div>
                    <button type="submit" class="btn btn-success">送信する</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection