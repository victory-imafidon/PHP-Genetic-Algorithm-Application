
<!DOCTYPE html>
<html>
<head>
<link rel="shortcut icon" href="icon.png" />
<title>Result </title>

<link rel="stylesheet" type="text/css" href="sheet3.css">




<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- icons -->
    <link rel="shortcut icon" href="icon.PNG" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

		<link rel="stylesheet" type="text/css" media="screen" href="css/ie.css">
	<!--[endif]-->
	<!--[if IE]>
		<link rel="stylesheet" type="text/css" media="screen" href="css/ie-8.css">
		<!- manifest for Andriod and Chrome -->
		<link rel="manifest" href="manifest.json">
  
	<!-- manifest ios support -->

	<!-- manifest arena -->
    <link rel="apple-touch-icon" href="icons/icon-96x96.png">
    <link rel="apple-touch-icon" href="icons/icon-128x128.png">
	    <link rel="apple-touch-icon" href="icons/icon-144x144.png">
		    <link rel="apple-touch-icon" href="icons/icon-152x152.png">
			    <link rel="apple-touch-icon" href="icons/icon-192x192.png">
				    <link rel="apple-touch-icon" href="icons/icon-384x384.png">
					    <link rel="apple-touch-icon" href="icons/icon-512x512.png">
						
						<meta name="apple-mobile-web-app-status-bar" content="#57b846">
  
   	<!-- Chrome, Firefox OS and Opera --> <meta name="theme-color" content="#57b846"/>
	 <!-- Windows Phone --> <meta name=  "msapplication-navbutton-color" content="#57b846"/>
	  <!-- iOS Safari --> <meta name= "apple-mobile-web-app-status-bar-style" content="#57b846"/>
		
		

	</head>
	
	<body>


<b>
<?php
echo"<center>";

echo"<h3><b><p>SENSING OF FREQUENCY SPECTRUM</p></b></h3>
<table style='width:100%''>
  <tr>
    <th>Available Frequencies</th>
    <th>Unavailable Frequencies</th>
  </tr>
  <tr>

  
    <td>470</td>
    <td>476</td>
  </tr>

  <tr>
  <td>476</td>
  <td>506</td>
</tr>

<tr>
<td>481</td>
<td>512</td>
</tr>

<tr>
<td>488</td>
<td>572</td>
</tr>

<tr>
<td>494</td>
<td>608</td>
</tr>

<tr>
<td>500</td>
<td>644</td>
</tr>

<tr>
<td>506</td>
<td>710</td>
</tr>

<tr>
<td>512</td>
<td>734</td>
</tr>

<tr>
<td>518</td>
<td>758</td>
</tr>

<tr>
<td>524</td>
<td>800</td>
</tr>

<tr>
<td>530</td>
<td></td>
</tr>


<tr>
<td>536</td>
<td></td>
</tr>


<tr>
<td>542</td>
<td></td>
</tr>


<tr>
<td>548</td>
<td></td>
</tr>

<tr>
<td>554</td>
<td></td>
</tr>

<tr>
<td>560</td>
<td></td>
</tr>

<tr>
<td>566</td>
<td></td>
</tr>

<tr>
<td>572</td>
<td></td>
</tr>

<tr>
<td>578</td>
<td></td>
</tr>

<tr>
<td>584</td>
<td></td>
</tr>

<tr>
<td>590</td>
<td></td>
</tr>

<tr>
<td>596</td>
<td></td>
</tr>

<tr>
<td>602</td>
<td></td>
</tr>

<tr>
<td>608</td>
<td></td>
</tr>

<tr>
<td>614</td>
<td></td>
</tr>

<tr>
<td>620</td>
<td></td>
</tr>

<tr>
<td>626</td>
<td></td>
</tr>

<tr>
<td>632</td>
<td></td>
</tr>

<tr>
<td>638</td>
<td></td>
</tr>

<tr>
<td>644</td>
<td></td>
</tr>

<tr>
<td>650</td>
<td></td>
</tr>

<tr>
<td>656</td>
<td></td>
</tr>

<tr>
<td>662</td>
<td></td>
</tr>

<tr>
<td>668</td>
<td></td>
</tr>

<tr>
<td>674</td>
<td></td>
</tr>

<tr>
<td>680</td>
<td></td>
</tr>

<tr>
<td>686</td>
<td></td>
</tr>

