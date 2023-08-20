<?php

declare(strict_types=1);

namespace App\Actions\Web\Dashboard;

use App\Models\Order;



final class ManagerDashboardAction
{

     public function __invoke()
     {

        // Get the count of the two specific elements
          $internal = Order::where('is_enternal',true)->get();
          $external = Order::where('is_enternal',false)->get();
          $internal_count = count($internal);
          $external_count =count($external);

          //Get the count of the type order
          $social_media= Order::where('type','social media')->get();
          $Logo=Order::where('type','Logo')->get();
          $Covers=Order::where('type','Covers')->get();
          $Drawing=Order::where('type','Drawing')->get();
          $social_media_count=count($social_media);
          $Logo_count=count($Logo);
          $Covers_count=count($Covers);
          $Drawing_count=count($Drawing);


          // Initialize the data array for the chart
          $data = [
               'social_media_count' => $social_media_count,
               'Logo_count' => $Logo_count,
               'Covers_count' => $Covers_count,
               'Drawing_count' => $Drawing_count,
               'external_count' => $external_count,
               'internal_count' => $internal_count,

                    ];
          // Pass the data to the view
          //return view('designer_dashboard', compact('data'));
          return view('manger_dashboard', compact('data'));
     }
}
