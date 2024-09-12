<?php

namespace App\Http\Requests\Cars;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class Save extends FormRequest
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
        $transmissions = config('car-props.transmission');
        return [
            'brand' => 'required|min:2|max:20',
            'model' => 'required|min:1|max:20',
            'year' => 'required|integer',
            'mileage' => 'required|min:1|max:10000000|integer',
            'transmission' => ['required', Rule::in(array_keys($transmissions))],
            'img' => 'required',
        ];
    }
    public function attributes()
    {
        return [
            'brand' => 'Бренд',
            'model' => 'Модель',
            'year' => 'Год',
            'mileage' => 'Пробег',
            'transmission' => 'Коробка',
            'img' => 'Ссылка на фото',
        ];
    }
}
