function calculateCost() {
    var quantityX = parseInt(document.getElementById('quantityX').value);
    var quantityY = parseInt(document.getElementById('quantityY').value);
    var quantityZ = parseInt(document.getElementById('quantityZ').value);

    var costX = 549549.99;
    var costY = 300524.99;
    var costZ = 149000.99;

    var totalCost = quantityX * costX + quantityY * costY + quantityZ * costZ;

    document.getElementById('result').innerText = "Total Estimated Cost: $" + totalCost.toFixed(2);
}