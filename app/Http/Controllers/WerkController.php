<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Werk;

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
        $werken = Werk::all();
        return view('werken.index', compact('werken'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        // return view('werken.create');
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
        ]);

        $werk = new Werk([
            'title' => $request->get('title'),
            'blog' => $request->get('blog'),
        ]);
        $werk->save();
        return redirect('index')->with('succesvol', 'Werk opgeslagen !');
        // return view('werken.index');
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
        return __METHOD__ . ':' . $id;
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
        $werk = Werk::find($id);
        return view('werken.edit', compact('werk'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    { {
            $request->validate([
                'title' => 'required',
                'blog' => 'required',
            ]);

            $werk = Werk::find($id);
            $werk->title = $request->get('title');
            $werk->blog = $request->get('blog');
            $werk->save();

            return redirect('/werken')->with('success', "Werk updated!");
        }
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
        return __METHOD__ . ':' . $id;
    }
}
