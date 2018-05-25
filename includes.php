<html>
    
    <head>
    </head>
        <title> Includes </title>
    
    <body style= "background-color: black; color: white;" >
    
        
  <?php
      
      include("included_func.php");  
        
        ?>
        
        <?php
        
            hello("KALKULATOR");
        
        ?>

        <form action="included_func.php" method="POST">
            Broj 1: <input type="text" name="broj1" /> <br /> <br />
                Broj 2: <input type="text" name="broj2" /> <br /> <br />
            <input type="submit" name="plus" value="+" /> <br /> <br />
            <input type="submit" name="minus" value="-" /> <br /> <br />
            <input type="submit" name="puta" value="*" /> <br /><br />
            <input type="submit" name="podeljeno" value="/" /> <br />
                                                         
        
        </form>
        

       

        
        
        
        
        
     
        
    </body>


</html>