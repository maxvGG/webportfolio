<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Werk;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use League\CommonMark\Inline\Element\Image;
use Illuminate\Support\Facades\Storage;
use League\Flysystem\File;


// use CreateWerksTable;

class WerkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        if (Auth::check()) {
            $werken = Werk::all();
            return view('werken.index', compact('werken'));
        }
        return Redirect::to("login")->withSuccess('you do not have access');
    }
    /**
     * Display work
     * 
     * @return \Illuminate\Http\Response
     */
    public function showwork()
    {

        $werken = Werk::all();
        return view('work', compact('werken'));
    }

    /**
     * Display project
     * 
     * @return \Illuminate\Http\Response
     */
    public function showProject($id)
    {
        $werken = Werk::find($id);
        // var_dump($werken);
        return view('showWork', compact('werken'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (Auth::check()) {
            return view('werken.create');
        }
        return Redirect::to("login")->withSuccess('you do not have access');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'title' => 'required',
            'blog' => 'required',
            'imageUrl' => 'required|file|image',
            'url' => 'required',
            'taal' => 'required',
        ]);

        $werk = new Werk([
            'title' => $request->get('title'),
            'blog' => $request->get('blog'),
            'imageUrl' => $this->saveimg($request),
            'url' => $request->get('url'),
            'taal' => $request->get('taal'),
        ]);
        // echo $request->url;
        $this->saveimg($request);
        $werk->save();

        return redirect('werken')->with('succesvol', 'Werk opgeslagen !');
    }
    /**
     * upload img to directory
     * 
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function saveimg(Request $request)
    {
        // move img to public folder
        $imgname = $request->imageUrl->store('work');

        // get and return image name to save to the db; 
        return $imgname;
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (Auth::check()) {
            $werk = Werk::find($id);
            return view('werken.edit', ['werk' => $werk, 'id' => $id]);
        }
        return Redirect::to("login")->withSuccess('you do not have access');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        if (Auth::check()) {
            $werk = Werk::find($request);
            return view('werken.edit', compact('werk'));
        }
        return Redirect::to("login")->withSuccess('you do not have access');
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int $id 
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $werk = Werk::find($id);
        $werk->title = $request->get('title');
        $werk->blog = $request->get('blog');
        $werk->url = $request->get('url');
        $werk->taal = $request->get('taal');

        $old_image = $werk->imageUrl;
        unlink(storage_path('app/public/' . $old_image));
        $werk->imageUrl = $this->saveimg($request);
        $werk->save();

        return redirect('/werken')->with('success', "Werk updated!");
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $werk = Werk::find($id);
        $old_image = $werk->imageUrl;
        unlink(storage_path('app/public/' . $old_image));
        $werk->delete();
        return redirect('/werken')->with('success', "Werk Deleted!");
    }
}
