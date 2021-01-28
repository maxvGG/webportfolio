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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('werken.create');
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
        ]);

        $werk = new Werk([
            'title' => $request->get('title'),
            'blog' => $request->get('blog'),
            'imageUrl' => $this->saveimg($request),
        ]);
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
        $werk = Werk::find($id);
        // echo $werk;
        // return ;
        return view('werken.edit', ['werk' => $werk, 'id' => $id]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        // //
        echo Werk::find($request);
        return view('werken.edit');
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
        // $title = $request->input('title');
        // $blog = $request->input('blog');
        // $img = $request->input('imageUrl');
        $request->update([
            'title' => $request->input('title'),
            'blog' => $request->input('blog'),
            'img' => $request->input('imageUrl'),
            'id' => $id,
        ]);
        // $updated = DB::update("UPDATE `werks` SET `title` = ?, `blog` = ?, `imageUrl` = ? WHERE id=?", [$title, $blog, $img, $id]);
        // var_dump($updated);
        // return redirect('/werken')->with('success', "Werk updated!");
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
        $old_image = $werk->file;
        unlink(storage_path('app/public/work/' . $old_image));
        $werk->delete();
        // DB::delete('delete from werks where id = ?', [$id]);
        return redirect('/werken')->with('success', "Werk Deleted!");
    }
}
