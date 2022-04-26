var elementHTML = [
                    {titulo:"Titulo",elementoHTML:"<h1>EJEMPLO</h1>"},
                    {titulo:"Subtitulo",elementoHTML:"<h3>EJEMPLO</h3>"},
                    {titulo:"imagen",elementoHTML:"<img src=''>"},
];
var optionDIVSELECTED = 0;// 0 -> no hay optionDiv 1-> hay optionDiv

var optionDiv = "<div id='optionDiv'>";
    optionDiv += "<div id='form1' onclick='SelectorCapas(1)'></div>";
    optionDiv += "<div id='form2' onclick='SelectorCapas(2)'><div></div></div>";
    optionDiv += "<div id='form3' onclick='SelectorCapas(3)'><div></div></div>";
    optionDiv += "<div id='form4' onclick='SelectorCapas(4)'><div></div></div>";
    optionDiv += "</div>";
var contadorDeElementos = 0;
let capas = () => {
    if(!optionDIVSELECTED){
        let codeHTML = document.getElementById("design");
        codeHTML.innerHTML += optionDiv;
        optionDIVSELECTED = 1;
    }
};
let SelectorCapas = (form) => {
    if (contadorDeElementos<=8) {    
        let preview = document.getElementById("design");
        let codeHTML = document.getElementById("codeHTML");
        let codeCSS = document.getElementById("codeCSS");
        switch (form){
            case 1:
                let cadena = "<div id='Seleccionado' style='margin-bottom:0.5em;'>Inserta aqui</div>";
                preview.innerHTML = cadena +preview.innerHTML;
                codeHTML.innerHTML = "<div id='Seleccionado'></div>";
                codeCSS.innerHTML = "";
            break;
        }
        contadorDeElementos++;
    }
};

let cadena = (title) => {
    const HTML = elementHTML.filter(element => {
        if (element.titulo === title) return element
    });
    let codeHTML = document.getElementById("codeHTML");
    let capaSeleccionada = document.getElementById("Seleccionado");
    capaSeleccionada.innerHTML = HTML[0].elementoHTML;
    console.log(capaSeleccionada);
    codeHTML.innerHTML = capaSeleccionada.toString();
};


let borrar = () => {
    let codeHTML = document.getElementById("codeHTML");
    codeHTML.innerHTML = "";
    let codeCSS = document.getElementById("codeCSS");
    codeCSS.innerHTML = "";
};





function cambiarPestanna(pestannas,pestanna) {
    
    // Obtiene los elementos con los identificadores pasados.
    pestanna = document.getElementById(pestanna.id);
    listaPestannas = document.getElementById(pestannas.id);
    
    // Obtiene las divisiones que tienen el contenido de las pestañas.
    cpestanna = document.getElementById('c'+pestanna.id);
    listacPestannas = document.getElementById('contenido'+pestannas.id);
    
    i=0;
    // Recorre la lista ocultando todas las pestañas y restaurando el
    // padding de las pestañas.
  while (typeof listacPestannas.getElementsByTagName('div')[i] != 'undefined'){
    $(document).ready(function(){
            $(listacPestannas.getElementsByTagName('div')[i]).css('display','none');
            $(listaPestannas.getElementsByTagName('li')[i]).css('padding-bottom','');
        });
        i += 1;
    }

    $(document).ready(function(){
        // Muestra el contenido de la pestaña pasada como parametro a la funcion,
        // cambia el color de la pestaña y aumenta el padding para que tape el  
        // borde superior del contenido que esta juesto debajo y se vea de este 
        // modo que esta seleccionada.
        $(cpestanna).css('display','');
        $(pestanna).css('padding-bottom','2px'); 
    });

}