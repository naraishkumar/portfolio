<?php

use Illuminate\Support\Facades\Route;

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
        'tech_stack' => ['Laravel', 'Blade', 'MySQL', 'Tailwind CSS', 'Responsive'],
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
        'status' => 'under-development'
    ],
    'uniride-connect' => [
        'slug' => 'uniride-connect',
        'title' => 'UniRide Connect — Safe Campus Ride Sharing',
        'short_desc' => 'Connect with fellow students for affordable, convenient rides across campus and beyond. Join our trusted university community for safe and reliable ride sharing.',
        'full_desc' => 'UniRide Connect is a safe campus ride-sharing platform that connects university students and staff for affordable, convenient rides. The platform is restricted to verified students and staff for maximum safety and trust.',
        'long_desc' => 'UniRide Connect helps students split fuel costs and save money compared to taxi or rideshare services. The platform features real-time booking, instant ride notifications, and a community rating system to ensure quality and reliable ride experiences. Join our trusted university community today!',
        'category' => 'Campus Ride Sharing',
        'client' => 'UniRide Connect',
        'year' => '2026',
        'tech_stack' => ['Laravel', 'Blade', 'MySQL', 'Tailwind CSS', 'Responsive', 'Booking System'],
        'tags' => ['laravel', 'website', 'services', 'ride-sharing', 'campus', 'booking'],
        'github' => 'https://github.com/naraishkumar/uniride-connect',
        'live_url' => 'https://github.com/naraishkumar/uniride-connect',
        'image' => 'uniride-connect.png',
        'badge' => '🚗 Campus Ride',
        'badge_color' => 'rgba(37,99,235,0.9)',
        'gradient' => 'linear-gradient(135deg, #0a1628 0%, #1a4a3a 50%, #2a7a5a 100%)',
        'features' => [
            ['icon' => '🔍', 'title' => 'Find Rides', 'desc' => 'Search and discover available rides from fellow students heading to your destination.'],
            ['icon' => '🚗', 'title' => 'Offer Rides', 'desc' => 'Offer rides and earn money by sharing your journey with other students.'],
            ['icon' => '🎓', 'title' => 'University Only', 'desc' => 'Restricted to verified students and staff for maximum safety and trust.'],
            ['icon' => '💰', 'title' => 'Cost Effective', 'desc' => 'Split fuel costs and save money compared to taxi or rideshare services.'],
            ['icon' => '⚡', 'title' => 'Real-time Booking', 'desc' => 'Instant ride booking and notifications for last-minute travel needs.'],
            ['icon' => '⭐', 'title' => 'Rated Drivers', 'desc' => 'Community rating system ensures quality and reliable ride experiences.'],
        ],
        'why_features' => [
            ['icon' => '🎓', 'title' => 'University Only', 'desc' => 'Restricted to verified students and staff for maximum safety and trust.'],
            ['icon' => '💰', 'title' => 'Cost Effective', 'desc' => 'Split fuel costs and save money compared to taxi or rideshare services.'],
            ['icon' => '⚡', 'title' => 'Real-time Booking', 'desc' => 'Instant ride booking and notifications for last-minute travel needs.'],
            ['icon' => '⭐', 'title' => 'Rated Drivers', 'desc' => 'Community rating system ensures quality and reliable ride experiences.'],
        ],
        'challenges' => [
            ['title' => 'Trust & Safety', 'desc' => 'Building a platform that university students can trust for safe ride sharing.', 'solution' => 'Implemented university email verification, user rating system, and secure ride tracking.'],
            ['title' => 'Real-time Ride Matching', 'desc' => 'Connecting riders with drivers in real-time for instant ride booking.', 'solution' => 'Built a real-time notification system and ride matching algorithm for quick connections.'],
        ],
        'results' => [
            ['label' => 'University Students', 'value' => '500+'],
            ['label' => 'Rides Shared', 'value' => '1000+'],
            ['label' => 'Safety Rating', 'value' => '⭐ 4.8'],
        ],
        'testimonial' => [
            'quote' => 'UniRide Connect has made campus commuting so much easier and affordable. I love that I can find rides quickly and trust the community rating system.',
            'name' => 'UniRide Connect',
            'role' => 'Campus Ride Sharing',
            'avatar' => 'UR'
        ],
        'status' => 'completed'
    ],
    'houzez' => [
        'slug' => 'houzez',
        'title' => 'Houzez — Real Estate Property Platform',
        'short_desc' => 'A comprehensive real estate property platform for buying, renting, and listing properties. Discover featured properties with advanced search and filtering.',
        'full_desc' => 'Houzez is a complete real estate property platform that allows users to discover, buy, and rent properties. The platform features advanced search, property listings, and detailed property views.',
        'long_desc' => 'Houzez is a comprehensive real estate platform built with Vue.js on the frontend and Laravel on the backend. It features advanced property search with filters for cities, types, bedrooms, and price ranges. Users can browse featured properties, view property details, and contact real estate agents.',
        'category' => 'Real Estate & Property',
        'client' => 'Houzez',
        'year' => '2026',
        'tech_stack' => ['Vue.js', 'Laravel', 'MySQL', 'Axios', 'Tailwind CSS', 'Stripe'],
        'tags' => ['vue', 'laravel', 'real-estate', 'properties', 'api', 'payment'],
        'github' => 'https://github.com/naraishkumar/houzez-vue.js',
        'live_url' => 'https://github.com/naraishkumar/houzez-vue.js',
        'image' => 'houzez.png',
        'badge' => '🏠 Real Estate',
        'badge_color' => 'rgba(37,99,235,0.9)',
        'gradient' => 'linear-gradient(135deg, #0a1628 0%, #1a3a5a 50%, #2a5a8a 100%)',
        'features' => [
            ['icon' => '🏠', 'title' => 'Property Listings', 'desc' => 'Browse featured properties with detailed information and high-quality images.'],
            ['icon' => '🔍', 'title' => 'Advanced Search', 'desc' => 'Search properties by city, type, bedrooms, price, and status (for rent/for sale).'],
            ['icon' => '💳', 'title' => 'Stripe Payment', 'desc' => 'Secure payment processing for property transactions using Stripe integration.'],
            ['icon' => '📱', 'title' => 'Mobile Responsive', 'desc' => 'Fully responsive design optimized for all devices and screen sizes.'],
            ['icon' => '🔌', 'title' => 'REST API', 'desc' => 'Complete REST API backend built with Laravel for seamless data management.'],
            ['icon' => '⭐', 'title' => 'Featured Properties', 'desc' => 'Highlighted featured properties with special badges and priority listing.'],
        ],
        'why_features' => [
            ['icon' => '🏠', 'title' => 'Property Listings', 'desc' => 'Discover featured properties with detailed information.'],
            ['icon' => '🔍', 'title' => 'Advanced Search', 'desc' => 'Filter properties by city, type, bedrooms, and price.'],
            ['icon' => '💳', 'title' => 'Secure Payments', 'desc' => 'Stripe integration for safe property transactions.'],
        ],
        'challenges' => [
            ['title' => 'Complex Property Search', 'desc' => 'Building an advanced search system with multiple filters and real-time results.', 'solution' => 'Implemented Vue.js with Axios for real-time search and Laravel backend for efficient query handling.'],
            ['title' => 'Payment Integration', 'desc' => 'Integrating secure payment processing for property transactions.', 'solution' => 'Used Stripe API with webhooks for secure payment processing and transaction management.'],
        ],
        'results' => [
            ['label' => 'Properties Listed', 'value' => '500+'],
            ['label' => 'Active Users', 'value' => '200+'],
            ['label' => 'Transactions', 'value' => '100+'],
        ],
        'testimonial' => [
            'quote' => 'Houzez has transformed how we list and manage properties. The advanced search and payment features have made it easy for buyers and sellers to connect.',
            'name' => 'Houzez',
            'role' => 'Real Estate Platform',
            'avatar' => 'HZ'
        ],
        'status' => 'deliereved'
    ],
    'tile-management' => [
        'slug' => 'tile-management',
        'title' => 'Tile Management — Inventory & Shop Management',
        'short_desc' => 'A comprehensive custom software solution for managing tile shops, inventory, raw materials, manufactured products, sales, expenses, and financial reporting.',
        'full_desc' => 'Tile Management is a custom software solution designed for tile shops to manage their entire business operations. The platform handles inventory, raw material purchases, manufactured products, sales tracking, expenses, and financial reporting.',
        'long_desc' => 'Tile Management is a complete business management solution for tile shops. It includes modules for catalog management, members, raw material purchase, manufactured products, sales, expenses, and detailed reports. The dashboard provides a quick overview of categories, brands, products, inventory, and financial status.',
        'category' => 'Business Management & Inventory',
        'client' => 'Sundar Shoes / Tile Shops',
        'year' => '2026',
        'tech_stack' => ['Laravel', 'Blade', 'MySQL', 'Custom Software', 'Dashboard', 'Inventory'],
        'tags' => ['laravel', 'custom-software', 'inventory', 'business-management', 'dashboard'],
        'github' => 'https://github.com/naraishkumar/tile-managements',
        'live_url' => 'https://github.com/naraishkumar/tile-managements',
        'image' => 'tile-management.png',
        'badge' => '🏪 Inventory',
        'badge_color' => 'rgba(16,185,129,0.9)',
        'gradient' => 'linear-gradient(135deg, #0a1628 0%, #1a4a3a 50%, #2a7a5a 100%)',
        'features' => [
            ['icon' => '📊', 'title' => 'Dashboard', 'desc' => 'Quick overview of categories, brands, unit types, customers, suppliers, and inventory status.'],
            ['icon' => '📦', 'title' => 'Inventory Management', 'desc' => 'Track raw material stock items and manufactured stock items with real-time updates.'],
            ['icon' => '💰', 'title' => 'Financial Overview', 'desc' => 'Monitor total purchases, paid amounts, sales, received payments, and pending balances.'],
            ['icon' => '📈', 'title' => 'Sales & Expenses', 'desc' => 'Track sales transactions and expenses with detailed reporting and analysis.'],
            ['icon' => '📋', 'title' => 'Reports', 'desc' => 'Generate comprehensive reports for business insights and decision making.'],
            ['icon' => '🏷️', 'title' => 'Product Management', 'desc' => 'Manage raw materials, manufactured products, and product catalog with ease.'],
        ],
        'why_features' => [
            ['icon' => '📊', 'title' => 'Dashboard', 'desc' => 'Real-time business insights at a glance.'],
            ['icon' => '💰', 'title' => 'Financial Tracking', 'desc' => 'Complete financial overview and reporting.'],
            ['icon' => '📦', 'title' => 'Inventory', 'desc' => 'Track raw materials and manufactured products.'],
        ],
        'challenges' => [
            ['title' => 'Complex Inventory Management', 'desc' => 'Managing multiple product types, raw materials, and manufactured goods in one system.', 'solution' => 'Designed a modular inventory system with separate tracking for raw materials and manufactured products.'],
            ['title' => 'Financial Tracking', 'desc' => 'Tracking purchases, sales, payments, and pending balances across multiple shops.', 'solution' => 'Implemented comprehensive financial modules with detailed reporting and balance tracking.'],
        ],
        'results' => [
            ['label' => 'Categories', 'value' => '11+'],
            ['label' => 'Brands', 'value' => '3+'],
            ['label' => 'Products', 'value' => '3+'],
        ],
        'testimonial' => [
            'quote' => 'Tile Management has streamlined our entire business operations. From inventory to financials, everything is now organized and easily accessible.',
            'name' => 'Tariq Tiles',
            'role' => 'Tile Shop Management',
            'avatar' => 'TT'
        ],
        'status' => 'completed'
    ],
    'internet-management' => [
        'slug' => 'internet-management',
        'title' => 'Internet Management — ISP Management System',
        'short_desc' => 'A complete internet service provider (ISP) management system for managing customers, contractors, sub-contractors, HRM, complaints, locations, accounts, and radius integration.',
        'full_desc' => 'Internet Management is a custom software solution designed for internet service providers to manage their entire operations. The platform handles customers, contractors, sub-contractors, HRM, complaints, locations, accounts, and radius integration.',
        'long_desc' => 'Internet Management is a comprehensive ISP management system developed for internet service providers. It includes modules for managing customers, contractors, sub-contractors, HRM, complaints, locations, accounts, logs, wallets, and radius integration. The dashboard provides a quick overview of total contractors, sub-contractors, customers, staff, account heads, and account sub-heads.',
        'category' => 'ISP Management & Telecommunications',
        'client' => 'Abdullah Aslam / ISP Company',
        'year' => '2026',
        'tech_stack' => ['Laravel', 'Blade', 'MySQL', 'Custom Software', 'Dashboard', 'Radius'],
        'tags' => ['laravel', 'custom-software', 'isp-management', 'telecommunications', 'dashboard', 'radius'],
        'github' => 'https://github.com/naraishkumar/internet-management-system',
        'live_url' => 'https://github.com/naraishkumar/internet-management-system',
        'image' => 'internet-management.png',
        'badge' => '🌐 ISP Management',
        'badge_color' => 'rgba(139,92,246,0.9)',
        'gradient' => 'linear-gradient(135deg, #0a1628 0%, #3a1a5a 50%, #5a2a8a 100%)',
        'features' => [
            ['icon' => '📊', 'title' => 'Dashboard', 'desc' => 'Real-time overview of total contractors, sub-contractors, customers, staff, and accounts.'],
            ['icon' => '👥', 'title' => 'Customer Management', 'desc' => 'Manage customer profiles, subscriptions, and service history.'],
            ['icon' => '🔧', 'title' => 'Contractor Management', 'desc' => 'Manage contractors and sub-contractors with detailed profiles and tracking.'],
            ['icon' => '📋', 'title' => 'HRM', 'desc' => 'Human resource management for staff, attendance, and payroll.'],
            ['icon' => '📝', 'title' => 'Complaint Management', 'desc' => 'Track and manage customer complaints with status updates and resolution tracking.'],
            ['icon' => '📍', 'title' => 'Location Management', 'desc' => 'Manage service locations and coverage areas.'],
            ['icon' => '💰', 'title' => 'Accounts & Wallets', 'desc' => 'Complete financial management with account heads, sub-heads, and wallet tracking.'],
            ['icon' => '📡', 'title' => 'Radius Integration', 'desc' => 'Integration with Radius for authentication and billing management.'],
            ['icon' => '📄', 'title' => 'Logs', 'desc' => 'System logs for monitoring and troubleshooting.'],
        ],
        'why_features' => [
            ['icon' => '📊', 'title' => 'Dashboard', 'desc' => 'Real-time business insights at a glance.'],
            ['icon' => '👥', 'title' => 'Customer Management', 'desc' => 'Complete customer lifecycle management.'],
            ['icon' => '💰', 'title' => 'Financial Tracking', 'desc' => 'Comprehensive accounts and wallet management.'],
        ],
        'challenges' => [
            ['title' => 'Complex Multi-module System', 'desc' => 'Managing multiple modules like customers, contractors, HRM, accounts, and radius in one system.', 'solution' => 'Designed a modular architecture with clear separation of concerns and seamless integration between modules.'],
            ['title' => 'Radius Integration', 'desc' => 'Integrating with Radius for authentication and billing management.', 'solution' => 'Built custom integration with Radius API for seamless user authentication and billing management.'],
        ],
        'results' => [
            ['label' => 'Total Contractors', 'value' => '11+'],
            ['label' => 'Total Customers', 'value' => '13+'],
            ['label' => 'Total Staff', 'value' => '12+'],
        ],
        'testimonial' => [
            'quote' => 'Internet Management has completely transformed how we manage our ISP operations. Everything from customers to accounts is now streamlined and efficient.',
            'name' => 'Abdullah Aslam',
            'role' => 'ISP Management System',
            'avatar' => 'AA'
        ],
        'status' => 'completed'
    ],
];

