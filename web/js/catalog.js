const iconUpArrow1 = document.querySelector(".iconUpArrow1");
const iconUpArrow4 = document.querySelector(".iconUpArrow4");

const iconDownArrow1 = document.querySelector(".iconDownArrow1");
const iconDownArrow4 = document.querySelector(".iconDownArrow4");

const catalogPilter1Price = document.querySelector(".catalog-filter1-price");
const catalogFilter4ВОДОЗАЩИТА = document.querySelector(".catalog-filter4-ВОДОЗАЩИТА");
const catalogPilter6Price = document.querySelector(".catalog-filter6-price");
const catalogPilter7Price = document.querySelector(".catalog-filter7-price");
const catalogPilter8VR = document.querySelector(".catalog-filter8-VR");
const customSelectWrapper1 = document.querySelector(".custom-select-wrapper1");
const catalogFilter12 = document.querySelector(".catalog-filter12");
const catalogFilter13 = document.querySelector(".catalog-filter13");
const catalogFilter14 = document.querySelector(".catalog-filter14");
const customSelectWrapper2 = document.querySelector(".custom-select-wrapper2");
const customSelectWrapper3 = document.querySelector(".custom-select-wrapper3");
const customSelectWrapper4 = document.querySelector(".custom-select-wrapper4");


iconDownArrow1.addEventListener("click", e => {
  iconDownArrow1.style.display = "none"
  iconUpArrow1.style.display = "block"
  catalogPilter1Price.style.display = "block"
});
iconUpArrow1.addEventListener("click", e => {
  iconDownArrow1.style.display = "block";
  iconUpArrow1.style.display = "none";
  catalogPilter1Price.style.display = "none";
});

iconDownArrow4.addEventListener("click", e => {
  iconDownArrow4.style.display = "none"
  iconUpArrow4.style.display = "block"
  catalogFilter4ВОДОЗАЩИТА.style.display = "block";
});
iconUpArrow4.addEventListener("click", e => {
  iconDownArrow4.style.display = "block";
  iconUpArrow4.style.display = "none";
  catalogFilter4ВОДОЗАЩИТА.style.display = "none";
});


















