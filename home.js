function openNav() {
    document.getElementById("mySidenav").style.width = "230px";
    document.getElementById("main").style.marginRight= "230px";
}
function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginRight = "0";
}



let subMenu = document.getElementById("subMenu");
function toggleMenu(){
    subMenu.classList.toggle("open-menu") ;
}

 const mobileView = document.querySelector('.mobile-view');
 const inputTop = document.querySelector('.input-top');
 const searchBtnTop = document.querySelector('.search-btn-top');
 const exitMenu = document.querySelector('.exit-menu');


 mobileView. onclick = () =>{
   searchBtnTop.classList.add('active')
inputTop.classList.add('active')
exitMenu.classList.add('active')
mobileView.classList.add('active')

 }

 
exitMenu. onclick = () =>{
    searchBtnTop.classList.remove('active')
 inputTop.classList.remove('active')
 mobileView.classList.add('open')
 exitMenu.classList.remove('active')

 }
 


 