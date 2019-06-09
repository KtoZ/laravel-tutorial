{{-- todo 06: 詳細画面を追加 --}}
@extends('layouts.app')

@section('title', '詳細')

@section('content')
    <h1>詳細</h1>

    <div class="input-field">
        <input id="title" type="text" class="validate" name="title" value="{{ $photo->title }}" readonly>
        <label for="title">タイトル</label>
    </div>
    <div class="input-field">
        <textarea id="body" type="text" class="materialize-textarea" name="body" value="{{ $photo->body }}" readonly></textarea>
        <label for="body">本文</label>
    </div>

    <a href="/edit/{{ $photo->id }}" class="waves-effect waves-light btn">修正</a>
    <a href="/delete/{{ $photo->id }}" class="waves-effect waves-light btn">削除</a>
@endsection