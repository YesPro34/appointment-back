<?php

namespace App\Http\Controllers;
use App\Models\Succurcale;
use Illuminate\Http\Request;

class SuccurcaleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public static function index()
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
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:255'
        ]);

        // Create a new Succurcale
        $succurcale = new Succurcale;
        $succurcale->role_id = 4;
        $succurcale->name = $request->name;
        $succurcale->address = $request->address;
    
      // Save the client to the database
      $succurcale->save();

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
    public static function show($id)
    {
        $succurcale = Succurcale::find($id);
        if($succurcale != null){
            return response()->json($succurcale);
        }else{
           return response()->json(['error' => 'This item does not exist'],404);
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
            $succurcale = Succurcale::find($id);
            return view('edit-succurcale', compact('succurcale'));
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
            $succurcale = Succurcale::find($id);

            if($succurcale != null){
                $request->validate([
                    'name' => 'required|string|max:255',
                    'address' => 'required|string|max:255'
                ]);
                $succurcale->role_id = 4;
                $succurcale->name = $request->name;
                $succurcale->address = $request->address;
            
                // Save the client to the database
                $succurcale->save();
                return  response()->json(["message" => "Successfully updated"],201) ;

            }else{
                return response()->json(['error' => 'This item does not exist'],404);
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
            $succurcale =  Succurcale::find($id);
            if($succurcale != null){
                $succurcale->delete();
                return  response()->json(["message" => "Successfully deleted"],201) ;
            }else{
                return  response()->json(["error" => "This item does not exist"],404) ;
            }
    }
}
