<?php

namespace App\Http\tools;

use App\Http\Controllers\tools\CalculosCUIL;

class CalculoCUIL
{
    

    static function calculo_cuil($DNI,$Sexo)
    {
        
        //validadcion del tipo de datos 
        if(gettype($DNI)== 'integer')
        $strDNI=strval($DNI);
        else if(gettype($DNI) == 'string')
        $strDNI=$DNI;
        else 
        return 0;
        
        if($Sexo=='F'||$Sexo==1)
        $xy='27';
        else
        $xy='20';
        //------------------------------

        if(strlen($strDNI)<8)
        $strDNI='0'.$strDNI;

        //Calculo CUIL -----------------
        
        $z=0;

        $z += $xy[0] *5;
        $z += $xy[1] * 4;
        $z += $strDNI[0] * 3;
        $z += $strDNI[1] * 2;
        $z += $strDNI[2] * 7;
        $z += $strDNI[3] * 6;
        $z += $strDNI[4] * 5;
        $z += $strDNI[5] * 4;
        $z += $strDNI[6] * 3;
        $z += $strDNI[7] * 2;

        $resto= $z % 11;

    
        if($resto==0)
        return CalculoCUIL::CUIL($xy,$strDNI,0);
        else if($resto==1)
        {
           if($xy==27)
           return CalculoCUIL::CUIL(23,$strDNI,4);
           else
           return CalculoCUIL::CUIL(23, $strDNI, 9);
        }
        else
        return CalculoCUIL::CUIL($xy,$strDNI,11-$resto);
        
    }


    static function CUIL($xy,$dni,$z)
    {
        return $xy.$dni.$z;
    }

}


?>