<?php

namespace App\Http\Controllers;

use App\Http\Requests\IconRequest;
use App\Http\Requests\UpdateIconRequest;
use App\Models\IconsModel;
use App\Repositories\IconRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

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
     $data = $request->only(["name", "description", "amount", "price","is_available" ]);

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
        $icon = IconsModel::where('id', $icon)->first();

        if ($icon === null) {
            abort(404, 'Nepostojeći ID ikone');
        }

        if ($icon->image && Storage::disk('public')->exists($icon->image)) {
            Storage::disk('public')->delete($icon->image);
        }

        $icon->delete();

        return redirect()->back()->with('success', 'Proizvod uspešno obrisan.');
    }

    public function edit($icon)
    {
        $icon = IconsModel::where(['id' => $icon])->first();

        return view('admin.edit', compact('icon'));
    }

    public function update(UpdateIconRequest $request,$id)
    {
        $data = $request->only(['name', 'description', 'amount', 'price', 'is_available']);


        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image');
        }

        $this->IconsRepo->updateIcon($id, $data);

        return redirect()->route('products.all')->with('success', 'Proizvod uspešno ažuriran!');
    }





}
