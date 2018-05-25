<html>
    
    <head>
    </head>
        <title> Fifth page
    </title>
    
    <body style= "background-color: black; color: white;" >
    
        
  <?php
    //ideja ovog primera je da vidimo sve vrste encoding URL    
        $url_page = 'php/created/page/url.php'; //pravimo promenjivu \4url, tj. link koji predstavlja deo celokupnog URL-a
        $param1 = 'This is string'; //pravimo promenjivu $param1
        $param2 = ' "bad" / <character$>'; //pravimo promenjivu, u kojoj zelimo da vidimo kako cemo kodirati specijalne karaketer
        $linktext = "<click> and you will see"; //pravimo varijablu i zelimo da vidimo kako cemo enkodirati specijalne karaktere, da bi se prikazali u nazimu linka
        ?>
        
        <?php
        
            $url = "http://localhost/"; 
            $url .= rawurlencode($url_page);
            $url .= "?param1=" . urlencode($param1);
            $url .= "&$param2=" . urlencode($param2);
        //pravimo ceo URL, ali iz delova, kako bismo u $url promenjivu ubacili sve enkodovane vrednosti iz prethodnih varijabli    ?>
        
        <a href="<?php echo htmlspecialchars($url); ?> "> <?php echo htmlspecialchars($linktext); ?> </a>
        <!-- koristimo htmlspecialchars jer imamo specijalne karaktere u URL-u i moramo da ih enkodujemo, a isto vazi i za tekst koji printamo iz varijable #link_text-->

       

        
        
        
        
        
     
        
    </body>


</html>