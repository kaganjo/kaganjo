<?php
$data = array('
 Chirakahula, Mukwana Joe.0500387482.UGANDA.+256| <br>
 Wambua,Doe Mumbua.080023450.KENYA.+254|<br>
 Vonbora,Katherina Luther.0600990033.GERMANY.+32
 |<br> Boromir,Grommit Wallace.0100873901.IRELAND.+98
 |<br> Piepont,Edwards Jonathan.0200983729.AMERICA.+1
 |<br> Asaph,Elihu Mose.02990033.ISRAEL.+2
 |<br> Otoyo,Wafula Joel.0777799920.KENYA.+254
 |<br> Mapete,Mwambingu Simba.0987483292.TANZANIA.+257
 |<br> SARATON,DAVID BREINARD.043899292.AMERICA.+1
 |<br> POMPI,JOHN OWEN.074749292.ZAMBIA.+267
 |<br> MAG,JOHN BUNYAN.09837328.UGANDA.+256
 |<br> Vonstaupitz,Johann Gregory.0600984733.GERMANY.+32');
sort($data);
$arrlength=count($data);
for($x=0;$x<$arrlength;$x++)
 {

 echo $data[$x];
 echo "<br>";}
 ?>
