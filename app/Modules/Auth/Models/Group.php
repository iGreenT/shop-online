<?php

namespace App\Modules\Auth\Models;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array<string>
     */
    protected $fillable = [
        'name',
        'alias',
    ];
    
    /**
     * casts
     *
     * @var array<string>
     */
    protected $casts = [
        'name'  => 'string',
        'alias' => 'string',
    ];
}