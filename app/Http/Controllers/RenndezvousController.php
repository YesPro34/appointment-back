<?php

namespace App\Http\Controllers;

use App\Models\Ranndez_Vous;
use Illuminate\Http\Request;

class RenndezvousController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
           // Validate the request data
           $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:255'
        ]);

        // Create a new Succurcale
        $appointment = new Ranndez_Vous();
        $appointment->client_id = $request->client_id;
        $appointment->service_id = $request->service_id;
        $appointment->status = $request->name;
        $appointment->comment = $request->address;
    
      // Save the client to the database
      $appointment->save();

        // Return a successful response
        return response()->json([
            'message' => 'Successfully created',
        ], 201);
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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
