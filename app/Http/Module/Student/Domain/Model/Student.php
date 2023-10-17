<?php

namespace App\Http\Module\Student\Domain\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticatableTrait;

class Student extends Model implements Authenticatable
{
    use HasFactory;
    use AuthenticatableTrait;

    protected $fillable=[
        'name',
        'email',
        'password',
        'class',
        'dateOfBirth',
        'profilePicture'
    ];

    public function courses(){
        return $this->belongsToMany(Course::class);
    }
}
