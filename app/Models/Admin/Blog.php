<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Blog extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $fillable = [
        'blog_date',
        'blog_title',
        'blog_heading',
        'blog_description',

    ];

    public function get_blog_image()
    {
        $image_check =  $this->getMedia('blog_banner_image')->first();
        return $image_check ? $image_check->getUrl() : asset("pages/images/portfolio1.jpg");
    }
}
