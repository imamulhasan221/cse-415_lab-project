<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us | EventPlanner Pro</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary: #5F30E2;
            --primary-dark: #4A21C2;
            --secondary: #FF9F1C;
            --dark: #1A1A2E;
            --light: #F8F9FA;
            --gray: #6C757D;
            --light-gray: #E9ECEF;
            --dark-gray: #495057;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Poppins', sans-serif;
            color: var(--dark);
            line-height: 1.6;
            background-color: white;
        }
        
        /* Navigation (consistent with other pages) */
        .navbar {
            background: white;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.08);
            padding: 0 5%;
            height: 80px;
            display: flex;
            align-items: center;
            position: sticky;
            top: 0;
            z-index: 1000;
        }
        
        .nav-container {
            width: 100%;
            max-width: 1400px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .nav-link {
    position: relative;
    display: inline-block;
    padding: 0.75rem 1rem;
    font-family: 'Poppins', sans-serif;
    font-size: 0.9375rem; /* 15px */
    font-weight: 500;
    color: var(--dark); /* Using your color variable */
    text-decoration: none;
    text-transform: none;
    letter-spacing: 0.5px;
    transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
    margin: 0 0.25rem;
}

/* Hover state */
.nav-link:hover {
    color: var(--primary); /* Your primary color variable */
}

/* Active state */
.nav-link.active {
    color: var(--primary);
    font-weight: 600;
}

/* Underline animation */
.nav-link::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 50%;
    transform: translateX(-50%);
    width: 0;
    height: 2px;
    background-color: var(--primary);
    transition: width 0.3s ease, left 0.3s ease;
}

.nav-link:hover::after,
.nav-link.active::after {
    width: calc(100% - 2rem); /* Leaves some space on sides */
    left: 50%;
    transform: translateX(-50%);
}

/* Focus state for accessibility */
.nav-link:focus-visible {
    outline: 2px solid var(--primary);
    outline-offset: 4px;
    border-radius: 4px;
}

