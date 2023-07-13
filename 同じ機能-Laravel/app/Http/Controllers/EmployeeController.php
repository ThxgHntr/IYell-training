<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employees = DB::table('社員')->paginate(3);

        return view('employee.index', ['employees' => $employees]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('employee.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        DB::insert(
            'INSERT INTO 社員(社員番号, 氏名, 部署, 性別) VALUES(?, ?, ?, ?)',
            [
                $request->empID,
                $request->name,
                $request->dept,
                $request->gender,
            ]
        );
        return redirect()->route('succeed');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $employee = DB::select('SELECT * FROM 社員 where id = ?', [$id]);

        return view('employee.show', ['employee' => $employee[0]]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $employee = DB::select('SELECT * FROM 社員 where id = ?', [$id]);

        return view('employee.edit', ['employee' => $employee[0], 'id' => $id]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        DB::update(
            'UPDATE 社員 SET 社員番号=?, 氏名=?, 部署=?, 性別=? WHERE id = ?',
            [
                $request->empID,
                $request->name,
                $request->dept,
                $request->gender,
                $id,
            ]
        );
        return redirect()->route('succeed');
    }

    public function delete(string $id)
    {
        $employee = DB::select('SELECT * FROM 社員 where id = ?', [$id]);

        return view('employee.delete', ['employee' => $employee[0], 'id' => $id]);
    }

    /**
     * Remove the specified resource FROM storage.
     */
    public function destroy(string $id)
    {
        DB::delete('DELETE FROM 社員 WHERE id = ?', [$id]);
        return redirect()->route('succeed');
    }
}
