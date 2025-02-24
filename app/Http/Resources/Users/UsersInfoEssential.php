<?php

namespace App\Http\Resources\Users;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UsersInfoEssential extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return([
            'id' => $this->id,
            'name' => $this->name,
            'email' => $this->email,
            'address' => $this->address,
            'antique' => 'Miembro desde hace ' . round(Carbon::parse($this->created_at)->diffInDays(Carbon::now())) . ' días'
        ]);
    }
}
