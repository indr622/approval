<?php

namespace IndraBasuki\Approval\Models;

use Illuminate\Database\Eloquent\Model;

class Approval extends Model
{
    protected $table = 'approval';
    protected $fillable = [
        'name',
        'description',
        'type',
    ];
}
