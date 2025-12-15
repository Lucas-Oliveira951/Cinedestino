function Criar() {
    let nome = document.querySelector('#nome')
    let email = document.querySelector('#email')
    let Senha = document.querySelector('#Senha')
    let res = document.querySelector('#res')




    if (nome.value.length == 0 && email.value.length == 0 && Senha.value.length == 0) {

        res.style.padding = '20px'
        res.style.background = '#dd08083f'
        res.style.color = '#9ba5a2ff'
        res.style.borderRadius = '10px'
        res.innerHTML = `<i class="fa-solid fa-circle-xmark"></i> Campos não preenchidos!`

        // Nome não preenchido
    } else if (nome.value.length == 0 && email.value.length != 0 && Senha.value.length != 0) {

       res.style.padding = '20px'
       res.style.background = '#dd08083f'
       res.style.color = '#9ba5a2ff'
       res.style.color = '10px'
       res.style.borderRadius = '10px'
       res.style.marginBottom = '5px'
       res.innerHTML = `<i class="fa-solid fa-circle-xmark"></i> Nome não preenchido!`

        // Email não preenchido
    } else if (nome.value.length != 0 && email.value.length == 0 && Senha.value.length != 0) {
        
       res.style.padding = '20px'
       res.style.background = '#dd08083f'
       res.style.color = '#9ba5a2ff'
       res.style.color = '10px'
       res.style.borderRadius = '10px'
       res.style.marginBottom = '5px'
       res.innerHTML = `<i class="fa-solid fa-circle-xmark"></i> Email não preenchido!`

       // Senha não preenchida
    } else if (nome.value.length != 0 && email.value.length != 0 && Senha.value.length == 0){

        res.style.padding = '20px'
        res.style.background = '#dd08083f'
        res.style.color = '#9ba5a2ff'
        res.style.borderRadius = '10px'
        res.style.marginBottom = '5px'
        res.innerHTML = `<i class="fa-solid fa-circle-xmark"></i> Senha não preenchido!`

       //Nome e email não preenchidos       
    } else if (nome.value.length == 0 && email.value.length == 0 && Senha.value.length != 0) {

        res.style.padding = '20px'
        res.style.background = '#dd08083f'
        res.style.color = '#9ba5a2ff'
        res.style.borderRadius = '10px'
        res.style.marginBottom = '5px'
        res.style.display = 'flex'
        res.style.alignItems = 'center'
        res.style.gap = '10px'
        res.innerHTML = `<i class="fa-solid fa-circle-xmark"></i> Nome e email não preenchidos!`

       //Email e senha não preenchidos        
    } else if (nome.value.length != 0 && email.value.length == 0 && Senha.value.length == 0) {
        res.style.padding = '20px'
        res.style.background = '#dd08083f'
        res.style.color = '#9ba5a2ff'
        res.style.borderRadius = '10px'
        res.style.marginBottom = '5px'
        res.style.display = 'flex'
        res.style.alignItems = 'center'
        res.style.gap = '10px'
        res.innerHTML = `<i class="fa-solid fa-circle-xmark"></i> Email e senha não preenchidos!`

        //Nome e senha não preenchidos        
    }  else if (nome.value.length == 0 && email.value.length != 0 && Senha.value.length == 0) {
        res.style.padding = '20px'
        res.style.background = '#dd08083f'
        res.style.color = '#9ba5a2ff'
        res.style.borderRadius = '10px'
        res.style.marginBottom = '5px'
        res.style.display = 'flex'
        res.style.alignItems = 'center'
        res.style.gap = '10px'
        res.innerHTML = `<i class="fa-solid fa-circle-xmark"></i> Nome e Senha não preenchidos!`

    }

}
