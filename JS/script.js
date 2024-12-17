function meuEscopo() {
    const form = document.querySelector('.form');
    const resultado = document.querySelector('.resultado');
    const mensagens = [];

    function recebeEventoForm(evento) {
        evento.preventDefault();

        const nome = form.querySelector('#nome');
        const sobrenome = form.querySelector('#sobrenome');
        const email = form.querySelector('#email');
        const mensagem = form.querySelector('#mensagem');

        mensagens.push({
            nome: nome.value,
            sobrenome: sobrenome.value,
            email: email.value,
            mensagem: mensagem.value
        });

        resultado.innerHTML = 
            `<p>Mensagem enviada com sucesso!</p>`;
            
        form.reset();

        console.log(mensagens);
    }
    form.addEventListener('submit', recebeEventoForm);
}
meuEscopo();
