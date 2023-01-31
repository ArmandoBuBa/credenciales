
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>




<style>
   
   *{
       margin: 0px;
       padding: 0px;
    }

    .credencialesJ {
        width: 488px;
        height: 311px;
        background-image: url('img/frentergb.jpg');
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
        margin: 0px auto;

    }

    .caja1{
        
         font-family: Arial, Helvetica, sans-serif;
         position: absolute;
         width: 293px;
         margin-top: 130px;
         background-color: rgba(255, 255, 100, .5);
         text-align: right;
         font-weight: bold;
         font-size: 1em;
         color: #7c7a7e;
         




    }


    .matricula{

        font-family: Arial, Helvetica, sans-serif;
        position: absolute;
        width: 290px;
         margin-top: 215px;
         background-color: rgba(255, 255, 100, .5);
         text-align: right;
         font-weight: bold;
         font-size: 0.8em;
         color: #7c7a7e;
         

    }

    .carrera{
        
        font-family: Arial, Helvetica, sans-serif;
        position: absolute;
        width: 292px;
         margin-top: 266px;
         background-color: rgba(255, 255, 100, .5);
         text-align: right;
         font-weight: bold;
         font-size: .8em;
         color: #7c7a7e;




    }


    .imagen{


    position: absolute;
    margin-top: 130px;
    margin-left: 330px;
}

.cajax
{
    width: 488px;
    height: 311px;
    background-image: url(Img/creden/vueltargb.jpg);
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -moz-background-size: cover;
    margin: 0px auto;
}
.vige
{
    font-family: Arial, Helvetica, sans-serif;
    position: absolute;
    margin-top: 90px;
    width: 468px;
    text-align: right;
    font-weight: bold;
    font-size: 0.7em;
    color: #7c7a7e;

}
.matricula2
{
    font-family: Arial, Helvetica, sans-serif;
    position:absolute;
    margin-top: 215px;
    width: 270px;
    text-align: right;
    font-weight: bold;
    font-size: 0.8em;
    color: #7c7a7e;
}
.codigob
{
    position: absolute;
    margin-top: 180px;
    margin-left: 170px;

}   
    
</style>
</head>
<body  style="background-color: rgb(124, 58, 133);"> 
    
   <div class="credencialesJ"> 
       <?php
         
           $con = new SQLite3("basse.db") or die("Problemas para conectar");

            $cs = $con -> query("SELECT * FROM credesalud WHERE matricula = 21118000");
                
                while ($resul = $cs -> fetchArray()) {
                    $matricula = $resul['matricula'];
                    $apellidos= $resul['apellidos'];
                    $nombre = $resul ['nombre'];
                    $carrera = $resul ['carrera'];
                    $vigencia =$resul ['vigencia'];
                    echo '
                    <div class="caja1">
                        <p>'.$nombre.'</p>
                        <p>'.$apellidos.'</p>            
                        
                    </div>
                    <div class= "matricula">
                        <p>
                            '.$matricula.'
                        </p>
                    </div>
            
                    <div class= "carrera">
            
                        <p>
                            '.$carrera.'
                        </p>
            
                    </div>
            
                    <div class= "imagen">
                       
                        <img src="img/19302017.jpg "  width="120px" >
                             
                    </div>
                    ';
                }
        
            $con -> close ();

        ?>

    </div>

    <div class="cajax">
        <?php 
           
           $con = new SQLite3("basse.db") or die("Problemas para conectar");

            $cs = $con -> query("SELECT * FROM credesalud WHERE matricula = 21118000");
                
                while ($resul = $cs -> fetchArray()) {
                    $matricula = $resul['matricula'];
                    $apellidos= $resul['apellidos'];
                    $nombre = $resul ['nombre'];
                    $carrera = $resul ['carrera'];
                    $vigencia =$resul ['vigencia'];
                    $codigodebarras= $resul['codigodebarras'];
                    echo '
                    <div class="vige">
                        <p>
                            '.$vigencia.'
                        </p>
                    </div>
                     
                    <div class ="matricula2">
                        <p>
                            '.$matricula.'
                        </p>
                    </div>
                    <div class="codigob">
                    <img src="barcode.php?text='.$codigodebarras.'">
                    </div>
                    ';
                }
        
            $con -> close ();

        ?>

    </div>

</body>
</html>