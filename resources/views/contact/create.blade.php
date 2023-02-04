@extends('layouts.app')
@section('content')

@if($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

@if(session('message'))
<div class="alert alert-success">{{ session('message') }}</div>
@endif

<div class="row">
    <div class="col-10 col-md-8 col-lg-6 mx-auto mt-6">
        <div class="card-body">
            <h1 class="mt4 mb-3">お問い合わせ</h1>
            <form method="post" action="{{ route('contact.store') }}">
            @csrf
                <div class="form-group">
                    <label for="title">件名</label>
                    <input type="text" name="title" id="title" value="{{ old('title') }}" class="form-control" placeholder="Enter Title">
                </div>
                <div class="form-group">
                    <label for="body">本文</label>
                    <textarea name="body" id="body" cols="30" rows="10" class="form-control">{{ old('body') }}</textarea>
                </div>
                <div class="form-group">
                    <label for="email">メールアドレス</label>
                    <input type="email" name="email" id="email" value="{{ old('email') }}" class="form-control" placeholder="email">
                </div>
                <button type="submit" class="btn btn-success">送信する</button>
            </form>
        </div>
    </div>
</div>
@endsection