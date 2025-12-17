function pressNumber(num) {
    document.getElementById("display").value += num;
}

function pressOperator(op) {
    document.getElementById("display").value += op;
}

// Calculate using individual operation files
function calculate() {
    try {
        let expr = document.getElementById("display").value;
        let result = 0;

        if (expr.includes('+')) {
            let parts = expr.split('+');
            result = add(Number(parts[0]), Number(parts[1]));
        } else if (expr.includes('-')) {
            let parts = expr.split('-');
            result = subtract(Number(parts[0]), Number(parts[1]));
        } else if (expr.includes('*')) {
            let parts = expr.split('*');
            result = multiply(Number(parts[0]), Number(parts[1]));
        } else if (expr.includes('/')) {
            let parts = expr.split('/');
            result = divide(Number(parts[0]), Number(parts[1]));
        }

        document.getElementById("display").value = result;
    } catch {
        document.getElementById("display").value = "Error";
    }
}
