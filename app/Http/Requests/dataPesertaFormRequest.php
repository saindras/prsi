<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class dataPesertaFormRequest extends FormRequest
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
            'namaPeserta' => 'required|min:3|max:50',
            'jk' => 'required',
            'tglLahir' => 'required|date_format:"Y-m-d"',
            'asalSekolah' => 'required',
            'namaKlub' => 'required',
            'umur' => 'required',
            'kelompokUmur' => 'required',            
            'namaKlub' => 'required',
            'waktuSebelum' => 'required|date_format:H:i:s',
            'noLomba1' => 'required',
        ];
    }
}
