<?php

namespace App\Http\Requests\Brands;

use App\Models\Brand;
use App\Models\Car;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class Store extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => ['required', 'min:2', 'max:64', $this->titleUniqueRule()],
            'description' => ['required'],
            'country_id' => ['required'],
        ];
    }
    public function attributes()
    {
        return [
            'title' => 'Название',
            'description' => 'Описание',
            'country_id' => 'Страна'
        ];
    }

    protected function titleUniqueRule()
    {
        return Rule::unique(Brand::class, 'title');
    }
}
