<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class CreateOrderRequest extends FormRequest
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
            'kantor' => 'required|exists:App\Models\Kantor,id',
            'kendaraan' => 'required|exists:App\Models\Kendaraan,id',
            'lokasi_tambang' => 'required|exists:App\Models\LokasiTambang,id',
            'driver' => 'required|exists:App\Models\Driver,id',
            'biaya' => 'required',
        ];
    }

    /**
     * Get the JSON format validation error.
     *
     * @return void
     */
    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(
            response()->json([
                'success' => false,
                'errors' => $validator->errors()->all(),
            ], 400)
        );
    }

    /**
     * Get the custom error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'kantor.exists' => 'Unknown Kantor',
            'kendaraan.exists' => 'Unknown Kendaraan',
            'lokasi_tambang.exists' => 'Unknown Tempat Tambang',
            'driver.exists' => 'Unknown Driver',
        ];
    }
}
