<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Answer;
use App\Models\Company;
use App\Models\Question;
use Illuminate\Http\Request;
use App\Mail\CompanyAnswersMail;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Notifications\CompanyNotification;


class UserController extends Controller
{
    public function __construct(
        private Company $company,
        private User $user,
        private Question $question
    ) {

    }
    public function create(string $url)
    {
        return view('user.create', compact('url'));
    }

    public function store(UserRequest $request, $url)
    {
        if (!$company = $this->company->where('url', $url)->first()) {
            return redirect()->back()->with('error', 'Empresa não encontrada.');
        }

        $data = $request->all();

        $user = $company->users()
            ->firstOrCreate(
                ['email' => $data['email']],
                ['name' => $data['name']]
            );



        if ($user->answers()->exists()) {
            return redirect()->route(
                'user.score',
                [
                    'id' => $user->id
                ]
            );
        }

        return redirect()->route(
            'user.show',
            [
                'url' => $company->url,
                'id' => $user->id
            ]
        );

    }

    public function show($url, $id)
    {

        if (!$company = $this->company->where('url', $url)->first()) {
            return redirect()->back()->with('error', 'Empresa não encontrada.');
        }

        if (!$user = $this->user->find($id)) {
            return redirect()->back()->with('error', 'Usuário não encontrada.');
        }


        return view('question.index', compact('url', 'id'));
    }

    public function questions($url, $id)
    {
        if (!$company = $this->company->where('url', $url)->first()) {
            return redirect()->back()->with('error', 'Empresa não encontrada.');
        }

        if (!$user = $this->user->find($id)) {
            return redirect()->back()->with('error', 'Usuário não encontrada.');
        }

        $questions = $this->question->all();

        return view('question.questions', compact('questions', 'url', 'id'));
    }

    public function answers(Request $request, $url, $id)
    {
        if (!$company = $this->company->where('url', $url)->first()) {
            return redirect()->back()->with('error', 'Empresa não encontrada.');
        }

        if (!$user = $this->user->find($id)) {
            return redirect()->back()->with('error', 'Usuário não encontrado.');
        }

        $answers = $request->input('answers');

        foreach ($answers as $answerData) {
            $answer = new Answer();
            $answer->question_id = $answerData['question_id'];
            $answer->score = $answerData['score'] ?? 0;

            $answer->company_id = $company->id;
            $answer->user_id = $user->id;
            $answer->save();
        }

        return redirect()->route('user.score', ['id' => $user->id]);
    }


    public function score(int $id)
    {
        $user = $this->user->findOrFail($id);
        $company = $user->company;

        $user_answers = Answer::select('questions.type', DB::raw('SUM(answers.score) as total_score'))
            ->where('user_id', $id)
            ->join('questions', 'answers.question_id', '=', 'questions.id')
            ->groupBy('questions.type')
            ->orderByDesc('total_score')
            ->get();


        Mail::send(new CompanyAnswersMail($user_answers, $user, $company));

        return view('answers.index', compact('user', 'user_answers'));
    }
}
