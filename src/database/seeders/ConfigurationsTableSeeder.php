<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Carbon\Carbon;

use Illuminate\Support\Facades\DB;

class ConfigurationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $configuration = new \App\Models\Configuration();

        $configuration->create([
            'parent_id'  => 0,
            'key'        => 'general',
            'value'      => 'General',
            'input_type' => 'text',
            'created_by' => 1
        ]);
        $configuration->create([
            'parent_id'  => 0,
            'key'        => 'tax_information',
            'value'      => 'Tax Information',
            'input_type' => 'text',
            'created_by' => 1
        ]);
        $configuration->create([
            'parent_id'  => 0,
            'key'        => 'account_information',
            'value'      => 'Account Information',
            'input_type' => 'text',
            'created_by' => 1
        ]);
        $configuration->create([
            'parent_id'  => 0,
            'key'        => 'seo',
            'value'      => 'SEO',
            'input_type' => 'text',
            'created_by' => 1
        ]);

        $configuration->create([
            'parent_id'  => 1,
            'key'        => 'title',
            'value'      => 'ZipRemit',
            'input_type' => 'text',
            'created_by' => 1
        ]);
        $configuration->create([
            'parent_id'  => 1,
            'key'        => 'name',
            'value'      => 'ZipRemit',
            'input_type' => 'text',
            'created_by' => 1
        ]);
        $configuration->create([
            'parent_id'  => 1,
            'key'        => 'email',
            'value'      => 'info@alchemytech.ca',
            'input_type' => 'text',
            'created_by' => 1
        ]);
        $configuration->create([
            'parent_id'  => 1,
            'key'        => 'phone',
            'value'      => '9426616652',
            'input_type' => 'text',
            'created_by' => 1
        ]);
        $configuration->create([
            'parent_id'  => 1,
            'key'        => 'address',
            'value'      => '5151 Irvine Boulevard, Irvine, CA, USA',
            'input_type' => 'text',
            'created_by' => 1
        ]);
        $configuration->create([
            'parent_id'  => 1,
            'key'        => 'sender_email',
            'value'      => 'sender@gmail.com',
            'input_type' => 'text',
            'created_by' => 1
        ]);
        $configuration->create([
            'parent_id'  => 1,
            'key'        => 'receiver_email',
            'value'      => 'receiver@gmail.com',
            'input_type' => 'text',
            'created_by' => 1
        ]);
        $configuration->create([
            'parent_id'  => 1,
            'key'        => 'logo',
            'value'      => 'logo.png',
            'input_type' => 'file',
            'created_by' => 1
        ]);
        $configuration->create([
            'parent_id'  => 1,
            'key'        => 'favicon',
            'value'      => 'favicon.ico',
            'input_type' => 'file',
            'created_by' => 1
        ]);

        // Tax Information - Main Type = 2
        $configuration->create([
            'parent_id'  => 2,
            'key'        => 'CGST_percentage',
            'value'      => '9',
            'input_type' => 'text',
            'created_by' => 1
        ]);
        $configuration->create([
            'parent_id'  => 2,
            'key'        => 'SGST_percentage',
            'value'      => '9',
            'input_type' => 'text',
            'created_by' => 1
        ]);

        // Account Information - Main Type = 3
        $configuration->create([
            'parent_id'  => 3,
            'key'        => 'GSTIN/UIN',
            'value'      => '12AALFB3456R7ZF',
            'input_type' => 'text',
            'created_by' => 1
        ]);
        $configuration->create([
            'parent_id'  => 3,
            'key'        => 'state_name',
            'value'      => 'Alberta',
            'input_type' => 'text',
            'created_by' => 1
        ]);
        $configuration->create([
            'parent_id'  => 3,
            'key'        => 'code',
            'value'      => '24',
            'input_type' => 'text',
            'created_by' => 1
        ]);
        $configuration->create([
            'parent_id'  => 3,
            'key'        => 'bank_name',
            'value'      => 'HDFC BANK LTD',
            'input_type' => 'text',
            'created_by' => 1
        ]);
        $configuration->create([
            'parent_id'  => 3,
            'key'        => 'account_number',
            'value'      => '1234567890',
            'input_type' => 'text',
            'created_by' => 1
        ]);
        $configuration->create([
            'parent_id'  => 3,
            'key'        => 'branch_name',
            'value'      => 'Vancouver',
            'input_type' => 'text',
            'created_by' => 1
        ]);
        $configuration->create([
            'parent_id'  => 3,
            'key'        => 'IFSC_code',
            'value'      => 'HDFC12345CC',
            'input_type' => 'text',
            'created_by' => 1
        ]);


        // SEO - Main Type = 3
        $configuration->create([
            'parent_id'  => 4,
            'key'        => 'seo_title',
            'value'      => 'ZipRemit',
            'input_type' => 'text',
            'created_by' => 1
        ]);
        $configuration->create([
            'parent_id'  => 4,
            'key'        => 'seo_description',
            'value'      => 'ZipRemit',
            'input_type' => 'textarea',
            'created_by' => 1
        ]);
        $configuration->create([
            'parent_id'  => 4,
            'key'        => 'seo_tags',
            'value'      => 'ZipRemit',
            'input_type' => 'textarea',
            'created_by' => 1
        ]);
        $configuration->create([
            'parent_id'  => 4,
            'key'        => 'google_analytics',
            'value'      => 'ZipRemit',
            'input_type' => 'textarea',
            'created_by' => 1
        ]);
        $configuration->create([
            'parent_id'  => 0,
            'key'        => 'airtime_our_margin',
            'value'      => '2',
            'input_type' => 'numeric',
            'created_by' => 1
        ]);
    }
}