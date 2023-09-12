<?php

namespace App\Http\Controllers;

use App\Models\Trainertable;
use App\Models\Coursedate;
use App\Models\Course;
use App\Models\SportEquipment;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $trainers   = Trainertable::where('sportSection_id', env('KURS_ABTEILUNG'))->get();
        $coursdates = Coursedate::where('sportSection_id', env('KURS_ABTEILUNG'))
                                ->where('kursstarttermin', '>=' , date('Y-m-d', strtotime('now')))
                                ->get();
        $courses    = Course::where('sportSection_id', env('KURS_ABTEILUNG'))->get();
        $sportEquipments = SportEquipment::where('sportSection_id', env('KURS_ABTEILUNG'))->get();

        return view('pages.home' , [
                    'trainers'        => $trainers,
                    'countTrainers'   => $trainers->count(),
                    'coursdates'      => $coursdates,
                    'countCoursdates' => $coursdates->count(),
                    'courses'         => $courses,
                    'sportEquipments' => $sportEquipments,
        ]);
    }

    public function offer()
    {
        $coursdates = Coursedate::where('sportSection_id', env('KURS_ABTEILUNG'))
            ->where('kursstarttermin', '>=' , date('Y-m-d', strtotime('now')))
            ->get();

        return view('pages.offer' , [
            'countCoursdates' => $coursdates->count(),
        ]);
    }

    public function sportType()
    {
        return view('pages.sportType' );
    }

    public function trainer()
    {
        $trainers   = Trainertable::where('sportSection_id', env('KURS_ABTEILUNG'))->get();

        return view('pages.trainer'  , [
            'trainers'        => $trainers,
            'countTrainers'   => $trainers->count(),
        ]);
    }

    public function sportUnit()
    {
        $sportEquipments = SportEquipment::where('sportSection_id', env('KURS_ABTEILUNG'))->get();

        return view('pages.sportUnit' , [
            'countSportEquipments' => $sportEquipments->count(),
            'sportEquipments' => $sportEquipments,
        ]);
    }

    public function course()
    {
        $courses    = Course::where('sportSection_id', env('KURS_ABTEILUNG'))->get();

        return view('pages.course' , [
            'courses'         => $courses
        ]);
    }

}
