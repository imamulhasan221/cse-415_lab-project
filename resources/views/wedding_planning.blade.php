<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Elegant Weddings - Your Perfect Day Starts Here</title>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Montserrat:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        :root {
            --primary: #d4af8f;
            --secondary: #7a6a5f;
            --accent: #e8c8b0;
            --light: #f9f5f2;
            --dark: #333333;
            --white: #ffffff;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Montserrat', sans-serif;
            color: var(--dark);
            line-height: 1.6;
            background-color: var(--light);
        }
        
        h1, h2, h3, h4 {
            font-family: 'Playfair Display', serif;
            font-weight: 700;
            color: var(--secondary);
        }
        
        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px;
        }
        
        /* Navigation Styles */
        .navbar {
            background-color: var(--white);
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
        }
        
        .nav-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem 2rem;
        }
        
        .logo {
            display: flex;
            align-items: center;
            text-decoration: none;
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--secondary);
        }
        
        .logo-icon {
            margin-right: 0.5rem;
            font-size: 1.8rem;
        }
        
        .logo-text span {
            color: var(--primary);
        }
        
        .mobile-menu-toggle {
            display: none;
            background: none;
            border: none;
            font-size: 1.5rem;
            cursor: pointer;
            color: var(--secondary);
        }
        
        .nav-menu {
            display: flex;
            align-items: center;
        }
        
        .nav-links {
            display: flex;
            margin-right: 2rem;
        }
        
        .nav-link {
            padding: 0.5rem 1rem;
            text-decoration: none;
            color: var(--secondary);
            font-weight: 600;
            transition: color 0.3s ease;
            position: relative;
        }
        
        .nav-link:hover, .nav-link.active {
            color: var(--primary);
        }
        
        .nav-link.active:after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 1rem;
            width: calc(100% - 2rem);
            height: 2px;
            background: var(--primary);
        }
        
        .has-dropdown {
            position: relative;
        }
        
        .dropdown-menu {
            position: absolute;
            top: 100%;
            left: 0;
            background: var(--white);
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            border-radius: 5px;
            min-width: 200px;
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s ease;
            z-index: 100;
        }
        
        .has-dropdown:hover .dropdown-menu {
            opacity: 1;
            visibility: visible;
        }
        
        .dropdown-menu a {
            display: block;
            padding: 0.75rem 1rem;
            color: var(--secondary);
            text-decoration: none;
            transition: all 0.3s ease;
        }
        
        .dropdown-menu a:hover {
            background: var(--light);
            color: var(--primary);
            padding-left: 1.25rem;
        }
        
        .nav-actions {
            display: flex;
            gap: 1rem;
        }
        
        .nav-button {
            padding: 0.5rem 1.5rem;
            border-radius: 30px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
        }
        
        .login {
            color: var(--secondary);
            border: 1px solid var(--secondary);
        }
        
        .login:hover {
            background: var(--light);
        }
        
        .primary {
            background: var(--primary);
            color: var(--white);
        }
        
        .primary:hover {
            background: var(--secondary);
            transform: translateY(-2px);
            box-shadow: 0 5px 10px rgba(0,0,0,0.1);
        }
        
        /* Header Styles */
        header {
            background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('https://images.unsplash.com/photo-1519225421980-715cb0215aed');
            background-size: cover;
            background-position: center;
            color: white;
            height: 100vh;
            min-height: 600px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            text-align: center;
            padding: 0 20px;
            margin-top: 70px; /* To account for fixed navbar */
        }
        
        /* Rest of your existing styles... */
        .btn {
            display: inline-block;
            background: var(--primary);
            color: white;
            padding: 12px 30px;
            border: none;
            border-radius: 30px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
        }
        
        .btn:hover {
            background: var(--secondary);
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }
        
        /* Services Section */
        .services {
            padding: 100px 0;
            text-align: center;
        }
        
        .section-title {
            font-size: 2.5rem;
            margin-bottom: 60px;
            position: relative;
        }
        
        .section-title:after {
            content: '';
            position: absolute;
            bottom: -15px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 3px;
            background: var(--primary);
        }
        
        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin-top: 50px;
        }
        
        .service-card {
            background: white;
            padding: 40px 30px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            transition: all 0.3s ease;
        }
        
        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.1);
        }
        
        .service-icon {
            font-size: 3rem;
            color: var(--primary);
            margin-bottom: 20px;
        }
        
        .service-card h3 {
            margin-bottom: 15px;
            font-size: 1.5rem;
        }
        
        /* Gallery Section */
        .gallery {
            padding: 80px 0;
            background-color: var(--accent);
        }
        
        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-top: 50px;
        }
        
        .gallery-item {
            height: 250px;
            overflow: hidden;
            border-radius: 10px;
            position: relative;
        }
        
        .gallery-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }
        
        .gallery-item:hover img {
            transform: scale(1.1);
        }
        
        /* Testimonials */
        .testimonials {
            padding: 100px 0;
            text-align: center;
        }
        
        .testimonial-slider {
            max-width: 800px;
            margin: 50px auto 0;
        }
        
        .testimonial {
            background: white;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        }
        
        .testimonial-content {
            font-style: italic;
            margin-bottom: 20px;
            font-size: 1.1rem;
        }
        
        .testimonial-author {
            font-weight: 600;
        }
        
        /* Contact Section */
        .contact {
            padding: 100px 0;
            background: var(--accent);
        }
        
        .contact-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 50px;
        }
        
        .contact-info h3 {
            margin-bottom: 20px;
        }
        
        .contact-info p {
            margin-bottom: 30px;
        }
        
        .contact-details {
            margin-top: 30px;
        }
        
        .contact-details div {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
        }
        
        .contact-details i {
            margin-right: 15px;
            color: var(--primary);
            font-size: 1.2rem;
        }
        
        .contact-form input,
        .contact-form textarea {
            width: 100%;
            padding: 15px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-family: 'Montserrat', sans-serif;
        }
        
        .contact-form textarea {
            height: 150px;
        }
        
        /* Footer */
        footer {
            background: var(--secondary);
            color: white;
            padding: 50px 0 20px;
            text-align: center;
        }
        
        .footer-content {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            margin-bottom: 40px;
        }
        
        .footer-section {
            flex: 1;
            min-width: 250px;
            margin-bottom: 30px;
        }
        
        .footer-section h3 {
            margin-bottom: 20px;
            color: var(--primary);
        }
        
        .social-links a {
            display: inline-block;
            color: white;
            font-size: 1.5rem;
            margin: 0 10px;
            transition: all 0.3s ease;
        }
        
        .social-links a:hover {
            color: var(--primary);
        }
        
        .copyright {
            border-top: 1px solid rgba(255,255,255,0.1);
            padding-top: 20px;
        }
        
        /* Responsive */
        @media (max-width: 992px) {
            .mobile-menu-toggle {
                display: block;
            }
            
            .nav-menu {
                position: fixed;
                top: 70px;
                left: -100%;
                width: 100%;
                height: calc(100vh - 70px);
                background: var(--white);
                flex-direction: column;
                align-items: center;
                justify-content: flex-start;
                padding: 2rem 0;
                transition: all 0.3s ease;
            }
            
            .nav-menu.active {
                left: 0;
            }
            
            .nav-links {
                flex-direction: column;
                margin-right: 0;
                width: 100%;
                text-align: center;
            }
            
            .nav-link {
                padding: 1rem;
                width: 100%;
            }
            
            .has-dropdown .dropdown-menu {
                position: static;
                opacity: 1;
                visibility: visible;
                box-shadow: none;
                background: var(--light);
                width: 100%;
                display: none;
            }
            
            .has-dropdown:hover .dropdown-menu {
                display: block;
            }
            
            .nav-actions {
                margin-top: 2rem;
                flex-direction: column;
                width: 100%;
                max-width: 300px;
            }
            
            .nav-button {
                width: 100%;
                text-align: center;
            }
        }
        
        @media (max-width: 768px) {
            .header-content h1 {
                font-size: 2.5rem;
            }
            
            .section-title {
                font-size: 2rem;
            }
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar">
        <div class="nav-container">
            <a href="{{ url('/') }}" class="logo">
                <span class="logo-icon">📅</span>
                <span class="logo-text">Event<span>Planner</span></span>
            </a>
            
            <button class="mobile-menu-toggle">☰</button>
            
            <div class="nav-menu">
                <div class="nav-links">
                    <a href="{{ url('/') }}" class="nav-link">Home</a>
                    
                    <div class="has-dropdown">
                        <a href="{{ url('/solutions') }}" class="nav-link active">Solutions</a>
                        <div class="dropdown-menu">
                            <a href="{{ url('/wedding_planning') }}">Wedding Planning</a>
                            <a href="{{ url('/solutions/corporate') }}">Corporate Events</a>
                            <a href="{{ url('/solutions/social') }}">Social Gatherings</a>
                            <a href="{{ url('/solutions/virtual') }}">Virtual Events</a>
                        </div>
                    </div>
                    
                    <a href="{{ url('/features') }}" class="nav-link">Features</a>
                    <a href="{{ url('/pricing') }}" class="nav-link">Pricing</a>
                    <a href="{{ url('/resources') }}" class="nav-link">Resources</a>
                    <a href="{{ url('/review') }}" class="nav-link">Reviews</a>
                </div>
                
                <div class="nav-actions">
                    <a href="{{ url('/login') }}" class="nav-button login">Sign In</a>
                    <a href="{{ url('/contact') }}" class="nav-button primary">Contact Me</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Header with Hero Content -->
    <header>
        <div class="header-content">
            <h1>Creating Your Perfect Wedding Day</h1>
            <p>Let us handle the details while you enjoy the journey to your special day. Our expert planners will bring your vision to life with elegance and precision.</p>
            <a href="#contact" class="btn">Start Planning Today</a>
        </div>
    </header>

    <!-- Services Section -->
    <section id="services" class="services">
        <div class="container">
            <h2 class="section-title">Our Wedding Services</h2>
            <div class="services-grid">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-calendar-alt"></i>
                    </div>
                    <h3>Full Planning</h3>
                    <p>From initial concept to the final toast, we handle every detail to create your perfect wedding day.</p>
                </div>
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-map-marked-alt"></i>
                    </div>
                    <h3>Venue Selection</h3>
                    <p>We'll help you find the perfect location that matches your style, budget, and guest count.</p>
                </div>
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-utensils"></i>
                    </div>
                    <h3>Catering Coordination</h3>
                    <p>Delicious cuisine perfectly matched to your wedding theme and dietary requirements.</p>
                </div>
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-camera"></i>
                    </div>
                    <h3>Vendor Management</h3>
                    <p>We work with the best photographers, florists, and musicians to bring your vision to life.</p>
                </div>
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-ring"></i>
                    </div>
                    <h3>Wedding Design</h3>
                    <p>Custom decor and styling to create a cohesive look that reflects your personality.</p>
                </div>
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-glass-cheers"></i>
                    </div>
                    <h3>Day-of Coordination</h3>
                    <p>Let us handle all the logistics so you can relax and enjoy your special day.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Gallery Section -->
    <section id="gallery" class="gallery">
        <div class="container">
            <h2 class="section-title">Our Recent Weddings</h2>
            <div class="gallery-grid">
                <div class="gallery-item">
                    <img src="https://images.unsplash.com/photo-1519225421980-715cb0215aed" alt="Wedding couple">
                </div>
                <div class="gallery-item">
                    <img src="https://images.unsplash.com/photo-1523438885200-e635ba2c371e" alt="Wedding venue">
                </div>
                <div class="gallery-item">
                    <img src="https://images.unsplash.com/photo-1519671482749-fd09be7ccebf" alt="Wedding decor">
                </div>
                <div class="gallery-item">
                    <img src="https://images.unsplash.com/photo-1465495976277-4387d4b0b4c6" alt="Wedding ceremony">
                </div>
                <div class="gallery-item">
                    <img src="https://images.unsplash.com/photo-1519657337289-077653f724ed" alt="Wedding reception">
                </div>
                <div class="gallery-item">
                    <img src="https://images.unsplash.com/photo-1516035069371-29a1b244cc32" alt="Wedding details">
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials">
        <div class="container">
            <h2 class="section-title">What Couples Say</h2>
            <div class="testimonial-slider">
                <div class="testimonial">
                    <p class="testimonial-content">"Working with Elegant Weddings was the best decision we made for our special day. They took care of every detail and made the entire process stress-free. Our wedding was more beautiful than we could have imagined!"</p>
                    <p class="testimonial-author">- Sarah & Michael</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact">
        <div class="container">
            <h2 class="section-title">Let's Plan Your Wedding</h2>
            <div class="contact-container">
                <div class="contact-info">
                    <h3>Get in Touch</h3>
                    <p>Ready to start planning your dream wedding? Contact us today to schedule a consultation. We'd love to hear about your vision for your special day.</p>
                    <div class="contact-details">
                        <div>
                            <i class="fas fa-phone"></i>
                            <span>(555) 123-4567</span>
                        </div>
                        <div>
                            <i class="fas fa-envelope"></i>
                            <span>info@elegantweddings.com</span>
                        </div>
                        <div>
                            <i class="fas fa-map-marker-alt"></i>
                            <span>123 Wedding Lane, Suite 100, Bridal City, BC 90210</span>
                        </div>
                    </div>
                </div>
                <div class="contact-form">
                    <form>
                        <input type="text" placeholder="Your Name" required>
                        <input type="email" placeholder="Your Email" required>
                        <input type="text" placeholder="Wedding Date (if known)">
                        <textarea placeholder="Tell us about your wedding vision..."></textarea>
                        <button type="submit" class="btn">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h3>EventPlanner</h3>
                    <p>Creating unforgettable experiences with personalized attention to detail and flawless execution for all your event needs.</p>
                </div>
                <div class="footer-section">
                    <h3>Quick Links</h3>
                    <ul>
                        <li><a href="#services">Services</a></li>
                        <li><a href="#gallery">Gallery</a></li>
                        <li><a href="#testimonials">Testimonials</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h3>Follow Us</h3>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-pinterest-p"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                    </div>
                </div>
            </div>
            <div class="copyright">
                <p>&copy; 2023 EventPlanner. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script>
        // Mobile menu toggle functionality
        document.querySelector('.mobile-menu-toggle').addEventListener('click', function() {
            document.querySelector('.nav-menu').classList.toggle('active');
        });
        
        // Close mobile menu when clicking on a link
        document.querySelectorAll('.nav-link').forEach(link => {
            link.addEventListener('click', function() {
                document.querySelector('.nav-menu').classList.remove('active');
            });
        });
    </script>
</body>
</html>