<?php

namespace App\Http\Controllers;

use DateTime;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Holiday;
use App\Models\Employee;
use App\Models\Overtime;
use App\Models\Attendance;
use Illuminate\Http\Request;
use App\Models\SSS_deduction;
use Illuminate\Support\Facades\DB;
use App\Models\Philhealth_deduction;
use Illuminate\Support\Facades\Auth;

use App\person;

class TestController extends Controller
{


    public function test(){

       

      // $datetimetoday = Carbon::now('GMT+8')->format('Y-m-d H:i:s');
      // $shed = Carbon::parse('21:00:00', 'GMT+8');
      //  $emp_sched = Carbon::now('GMT+8')->format('Y-m-d') . ' ' . $shed->format('H:i:s');
      // return $emp_sched;
       
        // return Carbon::now('GMT+8')->format('Y-m-d H:i:s');
        // $a = Carbon::parse('06:00:00'); //out sched
        // $b = Carbon::parse('2023-09-27 21:00:00'); // in
        // $interval = $b->diffInSeconds($a);
      
        //  $interval -= 3600; // 3600 seconds = 1 hour

        // // Check if the interval is negative and adjust it if necessary
        // if ($interval < 0) {
        //     $interval = 0; // Set to zero to avoid negative durations
        // }

        // // Format the interval as H:i:s
        // $totalDuration = gmdate('H:i:s', $interval);

        // return $totalDuration;


  //   $endTime = Carbon::now('GMT+8')->subHour(1)->format('Y-m-d H:i:s');
  //   $startTime = Carbon::parse('2023-09-27 21:00:00');
  //   $interval = $startTime->diffInSeconds($endTime);
  // return  $totalDuration = gmdate('H:i:s', $interval); // the total work hours today



  //   $employee_out_schedule = Carbon::parse('06:00:00');
  //   $employee_out = Carbon::now('GMT+8')->format('H:i:s');
  //   $time_out = $employee_out_schedule ->diffInSeconds($employee_out);
  //   $total_time = gmdate('H:i:s', $time_out); //the subtrated employee sched and the hours today




    $duration = Carbon::parse('2023-09-28 21:00:00');
    $out = Carbon::parse('2023-09-29 00:46:49');
    $totaltimeout = $out ->diffInSeconds($duration);
   return $employee_total_work_hours = gmdate('H:i:s', $totaltimeout); //the total work hours

    }
   
}





        // Set the timezone to GMT+8
// date_default_timezone_set('Asia/Taipei');

// // Define the start time as 10:00 PM
// $start = strtotime('22:00:00');

// // Get the current time
// $current_time = time();

// // Subtract 1 hour from the current time
// $current_time -= 3600; // 1 hour = 3600 seconds

// // Calculate the time difference in seconds
// $time_difference = $current_time - $start;

// // Convert the time difference to hours, minutes, and seconds
// $hours = floor($time_difference / 3600);
// $minutes = floor(($time_difference % 3600) / 60);
// $seconds = $time_difference % 60;

// // Format the result
// $night_diff_total_hours = sprintf("%02d:%02d:%02d", $hours, $minutes, $seconds);

