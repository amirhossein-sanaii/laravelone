<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class task extends Model
{
    use HasFactory;
    protected $table = 'Tasks_table';
    protected $fillable = [
        'idprogect',
        'titletask',
        'descriptiontask',
        'datestarttask',
        'dateendtask',
        'timerequired',
        'status',
        'progect_id'
    ];

    public function taskk()
    {
      return $this->belongsTo(progect::class,'progect_id');
    }

}
