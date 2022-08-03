<?php

namespace App\Models;

use App\Models\Traits\Attributes\NewsAttributes;
use App\Models\Traits\ModelAttributes;
use Illuminate\Database\Eloquent\SoftDeletes;

class News extends BaseModel
{
    use ModelAttributes, SoftDeletes, NewsAttributes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['intived_number', 'invited_talks', 'status'];
}
