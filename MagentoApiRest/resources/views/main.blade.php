@extends('layouts.home')

@section('content')
  <div class="orders">

    <table>
      <tr>
        <th>#ID</th>
        <th>Country</th>
        <th>Status</th>
        <th>Ship To</th>
        <th>Bill To</th>
        <th>Email</th>
        <th>Purchased On</th>
        <th>Payment Method</th>
        <th>Grand Total</th>
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
