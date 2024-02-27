@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0">Resultado - {{ $user->name }}</h5>
                            </div>

                            <div class="card-body">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Tipo de Pergunta</th>
                                            <th>Total de Pontos</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($user_answers as $answer)
                                        <tr>
                                            <td>{{ $answer->type }}</td>
                                            <td>{{ $answer->total_score }}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
