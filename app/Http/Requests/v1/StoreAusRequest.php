<?php

namespace App\Http\Requests\v1;

use Illuminate\Foundation\Http\FormRequest;

class StoreAusRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'category_id'      => ['required'],
            'title'           => ['required', 'max:255'],
            'working_hours'   => ['required'],
            'body'            => ['required'],
            'popular'         => ['required', 'boolean'],
            'best_paid'        => ['required']
        ];
    }

    // protected function prepareForValidation()
    // {
    //     $this->merge([
    //         'workingHours' => 'working_hours',
    //         'imageUrl'   => 'image_url',
    //         'bestPaid'   => 'best_paid'
    //     ]);
    // }
}
