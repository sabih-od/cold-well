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
        $data = new Property();

        $input = $request->all();

        $validator = Validator::make($request->all(), [
            'property_name' => 'required',
            'contact_email' => 'required|email',
            'contact_phone_number' => 'required',
            'property_address' => 'required',
            'zip_code' => 'required',
            'total_bedrooms' => 'required',
            'total_bathrooms' => 'required',
            'total_sq_feet' => 'required',
            'property_image' => 'required',
            'property_description' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }


        if ($request->hasFile('property_image')) {
            $profileImage = time() . '_' . $request['property_image']->getClientOriginalName();
            $request['property_image']->move(public_path() . '/images/properties/', $profileImage);
            // Update the user's image field
            $input['property_image'] = $profileImage;

        }

        $input['user_id'] = Auth::user()->id;

        $data->fill($input)->save();

        return redirect()->route('sellYourHome')->with('success', __('Property Listed Successfully.'));
    }

    public function propertyDetail($id)
    {
        $property = Property::where('id', $id)->first();

        return view('front.pages.property-detail', compact('property'));

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
