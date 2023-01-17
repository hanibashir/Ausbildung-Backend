<?php

namespace App\Http\Requests\v1;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAusRequest extends FormRequest
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
        $httpMethod = $this->method();

        if ($httpMethod == 'PATCH') {
            return [
                'category_id'      => ['sometimes', 'required'],
                'title'           => ['sometimes', 'required', 'max:255'],
                'working_hours'   => ['sometimes', 'required'],
                'body'            => ['sometimes', 'required'],
                'popular'         => ['sometimes', 'required', 'boolean'],
                'best_paid'        => ['sometimes', 'required']
            ];
        } else {
            return [
                'category_id'      => ['required'],
                'title'           => ['required', 'max:255'],
                'working_hours'   => ['required'],
                'body'            => ['required'],
                'popular'         =>  ['required', 'boolean'],
                'best_paid'        => ['required']
            ];
        }
    }
}
