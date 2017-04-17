<?php
/**
 * Created by: Jesse Griffin
 * Date: 4/16/2017
 */

namespace App\Repositories\Frontend\Store;


use App\Models\Subscription\Packages;
use App\Repositories\BaseRepository;

class PackageRepository extends BaseRepository
{
    const MODEL = Packages::class;
}