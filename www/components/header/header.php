<?php


function HeaderComponent ( $title){

return(
    "<header class='rounded-top d-flex align-items-center'>
        <img src='./styles/assets/logo_alphacode.png' />
        <h1 class='text-white' >$title</h1>
    </header>     
    "
);

}