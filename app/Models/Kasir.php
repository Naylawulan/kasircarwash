<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kasir extends Model
{
    use HasFactory;
    protected $table = "Kasir";
    protected $fillable = ['email', 'password', 'nama','alamat', 'no_hp'];
}
