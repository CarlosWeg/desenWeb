let num1 = '';
let num2 = '';
let operation = '';
let calculationFinished = false;

function addToDisplay(num) {
    const display = document.getElementById('display');

    if (calculationFinished) {
        clearDisplay();
        calculationFinished = false;
    }

    if (operation) {
        num2 += num;
        display.value = num2;
    } else {
        num1 += num;
        display.value = num1;
    }
}

function setOperation(op) {
    if (num1 !== '') {
        operation = op;
    }
}

function calculate() {
    if (num1 && num2 && operation) {
        let result;

        switch (operation) {
            case 'add':
                result = parseFloat(num1) + parseFloat(num2);
                break;
            case 'subtract':
                result = parseFloat(num1) - parseFloat(num2);
                break;
            case 'multiply':
                result = parseFloat(num1) * parseFloat(num2);
                break;
            case 'divide':
                if (parseFloat(num2) === 0) {
                    alert('Divisão por zero não é permitida!');
                    return;
                }
                result = parseFloat(num1) / parseFloat(num2);
                break;
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

        calculationFinished = true;

        num1 = result.toString();
        num2 = '';
        operation = '';
        document.getElementById('display').value = num1;
    }
}

function clearDisplay() {
    document.getElementById('display').value = '';
    document.getElementById('result').textContent = '';
    num1 = '';
    num2 = '';
    operation = '';
    calculationFinished = false;
}