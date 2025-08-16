<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leave a Review | EventPlanner Pro</title>
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
            --success: #10B981;
            --warning: #F59E0B;
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
        /* Navigation Menu Container */
.nav-menu {
    display: flex;
    align-items: center;
}

/* Navigation Links Container */
.nav-links {
    display: flex;
    gap: 2rem; /* 32px spacing between links */
}

/* Individual Navigation Links */
.nav-link {
    position: relative;
    color: #4A5568; /* Gray-700 */
    font-family: 'Poppins', sans-serif;
    font-size: 0.9375rem; /* 15px */
    font-weight: 500;
    text-decoration: none;
    padding: 0.75rem 0;
    transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    letter-spacing: 0.5px;
}

/* Hover State */
.nav-link:hover {
    color: #5F30E2; /* Your primary purple color */
}

/* Active State */
.nav-link.active {
    color: #5F30E2;
    font-weight: 600;
}

/* Animated Underline Effect */
.nav-link::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 50%;
    transform: translateX(-50%);
    width: 0;
    height: 2px;
    background-color: #5F30E2;
    transition: width 0.3s ease, left 0.3s ease;
}

.nav-link:hover::after,
.nav-link.active::after {
    width: calc(100% - 1rem); /* Leaves some space on sides */
    left: 50%;
}

/* Focus State for Accessibility */
.nav-link:focus-visible {
    outline: 2px solid #5F30E2;
    outline-offset: 4px;
    border-radius: 4px;
}

/* Responsive Adjustments */
@media (max-width: 992px) {
    .nav-links {
        gap: 1.5rem;
    }
}

