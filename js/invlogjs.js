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

//pid length
function limitInputLength(input) {
    const maxLength = 10;
    if (input.value.length > maxLength) {
        input.value = input.value.slice(0, maxLength);  // Trims the input value to 10 characters
    }
}


//button next
function toreqForm() {
    // Hide the profile form
    document.getElementById("prof-form").style.display = "none";
    
    // Show the item form
    document.getElementById("item-form").style.display = "block";
}
  
function toiniForm() {
    // Hide the profile form
    document.getElementById("item-form").style.display = "none";
    
    // Show the item form
    document.getElementById("ini-form").style.display = "block";
}

function toprofForm() {
    // Hide the profile form
    document.getElementById("ini-form").style.display = "none";
    
    // Show the item form
    document.getElementById("prof-form").style.display = "block";
}

function toxForm() {
    // Hide the profile form
    document.getElementById("item-form").style.display = "none";
    document.getElementById("ini-form").style.display = "none";
    
    // Show the item form
    document.getElementById("prof-form").style.display = "block";


    //CLEAR INPUTS

    //prof form
    document.getElementById('inpid').value = '';
    document.getElementById('txtplname').value = '';
    document.getElementById('txtpfname').value = '';
    document.getElementById('txtpmname').value = '';
    document.getElementById('sel-des').value = '';

    //item form
    document.getElementById('inpid').value = '';
    document.getElementById('txtiname').value = '';
    document.getElementById('quantval').value = '';
    document.getElementById('sel-act').value = '';
    document.getElementById('dets-text').value = '';

    //ini form
    document.getElementById('iniid').value = '';
    document.getElementById('txtilname').value = '';
    document.getElementById('txtifname').value = '';
    document.getElementById('txtimname').value = '';
    document.getElementById('ides-sel').value = '';
}