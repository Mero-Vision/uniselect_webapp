<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Application;
use App\Models\Course;
use App\Models\University;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Get the current time and subtract 12 hours
        $twelveHoursAgo = now()->subHours(12);

        // Filter applications created in the last 12 hours with status 'pending'
        $newApplications = Application::with('university', 'course', 'student')
            ->where('application_status', 'pending')
            ->where('created_at', '>=', $twelveHoursAgo)
            ->latest()
            ->get();

        $totalUniversity = University::count();
        $totalCourses = Course::count();
        $totalApplications = Application::count();
        $totalStudents = User::role(User::STUDENT)->count();

        // Get the current time and subtract 7 days
        $sevenDaysAgo = now()->subDays(7);

        // Counts for the last 7 days
        $universitiesLast7Days = University::where('created_at', '>=', $sevenDaysAgo)->count();
        $coursesLast7Days = Course::where('created_at', '>=', $sevenDaysAgo)->count();
        $applicationsLast7Days = Application::where('created_at', '>=', $sevenDaysAgo)->count();
        $studentsLast7Days = User::role(User::STUDENT)->where('created_at', '>=', $sevenDaysAgo)->count();

        // Calculate percentage change
        $universityPercentageChange = $this->calculatePercentageChange($universitiesLast7Days, $totalUniversity);
        $coursesPercentageChange = $this->calculatePercentageChange($coursesLast7Days, $totalCourses);
        $applicationsPercentageChange = $this->calculatePercentageChange($applicationsLast7Days, $totalApplications);
        $studentsPercentageChange = $this->calculatePercentageChange($studentsLast7Days, $totalStudents);


        return view('admin.dashboard.dashboard', compact(
            'newApplications',
            'totalUniversity',
            'totalCourses',
            'totalApplications',
            'totalStudents',
            'universityPercentageChange',
            'coursesPercentageChange',
            'applicationsPercentageChange',
            'studentsPercentageChange'
        ));
    }

    private function calculatePercentageChange($last7DaysCount, $totalCount)
    {
        if ($totalCount == 0) {
            return 0;
        }
        return (($last7DaysCount / $totalCount) * 100);
    }
}