<?php

//---------Password Reset Token generator-------------------------------------------//
    $length = 30;
    $tk = substr(str_shuffle("QWERTYUIOPLKJHGFDSAZXCVBNM1234567890"),1,$length);
    
//------------Dummy Password Generator----------------------------------------------//
    $length = 8;
    $rc= substr(str_shuffle("QWERTYUIOPLKJHGFDSAZXCVBNM1234567890"),1,$length);

?>