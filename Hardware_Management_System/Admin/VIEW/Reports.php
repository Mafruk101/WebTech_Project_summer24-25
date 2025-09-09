<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Reports - Admin Panel</title>
  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      background: #f1f5f9;
    }

    .container {
      width: 95%;
      margin: 30px auto;
    }

    h1 {
      text-align: center;
      color: #1e293b;
      margin-bottom: 20px;
    }

    /* Dashboard Cards */
    .cards {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
      gap: 20px;
      margin-bottom: 40px;
    }

    .card {
      background: #fff;
      padding: 20px;
      border-radius: 12px;
      text-align: center;
      box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    }

    .card h2 {
      margin: 10px 0;
      font-size: 22px;
      color: #1e293b;
    }

    .card p {
      font-size: 16px;
      color: #475569;
    }

    /* Report Table */
    table {
      width: 100%;
      border-collapse: collapse;
      background: #fff;
      border-radius: 10px;
      overflow: hidden;
      box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    }

    table th, table td {
      padding: 12px 15px;
      text-align: center;
      border-bottom: 1px solid #ddd;
    }

    table th {
      background: #1e293b;
      color: #fff;
    }

    table tr:hover {
      background: #f9fafb;
    }
  </style>
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