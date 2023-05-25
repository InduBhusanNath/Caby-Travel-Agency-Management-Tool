<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class userModel extends Model
{
     use HasFactory;
     protected $table="table_users";
     protected $primaryKey="id";
     public $timestamps=false;
     protected $fillable=[
         'entry_date',
         'name',
         'username',
         'phone',
         'password',
         'designation',
         'address',
         'admin_status'
     ];
     

}
