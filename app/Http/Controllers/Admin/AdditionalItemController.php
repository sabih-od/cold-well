<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Additional;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use PHPUnit\Exception;

class AdditionalItemController extends Controller
{
    public function indexAdditional()
    {
        $additionals = Additional::get();
        return view('admin.lessons.additional.index', compact('additionals'));
    }

    public function addAdditional()
    {
        return view('admin.lessons.additional.add-additional');
    }

    public function additionalCreate(Request $request)
    {
        try {
            $additional = new Additional();
            $additional->name = $request->title;
            if ($request->hasFile('image')) {
                $image = time() . '_' . $request->file('image')->getClientOriginalName();
                $request->file('image')->move(public_path('admin/images'), $image);
                $additional->image = $image;
            }
            $additional->save();

            return redirect()->route('index.additional')->with('success', 'Additional Item Created Successfully');
        } catch (\Exception $exception) {
            return back()->with('error', $exception->getMessage());
        }
    }

    public function additionalEdit(Additional $additional)
    {
//        $blog->getMedia('blog_image')[0]->getUrl();
//        dd($blog->getMedia('blog_image')[0]->getUrl());
//        dd($blog->getMedia('blog_image')[0]->file_name);
        return view('admin.lessons.additional.edit-additional', compact('additional', ));
    }

    public function additionalUpdate(Request $request, $id)
    {
        $validate = Validator::make($request->all(), [
            'title' => 'required',
            'image' => 'required',
        ],[
            'title.required' => 'Title Field Is Required',
            'image.required' => 'Image is Required',
        ]);

        if ($validate->fails()) {
            return redirect()->back()->with('error', $validate->getMessageBag()->first());
        }
        try {
            $additional = Additional::find($id);
            $additional->name = $request->get('title');
            $oldImage = $request->input('old_image');
            if ($request->hasFile('image')) {
                // Delete the old image if needed
                // ...
                $image = time() . '_' . $request->file('image')->getClientOriginalName();
                $request->file('image')->move(public_path('admin/images'), $image);
                $additional->image = $image;
            } else {
                $additional->image = $oldImage;
            }
            $additional->save();
            return redirect()->route('index.additional')->with('success', 'Additional Item Updated Successfully');

        } catch (Exception $exception) {
            return back()->with('error', $exception->getMessage());
        }
    }

    public function additionalDestroy($id)
    {
        try {
            $additional = Additional::find($id);
            $additional->delete();

            return redirect()->route('index.additional')->with('success', 'Additional Item Deleted Successfully');

        } catch (\Exception $exception) {
            return back()->with('error', $exception->getMessage());
        }
    }
}
