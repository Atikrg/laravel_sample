<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    use HasFactory;
  
    public $table = "userst";
    protected $fillable = ["id","full_name","email", "password", "number"];
    

    
/* id
full_name
email
password
number */


}