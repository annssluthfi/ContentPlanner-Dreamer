<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Planner;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Carbon\Carbon;

class PlannerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        return view('dreamer.home', [
            'planners' => Planner::where('username', auth()->user()->username)->get()
        ]);
    }

    public function show($id)
    {
        $planner = Planner::findOrFail($id);
        return view('pages.planner.detail', compact('planner'));

        // return view('pages.planner.detail', [
        //     'planner' => $planner
        // ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('dreamer.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        // $validateData = $request->validate([
        //     'date' => 'required',

        // ]);
        $request['date'] = Carbon::parse($request->date)->format('Y-m-d');
        $request['username'] = auth()->user()->username;

        Planner::create($request->all());

        return redirect()->route('planner.index');
    }

    /**
     * Display the specified resource.
     */

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        //
        $planner = Planner::findOrFail($request->input('id'));
        return view('dreamer.detail', compact('planner'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $planner = Planner::findOrFail($id);

        $planner->update($request->all());

        return redirect()->route('planner.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $planner = Planner::findOrFail($id);

        $planner->delete();

        return redirect()->route('planner.index');
    }
}
