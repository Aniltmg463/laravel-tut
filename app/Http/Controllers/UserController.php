<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        echo 'ALl Users Data';
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        echo 'Add New User Page';
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        echo 'This is store';
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        echo 'Details of User :' . $id;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        echo 'Edit Page';
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        echo 'this is update';
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        echo 'this is destroy';
    }
}