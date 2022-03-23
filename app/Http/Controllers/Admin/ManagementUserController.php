<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class ManagementUserController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            return DataTables::of(User::query())
                ->addIndexColumn()
                ->toJson();
        }
        return view("admin.management-user.index");
    }

    public function store(Request $request)
    {
        $request->validate([
            'id' => 'nullable|numeric',
            'username' => 'required|string|min:4',
            'nama' => 'required|string',
            'password' => 'nullable|string|min:4',
            'no_hp' => 'nullable|min:10'
        ]);

        User::updateOrCreate(
            ['id' => $request->id],
            ($request->password) ? array_merge($request->except('password'), ['password' => bcrypt($request->password)]) : []
        );
        return response()->json([
            'status' => true,
            'message'  => "Berhasil menambahkan data"
        ]);
    }

    public function edit($id)
    {
        return User::find($id);
    }

    public function destroy($id)
    {
        User::destroy($id);
        return response()->json([
            'status' => true,
            'message'  => "Berhasil menghapus data"
        ]);
    }
}
