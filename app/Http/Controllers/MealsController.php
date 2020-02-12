<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Meals;
use App\Category;

class MealsController extends Controller
{

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
      $meals=Meals::paginate(10);
    return view('admin.meals.index',compact('meals'));
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

    $meals=Meals::create($request->all());

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
$meal=Meals::find($id);
if(empty($meal))
return back();
$categories=Category::all();
return view('admin\meals\edit',compact('meal','categories'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update($id,Request $request)
  {
    $meal=Meals::find($id)->update($request->all());
    return back();
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {
    $meal=Meals::find($id)->delete();
    return back();
  }

}

?>
