@extends('layouts.app')

@section('content')
@if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
@endif
<div class="review-contents">
  <h1 class='pagetitle'>レビュー投稿ページ</h1>
  <form method='POST' action="{{ route('store') }}" enctype="multipart/form-data">
    @csrf
    <div class="review-body">
      <div class="form-group">
        <label>曲名</label>
        <input type='text' class='form-control' name='title' placeholder='曲名を入力'>
      </div>
      <div class="form-group">
      <label>レビュー</label>
        <textarea class='description form-control' name='body' placeholder='本文を入力'></textarea>
      </div>
      <div class="form-group">
        <label for="file1">サムネイル</label>
        <input type="file" id="file1" name='image' class="form-control-file">
      </div>
      <div class="btn-wrapper">
        <i class="fas fa-edit"></i>
        <input type='submit' class='btn-primary' value='レビューを登録'>
      </div>
    </div>
  </form>
</div>
@endsection