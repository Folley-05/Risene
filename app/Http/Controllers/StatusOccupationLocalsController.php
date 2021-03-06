<?php 

namespace App\Http\Controllers;

use App\Models\StatusOccupationLocals;
use Illuminate\Http\Request;

class StatusOccupationLocalsController extends Controller 
{

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return StatusOccupationLocals::all();
	}

	/**
	 * Display a order listing of ressource.
	 *
	 * @return Response
	 */
	public function order()
	{
		return StatusOccupationLocals::orderByDesc('created_at')->get();
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create(Request $requete)
	{
		
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		if(StatusOccupationLocals::create($request->all())) {
			return response()->json([
				'succes'=>"statusoccupationlocale cree avec succes",
			], 200);
		}
		else {
			return response()->json([
				'echec'=>"statusoccupationlocale non cree",
			], 500);
		}
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show(StatusOccupationLocals $code)
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
	public function update(Request $request, StatusOccupationLocals $code)
	{
		if($code->update($request->all())) {
			return response()->json([
				'success'=>"statusoccupationlocale mis a jour",
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
	public function destroy(StatusOccupationLocals $code)
	{
		if($code->delete()) {
			return response()->json([
				'success'=>"statusoccupationlocale supprime",
			], 200);
		}
		else {
			return response()->json([
				'echec'=>"statusoccupationlocale non supprime"
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
			'file'=>'required|mimes:csv'
		]);
		$data=convertCsvToArray($request->file, ',');
		if(sizeof($data)) {
			for ($i = 0; $i < count($data); $i ++) {
				StatusOccupationLocals::firstOrCreate($data[$i]);
			}
			return response()->json([
				"usccess"=> $i." insersions effectuees, ",
			], 200);
		}
		return response()->json([
			"echec"=> "quelque chose s'est mal passe",
			"erreur"=> $data
		]);
		//return $data;
	}
  
}

?>