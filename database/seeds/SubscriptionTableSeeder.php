<?php

use Database\TruncateTable;
use Carbon\Carbon as Carbon;
use Illuminate\Database\Seeder;
use Database\DisableForeignKeys;
use Illuminate\Support\Facades\DB;

/**
 * Class SubscriptionTableSeeder
 */
class SubscriptionTableSeeder extends Seeder
{
    use DisableForeignKeys, TruncateTable;

    /**
     * Run the database seed.
     *
     * @return void
     */
    public function run()
    {
        $this->disableForeignKeys();
        $this->truncate('subscriptions');

        $subscriptions = [
            [
                'id'         => 1,
                'name'       => 'Delivered Weekly for 1 Month',
                'duration'   => '1 Month',
                'frequency'  => 'Weekly'
            ],
            [
                'id'         => 2,
                'name'       => 'Delivered Bi-Weekly for 1 Month',
                'duration'   => '1 Month',
                'frequency'  => 'BiWeekly'
            ],
            [
                'id'         => 3,
                'name'       => 'Delivered Twice per Week for 1 Month',
                'duration'   => '1 Month',
                'frequency'  => 'Twice a Week'
            ],
            [
                'id'         => 4,
                'name'       => 'Delivered Weekly for 2 Months',
                'duration'   => '2 Months',
                'frequency'  => 'Weekly'
            ],
            [
                'id'         => 5,
                'name'       => 'Delivered BiWeekly for 2 Months',
                'duration'   => '2 Months',
                'frequency'  => 'BiWeekly'
            ],            [
                'id'         => 6,
                'name'       => 'Delivered Twice per Week for 2 Months',
                'duration'   => '2 Months',
                'frequency'  => 'Twice a Week'
            ],
            [
                'id'         => 7,
                'name'       => 'Delivered Weekly for 3 Months',
                'duration'   => '3 Months',
                'frequency'  => 'Weekly'
            ],
            [
                'id'         => 8,
                'name'       => 'Delivered BiWeekly for 3 Months',
                'duration'   => '3 Months',
                'frequency'  => 'BiWeekly'
            ],
            [
                'id'         => 9,
                'name'       => 'Delivered Twice per Week for 3 Months',
                'duration'   => '3 Months',
                'frequency'  => 'Twice a Week'
            ],
            [
                'id'         => 10,
                'name'       => 'Delivered Monthly for 2 Months',
                'duration'   => '2 Months',
                'frequency'  => 'Monthly'
            ],
            [
                'id'         => 11,
                'name'       => 'Delivered Monthly for 3 Months',
                'duration'   => '3 Months',
                'frequency'  => 'Monthly'
            ],
            [
                'id'         => 12,
                'name'       => 'Delivered Weekly for 4 Months',
                'duration'   => '4 Months',
                'frequency'  => 'Weekly'
            ],
            [
                'id'         => 13,
                'name'       => 'Delivered Bi-Weekly for 4 Months',
                'duration'   => '4 Month',
                'frequency'  => 'BiWeekly'
            ],
            [
                'id'         => 14,
                'name'       => 'Delivered Twice per Week for 4 Months',
                'duration'   => '4 Months',
                'frequency'  => 'Twice a Week'
            ],
            [
                'id'         => 15,
                'name'       => 'Delivered Monthly for 4 Months',
                'duration'   => '4 Months',
                'frequency'  => 'Monthly'
            ],
            [
                'id'         => 16,
                'name'       => 'Delivered Twice per Week for 6 Months',
                'duration'   => '6 Months',
                'frequency'  => 'Twice a Week'
            ],
            [
                'id'         => 17,
                'name'       => 'Delivered Weekly for 6 Months',
                'duration'   => '6 Months',
                'frequency'  => 'Weekly'
            ],
            [
                'id'         => 18,
                'name'       => 'Delivered BiWeekly for 6 Months',
                'duration'   => '6 Months',
                'frequency'  => 'BiWeekly'
            ],
            [
                'id'         => 19,
                'name'       => 'Delivered Monthly for 6 Months',
                'duration'   => '6 Months',
                'frequency'  => 'Monthly'
            ],
            [
                'id'         => 20,
                'name'       => 'Delivered Monthly for 1 Year',
                'duration'   => '12 Months',
                'frequency'  => 'Monthly'
            ],            [
                'id'         => 21,
                'name'       => 'Delivered Twice per Week for 1 Year',
                'duration'   => '12 Months',
                'frequency'  => 'Twice a Week'
            ],
            [
                'id'         => 22,
                'name'       => 'Delivered Weekly for 1 Year',
                'duration'   => '12 Months',
                'frequency'  => 'Weekly'
            ],
            [
                'id'         => 23,
                'name'       => 'Delivered BiWeekly for 1 Year',
                'duration'   => '12 Months',
                'frequency'  => 'BiWeekly'
            ],

        ];

        DB::table('subscriptions')->insert($subscriptions);

        $this->enableForeignKeys();
    }
}
