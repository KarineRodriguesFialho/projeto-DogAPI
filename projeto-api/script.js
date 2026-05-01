async function buscarDados() {
    try {
        const raca = document.getElementById('raca').value;

        const resposta = await fetch('api.php?raca=' + encodeURIComponent(raca));
        const dados = await resposta.json();

        console.log(dados);

        if (dados.sucesso) {
            document.getElementById('imagem1').src = dados.imagens[0];
            document.getElementById('imagem2').src = dados.imagens[1];
            document.getElementById('imagem3').src = dados.imagens[2];

            document.getElementById('status').innerText = 'Status: ' + dados.status;
            document.getElementById('quantidade').innerText = 'Quantidade de imagens: ' + dados.quantidade;
        } else {
            alert(dados.mensagem);
            console.log('URL usada:', dados.url_usada);
        }

    } catch (erro) {
        console.log('Erro na requisição:', erro);
        alert('Erro ao buscar os dados.');
    }
}