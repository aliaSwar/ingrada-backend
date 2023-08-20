<?php

namespace App\Http\Controllers;
use App\Actions\web\OrederDesignerAction;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Customer;


class ChartController extends Controller
{
  public function index()
    {
      //orerd designer
      $OrederDesigners=( new OrederDesignerAction)();



        // Get the count of the two specific elements
        $internal = Order::where('is_enternal',true)->get();
        $external = Order::where('is_enternal',false)->get();
        $internal_count = 5;//count($internal);
        $external_count =7;//count($external);

      //Get the count of the type order
       $social_media= Order::where('type','social media')->get();
       $Logo=Order::where('type','Logo')->get();
       $Covers=Order::where('type','Covers')->get();
       $Drawing=Order::where('type','Drawing')->get();
       $social_media_count=count($social_media);
       $Logo_count=5;//count($Logo);
       $Covers_count=count($Covers);
       $Drawing_count=count($Drawing);

       //Get the count of country
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
          'Logo_count'    => $Logo_count,
          'Covers_count'  => $Covers_count,
          'Drawing_count' => $Drawing_count,
          'external_count'=> $external_count,
          'internal_count'=> $internal_count,
          'syria_count'   => $syria_count,
          'Lebanon_count' => $Lebanon_count,
          'Turkey_count'  => $Turkey_count,
           'Jordan_count' => $Jordan_count


                ];
        // Pass the data to the view
       return view('designer_dashboard', compact('data','OrederDesigners'));
      // return view('manger_dashboard', compact('data'));
    }
    public function manager()
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
    public function content_writer()
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
       return view('content-writer-dashboard', compact('data'));
      // return view('manger_dashboard', compact('data'));
    }
    public function admin()
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
       return view('dashboard', compact('data'));
      // return view('manger_dashboard', compact('data'));
    }
}
