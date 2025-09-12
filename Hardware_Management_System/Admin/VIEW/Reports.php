<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Reports - Admin Panel</title>

    <link rel="stylesheet" href="../CSS/Report.css">
</head>
<body>

  <div class="container">
    <h1>Reports Dashboard</h1>

    <!-- Summary Cards -->
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

    <!-- Orders Report Table -->
    <h2 style="color:#1e293b; margin:20px 0;">Orders Summary</h2>
    <table>
      <thead>
        <tr>
          <th>Status</th>
          <th>Count</th>
          <th>Revenue</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Pending</td>
          <td>50</td>
          <td>$3,200</td>
        </tr>
        <tr>
          <td>Shipped</td>
          <td>120</td>
          <td>$9,800</td>
        </tr>
        <tr>
          <td>Delivered</td>
          <td>140</td>
          <td>$12,000</td>
        </tr>
        <tr>
          <td>Cancelled</td>
          <td>10</td>
          <td>$400</td>
        </tr>
      </tbody>
    </table>
  </div>

</body>
</html>