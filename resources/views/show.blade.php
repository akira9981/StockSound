@extends('layouts.app')

@section('css')
    <link href="{{ asset('css/show.css') }}" rel="stylesheet">
@endsection

@section('content')
<div class="show-contents">
  <h1 class='pagetitle'>レビュー詳細ページ</h1>
    <div class="show-body">
      <section class='review-main'>
        <h2 class='h2'>曲のタイトル</h2>
        <p class='h2 mb20'>{{ $review->title }}</p>
        <h2 class='h2'>レビュー本文</h2>
        <p>{{ $review->body }}</p>
      </section>  
      <aside class='review-image'>
@if(!empty($review->image))
        <img class='image' src="{{ asset('storage/images/'.$review->image) }}">
@else
        <img class='image' src="{{ asset('images/noimage.jpg') }}">
@endif
      </aside>
      <div class="back">
        <a href="{{ route('index') }}" class='btn-back'>一覧へ戻る</a>
      </div>
    </div>
  </div>
</div>
@endsection