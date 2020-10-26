<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class progect extends Model
{
    use HasFactory;
    protected $table = 'progects_table';
    protected $fillable = [
        'nameprogect',
        'descriptionprogect'
    ];

    public function pro()
{
    return $this->hasMany(task::class);
}


}
