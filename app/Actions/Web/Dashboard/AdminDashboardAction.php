<?php

declare(strict_types=1);

namespace App\Actions\Web\Dashboard;

use App\Actions\Web\OrederDesignerAction;
use App\Models\Order;

use App\Models\Customer;

final class AdminDashboardAction
{

     public function __invoke()
     {
        $OrederDesigners=( new OrederDesignerAction)();
        // Get the count of the two specific elements
          $internal = Order::where('is_enternal',true)->get();
          $external = Order::where('is_enternal',false)->get();
          $internal_count = 7;//count($internal);
          $external_count =5;//count($external);

          //Get the count of the type order
          $social_media= Order::where('type','social media')->get();
          $Logo=Order::where('type','Logo')->get();
          $Covers=Order::where('type','Covers')->get();
          $Drawing=Order::where('type','Drawing')->get();
          $social_media_count=count($social_media);
          $Logo_count=count($Logo);
          $Covers_count=count($Covers);
          $Drawing_count=count($Drawing);
          $syria=Customer::where('country','syria')->get();
          $Lebanon=Customer::where('country','Lebanon')->get();
          $Turkey=Customer::where('country','Turkey')->get();
          $Jordan=Customer::where('country','Jordan')->get();
          $syria_count=count($syria);
          $Lebanon_count=count($Lebanon);
          $Turkey_count=count($Turkey);
          $Jordan_count=count($Jordan);

          // Initialize the data array for the chart
          $data = [
               'social_media_count' => $social_media_count,
               'Logo_count' => $Logo_count,
               'Covers_count' => $Covers_count,
               'Drawing_count' => $Drawing_count,
               'external_count' => $external_count,
               'internal_count' => $internal_count,
               'syria_count'   => $syria_count,
               'Lebanon_count' => $Lebanon_count,
               'Turkey_count'  => $Turkey_count,
               'Jordan_count' => $Jordan_count,
                'OrederDesigners' => $OrederDesigners


                    ];

          return $data;
     }

}

