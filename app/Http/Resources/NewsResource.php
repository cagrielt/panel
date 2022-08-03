<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class NewssResource extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request
     *
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'intived_number' => $this->intived_number,
            'invited_talks' => $this->invited_talks,
            'status' => $this->status,
            'display_status' => $this->display_status,
            'created_at' => $this->created_at->toDateTimeString(),
            'updated_at' => $this->updated_at->toDateTimeString(),
        ];
    }
}