<tr>
<td>692</td>
<td></td>
</tr>

<tr>
<td>698</td>
<td></td>
</tr>

<tr>
<td>704</td>
<td></td>
</tr>

<tr>
<td>710</td>
<td></td>
</tr>

<tr>
<td>716</td>
<td></td>
</tr>

<tr>
<td>722</td>
<td></td>
</tr>

<tr>
<td>728</td>
<td></td>
</tr>

<tr>
<td>734</td>
<td></td>
</tr>

<tr>
<td>740</td>
<td></td>
</tr>

<tr>
<td>746</td>
<td></td>
</tr>

<tr>
<td>752</td>
<td></td>
</tr>

<tr>
<td>758</td>
<td></td>
</tr>

<tr>
<td>764</td>
<td></td>
</tr>

<tr>
<td>770</td>
<td></td>
</tr>

<tr>
<td>776</td>
<td></td>
</tr>

<tr>
<td>782</td>
<td></td>
</tr>

<tr>
<td>788</td>
<td></td>
</tr>

<tr>
<td>794</td>
<td></td>
</tr>

<tr>
<td>800</td>
<td></td>
</tr>

</table>";















function crossover($numa, $numb){

  $c=mt_rand(1, 7);


$num1 = $numa[$c];
$num2 = $numb[$c];

//Firstly, if both parent 1 & 2, the last possition 7 has both '0' and '0' as their values (single point cross over method)
if($num1=="0" && $num2=="0"){
  $num11= 0;
  $num22= 0;
}

//secondly, if both parent 1 & 2, the last possition 7 has both '1' and '1' as their values (single point cross over method)
if($num1=="1" && $num2=="1"){
  $num11= 1;
  $num22= 1;
}

//thirdly, if both parent 1 & 2, the last possition 7 has both '1' and '0' as their values (single point cross over method)
if($num1=="1" && $num2=="0"){
  $num11= 0;
  $num22= 1;
}

//Fourthly, if both parent 1 & 2, the last possition 7 has both '0' and '1' as their values (single point cross over method)
if($num1=="0" && $num2=="1"){
  $num11= 1;
  $num22= 0;
}



global $y;
//$y= substr("$numa","0", "8") . "$num11";

$y= substr("$numa","0", $c) . "$num11" . substr("$numa", $c+1, "9");

global $z;
//return $z= substr("$numb","0", "8") . "$num22" ;
return $z= substr("$numb","0", $c) . "$num22" . substr("$numb", $c+1, "9");


}
 

function mutate($var){
  $g=mt_rand(1, 8);

  $nu = $var[$g];

//We have 2 chances of possibilities

//Firstly, if THE initial value is '0'(single point MUTATION method)
if($nu=="0" ){
  $nu11= 1;
}

//Secondly, if THE initial value is '1'(single point MUTATION method)
if($nu=="1" ){
  $nu11= 0;
}




//global $va;

return substr("$var","0", $g) . "$nu11" . substr("$var", $g+1, "9");

}

//$u= "10100010";
 //$t= mutate($u);
 //echo"$u[6]";
//echo"</br>";
 //$a= "00010000";
 //echo mutate($a);

//mutate("00011111");
//echo"$m";

//echo "</br>";
//echo bindec("$m");

//Channel available for cognitive Users
$channel= array(476, 506, 512, 572, 608, 644, 674, 710, 734, 758, 800);

//Firstly choose/set population size
$min= 0;

$max= 10;

$value1=mt_rand($min, $max);
$value2=mt_rand($min, $max);
$value3=mt_rand($min, $max);
$value4=mt_rand($min, $max);


//We have decide to use encoding in binary, using 10 bits in size

//Now we Randomly choose our initial population. We've decide to randomly choose 4 chromosomes as of initial samples.

$chromosome1 = "$channel[$value1]";
$chromosome2 = "$channel[$value2]";
$chromosome3 = "$channel[$value3]";
$chromosome4 = "$channel[$value4]";

//echo $chromosome1 . '&nbsp'.$chromosome2 . '&nbsp'. $chromosome3 .'&nbsp'. $chromosome4;

$fx1= $chromosome1*2;
$fx2= $chromosome2*2;
$fx3= $chromosome3*2;
$fx4= $chromosome4*2;

$sumfx= $fx1 + $fx2 + $fx3 + $fx4;


