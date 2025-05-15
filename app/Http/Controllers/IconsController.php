<?php

namespace App\Http\Controllers;

use App\Http\Requests\IconRequest;
use App\Models\IconsModel;
use App\Repositories\IconRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IconsController extends Controller
{
    private $IconsRepo;
    public function __construct()
    {
        $this->IconsRepo = new IconRepository();
    }
    public function newIcon()
    {
        return view("admin.add-icon");
    }
    public function saveNewIcon(IconRequest $request)
    {
     $data = $request->only(["name", "description", "amount", "price", ]);

     if($request->hasFile("image"))
     {
         $path = $request->file("image")->store('images', 'public');

         $data['image'] = $path;
     }
     $this->IconsRepo->createNewIcon($data);

     return redirect("/");
    }

    public function search(Request $request)
    {
        $query = trim(strtolower($request->input('query')));

        $minPrice = $request->input('min_price');

        $maxPrice = $request->input('max_price');

        $icons = IconsModel::query();

        if($query)
        {
            $icons->where(function ($q) use ($query)
            {
                $q->where(DB::raw('LOWER(name)'), 'like', '%' . strtolower($query) . '%')
                    ->orWhere(DB::raw('LOWER(description)'), 'like', '%' . strtolower($query) . '%');
            });
        }

        if($minPrice !== null)
        {
            $icons->where('price', '>=', $minPrice);
        }
        if($maxPrice !== null)
        {
            $icons->where('price', '<=', $maxPrice);
        }
        $results = $icons->get();


        return view('icon-search', compact('results', 'query', 'minPrice', 'maxPrice'));
    }

    public function allProducts()
    {
        $allProducts = IconsModel::all();

        return view("admin.all-products", compact('allProducts'));
    }

    public function delete($icon)
    {
        $icon = IconsModel::where(['id' => $icon])->first();

        if($icon === null)
        {
            die('Nepostojeci id ikone');
        }

        $icon->delete();

        return redirect()->back();

    }

    public function edit($icon)
    {
        $icon = IconsModel::where(['id' => $icon])->first();

        return view('admin.edit', compact('icon'));
    }

    public function update(Request $request,$id)
    {
        $icon = IconsModel::findOrFail($id);

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:1000',
            'amount' => 'required|integer|min:0',
            'price' => 'required|numeric|min:0',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        // Ažuriraj osnovna polja
        $icon->name = $validated['name'];
        $icon->description = $validated['description'];
        $icon->amount = $validated['amount'];
        $icon->price = $validated['price'];

        // Ako je poslata nova slika
        if ($request->hasFile('image')) {
            // Obriši staru sliku ako postoji
            if ($icon->image && file_exists(public_path('images/' . $icon->image))) {
                unlink(public_path('images/' . $icon->image));
            }

            $imageName = \Illuminate\Support\Str::uuid() . '.' . $request->image->getClientOriginalExtension();
            $request->image->move(public_path('images'), $imageName);
            $icon->image = $imageName;
        }

        $icon->save();

        return redirect()->route('/')->with('success', 'Proizvod uspešno ažuriran!');
    }





}
