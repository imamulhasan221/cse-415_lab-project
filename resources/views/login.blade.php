<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login - Event Management</title>
  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      background: linear-gradient(135deg, #007bff, #6610f2);
      height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
    }
    .login-box {
      background: #fff;
      padding: 40px;
      width: 350px;
      border-radius: 10px;
      box-shadow: 0px 5px 20px rgba(0,0,0,0.2);
      text-align: center;
    }
    .login-box h2 {
      margin-bottom: 25px;
      color: #333;
    }
    .form-group {
      margin-bottom: 20px;
      text-align: left;
    }
    label {
      font-size: 14px;
      color: #555;
    }
    input {
      width: 100%;
      padding: 12px;
      margin-top: 5px;
      border: 1px solid #ccc;
      border-radius: 6px;
      font-size: 14px;
    }
    .btn {
      width: 100%;
      padding: 12px;
      background: #007bff;
      border: none;
      color: #fff;
      font-size: 16px;
      border-radius: 6px;
      cursor: pointer;
      transition: 0.3s;
    }
    .btn:hover {
      background: #0056b3;
    }
    .extra-links {
      margin-top: 15px;
    }
    .extra-links a {
      color: #007bff;
      text-decoration: none;
      font-size: 14px;
      transition: 0.3s;
    }
    .extra-links a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>
  <div class="login-box">
    <h2>Login</h2>
    <form action="{{ url('/dashboard') }}" method="POST">
      @csrf
      <div class="form-group">
        <label>Email</label>
        <input type="email" name="email" placeholder="Enter email" required>
      </div>
      <div class="form-group">
        <label>Password</label>
        <input type="password" name="password" placeholder="Enter password" required>
      </div>
      <button type="submit" class="btn">Login</button>
      <div class="extra-links">
        <a href="#">Forgot Password?</a> | 
        <a href="#">Register</a>
      </div>
    </form>
  </div>
</body>
</html>
