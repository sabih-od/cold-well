<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use PHPUnit\Exception;

class BlogController extends Controller
{
    public function indexBlog()
    {
        $blogs = Blog::get();
        return view('admin.blog.index', compact('blogs'));
    }

    public function addBlog()
    {
        return view('admin.blog.add-blog');
    }

    public function blogCreate(Request $request)
    {
//        $validate = Validator::make($request->all(), [
//            'add_blog_image' => 'required',
//            'add_blog_description' => 'required',
//            'add_blog_title' => 'required',
//        ],[
//            'add_blog_image.required' => 'Image Field Is Required',
//            'add_blog_description.required' => 'Description Field Is Required',
//            'add_blog_title.required' => 'Title Field Is Required',
//        ]);
//
//        if ($validate->fails()) {
//            return redirect()->back()->with('error', $validate->getMessageBag()->first());
//        }
        try {
            $blog = new Blog();
            $blog->blog_date = $request->date;
            $blog->blog_title = $request->add_blog_title;
            $blog->blog_heading = $request->heading;
            $blog->blog_description = $request->add_blog_description;
            $blog->addMediaFromRequest('add_blog_image')->toMediaCollection('blog_image');
            $blog->save();
            return redirect()->route('index.blog')->with('success', 'Blog Created Successfully');
        } catch (\Exception $exception) {
            return back()->with('error', $exception->getMessage());
        }
    }

    public function blogEdit(Blog $blog)
    {
//        $blog->getMedia('blog_image')[0]->getUrl();
//        dd($blog->getMedia('blog_image')[0]->getUrl());
//        dd($blog->getMedia('blog_image')[0]->file_name);
        return view('admin.blog.edit-blog', compact('blog', ));
    }

    public function blogUpdate(Request $request, $id)
    {
        $validate = Validator::make($request->all(), [
            'date' => 'required',
//            'add_blog_image' => 'required',
            'add_blog_description' => 'required',
            'add_blog_title' => 'required',
            'heading' => 'required',
        ],[
            'date.required' => 'Date is Required',
            'add_blog_description.required' => 'Description Field Is Required',
            'add_blog_title.required' => 'Title Field Is Required',
            'heading.required' => 'heading is Required',
        ]);

        if ($validate->fails()) {
            return redirect()->back()->with('error', $validate->getMessageBag()->first());
        }
        try {
            $blog = Blog::find($id);
            if ($request->has('add_blog_image')) {
                $blog->clearMediaCollection('blog_image');
                $blog->addMediaFromRequest('add_blog_image')->toMediaCollection('blog_image');
            }
            $blog->blog_date = $request->get('date');
            $blog->blog_title = $request->get('add_blog_title');
            $blog->blog_heading = $request->get('heading');
            $blog->blog_description = $request->get('add_blog_description');
            $blog->save();
            return redirect()->route('index.blog')->with('success', 'Blog Updated Successfully');

        } catch (Exception $exception) {
            return back()->with('error', $exception->getMessage());
        }
    }

    public function blogDestroy($id)
    {
        try {
            $blog = Blog::find($id);
            $blog->delete();

            return redirect()->route('index.blog')->with('success', 'Blog Deleted Successfully');

        } catch (\Exception $exception) {
            return back()->with('error', $exception->getMessage());
        }
    }
}
