const filterButtons = document.querySelectorAll(".filter-button");

filterButtons.forEach(item => {
  item.addEventListener("click", e => {
    if (item.childNodes[3].classList.contains('filter-active')) {
      item.childNodes[3].classList.remove('filter-active');
      item.nextElementSibling.style.visibility = "hidden"
      item.nextElementSibling.style.height = "0px"
    } else {
      item.nextElementSibling.style.visibility = "visible"
      item.childNodes[3].classList.add('filter-active');
      item.nextElementSibling.style.height = "auto"
    }
  });
})

















