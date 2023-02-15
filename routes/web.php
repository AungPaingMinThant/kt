<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SimplePayController;

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

Route::get('/superl0g1n','App\Http\Controllers\AdminLoginController@login');
Route::post('/authlogin','App\Http\Controllers\AdminLoginController@authLogin');

Route::get('/admin/dashboard','App\Http\Controllers\AdminController@dashboard');

Route::get('/admin/categories','App\Http\Controllers\CategoryController@categories');
Route::get('/admin/category/add','App\Http\Controllers\CategoryController@categoryAdd');
Route::post('/admin/category/store','App\Http\Controllers\CategoryController@categoryStore');
Route::post('/admin/category/delete','App\Http\Controllers\CategoryController@categoryDelete');
Route::get('/admin/category/edit/{category_id}','App\Http\Controllers\CategoryController@categoryEdit');
Route::post('/admin/category/update','App\Http\Controllers\CategoryController@categoryUpdate');

Route::get('/admin/blog','App\Http\Controllers\BlogController@blog');
Route::get('/admin/blog/add','App\Http\Controllers\BlogController@blogAdd');
Route::post('/admin/blog/store','App\Http\Controllers\BlogController@blogStore');
Route::post('/admin/blog/delete','App\Http\Controllers\BlogController@blogDelete');
Route::get('/admin/blog/edit/{blog_id}','App\Http\Controllers\BlogController@blogEdit');
Route::post('/admin/blog/update','App\Http\Controllers\BlogController@blogUpdate');

Route::get('/admin/report','App\Http\Controllers\ReportController@report');
Route::get('/admin/report/add','App\Http\Controllers\ReportController@reportAdd');
Route::post('/admin/report/store','App\Http\Controllers\ReportController@reportStore');
Route::post('/admin/report/delete','App\Http\Controllers\ReportController@reportDelete');
Route::get('/admin/report/edit/{report_id}','App\Http\Controllers\ReportController@reportEdit');
Route::post('/admin/report/update','App\Http\Controllers\ReportController@reportUpdate');

Route::get('/admin/pagelist/','App\Http\Controllers\PageController@pageList');
Route::get('/admin/page/mbanking/edit','App\Http\Controllers\AdminMBankingController@mbanking');
Route::post('/admin/mbanking/banner/update','App\Http\Controllers\AdminMBankingController@mbankingBanner');
Route::post('/admin/mbanking/tagline/update','App\Http\Controllers\AdminMBankingController@mbankingTagline');
Route::post('/admin/mbanking/fact/update','App\Http\Controllers\AdminMBankingController@mbankingFact');

Route::get('/admin/logout','App\Http\Controllers\AdminController@logout');

Route::get('/share-post', 'App\Http\Controllers\SharePostController@share');

Route::get('/mobile-banking','App\Http\Controllers\Digital\MobileBankingController@mbindex');
Route::get('/internet-banking','App\Http\Controllers\Digital\InternetBankingController@index');
Route::get('/debit-card','App\Http\Controllers\Digital\DebitCardController@index');
Route::get('/credit-card','App\Http\Controllers\Digital\CreditCardController@index');
Route::get('/ecommerce','App\Http\Controllers\Digital\EcommerceController@index');
Route::get('/sms-alert','App\Http\Controllers\Digital\SMSAlertController@index');
Route::get('/prepaid-card','App\Http\Controllers\Digital\PrepaidCardController@index');
Route::get('/simple-pay','App\Http\Controllers\Digital\SimplePayController@index');
Route::get('/reset-pin','App\Http\Controllers\Digital\ResetPinController@index');
Route::get('/corporate-internet-banking','App\Http\Controllers\Digital\CorporateInternetBankingController@index');
Route::get('/digital-secure','App\Http\Controllers\Digital\DigitalSecureController@index');
Route::get('/frequently-used-digital','App\Http\Controllers\Digital\FrequentlyUsedDigitalController@index');
Route::get('/pos','App\Http\Controllers\Digital\POSController@index');
Route::get('/aya-pay','App\Http\Controllers\Digital\AyaPayController@index');
Route::get('/atm','App\Http\Controllers\Digital\ATMController@index');

