<?php
/**
 * Created by: Jesse Griffin
 * Date: 4/14/2017
 */

namespace App\Http\Requests\Frontend\Store;

use App\Http\Requests\Request;

class StoreRequest extends Request
{
    /**
     * @return bool
     *
     * setting this to false will cause a 403 error, possibly resulting in a redirect to the login screen
     */
    public function authorize()
    {
        return true;
    }

    public function rules()
    {

        /*
         * The keys in this array pertain to the input elements 'name' attribute on the template, NOT THE id!
         */
        return [
            'size'        => 'required',
            'category_id' => 'required',
            'sku'         => 'required',
            'package_id'  => 'required'
        ];
    }
}