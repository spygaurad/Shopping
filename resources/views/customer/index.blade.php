

<a href="{{route('customer.create')}}">Create New Customer</a>

<div class="container">
    @foreach($customers as $key=>$customer)
        <tr>
            <td>{{ $key+1 }}</td>
            <a href="{{route('$customer.show', ['id' => $customers->customer_id])}}"><td>{{ $customer->first_name }}</td></a>

            <br>
        </tr>
    @endforeach
</div>
lasun
