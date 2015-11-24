<?php

class HomeController extends BaseController {

    public function home(){

        $user = User::first();

        $role = Role::whereName('admin')->first();
        $user->assignRole($role);
        $sell = "no"; $buy = "no";
        if(Sell::where('activate','=',0)->sum('amount') < Config::get('constants.sell_avialable_dollar')){
                $sell = 'yes';
        };
        if(Buy::where('activate','=',0)->sum('amount') < Config::get('constants.buy_avialable_dollar')){
                $buy = "yes";
        };
        return View::make('home')
            ->with('sell', $sell)
            ->with('buy', $buy);
    }

    public function terms(){
    	$terms = Lang::get('terms');
    	return View::make('general.terms')->with('terms',$terms);
    }

    public function AboutMe(){
    	return View::make('general.AboutMe');
    }

    public function faq(){
        $faqs = Lang::get('faq');
        return View::make('general.faq')
        ->with('faqs',$faqs);
    }

    public function GetContactMe(){
        return View::make('general.contact_me');
    }

    public function PostContactme(){
        $validator = Validator::make(Input::all(),array(
                'subject' => 'required|min:6',
                'message' => 'required|min:20'
            ));
        if($validator->fails()){
            return Redirect::route('contact_me')
                            ->withErrors($validator)
                            ->withInput();
        }else{
            $contact_me  = ContactMe::create(array(
                'subject' => Input::get('subject'),
                'message' => Input::get('message'),
                'status' => 'not_readed',
                ));
            if($contact_me){
                return Redirect::route('home')
                        ->with('global',Lang::get('general.contact_me_success'));
            }
        }
    }
}
