<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\LocationController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\AssignController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\InjectionController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\VaccineTypeController;
use App\Http\Controllers\Admin\ManufactureController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\PriorityGroupController;
use App\Http\Controllers\Admin\StatisticController;
use App\Http\Controllers\Admin\VaccinationSiteController;
use App\Http\Controllers\Admin\VaccineController;
use App\Http\Controllers\Citizen\ReactionStatusController;
use App\Http\Controllers\Citizen\RegisterPersonController;
use App\Http\Controllers\Guest\IndexController;

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

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';

//Get location
Route::prefix('locations')->namespace('Locations')->name('locations.')->group(function () {
    Route::get('/', [LocationController::class, 'index'])->name('location');
    Route::post('/get-district-by-province', [LocationController::class, 'getDistrict'])->name('get-district');
    Route::post('/get-ward-by-district', [LocationController::class, 'getWard'])->name('get-ward');
    Route::post('/get-site-by-ward', [LocationController::class, 'getSite'])->name('get-site');
    Route::get('/wards/export/{id}', [LocationController::class, 'export'])->name('export-ward');
});

//User: ADMIN
Route::prefix('admin')->namespace('Admin')->middleware(['web', 'auth', 'role:admin|vaccination admin'])
    ->name('admin.')->group(function () {

        // Route::get('/', function () {
        //     return view('admin.index');
        // })->name('index');

        Route::get('/', [StatisticController::class, 'index'])->name('index');

        Route::prefix('account')->namespace('Account')->name('account.')->middleware(['can:accounts.admin'])->group(function () {

            Route::get('/', [UserController::class, 'accountAdmin'])->name('account');
            Route::get('/update/{id}', [UserController::class, 'editAccountAdmin'])->name('edit');
            Route::patch('/update/{id}', [UserController::class, 'updateAccountAdmin'])->name('update');
            Route::get('/change-password', [UserController::class, 'showChangePasswordAdmin'])->name('show-change-password');
            Route::post('/change-password', [UserController::class, 'changePasswordAdmin'])->name('change-password');
        });

        Route::prefix('permissions')->namespace('Permissions')->name('permissions.')->middleware(['can:assign.*'])->group(function () {

            Route::get('/role', [RoleController::class, 'index'])->name('role');
            Route::get('/fetch-role', [RoleController::class, 'fetchRole'])->name('fetch-role');
            Route::post('/create-role', [RoleController::class, 'store'])->name('store-role');
            Route::get('/edit-role/{id}', [RoleController::class, 'edit'])->name('edit-role');
            Route::patch('/update-role/{id}', [RoleController::class, 'update'])->name('update-role');
            Route::delete('/delete-role/{id}', [RoleController::class, 'delete'])->name('delete-role');

            Route::get('/', [PermissionController::class, 'index'])->name('permission');
            Route::get('/fetch-permission', [PermissionController::class, 'fetchPermission'])->name('fetch-permission');
            Route::post('/create-permission', [PermissionController::class, 'store'])->name('store-permission');
            Route::get('/edit-permission/{id}', [PermissionController::class, 'edit'])->name('edit-permission');
            Route::patch('/update-permission/{id}', [PermissionController::class, 'update'])->name('update-permission');
            Route::delete('/delete-permission/{id}', [PermissionController::class, 'delete'])->name('delete-permission');

            Route::get('/user-role', [AssignController::class, 'index'])->name('user-role');
            Route::get('/role-permission', [AssignController::class, 'rolePermission'])->name('role-permission');
            Route::get('/assign-permission/{id}', [AssignController::class, 'assignPermission'])->name('assign-permission');
            Route::patch('/assign-permission/{id}', [AssignController::class, 'insertPermission'])->name('insert-permission');
            Route::get('/assign-role/{id}', [AssignController::class, 'assignRole'])->name('assign-role');
            Route::patch('/assign-role/{id}', [AssignController::class, 'insertRole'])->name('insert-role');
        });

        Route::prefix('vaccines')->namespace('Vaccines')->name('vaccines.')->middleware(['can:vaccines.*'])->group(function () {
            Route::get('/', [VaccineController::class, 'index'])->name('index');
            Route::get('/create', [VaccineController::class, 'create'])->name('create');
            Route::post('/create', [VaccineController::class, 'store'])->name('store');
            Route::get('/detail/{id}', [VaccineController::class, 'show'])->name('show');
            Route::get('/update/{id}', [VaccineController::class, 'edit'])->name('edit');
            Route::patch('/update/{id}', [VaccineController::class, 'update'])->name('update');
            Route::delete('/delete/{id}', [VaccineController::class, 'delete'])->name('delete');
        });

        Route::prefix('vaccine-types')->namespace('Vaccine-types')->name('vaccine-types.')->middleware(['can:vaccine-types.*'])->group(function () {
            Route::get('/', [VaccineTypeController::class, 'index'])->name('index');
            Route::get('/fetch-vaccine-type', [VaccineTypeController::class, 'fetchVaccineType'])->name('fetch-vaccine-type');
            Route::get('/search-vaccine-type', [VaccineTypeController::class, 'searchVaccineType'])->name('search-vaccine-type');
            Route::post('/create-vaccine-type', [VaccineTypeController::class, 'store'])->name('store-vaccine-type');
            Route::get('/edit-vaccine-type/{id}', [VaccineTypeController::class, 'edit'])->name('edit-vaccine-type');
            Route::patch('/update-vaccine-type/{id}', [VaccineTypeController::class, 'update'])->name('update-vaccine-type');
            Route::delete('/delete-vaccine-type/{id}', [VaccineTypeController::class, 'delete'])->name('delete-vaccine-type');
        });

        Route::prefix('vaccination-sites')->namespace('Vaccination-sites')->name('vaccination-sites.')->middleware(['can:sites.*'])->group(function () {
            Route::get('/', [VaccinationSiteController::class, 'index'])->name('index');
            Route::get('/create', [VaccinationSiteController::class, 'create'])->name('create');
            Route::post('/create', [VaccinationSiteController::class, 'store'])->name('store');
            Route::get('/update/{id}', [VaccinationSiteController::class, 'edit'])->name('edit');
            Route::patch('/update/{id}', [VaccinationSiteController::class, 'update'])->name('update');
            Route::delete('/delete/{id}', [VaccinationSiteController::class, 'delete'])->name('delete');
        });

        Route::prefix('categories')->namespace('Categories')->name('categories.')->middleware(['can:categories.*'])->group(function () {
            Route::get('/', [CategoryController::class, 'index'])->name('index');
            Route::get('/fetch', [CategoryController::class, 'fetch'])->name('fetch');
            Route::post('/create', [CategoryController::class, 'store'])->name('store');
            Route::get('/edit/{id}', [CategoryController::class, 'edit'])->name('edit');
            Route::patch('/update/{id}', [CategoryController::class, 'update'])->name('update');
            Route::delete('/delete/{id}', [CategoryController::class, 'delete'])->name('delete');
        });

        Route::prefix('posts')->namespace('Posts')->name('posts.')->middleware(['can:posts.*'])->group(function () {
            Route::get('/', [PostController::class, 'index'])->name('index');
            Route::get('/create', [PostController::class, 'create'])->name('create');
            Route::post('/create', [PostController::class, 'store'])->name('store');
            Route::get('/update/{id}', [PostController::class, 'edit'])->name('edit');
            Route::patch('/update/{id}', [PostController::class, 'update'])->name('update');
            Route::get('/delete/{id}', [PostController::class, 'destroy'])->name('destroy');
            Route::delete('/delete/{id}', [PostController::class, 'delete'])->name('delete');
            Route::get('/show/{id}', [PostController::class, 'show'])->name('show');
            Route::get('/unconfirmed', [PostController::class, 'unconfirmed'])->name('unconfirmed');
            Route::post('/accept-post', [PostController::class, 'acceptPost'])->name('accept-post');
        });

        Route::prefix('priority-groups')->namespace('Priority-groups')->name('priority-groups.')->middleware(['can:priority-groups.*'])->group(function () {

            Route::get('/', [PriorityGroupController::class, 'index'])->name('index');
            Route::get('/fetch', [PriorityGroupController::class, 'fetch'])->name('fetch');
            Route::get('/search', [PriorityGroupController::class, 'search'])->name('search');
            Route::post('/create', [PriorityGroupController::class, 'store'])->name('store');
            Route::get('/edit/{id}', [PriorityGroupController::class, 'edit'])->name('edit');
            Route::patch('/update/{id}', [PriorityGroupController::class, 'update'])->name('update');
            Route::delete('/delete/{id}', [PriorityGroupController::class, 'delete'])->name('delete');
        });

        Route::prefix('manufactures')->namespace('Manufactures')->name('manufactures.')->middleware(['can:manufactures.*'])->group(function () {
            Route::get('/', [ManufactureController::class, 'index'])->name('index');
            Route::get('/create', [ManufactureController::class, 'create'])->name('create');
            Route::post('/create', [ManufactureController::class, 'store'])->name('store');
            Route::get('/update/{id}', [ManufactureController::class, 'edit'])->name('edit');
            Route::patch('/update/{id}', [ManufactureController::class, 'update'])->name('update');
            Route::delete('/delete/{id}', [ManufactureController::class, 'delete'])->name('delete');
        });

        Route::prefix('injections')->namespace('Injection')->name('injections.')->middleware(['can:injections.*'])->group(function () {
            Route::get(
                '/registration-unconfirmed',
                [InjectionController::class, 'vaccineRegistrationUnconfirmed']
            )->name('registration-unconfirmed');
            Route::get(
                '/registration-confirmed',
                [InjectionController::class, 'vaccineRegistrationConfirmed']
            )->name('registration-confirmed');
            Route::post(
                '/accept-vaccine-registration',
                [InjectionController::class, 'acceptVaccineRegistraction']
            )->name('accept-vaccine-registration');
            Route::get(
                '/show-registration/{id}',
                [InjectionController::class, 'showVaccineRegistraction']
            )->name('show-registration');

            Route::get('/search-registration', function () {
                return view('admin.injections.registrations.search-registration');
            })->name('search-registration');
            Route::post(
                '/searching-registration',
                [InjectionController::class, 'searchRegistration']
            )->name('searching-registration');
            Route::get('/result-registration', function () {
                return view('admin.injections.registrations.result-registration');
            })->name('result-registration');

            Route::get('/search-vaccination-status', function () {
                return view('admin.injections.vaccinations.search-vaccination');
            })->name('search-vaccination-status');
            Route::post(
                '/result-vaccination-status',
                [InjectionController::class, 'resultVaccination']
            )->name('result-vaccination-status');

            Route::get(
                '/make-certificate',
                [InjectionController::class, 'makeCertificate']
            )->name('make-certificate');
            Route::post(
                '/make-certificate',
                [InjectionController::class, 'storeCertificate']
            )->name('store-certificate');

            Route::get('print-certificate/{id}', [InjectionController::class, 'printCertificate'])->name('print-certificate');

            Route::get('/edit-dose/{id}', [InjectionController::class, 'editDose'])->name('edit-dose');
            Route::patch('/update-dose/{id}', [InjectionController::class, 'updateDose'])->name('update-dose');

            Route::get('/create-vaccination-info', [InjectionController::class, 'createInfo'])->name('create-vaccination-info');
            Route::post('/store-vaccination-info', [InjectionController::class, 'storeInfo'])->name('store-vaccination-info');
        });

        Route::prefix('statisticals')->namespace('Statisticals')->name('statisticals.')->middleware(['can:statisticals.*'])->group(function () {
            Route::get('/district/Ninh-Kieu', [StatisticController::class, 'districtNk'])->name('district-ninh-kieu');
            Route::get('/district/O-Mon', [StatisticController::class, 'districtOm'])->name('district-o-mon');
            Route::get('/district/Binh-Thuy', [StatisticController::class, 'districtBt'])->name('district-binh-thuy');
            Route::get('/district/Cai-Rang', [StatisticController::class, 'districtCr'])->name('district-cai-rang');
            Route::get('/district/Thot-Not', [StatisticController::class, 'districtTn'])->name('district-thot-not');
            Route::get('/district/Vinh-Thanh', [StatisticController::class, 'districtVt'])->name('district-vinh-thanh');
            Route::get('/district/Co-Do', [StatisticController::class, 'districtCd'])->name('district-co-do');
            Route::get('/district/Phong-Dien', [StatisticController::class, 'districtPd'])->name('district-phong-dien');
            Route::get('/district/Thoi-Lai', [StatisticController::class, 'districtTl'])->name('district-thoi-lai');
        });

        Route::prefix('users')->namespace('users')->name('users.')->middleware(['can:users.*'])->group(function () {
            Route::get('/', [UserController::class, 'listUser'])->name('index');
            Route::get('/export', [UserController::class, 'export'])->name('export');
            Route::post('/import', [UserController::class, 'import'])->name('import');
        });
    });

