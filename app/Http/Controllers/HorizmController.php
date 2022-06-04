<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Http;
use App\Models\Horizm;
use Illuminate\Http\Request;

use App\Exports\HorizmCSVExport;
use Maatwebsite\Excel\Facades\Excel;

class HorizmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        return view('layouts/home');
            
    }


    public function export() 
    {
        return Excel::download(new HorizmCSVExport, 'HorizmCSVExport.xlsx');
    }

    /**
     * 
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function getWord(Request $request)
    {

        $api_data = collect(Http::get('https://jsonplaceholder.typicode.com/posts')->json());

        foreach ($api_data as $value) {


            $iduser = $value['userId'];
            $username = 'Usuario' . $value['userId'];

            $idpost = $value['id'];


            $titleDat = $value['title'];
            $descriptionDat = $value['body'];

                $valortitulo =strlen($titleDat) * 2;
                $valordescripccion =strlen($descriptionDat);
            
           

            $postvalue = $valortitulo + $valordescripccion;

            $uservalue = $postvalue * 10;

            Horizm::firstOrCreate(array(
                'idUsers' => $iduser,
                'nameUsers' => $username,
                'title' => $titleDat,
                'userRating' => $uservalue,
                'description' => $descriptionDat,
                'idPost' => $idpost,
                'postRating' => $postvalue,
            ));
        }


        $data = Horizm::where('title', 'LIKE', '%' . $request->keyword . '%')->orWhere('description', 'LIKE', '%' . $request->keyword . '%')->get();
        return response()->json($data);
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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Horizm  $horizm
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Horizm  $horizm
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Horizm  $horizm
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Horizm  $horizm
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        //
    }
}
