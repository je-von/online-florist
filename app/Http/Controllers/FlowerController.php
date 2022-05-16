<?php

namespace App\Http\Controllers;

use App\Flower;
use App\FlowerType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class FlowerController extends Controller
{
    public function showManageFlowerPage(){
        $flower = Flower::paginate(10);
        return view('manage_flower', compact('flower'));
    }

    public function showInsertFlowerPage(){
        $flower_type = FlowerType::all();
        return view('insert_flower', compact('flower_type'));
    }

    public function showHomePage(){
        $flower = Flower::paginate(10);
        return view('home', compact('flower'));
    }

    public function insert(Request $request){
        $request->validate([
            'name' => 'required|min:3',
            'type' => 'required|exists:flower_types,id',
            'price' => 'required|numeric|min:10000',
            'description' => 'required|between:20,200',
            'stock' => 'required|numeric|min:1',
            'image_file' => 'required|mimes:jpg,jpeg,png'
        ]);

        $name = $request->post('name');
        $flower_type_id = $request->post('type');
        $price = $request->post('price');
        $description = $request->post('description');
        $stock = $request->post('stock');
        $image_path = Str::uuid() . '.' . $request->file('image_file')->extension();
        $request->file('image_file')->move(public_path('storage/flower'), $image_path);

        Flower::create(
            [
                'name' => $name,
                'flower_type_id' => $flower_type_id,
                'price' => $price,
                'description' => $description,
                'stock' => $stock,
                'image_path' => 'flower/' . $image_path
            ]
        );

        return redirect('/flower/manage');
    }

    public function getSearchResult(Request $request){
        $keyword = $request->query('keyword');
        $flower = Flower::where('name','LIKE',"%$keyword%")
            ->orWhere('description','LIKE',"%$keyword%")
            ->paginate(10)
            ->appends(['keyword' => $keyword]);

        return $flower;
    }

    public function searchAtHome(Request $request){
        $flower = $this->getSearchResult($request);
        return view('home',compact('flower'));
    }

    public function searchAtManage(Request $request){
        $flower = $this->getSearchResult($request);
        return view('manage_flower',compact('flower'));
    }

    public function delete($id){
        $f = Flower::find($id);
        $f->delete();

        return redirect()->back();
    }

    public function showDetailPage($id){
        $flower = Flower::find($id);
        return view('flower_detail',compact('flower'));
    }

    public function update(Request $request, $id){
        $request->validate([
            'name' => 'required|min:3',
            'type' => 'required|exists:flower_types,id',
            'price' => 'required|numeric|min:10000',
            'description' => 'required|between:20,200',
            'stock' => 'required|numeric|min:1',
            'image_file' => 'required|mimes:jpg,jpeg,png'
        ]);
        $f = Flower::find($id);

        $f->name = $request->post('name');
        $f->flower_type_id = $request->post('type');
        $f->price = $request->post('price');
        $f->description = $request->post('description');
        $f->stock = $request->post('stock');

//        Storage::delete($f->image_path);
//        unlink(storage_path('app/folder/'.$f->image_path));
        $image_path = Str::uuid() . '.' . $request->file('image_file')->extension();
        $request->file('image_file')->move(public_path('storage/flower'), $image_path);

        $f->image_path = 'flower/' . $image_path;
        $f->save();

        return redirect('/flower/manage');
    }

    public function showUpdatePage($id){
        return view('update_flower')->with('current_flower', Flower::find($id))
                                         ->with('flower_type', FlowerType::all());
    }
}
