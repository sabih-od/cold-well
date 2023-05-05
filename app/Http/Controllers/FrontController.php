<?php

namespace App\Http\Controllers;

use App\Models\Admin\Additional;
use App\Models\Admin\Blog;
use App\Models\Admin\Lesson;
use App\Models\Admin\Page;
use App\Models\Admin\Service;
use App\Models\Reviews;
use App\Models\Settings;
use App\Models\Subscriber;
use App\Traits\PHPCustomMail;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    use PHPCustomMail;

    /**
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function home()
    {
        $reviews = Reviews::get();
        $page = Page::where('name', 'Our Services')->first();
        $home = Page::where('name', 'Home')->first();
        if ($home) {
            $data = json_encode($home->content);
            $count = isset($home) ? $home->getMedia('home_image')->count() : '';
            isset($home) ? $home->getMedia('about_image') : '';
            isset($home) ? $home->getMedia('about_section_image') : '';
            isset($home) ? $home->getMedia('service_image') : '';
            isset($page) ? $page->getMedia('service_banner_image_one') : '';
            isset($page) ? $page->getMedia('service_banner_image_two') : '';
            isset($page) ? $page->getMedia('service_banner_image_three') : '';
            return view('front.pages.index', compact('data', 'home', 'count', 'page' , 'reviews'));
        } else {
            return view('front.pages.index', compact('home', 'page', 'reviews'));
        }
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function about()
    {
        $about = Page::where('name', 'About Us')->first();
        if ($about) {
            $data = json_encode($about->content);
            isset($about) ? $about->getMedia('about_us_image') : '';
            isset($about) ? $about->getMedia('mission_image') : '';
            isset($about) ? $about->getMedia('mission_section_image') : '';
            return view('front.pages.about', compact('data', 'about'));
        } else {
            return view('front.pages.about', compact('about'));
        }
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function services()
    {
        $page = Page::where('name', 'Our Services')->first();
        $services = Service::all();
        if ($page) {
            $data = json_encode($page->content);
            $count = isset($page) ? $page->getMedia('service_banner_image')->count() : '';
            isset($page) ? $page->getMedia('service_banner_image_one') : '';
            isset($page) ? $page->getMedia('service_banner_image_two') : '';
            isset($page) ? $page->getMedia('service_banner_image_three') : '';
            return view('our-services', compact('data', 'page', 'services', 'count'));
        } else {
            return view('our-services', compact('services',));
        }
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function blog()
    {
        $blogs = Page::where('name', 'Blog')->first();
        if ($blogs) {
            $data = json_encode($blogs->content);
            $count = isset($blogs) ? $blogs->getMedia('blog_banner_image')->count() : '';
            isset($blogs) ? $blogs->getMedia('blog_image') : '';
            return view('blog', compact('blogs', 'data', 'count'));
        } else {
            return view('blog', compact('blogs'));
        }

    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\RedirectResponse
     */
    public function contact(Request $request)
    {
        try {
            $setting = Settings::find(1);
            if ($request->method() == 'POST') {
                $this->validate($request, array(
                    'first_name' => 'required',
                    'last_name' => 'required',
                    'email' => 'required',
                    'phone_number' => 'required',
                    'message' => 'required',
                ));

                //create record
                $contactForm = Subscriber::create([
                    'name' => $request->first_name . $request->last_name,
                    'email' => $setting->email,
                    'phone' => $request->phone_number,
                    'message' => $request->message,
                ]);

                //send email
                $collection = collect([
                    'Name' => $request->first_name . $request->last_name,
                    'Phone Number' => $request->phone_number,
                    'Message' => $request->message,
                ]);

                $message = 'Dear ' . 'Admin' . ",<br /><br />";
                foreach ($collection as $key => $newData) {
                    $message .= '<strong>' . str_replace('_', ' ', $key) . '</strong>' . ': ' . $newData . "<br /><br />";
                }
                $this->custommail('no-reply@thetaxessentials.com', $setting->email, 'Welcome Email', $message);

                return redirect()->back()->with('success', 'Subscribed Successfully');
            } else {
                return view('contact');
            }
        } catch (\Exception $exception) {
            return redirect()->back()->with('error', $exception->getMessage());
        }
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function homeEmail(Request $request)
    {
        try {
            $setting = Settings::find(1);
            //send email
            $collection = collect([
                'Name' => $request->name,
                'Phone Number' => $request->phone_number,
            ]);

            $message = 'Hello ' . 'Admin' . ",<br /><br />";
            foreach ($collection as $key => $newData) {
                $message .= '<strong>' . str_replace('_', ' ', $key) . '</strong>' . ': ' . $newData . "<br /><br />";
            }
            $this->custommail('no-reply@thetaxessentials.com', $setting->email, 'Get In Touch', $message);

            return redirect()->back()->with('success', 'Email Sent Successfully');

        } catch (\Exception $exception) {
            return redirect()->back()->with('error', $exception->getMessage());
        }
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function resources()
    {
        return view('resources');
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function refunds()
    {
        return view('where-is-my-refund');
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function termsCondtion()
    {
        return view('terms-condition');
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function privacyPolicy()
    {
        return view('privacy-policy');
    }

    public function review()
    {
        $reviews = Reviews::get();
        return view('review', compact('reviews'));
    }

    public function reviewForm(Request $request)
    {
        try {
            //create record
            $reviewForm = Reviews::create([
                'name' => $request->name,
                'email' => $request->email,
                'review' => $request->review,
            ]);

            return redirect()->back()->with('success', 'Review Sent Successfully');
        } catch (\Exception $exception) {
            return redirect()->back()->with('error', $exception->getMessage());
        }
    }

    public function dailyBibleStudyQuestions (Request $request)
    {

        $posts = Blog::all();
        $blog = Page::where('name', 'Blog')->first();
        if ($blog) {
            $data = json_encode($blog->content);
            isset($blog) ? $blog->getMedia('blog_banner_image') : '';
//            isset($about) ? $about->getMedia('mission_image') : '';
//            isset($about) ? $about->getMedia('mission_section_image') : '';
            return view('front.pages.daily-bible-study-questions', compact('data', 'blog', 'posts'));
        } else {
//            return view('front.pages.daily-bible-study-questions');
            return view('front.pages.daily-bible-study-questions', compact('blog'));
        }

//        return view('front.pages.daily-bible-study-questions');
    }

    public function lessonsLearnnedOnDaddysLap (Request $request)
    {
        $lessons = Lesson::all();
        $additionals = Additional::all();
        $lesson = Page::where('name', 'Lesson')->first();
        if ($lesson) {
            $data = json_encode($lesson->content);
            isset($lesson) ? $lesson->getMedia('lesson_banner_image') : '';
//            isset($about) ? $about->getMedia('mission_image') : '';
//            isset($about) ? $about->getMedia('mission_section_image') : '';
            return view('front.pages.lessons-learnned-on-daddys-lap', compact('data', 'lesson', 'lessons', 'additionals'));
        } else {
//            return view('front.pages.daily-bible-study-questions');
            return view('front.pages.lessons-learnned-on-daddys-lap', compact('lesson'));
        }
//
//        return view('front.pages.lessons-learnned-on-daddys-lap');
    }

    public function outsideResources (Request $request)
    {
        $resource = Page::where('name', 'Resource')->first();
        if ($resource) {
            $data = json_encode($resource->content);
            isset($resource) ? $resource->getMedia('banner_image') : '';
            return view('front.pages.outside-resources', compact('data', 'resource'));
        } else {
//            return view('front.pages.daily-bible-study-questions');
            return view('front.pages.outside-resources', compact('resource'));
        }

    }
}
