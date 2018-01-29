<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReceptionRequest extends FormRequest
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
            'technical_id'   => 'required',
            'nombre_cliente' => 'required',
            'telefono'       => 'required',
            'fecharecepcion' => 'required',
            'problema'       => 'required',
            'estado'         => 'required',
        ];
    }
}
