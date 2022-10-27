<?php

use App\Http\Controllers\AdminCourseController;
use App\Http\Controllers\AdminFaqController;
use App\Http\Controllers\AdminOrderController;
use App\Http\Controllers\PostControler;
use App\Http\Controllers\AdminVideoController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\DevcoinController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\InsPostController;
use App\Http\Controllers\InsVideoController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserInfoController;
use App\Http\Controllers\UserPostController;
use App\Http\Controllers\VideoController;
use App\Http\Middleware\OnlyAdmin;
use App\Http\Middleware\OnlyInstructor;
use App\Models\Order;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[CourseController::class,'HomePage']);

Route::middleware(['auth',OnlyAdmin::class])->group(function () {
    
    /*Admin*/

    Route::get('/orginalAdmin/user', function () {
        return view('admin.users.user');
    })->middleware(['auth'])->name('user');

    Route::get('/orginalAdmin/instructor', function () {
        return view('admin.users.instructor');
    })->middleware(['auth'])->name('instructor');

    Route::resource('/orginalAdmin', AdminCourseController::class);
    Route::post('/orginalAdmin/deleteUser/{id}', [AdminCourseController::class,'delUser']);
    Route::get('/orginaladmin/courses', [AdminCourseController::class,'index2']);
    Route::get('/orginaladmin/list', [AdminCourseController::class,'list']);
    Route::get('/orginaladmin/list2', [AdminCourseController::class,'list2']);
    Route::get('/orginaladmin/list3', [AdminCourseController::class,'list3']);
    Route::get('/orginaladmin/approve/{id}', [AdminCourseController::class,'aprrove']);

    Route::resource('/products', ProductController::class)->middleware(['auth']);

    /*Webinar editing */
    Route::resource('/adminWebinars', AdminVideoController::class);
    Route::get('/webinars/list', [AdminVideoController::class,'list']);
    Route::get('/webinars/approve/{id}', [AdminVideoController::class,'aprrove']);

    /*Blog editing */
    Route::resource('/Blogs', PostControler::class);
    Route::get('/blogs/list', [PostControler::class,'list']);
    Route::get('/blogs/approve/{id}', [PostControler::class,'aprrove']);

    Route::get('/Adorder', [AdminOrderController::class,'index']);
    Route::get('/adorder/list', [AdminOrderController::class,'list']);
    Route::post('/adorder/deliver/{id}', [AdminOrderController::class,'delivered']);
    /*Admin Faq*/
    Route::resource('/Adfaq', AdminFaqController::class);
    Route::get('/adfaq/list', [AdminFaqController::class,'list']);        
/*Admin Faq*/

/*Admin*/
    

});





Route::get('/Course',[CourseController::class,'course']);
Route::get('/courseReg/{id}',[CourseController::class,'courseRegistration'])->middleware(['auth']);
Route::get('/Course/{id}',[CourseController::class,'coursedetails']);

Route::resource('/Webinar', VideoController::class);
Route::get('/webinar/list', [VideoController::class,'list']);
Route::get('/webinar/details1/{id}', [VideoController::class,'details1']);
Route::get('/webinar/details2/{id}', [VideoController::class,'details2'])->middleware(['auth']);

/*User video table editing */
Route::get('/userBlogs', [UserPostController::class,'index']);
Route::get('/userBlogs/details/{id}', [UserPostController::class,'show']);
Route::post('/post-comment/{id}',[UserPostController::class,'CommentOnPost'])->middleware(['auth']);
/*User video table editing */

/*Faq*/
Route::get('/Faq', [FaqController::class,'index']);
/*Faq */



/*Register User related Route*/
    Route::get('/home',[UserInfoController::class,'index'])->middleware(['auth']);
    Route::get('/mycourse',[UserInfoController::class,'myCourse'])->middleware(['auth']);
    Route::get('/myprofile',[UserInfoController::class,'myProfile'])->middleware(['auth']);
    Route::get('/mydevcoin',[UserInfoController::class,'myDevcoin'])->middleware(['auth']);
    Route::get('/passchange',[UserInfoController::class,'ToChangePass'])->middleware(['auth']);
    Route::get('/profileInfo',[UserInfoController::class,'ProfileInfo'])->middleware(['auth']); /*After email & password submitted */
    Route::post('/userprofileReg/{id}',[UserInfoController::class,'store'])->middleware(['auth']); 
    Route::post('/userprofile/{id}',[UserInfoController::class,'update'])->middleware(['auth']); /*After email & password submitted */
    Route::post('/passchange/{id}',[UserInfoController::class,'changePass'])->middleware(['auth']);
    Route::post('/userprofileedit/{id}',[UserInfoController::class,'edit'])->middleware(['auth']);

    Route::get('/mycoursedetails/{id}',[CourseController::class,'courseDetailsForEnrUser'])->middleware(['auth']);
    Route::get('/mycoursecomment/{id}',[CourseController::class,'myCourseComment'])->middleware(['auth']);
    Route::post('/submitcmnt/{id}',[CourseController::class,'submiyCourseCmnt'])->middleware(['auth']);

    Route::get('/mydevshop',[ProductController::class,'mydevshop'])->middleware(['auth']);
    Route::get('/product_details/{id}',[ProductController::class,'productDetails'])->middleware(['auth']);
      Route::get('/Instructor', function () {
        return view('user.instructor.ins_register');
    })->middleware(['auth']);
/*Register User related Route*/


Route::middleware(['auth',OnlyInstructor::class])->group(function () {
/* Instructor */
    Route::resource('/admincourses', CourseController::class); // for create,update, delete Course
    Route::get('/Admincourses/list', [CourseController::class,'list']);

    Route::resource('/InsBlogs', InsPostController::class);
    Route::get('/Insblogs/list', [InsPostController::class,'list']);

    Route::resource('/InsWebinars', InsVideoController::class);
    Route::get('/Inswebinars/list', [InsVideoController::class,'list']);
/* Instructor */
});

/*  User Devcoin */
Route::get('/devs/list', [DevcoinController::class,'list']);
Route::get('/earncoin', [DevcoinController::class,'EarnCoin'])->middleware(['auth']);
Route::post('/Dev/{id}', [DevcoinController::class,'Coin']);
/*  User Devcoin */

/*  User Product Order */
Route::post('/shop/order', [OrderController::class,'store']);
Route::get('/Shop/list', [OrderController::class,'list']);
Route::Post('/order/receive/{id}', [OrderController::class,'received']);
/*  User Product Order */



require __DIR__.'/auth.php';
