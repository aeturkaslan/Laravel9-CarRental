<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Category;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{

    public static function maincategorylist(){
        return Category::where('parent_id', '=', 0)->with('children')->get();
    }

    public function index(){
        $sliderdata = Car::limit(4)->get();
        $carlist1 = Car::limit(4)->get();
        $setting = Setting::first();
        return view('home.index', [
            'setting'=>$setting,
            'sliderdata'=>$sliderdata,
            'carlist1'=>$carlist1
        ]);

    }

    public function about(){

        $setting = Setting::first();
        return view('home.about', [
            'setting'=>$setting,
        ]);

    }

    public function references(){


        $setting = Setting::first();
        return view('home.references', [
            'setting'=>$setting,
        ]);

    }

    public function contact(){

        $setting = Setting::first();
        return view('home.contact', [
            'setting'=>$setting,
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

    public function categorycars($id){ 

        $category = Category::find($id);
        /* $cars = Car::where('category_id',$id)->get(); */
        $cars = DB::table('cars')->where('category_id', $id)->get();
        
        return view('home.categorycars', [
            'category'=>$category,
            'cars'=>$cars
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
