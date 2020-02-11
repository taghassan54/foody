<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FoodTruck;
use App\Cities;
use App\User;
use App\Category;
use Illuminate\Support\Facades\Hash;

class FoodTruckController extends Controller
{

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
      $foodtrucks=FoodTruck::paginate(10);
        $Cities=Cities::all();
        $categories=Category::all();
    return view('admin.foodtruck.index',compact('foodtrucks','Cities','categories'));
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

    $request->validate([
        'name' => ['required', 'string', 'max:255'],
        'email' => ['required', 'string', 'email', 'max:255'],
        'password' => ['required', 'string', 'min:8'],
    ]);
if(User::where('email',$request->email)->count()>0){
    $user=User::where('email',$request->email)->first();
}else{
    $user= User::create([
        'name' =>  $request->owner,
        'email' => $request->email,
        'password' => Hash::make($request->password),
    ]);
}




    $data=$request->all();
    $data['user_id']=$user->id;

    $foodtruck=FoodTruck::create($data);

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
    $foodtruck=FoodTruck::find($id);
    $categories=Category::all();
    return view('admin\foodtruck\show',compact('foodtruck','categories'));
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function showforuser($id)
  {
    $foodtruck=FoodTruck::find($id);
    $categories=Category::all();
    return view('trucks',compact('foodtruck','categories'));
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($id)
  {
$foodtruck=FoodTruck::find($id);
$Cities=Cities::all();
return view('admin\foodtruck\edit',compact('foodtruck','Cities'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update($id,Request $request)
  {
    $foodtruck=FoodTruck::find($id)->update($request->all());
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
    $foodtruck=FoodTruck::find($id)->delete();
    return back();
  }

}

?>
