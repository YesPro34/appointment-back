<?php

namespace App\Http\Controllers;

use App\Models\Technicien;
use Illuminate\Http\Request;

class TechnicienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public static function index()
    {
        //
        $techniciens = Technicien::all();
        return response()->json($techniciens);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public static function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'cin' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
        ]);
        
        $technicien = new Technicien;
        
        $technicien->role_id = 4;
        $technicien->succurcale_id = 4;
        $technicien->name = $request->name;
        $technicien->cin = $request->cin;
        $technicien->phone = $request->phone;
    
        $technicien->save();

        return response()->json(['message' => 'Successfully created',201]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public static function show($id)
    {
        //
        $technicien = Technicien::find($id);
        if($technicien != null){
            return response()->json($technicien);
        }else{
            return response()->json(['message' => 'This item does not exist',404]);
    }

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public static function edit($id)
    {
        //
        $technicien = Technicien::find($id);
        return view('edit-client', compact('technicien'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public static function update(Request $request, $id)
    {
        //
        $technicien = Technicien::find($id);
        if ($technicien != null){
        $request->validate([
            'name' => 'required|string|max:255',
            'cin' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
        ]);
        
        $technicien = new Technicien;
        
        $technicien->role_id = 4;
        $technicien->succurcale_id = 4;
        $technicien->name = $request->name;
        $technicien->cin = $request->cin;
        $technicien->phone = $request->phone;
    
        $technicien->save();
        return response()->json(['message' => 'Successfully updated',201]);
        }
        else{
            return response()->json(['message' => 'This item does not exist',404]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public static function destroy($id)
    {
        //
        $technicien = Technicien::find($id);

        if($technicien != null){
            $technicien->delete();
            return response()->json(['message' => 'Successfully deleted',201]);
        }
        else{
            return response()->json(['message' => 'This item does not exist',404]);
        }
    }
}