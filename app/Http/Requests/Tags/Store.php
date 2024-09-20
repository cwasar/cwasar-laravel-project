<?php

namespace App\Http\Requests\Tags;

use App\Models\Tag;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class Store extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }


    public function rules(): array
    {
        return [
            'title' => ['required', 'min:2', 'max:64', $this->titleUniqueRule()],
        ];
    }

    public function attributes()
    {
        return [
            'title' => 'Название',
        ];
    }

    protected function titleUniqueRule()
    {
        return Rule::unique(Tag::class, 'title');
    }
}
