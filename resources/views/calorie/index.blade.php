@extends('layouts.app')

@section('content')
<div class = "container">
    <form method = "POST" action = "{{ route('calorie.api') }}">
    @csrf
        <div class="form-group">
            <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">カロリーを検索</label>
            <input type="text" name = "food" class="form-control form-control-lg" id="colFormLabelLg" placeholder="食べ物を検索">
        </div>
    </form>
</div>
@isset($food)

<p>{{$food}}</p>

@endisset
@endsection