<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $connection = "mysql";
    protected $table = "persons";
    protected $primaryKey = "id";
    public function staffs()
    {
        return $this->hasMany('App\Models\Staff');
    }
}
