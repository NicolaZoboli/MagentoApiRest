<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Ixudra\Curl\Facades\Curl;

class OrderController extends Controller
{
  public function getData()
  {
      $getToken = Curl::to('https://web-web-fri.gdl.glamdigitallab.it/rest/V1/integration/admin/token?username=friclassroom&password=fri123456')
              ->post();

      $token = json_decode($getToken);


      $getOrders = Curl::to('https://web-web-fri.gdl.glamdigitallab.it/rest/V1/orders?searchCriteria=all')
              ->withBearer($token)
              ->get();

      $orders = json_decode($getOrders, true);

      return view('main', compact('orders'));
  }
}
