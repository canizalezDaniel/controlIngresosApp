<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Ingresos;
use App\Transacciones;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ControlController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//

        $tdd= Transacciones::where('tipoTarjeta','1')->orderBy('fecha','ASC')->get();
        $tda= Transacciones::where('tipoTarjeta','2')->orderBy('fecha','ASC')->get();
        return view('control.index', compact('tdd','tda'));
	}

    /**
     *
     * Controlador y metodos personalizados
     */

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//

        return view ('control.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		//
        $tran= new Transacciones($request->all());
        $tran->save();
        return redirect()->route('admin.control.index');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
