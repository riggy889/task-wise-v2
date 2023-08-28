<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TaskGroup extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'task_groups';
    protected $primaryKey = 'id';

    protected $fillable = [
        'user_id',
        'name',
        'status',
    ];
}
