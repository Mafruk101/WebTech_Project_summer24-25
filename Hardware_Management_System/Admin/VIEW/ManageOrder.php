<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Manage Orders - Admin Panel</title>
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
    }

    /* Orders Table */
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

    .status {
      font-weight: bold;
      padding: 5px 10px;
      border-radius: 6px;
    }

    .pending { background: #facc15; color: #1e293b; }
    .shipped { background: #3b82f6; color: #fff; }
    .delivered { background: #16a34a; color: #fff; }
    .cancelled { background: #dc2626; color: #fff; }

    .actions button, .actions select {
      padding: 6px 10px;
      border: none;
      border-radius: 5px;
      margin: 3px;
      cursor: pointer;
      font-size: 13px;
    }

    .view-btn { background: #2563eb; color: #fff; }
    .delete-btn { background: #dc2626; color: #fff; }
    .update-btn { background: #1e293b; color: #fff; }

    .view-btn:hover { background: #1e40af; }
    .delete-btn:hover { background: #991b1b; }
    .update-btn:hover { background: #334155; }

    select {
      border: 1px solid #ccc;
      cursor: pointer;
    }
  </style>
</head>
<body>

  <div class="container">
    <h1>Manage Orders</h1>

    <!-- Orders Table -->
    <table>
      <thead>
        <tr>
          <th>Order ID</th>
          <th>Customer</th>
          <th>Products</th>
          <th>Total</th>
          <th>Status</th>
          <th>Date</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>#1001</td>
          <td>Raihan Karim</td>
          <td>Laptop, Mouse</td>
          <td>$825</td>
          <td><span class="status pending">Pending</span></td>
          <td>2025-08-26</td>
          <td class="actions">
            <select onchange="updateStatus(this)">
              <option value="pending" selected>Pending</option>
              <option value="shipped">Shipped</option>
              <option value="delivered">Delivered</option>
              <option value="cancelled">Cancelled</option>
            </select>
            <button class="view-btn">View</button>
            <button class="delete-btn" onclick="return confirmDelete()">Delete</button>
          </td>
        </tr>
        <tr>
          <td>#1002</td>
          <td>Ashik Rahman</td>
          <td>Keyboard</td>
          <td>$45</td>
          <td><span class="status shipped">Shipped</span></td>
          <td>2025-08-25</td>
          <td class="actions">
            <select onchange="updateStatus(this)">
              <option value="pending">Pending</option>
              <option value="shipped" selected>Shipped</option>
              <option value="delivered">Delivered</option>
              <option value="cancelled">Cancelled</option>
            </select>
            <button class="view-btn">View</button>
            <button class="delete-btn" onclick="return confirmDelete()">Delete</button>
          </td>
        </tr>
      </tbody>
    </table>
  </div>

  <script>
    function confirmDelete() {
      return confirm("Are you sure you want to delete this order?");
    }

    function updateStatus(select) {
      let status = select.value;
      let statusCell = select.closest("tr").querySelector(".status");

      statusCell.className = "status " + status; // reset classes
      statusCell.textContent = status.charAt(0).toUpperCase() + status.slice(1);
    }
  </script>

</body>
</html>