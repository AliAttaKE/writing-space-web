<?php


use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;

use App\Http\Controllers\IndexController;
use App\Http\Controllers\ProfileController;

use App\Http\Controllers\Backend\CmsWebsite\CmsWebsiteController;

use App\Http\Controllers\Backend\Admin\RoleController;
use App\Http\Controllers\Backend\Admin\AdminController;
use App\Http\Controllers\Backend\Admin\RoleSetupController;
use App\Http\Controllers\Backend\Admin\PermissionController;
use App\Http\Controllers\Backend\Admin\UserManagementController;
use App\Http\Controllers\Backend\Admin\ConnectController;
use App\Http\Controllers\Backend\Admin\EmailController;
use App\Http\Controllers\Backend\Admin\LibrarayController;
use App\Http\Controllers\Backend\Admin\Service_TypeController;
use App\Http\Controllers\Backend\Admin\RestrictionController;
use App\Http\Controllers\Backend\Admin\AcademicController;
use App\Http\Controllers\Backend\Admin\CouponController;
use App\Http\Controllers\Backend\Admin\Paper_TermController;
use App\Http\Controllers\Backend\Admin\Subtime_LimitController;
use App\Http\Controllers\Backend\Admin\BlogController;
use App\Http\Controllers\Backend\Admin\PaperFormatController;
use App\Http\Controllers\Backend\Admin\LanguageController;
use App\Http\Controllers\Backend\Admin\SubjectController;
use App\Http\Controllers\Backend\Admin\FolderController;
use App\Http\Controllers\Backend\Admin\FileController;
use App\Http\Controllers\Backend\Admin\InvocieController;
use App\Http\Controllers\Backend\Admin\Email_TypeController;
use App\Http\Controllers\Backend\Admin\CustomerDataController;
use App\Http\Controllers\Backend\Admin\OrderManagement\PlaceOrderController;
use App\Http\Controllers\Backend\Admin\Subscription\AddSubscriptionController;
use App\Http\Controllers\Backend\Admin\CustomerManagementController;
use App\Http\Controllers\Backend\Admin\Message\MessageController;
use App\Http\Controllers\Backend\Admin\Subscription\CustomSettingController;
use App\Http\Controllers\Backend\Admin\CustomInvoice\CustomInvoiceController;
use App\Http\Controllers\Backend\Admin\Feedback\FeedbackController;
use App\Http\Controllers\Backend\Admin\PromotionController;
use App\Http\Controllers\Backend\Admin\ForgotPasswordController;
use App\Http\Controllers\Backend\Admin\ResetPasswordController;
use App\Http\Controllers\Backend\Admin\SystemConfigurationController;

use App\Http\Controllers\Backend\Admin\PakageLimitController;
use App\Http\Controllers\Backend\Admin\AddOnController;


use App\Http\Controllers\Backend\Customer\CustomerController;
use App\Http\Controllers\Backend\Customer\Payment\PaymentController;
use App\Http\Controllers\Backend\Customer\OrderManagement\CustomerPlaceOrderController;
use App\Http\Controllers\Backend\Customer\CustomerLibraryManagement\LibraryManagmentController;
use App\Http\Controllers\Backend\Customer\MessageController\MessageManagementController;
use App\Http\Controllers\Backend\Customer\BrandAmbassadorController;

use App\Http\Controllers\FileChatGPTController;
use App\Http\Controllers\CampaignController;
use App\Http\Controllers\RevisionController;
use App\Http\Controllers\ContactController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/clear', function (){

    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('route:clear');
    Artisan::call('view:clear');


    return redirect()->back();

});
Route::get('invoices/{filename}', function ($filename) {
    $path = storage_path("app/public/invoices/{$filename}");

    if (! file_exists($path)) {
        abort(404);
    }

    return response()->file($path);
});
Route::get('order-id', function(){
    for($i = 0; $i <= 100; $i++)
      echo $input['order_id'] = generateOrderID() . '<br/>';
  });

Route::get('order-id-1', function(){
    session()->forget('lastOrderGeneratedId');
});

Route::get('/testing', function () {

    return view('backend.admin.blog.blog');
});


Route::get('/login', function () {

    return view('auth.login');
});

Route::get('/forget/email/request', [ForgotPasswordController::class, 'emailFormRequest'])->name('email.form.request');
Route::post('/email/send/link', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('send.email');
Route::get('/password/reset/{token}/{email}', [ResetPasswordController::class, 'showResetForm'])->name('show.reset.password.form');
Route::post('/password/reset', [ResetPasswordController::class, 'reset'])->name('form.password.update');


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/generate/invoice/pdf/{order_id}', [InvocieController::class, 'generateInvoicePDF'])->name('generate.invoice');
    Route::get('/generate/invoice/by/{id}', [InvocieController::class, 'generateInvoiceById'])->name('generate.invoice.by.id');

});

require __DIR__.'/auth.php';



Route::get('blogs', function (){
$blog= App\Models\blog::all();
    return view('blog',compact('blog'));
})->name('blogs');



// Route::get('getDevice', [IndexController::class, 'getDevice']);
// Route::get('getMoreDeatils', [IndexController::class, 'getMoreDeatils']);

Route::resource('/file_chat_gpts', FileChatGPTController::class);
Route::get('/approved-files', [FileChatGPTController::class, 'approvedFiles'])->name('file_chat_gpts.approved');


    Route::get('google/login', [ConnectController::class, 'googleLogin'])->name('google.login');
    Route::get('auth/google/callback', [ConnectController::class, 'googleHandle']);

    // Route::get('/auth/microsoft/callback', [ConnectController::class, 'microsoftHandle']);
    Route::get('/microsoftLogin', [ConnectController::class, 'microsoftLogin'])->name('microsoft.login');
    Route::get('auth/microsoft/callback', [ConnectController::class, 'microsoftHandle']);
    Route::get('/auth/microsoft/callback/ajax', [ConnectController::class, 'microsoftHandleajax'])->name('microsoft.handle.ajax');

