<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class KomunitasRequest extends FormRequest
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
        return [
            //
            'judul'=>'required|max:255',
            'pic'=>'required|max:255',
            'no_wa'=>'required',
            'deskripsi'=>'required'
        ];
    }
}
