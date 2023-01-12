<?php

namespace App\Http\Controllers;

use App\Models\Ranndez_Vous;
use App\Models\Service;
use App\Models\Client;
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
    public static function store(Request $request)
    {
           // Validate the request data
           $request->validate([
                'status' => 'required|string|max:255',
                'comment' => 'required|string|max:255'
        ]);

            $client = Client::find($request->client_id);
            if(!$client){
                return response()->json(['error' => 'Client not found'], 404);
            }
            $service = Service::find($request->service_id);
            if(!$service){
                return response()->json(['error' => 'Service not found'], 404);
            }

            $appointment = new Ranndez_Vous();
            $appointment->client()->associate($client);
            $appointment->service()->associate($service);
            $appointment->status = $request->status;
            $appointment->comment = $request->comment;
            $appointment->save();

            return response()->json([
                'message' => 'Appointment Successfully created',
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
