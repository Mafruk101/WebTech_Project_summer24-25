<!DOCTYPE html>
<html lang="en">
<head>

  <title>Customer Registration - Computer Shop</title>
   
  
</head>
<body>
   
<link rel="stylesheet" href="CustomerRegister.css">
    
  <div class="register-container">
    <h2>Customer Registration</h2>
    <form action="customer-dashboard.html" method="post">

      <label for="fullname">Full Name</label>
      <input type="text" id="fullname" name="fullname" placeholder="John Doe" required>

      <label for="email">Email</label>
      <input type="email" id="email" name="email" placeholder="example@gmail.com" required>

      <label for="password">Password</label>
      <input type="password" id="password" name="password" placeholder="Enter password" required>

      <label for="confirm-password">Confirm Password</label>
      <input type="password" id="confirm-password" name="confirm-password" placeholder="Confirm password" required>

      <label for="phone">Phone Number</label>
      <input type="tel" id="phone" name="phone" placeholder="+880 1XXXXXXXXX" required>

      <label for="address">Address</label>
      <textarea id="address" name="address" placeholder="Your Address" rows="3" required></textarea>

      <div class="checkbox-container">
        <input type="checkbox" id="newsletter" name="newsletter">
        <label for="newsletter">Subscribe as New</label>
      </div>

      <button type="submit">Register</button>

      <div class="extra-links">
        <p>Already have an account? <a href="login.html">Login here</a></p>
      </div>

    </form>
  </div>

</body>
</html>