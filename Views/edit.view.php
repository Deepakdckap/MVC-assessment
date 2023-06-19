<!DOCTYPE html>
<html>
<head>
    <title>Edit Product </title>
    <style>
        /* Add some basic styling */
        body {
            font-family: Arial, sans-serif;
            /*margin: 20px;*/
        }

        .main {
            width: 400px;
            border: solid 2px;
            margin-left: 400px;
            padding: 10px;
        }

        label, input, select {
            display: block;
            margin-bottom: 10px;
            padding: 8px;
            border-radius: 5px;
        }

        button[type="submit"] {
            background-color: royalblue;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 10px;
            cursor: pointer;
        }
        h1{
            text-align: center;
        }

        button[type="submit"]:hover {
            background-color: rebeccapurple;
        }
    </style>
</head>
<body>
<div class="main">
    <!-- This variable comes from UC edit() function -->
    <?php foreach ($productOne as $product): ?>
    <form action="/update" method="post" enctype="multipart/form-data" class="form">
        <h1>Edit Products</h1>
        <label for="productName">Product Name:</label>
        <input type="text" id="productName" name="productName" value="<?= $product->productName ?>" required>

        <label for="productImage">Product Image:</label>
        <input type="file" id="productImage" name="productImage" value="<?= $product->productImages ?>" required>

        <label for="sku">SKU:</label>
        <input type="text" id="sku" name="sku" value="<?= $product->sku ?>" required>

        <label for="price">Price:</label>
        <input type="number" id="price" name="price" min="0" step="0.01" value="<?= $product->price ?>" required>

        <label for="brand">Brand:</label>
        <select id="brand" name="brand" required>
            <option name="brand" value="1">Tata Motors</option>
            <option name="brand" value="2">Hyundai</option>
            <option name="brand" value="3">Kia</option>
            <option name="brand" value="4">Mahindra</option>
            <option name="brand" value="5">Renault</option>
        </select>

        <label for="manufactureDate">Manufacture Date:</label>
        <input type="date" id="manufactureDate" name="manufactureDate" value="<?= $product->manufactureDate ?>" max="2023-04-02">

        <label for="availableStock">Available Stock:</label>
        <input type="number" id="availableStock" name="availableStock" value="<?= $product->availableStock ?>" min="0">

        <button type="submit" name="id" value="<?= $product->id ?>">Update</button>
    </form>
    <?php endforeach; ?>
</div>
</body>
</html>
