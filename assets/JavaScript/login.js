function Criar(event) {
    let Email = document.querySelector('#email')
    let Senha = document.querySelector('#Senha')
    let res = document.querySelector('#res')

    res.innerHTML = "";
    res.style.padding = "";


    // Nenhum do Campos preenchido
    if (Email.value.length == 0 && Senha.value.length == 0) {
        event.preventDefault()
        res.style.padding = '20px'
        res.style.color = '#9ba5a2ff'
        res.style.background = '#dd08083f'
        res.style.borderRadius = '10px'
        res.innerHTML = `<i class="fa-solid fa-circle-xmark"></i> Campos não preenchidos!`
       
        // Email não preenchido
    } else if (Email.value.length == 0 && Senha.value.length != 0 ) {
        event.preventDefault();
        res.style.padding = '20px'
        res.style.color = '#9ba5a2ff'
        res.style.background =  '#dd08083f'
        res.style.borderRadius = '10px'
        res.innerHTML = `<i class="fa-solid fa-circle-xmark"></i> Email não preenchido!`

        //Senha não preenchido
    } else if (Email.value.length != 0 && Senha.value.length == 0) {
        event.preventDefault();
        res.style.padding = '20px'
        res.style.color = '#9ba5a2ff'
        res.style.background = '#dd08083f'
        res.style.borderRadius = '10px'
        res.innerHTML = `<i class="fa-solid fa-circle-xmark"></i> Senha não preenchido!`

    }
}

//Email ou senha incorretos
document.addEventListener("DOMContentLoaded", function() {
    const body = document.body;
    const temErro = body.getAttribute("data-erro");
    const res = document.querySelector('#res');

    if (temErro && res) {
        res.style.display = 'flex'
        res.style.gap = '10px'
        res.style.padding = '20px'
        res.style.color = '#9ba5a2ff'
        res.style.background = '#dd08083f'
        res.style.borderRadius = '10px'
        res.style.alignItems = 'center';
        res.innerHTML = `<i class="fa-solid fa-circle-xmark"></i> Email ou senha incorretos! Tente novamente.`

    }
})