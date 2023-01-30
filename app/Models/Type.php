<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Project;

class Type extends Model
{
    use HasFactory;
    protected $guarded = ['slug'];
    public function projects()
    {
        return $this->hasMany(Project::class);
    }
}
