<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Image;
use DB;
use App\Assignment;
/*use Carbon\Carbon;
*/use App\Form;/**/

class HomeController extends Controller
{
  public function home(){
  	return view('guest.pages.home');
  }

  public function signup(){
  	return view('guest.pages.signup');
  }

  public function login(){
  	return view('guest.pages.login');
  }

  public function login_store(Request $request){
  	$email = $request->email;
  	$password = $request->password;

  	$user = Assignment::where('email', '=', $email)
  				->where('password', '=', $password)
  				->first();

  	if($user){

  		  Session::put('userid',$user->id);
        Session::put('useremail',$user->email);

  		return redirect('/user');
  	}
  	else{
  		return redirect()->back()->with('msg',"The email or password you entered is incorrect");

  	}
  }

  public function logout(Request $request){

    	if($request->session()->has('userid')){
        $request->session()->flush();
    		return redirect('/');
    		

    	}
    	}

      public function order(){
        
      
      }


  public function insert(Request $request){
        $first_name  = $request->first_name;
        $last_name  = $request->last_name;
        $address =$request->address;
		    $birthdate =$request->birthdate;
		    $email =$request->email;
		    $password =$request->password;

        $obj = new assignment();
        $obj->first_name  = $first_name;
        $obj->last_name  = $last_name;
        $obj->address = $address;
		    $obj->birthdate = $birthdate;
		    $obj->email = $email;
		    $obj->password = $password;

        if($obj->save()){
            Session::put('userid',$obj->id);
        Session::put('useremail',$obj->email);

      return redirect('/user');
        }

    }

    public function edit($id){
        $user = Assignment::find($id);
        return view('users.pages.edit', ['user'=>$user]);
        
    }
    /*public function edit($id){
        $teacher = Assignment::find($id);
        return view('users.pages.edit', ['teac'=>$teacher]);
    }*/

    public function update(Request $request, $id){
      
        $first_name  = $request->first_name;
        $last_name  = $request->last_name;
        $address =$request->address;
        $birthdate =$request->birthdate;
        $email =$request->email;
        $password =$request->password;

        $obj = Assignment::find($id);
        $obj->first_name  = $first_name;
        $obj->last_name  = $last_name;
        $obj->address = $address;
        $obj->birthdate = $birthdate;
        $obj->email = $email;
        $obj->password = $password;
        if($obj->save()){
         return redirect('/show_data');
        }
      
    }

    public function delete($id){
        $user = Assignment::find($id);
        if($user->delete()){
            return redirect('/show_data');
        }
    }

    public function show_data(){
     if(Session::has('userid')){
        $user = Assignment::all();
        return view('users.pages.show_data',['q'=>$user]);
      }
      else{
        return redirect('login');
      }
      }
    

    public function user(){
    	return view('users.pages.home');
    }

    public function image(){
      if(Session::has('userid')){
        return view('users.pages.image');
      }
      else{
        return redirect('login');
      }
      
    }

    public function image_upload(Request $request){
      if(Session::has('userid')){
        /*$this->validate($request, [

                'filename' => 'required',
                'filename.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'

        ]);*/
        
        if($request->hasfile('filename'))
         {

            foreach($request->file('filename') as $image)
            {
                $name=$image->getClientOriginalName();
                $image->move(public_path().'/images/', $name);  
                $data[] = $name;  
            }
         }

         $form= new Form();
         $form->filename=json_encode($data);
         
        
        $form->save();

        return back()->with('success', 'Your images has been successfully');
      }
}
  }