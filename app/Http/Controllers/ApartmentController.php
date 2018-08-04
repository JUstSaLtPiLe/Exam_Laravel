<?php

namespace App\Http\Controllers;

use App\Apartment;
use App\District;
use App\Http\Requests\StoreApartment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use JD\Cloudder\Facades\Cloudder;

class ApartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $obj = Apartment::all();
        $objType = District::all();
        return view('admin.apartment.list')
            -> with('obj',$obj)
            -> with('objType',$objType);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $obj = District::all();
        return view('admin.apartment.create')
            -> with('obj',$obj);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreApartment $request)
    {
        $request->validated();
        Cloudder::upload(Input::file('images'), Input::get('name'));
        $obj = new Apartment();
        $obj -> name = Input::get('name');
        $obj -> type = Input::get('type');
        $obj -> price = Input::get('price');
        $obj -> quantity = Input::get('quantity');
        $obj -> description = Input::get('description');
        $obj -> images = Cloudder::secureShow(Input::get('name'));
        $obj -> save();
        return redirect('admin/apartment');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $obj = Apartment::find($id);
        return view('admin.apartment.show')
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
        $obj = Apartment::find($id);
        $objType = District::all();
        if($obj == null){
            echo "<script>alert('This product does not exist or has been deleted')</script>";
        }
        return view('admin.apartment.edit')
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
        $obj = Apartment::find($id);
        $obj -> name = Input::get('name');
        $obj -> type = Input::get('type');
        $obj -> price = Input::get('price');
        $obj -> quantity = Input::get('quantity');
        $obj -> description = Input::get('description');
        $obj -> images = Input::get('images');
        $obj -> save();
        echo "<script>
                    alert('Update information successfull')
                    window.location.href = apartmenapartment               </script>";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $obj = Apartment::find($id);
        if($obj == null){
            echo "<script>alert('This product does not exist or has been deleted')</script>";
        }
        $obj -> delete();
    }

    public function quickEdit($id){
        $obj = Apartment::find($id);
        $objType = District::all();
        if($obj == null){
            echo "<script>alert('This product does not exist or has been deleted')</script>";
        }
        return view('admin.apartment')
            -> with('obj',$obj)
            -> with('objType',$objType);
    }
}
