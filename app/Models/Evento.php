<?php


namespace App\Models;
use Illuminate\Database\Eloquent\Model;
/**
 * Clase para alojar al modelo Evento 
 */
class Evento extends Model{
    //put your code here
    protected $table = 'evento';
    protected  $primaryKey = 'evento_id'; 
    public $timestamps =false;
    protected  $fillable = ['nombre','ruta','lugar','fecha'];
    protected $guarded= ['evento_id'];
   
   
    
}
