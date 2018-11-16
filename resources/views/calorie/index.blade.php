@extends('layouts.app')

@section('content')
<nav class="navbar navbar-light bg-light">
    <form class = "form-inline" method = "POST" action = "{{ route('calorie.api') }}">
        @csrf
            <input class="form-control mr-sm-2" type="text" name = "food" class="form-control form-control-lg" id="colFormLabelLg" placeholder="食べ物を検索">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
</nav>
@isset($data)

<table class="table">
    <thead class="thead-dark">
        <tr>
            <th scope="col">以下から最も近い食品を選択してください</th>
        </tr>
    </thead>
    <tbody>
    @foreach($data as $item)
        <tr>
            <th scope="row"><a href = "#">{{$item['name']}}</th>
        </tr>
    @endforeach
    </tbody>
</table>

@endisset
@endsection