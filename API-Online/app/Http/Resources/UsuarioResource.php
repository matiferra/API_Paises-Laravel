<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UsuarioResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'email'=> $this->email,
            'token'=> $this->token,
           /* 'continente' =>  $this->datos->continente,
            'pais' =>  $this->datos->pais,
            'capital' =>  $this->datos->capital,
            'GMT_UTC' =>  $this->datos->GMT_UTC,
            'latitud' =>  $this->datos->latitud,
            'longuitud' =>  $this->datos->longuitud,*/
        ];
    }
}
