<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(){
        $sliderdata = Car::limit(4)->get();
        return view('home.index', [
            'sliderdata'=>$sliderdata
        ]);
    }

    public function car($id){ 
        $data = Car::find($id);
        $images = DB::table('images')->where('car_id', $id)->get();
        return view('home.car', [
            'data'=>$data,
            'images'=>$images
        ]);
    }

    public function test(){
        return view('home.test');
    }

    public function param($id, $number){
        echo "Parameter 1 : ", $id ;
        echo "<br> Parameter 2 : ", $number ;
        echo "<br> Sum of Parameters : ", $id + $number ;
        return view('home.test2',
        [
            'id ' => $id,
            'number ' => $number

        ]);
    }

    public function save(Request $request){
        echo "Save Function <br> ";
        echo "First Name : ", $_REQUEST["fname"]; 
        echo "Last Name : ", $_REQUEST["lname"];
    }
}
