<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;


class SupportProgramTypeResource extends JsonResource
{
    
    
    public function toArray($request)
    {
        return parent::toArray($request);


        // return [
        //     'id'             => $this->id,
        // ];
    }
}