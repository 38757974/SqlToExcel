<?php
/**
 * User:sun
 *2020-2020/5/31-12:01 上午
 */

namespace App\Http\Controllers;

use App\Exports\ArrayExport;
use App\Http\Model\StudentModel;
use Maatwebsite\Excel\Facades\Excel;

/**
 * Note:
 */
class TestController extends Controller
{
    public function test()
    {
        $student=StudentModel::all();
        $student=$student->toArray();
        $heads=$student[0];
        $heads=array_keys($heads);
        $export = new ArrayExport($student,$heads);
        return Excel::download($export, 'test.xlsx');


    }

}
