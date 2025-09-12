<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Manage Orders - Admin Panel</title>

  <link rel="stylesheet" href="../CSS/ManageCategory.css">
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