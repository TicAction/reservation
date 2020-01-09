<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
   protected	$fillable =[
   	'phone_number',
   	'name',
   	'group',
   ];

   protected $dates = [
   	'created_at',
   	'updated_at',
   ];

   public function users()
   {
   	 return $this->belongsToMany(User::class);
   }

   
}
