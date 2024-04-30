<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    use HasFactory;
    
    // inserisco le propietà che mi serviranno per riempire i miei campi del form per la validazione
    protected $fillable = [
        'title',
        'description',
        // 'img_path',
        'LinkGit',
        'Tecnology',
        'Type_id'

    ];
    use SoftDeletes;


    //aggiungiamo la possibilità di leggere le tabelle a lui collegate
    //il nostro progetto appartiene ad una sola categoria
    public function type(){
        //con qeusto esmpio noi abbiamo collegato il progetto al type
        return $this->belongsTo(Type::class);            
    }
}