$prb1= $chromosome1/$sumfx;
$prb2= $chromosome2/$sumfx;
$prb3= $chromosome3/$sumfx;
$prb4= $chromosome4/$sumfx;
 
//echo max($prb1, $prb2, $prb3, $prb4);
////////////////////////////
echo"<h3>Initial Population for PARENT 1 (First parent Chromosome)</h3>";

echo"<p>For Frequency Range: 470 >= X <= 806 MHz</p>";

echo"
<table style='width:100%''>
  <tr>
    <th>Chromosome number</th>
    <th>Encoding type (Binary/base2)</th>
    <th>X value (Frequencies in MHz)</th>
    <th>Fitness value F(x) = 2X</th>
    <th>Selection probability</th>
  </tr>
  <tr>

  
    <td>1</td>
    <td>";
    echo sprintf("%10d", decbin($chromosome1));
    echo"</td>
    <td>$chromosome1</td>
    
    <td>";
    echo $chromosome1*2;
    echo"</td>
    <td>";
    echo"$prb1";
    if(max($prb1, $prb2, $prb3, $prb4) == $prb1)
  {echo"&nbsp(fittest)";}
    echo"</td>
  </tr>

  <tr>
  <td>2</td>
  <td>";
  echo sprintf("%10d", decbin($chromosome2));
  echo"</td>
  <td>$chromosome2</td>
  
  <td>";
  echo $chromosome2*2;
  echo"</td>
  <td>";
  echo"$prb2";
  if(max($prb1, $prb2, $prb3, $prb4) == $prb2)
  {echo"&nbsp(fittest)";}
  echo"</td>
</tr>

<tr>
<td>3</td>
<td>";
echo sprintf("%10d", decbin($chromosome3));
echo"</td>
<td>$chromosome3</td>
<td>";
echo $chromosome3*2;
echo"</td>
<td>";
echo"$prb3";
if(max($prb1, $prb2, $prb3, $prb4) == $prb3)
  {echo"&nbsp(fittest)";}
echo"</td>
</tr>

<tr>
<td>4</td>
<td>";
echo sprintf("%10d", decbin($chromosome4));
echo"</td>
<td>$chromosome4</td>
<td>";
echo $chromosome4*2;
echo"</td>
<td>";
echo"$prb4";
if(max($prb1, $prb2, $prb3, $prb4) == $prb4)
  {echo"&nbsp(fittest)";}
echo"</td>
</tr>

<tr>
<td>TOTAL</td>
<td></td>

<td>";
echo $chromosome1 + $chromosome2 + $chromosome3 + $chromosome4;
echo"</td>
<td>";
echo"$sumfx";
echo"</td>
<td></td>
</tr>
</table>";

//echo"The row with &nbsp";
//echo max($prb1, $prb2, $prb3, $prb4); echo"&nbsp is most fittest</p>";

if(max($prb1, $prb2, $prb3, $prb4) == $prb1)
  {$fit1=" $chromosome1";}

  if(max($prb1, $prb2, $prb3, $prb4) == $prb2)
  {$fit1=" $chromosome2";}

  if(max($prb1, $prb2, $prb3, $prb4) == $prb3)
  {$fit1=" $chromosome3";}  

  if(max($prb1, $prb2, $prb3, $prb4) == $prb4)
  {$fit1=" $chromosome4";}

  echo"The row with &nbsp";
echo"$fit1"; echo"&nbsp is most fittest</p>";
 //////////////////////////////Second parent Chromosome/////////////////////////////////////////////////////////


 //Channel available for cognitive Users
$channel= array(476, 506, 512, 572, 608, 644, 674, 710, 764);

//Firstly choose/set population size
$min= 0;

$max= 7;

$value1=mt_rand($min, $max);
$value2=mt_rand($min, $max);
$value3=mt_rand($min, $max);
$value4=mt_rand($min, $max);
//We have decide to use encoding in binary, using 10 bits in size

//Now we Randomly choose our initial population. We've decide to randomly choose 4 chromosomes as of initial samples.

$chromosome1 = "$channel[$value1]";
$chromosome2 = "$channel[$value2]";
$chromosome3 = "$channel[$value3]";
$chromosome4 = "$channel[$value4]";

//echo $chromosome1 . '&nbsp'.$chromosome2 . '&nbsp'. $chromosome3 .'&nbsp'. $chromosome4;

