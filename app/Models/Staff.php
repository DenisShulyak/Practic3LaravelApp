<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    protected $connection = "mysql";
    protected $table = "staffs";
    protected $primaryKey = "id";
    public function persons()
    {
        return $this->hasMany('App\Models\Person');
    }
}
