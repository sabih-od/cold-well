<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Subscriber;
use Yajra\DataTables\DataTables;

class SubscriberController extends Controller
{
    public function subscriber()
    {
        try {
//            if (request()->ajax()) {
//                return datatables()->of(Subscriber::orderBy('created_at', 'desc')->get())->make(true);
//            }
            if ($subscribers = Subscriber::all()) {
//                dd($subscribers);
                return view('admin.subscribers.subscriber', compact('subscribers'));
            }

        } catch (\Exception $ex) {
            return redirect('/')->with('error', $ex->getMessage());
        }
        return view('admin.subscribers.subscriber');
    }
}
