<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - EventPlanner Pro</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary: #4361ee;
            --primary-light: #e6e9ff;
            --secondary: #3f37c9;
            --success: #4cc9a0;
            --warning: #f8961e;
            --danger: #f94144;
            --light: #f8f9fa;
            --dark: #212529;
            --gray: #6c757d;
            --light-gray: #e9ecef;
            --white: #ffffff;
            --sidebar-width: 250px;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f5f7fa;
            display: flex;
            min-height: 100vh;
        }
        
        /* Sidebar Styles */
        .sidebar {
            width: var(--sidebar-width);
            background: var(--white);
            box-shadow: 2px 0 10px rgba(0,0,0,0.05);
            padding: 1.5rem 0;
            position: fixed;
            height: 100vh;
            transition: all 0.3s;
            z-index: 100;
        }
        
        .sidebar-header {
            padding: 0 1.5rem 1.5rem;
            border-bottom: 1px solid var(--light-gray);
            margin-bottom: 1rem;
        }
        
        .logo {
            display: flex;
            align-items: center;
            color: var(--primary);
            text-decoration: none;
            font-size: 1.5rem;
            font-weight: 700;
        }
        
        .logo i {
            margin-right: 0.75rem;
            font-size: 1.8rem;
        }
        
        .nav-menu {
            padding: 0 1rem;
        }
        
        .nav-title {
            color: var(--gray);
            font-size: 0.75rem;
            text-transform: uppercase;
            font-weight: 600;
            letter-spacing: 0.5px;
            margin: 1.5rem 0 0.5rem 1rem;
        }
        
        .nav-link {
            display: flex;
            align-items: center;
            padding: 0.75rem 1rem;
            color: var(--dark);
            text-decoration: none;
            border-radius: 6px;
            margin-bottom: 0.25rem;
            transition: all 0.3s;
        }
        
        .nav-link:hover, .nav-link.active {
            background: var(--primary-light);
            color: var(--primary);
        }
        
        .nav-link i {
            margin-right: 0.75rem;
            font-size: 1.1rem;
            width: 24px;
            text-align: center;
        }
        
        /* Main Content Styles */
        .main-content {
            flex: 1;
            margin-left: var(--sidebar-width);
            padding: 1.5rem;
            transition: all 0.3s;
        }
        
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1.5rem;
            padding-bottom: 1rem;
            border-bottom: 1px solid var(--light-gray);
        }
        
        .page-title h1 {
            font-size: 1.75rem;
            color: var(--dark);
        }
        
        .page-title p {
            color: var(--gray);
            font-size: 0.9rem;
        }
        
        .user-menu {
            display: flex;
            align-items: center;
        }
        
        .user-profile {
            display: flex;
            align-items: center;
            margin-left: 1rem;
        }
        
        .user-avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: var(--primary);
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 600;
            margin-right: 0.75rem;
        }
        
        .user-name {
            font-weight: 500;
        }
        
        .user-role {
            font-size: 0.8rem;
            color: var(--gray);
        }
        
        /* Dashboard Stats */
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
            gap: 1.5rem;
            margin-bottom: 1.5rem;
        }
        
        .stat-card {
            background: var(--white);
            border-radius: 10px;
            padding: 1.5rem;
            box-shadow: 0 4px 6px rgba(0,0,0,0.05);
            transition: transform 0.3s, box-shadow 0.3s;
        }
        
        .stat-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 15px rgba(0,0,0,0.1);
        }
        
        .stat-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-bottom: 1rem;
        }
        
        .stat-icon {
            width: 50px;
            height: 50px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
        }
        
        .stat-icon.primary {
            background: rgba(67, 97, 238, 0.1);
            color: var(--primary);
        }
        
        .stat-icon.success {
            background: rgba(76, 201, 160, 0.1);
            color: var(--success);
        }
        
        .stat-icon.warning {
            background: rgba(248, 150, 30, 0.1);
            color: var(--warning);
        }
        
        .stat-icon.danger {
            background: rgba(249, 65, 68, 0.1);
            color: var(--danger);
        }
        
        .stat-value {
            font-size: 1.75rem;
            font-weight: 600;
            margin-bottom: 0.25rem;
        }
        
        .stat-title {
            color: var(--gray);
            font-size: 0.9rem;
        }
        
        .stat-change {
            display: flex;
            align-items: center;
            font-size: 0.85rem;
            margin-top: 0.5rem;
        }
        
        .stat-change.positive {
            color: var(--success);
        }
        
        .stat-change.negative {
            color: var(--danger);
        }
        
        /* Events Section */
        .section {
            background: var(--white);
            border-radius: 10px;
            padding: 1.5rem;
            box-shadow: 0 4px 6px rgba(0,0,0,0.05);
            margin-bottom: 1.5rem;
        }
        
        .section-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1.5rem;
        }
        
        .section-title {
            font-size: 1.25rem;
            font-weight: 600;
            color: var(--dark);
        }
        
        .btn {
            padding: 0.5rem 1rem;
            border-radius: 6px;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s;
            border: none;
            font-size: 0.9rem;
            display: inline-flex;
            align-items: center;
        }
        
        .btn i {
            margin-right: 0.5rem;
        }
        
        .btn-primary {
            background: var(--primary);
            color: var(--white);
        }
        
        .btn-primary:hover {
            background: var(--secondary);
        }
        
        .btn-outline {
            background: transparent;
            border: 1px solid var(--primary);
            color: var(--primary);
        }
        
        .btn-outline:hover {
            background: var(--primary-light);
        }
        
        /* Events Table */
        .events-table {
            width: 100%;
            border-collapse: collapse;
        }
        
        .events-table th {
            text-align: left;
            padding: 0.75rem 1rem;
            color: var(--gray);
            font-weight: 500;
            font-size: 0.85rem;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            border-bottom: 1px solid var(--light-gray);
        }
        
        .events-table td {
            padding: 1rem;
            border-bottom: 1px solid var(--light-gray);
            vertical-align: middle;
        }
        
        .events-table tr:last-child td {
            border-bottom: none;
        }
        
        .event-info {
            display: flex;
            align-items: center;
        }
        
        .event-avatar {
            width: 40px;
            height: 40px;
            border-radius: 8px;
            background: var(--primary-light);
            color: var(--primary);
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 1rem;
            font-size: 1.1rem;
        }
        
        .event-name {
            font-weight: 500;
            margin-bottom: 0.25rem;
        }
        
        .event-date {
            font-size: 0.85rem;
            color: var(--gray);
        }
        
        .event-status {
            padding: 0.35rem 0.75rem;
            border-radius: 20px;
            font-size: 0.75rem;
            font-weight: 500;
        }
        
        .status-active {
            background: rgba(76, 201, 160, 0.1);
            color: var(--success);
        }
        
        .status-pending {
            background: rgba(248, 150, 30, 0.1);
            color: var(--warning);
        }
        
        .status-canceled {
            background: rgba(249, 65, 68, 0.1);
            color: var(--danger);
        }
        
        .action-btn {
            background: transparent;
            border: none;
            color: var(--gray);
            cursor: pointer;
            margin: 0 0.25rem;
            transition: color 0.3s;
        }
        
        .action-btn:hover {
            color: var(--primary);
        }
        
        /* Recent Activity */
        .activity-list {
            list-style: none;
        }
        
        .activity-item {
            display: flex;
            padding: 1rem 0;
            border-bottom: 1px solid var(--light-gray);
        }
        
        .activity-item:last-child {
            border-bottom: none;
        }
        
        .activity-icon {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: var(--primary-light);
            color: var(--primary);
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 1rem;
            font-size: 1rem;
        }
        
        .activity-content {
            flex: 1;
        }
        
        .activity-text {
            margin-bottom: 0.25rem;
        }
        
        .activity-time {
            font-size: 0.8rem;
            color: var(--gray);
        }
        
        /* Responsive Styles */
        @media (max-width: 992px) {
            .sidebar {
                transform: translateX(-100%);
            }
            
            .sidebar.active {
                transform: translateX(0);
            }
            
            .main-content {
                margin-left: 0;
            }
            
            .menu-toggle {
                display: block;
            }
        }
        
        @media (max-width: 768px) {
            .header {
                flex-direction: column;
                align-items: flex-start;
            }
            
            .user-menu {
                margin-top: 1rem;
                width: 100%;
                justify-content: space-between;
            }
        }
    </style>
