<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Reviews;
use Illuminate\Http\Request;

class ReviewsController extends Controller
{
    public function index()
    {
        try {
            if (request()->ajax()) {
                return datatables()->of(Reviews::orderBy('created_at','desc')->get())
                    ->addColumn('status', function ($data) {
                        if($data->status == 1){
                            return '<span class="badge badge-success">Enabled</span>';
                        }else{
                            return '<span class="badge badge-warning">Disabled</span>';
                        }
                    })->addColumn('name', function ($data) {
                        return $data->name;
                    })->addColumn('email', function ($data) {
                        return $data->email;
                    })->addColumn('review', function ($data) {
                        return $data->review;
                    })->addColumn('date_added', function ($data) {
                        $date = date_create($data->created_at);
                        return date_format($date, 'd-m-Y');
                    })
                    ->addColumn('action', function ($data) {
                        return '<a title="View" href="review/' . $data->id . '" class="btn btn-dark btn-sm"><i class="fa fa-eye"></i></a>&nbsp;<a title="Edit" href="review/edit/' . $data->id . '" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></a>&nbsp;<button title="Delete" type="button" name="delete" id="' . $data->id . '" class="delete btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>';
                    })->rawColumns(['status','action'])->make(true);
            }
        } catch (\Exception $ex) {
            return redirect('/')->with('error', $ex->getMessage());
        }
        return view('admin.reviews.index');
    }

    public function show($id)
    {
        $reviews = Reviews::where('id',$id)->firstOrFail();
        return view('admin.reviews.show',compact('reviews'));
    }

    public function edit(Request $request, $id){
        $reviews = Reviews::where('id',$id)->first();
        if(empty($reviews)){
            abort(404);
        }
        if($request->method() == 'POST'){
            try{
                $this->validate($request, array(
                    'name' => 'required',
                    'email' => 'required',
                    'review' => 'required|min:10|max:500',
//                    'status' => 'required',

                ));


                $reviews->name = $request->input('name');
                $reviews->email = $request->input('email');
                $reviews->review = $request->input('review');
                $reviews->status = $request->input('status') ? 1 : 0;
                $reviews->save();
                return redirect(route('review.index'))->with('success', 'Review Updated Successfully');
            }catch(\Exception $ex){
                return redirect(route('review.index'))->with('error', $ex->getMessage());
            }

        }
        return view('admin.reviews.edit',compact('reviews'));
    }

    public function destroy($id)
    {
        $content = Reviews::find($id);
        $content->delete();//
//        echo 1;

    }



}
