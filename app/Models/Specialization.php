<?php

namespace App\Models;

use App\Models\Doctor;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Specialization extends Model
{
    use HasFactory;
    protected $fillable =[
     'spec_name'
    ];
    public function specializations()
{
return $this->belongsto(Doctor::class,'spec_id');

}
}
