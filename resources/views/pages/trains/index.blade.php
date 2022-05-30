@extends('layout.layout')

@section('content')

<div class="container">
  <div class="row row-cols-3 g-3">
@forelse ($trains as $key => $train)
    
    <div>
        <div class="col card" style="width: 18rem;">
            <div class="card-body text-center">
              <h1 class="card-text p-1 text-white"> &#128646;</h1>
              <h5 class="card-title text-dark bg-primary border border-dark p-1 text-white">Codice treno: {{ $train -> cod_treno }}</h5>
              <h6 class="card-subtitle mb-2 bg-secondary border border-dark p-1 text-white">Azienda: {{ $train -> stazione_partenza  }}</h6>
              <h6 class="card-subtitle mb-2 bg-secondary border border-dark p-1  text-white">Stazione di arrivo: {{ $train -> stazione_arrivo  }}</h6>
              <p class="card-text bg-secondary border border-dark p-1 text-white">Orario di partenza: {{ $train -> orario_partenza }}</p>
              <p class="card-text border border-dark p-1  text-white {{ $train -> cancellato == 0 ? 'bg-success' : 'bg-danger' }}">Treno cancellato: {{ $train -> cancellato == 0 ? 'No' : 'Sì' }}</p>
              <a href="{{ route('train', ['id' => $train -> id]) }}" class="card-link">Info Treno</a>
            </div>
          </div>
    </div>
 

@empty
    <h2>Ci spiace, non ci sono ancora treni disponibili.</h2>
@endforelse
  </div>
</div>


@endsection