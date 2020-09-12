<?php

//---------Password Reset Token generator -------------------------------------------//
    $length = 30;
    $tk = substr(str_shuffle("QWERTYUIOPLKJHGFDSAZXCVBNM1234567890"),1,$length);
    
//------------Dummy Password Generator----------------------------------------------//
    $length = 8;
    $rc= substr(str_shuffle("QWERTYUIOPLKJHGFDSAZXCVBNM1234567890"),1,$length);

// -------Doc ID--------------------------------------------------------------------//
    $length = 15;
    $doc_id = bin2hex(random_bytes($length));

// ----Doc Number ----------------------------------------------------------------//
    $alpha = 5;
    $beta = 5;
    $a = substr(str_shuffle("QWERTYUIOPLKJHGFDSAZXCVBNM"),1,$alpha);
    $b = substr(str_shuffle("1234567890"),1,$beta);

?>