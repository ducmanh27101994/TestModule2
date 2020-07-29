<?php


namespace Product\Model;


class ProductManager
{
    protected $dataManager;

    public function __construct()
    {
        $this->dataManager = new DBconnect();
    }

    function getAllProduct(){
        $sql = "SELECT * FROM `tbl_product`";
        $statement = $this->dataManager->connectDB()->query($sql);
        $data = $statement->fetchAll();
        $arr = [];
        foreach ($data as $item){
            $product = new Product($item['name'],$item['category'],$item['price'],$item['number'],$item['date'],$item['description']);
            $product->setId($item['id']);
            array_push($arr,$product);
        }
        return $arr;
    }

    function addProduct($product){
        $sql = "INSERT INTO `tbl_product`(`name`, `category`, `price`, `number`, `date`, `description`) VALUES (:name,:category,:price,:number,:date,:description)";
        $statement = $this->dataManager->connectDB()->prepare($sql);
        $statement->bindParam(":name",$product->getName());
        $statement->bindParam(":category",$product->getCategory());
        $statement->bindParam(":price",$product->getPrice());
        $statement->bindParam(":number",$product->getNumber());
        $statement->bindParam(":date",$product->getDate());
        $statement->bindParam(":description",$product->getDescription());
        $statement->execute();
    }

    function deleteProduct($id){
        $sql = "DELETE FROM `tbl_product` WHERE `id`=:id";
        $statement = $this->dataManager->connectDB()->prepare($sql);
        $statement->bindParam(':id',$id);
        $statement->execute();
    }

    function updateProduct($product){
        $sql = "UPDATE `tbl_product` SET `name`=:name,`category`=:category,`price`=:price,`number`=:number,`date`=:date,`description`=:description WHERE `id`=:id";
        $statement = $this->dataManager->connectDB()->prepare($sql);
        $statement->bindParam(':id',$product->getId());
        $statement->bindParam(":name",$product->getName());
        $statement->bindParam(":category",$product->getCategory());
        $statement->bindParam(":price",$product->getPrice());
        $statement->bindParam(":number",$product->getNumber());
        $statement->bindParam(":date",$product->getDate());
        $statement->bindParam(":description",$product->getDescription());
        $statement->execute();
    }

    function getProductById($id){
        $sql = "SELECT * FROM `tbl_product` WHERE `id`=:id";
        $statement = $this->dataManager->connectDB()->prepare($sql);
        $statement->bindParam(':id',$id);
        $statement->execute();
        return $statement->fetch();
    }

    function searchProduct($keyword){
        $sql = "SELECT * FROM `tbl_product` WHERE `name` LIKE :keyword";
        $statement = $this->dataManager->connectDB()->prepare($sql);
        $statement->bindValue(':keyword','%'.$keyword.'%');
        $statement->execute();
        $data = $statement->fetchAll();
        $arr = [];
        foreach ($data as $item){
            $product = new Product($item['name'],$item['category'],$item['price'],$item['number'],$item['date'],$item['description']);
            $product->setId($item['id']);
            array_push($arr,$product);
        }
        return $arr;
    }


}