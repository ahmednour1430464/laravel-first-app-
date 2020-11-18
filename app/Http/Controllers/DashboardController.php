<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\CourseUser;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class DashboardController extends Controller
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
    public function showDashboard()
    {
        $user = User::find(Auth::id());
        if ($user->role === 'teacher') {
            $courses = $user->created_courses;

            return view('teacher_dashboard.index', compact('courses'));
        } elseif ($user->role === 'student') {
            //enrolled courses
            $enrolled_courses = $user->courses;
            
            
            //all Courses
            $courses = Course::whereNotIn('id', function ($query) {
                $query->select('course_id')
                      ->from('course_user')
                      ->where('user_id', '=', Auth::id());
            })->get();

            return view('student_dashboard.index', compact('courses', 'enrolled_courses'));
        } else {
            return view('layouts.app');
        }
    }

    public function enrollCourse($id)
    {
        // course student
        CourseUser::create([
            'user_id' => Auth::id(),
            'course_id' => $id,
        ]);

        return redirect()->route('student_dashboard');
    }

    public function createCourse()
    {
        return view('teacher_dashboard.create');
    }
    public function storeCourse(Request $request)
    {
        $request->validate(Course::$rules);

        Course::create([
            'title' => $request->title,
            'info' => $request->info,
            'duration' => $request->duration,
            'user_id' => Auth::id()
        ]);
        return redirect()->route('teacher_dashboard');
    }
    public function editCourse($id)
    {
        $course = Course::findOrFail($id);
        return view('course.edit', compact('course'));
    }

    public function updateCourse(Request $request, $id)
    {
        $request->validate(Course::$rules);
        $course = Course::findOrFail($id);
        $course->title = $request->title;
        $course->info = $request->info;
        $course->duration = $request->duration;
        $course->save();
        return redirect()->route('teacher_dashboard');
    }

    public function deleteCourse($id)
    {
        $course = Course::findOrFail($id);
        $course->delete();
        return redirect()->route('teacher_dashboard');
    }

    public function showCourse($id)
    {
        $course = Course::findOrFail($id);
        return view('course.show', compact('course'));
    }
}
