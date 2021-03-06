<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class MemberResource extends JsonResource
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
      'type'          => 'users',
      'id'            => (int)$this->id,
      'name'          => (string)$this->name,
      'email'          => (string)$this->email,
      'datetimes' => $this->datetimes,
    ];
    }
}
