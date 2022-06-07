<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Models\operation;
use App\Http\Controllers\Select;
use Google\Service\ServiceControl\Auth;
use Google\Service\Sheets\ChartData;
use \Illuminate\Support\Facades\DB;

class ChartController extends Controller
{
    public function googlePieChart()
    /* {
        $data = DB::table('operations')
           ->select(
            DB::raw('op_case as op_case'),
            DB::raw('count(*) as number'))
           ->groupBy('op_case')
           ->get();
        $array[] = ['op_case', 'number'];
        foreach($data ->toArray() as $row)
        {
            $output[]=array(
                'op_case'=>$row['op_case'],
                'number'=>$row['number']
            );
        }
       echo json_encode($output);

    }*/
    {
        $result =
            DB::select(DB::raw("SELECT  case when op_case=1 then 'Done' else 'Not Done' end as op_case , COUNT(1) AS 'Cases' FROM appointments
        WHERE op_case= 0 or op_case= 1   GROUP BY op_case;"));
        $data = "";
        foreach ($result as $val) {
            $data .= "['" . $val->op_case . "',     " . $val->Cases . "],";
        }
        $ChartData = $data;

        $result2 =
            DB::select(DB::raw("SELECT Role, COUNT(1) AS 'Roles' FROM users WHERE Role ='Patient' or Role= 'Doctor' GROUP BY Role;"));
        $data2 = "";
        foreach ($result2 as $val) {
            $data2 .= "['" . $val->Role . "',     " . $val->Roles . "],";
        }
        $ChartData2 = $data2;
        $result3 =
            DB::select(DB::raw("SELECT YEAR(postoperation_appointment) as year,COUNT(*) as Operations from operations  WHERE op_case=1 and YEAR(postoperation_appointment)%10=0 GROUP BY YEAR(postoperation_appointment);"));
        $data3 = "";
        foreach ($result3 as $val) {
            $data3 .= "['" . $val->year . "',     " . $val->Operations . "],";
        }
        $ChartData3 = $data3;

        return view('dashboard', ['ChartData' => $ChartData, 'ChartData2' => $ChartData2, 'ChartData3' => $ChartData3]);
        // return view('dashboard', Compact('ChartData','ChartData3'));
    }
}
