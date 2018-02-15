<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Technical;

class TechnicalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        /*$technicals = Technical::get();      
        return $technicals;*/
        $technicals = Technical::orderBy('id', 'DESC')->paginate(15);      
        return [
            'pagination' => [
                'total'        => $technicals->total(),
                'current_page' => $technicals->currentPage(),
                'per_page'     => $technicals->perPage(),
                'last_page'    => $technicals->lastPage(),
                'from'         => $technicals->firstItem(),
                'to'           => $technicals->lastItem(),
            ],
            'technicals' => $technicals
        ];

    }

    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nombre'   => 'required'            
        ]);

        Technical::create($request->all());

        return;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nombre'   => 'required'               
        ]);

        Technical::find($id)->update($request->all());

        return;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $technical = Technical::findOrFail($id);       
        $technical->delete();
    }
}
