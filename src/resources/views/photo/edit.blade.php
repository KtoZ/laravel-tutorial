{{-- todo 06: 更新画面を追加 --}}
@extends('layouts.app')

@section('title', '更新')

@section('content')
    <h1>更新</h1>

    @if ($errors->any())
        <div class="row">
            <ul>
                @foreach ($errors->all() as $error)
                    <li class="red-text">{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="post" action="/photo/{{ $photo->id }}">
        {{ csrf_field() }}
        <input type="hidden" name="_method" value="PUT">
        <div class="input-field">
            <input id="title" type="text" class="validate" name="title" value="{{ $photo->title }}">
            <label for="title">タイトル</label>
        </div>
        <div class="input-field">
            <textarea id="body" type="text" class="materialize-textarea" name="body">{{ $photo->body }}</textarea>
            <label for="body">本文</label>
        </div>

        <button type="submit" class="waves-effect waves-light btn">更新</button>
    </form>
@endsection