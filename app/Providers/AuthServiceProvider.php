<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
                         /*security policy*/
        Gate::define('security_management_index','App\Policies\SecurityManagementPolicy@show');
                         /*project management policy*/
        Gate::define('all_project','App\Policies\ProjectManagementPolicy@allProject');
        Gate::define('project_download','App\Policies\ProjectManagementPolicy@projectDownload');
        Gate::define('project_manage','App\Policies\ProjectManagementPolicy@projectManage');
        Gate::define('project_delete','App\Policies\ProjectManagementPolicy@projectDelete');
        Gate::define('new_project','App\Policies\ProjectManagementPolicy@newProject');
        Gate::define('file_upload','App\Policies\ProjectManagementPolicy@fileUpload');
                           /*supplier management policy*/
        Gate::define('all_supplier','App\Policies\SupplierManagementPolicy@allSupplier');
        Gate::define('supplier_print','App\Policies\SupplierManagementPolicy@supplierPrint');
        Gate::define('supplier_manage','App\Policies\SupplierManagementPolicy@supplierManage');
        Gate::define('supplier_delete','App\Policies\SupplierManagementPolicy@supplierDelete');
        Gate::define('supplier_preview','App\Policies\SupplierManagementPolicy@supplierPreview');
        Gate::define('supplier_contact_information','App\Policies\SupplierManagementPolicy@supplierContactInformation');
        Gate::define('add_supplier','App\Policies\SupplierManagementPolicy@addSupplier');
        Gate::define('add_category','App\Policies\SupplierManagementPolicy@addCategory');
        Gate::define('category_delete','App\Policies\SupplierManagementPolicy@categoryDelete');
        Gate::define('category_edit','App\Policies\SupplierManagementPolicy@categoryEdit');
                           /*contact management policy*/
        Gate::define('all_contact','App\Policies\ContactManagementPolicy@allContact');
        Gate::define('add_contact','App\Policies\ContactManagementPolicy@addContact');
        Gate::define('contact_delete','App\Policies\ContactManagementPolicy@contactDelete');
        Gate::define('contact_edit','App\Policies\ContactManagementPolicy@contactEdit');
                              /*employee management policy*/
        Gate::define('all_employee','App\Policies\EmployeeManagementPolicy@allEmployee');
        Gate::define('add_employee','App\Policies\EmployeeManagementPolicy@addEmployee');
        Gate::define('employee_delete','App\Policies\EmployeeManagementPolicy@employeeDelete');
        Gate::define('employee_edit','App\Policies\EmployeeManagementPolicy@employee_edit');
                              /*roll management policy*/
        Gate::define('manage_roll','App\Policies\RollManagementPolicy@manageRoll');
        Gate::define('add_roll','App\Policies\RollManagementPolicy@addRoll');
        Gate::define('roll_delete','App\Policies\RollManagementPolicy@rollDelete');
        Gate::define('roll_edit','App\Policies\RollManagementPolicy@rollEdit');
                              /*super admin policy*/
        Gate::define('super_admin_index','App\Policies\SuperAdminPolicy@superAdminIndex');
                                /*supplier management policy*/
        Gate::define('all_supplier','App\Policies\SupplierManagementPolicy@allSupplier');
        Gate::define('create_supplier','App\Policies\SupplierManagementPolicy@createSupplier');
        Gate::define('print_supplier','App\Policies\SupplierManagementPolicy@printSupplier');
        Gate::define('manage_supplier','App\Policies\SupplierManagementPolicy@manageSupplier');
        Gate::define('delete_supplier','App\Policies\SupplierManagementPolicy@deleteSupplier');
        Gate::define('preview_supplier','App\Policies\SupplierManagementPolicy@previewSupplier');
                                /*project management policy*/
        Gate::define('all_project','App\Policies\ProjectManagementPolicy@allProject');
        Gate::define('add_project','App\Policies\ProjectManagementPolicy@addProject');
        Gate::define('download_project','App\Policies\ProjectManagementPolicy@downloadProject');
        Gate::define('manage_project','App\Policies\ProjectManagementPolicy@manageProject');
        Gate::define('delete_project','App\Policies\ProjectManagementPolicy@deleteProject');
        Gate::define('preview_project','App\Policies\ProjectManagementPolicy@previewProject');
        Gate::define('single_download','App\Policies\ProjectManagementPolicy@singleDownload');
        Gate::define('single_delete','App\Policies\ProjectManagementPolicy@singleDelete');
                                /*supplier category management policy*/
        Gate::define('add_category','App\Policies\SupplierCategoryManagementPolicy@addCategory');
        Gate::define('category_delete','App\Policies\SupplierCategoryManagementPolicy@categoryDelete');
        Gate::define('category_edit','App\Policies\SupplierCategoryManagementPolicy@categoryEdit');
    }
}
