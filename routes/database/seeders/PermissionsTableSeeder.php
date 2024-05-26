<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'    => 1,
                'title' => 'user_management_access',
            ],
            [
                'id'    => 2,
                'title' => 'permission_create',
            ],
            [
                'id'    => 3,
                'title' => 'permission_edit',
            ],
            [
                'id'    => 4,
                'title' => 'permission_show',
            ],
            [
                'id'    => 5,
                'title' => 'permission_delete',
            ],
            [
                'id'    => 6,
                'title' => 'permission_access',
            ],
            [
                'id'    => 7,
                'title' => 'role_create',
            ],
            [
                'id'    => 8,
                'title' => 'role_edit',
            ],
            [
                'id'    => 9,
                'title' => 'role_show',
            ],
            [
                'id'    => 10,
                'title' => 'role_delete',
            ],
            [
                'id'    => 11,
                'title' => 'role_access',
            ],
            [
                'id'    => 12,
                'title' => 'user_create',
            ],
            [
                'id'    => 13,
                'title' => 'user_edit',
            ],
            [
                'id'    => 14,
                'title' => 'user_show',
            ],
            [
                'id'    => 15,
                'title' => 'user_delete',
            ],
            [
                'id'    => 16,
                'title' => 'user_access',
            ],
            [
                'id'    => 17,
                'title' => 'slider_create',
            ],
            [
                'id'    => 18,
                'title' => 'slider_edit',
            ],
            [
                'id'    => 19,
                'title' => 'slider_show',
            ],
            [
                'id'    => 20,
                'title' => 'slider_delete',
            ],
            [
                'id'    => 21,
                'title' => 'slider_access',
            ],
            [
                'id'    => 22,
                'title' => 'about_management_create',
            ],
            [
                'id'    => 23,
                'title' => 'about_management_edit',
            ],
            [
                'id'    => 24,
                'title' => 'about_management_show',
            ],
            [
                'id'    => 25,
                'title' => 'about_management_delete',
            ],
            [
                'id'    => 26,
                'title' => 'about_management_access',
            ],
            [
                'id'    => 27,
                'title' => 'about_manage_access',
            ],
            [
                'id'    => 28,
                'title' => 'organization_committee_create',
            ],
            [
                'id'    => 29,
                'title' => 'organization_committee_edit',
            ],
            [
                'id'    => 30,
                'title' => 'organization_committee_show',
            ],
            [
                'id'    => 31,
                'title' => 'organization_committee_delete',
            ],
            [
                'id'    => 32,
                'title' => 'organization_committee_access',
            ],
            [
                'id'    => 33,
                'title' => 'co_host_malaysium_create',
            ],
            [
                'id'    => 34,
                'title' => 'co_host_malaysium_edit',
            ],
            [
                'id'    => 35,
                'title' => 'co_host_malaysium_show',
            ],
            [
                'id'    => 36,
                'title' => 'co_host_malaysium_delete',
            ],
            [
                'id'    => 37,
                'title' => 'co_host_malaysium_access',
            ],
            [
                'id'    => 38,
                'title' => 'speaker_create',
            ],
            [
                'id'    => 39,
                'title' => 'speaker_edit',
            ],
            [
                'id'    => 40,
                'title' => 'speaker_show',
            ],
            [
                'id'    => 41,
                'title' => 'speaker_delete',
            ],
            [
                'id'    => 42,
                'title' => 'speaker_access',
            ],
            [
                'id'    => 43,
                'title' => 'submission_create',
            ],
            [
                'id'    => 44,
                'title' => 'submission_edit',
            ],
            [
                'id'    => 45,
                'title' => 'submission_show',
            ],
            [
                'id'    => 46,
                'title' => 'submission_delete',
            ],
            [
                'id'    => 47,
                'title' => 'submission_access',
            ],
            [
                'id'    => 48,
                'title' => 'exhibition_sponsorship_access',
            ],
            [
                'id'    => 49,
                'title' => 'stall_create',
            ],
            [
                'id'    => 50,
                'title' => 'stall_edit',
            ],
            [
                'id'    => 51,
                'title' => 'stall_show',
            ],
            [
                'id'    => 52,
                'title' => 'stall_delete',
            ],
            [
                'id'    => 53,
                'title' => 'stall_access',
            ],
            [
                'id'    => 54,
                'title' => 'strategic_partner_create',
            ],
            [
                'id'    => 55,
                'title' => 'strategic_partner_edit',
            ],
            [
                'id'    => 56,
                'title' => 'strategic_partner_show',
            ],
            [
                'id'    => 57,
                'title' => 'strategic_partner_delete',
            ],
            [
                'id'    => 58,
                'title' => 'strategic_partner_access',
            ],
            [
                'id'    => 59,
                'title' => 'venu_create',
            ],
            [
                'id'    => 60,
                'title' => 'venu_edit',
            ],
            [
                'id'    => 61,
                'title' => 'venu_show',
            ],
            [
                'id'    => 62,
                'title' => 'venu_delete',
            ],
            [
                'id'    => 63,
                'title' => 'venu_access',
            ],
            [
                'id'    => 64,
                'title' => 'abstruct_submission_create',
            ],
            [
                'id'    => 65,
                'title' => 'abstruct_submission_edit',
            ],
            [
                'id'    => 66,
                'title' => 'abstruct_submission_show',
            ],
            [
                'id'    => 67,
                'title' => 'abstruct_submission_delete',
            ],
            [
                'id'    => 68,
                'title' => 'abstruct_submission_access',
            ],
            [
                'id'    => 69,
                'title' => 'registration_create',
            ],
            [
                'id'    => 70,
                'title' => 'registration_edit',
            ],
            [
                'id'    => 71,
                'title' => 'registration_show',
            ],
            [
                'id'    => 72,
                'title' => 'registration_delete',
            ],
            [
                'id'    => 73,
                'title' => 'registration_access',
            ],
            [
                'id'    => 74,
                'title' => 'event_create',
            ],
            [
                'id'    => 75,
                'title' => 'event_edit',
            ],
            [
                'id'    => 76,
                'title' => 'event_show',
            ],
            [
                'id'    => 77,
                'title' => 'event_delete',
            ],
            [
                'id'    => 78,
                'title' => 'event_access',
            ],
            [
                'id'    => 79,
                'title' => 'important_date_create',
            ],
            [
                'id'    => 80,
                'title' => 'important_date_edit',
            ],
            [
                'id'    => 81,
                'title' => 'important_date_show',
            ],
            [
                'id'    => 82,
                'title' => 'important_date_delete',
            ],
            [
                'id'    => 83,
                'title' => 'important_date_access',
            ],
            [
                'id'    => 84,
                'title' => 'announcement_create',
            ],
            [
                'id'    => 85,
                'title' => 'announcement_edit',
            ],
            [
                'id'    => 86,
                'title' => 'announcement_show',
            ],
            [
                'id'    => 87,
                'title' => 'announcement_delete',
            ],
            [
                'id'    => 88,
                'title' => 'announcement_access',
            ],
            [
                'id'    => 89,
                'title' => 'committee_category_create',
            ],
            [
                'id'    => 90,
                'title' => 'committee_category_edit',
            ],
            [
                'id'    => 91,
                'title' => 'committee_category_show',
            ],
            [
                'id'    => 92,
                'title' => 'committee_category_delete',
            ],
            [
                'id'    => 93,
                'title' => 'committee_category_access',
            ],
            [
                'id'    => 94,
                'title' => 'profile_password_edit',
            ],
        ];

        Permission::insert($permissions);
    }
}
