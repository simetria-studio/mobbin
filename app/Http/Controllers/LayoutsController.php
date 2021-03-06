<?php

namespace App\Http\Controllers;

use App\Models\Layout;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic;
use Illuminate\Support\Str;

class LayoutsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $layouts = Layout::get();
        return view('painel.pages.layouts', get_defined_vars());
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
        $data = $request->all();
        // dd($data);
        // $price = str_replace(['.', ','], ['', '.'], $data['price']);
        $img = ImageManagerStatic::make($data['image']);

        $name = Str::random() . '.jpg';

        $originalPath = storage_path('app/public/layouts/');

        $img->save($originalPath . $name);


        $product = Layout::create([
            'title' => $data['title'],
            'link_view' => $data['link_view'],
            'link_down' => $data['link_down'],
            'category' => $data['category'],
            'free' => $request->input('free'),
            'image' => $name,
            'description' => $data['description'],

        ]);
        return redirect()->back()->with('success', 'Produto criado com sucesso!');
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