// Blog data - Single source of truth
$blogs = [
    'laravel-12-rest-api-sanctum' => [
        'slug' => 'laravel-12-rest-api-sanctum',
        'title' => 'Building a REST API with Laravel 12 + Sanctum',
        'category' => 'Laravel 12',
        'category_color' => '#3b82f6',
        'excerpt' => 'A complete step-by-step guide to building a production-ready REST API with Laravel 12 and Sanctum authentication.',
        'full_description' => 'A complete step-by-step guide to building a production-ready REST API with Laravel 12 and Sanctum authentication.',
        'content' => 'The full blog content will be rendered here...',
        'author' => 'Naraish Kumar',
        'author_role' => 'Laravel & Vue.js Developer',
        'author_avatar' => 'NK',
        'date' => 'July 19, 2026',
        'read_time' => '15 min read',
        'image' => 'laravel-sanctum-api.png',
        'tags' => ['laravel', 'api', 'sanctum', 'rest-api', 'authentication'],
        'status' => 'published',
        'table_of_contents' => [
            ['id' => 'intro', 'title' => 'Introduction'],
            ['id' => 'prerequisites', 'title' => 'Prerequisites'],
            ['id' => 'installation', 'title' => 'Step 1: Install Laravel 12'],
            ['id' => 'sanctum', 'title' => 'Step 2: Install and Configure Sanctum'],
            ['id' => 'controller', 'title' => 'Step 3: Create the Authentication Controller'],
            ['id' => 'routes', 'title' => 'Step 4: Set Up Routes'],
            ['id' => 'password-reset', 'title' => 'Step 5: Password Reset with OTP'],
            ['id' => 'testing', 'title' => 'Step 6: Test with Postman'],
            ['id' => 'endpoints', 'title' => 'API Endpoints Summary'],
            ['id' => 'advanced', 'title' => 'Advanced Features'],
            ['id' => 'conclusion', 'title' => 'Conclusion'],
        ],
        'sections' => [
            'intro' => [
                'title' => 'Introduction',
                'content' => '<p>In this comprehensive tutorial, we\'ll build a production-ready REST API using <strong>Laravel 12</strong> with <strong>Sanctum</strong> authentication. You\'ll learn how to implement secure user registration, login, token management, password reset with OTP, and advanced security features.</p><p>By the end of this guide, you\'ll have a fully functional API that you can use as a starting point for your next Laravel project or integrate with a Vue.js/React frontend.</p>'
            ],
            'prerequisites' => [
                'title' => 'Prerequisites',
                'content' => '<p>Before we start, ensure you have:</p><ul><li>PHP 8.2+</li><li>Composer installed</li><li>MySQL or any supported database</li><li>Postman or similar API testing tool</li></ul>'
            ],
            'installation' => [
                'title' => 'Step 1: Install Laravel 12',
                'content' => '<div style="background:#0d1117;border-radius:10px;padding:20px;margin:16px 0 24px;overflow-x:auto;"><pre style="color:#e6edf3;font-family:\'Fira Code\',monospace;font-size:.88rem;margin:0;white-space:pre-wrap;">composer create-project laravel/laravel laravel-api-sanctum\ncd laravel-api-sanctum</pre></div>'
            ],
            'sanctum' => [
                'title' => 'Step 2: Install and Configure Sanctum',
                'content' => '<div style="background:#0d1117;border-radius:10px;padding:20px;margin:16px 0 24px;overflow-x:auto;"><pre style="color:#e6edf3;font-family:\'Fira Code\',monospace;font-size:.88rem;margin:0;white-space:pre-wrap;">composer require laravel/sanctum\nphp artisan vendor:publish --provider="Laravel\Sanctum\SanctumServiceProvider"\nphp artisan migrate</pre></div><h4 style="font-weight:700;color:var(--navy);margin-top:24px;margin-bottom:12px;">Configure Sanctum</h4><p style="color:var(--muted);line-height:1.8;font-size:.95rem;">Open <code style="background:var(--light);padding:2px 8px;border-radius:4px;font-size:.85rem;">config/sanctum.php</code> and ensure the <code style="background:var(--light);padding:2px 8px;border-radius:4px;font-size:.85rem;">stateful</code> array includes your frontend domains:</p><div style="background:#0d1117;border-radius:10px;padding:20px;margin:16px 0 24px;overflow-x:auto;"><pre style="color:#e6edf3;font-family:\'Fira Code\',monospace;font-size:.82rem;margin:0;white-space:pre-wrap;">\'stateful\' => explode(\',\', env(\'SANCTUM_STATEFUL_DOMAINS\', sprintf(\'%s%s\', \'localhost,localhost:3000,127.0.0.1,127.0.0.1:8000,::1\', Sanctum::currentApplicationUrlWithPort()))),</pre></div><h4 style="font-weight:700;color:var(--navy);margin-top:24px;margin-bottom:12px;">Update .env</h4><div style="background:#0d1117;border-radius:10px;padding:20px;margin:16px 0 24px;overflow-x:auto;"><pre style="color:#e6edf3;font-family:\'Fira Code\',monospace;font-size:.82rem;margin:0;white-space:pre-wrap;">SANCTUM_STATEFUL_DOMAINS=localhost,localhost:8000,127.0.0.1\nSESSION_DRIVER=cookie</pre></div>'
            ],
            'controller' => [
                'title' => 'Step 3: Create the Authentication Controller',
                'content' => '<div style="background:#0d1117;border-radius:10px;padding:20px;margin:16px 0 24px;overflow-x:auto;"><pre style="color:#e6edf3;font-family:\'Fira Code\',monospace;font-size:.82rem;margin:0;white-space:pre-wrap;">php artisan make:controller Api/AuthController</pre></div><p style="color:var(--muted);line-height:1.8;font-size:.95rem;margin-bottom:16px;">The controller handles registration, login, logout, profile management, password reset with OTP, and token management.</p>'
            ],
            'routes' => [
                'title' => 'Step 4: Set Up Routes',
                'content' => '<p style="color:var(--muted);line-height:1.8;font-size:.95rem;margin-bottom:16px;">Open <code style="background:var(--light);padding:2px 8px;border-radius:4px;font-size:.85rem;">routes/api.php</code> and add:</p><div style="background:#0d1117;border-radius:10px;padding:20px;margin:16px 0 24px;overflow-x:auto;"><pre style="color:#e6edf3;font-family:\'Fira Code\',monospace;font-size:.82rem;margin:0;white-space:pre-wrap;">// Public Routes\nRoute::post(\'/register\', [AuthController::class, \'register\']);\nRoute::post(\'/login\', [AuthController::class, \'login\']);\n\n// Protected Routes\nRoute::middleware(\'auth:sanctum\')->group(function () {\n    Route::get(\'/user\', [AuthController::class, \'user\']);\n    Route::put(\'/user\', [AuthController::class, \'updateProfile\']);\n    Route::post(\'/logout\', [AuthController::class, \'logout\']);\n    Route::put(\'/user/password\', [AuthController::class, \'changePassword\']);\n    Route::get(\'/tokens\', [AuthController::class, \'listTokens\']);\n    Route::delete(\'/tokens/{tokenId}\', [AuthController::class, \'revokeToken\']);\n});</pre></div>'
            ],
            'password-reset' => [
                'title' => 'Step 5: Password Reset with OTP',
                'content' => '<p style="color:var(--muted);line-height:1.8;font-size:.95rem;margin-bottom:16px;">Create a migration for storing OTPs:</p><div style="background:#0d1117;border-radius:10px;padding:20px;margin:16px 0 24px;overflow-x:auto;"><pre style="color:#e6edf3;font-family:\'Fira Code\',monospace;font-size:.82rem;margin:0;white-space:pre-wrap;">php artisan make:model PasswordResetOtp -m</pre></div><p style="color:var(--muted);line-height:1.8;font-size:.95rem;margin-bottom:16px;">The OTP model stores reset codes with expiration and usage tracking:</p><div style="background:#0d1117;border-radius:10px;padding:20px;margin:16px 0 24px;overflow-x:auto;"><pre style="color:#e6edf3;font-family:\'Fira Code\',monospace;font-size:.82rem;margin:0;white-space:pre-wrap;">Schema::create(\'password_reset_otps\', function (Blueprint $table) {\n    $table->id();\n    $table->string(\'email\')->index();\n    $table->string(\'otp\');\n    $table->timestamp(\'expires_at\');\n    $table->boolean(\'used\')->default(false);\n    $table->integer(\'attempts\')->default(0);\n    $table->timestamps();\n});</pre></div>'
            ],
            'testing' => [
                'title' => 'Step 6: Test with Postman',
                'content' => '<h4 style="font-weight:700;color:var(--navy);margin-top:24px;margin-bottom:12px;">1. Register User</h4><div style="background:#0d1117;border-radius:10px;padding:20px;margin:16px 0 24px;overflow-x:auto;"><pre style="color:#e6edf3;font-family:\'Fira Code\',monospace;font-size:.82rem;margin:0;white-space:pre-wrap;">POST http://localhost:8000/api/register\nContent-Type: application/json\n\n{\n    "name": "John Doe",\n    "email": "john@example.com",\n    "password": "password123",\n    "password_confirmation": "password123"\n}</pre></div><div style="background:#e6ffed;border:1px solid #22c55e;border-radius:8px;padding:16px 20px;margin:16px 0 24px;"><h4 style="color:#166534;font-weight:700;margin-bottom:6px;">✅ Expected Response:</h4><pre style="color:#166534;font-family:\'Fira Code\',monospace;font-size:.82rem;margin:0;white-space:pre-wrap;">{\n    "message": "Registration successful",\n    "token": "1|abc123def456...",\n    "user": {\n        "id": 1,\n        "name": "John Doe",\n        "email": "john@example.com"\n    }\n}</pre></div><h4 style="font-weight:700;color:var(--navy);margin-top:24px;margin-bottom:12px;">2. Login User</h4><div style="background:#0d1117;border-radius:10px;padding:20px;margin:16px 0 24px;overflow-x:auto;"><pre style="color:#e6edf3;font-family:\'Fira Code\',monospace;font-size:.82rem;margin:0;white-space:pre-wrap;">POST http://localhost:8000/api/login\nContent-Type: application/json\n\n{\n    "email": "john@example.com",\n    "password": "password123"\n}</pre></div><h4 style="font-weight:700;color:var(--navy);margin-top:24px;margin-bottom:12px;">3. Get Authenticated User (Protected)</h4><div style="background:#0d1117;border-radius:10px;padding:20px;margin:16px 0 24px;overflow-x:auto;"><pre style="color:#e6edf3;font-family:\'Fira Code\',monospace;font-size:.82rem;margin:0;white-space:pre-wrap;">GET http://localhost:8000/api/user\nAuthorization: Bearer &lt;your-token&gt;</pre></div><h4 style="font-weight:700;color:var(--navy);margin-top:24px;margin-bottom:12px;">4. Logout</h4><div style="background:#0d1117;border-radius:10px;padding:20px;margin:16px 0 24px;overflow-x:auto;"><pre style="color:#e6edf3;font-family:\'Fira Code\',monospace;font-size:.82rem;margin:0;white-space:pre-wrap;">POST http://localhost:8000/api/logout\nAuthorization: Bearer &lt;your-token&gt;</pre></div>'
            ],
            'endpoints' => [
                'title' => 'API Endpoints Summary',
                'content' => '<div style="overflow-x:auto;margin:16px 0 32px;"><table style="width:100%;border-collapse:collapse;font-size:.9rem;"><thead><tr style="background:var(--navy);color:#fff;"><th style="padding:12px 16px;text-align:left;border:1px solid rgba(255,255,255,0.1);">Method</th><th style="padding:12px 16px;text-align:left;border:1px solid rgba(255,255,255,0.1);">Endpoint</th><th style="padding:12px 16px;text-align:left;border:1px solid rgba(255,255,255,0.1);">Auth Required</th><th style="padding:12px 16px;text-align:left;border:1px solid rgba(255,255,255,0.1);">Description</th></tr></thead><tbody><tr style="background:#fff;border:1px solid var(--border);"><td style="padding:10px 16px;border:1px solid var(--border);"><code style="background:#f0f4ff;padding:2px 8px;border-radius:4px;color:#2563eb;">POST</code></td><td style="padding:10px 16px;border:1px solid var(--border);"><code>/api/register</code></td><td style="padding:10px 16px;border:1px solid var(--border);">❌</td><td style="padding:10px 16px;border:1px solid var(--border);">Register a new user</td></tr><tr style="background:var(--off-white);border:1px solid var(--border);"><td style="padding:10px 16px;border:1px solid var(--border);"><code style="background:#f0f4ff;padding:2px 8px;border-radius:4px;color:#2563eb;">POST</code></td><td style="padding:10px 16px;border:1px solid var(--border);"><code>/api/login</code></td><td style="padding:10px 16px;border:1px solid var(--border);">❌</td><td style="padding:10px 16px;border:1px solid var(--border);">Login and get token</td></tr><tr style="background:#fff;border:1px solid var(--border);"><td style="padding:10px 16px;border:1px solid var(--border);"><code style="background:#f0f4ff;padding:2px 8px;border-radius:4px;color:#2563eb;">GET</code></td><td style="padding:10px 16px;border:1px solid var(--border);"><code>/api/user</code></td><td style="padding:10px 16px;border:1px solid var(--border);">✅</td><td style="padding:10px 16px;border:1px solid var(--border);">Get authenticated user</td></tr><tr style="background:var(--off-white);border:1px solid var(--border);"><td style="padding:10px 16px;border:1px solid var(--border);"><code style="background:#f0f4ff;padding:2px 8px;border-radius:4px;color:#2563eb;">POST</code></td><td style="padding:10px 16px;border:1px solid var(--border);"><code>/api/logout</code></td><td style="padding:10px 16px;border:1px solid var(--border);">✅</td><td style="padding:10px 16px;border:1px solid var(--border);">Logout (revoke current token)</td></tr><tr style="background:#fff;border:1px solid var(--border);"><td style="padding:10px 16px;border:1px solid var(--border);"><code style="background:#f0f4ff;padding:2px 8px;border-radius:4px;color:#2563eb;">PUT</code></td><td style="padding:10px 16px;border:1px solid var(--border);"><code>/api/user/password</code></td><td style="padding:10px 16px;border:1px solid var(--border);">✅</td><td style="padding:10px 16px;border:1px solid var(--border);">Change password</td></tr><tr style="background:var(--off-white);border:1px solid var(--border);"><td style="padding:10px 16px;border:1px solid var(--border);"><code style="background:#f0f4ff;padding:2px 8px;border-radius:4px;color:#2563eb;">GET</code></td><td style="padding:10px 16px;border:1px solid var(--border);"><code>/api/tokens</code></td><td style="padding:10px 16px;border:1px solid var(--border);">✅</td><td style="padding:10px 16px;border:1px solid var(--border);">List all active tokens</td></tr><tr style="background:#fff;border:1px solid var(--border);"><td style="padding:10px 16px;border:1px solid var(--border);"><code style="background:#f0f4ff;padding:2px 8px;border-radius:4px;color:#2563eb;">DELETE</code></td><td style="padding:10px 16px;border:1px solid var(--border);"><code>/api/tokens/{id}</code></td><td style="padding:10px 16px;border:1px solid var(--border);">✅</td><td style="padding:10px 16px;border:1px solid var(--border);">Revoke specific token</td></tr><tr style="background:var(--off-white);border:1px solid var(--border);"><td style="padding:10px 16px;border:1px solid var(--border);"><code style="background:#f0f4ff;padding:2px 8px;border-radius:4px;color:#2563eb;">POST</code></td><td style="padding:10px 16px;border:1px solid var(--border);"><code>/api/password/forgot</code></td><td style="padding:10px 16px;border:1px solid var(--border);">❌</td><td style="padding:10px 16px;border:1px solid var(--border);">Send OTP for password reset</td></tr></tbody></table></div>'
            ],
            'advanced' => [
                'title' => 'Advanced Features',
                'content' => '<h4 style="font-weight:700;color:var(--navy);margin-top:24px;margin-bottom:12px;">Rate Limiting</h4><p style="color:var(--muted);line-height:1.8;font-size:.95rem;margin-bottom:16px;">In <code style="background:var(--light);padding:2px 8px;border-radius:4px;font-size:.85rem;">App\Http\Kernel.php</code>, add to the <code style="background:var(--light);padding:2px 8px;border-radius:4px;font-size:.85rem;">$middlewareGroups</code>:</p><div style="background:#0d1117;border-radius:10px;padding:20px;margin:16px 0 24px;overflow-x:auto;"><pre style="color:#e6edf3;font-family:\'Fira Code\',monospace;font-size:.82rem;margin:0;white-space:pre-wrap;">\'api\' => [\n    \Laravel\Sanctum\Http\Middleware\EnsureFrontendRequestsAreStateful::class,\n    \'throttle:api\',\n    \Illuminate\Routing\Middleware\SubstituteBindings::class,\n],</pre></div><h4 style="font-weight:700;color:var(--navy);margin-top:24px;margin-bottom:12px;">Token Expiration</h4><p style="color:var(--muted);line-height:1.8;font-size:.95rem;margin-bottom:16px;">In <code style="background:var(--light);padding:2px 8px;border-radius:4px;font-size:.85rem;">config/sanctum.php</code>:</p><div style="background:#0d1117;border-radius:10px;padding:20px;margin:16px 0 24px;overflow-x:auto;"><pre style="color:#e6edf3;font-family:\'Fira Code\',monospace;font-size:.82rem;margin:0;white-space:pre-wrap;">// Token expiration in minutes (null = never expires)\n\'expiration\' => env(\'SANCTUM_EXPIRATION\', 60 * 24 * 7), // 7 days</pre></div>'
            ],
            'conclusion' => [
                'title' => '🎉 Conclusion',
                'content' => '<p style="color:var(--muted);line-height:1.8;font-size:1rem;margin-bottom:20px;">You\'ve successfully built a secure REST API with Laravel 12 and Sanctum! This implementation includes:</p><ul style="color:var(--muted);line-height:2;font-size:1rem;padding-left:24px;margin-bottom:32px;"><li>✅ User registration and login with token-based authentication</li><li>✅ Protected routes with Sanctum middleware</li><li>✅ Password reset with OTP</li><li>✅ User profile management</li><li>✅ Token management (list, revoke)</li><li>✅ Rate limiting and security features</li></ul>'
            ]
        ],
        'related_posts' => [
            [
                'slug' => 'jwt-vs-sanctum',
                'title' => 'JWT vs Sanctum — Choosing the Right Auth',
                'icon' => '🔐',
                'excerpt' => 'A practical comparison of JWT and Sanctum for Laravel APIs.'
            ],
            [
                'slug' => 'laravel-performance-optimization',
                'title' => 'Laravel Performance Optimization',
                'icon' => '⚡',
                'excerpt' => 'Speed up your Laravel app in 7 easy steps.'
            ],
            [
                'slug' => 'laravel-vue-spa',
                'title' => 'Laravel + Vue.js Full Stack SPA',
                'icon' => '🎯',
                'excerpt' => 'Build a decoupled Laravel API with Vue.js frontend.'
            ]
        ]
    ],
    'laravel-vue-spa' => [
        'slug' => 'laravel-vue-spa',
        'title' => 'Building a Full-Stack SPA with Laravel API + Vue.js Frontend',
        'category' => 'Full Stack',
        'category_color' => '#10b981',
        'excerpt' => 'A complete walkthrough of setting up a decoupled Laravel API backend with a Vue.js SPA frontend — including authentication, state management, and deployment.',
        'full_description' => 'A complete walkthrough of setting up a decoupled Laravel API backend with a Vue.js SPA frontend — including authentication, state management, and deployment.',
        'author' => 'Naraish Kumar',
        'author_role' => 'Laravel & Vue.js Developer',
        'author_avatar' => 'NK',
        'date' => 'July 20, 2026',
        'read_time' => '12 min read',
        'image' => 'laravel-vue-spa.png',
        'tags' => ['laravel', 'vue', 'spa', 'full-stack', 'api', 'authentication'],
        'status' => 'published',
        'table_of_contents' => [
            ['id' => 'intro', 'title' => 'Introduction'],
            ['id' => 'architecture', 'title' => 'SPA Architecture Overview'],
            ['id' => 'setup', 'title' => 'Step 1: Setting Up Laravel Backend'],
            ['id' => 'api', 'title' => 'Step 2: Building the REST API'],
            ['id' => 'vue-setup', 'title' => 'Step 3: Setting Up Vue.js Frontend'],
            ['id' => 'axios', 'title' => 'Step 4: API Integration with Axios'],
            ['id' => 'auth', 'title' => 'Step 5: Authentication & Token Management'],
            ['id' => 'state', 'title' => 'Step 6: State Management with Pinia'],
            ['id' => 'routes', 'title' => 'Step 7: Vue Router & Protected Routes'],
            ['id' => 'cors', 'title' => 'Step 8: Handling CORS'],
            ['id' => 'deployment', 'title' => 'Step 9: Deployment & Optimization'],
            ['id' => 'conclusion', 'title' => 'Conclusion'],
        ],
        'sections' => [
            'intro' => [
                'title' => 'Introduction',
                'content' => '<p>In this comprehensive tutorial, we\'ll build a modern Single Page Application (SPA) using <strong>Laravel</strong> as the backend API and <strong>Vue.js 3</strong> with the Composition API as the frontend. This decoupled architecture offers flexibility, scalability, and a great developer experience.</p><p>You\'ll learn how to set up a RESTful API with Laravel, build a reactive Vue.js frontend, implement authentication with Sanctum, manage state with Pinia, and deploy your application to production.</p><div style="background:var(--blue-pale);border-left:4px solid var(--blue);border-radius:8px;padding:20px 24px;margin:32px 0;"><h4 style="font-weight:700;color:var(--navy);margin-bottom:8px;">📋 What You\'ll Build</h4><ul style="list-style:none;display:flex;flex-direction:column;gap:6px;color:var(--muted);font-size:.95rem;"><li>✅ Complete Laravel REST API with Sanctum authentication</li><li>✅ Vue.js SPA with Composition API</li><li>✅ Authentication (Login, Register, Logout)</li><li>✅ Protected routes with Vue Router</li><li>✅ State management with Pinia</li><li>✅ API integration with Axios</li></ul></div>'
            ],
            'architecture' => [
                'title' => 'SPA Architecture Overview',
                'content' => '<p>Before we dive into the code, let\'s understand the architecture of a decoupled SPA:</p><div style="background:var(--off-white);border:1px solid var(--border);border-radius:12px;padding:24px;margin:20px 0;"><pre style="color:var(--navy);font-family:\'Courier New\',monospace;font-size:.85rem;margin:0;line-height:1.8;">┌─────────────────────────────────────────────────────┐\n│                   Vue.js SPA                        │\n│  ┌─────────────┐  ┌─────────────┐  ┌─────────────┐ │\n│  │  Vue Router │  │   Pinia    │  │   Axios     │ │\n│  │   Routing   │  │  State     │  │  API Calls  │ │\n│  └─────────────┘  └─────────────┘  └─────────────┘ │\n│                                                    │\n│                         │                          │\n│                         ▼                          │\n│              ┌─────────────────┐                   │\n│              │   REST API      │                   │\n│              │   (Laravel)     │                   │\n│              └─────────────────┘                   │\n│                         │                          │\n│                         ▼                          │\n│              ┌─────────────────┐                   │\n│              │    Database     │                   │\n│              │    (MySQL)      │                   │\n│              └─────────────────┘                   │\n└─────────────────────────────────────────────────────┘</pre></div><p><strong>Key Benefits:</strong></p><ul><li>✅ Decoupled frontend and backend</li><li>✅ Reusable API for multiple clients</li><li>✅ Improved developer experience</li><li>✅ Scalable architecture</li><li>✅ Better performance with client-side rendering</li></ul>'
            ],
            'setup' => [
                'title' => 'Step 1: Setting Up Laravel Backend',
                'content' => '<p>Let\'s start by setting up our Laravel backend API.</p><div style="background:#0d1117;border-radius:10px;padding:20px;margin:16px 0 24px;overflow-x:auto;"><pre style="color:#e6edf3;font-family:\'Fira Code\',monospace;font-size:.88rem;margin:0;white-space:pre-wrap;"># Create a new Laravel project\ncomposer create-project laravel/laravel laravel-vue-spa-backend\n\n# Navigate to the project\ncd laravel-vue-spa-backend\n\n# Install Sanctum for API authentication\ncomposer require laravel/sanctum\n\n# Publish Sanctum configuration\nphp artisan vendor:publish --provider="Laravel\Sanctum\SanctumServiceProvider"\n\n# Run migrations\nphp artisan migrate</pre></div><h4 style="font-weight:700;color:var(--navy);margin-top:24px;margin-bottom:12px;">Configure Sanctum for API</h4><p style="color:var(--muted);line-height:1.8;font-size:.95rem;">Open <code style="background:var(--light);padding:2px 8px;border-radius:4px;font-size:.85rem;">config/sanctum.php</code> and update the stateful domains:</p><div style="background:#0d1117;border-radius:10px;padding:20px;margin:16px 0 24px;overflow-x:auto;"><pre style="color:#e6edf3;font-family:\'Fira Code\',monospace;font-size:.82rem;margin:0;white-space:pre-wrap;">\'stateful\' => explode(\',\', env(\'SANCTUM_STATEFUL_DOMAINS\', sprintf(\n    \'%s%s\',\n    \'localhost,localhost:3000,127.0.0.1,127.0.0.1:8000,::1\',\n    Sanctum::currentApplicationUrlWithPort()\n))),</pre></div><p style="color:var(--muted);line-height:1.8;font-size:.95rem;">Add to your <code style="background:var(--light);padding:2px 8px;border-radius:4px;font-size:.85rem;">.env</code> file:</p><div style="background:#0d1117;border-radius:10px;padding:20px;margin:16px 0 24px;overflow-x:auto;"><pre style="color:#e6edf3;font-family:\'Fira Code\',monospace;font-size:.82rem;margin:0;white-space:pre-wrap;">SANCTUM_STATEFUL_DOMAINS=localhost,localhost:3000,localhost:5173,127.0.0.1\nSESSION_DRIVER=cookie</pre></div>'
            ],
            'api' => [
                'title' => 'Step 2: Building the REST API',
                'content' => '<p>Create the authentication controller and API routes for our application.</p><h4 style="font-weight:700;color:var(--navy);margin-top:24px;margin-bottom:12px;">Create Auth Controller</h4><div style="background:#0d1117;border-radius:10px;padding:20px;margin:16px 0 24px;overflow-x:auto;"><pre style="color:#e6edf3;font-family:\'Fira Code\',monospace;font-size:.82rem;margin:0;white-space:pre-wrap;">php artisan make:controller Api/AuthController</pre></div><p style="color:var(--muted);line-height:1.8;font-size:.95rem;">Here\'s the complete <code style="background:var(--light);padding:2px 8px;border-radius:4px;font-size:.85rem;">AuthController</code>:</p><div style="background:#0d1117;border-radius:10px;padding:20px;margin:16px 0 24px;overflow-x:auto;"><pre style="color:#e6edf3;font-family:\'Fira Code\',monospace;font-size:.82rem;margin:0;white-space:pre-wrap;">&lt;?php\n\nnamespace App\Http\Controllers\Api;\n\nuse App\Http\Controllers\Controller;\nuse App\Models\User;\nuse Illuminate\Http\Request;\nuse Illuminate\Support\Facades\Auth;\nuse Illuminate\Support\Facades\Hash;\nuse Illuminate\Validation\ValidationException;\n\nclass AuthController extends Controller\n{\n    public function register(Request $request)\n    {\n        $request->validate([\n            \'name\' => \'required|string|max:255\',\n            \'email\' => \'required|string|email|max:255|unique:users\',\n            \'password\' => \'required|string|min:8|confirmed\',\n        ]);\n\n        $user = User::create([\n            \'name\' => $request->name,\n            \'email\' => $request->email,\n            \'password\' => Hash::make($request->password),\n        ]);\n\n        $token = $user->createToken(\'auth-token\')->plainTextToken;\n\n        return response()->json([\n            \'user\' => $user,\n            \'token\' => $token,\n            \'message\' => \'Registration successful\'\n        ], 201);\n    }\n\n    public function login(Request $request)\n    {\n        $request->validate([\n            \'email\' => \'required|string|email\',\n            \'password\' => \'required|string\',\n        ]);\n\n        if (!Auth::attempt($request->only(\'email\', \'password\'))) {\n            throw ValidationException::withMessages([\n                \'email\' => [\'The provided credentials are incorrect.\'],\n            ]);\n        }\n\n        $user = User::where(\'email\', $request->email)->firstOrFail();\n        $token = $user->createToken(\'auth-token\')->plainTextToken;\n\n        return response()->json([\n            \'user\' => $user,\n            \'token\' => $token,\n            \'message\' => \'Login successful\'\n        ]);\n    }\n\n    public function logout(Request $request)\n    {\n        $request->user()->currentAccessToken()->delete();\n        return response()->json([\'message\' => \'Logged out successfully\'], 204);\n    }\n\n    public function user(Request $request)\n    {\n        return response()->json([\'user\' => $request->user()]);\n    }\n}</pre></div><h4 style="font-weight:700;color:var(--navy);margin-top:24px;margin-bottom:12px;">Define API Routes</h4><p style="color:var(--muted);line-height:1.8;font-size:.95rem;">Open <code style="background:var(--light);padding:2px 8px;border-radius:4px;font-size:.85rem;">routes/api.php</code>:</p><div style="background:#0d1117;border-radius:10px;padding:20px;margin:16px 0 24px;overflow-x:auto;"><pre style="color:#e6edf3;font-family:\'Fira Code\',monospace;font-size:.82rem;margin:0;white-space:pre-wrap;">&lt;?php\n\nuse App\Http\Controllers\Api\AuthController;\nuse Illuminate\Support\Facades\Route;\n\n// Public routes\nRoute::post(\'/register\', [AuthController::class, \'register\']);\nRoute::post(\'/login\', [AuthController::class, \'login\']);\n\n// Protected routes\nRoute::middleware(\'auth:sanctum\')->group(function () {\n    Route::post(\'/logout\', [AuthController::class, \'logout\']);\n    Route::get(\'/user\', [AuthController::class, \'user\']);\n});</pre></div>'
            ],
            'vue-setup' => [
                'title' => 'Step 3: Setting Up Vue.js Frontend',
                'content' => '<p>Now let\'s set up our Vue.js frontend application using Vite.</p><div style="background:#0d1117;border-radius:10px;padding:20px;margin:16px 0 24px;overflow-x:auto;"><pre style="color:#e6edf3;font-family:\'Fira Code\',monospace;font-size:.88rem;margin:0;white-space:pre-wrap;"># Create a new Vue.js project with Vite\nnpm create vue@latest laravel-vue-spa-frontend\n\n# Select the following options:\n# √ TypeScript? ... No\n# √ JSX Support? ... No\n# √ Vue Router? ... Yes\n# √ Pinia? ... Yes\n# √ Vitest? ... No\n# √ ESLint? ... Yes\n\n# Navigate to the project\ncd laravel-vue-spa-frontend\n\n# Install dependencies\nnpm install\n\n# Install Axios for API calls\nnpm install axios</pre></div><h4 style="font-weight:700;color:var(--navy);margin-top:24px;margin-bottom:12px;">Project Structure</h4><p style="color:var(--muted);line-height:1.8;font-size:.95rem;">Your Vue.js project structure should look like this:</p><div style="background:var(--off-white);border:1px solid var(--border);border-radius:8px;padding:16px 20px;margin:16px 0 24px;"><pre style="color:var(--navy);font-family:\'Courier New\',monospace;font-size:.82rem;margin:0;line-height:1.8;">laravel-vue-spa-frontend/\n├── src/\n│   ├── assets/\n│   ├── components/\n│   │   ├── HelloWorld.vue\n│   │   └── ...\n│   ├── router/\n│   │   └── index.js\n│   ├── stores/\n│   │   └── auth.js\n│   ├── views/\n│   │   ├── HomeView.vue\n│   │   ├── LoginView.vue\n│   │   ├── RegisterView.vue\n│   │   └── DashboardView.vue\n│   ├── App.vue\n│   └── main.js\n├── .env\n├── package.json\n└── vite.config.js</pre></div>'
            ],
            'axios' => [
                'title' => 'Step 4: API Integration with Axios',
                'content' => '<p>Configure Axios to communicate with our Laravel API.</p><h4 style="font-weight:700;color:var(--navy);margin-top:24px;margin-bottom:12px;">Create Axios Instance</h4><p style="color:var(--muted);line-height:1.8;font-size:.95rem;">Create <code style="background:var(--light);padding:2px 8px;border-radius:4px;font-size:.85rem;">src/axios.js</code>:</p><div style="background:#0d1117;border-radius:10px;padding:20px;margin:16px 0 24px;overflow-x:auto;"><pre style="color:#e6edf3;font-family:\'Fira Code\',monospace;font-size:.82rem;margin:0;white-space:pre-wrap;">import axios from \'axios\'\n\nconst api = axios.create({\n    baseURL: import.meta.env.VITE_API_URL || \'http://localhost:8000/api\',\n    headers: {\n        \'Content-Type\': \'application/json\',\n        \'Accept\': \'application/json\',\n        \'X-Requested-With\': \'XMLHttpRequest\'\n    }\n})\n\n// Add token to every request\napi.interceptors.request.use(\n    (config) => {\n        const token = localStorage.getItem(\'token\')\n        if (token) {\n            config.headers.Authorization = `Bearer ${token}`\n        }\n        return config\n    },\n    (error) => Promise.reject(error)\n)\n\n// Handle 401 responses\nexport const setupInterceptors = (router) => {\n    api.interceptors.response.use(\n        (response) => response,\n        (error) => {\n            if (error.response?.status === 401) {\n                localStorage.removeItem(\'token\')\n                localStorage.removeItem(\'user\')\n                router.push(\'/login\')\n            }\n            return Promise.reject(error)\n        }\n    )\n}\n\nexport default api</pre></div><h4 style="font-weight:700;color:var(--navy);margin-top:24px;margin-bottom:12px;">Environment Variables</h4><p style="color:var(--muted);line-height:1.8;font-size:.95rem;">Create <code style="background:var(--light);padding:2px 8px;border-radius:4px;font-size:.85rem;">.env</code> file in Vue.js project root:</p><div style="background:#0d1117;border-radius:10px;padding:20px;margin:16px 0 24px;overflow-x:auto;"><pre style="color:#e6edf3;font-family:\'Fira Code\',monospace;font-size:.82rem;margin:0;white-space:pre-wrap;">VITE_API_URL=http://localhost:8000/api</pre></div>'
            ],
            'auth' => [
                'title' => 'Step 5: Authentication & Token Management',
                'content' => '<p>Implement authentication flow with token management.</p><h4 style="font-weight:700;color:var(--navy);margin-top:24px;margin-bottom:12px;">Authentication Store (Pinia)</h4><p style="color:var(--muted);line-height:1.8;font-size:.95rem;">Create <code style="background:var(--light);padding:2px 8px;border-radius:4px;font-size:.85rem;">src/stores/auth.js</code>:</p><div style="background:#0d1117;border-radius:10px;padding:20px;margin:16px 0 24px;overflow-x:auto;"><pre style="color:#e6edf3;font-family:\'Fira Code\',monospace;font-size:.82rem;margin:0;white-space:pre-wrap;">import { defineStore } from \'pinia\'\nimport { ref, computed } from \'vue\'\nimport api from \'../axios\'\n\nexport const useAuthStore = defineStore(\'auth\', () => {\n    const user = ref(null)\n    const token = ref(localStorage.getItem(\'token\') || null)\n    const isLoading = ref(false)\n    const error = ref(null)\n\n    const isAuthenticated = computed(() => !!token.value && !!user.value)\n\n    const register = async (userData) => {\n        isLoading.value = true\n        error.value = null\n        try {\n            const response = await api.post(\'/register\', userData)\n            const { user: userData, token: tokenData } = response.data\n            token.value = tokenData\n            user.value = userData\n            localStorage.setItem(\'token\', tokenData)\n            localStorage.setItem(\'user\', JSON.stringify(userData))\n            return response.data\n        } catch (err) {\n            error.value = err.response?.data?.errors || err.message\n            throw err\n        } finally {\n            isLoading.value = false\n        }\n    }\n\n    const login = async (credentials) => {\n        isLoading.value = true\n        error.value = null\n        try {\n            const response = await api.post(\'/login\', credentials)\n            const { user: userData, token: tokenData } = response.data\n            token.value = tokenData\n            user.value = userData\n            localStorage.setItem(\'token\', tokenData)\n            localStorage.setItem(\'user\', JSON.stringify(userData))\n            return response.data\n        } catch (err) {\n            error.value = err.response?.data?.errors || err.message\n            throw err\n        } finally {\n            isLoading.value = false\n        }\n    }\n\n    const logout = async () => {\n        isLoading.value = true\n        try {\n            await api.post(\'/logout\')\n        } catch (err) {\n            console.error(\'Logout error:\', err)\n        } finally {\n            token.value = null\n            user.value = null\n            localStorage.removeItem(\'token\')\n            localStorage.removeItem(\'user\')\n            isLoading.value = false\n        }\n    }\n\n    const fetchUser = async () => {\n        try {\n            const response = await api.get(\'/user\')\n            user.value = response.data.user\n            localStorage.setItem(\'user\', JSON.stringify(user.value))\n        } catch (err) {\n            token.value = null\n            user.value = null\n            localStorage.removeItem(\'token\')\n            localStorage.removeItem(\'user\')\n        }\n    }\n\n    // Load user from localStorage on init\n    const loadFromStorage = () => {\n        const storedUser = localStorage.getItem(\'user\')\n        if (storedUser) {\n            user.value = JSON.parse(storedUser)\n        }\n    }\n\n    return {\n        user,\n        token,\n        isLoading,\n        error,\n        isAuthenticated,\n        register,\n        login,\n        logout,\n        fetchUser,\n        loadFromStorage\n    }\n})</pre></div>'
            ],
            'state' => [
                'title' => 'Step 6: State Management with Pinia',
                'content' => '<p>Pinia is the official state management library for Vue.js. Let\'s set it up in our application.</p><h4 style="font-weight:700;color:var(--navy);margin-top:24px;margin-bottom:12px;">Main.js Setup</h4><p style="color:var(--muted);line-height:1.8;font-size:.95rem;">Update <code style="background:var(--light);padding:2px 8px;border-radius:4px;font-size:.85rem;">src/main.js</code>:</p><div style="background:#0d1117;border-radius:10px;padding:20px;margin:16px 0 24px;overflow-x:auto;"><pre style="color:#e6edf3;font-family:\'Fira Code\',monospace;font-size:.82rem;margin:0;white-space:pre-wrap;">import { createApp } from \'vue\'\nimport { createPinia } from \'pinia\'\nimport App from \'./App.vue\'\nimport router from \'./router\'\nimport { setupInterceptors } from \'./axios\'\nimport { useAuthStore } from \'./stores/auth\'\nimport \'./style.css\'\n\nconst app = createApp(App)\nconst pinia = createPinia()\n\napp.use(pinia)\napp.use(router)\n\n// Setup interceptors with router\nsetupInterceptors(router)\n\n// Load auth state from localStorage\nconst authStore = useAuthStore()\nauthStore.loadFromStorage()\n\napp.mount(\'#app\')</pre></div><h4 style="font-weight:700;color:var(--navy);margin-top:24px;margin-bottom:12px;">Login View</h4><p style="color:var(--muted);line-height:1.8;font-size:.95rem;">Create <code style="background:var(--light);padding:2px 8px;border-radius:4px;font-size:.85rem;">src/views/LoginView.vue</code>:</p><div style="background:#0d1117;border-radius:10px;padding:20px;margin:16px 0 24px;overflow-x:auto;"><pre style="color:#e6edf3;font-family:\'Fira Code\',monospace;font-size:.82rem;margin:0;white-space:pre-wrap;">&lt;template&gt;\n  &lt;div class="login-container"&gt;\n    &lt;h2&gt;Login&lt;/h2&gt;\n    &lt;form @submit.prevent="handleLogin"&gt;\n      &lt;div class="form-group"&gt;\n        &lt;label&gt;Email&lt;/label&gt;\n        &lt;input type="email" v-model="form.email" required /&gt;\n      &lt;/div&gt;\n      &lt;div class="form-group"&gt;\n        &lt;label&gt;Password&lt;/label&gt;\n        &lt;input type="password" v-model="form.password" required /&gt;\n      &lt;/div&gt;\n      &lt;div v-if="authStore.error" class="error"&gt;{{ authStore.error }}&lt;/div&gt;\n      &lt;button type="submit" :disabled="authStore.isLoading"&gt;\n        {{ authStore.isLoading ? \'Logging in...\' : \'Login\' }}\n      &lt;/button&gt;\n    &lt;/form&gt;\n    &lt;p&gt;Don\'t have an account? &lt;router-link to="/register"&gt;Register&lt;/router-link&gt;&lt;/p&gt;\n  &lt;/div&gt;\n&lt;/template&gt;\n\n&lt;script setup&gt;\nimport { ref } from \'vue\'\nimport { useRouter } from \'vue-router\'\nimport { useAuthStore } from \'@/stores/auth\'\n\nconst router = useRouter()\nconst authStore = useAuthStore()\n\nconst form = ref({\n    email: \'\',\n    password: \'\'\n})\n\nconst handleLogin = async () =&gt; {\n    try {\n        await authStore.login(form.value)\n        router.push(\'/\')\n    } catch (error) {\n        // Error handled in store\n    }\n}\n&lt;/script&gt;</pre></div>'
            ],
            'routes' => [
                'title' => 'Step 7: Vue Router & Protected Routes',
                'content' => '<p>Set up Vue Router with route guards for protected routes.</p><h4 style="font-weight:700;color:var(--navy);margin-top:24px;margin-bottom:12px;">Router Configuration</h4><p style="color:var(--muted);line-height:1.8;font-size:.95rem;">Update <code style="background:var(--light);padding:2px 8px;border-radius:4px;font-size:.85rem;">src/router/index.js</code>:</p><div style="background:#0d1117;border-radius:10px;padding:20px;margin:16px 0 24px;overflow-x:auto;"><pre style="color:#e6edf3;font-family:\'Fira Code\',monospace;font-size:.82rem;margin:0;white-space:pre-wrap;">import { createRouter, createWebHistory } from \'vue-router\'\nimport HomeView from \'../views/HomeView.vue\'\nimport LoginView from \'../views/LoginView.vue\'\nimport RegisterView from \'../views/RegisterView.vue\'\nimport DashboardView from \'../views/DashboardView.vue\'\nimport { useAuthStore } from \'@/stores/auth\'\n\nconst routes = [\n    { path: \'/\', name: \'home\', component: HomeView },\n    { path: \'/login\', name: \'login\', component: LoginView, meta: { guest: true } },\n    { path: \'/register\', name: \'register\', component: RegisterView, meta: { guest: true } },\n    { path: \'/dashboard\', name: \'dashboard\', component: DashboardView, meta: { requiresAuth: true } },\n]\n\nconst router = createRouter({\n    history: createWebHistory(import.meta.env.BASE_URL),\n    routes\n})\n\n// Navigation guard for authentication\nrouter.beforeEach((to, from, next) => {\n    const authStore = useAuthStore()\n    const isAuthenticated = authStore.isAuthenticated\n\n    if (to.meta.requiresAuth && !isAuthenticated) {\n        next(\'/login\')\n    } else if (to.meta.guest && isAuthenticated) {\n        next(\'/\')\n    } else {\n        next()\n    }\n})\n\nexport default router</pre></div>'
            ],
            'cors' => [
                'title' => 'Step 8: Handling CORS',
                'content' => '<p>Configure CORS in Laravel to allow requests from your Vue.js frontend.</p><h4 style="font-weight:700;color:var(--navy);margin-top:24px;margin-bottom:12px;">Update CORS Configuration</h4><p style="color:var(--muted);line-height:1.8;font-size:.95rem;">Open <code style="background:var(--light);padding:2px 8px;border-radius:4px;font-size:.85rem;">config/cors.php</code>:</p><div style="background:#0d1117;border-radius:10px;padding:20px;margin:16px 0 24px;overflow-x:auto;"><pre style="color:#e6edf3;font-family:\'Fira Code\',monospace;font-size:.82rem;margin:0;white-space:pre-wrap;">return [\n    \'paths\' => [\'api/*\', \'sanctum/csrf-cookie\'],\n    \'allowed_methods\' => [\'*\'],\n    \'allowed_origins\' => [\'http://localhost:5173\', \'http://localhost:3000\'],\n    \'allowed_origins_patterns\' => [],\n    \'allowed_headers\' => [\'*\'],\n    \'exposed_headers\' => [],\n    \'max_age\' => 0,\n    \'supports_credentials\' => true,\n];</pre></div><h4 style="font-weight:700;color:var(--navy);margin-top:24px;margin-bottom:12px;">Update .env</h4><div style="background:#0d1117;border-radius:10px;padding:20px;margin:16px 0 24px;overflow-x:auto;"><pre style="color:#e6edf3;font-family:\'Fira Code\',monospace;font-size:.82rem;margin:0;white-space:pre-wrap;">FRONTEND_URL=http://localhost:5173</pre></div>'
            ],
            'deployment' => [
                'title' => 'Step 9: Deployment & Optimization',
                'content' => '<p>Here\'s how to deploy your Laravel + Vue.js SPA to production.</p><h4 style="font-weight:700;color:var(--navy);margin-top:24px;margin-bottom:12px;">Build Vue.js Frontend</h4><div style="background:#0d1117;border-radius:10px;padding:20px;margin:16px 0 24px;overflow-x:auto;"><pre style="color:#e6edf3;font-family:\'Fira Code\',monospace;font-size:.88rem;margin:0;white-space:pre-wrap;"># Build the Vue.js app\nnpm run build\n\n# The build will be in the dist/ folder</pre></div><h4 style="font-weight:700;color:var(--navy);margin-top:24px;margin-bottom:12px;">Serve Vue.js Build from Laravel</h4><p style="color:var(--muted);line-height:1.8;font-size:.95rem;">Copy the <code style="background:var(--light);padding:2px 8px;border-radius:4px;font-size:.85rem;">dist</code> folder contents to <code style="background:var(--light);padding:2px 8px;border-radius:4px;font-size:.85rem;">public</code> folder of Laravel.</p><div style="background:#0d1117;border-radius:10px;padding:20px;margin:16px 0 24px;overflow-x:auto;"><pre style="color:#e6edf3;font-family:\'Fira Code\',monospace;font-size:.88rem;margin:0;white-space:pre-wrap;"># Copy Vue.js build to Laravel public folder\ncp -r dist/* ../laravel-vue-spa-backend/public/</pre></div><h4 style="font-weight:700;color:var(--navy);margin-top:24px;margin-bottom:12px;">Laravel Routes for SPA</h4><p style="color:var(--muted);line-height:1.8;font-size:.95rem;">Update <code style="background:var(--light);padding:2px 8px;border-radius:4px;font-size:.85rem;">routes/web.php</code> to serve the SPA:</p><div style="background:#0d1117;border-radius:10px;padding:20px;margin:16px 0 24px;overflow-x:auto;"><pre style="color:#e6edf3;font-family:\'Fira Code\',monospace;font-size:.82rem;margin:0;white-space:pre-wrap;">&lt;?php\n\nuse Illuminate\Support\Facades\Route;\n\n// Serve the SPA for all non-API routes\nRoute::get(\'/{any}\', function () {\n    return view(\'app\');\n})->where(\'any\', \'.*\');</pre></div><p style="color:var(--muted);line-height:1.8;font-size:.95rem;">Create <code style="background:var(--light);padding:2px 8px;border-radius:4px;font-size:.85rem;">resources/views/app.blade.php</code>:</p><div style="background:#0d1117;border-radius:10px;padding:20px;margin:16px 0 24px;overflow-x:auto;"><pre style="color:#e6edf3;font-family:\'Fira Code\',monospace;font-size:.82rem;margin:0;white-space:pre-wrap;">&lt;!DOCTYPE html&gt;\n&lt;html lang="en"&gt;\n&lt;head&gt;\n    &lt;meta charset="UTF-8" /&gt;\n    &lt;meta name="viewport" content="width=device-width, initial-scale=1.0" /&gt;\n    &lt;title&gt;Laravel + Vue.js SPA&lt;/title&gt;\n    @vite([])\n&lt;/head&gt;\n&lt;body&gt;\n    &lt;div id="app"&gt;&lt;/div&gt;\n    @vite(\'resources/js/app.js\')\n&lt;/body&gt;\n&lt;/html&gt;</pre></div>'
            ],
            'conclusion' => [
                'title' => '🎉 Conclusion',
                'content' => '<p>Congratulations! You\'ve successfully built a complete Single Page Application with Laravel API and Vue.js frontend. Here\'s what you\'ve accomplished:</p><ul style="color:var(--muted);line-height:2;font-size:1rem;padding-left:24px;margin-bottom:32px;"><li>✅ Set up a Laravel REST API with Sanctum authentication</li><li>✅ Built a Vue.js SPA with Composition API</li><li>✅ Implemented authentication with token-based login</li><li>✅ Managed application state with Pinia</li><li>✅ Protected routes with Vue Router guards</li><li>✅ Handled CORS configuration</li><li>✅ Deployed the application to production</li></ul><div style="background:var(--blue-pale);border-left:4px solid var(--blue);border-radius:8px;padding:20px 24px;margin:32px 0;"><h4 style="font-weight:700;color:var(--navy);margin-bottom:8px;">📚 Next Steps</h4><ul style="list-style:none;display:flex;flex-direction:column;gap:6px;color:var(--muted);font-size:.95rem;"><li>🚀 Add real-time features with Laravel WebSockets</li><li>📊 Implement pagination and filtering for large datasets</li><li>🧪 Write tests for both backend and frontend</li><li>🔒 Add role-based access control (RBAC)</li><li>📱 Create a mobile app using the same API</li></ul></div>'
            ]
        ],
        'related_posts' => [
            [
                'slug' => 'laravel-12-rest-api-sanctum',
                'title' => 'Building a REST API with Laravel 12 + Sanctum',
                'icon' => '🚀',
                'excerpt' => 'Complete guide to building a production-ready REST API.'
            ],
            [
                'slug' => 'vue-3-composition-api-tips',
                'title' => '10 Vue 3 Composition API Tips',
                'icon' => '💚',
                'excerpt' => 'Practical patterns to level up your Vue.js code.'
            ],
            [
                'slug' => 'laravel-performance-optimization',
                'title' => 'Laravel Performance Optimization',
                'icon' => '⚡',
                'excerpt' => 'Speed up your Laravel app in 7 easy steps.'
            ]
        ]
    ],
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
Route::get('/my-work/{slug}', function ($slug) use ($projects) {
    if (!isset($projects[$slug])) {
        abort(404);
    }
    return view('my-work-details', ['project' => $projects[$slug], 'projects' => $projects]);
})->name('project.detail');


// Blog routes
Route::get('/blogs', function () use ($blogs) {
    return view('blogs', ['blogs' => $blogs]);
})->name('blogs');

// Dynamic blog detail route
Route::get('/blogs/{slug}', function ($slug) use ($blogs) {
    if (!isset($blogs[$slug])) {
        abort(404);
    }
    return view('blog-details', ['blog' => $blogs[$slug], 'blogs' => $blogs]);
})->name('blog.detail');


Route::get('/contact', function () {
    return view('contact');
});
