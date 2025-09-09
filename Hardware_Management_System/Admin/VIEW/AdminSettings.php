<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Settings - Admin Panel</title>
  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      background: #f1f5f9;
    }

    .container {
      width: 80%;
      margin: 30px auto;
      background: #fff;
      padding: 30px;
      border-radius: 12px;
      box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    }

    h1 {
      text-align: center;
      color: #1e293b;
      margin-bottom: 25px;
    }

    h2 {
      color: #334155;
      margin-top: 25px;
      margin-bottom: 10px;
    }

    form {
      margin-bottom: 30px;
    }

    label {
      display: block;
      margin: 8px 0 4px;
      font-weight: bold;
      color: #475569;
    }

    input, select {
      width: 100%;
      padding: 10px;
      border: 1px solid #cbd5e1;
      border-radius: 8px;
      margin-bottom: 15px;
      font-size: 14px;
    }

    .toggle {
      display: flex;
      align-items: center;
      gap: 10px;
      margin: 10px 0;
    }

    button {
      background: #1e293b;
      color: #fff;
      border: none;
      padding: 12px 18px;
      border-radius: 8px;
      cursor: pointer;
      transition: 0.3s;
    }

    button:hover {
      background: #334155;
    }

    .section {
      border-bottom: 1px solid #e2e8f0;
      padding-bottom: 20px;
      margin-bottom: 20px;
    }
  </style>
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