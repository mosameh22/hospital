<?php

namespace App\Models;

use App\Models\Specialization;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Doctor extends Model
{
    use HasFactory;
    protected $fillable =[
        'name',
        'address',
        'phone',
        'spec_id',
       ];

    public function spec()
{
return $this->hasOne(Specialization::class,'id','spec_id');
}
}
