<?php
include_once 'products/DataProduct.php';
include_once 'products/Product.php';
$result = DataProduct::loadData();
if (isset($_REQUEST['page'])){
    if($_REQUEST['page'] == 'delete'){
        $id = $_REQUEST['id'];
        array_splice($result,$id,1);
        DataProduct::saveData($result);
        header("location:home.php");
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <title>Fruit</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

<div class="container">
    <a href="add-product.php" type="button" class="btn btn-outline-success mb-3 mt-3 btn-lg">ADD PRODUCT</a>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Source</th>
            <th scope="col">Image</th>
            <th scope="col">Describe</th>
            <th scope="col">Price</th>
            <th scope="col">Create</th>
            <th scope="col">Phone</th>
            <th scope="col">Address</th>
        </tr>
        </thead>
        <tbody>

        <?php foreach ($result as $key=>$product): ?>
            <tr>
                <td><?php echo $product->getId()?></td>
                <td><?php echo $product->getName()?></td>
                <td><?php echo $product->getSource()?></td>
                <td><?php echo $product->getImage()?></td>
                <td><?php echo $product->getDescribe()?></td>
                <td><?php echo $product->getPrice()?></td>
                <td><?php echo $product->getCreate()?></td>
                <td><?php echo $product->getPhone()?></td>
                <td><?php echo $product->getAddress()?></td>
                <td><a href="home.php?page=delete&id=<?php echo $key ?>">Delete</a></td>
                <td><a href="edit-product.php?id=<?php echo $product->getId() ?>">Edit</a></td>
            </tr>
        <?php endforeach; ?>

        </tbody>
    </table>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>
</html>

