<?php

namespace App\Http\Controllers;

use App\Models\Prompt;
use Illuminate\Http\Request;

class PromptController extends Controller
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Prompt $prompt)
    {
        return view('blade_pages.user.prompt_show_test', compact('prompt'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Prompt $prompt)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Prompt $prompt)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Prompt $prompt)
    {
        //
    }
}
