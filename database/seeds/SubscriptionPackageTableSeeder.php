<?php

use Database\TruncateTable;
use Carbon\Carbon as Carbon;
use Illuminate\Database\Seeder;
use Database\DisableForeignKeys;
use Illuminate\Support\Facades\DB;

class SubscriptionPackageTableSeeder extends Seeder
{
    use DisableForeignKeys, TruncateTable;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->disableForeignKeys();
        $this->truncate('subscription_packages');

        $subscription_packages = [
            [
                'id'         => 1,
                'name'       => 'Essentials',
                'type_id'    => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id'         => 2,
                'name'       => 'Essentials',
                'type_id'    => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id'        => 3,
                'name'      => 'Essentials',
                'type_id'   => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id'         => 4,
                'name'       => 'Essentials Plus',
                'type_id'    => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id'         => 5,
                'name'       => 'Essentials Plus',
                'type_id'    => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id'        => 6,
                'name'      => 'Essentials Plus',
                'type_id'   => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id'         => 7,
                'name'       => 'Business Attire',
                'type_id'    => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id'         => 8,
                'name'       => 'Business Attire',
                'type_id'    => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id'        => 9,
                'name'      => 'School Attire',
                'type_id'   => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id'         => 10,
                'name'       => 'Trendy',
                'type_id'    => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id'         => 11,
                'name'       => 'Trendy',
                'type_id'    => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id'        => 12,
                'name'      => 'Trendy',
                'type_id'   => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id'        => 99,
                'name'      => 'Open Selection',
                'type_id'   => 10,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ];

        DB::table('subscription_packages')->insert($subscription_packages);

        $this->enableForeignKeys();
    }
}
