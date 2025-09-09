<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Manage Categories - Admin Panel</title>
  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      background: #f1f5f9;
    }

    .container {
      width: 90%;
      margin: 30px auto;
    }

    h1 {
      text-align: center;
      color: #1e293b;
    }

    /* Add Category Form */
    .form-box {
      background: #fff;
      padding: 20px;
      margin-bottom: 30px;
      border-radius: 10px;
      box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    }

    .form-box h2 {
      margin-bottom: 15px;
      color: #334155;
    }

    .form-box input, .form-box textarea, .form-box button {
      width: 100%;
      padding: 10px;
      margin: 8px 0;
      border-radius: 8px;
      border: 1px solid #ccc;
      font-size: 14px;
    }

    .form-box button {
      background: #1e293b;
      color: #fff;
      border: none;
      cursor: pointer;
      transition: 0.3s;
    }

    .form-box button:hover {
      background: #334155;
    }

    /* Category Table */
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

    .actions button {
      padding: 6px 12px;
      border: none;
      border-radius: 5px;
      margin: 0 5px;
      cursor: pointer;
      font-size: 13px;
    }

    .edit-btn {
      background: #2563eb;
      color: #fff;
    }

    .delete-btn {
      background: #dc2626;
      color: #fff;
    }

    .edit-btn:hover { background: #1e40af; }
    .delete-btn:hover { background: #991b1b; }

  </style>
</head>
<body>

  <div class="container">
    <h1>Manage Categories</h1>

    <!-- Add Category Form -->
    <div class="form-box">
      <h2>Add New Category</h2>
      <form>
        <input type="text" placeholder="Category Name" required>
        <textarea placeholder="Category Description" rows="3"></textarea>
        <button type="submit">Add Category</button>
      </form>
    </div>

    <!-- Category Table -->
    <table>
      <thead>
        <tr>
          <th>ID</th>
          <th>Category Name</th>
          <th>Description</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>Laptops</td>
          <td>Portable computers for work and gaming</td>
          <td class="actions">
            <button class="edit-btn">Edit</button>
            <button class="delete-btn" onclick="return confirmDelete()">Delete</button>
          </td>
        </tr>
        <tr>
          <td>2</td>
          <td>Accessories</td>
          <td>Computer peripherals like mouse, keyboards, and more</td>
          <td class="actions">
            <button class="edit-btn">Edit</button>
            <button class="delete-btn" onclick="return confirmDelete()">Delete</button>
          </td>
        </tr>
      </tbody>
    </table>
  </div>

  <script>
    function confirmDelete() {
      return confirm("Are you sure you want to delete this category?");
    }
  </script>

</body>
</html>

