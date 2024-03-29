<?php

namespace App\Mail;

use App\Models\User;
use App\Models\Company;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class CompanyAnswersMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(
        private $user_answers,
        private User $user,
        private Company $company
    ) {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('answers.index', [
            'user_answers' => $this->user_answers,
            'user' => $this->user
        ])
            ->subject('Analise de Perfil - ' . config('app.name'))
            ->to($this->company->email);
    }
}
