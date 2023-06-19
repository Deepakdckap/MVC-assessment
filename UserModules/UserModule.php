<?php
require 'connection.php';
class UserModule extends DATABASE
{
    // query of inserting into DB
    public function insert($values,$files)
    {
        $productSku = $values['sku'];

        $check = $this->db->query("SELECT * FROM products WHERE sku ='$productSku'");
        $exists = $check->fetchAll(PDO::FETCH_OBJ);

        //validation of SKU
        if ($exists)
        {
            echo"<script>alert('The SKU already exists')</script>";
        }
        else {
            move_uploaded_file($files['tmp_name'], "ProductImages/" . $files['name']);
            $filePath = "ProductImages/" . $files['name'];
            $productName = $values['productName'];
            $productSku = $values['sku'];
            $productPrice = $values['price'];
            $productBrand = $values['brand'];
            $productManufactureDate = $values['manufactureDate'];
            $productAvailableStock = $values['availableStock'];

            $this->db->query("INSERT INTO products (productName,productImages,sku,price,brand_Id,manufactureDate,availableStock,created_at,updated_at) VALUES ('$productName','$filePath','$productSku','$productPrice','$productBrand','$productManufactureDate','$productAvailableStock',now(),now())");
            header('location:/listPage');
        }
    }

    // query of fetching one product
    public function viewOneProduct($id)
    {
       $statement = $this->db->query("SELECT * FROM products WHERE id = '$id'");
       $stmt = $statement->fetchAll(PDO::FETCH_OBJ);

       return $stmt;
    }

    // query of deleting from DB
    public function deleteOneProduct($id)
    {
        $this->db->query("DELETE FROM products WHERE id = '$id'");
    }

    // query of updatingOne product from DB
    public function updateOneProduct($updatedValues,$img)
    {
        move_uploaded_file($img["tmp_name"],"ProductImages/" .$img["name"]);
        $imagePath= "ProductImages/".$img["name"];
        $updatedProductName = $updatedValues['productName'];

        $updatedProductSku = $updatedValues['sku'];
        $updatedProductPrice = $updatedValues['price'];
        $updatedProductBrand = $updatedValues['brand'];
        $updatedProductManufactureDate = $updatedValues['manufactureDate'];
        $updatedProductStock = $updatedValues['availableStock'];
        $updatedId = $updatedValues['id'];

        $this->db->query("UPDATE products SET productName = '$updatedProductName',ProductImages = '$imagePath', sku = '$updatedProductSku', price = '$updatedProductPrice', brand_Id = '$updatedProductBrand',manufactureDate = '$updatedProductManufactureDate',availableStock = '$updatedProductStock' WHERE id = '$updatedId'");
    }

    // query of fetching all products from DB
    public function getAllProducts()
    {
        $all = $this->db->query("SELECT * FROM products");
        $allProducts = $all->fetchAll(PDO::FETCH_OBJ);

        return $allProducts;
    }

}