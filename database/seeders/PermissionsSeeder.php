<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Permissions
        $permissions = [
            'user_index', 'user_create', 'user_store', 'user_show', 'user_edit', 'user_update', 'user_destroy',
            'entity_index', 'entity_create', 'entity_store', 'entity_show', 'entity_edit', 'entity_update', 'entity_destroy',
            'dashboard_index', 'home_index', 'dashboardcontracts_index', 'dashboardcontracts_create', 'dashboardcontracts_store',
            'dashboardcontracts_show', 'dashboardcontracts_edit', 'dashboardcontracts_update', 'dashboardcontracts_destroy',
            'dashboardcontractsdetails_show', 'dashboardcontractsdetails_edit', 'dashboardcontractsdetails_update',
            'dashboardcontractsdetailsfiles_store', 'dashboardcontractsdetailsfiles_destroy', 'panel_index', 'access_index',
            'access_update', 'access_show', 'dashboard_ti-info', 'dashboard_ti-res', 'dashboard_ti-don', 'dashboard_to-info',
            'dashboard_to-res', 'dashboard_to-don', 'dashboardtollouts_index', 'dashboardtollouts_create', 'dashboardtollouts_show',
            'dashboardtollouts_store', 'dashboardtollouts_edit', 'dashboardtollouts_update', 'dashboardtollouts_destroy',
            'dashboardtolloutsdetails_show', 'dashboardtolloutsdetails_edit', 'dashboardtolloutsdetails_update',
            'dashboardtolloutsdetailsfiles_store', 'dashboardtolloutsdetailsfiles_destroy', 'accessrole_index', 'accessrole_store',
            'accessrole_destroy', 'accessrole_create', 'accesspermission_create', 'accesspermission_store', 'mail_TIPDF',
            'mail_TIMailPDF', 'configuration_index', 'configuration_artisan', 'accessrole_update', 'search_select2',
            'content_download', 'privacy_link', 'file_download', 'x01tollin_csv', 'x01tollin_excel', 'x01tollin_pdf',
            'x01tollout_csv', 'x01tollout_excel', 'x01tollout_pdf', 'x01user_csv', 'x01user_excel', 'x01user_pdf',
            'mail_TOMail', 'mail_TOMailPDF'
        ];

        foreach ($permissions as $perm) {
            Permission::firstOrCreate(['name' => $perm, 'guard_name' => 'web']);
        }
    }
}
