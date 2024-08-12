document.addEventListener('DOMContentLoaded', function() {
    // Exemplo de validação de formulário
    const form = document.querySelector('form');
    if (form) {
        form.addEventListener('submit', function(event) {
            const email = document.querySelector('#email');
            const password = document.querySelector('#password');

            if (!email.value || !password.value) {
                event.preventDefault();
                alert('Por favor, preencha todos os campos.');
            }
        });
    }

    // Adicione outras funcionalidades aqui
});
