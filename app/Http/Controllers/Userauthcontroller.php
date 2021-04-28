<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB; // for query builder
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log; 
use Illuminate\Http\Request;
use App\Users;
use App\blogs;
use App\chats;

class Userauthcontroller extends Controller
{
    function login(){
        return view('/login') ;
    }

    function register(){
        return view('/register');
    }

    // database functions

    function create(Request $request){
       // validation
        $request->validate([
           'fullname' => 'required',
           'email' => 'required|email|unique:users',
           'mobile'=>'required|unique:users',
           'password' => 'required',
           'password2'=>'required|same:password',
           'username' => 'required'
       ]);

       // new user storing data
       /*$user = new Users;
       $user->username = $request->username;
       $user->name= $request->fullname;
       $user->email = $request->email;
       $user->password =Hash::make( $request->password);
            

            
       //save user data

        $query = $user->save();*/

        // using query builder
        
        $query = DB::table('users')->insert([
            'username' => $request->username,
            'name' => $request->fullname,
            'email' => $request->email,
            'mobile'=>$request->mobile,
            'password' =>Hash::make( $request->password)
        ]);


       if($query){
           return back()->with('success','registered');
       }else{
        return back()->with('fail',' not registered');
       }
       
    }

    //login auth

    function check(Request $request){
       // validation
       $request->validate([
        
        'password' => 'required',
        'username' => 'required'
    ]);  

    // check in database
    // normal method
    // $user = Users::where('username','=',$request->username)->first();

    // query builder method

    $user = DB::table('users')->where('username',$request->username)->first();
    if($user){
            if(Hash::check($request->password,$user->password))
            {
                $request->session()->put('Loggeduser',$user->id);
                $request->session()->put('Loggedusername',$user->name);
                return redirect('profile');
            }else{
                return back()->with('fail','password wrong');
            }
    }else{
        return back()->with('fail','Not in database');
    }
    }



    function profile(){
        if(session()->has('Loggeduser')){
            $user = Users::where('id','=',session('Loggeduser'))->first();
            $data = [
                'Loggeduserinfo' => $user//passing the particular logged in person if logged in 
            ];
        }
        return view('profile',$data);
    }

    function logout(){
        if(session()->has('Loggeduser')){
            session()->pull('Loggeduser');
            return redirect('login');
        }
    }

    function message(){
        if(session()->has('Loggeduser')){
            $users = DB::select('select * from users');// passing whole database if any person is logged in
           
        }
        if(session()->has('Loggeduser')){
            $user = Users::where('id','=',session('Loggeduser'))->first();
            $data = [
                'info' => $user//passing the particular logged in person if logged in 
            ];
        }
        return view('message',['users'=>$users],$data); 
    }

    function sendmessage(Request $request){
        if(session()->has('Loggeduser')){
           $request->validate([
               'mess'=> 'required',
               'fromname'=>'required',
               'fromnameid'=>'required',
               'nameid'=>'required',
               'name'=>'required',
           ]);

           $chat = new chats;
            $chat->fromname = $request->fromname;
            $chat->name = $request->name;
            $chat->message = $request->mess;
            $chat->fromnameid = $request->fromnameid;
            $chat->nameid = $request->nameid;
            $query = $chat->save();

            if($query){
                return back()->with('success','Message sent');
            }else{
             return back()->with('fail','Cannot chat.');
            }

        }
    }

    function compose(){
        if(session()->has('Loggeduser')){
            $user = Users::where('id','=',session('Loggeduser'))->first();
            $data = [
                'info' => $user//passing the particular logged in person if logged in 
            ];
        }
        return view('/compose',$data); // composing page render
    }

    function composecreate(Request $request){
         $request->validate([
             'name' => 'required',
             'title' => 'required',
             'passage' => 'required',
         ]);

         $blog = new blogs;
       $blog->name = $request->name;
       $blog->title = $request->title;
       $blog->passage = $request->passage;
        $query = $blog->save();

        if($query){
            return back()->with('success','Posted blog');
        }else{
         return back()->with('fail','Unable to post the blog');
        }
        
    }


