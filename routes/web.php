<?php
               /* rijwan part*/
               /*authentication_management_route*/
Auth::routes();
               /* contact_management_route*/
Route::resource('contact','Admin\ContactManagementController');
Route::get('/search/{search}','Admin\ContactManagementController@search');
Route::get('/alphabet/{alphabet}','Admin\ContactManagementController@alphabet');
Route::get('/contact/edit/{edit}','Admin\ContactManagementController@edit');
Route::post('/contact/update','Admin\ContactManagementController@ImageUpdate');
Route::post('/contact/editFormData','Admin\ContactManagementController@update');
Route::get('/contact/delete/{delete_contact}','Admin\ContactManagementController@delete');
                /*employee_management_route*/
Route::resource('employee','Admin\EmployeeManagementController');
Route::get('/employee/alphabet_search/{alphabet}','Admin\EmployeeManagementController@alphabet');
Route::get('/employee/search/{search}','Admin\EmployeeManagementController@search');
Route::get('/employee/edit/{edit}','Admin\EmployeeManagementController@edit');
Route::post('/employee/update','Admin\EmployeeManagementController@update');
Route::get('/employee/delete/{delete_employee}','Admin\EmployeeManagementController@delete');
Route::post('/employee/update_pic','Admin\EmployeeManagementController@ImageUpdate');
                /* role_management_route*/
Route::resource('role','Admin\RoleController');
                /*super_admin_management_route*/
Route::resource('super_user','Admin\SuperAdminController');
                 /*permission_management_route*/
Route::resource('permission','Admin\PermissionController');
                 /*security_management_route*/
Route::resource('security_management','Admin\SecurityManagementController');
Route::post('security_management/update','Admin\SecurityManagementController@update');
Route::get('/employee/role/{employee_id}','Admin\SecurityManagementController@employeeRole');
                   /*todo_list*/
                               /*FrontEnd*/
Route::resource('/','FrontEnd\DashBoardController');
Route::post('/todo','FrontEnd\DashBoardController@todoStore');
Route::post('/todo/update','FrontEnd\DashBoardController@todoUpdate');
Route::post('/todo/delete','FrontEnd\DashBoardController@todoDelete');
Route::get('/todo_show','FrontEnd\DashBoardController@todoShow');
                         /*supplier category*/
Route::resource('supplier_category','Admin\SupplierCategoryController');
Route::post('/suppler_category/store','Admin\SupplierCategoryController@store');
Route::post('/suppler_category/update','Admin\SupplierCategoryController@update');
Route::get('/category/delete/{category_delete}','Admin\SupplierCategoryController@destroy');
Route::get('/supplier_category/search/{search}','Admin\SupplierCategoryController@search');
Route::get('/supplier/category/reset_search','Admin\SupplierCategoryController@index');
                        /*supplier route*/
Route::resource('supplier','Admin\SupplierController');
Route::get('/supplier/show/{id}/{slug}','Admin\SupplierController@show');
Route::post('/supplier/manage','Admin\SupplierController@edit');
Route::get('/supplier/category/delete/{id}/{slug}','Admin\SupplierController@destroy');
Route::get('/supplier/alphabet/{alphabet}','Admin\SupplierController@alphabet');
Route::get('/supplier/category/{category}','Admin\SupplierController@category');
Route::get('/supplier/search/{search}','Admin\SupplierController@search');
Route::get('/supplier/contact/remove/{id}/{slug}','Admin\SupplierController@supplierContactRemove');
Route::post('/supplier/update/form','Admin\SupplierController@supplierUpdate');
Route::get('/supplier/categoryWiseSearch/{category_search}/{search_category}','Admin\SupplierController@categoryWiseSearch');
Route::get('/supplier/reset/category/search','Admin\SupplierController@index');
                         /*projects route*/
Route::resource('project', 'Admin\ProjectController');
Route::get('create-zip/{id}', 'Admin\ProjectController@downloadProjectFile')->name('create-zip');
Route::get('/category/depend/supplier/{id}/{my_pro_id}','Admin\ProjectController@categoryDependSupplier');
Route::post('/store_project/','Admin\ProjectController@store');
Route::get('projects/{slug}','Admin\ProjectController@show');
Route::get('/project/selected/supplier/{project_id}/{project_category_id}','Admin\ProjectController@projectSelectedSupplier');
Route::get('/project/supplier/relation/selected/{project_supplier_relation}/{category_name}','Admin\ProjectController@projectSupplierRelation');
Route::get('/project/delete/{id}','Admin\ProjectController@projectDelete');
Route::get('/project/supplier/preview/{supplier_id}','Admin\ProjectController@projectSupplierPreview');
Route::get('/project/todo_show/{project_id}','Admin\ProjectController@ProjectTodoShow');
Route::post('/project/todo','Admin\ProjectController@projectTodo');
Route::post('/project/todo/update','Admin\ProjectController@projectTodoUpdate');
Route::post('/project/todo/delete','Admin\ProjectController@projectTodoDelete');
Route::get('/single/project/delete/{id}/{img}','Admin\ProjectController@deletesinglefile');
Route::get('/project/single/delete/{id}','Admin\ProjectController@singleProjectDelete');
Route::get('/delete_img/{del_item}/{id}','Admin\ProjectController@deleteImage');
Route::get('/project/remove/selected/supplier/{supplier_id}/{project_id}','Admin\ProjectController@projectRemoveSelectedSupplier');
Route::post('/Update_Project/','Admin\ProjectController@UpdateProject');
Route::get('project/createsingle-zip/{value}', 'Admin\ProjectController@downloadprojectsinglefile');
Route::post('/Single/Update_Project/','Admin\ProjectController@updateSingleProject');
Route::get('/remove/{name}', 'Admin\ProjectController@deleteProjects');
                            /*theme management*/
Route::get('/themeoption/{theme_id}','FrontEnd\DashBoardController@themeOption');                            