Route::middleware(['auth', 'roles:admin'])->prefix('admin')->name('admin.')->group(function () {


    Route::resource('contacts', ContactController::class);
    Route::get('dashboard', [AdminController::class, 'index'])->name('dashboard');

        Route::get('/campaigns', [CampaignController::class, 'index'])->name('campaigns.index');
    Route::get('/campaigns/create', [CampaignController::class, 'create'])->name('campaigns.create');
    Route::post('/campaigns/store', [CampaignController::class, 'store'])->name('campaigns.store');
    Route::get('/campaigns/{campaign}/edit', [CampaignController::class, 'edit'])->name('campaigns.edit');
    Route::put('/campaigns/{campaign}', [CampaignController::class, 'update'])->name('campaigns.update');
    Route::delete('/campaigns/{campaign}', [CampaignController::class, 'destroy'])->name('campaigns.destroy');



        Route::get('cms_pages', [CmsWebsiteController::class, 'index'])->name('cms_pages.index');
    Route::get('cms_pages/create', [CmsWebsiteController::class, 'create'])->name('cms_pages.create');
    Route::post('cms_pages', [CmsWebsiteController::class, 'store'])->name('cms_pages.store');
    Route::get('cms_pages/{cmsPage}/edit', [CmsWebsiteController::class, 'edit'])->name('cms_pages.edit');
    Route::put('cms_pages/{cmsPage}', [CmsWebsiteController::class, 'update'])->name('cms_pages.update');
    Route::delete('cms_pages/{cmsPage}', [CmsWebsiteController::class, 'destroy'])->name('cms_pages.destroy');
    Route::get('cms_pages/{slug}', [CmsWebsiteController::class, 'show'])->name('cms_pages.show');



    Route::post('/order/complete', [PlaceOrderController::class, 'order_complete'])->name('order.complete');
      Route::post('/revisionsubmit', [PlaceOrderController::class, 'revisionsubmit'])->name('revision.submit');



        Route::get('dashboard/Ajax', [AdminController::class, 'indexajax'])->name('getChartData');
    Route::post('dashboard/Ajax/post', [AdminController::class, 'indexajaxpost'])->name('indexajaxpost');
      Route::post('dashboard/ajaxSummary', [AdminController::class, 'ajaxSummary'])->name('ajaxSummary');
    Route::get('order/summary', [AdminController::class, 'ordersummary'])->name('order.summary');

     Route::post('dashboard/Ajax/chat2', [AdminController::class, 'indexajaxpostchat2'])->name('indexajaxpostchat2');

    Route::post('logout', [AdminController::class, 'destroy'])->name('logout');
    Route::get('show/profile', [AdminController::class, 'showProfile'])->name('show.profile');

    Route::post('update/user-information', [AdminController::class, 'updateUserInformation'])->name('update.user.information');
    Route::post('update/user/email', [AdminController::class, 'UpdateUserEmail'])->name('update.email');

    Route::post('update/user/password', [AdminController::class, 'UpdateUserPassword'])->name('update.password');
    Route::get('destory/session/{user_id}', [AdminController::class, 'destroySingleUserSession'])->name('destroy.single.session');

    Route::get('/coupons', [CouponController::class, 'index'])->name('coupons.index');
    Route::post('/coupon/store', [CouponController::class, 'store'])->name('coupon.store');
    Route::get('/coupon/add', [CouponController::class, 'create'])->name('coupon.create');
    Route::get('/coupon/edit/{id}', [CouponController::class, 'edit'])->name('coupon.edit');
    Route::post('/coupon/update', [CouponController::class, 'update'])->name('coupon.update');
    Route::get('/coupon/delete/{id}', [CouponController::class, 'destroy'])->name('coupon.destroy');

   Route::get('/customers/details/{id}', [CustomerDataController::class, 'show'])->name('customers.show.details');



    Route::get('user/activity/log', [UserManagementController::class, 'userActivityLog'])->name('user.activity.log');
    Route::get('show/all/users', [UserManagementController::class, 'showAllUsers'])->name('show.all.users');
    Route::get('user/show/{id}', [UserManagementController::class, 'showUser'])->name('users.show');
    Route::post('user/{id}/roles', [UserManagementController::class, 'assignRole'])->name('users.roles');
    Route::get('/user/{user_id}/roles/{role_id}', [UserManagementController::class, 'removeRole'])->name('users.roles.remove');
    Route::post('/user/{user_id}/permissions', [UserManagementController::class, 'givePermission'])->name('users.permissions');
    Route::get('/user/{user_id}/permissions/{permission_id}', [UserManagementController::class, 'revokePermission'])->name('users.permissions.revoke');
    Route::get('user/{id}', [UserManagementController::class, 'destroyUser'])->name('users.destroy');
    Route::get('show/all/roles', [UserManagementController::class, 'showAllRoles'])->name('show.all.roles');
    Route::get('view/role/{role_id}', [UserManagementController::class, 'viewRole'])->name('view.role');
    Route::get('/edit/role/permission/{role_id}', [UserManagementController::class, 'EditRolePermission'])->name('edit.role.permission');
    Route::post('/update/role/permission', [UserManagementController::class, 'updateRolePermission'])->name('update.role.permission');
    // Permissions Route
    Route::get('/permissions', [PermissionController::class, 'index'])->name('permissions.index');
    Route::get('/permission/edit/{id}', [PermissionController::class, 'edit'])->name('permission.edit');
    Route::post('/permission/store', [PermissionController::class, 'store'])->name('permission.store');
    Route::post('/permission/update', [PermissionController::class, 'update'])->name('permission.update');
    Route::get('/permission/delete/{id}', [PermissionController::class, 'destroy'])->name('permission.destroy');
    // Customer Management Routes;
    Route::get('customers/management', [CustomerManagementController::class, 'customersManagement'])->name('customer.management');
    Route::get('add/new/customer', [CustomerManagementController::class, 'addNewCustomer'])->name('add.new.customer');
    Route::post('store/new/customer', [CustomerManagementController::class, 'storeNewCustomer'])->name('store.new.customer');
    Route::get('show/customer/details/{id}', [CustomerManagementController::class, 'showCustomerDetails'])->name('show.customer.details');
    Route::get('show/customers/by/tier/{value?}', [CustomerManagementController::class, 'showByTier'])->name('customer.tier');
    Route::get('customers/export/tier/{value?}', [CustomerManagementController::class, 'exportByTier'])->name('customer.export.tier');
    Route::get('customer/block/{id}', [CustomerManagementController::class, 'customerBlock'])->name('customer.block');
    Route::get('customer/delete/record/{user_id}', [CustomerManagementController::class, 'customerDeleteRecords'])->name('customer.delete.records');
    Route::get('search-customer/', [CustomerManagementController::class, 'searchCustomer'])->name('search.customer');
    Route::get('search-new-customer/', [CustomerManagementController::class, 'searchNewCustomer'])->name('search.new.customer');




    Route::get('/promotions', [PromotionController::class, 'index'])->name('promotions.index');
    Route::get('/promotion/create', [PromotionController::class, 'create'])->name('promotions.create');
    Route::post('/promotion/store', [PromotionController::class, 'store'])->name('promotion.store');
    Route::get('/promotion/edit/{id}', [PromotionController::class, 'edit'])->name('promotion.edit');
    Route::post('/promotion/update/{id}', [PromotionController::class, 'update'])->name('promotion.update');
    Route::get('/promotion/delete/{id}', [PromotionController::class, 'destroy'])->name('promotion.destroy');

    Route::get('show/customers/data', [CustomerDataController::class, 'index'])->name('show.customers.data');
    Route::get('show/customers/referral', [CustomerDataController::class, 'referral'])->name('show.customers.referral');
    Route::get('export/customers', [CustomerDataController::class, 'exportCustomers'])->name('export.customers');
    // Roles Rouet
    Route::post('/role/store', [RoleController::class, 'store'])->name('role.store');
    Route::delete('/role/delete/{role_id}', [RoleController::class, 'destroy'])->name('role.destroy');

    Route::get('/roles', [RoleController::class, 'index'])->name('roles.index');
    Route::get('/role/create', [RoleController::class, 'create'])->name('role.create');
    Route::get('/role/edit/{id}', [RoleController::class, 'edit'])->name('role.edit');
    Route::put('/role/update/{id}', [RoleController::class, 'update'])->name('role.update');


    Route::get('/folders/show', [FolderController::class, 'create'])->name('folder.show');
    Route::get('/folders', [FolderController::class, 'store'])->name('folders.store');
    Route::get('folders/{id}/download', [FolderController::class, 'downloadFolder'])->name('folders.download');
    Route::get('/folders/{id}', [FileController::class, 'view'])->name('folders.view');
    Route::get('/order/file', [FileController::class, 'view_file_order_by_chatgpt'])->name('viewfileorderbychatgpt');

     Route::get('/package/cancelation', [PakageLimitController::class, 'package_cancelation'])->name('package.cancelation');

    Route::post('/package/cancelation/change/status', [PakageLimitController::class, 'package_cancelation_change_status'])->name('package.cancelation.change.status');



    Route::post('/order/file/status', [FileController::class, 'order_file_change_status'])->name('order.file.change.status');
      Route::put('/update-status-order-complete', [FileController::class, 'updateStatus'])->name('complete.updateStatus');

    Route::get('/all/folders/{id}', [FileController::class, 'view_all'])->name('folders.view.all');

    Route::post('/file', [FileController::class, 'upload'])->name('file.upload');
    Route::get('files/{id}/{folder_name}/download', [FileController::class, 'downloadfile'])->name('files.download');
    Route::get('all/files/{folder_name}/download', [FileController::class, 'downloadfile_all'])->name('all.files.download');
    Route::get('files/{id}/{folder_name}/delete', [FileController::class, 'deletefile'])->name('files.delete');
    Route::get('/folders/create', [FolderController::class, 'create'])->name('folders.create');
    Route::get('files/{id}/{folder_name}/share', [FileController::class, 'sharefile'])->name('files.share');

    Route::get('/emails', [EmailController::class, 'index'])->name('emails.index');
    Route::post('/email/store', [EmailController::class, 'store'])->name('email.store');
    Route::get('/email/add', [EmailController::class, 'create'])->name('email.create');
    Route::get('/email/edit/{id}', [EmailController::class, 'edit'])->name('email.edit');
    Route::post('/email/update', [EmailController::class, 'update'])->name('email.update');
    Route::get('/email/delete/{id}', [EmailController::class, 'destroy'])->name('email.destroy');

    Route::get('/subtime_limits', [Subtime_LimitController::class, 'index'])->name('subtime_limits.index');
    Route::post('/subtime_limit/store', [Subtime_LimitController::class, 'store'])->name('subtime_limits.store');
    Route::get('/subtime_limit/add', [Subtime_LimitController::class, 'create'])->name('subtime_limits.create');
    Route::get('/subtime_limit/edit/{id}', [Subtime_LimitController::class, 'edit'])->name('subtime_limits.edit');
    Route::put('/subtime_limit/update/{id}', [Subtime_LimitController::class, 'update'])->name('subtime_limits.update');
    Route::get('/subtime_limit/delete/{id}', [Subtime_LimitController::class, 'destroy'])->name('subtime_limits.destroy');
    //done
    Route::get('/paper_formats', [PaperFormatController::class, 'index'])->name('paper_formats.index');
    Route::post('/paper_format/store', [PaperFormatController::class, 'store'])->name('paper_format.store');
    Route::post('/paper_format/update', [PaperFormatController::class, 'update'])->name('paper_format.update');
    Route::get('/paper_format/delete/{id}', [PaperFormatController::class, 'destroy'])->name('paper_format.destroy');






     Route::get('/pakage_limit', [PakageLimitController::class, 'index'])->name('pakage_limit.index');
    Route::post('/pakage_limit/store', [PakageLimitController::class, 'store'])->name('pakage_limit.store');
    Route::post('/pakage_limit/update', [PakageLimitController::class, 'update'])->name('pakage_limit.update');
    Route::get('/pakage_limit/delete/{id}', [PakageLimitController::class, 'destroy'])->name('pakage_limit.destroy');



        Route::get('/add_ons', [AddOnController::class, 'index'])->name('add_ons.index');
    Route::post('/add_ons/store', [AddOnController::class, 'store'])->name('add_ons.store');
    Route::post('/add_ons/update', [AddOnController::class, 'update'])->name('add_ons.update');
    Route::get('/add_ons/delete/{id}', [AddOnController::class, 'destroy'])->name('add_ons.destroy');


 Route::resource('revisions', RevisionController::class);
    //Done
    Route::get('/academics', [AcademicController::class, 'index'])->name('academics.index');
    Route::post('/academics/store', [AcademicController::class, 'store'])->name('academics.store');
    Route::post('/academics/update', [AcademicController::class, 'update'])->name('academics.update');
    Route::get('/academics/delete/{id}', [AcademicController::class, 'destroy'])->name('academics.destroy');
    //Done
    Route::get('/services', [Service_TypeController::class, 'index'])->name('services.index');
    Route::post('/services/store', [Service_TypeController::class, 'store'])->name('services.store');
    Route::post('/services/update', [Service_TypeController::class, 'update'])->name('services.update');
    Route::get('/services/delete/{id}', [Service_TypeController::class, 'destroy'])->name('services.destroy');
    //Done

     //Done

    Route::get('/email_types', [Email_TypeController::class, 'index'])->name('email_types.index');
    Route::post('/email_types/store', [Email_TypeController::class, 'store'])->name('email_types.store');
    Route::post('/email_types/update', [Email_TypeController::class, 'update'])->name('email_types.update');
    Route::get('/email_types/delete/{id}', [Email_TypeController::class, 'destroy'])->name('email_types.destroy');

    //


    //

    Route::get('blogs',[BlogController::class,'index'])->name('blogs');
    Route::post('createBlog',[BlogController::class,'createBlog'])->name('createBlog');
    Route::post('updateBlog/{id}',[BlogController::class,'updateBlog'])->name('updateBlog');
    Route::get('deleteBlog/{id}',[BlogController::class,'deleteBlog'])->name('deleteBlog');




    Route::get('pkg',[BlogController::class,'index_pkg'])->name('pkg');
    Route::post('createpkg',[BlogController::class,'createpkg'])->name('createpkg');
    Route::post('updatepkg/{id}',[BlogController::class,'updatepkg'])->name('updatepkg');
    Route::get('deletepkg/{id}',[BlogController::class,'deletepkg'])->name('deletepkg');



    Route::get('/restrictions', [RestrictionController::class, 'index'])->name('restrictions.index');
    Route::post('/restrictions/store', [RestrictionController::class, 'store'])->name('restrictions.store');
    Route::post('/restrictions/update', [RestrictionController::class, 'update'])->name('restrictions.update');
    Route::get('/restrictions/delete/{id}', [RestrictionController::class, 'destroy'])->name('restrictions.destroy');
    //done
    Route::get('/subtime_limits', [Subtime_LimitController::class, 'index'])->name('subtime_limits.index');
    Route::post('/subtime_limits/store', [Subtime_LimitController::class, 'store'])->name('subtime_limits.store');
    Route::post('/subtime_limits/update', [Subtime_LimitController::class, 'update'])->name('subtime_limits.update');
    Route::get('/subtime_limits/delete/{id}', [Subtime_LimitController::class, 'destroy'])->name('subtime_limits.destroy');
    //done
    Route::get('/subtime_limits', [Subtime_LimitController::class, 'index'])->name('subtime_limits.index');
    Route::post('/subtime_limits/store', [Subtime_LimitController::class, 'store'])->name('subtime_limits.store');
    Route::post('/subtime_limits/update', [Subtime_LimitController::class, 'update'])->name('subtime_limits.update');
    Route::get('/subtime_limits/delete/{id}', [Subtime_LimitController::class, 'destroy'])->name('subtime_limits.destroy');
    //done
    Route::get('/paper_terms', [Paper_TermController::class, 'index'])->name('paper_terms.index');
    Route::post('/paper_terms/store', [Paper_TermController::class, 'store'])->name('paper_terms.store');
    Route::post('/paper_terms/update', [Paper_TermController::class, 'update'])->name('paper_terms.update');
    Route::get('/paper_terms/delete/{id}', [Paper_TermController::class, 'destroy'])->name('paper_terms.destroy');
    //done
    Route::get('/languages', [LanguageController::class, 'index'])->name('languages.index');
    Route::post('/languages/store', [LanguageController::class, 'store'])->name('languages.store');
    Route::post('/languages/update', [LanguageController::class, 'update'])->name('languages.update');
    Route::get('/languages/delete/{id}', [LanguageController::class, 'destroy'])->name('languages.destroy');
    //done
    Route::get('/subjects', [SubjectController::class, 'index'])->name('subjects.index');
    Route::post('/subjects/store', [SubjectController::class, 'store'])->name('subjects.store');
    Route::post('/subjects/update', [SubjectController::class, 'update'])->name('subjects.update');
    Route::get('/subjects/delete/{id}', [SubjectController::class, 'destroy'])->name('subjects.destroy');


    Route::get('placeOrder', [PlaceOrderController::class, 'index'])->name('placeOrder');
    Route::post('createPlaceOrder', [PlaceOrderController::class, 'create_order'])->name('createPlaceOrder');
    Route::post('deletePlaceOrder/{id}', [PlaceOrderController::class, 'delete_order'])->name('deletePlaceOrder');

    Route::post('import-data', [PlaceOrderController::class, 'importData'])->name('import.data');



    //test
    Route::post('deliveredPlaceOrder/{id}', [PlaceOrderController::class, 'deleverd_order'])->name('deleverd_order');
    Route::post('revision/date', [PlaceOrderController::class, 'revision_date'])->name('revision.date');

    Route::get('/new-order',[PlaceOrderController::class,'new_order'])->name('new-order');
    Route::get('/inprogress-order',[PlaceOrderController::class,'inprogress_order'])->name('inprogress-order');

    Route::put('/update-status', [PlaceOrderController::class, 'updateStatus'])->name('updateStatus');

    Route::get('/revision-order',[PlaceOrderController::class,'revision_order'])->name('revision-order');
    Route::get('/delivered-order',[PlaceOrderController::class,'delivered_order'])->name('delivered-order');
    Route::get('/completed-order',[PlaceOrderController::class,'completed_order'])->name('completed-order');
    Route::get('/other-order',[PlaceOrderController::class,'other_order'])->name('other-order');
     Route::get('/orders_history',[PlaceOrderController::class,'orders_history'])->name('orders_history');
    Route::get('/order-detail/{order_id}',[PlaceOrderController::class,'order_detail'])->name('admin-order-detail');

    Route::get('export/orders/{value?}', [PlaceOrderController::class, 'exportOrders'])->name('export.orders');

    Route::get('/message-management',[MessageController::class,'index'])->name('message-management');
    Route::get('/new-message',[MessageController::class,'new_message'])->name('new-message');
    Route::get('/reply-message/{order_id}',[MessageController::class,'reply_message'])->name('reply-message');


    Route::post('/send-message',[MessageController::class,'sendMessage'])->name('send-message');



    Route::get('/custom-setting',[CustomSettingController::class,'custom_setting'])->name('custom-setting');

    Route::post('/custom-edit/{id}',[CustomSettingController::class,'custom_edit'])->name('custom_edit');
    Route::get('export/pricing', [CustomSettingController::class, 'PricingExport'])->name('export.pricing');

    Route::get('/custom-setting-Package',[CustomSettingController::class,'custom_setting_package'])->name('custom-setting-package');
    Route::post('/custom-edit-pkg/{id}',[CustomSettingController::class,'custom_edit_pkg'])->name('custom_edit_pkg');
    Route::get('export/pricing/pkg', [CustomSettingController::class, 'PricingExportpkg'])->name('export.pricing.pkg');

    Route::get('/custom-setting-order',[CustomSettingController::class,'custom_setting_order'])->name('custom-setting-order');
    Route::post('/custom-edit-order/{id}',[CustomSettingController::class,'custom_edit_order'])->name('custom_edit_order');
    Route::get('export/pricing/order', [CustomSettingController::class, 'PricingExportorder'])->name('export.pricing.order');


    Route::get('subscription',[AddSubscriptionController::class,'index'])->name('subscription');
    Route::post('createSubscription',[AddSubscriptionController::class,'createSubscription'])->name('createSubscription');
    Route::get('deleteSubscription/{id}',[AddSubscriptionController::class,'deleteSubscription'])->name('deleteSubscription');
    Route::post('updateSubscription/{id}', [AddSubscriptionController::class, 'updateSubscription'])->name('updateSubscription');
    Route::get('export/subscription', [AddSubscriptionController::class, 'exportSubscription'])->name('export.subscription');




    Route::get('library/management', [LibrarayController::class, 'index'])->name('library.index');
    Route::get('library/add', [LibrarayController::class, 'create'])->name('library.create');
    Route::post('library/store', [LibrarayController::class, 'store'])->name('library.store');
    Route::get('library/edit/{id}', [LibrarayController::class, 'edit'])->name('library.edit');
    Route::put('library/update/{id}', [LibrarayController::class, 'update'])->name('library.update');
    Route::get('library/delete/{id}', [LibrarayController::class, 'destroy'])->name('library.destroy');
    Route::post('library/delete/file', [LibrarayController::class, 'fileDestroy'])->name('library.file.destroy');
    Route::get('export/libraries', [LibrarayController::class, 'exportLibraries'])->name('export.libraries');


    Route::get('/invoices', [InvocieController::class, 'index'])->name('invoices.index');
    Route::get('/create/new/invoice', [InvocieController::class, 'create'])->name('create.new.invoice');
    Route::get('/invoice/delete/{id}', [InvocieController::class, 'destroy'])->name('invoice.destroy');
    Route::get('export/invoices', [InvocieController::class, 'exportInvoices'])->name('export.invoices');
    Route::get('/invoice/view/{invoice_id}', [InvocieController::class, 'viewJson'])->name('invoice.view');
    Route::get('/send/invoice/by/{email}', [InvocieController::class, 'sendInvoiceByEmail'])->name('invoice.by.email');
    Route::get('/generate/invoice/by/{id}', [InvocieController::class, 'generateInvoiceById'])->name('generate.invoice.by.id');
    Route::get('/generate/invoice/pdf/{order_id}', [InvocieController::class, 'generateInvoicePDF'])->name('generate.invoice');

    Route::get('/create/custom/invoice', [CustomInvoiceController::class, 'create'])->name('create.custom.invoice');
    Route::get('/view/custom/invoice/{id}', [CustomInvoiceController::class, 'view'])->name('view.custom.invoice');
    Route::get('/view/json/invoice/{invoice_id}', [CustomInvoiceController::class, 'viewJson'])->name('view.json.invoice');
    Route::post('/store/custom/invoice', [CustomInvoiceController::class, 'store'])->name('store.custom.invoice');
    Route::get('/delete/invoice/custom/{id}', [CustomInvoiceController::class, 'destroy'])->name('destroy.custom.invoice');
    Route::get('/send/custom/invoice/{id}', [CustomInvoiceController::class, 'sendInvoice'])->name('send.custom.invoice');
    Route::get('/send/custom/invoice/by/{email}', [CustomInvoiceController::class, 'sendInvoiceByEmail'])->name('send.invoice.by.email');
    Route::get('/generate/custom/invoice/pdf/{id}', [CustomInvoiceController::class, 'generateInvoicePDF'])->name('generate.custom.invoice');

    // Route::get('files/{id}/{folder_name}/delete', [FileController::class, 'deletefile_admin'])->name('files.delete');
    Route::get('/show-all-feedbacks', [FeedbackController::class, 'index'])->name('show.feedback');
    Route::delete('/delete/feedback/{feedback}', [FeedbackController::class, 'destroy'])->name('destroy.feedback');

    Route::get('/system/configurations', [SystemConfigurationController::class, 'systemConfiguration'])->name('system.configurations');

     Route::get('/merchant/account/configurations', [SystemConfigurationController::class, 'merchantConfiguration'])->name('merchant.account.configurations');
    Route::post('/store/merchant-details', [SystemConfigurationController::class, 'storeMerchantDetails'])->name('store.merchant.details');
    Route::get('/smtp/configuration', [SystemConfigurationController::class, 'smptConfiguration'])->name('smpt.configurations');
    Route::post('/store/smtp-configuration', [SystemConfigurationController::class, 'smtpConfigurationUpdate'])->name('smtp_configuration.update');


});


