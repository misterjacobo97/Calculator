<html>
  
  <body>
    
    <h3> pH dilution Calculator for Hydroponics -</h3>
    <p> acid/base into water </p>
   
        
      
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
      
      <b> Total: </b>
      <p id='total'> </p>
      
      <script>
    
        calculator = function (){
          
          var FirstInput = getElementById('1V2').value;
          var SecondInput = getElementById('2C2').value;
          var ThirdInput = getElementById('2V2').value;

          document.getElementById('total') = math.pow(parseInt('ThirdInput'),(parseInt('SecondInput') * -1)) * ((0.02630267992 * 1000 / parseInt(FirstInput));w
        }
      
    
      </script>

    
    </form>
    
  </body>
  
</html>