Route::get('/insurance/health','App\Http\Controllers\Insurance\HealthInsuranceController@index');
Route::get('/insurance/motor','App\Http\Controllers\Insurance\MotorInsuranceController@index');
Route::get('/insurance/fire','App\Http\Controllers\Insurance\FireInsuranceController@index');
Route::get('/insurance/personal-accident','App\Http\Controllers\Insurance\PAInsuranceController@index');
Route::get('/insurance/travel/aya-go','App\Http\Controllers\Insurance\AYAGOInsuranceController@index');
Route::get('/insurance/travel/aya-joy','App\Http\Controllers\Insurance\AYAJoyInsuranceController@index');
Route::get('/insurance/life/universal','App\Http\Controllers\Insurance\LifeInsuranceController@universalIndex');
Route::get('/insurance/life/education','App\Http\Controllers\Insurance\LifeInsuranceController@educationIndex');
Route::get('/insurance/life/one-health-solution-individual-plan','App\Http\Controllers\Insurance\LifeInsuranceController@oneHealthIndex');
Route::get('/insurance/life/short-term','App\Http\Controllers\Insurance\LifeInsuranceController@shorttermIndex');

Route::get('/account-saving/call-deposit','App\Http\Controllers\AccountSaving\CallDepositController@index');
Route::get('/account-saving/call-deposit/premium-call-deposit','App\Http\Controllers\AccountSaving\CallDepositController@premiumIndex');
Route::get('/account-saving/call-deposit/new-business-call','App\Http\Controllers\AccountSaving\CallDepositController@newBusinessCallIndex');
Route::get('/account-saving/current-deposit','App\Http\Controllers\AccountSaving\CurrentDepositController@index');
Route::get('/account-saving/current-deposit/regular-current-account','App\Http\Controllers\AccountSaving\CurrentDepositController@RegularIndex');
Route::get('/account-saving/current-deposit/new-business-current-account','App\Http\Controllers\AccountSaving\CurrentDepositController@newBusinessIndex');
Route::get('/account-saving/current-deposit/seafarer-acount','App\Http\Controllers\AccountSaving\CurrentDepositController@seafererIndex');
Route::get('/account-saving/current-deposit/retail-fca-current','App\Http\Controllers\AccountSaving\CurrentDepositController@retailFCAIndex');
Route::get('/account-saving/fixed-deposit','App\Http\Controllers\AccountSaving\FixedDepositController@index');
Route::get('/account-saving/saving-deposit','App\Http\Controllers\AccountSaving\SavingDepositController@index');
Route::get('/account-saving/saving-deposit/aya-regular-saving','App\Http\Controllers\AccountSaving\SavingDepositController@regularSavingIndex');
Route::get('/account-saving/saving-deposit/aya-maximizer-saving','App\Http\Controllers\AccountSaving\SavingDepositController@maximizerSavingIndex');
Route::get('/account-saving/saving-deposit/aya-loyal-saving','App\Http\Controllers\AccountSaving\SavingDepositController@loyalSavingIndex');
Route::get('/account-saving/saving-deposit/ngwe-toe-mae-shwe-o','App\Http\Controllers\AccountSaving\SavingDepositController@shweOindex');
Route::get('/account-saving/saving-deposit/aya-su-buu','App\Http\Controllers\AccountSaving\SavingDepositController@suBuuIndex');

Route::get('/premium-banking','App\Http\Controllers\PremiumBankingController@index');

Route::get('/remittance/local','App\Http\Controllers\RemittanceController@localIndex');
Route::get('/remittance/international','App\Http\Controllers\RemittanceController@interIndex');
Route::get('/remittance/payment','App\Http\Controllers\RemittanceController@paymentIndex');



// contact-us