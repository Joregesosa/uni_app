// toggle menu
const toggleMenu = document.querySelector('#toggleMenu');
const menu = document.querySelector('#menu');
const arrow = document.querySelector('#arrow');

toggleMenu.addEventListener('click', (e) => {
    e.stopPropagation();
    menu.classList.toggle('hidden');
    arrow.classList.toggle('rotate-180');

})



$(document).ready(function() {
    $('#example').DataTable({ "dom": 'frtip' });
})