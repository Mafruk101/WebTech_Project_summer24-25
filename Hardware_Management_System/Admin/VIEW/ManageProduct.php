<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Manage Products - Admin Panel</title>
  <link rel="stylesheet" href="../CSS/ManageProduct.css">

</head>
<body>

  <div class="container">
    <h1>Manage Products</h1>

    <!-- Add Product Form -->
    <div class="form-box">
      <h2>Add New Product</h2>
      <form>
        <input type="text" placeholder="Product Name" required>
        <input type="number" placeholder="Price" required>
        <select required>
          <option value="">Select Category</option>
          <option value="laptop">Laptop</option>
          <option value="desktop">Desktop</option>
          <option value="accessory">Accessory</option>
        </select>
        <input type="number" placeholder="Stock Quantity" required>
        <textarea placeholder="Product Description"></textarea>
        <input type="file" required>
        <button type="submit">Add Product</button>
      </form>
    </div>

    <!-- Product Table -->
    <table>
      <thead>
        <tr>
          <th>ID</th>
          <th>Product</th>
          <th>Price</th>
          <th>Category</th>
          <th>Stock</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>101</td>
          <td>Lenovo Laptop</td>
          <td>$800</td>
          <td>Laptop</td>
          <td>15</td>
          <td class="actions">
            <button class="edit-btn">Edit</button>
            <button class="delete-btn" onclick="return confirmDelete()">Delete</button>
          </td>
        </tr>
        <tr>
          <td>102</td>
          <td>Gaming Mouse</td>
          <td>$25</td>
          <td>Accessory</td>
          <td>50</td>
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
      return confirm("Are you sure you want to delete this product?");
    }
  </script>

</body>
</html>