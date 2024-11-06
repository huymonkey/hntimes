<?php

namespace App\Http\Requests;

use App\Models\Category;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateCategoryRequest extends FormRequest
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
        $id = $this->route('id');

        return [
            'name'      => [
                'required',
                'regex:/^[\p{L}\s]*$/u',
                'max:100',
                Rule::unique(Category::class)->ignore($id)
            ],
            'ordinal'   => ['required', 'numeric', 'integer'],
            'img_cover' => ['nullable', 'image', 'max:2048'],
        ];
    }
}
