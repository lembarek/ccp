<?php
Route::get('/', array(
    'as' => 'home',
    'uses' => 'HomeController@home',
));

Route::get('/terms',array(
    'as' => 'terms',
    'uses' => 'HomeController@terms',
    ));

Route::get('/about_me',array(
    'as' => 'about_me',
    'uses' => 'HomeController@AboutMe'
    ));

Route::get('/faq',array(
    'as' => 'faq',
    'uses' => 'HomeController@faq',
    ));

Route::get('/contact_me',array(
        'as' => 'contact_me',
        'uses' => 'HomeController@GetContactMe',
    ));

Route::get('/global',array(
    'as' => 'global',
    'uses' => 'HomeController@global'
    ));

Route::post('/contact_me',array(
        'as' => 'contact_me',
        'uses' => 'HomeController@postContactMe',
        'before' => ['csrf'],
    ));


/*Route::get('/account/sign_in',array(
    'as' => 'account-sign-in',
    'uses' => 'AccountController@getSignIn'
));

Route::get('/account/activate/{code}',array(
    'as' => 'account-activate',
    'uses' => 'AccountController@getActivate'
));



Route::group(array('before'=>'auth'), function(){
    Route::get('/account/sign-out',array(
        'as' => 'account-sign-out',
        'uses' => 'AccountController@getSignOut'
    ));
});


Route::group(array('before'=> 'guest'), function(){

    Route::group(array('before' => 'csrf'), function(){
        Route::post('/account/create',array(
            'as' => 'account-create-post',
            'uses' => 'AccountController@postCreate'
        ));
    });

    Route::get('/account/create',array(
        'as' => 'account-create',
        'uses' => 'AccountController@getCreate'
    ));


    Route::post('/account/sign_in',array(
        'as' => 'account-sign-in-post',
        'uses' => 'AccountController@postSignIn'
    ));
}); */


/* route of paypal */

Route::post('/ipn',array(
        'as' => 'ipn',
        'uses' => 'CcpController@ipn',
    ));
Route::post('/success',array(
        'as' => 'sell_success',
        'uses' => 'CcpController@sell_success',
    ));
Route::post('/cancel',array(
        'as' => 'sell_cancel',
        'uses' => 'CcpController@sell_cancel',
    ));



/* here start the ccp routes */

Route::group(array('before' => 'csrf'),function(){
    Route::group(array('before' => 'sell'),function(){
        Route::post('/sell',array(
            'as' => 'sell',
            'uses' => 'CcpController@postSell',
        ));
    });
    Route::group(array('before' => 'buy'),function(){
        Route::post('/buy',array(
            'as' => 'buy',
            'uses' => 'CcpController@postBuy',
            ));
    });
});


Route::group(array('before' => 'sell'),function(){
    Route::get('/sell',array(
    'as' => 'sell',
    'uses' => 'CcpController@getSell',
    ));
});

Route::group(array('before' => 'buy'),function(){
    Route::get('/buy',array(
        'as' => 'buy',
        'uses' => 'CcpController@getBuy',
        ));
});



// tranlation //



//Route::controller('translations', 'Barryvdh\TranslationManager\Controller');


// language chooser //

Route::get('/language',array(
        'as' => 'lang_chooser',
        'uses' => 'LanguageController@chooser',
    ));

// admin routes
Route::get('/admin/signin',array(
        'as' => 'admin_login',
        'uses' => 'AdminController@get_signin',
    ));
Route::post('/admin/signin',array(
        'as' => 'admin_login',
        'uses' => 'AdminController@post_signin',
    ));
Route::get('/admin/signup',array(
        'as' => 'admin_signup',
        'uses' => 'AdminController@get_signup',
    ));
Route::post('/admin/signup',array(
        'as' => 'admin_signup',
        'uses' => 'AdminController@post_signup',
    ));


Route::get('/admin/buyers/search', array(
    'as' => 'admin_buyers_search',
    'uses' => 'AdminController@getBuyers',
    ));


Route::get('/info', [
    'as' => 'info',
    'uses' => 'HomeController@info',
    ]);




Route::get('/admin/buyers', array(
    'as' => 'admin_buyers',
    'uses' => 'AdminController@postbuyers',
    ));

