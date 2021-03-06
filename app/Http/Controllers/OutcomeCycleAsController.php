<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OutcomeCycleA;
use Illuminate\Support\Facades\DB;
use Illuminate\support\Facades\Response;

class OutcomeCycleAsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $programs = OutcomeCycleA::all();
        $response = Response::json($programs, 200);
        //      header("Access-Control-Allow-Origin: *");
        return $response;
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Display a outcomeCylceas por id de outcome e id de ciclo activo por programa
     * @param  string $idOutcome , id outcome,$idCycle id del ciclo activo programa
     * @return \Illuminate\Http\Response
     */
    public function outcomeCycleAsByOutcomeCycle($idOutcome, $idCycle)
    {

        $outcomeCycleAs = DB::table('outcome_cycle_as')->where([
            ['MAIN_CYCLE_ID_CYCLE', '=', $idCycle],
            ['OUTCOME_ID_ST_OUTCOME', '=', $idOutcome],
        ])->first();

        $response = Response::json($outcomeCycleAs, 200);
        return $response;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
