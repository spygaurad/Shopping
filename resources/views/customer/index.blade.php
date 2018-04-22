@extends('layouts.master')

@section('content')
<a href="{{route('customer.create')}}">Create New Customer</a>

<div class="container">
    <table class="table table-striped">
    @foreach($customers as $key=>$customer)
        <tr>
            <td>{{ $key+1 }}</td>
            <td><a href="{{route('customer.show', ['id'=>$customer->customer_id]) }}">{{ $customer->first_name }}</a></td>
            <br>
        </tr>
    @endforeach
    </table>
</div>
@endsection