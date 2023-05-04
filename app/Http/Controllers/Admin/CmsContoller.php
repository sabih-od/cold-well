<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Page;
use App\Models\Settings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class CmsContoller extends Controller
{
    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\RedirectResponse
     */
    public function home(Request $request)
    {
        if ($request->method() == 'GET') {
            $home = Page::where('name', 'Home')->first();
            $data = json_decode(json_encode($home->content));
            $count = isset($home) ? $home->getMedia('home_image')->count() : '';
//            isset($home) ? $home->getMedia('about_image') : '';
//            isset($home) ? $home->getMedia('about_section_image') : '';
//            isset($home) ? $home->getMedia('service_image') : '';
            return view('admin.home.create-home', compact('home', 'count', 'data'));
        }
        try {
            $content = [
                'meta_title' => $request['meta_title'],
                'meta_description' => $request['meta_description'],
                'home_title' => $request['home_title'],
                'home_heading' => $request['home_heading'],
//                'service_title' => $request['service_title'],
//                'service_description' => html_entity_decode($request['service_description']),
//                'service_heading' => $request['service_heading'],
//                'service_description1' => html_entity_decode($request['service_description1']),
//                'about_sub_title' => $request['about_sub_title'],
//                'about_heading' => $request['about_heading'],
//                'about_description' => html_entity_decode($request['about_description']),
//                'blog_sub_title' => $request['blog_sub_title'],
//                'blog_heading' => $request['blog_heading']
            ];

            $home = $this->updateContent('Home', 'home', $request, $content);

            if ($request->has('home_banner_image')) {
                //bannerImage
                $home->clearMediaCollection('home_image');
                $home->addMediaFromRequest('home_banner_image')->toMediaCollection('home_image');
            }
//            if ($request->has('about_image')) {
//                //bannerImage
//                $home->clearMediaCollection('about_image');
//                $home->addMediaFromRequest('about_image')->toMediaCollection('about_image');
//            }
//
//            if ($request->has('about_section_image')) {
//                //bannerImage
//                $home->clearMediaCollection('about_section_image');
//                $home->addMediaFromRequest('about_section_image')->toMediaCollection('about_section_image');
//            }
//
//            if ($request->has('service_image')) {
//                //bannerImage
//                $home->clearMediaCollection('service_image');
//                $home->addMediaFromRequest('service_image')->toMediaCollection('service_image');
//            }
            return back()->with('success', 'Home Updated Successfully');
        } catch (\Exception $exception) {
            return back()->with('error', $exception->getMessage());
        }
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\RedirectResponse
     */
    public function ourServices(Request $request)
    {
        if ($request->method() == 'GET') {
            $services = Page::where('name', 'Our Services')->first();
//            dd($services);
            $data = json_decode(json_encode($services->content));
            $count = isset($services) ? $services->getMedia('service_banner_image')->count() : '';
            isset($services) ? $services->getMedia('services_banner_image_one') : '';
            isset($services) ? $services->getMedia('services_banner_image_two') : '';
            isset($services) ? $services->getMedia('services_banner_image_three') : '';
            return view('admin.service.create-service', compact('services', 'count', 'data'));
        }

//        if ($request->method() == 'POST') {
//            $validate = Validator::make($request->all(), array(
//                'meta_title' => 'required',
//                'meta_description' => 'required',
//                'service_title' => 'required',
//                'service_section_title' => 'required',
//                'service_section_heading' => 'required',
//                'banner_image' => 'required|mimes:jpeg,png,jpg',
//            ));
//
//            if ($validate->fails()) {
//                return redirect()->back()->with('error', $validate->getMessageBag()->first());
//            }

        try {
            $content = [
                'meta_title' => $request['meta_title'],
                'meta_description' => $request['meta_description'],
                'service_title' => $request['service_title'],
                'service_heading_first' => $request['service_heading_first'],
                'service_description_first' => html_entity_decode($request['service_description_first']),
                'service_heading_second' => $request['service_heading_second'],
                'service_description_second' => html_entity_decode($request['service_description_second']),
                'service_heading_third' => $request['service_heading_third'],
                'service_description_third' => html_entity_decode($request['service_description_third']),
//                'service_section_heading' => $request['service_section_heading'],
//                    'service_description'  =>$request['service_description'],
            ];

            $service = $this->updateContent('Our Services', 'our-services', $request, $content);

            if ($request->has('service_banner_image')) {
                //bannerImage
                $service->clearMediaCollection('service_banner_image');
                $service->addMediaFromRequest('service_banner_image')->toMediaCollection('service_banner_image');
            }

            if ($request->has('service_banner_image_one')) {
                //bannerImage
                $service->clearMediaCollection('service_banner_image_one');
                $service->addMediaFromRequest('service_banner_image_one')->toMediaCollection('service_banner_image_one');
            }
            if ($request->has('service_banner_image_two')) {
                //bannerImage
                $service->clearMediaCollection('service_banner_image_two');
                $service->addMediaFromRequest('service_banner_image_two')->toMediaCollection('service_banner_image_two');
            }
            if ($request->has('service_banner_image_three')) {
                //bannerImage
                $service->clearMediaCollection('service_banner_image_three');
                $service->addMediaFromRequest('service_banner_image_three')->toMediaCollection('service_banner_image_three');
            }
            return back()->with('success', 'Service Updated Successfully');
        } catch (\Exception $exception) {
            return back()->with('error', $exception->getMessage());
        }
//        }
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\RedirectResponse
     */
    public function aboutUs(Request $request)
    {
        if ($request->method() == 'GET') {
            $abouts = Page::where('name', 'About Us')->first();
            $count = isset($abouts) ? $abouts->getMedia('about_us_image')->count() : '';
            isset($abouts) ? $abouts->getMedia('mission_image') : '';
            isset($abouts) ? $abouts->getMedia('mission_section_image') : '';
            return view('admin.about.create-about', compact('abouts', 'count'));
        }

//        if ($request->method() == 'POST') {
//            $validate = Validator::make($request->all(), array(
//                'meta_title' => 'required',
//                'meta_description' => 'required',
//                'about_title' => 'required',
//                'about_description' => 'required',
//                'mission_section_title' => 'required',
//                'mission_section_heading' => 'required',
//                'mission_section_description' => 'required',
//                'about_banner_image' => 'required|mimes:jpeg,png,jpg',
//            ));
//
//            if ($validate->fails()) {
//                return redirect()->back()->with('error', $validate->getMessageBag()->first());
//            }

        try {
            $content = [
                'meta_title' => $request['meta_title'],
                'meta_description' => $request['meta_description'],
                'about_title' => $request['about_title'],
                'mission_section_title' => $request['mission_section_title'],
                'mission_section_heading' => $request['mission_section_heading'],
                'mission_description' => html_entity_decode($request['mission_description']),
                'mission_section_description' => html_entity_decode($request['mission_section_description']),
                'image0-des' => html_entity_decode($request['image0-des']),
                'about-des' => html_entity_decode($request['about-des']),
                'image1-des' => html_entity_decode($request['image1-des']),
                'about-section-third' =>html_entity_decode($request['about-section-third']),
            ];

            $about = $this->updateContent('About Us', 'about-us', $request, $content);

            if ($request->has('about_banner_image')) {
                //bannerImage
                $about->clearMediaCollection('about_us_image');
                $about->addMediaFromRequest('about_banner_image')->toMediaCollection('about_us_image');
            }

            if ($request->has('mission_section_image')) {
                //bannerImage
                $about->clearMediaCollection('mission_image');
                $about->addMediaFromRequest('mission_section_image')->toMediaCollection('mission_image');
            }

            if ($request->has('mission_images')) {
                //bannerImage
                $about->clearMediaCollection('mission_section_image');
                $about->addMediaFromRequest('mission_images')->toMediaCollection('mission_section_image');
            }

            return back()->with('success', 'About Updated Successfully');
        } catch (\Exception $exception) {
            return back()->with('error', $exception->getMessage());
        }
//        }
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\RedirectResponse
     */
    public function blogs(Request $request)
    {
        if ($request->method() == 'GET') {
            $blogs = Page::where('name', 'Blog')->first();
            $count = isset($blogs) ? $blogs->getMedia('blog_banner_image')->count() : '';
            isset($blogs) ? $blogs->getMedia('blog_image') : '';
            return view('admin.blog.create', compact('blogs', 'count'));
        }

//        if ($request->method() == 'POST') {
//            $validate = Validator::make($request->all(), array(
//                'meta_title' => 'required',
//                'meta_description' => 'required',
//                'banner_title' => 'required',
//                'blog_section_title' => 'required',
//                'blog_section_heading' => 'required',
////                'banner_image' => 'required|mimes:jpeg,png,jpg',
//            ));
//
//            if ($validate->fails()) {
//                return redirect()->back()->with('error', $validate->getMessageBag()->first());
//            }

        try {
            $content = [
                'meta_title' => $request['meta_title'],
                'meta_description' => $request['meta_description'],
                'banner_title' => $request['banner_title'],
                'blog_section_title' => $request['blog_section_title'],
                'blog_section_heading' => $request['blog_section_heading'],
            ];


            $blog = $this->updateContent('Blog', 'blog', $request, $content);

            if ($request->has('banner_image')) {
                //bannerImage
                $blog->addMediaFromRequest('banner_image')->toMediaCollection('blog_banner_image');
            }

            if ($request->has('blog_section_image')) {
                //bannerImage
                $blog->addMediaFromRequest('blog_section_image')->toMediaCollection('blog_image');
            }

            return back()->with('success', 'Blogs Updated Successfully');
        } catch (\Exception $exception) {
            return back()->with('error', $exception->getMessage());
        }
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\RedirectResponse
     */
    public function lessons(Request $request)
    {
        if ($request->method() == 'GET') {
            $lessons = Page::where('name', 'Lesson')->first();
            $count = isset($lessons) ? $lessons->getMedia('lesson_banner_image')->count() : '';
            isset($lessons) ? $lessons->getMedia('lesson_image') : '';
            return view('admin.lessons.create', compact('lessons', 'count'));
        }

//        if ($request->method() == 'POST') {
//            $validate = Validator::make($request->all(), array(
//                'meta_title' => 'required',
//                'meta_description' => 'required',
//                'banner_title' => 'required',
//                'blog_section_title' => 'required',
//                'blog_section_heading' => 'required',
////                'banner_image' => 'required|mimes:jpeg,png,jpg',
//            ));
//
//            if ($validate->fails()) {
//                return redirect()->back()->with('error', $validate->getMessageBag()->first());
//            }

        try {
            $content = [
                'meta_title' => $request['meta_title'],
                'meta_description' => $request['meta_description'],
                'banner_title' => $request['banner_title'],
                'lesson_section_heading' => $request['lesson_section_heading'],
                'lesson_section_des' => $request['lesson_section_des'],
                'lesson' => $request['lesson'],
                'additional' => $request['additional'],
            ];


            $lesson = $this->updateContent('Lesson', 'lesson', $request, $content);

            if ($request->has('banner_image')) {
                //bannerImage
                $lesson->addMediaFromRequest('banner_image')->toMediaCollection('lesson_banner_image');
            }

//            if ($request->has('blog_section_image')) {
//                //bannerImage
//                $blog->addMediaFromRequest('blog_section_image')->toMediaCollection('blog_image');
//            }

            return back()->with('success', 'Lesson Updated Successfully');
        } catch (\Exception $exception) {
            return back()->with('error', $exception->getMessage());
        }
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\RedirectResponse
     */
    public function resource(Request $request)
    {
        if ($request->method() == 'GET') {
            $resource = Page::where('name', 'Resource')->first();
            return view('admin.resources.create-resource', compact('resource'));
        }
        try {
            $content = [
                'meta_title' => $request['meta_title'],
                'meta_description' => $request['meta_description'],
                'resource_title' => $request['resource_title'],
                'resource_section_title' => $request['resource_section_title'],
                'resource_section_heading' => $request['resource_section_heading'],
                'description' => $request['description'],
            ];


            $blog = $this->updateContent('Resource', 'resource', $request, $content);

            if ($request->has('banner_image')) {
                //bannerImage
                $blog->addMediaFromRequest('banner_image')->toMediaCollection('resource_banner_image');
            }

//            if ($request->has('blog_section_image')) {
//                //bannerImage
//                $blog->addMediaFromRequest('blog_section_image')->toMediaCollection('blog_image');
//            }

            return back()->with('success', 'Blogs Updated Successfully');
        } catch (\Exception $exception) {
            return back()->with('error', $exception->getMessage());
        }
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\RedirectResponse
     */
    public function settings(Request $request)
    {
        try {
            $content = Settings::find(1);

            if ($request->method() == 'POST') {
                $content->site_title = $request->site_title;
                $content->company_name = $request->company_name;
                $content->email = $request->email;
                $content->phone_no_1 = $request->phone_no_1;
                $content->address = $request->address;
                $content->facebook = $request->facebook;
                $content->tweeter = $request->tweeter;
                $content->linkedIn = $request->linkedIn;
                $content->instagram = $request->instagram;

                if ($request->has('add_setting_image')) {
                    //bannerImage
                    $content->clearMediaCollection('settings_image');
                    $content->addMediaFromRequest('add_setting_image')->toMediaCollection('settings_image');
                }

                $content->save();
            } else {
                $count = isset($content) ? $content->getMedia('settings_image')->count() : '';
                return view('admin.settings.edit', compact('content', 'count'));
            }

            return redirect()->back()->with('success', 'Settings Created Successfully');
        } catch (\Exception $exception) {
            return back()->with('error', $exception->getMessage());

        }
    }

    /**
     * @param $page_name
     * @param $slug_name
     * @param $request
     * @param $content
     * @return mixed
     */
    public function updateContent($page_name, $slug_name, $request, $content)
    {
        return Page::updateOrCreate(
            [
                'name' => $page_name,
            ],
            [
                'slug' => $request['slug'] ?? $slug_name,
                'content' => $content ?? '',
                'meta_title' => $request['meta_title'] ?? '',
                'meta_description' => $request['meta_description'] ?? ''
            ],
        );
    }
}
