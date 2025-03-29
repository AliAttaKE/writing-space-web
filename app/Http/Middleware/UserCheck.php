<?php

namespace App\Http\Middleware;
use App\Helpers\Qs;
use App\Models\Management\Quiz\Quiz;
use App\Repositories\QuizRepo;
use App\Models\RegistrationQuiz;
use Closure;
use Illuminate\Http\Request;
use Auth;
use App\Models\OwnerProfile;
use App\Models\User;
use function PHPUnit\Framework\isEmpty;

class UserCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */


    public function __construct(QuizRepo $quiz)
    {
        $this->quiz = $quiz;

    }
    public function handle($request, Closure $next)

    {
        if ($request->user()->hasVerifiedEmail()) {
            if (Auth::check()) {
               
                $quiz = RegistrationQuiz::where(['quiz_type' => 'signup', 'user_id' => Auth()->user()->id, 'quiz_is_done' => null])->orderBy('quiz_reorder', 'ASC')->get()->first();
//            $quiz = Quiz::where('erp_quiz_status', 1)->where('erp_quiz_type', 'signup')->orderBy('id', 'desc')->first();
                $profile = User::where('id', Auth()->user()->id)->where('quiz_is_done', null)->get();
                $quizdonewaitresultandaccount = User::where('id', Auth()->user()->id)->where('register_quiz', null)->where('quiz_is_done', 1)->get();
                $failureprofile = User::where('id', Auth()->user()->id)->where('register_quiz', 0)->get();
                $passbutwaitforapproval = User::where('id', Auth()->user()->id)->where('quiz_is_done', 1)->where('register_quiz', 1)->where('user_is_approved', null)->get();
                $alldone = User::where('id', Auth()->user()->id)->where('quiz_is_done', 1)->where('register_quiz', 1)->where('user_is_approved', 1)->get();
//
                if (!empty($quiz) && (Qs::userIsWorker()) && $profile->isNotEmpty()) {
//                dd($quiz);
                    return redirect('your-quiz');
//            $data = $this->quiz->get('signup');
//            return response()->view('worker/Quiz/index', compact('data'));
                } elseif ($failureprofile->isNotEmpty()) {
                    return redirect('your-quiz')->with('success', 'You' / 'r Failed a previous quiz');
//                return response()->view('worker.Quiz.Quizdone.signupimmediatefail');
                } elseif ($passbutwaitforapproval->isNotEmpty()) {
                    return redirect('your-quiz')->with('success', 'You' / 'r passed a previous quiz');

//                return response()->view('worker.Quiz.Quizdone.signupimmediatepass');
                } elseif ($quizdonewaitresultandaccount->isNotEmpty()) {
                    return response()->view('worker.Quiz.Quizdone.signupnormal');
                } elseif ($alldone->isNotEmpty()) {
                    return $next($request);
                } else {
                    return $next($request);
                }
            } else {
                return redirect('login');
            }
        }
        else{

            return redirect('verify-email');
        }
    }

}
