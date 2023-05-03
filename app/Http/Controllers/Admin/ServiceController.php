<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use PHPUnit\Exception;

class ServiceController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $services = Service::get();
//        dd($services);
        return view('admin.service.index', compact('services'));
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function addService()
    {
        return view('admin.service.add-service');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function serviceCreate(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'service_title' => 'required',
            'service_description' => 'required',
        ], [
            'service_title.required' => 'Name Field Is Required',
            'service_description.required' => 'Description Field Is Required',
        ]);

        if ($validate->fails()) {
            return redirect()->back()->with('error', $validate->getMessageBag()->first());
        }
        try {
            $services = new Service();
            $services->service_title = $request['service_title'];
            $services->service_description = $request['service_description'];
            $services->addMediaFromRequest('service_image')->toMediaCollection('services_image');
            $services->save();

            return redirect()->route('index.service')->with('success', 'Service Created Successfully');
        } catch (\Exception $exception) {
            return back()->with('error', $exception->getMessage());
        }

    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function serviceEdit($id)
    {
        $service = Service::where('id', $id)->first();
//        $service->clearMediaCollection('services_image');
        isset($service) ? $service->getMedia('services_image') : '';
//        dd($service);
        return view('admin.service.edit-service', compact('service'));
    }

    /**
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function serviceUpdate(Request $request, $id)
    {
//        $validate = Validator::make($request->all(), [
//            'service_title' => 'required',
//            'service_description' => 'required',
//        ], [
//            'service_title.required' => 'Name Field Is Required',
//            'service_description.required' => 'Description Field Is Required',
//        ]);
//
//        if ($validate->fails()) {
//            return redirect()->back()->with('error', $validate->getMessageBag()->first());
//        }

        try {
            $service = Service::find($id);

            $service->service_title = $request['service_title'];
            $service->service_description = $request['service_description'];
//            dd($request->all());
            if ($request->has('service_image')) {
                $service->clearMediaCollection('services_image');
                $service->addMediaFromRequest('service_image')->toMediaCollection('services_image');
            }

            $service->update();

            return redirect()->route('index.service')->with('success', 'Service Updated Successfully');

        } catch (Exception $exception) {
            return back()->with('error', $exception->getMessage());
        }
    }

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function serviceDestroy($id)
    {
        try {
            $service = Service::find($id);
            $service->delete();

            return redirect()->route('index.service')->with('success', 'Service Deleted Successfully');

        } catch (\Exception $exception) {
            return back()->with('error', $exception->getMessage());
        }
    }

}
