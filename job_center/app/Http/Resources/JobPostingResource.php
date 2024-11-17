<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class JobPostingResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'tieu_de' => $this->tieu_de,
            'noi_lam_viec' => $this->noi_lam_viec,
            'muc_luong' => $this->muc_luong,
            'created_at' => $this->created_at->format('Y-m-d H:i:s'),
        ];
    }
}
