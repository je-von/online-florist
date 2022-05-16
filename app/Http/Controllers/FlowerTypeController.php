<?php

namespace App\Http\Controllers;

use App\FlowerType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class FlowerTypeController extends Controller
{
    public function showManageFlowerTypePage(){
        $flower_type = FlowerType::paginate(10);
        return view('manage_flower_type', compact('flower_type'));
    }

    public function search(Request $request){
        $keyword = $request->query('keyword');
        $flower_type = FlowerType::where('type_name','LIKE',"%$keyword%")
            ->paginate(10)
            ->appends(['keyword' => $keyword]);

        return view('manage_flower_type', compact('flower_type'));
    }

    public function showInsertFlowerTypePage(){
        return view('insert_flower_type');
    }

    public function insert(Request $request){
        $request->validate([
            'type_name' => 'required|min:4|unique:flower_types,type_name'
        ]);

        $type_name = $request->post('type_name');

        FlowerType::create(
            [
                'type_name' => $type_name
            ]
        );

        return redirect('/flower-type/manage');
    }

    public function update(Request $request, $id){
        $request->validate([
            'type_name' => 'required|min:4|unique:flower_types,type_name'
        ]);
        $ft = FlowerType::find($id);
        if($ft != null){
            $ft->type_name = $request->post('type_name');
            $ft->save();
        }
        return redirect('/flower-type/manage');
    }

    public function showUpdateFlowerTypePage($id){
        $current_flower_type = FlowerType::find($id);
        if($current_flower_type == null)
            return redirect('/');
        return view('update_flower_type', compact('current_flower_type'));
    }

    public function delete($id){
        $ft = FlowerType::find($id);
        if($ft != null)
            $ft->delete();

        return redirect()->back();
    }
}
