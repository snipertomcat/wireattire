<?php

namespace App\Models\Store;

use Illuminate\Database\Eloquent\Model;

class ModalystProduct extends Model
{
    protected $fillable = ['image', 'title', 'title_short', 'price', 'commission'];

    protected $table = 'modalyst_product';
}
