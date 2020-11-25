@extends('layouts.home')

@section('content')
  <div class="" style="width:100%">

    <table style="width:100%">
      <tr>
        <th>#ID</th>
        <th>Country</th>
        <th>status</th>
        <th>Ship To</th>
        <th>Bill To</th>
        <th>email</th>
        <th>Purchased on</th>
        <th>Payment method</th>
        <th>Grand total</th>
      </tr>

      @foreach ($orders['items'] as $items => $order)
        <tr>
          <td>{{ $order['items']['0']['order_id'] }}</td>
          <td>{{ $order['billing_address']['country_id'] }}</td>
          <td>{{ $order['status'] }}</td>
          <td>{{ $order['billing_address']['firstname'] }}{{ $order['billing_address']['lastname'] }}</td>
          <td>{{ $order['billing_address']['firstname'] }}{{ $order['billing_address']['lastname'] }}</td>
          <td>{{ $order['customer_email'] }}</td>
          <td>{{ $order['created_at'] }}</td>
          <td>{{ $order['payment']['method'] }}</td>
          <td>$ {{ $order['base_grand_total'] }}</td>
        </tr>
      @endforeach
    </table>

  </div>
@endsection
