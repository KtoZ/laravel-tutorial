{{-- todo 06: 詳細画面を追加 --}}
@extends('layouts.app')

@section('title', '詳細')

@section('content')
    <h1>詳細</h1>

    <div class="input-field">
        <input id="title" type="text" name="title" value="{{ $photo->title }}" readonly>
        <label for="title">タイトル</label>
    </div>
    <div class="input-field">
        <textarea id="body" type="text" class="materialize-textarea" name="body"readonly>{{ $photo->body }}</textarea>
        <label for="body">本文</label>
    </div>
    <div class="input-field">
        <input id="created-at" type="text" value="{{ $photo->created_at }}" readonly>
        <label for="created-at">作成日時</label>
    </div>
    <div class="input-field">
        <input id="updated-at" type="text" value="{{ $photo->updated_at }}" readonly>
        <label for="updated-at">作成日時</label>
    </div>

    <form method="post" action="/photo/{{ $photo->id }}">
        {{ csrf_field() }}
        <input type="hidden" name="_method" value="DELETE">
        <a href="/photo/{{ $photo->id }}/edit" class="waves-effect waves-light btn">修正</a>
        <button type="submit" class="waves-effect waves-light btn">削除</button>
    </form>
@endsection