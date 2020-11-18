<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Feedback;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FeedbackController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function feedbackGive($id)
    {
        $course = Course::findOrFail($id);
        
        return view('feedback.index', compact('course'));
    }
    public function feedbackInsert(Request $request)
    {
        // $request->validator(Feedback::$rules);
        Feedback::create([
            'title' => $request->title,
            'body' => $request->body,
            'course_id' => $request->course_id,
            'student_id' => Auth::id(),
            
        ]);

       return redirect()->route('student_dashboard');
    }
}
