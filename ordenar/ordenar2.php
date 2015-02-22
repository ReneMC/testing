<?PHP

 //FORMULARIO NUMERO 1
 if (isset($_POST['numero']))
   {
     if($_POST['numero']>=123456789000){
     $num1= $_REQUEST['numero'];
     $num2 = 123456789000;
     $boletisho = $num1-$num2;
     echo "El numero de boleto es ";
     echo $boletisho;
    }
    else{
      echo "Numero no valido";
    }
   }

   //FORMULARIO NUMERO 2
  if (isset($_POST['boleto']))
    {
      $bol1= $_REQUEST['boleto'];
      if($bol1<=99){
        $boletote = str_pad($bol1++, 3, 0, STR_PAD_LEFT);
        echo "El numero de boleto es ";
        echo $boletote;
      }
      else if($bol1<=999&&$bol1>=100){
        $boletote=$bol1;
        echo "El numero de boleto es ";
        echo $boletote;
      }
      else{
        echo "fale ferga";
      }
    }

    //FORMULARIO NUMERO 3
    if (isset($_POST['boletoCompleto']))
      {
        $boleto= $_REQUEST['boletoCompleto'];
        $num1= str_pad($boleto++, 3, 0, STR_PAD_LEFT);
        $num2 = 123456789000;
        $boletoCompleto= $num1+$num2;
        echo "El numero de boleto es ";
        echo $boletoCompleto;
      }

      //FORMULARIO NUMERO 4
      if (isset($_POST['numero2']))
        {
          if($_POST['numero2']>=123456789000){
          $num1= $_REQUEST['numero2'];
          $num2 = 123456789000;
          $num3 = $num1-$num2;
          $boletini = str_pad($num3++, 3, 0, STR_PAD_LEFT);
          echo "El numero de boleto es ";
          echo $boletini;
          }
          else{
            echo "numero no valido";
          }
        }

?>
 <br/><br/>
 <a href="index.php">Regresar</a>
