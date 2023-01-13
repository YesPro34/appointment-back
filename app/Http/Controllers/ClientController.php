<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

use function PHPUnit\Framework\returnSelf;

class ClientController extends Controller
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
        //    echo "ok";
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:255',
            'address' => 'required|string|max:255',
    
        ]);
        
        $client = new Client;
        $client->role_id = 4;
        $client->name = $request->name;
        $client->email = $request->email;
        $client->phone = $request->phone;
        $client->address = $request->address;
        $client->web_site = $request->web_site;
        $client->cin = $request->cin;
        $client->type = $request->type;

      
        $client->save();

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
        $client = Client::find($id);
        if($client != null){
            return response()->json($client);
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
        $client = Client::find($id);
        return view('edit-client', compact('client'));
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
        echo "ok";

        $client =  Client::find($id);
        
        if($client != null){
            
            $request->validate([
                    'name' => 'required|string|max:255',
                    'email' => 'required|email|max:255',
                    'phone' => 'required|string|max:255',
                    'address' => 'required|string|max:255'             
            ]);
            
            $client->role_id = 4;
            $client->name = $request->name;
            $client->email = $request->email;
            $client->phone = $request->phone;
            $client->address = $request->address;
            $client->web_site = $request->web_site;
            $client->cin = $request->cin;
            $client->type = $request->type;
        
            // Save the client to the database
            $client->save();
            
            return response()->json(['message' => 'Successfully updated',201]);
        }
        else{
            return response()->json(['error' => 'This item does not exist',404]);
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
        $client =  Client::find($id);
        if($client != null){
            $client->delete();
            return response()->json(['message' => 'Successfully deleted',201]);
        }else{
            return response()->json(['error' => 'This item does not exist',404]);
        }
    }
}