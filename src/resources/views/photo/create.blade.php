{{-- todo 06: 新規登録画面を追加 --}}
@extends('layouts.app')

@section('title', '新規登録')

@section('content')
    <h1>新規登録</h1>

    <form method="post" action="/create">
        {{ csrf_field() }}
        <div class="input-field">
            <input id="title" type="text" class="validate" name="title">
            <label for="title">タイトル</label>
        </div>
        <div class="input-field">
            <textarea id="body" type="text" class="materialize-textarea" name="body"></textarea>
            <label for="body">本文</label>
        </div>

        <button type="submit" class="waves-effect waves-light btn">新規登録</button>
    </form>
@endsection