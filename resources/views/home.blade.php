@extends('layouts.app')

@section('content')
<div class="sinupPage">
    <div class="container">
        <div class="titleArea">
            <h1>Welocome to StockSound</h1>
            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
                You are logged in!
            </div>
            <a class="acountPage_link" href="{{ url('/') }}">TOP PAGE</a>
        </div>
    </div>
</div>
@endsection
