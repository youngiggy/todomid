<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Task
 *
 * @mixin \Eloquent
 */
class Task extends Model
{
    /**
     * The attributes that are mass assignable.
     * @var array
     */
    protected $fillable = ['name'];

    public function user()
    {
        $this->belongsTo(User::class);
    }
}
