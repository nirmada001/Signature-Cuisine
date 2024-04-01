document.querySelector('.inqbtn').onclick = () =>{
    document.querySelector('.inquirepopup').style.display = 'block';
    document.querySelector('.event-image').style.display = 'none';
}

document.querySelector('.popupclose').onclick = () =>{
    document.querySelector('.inquirepopup').style.display = 'none';
    document.querySelector('.event-image').style.display = 'block';
}