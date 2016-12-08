<?php

namespace App\Model;

use Core\Model\AbstractModel;

class ProductModel extends AbstractModel
{
    public function getProductById($id)
    {
        return "Product: {$id}";
    }
}
