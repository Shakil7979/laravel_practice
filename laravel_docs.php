//How to run laravel project 
    php artisan serve

//How to create controller command
    php artisan make:Controller controllerName

 
//how to create route group in web.php

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


// how to create a single controller myController.php

    public function __invoke(){
        return "I am a single Controller baby";
    }

    // web.php
     Route::get('/','myController');



//how to create custom Controller command
artisan make:Controller CustomControllerName 

//How to custom route 
Route::get('/custom','CustomControllerName@custom');

//How to custom controller method function 
function mySelf(){
    return "I am Custom Controller method";
}


//how to create resource controller command
php artisan make:Controller photoController --resource

//How to Route resource controller 
Route::resource('photos','photoController');

//how to resource controller Http request handle & CURD operation

*verb*                  *URI*                        *action*                *Route Name*
GET                    /photos                        index                  photos.index
GET                    /photos/create                 create                 photos.create
POST                   /photos                        store                  photos.store
GET                    /photos/{photo}                show                   photos.show
GET                    /photos/{photo}/edit           edit                   photos.edit
PUT/Patch              /photos/{photo}                update                 photos.update
DELETE                 /photos/{photo}                distroy                photos.distroy