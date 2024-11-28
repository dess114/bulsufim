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



//carousel
const wrapper = document.querySelector(".slidewrap");
const carousel = document.querySelector(".carousel");
const arrowBtns = document.querySelectorAll(".slidewrap i");
const firstCardWidth = carousel.querySelector(".cards").offsetWidth;
const carouselChildrens =[...carousel.children];

let isDragging = false, startX, startScrollLeft, timeoutId;

//number of cards that fit at once
let cardPerView = Math.round(carousel.offsetWidth / firstCardWidth);

//insert copies of last card in the beggining
carouselChildrens.slice(-cardPerView).reverse().forEach(cards => {
  carousel.insertAdjacentHTML("afterbegin", cards.outerHTML);
});

//insert copies of first cards in the end
carouselChildrens.slice(0, cardPerView).forEach(cards => {
  carousel.insertAdjacentHTML("beforeend", cards.outerHTML);
});

arrowBtns.forEach(btn => {
  btn.addEventListener("click", () => {
    carousel.scrollLeft += "btn.id" === "left" ? -firstCardWidth : firstCardWidth;
  });
});

const dragStart = (e) => {
  isDragging = true;
  carousel.classList.add("dragging");
    startX = e.pageX;
    startScrollLeft = carousel.scrollLeft;
}

const dragging = (e) => {
  if(!isDragging) return;
  carousel.scrollLeft = startScrollLeft - (e.pageX - startX);
}

const dragStop = () => {
  isDragging = false;
  carousel.classList.remove("dragging");
}

const autoPlay = () => {
  if(window.innerWidth < 800) return;
  timeoutId = setTimeout(() => carousel.scrollLeft += firstCardWidth, 2500);
}

autoPlay();

const infiniteScroll = () => {
  if(carousel.scrollLeft === 0) {
    carousel.classList.add("no-transition");
    carousel.scrollLeft = carousel.scrollWidth - (2 * carousel.offsetWidth);
    carousel.classList.remove("no-transition");
  } 
  else if(Math.ceil(carousel.scrollLeft) === carousel.scrollWidth - carousel.offsetWidth) {
    carousel.classList.add("no-transition");
    carousel.scrollWidth = carousel.offsetWidth;
    carousel.classList.remove("no-transition");
  }

  clearTimeout(timeoutId);
  if(!wrapper.matches(":hover")) autoPlay();
}

carousel.addEventListener("mousedown", dragStart);
carousel.addEventListener("mousemove", dragging);
document.addEventListener("mouseup", dragStop);
carousel.addEventListener("scroll", infiniteScroll);
wrapper.addEventListener("mouseenter", () => clearTimeout(timeoutId));
wrapper.addEventListener("mouseleave", autoPlay);