</head>
<body>
    <!-- Sidebar Navigation -->
    <aside class="sidebar">
        <div class="sidebar-header">
            <a href="#" class="logo">
                <i class="fas fa-calendar-alt"></i>
                <span>EventPlanner</span>
            </a>
        </div>
        
        <nav class="nav-menu">
            <div class="nav-title">Main Menu</div>
            <a href="#" class="nav-link active">
                <i class="fas fa-home"></i>
                <span>Dashboard</span>
            </a>
            <a href="#" class="nav-link">
                <i class="fas fa-calendar-day"></i>
                <span>Events</span>
            </a>
            <a href="#" class="nav-link">
                <i class="fas fa-users"></i>
                <span>Clients</span>
            </a>
            <a href="#" class="nav-link">
                <i class="fas fa-file-invoice-dollar"></i>
                <span>Invoices</span>
            </a>
            
            <div class="nav-title">Management</div>
            <a href="#" class="nav-link">
                <i class="fas fa-tasks"></i>
                <span>Tasks</span>
            </a>
            <a href="#" class="nav-link">
                <i class="fas fa-chart-line"></i>
                <span>Reports</span>
            </a>
            <a href="#" class="nav-link">
                <i class="fas fa-cog"></i>
                <span>Settings</span>
            </a>
        </nav>
    </aside>
    
    <!-- Main Content -->
    <main class="main-content">
        <!-- Header -->
        <div class="header">
            <div class="page-title">
                <h1>Dashboard</h1>
                <p>Welcome back, {{ Auth::user()->name }}!</p>
            </div>
            
            <div class="user-menu">
                <button class="btn btn-outline">
                    <i class="fas fa-plus"></i>
                    New Event
                </button>
                
                <div class="user-profile">
                    <div class="user-avatar">
                        {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
                    </div>
                    <div>
                        <div class="user-name">{{ Auth::user()->name }}</div>
                        <div class="user-role">Event Manager</div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Stats Cards -->
        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-header">
                    <div>
                        <div class="stat-value">24</div>
                        <div class="stat-title">Total Events</div>
                    </div>
                    <div class="stat-icon primary">
                        <i class="fas fa-calendar"></i>
                    </div>
                </div>
                <div class="stat-change positive">
                    <i class="fas fa-arrow-up"></i>
                    <span>12% from last month</span>
                </div>
            </div>
            
            <div class="stat-card">
                <div class="stat-header">
                    <div>
                        <div class="stat-value">8</div>
                        <div class="stat-title">Upcoming Events</div>
                    </div>
                    <div class="stat-icon success">
                        <i class="fas fa-clock"></i>
                    </div>
                </div>
                <div class="stat-change positive">
                    <i class="fas fa-arrow-up"></i>
                    <span>3 new this week</span>
                </div>
            </div>
            
            <div class="stat-card">
                <div class="stat-header">
                    <div>
                        <div class="stat-value">$12,850</div>
                        <div class="stat-title">Total Revenue</div>
                    </div>
                    <div class="stat-icon warning">
                        <i class="fas fa-dollar-sign"></i>
                    </div>
                </div>
                <div class="stat-change negative">
                    <i class="fas fa-arrow-down"></i>
                    <span>5% from last month</span>
                </div>
            </div>
            
            <div class="stat-card">
                <div class="stat-header">
                    <div>
                        <div class="stat-value">56</div>
                        <div class="stat-title">Total Clients</div>
                    </div>
                    <div class="stat-icon danger">
                        <i class="fas fa-users"></i>
                    </div>
                </div>
                <div class="stat-change positive">
                    <i class="fas fa-arrow-up"></i>
                    <span>8 new this month</span>
                </div>
            </div>
        </div>
        
        <!-- Upcoming Events Section -->
        <div class="section">
            <div class="section-header">
                <h2 class="section-title">Upcoming Events</h2>
                <button class="btn btn-primary">
                    <i class="fas fa-plus"></i>
                    Add Event
                </button>
            </div>
            
            <div class="table-responsive">
                <table class="events-table">
                    <thead>
                        <tr>
                            <th>Event</th>
                            <th>Date</th>
                            <th>Location</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class="event-info">
                                    <div class="event-avatar">
                                        <i class="fas fa-ring"></i>
                                    </div>
                                    <div>
                                        <div class="event-name">Sarah & Michael Wedding</div>
                                        <div class="event-date">Jun 15, 2023 • 3:00 PM</div>
                                    </div>
                                </div>
                            </td>
                            <td>Jun 15, 2023</td>
                            <td>Grand Ballroom</td>
                            <td>
                                <span class="event-status status-active">Confirmed</span>
                            </td>
                            <td>
                                <button class="action-btn" title="View">
                                    <i class="fas fa-eye"></i>
                                </button>
                                <button class="action-btn" title="Edit">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <button class="action-btn" title="Delete">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="event-info">
                                    <div class="event-avatar">
                                        <i class="fas fa-briefcase"></i>
                                    </div>
                                    <div>
                                        <div class="event-name">Tech Conference 2023</div>
                                        <div class="event-date">Jun 22, 2023 • 9:00 AM</div>
                                    </div>
                                </div>
                            </td>
                            <td>Jun 22, 2023</td>
                            <td>Convention Center</td>
                            <td>
                                <span class="event-status status-pending">Pending</span>
                            </td>
                            <td>
                                <button class="action-btn" title="View">
                                    <i class="fas fa-eye"></i>
                                </button>
                                <button class="action-btn" title="Edit">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <button class="action-btn" title="Delete">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="event-info">
                                    <div class="event-avatar">
                                        <i class="fas fa-birthday-cake"></i>
                                    </div>
                                    <div>
                                        <div class="event-name">Emma's Birthday Party</div>
                                        <div class="event-date">Jun 28, 2023 • 6:00 PM</div>
                                    </div>
                                </div>
                            </td>
                            <td>Jun 28, 2023</td>
                            <td>Private Residence</td>
                            <td>
                                <span class="event-status status-active">Confirmed</span>
                            </td>
                            <td>
                                <button class="action-btn" title="View">
                                    <i class="fas fa-eye"></i>
                                </button>
                                <button class="action-btn" title="Edit">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <button class="action-btn" title="Delete">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        
        <!-- Recent Activity Section -->
        <div class="section">
            <div class="section-header">
                <h2 class="section-title">Recent Activity</h2>
                <button class="btn btn-outline">
                    View All
                </button>
            </div>
            
            <ul class="activity-list">
                <li class="activity-item">
                    <div class="activity-icon">
                        <i class="fas fa-check-circle"></i>
                    </div>
                    <div class="activity-content">
                        <div class="activity-text">
                            <strong>Sarah Johnson</strong> confirmed attendance for the <strong>Tech Conference 2023</strong>
                        </div>
                        <div class="activity-time">2 hours ago</div>
                    </div>
                </li>
                <li class="activity-item">
                    <div class="activity-icon">
                        <i class="fas fa-file-invoice"></i>
                    </div>
                    <div class="activity-content">
                        <div class="activity-text">
                            Invoice <strong>#INV-2023-056</strong> was paid by <strong>Michael Brown</strong>
                        </div>
                        <div class="activity-time">1 day ago</div>
                    </div>
                </li>
                <li class="activity-item">
                    <div class="activity-icon">
                        <i class="fas fa-calendar-plus"></i>
                    </div>
                    <div class="activity-content">
                        <div class="activity-text">
                            New event <strong>Corporate Retreat</strong> was scheduled for July 15-17
                        </div>
                        <div class="activity-time">2 days ago</div>
                    </div>
                </li>
                <li class="activity-item">
                    <div class="activity-icon">
                        <i class="fas fa-user-plus"></i>
                    </div>
                    <div class="activity-content">
                        <div class="activity-text">
                            <strong>3 new clients</strong> registered in the system
                        </div>
                        <div class="activity-time">3 days ago</div>
                    </div>
                </li>
            </ul>
        </div>
    </main>

    <script>
        // You can add JavaScript functionality here
        // For example, toggle sidebar on mobile
        document.addEventListener('DOMContentLoaded', function() {
            // Sample JavaScript for future functionality
            console.log('Dashboard loaded');
        });
    </script>
</body>
</html>