<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Admin\Blog;
use App\Models\Admin\Page;
use App\Models\Settings;
use Illuminate\Http\Request;

class BlogsController extends Controller
{
    public function home()
    {
        $home = Page::where('name', 'Home')->first();
//        dd($home->content);
//        $page = Page::where('name', 'Blog')->first();
        return view('home', compact('home'));
    }

    public function blog()
    {
        $blogs = Blog::get();
//        $page = Page::where('name', 'Blog')->first();
//        $count = isset($page) ? $page->getMedia('blog_banner_image')->count() : '';
        return view('blog', compact( 'blogs'));
    }

//    public function blogDetail($id)
//    {
//        $blog = Blog::find($id);
////        $count = isset($blog) ? $blog->getMedia('blog_image')->count() : '';
//        return view('blog-detail', compact('blog'));
//    }
}
