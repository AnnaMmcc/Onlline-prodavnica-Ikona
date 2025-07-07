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

    public function updateIcon($id, $data)
    {
        $icon = IconsModel::findOrFail($id);

        $icon->name = $data['name'];
        $icon->description = $data['description'];
        $icon->amount = $data['amount'];
        $icon->price = $data['price'];
        $icon->is_available = isset($data['is_available']);

        if (isset($data['image']) && $data['image']->isValid()) {

            if ($icon->image && file_exists(public_path('images/' . basename($icon->image)))) {
                unlink(public_path('images/' . basename($icon->image)));
            }

            $imageName = \Illuminate\Support\Str::uuid() . '.' . $data['image']->getClientOriginalExtension();
            $data['image']->storeAs('images', $imageName, 'public');
            $icon->image = 'images/' . $imageName;
        }

        $icon->save();

        return $icon;
    }

}
