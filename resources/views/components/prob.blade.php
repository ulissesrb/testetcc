@if(!$prob->excluido)

<div id="prob">
    <a class="link_problema" href="/problemas/{{ $prob->id }}">{{ $prob->nome }}</a>
   <br><br>
   <h3>Criado em {{  $prob->created_at->format('d/m/Y') }}</h3> 
</div>

@endif

@if($prob->excluido)

<div id="prob">
    <a class="link_problema" href="/problemas/{{ $prob->id }}">{{ $prob->nome }}</a>
   <br><br>
   <h3>Criado em {{  $prob->created_at->format('d/m/Y') }}</h3> 
   <h3>Concluido em  {{  $prob->excluded_at->format('d/m/Y') }}</h3> 
</div>

@endif