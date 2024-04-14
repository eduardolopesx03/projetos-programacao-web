// Objeto que mapeia as opções de pratos para suas imagens
const pratosImagens = {
    "Salada Caprese": "img/Salada_Caprese.jpg",
    "Sopa de Cebola": "img/Sopa_de_Cebola.jpg",
    "Bruschetta de Tomate": "img/Bruschetta_de_Tomate.jpg",
    "Filé Mignon ao Molho de Mostarda": "img/File_Mignon.jpg",
    "Risoto de Camarão": "img/Risoto_de_Camarao.jpg",
    "Frango à Parmegiana": "img/Frango_a_Parmegiana.jpg",
    "Lasanha à Bolonhesa": "img/Lasanha_Bolonhesa.jpg",
    "Salmão Grelhado": "img/Salmao_Grelhado.jpg",
    "Tiramisu": "img/Tiramisu.jpg",
    "Pudim de Leite": "img/Pudim_de_Leite.jpg",
    "Sorvete de Chocolate": "img/Sorvete_de_Chocolate.jpg"
};

function mostrarMenu() {
    // Obtém os valores escolhidos pelo usuário
    const entradaEscolhida = document.querySelector('input[name="entrada"]:checked');
    const pratoEscolhido = document.querySelector('input[name="prato"]:checked');
    const sobremesaEscolhida = document.querySelector('input[name="sobremesa"]:checked');

    // Verifica se todas as escolhas foram feitas
    if (!entradaEscolhida || !pratoEscolhido || !sobremesaEscolhida) {
        alert('Por favor, escolha uma entrada, prato principal e sobremesa.');
        return;
    }

    // Cria o menu com os nomes e imagens dos pratos escolhidos
    const menuDiv = document.getElementById('menu');
    menuDiv.innerHTML = `
        <h2>Seu Menu:</h2>
        <div class="prato">
            <p>${entradaEscolhida.value}</p>
            <img src="${pratosImagens[entradaEscolhida.value]}" alt="${entradaEscolhida.value}" />
        </div>
        <div class="prato">
            <p>${pratoEscolhido.value}</p>
            <img src="${pratosImagens[pratoEscolhido.value]}" alt="${pratoEscolhido.value}" />
        </div>
        <div class="prato">
            <p>${sobremesaEscolhida.value}</p>
            <img src="${pratosImagens[sobremesaEscolhida.value]}" alt="${sobremesaEscolhida.value}" />
        </div>
    `;
}