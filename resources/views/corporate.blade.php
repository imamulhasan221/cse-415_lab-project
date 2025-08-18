<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Corporate Events | EventPlanner</title>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Montserrat:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        :root {
            --primary: #4a6fa5;
            --secondary: #166088;
            --accent: #4fc3f7;
            --light: #f8f9fa;
            --dark: #212529;
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
            background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('https://images.unsplash.com/photo-1450101499163-c8848c66ca85');
            background-size: cover;
            background-position: center;
            color: white;
            height: 80vh;
            min-height: 500px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            text-align: center;
            padding: 0 20px;
            margin-top: 70px; /* To account for fixed navbar */
        }
        
        .header-content {
            max-width: 800px;
            margin: 0 auto;
        }
        
        .header-content h1 {
            font-size: 3.5rem;
            margin-bottom: 20px;
            color: white;
        }
        
        .header-content p {
            font-size: 1.2rem;
            margin-bottom: 30px;
        }
        
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
            background: var(--accent);
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
        
        /* Event Types Section */
        .event-types {
            padding: 80px 0;
            background-color: var(--accent);
        }
        
        .event-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-top: 50px;
        }
        
        .event-card {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            text-align: center;
            transition: all 0.3s ease;
        }
        
        .event-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
        }
        
        .event-card img {
            width: 100%;
            height: 180px;
            object-fit: cover;
            border-radius: 5px;
            margin-bottom: 20px;
        }
        
        /* Clients Section */
        .clients {
            padding: 100px 0;
            text-align: center;
        }
        
        .client-logos {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 40px;
            margin-top: 50px;
        }
        
        .client-logo {
            max-width: 150px;
            height: auto;
            filter: grayscale(100%);
            opacity: 0.7;
            transition: all 0.3s ease;
        }
        
        .client-logo:hover {
            filter: grayscale(0);
            opacity: 1;
        }
        
        /* Testimonials */
        .testimonials {
            padding: 100px 0;
            background-color: var(--light);
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
            color: var(--primary);
        }
        
        .testimonial-position {
            font-size: 0.9rem;
            color: var(--secondary);
        }
        
        /* Contact Section */
        .contact {
            padding: 100px 0;
            background: var(--white);
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
            color: var(--accent);
        }
        
        .social-links a {
            display: inline-block;
            color: white;
            font-size: 1.5rem;
            margin: 0 10px;
            transition: all 0.3s ease;
        }
        
        .social-links a:hover {
            color: var(--accent);
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
            
            .header-content h1 {
                font-size: 2.8rem;
            }
        }
        
        @media (max-width: 768px) {
            .header-content h1 {
                font-size: 2.2rem;
            }
            
            .section-title {
                font-size: 2rem;
            }
            
            .client-logos {
                gap: 20px;
            }
            
            .client-logo {
                max-width: 120px;
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
                            <a href="{{ url('/solutions/corporate') }}" class="active">Corporate Events</a>
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
                    <a href="{{ url('/contact') }}" class="nav-button primary">Contact Us</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Header with Hero Content -->
    <header>
        <div class="header-content">
            <h1>Exceptional Corporate Event Planning</h1>
            <p>We create impactful corporate experiences that engage, inspire, and deliver measurable results for your business.</p>
            <a href="#contact" class="btn">Request a Proposal</a>
        </div>
    </header>

    <!-- Services Section -->
    <section id="services" class="services">
        <div class="container">
            <h2 class="section-title">Our Corporate Event Services</h2>
            <div class="services-grid">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-briefcase"></i>
                    </div>
                    <h3>Conference Planning</h3>
                    <p>End-to-end conference management from venue selection to speaker coordination and attendee engagement.</p>
                </div>
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-medal"></i>
                    </div>
                    <h3>Award Ceremonies</h3>
                    <p>Memorable award events that celebrate achievement and reinforce company values.</p>
                </div>
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-network-wired"></i>
                    </div>
                    <h3>Trade Shows</h3>
                    <p>Complete trade show management including booth design, logistics, and lead capture solutions.</p>
                </div>
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-glass-cheers"></i>
                    </div>
                    <h3>Corporate Hospitality</h3>
                    <p>VIP client entertainment and employee appreciation events that build lasting relationships.</p>
                </div>
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-chalkboard-teacher"></i>
                    </div>
                    <h3>Team Building</h3>
                    <p>Custom-designed activities that improve collaboration, communication, and company culture.</p>
                </div>
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-laptop"></i>
                    </div>
                    <h3>Virtual Events</h3>
                    <p>Engaging online experiences with professional production and interactive elements.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Event Types Section -->
    <section class="event-types">
        <div class="container">
            <h2 class="section-title">Types of Corporate Events</h2>
            <div class="event-grid">
                <div class="event-card">
                    <img src="https://images.unsplash.com/photo-1497366811353-6870744d04b2" alt="Conference">
                    <h3>Conferences</h3>
                    <p>Industry gatherings with keynote speakers, breakout sessions, and networking opportunities.</p>
                </div>
                <div class="event-card">
                    <img src="https://images.unsplash.com/photo-1540575467063-178a50c2df87" alt="Product Launch">
                    <h3>Product Launches</h3>
                    <p>Strategic events to introduce new offerings with maximum impact and media coverage.</p>
                </div>
                <div class="event-card">
                    <img src="https://images.unsplash.com/photo-1527525443983-6e60c75fff46" alt="Seminar">
                    <h3>Seminars & Workshops</h3>
                    <p>Educational events that provide value to clients while positioning your company as an expert.</p>
                </div>
                <div class="event-card">
                    <img src="https://images.unsplash.com/photo-1511578314322-379afb476865" alt="Gala">
                    <h3>Galas & Fundraisers</h3>
                    <p>Elegant events that support corporate social responsibility initiatives.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Clients Section -->
    <section id="clients" class="clients">
        <div class="container">
            <h2 class="section-title">Trusted By Industry Leaders</h2>
            <div class="client-logos">
                <img src="https://via.placeholder.com/150x60?text=Company+1" alt="Company 1" class="client-logo">
                <img src="https://via.placeholder.com/150x60?text=Company+2" alt="Company 2" class="client-logo">
                <img src="https://via.placeholder.com/150x60?text=Company+3" alt="Company 3" class="client-logo">
                <img src="https://via.placeholder.com/150x60?text=Company+4" alt="Company 4" class="client-logo">
                <img src="https://via.placeholder.com/150x60?text=Company+5" alt="Company 5" class="client-logo">
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials">
        <div class="container">
            <h2 class="section-title">Client Success Stories</h2>
            <div class="testimonial-slider">
                <div class="testimonial">
                    <p class="testimonial-content">"EventPlanner transformed our annual sales conference from a routine meeting into an inspiring experience that boosted morale and directly contributed to a 28% increase in Q3 sales. Their attention to detail and creative approach exceeded all our expectations."</p>
                    <p class="testimonial-author">Jennifer K.</p>
                    <p class="testimonial-position">Director of Marketing, TechSolutions Inc.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact">
        <div class="container">
            <h2 class="section-title">Ready to Elevate Your Next Corporate Event?</h2>
            <div class="contact-container">
                <div class="contact-info">
                    <h3>Corporate Event Specialists</h3>
                    <p>Our dedicated corporate team understands the unique requirements of business events. We'll work with you to create an experience that aligns with your brand and achieves your business objectives.</p>
                    <div class="contact-details">
                        <div>
                            <i class="fas fa-phone"></i>
                            <span>(555) 987-6543</span>
                        </div>
                        <div>
                            <i class="fas fa-envelope"></i>
                            <span>corporate@eventplanner.com</span>
                        </div>
                        <div>
                            <i class="fas fa-map-marker-alt"></i>
                            <span>500 Business Center Dr, Suite 200, Corporate City, CC 54321</span>
                        </div>
                    </div>
                </div>
                <div class="contact-form">
                    <form>
                        <input type="text" placeholder="Your Name" required>
                        <input type="text" placeholder="Company Name" required>
                        <input type="email" placeholder="Your Email" required>
                        <input type="text" placeholder="Event Type">
                        <input type="date" placeholder="Estimated Event Date">
                        <textarea placeholder="Tell us about your event goals..."></textarea>
                        <button type="submit" class="btn">Submit Request</button>
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
                    <p>Professional event planning services for corporate clients, delivering exceptional experiences that drive business results.</p>
                </div>
                <div class="footer-section">
                    <h3>Corporate Services</h3>
                    <ul>
                        <li><a href="#">Conference Planning</a></li>
                        <li><a href="#">Executive Retreats</a></li>
                        <li><a href="#">Product Launches</a></li>
                        <li><a href="#">Team Building</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h3>Connect With Us</h3>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="copyright">
                <p>&copy; 2023 EventPlanner. All rights reserved. | <a href="#" style="color: var(--accent);">Privacy Policy</a> | <a href="#" style="color: var(--accent);">Terms of Service</a></p>
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