<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
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
        //
        $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255',
            'description' => 'required|string|max:255',
        ]);
        $service = new Service;
        
        $service->succurcale_id = 4;
        $service->name = $request->name;
        $service->slug = $request->slug;
        $service->description = $request->description;
    
        $service->save();

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
        $service = Service::find($id);
        if($service != null){
            return response()->json($service);
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
        $service = Service::find($id);
        return view('edit-client', compact('service'));
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
        $service = Service::find($id);

        if($service != null){
        $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255',
            'description' => 'required|string|max:255',
        ]);

        $service->succurcale_id = 4;
        $service->name = $request->name;
        $service->slug = $request->slug;
        $service->description = $request->description;
    
        $service->save();
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
        $service = Service::find($id);

        if($service != null){
            $service->delete();
            return response()->json(['message' => 'Successfully deleted',201]);
        }
        else{
            return response()->json(['message' => 'This item does not exist',404]);
        }
}
}