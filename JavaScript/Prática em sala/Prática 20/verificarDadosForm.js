function validar() {
    // Telemóvel
    var telemovel = document.formulario.telemovel.value;

    if (isNaN(telemovel)) {
        alert("O número inserido não está correto.");
        return false;
    }

    // Validar 9 algorismos
    if (telemovel.length!=9) {
        alert("O número de telemóvel deverá conter 9 dígitos.");
        return false; 
    }

    if (!telemovel.startsWith(9)) {
        alert("Telemóvel não começa com 9.");
        return false;
    }

    // Idade
    var idade = document.formulario.idade.value;

    // Validar se idade é valor numérico
    if (isNaN(idade)) {
        alert("Idade não é um número.");
        return false;
    }

    // Validar idade menor do que 18
    if (idade < 18) {
        alert("O preenchimento deste formulário requer que se tenha 18 anos ou mais.");
        return false;
    }

    // email
    var email = document.formulario.email.value;

    const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    if (!re.test(String(email).toLowerCase())) {
        alert("Email inválido");
        return false;
    }

    alert("Obrigado pelo preenchimento do formulário. Todos os campos foram preenchidos corretamente.");
    return true;
}