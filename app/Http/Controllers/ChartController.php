<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class ChartController extends Controller
{
  public function index()
    {
        // Get the count of the two specific elements
        $internal = Order::where('is_enternal',true)->get();
  $external = Order::where('is_enternal',false)->get();
  $internal_count = 5;//count($internal);
  $external_count = count($external);
       // $count1 = DB::table('table_name')->where('column_name', 'specific_value_1')->count();
       // $count2 = DB::table('table_name')->where('column_name', 'specific_value_2')->count();

        // Initialize the data array for the chart
        $data = [
            'labels' => ['Internal Order', 'Exnternal Order'],
            'datasets' => [
                [
                    'label' => 'Count',
                    'data' => [$internal_count , $external_count],
                    'backgroundColor' => [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)'
                    ],
                    'borderColor' => [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)'
                    ],
                    'borderWidth' => 1
                ]
            ]
        ];
        // Pass the data to the view
       // return view('manger_dashboard', compact('data'));
       return view('manger_dashboard', compact('internal_count','external_count'));
    }


}
