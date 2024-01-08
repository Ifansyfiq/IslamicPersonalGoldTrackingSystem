window.onload = function () {
    // This code will run when the page is fully loaded
    initializePage(); // Call your initialization function here if needed
};

function initializePage() {
    // Set the default year to 2023
    document.getElementById("yearW").value = "2023";
    document.getElementById("yearK").value = "2023";

    // Call the goldValueWear function to update the gold price based on the default year
    goldValueWear();
    urufValueWear();
    urufValueKeep();
    calcValueZakatWear();
    calcValueZakatKeep();
}

// for wear gold
function goldValueWear() {
    var x = document.getElementById("yearW").value;
    if (x == "2023") {
        document.getElementById("goldpriceW").value = "254.42";
    } else if (x == "2022") {
        document.getElementById("goldpriceW").value = "239.55";
    } else if (x == "2021") {
        document.getElementById("goldpriceW").value = "238.81";
    } else if (x == "2020") {
        document.getElementById("goldpriceW").value = "164.33";
    } else
        document.getElementById("goldpriceW").value = "0";
}

// for wear gold
function urufValueWear() {
    var x = document.getElementById("locationW").value;
    if (x == "Johor") {
        document.getElementById("urufW").value = "850";
    } else if (x == "Kedah") {
        document.getElementById("urufW").value = "170";
    } else if (x == "Kelantan") {
        document.getElementById("urufW").value = "0";
    } else if (x == "Melaka") {
        document.getElementById("urufW").value = "180";
    } else if (x == "Kuala Lumpur") {
        document.getElementById("urufW").value = "200";
    } else if (x == "Putrajaya") {
        document.getElementById("urufW").value = "200";
    } else if (x == "Negeri Sembilan") {
        document.getElementById("urufW").value = "170";
    } else if (x == "Pahang") {
        document.getElementById("urufW").value = "500";
    } else if (x == "Perak") {
        document.getElementById("urufW").value = "500";
    } else if (x == "Perlis") {
        document.getElementById("urufW").value = "85";
    } else if (x == "Pulau Pinang") {
        document.getElementById("urufW").value = "165";
    } else if (x == "Sabah") {
        document.getElementById("urufW").value = "152";
    } else if (x == "Sarawak") {
        document.getElementById("urufW").value = "90";
    } else if (x == "Selangor") {
        document.getElementById("urufW").value = "800";
    } else if (x == "Terengganu") {
        document.getElementById("urufW").value = "850";
    } else
        document.getElementById("urufW").value = "0";
}

// for wear gold
function calcValueZakatWear() {
    var weight = parseFloat(document.getElementById("weightW").value);
    var uruf = parseFloat(document.getElementById("urufW").value);
    var goldPrice = parseFloat(document.getElementById("goldpriceW").value);

    if (weight >= uruf) {
        // Set the flag to false to indicate that the alert has not been displayed
        alertDisplayed = false;

        // calculate gold value
        var goldValue = (weight - uruf) * goldPrice;
        document.getElementById("valueW").value = goldValue.toFixed(2);

        // calculate zakat price
        var zakatPrice = goldValue * 0.025;
        document.getElementById("totalZakatW").value = zakatPrice.toFixed(2);
    } else if (weight < uruf) {
        if (!alertDisplayed) { // Check if the alert has been displayed
            document.getElementById("valueW").value = "0";
            document.getElementById("totalZakatW").value = "0";
            alert("Not subject to zakat because the weight of gold is less than the value of the letter.");
            alertDisplayed = true; // Set the flag to true to indicate that the alert has been displayed
        }
    } else {
        document.getElementById("valueW").value = "0";
        document.getElementById("totalZakatW").value = "0";
    }

}

// for keep gold
function urufValueKeep() {
    var x = document.getElementById("yearK").value;
    if (x == "2023") {
        document.getElementById("urufK").value = "85";
        document.getElementById("goldpriceK").value = "254.42";
    } else if (x == "2022") {
        document.getElementById("urufK").value = "85";
        document.getElementById("goldpriceK").value = "239.55";
    } else if (x == "2021") {
        document.getElementById("urufK").value = "85";
        document.getElementById("goldpriceK").value = "238.81";
    } else if (x == "2020") {
        document.getElementById("urufK").value = "85";
        document.getElementById("goldpriceK").value = "164.33";
    } else
        document.getElementById("urufK").value = "0";
}

// for keep gold
function calcValueZakatKeep() {
    var weight = parseFloat(document.getElementById("weightK").value);
    var uruf = parseFloat(document.getElementById("urufK").value);
    var goldPrice = parseFloat(document.getElementById("goldpriceK").value);

    if (weight >= uruf) {
        // Set the flag to false to indicate that the alert has not been displayed
        alertDisplayed = false;

        // calculate gold value
        var goldValue = weight * goldPrice;
        document.getElementById("valueK").value = goldValue.toFixed(2);

        // calculate zakat price
        var zakatPrice = goldValue * 0.025;
        document.getElementById("totalZakatK").value = zakatPrice.toFixed(2);
    } else if (weight < uruf) {
        if (!alertDisplayed) { // Check if the alert has been displayed
            document.getElementById("valueK").value = "0";
            document.getElementById("totalZakatK").value = "0";
            alert("Not subject to zakat because the weight of gold is less than the value of the letter.");
            alertDisplayed = true; // Set the flag to true to indicate that the alert has been displayed
        }
    } else {
        document.getElementById("valueK").value = "0";
        document.getElementById("totalZakatK").value = "0";
    }
}

// for reset button
function refreshPage() {
    location.reload();
}
