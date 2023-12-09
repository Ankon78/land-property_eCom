<?php

namespace App\Http\Controllers;

use Charts;
use App\Models\User;
use App\Models\Employee;
use App\Models\Property;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\ContactController;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {
        if (auth()->user()->role == 'admin') {
            return to_route('dashboard');
        }
        return view('home');
    }
    public function dashboard()
    {
        // Get total user count
        $totalUserCount = User::count();
        $totalPropertyCount = Property::count();
        $totalSupportCount = ContactController::count();
        $totalEmployeeCount = Employee::count();
        $currentDateTime = Carbon::now();


        // Format the date and time for display
        $formattedDateTime = $currentDateTime->format('Y-m-d H:i:s');

        // Format the day of the week
        $dayOfWeek = $currentDateTime->englishDayOfWeek;

        // Get user count for the current day
        $currentDayCount = User::whereDate('created_at', Carbon::today())->count();

        // Get user count for the previous day
        $previousDayCount = User::whereDate('created_at', Carbon::yesterday())->count();

        // Calculate the percentage difference
        $percentageDifference = $previousDayCount != 0 ? (($currentDayCount - $previousDayCount) / $previousDayCount) * 100 : 0;

        // Determine whether to display an increase or decrease
        $status = $percentageDifference >= 0 ? 'increase' : 'decrease';

        //user chart
        $users = User::select(DB::raw("COUNT(*) as count"))
        ->whereYear('created_at', date('Y'))
        ->groupBy(DB::raw("Month(created_at)"))
        ->pluck('count');

        //employee chart
        $employees = ContactController::select(DB::raw("COUNT(*) as count"))
        ->whereYear('created_at', date('Y'))
        ->groupBy(DB::raw("Month(created_at)"))
        ->pluck('count');

        //property chart
        $properties = Property::select(DB::raw("COUNT(*) as count"))
        ->whereYear('created_at', date('Y'))
        ->groupBy(DB::raw("Month(created_at)"))
        ->pluck('count');

        $data = [
            'total_user_count' => $totalUserCount,
            'total_Property_count' => $totalPropertyCount,
            'total_Contact_count' => $totalSupportCount,
            'total_Employee_count' => $totalEmployeeCount,
            'percentage_difference' => $percentageDifference,
            'DateTime' => $formattedDateTime,
            'dayOfWeek' => $dayOfWeek,
            'status' => $status,
            'chart'=>$users,
            'chart2'=>$employees,
            'chart3'=>$properties,

        ];


        return view('dashboard', $data);
    }
}
