  // menu principal
  
let header = document.getElementById('header')

let slogan = document.getElementById('slogan')
let btn = document.getElementById('btn')
let viento = document.getElementById('viento')
let persona = document.getElementById('persona')


window.addEventListener('scroll', function(){
    let value = window.scrollY;
    
    btn.style.marginTop = value * 0.7 + 'px';
    slogan.style.marginBottom =   value* -1  + 'px';
    viento.style.left = value* -5  + 'px';
    header.style.marginTop = value * 0.4 + 'px';
    persona.style.marginLeft = value* 4  + 'px';

})

const navigation = document.querySelector('nav')
document.querySelector('.menu').onclick = function (){
    this.classList.toggle('active');
    navigation.classList.toggle('active');
}








// calcular edad

const fechaNacimiento = document.getElementById("fechaNacimiento");
const edad = document.getElementById("edad");

const calcularEdad = (fechaNacimiento) => {
    const fechaActual = new Date();
    const diaActual = parseInt(fechaActual.getDate());
    const mesActual = parseInt(fechaActual.getMonth()) + 1;
    const anoActual = parseInt(fechaActual.getFullYear());
    
    

    // 2016-07-11
    const diaNacimiento = parseInt(String(fechaNacimiento).substring(8, 10));
    const mesNacimiento = parseInt(String(fechaNacimiento).substring(5, 7));
    const anoNacimiento = parseInt(String(fechaNacimiento).substring(0, 4));
  
    

    let edad = anoActual - anoNacimiento;
    if (mesActual < mesNacimiento) {
        edad--;
    } else if (mesActual === mesNacimiento) {
        if (diaActual < diaNacimiento) {
            edad--;
        }
    }
    return edad;
};

window.addEventListener('load', function () {

    fechaNacimiento.addEventListener('change', function () {
        if (this.value) {
            edad.innerText = `La edad es: ${calcularEdad(this.value)} años`;
        }
    });

});