<?php

use Database\TruncateTable;
use Carbon\Carbon as Carbon;
use Illuminate\Database\Seeder;
use Database\DisableForeignKeys;
use Illuminate\Support\Facades\DB;

/**
 * Class HistoryTypeTableSeeder.
 */
class SizesTableSeeder extends Seeder
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
        $this->truncate('sizes');

        $sizes = [
            [
                'id'         => 1,
                'name'       => 'Extra Small',
                'key'        => 'XS',
            ],
            [
                'id'         => 2,
                'name'       => 'Small',
                'key'        => 'S',
            ],
            [
                'id'         => 3,
                'name'       => 'Medium',
                'key'        => 'M',
            ],
            [
                'id'         => 4,
                'name'       => 'Large',
                'key'        => 'L',
            ],
            [
                'id'         => 5,
                'name'       => 'Extra Large',
                'key'        => 'XL',
            ],
            [
                'id'         => 6,
                'name'       => '2X Large',
                'key'        => '2XL',
            ],
            [
                'id'         => 7,
                'name'       => '3X Large',
                'key'        => '3XL',
            ],
            [
                'id'         => 8,
                'name'       => '4X Large',
                'key'        => '4XL',
            ],

        ];

        DB::table('sizes')->insert($sizes);

        $this->enableForeignKeys();
    }
}
