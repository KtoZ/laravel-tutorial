{{-- todo 06: 一覧画面を追加 --}}
@extends('layouts.app')

@section('title', '一覧')

@section('content')
    <h1>一覧</h1>

    <div class="row">
        <a href="/photo/create" class="btn btn-primary">新規登録</a>
    </div>

    <div class="row">
        @foreach ($photos as $photo)
        <div class="col s12 m6">
            <div class="card blue-grey darken-1">
                <div class="card-content white-text">
                    <span class="card-title">{{ $photo->title }}</span>
                    <p>{{ $photo->body }}</p>
                </div>
                <div class="card-action">
                    <a href="/photo/{{ $photo->id }}">詳細</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>

@endsection