<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Faq;
use App\Models\Message;
use App\Models\Reservation;
use App\Models\Setting;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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

    public function faq(){

        $setting = Setting::first();
        $datalist = Faq::all();
        return view('home.faq', [
            'setting'=>$setting,
            'datalist'=>$datalist
        ]);

    }

    public function storemessage(Request $request){

       $data = new Message();
       $data->name = $request->input('name');
       $data->email = $request->input('email');
       $data->phone = $request->input('phone');
       $data->subject = $request->input('subject');
       $data->message = $request->input('message');
       $data->ip = request()->ip();
       $data->save();

       return redirect()->route('contact')->with('info', 'Your message has been sent, thank you!' );
    }

    public function storecomment(Request $request){

       $data = new Comment();
       $data->user_id = Auth::id();     //logged in user id
       $data->car_id = $request->input('car_id');
       $data->subject = $request->input('subject');
       $data->review = $request->input('review');
       $data->rate = $request->input('rate');
       $data->message = $request->input('message');
       $data->ip = request()->ip();
       $data->save();

       return redirect()->route('car', ['id'=>$request->input('car_id')])->with('success', 'Your comment has been sent, thank you!' );
    }


    public function car($id){ 
        $data = Car::find($id);
        $images = DB::table('images')->where('car_id', $id)->get();
        $reviews = Comment::where('car_id', $id)->where('status', 'True')->get();
        return view('home.car', [
            'data'=>$data,
            'images'=>$images,
            'reviews'=>$reviews
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

    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function loginadmincheck(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
 
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect()->intended('/admin');
        }
 
        return back()->withErrors([
            'error' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function storereservation(Request $request){

        /* $fdate = $request->Fdate;
        $tdate = $request->Tdate;
        $datetime1 = new DateTime($fdate);
        $datetime2 = new DateTime($tdate);
        $interval = $datetime1->diff($datetime2);
        $days = $interval->format('%a');//now do whatever you like with $days */


        $fdate = $request->input('rezdate');
        $tdate = $request->input('returndate');
        $datetime1 = new DateTime($fdate);
        $datetime2 = new DateTime($tdate);
        $interval = $datetime1->diff($datetime2);
        $days = $interval->format('%a');//now do whatever you like with $days


        $amount = $days*$request->input('price');


        $data = new Reservation();
        $data->user_id = Auth::id();     //logged in user id
        $data->car_id = $request->input('car_id');
        $data->rezlocation = $request->input('rezlocation');
        $data->rezdate = $request->input('rezdate');
        $data->reztime = $request->input('reztime');
        $data->returnlocation = $request->input('returnlocation');
        $data->returndate = $request->input('returndate');
        $data->days = $days;
        $data->price = $request->input('price');
        $data->amount = $amount;
        $data->ip = request()->ip();
        $data->note = $request->input('note');
        $data->status = $request->input('status');
        $data->save();
 
        return redirect()->route('car', ['id'=>$request->input('car_id')])->with('success', 'Your reservation has been made, thank you!' );
     }
}
