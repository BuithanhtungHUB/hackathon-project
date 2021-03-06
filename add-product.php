<!DOCTYPE html>
<html lang="en">
<head>
    <title>Add Product</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
    <h2>ADD PRODUCT</h2>
    <form method="post">
        <div class="form-group">
            <label for="id">Id:</label>
            <input type="text" class="form-control" id="id" placeholder="Input Id" name="id" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Input Name" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <div class="form-group">
            <label for="source">Source:</label>
            <input type="text" class="form-control" id="source" name="source" placeholder="Input Source" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <div class="form-group">
            <label for="image">Image:</label>
            <input type="text" class="form-control" id="image" name="image" placeholder="Input Image URL" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <div class="form-group">
            <label for="discribe">Discribe:</label>
            <input type="text" class="form-control" id="discribe" name="describe" placeholder="Input Describe" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <div class="form-group">
            <label for="price">Price:</label>
            <input type="text" class="form-control" id="price" name="price" placeholder="Input Price" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <div class="form-group">
            <label for="create">Creator:</label>
            <input type="text" class="form-control" id="create" name="create" placeholder="Input Creator" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <div class="form-group">
            <label for="phone">Phone:</label>
            <input type="number" class="form-control" id="phone" name="phone" placeholder="Input Phone" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <div class="form-group">
            <label for="address">Address:</label>
            <input type="text" class="form-control" id="address" name="address" placeholder="Input Address" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <button type="submit" class="btn btn-primary">Add</button>
    </form>
</div>

</body>
</html>

<?php
include_once 'products/Product.php';
include_once 'products/DataProduct.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_REQUEST['id'];
    $name = $_REQUEST['name'];
    $source = $_REQUEST['source'];
    $image = $_REQUEST['image'];
    $describe = $_REQUEST['describe'];
    $price = $_REQUEST['price'];
    $create = $_REQUEST['create'];
    $phone = $_REQUEST['phone'];
    $address = $_REQUEST['address'];
    $product = new Product($id, $name, $source, $image, $describe, $price, $create, $phone, $address);
    DataProduct::addProduct($product);
    header('location: home.php');
}