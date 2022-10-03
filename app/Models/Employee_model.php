<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee_model extends Model
{
    use HasFactory;
    public $table = 'employees';
    public $timestamps = false;
    protected $primarykey = 'id';
    protected $fillable = [
        'nip',
        'name',
        'address'
    ];
}
