// responsive nav
const navbtn = document.getElementById('nav_btn');
const close_btn = document.getElementById('close_btn');
const sidebar_container = document.querySelector('.sidebar_container');


navbtn.addEventListener('click', () => {
    sidebar_container.style.display = ('block')
})
close_btn.addEventListener('click', () => {
    sidebar_container.style.display = ('none')
})



// payment radio button
const payment_radio_btn = document.querySelectorAll('.payment_radio_btn');
Array.from(payment_radio_btn).forEach(element => {
    console.log(element)
    element.addEventListener('click', () => {
        window.alert('hello')
    })

});

