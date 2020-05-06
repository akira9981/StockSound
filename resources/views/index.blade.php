@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
    <div class="col-md-4">
        <div class="card mb50">
            <div class="card-body">
                <div class='image-wrapper'><img class='sound-image' src="{{ asset('images/guitar.png') }}"></div>
                <h3 class='h3 book-title'>タイトル</h3>
                <p class='description'>
                    レビュー本文
                </p>
                <a href=""class='btn btn-secondary detail-btn'>詳細を読む</a>
            </div>
        </div>
    </div>
</div>

@endsection