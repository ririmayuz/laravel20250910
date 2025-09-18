<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Student;
use App\Models\Phone;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //原生 SQL
        // $data = DB::select('select * from students');

        // get()   feachAll 多筆 array foreach
        // first() feach 單筆
        // $data = DB::table('students')->get(); // Query Builder
        // $data = DB::table('students')->where('id', 1)->get();
        // dd($data);

        // $data = Student::all();
        // $data = Student::get();
        
        //--------------------------------------------------------

        $data = Student::with('phoneRelation', 'hobbiesRelation')->get();
        // $studentHobbies = $data[0]->hobbiesRelation;
        // dd($studentHobbies);
        // dd($data);

        // $data = [
        //     [
        //         'id' => 1,
        //         'name' => 'amy',
        //         'phone' => '09123',
        //         'hobbies' => ['php','python'],
        //         'hobbyString' => 'PHP, Python'
        //     ],
        //     [
        //         'id' => 2,
        //         'name' => 'bob',
        //         'phone' => '0922',
        //         'hobbies' => []
        //     ]
        // ];

        // 我在前端foreach many
        // 我在後端foreach many

        foreach ($data as $key => $value) {
            $dataHobbies = $value->hobbiesRelation;

            // $hobbyString = '';
            $hobbyArray = [];
            foreach ($dataHobbies as $keyHobby => $valueHobby) {
                array_push($hobbyArray, $valueHobby->hobby);
            };

            $hobbyString = join(',', $hobbyArray);
            //  dd($hobbyString);
            $data[$key]['hobbyString'] = $hobbyString;
            // dd($data[$key']
        }

        // dd($data);
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
        // 這兩行效果一樣
        // $input = $request->all();
        // $input = $request->get();

        // array:2 [▼ // app\Http\Controllers\StudentController.php:50
        // "name" => "水餃"
        // "phone" => "0955"
        //]
        $input = $request->except('_token');
        // dd($input);

        // 主表(注意:要存檔才會有id)
        $data = new Student;
        $data->name = $input['name'];
        $data->save();

        // 子表(注意:也要存檔)
        $dataPhone = new Phone;
        $dataPhone->student_id = $data->id;
        $dataPhone->phone = $input['phone'];
        $dataPhone->save();
 
        // return redirect('/students');
        return redirect()->route('students.index');
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
        // dd("students id = $id edit ok");
        // $data = [
        //     'id' => $id
        // ];
        $data = Student::with('phoneRelation')->find($id);
        // dd($data);
        return view('student.edit', ['data' => $data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // dd('update ok');
        // dd($data);

        //   array:2 [▼ // app\Http\Controllers\StudentController.php:99
        //   "name" => "dog"
        //   "phone" => "123"
        // ]

        // form input       
        $input = $request->except('_token', '_method');

        // 抓主表資料
        $data = Student::find($id);
        $data->name = $input['name'];
        $data->save();

        // 刪除子表
        Phone::where('student_id', $id)->delete();

        // 新增子表
        $dataPhone = new Phone;
        $dataPhone->student_id = $data->id;
        $dataPhone->phone = $input['phone'];
        $dataPhone->save();

        return redirect()->route('students.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // dd("students destroy ok $id");

        // 先刪除子表
        Phone::where('student_id', $id)->delete();
        Student::where('id', $id)->delete();
        
        // $data = Student::find($id);
        // $data->delete();
        return redirect()->route('students.index');
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
