function Criar() {
    let Email = document.querySelector('#email')
    let Senha = document.querySelector('#Senha')
    let res = document.querySelector('.res')


    // Nenhum do Campos preenchido
    if (Email.value.length == 0 && Senha.value.length == 0) {
        res.style.padding = '20px'
        res.style.color = '#9ba5a2ff'
        res.style.background = '#dd08083f'
        res.style.borderRadius = '10px'
        res.innerHTML = `<i class="fa-solid fa-circle-xmark"></i> Campos não preenchido`
       
        // Email não preenchido
    } else if (Email.value.length == 0 && Senha.value.length != 0 ) {

        res.style.padding = '20px'
        res.style.color = '#9ba5a2ff'
        res.style.background =  '#dd08083f'
        res.style.borderRadius = '10px'
        res.innerHTML = `<i class="fa-solid fa-circle-xmark"></i> Email não preenchido`

        //Senha não preenchido
    } else if (Email.value.length != 0 && Senha.value.length == 0) {

        res.style.padding = '20px'
        res.style.color = '#9ba5a2ff'
        res.style.background = '#dd08083f'
        res.style.borderRadius = '10px'
        res.innerHTML = `<i class="fa-solid fa-circle-xmark"></i> Senha não preenchido`

    } else {
         res.style.padding = '20px'
       res.style.background = '#57ff093f'
       res.style.color = '#9ba5a2ff'
       res.style.color = '10px'
       res.style.borderRadius = '10px'
       res.innerHTML = `<i class="fa-solid fa-circle-check"></i> Login com sucesso` 

    }
}