Route::get('/essay',[IndexController::class, 'essay'])->name('frontend.essay');
// Route::get('/', [IndexController::class, 'frontend'])->name('front.index');
// Route::get('/about-us', [IndexController::class, 'about'])->name('front.about');
// Route::get('/subscriptions', [IndexController::class, 'subscriptions'])->name('front.subscriptions');
Route::get('/custom-ordering', [IndexController::class, 'customOrdering'])->name('front.custom.ordering');
// Route::get('/contact-us', [IndexController::class, 'contact'])->name('front.contact');
Route::get('/privacy-policy', [IndexController::class, 'privacyPolicy'])->name('front.privacy.policy');
Route::get('/terms-conditions', [IndexController::class, 'termsConditions'])->name('front.terms.conditions');
Route::get('/site-map', [IndexController::class, 'sitemap'])->name('front.site.map');
Route::get('/cookie-policy', [IndexController::class, 'cookiePolicy'])->name('front.cookie.policy');
Route::get('/copyright', [IndexController::class, 'copyright'])->name('front.copyright');
Route::get('/sign-up', [IndexController::class, 'createSignup'])->name('front.signup');
Route::post('/sign-up-process', [IndexController::class, 'customCUstomerRegistrationProcess'])->name('front.signup.process');
Route::get('/verify-account/{verify_code}', [IndexController::class, 'accountVerify'])->name('front.verify.account');

