<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Models\operation;
use App\Http\Controllers\Select;
use Google\Service\Sheets\ChartData;
use \Illuminate\Support\Facades\DB;

class ChartController extends Controller
{
    public function googlePieChart()
   /* {
        $data = DB::table('operations')
           ->select(
            DB::raw('Op_case as Op_case'),
            DB::raw('count(*) as number'))
           ->groupBy('Op_case')
           ->get();
        $array[] = ['Op_case', 'number'];
        foreach($data ->toArray() as $row)
        {
            $output[]=array(
                'Op_case'=>$row['Op_case'],
                'number'=>$row['number']
            );
        }
       echo json_encode($output);
       
    }*/
    {
        $result = 
        DB::select(DB::raw("SELECT COUNT(Op_case) as Operation_Condition FROM operations GROUP BY Op_case;"));
        $data="";
        foreach($result as $val)
        {
            $data.="['".$val->Operation_Condition."',     ".$val->Operation_Condition."],";
        }
        $ChartData = $data;

        $result2 = 
        DB::select(DB::raw("SELECT Role, COUNT(1) AS 'Roles' FROM users WHERE Role ='patient' or Role= 'doctor' GROUP BY Role;"));
        $data2="";
        foreach($result2 as $val)
        {
            $data2.="['".$val->Role."',     ".$val->Roles."],";
        }
        $ChartData2= $data2;
        $result3 = 
        DB::select(DB::raw("SELECT YEAR(postoperation_appointment) as year , MONTH(postoperation_appointment) as month from operations  WHERE YEAR(postoperation_appointment)=2020 GROUP BY postoperation_appointment;
        "));
        $data3="";
        foreach($result3 as $val)
        {
            $data3.="['".$val->year."',     ".$val->month."],";
        }
        $ChartData3 = $data3;

        return view('dashboard',['ChartData'=> $ChartData,'ChartData2'=>$ChartData2,'ChartData3'=>$ChartData3]);
        // return view('dashboard', Compact('ChartData','ChartData3'));
    }
}
