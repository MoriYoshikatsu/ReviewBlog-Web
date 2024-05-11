<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reviewpost extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'body',
        'tag_id'
    ];
    // Tagに対するリレーション
    
    //「多対1」の関係なので'tag'と単数形に
    public function tag()   
    {
        return $this->belongsTo(Tag::class);  
}

    public function getPaginateByLimit(int $limit_count = 10)
    {
        return $this::with('tag')->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
}