    function activity(){
        if(session()->has('Loggeduser')){
            $blogs = DB::select('select * from blogs');// passing whole database if any person is logged in
           
        }
        if(session()->has('Loggeduser')){
            $user = Users::where('id','=',session('Loggeduser'))->first();
            $data = [
                'info' => $user//passing the particular logged in person if logged in 
            ];
        }
        return view('activity',['blogs'=>$blogs],$data); 
    }

    function mail(){
        if(session()->has('Loggeduser')){
            $user = Users::where('id','=',session('Loggeduser'))->first();
            $data = [
                'info' => $user//passing the particular logged in person if logged in 
            ];
        }
        return view('/mail',$data); // composing page render
    }

    function sendmail(request $request){
        $request->validate([
            'name' => 'required',
            'emails' => 'required|email',
            'subject' => 'required',
            'maildata'=>'required',
        ]);

$to_name = $request->name;
$to_email = $request->emails;
$from_email = $request->fromemail;
$from_name = $request->fromname;
$sub = $request->subject;

$data = array('name'=>$to_name, "body" =>$request->maildata);// maild is template in which we will pass data array 
Mail::send('maild', $data, function($message) use ($to_name, $to_email, $from_email,$from_name,$sub) {
$message->to($to_email, $to_name)->subject($sub);
$message->from($from_email,$from_name);
});

if(session()->has('Loggeduser')){
    $user = Users::where('id','=',session('Loggeduser'))->first();
    $data = [
        'info' => $user//passing the particular logged in person if logged in 
    ];
}
return view('/mail',$data); // passing info variable containing all the data
    }


    function inbox(){
        if(session()->has('Loggeduser')){
            $a = session('loggeduser');
            
            $chats =  DB::select('select * from chats');// passing whole database if any person is logged in
           
            if(session()->has('Loggeduser')){
                $user = Users::where('id','=',session('Loggeduser'))->first();
                $data = [
                    'info' => $user//passing the particular logged in person if logged in 
                ];
            }
        }
        
        return view('inbox',['chats'=>$chats],$data);
        
    }

    function sent(){
        if(session()->has('Loggeduser')){
            $a = session('loggeduser');
            
            $chats =  DB::select('select * from chats');// passing whole database if any person is logged in
           
            if(session()->has('Loggeduser')){
                $user = Users::where('id','=',session('Loggeduser'))->first();
    $data = [
        'info' => $user//passing the particular logged in person if logged in 
    ];
            }
        }
       
      

      
            return view('sent',['chats'=>$chats],$data);
        
      
    }


    function delete(Request $request){
        if(session()->has('Loggeduser')){
            $blogg = blogs::where('id', $request->delid)->delete();
            //echo"hello";
           // echo"{$request->delid}";
          
          
            return back()->with('success','Deleted blog');
        
        
        }
    }

    function deletemess(Request $request){
        if(session()->has('Loggeduser')){
            $chatt = chats::where('id', $request->delid)->delete();
            //echo"hello";
           //echo"{$request->delid}";
          
          
            return back()->with('success','Deleted chat');
        
        
        }
    }

    function edit(Request $request){
        if(session()->has('Loggeduser')){
            $nid =$request->edid;
            $nt = $request->edtitle;
            $np = $request->edpassage;
            $query = DB::update('update blogs  set title = ?,passage=? where id=?',[$nt,$np,$nid]);
          
          
             if($query){
                return back()->with('success','edited blog');
            }else{
             return back()->with('fail','Unable to edit the blog');
            }
            
        
        
        }
    }

    function editm(Request $request){
        if(session()->has('Loggeduser')){
            $nid =$request->edid;
            $nmess = $request->edmess;
            
            $query = DB::update('update chats  set message=? where id=?',[$nmess,$nid]);
          
          
             if($query){
                return back()->with('success','edited message');
            }else{
             return back()->with('fail','Unable to edit the message');
            }
            
        
        
        }
    }

}
