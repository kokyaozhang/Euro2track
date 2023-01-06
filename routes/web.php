<?php

use App\Http\Controllers\PostController;
use App\Http\Livewire\Teamusers;
use App\Http\Livewire\Users;
use App\Http\Livewire\Vendors;
use App\Models\Fieldequip;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Posts;
use \App\Http\Livewire\Fieldequips;
use Illuminate\Http\Request;
use Laravel\Jetstream\Http\Controllers\Inertia\TeamController;
use App\Http\Controllers\FileController;

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






Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(callback: function () {
    Route::get('/dashboard', function () {
        $matchThese = ['Status' => 'Active'];
        $data = Fieldequip::where($matchThese)->get();
        $num = $data->count();

        $data2 = \App\Models\Breakdown::all();
        $num2 = $data2->count();

        $data3 = \App\Models\Service::all();
        $num3 = $data3->count();

//return view with data =  num1, data 2 = num2 and data3 =  num3

        return view('dashboard',['data' => $num,'data2' => $num2,'data3' => $num3]);

    })->name('dashboard');
    Route::get('posts', Posts::class)->name('posts');

    Route::get('fieldequips/assets', Fieldequips::class)->name('assetequips');
    Route::get('report', \App\Http\Livewire\Reports::class)->name('report');
    Route::get('breakdowns', \App\Http\Livewire\Breakdowns::class)->name('breakdowns');
    Route::get('gcalibrations', \App\Http\Livewire\GCalibrations::class)->name('gcalibrations');
    Route::get('calibrations/{id}', \App\Http\Livewire\Services::class)->name('calibrations');
    Route::get('services/{id}', \App\Http\Livewire\Calibrations::class)->name('services');
    Route::get('chemical/{id}', \App\Http\Livewire\Chemicals::class)->name('chemical');
    Route::get('genservices', \App\Http\Livewire\GeneralServices::class)->name('genservices');
    Route::get('/general/1', Fieldequips::class)->name('fieldassets');
    Route::get('/general/2', Fieldequips::class)->name('fieldequips');
    Route::get('/general/3', Fieldequips::class)->name('fieldemodel');
    Route::get('/general/4', Fieldequips::class)->name('labassets');
    Route::get('/general/5', Fieldequips::class)->name('labequips');
    Route::get('/general/6', Fieldequips::class)->name('labmodel');
    Route::get('/general/7', Fieldequips::class)->name('labassetsc');
    Route::get('/general/8', Fieldequips::class)->name('labequipsc');
    Route::get('/general/9', Fieldequips::class)->name('labmodelc');
    Route::get('/users', \App\Http\Livewire\Teamusers::class)->name('users');
    Route::get('/vendors', \App\Http\Livewire\Vendors::class)->name('vendors');
    Route::get('/generalbreak/{id}', \App\Http\Livewire\GeneralBreakdowns::class)->name('generalbreak');
    Route::post('/idd',[\App\Http\Livewire\Fieldequips::class,'fimport']);
    Route::post('/ezz',[\App\Http\Livewire\Chemicals::class,'fimport']);
    Route::post('fieldequips-import',[Fieldequips::class.'import'])->name('fieldequips.import');
    Route::get('export/',[\App\Http\Livewire\Fieldequips::class,'export'])->name('export');
    Route::get('cexport/',[\App\Http\Livewire\Chemicals::class,'export'])->name('cexport');
    Route::get('dxport/',[\App\Http\Livewire\Fieldequips::class,'dxport'])->name('dxport');
    Route::get('pxport/',[\App\Http\Livewire\Fieldequips::class,'pxport'])->name('pxport');
    Route::get('mxport',[\App\Http\Livewire\Fieldequips::class,'mxport'])->name('mxport');
    Route::get('gxport',[\App\Http\Livewire\GeneralBreakdowns::class,'gxport'])->name('gxport');
    Route::get('cxport',[\App\Http\Livewire\Calibrations::class,'cxport'])->name('cxport');
    Route::get('/userList',[\App\Http\Controllers\StudentController::class,'userList']);
    Route::get('/urlFetch/{key}', [\App\Http\Controllers\StudentController::class,'userFetch']);
    Route::get('/index', function () {
        return view('index');
    });

    Route::get('/', function () {
        return view('auth.login');
    })->name('/');
    Route::get("/search",[Fieldequips::class,'search']);
    Route::get("/search5",[Fieldequips::class,'search2']);
    Route::get("/search1",[Vendors::class,'search']);
    Route::get("/search2",[Teamusers::class,'search']);
    Route::get("/search3",[\App\Http\Livewire\GeneralBreakdowns::class,'search']);
    Route::get("/search4",[\App\Http\Livewire\Breakdowns::class,'search']);
    Route::get("/search5",[\App\Http\Livewire\Services::class,'search']);
    Route::get("/search6",[\App\Http\Livewire\Calibrations::class,'search']);
    Route::get("/search7",[\App\Http\Livewire\GCalibrations::class,'search']);
    Route::get("/search8",[\App\Http\Livewire\GeneralServices::class,'search']);
    Route::get("/search9",[\App\Http\Livewire\Chemicals::class,'search']);

    Route::get("/uploadszz/{id}",\App\Http\Livewire\Breakdowns::class);
    Route::post("/uploadszz/{id}",[\App\Http\Livewire\Breakdowns::class, 'keep'])->name('file.keep');
    Route::post("/uploadsDD/{id}",[\App\Http\Livewire\GCalibrations::class, 'keep'])->name('file.keep2');
    Route::post("/uploadsCC/{id}",[\App\Http\Livewire\GCalibrations::class, 'keep'])->name('file.keep3');
// add route for mailcontroller
    Route::get('/send-mail', [\App\Http\Controllers\MailController::class, 'sendEmail'])->name('sendEmail');
    Route::get('/send-mail2', [\App\Http\Controllers\Mail2Controller::class, 'sendEmail2'])->name('sendEmail2');
    Route::get('/send-mail3', [\App\Http\Controllers\Mail3Controller::class, 'sendEmail3'])->name('sendEmail3');
    Route::get('/send-mail4', [\App\Http\Controllers\Mail4Controller::class, 'sendEmail4'])->name('sendEmail4');
    Route::get('/send-mail5', [\App\Http\Controllers\Mail5Controller::class, 'sendEmail5'])->name('sendEmail5');
    Route::get('/send-mail6', [\App\Http\Controllers\Mail6Controller::class, 'sendEmail6'])->name('sendEmail6');
    Route::get('/send-mail7', [\App\Http\Controllers\Mail7Controller::class, 'sendEmail7'])->name('sendEmail7');
    Route::get('lara-livewire-file-upload', function () {
        return view('welcome');
    });



});

/*Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('posts', function () {
        return view(Posts::class);
    })->name('posts');
});*/


Route::resource('photo', \App\Http\Controllers\PhotoController::class)->middleware('auth');


Route::get('/cronsStartToWorkEmailSend', function () {
    \Artisan::call('auto:servicemail');
    return true;
});
Route::get('/croncalib', function () {
    \Artisan::call('auto:calibrationmail');
    return true;
});


