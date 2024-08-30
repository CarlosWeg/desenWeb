function calculate() {
    
    const num1 = parseFloat(document.getElementById('num1').value);
    const num2 = parseFloat(document.getElementById('num2').value);
    const operation = document.getElementById('operation').value;
    let result;

    if (operation === 'add') {
        result = num1 + num2;
    } else if (operation === 'subtract') {
        result = num1 - num2;
    } else if (operation === 'multiply') {
        result = num1 * num2;
    } else if (operation === 'divide') {
        result = num1 / num2;
    }
    
    const resultElement = document.getElementById('result');
    resultElement.textContent = 'Resultado: ' + result;

    if (result < 0) {
        resultElement.style.backgroundColor = 'red';
        resultElement.style.color = 'white';
    } else if (result > 0) {
        resultElement.style.backgroundColor = 'green';
        resultElement.style.color = 'white';
    } else {
        resultElement.style.backgroundColor = 'gray';
        resultElement.style.color = 'white';
    }
}