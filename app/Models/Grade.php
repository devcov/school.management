<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;


class Grade extends Model
{

    use HasTranslations;

    public $translatable = ['Name'];

    protected $fillable=['Name','Notes'];

    protected $table = 'grads';
    public $timestamps = true;



    // علاقة المراحل الدراسية لجلب الاقسام المتعلقة بكل مرحلة
    public function Sections()
    {
        return $this->hasMany('App\Models\Section', 'Grade_id','id');
    }

    // علاقة المراحل الدراسية لجلب الصفوف المتعلقة بكل مرحلة

    public function Classroom()
    {
        return $this->hasMany('App\Models\Classroom', 'Grade_id');
    }

}
