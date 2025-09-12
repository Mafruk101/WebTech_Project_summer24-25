<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Manage Users - Admin Panel</title>
    <link rel="stylesheet" href="../CSS/ManageUser.css">

</head>
<body>

  <div class="container">
    <h1>Manage Users</h1>

    <!-- Users Table -->
    <table>
      <thead>
        <tr>
          <th>User ID</th>
          <th>Name</th>
          <th>Email</th>
          <th>Role</th>
          <th>Status</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>#U001</td>
          <td>Raihan Karim</td>
          <td>raihan@example.com</td>
          <td>
            <select onchange="updateRole(this)">
              <option value="customer" selected>Customer</option>
              <option value="admin">Admin</option>
            </select>
          </td>
          <td><span class="status active">Active</span></td>
          <td class="actions">
            <button class="toggle-btn" onclick="toggleStatus(this)">Deactivate</button>
            <button class="delete-btn" onclick="return confirmDelete()">Delete</button>
          </td>
        </tr>
        <tr>
          <td>#U002</td>
          <td>Ashik Rahman</td>
          <td>ashik@example.com</td>
          <td>
            <select onchange="updateRole(this)">
              <option value="customer">Customer</option>
              <option value="admin" selected>Admin</option>
            </select>
          </td>
          <td><span class="status inactive">Inactive</span></td>
          <td class="actions">
            <button class="toggle-btn" onclick="toggleStatus(this)">Activate</button>
            <button class="delete-btn" onclick="return confirmDelete()">Delete</button>
          </td>
        </tr>
      </tbody>
    </table>
  </div>

  <script>
    function confirmDelete() {
      return confirm("Are you sure you want to delete this user?");
    }

    function updateRole(select) {
      let role = select.value;
      alert("User role updated to: " + role);
    }

    function toggleStatus(button) {
      let row = button.closest("tr");
      let statusCell = row.querySelector(".status");

      if (statusCell.classList.contains("active")) {
        statusCell.className = "status inactive";
        statusCell.textContent = "Inactive";
        button.textContent = "Activate";
      } else {
        statusCell.className = "status active";
        statusCell.textContent = "Active";
        button.textContent = "Deactivate";
      }
    }
  </script>

</body>
</html>