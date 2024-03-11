@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0">Instruções</h5>

                                <p>1. No questionário a seguir, há 45 afirmações na coluna "Afirmação".
                                    Você deve ler uma a uma, na ordem apresentada, e atribuir para cada uma delas
                                    uma nota de 0 a 5, digitando a nota no campo "Pontuação"
                                </p>
                                <p>2. Nota 0 = Nada a ver comigo</p>
                                <p>3. Nota 5 = Tudo a ver comigo</p>
                                <p>4. Seja sincero e atribua uma nota correspondente ao que é realmente verdade, e não ao
                                    que você gostaria que fosse</p>
                                <p>5. Lembre-se não existe perfil melhor do que o outro e neste teste não existe pontuação
                                    máxima, ele serve para você se conhecer</p>
                            </div>


                            <div class="card-body">
                                <div class="row mb-0">
                                    <div class="col-md-12 text-center">
                                        <a href="{{ route('user.questions', [$url, $id])}}" class="btn btn-primary btn-lg btn-block">
                                            {{ __('Responder Questionário') }}
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
