<?php

namespace App\Http\Requests;

use Illuminate\Http\Request;
use DB;

class Saran_komentarRequest extends Request
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
            'saran_komentar' => 'required',
            'id_pendaftaran' => 'required'
        ];
    }
}
