//loginpopup
document.querySelector('.btnlog').onclick = () =>{
    document.querySelector('.loginpopup').style.display = 'block';
    
}

document.querySelector('.closeicon').onclick = () =>{
    document.querySelector('.loginpopup').style.display = 'none';
}

//registerpopup
document.querySelector('.btnreg').onclick = () =>{
    document.querySelector('.registerpopup').style.display = 'block';
    document.querySelector('.loginpopup').style.display = 'none';
}

document.querySelector('.closeicon2').onclick = () =>{
    document.querySelector('.registerpopup').style.display = 'none';
}

