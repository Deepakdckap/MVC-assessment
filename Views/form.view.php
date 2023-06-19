<!DOCTYPE html>
<html>
<head>
    <title>Product Form</title>
    <style>
        /* Add some basic styling */
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        .main {
            width: 400px;
            border: 1px solid;
            padding: 10px;
            margin-left: 400px;
        }

        label, input, select {
            display: block;
            margin-bottom: 10px;
            padding: 8px;
            border-radius: 5px;

        }

        input[type="submit"] {
            background-color: royalblue;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            margin-left: 150px;
        }
        h1
        {
            text-align: center;
        }

        input[type="submit"]:hover {
            background-color: rebeccapurple;
        }
    </style>
</head>
<body>
<div class="main">
    <form action="/create" method="post" enctype="multipart/form-data" class="form">
        <h1>Product Form</h1>
        <label for="productName">Product Name:</label>
        <input type="text" placeholder="ProductName" name="productName" required>

        <label for="productImage">Product Image:</label>
         <input type="file" id="productImage" name="productImage" required>

         <label for="sku">SKU:</label>
        <input type="text" id="sku" name="sku" placeholder="should be in SKU00" required>

        <label for="price">Price:</label>
        <input type="number" id="price" name="price" placeholder="$" min="0" step="0.01" required>

         <label for="brand">Brand:</label>
         <select id="brand" name="brand" required>
             <option name="brand" value="1">Tata Motors</option>
             <option name="brand" value="2">Hyundai</option>
             <option name="brand" value="3">Kia</option>
             <option name="brand" value="4">Mahindra</option>
             <option name="brand" value="5">Renault</option>
        </select>
         <label for="manufactureDate">Manufacture Date:</label>
        <input type="date" id="manufactureDate" name="manufactureDate" max="2023-04-02">

        <label for="availableStock">Available Stock:</label>
        <input type="number" id="availableStock" name="availableStock" min="0">

        <input type="submit" value="Submit">
    </form>
</div>
</body>
</html>
