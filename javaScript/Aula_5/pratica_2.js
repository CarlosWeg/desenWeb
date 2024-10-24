// Adicionar uma linha
function adicionarLinhaTotalizadora() {
    const tabela = document.getElementById('tabelaNotas');
    const numRows = tabela.rows.length;
    const numCols = tabela.rows[2].cells.length;
    
    let novaLinha = tabela.insertRow(numRows);

    // Primeira célula
    let cell = novaLinha.insertCell(0);
    cell.innerHTML = 'Média';
    cell.style.fontWeight = 'bold';

    for (let i = 1; i < numCols; i++) {
        let soma = 0;
        let count = 0;
        for (let j = 2; j < numRows; j++) {
            let valor = parseFloat(tabela.rows[j].cells[i].innerHTML);
            if (!isNaN(valor)) {
                soma += valor;
                count++;
            }
        }
        let media = (count > 0) ? (soma / count).toFixed(2) : '';
        cell = novaLinha.insertCell(i);
        cell.innerHTML = media;
        cell.style.fontWeight = 'bold';
    }
}

// Aadicionar uma coluna
function adicionarColunaTotalizadora() {
    const tabela = document.getElementById('tabelaNotas');
    const numRows = tabela.rows.length;

    // Adicionar cabeçalho
    let headerRow = tabela.rows[0];
    let subHeaderRow = tabela.rows[1];
    let headerCell = document.createElement('th');
    headerCell.rowSpan = 2;
    headerCell.innerHTML = 'Média';
    headerCell.style.fontWeight = 'bold';
    headerCell.style.textAlign = 'center';
    headerRow.appendChild(headerCell);

    // Adicionar células
    for (let i = 2; i < numRows; i++) {
        let row = tabela.rows[i];
        let soma = 0;
        let count = 0;
        for (let j = 1; j < row.cells.length; j++) {
            let valor = parseFloat(row.cells[j].innerHTML);
            if (!isNaN(valor)) {
                soma += valor;
                count++;
            }
        }
        let media = (count > 0) ? (soma / count).toFixed(2) : '';
        let novaCelula = row.insertCell(row.cells.length);
        novaCelula.innerHTML = media;
        novaCelula.style.fontWeight = 'bold';
    }
}
