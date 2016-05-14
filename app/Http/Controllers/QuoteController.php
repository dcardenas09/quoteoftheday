<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class QuoteController extends Controller
{
    public function index()
    {
        return response() ->json($this->quotesArr());
    }

    public function quotesArr(){
        return array(
        array(
            'text' => 'Do or not do, there is no try.',
            'author' => 'Yoda'
        ),
        array(
            'text' => 'There is no spoon.',
            'author' => 'Little Bald Kid from The Matrix'
        ),
        array(
            'text' => 'Fly pelican fly.',
            'author' => 'Tony Montana'
        ),
        array(
            'text' => 'Plata, o plomo?',
            'author' => 'Pablo Escobar'
        ),
        array(
            'text' => 'If I told you that a flower bloom in a dark room, would you trust it?',
            'author' => 'Kendrick Lamar'
        ),
        array(
            'text' => 'Straight up shit is real and any day could be your last in the jungle.',
            'author' => 'Nas'
        ),
    );
    }
    
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $quotes = $this->quotesArr();
        if ($id >= sizeof($quotes)){
            $id = sizeof($quotes) -1;
        }
        return response()->json( $quotes[$id] );
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
