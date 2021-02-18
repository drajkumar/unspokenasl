<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\IndexController;
use App\Http\Controllers\AboutusController;
use App\Http\Controllers\OurserviceController;
use App\Http\Controllers\RequestController;
use App\Http\Controllers\JoinourteamController;
use App\Http\Controllers\BlogController;




//----- Route for admin ------//
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\SettingAdminController;
use App\Http\Controllers\Admin\CommonPageController;
use App\Http\Controllers\Admin\ServicefaqagencController;
use App\Http\Controllers\Admin\AboutusadminController;
use App\Http\Controllers\Admin\ContactusadminController;
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

Route::get('/', [IndexController::class, 'index']);

//----About us -----//

Route::get('/about-unspoken', [AboutusController::class, 'aboutus']);

Route::get('/the-unspoken-promise', [AboutusController::class, 'whyus']);

// ---- Our Service -----//

Route::get('/our-services', [OurserviceController::class, 'ourservice']);

Route::get('/white-labeling', [OurserviceController::class, 'agencies']);

Route::get('/faq', [OurserviceController::class, 'faq']);

Route::get('/service/{id}/{title}', [OurserviceController::class, 'servicepagedynamic']);



//----- Request ----//

Route::get('/request-services', [RequestController::class, 'requestservices']);

Route::get('/contact-us', [RequestController::class, 'contactus']);

//---- Join our team ----//
Route::get('/join-us', [JoinourteamController::class, 'joinus']);

Route::get('/application', [JoinourteamController::class, 'application']);


Route::get('/unspoken-thoughts', [BlogController::class, 'blog']);

Auth::routes();



Route::get('admin/home', [HomeController::class, 'index'])->name('home');

Route::get('admin/addslider', [HomeController::class, 'addslider']);

Route::get('admin/addhomemodule', [HomeController::class, 'addhomemodule']);

Route::get('admin/slideredit/{id}', [HomeController::class, 'editslider']);

Route::get('admin/homepagemodule', [HomeController::class, 'viewhomepagemodule']);

Route::get('admin/homemodule/{id}', [HomeController::class, 'edithomepagemodule']);

Route::get('admin/clientsliderview', [HomeController::class, 'clientsliderview']);

Route::post('admin/cslider', [HomeController::class, 'storeclientslider'])->name('storeclientslider.submit');

Route::post('admin/cslideredit', [HomeController::class, 'editclientimg'])->name('editclientimg.submit');

Route::post('admin/csliderdelete', [HomeController::class, 'deleteclintsl'])->name('deleteclintsl.submit');

Route::get('admin/service', [SettingAdminController::class, 'index'])->name('service');

Route::get('admin/servicepagemoduleview', [SettingAdminController::class, 'servicepagemoduleview']);

Route::get('admin/editpagemodule/{id}', [SettingAdminController::class, 'editpagemodule']);

Route::post('admin/pageintroedit', [CommonPageController::class, 'editintropages'])->name('pageintroedit.submit');

Route::post('admin/storepagemodule', [CommonPageController::class, 'storepagemodule'])->name('storepagemodule.submit');

Route::post('admin/updatepagemodule', [CommonPageController::class, 'editpagemodule'])->name('editpagemodule.submit');

Route::post('admin/pagemoduledelete', [CommonPageController::class, 'deletepagemodule'])->name('pagemoduledelete.submit');

Route::get('admin/serviceallview', [SettingAdminController::class, 'serviceallview']);

Route::post('admin/service', [SettingAdminController::class, 'storeservice'])->name('service.submit');

Route::post('admin/editservice', [SettingAdminController::class, 'editservice'])->name('editservice.submit');

Route::get('admin/servicemoduleview/{id}', [SettingAdminController::class, 'servicemoduleview']);

Route::post('admin/storeservicemodule', [SettingAdminController::class, 'storeservicemodule'])->name('storeservicemodule.submit');

Route::get('admin/editservicemoduleview/{sid}/{smid}', [SettingAdminController::class, 'editservicemoduleview']);

Route::post('admin/editservicemodulestore', [SettingAdminController::class, 'editservicemodulestore'])->name('editservicemodulestore.submit');

Route::post('admin/deleteservicemodule', [SettingAdminController::class, 'deleteservicemodule'])->name('deleteservicemodule.submit');

Route::get('admin/servicesetting/{sid}', [SettingAdminController::class, 'servicesettingview']);

Route::post('admin/storeservicesetting', [SettingAdminController::class, 'storeservicesetting'])->name('storeservicesetting.submit');

Route::post('admin/editservicesettingstore', [SettingAdminController::class, 'editservicesettingstore'])->name('editservicesettingstore.submit');

Route::post('admin/deleteservicesetting', [SettingAdminController::class, 'deleteservicesetting'])->name('deleteservicesetting.submit');

Route::get('admin/agencies', [ServicefaqagencController::class, 'agenciesview']);

Route::get('admin/addagencies', [ServicefaqagencController::class, 'storeagencies']);

Route::get('admin/editagencies/{id}', [ServicefaqagencController::class, 'updateagencies']);

Route::get('admin/faq', [ServicefaqagencController::class, 'faqview']);

Route::get('admin/questionandanswerview', [ServicefaqagencController::class, 'quesandansview']);

Route::get('admin/question_and_answer', [ServicefaqagencController::class, 'queans']);

Route::post('admin/storequestion', [ServicefaqagencController::class, 'storequeans'])->name('storequeans.submit');

Route::get('admin/editquestion_and_answer/{id}', [ServicefaqagencController::class, 'queseditview']);

Route::post('admin/updatequestion', [ServicefaqagencController::class, 'updatequeans'])->name('updatequeans.submit');

Route::post('admin/removequestion', [ServicefaqagencController::class, 'deletequesans'])->name('deletequesans.submit');

Route::get('admin/aboutus', [AboutusadminController::class, 'viewaboutus']);

Route::post('admin/updateaboutus', [AboutusadminController::class, 'editaboutus'])->name('editaboutus.submit');

Route::get('admin/contactus', [ContactusadminController::class, 'contactusview']);

Route::post('admin/contactus', [ContactusadminController::class, 'storecontactinfo'])->name('storecontactinfo.submit');

Route::post('admin/contactusimage', [ContactusadminController::class, 'editcontactmodule'])->name('editcontactmodule.submit');

Route::get('admin/sociallink', [ContactusadminController::class, 'sociallink']);

Route::post('admin/editsociallink', [ContactusadminController::class, 'updatedsociallink'])->name('updatedsociallink.submit');

Route::get('admin/',function() {
    return Redirect::to('/admin/login');
}); 
