import './bootstrap';

import '~resources/scss/app.scss'

import.meta.glob([
    '../img/**'
])

const elimina = document.getElementById("delete");
if(elimina != null){
    elimina.addEventListener("click", function(){
        const bool = confirm("Sei davvero sicuro di voler eliminare questo record?");
        if(bool == true){
            const form = document.getElementById("form");
            form.submit();
        }
    })
}