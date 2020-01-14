<?php 

    function getFirstLetterCapital($plam){
        return  ucfirst($plam);
    }

    function getFullName($data){
        $newString = implode(' ',$data);
        return $newString;
    }