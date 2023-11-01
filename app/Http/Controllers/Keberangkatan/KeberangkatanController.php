<?php

namespace App\Http\Controllers\Keberangkatan;

use App\Http\Controllers\Controller;
use App\Models\keberangkatan;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class KeberangkatanController extends Controller
{
    public function index()
    {
        $user = Auth::id();

        $keberangkatans = keberangkatan::where('user_id', $user)->with('bus')->get();

        // foreach ($keberangkatans as $keberangkatan) {


        //     var_dump(Carbon::parse($keberangkatan->keberangkatan)->format('h:i'));
        //     exit;
        // }


        // return $keberangkatans->bus;
        return view('Admin.Keberangkatan.index')->with('keberangkatans', $keberangkatans);
    }


    public function show($id)
    {
        return view('Admin.Keberangkatan.detail', ['keberangkatan' => keberangkatan::findorFail($id)]);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    }

    /**
     * Display the specified resource.
     */


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
