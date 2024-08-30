function adicionarLinhaTotalizadora() {
    const tabela = document.getElementById("tabela");
    const linhas = tabela.rows;
    const numLinhas = linhas.length;
    const numColunas = linhas[0].cells.length;

    const novaLinha = tabela.insertRow(numLinhas);
    novaLinha.insertCell(0).innerText = 'Média por Semestre';

    for (let j = 1; j < numColunas; j++) {
        let soma = 0;
        let contador = 0;

        for (let i = 2; i < numLinhas; i++) {
            const valor = parseFloat(linhas[i].cells[j].innerText);
            if (!isNaN(valor)) {
                soma += valor;
                contador++;
            }
        }

        const media = contador === 0 ? '' : (soma / contador).toFixed(2);
        novaLinha.insertCell(j).innerText = media;
    }
}

function adicionarColunaTotalizadora() {
    const tabela = document.getElementById("tabela");
    const linhas = tabela.rows;
    const numLinhas = linhas.length;

    linhas[0].insertCell(-1).outerHTML = '<th rowspan="2">Média do Aluno</th>';
    linhas[1].insertCell(-1);

    for (let i = 2; i < numLinhas; i++) {
        let soma = 0;
        let contador = 0;

        for (let j = 1; j < linhas[i].cells.length - 1; j++) {
            const valor = parseFloat(linhas[i].cells[j].innerText);
            if (!isNaN(valor)) {
                soma += valor;
                contador++;
            }
        }

        const media = contador === 0 ? '' : (soma / contador).toFixed(2);
        linhas[i].insertCell(-1).innerText = media;
    }
}