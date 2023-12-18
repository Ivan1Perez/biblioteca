<?php 
    function setActivo($paht){
        return request()->routeIs($paht)? 'class="text-danger"':'';
    }