$fx1= $chromosome1*2;
$fx2= $chromosome2*2;
$fx3= $chromosome3*2;
$fx4= $chromosome4*2;

$sumfx= $fx1 + $fx2 + $fx3 + $fx4;


$prb1= $chromosome1/$sumfx;
$prb2= $chromosome2/$sumfx;
$prb3= $chromosome3/$sumfx;
$prb4= $chromosome4/$sumfx;
 
//echo max($prb1, $prb2, $prb3, $prb4);
////////////////////////////
echo"<h3>Initial Population for PARENT 2 (Second parent Chromosome)</h3>";

echo"
<table style='width:100%''>
  <tr>
    <th>Chromosome number</th>
    <th>Encoding type (Binary/base2)</th>
    <th>X value (Frequencies in MHz)</th>
    <th>Fitness value F(x) = 2X</th>
    <th>Selection probability</th>
  </tr>
  <tr>

  
    <td>1</td>
    <td>";
    echo sprintf("%10d", decbin($chromosome1));
    echo"</td>
    <td>$chromosome1</td>
    
    <td>";
    echo $chromosome1*2;
    echo"</td>
    <td>";
    echo"$prb1";
    if(max($prb1, $prb2, $prb3, $prb4) == $prb1)
  {echo"&nbsp(fittest)";}
    echo"</td>
  </tr>

  <tr>
  <td>2</td>
  <td>";
  echo sprintf("%10d", decbin($chromosome2));
  echo"</td>
  <td>$chromosome2</td>
  
  <td>";
  echo $chromosome2*2;
  echo"</td>
  <td>";
  echo"$prb2";
  if(max($prb1, $prb2, $prb3, $prb4) == $prb2)
  {echo"&nbsp(fittest)";}
  echo"</td>
</tr>

<tr>
<td>3</td>
<td>";
echo sprintf("%10d", decbin($chromosome3));
echo"</td>
<td>$chromosome3</td>
<td>";
echo $chromosome3*2;
echo"</td>
<td>";
echo"$prb3";
if(max($prb1, $prb2, $prb3, $prb4) == $prb3)
  {echo"&nbsp(fittest)";}
echo"</td>
</tr>

<tr>
<td>4</td>
<td>";
echo sprintf("%10d", decbin($chromosome4));
echo"</td>
<td>$chromosome4</td>
<td>";
echo $chromosome4*2;
echo"</td>
<td>";
echo"$prb4";
if(max($prb1, $prb2, $prb3, $prb4) == $prb4)
  {echo"&nbsp(fittest)";}
echo"</td>
</tr>

<tr>
<td>TOTAL</td>
<td></td>

<td>";
echo $chromosome1 + $chromosome2 + $chromosome3 + $chromosome4;
echo"</td>
<td>";
echo"$sumfx";
echo"</td>
<td></td>
</tr>
</table>";

//echo"The row with &nbsp";
//echo max($prb1, $prb2, $prb3, $prb4); echo"&nbsp is most fittest</p>";

if(max($prb1, $prb2, $prb3, $prb4) == $prb1)
  {$fit2=" $chromosome1";}

  if(max($prb1, $prb2, $prb3, $prb4) == $prb2)
  {$fit2=" $chromosome2";}

  if(max($prb1, $prb2, $prb3, $prb4) == $prb3)
  {$fit2=" $chromosome3";}  

  if(max($prb1, $prb2, $prb3, $prb4) == $prb4)
  {$fit2=" $chromosome4";}

  echo"The row with &nbsp";
echo"$fit2"; echo"&nbsp is most fittest</p>";




 /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
echo"<h3>Generational Offsprings.</h3>";


echo"<h3>1st cognitive user.</h3>";

$fitt1= sprintf("%10d", decbin($fit1));
$fitt2= sprintf("%10d", decbin($fit2));
 
$cross= crossover($fitt1, $fitt2);

//echo bindec($y);
//echo"</br>";
//echo bindec($z);
//global $mutate1;
 $mutate[2]= mutate($y);

 //global $mutate2;
$mutate[3]= mutate($z); 

$fxx1= bindec($mutate[2])*2;
$fxx2= bindec($mutate[3])*2;


$sumfxx= $fxx1 + $fxx2;


$prbb1= $fxx1/$sumfxx;
$prbb2= $fxx2/$sumfxx;



