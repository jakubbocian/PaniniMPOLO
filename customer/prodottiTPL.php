<?php

class Prodotti{
    function genera($categorie, $prodotti){
        $i = 0;
        $code = "";
        foreach($categorie as $categoria){
            //creazione dell'elemento categoria
            $code += '
            <li class="nav-item"><span class="nav-link d-flex justify-content-between align-items-center" data-bs-toggle="collapse"
                data-bs-target="#submenu-' . $categoria .'" aria-expanded="true"><span><span class="sidebar-icon"><svg
                            class="icon icon-xs me-2" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 600 600"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                            <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
                            <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
                            <path
                                d="M169.7 .9c-22.8-1.6-41.9 14-47.5 34.7L110.4 80c.5 0 1.1 0 1.6 0c176.7 0 320 143.3 320 320c0 .5 0 1.1 0 1.6l44.4-11.8c20.8-5.5 36.3-24.7 34.7-47.5C498.5 159.5 352.5 13.5 169.7 .9zM399.8 410.2c.1-3.4 .2-6.8 .2-10.2c0-159.1-128.9-288-288-288c-3.4 0-6.8 .1-10.2 .2L.5 491.9c-1.5 5.5 .1 11.4 4.1 15.4s9.9 5.6 15.4 4.1L399.8 410.2zM176 272c-17.7 0-32-14.3-32-32s14.3-32 32-32s32 14.3 32 32s-14.3 32-32 32zm128 64c0 17.7-14.3 32-32 32s-32-14.3-32-32s14.3-32 32-32s32 14.3 32 32zM160 384c0 17.7-14.3 32-32 32s-32-14.3-32-32s14.3-32 32-32s32 14.3 32 32z">
                            </path>
                        </svg>
                    </span><span class="sidebar-text">PIZZE</span> </span><span class="link-arrow"><svg class="icon icon-sm"
                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                            clip-rule="evenodd"></path>
                    </svg></span></span>
                <div class="multi-level collapse show" role="list" id="submenu-' . $categoria . '" aria-expanded="false" style="">
                    <ul class="flex-column nav">
                        <li class="nav-item">
                            <div class="card-body">
                                <ul class="list-group list-group-flush list my--3">';
                                    //riempimento della categoria coi prodotti
                                    while($prodotti[$i]["Fk_idCatP"] == $categoria("idCatP")){
                                        $code += '
                                        <form action="#" name="' . $prodotti[$i]["idProd"] . 'Form">
                                            <input type="hidden" name="idProd" value="' . $prodotti[$i]["idProd"] .'">
                                            <li class="list-group-item px-0">
                                                <div class="row align-items-center">
                                                    <div class="col-auto "><span class="fs-7 fw-bolder text-dark">€ ' . $prodotti[$i]["prezzo"] . '</span></div>
                                                    <div class="col ps-0 ms-2">
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <div>
                                                                <h4 class="h6 mb-0 text-small">' . $prodotti[$i]["nome"] . '</h4>
                                                            </div>

                                                        </div>
                                                        <p class="font-small mt-1 mb-0">' . $prodotti[$i]["descrizione"] . '</p>
                                                    </div>
                                                    <div class="col text-end"><a  onclick="callViewFeedback("carrelloDiv", "controller.php?method=check&", "' . $prodotti[$i]["idProd"] . 'Form")" href="#"
                                                        class="btn btn-sm btn-secondary d-inline-flex align-items-center">
                                                        <svg class="icon icon-xxs me-0" fill="currentColor" viewBox="0 0 20 20"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z">
                                                            </path>
                                                        </svg></a>
                                                    </div>
                                                </div>
                                            </li>
                                        </form>';
                                        $i++;
                                        if (isset($prodotti[$i]) && $prodotti[$i]["Fk_idCatP"] == $categoria("idCatP"))
                                            $code += '<div role="separator" class="dropdown-divider my-0"></div>';
                                    }
                                    //chiusura tag categoria
                                    $code += '
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </li>';
        }

        return $code;
    }
}

?>