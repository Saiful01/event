<?php

/*Route::redirect('/', '/login');*/
Route::get('/', 'Controller@index')->name('home');
Route::get('/about/{id}', 'Controller@about')->name('about');
Route::get('/organization-committee', 'Controller@committee')->name('committee');
Route::get('/co-host', 'Controller@coHost')->name('coHost');
Route::get('/speaker', 'Controller@speaker')->name('speaker');
Route::get('/abstract', 'Controller@abstract')->name('abstract');
Route::get('/full-paper', 'Controller@fullPaper')->name('fullPaper');
Route::get('/stall', 'Controller@stall')->name('stall');
Route::get('/strategic-partner', 'Controller@strategicPartner')->name('strategicPartner');
Route::get('/venue', 'Controller@venue')->name('venue');
Route::get('/announcement', 'Controller@announcement')->name('announcement');
Route::get('/contact', 'Controller@contact')->name('contact');
Route::get('/registration', 'Controller@registration')->name('registration');
Route::get('/home', function () {
    if (session('status')) {
        return redirect()->route('admin.home')->with('status', session('status'));
    }

    return redirect()->route('admin.home');
});

Auth::routes(['register' => false]);

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth']], function () {
    Route::get('/', 'HomeController@index')->name('home');
    // Permissions
    Route::delete('permissions/destroy', 'PermissionsController@massDestroy')->name('permissions.massDestroy');
    Route::resource('permissions', 'PermissionsController');

    // Roles
    Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');
    Route::resource('roles', 'RolesController');

    // Users
    Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');
    Route::resource('users', 'UsersController');

    // Slider
    Route::delete('sliders/destroy', 'SliderController@massDestroy')->name('sliders.massDestroy');
    Route::post('sliders/media', 'SliderController@storeMedia')->name('sliders.storeMedia');
    Route::post('sliders/ckmedia', 'SliderController@storeCKEditorImages')->name('sliders.storeCKEditorImages');
    Route::resource('sliders', 'SliderController');

    // About Management
    Route::delete('about-managements/destroy', 'AboutManagementController@massDestroy')->name('about-managements.massDestroy');
    Route::post('about-managements/media', 'AboutManagementController@storeMedia')->name('about-managements.storeMedia');
    Route::post('about-managements/ckmedia', 'AboutManagementController@storeCKEditorImages')->name('about-managements.storeCKEditorImages');
    Route::resource('about-managements', 'AboutManagementController');

    // Organization Committee
    Route::delete('organization-committees/destroy', 'OrganizationCommitteeController@massDestroy')->name('organization-committees.massDestroy');
    Route::post('organization-committees/media', 'OrganizationCommitteeController@storeMedia')->name('organization-committees.storeMedia');
    Route::post('organization-committees/ckmedia', 'OrganizationCommitteeController@storeCKEditorImages')->name('organization-committees.storeCKEditorImages');
    Route::resource('organization-committees', 'OrganizationCommitteeController');

    // Co Host Malaysia
    Route::delete('co-host-malaysia/destroy', 'CoHostMalaysiaController@massDestroy')->name('co-host-malaysia.massDestroy');
    Route::post('co-host-malaysia/media', 'CoHostMalaysiaController@storeMedia')->name('co-host-malaysia.storeMedia');
    Route::post('co-host-malaysia/ckmedia', 'CoHostMalaysiaController@storeCKEditorImages')->name('co-host-malaysia.storeCKEditorImages');
    Route::resource('co-host-malaysia', 'CoHostMalaysiaController');

    // Speaker
    Route::delete('speakers/destroy', 'SpeakerController@massDestroy')->name('speakers.massDestroy');
    Route::post('speakers/media', 'SpeakerController@storeMedia')->name('speakers.storeMedia');
    Route::post('speakers/ckmedia', 'SpeakerController@storeCKEditorImages')->name('speakers.storeCKEditorImages');
    Route::resource('speakers', 'SpeakerController');

    // Submission
    Route::delete('submissions/destroy', 'SubmissionController@massDestroy')->name('submissions.massDestroy');
    Route::post('submissions/media', 'SubmissionController@storeMedia')->name('submissions.storeMedia');
    Route::post('submissions/ckmedia', 'SubmissionController@storeCKEditorImages')->name('submissions.storeCKEditorImages');
    Route::resource('submissions', 'SubmissionController');

    // Stall
    Route::delete('stalls/destroy', 'StallController@massDestroy')->name('stalls.massDestroy');
    Route::post('stalls/media', 'StallController@storeMedia')->name('stalls.storeMedia');
    Route::post('stalls/ckmedia', 'StallController@storeCKEditorImages')->name('stalls.storeCKEditorImages');
    Route::resource('stalls', 'StallController');

    // Strategic Partner
    Route::delete('strategic-partners/destroy', 'StrategicPartnerController@massDestroy')->name('strategic-partners.massDestroy');
    Route::post('strategic-partners/media', 'StrategicPartnerController@storeMedia')->name('strategic-partners.storeMedia');
    Route::post('strategic-partners/ckmedia', 'StrategicPartnerController@storeCKEditorImages')->name('strategic-partners.storeCKEditorImages');
    Route::resource('strategic-partners', 'StrategicPartnerController');

    // Venu
    Route::delete('venus/destroy', 'VenuController@massDestroy')->name('venus.massDestroy');
    Route::post('venus/media', 'VenuController@storeMedia')->name('venus.storeMedia');
    Route::post('venus/ckmedia', 'VenuController@storeCKEditorImages')->name('venus.storeCKEditorImages');
    Route::resource('venus', 'VenuController');

    // Abstruct Submission
    Route::delete('abstruct-submissions/destroy', 'AbstructSubmissionController@massDestroy')->name('abstruct-submissions.massDestroy');
    Route::post('abstruct-submissions/media', 'AbstructSubmissionController@storeMedia')->name('abstruct-submissions.storeMedia');
    Route::post('abstruct-submissions/ckmedia', 'AbstructSubmissionController@storeCKEditorImages')->name('abstruct-submissions.storeCKEditorImages');
    Route::resource('abstruct-submissions', 'AbstructSubmissionController');

    // Registration
    Route::delete('registrations/destroy', 'RegistrationController@massDestroy')->name('registrations.massDestroy');
    Route::post('registrations/media', 'RegistrationController@storeMedia')->name('registrations.storeMedia');
    Route::post('registrations/ckmedia', 'RegistrationController@storeCKEditorImages')->name('registrations.storeCKEditorImages');
    Route::resource('registrations', 'RegistrationController');

    // Event
    Route::delete('events/destroy', 'EventController@massDestroy')->name('events.massDestroy');
    Route::post('events/media', 'EventController@storeMedia')->name('events.storeMedia');
    Route::post('events/ckmedia', 'EventController@storeCKEditorImages')->name('events.storeCKEditorImages');
    Route::resource('events', 'EventController');

    // Important Dates
    Route::delete('important-dates/destroy', 'ImportantDatesController@massDestroy')->name('important-dates.massDestroy');
    Route::post('important-dates/media', 'ImportantDatesController@storeMedia')->name('important-dates.storeMedia');
    Route::post('important-dates/ckmedia', 'ImportantDatesController@storeCKEditorImages')->name('important-dates.storeCKEditorImages');
    Route::resource('important-dates', 'ImportantDatesController');
});
Route::group(['prefix' => 'profile', 'as' => 'profile.', 'namespace' => 'Auth', 'middleware' => ['auth']], function () {
    // Change password
    if (file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php'))) {
        Route::get('password', 'ChangePasswordController@edit')->name('password.edit');
        Route::post('password', 'ChangePasswordController@update')->name('password.update');
        Route::post('profile', 'ChangePasswordController@updateProfile')->name('password.updateProfile');
        Route::post('profile/destroy', 'ChangePasswordController@destroy')->name('password.destroyProfile');
    }
});

Route::get('/storage-link', function () {
    Artisan::call('storage:link');
});