echo"
<table style='width:100%'>
  <tr>
  <th>Generation</th>
  <th>Chromosome number</th>
    <th>Encoding type (Binary/base2)</th>
    <th>X value (Frequencies in MHz)</th>
    <th>Fitness value F(x) = 2X</th>
    <th>Selection probability</th>
  </tr>
  <tr>
  <td>1</td>
    <td>1</td>
  
    <td>";

 
 echo"$mutate[2]";
    echo"</td>
    <td>";
    
    echo bindec($mutate[2]);
    
    echo"</td>
    <td>";
  
    echo bindec($mutate[2])*2;
    echo"</td>
    <td>
    $prbb1";
    
    if(max($prbb1, $prbb2) == $prbb1)
  {echo"&nbsp(Best solution)";}


   echo" </td>
  </tr>

  <tr>
  <td></td>

  <td>2</td>
 
  <td>";
  
  echo"$mutate[3]";
  
 echo" </td>
  <td>";
  echo bindec($mutate[3]);
  echo"</td>
  <td>";
  echo bindec($mutate[3])*2;
  echo"</td>
  <td>$prbb2";

  if(max($prbb1, $prbb2) == $prbb2)
  {echo"&nbsp(Best solution)";}

  
  echo"</td>
</tr>



<tr>
<td></td>

<td>TOTAL</td>

<td></td>
<td>"; echo bindec($mutate[2]) + bindec($mutate[3]);
echo"</td>
<td>";

echo bindec($mutate[2])*2 + bindec($mutate[3])*2;

echo"</td>

<td></td>
</tr>";
      

$count=2; $countt=3; $fcount=4; $fcountt=5;
do{
  
  //echo"<h3>$count Offspring ($count Generation)</h3>";

  $q= bindec($mutate[$count]);
  $p= bindec($mutate[$countt]);




  echo"

  <tr>
  <td>$count</td>
    <td>1</td>
    
    <td>";

  ++$count; ++$countt;

$fittt1= sprintf("%10d", decbin($q));
$fittt2= sprintf("%10d", decbin($p));

crossover($fittt1, $fittt2);

//echo bindec($y);
//echo"</br>";
//echo bindec($z);
//echo"</br>";


$mutate[$fcount]= mutate($y);
 //global $mutate2;
$mutate[$fcountt]= mutate($z); 

//echo bindec($mutate[3]);
//echo"</br>";
//echo bindec($mutate[4]);




$fxx1= bindec($mutate[$fcount])*2;
$fxx2= bindec($mutate[$fcountt])*2;


$sumfxx= $fxx1 + $fxx2;


$prbb1= $fxx1/$sumfxx;
$prbb2= $fxx2/$sumfxx;



 
 
 echo"$mutate[$fcount]";
    echo"</td>
    <td>";
    
    echo bindec($mutate[$fcount]);
    
    echo"</td>
    <td>";
  
    echo bindec($mutate[$fcount])*2;
    echo"</td>
    <td>
    $prbb1";
    
    if(max($prbb1, $prbb2) == $prbb1)
  {echo"&nbsp(Best solution)";}


   echo" </td>
  </tr>

  <tr>
  <td></td>
  <td>2</td>
 
  <td>";
  
  echo"$mutate[$fcountt]";
  
 echo" </td>
  <td>";
  echo bindec($mutate[$fcountt]);
  echo"</td>
  <td>";
  echo bindec($mutate[$fcountt])*2;
  echo"</td>
  <td>$prbb2";

  if(max($prbb1, $prbb2) == $prbb2)
  {echo"&nbsp(Best solution)";}

  
  echo"</td>
</tr>



<tr>
<td></td>
<td>TOTAL</td>

<td></td>
<td>"; echo bindec($mutate[$fcount]) + bindec($mutate[$fcountt]);
echo"</td>
<td>";

echo bindec($mutate[$fcount])*2 + bindec($mutate[$fcountt])*2;

echo"</td>

<td></td>
</tr>";






$mutate[$fcount]= mutate($y);
 //global $mutate2;
$mutate[$fcountt]= mutate($z); 
//++$count; 
//++$countt;

++$fcount; ++$fcountt;

}while($count<=1024);

echo"</table>"; 

?>
<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
</style>
</b>


<hr>
<center><h6> Linksxup inc.<br /> Copyright © 2021 Linksxup. All right reserved. </h6></center>

</body>
	</html>
