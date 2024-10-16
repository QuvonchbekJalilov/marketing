<?php
// admin controller
use App\Http\Controllers\admin\auth\LoginController as AdminController;
use App\Http\Controllers\admin\PageController as AdminPageController;
use App\Http\Controllers\admin\ProviderController as AdminProviderController;
use App\Http\Controllers\admin\MarketerController as AdminMarketerController;
use App\Http\Controllers\admin\ClientController as AdminClientController;
use App\Http\Controllers\admin\LanguageController as AdminLanguageController;
use App\Http\Controllers\admin\CategoryController as AdminCategoryController;
use App\Http\Controllers\admin\ServiceController as AdminServiceController;
use App\Http\Controllers\admin\SkillController as AdminSkillController;
use App\Http\Controllers\admin\SectorController as AdminSectorController;

// provider controller
use App\Http\Controllers\provider\auth\AuthController as ProviderAuthController;
use App\Http\Controllers\provider\PageController as ProviderPageController;
use App\Http\Controllers\provider\auth\RegistrationController as ProviderRegistrationController;
use App\Http\Controllers\provider\TeamController as ProviderTeamController;
use App\Http\Controllers\provider\PortfoliosController as ProviderPortfoliosController;
use App\Http\Controllers\provider\ReviewController as ProviderReviewController;
use App\Http\Controllers\provider\AwardsController as ProviderAwardsController;
use App\Http\Controllers\provider\ServiceController as ProviderServiceController;
use App\Http\Controllers\provider\ContactController as ProviderContactController;
use App\Http\Controllers\provider\ManagerController as ProviderManagerController;

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\Awards\AwardsController;
use App\Http\Controllers\Contact\ContactController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\Managers\ManagerController;
use App\Http\Controllers\Portfolios\PortfoliosController;
use App\Http\Controllers\Providers\ProviderDashboardController;
use App\Http\Controllers\Providers\ProvidersController;
use App\Http\Controllers\ProviderSearchController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\Reviews\ReviewsController;
use App\Http\Controllers\Teams\TeamController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\MainController as AdminMainController;
use App\Http\Controllers\frontend\PageController;
use Illuminate\Support\Facades\Mail;



Route::get('/', [PageController::class, 'home'])->name('home');

/*****************************************************************************
 * Display Head routes
 * @author Jalilov Quvonchbek
 * admin routes
 *****************************************************************************/
//admin routes
Route::get('/admin/login', [AdminController::class, 'login'])->name('admin_login');
Route::post('/authenticate', [AdminController::class, 'authenticate'])->name('admin_authenticate');
Route::post('/logout', [AdminController::class, 'logout'])->name('admin_logout');
Route::get('/change/password', [AdminController::class, 'changePassword']);
Route::post('/change/password', [AdminController::class, 'changePasswordCheck']);

 Route::middleware(['checkAdmin:admin', 'auth'])->group(function () {
    Route::prefix('admin')->group(function () {
        Route::get('dashboard', [AdminPageController::class, 'index'])->name('admin.dashboard');
        Route::resource('providers', AdminProviderController::class);
        Route::resource('marketers', AdminMarketerController::class);
        Route::resource('clients', AdminClientController::class);
        Route::resource('languages', AdminLanguageController::class);
        Route::resource('categories', AdminCategoryController::class);
        Route::resource('services', AdminServiceController::class);
        Route::resource('skills', AdminSkillController::class);
        Route::resource('sectors', AdminSectorController::class);
    });
});

// /*****************************************************************************
//  * Display Head routes
//  * @author Doniyor Rajapov
//  *****************************************************************************/
// Route::get('/', [MainController::class, 'home'])->name('home');

// Route::get('/manager/invite', [ManagerController::class, 'invite'])->name('manager.invite');
// Route::post('/manager/add', [ManagerController::class, 'storemanger'])->name('mangager.store.provider');

Route::get('/providers', [PageController::class, 'pageProvider'])->name('providers');
Route::get('/marketers', [PageController::class, 'pageMarketers'])->name('marketers');
Route::get('/partners', [PageController::class, 'pagePartners'])->name('partners');

Route::get('/search-providers', [PageController::class, 'searchProviders'])->name('searchProviders');
Route::get('/search-marketers', [PageController::class, 'searchMarketers'])->name('searchMarketers');
Route::get('/search-partners', [PageController::class, 'searchPartners'])->name('searchPartners');

Route::get('/single-providers/{id}', [PageController::class, 'singleProviders'])->name('singleProviders');
Route::get('/single-marketers', [PageController::class, 'singleMarketers'])->name('singleMarketers');
Route::get('/single-partners', [PageController::class, 'singlePartners'])->name('singlePartners');
Route::get('/contacts', [PageController::class, 'contact'])->name('contacts');
Route::get('/single-reviews', [PageController::class, 'singleReviews'])->name('singleReviews');
Route::get('/search', [PageController::class, 'search'])->name('search');

// Loyiha ohirida olib tashlanadi, single-kerak emas.

