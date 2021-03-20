<?php

namespace App\Http\Controllers;

use App\Models\Week;
use Illuminate\Http\Request;

class WeekController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $weeks=Week::where('owner_id', auth()->id())->orderBy('id_giorno', 'asc')->orderBy('orario', 'asc')->get();
        return view('week.index', compact('weeks'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('week.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $week = new Week();
        $week->giorno=request('giorno');

        //individuazione id giorno
        switch (request('giorno')) {
            case "Lunedi":
                $week->id_giorno=1;
                break;
            case "Martedi":
                $week->id_giorno=2;
                break;
            case "Mercoledi":
                $week->id_giorno=3;
                break;
            case "Giovedi":
                $week->id_giorno=4;
                break;
            case "Venerdi":
                $week->id_giorno=5;
                break;
            case "Sabato":
                $week->id_giorno=6;
            case "Domenica":
                $week->id_giorno=7;
                break;
        }



        $week->rifiuto=request('rifiuto');

        //cambio formato ora
        $ora=request('orario');
        $ora=$ora . ":00";
        $week->orario=$ora;

        $week->owner_id=auth()->id();

        $week->save();
        return redirect('/week');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Week  $week
     * @return \Illuminate\Http\Response
     */
    public function show(Week $week)
    {
        $this->authorize('view', $week);
        return view('week.show', compact('week'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Week  $week
     * @return \Illuminate\Http\Response
     */
    public function edit(Week $week)
    {
        $this->authorize('view', $week);
        return view('week.edit', compact('week'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Week  $week
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Week $week)
    {
        $this->authorize('view', $week);
        $week->giorno=request('giorno');
        switch (request('giorno')) {
            case "Lunedi":
                $week->id_giorno=1;
                break;
            case "Martedi":
                $week->id_giorno=2;
                break;
            case "Mercoledi":
                $week->id_giorno=3;
                break;
            case "Giovedi":
                $week->id_giorno=4;
                break;
            case "Venerdi":
                $week->id_giorno=5;
                break;
            case "Sabato":
                $week->id_giorno=6;
            case "Domenica":
                $week->id_giorno=7;
                break;
        }



        $week->rifiuto=request('rifiuto');

       // $ora=request('orario');
       // $ora=$ora . ":00";
        $week->orario=request('orario');

        $week->save();
        return redirect('/week');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Week  $week
     * @return \Illuminate\Http\Response
     */
    public function destroy(Week $week)
    {
        $this->authorize('view', $week);
        $week->delete();
        return redirect('/week');
    }
}
