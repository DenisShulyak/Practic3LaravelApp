<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vacancy extends Model
{
    protected $connection = "mysql";
    protected $table = "vacancy";
    protected $primaryKey = "id";
}
