<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cities;
class CitiesController extends Controller
{

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
      $cities=Cities::paginate(10);
    return view('admin.cities.index',compact('cities'));
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
    $cities=Cities::create($request->all());

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
$city=Cities::find($id);
if(empty($city))
return back();

return view('admin\cities\edit',compact('city'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update($id,Request $request)
  {
    $city=Cities::find($id)->update($request->all());
    return redirect()->route('cities.index');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {
    $city=Cities::find($id)->delete();
    return back();
  }

}

?>
