<?php

function is_connected($session){

    if(!empty($session) ){
        return true;
    }
    else{
        return false;
    }
}