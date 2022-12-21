/* Nelle risposte del codice PHP, formattare il JSON come segue se si necessita della comparsa di un pop-up
    const res = '{"popUpName":"", "title":"Titolo che deve comparire nel popup dimensione h2", "caption":"Descrizione che contiene il messaggio d'errore, il messaggio di successo o un avviso"}';
*/

window.onload = function() {
    //aggiunta css per la corretta visualizzazione dei popup
    document.getElementsByTagName("head").innerHTML += '<link type="text/css" href="/html&amp;css/vendor/sweetalert2/dist/sweetalert2.min.css" rel="stylesheet">';
    
    //aggiunta popup invisibili nel body
    //popup di conferma
    document.getElementById("main").innerHTML += '<div id="popConfirm" style="display: none;"><div class="swal2-container swal2-center swal2-backdrop-show" style="overflow-y: auto;"><div aria-labelledby="swal2-title" aria-describedby="swal2-html-container" class="swal2-popup swal2-modal swal2-icon-question swal2-show" tabindex="-1" role="dialog" aria-live="assertive" aria-modal="true" style="display: grid;"><button type="button" class="swal2-close" aria-label="Close this dialog" style="display: none;">×</button><ul class="swal2-progress-steps" style="display: none;"></ul><div class="swal2-icon swal2-question swal2-icon-show" style="display: flex;"><div class="swal2-icon-content">?</div></div><img class="swal2-image" style="display: none;">' +
    /*titolo*/ '<h2 class="swal2-title" id="popConfirmTitle" style="display: block;">The Internet?</h2>' +
    /*didascalia*/ '<div id="popConfirmCaption" class="swal2-html-container" style="display: block;">That thing is still around?</div>' +
    '<input class="swal2-input" style="display: none;"><input type="file" class="swal2-file" style="display: none;"><div class="swal2-range" style="display: none;"><input type="range"><output></output></div><select class="swal2-select" style="display: none;"></select><div class="swal2-radio" style="display: none;"></div><label for="swal2-checkbox" class="swal2-checkbox" style="display: none;"><input type="checkbox"><span class="swal2-label"></span></label><textarea class="swal2-textarea" style="display: none;"></textarea><div class="swal2-validation-message" id="swal2-validation-message" style="display: none;"></div><div class="swal2-actions"><div class="swal2-loader"></div>' +
    /*bottone ok*/ ' <button type="button" class="btn btn-outline-success" aria-label="" style="display: inline-block;" id="confirmOk">OK</button><p>&nbsp; &nbsp;&nbsp;</p>' +
    /*bottone annulla*/ ' <button type="button" class="btn btn-outline-danger" aria-label="" style="display: inline-block;" id="confirmAnnulla" onclick=popup("popConfirm")>Annulla</button></div><div class="swal2-footer" style="display: none;"></div><div class="swal2-timer-progress-bar-container"><div class="swal2-timer-progress-bar" style="display: none;"></div></div></div></div></div>';

    //popup warning
    document.getElementById("main").innerHTML += '<div id="popWarning" style="display: none;"><div class="swal2-container swal2-center swal2-backdrop-show" style="overflow-y: auto;"><div aria-labelledby="swal2-title" aria-describedby="swal2-html-container" class="swal2-popup swal2-modal swal2-icon-warning swal2-show" tabindex="-1" role="dialog" aria-live="assertive" aria-modal="true" style="display: grid;"><button type="button" class="swal2-close" aria-label="Close this dialog" style="display: none;">×</button><ul class="swal2-progress-steps" style="display: none;"></ul><div class="swal2-icon swal2-warning swal2-icon-show" style="display: flex;"><div class="swal2-icon-content">!</div></div><img class="swal2-image" style="display: none;">' + 
    /*titolo*/ '<h2 class="swal2-title" id="popWarningTitle" style="display: block;">Warning alert</h2>' +
    /*didascalia*/ '<div id="popWarningCaption" class="swal2-html-container" style="display: block;">You clicked the button!</div><input class="swal2-input" style="display: none;"><input type="file" class="swal2-file" style="display: none;"><div class="swal2-range" style="display: none;"><input type="range"><output></output></div><select class="swal2-select" style="display: none;"></select><div class="swal2-radio" style="display: none;"></div><label for="swal2-checkbox" class="swal2-checkbox" style="display: none;"><input type="checkbox"><span class="swal2-label"></span></label><textarea class="swal2-textarea" style="display: none;"></textarea><div class="swal2-validation-message" id="swal2-validation-message" style="display: none;"></div><div class="swal2-actions"><div class="swal2-loader"></div>' +
    /*bottone ok*/ '<button type="button" class="swal2-confirm btn btn-primary" aria-label="" style="display: inline-block;" id="warningOk" onclick=popup("popWarning")>OK</button>' +
    '</div><div class="swal2-footer" style="display: none;"></div><div class="swal2-timer-progress-bar-container"><div class="swal2-timer-progress-bar" style="display: none;"></div></div></div></div></div>';

    //popup success
    document.getElementById("main").innerHTML += '<div id="popSuccess" style="display: none;"><div class="swal2-container swal2-center swal2-backdrop-show" style="overflow-y: auto;"><div aria-labelledby="swal2-title" aria-describedby="swal2-html-container" class="swal2-popup swal2-modal swal2-icon-success swal2-show" tabindex="-1" role="dialog" aria-live="assertive" aria-modal="true" style="display: grid;"><button type="button" class="swal2-close" aria-label="Close this dialog" style="display: none;">×</button><ul class="swal2-progress-steps" style="display: none;"></ul><div class="swal2-icon swal2-success swal2-icon-show" style="display: flex;"><div class="swal2-success-circular-line-left" style="background-color: rgb(255, 255, 255);"></div><span class="swal2-success-line-tip"></span> <span class="swal2-success-line-long"></span><div class="swal2-success-ring"></div> <div class="swal2-success-fix" style="background-color: rgb(255, 255, 255);"></div><div class="swal2-success-circular-line-right" style="background-color: rgb(255, 255, 255);"></div></div><img class="swal2-image" style="display: none;">' + 
    /*titolo*/ '<h2 class="swal2-title" id="popSuccessTitle" style="display: block;">Success alert</h2>' + 
    /*didascalia*/ '<div class="swal2-html-container" id="popSuccessCaption" style="display: block;">yes</div><input class="swal2-input" style="display: none;"><input type="file" class="swal2-file" style="display: none;"><div class="swal2-range" style="display: none;"><input type="range"><output></output></div><select class="swal2-select" style="display: none;"></select><div class="swal2-radio" style="display: none;"></div><label for="swal2-checkbox" class="swal2-checkbox" style="display: none;"><input type="checkbox"><span class="swal2-label"></span></label><textarea class="swal2-textarea" style="display: none;"></textarea><div class="swal2-validation-message" id="swal2-validation-message" style="display: none;"></div><div class="swal2-actions" style="display: flex;"><div class="swal2-loader"></div>' +
    /*bottone ok*/ '<button type="button" class="swal2-confirm swal2-styled" aria-label="" style="display: inline-block;" id="successOk" onclick=popup("popSuccess")>OK</button>';
    '</div><div class="swal2-footer" style="display: none;"></div><div class="swal2-timer-progress-bar-container"><div class="swal2-timer-progress-bar" style="display: none;"></div></div></div></div></div>'; 

    //popup danger
    document.getElementById("main").innerHTML += '<div id="popDanger" style="display: none;"><div class="swal2-container swal2-center swal2-backdrop-show" style="overflow-y: auto;"><div aria-labelledby="swal2-title" aria-describedby="swal2-html-container" class="swal2-popup swal2-modal swal2-icon-error swal2-show" tabindex="-1" role="dialog" aria-live="assertive" aria-modal="true" style="display: grid;"><button type="button" class="swal2-close" aria-label="Close this dialog" style="display: none;">×</button><ul class="swal2-progress-steps" style="display: none;"></ul><div class="swal2-icon swal2-error swal2-icon-show" style="display: flex;"><span class="swal2-x-mark"><span class="swal2-x-mark-line-left"></span><span class="swal2-x-mark-line-right"></span></span></div><img class="swal2-image" style="display: none;">' + 
    /*titolo*/ '<h2 class="swal2-title" id="popDangerTitle" style="display: block;">Oops...</h2>' + 
    /*didascalia*/ '<div class="swal2-html-container" id="popDangerCaption" style="display: block;">Something went wrong!</div><input class="swal2-input" style="display: none;"><input type="file" class="swal2-file" style="display: none;"><div class="swal2-range" style="display: none;"><input type="range"><output></output></div><select class="swal2-select" style="display: none;"></select><div class="swal2-radio" style="display: none;"></div><label for="swal2-checkbox" class="swal2-checkbox" style="display: none;"><input type="checkbox"><span class="swal2-label"></span></label><textarea class="swal2-textarea" style="display: none;"></textarea><div class="swal2-validation-message" id="swal2-validation-message" style="display: none;"></div><div class="swal2-actions"><div class="swal2-loader"></div>' +
    /*bottone ok*/ '<button type="button" class="swal2-confirm btn btn-primary" aria-label="" style="display: inline-block;" id="dangerOk" onclick=popup("popDanger")>OK</button>' +
    '</div><div class="swal2-footer" style="display: none;"><a href="">Why do I have this issue?</a></div><div class="swal2-timer-progress-bar-container"><div class="swal2-timer-progress-bar" style="display: none;"></div></div></div></div></div>';  
}

