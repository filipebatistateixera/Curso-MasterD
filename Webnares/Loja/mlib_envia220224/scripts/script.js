function login() {
    var username = document.getElementById('username').value;
    var password = document.getElementById('password').value;

    // Enviar dados para o servidor PHP usando XMLHttpRequest ou fetch API

    // Exemplo com fetch API
    fetch('../php/login.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
        },
        body: 'username=' + encodeURIComponent(username) + '&password=' + encodeURIComponent(password),
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            alert('Login bem-sucedido!');
            // Redirecionar ou realizar outras ações após o login
        } else {
            alert('Login falhou. Verifique suas credenciais.');
        }
    })
    .catch(error => console.error('Erro:', error));

    // Impedir o envio do formulário
    return false;
}
