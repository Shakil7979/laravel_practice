//how to route group

Route::group(['prefix'=>'account'],function(){

    Route::get('/logout',function(){
        return "logout";
    });
    Route::get('/login',function(){
        return "login";
    });
    Route::get('/register',function(){
        return "register";
    });

});