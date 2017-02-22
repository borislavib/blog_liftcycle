 
<ul class="breadcrumb">
	<li><a href="./.">Cycles</a> <span class="divider">/</span></li>  
	<li class="active">Smolov squat</li>
</ul> 
 
<h1>Smolov squat routine</h1>
	<table>
	    <tr>
	        <td>1 Max repetition squat</td>
	        <td><input type="text" id="maxBase" class ="inputNumberForCalculation" placeholder ="number like 123.4"/></td>
	    </tr>
	    <tr>
	    	<td></td>
	    	<td><input type="button" id="calculateBase" value="Calculate base mesocycle" class ="btn"/> </td>
	    </tr>
	</table>  
    <form name="order" >
       <h2>Base mesocycle</h2> 
       <table border ="1" class ="cycle-tables"> <!-- id ="cycle" style="display: none"  -->
           <tr>
               <th> </th>
               <th colspan ="3">Monday</th>
               <th colspan ="3">Wednesday</th>
               <th colspan ="3">Friday</th>
               <th colspan ="3">Saturday</th>
           </tr>
           <tr> 
               <th>Week</th> 
               
               <th>Sets</th>
               <th>Repetitions</th>
               <th>Weight</th>

               <th>Sets</th>
               <th>Repetitions</th>
               <th>Weight</th>

               <th>Sets</th>
               <th>Repetitions</th>
               <th>Weight</th>

               <th>Sets</th>
               <th>Repetitions</th>
               <th>Weight</th>
           </tr>
            <tr> 
               <th>1</th> 

               <td>4</td>
               <td>7</td>
               <td><input class="tableCell"  type="text" id="monBaseW1" readonly ="readonly" /></td>

               <td>5</td>
               <td>7</td>
               <td><input class="tableCell"  type="text" id="wedBaseW1" readonly ="readonly" /></td>

               <td>7</td>
               <td>5</td>
               <td><input class="tableCell"  type="text" id="friBaseW1" readonly ="readonly" /></td>

               <td>10</td>
               <td>3</td>
               <td><input class="tableCell"  type="text" id="satBaseW1" readonly ="readonly" /></td>
           </tr>
            <tr> 
               <th>2</th> 

               <td>4</td>
               <td>7</td>
               <td><input  class="tableCell"   type="text" id="monBaseW2" readonly ="readonly" /></td>

               <td>5</td>
               <td>7</td>
               <td><input  class="tableCell"  type="text" id="wedBaseW2" readonly ="readonly" /></td>

               <td>7</td>
               <td>5</td>
               <td><input  class="tableCell"   type="text" id="friBaseW2" readonly ="readonly" /></td>

               <td>10</td>
               <td>3</td>
               <td><input  class="tableCell"   type="text" id="satBaseW2" readonly ="readonly" /></td>
           </tr>
            <tr> 
               <th>3</th> 

               <td>4</td>
               <td>7</td>
               <td><input class="tableCell"   type="text" id="monBaseW3" readonly ="readonly" /></td>

               <td>5</td>
               <td>7</td>
               <td><input class="tableCell"   type="text" id="wedBaseW3" readonly ="readonly" /></td>

               <td>7</td>
               <td>5</td>
               <td><input class="tableCell"   type="text" id="friBaseW3" readonly ="readonly" /></td>

               <td>10</td>
               <td>3</td>
               <td><input class="tableCell"   type="text" id="satBaseW3" readonly ="readonly" /></td>
           </tr>
            <tr> 
               <th>4</th> 

               <td></td>
               <td></td>
               <td></td>

               <td></td>
               <td></td>
               <td></td>

               <td></td>
               <td>1</td>
               <td>MAX</td>
           </tr> 
        </table>
        <br/><hr>
        <h2>Intensive mesocycle</h2>
    	<table>
		    <tr>
		        <td>New 1 max repetition squat</td>
		        <td><input type="text" id="newMax" class ="inputNumberForCalculation" placeholder ="number like 123.4"/></td>
		    </tr>
		    <tr>
		    	<td></td>
		    	<td><input type="button" id="calculateIntense" value="Изчисли интензивен цикъл"  class ="btn"/></td>
		    </tr>
		</table> <br/> 
         <table border ="1" class ="cycle-tables"> <!-- style="display: none" -->
           <tr>
               <th> </th>
               <th colspan ="3">Monday</th>
               <th colspan ="3">Wednesday</th>
               <th colspan ="3">Friday</th> 
           </tr>
           <tr> 
               <th>Week</th> 

               <th>Sets</th>
               <th>Repetitions</th>
               <th>Weight</th>

               <th>Sets</th>
               <th>Repetitions</th>
               <th>Weight</th>

               <th>Sets</th>
               <th>Repetitions</th>
               <th>Weight</th>

           </tr>
            <tr> 
               <th rowspan="5">1</th> 

               <td>1</td>
               <td>3</td>
               <td><input class="tableCell"  type="text" id="mW1S1" readonly ="readonly" /></td>

               <td>1</td>
               <td>3</td>
               <td><input class="tableCell"  type="text" id="wW1S1" readonly ="readonly" /></td>

               <td>1</td>
               <td>4</td>
               <td><input class="tableCell"  type="text" id="fW1S1" readonly ="readonly" /></td>  

            </tr>
            <tr>  
               <td>1</td>
               <td>4</td>
               <td><input  class="tableCell"   type="text" id="mW1S2" readonly ="readonly" /></td>

               <td>1</td>
               <td>3</td>
               <td><input  class="tableCell"  type="text" id="wW1S2" readonly ="readonly" /></td>

               <td>1</td>
               <td>4</td>
               <td><input  class="tableCell"   type="text" id="fW1S2" readonly ="readonly" /></td> 
           </tr>
            <tr>  
               <td>3</td>
               <td>4</td>
               <td><input class="tableCell"   type="text" id="mW1S3" readonly ="readonly" /></td>

               <td>1</td>
               <td>4</td>
               <td><input class="tableCell"   type="text" id="wW1S3" readonly ="readonly" /></td>

               <td>5</td>
               <td>4</td>
               <td><input class="tableCell"   type="text" id="fW1S3" readonly ="readonly" /></td> 
           </tr>
           <tr>
               <td> 1</td>
               <td> 5</td>
               <td ><input class="tableCell"   type="text" id="mW1S4" readonly ="readonly" /></td>
                <td> 1</td>
               <td> 3</td>
               <td> <input class="tableCell"   type="text" id="wW1S4" readonly ="readonly" /></td>

               <td colspan="3"> </td> 
           </tr>
           <tr>
               <td colspan="3"></td> 

               <td> 2</td>
               <td> 5</td>
               <td><input class="tableCell"   type="text" id="wW1S5" readonly ="readonly" /> </td>
               <td colspan="3"></td> 
           </tr>
           <tr>
               <th rowspan="5">2</th>
               <td> 1</td>
               <td> 4</td>
               <td><input class="tableCell"   type="text" id="mW2S1" readonly ="readonly" /> </td>
               <td> 1</td>
               <td> 3</td>
               <td><input class="tableCell"   type="text" id="wW2S1" readonly ="readonly" /> </td>
               <td> 1</td>
               <td> 3</td>
               <td> <input class="tableCell"   type="text" id="fW2S1" readonly ="readonly" /></td>  
           </tr>
           <tr>
               <td> 1</td>
               <td> 4</td>
               <td> <input class="tableCell"   type="text" id="mW2S2" readonly ="readonly" /></td>
               <td> 1</td>
               <td> 3</td>
               <td> <input class="tableCell"   type="text" id="wW2S2" readonly ="readonly" /></td>
               <td> 1</td>
               <td> 3</td>
               <td> <input class="tableCell"   type="text" id="fW2S2" readonly ="readonly" /></td>  
           </tr>
              <tr>
               <td> 1</td>
               <td> 4</td>
               <td> <input class="tableCell"   type="text" id="mW2S3" readonly ="readonly" /></td>
               <td> 1</td>
               <td> 3</td>
               <td><input class="tableCell"   type="text" id="wW2S3" readonly ="readonly" /> </td>
               <td> 1</td>
               <td> 4</td>
               <td><input class="tableCell"   type="text" id="fW2S3" readonly ="readonly" /> </td>  
           </tr> 
            <tr>
               <td> 1</td>
               <td> 3</td>
               <td> <input class="tableCell"   type="text" id="mW2S4" readonly ="readonly" /></td>
               <td> 3</td>
               <td> 3</td>
               <td><input class="tableCell"   type="text" id="wW2S4" readonly ="readonly" /> </td>
               <td> 4</td>
               <td> 5</td>
               <td><input class="tableCell"   type="text" id="fW2S4" readonly ="readonly" /> </td>  
            </tr> 
            <tr>
               <td> 2</td>
               <td> 4</td>
               <td> <input class="tableCell"   type="text" id="mW2S5" readonly ="readonly" /></td>
               <td> 1</td>
               <td> 3</td>
               <td><input class="tableCell"   type="text" id="wW2S5" readonly ="readonly" /></td>
               <td colspan="3"> </td> 
           </tr> 
           <tr>
               <th rowspan="4">3</th>
               <td> 1</td>
               <td> 3</td>
               <td><input class="tableCell"   type="text" id="mW3S1" readonly ="readonly" /> </td>
               <td> 1</td>
               <td> 3</td>
               <td><input class="tableCell"   type="text" id="wW3S1" readonly ="readonly" /> </td>
               <td> 1</td>
               <td> 3</td>
               <td> <input class="tableCell"   type="text" id="fW3S1" readonly ="readonly" /></td>  
           </tr>
           <tr>
               <td> 1</td>
               <td> 3</td>
               <td> <input class="tableCell"   type="text" id="mW3S2" readonly ="readonly" /></td>
               <td> 1</td>
               <td> 3</td>
               <td> <input class="tableCell"   type="text" id="wW3S2" readonly ="readonly" /></td>
               <td> 1</td>
               <td> 3</td>
               <td> <input class="tableCell"   type="text" id="fW3S2" readonly ="readonly" /></td>  
           </tr>
              <tr>
               <td> 1</td>
               <td> 3</td>
               <td> <input class="tableCell"   type="text" id="mW3S3" readonly ="readonly" /></td>
               <td> 1</td>
               <td> 3</td>
               <td> <input class="tableCell"   type="text" id="wW3S3" readonly ="readonly" /></td>
               <td> 1</td>
               <td> 3</td>
               <td><input class="tableCell"   type="text" id="fW3S3" readonly ="readonly" /> </td>  
           </tr>

              <tr>
               <td> 5</td>
               <td> 5</td>
               <td> <input class="tableCell"   type="text" id="mW3S4" readonly ="readonly" /></td>
               <td> 2</td>
               <td> 3</td>
               <td> <input class="tableCell"   type="text" id="wW3S4" readonly ="readonly" /></td>
               <td> 4</td>
               <td> 3</td>
               <td> <input class="tableCell"   type="text" id="fW3S4" readonly ="readonly" /></td>  
           </tr>
           <tr>
               <th rowspan="3">4</th>
               <td> 1</td>
               <td> 3</td>
               <td><input class="tableCell"   type="text" id="mW4S1" readonly ="readonly" /> </td>
               <td> 1</td>
               <td> 3</td>
               <td><input class="tableCell"   type="text" id="wW4S1" readonly ="readonly" /> </td>
               <td> 1</td>
               <td> 3</td>
               <td><input class="tableCell"   type="text" id="fW4S1" readonly ="readonly" /> </td>  
           </tr>
             <tr>
               <td> 1</td>
               <td> 4</td>
               <td><input class="tableCell"   type="text" id="mW4S2" readonly ="readonly" /> </td>
               <td> 1</td>
               <td> 3</td>
               <td><input class="tableCell"   type="text" id="wW4S2" readonly ="readonly" /> </td>
               <td> 1</td>
               <td> 4</td>
               <td> <input class="tableCell"   type="text" id="fW4S2" readonly ="readonly" /></td>  
           </tr>
              <tr>
               <td> 5</td>
               <td> 5</td>
               <td> <input class="tableCell"   type="text" id="mW4S3" readonly ="readonly" /></td>
               <td> 4</td>
               <td> 3</td>
               <td> <input class="tableCell"   type="text" id="wW4S3" readonly ="readonly" /></td>
               <td> 3</td>
               <td> 4</td>
               <td><input class="tableCell"   type="text" id="fW4S3" readonly ="readonly" /> </td>  
           </tr>
           <tr>
               <th rowspan="2">5</th>
               <td>1</td>
               <td> 4</td>
               <td><input class="tableCell"   type="text" id="mW5S1" readonly ="readonly" /> </td>
            </tr>
            <tr>
               <td>4</td>
               <td>4 </td>
               <td> <input class="tableCell"   type="text" id="mW5S2" readonly ="readonly" /></td>
            </tr> 
            <tr>
               <th>6</th>
               <td></td>
               <td>1</td> 
               <td>MAX</td> 
           </tr> 
        </table>
</form> 