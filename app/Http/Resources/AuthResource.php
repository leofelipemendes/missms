<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AuthResource extends JsonResource
{

    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {

        return [
            "token" => $this->plainTextToken,
//            "name" => $this->name,
//            "abilities" => "['*']",
//            "expires_at" => null,
//            "tokenable_id" => 1,
//            "tokenable_type" => "App\Models\User",
//            "updated_at" => "2024-05-27 01:19:04",
//            "created_at" => "2024-05-27 01:19:04",
//            "id" => 5
        ];
    }
}
