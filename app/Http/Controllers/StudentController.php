<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // dd('students index');
        // $data = [
        //     [
        //         'id' => 1,
        //         'name' => 'amy',
        //     ],
        //     [
        //         'id' => 2,
        //         'name' => 'bob',
        //     ],
        //     [
        //         'id' => 3,
        //         'name' => 'cat',
        //     ]
        // ];

        //原生 SQL
        // $data = DB::select('select * from students');

        // get()   feachAll 多筆 array foreach
        // first() feach 單筆
        // $data = DB::table('students')->get(); // Query Builder
        $data = DB::table('students')->where('id', 1)->get();
        dd($data);

        return view('student.index',['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //dd('students create');
        return view('student.create');
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // dd('students edit');
        return view('student.edit', ['id' => $id]);
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

    public function excel()
    {
        dd('students excel');
        // return view('student.excel');
    }

    public function test()
    {
        $data = 'test ok';
        $data = [
            [
                'id' => 1,
                'name' => 'amy',
            ],
            [
                'id' => 2,
                'name' => 'bob',
            ],
            [
                'id' => 3,
                'name' => 'cat',
            ]
        ];
        return view('student.test', ['data' => $data]);
    }

    public function child()
    {
        // dd('students child');
        return view('student.child');
    }

    //front
    public function html()
    {
        // dd('students html');
        return view('page.html');
    }
    public function js()
    {
        return view('page.js');
    }
    //end
    public function php()
    {
        return view('page.php');
    }
    public function python()
    {
        return view('page.python');
    }
}
