function percentage() {
    let display = document.getElementById("display");
    let expr = display.value;

    // If the last character is a number, convert the last number to percentage
    let match = expr.match(/(\d+\.?\d*)$/);
    if (match) {
        let number = match[0];
        let percentValue = Number(number) / 100;
        // Replace last number with its percentage value
        display.value = expr.slice(0, -number.length) + percentValue;
    }
}
