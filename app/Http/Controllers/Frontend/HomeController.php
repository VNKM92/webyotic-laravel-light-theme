<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Page;
use App\Models\Post;
use App\Models\Project;
use App\Models\Service;
use App\Models\Slider;
use App\Models\Testimonial;

class HomeController extends Controller
{
    public function index()
    {
        $page = Page::where('template', 'home')->first();
        $seo_title = $page->seo_title ?? 'Webyotic | Top SEO & Custom Programming Agency | Web & App Development';
        $seo_description = $page->seo_description ?? 'Webyotic is an industry-leading digital engineering & programmatic SEO agency. We develop high-speed web platforms, mobile applications, AI workflows, and data-driven organic search architectures that rank #1 on Google.';
        $seo_keywords = $page->seo_keywords ?? 'SEO digital company, custom programming agency, web development company, mobile app development, programmatic SEO, enterprise software engineering, Laravel developers, Nextjs agency, technical SEO services, conversion rate optimization';

        $sliders = Slider::where('is_active', true)->orderBy('order', 'asc')->get();
        $services = Service::take(6)->get();
        $projects = Project::take(6)->get();
        $testimonials = Testimonial::take(4)->get();
        $posts = Post::with(['category', 'user'])->latest()->take(3)->get();

        return view('frontend.home', compact('page', 'sliders', 'services', 'projects', 'testimonials', 'posts', 'seo_title', 'seo_description', 'seo_keywords'));
    }
}
