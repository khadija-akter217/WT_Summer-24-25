function checkFormInputs() {
    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var phone = document.getElementById("phone").value;
    var password = document.getElementById("password").value;
    var amount = document.getElementById("amount").value;

    if (name === "" || email === "" || phone === "" || password === "" || amount === "") {
        alert("Please fill out all fields.");
        return false;
    }

    if (phone.length!== 11 || isNaN(phone)){
        alert("Please enter a valid number.");
        return false;
    }
}