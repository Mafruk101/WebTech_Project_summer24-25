<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Manage Categories - Admin Panel</title>
 
  <link rel="stylesheet" href="../CSS/ManageCategory.css">
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

