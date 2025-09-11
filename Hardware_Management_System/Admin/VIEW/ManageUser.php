<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Manage Users - Admin Panel</title>
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

    /* User Table */
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

    .active { background: #16a34a; color: #fff; }
    .inactive { background: #dc2626; color: #fff; }

    .actions button, .actions select {
      padding: 6px 10px;
      border: none;
      border-radius: 5px;
      margin: 3px;
      cursor: pointer;
      font-size: 13px;
    }

    .edit-btn { background: #2563eb; color: #fff; }
    .delete-btn { background: #dc2626; color: #fff; }
    .toggle-btn { background: #1e293b; color: #fff; }

    .edit-btn:hover { background: #1e40af; }
    .delete-btn:hover { background: #991b1b; }
    .toggle-btn:hover { background: #334155; }

    select {
      border: 1px solid #ccc;
      cursor: pointer;
    }
  </style>
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