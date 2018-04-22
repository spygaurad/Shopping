@extends('layouts.master')

@section('content')
    <div class="container">
    <form class="form" action="{{route('login')}}" method="post">
        {{csrf_field()}}
        Username <input type="text" name="email">
        Password <input type="password" name="password">
        <input type="submit" value="submit">
    </form>
    </div>
@endsection



