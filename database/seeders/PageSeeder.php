<?php

namespace Database\Seeders;

use App\Models\Admin\Page;
use Illuminate\Database\Seeder;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $homepagedataContent = [
            'home_title' => 'Individual & Business Owner',
            'home_heading' => 'We’ll be right there. Sit tight.',
            'service_title' => 'SELECT A SERVICE',
            'service_description' => 'Do you have a business? Are you paying too much in taxes? Does your CPA or Tax Preparer offer you a tax plan to help you keep more money in your business?',
            'about_sub_title' => 'About Us',
            'about_heading' => 'THE TAX ESSENTIALS',
            'about_description' => 'At The Tax Essentials, we guide you on how best to hold on to the wealth that you have worked so hard at building through your personal endeavors or through your business. This is achieved by careful planning (customized to your personal or business’ needs) while simultaneously applying the most up-to-date tax laws and codes to maximize returns and diminish or eliminate penalties.',
            'blog_title' => 'OUR BLOG',
            'blog_section_title' => 'Lorem Ipsum',
            'blog_section_heading' => 'OUR BLOG',
            'blog_description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.",
            ''
        ];

        $home_page = Page::where('name', 'Home')->first();
        if($home_page) {
            $home_page->update();
        } else {
            $home_page = Page::create([
                'name' => 'Home',
                'slug' => 'home',
                'content' => $homepagedataContent,
            ]);
        }

        $aboutPageContent = [
            'about_title' => 'About Us',
            'mission_section_title' => 'About Us',
            'mission_section_heading' => 'THE TAX ESSENTIALS',
            'mission_description' => 'At The Tax Essentials, we guide you on how best to hold on to the wealth that you have worked so hard at building through your personal endeavors or through your business. This is achieved by careful planning (customized to your personal or business’ needs) while simultaneously applying the most up-to-date tax laws and codes to maximize returns and diminish or eliminate penalties. Many individuals and business owners can be intimidated by the tax-filing process. At The Tax Essentials, we believe that having a goal-directed plan reduces this anxiety. You have insight into what to expect and how to adjust your strategies if necessary.',
            'mission_section_description' => 'You are also not alone in the process as we will be available to discuss concerns or celebrate in your reaching your strategic goals! You will also stand firm in the knowledge that the decisions you make on a monthly, quarterly, or yearly basis are aimed at continuing to maximize your future financial growth or the growth of your business. We look forward to accompanying you on this exciting journey and hope that you choose The Tax Essentials for your tax needs.',
            'blog_sub_title' => 'OUR BLOG',
            'blog_heading' => 'Read our latest blogs posts on the people challenges that your business faces.',
        ];

        $aboutPageData = Page::where('name', 'About Us')->first();
        if($aboutPageData) {
            $aboutPageData->update();
        } else {
            $aboutPageData = Page::create([
                'name' => 'About Us',
                'slug' => 'about-us',
                'content' => $aboutPageContent,
            ]);
        }

        $ourServiceContent = [
            'service_title' => 'Our Services',
            'service_heading_first' => 'STRATEGIC TAX PLANNING',
            'service_description_first' => 'Do you have a business? Are you paying too much in taxes? Does your CPA or Tax Preparer offer you a tax plan to help you keep more money in your business? If the answer to any of these questions is no, then you strongly advise hiring a tax strategist. A tax strategist specializes in tax law and can help you save money on taxes while remaining in compliance with all tax laws. At The Tax Essentials, we are future-oriented beyond the simple filing of your yearly taxes. We achieve these goals through the following steps: Initial consultation to lay the foundations of how to best build and keep wealth from your business Advising on the best entity structure for your business Implementing your customized tax plan with continued input from you. We keep the lines of communication open with periodic check-ins to track your growth. Goal setting will include—learning how you can legally decrease your tax liability and improving your profit margins, all with the net effect of increasing your wealth The Tax Essentials prides itself on keeping up with relevant tax laws, codes and changes that invariably occur each year. Your tax plan will be managed under updated tax principles thereby minimizing any potential audits. Proactive tax planning is imperative to a successful business.',
            'service_heading_second' => 'TAX PREPARATION',
            'service_description_second' => 'The Tax Essentials is committed to offering professional tax preparation services for individuals, business, and investors. Your time is valuable, and our quick turnaround reflects this. We are thorough when it comes to saving you money by maximizing all legal tax deductions and credits available to you and your business. Our personable, honest, and courteous manner ensures a pleasant experience.',
            'service_heading_third' => 'ENTITY STRUCTURE',
            'service_description_third' => 'Choosing the right entity structure is one of the most important aspects of launching a new business and updating a current one. An entity structure is the foundation of how your business will be identified and organized. Examples include: Limited Partnership General Partnership Sole Proprietor LLC S Corp C Corp Each entity is subject to different codes that can impact both your professional and personal assets because of the substantial financial and tax implications. Crucial components of your business that can be impacted based on the type of entity structure include: Your business’ tax liabilities Number of tax returns filed Personal liabilities as an owner At The Tax Essentials, we provide guidance to new and current business owners on how to choose and set up the right business structure to maximize their tax benefits. We explain each choice and its various benefits and drawbacks. As a business owner, it is important to know that as your business grows and changes, the type of business entity you choose may need to change with it. Knowing when to make the change is crucial in managing a successful business.',
        ];

        $ourService = Page::where('name', 'Our Services')->first();
        if($ourService) {
            $ourService->update();
        } else {
            $ourService = Page::create([
                'name' => 'Our Services',
                'slug' => 'our-services',
                'content' => $ourServiceContent,
            ]);
        }


        $blogPageDataContent = [
            'blog_title' => 'OUR BLOG',
            'blog_section_title' => 'Lorem Ipsum',
            'blog_section_heading' => 'OUR BLOG',
            'blog_description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.",
        ];

        $blogPageData = Page::where('name', 'Blog')->first();
        if($blogPageData) {
            $blogPageData->update();
        } else {
            $blogPageData = Page::create([
                'name' => 'Blog',
                'slug' => 'blog',
                'content' => $blogPageDataContent,
            ]);
        }

    }
}
