<?php

namespace App\Http\Controllers;

use App\Models\reply;
use App\Http\Controllers\Controller;
use App\Http\Requests\StorereplyRequest;
use App\Http\Requests\UpdatereplyRequest;
use Illuminate\Http\Request;

class ReplyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        reply::create([
            'post_id' => $request->postid,
            'user_id' => $request->userid,
            'answers' => $request->reply
        ]);

        return redirect('/Forum')->with('success','Reply submitted succesfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(reply $reply)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(reply $reply)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatereplyRequest $request, reply $reply)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(reply $reply)
    {
        //
    }
}
