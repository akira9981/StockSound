@extends('layouts.app')

@section('content')
<div class="top-box">
    <div class="top-message">
      <h1>
        あなたのお気に入りの曲を見つけよう。
      </h1>
      <h2><i class="fas fa-headphones"></i>StockSound</h2>
      <h3>
        [楽曲レビューサイト]
        お気に入り曲のレビューを書いてシェアしよう。
      </h3>
    </div>
    <div class="top-manual">
        <div class="contents">
            <i class="fas fa-edit"></i>
            <div class="top-text">レビューを書く</div>
        </div>
        <div class="contents">
            <i class="fas fa-music"></i>
            <div class="top-text">お気に入りに入れる</div>
        </div>
    </div>
</div>
<div class="contents">
  @foreach($reviews as $review)
    <div class="card-content">
        <div class="card">
            <div class="card-body">
                @if(!empty($review->image))
                <div class='image-wrapper'><img class='review-image' src="{{ asset('storage/images/'.$review->image) }}"></div>
                @else
                <div class='image-wrapper'><img class='review-image' src="{{ asset('images/guitar.png') }}"></div>
                @endif
                <h3 class='h3 review-title'>{{ $review->title }}</h3>
                <p class='description'>
                    {{ $review->body }}
                </p>
                <a href="{{ route('show', ['id' => $review->id ]) }}" class='detail-btn'>詳細を読む</a>
            </div>
        </div>
    </div>
  @endforeach
</div>
@endsection