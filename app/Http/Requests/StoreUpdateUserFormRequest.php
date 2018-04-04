<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateUserFormRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        $idUser = $this->segment(3);

        return [
            'name'      => 'required|min:3|max:100',
            'email'     => "required|min:3|max:100|unique:users,email,{$idUser},id",
            'password'  => 'max:15',
            'image'     => 'image',
        ];
    }
}
