<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class Lap_kehilanganRequest extends Request
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
            'no_surat_hilang' => 'required',
            'id_pendaftaran' => 'required',
            'keterangan' => 'required',
            'id_daerah' => 'required',
            'no_polisi' => 'required',
            'no_mesin' => 'required',
            'jenis_kendaraan' => 'required',
            'merk_kendaraan' => 'required',
            'warna_kendaraan' => 'required',
            'tanggal_hilang' => 'required'
        ];
    }
}
