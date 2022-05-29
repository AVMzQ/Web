var Alumno=
{
    Ncontrol:288377,
    Nombre: "Angel Francisco",
    Ap:"Vazquez",
    Am:"Munoz",    
    Carrera:"Sistemas computacionales"
}

var Ncontrol=document.getElementById('Ncontrol');
var Nombre=document.getElementById('Nombre');
var Ap=document.getElementById('Ap');
var Am=document.getElementById('Am');
var Carrera=document.getElementById('Carrera');

Ncontrol.textContent=Alumno.Ncontrol;
Nombre.textContent=Alumno.Nombre;
Ap.textContent=Alumno.Ap;
Am.textContent=Alumno.Am;
Carrera.textContent=Alumno.Carrera;