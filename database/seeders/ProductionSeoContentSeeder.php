<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Page;
use App\Models\Post;
use App\Models\Project;
use App\Models\Service;
use App\Models\Setting;
use App\Models\Testimonial;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Cache;

class ProductionSeoContentSeeder extends Seeder
{
    public function run(): void
    {
        $adminUser = User::first() ?: User::create([
            'name' => 'Vinay & Shivam',
            'email' => 'hello@webyotic.com',
            'password' => bcrypt('Webyotic@2026'),
            'role' => 'admin',
        ]);

        // 1. GLOBAL SETTINGS (High-ranking SEO keywords)
        $settings = [
            'site_name' => 'Webyotic',
            'site_tagline' => 'Ideas · Design · Develop · Grow',
            'contact_email' => 'hello@webyotic.com',
            'contact_phone' => '+91 89883 13005',
            'contact_location' => 'Ludhiana, Punjab, India',
            'default_seo_title' => 'Webyotic | Top SEO & Custom Programming Agency | Web & App Development',
            'default_seo_description' => 'Webyotic is an industry-leading digital engineering & programmatic SEO agency. We develop high-speed web platforms, mobile applications, AI workflows, and data-driven organic search architectures that rank #1 on Google.',
            'default_seo_keywords' => 'SEO digital company, custom programming agency, web development company, mobile app development, programmatic SEO, enterprise software engineering, Laravel developers, Nextjs agency, technical SEO services, conversion rate optimization',
            'home_hero_badge' => 'DIGITAL SOLUTIONS & TOP-TIER PROGRAMMING LABS',
            'home_hero_title' => 'We engineer apps & SEO that dominate.',
            'home_hero_highlight' => 'apps & SEO that dominate.',
            'home_hero_subtitle' => 'From custom software programming and mobile engineering to programmatic SEO and conversion optimization, Webyotic helps ambitious brands build digital products that scale and rank #1.',
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

        // 2. PAGES TABLE (Full-coverage SEO metadata)
        $pages = [
            [
                'title' => 'Home',
                'slug' => 'home',
                'template' => 'home',
                'seo_title' => 'Webyotic | Top SEO & Custom Programming Agency | Web & App Development',
                'seo_description' => 'Webyotic is a leading digital programming & programmatic SEO agency. We develop high-speed web platforms, mobile applications, AI workflows, and data-driven organic search architectures that rank #1 on Google.',
                'seo_keywords' => 'SEO digital company, custom programming agency, web development company, mobile app development, programmatic SEO, enterprise software engineering, Laravel developers, Nextjs agency, technical SEO services, conversion rate optimization',
                'focus_keyword' => 'SEO digital company programming agency',
            ],
            [
                'title' => 'About Us',
                'slug' => 'about',
                'template' => 'about',
                'seo_title' => 'About Webyotic | Founders Vinay & Shivam | Full-Stack IT & SEO Agency',
                'seo_description' => 'Meet Webyotic, established by software architect Vinay and growth strategist Shivam. We craft resilient software architectures and high-ranking organic search systems for scaling companies.',
                'seo_keywords' => 'about webyotic, Vinay Shivam, digital agency founders, software engineering leadership, technical SEO experts, full stack web development company',
                'focus_keyword' => 'Webyotic founders Vinay Shivam',
            ],
            [
                'title' => 'Services',
                'slug' => 'services',
                'template' => 'services',
                'seo_title' => 'Custom Programming & Enterprise SEO Services | Webyotic',
                'seo_description' => 'Discover our full-spectrum digital capabilities: Custom Web & Mobile Programming, Brand Architecture, UI/UX Systems, Technical SEO Audits, and Conversion Rate Optimization.',
                'seo_keywords' => 'custom programming services, enterprise SEO agency, web application development, mobile app programming, technical SEO audits, conversion rate optimization, cloud devops',
                'focus_keyword' => 'programming and SEO services',
            ],
            [
                'title' => 'Our Work & Case Studies',
                'slug' => 'gallery',
                'template' => 'gallery',
                'seo_title' => 'Engineering Case Studies & Digital Portfolio | Webyotic',
                'seo_description' => 'Explore production case studies delivered by Webyotic. From high-concurrency SaaS management platforms to travel booking mobile apps and eCommerce stores driving verified client revenue.',
                'seo_keywords' => 'digital case studies, software portfolio, web application showcase, SaaS development results, mobile app portfolio',
                'focus_keyword' => 'software engineering case studies',
            ],
            [
                'title' => 'Client Testimonials',
                'slug' => 'testimonials',
                'template' => 'testimonials',
                'seo_title' => 'Client Reviews & Verified Testimonials | Webyotic',
                'seo_description' => 'Read verified feedback from CTOs, venture-backed founders, and brand executives who scale their software and search engine visibility with Webyotic.',
                'seo_keywords' => 'webyotic reviews, client testimonials, digital agency ratings, verified software development reviews',
                'focus_keyword' => 'Webyotic client reviews',
            ],
            [
                'title' => 'Insights & Blueprints',
                'slug' => 'blog',
                'template' => 'blog',
                'seo_title' => 'Engineering Insights, SEO Blueprints & Guides | Webyotic Blog',
                'seo_description' => 'Actionable technical blueprints, programmatic SEO case studies, Core Web Vitals optimization guides, and full-stack software architecture essays.',
                'seo_keywords' => 'SEO blog, web development blueprints, programming guides, Google ranking strategies, technical SEO tutorials',
                'focus_keyword' => 'technical SEO and programming blog',
            ],
            [
                'title' => 'Contact & Consultation',
                'slug' => 'contact',
                'template' => 'contact',
                'seo_title' => 'Contact Webyotic | Schedule a 15-Minute Technical Strategy Consultation',
                'seo_description' => 'Speak directly with founders Vinay & Shivam. Discuss your custom software requirements, digital growth goals, or request an instant project scope and quote.',
                'seo_keywords' => 'contact webyotic, hire software developers, request web development quote, schedule SEO consultation',
                'focus_keyword' => 'contact Webyotic consultation',
            ],
        ];

        foreach ($pages as $p) {
            Page::updateOrCreate(['slug' => $p['slug']], $p);
        }

        // 3. SERVICES (Production-level copy & SEO focus)
        $services = [
            [
                'title' => 'Strategy & Planning',
                'slug' => 'strategy-and-planning',
                'icon' => 'lightbulb',
                'short_description' => 'Turn your idea into a clear roadmap with market research and strategy.',
                'description' => 'We de-risk ambitious digital initiatives by defining technical architecture blueprints, user journeys, market opportunity analyses, and high-impact SEO keyword opportunity maps before writing a single line of code.',
                'seo_title' => 'Product Strategy & Technical Roadmapping | Webyotic',
                'seo_description' => 'De-risk your digital launch with technical roadmaps, product feasibility discovery, and competitive search engine opportunity analysis.',
                'seo_keywords' => 'product strategy, technical roadmapping, digital consulting, software feasibility analysis',
                'focus_keyword' => 'technical roadmapping and strategy',
            ],
            [
                'title' => 'Brand Design',
                'slug' => 'brand-design',
                'icon' => 'palette',
                'short_description' => 'Create a strong brand identity that builds trust and stands out.',
                'description' => 'We craft timeless visual identities, comprehensive design tokens, typography scales, and cohesive digital assets that build authority, improve brand recall, and establish high market value.',
                'seo_title' => 'Brand Identity & Enterprise Design Systems | Webyotic',
                'seo_description' => 'Establish commanding brand equity with bespoke visual identities, logo architecture, typography guidelines, and scalable design token systems.',
                'seo_keywords' => 'brand identity agency, enterprise design systems, digital branding, corporate brand guidelines',
                'focus_keyword' => 'brand identity and design systems',
            ],
            [
                'title' => 'UX/UI Design',
                'slug' => 'ux-ui-design',
                'icon' => 'window',
                'short_description' => 'User-focused designs that deliver beautiful and seamless experiences.',
                'description' => 'We design intuitive, accessible, and high-converting customer experiences. From interactive Figma prototypes to micro-interactions, we eliminate cognitive friction and maximize user delight.',
                'seo_title' => 'User Experience (UX) & UI Design Studio | Webyotic',
                'seo_description' => 'Human-centric UX/UI design engineered for conversion clarity, frictionless user journeys, and seamless responsiveness across desktop and mobile devices.',
                'seo_keywords' => 'UI UX design company, user experience agency, Figma prototyping, mobile app UI design, conversion UX',
                'focus_keyword' => 'UI UX design studio',
            ],
            [
                'title' => 'App Development',
                'slug' => 'app-development',
                'icon' => 'code',
                'short_description' => 'High-performance web and mobile applications built for scale.',
                'description' => 'Bespoke full-stack engineering utilizing modern Laravel, Next.js, React, Node.js, and Flutter. Engineered with modular APIs, sub-100ms response times, and bulletproof security protocols.',
                'seo_title' => 'Custom Web & Mobile App Development Company | Webyotic',
                'seo_description' => 'Enterprise-grade software programming: custom web apps, scalable APIs, and cross-platform mobile apps engineered with clean code and zero technical debt.',
                'seo_keywords' => 'custom web development, mobile app programming company, Laravel development agency, Nextjs developers, React fullstack development',
                'focus_keyword' => 'web and mobile app development company',
            ],
            [
                'title' => 'Marketing & Growth',
                'slug' => 'marketing-and-growth',
                'icon' => 'chart-bar',
                'short_description' => 'Data-driven marketing to attract, engage and grow your audience.',
                'description' => 'Dominate competitive search engine results with algorithmic SEO architecture, programmatic content pipelines, semantic entity schemas, and data-backed user acquisition funnels.',
                'seo_title' => 'Technical & Programmatic SEO Agency | Webyotic',
                'seo_description' => 'Scale organic search pipeline with enterprise technical SEO audits, automated semantic keyword clustering, programmatic landing pages, and search dominance.',
                'seo_keywords' => 'technical SEO agency, programmatic SEO services, search engine optimization company, organic growth marketing, enterprise SEO',
                'focus_keyword' => 'technical and programmatic SEO agency',
            ],
            [
                'title' => 'Conversion Optimization',
                'slug' => 'conversion-optimization',
                'icon' => 'rocket',
                'short_description' => 'Turn more visitors into customers with proven conversion strategies.',
                'description' => 'Maximize revenue per visitor with quantitative analytics, user session heatmaps, psychological multivariate A/B testing, and frictionless lead conversion funnels.',
                'seo_title' => 'Conversion Rate Optimization (CRO) Agency | Webyotic',
                'seo_description' => 'Transform website traffic into qualified leads and paying customers with scientific A/B testing, funnel optimization, and behavioral heatmapping.',
                'seo_keywords' => 'conversion rate optimization agency, CRO services, landing page optimization, A/B testing agency, funnel conversion optimization',
                'focus_keyword' => 'conversion rate optimization agency',
            ],
        ];

        Service::truncate();
        foreach ($services as $srv) {
            Service::create($srv);
        }
        Cache::forget('nav_services');

        // 4. PROJECTS (Production case studies)
        $projects = [
            [
                'title' => 'Smart Business Management Platform',
                'slug' => 'smart-business-management-platform',
                'category' => 'Web Application',
                'image' => 'https://images.unsplash.com/photo-1551288049-bebda4e38f71?auto=format&fit=crop&w=1200&q=80',
                'description' => 'A scalable enterprise operations platform featuring real-time telemetry, team role delegation, and automated billing workflows built for 100,000+ monthly active users.',
                'link' => '#',
                'tags' => ['Laravel', 'Next.js', 'PostgreSQL', 'SaaS'],
                'seo_title' => 'Smart Business Management SaaS Case Study | Webyotic',
                'seo_description' => 'How Webyotic engineered an enterprise business management platform with sub-100ms latency and high-concurrency microservices.',
                'seo_keywords' => 'SaaS architecture case study, Laravel enterprise app, Nextjs dashboard development',
                'focus_keyword' => 'SaaS business management platform',
            ],
            [
                'title' => 'Travel Booking Mobile App',
                'slug' => 'travel-booking-mobile-app',
                'category' => 'Mobile App',
                'image' => 'https://images.unsplash.com/photo-1488646953014-85cb44e25828?auto=format&fit=crop&w=1200&q=80',
                'description' => 'A cross-platform iOS and Android booking application with interactive map search, real-time airline/hotel reservation engines, and instant multi-currency checkout.',
                'link' => '#',
                'tags' => ['Flutter', 'Laravel API', 'Stripe', 'Travel'],
                'seo_title' => 'Travel Booking Mobile Application Case Study | Webyotic',
                'seo_description' => 'Cross-platform mobile travel app engineering with seamless UX, sub-second search, and secure multi-currency payments.',
                'seo_keywords' => 'mobile travel app, Flutter development case study, travel reservation engine',
                'focus_keyword' => 'travel booking mobile app development',
            ],
            [
                'title' => 'Modern eCommerce Platform',
                'slug' => 'modern-ecommerce-platform',
                'category' => 'eCommerce',
                'image' => 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?auto=format&fit=crop&w=1200&q=80',
                'description' => 'A blazing-fast headless online store with 100/100 Core Web Vitals, programmatic product schema, and a one-click checkout engine that boosted conversion rates by 42%.',
                'link' => '#',
                'tags' => ['Headless Commerce', 'Next.js', 'Tailwind', 'SEO'],
                'seo_title' => 'Headless eCommerce Platform Engineering Case Study | Webyotic',
                'seo_description' => 'Headless eCommerce architecture that achieved 99+ PageSpeed scores, instant search indexation, and a 42% lift in checkout conversion.',
                'seo_keywords' => 'headless ecommerce, Nextjs ecommerce development, ecommerce conversion rate optimization',
                'focus_keyword' => 'headless eCommerce platform',
            ],
        ];

        Project::truncate();
        foreach ($projects as $proj) {
            Project::create($proj);
        }

        // 5. BLOG CATEGORIES & PRODUCTION POSTS
        $catSeo = Category::firstOrCreate(['slug' => 'seo-engineering'], ['name' => 'SEO Engineering']);
        $catDev = Category::firstOrCreate(['slug' => 'software-development'], ['name' => 'Software Development']);
        $catGrowth = Category::firstOrCreate(['slug' => 'growth-marketing'], ['name' => 'Growth Marketing']);
        $catCro = Category::firstOrCreate(['slug' => 'conversion-science'], ['name' => 'Conversion Science']);

        $posts = [
            [
                'title' => 'The 2026 Technical SEO Blueprint: How Enterprise Web Applications Rank #1 on Google',
                'slug' => 'technical-seo-blueprint-enterprise-web-applications',
                'category_id' => $catSeo->id,
                'user_id' => $adminUser->id,
                'image' => 'https://images.unsplash.com/photo-1551288049-bebda4e38f71?auto=format&fit=crop&w=1200&q=85',
                'body' => '<p class="lead">Search engine optimization in 2026 is no longer about stuffing keywords into blog posts. Google’s neural search algorithms prioritize entity authority, programmatic schema graphs, sub-100ms Time-to-First-Byte (TTFB), and impeccable Core Web Vitals.</p>
                <h2>1. The Foundation: Core Web Vitals & Edge Latency</h2>
                <p>Google’s ranking systems penalize web properties with Cumulative Layout Shift (CLS > 0.05) and slow Interaction to Next Paint (INP > 200ms). At Webyotic, we build software where assets are strictly pre-cached and edge-routed, ensuring your site renders faster than 99% of competitors.</p>
                <h2>2. Programmatic JSON-LD Schema Architecture</h2>
                <p>Structured data provides search engines with explicit clues about the meaning of a page. Rather than simple Organization tags, enterprise platforms must deploy connected entity graphs linking Services, Authors, FAQPages, and SoftwareApplications.</p>
                <h2>3. Semantic Keyword Clustering</h2>
                <p>Google evaluates topical depth. Instead of single standalone articles, organize your content into hubs and spokes that demonstrate comprehensive industry authority.</p>',
                'seo_title' => 'The 2026 Technical SEO Blueprint for Enterprise Applications | Webyotic',
                'seo_description' => 'Master modern technical SEO: Core Web Vitals optimization, JSON-LD knowledge graph architecture, edge server rendering, and automated Google indexing.',
                'seo_keywords' => 'technical SEO blueprint, enterprise SEO, Core Web Vitals optimization, JSON-LD schema, Google ranking factors',
                'focus_keyword' => 'technical SEO blueprint',
            ],
            [
                'title' => 'Building Scalable Full-Stack Web Apps: Why Modern Laravel & Next.js Dominate the Web',
                'slug' => 'building-scalable-full-stack-web-apps-laravel-nextjs',
                'category_id' => $catDev->id,
                'user_id' => $adminUser->id,
                'image' => 'https://images.unsplash.com/photo-1498050108023-c5249f4df085?auto=format&fit=crop&w=1200&q=85',
                'body' => '<p class="lead">In an era where digital businesses demand instantaneous user experiences alongside robust, bank-grade backend reliability, the decoupled stack of Laravel backend APIs paired with Next.js frontends has emerged as the gold standard.</p>
                <h2>Why Laravel Remains the Undisputed Backend Champion</h2>
                <p>Laravel provides unmatched developer velocity, battle-tested security (CSRF, prepared SQL statements, encrypted cookies), expressive Eloquent ORM, and first-class background queue processing.</p>
                <h2>The Power of Next.js for Organic Search Dominance</h2>
                <p>Next.js enables Server-Side Rendering (SSR) and Static Site Generation (SSG), allowing Googlebot to crawl pre-rendered HTML without waiting for complex client-side JavaScript execution.</p>',
                'seo_title' => 'Scalable Full-Stack Web Apps with Laravel & Next.js | Webyotic',
                'seo_description' => 'An architectural deep dive into pairing Laravel backend APIs with Next.js frontends for sub-100ms response times, enterprise security, and SEO dominance.',
                'seo_keywords' => 'Laravel Nextjs stack, full stack web development, scalable software architecture, custom web app programming',
                'focus_keyword' => 'scalable web apps Laravel Nextjs',
            ],
            [
                'title' => 'Programmatic SEO Architecture: How to Scale from 1,000 to 100,000+ Organic Monthly Visitors',
                'slug' => 'programmatic-seo-architecture-scaling-organic-traffic',
                'category_id' => $catGrowth->id,
                'user_id' => $adminUser->id,
                'image' => 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?auto=format&fit=crop&w=1200&q=85',
                'body' => '<p class="lead">Programmatic SEO is the systematic practice of addressing thousands of high-intent search queries at scale by leveraging database-driven page templates. Companies like Zapier, TripAdvisor, and G2 use this exact framework to capture millions of organic users.</p>
                <h2>1. High-Intent Keyword Modifier Matrices</h2>
                <p>Instead of targeting broad head terms like "software", programmatic SEO focuses on long-tail patterns like "[Software Type] for [Industry] in [Location]".</p>
                <h2>2. Unique Value Generation per Template</h2>
                <p>To avoid Google’s "thin content" penalty, every dynamically rendered page must aggregate genuine proprietary data, user ratings, pricing tables, or interactive tools.</p>',
                'seo_title' => 'Programmatic SEO Architecture: Scaling to 100k+ Monthly Visitors | Webyotic',
                'seo_description' => 'Step-by-step methodology for designing programmatic landing page architectures that search engines crawl, index, and rank high.',
                'seo_keywords' => 'programmatic SEO architecture, scale organic traffic, programmatic landing pages, long tail keyword strategy',
                'focus_keyword' => 'programmatic SEO architecture',
            ],
            [
                'title' => 'Conversion Rate Optimization (CRO): The Scientific Framework That Doubles Pipeline Revenue',
                'slug' => 'conversion-rate-optimization-framework-pipeline-revenue',
                'category_id' => $catCro->id,
                'user_id' => $adminUser->id,
                'image' => 'https://images.unsplash.com/photo-1523741543316-bdccd48c5e46?auto=format&fit=crop&w=1200&q=85',
                'body' => '<p class="lead">Doubling your conversion rate produces the exact same financial impact as doubling your marketing budget—at zero additional ad cost. Conversion Rate Optimization (CRO) is a science governed by quantitative telemetry and psychological UX.</p>
                <h2>1. Form Friction Reduction</h2>
                <p>Every unnecessary field on a consultation form reduces conversion velocity by 8-12%. Keep forms concise, intuitive, and mobile-friendly.</p>
                <h2>2. Visual Trust Signals & Real-Time Social Proof</h2>
                <p>Verified client testimonials, founder portraits, and clear security trust marks significantly increase user confidence at the crucial decision threshold.</p>',
                'seo_title' => 'The Scientific CRO Framework That Doubles Pipeline Revenue | Webyotic',
                'seo_description' => 'Actionable conversion optimization tactics: user friction elimination, trust signal placement, fast forms, and behavioral heatmapping.',
                'seo_keywords' => 'conversion rate optimization framework, CRO tactics, increase website conversion, landing page testing',
                'focus_keyword' => 'conversion rate optimization framework',
            ],
        ];

        Post::truncate();
        foreach ($posts as $post) {
            Post::create($post);
        }
    }
}
