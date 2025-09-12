<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Dashboard</title>
<link rel="stylesheet" href="../CSS/AdminDashboard2.css">
</head>
<body>

  <div class="container">
    <h1>📊 Admin Dashboard</h1>

    <!-- Quick Stats -->
    <div class="cards">
      <div class="card">
        <h2>$25,400</h2>
        <p>Total Revenue</p>
      </div>
      <div class="card">
        <h2>320</h2>
        <p>Total Orders</p>
      </div>
      <div class="card">
        <h2>150</h2>
        <p>Active Customers</p>
      </div>
      <div class="card">
        <h2>85</h2>
        <p>Products in Stock</p>
      </div>
    </div>

    <!-- Recent Orders -->
    <div class="section">
      <h2>📦 Recent Orders</h2>
      <table>
        <thead>
          <tr>
            <th>Order ID</th>
            <th>Customer</th>
            <th>Total</th>
            <th>Status</th>
            <th>Date</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>#1001</td>
            <td>Raihan Karim</td>
            <td>$825</td>
            <td>Pending</td>
            <td>2025-08-25</td>
          </tr>
          <tr>
            <td>#1002</td>
            <td>Ashik Rahman</td>
            <td>$45</td>
            <td>Shipped</td>
            <td>2025-08-24</td>
          </tr>
          <tr>
            <td>#1003</td>
            <td>Mehedi Hasan</td>
            <td>$1200</td>
            <td>Delivered</td>
            <td>2025-08-23</td>
          </tr>
        </tbody>
      </table>
    </div>

    <!-- New Users -->
    <div class="section">
      <h2>👥 New Users</h2>
      <table>
        <thead>
          <tr>
            <th>User ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Role</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>#U005</td>
            <td>Nafis Ahmed</td>
            <td>nafis@example.com</td>
            <td>Customer</td>
          </tr>
          <tr>
            <td>#U006</td>
            <td>Shahriar Hossain</td>
            <td>shahriar@example.com</td>
            <td>Customer</td>
          </tr>
          <tr>
            <td>#U007</td>
            <td>Sadia Rahman</td>
            <td>sadia@example.com</td>
            <td>Admin</td>
          </tr>
        </tbody>
      </table>
    </div>

  </div>

</body>
</html>