Route::get('/pakage_limit_total', [PakageLimitController::class, 'get'])->name('pakage_limit.get');
Route::get('/pakage_limit_total_rollover', [PakageLimitController::class, 'get_rollover'])->name('pakage_limit.get.rollover');

Route::get('/pakage_limit_total_pakg_pur', [PakageLimitController::class, 'get_pkg'])->name('pakage_limit.get_pkg_pur');



//new them implementation

Route::get('/', [IndexController::class, 'frontend_final'])->name('front.index');
Route::get('/about-us', [IndexController::class, 'about'])->name('front.about');
Route::get('/contact-us', [IndexController::class, 'contact'])->name('front.contact');
Route::get('/faq-us', [IndexController::class, 'faqs'])->name('front.faq');

Route::post('/contact-submit', [IndexController::class, 'submit'])->name('contact.submit');


Route::get('/contact-us', [IndexController::class, 'contact'])->name('front.contact');

Route::get('/sample-paper', [IndexController::class, 'samplepaper'])->name('front.samplepaper');

Route::get('/sample-paper-ajax', [IndexController::class, 'ajaxsamplepaper'])->name('front.ajaxsamplepaper');
Route::get('/sample-paper-ajax-page', [IndexController::class, 'ajaxsamplepaperpage'])->name('front.ajaxsamplepaperpage');
Route::get('/sample-paper-ajax-page-all', [IndexController::class, 'ajaxsamplepaperpageall'])->name('front.ajaxsamplepaperpageall');

