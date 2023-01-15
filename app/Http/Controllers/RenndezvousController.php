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
            'comment' => 'string|max:255',
            'appointment_date' => 'required|date|after_or_equal:today',
            'appointment_time' => 'required|date_format:H:i'
        ]);
        $client = Client::first();
        if (!$client) {
            return response()->json(['error' => 'Client not found'], 404);
        }
        $service = Service::find($request->service_id);
        if (!$service) {
            return response()->json(['error' => 'Service not found'], 404);
        }
        $appointment = new Ranndez_Vous();
        $appointment->client()->associate($client);
        $appointment->service()->associate($service);
        $appointment->status = $request->status;
        $appointment->comment = $request->comment;
        $appointment->appointment_date = $request->appointment_date;
        $appointment->appointment_time = $request->appointment_time;
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
    public static function show($id)
    {
        $appointment = Ranndez_Vous::find($id);
        if ($appointment != null) {
            return response()->json($appointment);
        } else {
            return response()->json(['error' => 'This item does not exist'], 404);
        }
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
    public static function update(Request $request, $id)
    {
        $appointment = Ranndez_Vous::find($id);

        if ($appointment != null) {
            $request->validate([
                'status' => 'string|max:255',
                // 'comment' => 'string|max:255'
            ]);

            // $appointment->client_id = $request->client_id;
            // $appointment->service_id = $request->service_id;
            $appointment->status = $request->status;
            // $appointment->comment = $request->comment;
            // $appointment->appointment_date = $request->appointment_date;
            // $appointment->appointment_time = $request->appointment_time;

            // Save the client to the database
            $appointment->save();
            return  response()->json(["message" => "Successfully updated"], 201);
        } else {
            return response()->json(['error' => 'This item does not exist'], 404);
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
        $appointment =  Ranndez_Vous::find($id);
        if ($appointment != null) {
            $appointment->delete();
            return  response()->json(["message" => "Successfully deleted"], 201);
        } else {
            return  response()->json(["error" => "This item does not exist"], 404);
        }
    }


    public static function showAll()
    {
        // return appointments with services and client
        $appointments = Ranndez_Vous::with('service', 'client')->get();

        return response()->json($appointments);
    }
}
