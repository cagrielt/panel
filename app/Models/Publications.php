<?php

namespace App\Models;

use App\Models\Traits\Attributes\PublicationsAttributes;
use App\Models\Traits\ModelAttributes;
use Illuminate\Database\Eloquent\SoftDeletes;

class Publications extends BaseModel
{
    use ModelAttributes, SoftDeletes, PublicationsAttributes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['year', 'link', 'description', 'status'];
}
