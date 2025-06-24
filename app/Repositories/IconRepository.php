<?php
namespace App\Repositories;

use App\Models\IconsModel;

class IconRepository
{
    private $IconModel;

    public function __construct()
    {
     $this->IconModel = new IconsModel();
    }

    public function createNewIcon($data)
    {
    $this->IconModel->create([
        "name" => $data["name"],
        "description" => $data['description'],
        "amount" =>  $data['amount'],
        "price" =>  $data['price'],
        "image" =>  $data['image'],
        "is_available" => isset($data['is_available']) ? 1 : 0
    ]);
    }
}
