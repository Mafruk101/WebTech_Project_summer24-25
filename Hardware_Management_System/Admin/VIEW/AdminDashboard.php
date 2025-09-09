<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Computer Shop Admin Panel</title>

</head>
<body>

<link rel="stylesheet" href="AdminDashboard.css">

  <!-- Sidebar -->
  <div class="sidebar">
    <h2>Admin Panel</h2>
    <a href="AdminDashboard2.php">Dashboard</a>
    <a href="ManageProduct.php">Manage Products</a>
    <a href="ManageCategory.php">Manage Categories</a>
    <a href="ManageOrder.php">Manage Orders</a>
    <a href="ManageUser.php">Manage Users</a>
    <a href="Reports.php">Reports</a>
    <a href="AdminSettings.php">Settings</a>
    <a href="Login.php">Logout</a>
  </div>

  <!-- Main Content -->
  <div class="main-content">

    <!-- Topbar -->
    <div class="topbar">
      <h2>Dashboard</h2>
      <input type="text" placeholder="Search...">
    </div>

    <!-- Dashboard Cards -->
    <div class="cards">
      <div class="card">
        <h3>Total Sales</h3>
        <p>$25,000</p>
      </div>
      <div class="card">
        <h3>Total Orders</h3>
        <p>320</p>
      </div>
      <div class="card">
        <h3>Total Customers</h3>
        <p>150</p>
      </div>
      <div class="card">
        <h3>Products</h3>
        <p>85</p>
      </div>
    </div>

    <!-- Product Table -->
    <h3>Recent Orders</h3>
    <table>
      <tr>
        <th>Order ID</th>
        <th>Customer</th>
        <th>Total</th>
        <th>Status</th>
        <th>Action</th>
      </tr>
      <tr>
        <td>#101</td>
        <td>John Doe</td>
        <td>$1200</td>
        <td>Shipped</td>
        <td><button>View</button></td>
      </tr>
      <tr>
        <td>#102</td>
        <td>Jane Smith</td>
        <td>$950</td>
        <td>Pending</td>
        <td><button>View</button></td>
      </tr>
    </table>

    <!-- Add Product Form -->
    <h3>Add New Product</h3>
    <form>
      <input type="text" placeholder="Product Name" required>
      <input type="number" placeholder="Price" required>
      <select>
        <option>Select Category</option>
        <option>Laptops</option>
        <option>Desktops</option>
        <option>Accessories</option>
      </select>
      <textarea placeholder="Product Description"></textarea>
      <input type="file" required>
      <button type="submit">Add Product</button>
    </form>
  </div>

</body>
</html>