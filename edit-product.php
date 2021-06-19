<?php
include_once 'products/DataProduct.php';
include_once 'products/Product.php';
if (isset($_REQUEST['id'])){
    $id = $_REQUEST['id'];
    $product = DataProduct::getProductById($id);
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Student</title>
</head>
<body>
<form method="post">
<!--    <input type="text" name="id" placeholder="Input Id" value="--><?php //echo $product->getId()?><!--">-->
    <input type="text" name="name" placeholder="Input Name" value="<?php echo $product->getName()?>">
    <input type="text" name="source" placeholder="Input Source" value="<?php echo $product->getSource()?>">
    <input type="text" name="image" placeholder="Input Image URL" value="<?php echo $product->getImage()?>">
    <input type="text" name="describe" placeholder="Input Describe" value="<?php echo $product->getDescribe()?>">
    <input type="text" name="price" placeholder="Input Price" value="<?php echo $product->getPrice()?>">
    <input type="text" name="create" placeholder="Input Creator" value="<?php echo $product->getCreate()?>">
    <input type="text" name="phone" placeholder="Input Phone" value="<?php echo $product->getPhone()?>">
    <input type="text" name="address" placeholder="Input Address" value="<?php echo $product->getAddress()?>">
    <button type="submit">Add</button>
</form>
</body>
</html>

<?php
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
    $product = new Product($id,$name,$source,$image,$describe,$price,$create,$phone,$address);
    DataProduct::editProductById($id, $product);
    header('location:home.php');
}
?>
