<?php

namespace App\Http\Controllers\AdminApi;

use App\Http\Resources\PlantResource;
use App\Plant;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PlantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return PlantResource::collection(Plant::with('category')->get());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
           'name'=>'required',
           'category' => 'required'
        ]);
        $plant= Plant::create([
            'name'=> $request->name,
            'category_id'=> $request->category['id']
        ]);


        // if ($request->has('role')) {
        //     $plant->assignRole($request->role['name']);
        // }

        // if ($request->has('permissions')) {
        //     $plant->givePermissionTo(collect($request->permissions)->pluck('id')->toArray());
        // }

        return response(['message'=>'Plant Created', 'plant'=>$plant]);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Plant $plant)
    {
        $request->validate([
            'name'=>'required',
            'category_id' => 'required'
        ]);

        $plant->update([
            'name'=> $request->name,
            'category_id'=> $request->category_id,
        ]);

        // if ($request->has('role')) {
        //     $plant->syncRoles($request->role['name']);
        // }

        // if ($request->has('permissions')) {
        //     $plant->syncPermissions(collect($request->permissions)->pluck('id')->toArray());
        // }

        return response(['message'=>'Plant Updated', 'plant'=>$plant]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return Plant::destroy($id);
    }
}
