<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;
    //fillable
    protected $fillable = ['Tipologia', 'description'];

    public function projects(){

        //noi con questa funzione staimo andando a collegare ad una categoria più ipotetici progetti
        return $this->hasMany(Project::class);
    }
}
