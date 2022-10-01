@extends('layouts.template')

@section('content')


    <div id="mae">
        <center>
            <div id="field">
                <form action="{{route('CincoWDoisHs.store')}}" method="post" id="formulario">
                    <div>
                    @csrf
                        <h2> Metodologia 5W2H</h2>
                        
                        <h4>What ? (O que será feito ? ) </h4>
                        <input class="text-input" type="text" name="what" maxlength="255" required>
                        <br>
                        <h4> Why ? ( Por que será feito ?)</h4>
                        <input class="text-input" type="text" name="why" maxlength="255" required>
                        <br>
                        <h4> Where ? ( Onde será feito ?)</h4>
                        <input class="text-input" type="text" name="where" maxlength="255" required>
                        <br>
                        <h4> When ? ( Quando será feito ?)</h4>
                        <input class="text-input" type="text" name="when" maxlength="255" required>
                        <br>
                        <h4> Who ? ( Por quem será feito ?)</h4>
                        <input class="text-input" type="text" name="who" maxlength="255" required>
                        <br>
                        <h4> How ? ( Como será feito ?)</h4>
                        <input class="text-input" type="text" name="how" maxlength="255" required>
                        <br>
                        <h4> How much? ( Quanto vai custar ?)</h4>
                        <input class="text-input" type="text" name="how_much" maxlength="255" required>
                        <br><br><br><br>

                        <input class="button entra" type="reset" value="Limpar">
                        <input class="button entra" type="submit" value="Enviar">
                        <br><br>
                    
                
                
                </form>
            </div>
        
        </center>
    </div>





    <br><br><br>




@endsection