// // Output the result
// echo $night_diff_total_hours;







    
        // dd(Carbon::now("GMT+8"));
        // $emp_sched_out = Carbon::parse('06:00:00');

        // $nag_out_ngayon =Carbon::now('GMT+8')->format('H:i:s');

        // $sum = $emp_sched_out -> diffInSeconds($nag_out_ngayon);

        // return $total = gmdate('H:i:s', $sum);
       //  $in = Carbon::parse('08:00:00');
       //  $out = Carbon::parse('10:00:00');
       //  // $undertime
       //   $schedule_end = Carbon::parse('05:00:00')->addDay('1');

       //  $sum = $out -> diffInSeconds($schedule_end);

       // dd($data = gmdate('H:i:s', $sum));//minus

             //   $in = '2020-04-05 21:00:00';
            
             //  $outs =  '2023-09-09 04:00:00';
                // $in = '06:00:00';
                // $outs = Carbon::now('GMT+8')->format('Y-m-d H:i:s');


                // $schedule = Carbon::parse($in)->format('H:i:s');
                // $out = Carbon::parse($outs);
                // $interval = $out->diffInSeconds($schedule);

                // return $totalDuration = gmdate('H:i:s', $interval);



                
             //     $timeout = Carbon::now('GMT+8')->subHour(1)->format('Y-m-d H:i:s');
             //     $timein = Carbon::parse($data -> night_shift_date);
                

               

             //    $schedule_end = '06:00:00';
             //    // $out = Carbon::now('GMT+8')->subHour(1)->format('Y-m-d H:i:s');


             //    $endTime = Carbon::parse($schedule_end)->->format('Y-m-d H:i:s');
             //    $startTime = Carbon::parse($out);
             //    $interval = $startTime->diffInSeconds($endTime);
             // return   $test = gmdate('H:i:s', $interval);

        // $salary = 10000 / 2;
        // $per_hour = $salary / 8;



 
        //     $employee_night_diff = DB::table('attendances')
        //                          ->where('emp_no', '=','EMP_004')
        //                         ->where('date', '>=', '2023-09-03')
        //                         ->where('date', '<=', '2023-09-09')
        //                         ->sum(DB::raw("TIME_TO_SEC(night_diff_hours)")); // Calcuting the total hours and convert it to seconds
        //      $total = gmDate("H", $employee_night_diff); // Convert sec to formatted Hour Min Sec
        //   //  $undertime_min = gmDate("i", $employee_undertime);

        //     dump($night = ($per_hour * $total) * 0.1);


        // return view ('test');

        //   if(Auth::user()->hasRole('administrator') && $data->employee->employee_department == 'IT' ){
        //     dd("A");
        //   }
        //   else if(Auth::user()->hasRole(['VPO']) &&  $data -> employee -> employee_department == "Administration" || $data -> employee -> employee_department == "App Intake" || $data -> employee -> employee_department == "Audit" || $data -> employee -> employee_department == "Verification" || $data -> employee -> employee_department == "Returns"){
        //       dd("B");
        //   }
    
    // public function test2()
    // {
    //     $empss = Employee::get();
    //     return response()->json($empss);
    // }
    // public function indexq(Request $request)
    // {
    //     $employees = Employee::select(['employee_name', 'employee_position', 'employee_department'])->get();

    //     return response()->json(['data' => $employees]);
    // }


           //return $currentDate = Carbon::today('GMT+8')->format('m-d');
            // $currentDate = Carbon::parse('2023-04-21')->format('m-d');
            // $holidays = Holiday::all();

            // foreach ($holidays as $holiday) {
            //     $holidayDate = Carbon::parse($holiday->holiday_date)->format('m-d');

            //     if ($currentDate == $holidayDate && $holiday->holiday_type == 'Regular') {

            //         return "The current date matches a holiday in the database: {$holiday->holiday_type}";
            //         break;
            //     }
            //     else if ($currentDate == $holidayDate && $holiday->holiday_type == 'Special') {

            //         return "The current date matches a holiday in the database: {$holiday->holiday_type}";
            //         break;
            //     }
            //     else {


            //         return "else";
            //         break;
            //     }

            // }










            // $RD = DB::table('attendances')
            //     ->where('emp_no', '=','EMP_001')
            //     ->where('RD', true)
            //     ->where('RDSH', false)
            //     ->where('RDRH', false)
            //     ->where('SH', false)
            //     ->where('RH', false)
            //     ->where('date', '>=', '2023-04-19')
            //     ->where('date', '<=', '2023-04-20')
            //     ->sum(DB::raw("TIME_TO_SEC(work_hours)")); //total sec

            // $RD_total_work_hour = gmDate("H", $RD); //hr

            // $RD_min = gmDate("i", $RD); //min

            // $hourlyRate = 85.23;

            // $totalMinutesWorked = ($RD_total_work_hour * 60) + $RD_min;
            // $hoursWorked = $totalMinutesWorked / 60;
            // $salary = round($hoursWorked * $hourlyRate * 1.3);

            // echo "The programmer's salary is: $" . $salary;




          //  42.615





        //     $start = Carbon::createFromFormat('H:i:s', '22:00:00'); //10pm
        //     $end = Carbon::now('GMT+8')->format('H:00:00');
        //     $diff = $start ->diffInSeconds($end);
        //     return $night_diff_total_hours =  gmdate('H:i:s', $diff);


        // $out = Carbon::createFromFormat('H:i:s', '06:00:00'); //6am
        // $start = Carbon::createFromFormat('H:i:s', '22:00:00'); //10pm
        // $end = Carbon::parse('05:00:00')->addDays(1);
        // $diff = $end ->diffInSeconds($start);
        // return  gmdate('H:i:s', $diff);


         // $start_time = Carbon::today()->setTime(22, 0, 0); // set start time to 10pm
         // $end_time = Carbon::tomorrow()->setTime(6, 0, 0); // set end time to 5am tomorrow

         // $total_hours = $end_time->diffInHours($start_time);

         // echo "Total hours between 10pm and 5am: " . $total_hours;


         //   $a = Carbon::now('GMT+8')->format('Y-m-d H:i:s');
         //   $b = Carbon::parse('20:00:00');
         //   $interval = $b->diffInSeconds($a);
         //   $c = gmdate('H:i:s', $interval); //minus

         //   $time2 = Carbon::parse($c);
         //   $x = Carbon::now('GMT+8')->format('Y-m-d H:i:s'); ///carbon now
         //    $d = Carbon::parse($x);
         //  $sum = $d->add($time2->diffInHours('00:00:00'), 'hours') //add
         //          ->add($time2->diffInMinutes('00:00:00') % 60, 'minutes')
         //          ->add($time2->diffInSeconds('00:00:00') % 60, 'seconds');

         // return $sum->format('Y-m-d H:i:s');



            //      $employee_workhour = DB::table('attendances')
        //      ->where('date', '>=', '2023-03-29')
        //      ->where('date', '<=', '2023-04-01')
        //      ->sum(DB::raw("TIME_TO_SEC(work_hours)"));
        //     $test = gmDate("H:i", $employee_workhour);
        //     dd($employee_workhour);

                // $outs = '06:00:00';
                // $schedule = '05:00:00';

            //     $in = '2020-04-05 20:00:00';
            //     $out = '2020-04-06 06:00:00';
            //     // $out = Carbon::now('GMT+8')->subHour(1)->format('Y-m-d H:i:s');


            //     $endTime = Carbon::parse($out);
            //     $startTime = Carbon::parse($in);
            //     $interval = $startTime->diffInSeconds($endTime);
            //  return   $test = gmdate('H:i:s', $interval);


                // $a = Carbon::parse($schedule);
                // $b = Carbon::parse($out)->format('h:i:s');
                // $sum =  $a ->diffInSeconds($b);
                // $testssss = gmdate('H:i:s', $sum);


                // $c= carbon::parse($testssss);
                // $d= carbon::parse($test);
                // $sumsss =  $c ->diffInSeconds($d);
                // $testssw = gmdate('H:i:s', $sumsss);

                //  dd($testssss);



                // $employee_out_schedule = Carbon::parse('05:00:00');
                // $employee_out = Carbon::now('GMT+8')->subHours('11')->format('H:i:s');
                // $time_out = $employee_out_schedule ->diffInSeconds($employee_out);
                // $total_time = gmdate('H:i:s', $time_out);

                // dd($total_time);

                // $endTime =  Carbon::now('GMT+8')->format('H:i:s');
                // $endTime = Carbon::now('GMT+8')->format('H:i:s');
                // $schedule_end = Carbon::parse('13:00:00')->subHour(1);
                // $interval = $schedule_end->diffInSeconds($endTime);
                // $total_overtime = gmdate('h:i:s', $interval);
               // dd($endTime = Carbon::now('GMT+8')->subHour(1)->format('H:i:s'));
                // dd($total_overtime);


    // foreach ($attendance_data as  $night_shift_out) {

                //         $endTime = Carbon::now('GMT+8');
                //         $startTime = Carbon::parse($night_shift_out -> night_shift_date)->subHour(1);
                //         $interval = $startTime->diffInSeconds($endTime);

                //         $test = gmdate('H:i:s', $interval);
                //     //     dd(Carbon::now()->subDays(1)->format('Y-m-d'));
                //         $sample =  Attendance::where('emp_no', '=', $request -> scanned)->where('date', '=', Carbon::now()->format('Y-m-d'))
                //                                                                         ->update(['time_out' => Carbon::now('GMT+8'),
                //                                                                          'work_hours' => $test
                //                                                                 ]);

                //         return response()->json([
                //             'status' => 200,
                //             'msg' => 'Attendance updated Successfully',
                //         ]);

                // }


                // $endTime = Carbon::now('GMT+8')->subHour(1)->format('Y-m-d H:i:s');
                // $startTime = Carbon::parse($data -> night_shift_date);
                // $interval = $startTime->diffInSeconds($endTime);
                // $totalDuration = gmdate('H:i:s', $interval); // the total work hours today


                // $employee_out_schedule = Carbon::parse($data -> employee -> sched_end);
                // $employee_out = Carbon::now('GMT+8')->format('H:i:s');
                // $time_out = $employee_out_schedule ->diffInSeconds($employee_out);
                // $total_time = gmdate('H:i:s', $time_out); //the subtrated employee sched and the hours today


                // $duration = Carbon::parse($totalDuration);
                // $out = Carbon::parse($total_time);
                // $totaltimeout = $out ->diffInSeconds($duration);
                // $employee_total_work_hours = gmdate('H:i:s', $totaltimeout); //the total work hours


                // Attendance::where('emp_no', '=', $request -> scanned)->where('date', '=', Carbon::now('GMT+8')->subDays(1)->format('Y-m-d'))
                //                                                     ->update(['time_out' => $data -> employee -> sched_end,
                //                                                                 'work_hours' => $employee_total_work_hours]);

                // return response()->json([
                //     'status' => 200,
                //     'msg' => 'Attendance updated Successfully',
                // ]);




                 // if($data -> emp_no == $request -> scanned && $data -> date == Carbon::now()->subDay(1)->format('Y-m-d') ){

                            //     // CHECK IF OVERTIME IS APPROVED
                            //     if($data -> overtime -> isApproved_TL == '1' && $data -> overtime -> isApproved_HR == '1' && $data -> overtime -> isApproved_SVP == '1' ){

                            //         //CHECK IF THE TIME IN, TIME OUT AND HOURS OT IS NOT NULL
                            //         if($data -> time_in != null && $data -> time_out != null && $data -> overtime -> hours_OT != null ){

                            //             return response()->json([
                            //                 'status'=> 0,
                            //                 'error' => 'Time in and Time out is already completed'
                            //             ]);

                            //         }
                            //         else{

                            //              //time out will update based on the employee sched
                            //              $time_out =  Carbon::now('GMT+8')->format('H:i');
                            //              $schedule_end = Carbon::parse($data -> employee -> sched_end);
                            //              $interval = $schedule_end->diffInSeconds($time_out);
                            //              $total_overtime = gmdate('h:00:00', $interval);

                            //              Overtime::where('emp_number', '=', $request -> scanned)->where('attendance_id', '=', $data -> id)->update(['hours_OT' => $total_overtime]);


                            //              $timeout = Carbon::now('GMT+8')->subHour(1);
                            //              $timein = Carbon::parse($data -> night_shift_date);
                            //              $interval = $timein->diffInSeconds($timeout);
                            //              $totalDuration = gmdate('H:i:s', $interval);


                            //              Attendance::where('emp_no', '=', $request -> scanned)->where('date', '=', Carbon::now('GMT+8')->subDays(1)->format('Y-m-d'))
                            //                                                                    ->update(['time_out' => Carbon::now('GMT+8')->format('H:i:s'),
                            //                                                                          'work_hours' => $totalDuration]);
                            //              return response()->json([

                            //                  'status' => 200,
                            //                  'msg' => 'Overtime Recorded Successfully',

                            //              ]);
                            //         }
                            //     }


                            // }

                            // else{

                            //    if($data -> date == Carbon::now()->subDay(1)->format('Y-m-d') && $data -> time_out == null){
                            //         dd('insert');
                            //    }else{
                            //         dd('update');
                            //    }






                                //Check if the time out and time in is not null
                                // if($data -> emp_no == $request -> scanned  && $data -> time_in != null && $data -> time_out != null  && $data ->night_shift_date == Carbon::now('GMT+8')->format('Y-m-d')){

                                //     dd('error');
                                //     return response()->json([
                                //         'status'=>0,
                                //         'error' => 'Time in and Time out is already completed'
                                //     ]);
                                // }
                                // else{


                                //     // if($data -> overtime -> isApproved_TL == '0' || $data -> overtime -> isApproved_HR == '0' || $data -> overtime -> isApproved_SVP == '0' ){

                                //     //         //TO GET THE WORK HOURS
                                //     //         $endTime = Carbon::now('GMT+8')->subHour(1)->format('Y-m-d H:i:s');
                                //     //         $startTime = Carbon::parse($data -> night_shift_date);
                                //     //         $interval = $startTime->diffInSeconds($endTime);
                                //     //         $totalDuration = gmdate('H:i:s', $interval); // the total work hours today

                                //     //         $employee_out_schedule = Carbon::parse($data -> employee -> sched_end);
                                //     //         $employee_out = Carbon::now('GMT+8')->format('H:i:s');
                                //     //         $time_out = $employee_out_schedule ->diffInSeconds($employee_out);
                                //     //         $total_time = gmdate('H:i:s', $time_out); //the subtrated employee sched and the hours today

                                //     //         $duration = Carbon::parse($totalDuration);
                                //     //         $out = Carbon::parse($total_time);
                                //     //         $totaltimeout = $out ->diffInSeconds($duration);
                                //     //         $employee_total_work_hours = gmdate('H:i:s', $totaltimeout); //the total work hours


                                //     //         Attendance::where('emp_no', '=', $request -> scanned)->where('date', '=', Carbon::now('GMT+8')->subDays(1)->format('Y-m-d'))
                                //     //                                                              ->update(['time_out' => $data -> employee -> sched_end,
                                //     //                                                                        'work_hours' => $employee_total_work_hours]);

                                //     //         return response()->json([
                                //     //             'status' => 200,
                                //     //             'msg' => 'Attendance updated Successfully',
                                //     //         ]);
                                //     // }
                                //     // else{




                                //     //     // if(Carbon::now('GMT+8')->format('H:i') >= $data -> employee -> sched_end){



                                //     //     //     //TO GET THE WORK HOURS
                                //     //     //     $endTime = Carbon::now('GMT+8')->subHour(1)->format('Y-m-d H:i:s');
                                //     //     //     $startTime = Carbon::parse($data -> night_shift_date);
                                //     //     //     $interval = $startTime->diffInSeconds($endTime);
                                //     //     //     $totalDuration = gmdate('H:i:s', $interval); // the total work hours today


                                //     //     //     $employee_out_schedule = Carbon::parse($data -> employee -> sched_end);
                                //     //     //     $employee_out = Carbon::now('GMT+8')->format('H:i:s');
                                //     //     //     $time_out = $employee_out_schedule ->diffInSeconds($employee_out);
                                //     //     //     $total_time = gmdate('H:i:s', $time_out); //the subtrated employee sched and the hours today


                                //     //     //     $duration = Carbon::parse($totalDuration);
                                //     //     //     $out = Carbon::parse($total_time);
                                //     //     //     $totaltimeout = $out ->diffInSeconds($duration);
                                //     //     //     $employee_total_work_hours = gmdate('H:i:s', $totaltimeout); //the total work hours


                                //     //     //     Attendance::where('emp_no', '=', $request -> scanned)->where('date', '=', Carbon::now('GMT+8')->subDays(1)->format('Y-m-d'))
                                //     //     //                                                         ->update(['time_out' => $data -> employee -> sched_end,
                                //     //     //                                                                   'work_hours' => $employee_total_work_hours]);

                                //     //     //     return response()->json([
                                //     //     //         'status' => 200,
                                //     //     //         'msg' => 'Attendance updated Successfully',
                                //     //     //     ]);

                                //     //     // }
                                //     //     // else{

                                //     //     //     $endTime = Carbon::now('GMT+8')->subHour(1);
                                //     //     //     $startTime = Carbon::parse($data -> night_shift_date);
                                //     //     //     $interval = $startTime->diffInSeconds($endTime);
                                //     //     //     $totalworkhours = gmdate('H:i:s', $interval);

                                //     //     //     Attendance::where('emp_no', '=', $request -> scanned)->where('date', '=', Carbon::now('GMT+8')->subDays(1)->format('Y-m-d'))
                                //     //     //                                                         ->update(['time_out' => Carbon::now('GMT+8')->format('H:i:s'),
                                //     //     //                                                                   'work_hours' => $totalworkhours]);

                                //     //     //     return response()->json([
                                //     //     //         'status' => 200,
                                //     //     //         'msg' => 'Attendance updated Successfully',
                                //     //     //     ]);



                                //     //     // }

                                //     // }

                                //  }
                     //   dd('mabutang');

                        // foreach($schedules as $sched){

                        //     if($request -> scanned == $sched -> employee_no && Carbon::now('GMT+8')->format('H:i') < $sched -> sched_start){

                        //         $employee_attendance = new Attendance();
                        //         $employee_attendance -> emp_no = $request -> scanned;
                        //         $employee_attendance -> time_in = $sched -> sched_start;
                        //         $employee_attendance -> date = Carbon::now('GMT+8')->format('Y-m-d');
                        //         $employee_attendance -> night_shift_date = Carbon::now('GMT+8')->format('Y-m-d H:i:s');
                        //         $employee_attendance -> save();

                        //         return response()->json([

                        //             'status' => 200,
                        //             'msg' => 'Attendance Recorded Successfully',
                        //         ]);
                        //     }
                        //     else if($request -> scanned == $sched -> employee_no && Carbon::now('GMT+8')->format('H:i') > $sched -> sched_start){


                        //         $timein = Carbon::now('GMT+8')->format('H:i:s');
                        //         $sched_in = Carbon::parse($sched -> sched_start);
                        //         $interval = $sched_in->diffInSeconds($timein);
                        //         $total_late = gmdate('H:i:s', $interval);

                        //         $employee_attendance = new Attendance();
                        //         $employee_attendance -> emp_no = $request -> scanned;
                        //         $employee_attendance -> time_in = Carbon::now('GMT+8')->format('H:i:s');
                        //         $employee_attendance -> date = Carbon::now('GMT+8')->format('Y-m-d');
                        //         $employee_attendance -> night_shift_date = Carbon::now('GMT+8')->format('Y-m-d H:i:s');
                        //         $employee_attendance -> late_hours = $total_late;
                        //         $employee_attendance -> save();

                        //         return response()->json([
                        //             'status' => 200,
                        //             'msg' => 'Attendance Recorded Successfully',
                        //         ]);
                        //     }
                        //     else if($request -> scanned == $sched -> employee_no && Carbon::now('GMT+8')->format('H:i') == $sched -> sched_start){

                        //         $employee_attendance = new Attendance();
                        //         $employee_attendance -> emp_no = $request -> scanned;
                        //         $employee_attendance -> time_in = Carbon::now('GMT+8')->format('H:i:s');
                        //         $employee_attendance -> date = Carbon::now('GMT+8')->format('Y-m-d');
                        //         $employee_attendance -> night_shift_date = Carbon::now('GMT+8')->format('Y-m-d H:i:s');

                        //         $employee_attendance -> save();

                        //         return response()->json([

                        //             'status' => 200,
                        //             'msg' => 'Attendance Recorded Successfully',
                        //         ]);
                        //     }
                        // }



                        // switch ($holiday) {

                                //     //Regular holiday
                                //     case Carbon::parse($holiday->holiday_date)->format('M j') === Carbon::now('GMT+8')->format('M j') && $holiday->holiday_type == 'Regular':

                                //         //Sabado or Lunes Then Regular holiday pa
                                //         if(Carbon::today('GMT+8')->isSunday() || Carbon::today('GMT+8')->isMonday()){

                                //             //kun an time in is less than sa sched ng employee
                                //             if($request -> scanned == $sched -> employee_no && Carbon::now('GMT+8')->format('H:i') < $sched -> sched_start){

                                //                 $employee_attendance = new Attendance();
                                //                 $employee_attendance -> emp_no = $request -> scanned;
                                //                 $employee_attendance -> time_in = $sched -> sched_start;
                                //                 $employee_attendance -> date = Carbon::now('GMT+8')->format('Y-m-d');
                                //                 $employee_attendance -> RDRH = true; // Rest day  and Regular holiday
                                //                 $employee_attendance -> save();

                                //                 return response()->json([

                                //                     'status' => 200,
                                //                     'msg' => 'Attendance Recorded Successfully',
                                //                 ]);
                                //             }
                                //             //kun an time in is greater than sa sched ng employee
                                //             else if($request -> scanned == $sched -> employee_no && Carbon::now('GMT+8')->format('H:i') > $sched -> sched_start){

                                //                 $timein = Carbon::now('GMT+8')->format('H:i:s');
                                //                 $sched_in = Carbon::parse($sched -> sched_start);
                                //                 $interval = $sched_in->diffInSeconds($timein);
                                //                 $total_late = gmdate('H:i:s', $interval);

                                //                 $employee_attendance = new Attendance();
                                //                 $employee_attendance -> emp_no = $request -> scanned;
                                //                 $employee_attendance -> time_in = Carbon::now('GMT+8')->format('H:i:s');
                                //                 $employee_attendance -> date = Carbon::now('GMT+8')->format('Y-m-d');
                                //                 $employee_attendance -> late_hours = $total_late;
                                //                 $employee_attendance -> RDRH = true;  // Rest day  and Regular holiday
                                //                 $employee_attendance -> save();

                                //                 return response()->json([

                                //                     'status' => 200,
                                //                     'msg' => 'Attendance Recorded Successfully',
                                //                 ]);
                                //             }
                                //              //kun an time in is equal sa sched ng employee
                                //             else if($request -> scanned == $sched -> employee_no && Carbon::now('GMT+8')->format('H:i') == $sched -> sched_start){

                                //                 $employee_attendance = new Attendance();
                                //                 $employee_attendance -> emp_no = $request -> scanned;
                                //                 $employee_attendance -> time_in = Carbon::now('GMT+8')->format('H:i:s');
                                //                 $employee_attendance -> date = Carbon::now('GMT+8')->format('Y-m-d');
                                //                 $employee_attendance -> RDRH = true; // restday
                                //                 $employee_attendance -> save();

                                //                 return response()->json([

                                //                     'status' => 200,
                                //                     'msg' => 'Attendance Recorded Successfully',
                                //                 ]);
                                //             }
                                //         }
                                //         //Hindi sabado or lunes pero Regular Holiday lang
                                //         else{
                                //              //kun an sched is less than sa sched ng employee
                                //              if($request -> scanned == $sched -> employee_no && Carbon::now('GMT+8')->format('H:i') < $sched -> sched_start){

                                //                 $employee_attendance = new Attendance();
                                //                 $employee_attendance -> emp_no = $request -> scanned;
                                //                 $employee_attendance -> time_in = $sched -> sched_start;
                                //                 $employee_attendance -> date = Carbon::now('GMT+8')->format('Y-m-d');
                                //                 $employee_attendance -> RH = true; // Rest day  and Regular holiday
                                //                 $employee_attendance -> save();

                                //                 return response()->json([

                                //                     'status' => 200,
                                //                     'msg' => 'Attendance Recorded Successfully',
                                //                 ]);
                                //             }
                                //             //kun an sched is greater than sa sched ng employee
                                //             else if($request -> scanned == $sched -> employee_no && Carbon::now('GMT+8')->format('H:i') > $sched -> sched_start){

                                //                 $timein = Carbon::now('GMT+8')->format('H:i:s');
                                //                 $sched_in = Carbon::parse($sched -> sched_start);
                                //                 $interval = $sched_in->diffInSeconds($timein);
                                //                 $total_late = gmdate('H:i:s', $interval);

                                //                 $employee_attendance = new Attendance();
                                //                 $employee_attendance -> emp_no = $request -> scanned;
                                //                 $employee_attendance -> time_in = Carbon::now('GMT+8')->format('H:i:s');
                                //                 $employee_attendance -> date = Carbon::now('GMT+8')->format('Y-m-d');
                                //                 $employee_attendance -> late_hours = $total_late;
                                //                 $employee_attendance -> RH = true;  // Rest day  and Regular holiday
                                //                 $employee_attendance -> save();

                                //                 return response()->json([

                                //                     'status' => 200,
                                //                     'msg' => 'Attendance Recorded Successfully',
                                //                 ]);
                                //             }
                                //              //kun an sched is equal sa sched ng employee
                                //             else if($request -> scanned == $sched -> employee_no && Carbon::now('GMT+8')->format('H:i') == $sched -> sched_start){

                                //                 $employee_attendance = new Attendance();
                                //                 $employee_attendance -> emp_no = $request -> scanned;
                                //                 $employee_attendance -> time_in = Carbon::now('GMT+8')->format('H:i:s');
                                //                 $employee_attendance -> date = Carbon::now('GMT+8')->format('Y-m-d');
                                //                 $employee_attendance -> RH = true; // restday
                                //                 $employee_attendance -> save();

                                //                 return response()->json([

                                //                     'status' => 200,
                                //                     'msg' => 'Attendance Recorded Successfully',
                                //                 ]);
                                //             }
                                //         }

                                //         break;

                                //     //Special Holiday
                                //     case Carbon::parse($holiday->holiday_date)->format('M j') == Carbon::now('GMT+8')->format('M j') && $holiday->holiday_type == 'Special':

                                //         //Sabado or Lunes Then Special holiday pa
                                //         if(Carbon::today('GMT+8')->isSunday() || Carbon::today('GMT+8')->isMonday()){

                                //             //kun an time in is less than sa sched ng employee
                                //             if($request -> scanned == $sched -> employee_no && Carbon::now('GMT+8')->format('H:i') < $sched -> sched_start){

                                //                 $employee_attendance = new Attendance();
                                //                 $employee_attendance -> emp_no = $request -> scanned;
                                //                 $employee_attendance -> time_in = $sched -> sched_start;
                                //                 $employee_attendance -> date = Carbon::now('GMT+8')->format('Y-m-d');
                                //                 $employee_attendance -> RDSH = true; // Rest day  and Special holiday
                                //                 $employee_attendance -> save();

                                //                 return response()->json([

                                //                     'status' => 200,
                                //                     'msg' => 'Attendance Recorded Successfully',
                                //                 ]);
                                //             }
                                //             //kun an time in is greater than sa sched ng employee
                                //             else if($request -> scanned == $sched -> employee_no && Carbon::now('GMT+8')->format('H:i') > $sched -> sched_start){

                                //                 $timein = Carbon::now('GMT+8')->format('H:i:s');
                                //                 $sched_in = Carbon::parse($sched -> sched_start);
                                //                 $interval = $sched_in->diffInSeconds($timein);
                                //                 $total_late = gmdate('H:i:s', $interval);

                                //                 $employee_attendance = new Attendance();
                                //                 $employee_attendance -> emp_no = $request -> scanned;
                                //                 $employee_attendance -> time_in = Carbon::now('GMT+8')->format('H:i:s');
                                //                 $employee_attendance -> date = Carbon::now('GMT+8')->format('Y-m-d');
                                //                 $employee_attendance -> late_hours = $total_late;
                                //                 $employee_attendance -> RDSH = true;  // Rest day  and Special holiday
                                //                 $employee_attendance -> save();

                                //                 return response()->json([

                                //                     'status' => 200,
                                //                     'msg' => 'Attendance Recorded Successfully',
                                //                 ]);
                                //             }
                                //              //kun an time in is equal sa sched ng employee
                                //             else if($request -> scanned == $sched -> employee_no && Carbon::now('GMT+8')->format('H:i') == $sched -> sched_start){

                                //                 $employee_attendance = new Attendance();
                                //                 $employee_attendance -> emp_no = $request -> scanned;
                                //                 $employee_attendance -> time_in = Carbon::now('GMT+8')->format('H:i:s');
                                //                 $employee_attendance -> date = Carbon::now('GMT+8')->format('Y-m-d');
                                //                 $employee_attendance -> RDSH = true; // restday and Special holiday
                                //                 $employee_attendance -> save();

                                //                 return response()->json([

                                //                     'status' => 200,
                                //                     'msg' => 'Attendance Recorded Successfully',
                                //                 ]);
                                //             }
                                //         }
                                //         //Hindi sabado or lunes pero Special Holiday lang
                                //         else{
                                //              //kun an sched is less than sa sched ng employee
                                //              if($request -> scanned == $sched -> employee_no && Carbon::now('GMT+8')->format('H:i') < $sched -> sched_start){

                                //                 $employee_attendance = new Attendance();
                                //                 $employee_attendance -> emp_no = $request -> scanned;
                                //                 $employee_attendance -> time_in = $sched -> sched_start;
                                //                 $employee_attendance -> date = Carbon::now('GMT+8')->format('Y-m-d');
                                //                 $employee_attendance -> SH = true; // Rest day  and Special holiday
                                //                 $employee_attendance -> save();

                                //                 return response()->json([

                                //                     'status' => 200,
                                //                     'msg' => 'Attendance Recorded Successfully',
                                //                 ]);
                                //             }
                                //             //kun an sched is greater than sa sched ng employee
                                //             else if($request -> scanned == $sched -> employee_no && Carbon::now('GMT+8')->format('H:i') > $sched -> sched_start){

                                //                 $timein = Carbon::now('GMT+8')->format('H:i:s');
                                //                 $sched_in = Carbon::parse($sched -> sched_start);
                                //                 $interval = $sched_in->diffInSeconds($timein);
                                //                 $total_late = gmdate('H:i:s', $interval);

                                //                 $employee_attendance = new Attendance();
                                //                 $employee_attendance -> emp_no = $request -> scanned;
                                //                 $employee_attendance -> time_in = Carbon::now('GMT+8')->format('H:i:s');
                                //                 $employee_attendance -> date = Carbon::now('GMT+8')->format('Y-m-d');
                                //                 $employee_attendance -> late_hours = $total_late;
                                //                 $employee_attendance -> SH = true;  // Rest day  and Special holiday
                                //                 $employee_attendance -> save();

                                //                 return response()->json([

                                //                     'status' => 200,
                                //                     'msg' => 'Attendance Recorded Successfully',
                                //                 ]);
                                //             }
                                //              //kun an sched is equal sa sched ng employee
                                //             else if($request -> scanned == $sched -> employee_no && Carbon::now('GMT+8')->format('H:i') == $sched -> sched_start){

                                //                 $employee_attendance = new Attendance();
                                //                 $employee_attendance -> emp_no = $request -> scanned;
                                //                 $employee_attendance -> time_in = Carbon::now('GMT+8')->format('H:i:s');
                                //                 $employee_attendance -> date = Carbon::now('GMT+8')->format('Y-m-d');
                                //                 $employee_attendance -> SH = true; // restday and Spcial holiday
                                //                 $employee_attendance -> save();

                                //                 return response()->json([

                                //                     'status' => 200,
                                //                     'msg' => 'Attendance Recorded Successfully',
                                //                 ]);
                                //             }
                                //         }
                                //             break;

                                //     default:

                                //         //Not holiday and the time in is less than sa employee shed
                                //         if($request -> scanned == $sched -> employee_no && Carbon::now('GMT+8')->format('H:i') < $sched -> sched_start){

                                //                 $employee_attendance = new Attendance();
                                //                 $employee_attendance -> emp_no = $request -> scanned;
                                //                 $employee_attendance -> time_in = $sched -> sched_start;
                                //                 $employee_attendance -> date = Carbon::now('GMT+8')->format('Y-m-d');
                                //                 $employee_attendance -> save();

                                //                 return response()->json([

                                //                     'status' => 200,
                                //                     'msg' => 'Attendance Recorded Successfully',
                                //                 ]);

                                //         }
                                //          //Not holiday and the time in is greater than sa employee shed
                                //         else if($request -> scanned == $sched -> employee_no && Carbon::now('GMT+8')->format('H:i') > $sched -> sched_start){

                                //                 $timein = Carbon::now('GMT+8')->format('H:i:s');
                                //                 $sched_in = Carbon::parse($sched -> sched_start);
                                //                 $interval = $sched_in->diffInSeconds($timein);
                                //                 $total_late = gmdate('H:i:s', $interval);

                                //                 $employee_attendance = new Attendance();
                                //                 $employee_attendance -> emp_no = $request -> scanned;
                                //                 $employee_attendance -> time_in = Carbon::now('GMT+8')->format('H:i:s');
                                //                 $employee_attendance -> date = Carbon::now('GMT+8')->format('Y-m-d');
                                //                 $employee_attendance -> late_hours = $total_late;
                                //                 $employee_attendance -> save();

                                //                 return response()->json([

                                //                     'status' => 200,
                                //                     'msg' => 'Attendance Recorded Successfully',
                                //                 ]);

                                //         }
                                //         //Not holiday and the time in is equal sa employee shed
                                //         else if($request -> scanned == $sched -> employee_no && Carbon::now('GMT+8')->format('H:i') == $sched -> sched_start){

                                //                 $employee_attendance = new Attendance();
                                //                 $employee_attendance -> emp_no = $request -> scanned;
                                //                 $employee_attendance -> time_in = Carbon::now('GMT+8')->format('H:i:s');
                                //                 $employee_attendance -> date = Carbon::now('GMT+8')->format('Y-m-d');

                                //                 $employee_attendance -> save();

                                //                 return response()->json([

                                //                     'status' => 200,
                                //                     'msg' => 'Attendance Recorded Successfully',
                                //                 ]);

                                //         }


                                //         break;
                                // }


                                 // //update the hours_ot based on the emp_number and also the attendance id of the employee
                                        // switch($data){

                                        //     //Rest dsay
                                        //     case $data -> RD == true:

                                        //         Overtime::where('emp_number', '=', $request -> scanned)->where('attendance_id', '=', $data -> id)->update(['hours_OT' => $total_overtime,
                                        //                                                                                                                 'RDOT' => true]);
                                        //     break;

                                        //     //rest day special holiday
                                        //     case $data -> SH == true:

                                        //         Overtime::where('emp_number', '=', $request -> scanned)->where('attendance_id', '=', $data -> id)->update(['hours_OT' => $total_overtime,
                                        //                                                                                                                    'SHOT' => true]);
                                        //     break;

                                        //      //rest day regular holiday
                                        //      case $data -> RH == true:

                                        //         Overtime::where('emp_number', '=', $request -> scanned)->where('attendance_id', '=', $data -> id)->update(['hours_OT' => $total_overtime,
                                        //                                                                                                                    'RHOT' => true]);
                                        //     break;

                                        //     //rest day special holiday
                                        //     case $data -> RDSH == true:

                                        //         Overtime::where('emp_number', '=', $request -> scanned)->where('attendance_id', '=', $data -> id)->update(['hours_OT' => $total_overtime,
                                        //                                                                                                                 'RDSHOT' => true]);
                                        //     break;

                                        //     //rest day regular holiday
                                        //     case $data -> RDRH == true:

                                        //         Overtime::where('emp_number', '=', $request -> scanned)->where('attendance_id', '=', $data -> id)->update(['hours_OT' => $total_overtime,
                                        //                                                                                                                    'RDRHOT' => true]);
                                        //     break;

                                        //     default:
                                        //          Overtime::where('emp_number', '=', $request -> scanned)->where('attendance_id', '=', $data -> id)->update(['hours_OT' => $total_overtime]);
                                        //     break;
                                        // }




                                  // if(Auth::user()->hasRole(['administrator','HR'])){


                                  //   $output .= '<tr>
                                  //                         <td>
                                  //                             <div class="card time-card">
                                  //                                 <div class="card-body">
                                  //                                     <div class="row">
                                  //                                         <div class="col-xl-1">
                                  //                                             <div class="d-flex">

                                  //                                             <p class="attendance_id" hidden>'.$all_overtime_request -> id.'</p>';

                                  //                                             if($all_overtime_request -> employee -> image != null){

                                  //                                                 $output .=  '<img src="storage/employee/images/' . $all_overtime_request -> employee -> image . '" style="border-radius: 100%; border: 0.5px solid gray;  padding: 1px; width:50px; height: 50px;">';

                                  //                                             }
                                  //                                             else{

                                  //                                                 $output .= '<i class="bx bx-user icon profile-picture-time"> </i>';
                                  //                                             }

                                  //                                         $output .= '  </div>
                                  //                                         </div>
                                  //                                         <div class="col-xl-2">
                                  //                                             <h5 class="emp-name">'.$all_overtime_request -> employee -> employee_name.'</h5>
                                  //                                             <p class="emp-no">'.$all_overtime_request->emp_no.'</p>

                                  //                                         </div>
                                  //                                         <div class="col-xl-1">
                                  //                                                 <h5 class="emp-name">'.$all_overtime_request -> employee -> employee_department.'</h5>
                                  //                                                 <p class="emp-no">Department</p>

                                  //                                         </div>
                                  //                                         <div class="col-xl-1">
                                  //                                             <h5 class="emp-name">'.Carbon::parse($all_overtime_request -> date)->toFormattedDateString().'</h5>
                                  //                                             <p class="emp-no"> Date</p>
                                  //                                         </div>

                                  //                                         <div class="col-xl-1 td-div">';

                                  //                                             $output .=  '<h5 class="time">'.Carbon::parse($all_overtime_request -> attendance ->time_in)->format('H:i').'</h5>';
                                  //                                             $output .= '<p class="type">Time In</p>
                                  //                                         </div>';

                                  //                                 $output .='<div class="col-xl-1 td-div">';

                                  //                                                     if($all_overtime_request-> attendance ->time_out == null){

                                  //                                                         $output .=  '<h5 class="time">--:--</h5>';
                                  //                                                         $output .= '<p class="type">Time Out</p>';
                                  //                                                     }
                                  //                                                     else
                                  //                                                     {
                                  //                                                         $output .=  '<h5 class="time" >'.Carbon::parse($all_overtime_request -> attendance ->time_out)->format('H:i').'</h5>';
                                  //                                                         $output .= '<p class="type">Time Out</p>';
                                  //                                                     }


                                  //                                 $output .='</div>';


                                  //                                             if($all_overtime_request -> hours_OT != null){

                                  //                                             $output.='<div class="col-xl-1">
                                  //                                                             <h5 class="emp-name">'.$all_overtime_request ->hours_OT.'</h5>
                                  //                                                             <p class="emp-no"> Total Overtime</p>
                                  //                                                         </div>';
                                  //                                             }
                                  //                                             else{

                                  //                                                 $output.='<div class="col-xl-1">
                                  //                                                             <h5 class="emp-name">--:--</h5>
                                  //                                                             <p class="emp-no"> Total Overtime</p>
                                  //                                                         </div>';
                                  //                                             }


                                  //                                             $output .=' <div class="col-xl-2">
                                  //                                                             <h6 class="emp-name">'.$all_overtime_request -> reason.'</h6>
                                  //                                                             <p class="emp-no"> Reason</p>
                                  //                                                         </div>';


                                  //                                 $output .='<div class="col-xl-2 d-flex justify-content-end align-items-center gap-2">';

                                  //                                         if($all_overtime_request -> isDecline_HR == '1' && $all_overtime_request -> isDecline_TL == '1' && $all_overtime_request -> isDecline_SVP == '1' ){

                                  //                                             $output .=' <span class="status late d-flex align-items-center">
                                  //                                                             <i class="bx bx-x"></i>
                                  //                                                             Declined request
                                  //                                                         </span>';
                                  //                                         }

                                  //                                         else{

                                  //                                             if($all_overtime_request -> isApproved_TL == '1' && $all_overtime_request -> isApproved_SVP == '1' && $all_overtime_request  -> isApproved_HR == '1'){

                                  //                                                 $output .=' <span class="status on-time d-flex align-items-center">
                                  //                                                                 <i class="bx bx-check"></i>
                                  //                                                                     Approve request
                                  //                                                             </span>';
                                  //                                             }
                                  //                                             else if($all_overtime_request  -> isApproved_TL == '0' || $all_overtime_request -> isApproved_SVP == '0' || $all_overtime_request  -> isApproved_HR == '0'){

                                  //                                                 if(Auth::user()->hasRole('HR')){

                                  //                                                     if($all_overtime_request  -> isApproved_HR == '1'){

                                  //                                                         $output .=' <span class="status on-time d-flex align-items-center">
                                  //                                                                         <i class="bx bx-check"></i>
                                  //                                                                         Approve request
                                  //                                                                     </span>';
                                  //                                                     }
                                  //                                                     else{



                                  //                                                             $output .='
                                  //                                                                         <a href="#" id="' . $all_overtime_request -> id . '" type="button" class="btn btn-danger btn-sm mx-1 hr_decline" data-bs-toggle="modal" data-bs-target="#decline_ot_HR">
                                  //                                                                             Decline Request
                                  //                                                                         </a>
                                  //                                                                         <a href="#" id="' . $all_overtime_request -> id . '" type="button" class="btn btn-success btn-sm mx-1 approve_hr" data-bs-toggle="modal" data-bs-target="#approve_ot_HR">
                                  //                                                                             HR Approval
                                  //                                                                         </a> ';



                                  //                                                     }
                                  //                                                 }
                                  //                                                 elseif(Auth::user()->hasRole('teamleader')){

                                  //                                                     if($all_overtime_request  -> isApproved_TL == '1'){

                                  //                                                         $output .=' <span class="status on-time d-flex align-items-center">
                                  //                                                                         <i class="bx bx-check"></i>
                                  //                                                                         Approve request
                                  //                                                                     </span>';
                                  //                                                     }
                                  //                                                     else if($all_overtime_request  -> isDecline_TL == '1'){

                                  //                                                         $output .=' <span class="status late d-flex align-items-center">
                                  //                                                                         <i class="bx bx-x"></i>
                                  //                                                                         Declined request
                                  //                                                                     </span>';
                                  //                                                     }
                                  //                                                     else{


                                  //                                                         $output .= '<a href="#" id="' . $all_overtime_request -> id . '" type="button" class="btn btn-danger btn-sm mx-1 tl_decline" data-bs-toggle="modal" data-bs-target="#decline_ot_TL">
                                  //                                                                         Decline Request
                                  //                                                                     </a>
                                  //                                                                     <a href="#" id="' . $all_overtime_request -> id . '" type="button" class="btn btn-success btn-sm mx-1 approve_tl" data-bs-toggle="modal" data-bs-target="#approve_ot_TL">
                                  //                                                                         Team Leader Approval
                                  //                                                                     </a>';
                                  //                                                     }

                                  //                                                 }
                                  //                                                 else if(Auth::user()->hasRole('administrator')){

                                  //                                                     if($all_overtime_request  -> isApproved_SVP == '1'){

                                  //                                                         $output .=' <span class="status on-time d-flex align-items-center">
                                  //                                                                         <i class="bx bx-check"></i>
                                  //                                                                         Approve request
                                  //                                                                     </span>';
                                  //                                                     }
                                  //                                                     else if($all_overtime_request  -> isDecline_SVP == '1'){

                                  //                                                         $output .=' <span class="status late d-flex align-items-center">
                                  //                                                                         <i class="bx bx-x"></i>
                                  //                                                                         Declined request
                                  //                                                                     </span>';
                                  //                                                     }
                                  //                                                     else{

                                  //                                                             $output .=' <a href="#" id="' . $all_overtime_request -> id . '" type="button" class="btn btn-danger btn-sm mx-1 svp_decline" data-bs-toggle="modal" data-bs-target="#decline_ot_SVP">
                                  //                                                                             Decline Request
                                  //                                                                         </a>
                                  //                                                                         <a href="#" id="' . $all_overtime_request -> id . '" type="button" class="btn btn-success btn-sm mx-1 approve_svp" data-bs-toggle="modal" data-bs-target="#approve_ot_SVP">
                                  //                                                                             SVP Approval
                                  //                                                                         </a>';

                                  //                                                     }
                                  //                                                 }

                                  //                                             }
                                  //                                         }




                                  //                                 $output .='</div>

                                  //                                         </div>
                                  //                                     </div>
                                  //                                 </div>
                                  //                             </div>
                                  //                         </td>
                                  //                     </tr>';


                                  // }
                                  // else if(Auth::user()->hasRole('teamleader')){

                                  //     $depart = $all_overtime_request -> employee -> employee_department;

                                  //     if(Auth::user()->department == $depart){

                                  //         $output .= '<tr>
                                  //                         <td>
                                  //                             <div class="card time-card">
                                  //                                 <div class="card-body">
                                  //                                     <div class="row">
                                  //                                         <div class="col-xl-1">
                                  //                                             <div class="d-flex">

                                  //                                             <p class="attendance_id" hidden>'.$all_overtime_request -> id.'</p>';

                                  //                                             if($all_overtime_request -> employee -> image != null){

                                  //                                                 $output .=  '<img src="storage/employee/images/' . $all_overtime_request -> employee -> image . '" style="border-radius: 100%; border: 0.5px solid gray;  padding: 1px; width:50px; height: 50px;">';

                                  //                                             }
                                  //                                             else{

                                  //                                                 $output .= '<i class="bx bx-user icon profile-picture-time"> </i>';
                                  //                                             }

                                  //                                         $output .= '  </div>
                                  //                                         </div>
                                  //                                         <div class="col-xl-2">
                                  //                                             <h5 class="emp-name">'.$all_overtime_request -> employee -> employee_name.'</h5>
                                  //                                             <p class="emp-no">'.$all_overtime_request->emp_no.'</p>

                                  //                                         </div>
                                  //                                         <div class="col-xl-1">
                                  //                                             <h5 class="emp-name">'.Carbon::parse($all_overtime_request -> date)->toFormattedDateString().'</h5>
                                  //                                             <p class="emp-no"> Date</p>
                                  //                                         </div>

                                  //                                         <div class="col-xl-1 td-div">';

                                  //                                             $output .=  '<h5 class="time">'.Carbon::parse($all_overtime_request -> attendance ->time_in)->format('H:i').'</h5>';
                                  //                                             $output .= '<p class="type">Time In</p>
                                  //                                         </div>';

                                  //                                 $output .='<div class="col-xl-1 td-div">';

                                  //                                                     if($all_overtime_request-> attendance ->time_out == null){

                                  //                                                         $output .=  '<h5 class="time">--:--</h5>';
                                  //                                                         $output .= '<p class="type">Time Out</p>';
                                  //                                                     }
                                  //                                                     else
                                  //                                                     {
                                  //                                                         $output .=  '<h5 class="time" >'.Carbon::parse($all_overtime_request -> attendance ->time_out)->format('H:i').'</h5>';
                                  //                                                         $output .= '<p class="type">Time Out</p>';
                                  //                                                     }



                                  //                                 $output .='</div>';




                                  //                                             if($all_overtime_request -> hours_OT != null){

                                  //                                             $output.='<div class="col-xl-1">
                                  //                                                             <h5 class="emp-name">'.$all_overtime_request ->hours_OT.'</h5>
                                  //                                                             <p class="emp-no"> Total Overtime</p>
                                  //                                                         </div>';
                                  //                                             }
                                  //                                             else{

                                  //                                                 $output.='<div class="col-xl-1">
                                  //                                                             <h5 class="emp-name">--:--</h5>
                                  //                                                             <p class="emp-no"> Total Overtime</p>
                                  //                                                         </div>';
                                  //                                             }


                                  //                                             $output .=' <div class="col-xl-2">
                                  //                                                             <h6 class="emp-name">'.$all_overtime_request -> reason.'</h6>
                                  //                                                             <p class="emp-no"> Reason</p>
                                  //                                                         </div>';


                                  //                                 $output .='<div class="col-xl-3 d-flex justify-content-end align-items-center gap-2">';

                                  //                                         if($all_overtime_request -> isDecline_HR == '1' && $all_overtime_request -> isDecline_TL == '1' && $all_overtime_request -> isDecline_SVP == '1' ){

                                  //                                             $output .=' <span class="status late d-flex align-items-center">
                                  //                                                             <i class="bx bx-x"></i>
                                  //                                                             Declined request
                                  //                                                         </span>';
                                  //                                         }
                                  //                                         else{

                                  //                                             if($all_overtime_request -> isApproved_TL == '1' && $all_overtime_request -> isApproved_SVP == '1' && $all_overtime_request  -> isApproved_HR == '1'){

                                  //                                                 $output .=' <span class="status on-time d-flex align-items-center">
                                  //                                                                 <i class="bx bx-check"></i>
                                  //                                                                     Approve request
                                  //                                                             </span>';
                                  //                                             }
                                  //                                             else if($all_overtime_request  -> isApproved_TL == '0' || $all_overtime_request -> isApproved_SVP == '0' || $all_overtime_request  -> isApproved_HR == '0'){

                                  //                                                 if(Auth::user()->hasRole('HR')){

                                  //                                                     if($all_overtime_request  -> isApproved_HR == '1'){

                                  //                                                         $output .=' <span class="status on-time d-flex align-items-center">
                                  //                                                                         <i class="bx bx-check"></i>
                                  //                                                                         Approve request
                                  //                                                                     </span>';
                                  //                                                     }
                                  //                                                     else{

                                  //                                                         $output .='
                                  //                                                                     <a href="#" id="' . $all_overtime_request -> id . '" type="button" class="btn btn-danger btn-sm mx-1 hr_decline" data-bs-toggle="modal" data-bs-target="#decline_ot_HR">
                                  //                                                                         Decline Request
                                  //                                                                     </a>
                                  //                                                                     <a href="#" id="' . $all_overtime_request -> id . '" type="button" class="btn btn-success btn-sm mx-1 approve_hr" data-bs-toggle="modal" data-bs-target="#approve_ot_HR">
                                  //                                                                         HR Approval
                                  //                                                                     </a> ';


                                  //                                                     }
                                  //                                                 }
                                  //                                                 elseif(Auth::user()->hasRole('teamleader')){

                                  //                                                     if($all_overtime_request  -> isApproved_TL == '1'){

                                  //                                                         $output .=' <span class="status on-time d-flex align-items-center">
                                  //                                                                         <i class="bx bx-check"></i>
                                  //                                                                         Approve request
                                  //                                                                     </span>';
                                  //                                                     }
                                  //                                                     else if($all_overtime_request  -> isDecline_TL == '1'){

                                  //                                                         $output .=' <span class="status late d-flex align-items-center">
                                  //                                                                         <i class="bx bx-x"></i>
                                  //                                                                         Declined request
                                  //                                                                     </span>';
                                  //                                                     }
                                  //                                                     else{
                                  //                                                         $output .= '<a href="#" id="' . $all_overtime_request -> id . '" type="button" class="btn btn-danger btn-sm mx-1 tl_decline" data-bs-toggle="modal" data-bs-target="#decline_ot_TL">
                                  //                                                                         Decline Request
                                  //                                                                     </a>
                                  //                                                                     <a href="#" id="' . $all_overtime_request -> id . '" type="button" class="btn btn-success btn-sm mx-1 approve_tl" data-bs-toggle="modal" data-bs-target="#approve_ot_TL">
                                  //                                                                         Team Leader Approval
                                  //                                                                     </a>';
                                  //                                                     }

                                  //                                                 }
                                  //                                                 else if(Auth::user()->hasRole('administrator')){

                                  //                                                     if($all_overtime_request  -> isApproved_SVP == '1'){

                                  //                                                         $output .=' <span class="status on-time d-flex align-items-center">
                                  //                                                                         <i class="bx bx-check"></i>
                                  //                                                                         Approve request
                                  //                                                                     </span>';
                                  //                                                     }
                                  //                                                     else if($all_overtime_request  -> isDecline_TL == '1'){

                                  //                                                         $output .=' <span class="status late d-flex align-items-center">
                                  //                                                                         <i class="bx bx-x"></i>
                                  //                                                                         Declined request
                                  //                                                                     </span>';
                                  //                                                     }
                                  //                                                     else{

                                  //                                                         // if($all_overtime_request->attendance->time_out != null){

                                  //                                                         //     $output .=' <span class="status on-time d-flex align-items-center">
                                  //                                                         //                     <i class="bx bx-time"></i>
                                  //                                                         //                     Employee already Clocked Out
                                  //                                                         //                 </span>';
                                  //                                                         // }
                                  //                                                         // else{

                                  //                                                             $output .=' <a href="#" id="' . $all_overtime_request -> id . '" type="button" class="btn btn-danger btn-sm mx-1 svp_decline" data-bs-toggle="modal" data-bs-target="#decline_ot_SVP">
                                  //                                                                             Decline Request
                                  //                                                                         </a>
                                  //                                                                         <a href="#" id="' . $all_overtime_request -> id . '" type="button" class="btn btn-success btn-sm mx-1 approve_svp" data-bs-toggle="modal" data-bs-target="#approve_ot_SVP">
                                  //                                                                             SVP Approval
                                  //                                                                         </a>';
                                  //                                                         //}
                                  //                                                     }
                                  //                                                 }

                                  //                                             }
                                  //                                         }




                                  //                                 $output .='</div>

                                  //                                         </div>
                                  //                                     </div>
                                  //                                 </div>
                                  //                             </div>
                                  //                         </td>
                                  //                     </tr>';
                                  //     }
                                  // }























                                //   else if(Auth::user()->hasRole(['VPO']) &&  $all_overtime_request -> employee -> employee_department == "Administration" || $all_overtime_request -> employee -> employee_department == "App Intake" || $all_overtime_request -> employee -> employee_department == "Audit" || $all_overtime_request -> employee -> employee_department == "Verification" || $all_overtime_request -> employee -> employee_department == "Returns"){
                                //     $output .= "VPO";
                                // }
                                // else if(Auth::user()->hasRole(['COO']) && $all_overtime_request->employee->employee_department == "Project management" || $all_overtime_request -> employee -> employee_department == "Provider Relation" || $all_overtime_request -> employee -> employee_department == "Provider Enrollment"){
                                //     $output .= "COO";
                                // }
                                // else if(Auth::user()->hasRole('teamleader')){

                                // }




                            // Payroll

                            //     <div class="page-container row">
                            //     <div class="col-xl-8">
                            //         <div class="section-container">
                            //             <div class="d-flex align-items-center">
                            //                 <i class='bx bx-money-withdraw section-icon'></i>
                            //                 <h5 class="section-header">Payroll Records</h5>
                            //             </div>
                            //             <div class="row table-row" id="show_payroll">

                            //             </div>
                            //         </div>
                            //     </div>
                            //     <div class="col-xl-4 right-pane">
                            //         @if(Auth::user()->hasRole('accounting'))
                            //             <div class="card employee-card">
                            //                 <div class="card-body">
                            //                     <form action="{{ route('submit_payroll') }}" method="POST" id="payroll_submit"  enctype="multipart/form-data">
                            //                         @csrf

                            //                         <div class="d-flex align-items-center">
                            //                             <i class='bx bx-money-withdraw section-icon'></i>
                            //                             <h5 class="section-header">Payroll</h5>
                            //                         </div>

                            //                         <div class="form-row first-row">
                            //                             <div class="col-xl-12" hidden>
                            //                                 <label for="txt-time">Employee Name:</label>
                            //                                 <input type="text" name="employee_name" class="form-control" id="employee_name">
                            //                             </div>
                            //                             <div class="col-xl-12">
                            //                                 <label for="txt-time">Employee Name:</label>
                            //                                 <select name="" id="data" class="form-select form-control">

                            //                                 <option value="">--Select an option--</option>

                            //                                 @foreach($employees as $option)
                            //                                 <option value="{{ $option->id }}">{{ $option->employee_name }}</option>
                            //                                 @endforeach

                            //                                 </select>
                            //                                 <span class="text-danger error-text employee_name_error"></span>
                            //                             </div>
                            //                         </div>
                            //                         <div class="form-row row">
                            //                             <div class="col-xl-6">
                            //                                 <label for="txt-time">Payment Type:</label>
                            //                                 <input type="text" name="payment_type" class="form-control" >
                            //                                 <span class="text-danger error-text payment_type_error"></span>
                            //                             </div>
                            //                             <div class="col-xl-6">
                            //                                 <label for="txt-time">Pay Date:</label>
                            //                                 <input type="date"  name="pay_date" class="form-control" >
                            //                                 <span class="text-danger error-text pay_date_error"></span>
                            //                             </div>
                            //                         </div>
                            //                         <div class="form-row row">
                            //                             <div class="col-xl-6">
                            //                                 <label for="txt-time">Cash Advance:</label>
                            //                                 <input type="number" min="0" step="any" name="cash_advance" class="form-control" >
                            //                                 <span class="text-danger error-text cash_advance_error"></span>
                            //                             </div>
                            //                             <div class="col-xl-6">
                            //                                 <label for="txt-time">Allowance Per Cutoff:</label>
                            //                                 <input type="number" min="0" step="any" name="allowance" class="form-control" id="employee_allowances" readonly>
                            //                                 <span class="text-danger error-text allowance_error"></span>
                            //                             </div>
                            //                         </div>

                            //                         <div class="form-row row">
                            //                             <div class="col-xl-6">
                            //                                 <label for="txt-time">Start Date:</label>
                            //                                 <input type="date" name="start_date" class="form-control">
                            //                                 <span class="text-danger error-text start_date_error"></span>
                            //                             </div>
                            //                             <div class="col-xl-6">
                            //                                 <label for="txt-time">End Date:</label>
                            //                                 <input type="date" name="end_date" class="form-control">
                            //                                 <span class="text-danger error-text end_date_error"></span>
                            //                             </div>
                            //                         </div>
                            //                         {{-- <div class="form-row row ">
                            //                             <div class="col-xl-6">
                            //                                 <label for="txt-time">No. of Special Day:</label>
                            //                                 <input type="number" min="0" name="special_day" class="form-control" id="special_day">
                            //                                 <span class="text-danger error-text special_day_error"></span>
                            //                             </div>
                            //                             <div class="col-xl-6">
                            //                                 <label for="txt-time">No. of Regular Day:</label>
                            //                                 <input type="number" min="0" name="regular_day" class="form-control" id="regular_day">
                            //                                 <span class="text-danger error-text regular_day_error"></span>
                            //                             </div>
                            //                         </div> --}}
                            //                         <div class="form-row row">
                            //                             <div class="col-xl-6">
                            //                                 <label for="txt-time">Employee No.:</label>
                            //                                 <input type="text" name="employee_number" class="form-control" id="employee_number" readonly>
                            //                             </div>
                            //                             <div class="col-xl-6">
                            //                                 <label for="txt-time">Department:</label>
                            //                                 <input type="text" name="" class="form-control" id="employee_dept" readonly>
                            //                             </div>
                            //                         </div>
                            //                         <div class="form-row row">
                            //                             <div class="col-xl-6">
                            //                                 <label for="txt-time">Base Salary:</label>
                            //                                 <input type="text" name="base_salary" class="form-control" id="base_salary" readonly>
                            //                             </div>
                            //                             <div class="col-xl-6">
                            //                                 <label for="txt-time">Daily Rate:</label>
                            //                                 <input type="text" name="daily_rate" class="form-control" id="employee_daily_rate" readonly>
                            //                             </div>
                            //                         </div>
                            //                         <div class="form-row row payroll" >
                            //                             <div class="col-xl-12">
                            //                                 <label for="txt-time">Rate per Hours:</label>
                            //                                 <input type="text" name="rate_per_hour" class="form-control" id="employee_per_hour_rate" readonly>
                            //                             </div>
                            //                         </div>
                            //                         <div class="form-row row payroll">
                            //                             <div class="col-xl-12">
                            //                                 <label for="txt-time">Rate per Minutes:</label>
                            //                                 <input type="text" name="rate_per_minutes" class="form-control" id="employee_per_minute_rate" readonly>
                            //                             </div>
                            //                         </div>
                            //                         <div class="form-row row payroll">
                            //                         <div class="col-xl-12">
                            //                                 <label for="txt-time">Rate per Seconds:</label>
                            //                                 <input type="text" name="rate_per_seconds" class="form-control" id="employee_per_seconds_rate" readonly>
                            //                             </div>
                            //                         </div>
                            //                         <div class="form-row row payroll">
                            //                             <div class="col-xl-6">
                            //                                 <label for="txt-time">Schedule Shift:</label>
                            //                                 <input type="text" name="schedule_shift" class="form-control" id="schedule_shift" readonly>
                            //                                 <span class="text-danger error-text shift_error"></span>
                            //                             </div>
                            //                             <div class="col-xl-6">
                            //                                 <label for="txt-time">Monthly Rate:</label>
                            //                                 <input type="text" name="monthly_rate" class="form-control" id="monthly_rate" readonly>
                            //                                 <span class="text-danger error-text shift_error"></span>
                            //                             </div>
                            //                         </div>

                            //                         {{-- <div class="form-row row">
                            //                             <div class="col-xl-6">
                            //                                 <label for="txt-time">Schedule Start:</label>
                            //                                 <input type="time" name="sched_start" class="form-control" id="start" readonly>
                            //                                 <span class="text-danger error-text sched_start_error"></span>
                            //                             </div>
                            //                             <div class="col-xl-6">
                            //                                 <label for="txt-time">Schedule End:</label>
                            //                                 <input type="time" name="sched_end" class="form-control" id="end" readonly>
                            //                                 <span class="text-danger error-text sched_end_error"></span>
                            //                             </div>
                            //                         </div> --}}

                            //                         <div class="form-row first-row">
                            //                             <div class="d-flex justify-content-center">
                            //                                 <button type="submit" class="btn-form d-flex align-items-center" id="payroll_btn">
                            //                                     Submit
                            //                                 </button>
                            //                             </div>
                            //                         </div>
                            //                     </form>
                            //                 </div>
                            //             </div>
                            //         @else
                            //             <h4 class="text-center text-secondary my-5">Only Accounting can create payroll of the Employee.</h4>
                            //         @endif
                            //     </div>

                            // </div>

    
    //NEWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWW code from attendance            9/9/23


          // $scanned_attendances = Attendance::where('emp_no', '=', $request -> scanned)
                                   //                                 ->where('date', '=', Carbon::now('GMT+8')->format('Y-m-d'))
                                   //                                 ->with('employee')
                                   //                                 ->get();

                                   //  if($data -> emp_no == $request -> scanned && $data -> date == Carbon::now('GMT+8')->subDay(1)->format('Y-m-d') && $data->time_out === NULL){

                                   //          dd("First");
                                   //  }
                                   //  else{

                                   //          //sample break time
                                   //           $night_break_time = Carbon::createFromTime(01, 00, 00, 'GMT+8')->format('H:i:s');
                                   //           $night_shift_break_time = Carbon::parse($night_break_time)->format('H:i:s');


                                   //          foreach ($scanned_attendances as  $scanned_attendance) {

                                   //              if($scanned_attendance->time_out < $scanned_attendance ->employee->sched_end && $scanned_attendance->time_out < $night_shift_break_time )
                                   //              {

                                   //                      $employee_out = Carbon::parse($scanned_attendance ->employee-> sched_end)->addDay(1)->subHour(1);


                                   //                      $employee_undertime = $employee_out->diffInSeconds($scanned_attendance->time_out);
                                   //                      $undertime = gmdate('H:i:s', $employee_undertime);


                                   //                      dd($undertime);

                                   //              }
                                   //              else if($scanned_attendance->time_out < $scanned_attendance ->employee->sched_end && $scanned_attendance->time_out > $night_shift_break_time )
                                   //              {

                                   //                      $employee_out = Carbon::parse($scanned_attendance ->employee-> sched_end)->addDay(1)->subHour(1);
                                   //                      $employee_undertime = $employee_out->diffInSeconds($scanned_attendance->time_out);
                                   //                      $undertime = gmdate('H:i:s', $employee_undertime);


                                   //                      dd($undertime);
                                   //              }
                                   //              else
                                   //              {

                                   //                  dd('fourth');
                                   //              }
                                   //          }

                                   //  }