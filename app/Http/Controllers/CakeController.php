<?php

namespace App\Http\Controllers;

use App\Cake;
use App\Category;
use App\Http\Requests\StoreCake;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use JD\Cloudder\Facades\Cloudder;

class CakeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $obj = Cake::all();
        return view('admin.cake.list')
            -> with('obj',$obj);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $obj = Category::all();
        return view('admin.cake.create')
            -> with('obj',$obj);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCake $request)
    {
        $request->validated();
        Cloudder::upload(Input::file('images'), Input::get('name'));
        $obj = new Cake();
        $obj -> name = Input::get('name');
        $obj -> type = Input::get('type');
        $obj -> price = Input::get('price');
        $obj -> quantity = Input::get('quantity');
        $obj -> description = Input::get('description');
        $obj -> images = Cloudder::secureShow(Input::get('name'));
        $obj -> save();
        return redirect('admin/cake');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $obj = Cake::find($id);
        return view('admin.cake.show')
            -> with('obj',$obj);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $obj = Cake::find($id);
        $objType = Category::all();
        if($obj == null){
            echo "<script>alert('This product does not exist or has been deleted')</script>";
        }
        return view('admin.cake.edit')
            -> with('obj',$obj)
            -> with('objType',$objType);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $obj = Cake::find($id);
        $obj -> name = Input::get('name');
        $obj -> type = Input::get('type');
        $obj -> price = Input::get('price');
        $obj -> quantity = Input::get('quantity');
        $obj -> description = Input::get('description');
        $obj -> images = Input::get('images');
        $obj -> save();
        echo "<script>
                    alert('Update information successfull')
                    window.location.href = '/admin/cake';
                </script>";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $obj = Cake::find($id);
        if($obj == null){
            echo "<script>alert('This product does not exist or has been deleted')</script>";
        }
        $obj -> delete();
    }

    public function quickEdit($id){
        $obj = Cake::find($id);
        $objType = Category::all();
        if($obj == null){
            echo "<script>alert('This product does not exist or has been deleted')</script>";
        }
        return view('admin.cake.list')
            -> with('obj',$obj)
            -> with('objType',$objType);
    }
}
