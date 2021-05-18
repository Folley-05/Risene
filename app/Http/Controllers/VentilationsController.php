<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ventilations;

class VentilationsController extends Controller 
{

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
	return Ventilations::all();
  }

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function list($id)
  {
	return Ventilations::where('id_entreprise', $id)->orderByDesc('created_at')->get();
	//return $id;
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
	$validate=$request->validate([
		'code'=>'required|unique:ventilations,code',
		//'libelle'=>'required'
	]);
	if($validate) {
		if(Ventilations::create($request->all())) {
			return response()->json([
				'succes'=>"ventilations cree avec succes",
			], 200);
		}
		else {
			return response()->json([
				'echec'=>"ventilations non cree",
			], 500);
		}
	}
	
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show($code)
  {
	return $code;
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($id)
  {
	
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update(Ventilations $id)
  {
	if($code->update($request->all())) {
		return response()->json([
			'success'=>"ventilations mis a jour",
		], 200);
	}
	else  {
		return response()->json([
			'echec'=>"echec de la mise a jour",
		], 500);
	}
	
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy(Ventilations $id)
  {
	if($code->delete()) {
		return response()->json([
			'success'=>"ventilations supprime",
		], 200);
	}
	else {
		return response()->json([
			'echec'=>"ventilations non supprime"
		], 500);
	}
  }

	/**
	 * insert from file function.
	 *
	 * @return Response
	 */
	public function import(Request $request) {
		$validate=$request->validate([
			'file'=>'required|mimes:txt'
		]);
		$data=convertCsvToArray($request->file, ',');
		for ($i = 0; $i < count($data); $i ++)
		{
			Ventilations::firstOrCreate($data[$i]);
		}
		return $i."insersions effectuees, ";
	}
  
}

?>