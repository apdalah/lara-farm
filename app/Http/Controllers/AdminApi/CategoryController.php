<?php

namespace App\Http\Controllers\AdminApi;

use App\Http\Resources\CategoryResource;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return CategoryResource::collection(Category::all());
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
           'name'=>'required'
        ]);
        $category= Category::create([
            'name'=> $request->name
        ]);

        return response(['message'=>'Category Created', 'category'=>$category]);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $request->validate([
            'name'=>'required'
        ]);

        $category->update([
            'name'=> $request->name
        ]);

        // if ($request->has('role')) {
        //     $category->syncRoles($request->role['name']);
        // }

        // if ($request->has('permissions')) {
        //     $category->syncPermissions(collect($request->permissions)->pluck('id')->toArray());
        // }

        return response(['message'=>'Category Updated', 'category'=>$category]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return Category::destroy($id);
    }
}
