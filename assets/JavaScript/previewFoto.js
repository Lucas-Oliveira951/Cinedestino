const foto = document.getElementById('foto');
const btnUpload = document.getElementById('btnUpload');
const preview = document.getElementById('preview');
const textoUpload = document.getElementById('textoUpload');


foto.addEventListener('change', () => {
    const file = foto.files[0]; //pega o arquivo selecionado
    if (file) {
        preview.src = URL.createObjectURL(file); //cria um url temporário
        preview.style.display = 'block';

        textoUpload.textContent = "Selecionar outra foto";
    }
});