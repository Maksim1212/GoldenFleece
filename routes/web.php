<?php

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

Route::get('/', 'PagesController@main');
Route::group(['prefix' => 'admin', 'middleware'=>['web','auth']], function(){
    Route::get('/', 'HomeController@index')->name('admin');
    Route::get('/admins/new', 'HomeController@show')->name('admins');
    Route::get('/admins/all', 'HomeController@showAll')->name('allAdmins');
    Route::post('/users', 'HomeController@activeUsers')->name('activeUsers');
    Route::get('/info', 'HomeController@showInfo')->name('info');
    Route::get('/edit/text/{id}', 'HomeController@showPageEditInfo')->name('editTextPage');
    Route::post('/edit/text', 'HomeController@editInfo')->name('editText');
    Route::get('/createLogo', 'HomeController@showPageCreateLogo')->name('pageCreateLogo');
    Route::post('/createLogo', 'HomeController@createLogo')->name('createLogo');
    Route::get('/deleteLogo/{id}', 'HomeController@deleteLogo')->name('deleteLogo');
    Route::get('/editLogo/{id}', 'HomeController@showEditLogoPage')->name('editLogoPage');
    Route::post('/editLogo', 'HomeController@editLogo')->name('editLogo');
    Route::get('/news', 'HomeController@showNewsPage')->name('newsa');
    Route::get('/createNews', 'HomeController@showCreateNewsPage')->name('createNewsPage');
    Route::post('/createNews', 'HomeController@createNews')->name('createNews');
    Route::get('/editNews/{id}', 'HomeController@showEditNewsPage')->name('editNewsPage');
    Route::get('/deleteNews/{id}', 'HomeController@deleteNews')->name('deletePage');
    Route::post('/editNews', 'HomeController@editNews')->name('editNews');
    Route::get('/gallery', 'HomeController@showPageGallery')->name('gallery');
    Route::get('/createFotoGallery', 'HomeController@showPageCreateFotoGallery')->name('createFotoGalleryPage');
    Route::post('/createFotoGallery', 'HomeController@createFotoGallery')->name('createFotoGalery');
    Route::get('editGallery/{id}','HomeController@showEditGalleryPage')->name('editGalleryPage');
    Route::get('deleteGallery/{id}','HomeController@deleteGallery')->name('deleteGallery');
    Route::post('editGallery','HomeController@editGallery')->name('editGallery');
    Route::get('/slides', 'HomeController@showSlidesPage')->name('slides');
    Route::get('/createSlidesPage', 'HomeController@showCreateSlidesPage')->name('createSlidesPage');
    Route::post('/createSlidesPage', 'HomeController@createSlide')->name('createSlide');
    Route::get('/editSlide/{id}', 'HomeController@showEditSlidePage')->name('editSlidePage');
    Route::get('/deleteSlide/{id}', 'HomeController@deleteSlide')->name('deleteSlide');
    Route::post('/editSlide', 'HomeController@editSlide')->name('editSlide');
    Route::get('/rooms', 'HomeController@showRoomsPage')->name('rooms');
    Route::get('/createRoom', 'HomeController@showCreateRoomPage')->name('createRoomPage');
    Route::post('/createRoom', 'HomeController@createRoom')->name('createRoom');
    Route::get('/editRoom/{id}', 'HomeController@showEditRoomPage')->name('editRoomPage');
    Route::post('/editRoom', 'HomeController@editRoom')->name('editRoom');
    Route::get('/deleteRoom/{id}', 'HomeController@deleteRoom')->name('deleteRoom');
    Route::get('/catigoriesDishes', 'HomeController@showCatigoriesDishes')->name('catigoriesDishes');
    Route::get('/createCatigory', 'HomeController@showCreateCatigoryPage')->name('createCatigoryPage');
    Route::post('/createCatigory', 'HomeController@createCatigory')->name('createCategory');
    Route::get('/editCategory/{id}', 'HomeController@showEditCategoryPage')->name('editCatigoryPage');
    Route::get('/deleteCategory/{id}', 'HomeController@deleteCategory')->name('deleteCatigory');
    Route::post('/editCategory', 'HomeController@editCategory')->name('editCategory');
    Route::get('/dishes', 'HomeController@showDishesPage')->name('dishes');
    Route::get('/createDishes', 'HomeController@showCreateDishesPage')->name('createDishesPage');
    Route::post('/createDishes', 'HomeController@createDishes')->name('createDishes');
    Route::get('/dishesImages/{id}', 'HomeController@showDishesImagesPage')->name('dishesImagesPage');
    Route::post('/createDishesImage', 'HomeController@createDishesImages')->name('createDishesImage');
    Route::get('/deleteImagesDishes/{id}', 'HomeController@deleteDishesImages')->name('deleteImagesDishes');
    Route::get('/editDishes/{id}', 'HomeController@showEditDishesPage')->name('editDishesPage');
    Route::post('/editDishes', 'HomeController@editDishes')->name('editDishes');
    Route::get('/deleteDishes/{id}', 'HomeController@deleteDishes')->name('deleteDishes');
    Route::get('/feedbacks', 'FeedbackController@showFeedbackPageAdmin')->name('feedbacksAdmin');
    Route::get('/activeFeedback/{id}', 'FeedbackController@activeFeedback')->name('activeFeedback');
    Route::get('/deleteFeedback/{id}', 'FeedbackController@deleteFeedback')->name('deleteFeedback');
    Route::get('/editFeedback/{id}', 'FeedbackController@showEditFeedbackPage')->name('editFeedbackPage');
    Route::post('/editFeedback', 'FeedbackController@editFeedback')->name('editFeedback');
    Route::group(['prefix' => 'reservation', 'middleware'=>['web','auth']], function(){
        Route::get('/deliveries', 'DeliveriesController@showDeliveriesPage')->name('deliveries');
        Route::get('/table', 'DeliveriesController@showTablePage')->name('table');
        Route::get('/active/{id}', 'DeliveriesController@activeTable')->name('activeTable');
        Route::get('/reject/{id}', 'DeliveriesController@rejectTable')->name('rejectTable');
        Route::get('/orderRooms', 'DeliveriesController@showOrderRoomsPage')->name('orderRoomsPage');
        Route::get('/activeRooms/{id}', 'DeliveriesController@activeRooms')->name('activeRooms');
        Route::get('/rejectRooms/{id}', 'DeliveriesController@rejectRooms')->name('rejectRooms');
        Route::get('/showOrder/{id}', 'DeliveriesController@showOrder')->name('showOrder');
        Route::get('/activeOrder/{id}', 'DeliveriesController@activeOrder')->name('activeOrder');
        Route::get('/rejectOrder/{id}', 'DeliveriesController@rejectOrder')->name('rejectOrder');
    });
});
Auth::routes();
//Route::get('/home', 'HomeController@index')->name('home');
Route::get('/restaurant', 'RestaurantTablesController@index')->middleware('web');
Route::post('/order','RestaurantTablesController@tableOrder')->name('orderTabels');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/restaurant', 'RestaurantTablesController@index');
Route::get('/hotel', 'HotelRoomsController@index');
Route::post('/hotel/order', 'HotelRoomsController@roomOrder')->name('room-order');
Route::post('/call/order', 'CallOrderController@callOrder')->name('call-order');
Route::get('/menu','PagesController@menu')->name('menu');
Route::get('/delivery','RestaurantDishesController@delivery')->name('delivery');
Route::get('/news','NewsEventsController@index')->name('news');
Route::get('/feedback','FeedbackController@showFeedbackPage')->name('feedback');
Route::get('/mainGallery','GalleryController@show')->name('mainGallery');
Route::get('/contacts','PagesController@contacts')->name('contacts');
Route::post('/createFeedback', 'FeedbackController@createFeedback')->name('createFeedback');
Route::get('/cart','PagesController@cart')->name('cart');
Route::get('/catalog/{id}', 'RestaurantDishesController@showDishes')->name('catalog');
Route::post('/addedGood', 'BasketController@addedInBasket');
Route::get('/basket', 'BasketController@showBasketPage');
Route::get('/deleteGood/{id}', 'BasketController@deleteGood');
Route::get('/deliveryEat', 'BasketController@delivery')->name('deliveryEat');
Route::post('/checkout', 'BasketController@checkout')->name('checkout');
Route::post('/updateGood', 'BasketController@updateGood');