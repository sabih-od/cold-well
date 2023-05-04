<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Lesson;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use PHPUnit\Exception;

class LessonController extends Controller
{
    public function indexLesson()
    {
        $lessons = Lesson::get();
        return view('admin.lessons.lesson.index', compact('lessons'));
    }

    public function addLesson()
    {
        return view('admin.lessons.lesson.add-lesson');
    }

    public function lessonCreate(Request $request)
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
            $lesson = new Lesson();
            $lesson->lesson_name = $request->add_lesson_title;
//            $lesson->blog_title = $request->add_blog_title;
//            $lesson->blog_heading = $request->heading;
//            $lesson->blog_description = $request->add_blog_description;
//            $lesson->addMediaFromRequest('add_blog_image')->toMediaCollection('blog_image');
            $lesson->save();
//            return redirect()->route('index.lesson')->with('success', 'Lesson Created Successfully');
            return redirect()->back()->with('success', 'Lesson Created Successfully');
        } catch (\Exception $exception) {
            return back()->with('error', $exception->getMessage());
        }
    }

    public function lessonEdit(Lesson $lesson)
    {
//        $blog->getMedia('blog_image')[0]->getUrl();
//        dd($blog->getMedia('blog_image')[0]->getUrl());
//        dd($blog->getMedia('blog_image')[0]->file_name);
        return view('admin.lessons.lesson.edit-lesson', compact('lesson', ));
    }

    public function lessonUpdate(Request $request, $id)
    {
        $validate = Validator::make($request->all(), [
//            'date' => 'required',
//            'add_blog_description' => 'required',
            'add_lesson_title' => 'required',
//            'heading' => 'required',
        ],[
//            'date.required' => 'Date is Required',
//            'add_blog_description.required' => 'Description Field Is Required',
            'add_lesson_title.required' => 'Title Field Is Required',
//            'heading.required' => 'heading is Required',
        ]);

        if ($validate->fails()) {
            return redirect()->back()->with('error', $validate->getMessageBag()->first());
        }
        try {
            $lesson = Lesson::find($id);
//            if ($request->has('add_blog_image')) {
//                $blog->addMediaFromRequest('add_blog_image')->toMediaCollection('blog_image');
//            }
//            $blog->blog_date = $request->get('date');
            $lesson->lesson_name = $request->get('add_lesson_title');
//            $blog->blog_heading = $request->get('heading');
//            $blog->blog_description = $request->get('add_blog_description');
            $lesson->save();
            return redirect()->route('index.lesson')->with('success', 'Lesson Updated Successfully');

        } catch (Exception $exception) {
            return back()->with('error', $exception->getMessage());
        }
    }

    public function lessonDestroy($id)
    {
        try {
            $lesson = Lesson::find($id);
            $lesson->delete();

            return redirect()->route('index.lesson')->with('success', 'lesson Deleted Successfully');

        } catch (\Exception $exception) {
            return back()->with('error', $exception->getMessage());
        }
    }
}
