<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointement extends Model
{
    use HasFactory;
    protected $table ="appointments";
    protected $fillable =[
    'name',
    'email',
    'phone',
    'spec_id',
    'age',
    'date',
    'time_from',
    'time_to'
    ];
    public function spec()
    {
    return $this->hasOne(Specialization::class,'id','spec_id');
    }
}
