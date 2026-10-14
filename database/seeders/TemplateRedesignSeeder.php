<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\Service;
use App\Models\Setting;
use App\Models\Testimonial;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Cache;

class TemplateRedesignSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Settings
        $settings = [
            'site_name' => 'Webyotic',
            'site_tagline' => 'Ideas · Design · Develop · Grow',
            'contact_email' => 'hello@webyotic.com',
            'contact_phone' => '+91 89883 13005',
            'contact_location' => 'Ludhiana, Punjab, India',
            'home_hero_badge' => 'DIGITAL SOLUTIONS FOR A BRIGHTER TOMORROW',
            'home_hero_title' => 'We build apps people love.',
            'home_hero_highlight' => 'people love.',
            'home_hero_subtitle' => 'From strategy and design to development and growth, Webyotic helps businesses turn ideas into powerful digital products that create real impact.',
            'stat_projects' => '100+',
            'stat_projects_label' => 'Projects Delivered',
            'stat_clients' => '50+',
            'stat_clients_label' => 'Happy Clients',
            'stat_experience' => '5+',
            'stat_experience_label' => 'Years Experience',
            'stat_rating' => '4.9/5',
            'stat_rating_label' => 'Client Satisfaction',
            'cta_badge' => "LET'S BUILD SOMETHING AMAZING",
            'cta_title' => 'Get a Free 15-Minute Consultation',
            'cta_highlight' => '15-Minute',
            'cta_subtitle' => 'Discuss your idea with our experts and get the right guidance for your project. No obligations, just honest advice.',
            'footer_text' => '© 2024 Webyotic. All rights reserved.',
        ];

        foreach ($settings as $key => $value) {
            Setting::updateOrCreate(['key' => $key], ['value' => $value]);
        }
        Cache::forget('site_settings');

        // 2. Services from the design template
        $services = [
            [
                'title' => 'Strategy & Planning',
                'slug' => 'strategy-and-planning',
                'icon' => 'lightbulb',
                'short_description' => 'Turn your idea into a clear roadmap with market research and strategy.',
                'description' => 'Turn your idea into a clear roadmap with thorough market research, user persona analysis, technical scoping, and strategic execution plans.',
                'seo_title' => 'Strategy & Planning - Webyotic',
                'seo_description' => 'Strategic product discovery, technical roadmaps, and business feasibility consulting.',
            ],
            [
                'title' => 'Brand Design',
                'slug' => 'brand-design',
                'icon' => 'palette',
                'short_description' => 'Create a strong brand identity that builds trust and stands out.',
                'description' => 'Create an indelible visual presence with modern brand identities, design guidelines, typography palettes, and consistent assets across all touchpoints.',
                'seo_title' => 'Brand Design - Webyotic',
                'seo_description' => 'World-class brand design, logo creation, and comprehensive digital identity systems.',
            ],
            [
                'title' => 'UX/UI Design',
                'slug' => 'ux-ui-design',
                'icon' => 'window',
                'short_description' => 'User-focused designs that deliver beautiful and seamless experiences.',
                'description' => 'Crafting frictionless, accessible, and delightful digital interfaces that convert visitors and retain high-lifetime-value customers.',
                'seo_title' => 'UX/UI Design Services - Webyotic',
                'seo_description' => 'Intuitive user experiences and modern interface design for web and mobile applications.',
            ],
            [
                'title' => 'App Development',
                'slug' => 'app-development',
                'icon' => 'code',
                'short_description' => 'High-performance web and mobile applications built for scale.',
                'description' => 'Engineered with clean code, scalable microservices, and modern frameworks including Laravel, Next.js, React, and Flutter.',
                'seo_title' => 'Web & Mobile App Development - Webyotic',
                'seo_description' => 'Scalable, high-performance web and mobile software development built for growing companies.',
            ],
            [
                'title' => 'Marketing & Growth',
                'slug' => 'marketing-and-growth',
                'icon' => 'chart-bar',
                'short_description' => 'Data-driven marketing to attract, engage and grow your audience.',
                'description' => 'Scale your pipeline with organic search engine dominance, content funnels, data analytics, and performance acquisition.',
                'seo_title' => 'Marketing & Digital Growth - Webyotic',
                'seo_description' => 'Data-driven digital marketing and growth marketing campaigns that drive measurable ROI.',
            ],
            [
                'title' => 'Conversion Optimization',
                'slug' => 'conversion-optimization',
                'icon' => 'rocket',
                'short_description' => 'Turn more visitors into customers with proven conversion strategies.',
                'description' => 'Continuous A/B testing, funnel bottleneck resolution, copy optimization, and user journey enhancements that maximize revenue per user.',
                'seo_title' => 'Conversion Rate Optimization (CRO) - Webyotic',
                'seo_description' => 'Turn website traffic into loyal paying customers with proven conversion rate optimization.',
            ],
        ];

        // Wipe or update existing services
        Service::truncate();
        foreach ($services as $srv) {
            Service::create($srv);
        }

        // 3. Featured Projects from the design template
        $projects = [
            [
                'title' => 'Smart Business Management Platform',
                'slug' => 'smart-business-management-platform',
                'category' => 'Web Application',
                'image' => 'https://images.unsplash.com/photo-1551288049-bebda4e38f71?auto=format&fit=crop&w=1200&q=80',
                'description' => 'A complete business management solution with analytics, team collaboration and automation.',
                'link' => '#',
                'tags' => ['Web Application', 'SaaS'],
            ],
            [
                'title' => 'Travel Booking Mobile App',
                'slug' => 'travel-booking-mobile-app',
                'category' => 'Mobile App',
                'image' => 'https://images.unsplash.com/photo-1488646953014-85cb44e25828?auto=format&fit=crop&w=1200&q=80',
                'description' => 'A modern travel app for booking flights, hotels and experiences around the world.',
                'link' => '#',
                'tags' => ['Mobile App', 'Travel'],
            ],
            [
                'title' => 'Modern eCommerce Platform',
                'slug' => 'modern-ecommerce-platform',
                'category' => 'eCommerce',
                'image' => 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?auto=format&fit=crop&w=1200&q=80',
                'description' => 'A feature-rich online store with seamless shopping experience and secure payments.',
                'link' => '#',
                'tags' => ['eCommerce', 'Web Application'],
            ],
        ];

        Project::truncate();
        foreach ($projects as $proj) {
            Project::create($proj);
        }

        // 4. Testimonials from the design template
        $testimonials = [
            [
                'name' => 'Rahul Mehta',
                'position' => 'Founder',
                'company' => 'TechStart',
                'content' => 'Webyotic delivered our project beyond expectations. Their team is professional, creative and highly skilled. Our business has grown significantly after the launch!',
                'rating' => 5,
                'image' => 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&w=300&q=80',
            ],
            [
                'name' => 'Priya Sharma',
                'position' => 'CEO',
                'company' => 'TravelMate',
                'content' => 'Excellent communication, on-time delivery and great design sense. Working with Webyotic was a smooth and enjoyable experience. Highly recommended!',
                'rating' => 5,
                'image' => 'https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?auto=format&fit=crop&w=300&q=80',
            ],
            [
                'name' => 'Amit Verma',
                'position' => 'Founder',
                'company' => 'ShopKart',
                'content' => 'They understood our requirements perfectly and built a solution that truly fits our business needs. The results have been fantastic!',
                'rating' => 5,
                'image' => 'https://images.unsplash.com/photo-1500648767791-00dcc994a43e?auto=format&fit=crop&w=300&q=80',
            ],
        ];

        Testimonial::truncate();
        foreach ($testimonials as $test) {
            Testimonial::create($test);
        }
    }
}
