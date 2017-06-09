<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class PenemuanRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return TRUE;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'id_lap_kehilangan' => 'required',
            'no_polisi_temuan' => 'required',
            'tanggal_temuan' => 'required',
            'jenis_temuan' => 'required',
            'merk_temuan' => 'required',
            'warna_temuan' => 'required',
            'no_mesin_temuan' => 'required',
            'deskripsi_temuan' => 'required'
        ];
    }
}
