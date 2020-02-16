<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class customersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $User=User::paginate(10);
      return view('admin.User.index',compact('User'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
      $User=User::create($request->all());

      return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
  $city=User::find($id);
  if(empty($city))
  return back();

  return view('admin\User\edit',compact('city'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id,Request $request)
    {
      $user=User::find($id)->update($request->all());
      if(User::find($id)->role==2)
      return redirect()->route('foodtruck.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
      $city=User::find($id)->delete();
      return back();
    }

  }

  ?>
