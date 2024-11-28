let list = document.querySelectorAll(".navigation li");

function activelink() {
    list.forEach((item) => {
        item.classList.remove("hovered");
    });
    this.classList.add("hovered");
}

list.forEach((item) => item.addEventListener("mouseover", activelink));


//menu toggle
let toggle = document.querySelector(".toggle");
let navigation = document.querySelector(".navigation");
let main = document.querySelector(".main");

toggle.onclick = function () {
    navigation.classList.toggle("active");
    main.classList.toggle("active");
};



//change status
let quantity = document.getElementById("txtitmq");
let stats = document.getElementById("txtitmstat");

quantity.oninput = function() {
    // Convert quantity.value to an integer and compare
    if (quantity.value === "" || parseInt(quantity.value) <= 0) {
        stats.value = "Not Available";
    } else {
        stats.value = "Available";
    }
}