<?php

namespace App\Http\Controllers;

use App\Cake;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;


class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $obj = Category::all();
        return view('admin.category.list')
            -> with('obj',$obj);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $obj = new Category();
        $obj -> name = Input::get('name');
        $obj -> description = Input::get('description');
        $obj -> images = Input::get('images');
        $obj -> save();
        return redirect('/admin/category');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $obj = Category::find($id);
        return view('admin.category.show')
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
        $obj = Category::find($id);
        if($obj == null){
            echo "<script>alert('This product does not exist or has been deleted')</script>";
        }
        return view('admin.category.edit')
            -> with('obj',$obj);
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
        $obj = Category::find($id);
        $obj -> name = Input::get('name');
        $obj -> description = Input::get('description');
        $obj -> images = Input::get('images');
        $obj -> save();
        echo "<script>
                    alert('Update information successfull')
                    window.location.href = '/admin/category';
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
        $obj = Category::find($id);
        if($obj == null){
            echo "<script>alert('This product does not exist or has been deleted')</script>";
        }
        $obj -> delete();
    }
    public function menu(){
        $objType = Category::all();
        $obj = Cake::all();
        return view('user.menu')
            -> with('objType',$objType)
            -> with('obj',$obj);
    }
    public function filter($type){
        $obj = DB::select('select * from cakes where type = ?', [$type]);
        $objType = Category::all();
        return view('user.filteredMenu')
            ->with('obj',$obj)
            ->with('objType',$objType);
    }
}
