<?php

class  DataProduct
{
    public static $path = "products/products.json";

    public static function saveData($data)
    {
        $dataJson = json_encode($data);
        file_put_contents(self::$path, $dataJson);
    }

    public static function loadData()
    {
        $dataJson = file_get_contents(self::$path);
        $data = json_decode($dataJson);
        return self::convertToProduct($data);
    }

    public static function convertToProduct($data)
    {
        $products = [];
        foreach ($data as $item){
            $product = new Product($item->id, $item->name, $item->source,$item->image,$item->describe,$item->price,$item->create,$item->phone,$item->address);
            array_push($products,$product);
        }
        return $products;
    }

    public static function addProduct($product)
    {
        $products = self::loadData();
        array_push($products,$product);
        self::saveData($products);
    }

    public static function getProductById($id)
    {
        $products = self::loadData();
        foreach ($products as $product){
            if ($product->getId() == $id){
                return$product;
            }
        }
    }

    public static function editProductById($id, $newProduct)
    {
        $products = self::loadData();
        foreach ($products as $product) {
            if ($product->getId() == $id) {
                $product->setName($newProduct->getName());
                $product->setSource($newProduct->getSource());
                $product->setImage($newProduct->getImage());
                $product->setDescribe($newProduct->getDescribe());
                $product->setPrice($newProduct->getPrice());
                $product->setPhone($newProduct->getPhone());
                $product->setAddress($newProduct->getAddress());
            }
        }
        self::saveData($products);
    }
}