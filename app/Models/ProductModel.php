<?php

namespace APP\Models;
use CodeIgniter\Model;

class ProductModel extends Model{
    protected $table = 'product';
    protected $returnType = 'object';
    protected $primaryKey = 'id';
    protected $allowedFields = ['id', 'nama_product', 'description'];

    // public function insertProduct($data){
    //     $query = "INSERT INTO product (nama_product, description ) VALUES (?,?)" ;
    //     $this->db->query($query, [$data['nama_product'], $data['description']]);
    //     return $this->db->insertID();
    // }

    public function insertProduct($data){
        return $this->insert($data);
    }

    // public function readProduct(){
    //     $products = $this->product
    // }
}
