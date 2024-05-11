<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
    ];
    // Postに対するリレーション
    
    //「1対多」の関係なので'posts'と複数形に
    public function reviewposts()   
    {
        return $this->hasMany(Reviewpost::class);  
}
}
