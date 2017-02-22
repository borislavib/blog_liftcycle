<ul class="breadcrumb">
  <li><a href="./.">Cycles</a> <span class="divider">/</span></li>  
  <li class="active">Smolov</li>
</ul> 
<h1>Smolov bench press</h1>
<table>
    <tr>
        <th>1 Max repetition bench press :</th>
        <td><input type="text" id="max-bp" class ="inputNumberForCalculation" placeholder ="number like 123.4"/></td>
         
    </tr>  
    <tr>
        <td></td>
        <td><input type="button" id="calculate-bp" value="Calculate" class ="btn"/> </td>
    </tr>
</table> <br>  
<form name="order" > 
   <table border ="1" class ="cycle-tables"> <!--style="display: none" -->
       <tr>
           <th> </th>
           <th colspan ="3">Monday</th>
           <th colspan ="3">Wednesday</th>
           <th colspan ="3">Friday</th>
           <th colspan ="3">Sunday</th>
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

           <td>6</td>
           <td>6</td>
           <td><input class="tableCell"  type="text" id="monBPW1" readonly ="readonly"/></td>

           <td>7</td>
           <td>5</td>
           <td><input class="tableCell"  type="text" id="wedBPW1" readonly ="readonly" /></td>

           <td>8</td>
           <td>4</td>
           <td><input class="tableCell"  type="text" id="friBPW1" readonly ="readonly" /></td>

           <td>10</td>
           <td>3</td>
           <td><input class="tableCell"  type="text" id="sunBPW1" readonly ="readonly" /></td>
       </tr>
        <tr> 
           <th>2</th> 

           <td>6</td>
           <td>6</td>
           <td><input  class="tableCell"   type="text" id="monBPW2" readonly ="readonly" /></td>

           <td>7</td>
           <td>6</td>
           <td><input  class="tableCell"  type="text" id="wedBPW2" readonly ="readonly" /></td>

           <td>8</td>
           <td>4</td>
           <td><input  class="tableCell"   type="text" id="friBPW2" readonly ="readonly" /></td>

           <td>10</td>
           <td>3</td>
           <td><input  class="tableCell"   type="text" id="sunBPW2" readonly ="readonly" /></td>
       </tr>
        <tr> 
           <th>3</th> 

           <td>6</td>
           <td>6</td>
           <td><input class="tableCell"   type="text" id="monBPW3" readonly ="readonly" /></td>

           <td>7</td>
           <td>5</td>
           <td><input class="tableCell"   type="text" id="wedBPW3" readonly ="readonly" /></td>

           <td>8</td>
           <td>4</td>
           <td><input class="tableCell"   type="text" id="friBPW3" readonly ="readonly" /></td>

           <td>10</td>
           <td>3</td>
           <td><input class="tableCell"   type="text" id="sunBPW3" readonly ="readonly" /></td>
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
</form> 