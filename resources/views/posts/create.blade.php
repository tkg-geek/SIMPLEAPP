@extends('layouts.app')

@section('content')
<div>
    <h1>新規投稿</h1>
    <form method="POST" action="{{ route('posts.store') }}">
        @csrf
        <div>
            <label for="title">タイトル</label>
            <input type="text" name="title" id="title" required>
        </div>
        <div>
            <label for="content">内容</label>
            <textarea name="content" id="content" required></textarea>
        </div>
        <button type="submit">投稿</button>
    </form>
</div>
@endsection