function popup(popUpName, title, caption){
    //se invisibile lo rende invisibile e viceversa
    if(document.getElementById(popUpName).style.display == "none")
        document.getElementById(popUpName).style.display = "flex";
    else
        document.getElementById(popUpName).style.display = "none";

    //imposta titolo e descrizione del popup
    document.getElementById(popUpName + "Title").innerHTML = title;
    document.getElementById(popUpName + "Caption").innerHTML = caption;
}

//funzione per inserire all'interno di un div una porzione di codice HTML. Il campo addOrReplace serve per decidere se il div va rimpiazzato in toto oppure va agggiunto
function callView(divId, pageToCall, addOrReplace){
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            if(addOrReplace == 'add')
                document.getElementsByTagName(divId).innerHTML += this.response;
            else
                document.getElementsByTagName(divId).innerHTML = this.response;
       }
    };
    xmlhttp.open("GET", pageToCall , true);
    xmlhttp.send();
}

//funzione per effettuare operazioni GET sul back-end inviando un form già valido 
// e restituire una porzione HTML ed un feedback all'utente
function callViewFeedback(divId, formName, pageToCall){
    var elements = document.forms[formName].elements;
    //formattazione dei parametri della URL
    for(i=0; i<elements.length; i++){
        var name = elements[i].getAttribute("name");
        var value = elements[i].value;
        pageToCall += name + '=' + value +'&';
    }   
    //invio della richiesta
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            const res = JSON.parse(this.response);
            if(res.popUpName != "popDanger"){
                if(addOrReplace == 'add')
                    document.getElementById(divId).innerHTML += res.code;
                else
                    document.getElementById(divId).innerHTML = res.code;
            }
            //visualizza il popup specificato da popUpName con un titolo e una descrizione passati al metodo a partire dal json
            popup(res.popUpName, res.title, res.caption);
        }
    };
    xmlhttp.open("GET", pageToCall , true);
    xmlhttp.send();
    return false;
}