Route::get('/customer-journey', [IndexController::class, 'customerjourney'])->name('front.customerjourney');
Route::get('/services-us', [IndexController::class, 'services_us'])->name('front.services');

Route::get('/packages', [IndexController::class, 'packages'])->name('front.subscriptions');


Route::get('/custom-order', [IndexController::class, 'customorder'])->name('front.customorder');


//services

Route::get('/admission-essay', [IndexController::class, 'admissionessay'])->name('front.admissionessay');
Route::get('/annotated-bibliography', [IndexController::class, 'annotatedbibliography'])->name('front.annotatedbibliography');
Route::get('/application-essay', [IndexController::class, 'applicationessay'])->name('front.applicationessay');
Route::get('/article-review', [IndexController::class, 'articlereview'])->name('front.articlereview');
Route::get('/book-report', [IndexController::class, 'bookreport'])->name('front.bookreport');
Route::get('/business-plan', [IndexController::class, 'businessplan'])->name('front.businessplan');
Route::get('/business-proposal', [IndexController::class, 'businessproposal'])->name('front.businessproposal');
Route::get('/capstone-project', [IndexController::class, 'capstoneproject'])->name('front.capstoneproject');
Route::get('/case-study', [IndexController::class, 'casestudy'])->name('front.casestudy');
Route::get('/corporate', [IndexController::class, 'corporate'])->name('front.corporate');
Route::get('/creative-writing', [IndexController::class, 'creativewriting'])->name('front.creativewriting');
Route::get('/dissertation-or-thesis-complete', [IndexController::class, 'dissertationorthesiscomplete'])->name('front.dissertationorthesiscomplete');
Route::get('/journal-professional', [IndexController::class, 'journalprofessional'])->name('front.journalprofessional');
Route::get('/marketing-plan', [IndexController::class, 'marketingplan'])->name('front.marketingplan');
Route::get('/multiple-chapters', [IndexController::class, 'multiplechapters'])->name('front.multiplechapters');
Route::get('/introduction-chapter',[IndexController::class, 'showIntroduction'])->name('front.introductionchapter');
Route::get('/only-the-conclusion-chapter', [IndexController::class, 'onlytheconclusionchapter'])->name('front.onlytheconclusionchapter');
Route::get('/only-the-hypothesis-chapter', [IndexController::class, 'onlythehypothesischapter'])->name('front.onlythehypothesischapter');
Route::get('/only-the-literature-review-chapter', [IndexController::class, 'onlytheliteraturereviewchapter'])->name('front.onlytheliteraturereviewchapter');
Route::get('/only-the-methodology-chapter', [IndexController::class, 'onlythemethodologychapter'])->name('front.onlythemethodologychapter');
Route::get('/peer-reviewed-journal', [IndexController::class, 'peerreviewedjournal'])->name('front.peerreviewedjournal');
Route::get('/poetry-art-analysis', [IndexController::class, 'poetryartanalysis'])->name('front.poetryartanalysis');
Route::get('/powerpoint-presentation', [IndexController::class, 'powerpointpresentation'])->name('front.powerpointpresentation');
Route::get('/research-paper', [IndexController::class, 'researchpaper'])->name('front.researchpaper');
Route::get('/research-proposal', [IndexController::class, 'researchproposal'])->name('front.researchproposal');
Route::get('/resume-crafting', [IndexController::class, 'resumecrafting'])->name('front.resumecrafting');
Route::get('/swot-analysis', [IndexController::class, 'swotanalysis'])->name('front.swotanalysis');
Route::get('/tailor-made-essays', [IndexController::class, 'tailormadeessays'])->name('front.tailormadeessays');
Route::get('/term-paper', [IndexController::class, 'termpaper'])->name('front.termpaper');
Route::get('website-content', [IndexController::class, 'websitecontent'])->name('front.websitecontent');
Route::get('/white-paper', [IndexController::class, 'whitepaper'])->name('front.whitepaper');


