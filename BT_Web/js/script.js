// Menu Sidebar Category
const itemsidebar = document.querySelectorAll(".category-left-li")
itemsidebar.forEach(function(menu,index){
    menu.addEventListener("click",function(){
        menu.classList.toggle("block")
    })
})