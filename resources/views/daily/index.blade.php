@extends('layouts.app')

@section('content')
<nav class="navbar navbar-light bg-light">
    <form class = "form-inline" method = "POST" action = "{{ route('daily.api') }}">
        <tr>
            <input class="form-control mr-sm-2" type="text" name = "weight" class="form-control form-control-lg" id="colFormLabelLg" placeholder="体重">
            <input class="form-control mr-sm-2" type="text" name = "high_pressure" class="form-control form-control-lg" id="colFormLabelLg" placeholder="最低血圧">
            <input class="form-control mr-sm-2" type="text" name = "low_pressure" class="form-control form-control-lg" id="colFormLabelLg" placeholder="最高血圧">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">登録</button>
        </tr>
    </form>
</nav>

@endsection