/* Responsive adjustments */
@media (max-width: 768px) {
    .nav-link {
        padding: 0.75rem 0;
        width: 100%;
        text-align: left;
        margin: 0;
    }
    
    .nav-link::after {
        display: none; /* Remove underline animation on mobile */
    }
    
    .nav-link:hover,
    .nav-link.active {
        background-color: rgba(95, 48, 226, 0.05); /* Light primary color */
        padding-left: 1.5rem;
    }
}
        
        .logo {
            display: flex;
            align-items: center;
            text-decoration: none;
        }
        
        .logo-icon {
            font-size: 28px;
            margin-right: 12px;
            color: var(--primary);
        }
        
        .logo-text {
            font-size: 22px;
            font-weight: 700;
            color: var(--dark);
        }
        
        .logo-text span {
            color: var(--primary);
        }
        
        /* Contact Hero Section */
        .contact-hero {
            background: linear-gradient(135deg, rgba(95, 48, 226, 0.03) 0%, rgba(255, 255, 255, 1) 100%);
            padding: 80px 5% 100px;
            text-align: center;
        }
        
        .contact-hero h1 {
            font-size: 42px;
            font-weight: 700;
            margin-bottom: 20px;
            color: var(--dark);
        }
        
        .contact-hero p {
            font-size: 18px;
            color: var(--gray);
            max-width: 700px;
            margin: 0 auto 40px;
        }
        
        /* Contact Content */
        .contact-container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 5% 100px;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 50px;
        }
        
        /* Contact Form */
        .contact-form {
            background: white;
            border-radius: 12px;
            padding: 40px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
        }
        
        .contact-form h2 {
            font-size: 28px;
            margin-bottom: 30px;
            color: var(--dark);
        }
        
        .form-group {
            margin-bottom: 25px;
        }
        
        .form-group label {
            display: block;
            font-size: 15px;
            font-weight: 500;
            margin-bottom: 8px;
            color: var(--dark);
        }
        
        .form-control {
            width: 100%;
            padding: 14px 16px;
            border: 1px solid var(--light-gray);
            border-radius: 8px;
            font-size: 15px;
            font-family: 'Poppins', sans-serif;
            transition: all 0.3s ease;
        }
        
        .form-control:focus {
            outline: none;
            border-color: var(--primary);
            box-shadow: 0 0 0 3px rgba(95, 48, 226, 0.1);
        }
        
        textarea.form-control {
            min-height: 150px;
            resize: vertical;
        }
        
        .submit-btn {
            background: var(--primary);
            color: white;
            border: none;
            border-radius: 8px;
            padding: 14px 30px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            width: 100%;
        }
        
        .submit-btn:hover {
            background: var(--primary-dark);
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(95, 48, 226, 0.3);
        }
        
        /* Contact Info */
        .contact-info {
            padding: 20px 0;
        }
        
        .contact-info h2 {
            font-size: 28px;
            margin-bottom: 30px;
            color: var(--dark);
        }
        
        .contact-method {
            display: flex;
            align-items: flex-start;
            margin-bottom: 30px;
        }
        
        .contact-icon {
            width: 50px;
            height: 50px;
            background: rgba(95, 48, 226, 0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 20px;
            flex-shrink: 0;
        }
        
        .contact-icon i {
            font-size: 20px;
            color: var(--primary);
        }
        
        .contact-details h3 {
            font-size: 18px;
            font-weight: 600;
            margin-bottom: 8px;
            color: var(--dark);
        }
        
        .contact-details p, 
        .contact-details a {
            font-size: 15px;
            color: var(--gray);
            text-decoration: none;
            line-height: 1.7;
        }
        
        .contact-details a:hover {
            color: var(--primary);
        }
        
        /* Map */
        .contact-map {
            margin-top: 50px;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            height: 300px;
        }
        
        .contact-map iframe {
            width: 100%;
            height: 100%;
            border: none;
        }
        
        /* Footer */
/* Footer Styles */
.footer {
    background-color: #1A1A2E; /* Dark blue background */
    color: #FFFFFF;
    padding: 5rem 5% 2rem; /* 80px top, 32px bottom */
    position: relative;
}

.footer-container {
    max-width: 1400px;
    margin: 0 auto;
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 3rem;
    padding-bottom: 3rem;
    border-bottom: 1px solid rgba(255, 255, 255, 0.1);
}

/* Footer About Section */
.footer-about {
    max-width: 300px;
}

.footer-logo {
    display: flex;
    align-items: center;
    margin-bottom: 1.5rem;
}

.footer-logo-icon {
    font-size: 2rem;
    margin-right: 0.75rem;
}

.footer-logo-text {
    font-size: 1.5rem;
    font-weight: 700;
    color: #FFFFFF;
}

.footer-about p {
    font-size: 0.9375rem; /* 15px */
    line-height: 1.7;
    color: rgba(255, 255, 255, 0.7);
    margin-bottom: 1.5rem;
}

/* Footer Social Icons */
.footer-social {
    display: flex;
    gap: 1rem;
}

.social-icon {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    background-color: rgba(255, 255, 255, 0.1);
    display: flex;
    align-items: center;
    justify-content: center;
    transition: all 0.3s ease;
    color: rgba(255, 255, 255, 0.7);
    font-size: 1rem;
}

.social-icon:hover {
    background-color: #5F30E2; /* Primary purple */
    color: #FFFFFF;
    transform: translateY(-3px);
}

/* Footer Links Container */
.footer-links-container {
    margin-bottom: 1rem;
}

.footer-links-title {
    font-size: 1.125rem; /* 18px */
    font-weight: 600;
    margin-bottom: 1.5rem;
    position: relative;
    color: #FFFFFF;
}

.footer-links-title::after {
    content: '';
    position: absolute;
    bottom: -8px;
    left: 0;
    width: 40px;
    height: 3px;
    background-color: #5F30E2; /* Primary purple */
}

/* Footer Links List */
.footer-links {
    list-style: none;
    padding: 0;
    margin: 0;
}

.footer-links li {
    margin-bottom: 0.75rem;
}

.footer-links a {
    color: rgba(255, 255, 255, 0.7);
    text-decoration: none;
    font-size: 0.9375rem; /* 15px */
    transition: all 0.3s ease;
    display: inline-block;
    position: relative;
}

.footer-links a:hover {
    color: #FFFFFF;
    transform: translateX(5px);
}

.footer-links a::after {
    content: '';
    position: absolute;
    bottom: -2px;
    left: 0;
    width: 0;
    height: 1px;
    background-color: #5F30E2; /* Primary purple */
    transition: width 0.3s ease;
}

.footer-links a:hover::after {
    width: 100%;
}

/* Footer Bottom Section */
.footer-bottom {
    max-width: 1400px;
    margin: 2rem auto 0;
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    align-items: center;
    padding-top: 2rem;
}

.copyright {
    font-size: 0.875rem; /* 14px */
    color: rgba(255, 255, 255, 0.5);
    margin-bottom: 1rem;
}

.footer-legal {
    display: flex;
    gap: 1.5rem;
}

.footer-legal a {
    color: rgba(255, 255, 255, 0.5);
    text-decoration: none;
    font-size: 0.875rem; /* 14px */
    transition: all 0.3s ease;
}

.footer-legal a:hover {
    color: #FFFFFF;
}

/* Responsive Adjustments */
@media (max-width: 992px) {
    .footer-container {
        grid-template-columns: 1fr 1fr;
    }
}

@media (max-width: 768px) {
    .footer {
        padding: 3rem 5% 2rem;
    }
    
    .footer-container {
        grid-template-columns: 1fr;
        gap: 2rem;
    }
    
    .footer-about {
        max-width: 100%;
    }
    
    .footer-bottom {
        flex-direction: column;
        text-align: center;
        gap: 1rem;
    }
    
    .footer-legal {
        flex-wrap: wrap;
        justify-content: center;
        gap: 1rem;
    }
    
    .footer-links a:hover {
        transform: none;
        padding-left: 5px;
    }
}
        
        
        /* Responsive */
        @media (max-width: 992px) {
            .contact-container {
                grid-template-columns: 1fr;
            }
            
            .contact-info {
                order: -1;
            }
        }
        
        @media (max-width: 768px) {
            .contact-hero h1 {
                font-size: 36px;
            }
            
            .contact-form {
                padding: 30px;
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
            
            <div class="nav-menu">
                <div class="nav-links">
                    <a href="{{ url('/') }}" class="nav-link">Home</a>
                    <a href="{{ url('/features') }}" class="nav-link">Features</a>
                    <a href="{{ url('/pricing') }}" class="nav-link">Pricing</a>
                    <a href="{{ url('/contact') }}" class="nav-link active">Contact</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Contact Hero Section -->
    <section class="contact-hero">
        <h1>Get In Touch With Us</h1>
        <p>Have questions about our event management platform? Our team is here to help you with any inquiries, support requests, or partnership opportunities.</p>
    </section>

    <!-- Contact Content -->
    <div class="contact-container">
        <!-- Contact Form -->
        <div class="contact-form">
            <h2>Send Us a Message</h2>
            <form action="{{ route('contact.submit') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">Your Name</label>
                    <input type="text" id="name" name="name" class="form-control" required>
                </div>
                
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" id="email" name="email" class="form-control" required>
                </div>
                
                <div class="form-group">
                    <label for="phone">Phone Number (Optional)</label>
                    <input type="tel" id="phone" name="phone" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="subject">Subject</label>
                    <select id="subject" name="subject" class="form-control" required>
                        <option value="" disabled selected>Select a subject</option>
                        <option value="General Inquiry">General Inquiry</option>
                        <option value="Sales Question">Sales Question</option>
                        <option value="Technical Support">Technical Support</option>
                        <option value="Partnership">Partnership</option>
                        <option value="Feedback">Feedback</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <label for="message">Your Message</label>
                    <textarea id="message" name="message" class="form-control" required></textarea>
                </div>
                
                <button type="submit" class="submit-btn">Send Message</button>
            </form>
        </div>
        
        <!-- Contact Information -->
        <div class="contact-info">
            <h2>Contact Information</h2>
            
            <div class="contact-method">
                <div class="contact-icon">
                    <i class="fas fa-map-marker-alt"></i>
                </div>
                <div class="contact-details">
                    <h3>Our Office</h3>
                    <p>123 Event Planning Blvd<br>San Francisco, CA 94107<br>United States</p>
                </div>
            </div>
            
            <div class="contact-method">
                <div class="contact-icon">
                    <i class="fas fa-phone-alt"></i>
                </div>
                <div class="contact-details">
                    <h3>Phone</h3>
                    <p>
                        <a href="tel:+18005551234">+1 (800) 555-1234</a> (Sales)<br>
                        <a href="tel:+18005554321">+1 (800) 555-4321</a> (Support)
                    </p>
                </div>
            </div>
            
            <div class="contact-method">
                <div class="contact-icon">
                    <i class="fas fa-envelope"></i>
                </div>
                <div class="contact-details">
                    <h3>Email</h3>
                    <p>
                        <a href="mailto:info@eventplanner.com">info@eventplanner.com</a> (General)<br>
                        <a href="mailto:support@eventplanner.com">support@eventplanner.com</a> (Support)
                    </p>
                </div>
            </div>
            
            <div class="contact-method">
                <div class="contact-icon">
                    <i class="fas fa-clock"></i>
                </div>
                <div class="contact-details">
                    <h3>Business Hours</h3>
                    <p>
                        Monday - Friday: 9:00 AM - 6:00 PM (PST)<br>
                        Saturday: 10:00 AM - 4:00 PM (PST)<br>
                        Sunday: Closed
                    </p>
                </div>
            </div>
            
            <div class="contact-map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3153.665062583689!2d-122.4194156846824!3d37.77492997975938!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80859a6d00690021%3A0x4a501367f076adff!2sSan%20Francisco%2C%20CA%2C%20USA!5e0!3m2!1sen!2s!4v1620000000000!5m2!1sen!2s" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer">
        <div class="footer-container">
            <div class="footer-about">
                <div class="footer-logo">
                    <span class="footer-logo-icon">📅</span>
                    <span class="footer-logo-text">EventPlanner</span>
                </div>
                <p>The complete event management platform for professionals and couples. Plan, organize, and execute unforgettable events with ease.</p>
                <div class="footer-social">
                    <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="social-icon"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            
            <div class="footer-links-container">
                <h3 class="footer-links-title">Product</h3>
                <ul class="footer-links">
                    <li><a href="#">Features</a></li>
                    <li><a href="#">Pricing</a></li>
                    <li><a href="#">Templates</a></li>
                    <li><a href="#">Integrations</a></li>
                </ul>
            </div>
            
            <div class="footer-links-container">
                <h3 class="footer-links-title">Resources</h3>
                <ul class="footer-links">
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Guides</a></li>
                    <li><a href="#">Webinars</a></li>
                    <li><a href="#">Support</a></li>
                </ul>
            </div>
            
            <div class="footer-links-container">
                <h3 class="footer-links-title">Company</h3>
                <ul class="footer-links">
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Careers</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">Press</a></li>
                </ul>
            </div>
        </div>
        
        <div class="footer-bottom">
            <p class="copyright">© 2023 EventPlanner. All rights reserved.</p>
            <div class="footer-legal">
                <a href="#">Privacy Policy</a>
                <a href="#">Terms of Service</a>
                <a href="#">Cookie Policy</a>
            </div>
        </div>
    </footer>

    <script>
        // Mobile menu toggle functionality
        document.querySelector('.mobile-menu-toggle').addEventListener('click', function() {
            document.querySelector('.nav-menu').classList.toggle('active');
        });
    </script>
</body>
</html>