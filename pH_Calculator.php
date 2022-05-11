<html>
  
  <body>
    
    <h3> pH dilution Calculator for Hydroponics -</h3>
    <p> acid/base into water </p>
    
    <script>
    
      
    
    </script>
    
    <form method="post" action="<?php echo $_SERVER['pH_Calculator.php'];?>">
    
      
      	<h3> 1st Solution </h3>
      <p>
        <b>Initial pH -</b> 1.58 (Phosphoric acid)
        <br>
        <b>Initial Volume -</b> 1ml
      </p>
      <p> 
        <br>
        Diluted Volume
        <input type="number" id="1V2" name="Diluted Volume">

        <br>

      </p>
      
      	<h3> 2nd Solution </h3>

      <p> 
        Desired diluted pH
        <input type="number" id="2C2" name="Desired Diluted pH">
        <br>
        Diluted Volume
        <input type="number" id="2V2" name="Diluted Volume">

        <br>
        <br>

        <input type="submit" value="submit">
      </p>
      
      <?php
      if ($_SERVER['pH_Calculator.php'] == "POST") {
        // collect value of input field
        $1V2 = $_REQUEST['1V2'];
        if (empty($1V2)) {
          echo "Name is empty";
        } else {
          echo $name;
        }
      }
      ?>
    
    </form>
    
  </body>
  
</html>
