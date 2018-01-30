<?php

namespace Garantia3\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrdenUpdateRequest extends FormRequest
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
            'numero' => 'required',
            'sucursal' =>'required',
            'chasis' => 'required|size:17',
            'apertura' => 'required|date',
            'cierre' => 'required|date|after_or_equal:apertura',
            'retiro' => 'required|date|after_or_equal:cierre',
            'estado' => 'required',
        ];
    }
}
