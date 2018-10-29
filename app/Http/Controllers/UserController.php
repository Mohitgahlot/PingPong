<?php

namespace App\Http\Controllers;

use App\Rate;
use App\Subscriber;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use File;

class UserController extends Controller
{
    public function getHome(){
        return view('welcome');
    }

    public function getSignIn(){
        return view('account.signin');
    }

    public function getSignUp(){
        return view('account.signup');
    }

    public function getUserAccount(){
        return view('account.user_account');
    }

    public function getLogout(){
        Auth::logout();
        return redirect('/');
    }

    public function postSignUp(Request $request){
        $this->validate($request,[
            'name'=>'required|min:3',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:5|confirmed',
        ]);

        $user=new User();
        $user->Name=$request->name;
        $user->Email=$request->email;
        $user->password=bcrypt($request->password);
        $user->Acc_type="Pingpong";
        $user->save();
        Auth::login($user);
        return redirect('/');
    }

    public function postSignIn(Request $request){
        $this->validate($request,[
            'email'=>'required|email',
            'password'=>'required|min:5',
        ]);
        if(Auth::attempt(['Email'=>$request['email'],'password'=>$request['password'],'Acc_type'=>'Pingpong'])){
            return redirect()->route('shakes');
        }
        return redirect()->back();
    }

    public function getLocation(){
        $file = File::get(storage_path('text.txt'));
        $array = explode("\n",$file);
        return view('items/locate',['name'=>$array[0],'address'=>$array[1], 'number'=>$array[2],'id'=>$array[3],'n1'=>$array[4], 'd1'=>$array[5], 'e1'=>$array[6], 'n2'=>$array[7], 'd2'=>$array[8], 'e2'=>$array[9], 'n3'=>$array[10], 'd3'=>$array[11], 'e3'=>$array[12]]);
    }

    public function getMenu(){
        return view('items/menu');
    }

    public function getReviews(){
        $check=Rate::where('user_id',Auth::user()->id)->first();
        $rate=null;
        if($check){
            $rate=$check->rate;
        }

        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HTTPHEADER => ['Accept: application/json', 'user-key: 429f0a5d2df41fb628c6e492c7f4ef15'],
            CURLOPT_URL => 'https://developers.zomato.com/api/v2.1/reviews?res_id=310325',
        ));
        $resp = curl_exec($curl);
        $result=json_decode($resp, true);
        $prerate=[];
        $precomment=[];
        $prename=[];
        foreach($result['user_reviews'] as $review){
            array_push($prerate,$review['review']['rating']);
            array_push($precomment,$review['review']['review_text']);
            array_push($prename,$review['review']['user']['name']);
        }

        return view('items/review',['rate'=>$rate,'prerate'=>$prerate,'prename'=>$prename,'precomment'=>$precomment]);
    }

    public function postRate(Request $request){
        $message="unsucceessful";
            $rate = new Rate();
            $rate->rate = $request->rate;
            $rate->review= $request->review;
            if ($request->user()->rating()->save($rate)) {
                $message = "succeessful";
            }
        return response()->json(['message'=>$message],200);
    }

    public function postSubscription(Request $request){
        $subscriber= new Subscriber();
        $subscriber->name=$request->name;
        $subscriber->email=$request->email;
        $subscriber->save();
    }

}
