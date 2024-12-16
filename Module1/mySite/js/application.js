function vault() {
    var randomNumber = Math.floor(Math.random() * 122) + 1;

    document.getElementById('appResult').innerText = "Congratulations! Your Request has been approved! You have been assigned to Vault " + randomNumber + ". Please submit payment to Vault-Tec within 14 days or your application will be cancelled.";
}