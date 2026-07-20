<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Project data - Single source of truth
$projects = [
    'mehak-nail-studio' => [
        'slug' => 'mehak-nail-studio',
        'title' => 'Mehak Nail Studio — Luxury Nail Art Website',
        'short_desc' => 'A premium luxury nail studio website featuring elegant nail designs, cat eye nails, French tips, ombre nails, and bridal glam.',
        'full_desc' => 'Mehak Nail Studio is a premium luxury home-based nail studio in Rawalpindi, Pakistan. The website was designed to showcase the artist\'s work, attract new clients, and provide an elegant online presence that reflects the quality and precision of her craft.',
        'long_desc' => 'The studio specializes in cat eye nails, French tips, ombre nails, and bridal glam — each design crafted with love and precision. The website serves as a digital portfolio and booking platform for the studio.',
        'category' => 'Beauty & Lifestyle',
        'client' => 'Mehak Shafi',
        'year' => '2026',
        'tech_stack' => ['Typescript', 'Tailwind CSS', 'Responsive', 'Services'],
        'tags' => ['typescript', 'website', 'branding', 'services'],
        'github' => 'https://github.com/naraishkumar/mehak-nail-studio',
        'live_url' => 'https://mehak-nail-studio.bolt.host',
        'image' => 'mehak-nail-studio.png',
        'badge' => '💅 Premium',
        'badge_color' => 'rgba(236,64,122,0.9)',
        'gradient' => 'linear-gradient(135deg, #1a0a0a 0%, #2d1a1a 50%, #4a2a2a 100%)',
        'features' => [
            ['icon' => '💅', 'title' => 'Service Showcase', 'desc' => 'Elegant display of nail art services with high-quality images.'],
            ['icon' => '📱', 'title' => 'Mobile Responsive', 'desc' => 'Fully responsive design optimized for all devices.'],
            ['icon' => '📅', 'title' => 'Booking System', 'desc' => 'Easy client booking with WhatsApp integration.'],
            ['icon' => '🎨', 'title' => 'Portfolio Gallery', 'desc' => 'Beautiful gallery showcasing completed nail art work.'],
        ],
        'challenges' => [
            ['title' => 'Brand Representation', 'desc' => 'Creating a premium feel that matches the luxury nail art services while staying accessible.', 'solution' => 'Used elegant typography, soft pink color palette, and high-quality imagery throughout the site.'],
            ['title' => 'Client Booking Flow', 'desc' => 'Making it easy for clients to understand services and book appointments.', 'solution' => 'Implemented a clear service catalog with WhatsApp integration for easy bookings.'],
        ],
        'results' => [
            ['label' => 'Client Inquiries', 'value' => '↑ 40%'],
            ['label' => 'Online Presence', 'value' => '✅ 24/7'],
            ['label' => 'Client Feedback', 'value' => '🌟 5★'],
        ],
        'testimonial' => [
            'quote' => 'Naraish delivered a stunning luxury nail studio website that perfectly represents my brand. The design is elegant and the booking system has increased my client inquiries significantly!',
            'name' => 'Mehak Shafi',
            'role' => 'Founder, Mehak Nail Studio',
            'avatar' => 'MS'
        ],
        'status' => 'live'
    ],
    'plumber-rahim-yar-khan' => [
        'slug' => 'plumber-rahim-yar-khan',
        'title' => 'Plumber Rahim Yar Khan — Plumbing Services',
        'short_desc' => "Rahim Yar Khan's most trusted plumbing service. Professional plumbing, sanitary, maintenance, tile, ceramic, and repair services with fast response and affordable pricing.",
        'full_desc' => 'Plumber Rahim Yar Khan is a professional plumbing services website serving the Rahim Yar Khan community. The website provides comprehensive information about plumbing, sanitary, maintenance, tile, ceramic, and repair services.',
        'long_desc' => 'The business specializes in pipe installation, water leakage repair, bathroom fittings, sanitary installation, tile & ceramic work, and emergency plumbing — with fast response and affordable pricing.',
        'category' => 'Services & Plumbing',
        'client' => 'Plumber RYK',
        'year' => '2026',
        'tech_stack' => ['Typescript', 'Tailwind CSS', 'Services', 'Responsive'],
        'tags' => ['typescript', 'website', 'branding', 'services'],
        'github' => 'https://github.com/naraishkumar/plumber-rahim-yar-khan',
        'live_url' => 'https://plumber-rahim-yar-khan.bolt.host',
        'image' => 'plumber-rahim-yar-khan.png',
        'badge' => '🔧 Professional',
        'badge_color' => 'rgba(37,99,235,0.9)',
        'gradient' => 'linear-gradient(135deg, #0a1628 0%, #1a2a4a 50%, #2a3a5a 100%)',
        'features' => [
            ['icon' => '🔧', 'title' => 'Plumbing Services', 'desc' => 'Complete residential and commercial plumbing solutions by certified professionals.'],
            ['icon' => '🔧', 'title' => 'Pipe Installation', 'desc' => 'Expert installation of PPRC, PVC, and UPVC pipe systems.'],
            ['icon' => '💧', 'title' => 'Water Leakage Repair', 'desc' => 'Fast detection and repair of hidden leaks to prevent water damage.'],
            ['icon' => '🚿', 'title' => 'Bathroom Fittings', 'desc' => 'Premium bathroom fitting installation including mixers, showers, and accessories.'],
            ['icon' => '🚽', 'title' => 'Sanitary Installation', 'desc' => 'Professional installation of WCs, basins, commodes, and all sanitary ware.'],
            ['icon' => '🧱', 'title' => 'Tile & Ceramic Work', 'desc' => 'High-quality tile and ceramic installation for bathrooms, kitchens, and floors.'],
            ['icon' => '🛠️', 'title' => 'Maintenance Services', 'desc' => 'Regular maintenance to keep your plumbing systems in peak condition year-round.'],
            ['icon' => '🚨', 'title' => 'Emergency Plumbing', 'desc' => '24/7 emergency response for burst pipes, severe leaks, and urgent plumbing crises.'],
        ],
        'challenges' => [
            ['title' => 'Service Presentation', 'desc' => 'Clearly presenting a wide range of plumbing services in an organized manner.', 'solution' => 'Created a clean service grid with icons and descriptions for easy browsing.'],
            ['title' => 'Emergency Response', 'desc' => 'Making emergency contact options prominent and easy to find.', 'solution' => 'Added prominent call-to-action buttons for emergency and WhatsApp contact.'],
        ],
        'results' => [
            ['label' => 'Customer Calls', 'value' => '↑ 55%'],
            ['label' => 'Response Time', 'value' => '⚡ 24/7'],
            ['label' => 'Service Inquiries', 'value' => '📈 3x'],
        ],
        'testimonial' => [
            'quote' => 'Professional plumbing website that clearly showcases our services. The design is clean and the contact features have increased our customer calls significantly.',
            'name' => 'Plumber RYK',
            'role' => 'Plumbing Services',
            'avatar' => 'PK'
        ],
        'status' => 'live'
    ],
    'kingsmenroyal' => [
        'slug' => 'kingsmenroyal',
        'title' => 'Kingsmen Royal — Luxury Grooming Salon',
        'short_desc' => 'A Symbol of Royalty — premium salon services for men, women & kids in Rahim Yar Khan. Where elegance meets modern style with classic grooming experiences.',
        'full_desc' => 'Kingsmen Royal is a premium luxury salon in Rahim Yar Khan where classic elegance meets modern style. The salon offers premium grooming services for men, women, and kids.',
        'long_desc' => 'The salon specializes in precision haircuts, beard styling, hair coloring, facials, keratin treatments, makeup, bridal makeup, hair spa, manicure/pedicure, kids haircut, skin treatments, massage, waxing, and premium grooming packages.',
        'category' => 'Luxury Salon & Grooming',
        'client' => 'Kingsmen Royal',
        'year' => '2026',
        'tech_stack' => ['Typescript', 'Tailwind CSS', 'Services', 'Booking', 'Responsive'],
        'tags' => ['typescript', 'website', 'branding', 'services', 'booking'],
        'github' => 'https://github.com/naraishkumar/kingsmenroyal',
        'live_url' => 'https://kingsmenroyal.bolt.host',
        'image' => 'kingsmenroyal.png',
        'badge' => '👑 Royal',
        'badge_color' => 'linear-gradient(135deg,#d4af37,#b8960f)',
        'gradient' => 'linear-gradient(135deg, #1a0a1a 0%, #2d1a2d 50%, #4a2a3a 100%)',
        'features' => [
            ['icon' => '✂️', 'title' => 'Hair Cut', 'desc' => 'Precision cuts tailored to your unique style.'],
            ['icon' => '🧔', 'title' => 'Beard Styling', 'desc' => 'Expert beard shaping and grooming.'],
            ['icon' => '🎨', 'title' => 'Hair Coloring', 'desc' => 'Vibrant, long-lasting professional colors.'],
            ['icon' => '✨', 'title' => 'Facial', 'desc' => 'Rejuvenating facials for radiant skin.'],
            ['icon' => '💆', 'title' => 'Keratin', 'desc' => 'Smooth, frizz-free keratin treatments.'],
            ['icon' => '💄', 'title' => 'Makeup', 'desc' => 'Flawless makeup artistry for any occasion.'],
            ['icon' => '👰', 'title' => 'Bridal Makeup', 'desc' => 'Stunning bridal looks for your special day.'],
            ['icon' => '🧖', 'title' => 'Hair Spa', 'desc' => 'Deep nourishing spa treatments.'],
            ['icon' => '💅', 'title' => 'Manicure/Pedicure', 'desc' => 'Polished hands and feet to perfection.'],
            ['icon' => '👦', 'title' => 'Kids Haircut', 'desc' => 'Fun, gentle cuts for little ones.'],
            ['icon' => '🌟', 'title' => 'Skin Treatment', 'desc' => 'Advanced treatments for flawless skin.'],
            ['icon' => '💆‍♂️', 'title' => 'Massage', 'desc' => 'Relaxing massages to melt away stress.'],
            ['icon' => '🪒', 'title' => 'Waxing', 'desc' => 'Smooth, precise waxing services.'],
            ['icon' => '✨', 'title' => 'Skin Polish', 'desc' => 'Radiant skin polish treatments.'],
            ['icon' => '👑', 'title' => 'Royal Groom Package', 'desc' => 'The ultimate grooming package for grooms.'],
            ['icon' => '🎩', 'title' => 'Classic Groom Package', 'desc' => 'A refined classic grooming experience.'],
        ],
        'challenges' => [
            ['title' => 'Luxury Brand Experience', 'desc' => 'Creating a website that reflects the premium, royal experience of the salon.', 'solution' => 'Used gold accents, elegant typography, and a sophisticated color palette with dark tones.'],
            ['title' => 'Service Showcase', 'desc' => 'Displaying a wide range of salon services in an organized, premium way.', 'solution' => 'Created a comprehensive service grid with icons and clear categorization.'],
        ],
        'results' => [
            ['label' => 'New Clients', 'value' => '↑ 65%'],
            ['label' => 'Booking Requests', 'value' => '📅 2x'],
            ['label' => 'Brand Recognition', 'value' => '👑 Premium'],
        ],
        'testimonial' => [
            'quote' => 'The Kingsmen Royal website perfectly captures our premium salon experience. The design is luxurious and the service showcase has attracted many new clients to our salon.',
            'name' => 'Kingsmen Royal',
            'role' => 'Luxury Salon',
            'avatar' => 'KR'
        ],
        'status' => 'live'
    ],
    'eduetrium' => [
        'slug' => 'eduetrium',
        'title' => 'Eduetrium — Smart Solutions, Smart Schools',
        'short_desc' => 'All-in-one school management platform that simplifies administration, enhances communication, and empowers educators. Smarter schools, better futures.',
        'full_desc' => 'Eduetrium is the all-in-one school management platform that simplifies administration, enhances communication, and empowers educators. From student enrollment to fee management, Eduetrium has you covered.',
        'long_desc' => 'Eduetrium is designed with input from educators, administrators, and IT professionals to create a platform that is both powerful and easy to use. The platform includes student management, teacher management, fee management, timetable scheduling, analytics & reporting, and parent communication modules.',
        'category' => 'EdTech & School Management',
        'client' => 'Eduetrium',
        'year' => '2026',
        'tech_stack' => ['Laravel', 'Blade', 'MySQL', 'Tailwind CSS', 'Responsive', 'Own Product'],
        'tags' => ['laravel', 'website', 'services', 'school-management', 'edtech'],
        'github' => 'https://github.com/naraishkumar/school-management-system',
        'live_url' => 'https://github.com/naraishkumar/school-management-system',
        'image' => 'eduetrium.png',
        'badge' => '📚 Smart School',
        'badge_color' => 'rgba(37,99,235,0.9)',
        'gradient' => 'linear-gradient(135deg, #0a1628 0%, #1a3a5a 50%, #2a5a7a 100%)',
        'features' => [
            ['icon' => '👨‍🎓', 'title' => 'Student Management', 'desc' => 'Manage student profiles, enrollment, attendance, and academic records all in one place.'],
            ['icon' => '👨‍🏫', 'title' => 'Teacher Management', 'desc' => 'Assign classes, track attendance, manage schedules, and evaluate teacher performance.'],
            ['icon' => '💰', 'title' => 'Fee Management', 'desc' => 'Automate fee collection, generate invoices, track payments, and manage financial reports.'],
            ['icon' => '📅', 'title' => 'Timetable & Scheduling', 'desc' => 'Create and manage class schedules, exam timetables, and school events with ease.'],
            ['icon' => '📊', 'title' => 'Analytics & Reports', 'desc' => 'Generate detailed reports on student performance, attendance trends, and financial data.'],
            ['icon' => '💬', 'title' => 'Parent Communication', 'desc' => 'Keep parents informed with real-time updates, notifications, and progress reports.'],
        ],
        'why_features' => [
            ['icon' => '☁️', 'title' => 'Cloud-Based', 'desc' => 'Access from anywhere, anytime.'],
            ['icon' => '🏢', 'title' => 'Multi-Tenant', 'desc' => 'Manage multiple schools easily.'],
            ['icon' => '🔒', 'title' => 'Secure & Reliable', 'desc' => 'Enterprise-grade security.'],
            ['icon' => '🛟', 'title' => '24/7 Support', 'desc' => 'Dedicated support team.'],
        ],
        'challenges' => [
            ['title' => 'Complex School Operations', 'desc' => 'Managing multiple modules like student records, fee tracking, and scheduling in one system.', 'solution' => 'Designed a modular architecture that separates concerns while maintaining seamless integration between modules.'],
            ['title' => 'User Experience for Non-Tech Users', 'desc' => 'Making the platform intuitive for teachers, parents, and administrators with varying technical skills.', 'solution' => 'Used clean UI design with clear navigation, tooltips, and guided workflows for common tasks.'],
        ],
        'results' => [
            ['label' => 'Students Managed', 'value' => '50K+'],
            ['label' => 'Teachers', 'value' => '10K+'],
            ['label' => 'Satisfaction Rate', 'value' => '98%'],
        ],
        'testimonial' => [
            'quote' => 'The school management platform has transformed how we handle administration. Everything from student enrollment to fee collection is now streamlined and efficient.',
            'name' => 'Eduetrium',
            'role' => 'School Management Platform',
            'avatar' => 'ED'
        ],
        'status' => 'under-development'
    ],
    'al-rehmat-it-solutions' => [
        'slug' => 'al-rehmat-it-solutions',
        'title' => 'Al Rehmat IT Solutions — IT Solutions Company',
        'short_desc' => 'Empowering digital solutions for modern businesses. We build, innovate, and grow your digital presence with cutting-edge web development, mobile apps, digital marketing, and creative design solutions.',
        'full_desc' => 'Al Rehmat IT Solutions is a technology-driven company committed to delivering innovative digital solutions. We help businesses establish a strong online presence through cutting-edge web and app development, strategic digital marketing, and creative design services.',
        'long_desc' => 'Al Rehmat IT Solutions is a technology-driven company committed to delivering innovative digital solutions. Our team of skilled professionals is dedicated to transforming ideas into powerful digital experiences that drive growth and success. We specialize in web development, mobile app development, digital marketing, video editing, graphics designing, and WordPress development.',
        'category' => 'IT Solutions & Digital Services',
        'client' => 'Al Rehmat IT Solutions',
        'year' => '2026',
        'tech_stack' => ['Laravel', 'Blade', 'MySQL', 'Tailwind CSS', 'Responsive', 'Services'],
        'tags' => ['laravel', 'website', 'services', 'it-solutions', 'digital-marketing'],
        'github' => 'https://github.com/naraishkumar/al-rehmat-it-solutions',
        'live_url' => 'https://github.com/naraishkumar/al-rehmat-it-solutions',
        'image' => 'al-rehmat-it-solutions.png',
        'badge' => '💻 IT Solutions',
        'badge_color' => 'rgba(37,99,235,0.9)',
        'gradient' => 'linear-gradient(135deg, #0a1628 0%, #1a3a5a 50%, #2a5a8a 100%)',
        'features' => [
            ['icon' => '🌐', 'title' => 'Web Development', 'desc' => 'Custom websites & web applications tailored to your business needs. Laravel, React, Vue.js, MERN, Next.js, Nuxt.js, WordPress, Shopify.'],
            ['icon' => '📱', 'title' => 'App Development', 'desc' => 'Native & cross-platform mobile applications for iOS & Android. iOS & Android Native, Cross-Platform Solutions, UI/UX Design.'],
            ['icon' => '📈', 'title' => 'Digital Marketing', 'desc' => 'Boost your online presence with data-driven digital marketing strategies. SEO & Social Media, PPC & Content Marketing, Analytics & Reporting.'],
            ['icon' => '🎬', 'title' => 'Video Editing', 'desc' => 'Professional video editing & post-production services. Commercial & Corporate Videos, Motion Graphics & Color Grading, Social Media Reels & Shorts.'],
            ['icon' => '🎨', 'title' => 'Graphics Designing', 'desc' => 'Creative designs that capture attention and build brand identity. Logo & Brand Identity, Social Media & Marketing Materials, UI/UX Design.'],
            ['icon' => '🔌', 'title' => 'WordPress Development', 'desc' => 'Professional WordPress development from themes to custom plugins. Custom Theme & Plugin Development, WooCommerce Solutions, Maintenance & Optimization.'],
        ],
        'why_features' => [
            ['icon' => '🎯', 'title' => 'Mission', 'desc' => 'To empower businesses through innovative technology solutions that drive growth, efficiency, and digital transformation.'],
            ['icon' => '👁️', 'title' => 'Vision', 'desc' => 'To become a global leader in IT solutions, recognized for excellence, integrity, and customer-centric innovation.'],
        ],
        'challenges' => [
            ['title' => 'Service Portfolio Presentation', 'desc' => 'Presenting a wide range of IT services in an organized, professional way that builds trust.', 'solution' => 'Created a clean service grid with icons, clear descriptions, and technology badges for each service category.'],
            ['title' => 'Brand Identity for IT Company', 'desc' => 'Creating a modern, trustworthy brand identity that appeals to businesses seeking IT solutions.', 'solution' => 'Used a professional color palette with blue tones, modern typography, and a clean layout that conveys professionalism and innovation.'],
        ],
        'results' => [
            ['label' => 'Projects Done', 'value' => '50+'],
            ['label' => 'Happy Clients', 'value' => '30+'],
            ['label' => 'Years Experience', 'value' => '3+'],
        ],
        'testimonial' => [
            'quote' => 'Al Rehmat IT Solutions transformed our digital presence with their professional web development and digital marketing services. Their team is skilled, responsive, and delivers quality work.',
            'name' => 'Al Rehmat IT Solutions',
            'role' => 'IT Solutions Company',
            'avatar' => 'AR'
        ],
        'status' => 'delievered'
    ]
];


Route::get('/', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/expertise', function () {
    return view('expertise');
});

// My Work route
Route::get('/my-work', function () use ($projects) {
    return view('my-work', ['projects' => $projects]);
})->name('my-work');

// Dynamic project detail route
Route::get('/project/{slug}', function ($slug) use ($projects) {
    if (!isset($projects[$slug])) {
        abort(404);
    }
    return view('my-work-details', ['project' => $projects[$slug], 'projects' => $projects]);
})->name('project.detail');

Route::get('/blogs', function () {
    return view('blogs');
});

Route::get('/blog/laravel-12-rest-api-sanctum', function () {
    return view('blog');
})->name('blog.detail');

Route::get('/contact', function () {
    return view('contact');
});
