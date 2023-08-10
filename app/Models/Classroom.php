<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Classroom extends Model
{

    use HasTranslations;

    protected $table = 'Classrooms';

    public $translatable = ['Name_Class'];
    protected $fillable=['Name_Class','Grade_id'];
    public $timestamps = true;

    public function Grades()
    {
       // return $this->belongsTo('Grads', 'Grade_id');

        return $this->belongsTo('App\Models\Grade','Grade_id','id');
    }

}
