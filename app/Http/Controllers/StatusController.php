<?php

namespace App\Http\Controllers;

use App\Status;
use Illuminate\Http\Request;

class StatusController extends Controller
{
    public function getIndex()
    {
        $statuses = Status::all();
        return view('status.index', ['statuses' => $statuses]);
    }

    public function getCreateStatus()
    {
        return view('status.create');
    }

    public function createStatus(Request $request)
    {

        $status = new Status([
            'status_description' => $request->input('description')
        ]);
        $status->save();
        return redirect()
            ->route('status.index')
            ->with('info', 'Creada estatus nuevo: ' . $request->input('description'));
    }

    public function getEditStatus($id)
    {
        $status = Status::find($id);
        return view('status.edit', ['status' => $status]);
    }

    public function editStatus(Request $request)
    {
        $status = Status::find($request->input('id'));

        $status->status_description = $request->input('description');
        $status->save();

        return redirect()
            ->route('status.index')
            ->with('info', 'Estatus editado: ' . $request->input('description'));
    }

    public function deleteStatus($id)
    {
        $status = Status::find($id);
        $status->delete();

        return redirect()
            ->route('status.index')
            ->with('info', 'Estatus eliminada ');
    }
}