//end services

//new them implementation


















//payment

 Route::post('/redirectResponseUrl', [CustomerPlaceOrderController::class, 'redirectResponseUrl'])->name('redirectResponseUrl');
  Route::post('/redirectResponseUrlSub', [CustomerPlaceOrderController::class, 'redirectResponseUrlSub'])->name('redirectResponseUrlSub');
    Route::post('/redirectResponseUrladdpages', [CustomerPlaceOrderController::class, 'redirectResponseUrladdpages'])->name('redirectResponseUrladdpages');

      Route::post('/redirectResponsemanagepages', [CustomerPlaceOrderController::class, 'redirectResponsemanagepages'])->name('redirectResponseUrladdpages');
    Route::get('/pay/{orderid}', [CustomerPlaceOrderController::class, 'pay'])->name('pay');
Route::get('/pay/sub/{orderid}', [CustomerPlaceOrderController::class, 'pay_sub'])->name('pay.sub');
Route::get('/pay/add/pages/{orderid}', [CustomerPlaceOrderController::class, 'pay_add_pages'])->name('pay.add.pages');
Route::get('/pay/add/manage/{orderid}', [CustomerPlaceOrderController::class, 'pay_add_manage'])->name('pay.add.manage');
Route::get('dashboard', [CustomerController::class, 'index'])->name('dashboard');
Route::get('/placeOrder',[CustomerPlaceOrderController::class,'index'])->name('customerPlaceOrder');
Route::get('/changeDate/{id}',[CustomerPlaceOrderController::class,'changeDate'])->name('changeDate');
Route::get('/changeDatepkg/{id}',[CustomerPlaceOrderController::class,'changeDatepkg'])->name('changeDatepkg');


