<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserInformationResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'user_id' => $this->user_id,
            'name' => $this->name,
            'email' => $this->email,
            'image' => $this->image,
            'phone' => $this->phone,
//            'linkedin' => $this->linkedin,
//            'facebook' => $this->facebook,
//            'instagram' => $this->instagram,
//            'twitter' => $this->twitter,
            'location' => $this->location,
            'aboutme' => $this->aboutme,
            'relationships' => [
                'user' => $this->user,
                'template' => $this->template
            ]
        ];
    }
}
