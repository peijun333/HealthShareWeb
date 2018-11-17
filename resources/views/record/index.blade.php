@extends('layouts.app')

@section('content')
<div class = "container">
    <div class="card w-50" >
        <h5 class="card-header">今日摂取したカロリー</h5>
            <div class="card-body">
                <h5 class="card-title"></h5>
                <p class="card-text">ここに1日の摂取カロリーみたいなものを表示する</p>
                <a href="{{ route('calorie') }}" class="btn btn-primary">カロリー計算</a>
            </div>
    </div>
</div>
@endsection