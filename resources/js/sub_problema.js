const form = document.querySelector('#form_subproblema')

let subs = [1, 2, 3]

subs.map((el, index) => {
    let sub = document.createElement("div")
    sub.id = "subproblema"
    sub.innerHTML = `
        <div id="campos">
            <div id="texto_sub_problema">
                <h4>Subproblema ${index + 1}</h4>
            </div>
            <div id="caixa_texto">
                <input class="text-input" type="text" id="sub_problema" maxlength="255">
            </div>
        </div>
        <div id="acrescimo_sub_problema">
            <input type="button" name="botao_adiciona"><img src="/img/mais.png" width="30" height="30"/></>
        </div>
    `

    form.appendChild(sub)
})

function updateEvents () {
    document.querySelectorAll('#acrescimo_sub_problema').forEach(el => {
        el.onclick = addSubProb
    })
}

function addSubProb() {
    let sub = document.createElement("div")
    sub.id = "subproblema"
    sub.innerHTML = `
        <div id="campos">
            <div id="texto_sub_problema">
                <h4>Subproblema ${subs.length + 1}</h4>
            </div>
            <div id="caixa_texto">
                <input class="text-input" type="text" id="sub_problema" maxlength="255">
            </div>
        </div>
        <div id="acrescimo_sub_problema">
            <input type="button" name="botao_adiciona"><img src="/img/mais.png" width="30" height="30"/></>
        </div>
    `

    form.appendChild(sub)
    subs.push(subs.length + 1)
    updateEvents()
}

updateEvents()
