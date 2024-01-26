<?php

namespace App\Http\Controllers;

use App\Models\Categorynews;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;

class CategorynewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Categorynews::all();
        return view('dashboard.categorynews.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'kategori' => 'required',
            'slug' => '',
        ]);

        if ($validator->fails()){
            return response()->json($validator->errors(), 422);
        }

        $input = $request->all();

        {
            Categorynews::create($input);
        }
        return redirect('dashboard/categorynews')->with('success', 'Data Berhasil Ditambah!');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $categorynews = Categorynews::findOrFail($id);
        return view('dashboard.categorynews.edit', compact('categorynews'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Categorynews $categorynews)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Categorynews $categorynews)
    {
        $validator = Validator::make($request->all(), [
            'kategori' => 'required',
            'slug' => '',
        ]);

        if ($validator->fails()){
            return response()->json($validator->errors(), 422);
        }
        $categorynews->kategori = $request->kategori;
        $categorynews->slug = $request->slug;
        $categorynews->save();
        return redirect('dashboard/categorynews')->with('success', 'Data Berhasil Ditambah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Categorynews $categorynews)
    {
        File::delete('uploads/' . $categorynews->gambar);
        $categorynews->delete();

        return redirect('dashboard/categorynews')->with('success', 'Data Berhasil Ditambah!');
    }
}
