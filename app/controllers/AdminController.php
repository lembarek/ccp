<?php

class AdminController extends BaseController{


                function get_signin()
                {
			return View::make('admin.login');
		}



		public function post_signin()
		{
			$validator = Validator::make(Input::all(), array(
			            'name' => 'required',
			            'password' => 'required'
			));

			if ($validator->fails()) {
			    return Redirect::route('admin_login')
			                    ->withErrors($validator)
			                    ->withInput();
			} else {
			    $password = md5(Input::get('password'));
			    $name = Input::get('name');
			    $admin = Admin::where('name','=',$name)->where('password','=',$password)->where('active','=',1);
			    if($admin->count() == 1){
			    	return "admin";
			    }
			}
		}

		public function get_signup()
		{
			return View::make('admin.sign_up');
		}


		public function post_signup()
		{
			$validator = Validator::make(Input::all(), array(
			            'name' => 'required',
			            'password' => 'required',
			            'password_again' => 'required|same:password',
			));
			if ($validator->fails()) {
			    return Redirect::route('admin_signup')
			                    ->withErrors($validator)
			                    ->withInput();
			} else {
			    $admin = Admin::create(array(
			    		"name" => Input::get('name'),
			    		"password" => md5(Input::get('password')),
			    		"active" => 0,
			    	));
			    if($admin){
			    	return Redirect::route('home');
			    }
			}
		}


                public function get_buyers($active=0, $finish=0, $start_time='', $end_time='', $order_by='created_at', $show=['amount','img','email','phone_number','created_at'])
                {
                    $buyers = Buy::whereActive($active)
                        ->whereFinish($finish)
                        ->where('created_at','>',$start_time)
                        ->where('created_at','<',$end_time)
                        ->order($order_by)
                        ->get($show);
                    return $buyers;
                }


                public function show_buyers()
                {
                    return $this->get_buyers();
                }

                public function getBuyers()
                {
                    return View::make('admin.buyer.search');
                }





}
