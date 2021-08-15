


let catalogBtnActive = document.querySelector('#click_cotalog');
let listNavShow = document.querySelector('#click_cotalog_row');

catalogBtnActive.addEventListener('click',()=>{
    if(listNavShow.style.display == "none"){
        listNavShow.style.display = "flex"
    }else{
        listNavShow.style.display = "none"
    }
});

let infoBtnActive = document.querySelector('#click_info');
let listNavShow1 = document.querySelector('#click_info_row');

infoBtnActive.addEventListener('click',()=>{
    if(listNavShow1.style.display == "none"){
        listNavShow1.style.display = "block"
    }else{
        listNavShow1.style.display = "none"
    }
})