//funzione per effettuare operazioni GET sul back-end e restituire un feedback all'utente
function callFeedbackGET(formName, pageToCall){
    var elements = document.forms[formName].elements;
    //formattazione dei parametri della URL
    pageToCall += '?';
    for(i=0; i<elements.length; i++){
        var name = elements[i].getAttribute("name");
        if(!elements[i].validity.valid){
            popup("popWarning", "Attenzione!", "Il campo " + name + " è obbligatorio");
            return false;
        }
        var value = elements[i].value;
        pageToCall += name + '=' + value +'&';
    }   
    //invio della richiesta
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            const res = JSON.parse(this.response);
            //visualizza il popup specificato da popUpName con un titolo e una descrizione passati al metodo a partire dal json
            popup(res.popUpName, res.title, res.caption);
    }
    };
    xmlhttp.open("GET", pageToCall , true);
    xmlhttp.send();
    return false;
}

function callFeedbackPOST(pageToCall, dataToSend){
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            const res = JSON.parse(this.response);
            //visualizza il popup specificato da popUpName con un titolo e una descrizione passati al metodo a partire dal json
            popup(res.popUpName, res.title, res.caption);
       }
    };
    xmlhttp.open("POST", pageToCall, true);
    xmlhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xmlhttp.send(dataToSend);
    popup("popConfirm", "", "");
}

//funzione per effettuare operazioni POST sul back-end che necessitano una conferma da parte dell'utente
function callConfirm(formName, popConfirmTitle, popConfirmCaption, pageToCall){
    //formatta i dati di un form o di campi hidden come il seguente  <input type="hidden" id="custId" name="custId" value="3487">, 
    // N.B. come parametro passare solo il valore di NAME del campo da inviare
    var elements = document.forms[formName].elements;
    var data = new FormData();
    for(i=0; i<elements.length; i++){
        var name = elements[i].getAttribute("name");
        if(!elements[i].validity.valid){
            popup("popWarning", "Attenzione!", "Il campo " + name + " è obbligatorio");
            return false;
        }
        var value = elements[i].value;
        data.append(name, value);
    }   
    //chiamata POST con feedback
    document.getElementById("confirmOk").onclick = callFeedbackPOST(pageToCall, data);
    popup("popConfirm", popConfirmTitle, popConfirmCaption);
    return false;
}

//funzione per effettuare operazioni POST sul back-end che necessitano una conferma da parte dell'utente
function callConfirmNoValidation(formName, popConfirmTitle, popConfirmCaption, pageToCall){
    //formatta i dati di un form o di campi hidden come il seguente  <input type="hidden" id="custId" name="custId" value="3487">, 
    // N.B. come parametro passare solo il valore di NAME del campo da inviare
    var elements = document.forms[formName].elements;
    var data = new FormData();
    for(i=0; i<elements.length; i++){
        var name = elements[i].getAttribute("name");
        var value = elements[i].value;
        data.append(name, value);
    }   
    //chiamata POST con feedback
    document.getElementById("confirmOk").onclick = callFeedbackPOST(pageToCall, data);
    popup("popConfirm", popConfirmTitle, popConfirmCaption);
    return false;
}