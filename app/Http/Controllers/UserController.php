<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Answer;
use App\Models\Company;
use App\Models\Question;
use Illuminate\Http\Request;
use App\Mail\UserAnswersMail;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;


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

        return redirect()->route(
            'user.questions',
            [
                'url' => $company->url,
                'id' => $user->id
            ]
        );

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

        return view('question.index', compact('questions', 'url', 'id'));

    }

    public function answers(Request $request, $url, $id)
    {
        if (!$company = $this->company->where('url', $url)->first()) {
            return redirect()->back()->with('error', 'Empresa não encontrada.');
        }

        if (!$user = $this->user->find($id)) {
            return redirect()->back()->with('error', 'Usuário não encontrada.');
        }


        $questionIds = $request->input('question_ids');
        $scores = $request->input('scores');

        foreach ($questionIds as $key => $questionId) {
            $answer = new Answer();
            $answer->question_id = $questionId;
            $answer->score = $scores[$key];

            $answer->company_id = $company->id;
            $answer->user_id = $user->id; // Exemplo
            $answer->save();
        }

        return redirect()->route(
            'user.score',
            [
                'id' => $user->id
            ]
        );
    }

    public function score(int $id)
    {
        $user = $this->user->findOrFail($id);

        $user_answers = Answer::select('questions.type', DB::raw('SUM(answers.score) as total_score'))
            ->where('user_id', $id)
            ->join('questions', 'answers.question_id', '=', 'questions.id')
            ->groupBy('questions.type')
            ->orderByDesc('total_score')
            ->get();


        Mail::send(new UserAnswersMail($user_answers, $user));

        return view('answers.index', compact('user', 'user_answers'));
    }
}
