// expand menu
const showMenu = (toggleId, navbarId, bodyId, headerId)=>{
    const toggle = document.getElementById(toggleId),
    navbar = document.getElementById(navbarId)
    boddypadding = document.getElementById(bodyId)
    headerpadding = document.getElementById(headerId)

    if(toggle && navbar){
        toggle.addEventListener('click', ()=>{
            navbar.classList.toggle('expander')
            boddypadding.classList.toggle('body-pd')
            headerpadding.classList.toggle('nav_expand')
        })
    }
}

showMenu('nav-toggle', 'navbar', 'body-pd', 'nav_expand')
