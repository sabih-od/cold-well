<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->validate([
            'property_name' => 'required',
            'contact_email' => 'required|email',
            'contact_phone_number' => 'required',
            'property_address' => 'required',
            'zip_code' => 'required',
            'total_bedrooms' => 'required',
            'total_bathrooms' => 'required',
            'total_sq_feet' => 'required',
            'price' => 'required',
            'property_image' => 'required|array|max:6|min:1',
            'property_image.*' => 'image',
            'property_description' => 'required',
        ]);

        $property = new Property();

        if ($request->hasFile('property_image')) {
            foreach ($input['property_image'] as $img) {
                $property->addMedia($img)->toMediaCollection('images');
            }
        }

        $input['user_id'] = Auth::user()->id;

        unset($input['property_image']);

        $property->fill($input)->save();

        return redirect()->route('sellYourHome')->with('success', __('Property Listed Successfully.'));
    }

    public function propertyDetail($id)
    {
        $property = Property::where('id', $id)->with('user')->first();
        $similar_properties = Property::where('id', '<>', $property->id)
            ->where(function ($query) use ($property) {
                $query->where('total_bedrooms', $property->total_bedrooms)
                    ->orWhere('total_bathrooms', $property->total_bathrooms)
                    ->orWhere('total_sq_feet', $property->total_sq_feet);
            })->get();
//        dd($similar_properties);
        return view('front.pages.property-detail', compact('property', 'similar_properties'));

    }


    /**
     * Display the specified resource.
     *
     * @param \App\Models\Property $property
     * @return \Illuminate\Http\Response
     */
    public function show(Property $property)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Property $property
     * @return \Illuminate\Http\Response
     */
    public function edit(Property $property)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Property $property
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Property $property)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Property $property
     * @return \Illuminate\Http\Response
     */
    public function destroy(Property $property)
    {
        //
    }


}
