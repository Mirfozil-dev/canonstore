function searchItem() {

  // let filter = document.getElementById('search-input').value.toUpperCase();
  // let tableRecord = document.getElementById('tableRecord');
  // let tr = tableRecord.getElementsByTagName('tr');

//   for(var i = 0; i < tr.length; i++) {
//   let td = tr[i].getElementsByTagName('td')[0]

//   if(td) {
//     let textvalue = td.textContent || td.innerHTML;
//     if(textvalue.toUpperCase().indexOf(filter) > -1) {
//       tr[i].style.display = "";
//     } else {
//       tr[i].style.display = "none";
//     }
//   }
// }


// var filter = document.getElementById('search-input').value.toUpperCase();
//   var tableRecord = document.getElementById('tableRecord');
//   var div = tableRecord.getElementsByTagName('div');
//   var imgCarusel = document.getElementsByClassName("img_carusel");
//
//   for(var i = 0; i < 2; i++) {
//     var td = div[i].getElementsByClassName('offer_name').innerHTML;
//
//     if(td) {
//       var textvalue = td.textContent || td.innerHTML;
//
//       if(textvalue.toUpperCase().indexOf(filter) > -1) {
//         imgCarusel.style.display = "";
//       } else {
//         imgCarusel.style.display = "none";
//       }
//     }
//   }

  let searchInput = document.querySelector('#search-input');
  let table = document.querySelector('#tableRecord');
  table.innerHTML = ''
  $.ajax({
    type: 'GET',
    url: '/en/site/search-product',
    contentType: "application/json",
    data: {
      query: searchInput.value,
    },
    success: (res) => {
      console.log(res)
      JSON.parse(res).map(product => {
        let skidka = ''
        let instock = ''
        let price = ''
        if (product.discount_price) {
          skidka = `<div class="skitka">
                            <div class="skitka_item">В скидке</div>
                        </div>`
          price = `<div class="offer_cost">` + product.discount_price + `</div>`
        } else {
          price = `<div class="offer_cost">` + product.price + `</div>`
        }
        if (product.instock === 1) {
          instock = `<div class="offer_status">В наличии</div>`
        }
        table.innerHTML += `<a href="/site/product?id=` + product.id + `">
                       <div class="img_carusel" style="max-width: 300px">
                        <img style="width: 100%; object-fit: cover" src="../` + product.img + `" alt="">
                        ` + skidka + `
                        <div class="offer_name">` + product.title + `</div>
                        ` + instock + price + `
                        <a href="/site/product" class="offer_to_cart">В корзину</a>
                       </div>
                      </a>`
      })
    },
    error: (res) => {
      console.log('error', res)
    }
  })




}



var searchWrapper = document.querySelector(".search-wrapper");
var searchOn = document.querySelector(".nav_items_search");

searchOn.addEventListener("click", ()=>{
    searchWrapper.style.right = "0px";
})



var searchOn1 = document.querySelector(".nav_items_search1");

searchOn1.addEventListener("click", ()=>{
    searchWrapper.style.right = "0px";
})

var searchOff = document.querySelector(".search-close-icon").addEventListener("click", ()=>{
  searchWrapper.style.right = "-100%";
  document.querySelector('#search-input').value = '';
  document.querySelector('#tableRecord'). innerHTML = '';
})