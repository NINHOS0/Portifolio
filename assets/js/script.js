function openMenu() {
    document.querySelector('.menu-mobile > .background').classList.remove('background-disabled')
    document.querySelector('.menu-mobile ul').classList.remove('list-disabled')
    document.querySelector('.menu-mobile').classList.remove('menu-disabled')
}

function closeMenu() {
    document.querySelector('.menu-mobile > .background').classList.add('background-disabled')
    document.querySelector('.menu-mobile ul').classList.add('list-disabled')
    document.querySelector('.menu-mobile').classList.add('menu-disabled')
}

function toggleMenu() {
    document.querySelector('.menu-mobile > .background').classList.toggle('background-disabled')
    document.querySelector('.menu-mobile ul').classList.toggle('list-disabled')
    document.querySelector('.menu-mobile').classList.toggle('menu-disabled')
}