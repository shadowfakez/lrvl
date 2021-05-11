<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'subject', 'task', 'author', 'executors', 'status'];
/*

    public function setExecutorsAttribute($value)
    {
        $this->attributes['executors'] = json_encode($value);
    }


    public function getExecutorsAttribute($value)
    {
        return $this->attributes['executors'] = json_decode($value);
    }
*/
}