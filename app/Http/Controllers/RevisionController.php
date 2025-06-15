<?php

namespace App\Http\Controllers;

use App\Models\Revision;
use Illuminate\Http\Request;
use Carbon\Carbon;

class RevisionController extends Controller
{
    /**
     * Display a listing of the resource.
     */


     
public function submitRevisionAjax(Request $request)
{
    $request->validate([
        'order_id' => 'required',
        'revision_request' => 'required',
    ]);

    $order_id = $request->order_id;
    $revision_request = $request->revision_request;
    $deadline = $request->order_id_revision_deadline;

    if (!$deadline) {
        return response()->json(['message' => 'Deadline missing.'], 400);
    }

    $deadline_time = Carbon::parse($deadline);
    $now = Carbon::now();

    $revisionLimit = Revision::first(); // you can add where condition if needed

    if (!$revisionLimit) {
        return response()->json(['message' => 'Revision limit not set.'], 400);
    }

    // Add allowed days and hours to the deadline
    $allowed_until = $deadline_time->copy()
                        ->addDays($revisionLimit->days)
                        ->addHours($revisionLimit->hours);

    if ($now->greaterThan($allowed_until)) {
        return response()->json(['message' => 'Revision time limit has passed.'], 403);
    }

    // --- Logic to store the revision ---
    // Example:
    // RevisionRequest::create([...])

    return response()->json(['message' => 'Revision submitted successfully.']);
}

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
