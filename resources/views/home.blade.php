<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>EventPlanner - Professional Event Management</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <style>
    :root {
      --primary: #6d28d9;
      --primary-dark: #5b21b6;
      --secondary: #f59e0b;
      --dark: #1f2937;
      --light: #f9fafb;
      --gray: #6b7280;
      --light-gray: #e5e7eb;
    }
        :root {
      --primary: #5F30E2;
      --primary-dark: #4A21C2;
      --secondary: #FF9F1C;
      --dark: #1A1A2E;
      --light: #F8F9FA;
      --gray: #6C757D;
      --light-gray: #E9ECEF;
    }
    
    body {
      margin: 0;
      font-family: 'Poppins', sans-serif;
      color: var(--dark);
    }
    
    /* Professional Navigation */
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
    
    .nav-menu {
      display: flex;
      align-items: center;
      gap: 40px;
    }
    
    .nav-links {
      display: flex;
      gap: 30px;
    }
    
    .nav-link {
      color: var(--dark);
      text-decoration: none;
      font-weight: 500;
      font-size: 15px;
      letter-spacing: 0.5px;
      position: relative;
      padding: 28px 0;
      display: inline-block;
    }
    
    .nav-link:after {
      content: '';
      position: absolute;
      bottom: 0;
      left: 0;
      width: 0;
      height: 3px;
      background: var(--primary);
      transition: width 0.3s ease;
    }
    
    .nav-link:hover:after,
    .nav-link.active:after {
      width: 100%;
    }
    
    .nav-link:hover {
      color: var(--primary);
    }
    
    .nav-actions {
      display: flex;
      align-items: center;
      gap: 20px;
    }
    
    .nav-button {
      padding: 10px 22px;
      border-radius: 6px;
      font-weight: 500;
      font-size: 14px;
      text-decoration: none;
      transition: all 0.3s ease;
      letter-spacing: 0.5px;
    }
    
    .nav-button.login {
      color: var(--dark);
      border: 1px solid var(--light-gray);
    }
    
    .nav-button.login:hover {
      background: var(--light);
      border-color: var(--gray);
    }
    
    .nav-button.primary {
      background: var(--primary);
      color: white;
      box-shadow: 0 4px 12px rgba(95, 48, 226, 0.2);
    }
    
    .nav-button.primary:hover {
      background: var(--primary-dark);
      transform: translateY(-2px);
      box-shadow: 0 6px 16px rgba(95, 48, 226, 0.3);
    }
    
    /* Mobile Menu Toggle (hidden by default) */
    .mobile-menu-toggle {
      display: none;
      background: none;
      border: none;
      font-size: 24px;
      cursor: pointer;
      color: var(--dark);
    }
    
    /* Dropdown Menu */
    .has-dropdown {
      position: relative;
    }
    
    .dropdown-menu {
      position: absolute;
      top: 100%;
      left: 50%;
      transform: translateX(-50%);
      background: white;
      border-radius: 8px;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
      padding: 15px 0;
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
      padding: 10px 25px;
      color: var(--dark);
      text-decoration: none;
      font-size: 14px;
      transition: all 0.2s ease;
    }
    
    .dropdown-menu a:hover {
      background: var(--light);
      color: var(--primary);
      padding-left: 30px;
    }
    
    /* Responsive Styles */
    @media (max-width: 1024px) {
      .nav-links {
        gap: 20px;
      }
    }
    
    @media (max-width: 768px) {
      .navbar {
        height: 70px;
        padding: 0 20px;
      }
      
      .nav-menu {
        position: fixed;
        top: 70px;
        left: -100%;
        width: 80%;
        height: calc(100vh - 70px);
        background: white;
        flex-direction: column;
        align-items: flex-start;
        padding: 30px;
        box-shadow: 2px 0 10px rgba(0, 0, 0, 0.1);
        transition: left 0.3s ease;
      }
      
      .nav-menu.active {
        left: 0;
      }
      
      .nav-links {
        flex-direction: column;
        gap: 15px;
        width: 100%;
      }
      
      .nav-link {
        padding: 12px 0;
        width: 100%;
      }
      
      .nav-actions {
        flex-direction: column;
        width: 100%;
        margin-top: 20px;
      }
      
      .nav-button {
        width: 100%;
        text-align: center;
      }
      
      .mobile-menu-toggle {
        display: block;
      }
      
      .has-dropdown .dropdown-menu {
        position: static;
        transform: none;
        box-shadow: none;
        opacity: 1;
        visibility: visible;
        padding: 0;
        margin-top: 10px;
        margin-left: 15px;
      }
    }
    
    body {
      margin: 0;
      font-family: 'Poppins', sans-serif;
      color: var(--dark);
      line-height: 1.6;
    }
    
    /* Header */
    .navbar {
      background: white;
      box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
      padding: 1.5rem 5%;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }
    
    .logo {
      font-size: 1.8rem;
      font-weight: 700;
      color: var(--primary);
      text-decoration: none;
      display: flex;
      align-items: center;
    }
    
    .logo-icon {
      margin-right: 10px;
      font-size: 2rem;
    }
    
    .nav-links {
      display: flex;
      gap: 2rem;
    }
    
    .nav-link {
      color: var(--dark);
      text-decoration: none;
      font-weight: 500;
      transition: color 0.3s;
      position: relative;
    }
    
    .nav-link:hover {
      color: var(--primary);
    }
    
    .nav-link:hover:after {
      width: 100%;
    }
    
    .nav-link:after {
      content: '';
      position: absolute;
      bottom: -5px;
      left: 0;
      width: 0;
      height: 2px;
      background: var(--primary);
      transition: width 0.3s;
    }
    
    .auth-buttons {
      display: flex;
      gap: 1rem;
    }
    
    .btn {
      padding: 0.6rem 1.5rem;
      border-radius: 6px;
      font-weight: 500;
      text-decoration: none;
      transition: all 0.3s;
    }
    
    .btn-primary {
      background: var(--primary);
      color: white;
    }
    
    .btn-primary:hover {
      background: var(--primary-dark);
      transform: translateY(-2px);
      box-shadow: 0 4px 6px rgba(109, 40, 217, 0.2);
    }
    
    .btn-outline {
      border: 1px solid var(--primary);
      color: var(--primary);
    }
    
    .btn-outline:hover {
      background: var(--primary);
      color: white;
    }
    
    /* Hero Section */
    .hero {
      background: linear-gradient(135deg, rgba(109,40,217,0.05) 0%, rgba(255,255,255,1) 100%);
      padding: 6rem 5% 8rem;
      text-align: center;
      position: relative;
      overflow: hidden;
    }
    
    .hero:before {
      content: '';
      position: absolute;
      top: -50px;
      right: -50px;
      width: 300px;
      height: 300px;
      background: radial-gradient(circle, rgba(109,40,217,0.1) 0%, rgba(255,255,255,0) 70%);
      z-index: 0;
    }
    
    .hero-content {
      max-width: 800px;
      margin: 0 auto;
      position: relative;
      z-index: 1;
    }
    
    .hero h1 {
      font-size: 3.2rem;
      font-weight: 700;
      margin-bottom: 1.5rem;
      line-height: 1.2;
      background: linear-gradient(to right, var(--primary), var(--secondary));
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
    }
    
    .hero p {
      font-size: 1.2rem;
      color: var(--gray);
      max-width: 600px;
      margin: 0 auto 2.5rem;
    }
    
    .cta-buttons {
      display: flex;
      gap: 1rem;
      justify-content: center;
    }
    
    .hero-image {
      margin-top: 4rem;
      border-radius: 12px;
      box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
      max-width: 100%;
      height: auto;
      border: 1px solid var(--light-gray);
    }
    
    /* Features */
    .features {
      padding: 6rem 5%;
      background: white;
    }
    
    .section-title {
      text-align: center;
      margin-bottom: 4rem;
    }
    
    .section-title h2 {
      font-size: 2.2rem;
      color: var(--dark);
      margin-bottom: 1rem;
    }
    
    .section-title p {
      color: var(--gray);
      max-width: 600px;
      margin: 0 auto;
    }
    
    .features-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
      gap: 2rem;
      max-width: 1200px;
      margin: 0 auto;
    }
    
    .feature-card {
      background: var(--light);
      border-radius: 10px;
      padding: 2rem;
      text-align: center;
      transition: transform 0.3s, box-shadow 0.3s;
    }
    
    .feature-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
    }
    
    .feature-icon {
      font-size: 2.5rem;
      color: var(--primary);
      margin-bottom: 1.5rem;
    }
    
    .feature-card h3 {
      font-size: 1.3rem;
      margin-bottom: 1rem;
    }
    
    .feature-card p {
      color: var(--gray);
    }
    
    /* Footer */
    footer {
      background: var(--dark);
      color: white;
      padding: 4rem 5% 2rem;
    }
    
    .footer-content {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
      gap: 2rem;
      max-width: 1200px;
      margin: 0 auto;
    }
    
    .footer-column h3 {
      font-size: 1.2rem;
      margin-bottom: 1.5rem;
      position: relative;
    }
    
    .footer-column h3:after {
      content: '';
      position: absolute;
      bottom: -8px;
      left: 0;
      width: 40px;
      height: 3px;
      background: var(--primary);
    }
    
    .footer-links {
      list-style: none;
      padding: 0;
    }
    
    .footer-links li {
      margin-bottom: 0.8rem;
    }
    
    .footer-links a {
      color: var(--light-gray);
      text-decoration: none;
      transition: color 0.3s;
    }
    
    .footer-links a:hover {
      color: white;
    }
    
    .copyright {
      text-align: center;
      margin-top: 3rem;
      padding-top: 2rem;
      border-top: 1px solid rgba(255,255,255,0.1);
      color: var(--gray);
    }
    
    @media (max-width: 768px) {
      .navbar {
        flex-direction: column;
        gap: 1rem;
      }
      
      .nav-links {
        flex-wrap: wrap;
        justify-content: center;
      }
      
      .hero h1 {
        font-size: 2.5rem;
      }
      
      .cta-buttons {
        flex-direction: column;
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
          <a href="{{ url('/') }}" class="nav-link active">Home</a>
          
          <div class="has-dropdown">
            <a href="{{ url('/solutions') }}" class="nav-link">Solutions</a>
            <div class="dropdown-menu">
              <a href="{{ url('/wedding_planning') }}">Wedding Planning</a>
              <a href="{{ url('/corporate') }}">Corporate Events</a>
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

  
  <!-- Hero Section -->
  <section class="hero">
    <div class="hero-content">
      <h1>Beautiful Event Planning Starts Here</h1>
      <p>The all-in-one platform to plan, organize, and execute unforgettable events with seamless collaboration.</p>
      
      <div class="cta-buttons">
        <a href="{{ url('/register') }}" class="btn btn-primary">Start Planning Free</a>
        <a href="{{ url('/demo') }}" class="btn btn-outline">Watch Demo</a>
      </div>
      
      <img src="https://images.unsplash.com/photo-1519671482749-fd09be7ccebf?ixlib=rb-1.2.1&auto=format&fit=crop&w=1000&q=80" alt="Event Planning Dashboard" class="hero-image">
    </div>
  </section>
  
  <!-- Features Section -->
  <section class="features">
    <div class="section-title">
      <h2>Everything You Need for Perfect Events</h2>
      <p>From intimate gatherings to grand celebrations, we've got you covered</p>
    </div>
    
    <div class="features-grid">
      <div class="feature-card">
        <div class="feature-icon">👰</div>
        <h3>Guest Management</h3>
        <p>Track RSVPs, meal preferences, and seating arrangements all in one place.</p>
      </div>
      
      <div class="feature-card">
        <div class="feature-icon">💰</div>
        <h3>Budget Tracking</h3>
        <p>Stay on top of expenses with real-time budget monitoring and reports.</p>
      </div>
      
      <div class="feature-card">
        <div class="feature-icon">📋</div>
        <h3>Checklists</h3>
        <p>Customizable checklists to keep your planning organized and on schedule.</p>
      </div>
      
      <div class="feature-card">
        <div class="feature-icon">🤝</div>
        <h3>Vendor Coordination</h3>
        <p>Manage all your vendors with contracts, payments, and communications.</p>
      </div>
      
      <div class="feature-card">
        <div class="feature-icon">📱</div>
        <h3>Mobile App</h3>
        <p>Access your event details anytime, anywhere with our mobile app.</p>
      </div>
      
      <div class="feature-card">
        <div class="feature-icon">🔄</div>
        <h3>Collaboration</h3>
        <p>Invite team members and work together in real-time.</p>
      </div>
    </div>
  </section>
  
  <!-- Footer -->
  <footer>
    <div class="footer-content">
      <div class="footer-column">
        <h3>EventPlanner</h3>
        <p>The complete event management platform for professionals and couples.</p>
      </div>
      
      <div class="footer-column">
        <h3>Product</h3>
        <ul class="footer-links">
          <li><a href="#">Features</a></li>
          <li><a href="#">Pricing</a></li>
          <li><a href="#">Templates</a></li>
          <li><a href="#">Integrations</a></li>
        </ul>
      </div>
      
      <div class="footer-column">
        <h3>Resources</h3>
        <ul class="footer-links">
          <li><a href="#">Blog</a></li>
          <li><a href="#">Guides</a></li>
          <li><a href="#">Webinars</a></li>
          <li><a href="#">Support</a></li>
        </ul>
      </div>
      
      <div class="footer-column">
        <h3>Company</h3>
        <ul class="footer-links">
          <li><a href="#">About Us</a></li>
          <li><a href="#">Careers</a></li>
          <li><a href="#">Contact</a></li>
          <li><a href="#">Press</a></li>
        </ul>
      </div>
    </div>
    
    <div class="copyright">
      &copy; 2023 EventPlanner. All rights reserved.
    </div>
    <script>
    // Mobile menu toggle functionality
    document.querySelector('.mobile-menu-toggle').addEventListener('click', function() {
      document.querySelector('.nav-menu').classList.toggle('active');
    });
  </script>
  </footer>
</body>
</html>