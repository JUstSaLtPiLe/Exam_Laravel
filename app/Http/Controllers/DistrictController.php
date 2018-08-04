<?php

namespace App\Http\Controllers;

use App\Aparment;
use App\District;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;


class DistrictController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $objType = District::all();
        return view('admin.apartment.list')
            -> with('objType',$objType);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.district.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $obj = new District();
        $obj -> name = Input::get('name');
        $obj -> description = Input::get('description');
        $obj -> images = Input::get('images');
        $obj -> save();
        return redirect('/admin/district');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $obj = District::find($id);
        return view('admin.district.show')
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
        $obj = District::find($id);
        if($obj == null){
            echo "<script>alert('This product does not exist or has been deleted')</script>";
        }
        return view('admin.district.edit')
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
        $obj = District::find($id);
        $obj -> name = Input::get('name');
        $obj -> description = Input::get('description');
        $obj -> images = Input::get('images');
        $obj -> save();
        echo "<script>
                    alert('Update information successfull')
                    window.location.href = district;
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
        $obj = District::find($id);
        if($obj == null){
            echo "<script>alert('This product does not exist or has been deleted')</script>";
        }
        $obj -> delete();
    }
    public function menu(){
        $objType = District::all();
        $obj = Aparment::all();
        return view('user.menu')
            -> with('objType',$objType)
            -> with('obj',$obj);
    }
    public function filter($type){
        $obj = DB::select('select * from apartments where address = ?', [$type]);
        $objType = District::all();
        return view('user.filteredMenu')
            ->with('obj',$obj)
            ->with('objType',$objType);
    }
}
