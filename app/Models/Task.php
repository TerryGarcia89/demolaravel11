<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
        'completed' => 'boolean',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function path(){
        return '/tasks/'. $this->id;
    }

    public function markAsCompleted()
    {
        $this->completed = true;
        $this->save();
    }
}
