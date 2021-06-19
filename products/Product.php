<?php


class Product
{
    public $id;
    public $name;
    public $source;
    public $image;
    public $describe;
    public $price;
    public $create;
    public $phone;
    public $address;

    /**
     * Product constructor.
     * @param $id
     * @param $name
     * @param $soure
     * @param $image
     * @param $describe
     * @param $price
     * @param $create
     * @param $phone
     * @param $address
     */
    public function __construct($id, $name, $source, $image, $describe, $price, $create, $phone, $address)
    {
        $this->id = $id;
        $this->name = $name;
        $this->source = $source;
        $this->image = $image;
        $this->describe = $describe;
        $this->price = $price;
        $this->create = $create;
        $this->phone = $phone;
        $this->address = $address;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * @param mixed $source
     */
    public function setSource($source): void
    {
        $this->source = $source;
    }

    /**
     * @return mixed
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param mixed $image
     */
    public function setImage($image): void
    {
        $this->image = $image;
    }

    /**
     * @return mixed
     */
    public function getDescribe()
    {
        return $this->describe;
    }

    /**
     * @param mixed $describe
     */
    public function setDescribe($describe): void
    {
        $this->describe = $describe;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price): void
    {
        $this->price = $price;
    }

    /**
     * @return mixed
     */
    public function getCreate()
    {
        return $this->create;
    }

    /**
     * @param mixed $create
     */
    public function setCreate($create): void
    {
        $this->create = $create;
    }

    /**
     * @return mixed
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param mixed $phone
     */
    public function setPhone($phone): void
    {
        $this->phone = $phone;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param mixed $address
     */
    public function setAddress($address): void
    {
        $this->address = $address;
    }




}