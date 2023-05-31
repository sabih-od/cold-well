<?php

namespace App\Http\Controllers;

use App\Models\Admin\Additional;
use App\Models\Admin\Blog;
use App\Models\Admin\Lesson;
use App\Models\Admin\Page;
use App\Models\Admin\Rating;
use App\Models\Admin\Service;
use App\Models\Property;
use App\Models\Reviews;
use App\Models\Settings;
use App\Models\Subscriber;
use App\Models\User;
use App\Traits\PHPCustomMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class FrontController extends Controller
{
    use PHPCustomMail;

    /**
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function home()
    {
//        $reviews = Reviews::get();
//        $page = Page::where('name', 'Our Services')->first();
//        $home = Page::where('name', 'Home')->first();
//        if ($home) {
//            $data = json_encode($home->content);
//            $count = isset($home) ? $home->getMedia('home_image')->count() : '';
//            isset($home) ? $home->getMedia('about_image') : '';
//            isset($home) ? $home->getMedia('about_section_image') : '';
//            isset($home) ? $home->getMedia('service_image') : '';
//            isset($page) ? $page->getMedia('service_banner_image_one') : '';
//            isset($page) ? $page->getMedia('service_banner_image_two') : '';
//            isset($page) ? $page->getMedia('service_banner_image_three') : '';
//            return view('front.pages.index', compact('data', 'home', 'count', 'page', 'reviews'));
//        } else {
//            return view('front.pages.index', compact('home', 'page', 'reviews'));
//        }

        $properties = Property::orderBy('id', 'desc')->get();

        return view('front.pages.index', compact('properties'));

    }

    public function filter(Request $request)
    {
        $filters = $request->all();
        dd($filters , "name FIlter");
        $query = Property::query();

        if (isset($filters['search'])) {
            $search = $filters['search'];
            $bed_rooms = $filters['total_bedrooms'];
            $bath_rooms = $filters['total_bathrooms'];
            $query->where('name', 'LIKE', "%$search%");
            $query->where('total_bedrooms', 'LIKE', "%$bed_rooms%");
            $query->where('total_bathrooms', 'LIKE', "%$bath_rooms%");

        }
        $properties = $query->orderBy('id', 'desc')->get();


//        $properties = ApiSupportResource::collection($properties);

        return view('front.pages.search-property', compact('properties'));
    }


    public function signIn(Request $request)
    {
        return view('front.pages.sign-in');
    }

    public function createAccount(Request $request)
    {
        return view('front.pages.create-account');
    }

    public function forgetPassword(Request $request)
    {
        return view('front.pages.forgot-password');
    }

    public function sellYourHome(Request $request)
    {
        return view('front.pages.sell-your-home');
    }

    public function searchProperty(Request $request)
    {
        $properties = Property::query();
        $filters = $request->all();
//dd($filters );

        if (count($filters) > 0) {
             if (isset($filters['search'])) {
                $search = $filters['search'];
                $properties->where('property_name', 'LIKE', "%$search%");
//                $properties->where('property_name', $search);
            }

            if (isset($filters['total_bedrooms'])) {
                $bed_rooms = $filters['total_bedrooms'];
//                $properties->where('total_bedrooms', 'LIKE', "%$bed_rooms%");
                $properties->where('total_bedrooms', intval($bed_rooms));
            }

            if (isset($filters['total_bathrooms'])) {
                $bath_rooms = $filters['total_bathrooms'];
//                $properties->where('total_bathrooms', 'LIKE', "%$bath_rooms%");
                $properties->where('total_bathrooms', intval($bath_rooms));
            }

            if (isset($filters['price_range'])) {
                $price_range = $filters['price_range'];
                $properties->where('price', 'LIKE', "%$price_range%");
//                $properties->where('price', intval($price_range));
            }

        }
        $properties = $properties->orderBy('id', 'desc')->get();

        return view('front.pages.search-property', compact('properties'));
    }

    public function clearFilter(Request $request)
    {
        $properties = Property::query();
        $filters = $request->all();
        $filters['search'] = '';
        $properties = $properties->orderBy('id', 'desc')->get();

        return view('front.pages.search-property', compact('properties'));
    }

    public function marketReport(Request $request)
    {
        return view('front.pages.market-report');
    }

    public function communities(Request $request)
    {
        return view('front.pages.communities');
    }

    public function about(Request $request)
    {
        return view('front.pages.about');
    }

    public function contactUs(Request $request)
    {
        return view('front.pages.contact-us');
    }

    public function privacy(Request $request)
    {
        return view('front.pages.privacy');
    }

    public function terms(Request $request)
    {
        return view('front.pages.terms');
    }

    public function properties(Request $request)
    {

        $properties = Property::query();
        $filters = $request->all();

        if (count($filters) > 0) {
            if (isset($filters['search'])) {
                $search = $filters['search'];
                $properties->where('property_name', 'LIKE', "%$search%");
//                $properties->where('property_name', $search);
            }

            if (isset($filters['total_bedrooms'])) {
                $bed_rooms = $filters['total_bedrooms'];
//                $properties->where('total_bedrooms', 'LIKE', "%$bed_rooms%");
                $properties->where('total_bedrooms', intval($bed_rooms));
            }

            if (isset($filters['total_bathrooms'])) {
                $bath_rooms = $filters['total_bathrooms'];
//                $properties->where('total_bathrooms', 'LIKE', "%$bath_rooms%");
                $properties->where('total_bathrooms', intval($bath_rooms));
            }

            if (isset($filters['price_range'])) {
                $price_range = $filters['price_range'];
                $properties->where('price', 'LIKE', "%$price_range%");
//                $properties->where('price', intval($price_range));
            }

        }
        $properties = $properties->orderBy('id', 'desc')->get();

        return view('front.pages.properties', compact('properties'));
    }

    //OLD WORK

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
//    public function about()
//    {
//        $about = Page::where('name', 'About Us')->first();
//        if ($about) {
//            $data = json_encode($about->content);
//            isset($about) ? $about->getMedia('about_us_image') : '';
//            isset($about) ? $about->getMedia('mission_image') : '';
//            isset($about) ? $about->getMedia('mission_section_image') : '';
//            return view('front.pages.about', compact('data', 'about'));
//        } else {
//            return view('front.pages.about', compact('about'));
//        }
//    }
//
//    /**
//     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
//     */
//    public function services()
//    {
//        $page = Page::where('name', 'Our Services')->first();
//        $services = Service::all();
//        if ($page) {
//            $data = json_encode($page->content);
//            $count = isset($page) ? $page->getMedia('service_banner_image')->count() : '';
//            isset($page) ? $page->getMedia('service_banner_image_one') : '';
//            isset($page) ? $page->getMedia('service_banner_image_two') : '';
//            isset($page) ? $page->getMedia('service_banner_image_three') : '';
//            return view('our-services', compact('data', 'page', 'services', 'count'));
//        } else {
//            return view('our-services', compact('services',));
//        }
//    }
//
//    /**
//     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
//     */
//    public function blog()
//    {
//        $blogs = Page::where('name', 'Blog')->first();
//        if ($blogs) {
//            $data = json_encode($blogs->content);
//            $count = isset($blogs) ? $blogs->getMedia('blog_banner_image')->count() : '';
//            isset($blogs) ? $blogs->getMedia('blog_image') : '';
//            return view('blog', compact('blogs', 'data', 'count'));
//        } else {
//            return view('blog', compact('blogs'));
//        }
//
//    }
//
//    /**
//     * @param Request $request
//     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\RedirectResponse
//     */
//    public function contact(Request $request)
//    {
//        try {
//            $setting = Settings::find(1);
//            if ($request->method() == 'POST') {
//                $this->validate($request, array(
//                    'first_name' => 'required',
//                    'last_name' => 'required',
//                    'email' => 'required',
//                    'phone_number' => 'required',
//                    'message' => 'required',
//                ));
//
//                //create record
//                $contactForm = Subscriber::create([
//                    'name' => $request->first_name . $request->last_name,
//                    'email' => $setting->email,
//                    'phone' => $request->phone_number,
//                    'message' => $request->message,
//                ]);
//
//                //send email
//                $collection = collect([
//                    'Name' => $request->first_name . $request->last_name,
//                    'Phone Number' => $request->phone_number,
//                    'Message' => $request->message,
//                ]);
//
//                $message = 'Dear ' . 'Admin' . ",<br /><br />";
//                foreach ($collection as $key => $newData) {
//                    $message .= '<strong>' . str_replace('_', ' ', $key) . '</strong>' . ': ' . $newData . "<br /><br />";
//                }
//                $this->custommail('no-reply@thetaxessentials.com', $setting->email, 'Welcome Email', $message);
//
//                return redirect()->back()->with('success', 'Subscribed Successfully');
//            } else {
//                return view('contact');
//            }
//        } catch (\Exception $exception) {
//            return redirect()->back()->with('error', $exception->getMessage());
//        }
//    }
//
//    /**
//     * @param Request $request
//     * @return \Illuminate\Http\RedirectResponse
//     */
//    public function homeEmail(Request $request)
//    {
//        try {
//            $setting = Settings::find(1);
//            //send email
//            $collection = collect([
//                'Name' => $request->name,
//                'Phone Number' => $request->phone_number,
//            ]);
//
//            $message = 'Hello ' . 'Admin' . ",<br /><br />";
//            foreach ($collection as $key => $newData) {
//                $message .= '<strong>' . str_replace('_', ' ', $key) . '</strong>' . ': ' . $newData . "<br /><br />";
//            }
//            $this->custommail('no-reply@thetaxessentials.com', $setting->email, 'Get In Touch', $message);
//
//            return redirect()->back()->with('success', 'Email Sent Successfully');
//
//        } catch (\Exception $exception) {
//            return redirect()->back()->with('error', $exception->getMessage());
//        }
//    }
//
//    /**
//     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
//     */
//    public function resources()
//    {
//        return view('resources');
//    }
//
//    /**
//     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
//     */
//    public function refunds()
//    {
//        return view('where-is-my-refund');
//    }
//
//    /**
//     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
//     */
//    public function termsCondtion()
//    {
//        return view('terms-condition');
//    }
//
//    /**
//     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
//     */
//    public function privacyPolicy()
//    {
//        return view('privacy-policy');
//    }
//
//    public function review()
//    {
//        $reviews = Reviews::get();
//        return view('review', compact('reviews'));
//    }
//
//    public function reviewForm(Request $request)
//    {
//        try {
//            //create record
//            $reviewForm = Reviews::create([
//                'name' => $request->name,
//                'email' => $request->email,
//                'review' => $request->review,
//            ]);
//
//            return redirect()->back()->with('success', 'Review Sent Successfully');
//        } catch (\Exception $exception) {
//            return redirect()->back()->with('error', $exception->getMessage());
//        }
//    }
//
//    public function dailyBibleStudyQuestions (Request $request)
//    {
//
//        $posts = Blog::all();
//        $blog = Page::where('name', 'Blog')->first();
//        if ($blog) {
//            $data = json_encode($blog->content);
//            isset($blog) ? $blog->getMedia('blog_banner_image') : '';
////            isset($about) ? $about->getMedia('mission_image') : '';
////            isset($about) ? $about->getMedia('mission_section_image') : '';
//            return view('front.pages.daily-bible-study-questions', compact('data', 'blog', 'posts'));
//        } else {
////            return view('front.pages.daily-bible-study-questions');
//            return view('front.pages.daily-bible-study-questions', compact('blog'));
//        }
//
////        return view('front.pages.daily-bible-study-questions');
//    }
//
//    public function lessonsLearnnedOnDaddysLap (Request $request)
//    {
//        $lessons = Lesson::all();
//        $additionals = Additional::all();
//        $lesson = Page::where('name', 'Lesson')->first();
//        if ($lesson) {
//            $data = json_encode($lesson->content);
//            isset($lesson) ? $lesson->getMedia('lesson_banner_image') : '';
////            isset($about) ? $about->getMedia('mission_image') : '';
////            isset($about) ? $about->getMedia('mission_section_image') : '';
//            return view('front.pages.lessons-learnned-on-daddys-lap', compact('data', 'lesson', 'lessons', 'additionals'));
//        } else {
////            return view('front.pages.daily-bible-study-questions');
//            return view('front.pages.lessons-learnned-on-daddys-lap', compact('lesson'));
//        }
////
////        return view('front.pages.lessons-learnned-on-daddys-lap');
//    }
//
//    public function outsideResources (Request $request)
//    {
//        $resource = Page::where('name', 'Resource')->first();
//        if ($resource) {
//            $data = json_encode($resource->content);
//            isset($resource) ? $resource->getMedia('banner_image') : '';
//            return view('front.pages.outside-resources', compact('data', 'resource'));
//        } else {
////            return view('front.pages.daily-bible-study-questions');
//            return view('front.pages.outside-resources', compact('resource'));
//        }
//
//    }
//
//    public function rating(Request $request){
//
//        $rating = new Rating;
//        $rating->blog_id = $request['blog_id'];
//        $rating->rating = $request['rating'];
//        $rating->save();
//
////        $blog = Blog::find($validated['blog_id']);
////        $blog->average_rating = $blog->ratings()->avg('rating');
////        $blog->save();
//
//        return redirect()->back()->with('success','rating has been Submitted');
//
//    }
}