@media (max-width: 768px) {
    .nav-menu {
        position: fixed;
        top: 80px; /* Height of your navbar */
        left: 0;
        width: 100%;
        background: white;
        flex-direction: column;
        padding: 2rem;
        box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
        transform: translateY(-100%);
        opacity: 0;
        transition: transform 0.3s ease, opacity 0.2s ease;
        z-index: 999;
    }
    
    .nav-menu.active {
        transform: translateY(0);
        opacity: 1;
    }
    
    .nav-links {
        flex-direction: column;
        gap: 1rem;
    }
    
    .nav-link {
        padding: 0.75rem 1rem;
        width: 100%;
    }
    
    .nav-link::after {
        display: none; /* Remove underline on mobile */
    }
    
    .nav-link:hover,
    .nav-link.active {
        background-color: rgba(95, 48, 226, 0.05);
        border-radius: 6px;
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
        
        /* Review Hero Section */
        .review-hero {
            background: linear-gradient(135deg, rgba(95, 48, 226, 0.03) 0%, rgba(255, 255, 255, 1) 100%);
            padding: 80px 5% 60px;
            text-align: center;
        }
        
        .review-hero h1 {
            font-size: 42px;
            font-weight: 700;
            margin-bottom: 20px;
            color: var(--dark);
        }
        
        .review-hero p {
            font-size: 18px;
            color: var(--gray);
            max-width: 700px;
            margin: 0 auto 40px;
        }
        
        /* Review Content */
        .review-container {
            max-width: 800px;
            margin: 0 auto;
            padding: 0 5% 100px;
        }
        
        /* Review Form */
        .review-form {
            background: white;
            border-radius: 12px;
            padding: 40px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
        }
        
        .review-form h2 {
            font-size: 28px;
            margin-bottom: 30px;
            color: var(--dark);
            text-align: center;
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
        
        /* Rating System */
        .rating-container {
            text-align: center;
            margin-bottom: 30px;
        }
        
        .rating-title {
            font-size: 16px;
            font-weight: 500;
            margin-bottom: 15px;
            color: var(--dark);
        }
        
        .rating-stars {
            display: flex;
            justify-content: center;
            gap: 8px;
        }
        
        .rating-star {
            font-size: 32px;
            color: var(--light-gray);
            cursor: pointer;
            transition: all 0.2s ease;
        }
        
        .rating-star:hover,
        .rating-star.active {
            color: var(--warning);
        }
        
        .rating-text {
            margin-top: 10px;
            font-size: 14px;
            color: var(--gray);
            min-height: 20px;
        }
        
        /* Submit Button */
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
        
        /* Review Examples */
        .review-examples {
            margin-top: 60px;
        }
        
        .review-examples h3 {
            font-size: 24px;
            margin-bottom: 30px;
            text-align: center;
            color: var(--dark);
        }
        
        .review-cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }
        
        .review-card {
            background: white;
            border-radius: 12px;
            padding: 30px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }
        
        .review-header {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }
        
        .review-avatar {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background-color: var(--light);
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 15px;
            font-weight: 600;
            color: var(--primary);
        }
        
        .review-user h4 {
            font-size: 16px;
            font-weight: 600;
            margin-bottom: 5px;
        }
        
        .review-rating {
            color: var(--warning);
            font-size: 14px;
        }
        
        .review-content {
            font-size: 15px;
            color: var(--dark-gray);
            line-height: 1.7;
        }
        
        /* Footer */
        .footer {
            background: var(--dark);
            color: white;
            padding: 80px 5% 40px;
        }
        
        /* Responsive */
        @media (max-width: 768px) {
            .review-hero h1 {
                font-size: 36px;
            }
            
            .review-form {
                padding: 30px;
            }
            
            .rating-star {
                font-size: 28px;
            }
        }
        .alert {
    padding: 1rem;
    margin-bottom: 1rem;
    border-radius: 0.5rem;
    font-size: 0.9375rem;
}

.alert-success {
    background-color: #D1FAE5;
    color: #065F46;
    border: 1px solid #A7F3D0;
}

.alert-danger {
    background-color: #FEE2E2;
    color: #B91C1C;
    border: 1px solid #FECACA;
}

.alert ul {
    margin: 0;
    padding-left: 1.25rem;
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
                    <a href="{{ url('/contact') }}" class="nav-link">Contact</a>
                    <a href="{{ url('/review') }}" class="nav-link active">Reviews</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Review Hero Section -->
    <section class="review-hero">
        <h1>Share Your Experience</h1>
        <p>We value your feedback! Please take a moment to rate your experience with EventPlanner and help us improve our services.</p>
    </section>

    <!-- Review Content -->
    <div class="review-container">
        <!-- Review Form -->
        <form class="review-form" action="{{ route('review.store') }}" method="POST">
            @csrf
            <h2>Write a Review</h2>
            
            <div class="form-group">
                <label for="name">Your Name</label>
                <input type="text" id="name" name="name" class="form-control" required>
            </div>
            
            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" id="email" name="email" class="form-control" required>
            </div>
            
            <div class="form-group">
                <label for="title">Review Title</label>
                <input type="text" id="title" name="title" class="form-control" required>
            </div>
            
            <div class="form-group rating-container">
                <div class="rating-title">Your Rating</div>
                <div class="rating-stars">
                    <i class="fas fa-star rating-star" data-rating="1"></i>
                    <i class="fas fa-star rating-star" data-rating="2"></i>
                    <i class="fas fa-star rating-star" data-rating="3"></i>
                    <i class="fas fa-star rating-star" data-rating="4"></i>
                    <i class="fas fa-star rating-star" data-rating="5"></i>
                </div>
                <div class="rating-text" id="rating-text">Tap to rate</div>
                <input type="hidden" id="rating" name="rating" value="0" required>
            </div>
            
            <div class="form-group">
                <label for="review">Your Review</label>
                <textarea id="review" name="review" class="form-control" required></textarea>
            </div>
            
            <button type="submit" class="submit-btn">Submit Review</button>
        </form>
        
        <!-- Review Examples -->
        <div class="review-examples">
            <h3>What Our Customers Say</h3>
            <div class="review-cards">
                <div class="review-card">
                    <div class="review-header">
                        <div class="review-avatar">JD</div>
                        <div class="review-user">
                            <h4>John D.</h4>
                            <div class="review-rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <div class="review-content">
                        "EventPlanner made organizing our corporate conference a breeze. The team collaboration features saved us dozens of hours."
                    </div>
                </div>
                
                <div class="review-card">
                    <div class="review-header">
                        <div class="review-avatar">SM</div>
                        <div class="review-user">
                            <h4>Sarah M.</h4>
                            <div class="review-rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                    </div>
                    <div class="review-content">
                        "As a wedding planner, I rely on EventPlanner daily. The guest management tools are exceptional and my clients love the RSVP system."
                    </div>
                </div>
                
                <div class="review-card">
                    <div class="review-header">
                        <div class="review-avatar">AR</div>
                        <div class="review-user">
                            <h4>Amanda R.</h4>
                            <div class="review-rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <div class="review-content">
                        "The mobile app is a game-changer! I can manage events on the go and everything syncs perfectly with the web version."
                    </div>
                </div>
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
        @if(session('success'))
    <div class="alert alert-success mt-4 p-4 rounded-lg">
        {{ session('success') }}
    </div>
@endif
@if($errors->any())
    <div class="alert alert-danger mt-4 p-4 rounded-lg">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    </footer>

    <script>
        // Rating System Functionality
        const stars = document.querySelectorAll('.rating-star');
        const ratingInput = document.getElementById('rating');
        const ratingText = document.getElementById('rating-text');
        
        const ratingMessages = [
            "Tap to rate",
            "Poor",
            "Fair",
            "Good",
            "Very Good",
            "Excellent"
        ];
        
        stars.forEach(star => {
            star.addEventListener('click', function() {
                const rating = parseInt(this.dataset.rating);
                ratingInput.value = rating;
                
                // Update star display
                stars.forEach((s, index) => {
                    if (index < rating) {
                        s.classList.add('active');
                    } else {
                        s.classList.remove('active');
                    }
                });
                
                // Update rating text
                ratingText.textContent = ratingMessages[rating];
            });
            
            star.addEventListener('mouseover', function() {
                const hoverRating = parseInt(this.dataset.rating);
                
                stars.forEach((s, index) => {
                    if (index < hoverRating) {
                        s.classList.add('hover');
                    } else {
                        s.classList.remove('hover');
                    }
                });
            });
            
            star.addEventListener('mouseout', function() {
                stars.forEach(s => s.classList.remove('hover'));
            });
        });
        
        // Form submission handling
        const reviewForm = document.querySelector('.review-form');
        reviewForm.addEventListener('submit', function(e) {
            if (parseInt(ratingInput.value) === 0) {
                e.preventDefault();
                ratingText.textContent = "Please select a rating";
                ratingText.style.color = "#EF4444";
            }
        });
    </script>
</body>
</html>