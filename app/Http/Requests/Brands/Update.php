<?php

namespace App\Http\Requests\Brands;

use App\Models\Brand;
use Illuminate\Validation\Rule;

class Update extends Store
{
     protected function titleUniqueRule()
    {
        return parent::titleUniqueRule()->ignore($this->brand->id);
    }
}
