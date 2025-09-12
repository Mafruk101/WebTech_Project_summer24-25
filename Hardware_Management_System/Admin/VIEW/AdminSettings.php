<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Settings - Admin Panel</title>
  <link rel="stylesheet" href="../CSS/AdminSetting.css">
</head>
<body>

  <div class="container">
    <h1>Settings</h1>

    <!-- Profile Settings -->
    <div class="section">
      <h2>👤 Profile Settings</h2>
      <form>
        <label for="username">Name</label>
        <input type="text" id="username" value="Admin User">

        <label for="email">Email</label>
        <input type="email" id="email" value="admin@example.com">

        <label for="password">Change Password</label>
        <input type="password" id="password" placeholder="Enter new password">

        <button type="submit">Update Profile</button>
      </form>
    </div>

    <!-- Shop Settings -->
    <div class="section">
      <h2>🛍️ Shop Settings</h2>
      <form>
        <label for="shopName">Shop Name</label>
        <input type="text" id="shopName" value="My Computer Store">

        <label for="currency">Currency</label>
        <select id="currency">
          <option value="usd" selected>USD ($)</option>
          <option value="eur">EUR (€)</option>
          <option value="bdt">BDT (৳)</option>
        </select>

        <label for="tax">Tax Rate (%)</label>
        <input type="number" id="tax" value="10">

        <button type="submit">Save Shop Settings</button>
      </form>
    </div>

    <!-- Notification Settings -->
    <div class="section">
      <h2>🔔 Notification Settings</h2>
      <form>
        <div class="toggle">
          <input type="checkbox" id="emailNotify" checked>
          <label for="emailNotify">Email Notifications</label>
        </div>
        <div class="toggle">
          <input type="checkbox" id="smsNotify">
          <label for="smsNotify">SMS Notifications</label>
        </div>
        <button type="submit">Update Notifications</button>
      </form>
    </div>

  </div>

</body>
</html>