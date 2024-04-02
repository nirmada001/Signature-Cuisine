//menu bar
const navbar = document.getElementById('navbar');
    const menuIcon = document.getElementById('menu');

    menuIcon.addEventListener('click', () => {
        navbar.classList.toggle('active');
    });



//popup-image

document.querySelectorAll('.card img').forEach(image =>{
    image.onclick = () =>{
        document.querySelector('.gallery').style.display = 'none';
        document.querySelector('.popupimg').style.display = 'block';
        document.querySelector('.popupimg img').src = image.getAttribute('src');
    }
});

document.querySelector('.popupimg span').onclick = () =>{
    document.querySelector('.popupimg').style.display = 'none';
    document.querySelector('.gallery').style.display = 'block';
}
