var Ciudades=
[
    {
        Nombre:'Lerdo',
        Estado:'Durango',
        No_Habitante:40923,
        Clima:'Desertico',
        EsCapital:function()
        {return 'no';}
    },
    {
        Nombre:'Gomez Palacio',
        Estado:'Durango',
        No_Habitante:403233,
        Clima:'Desertico',
        EsCapital:function()
        {return 'no';}
    },
    {
        Nombre:'Durango',
        Estado:'Durango',
        No_Habitante:12342,
        Clima:'Desertico',
        EsCapital:function()
        {return 'si';}
    }

];

var tabla=document.getElementById('TablaCiudades');
for(var i=0;i<Ciudades.length;i++)
{
    var renglon=tabla.insertRow(1);
    var ColNombre=renglon.insertCell(0);
    ColNombre.textContent=Ciudades[i].Nombre;

    var ColEstado=renglon.insertCell(1)
    ColEstado.textContent=Ciudades[i].Estado;
    
    var ColNo_Habitantes=renglon.insertCell(2)
    ColNo_Habitantes.textContent=Ciudades[i].No_Habitante;

    var ColClima=renglon.insertCell(3);
    ColClima.textContent=Ciudades[i].Clima;

    var ColCapilat=renglon.insertCell(4);
    ColCapilat.textContent=Ciudades[i].EsCapital();
}