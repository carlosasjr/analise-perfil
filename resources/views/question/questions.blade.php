@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <div class="card">
                            <form id="wizardForm" method="POST"
                                action="{{ route('user.answers', ['url' => $url, 'id' => $id]) }}">
                                @csrf

                                @foreach ($questions as $index => $question)
                                    <div class="form-group" id="step{{ $question->id }}">
                                        <div class="card-header">
                                            <label for="step{{ $question->id }}">{{ $index + 1 }} -
                                                {{ $question->question }}</label>
                                        </div>

                                        <div class="card-body d-flex justify-content-around">
                                            <input type="hidden" name="answers[{{ $question->id }}][question_id]"
                                                value="{{ $question->id }}">
                                            <strong class="font-weight-bold">Nada a ver comigo</strong>
                                            @for ($i = 0; $i <= 5; $i++)
                                                <div class="mr-2 d-flex justify-content-around">
                                                    <input type="radio" name="answers[{{ $question->id }}][score]"
                                                        class="form-check-input" value="{{ $i }}"
                                                        id="score{{ $question->id }}_{{ $i }}"
                                                        {{ $i == 0 ? 'checked' : '' }}>
                                                    <strong class="form-check-label"
                                                        for="score{{ $question->id }}_{{ $i }}">{{ $i }}</strong>
                                                </div>
                                            @endfor
                                            <strong>Tudo a ver comigo</strong>
                                        </div>
                                    </div>
                                @endforeach


                                <div class="form-group1 text-center mb-3">
                                    <button type="button" class="btn btn-secondary" id="prevBtn">Anterior</button>
                                    <button type="button" class="btn btn-primary" id="nextBtn">Próximo</button>
                                    <button type="submit" class="btn btn-success" id="submitBtn">Enviar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
