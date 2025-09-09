<!DOCTYPE html>
<html>
<head>

  <title>Login - Computer Shop</title>
 
</head>
<body>

<link rel="stylesheet" href="login.css">

  <div class="login-container">
    <h2>Login</h2>
    <form onsubmit="return loginUser()">
      <input type="text" id="username" placeholder="Username or Email" required>
      <input type="password" id="password" placeholder="Password" required>

      <!-- Role Selection -->
      <select id="role" required>
        <option value="">-- Select Role --</option>
        <option value="admin">Admin</option>
        <option value="customer">Customer</option>
      </select>

      <button type="submit">Login</button>
      <div class="extra-links">
        <p><a href="#">Forgot Password?</a></p>
      </div>
    </form>
  </div>

 

</body>
</html>