<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pizza extends Model
{
    use HasFactory;

    //by default this model hooks up with the pizzas table, incase you want 
    //to override the table and make this model use a different table then:

         //protected $table = 'another table';


         //this converts array to json and viceversa make it possible to store
         //an array in db inform of json
        protected $casts = [
            'toppings' => 'array'
        ];
}
