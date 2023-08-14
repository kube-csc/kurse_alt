<?php

namespace App\Http\Controllers;

use App\Models\Trainertable;
use App\Models\Coursedate;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $trainers   = Trainertable::where('sportSection_id', env('KURS_ABTEILUNG'))->get();
        $coursdates = Coursedate::where('sportSection_id', env('KURS_ABTEILUNG'))->get();

        return view('pages.home' , [
                    'trainers'        => $trainers,
                    'countTrainers'   => $trainers->count(),
                    'coursdates'      => $coursdates,
                    'countCoursdates' => $coursdates->count(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