//User: GUEST
Route::prefix('/')->namespace('Guest')->name('guest.')->group(function () {

    Route::get('/', [IndexController::class, 'index'])->name('index');

    Route::get('/vaccine', [IndexController::class, 'indexVaccine'])->name('vaccine');

    Route::get('/vaccine-detail/{id}', [IndexController::class, 'showVaccine'])->name('vaccine-detail');

    Route::get('/vaccine-registration-process', function () {
        return view('guest.process.registration');
    })->name('registration-process');

    Route::get('/vaccination-process', function () {
        return view('guest.process.vaccination');
    })->name('vaccination-process');
});

//User: CITIZEN
Route::prefix('citizen')->namespace('Citizen')->middleware(['web', 'auth', 'role:citizen'])
    ->name('citizen.')->group(function () {

        Route::prefix('user')->namespace('User')->name('user.')->middleware(['can:accounts.user'])->group(function () {

            Route::get('/account', [UserController::class, 'accountUser'])->name('user-account');
            Route::get('/update-account/{id}', [UserController::class, 'editAccountUser'])->name('edit-account');
            Route::patch('/update-account/{id}', [UserController::class, 'updateAccountUser'])->name('update-account');
            Route::get('/change-password', [UserController::class, 'showChangePasswordUser'])->name('show-change-password');
            Route::post('/change-password', [UserController::class, 'changePasswordUser'])->name('user-change-password');

            Route::get('/registration-status', [UserController::class, 'registrationStatus'])->name('registration-status');

            Route::get('/certificate', [UserController::class, 'showCertificate'])->name('certificate');
            Route::get('/vaccine-passport', [UserController::class, 'showVaccinePassport'])->name('vaccine-passport');

            Route::get('/list-reaction-status', [ReactionStatusController::class, 'index'])->name('list-reaction-status');
            Route::get('/create-reaction-status', [ReactionStatusController::class, 'create'])->name('create-reaction-status');
            Route::post('/create-reaction-status', [ReactionStatusController::class, 'store'])->name('store-reaction-status');
            Route::get('/update-reaction-status/{id}', [ReactionStatusController::class, 'edit'])->name('edit-reaction-status');
            Route::patch('/update-reaction-status/{id}', [ReactionStatusController::class, 'update'])->name('update-reaction-status');
        });

        Route::prefix('registration')->namespace('Registration')->name('registration.')->middleware(['can:citizen.registration'])->group(function () {
            Route::get('/register-person', [RegisterPersonController::class, 'index'])->name('register-person');
            Route::post('/store-register-person', [RegisterPersonController::class, 'register'])->name('store-register-person');
            Route::get('/successful', function () {
                return view('citizen.user.successful');
            })->name('successful');
        });
    });
