<?php

namespace App\Http\Controllers;


use Barryvdh\DomPDF\Facade\Pdf;

class ClaudioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         return view('claudio.home');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       
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
    public function show(int $id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        return "Destroy";
    }

    public function ativar(int $id)
    {

    }


}
