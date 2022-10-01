document.querySelector('#colab').style.border = '0px'

const bg = document.querySelector('#colab_sign').style.backgroundColor
const signs = document.querySelectorAll('#colab_sign')

signs.forEach(el => {
    el.onclick = () => {
        if(el.style.backgroundColor == bg){
            el.style.backgroundColor = 'red'
            el.innerHTML = '-'
        }else{
            el.style.backgroundColor = bg
            el.innerHTML = '+'
        }
    }
})

const names = Array.from(document.querySelectorAll('#colab_name')).map(el => el.innerHTML)
const axios = require('axios')
const probId = document.querySelector('#id_prob').innerHTML

document.querySelector('#salvar>input').onclick = async() => {
    let selectedSigns = Array.from(signs).map((el, index) => el.innerHTML == '-' ? index : -1)
    let selectedNames = names.filter((el, index) => selectedSigns.includes(index))
    await axios.post(`/problemas/${probId}/adicionar_colaborador`, {
        colabsToAdd: selectedNames
    })
    window.location.replace(`/problemas/${probId}`);
}