Route::get('/email-tester', [CustomerPlaceOrderController::class, 'email_tester'])->name('email_tester');

// User as Customer
Route::middleware(['auth', 'roles:customer','blocked'])->prefix('customer')->name('customer.')->group(function () {

    Route::get('completed/{order_id}/file/{file_id}/download', [FileController::class, 'completedOrderFileDownload'])->name('completed.order.file.download');


    Route::get('export/invoice/{value?}', [CustomerPlaceOrderController::class, 'exportInvoiceprofile'])->name('export.invoice');



    Route::get('dashboard', [CustomerController::class, 'index'])->name('dashboard');
    Route::post('/revision_submit_ajax', [CustomerPlaceOrderController::class, 'revision_submit_ajax'])->name('revision.submit.ajax');
    Route::post('revision/exp/{id}', [PlaceOrderController::class, 'revision_exp'])->name('revision.exp');
    Route::post('/revisionsubmit', [PlaceOrderController::class, 'revisionsubmit'])->name('revision.submit');
    Route::get('/customer/order/complete/{id}',[PlaceOrderController::class, 'order_complete'])->name('order.complete');
    Route::get('show/profile', [CustomerController::class, 'showProfile'])->name('show.profile');
    Route::post('update/profile', [CustomerController::class, 'updateProfile'])->name('update.profile');
    Route::get('/filter/{date?}/{type?}', [CustomerController::class, 'filterDate'])->name('filter.date');

    Route::get('/folders/show', [FolderController::class, 'create_customer'])->name('folder.show');
    Route::get('/folders', [FolderController::class, 'store_customer'])->name('folders.store');
    Route::get('folders/{id}/download', [FolderController::class, 'downloadFolder_customer'])->name('folders.download');
    Route::get('/folders/{id}', [FileController::class, 'view_customer'])->name('folders.view');
    Route::get('/all/folders/{id}', [FileController::class, 'view_customer_all'])->name('all.folders.view');
    Route::post('/file', [FileController::class, 'upload_customer'])->name('file.upload');
    Route::get('files/{id}/{folder_name}/download', [FileController::class, 'downloadfile_customer'])->name('files.download');
    Route::get('all/files/{folder_name}/download', [FileController::class, 'downloadfile_customer_all'])->name('all.files.download');
    Route::get('files/{id}/{folder_name}/delete', [FileController::class, 'deletefile_customer'])->name('files.delete');
    Route::get('/folders/create', [FolderController::class, 'create_customer'])->name('folders.create');
    Route::get('files/{id}/{folder_name}/share', [FileController::class, 'sharefile_customer'])->name('files.share');
    Route::get('download/library/files/{id}', [LibrarayController::class, 'downloadLibraryFiles'])->name('download.library.files');


    Route::post('logout', [CustomerController::class, 'destroy'])->name('logout');
    Route::get('general', [IndexController::class, 'general'])->name('general');
    Route::get('/placeOrder',[CustomerPlaceOrderController::class,'index'])->name('customerPlaceOrder');
    //payment

    Route::get('/checkout', [CustomerPlaceOrderController::class, 'checkout'])->name('checkout');
    Route::get('card/show/{sessionid}', [CustomerPlaceOrderController::class, 'checkoutshow'])->name('card.show');
    Route::get('card/show/checkoutshowmangepages/{sessionid}', [CustomerPlaceOrderController::class, 'checkoutshowmangepages'])->name('card.show.mangepages');
        Route::post('pakage/add/order/pages', [CustomerPlaceOrderController::class, 'pakageaddorderpage'])->name('pakage.add.order.pages');
    Route::get('/email-tester', [CustomerPlaceOrderController::class, 'email_tester'])->name('email_tester');

    Route::get('card/show/sub/{sessionid}', [CustomerPlaceOrderController::class, 'checkoutshowsub'])->name('card.show.sub');
    Route::get('card/show/addpage/{sessionid}', [CustomerPlaceOrderController::class, 'checkoutshowaddpage'])->name('card.show.addpage');
    Route::post('/payment/store/sub', [CustomerPlaceOrderController::class, 'payment_store_sub'])->name('payment.store.sub');
    Route::post('/payment/store/addpages', [CustomerPlaceOrderController::class, 'payment_store_addpages'])->name('payment.store.addpages');
    Route::post('/payment/store/managepage', [CustomerPlaceOrderController::class, 'payment_store_managepage'])->name('payment.store.managepage');
    Route::post('/payment/store', [CustomerPlaceOrderController::class, 'payment_store'])->name('payment.store');
    Route::get('/otp/{creqValue}', [CustomerPlaceOrderController::class, 'otp'])->name('otp');
    Route::get('/thankyou', [CustomerPlaceOrderController::class, 'thankyou'])->name('thankyou');
    Route::get('/thankyou-sub', [CustomerPlaceOrderController::class, 'thankyouSub'])->name('thankyou.sub');

    Route::post('/createOrder/{id}',[CustomerPlaceOrderController::class,'create_order'])->name('create_order');
    Route::post('/payment/{id}',[PaymentController::class,'make_payment'])->name('customer_payment');
    Route::get('/new-order',[CustomerPlaceOrderController::class,'new_order'])->name('new-order');
    Route::get('/inprogress-order',[CustomerPlaceOrderController::class,'inprogress_order'])->name('inprogress-order');
    Route::get('/revision-order',[CustomerPlaceOrderController::class,'revision_order'])->name('revision-order');
    Route::get('/delivered-order',[CustomerPlaceOrderController::class,'delivered_order'])->name('delivered-order');
    Route::post('deleteOrder/{id}', [CustomerPlaceOrderController::class, 'delete_order'])->name('deleteOrder');
    Route::get('/message-management',[MessageManagementController::class,'index'])->name('message-managememnt');
    Route::get('/new-message',[MessageManagementController::class,'new_message'])->name('new-message');
    Route::get('/order-detail/{order_id}',[CustomerPlaceOrderController::class,'order_detail'])->name('order-detail');
     Route::get('/other-order',[CustomerPlaceOrderController::class,'other_order'])->name('other-order');
    //21-02-2024
    Route::get('custom/subscription', [CustomerPlaceOrderController::class, 'customSubscription'])->name('custom.subscription');
    Route::post('custom/subscription/store', [CustomerPlaceOrderController::class, 'customSubscriptionStore'])->name('custom.subscription.store');
    Route::post('/add-more-pages',[CustomerPlaceOrderController::class,'addMorePages'])->name('addmorepages');
    //21-02-2024

    //23-02-2024
    Route::post('support/message', [CustomerPlaceOrderController::class, 'supportMessage'])->name('support.message');
    //23-02-2024

    Route::post('cancel-subscription/{sub_id}',[CustomerPlaceOrderController::class,'cancel_subscription'])->name('cancel-subscription');
    Route::post('select-plan/{sub_id}',[CustomerPlaceOrderController::class,'select_plan'])->name('select-plan');
    Route::post('/order-detail-request',[CustomerPlaceOrderController::class,'order_detail_request'])->name('order-detail-request');
    Route::post('/order-detail-review',[CustomerPlaceOrderController::class,'order_detail_review'])->name('order-detail-review');
    Route::post('/order-detail-feedback',[CustomerPlaceOrderController::class,'order_detail_feedback'])->name('order-detail-feedback');
    Route::post('/update-detail-order/{id}',[CustomerPlaceOrderController::class,'update_detail_order'])->name('update_detail_order');
    Route::post('check-package/{sub_id}',[CustomerPlaceOrderController::class,'check_package'])->name('check.package');

    Route::get('/update-tier', [CustomerPlaceOrderController::class, 'updateTierAfterPayment'])->name('update.tier');

    Route::post('/send-message',[MessageManagementController::class,'sendMessage'])->name('send-message');
    Route::get('/reply-message/{order_id}',[MessageManagementController::class,'reply_message'])->name('reply-message');
    Route::post('/coupon/check',[CouponController::class,'coupon_check'])->name('coupon-check');
    Route::get('show-libraries', [LibraryManagmentController::class, 'showLibrary'])->name('show.libraries');

    Route::get('/brand-ambassadors', [BrandAmbassadorController::class, 'index'])->name('brand.ambassadors');
    Route::post('/brand-ambassadors', [BrandAmbassadorController::class, 'store'])->name('brand.ambassadors');
    Route::get('/brand-ambassadors-sign-up', [BrandAmbassadorController::class, 'signUp'])->name('brand.ambassadors.signup');
    Route::post('/brand-ambassadors-sign-up', [BrandAmbassadorController::class, 'signUpProcess'])->name('create.brand.ambassadors.signup');
    Route::get('/brand-ambassador/delete/{id}', [BrandAmbassadorController::class, 'destroy'])->name('brand.ambassadors.destroy');





});


Route::post('/date-check',[CustomerPlaceOrderController::class,'date_check'])->name('date-check');
Route::post('/date-check-pkg',[CustomerPlaceOrderController::class,'date_check_pkg'])->name('date_check_pkg');
Route::post('check-coupon',[CouponController::class,'check_coupon'])->name('check-coupon');
    // Role in permission routes;
    Route::get('/all/roles/permissions', [RoleSetupController::class, 'AllRolePermission'])->name('all.roles.permissions');
    Route::get('/add/role/permission', [RoleSetupController::class, 'AddRolePermission'])->name('add.role.permission');
    Route::post('/store/role/permission', [RoleSetupController::class, 'StoreRolePermission'])->name('store.role.permission');
    Route::get('/edit/role/permission/{id}', [RoleSetupController::class, 'EditRolePermission'])->name('edit.role.permission');
    Route::post('/update/role/permission/{id}', [RoleSetupController::class, 'UpdateRolePermission'])->name('update.role.permission');
    Route::get('/delete/role/permission/{id}', [RoleSetupController::class, 'DeleteRolePermission'])->name('delete.role.permission');
