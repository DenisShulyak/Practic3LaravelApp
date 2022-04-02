<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Firm extends Model
{
    protected $connection = "mysql";
    protected $table = "firms";
    protected $primaryKey = "id";
}
