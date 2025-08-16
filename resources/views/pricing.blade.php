<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pricing Plans | EventPlanner Pro</title>
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
        
        /* Navigation */
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
    gap: 1.5rem; /* 24px spacing between links */
}

/* Individual Navigation Links */
.nav-link {
    position: relative;
    color: #4A5568; /* Gray-700 */
    font-family: 'Poppins', sans-serif;
    font-size: 0.9375rem; /* 15px */
    font-weight: 500;
    text-decoration: none;
    padding: 0.5rem 0;
    transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
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
    left: 0;
    width: 0;
    height: 2px;
    background-color: #5F30E2;
    transition: width 0.3s ease;
}

.nav-link:hover::after,
.nav-link.active::after {
    width: 100%;
}

/* Focus State for Accessibility */
.nav-link:focus-visible {
    outline: 2px solid #5F30E2;
    outline-offset: 4px;
    border-radius: 4px;
}

/* Responsive Adjustments */
@media (max-width: 768px) {
    .nav-menu {
        position: fixed;
        top: 80px; /* Height of your navbar */
        left: 0;
        width: 100%;
        background: white;
        flex-direction: column;
        padding: 1.5rem;
        box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
        transform: translateY(-100%);
        opacity: 0;
        transition: transform 0.3s ease, opacity 0.2s ease;
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
        padding: 0.75rem 0;
        width: 100%;
    }
    
    .nav-link::after {
        display: none; /* Remove underline on mobile */
    }
    
    .nav-link:hover,
    .nav-link.active {
        background-color: rgba(95, 48, 226, 0.05);
        padding-left: 1rem;
        border-radius: 4px;
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
        
        /* Pricing Hero */
        .pricing-hero {
            background: linear-gradient(135deg, rgba(95, 48, 226, 0.03) 0%, rgba(255, 255, 255, 1) 100%);
            padding: 80px 5%;
            text-align: center;
        }
        
        .pricing-hero h1 {
            font-size: 42px;
            font-weight: 700;
            margin-bottom: 20px;
            color: var(--dark);
        }
        
        .pricing-hero p {
            font-size: 18px;
            color: var(--gray);
            max-width: 700px;
            margin: 0 auto 40px;
        }
        
        /* Toggle Switch */
        .billing-toggle {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 50px;
        }
        
        .toggle-label {
            font-weight: 500;
            color: var(--gray);
            margin: 0 15px;
        }
        
        .toggle-label.active {
            color: var(--primary);
            font-weight: 600;
        }
        
        .toggle-switch {
            position: relative;
            display: inline-block;
            width: 60px;
            height: 34px;
        }
        
        .toggle-switch input {
            opacity: 0;
            width: 0;
            height: 0;
        }
        
        .slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #ccc;
            transition: .4s;
            border-radius: 34px;
        }
        
        .slider:before {
            position: absolute;
            content: "";
            height: 26px;
            width: 26px;
            left: 4px;
            bottom: 4px;
            background-color: white;
            transition: .4s;
            border-radius: 50%;
        }
        
        input:checked + .slider {
            background-color: var(--primary);
        }
        
        input:checked + .slider:before {
            transform: translateX(26px);
        }
        
        /* Pricing Cards */
        .pricing-cards {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 5% 80px;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }
        
        .pricing-card {
            background: white;
            border-radius: 12px;
            padding: 40px 30px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
            position: relative;
            border: 1px solid var(--light-gray);
        }
        
        .pricing-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }
        
        .pricing-card.popular {
            border: 2px solid var(--primary);
        }
        
        .popular-badge {
            position: absolute;
            top: -15px;
            right: 20px;
            background: var(--primary);
            color: white;
            padding: 5px 15px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 600;
        }
        
        .pricing-card-header {
            margin-bottom: 25px;
        }
        
        .pricing-title {
            font-size: 22px;
            font-weight: 600;
            margin-bottom: 10px;
        }
        
        .pricing-price {
            font-size: 48px;
            font-weight: 700;
            color: var(--dark);
            margin-bottom: 5px;
        }
        
        .pricing-period {
            font-size: 16px;
            color: var(--gray);
        }
        
        .pricing-features {
            list-style: none;
            margin-bottom: 30px;
        }
        
        .pricing-features li {
            padding: 10px 0;
            color: var(--gray);
            font-size: 15px;
            position: relative;
            padding-left: 25px;
        }
        
        .pricing-features li:before {
            content: "\f00c";
            font-family: "Font Awesome 6 Free";
            font-weight: 900;
            position: absolute;
            left: 0;
            color: var(--success);
        }
        
        .pricing-features li.disabled:before {
            content: "\f00d";
            color: var(--gray);
            opacity: 0.5;
        }
        
        .pricing-button {
            display: block;
            text-align: center;
            padding: 14px 20px;
            border-radius: 8px;
            font-weight: 600;
            text-decoration: none;
            transition: all 0.3s ease;
        }
        
        .pricing-button.primary {
            background: var(--primary);
            color: white;
            box-shadow: 0 4px 14px rgba(95, 48, 226, 0.3);
        }
        
        .pricing-button.primary:hover {
            background: var(--primary-dark);
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(95, 48, 226, 0.4);
        }
        
        .pricing-button.outline {
            border: 1px solid var(--primary);
            color: var(--primary);
        }
        
        .pricing-button.outline:hover {
            background: rgba(95, 48, 226, 0.05);
        }
        
        /* Payment Modal */
        .modal {
            display: none;
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            overflow-y: auto;
        }
        
        .modal-content {
            background-color: white;
            margin: 5% auto;
            padding: 40px;
            border-radius: 12px;
            width: 90%;
            max-width: 600px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            position: relative;
        }
        
        .close-modal {
            position: absolute;
            top: 20px;
            right: 20px;
            font-size: 24px;
            color: var(--gray);
            cursor: pointer;
            transition: color 0.3s;
        }
        
        .close-modal:hover {
            color: var(--dark);
        }
        
        .modal-header {
            margin-bottom: 30px;
        }
        
        .modal-header h2 {
            font-size: 28px;
            margin-bottom: 10px;
        }
        
        .modal-header p {
            color: var(--gray);
        }
        
        .payment-methods {
            display: flex;
            gap: 15px;
            margin-bottom: 25px;
        }
        
        .payment-method {
            flex: 1;
            text-align: center;
            padding: 15px;
            border: 1px solid var(--light-gray);
            border-radius: 8px;
            cursor: pointer;
            transition: all 0.3s;
        }
        
        .payment-method:hover {
            border-color: var(--primary);
        }
        
        .payment-method.active {
            border-color: var(--primary);
            background: rgba(95, 48, 226, 0.05);
        }
        
        .payment-method i {
            font-size: 32px;
            margin-bottom: 10px;
            color: var(--gray);
        }
        
        .payment-method.active i {
            color: var(--primary);
        }
        
        .payment-method span {
            display: block;
            font-size: 14px;
            font-weight: 500;
        }
        
        .payment-form {
            margin-top: 20px;
        }
        
        .form-group {
            margin-bottom: 20px;
        }
        
        .form-group label {
            display: block;
            font-size: 14px;
            font-weight: 500;
            margin-bottom: 8px;
            color: var(--dark);
        }
        
        .form-control {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid var(--light-gray);
            border-radius: 8px;
            font-size: 15px;
            font-family: 'Poppins', sans-serif;
            transition: all 0.3s;
        }
        
        .form-control:focus {
            outline: none;
            border-color: var(--primary);
            box-shadow: 0 0 0 3px rgba(95, 48, 226, 0.1);
        }
        
        .form-row {
            display: flex;
            gap: 15px;
        }
        
        .form-row .form-group {
            flex: 1;
        }
        
        .submit-payment {
            width: 100%;
            padding: 15px;
            background: var(--primary);
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s;
            margin-top: 10px;
        }
        
        .submit-payment:hover {
            background: var(--primary-dark);
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(95, 48, 226, 0.3);
        }
        
        /* Responsive */
        @media (max-width: 768px) {
            .pricing-hero h1 {
                font-size: 36px;
            }
            
            .pricing-cards {
                grid-template-columns: 1fr;
            }
            
            .modal-content {
                padding: 30px 20px;
                width: 95%;
            }
            
            .payment-methods {
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
            
            <div class="nav-menu">
                <div class="nav-links">
                    <a href="{{ url('/') }}" class="nav-link">Home</a>
                    <a href="{{ url('/features') }}" class="nav-link">Features</a>
                    <a href="{{ url('/pricing') }}" class="nav-link active">Pricing</a>
                    <a href="{{ url('/contact') }}" class="nav-link">Contact</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Pricing Hero -->
    <section class="pricing-hero">
        <h1>Simple, Transparent Pricing</h1>
        <p>Choose the perfect plan for your event management needs. No hidden fees, cancel anytime.</p>
    </section>

    <!-- Billing Toggle -->
    <div class="billing-toggle">
        <span class="toggle-label active" id="monthly-label">Monthly</span>
        <label class="toggle-switch">
            <input type="checkbox" id="billing-toggle">
            <span class="slider"></span>
        </label>
        <span class="toggle-label" id="yearly-label">Yearly (Save 20%)</span>
    </div>

    <!-- Pricing Cards -->
    <div class="pricing-cards">
        <!-- Basic Plan -->
        <div class="pricing-card">
            <div class="pricing-card-header">
                <h3 class="pricing-title">Starter</h3>
                <div class="pricing-price" data-monthly="$29" data-yearly="$23">$29</div>
                <span class="pricing-period" data-monthly="per month" data-yearly="per month, billed yearly">per month</span>
            </div>
            <ul class="pricing-features">
                <li>Up to 50 guests</li>
                <li>Basic event templates</li>
                <li>Email support</li>
                <li>Budget tracking</li>
                <li>Mobile access</li>
                <li class="disabled">Vendor management</li>
                <li class="disabled">Team collaboration</li>
                <li class="disabled">Advanced analytics</li>
            </ul>
            <a href="#" class="pricing-button outline" data-plan="starter">Get Started</a>
        </div>
        
        <!-- Popular Plan -->
        <div class="pricing-card popular">
            <div class="popular-badge">Most Popular</div>
            <div class="pricing-card-header">
                <h3 class="pricing-title">Professional</h3>
                <div class="pricing-price" data-monthly="$79" data-yearly="$63">$79</div>
                <span class="pricing-period" data-monthly="per month" data-yearly="per month, billed yearly">per month</span>
            </div>
            <ul class="pricing-features">
                <li>Up to 200 guests</li>
                <li>Premium templates</li>
                <li>Priority support</li>
                <li>Advanced analytics</li>
                <li>Vendor management</li>
                <li>Team collaboration (up to 5 users)</li>
                <li>Custom branding</li>
                <li class="disabled">Dedicated account manager</li>
            </ul>
            <a href="#" class="pricing-button primary" data-plan="professional">Get Started</a>
        </div>
        
        <!-- Enterprise Plan -->
        <div class="pricing-card">
            <div class="pricing-card-header">
                <h3 class="pricing-title">Enterprise</h3>
                <div class="pricing-price" data-monthly="$199" data-yearly="$159">$199</div>
                <span class="pricing-period" data-monthly="per month" data-yearly="per month, billed yearly">per month</span>
            </div>
            <ul class="pricing-features">
                <li>Unlimited guests</li>
                <li>Custom templates</li>
                <li>24/7 support</li>
                <li>API access</li>
                <li>Advanced analytics</li>
                <li>Team collaboration (unlimited users)</li>
                <li>White-label options</li>
                <li>Dedicated account manager</li>
            </ul>
            <a href="#" class="pricing-button outline" data-plan="enterprise">Contact Sales</a>
        </div>
    </div>

    <!-- Payment Modal -->
    <div id="payment-modal" class="modal">
        <div class="modal-content">
            <span class="close-modal">&times;</span>
            <div class="modal-header">
                <h2>Complete Your Purchase</h2>
                <p>You're subscribing to the <span id="selected-plan">Professional</span> plan</p>
                <p><strong id="plan-price">$79/month</strong></p>
            </div>
            
            <div class="payment-methods">
                <div class="payment-method active" data-method="credit">
                    <i class="far fa-credit-card"></i>
                    <span>Credit Card</span>
                </div>
                <div class="payment-method" data-method="paypal">
                    <i class="fab fa-paypal"></i>
                    <span>PayPal</span>
                </div>
                <div class="payment-method" data-method="bank">
                    <i class="fas fa-university"></i>
                    <span>Bank Transfer</span>
                </div>
            </div>
            
            <div class="payment-form" id="credit-card-form">
                <div class="form-group">
                    <label for="card-name">Name on Card</label>
                    <input type="text" id="card-name" class="form-control" required>
                </div>
                
                <div class="form-group">
                    <label for="card-number">Card Number</label>
                    <input type="text" id="card-number" class="form-control" placeholder="1234 5678 9012 3456" required>
                </div>
                
                <div class="form-row">
                    <div class="form-group">
                        <label for="card-expiry">Expiry Date</label>
                        <input type="text" id="card-expiry" class="form-control" placeholder="MM/YY" required>
                    </div>
                    <div class="form-group">
                        <label for="card-cvc">CVC</label>
                        <input type="text" id="card-cvc" class="form-control" placeholder="123" required>
                    </div>
                </div>
                
                <button type="submit" class="submit-payment">Pay $<span id="payment-amount">79</span></button>
            </div>
            
            <div class="payment-form" id="paypal-form" style="display: none;">
                <p>You will be redirected to PayPal to complete your payment.</p>
                <button type="button" class="submit-payment">Continue to PayPal</button>
            </div>
            
            <div class="payment-form" id="bank-form" style="display: none;">
                <div class="form-group">
                    <label>Bank Transfer Details</label>
                    <p style="margin-top: 10px;">
                        Account Name: EventPlanner Inc.<br>
                        Account Number: 123456789<br>
                        Routing Number: 987654321<br>
                        Bank: International Bank<br><br>
                        Please include your email address as reference.
                    </p>
                </div>
                <button type="button" class="submit-payment">I've Sent the Payment</button>
            </div>
        </div>
    </div>

    <!-- Footer would go here (use the same footer from previous examples) -->

    <script>
        // Billing Toggle Functionality
        const billingToggle = document.getElementById('billing-toggle');
        const monthlyLabel = document.getElementById('monthly-label');
        const yearlyLabel = document.getElementById('yearly-label');
        
        billingToggle.addEventListener('change', function() {
            const isYearly = this.checked;
            
            // Update toggle labels
            monthlyLabel.classList.toggle('active', !isYearly);
            yearlyLabel.classList.toggle('active', isYearly);
            
            // Update pricing display
            document.querySelectorAll('.pricing-price').forEach(price => {
                price.textContent = isYearly ? price.dataset.yearly : price.dataset.monthly;
            });
            
            document.querySelectorAll('.pricing-period').forEach(period => {
                period.textContent = isYearly ? period.dataset.yearly : period.dataset.monthly;
            });
        });
        
        // Plan Selection and Modal
        const modal = document.getElementById('payment-modal');
        const closeModal = document.querySelector('.close-modal');
        const planButtons = document.querySelectorAll('[data-plan]');
        const selectedPlanElement = document.getElementById('selected-plan');
        const planPriceElement = document.getElementById('plan-price');
        const paymentAmountElement = document.getElementById('payment-amount');
        
        planButtons.forEach(button => {
            button.addEventListener('click', function(e) {
                e.preventDefault();
                const plan = this.dataset.plan;
                const isYearly = billingToggle.checked;
                
                // Set plan details in modal
                selectedPlanElement.textContent = this.closest('.pricing-card').querySelector('.pricing-title').textContent;
                
                const price = this.closest('.pricing-card').querySelector('.pricing-price').textContent;
                const period = this.closest('.pricing-card').querySelector('.pricing-period').textContent;
                
                planPriceElement.textContent = `${price}${period.includes('yearly') ? '' : '/' + period.split(' ')[0]}`;
                paymentAmountElement.textContent = price.replace('$', '');
                
                // Show modal
                modal.style.display = 'block';
                document.body.style.overflow = 'hidden';
            });
        });
        
        // Close modal
        closeModal.addEventListener('click', function() {
            modal.style.display = 'none';
            document.body.style.overflow = 'auto';
        });
        
        window.addEventListener('click', function(e) {
            if (e.target === modal) {
                modal.style.display = 'none';
                document.body.style.overflow = 'auto';
            }
        });
        
        // Payment Method Selection
        const paymentMethods = document.querySelectorAll('.payment-method');
        const paymentForms = {
            'credit': document.getElementById('credit-card-form'),
            'paypal': document.getElementById('paypal-form'),
            'bank': document.getElementById('bank-form')
        };
        
        paymentMethods.forEach(method => {
            method.addEventListener('click', function() {
                // Update active state
                paymentMethods.forEach(m => m.classList.remove('active'));
                this.classList.add('active');
                
                // Show corresponding form
                const method = this.dataset.method;
                Object.values(paymentForms).forEach(form => form.style.display = 'none');
                paymentForms[method].style.display = 'block';
            });
        });
        
        // Form submission (simulated)
        document.querySelectorAll('.submit-payment').forEach(button => {
            button.addEventListener('click', function() {
                // In a real app, this would process the payment
                alert('Payment processed successfully! Thank you for your subscription.');
                modal.style.display = 'none';
                document.body.style.overflow = 'auto';
            });
        });
        
        // Credit card input formatting
        document.getElementById('card-number').addEventListener('input', function(e) {
            this.value = this.value.replace(/\s/g, '').replace(/(\d{4})/g, '$1 ').trim();
        });
        
        document.getElementById('card-expiry').addEventListener('input', function(e) {
            this.value = this.value.replace(/\D/g, '').replace(/(\d{2})(\d)/, '$1/$2').substr(0, 5);
        });
    </script>
</body>
</html>