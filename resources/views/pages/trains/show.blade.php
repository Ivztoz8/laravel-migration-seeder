@extends('layout.layout')

@section('content')
<div class="d-flex justify-content-center align-items-center p-5">
    <div class="card p-3 border border-warning border-5" style="width: 18rem;">
        <div class="card-body">
            <h1 class="card-text p-1 text-white"> &#128646;</h1>
            <h5 class="card-title text-success">Codice treno: {{ $train -> cod_treno }}</h5>
            <h6 class="card-subtitle mb-2 text-muted">Azienda: {{ $train -> azienda }}</h6>
              <h6 class="card-subtitle mb-2 text-muted">Stazione di arrivo: {{ $train -> stazione_arrivo }}</h6>
              <h6 class="card-subtitle mb-2 text-muted">Stazione di partenza: {{ $train -> stazione_partenza }}</h6>
              <p class="card-text">Numero di carrozze: {{ $train -> num_carrozze }}</p>
              <p class="card-text {{ $train -> cancellato == 0 ? 'text-success' : 'text-danger' }}">Orario di partenza: {{ $train -> orario_partenza }}</p>
              <p class="card-text {{ $train -> cancellato == 0 ? 'text-success' : 'text-danger' }}">Orario di arrivo: {{ $train -> orario_arrivo }}</p>
              <p class="card-text  {{ $train -> in_orario == 1 ? 'text-success' : 'text-danger' }} ">Treno in orario: {{ $train -> in_orario == 0 ? 'No' : 'Sì' }}</p>
              <p class="card-text  {{ $train -> cancellato == 0 ? 'text-success' : 'text-danger' }}">Treno cancellato: {{ $train -> cancellato == 0 ? 'No' : 'Sì' }}</p>
        </div>
        </div>
    </div>
</div>
@endsection