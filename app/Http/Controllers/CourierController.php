<?php

namespace App\Http\Controllers;

use App\Courier;
use Illuminate\Http\Request;

class CourierController extends Controller
{
    public function showManageCourierPage(){
        $courier = Courier::paginate(10);
        return view('manage_courier', compact('courier'));
    }

    public function search(Request $request){
        $keyword = $request->query('keyword');
        $courier = Courier::where('name','LIKE',"%$keyword%")
                        ->paginate(10)
                        ->appends(['keyword' => $keyword]);

        return view('manage_courier', compact('courier'));
    }

    public function showInsertCourierPage(){
        return view('insert_courier');
    }

    public function insert(Request $request){
        $request->validate([
            'name' => 'required|min:3',
            'shipping_cost' => 'required|numeric|min:3000'
        ]);

        $name = $request->post('name');
        $shipping_cost = $request->post('shipping_cost');

        Courier::create(
            [
                'name' => $name,
                'shipping_cost' => $shipping_cost
            ]
        );

        return redirect('/courier/manage');
    }

    public function update(Request $request, $id){
        $request->validate([
            'name' => 'required|min:3',
            'shipping_cost' => 'required|numeric|min:3000'
        ]);
        $c = Courier::find($id);
        if($c != null){
            $c->name = $request->post('name');
            $c->shipping_cost = $request->post('shipping_cost');
            $c->save();
        }
        return redirect('/courier/manage');
    }

    public function showUpdateCourierPage($id){
        $current_courier = Courier::find($id);
        if($current_courier == null)
            return redirect('/');
        return view('update_courier', compact('current_courier'));
    }
    public function delete($id){
        $c = Courier::find($id);
        if($c != null)
            $c->delete();

        return redirect()->back();
    }
}
