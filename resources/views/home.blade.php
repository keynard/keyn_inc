<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keyn Inc.</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        * {
            font-family: 'Inter', sans-serif;
        }
        
        body {
            background-color: #f9fafb;
        }
        
        .nav-shadow {
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
        }
        
        .hero-card {
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
            border-bottom-left-radius: 50px;
            border-bottom-right-radius: 50px;
        }
        
        .city-image {
            border-bottom-right-radius: 80px;
            height: 100vh;
            object-fit: cover;
        }
        
        .stat-number {
            font-size: 3.5rem;
            font-weight: 800;
            line-height: 1;
        }
        
        .team-card {
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
            transition: transform 0.3s ease;
        }
        
        .team-card:hover {
            transform: translateY(-5px);
        }
        
        .testimonial-card {
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
        }
        
        .footer-pattern {
            background-image: 
                repeating-linear-gradient(45deg, transparent, transparent 10px, rgba(255,255,255,0.05) 10px, rgba(255,255,255,0.05) 20px);
        }
        
        .dropdown:hover .dropdown-menu {
            display: block;
        }
        
        .navbar {
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1050;
            background-color: white;
        }
        
        .navbar-brand-logo {
            width: 40px;
            height: 40px;
            background-color: #60a5fa;
            border-radius: 0.5rem;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .hero-section {
            padding-top: 96px;
            padding-bottom: 64px;
        }
        
        .hero-left {
            background-color: #f3f4f6;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .btn-primary-custom {
            background-color: #60a5fa;
            border: none;
            color: white;
            padding: 12px 32px;
            border-radius: 0.5rem;
            font-weight: 600;
            text-transform: uppercase;
        }
        
        .btn-primary-custom:hover {
            background-color: #3b82f6;
        }
        
        .btn-outline-custom {
            background-color: white;
            border: 2px solid #d1d5db;
            color: #374151;
            padding: 12px 32px;
            border-radius: 0.5rem;
            font-weight: 600;
            text-transform: uppercase;
        }
        
        .btn-outline-custom:hover {
            border-color: #9ca3af;
        }
        
        .text-blue-primary {
            color: #60a5fa;
        }
        
        .text-blue-500 {
            color: #3b82f6;
        }
        
        .nav-link {
            color: #374151;
        }
        
        .nav-link:hover {
            color: #3b82f6;
        }
        
        .rounded-xl {
            border-radius: 0.75rem;
        }
        
        .rounded-2xl {
            border-radius: 1rem;
        }
        
        .rounded-3xl {
            border-radius: 1.5rem;
        }
        
        .scrollbar-hide {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
        
        .scrollbar-hide::-webkit-scrollbar {
            display: none;
        }
        
        .team-carousel {
            overflow-x: auto;
            display: flex;
            gap: 2rem;
            padding-bottom: 2rem;
        }
        
        .team-card-wrapper {
            min-width: 250px;
        }
        
        .social-icon {
            width: 32px;
            height: 32px;
            background-color: #374151;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-decoration: none;
        }
        
        .social-icon:hover {
            background-color: #3b82f6;
            color: white;
        }
        
        .carousel-dots {
            display: flex;
            justify-content: center;
            gap: 0.5rem;
            margin-top: 1.5rem;
        }
        
        .carousel-dot {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background-color: #d1d5db;
        }
        
        .carousel-dot.active {
            background-color: #3b82f6;
        }
        
        .top-bar {
            padding: 12px 0;
            color: #9ca3af;
            font-size: 0.875rem;
        }
    </style>
</head>
<body>

    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg nav-shadow">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="#">
                <div class="navbar-brand-logo me-2">
                    <span class="text-white fw-bold fs-5">K</span>
                </div>
                <span class="text-dark fw-semibold">Keyn Inc.</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto align-items-center">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                            Products
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">SnapServe</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                            Services
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Barcode Generator</a></li>
                            <li><a class="dropdown-item" href="#">QR Code Generator</a></li>
                            <li><a class="dropdown-item" href="#">Job Search</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#blog">Blog</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">
                            <button class="btn btn-primary-custom">Contact Us</button>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="row g-0">
            <!-- Left Side -->
            <div class="col-md-5 hero-left">
                <div class="px-5 py-5">
                    <div class="bg-white hero-card p-5 rounded-top-3">
                        <h1 class="display-5 fw-bold text-dark mb-3">Keyn Inc.</h1>
                        <h2 class="display-6 fw-bold text-blue-primary mb-4">Shaping Tomorrow's Digital Solutions Today</h2>
                        <p class="text-secondary mb-4 lh-lg">
                            Keyn Inc. is a technology company focused on creating cutting-edge solutions that drive progress and transform ideas into reality. We provide scalable, efficient solutions to help businesses stay ahead in a rapidly evolving digital landscape.
                        </p>
                        <div class="d-flex flex-column flex-sm-row gap-3">
                            <button class="btn btn-primary-custom">CONTACT US</button>
                            <button class="btn btn-outline-custom">READ MORE</button>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Right Side -->
            <div class="col-md-7 d-none d-md-block">
                <img src="https://images.unsplash.com/photo-1449824913935-59a10b8d2000?w=1200" alt="City Street" class="w-100 city-image">
            </div>
        </div>
    </section>

    <!-- Statistics Section -->
    <section class="py-5 bg-white">
        <div class="container">
            <div class="row text-center g-4">
                <div class="col-md-3">
                    <div class="stat-number text-blue-500 mb-3">100+</div>
                    <p class="text-secondary">Skilled software experts ready to Innovate</p>
                </div>
                <div class="col-md-3">
                    <div class="stat-number text-blue-500 mb-3">100+</div>
                    <p class="text-secondary">Successful projects delivered across multiple industries</p>
                </div>
                <div class="col-md-3">
                    <div class="stat-number text-blue-500 mb-3">100+</div>
                    <p class="text-secondary">Trusted clients gaining value from proven expertise</p>
                </div>
                <div class="col-md-3">
                    <div class="stat-number text-blue-500 mb-3">under 5%</div>
                    <p class="text-secondary">Developer turnover rate consistently upheld</p>
                </div>
            </div>
        </div>
    </section>

    <!-- SnapServe Product Section 1 -->
    <section class="py-5 bg-white">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-md-6">
                    <p class="text-secondary small mb-2">Discovering "SnapServe"</p>
                    <h2 class="display-6 fw-bold text-dark mb-4">Taking Your Restaurant Online in Minutes</h2>
                    <p class="text-secondary mb-3 lh-lg">
                        Eliminate the hassle of reprinting menus, reduce order errors, and speed up kitchen operations. With SnapServe QR code menu, easily integrate a seamless online ordering system into your restaurant, offering a faster and more enjoyable dining experience for your customers.
                    </p>
                    <p class="text-secondary mb-4 lh-lg">
                        Streamline dining with SnapServe – reduce waste, improve accuracy, and grow your business.
                    </p>
                    <button class="btn btn-primary-custom">Request a Demo</button>
                </div>
                <div class="col-md-6">
                    <img src="https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?w=800" alt="SnapServe App" class="rounded-2xl shadow-lg w-100">
                </div>
            </div>
        </div>
    </section>

    <!-- SnapServe Subscription Section -->
    <section class="py-5" style="background-color: #f9fafb;">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-md-6">
                    <img src="https://images.unsplash.com/photo-1562577309-4932fdd64cd1?w=800" alt="QR Code Scanning" class="rounded-2xl shadow-lg w-100">
                </div>
                <div class="col-md-6">
                    <p class="text-secondary mb-3 lh-lg fw-semibold">
                        SnapServe offers a powerful subscription service with a range of options tailored to meet your needs!
                    </p>
                    <p class="text-secondary mb-3 lh-lg">
                        Our basic subscription includes one menu and ordering service, allowing you to access essential features at an affordable price. You can utilize the basic plan without any obligation to upgrade, and your QR code will remain active at all times.
                    </p>
                    <p class="text-secondary mb-4 lh-lg">
                        With our service, you can receive unlimited dine-in, delivery, and takeaway orders under this plan.
                    </p>
                    <a href="#" class="text-blue-500 fw-semibold text-decoration-none d-inline-flex align-items-center">
                        <span>More about our products</span>
                        <svg class="ms-2" width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- About Keyn Inc.Section -->
    <section id="about" class="py-5 bg-white">
        <div class="container">
            <h2 class="display-6 fw-bold text-blue-500 text-center mb-5">We're CubeTech</h2>
            <div class="row g-5">
                <div class="col-md-6">
                    <div class="row g-3">
                        <div class="col-6">
                            <div class="bg-white p-2 border border-2 rounded">
                                <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?w=400" alt="Team" class="w-100 rounded">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="bg-white p-2 border border-2 rounded">
                                <img src="https://images.unsplash.com/photo-1531482615713-2afd69097998?w=400" alt="Team" class="w-100 rounded">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="bg-white p-2 border border-2 rounded">
                                <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?w=400" alt="Team" class="w-100 rounded">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="bg-white p-2 border border-2 rounded">
                                <img src="https://images.unsplash.com/photo-1531482615713-2afd69097998?w=400" alt="Team" class="w-100 rounded">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <p class="text-dark mb-3 lh-lg">
                        We're a passionate and innovative team based in Cebu, Philippines, dedicated to delivering exceptional products that our customers love and rely on. At CubeTech, we pride ourselves on our collaborative culture, fostering an environment where creativity thrives and every voice matters.
                    </p>
                    <p class="text-dark mb-3 lh-lg">
                        Together, we strive for excellence in everything we do, ensuring that we exceed expectations and make a positive impact in our community.
                    </p>
                    <p class="text-dark lh-lg">
                        Keyn Inc.is all about crafting software solutions that meet client needs and drive growth. We're focused on building secure, user-friendly tools that add value—no hidden costs, just straightforward solutions. By enhancing productivity, we aim to be a reliable partner our clients can count on for the long haul.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Mission & Vision Section -->
    <section class="py-5" style="background-color: #f9fafb;">
        <div class="container">
            <div class="row g-5">
                <div class="col-md-6">
                    <h3 class="display-6 fw-bold text-blue-500 mb-3">Our Mission</h3>
                    <p class="text-dark lh-lg">
                        Empower businesses every day by providing innovative software solutions that drive growth and unlock their full potential.
                    </p>
                </div>
                <div class="col-md-6">
                    <h3 class="display-6 fw-bold text-blue-500 mb-3">Our Vision</h3>
                    <p class="text-dark lh-lg">
                        Keyn Inc.delivers innovative, secure, and user-friendly software tailored to client needs. We focus on transparency, efficiency, and long-term partnerships, empowering growth with reliable solutions that boost productivity.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Carousel Section -->
    <section class="py-5 bg-white">
        <div class="container">
            <div class="team-carousel scrollbar-hide">
                <div class="team-card bg-white rounded-xl p-4 text-center team-card-wrapper">
                    <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=200" alt="Sadik Rahman" class="rounded-circle mx-auto mb-3" width="128" height="128" style="object-fit: cover;">
                    <h4 class="fw-bold text-dark mb-1">Sadik Rahman</h4>
                    <p class="text-secondary small">Director</p>
                </div>
                <div class="team-card bg-white rounded-xl p-4 text-center team-card-wrapper">
                    <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=200" alt="Cherry White" class="rounded-circle mx-auto mb-3" width="128" height="128" style="object-fit: cover;">
                    <h4 class="fw-bold text-dark mb-1">Cherry White</h4>
                    <p class="text-secondary small">Sales and Marketing</p>
                </div>
                <div class="team-card bg-white rounded-xl p-4 text-center team-card-wrapper">
                    <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?w=200" alt="Angeline Yap" class="rounded-circle mx-auto mb-3" width="128" height="128" style="object-fit: cover;">
                    <h4 class="fw-bold text-dark mb-1">Angeline Yap</h4>
                    <p class="text-secondary small">Finance Manager</p>
                </div>
                <div class="team-card bg-white rounded-xl p-4 text-center team-card-wrapper">
                    <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=200" alt="Denver Son" class="rounded-circle mx-auto mb-3" width="128" height="128" style="object-fit: cover;">
                    <h4 class="fw-bold text-dark mb-1">Denver Son</h4>
                    <p class="text-secondary small">Full-Stack Developer</p>
                </div>
            </div>
            <div class="carousel-dots">
                <div class="carousel-dot active"></div>
                <div class="carousel-dot"></div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="py-5" style="background-color: #f9fafb;">
        <div class="container">
            <h2 class="display-6 fw-bold text-blue-500 text-center mb-3">Experience it firsthand and discover true value</h2>
            <p class="text-secondary text-center mb-5 mx-auto" style="max-width: 800px;">
                See how our solution delivers real-world benefits, designed to meet your unique needs, enhance efficiency, and exceed your expectations every step of the way
            </p>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="testimonial-card bg-white rounded-xl p-5 text-center">
                        <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?w=200" alt="Anne Curtis" class="rounded-circle mx-auto mb-3" width="96" height="96" style="object-fit: cover;">
                        <h4 class="fw-bold text-dark mb-1">Anne Curtis</h4>
                        <p class="text-secondary small mb-3">CEO @ NASHO WASHO LTD</p>
                        <p class="text-secondary fst-italic">"Don't walk behind me; I may not lead. Don't walk in front of me; I may not follow. Just walk beside me and be my friend"</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="testimonial-card bg-white rounded-xl p-5 text-center">
                        <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?w=200" alt="Kim Sam Son" class="rounded-circle mx-auto mb-3" width="96" height="96" style="object-fit: cover;">
                        <h4 class="fw-bold text-dark mb-1">Kim Sam Son</h4>
                        <p class="text-secondary small mb-3">MARKETING @ WOONG</p>
                        <p class="text-secondary fst-italic">"The pessimist complain about the wind; the optimist expects to change it; the realist adjusts the sails."</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="testimonial-card bg-white rounded-xl p-5 text-center">
                        <img src="https://images.unsplash.com/photo-1519345182560-3f2917c472ef?w=200" alt="Kim Soo-Hyun" class="rounded-circle mx-auto mb-3" width="96" height="96" style="object-fit: cover;">
                        <h4 class="fw-bold text-dark mb-1">Kim Soo-Hyun</h4>
                        <p class="text-secondary small mb-3">CEO @ WOONG WASHIOTO INC</p>
                        <p class="text-secondary fst-italic">"길이 닿는 곳으로 가지 말고, 길이 없는 곳으로 가서 흔적을 남겨라"</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Form Section -->
    <section id="contact" class="py-5 bg-white">
        <div class="container">
            <h2 class="display-6 fw-bold text-dark text-center mb-3">We are here for you</h2>
            <p class="text-secondary text-center mb-5">For further questions, including partnership opportunities</p>
            <div class="mx-auto" style="max-width: 800px;">
                <form method="POST" action="#">
                    <div class="row g-4 mb-4">
                        <div class="col-md-6">
                            <input type="text" name="name" placeholder="Full Name" class="form-control py-3">
                        </div>
                        <div class="col-md-6">
                            <input type="email" name="email" placeholder="Email" class="form-control py-3">
                        </div>
                    </div>
                    <div class="mb-4">
                        <textarea name="message" placeholder="Describe your problem in at least 250 characters" rows="6" class="form-control py-3"></textarea>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary-custom px-5">SEND MESSAGE</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer-pattern text-light py-5" style="background-color: #1f2937;">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-3">
                    <p class="mb-3">Keyn Inc. © 2026</p>
                    <div class="d-flex gap-3 mb-4">
                        <a href="#" class="social-icon">f</a>
                        <a href="#" class="social-icon">in</a>
                        <a href="#" class="social-icon">📷</a>
                    </div>
                    <div class="input-group">
                        <input type="email" placeholder="Email" class="form-control" style="background-color: #374151; border: none; color: white;">
                        <button class="btn btn-primary-custom">SUBSCRIBE</button>
                    </div>
                </div>
                <div class="col-md-3">
                    <h4 class="fw-semibold text-white mb-3">Company</h4>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#about" class="text-light text-decoration-none">About Us</a></li>
                        
                        <li class="mb-2"><a href="#" class="text-light text-decoration-none">Privacy Policy</a></li>
                        <li class="mb-2"><a href="#" class="text-light text-decoration-none">Terms and Conditions</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h4 class="fw-semibold text-white mb-3">Products</h4>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#" class="text-light text-decoration-none">SnapServe</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h4 class="fw-semibold text-white mb-3">Services</h4>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#" class="text-light text-decoration-none">Barcode Generator</a></li>
                        <li class="mb-2"><a href="#" class="text-light text-decoration-none">QR Code Generator</a></li>
                        <li class="mb-2"><a href="#" class="text-light text-decoration-none">Job Search</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>