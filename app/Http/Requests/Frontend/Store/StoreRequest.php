<?php
/**
 * Created by: Jesse Griffin
 * Date: 4/14/2017
 */

namespace Http\Requests\Frontend\Package;

use App\Http\Requests\Request;

class PackageRequest extends Request
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'input-size'        => 'required',
            'input-category-id' => 'required',
            'input-sku'         => 'required',
            'input-package-id'  => 'required'
        ];
    }
}