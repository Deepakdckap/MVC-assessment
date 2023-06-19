<!DOCTYPE html>
<html>
<head>
    <title>Product Table</title>
    <style>
        /* Add some basic styling */
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
            font-weight: bold;
        }
        img{
            width: 75px;
            height: 75px;
        }
        button {
            background-color: gold;
            padding:8px;
            border-radius: 5px;
        }
        .tr{
            background-color: red;
            color: #f2f2f2;
        }
        h1{
            text-align: center;
        }

        tr:hover {
            background-color: #f5f5f5;
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" />
    <script src="https://kit.fontawesome.com/52d2b40c3f.js" crossorigin="anonymous"></script>
</head>
<body>
<h1>Product Table</h1> <button><a href="/">ADD NEW</a></button>
<table>
    <tr>
        <th rowspan="">S.No</th>
        <th>Product Name</th>
        <th>Product Image</th>
        <th>SKU</th>
        <th>Price</th>
        <th>Brand</th>
        <th>Manufacture Date</th>
        <th>Available Stock</th>
        <th>EDIT</th>
        <th>DELETE</th>
    </tr>
    <tr>
        <!-- This variable comes from UC lists function -->
        <?php foreach ($listsOfProducts as $all=> $product): ?>
        <td><?= $all+1 ?></td>
        <td><?= $product->productName ?></td>
        <td><img class="image" src="<?= $product->productImages ?>" alt="Products"></td>
        <td><?= $product->sku ?></td>
        <td><?= $product->price ?></td>
        <td><?= $product->brand_Id ?></td>
        <td><?= $product->manufactureDate ?></td>
        <td id="stock" ><?= $product->availableStock ?></td>
        <td>
            <form action="/edit" method="post">
                <input type="hidden" name="edit" value="<?php echo $product->id?>">
                <button type="submit" name="action"  value="view"><i class="fas fa-edit"></i>
                </button>
            </form>
        </td>
        <td>
            <form action="/delete" method="post">
                <input type="hidden" name="delete" value="<?php echo $product->id?>">
                <button type="submit" name ="action" value ="delete"><i class="fa-solid fa-trash"></i></button>

            </form>
        </td>

    </tr>
    <?php endforeach; ?>
</table>

<script>
    let checkStock = document.getElementById('stock');

    if (checkStock <= 10 )
    {
        checkStock.classList.add("tr");
    }
    else
    {
        checkStock.classList.remove("tr");
    }
</script>
</body>
</html>

