//............SIDEBAR..........
const menuItem = document.querySelectorAll('.menu-item');


// remove active classlist.....
const removeActive = ()=>{
    menuItem.forEach(item => {
        item.classList.remove('active')        
    });
 }

// add active classlist.....
menuItem.forEach(item => {
    item.addEventListener('click',()=>{
        removeActive();
        item.classList.add('active');

        if(item.id != 'notifice'){
            document.querySelector('.notification').style.display ='none'
        }else{
            document.querySelector('.notification').style.display ='block' 
            document.querySelector('#notifice .count').style.display='none'
        }
    })
})


addBtn.forEach(element => {
    element.addEventListener('click',()=>{
        element.parentElement.style.display='none' 
    })    
});

delbtn.forEach(element => {
    element.addEventListener('click',()=>{
        element.parentElement.parentElement.style.display='none'
    })
});

// WINDOW EVENT.....
window.addEventListener('scroll',()=>{
    themBOx.style.display= 'none'
    document.querySelector('.notification').style.display ='none'
})


const chk = document.getElementById('#chk')
    chk.addEventListener('change', (e) => {
        if (e.target.checked) {
        document.body.setAttribute("data-bs-theme", "dark");
    } else {
        document.body.setAttribute("data-bs-theme", "light");
    }
})
