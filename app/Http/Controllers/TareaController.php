<?php

namespace App\Http\Controllers;

use App\Models\Tarea;
use Illuminate\Http\Request;

class TareaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
		$this->authorize('viewAny', Tarea::class);
        return view('tareas.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
		$this->authorize('create', Tarea::class);
		return view('tareas.create');
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
    public function show(Tarea $tarea)
    {
        return view('tareas.show', [
			'tarea'=>$tarea
		]);
    }

    /**
     * Show the form for editing the specified resource.
     */
	public function edit(Tarea $tarea)
	{
		$this->authorize('update', $tarea);
	
		return view('tareas.edit', [
			'tarea' => $tarea
		]);
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
