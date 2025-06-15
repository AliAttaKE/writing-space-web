<?php

namespace App\Http\Controllers;

use App\Models\Revision;
use Illuminate\Http\Request;


class RevisionController extends Controller
{
    /**
     * Display a listing of the resource.
     */


     public function index()
    {
        $revisions = Revision::all();
        return view('backend.customer.revisions.index', compact('revisions'));
    }

    public function create()
    {
        return view('backend.customer.revisions.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'days' => 'required|integer|min:0',
            'hours' => 'required|integer|min:0',
        ]);

        Revision::create($request->only('days', 'hours'));

        return redirect()->route('admin.revisions.index')->with('success', 'Revision added successfully.');
    }

    public function edit($id)
    {
        $revision = Revision::findOrFail($id);
        return view('backend.customer.revisions.edit', compact('revision'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'days' => 'required|integer|min:0',
            'hours' => 'required|integer|min:0',
        ]);

        $revision = Revision::findOrFail($id);
        $revision->update($request->only('days', 'hours'));

        return redirect()->route('admin.revisions.index')->with('success', 'Revision updated successfully.');
    }

    public function destroy($id)
    {
        Revision::destroy($id);
        return redirect()->route('admin.revisions.index')->with('success', 'Revision deleted successfully.');
    }
}
