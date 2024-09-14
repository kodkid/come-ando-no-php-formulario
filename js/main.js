document.addEventListener("DOMContentLoaded", () => {
    const nomeInput = document.getElementById("nome");
    const precoInput = document.getElementById("preco");
    const qtdEstoqueInput = document.getElementById("qtdEstoque");

    function precoApenasNumeros(event) {
        const valor = event.target.value;
        event.target.value = valor.replace(/[^0-9,]/g, '');
    }
    function estoqueApenasNumeros(event) {
        const valor = event.target.value;
        event.target.value = valor.replace(/[^0-9]/g, '');
    }

    precoInput.addEventListener("input", precoApenasNumeros);
    qtdEstoqueInput.addEventListener("input", estoqueApenasNumeros);

    form.addEventListener("submit", (event) => {
        let isValid = true;
        let errorMessage = "";

       
        if (nomeInput.value.trim() === "") {
            errorMessage += "O nome do produto é obrigatório.\n";
            isValid = false;
        }

        // Verificar se o preço é um número válido
        const preco = parseFloat(precoInput.value);
        if (isNaN(preco) ) {
            errorMessage += "Apenas valores numeros sao permitidos\n";
            isValid = false;
        }

        
        const qtdEstoque = parseInt(qtdEstoqueInput.value, 10);
        if (isNaN(qtdEstoque) ) {
            errorMessage += "Apenas valores numericos são permitidos\n";
            isValid = false;
        }
        

        if (!isValid) {
            alert(errorMessage);
            event.preventDefault(); // Impede o envio do formulário
        }
    });
});
