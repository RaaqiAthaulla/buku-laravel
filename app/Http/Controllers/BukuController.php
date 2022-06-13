<?php

namespace App\Http\Controllers;

use App\Models\buku;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->has("search")){
            $bukus = buku::where('judul','LIKE','%'.$request->search.'%')->get();

        }
        else{
            $bukus = buku::all(); 
        }
        return view('list',['bukus'=>$bukus]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $buku= $request->all();
        buku::create( [
        'judul'=>request('judul'),
        "image"=>$request->file('image')->store('post-image'),
        "author"=>request('author'),
        "synopsis"=>request('synopsis'),
        "penerbit"=>request('penerbit')
        ]);
        return redirect("/list")->with("Succes");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(buku $id)
    {
        $buku=buku::find($id);
        return view('detail',['bukus'=>$buku]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(buku $id)
    {
        $buku=buku::find($id);
        return view('edit',['bukus'=>$buku]);
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
        buku::find($id)->update( [
            'judul'=>request('judul'),
            "image"=>$request->file('image')->store('post-image'),
            "author"=>request('author'),
            "penerbit"=>request('penerbit'),
            "synopsis"=>request('synopsis')
            ]);
            return redirect("/list")->with("Succes");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bukus = buku::find($id);
        $bukus->each->delete();
        return redirect("/list");
    }
}
