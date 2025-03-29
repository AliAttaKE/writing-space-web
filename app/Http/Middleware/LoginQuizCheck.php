<?php

namespace App\Http\Middleware;
use App\Helpers\Qs;
use App\Models\Management\Quiz\AssignQuiz;
use App\Models\Management\Quiz\Quiz;
use App\Repositories\QuizRepo;
use Closure;
use Illuminate\Http\Request;
use Auth;
use App\Models\OwnerProfile;
use App\Models\User;
use function PHPUnit\Framework\isEmpty;

class LoginQuizCheck
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
        if(Auth::check() && Qs::userIsWorker()){
            $user=  User::where('id',Auth()->user()->id)->get()->first();
            $assign = AssignQuiz::where('users_id',$user->id)->where('quiz_is_done',null)->orderBy('order_by', 'ASC')->get()->first();
            if (!empty($assign)  && (Qs::userIsWorker())) {
                $quiz = Quiz::where('id',$assign->quizzes)->get()->first();
                if ($assign == null) {
                    return $next($request);
                }else{
                    return redirect('your-quiz');

//                    $data= $this->quiz->getLoginQuiz($assign->quizzes);
//                    return response()->view('worker/Quiz/index', compact('data'));
                }
            } else {
                return $next($request);
            }
        }else{
            return $next($request);
        }
    }
}
