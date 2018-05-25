<html>
    
    <head>
    </head>
        <title> Included functions </title>
    
    <body style= "background-color: black; color: white;" >
    
        
 <?php
        
        function hello($name){
            echo $name;
        }
        
        ?>
        
        <?php
        
           if(isset($_POST['broj1']) && isset($_POST['broj2']) ){
            $br1 = $_POST['broj1'];
            $br2 = $_POST['broj2'];
            //$operacija = $_POST['name'];
            $saberi = $br1 + $br2;
            $oduzmi = $br1 - $br2;
            $pomnozi = $br1 * $br2;
            $podeli = $br1 / $br2;
            
                   
                   if(empty($br1) || empty($br2) ){
                       echo "Molimo vas unesite brojeve!";
                   }
                    elseif($_POST['plus']){
                        echo $saberi;
                    }
                    elseif($_POST['minus']){
                        echo $oduzmi;
                    }
                    elseif($_POST['puta']){
                        echo $pomnozi;
                    }
                    elseif($_POST['podeli']){
                        echo $podeli;
                    }
           } 
        
        ?>
        
        

       

        
        
        
        
        
     
        
    </body>


</html>