<?php

namespace App\Traits;

use Carbon\Carbon;
use Illuminate\Http\JsonResponse;
use App\Models\Postulant;
use Illuminate\Support\Facades\Crypt;

trait SessionPostulant
{
    /**
     * @param $data
     * @param string $message
     * @param int $code
     * @return \Illuminate\Http\JsonResponse
     */
    public function LoginPostulant($data)
    {
        $postulant = Postulant::where('rut',$data['rut'])->first();
        if($postulant && Crypt::decryptString($postulant->password) == $data['pass']){return true;};

        return false;
    }

  
}
