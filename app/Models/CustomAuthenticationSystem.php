<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomAuthenticationSystem extends Model
{
    use HasFactory;
    protected $table = "customauthenticationsystem";
    protected $primary_key = "id";
}
