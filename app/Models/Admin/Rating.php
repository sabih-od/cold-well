<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    use HasFactory;
    protected $fillable =[
      'blog_id',
      'rating',
    ];

    public function blog()
    {
        return $this->belongsTo(Blog::class, 'blog_id');
    }

}
