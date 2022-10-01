require('./bootstrap');

var i = 2;

var subproblema = `
    <div id="subproblema">
        <div id="campos">
            <div id="texto_sub_problema">
                <h4>Subproblema ${i} </h4>
            </div>
            <div id="caixa_texto">
                <input class="text-input" type="text" id="sub_problema" maxlength="255">
            </div>
        </div>
        <div id="acrescimo_sub_problema">
            <input type="button" name="botao_adiciona">
            <img src="img/mais.png" width="30" height="30"/>
        </div>
    </div>`;
var i = i + 1;
$( "#formulario_subproblema" ).click(function conta() {
    $( "#subproblema" ).append(subproblema);

});






