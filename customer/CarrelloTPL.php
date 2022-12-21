<?php

class Carrello{
    function genera($prodotto){
        //creazione dell'elemento nel carrello
        $code = "";
        $code += '
            <div id="' . $prodotto["idProd"] . 'Div" class="list-group-item list-group-item-action border-bottom"">
                <input type="hidden" name="idProdotto" value="' . $prodotto["idProd"] . '">
                <div class="row align-items-center">
                    <div class="col-auto">
                        <a href="#" onclick=function(){document.getElementById("' . $prodotto["idProd"] . 'Div").remove();}; class="">
                            <svg class="icon icon-xs text-danger ms-1" title="" data-bs-toggle="tooltip" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" data-bs-original-title="Delete"
                                aria-label="Delete">
                                <path fill-rule="evenodd"
                                    d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </div>
                    <div class="col ps-0 ms-2">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h4 class="h6 mb-0 text-small">' . $prodotto["nome"] . '</h4>
                            </div>
                            <div class="text-end">
                                <small class="text-danger">' . $prodotto["prezzo"] . ' €</small>
                            </div>
                        </div>
                        <p class="font-small mt-1 mb-0">' . $prodotto["descrizione"] . '</p>
                    </div>
                </div>
            </div>';
        return $code;
    }
}

?>