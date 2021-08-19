<?php
$age=14;
if($age>=0 && $age<=14){ // age değişkeninin değeri 0-14 yaş aralığındaysa ekrana Çocuk yazacaktır.
     echo "Çocuk";}     
 elseif($age>=15 && $age<=24){ // age değişkeninin değeri 15-24 yaş aralığındaysa ekrana Genç yazacaktır.
     echo "Genç";}
 elseif($age>=25 && $age<=64){ // age değişkeninin değeri 25-64 yaş aralığındaysa ekrana Yetişkin yazacaktır.
     echo "Yetişkin";}
 else{
     echo "Yaşlı"; // age değişkeninin değeri bu şartlardan hiçbirisine uygun değilse (65 yaş ve üzeriyse) ekrana Yaşlı yazacaktır.
 }
?>