// Auth (Autentifikatsiya) yo'nalishlari
Route::prefix('auth')->namespace('App\Http\Controllers\Auth')->group(function () {
    // Ro'l tanlash va yo'naltirish
    Route::get('/join', [RegisterController::class, 'showRoleSelectionForm'])->name('join');
    Route::get('/join/role/{role}', [RegisterController::class, 'handleRoleSelection'])->name('join.role');

    // Login, logout va parolni qayta tiklash yo'nalishlari
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login.form');
    Route::post('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::get('/password/reset', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
    Route::post('/password/email', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
    Route::get('/password/reset/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
    Route::post('/password/reset', [ResetPasswordController::class, 'reset'])->name('password.update');
});

/*****************************************************************************
 * Display Provider routes
 * @author Jalilov Quvonchbek
 *****************************************************************************/

Route::prefix('provider')->group(function () {
    Route::get('/register/company', [ProviderRegistrationController::class, 'showCompanyNameForm'])->name('providerRegisterStep1');
    Route::post('/register/company', [ProviderRegistrationController::class, 'handleCompanyName'])->name('providerRegisterStep1store');
    Route::get('/register/details', [ProviderRegistrationController::class, 'showCompanyDetailsForm'])->name('providerRegisterStep2');
    Route::post('/register/details', [ProviderRegistrationController::class, 'handleCompanyDetails'])->name('providerRegisterStep2store');
    Route::get('/register/manager', [ProviderRegistrationController::class, 'showManagerForm'])->name('providerRegisterStep3');
    Route::post('/register/manager', [ProviderRegistrationController::class, 'storeProviderWithCompany'])->name('providerRegisterStepstore');

    Route::get('/login', [ProviderAuthController::class, 'showProviderLoginForm'])->name('login.provider');
    Route::post('/login', [ProviderAuthController::class, 'providerLogin'])->name('provider.login');
    Route::post('/logout', [ProviderAuthController::class, 'logout'])->name('logout');


    Route::middleware(['checkProvider:provider', 'auth'])->group(function () {
        // Route::post('/providers-invite', [ManagerController::class, 'inviteProvider'])->name('providers.invite');
        Route::get('/dashboard', [ProviderPageController::class, 'dashboard'])->name('provider.dashboard');
        // Route::post('add-akills', [ProvidersController::class, 'addSkills'])->name('provider.add.skills');
        // // service
        Route::get('profile', [ProviderPageController::class, 'profile'])->name('providers.profile');

        Route::resource('service', ProviderServiceController::class);
        Route::resource('reviews', ProviderReviewController::class);
        Route::resource('provider', ProviderPageController::class);
        Route::resource('contacts', ProviderContactController::class);
        Route::resource('awards', ProviderAwardsController::class);
        Route::resource('portfolios', ProviderPortfoliosController::class);
        Route::resource('teams', ProviderTeamController::class);
        Route::resource('managers', ProviderManagerController::class);
        // Route::get('/managers/{id}/data', [ManagerController::class, 'getManager']);

    });
});

// Route::get('/providers/{provider_id}/{category_id}', [MainController::class, 'pageProviderService'])->name('services-providers');
// Route::get('/search', [MainController::class, 'search'])->name('search');
// /*****************************************************************************
//  * Display Marketer routes
//  * @author Doniyor Rajapov
//  *****************************************************************************/
// Route::prefix('marketer')->namespace('App\Http\Controllers')->group(function () {
//     Route::get('/login', [AuthController::class, 'showMarketerLoginForm'])->name('login.marketer');
//     Route::post('/login', [AuthController::class, 'marketerLogin'])->name('marketer.login');

//     // Marketer uchun boshqa yo'nalishlar (agar mavjud bo'lsa, qo'shing)
// });

// /*****************************************************************************
//  * Display Partner routes
//  * @author Doniyor Rajapov
//  *****************************************************************************/
// Route::prefix('partner')->namespace('App\Http\Controllers')->group(function () {
//     // Client login
//     Route::get('/login', [AuthController::class, 'showClientLoginForm'])->name('login.client');
//     Route::post('/login', [AuthController::class, 'clientLogin'])->name('client.login');

//     // Client uchun boshqa yo'nalishlar (agar mavjud bo'lsa, qo'shing)
// });

// /*****************************************************************************
//  * Display Admin routes
//  * @author Doniyor Rajapov
//  *****************************************************************************/
// // Route::prefix('admin')->namespace('App\Http\Controllers')->middleware('auth')->group(function () {
// //     Route::view('/dashboard', 'admin')->name('dashboard');
// //     Route::resource('services', ServicesController::class);
// //     Route::resource('providers', ProvidersController::class);
// //     Route::resource('categories', CategoriesController::class);
// //     Route::resource('contacts', ContactController::class);
// //     Route::resource('marketers', MarketersController::class);
// //     Route::resource('partners', PartnersController::class);
// //     Route::resource('awards', AwardsController::class);
// //     Route::resource('users', UsersController::class);
// //     Route::resource('reviews', ReviewsController::class);
// //     Route::resource('portfolios', PortfoliosController::class);
// //     Route::resource('teams', TeamController::class);
// //     Route::resource('managers', ManagerController::class);
// // });

// Route::get('/{lang}', function ($lang) {
//     session(['lang' => $lang]);

//     return back();
// })->where('lang', 'uz|ru');

Route::get('/test-email', function () {
    Mail::raw('This is a test email.', function ($message) {
        $message->to('jalilovquvonchbek4@gmail.com') // Change this to a valid recipient email
                ->subject('Test Email');
    });

    return 'Email sent!';
});

Route::get('/reviews/confirm/{id}', [ProviderReviewController::class, 'confirm'])->name('reviews.confirm');
