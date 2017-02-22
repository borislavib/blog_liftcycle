 
    <div class="ui-layout-center">  

    	<ul class="breadcrumb">
  <li><a href="./.">Cycles</a> <span class="divider">/</span></li>  
  <li class="active">Russian powerlifting routine</li>
</ul>  
 
<h1>Russian powerlifting routine</h1>
<table>
    <tr> 
        <td>1 Max repetition Squat: </td>
        <td> 
            <input type="text" id="maxSquat" class ="inputNumberForCalculation" placeholder ="number like 123.4" /><br>
        </td>
    </tr>
    <tr>
        <td>1 Max repetition Bench press:</td>    
         <td>
            <input type="text" id="maxBenchpress" class ="inputNumberForCalculation" placeholder ="number like 123.4" /><br>
        </td>
    </tr>
    <tr>
        <td>1 Max repetition Deadlift: </td> 
         <td>
            <input type="text" id="maxDeadlift" class ="inputNumberForCalculation" placeholder ="number like 123.4" /><br>  
        </td>
      </tr>  
      <tr>
          <td> </td>
          <td><input type="button" id="calculateRussian" value="Calculate"  class ="btn" />  
      </tr>
</table> 
<br/> 
<form name="order" >    
<table border ="1" id ="cycle" class ="cycle-tables" >  
    <tr>
        <th> </th>
        <th colspan ="4">Monday</th>
        <th colspan ="4">Wednesday</th>
        <th colspan ="4">Friday</th> 
    </tr>
    <tr> 
        <th>Week</th> 

        <th>Exercise</th>
        <th>Sets</th>
        <th>Repetitions</th>
        <th>Weight</th>

        <th>Exercise</th>
        <th>Sets</th>
        <th>Repetitions</th>
        <th>Weight</th>

        <th>Exercise</th>
        <th>Sets</th>
        <th>Repetitions</th>
        <th>Weight</th>

    </tr>
     <tr> 
        <th rowspan="2">1</th> 

        <td>Squat</td>
        <td>6</td>
        <td>2</td>
        <td><input class="tableCell" type="text" id="w1s1" readonly ="readonly" /></td> <!--  -->

        <td>Deadlift</td>
        <td>6</td>
        <td>3</td>
        <td><input class="tableCell" type="text" id="w1dl"  readonly ="readonly" /></td>

        <td>Squat</td>
        <td>6</td>
        <td>3</td>
        <td><input class="tableCell" type="text" id="w1s2"  readonly ="readonly" /></td>  

     </tr>
     <tr>  
        <td>Bench press</td>
        <td>6</td>
        <td>3</td>
        <td><input class="tableCell" type="text" id="w1bp1"  readonly ="readonly" /></td>

        <td></td>
        <td></td>
        <td></td>

        <td></td>
        <td>Bench press</td>
        <td>6</td>
        <td>2</td>
        <td><input  class="tableCell" type="text" id="w1bp2"  readonly ="readonly" /></td> 
    </tr>

    </tr>

    <tr>
        <th rowspan="2">2</th>

        <td>Squat</td>
        <td>6</td>
        <td>2</td>
        <td><input class="tableCell" type="text" id="w2s1"  readonly ="readonly" /> </td>

        <td>Deadlift</td>
        <td>6</td>
        <td>4</td>
        <td><input class="tableCell" type="text" id="w2dl"  readonly ="readonly" /> </td>

        <td>Squat</td>
        <td> 6</td>
        <td> 4</td>
        <td> <input class="tableCell" type="text" id="w2s2"  readonly ="readonly" /></td>  
    </tr>
    <tr>

        <td>Bench press</td>
        <td> 6</td>
        <td> 4</td>
        <td> <input class="tableCell" type="text" id="w2bp1"  readonly ="readonly" /></td>

        <td></td>
        <td> </td>
        <td> </td>
        <td></td>

        <td>Bench press</td>
        <td> 6</td>
        <td> 2</td>
        <td> <input class="tableCell" type="text" id="w2bp2"  readonly ="readonly" /></td>  
    </tr> 
    <tr>
        <th rowspan="2">3</th>

        <td>Squat</td>
        <td> 6</td>
        <td> 2</td>
        <td><input class="tableCell" type="text" id="w3s1"  readonly ="readonly" /> </td>

        <td>Deadlift</td>
        <td> 6</td>
        <td> 5</td>
        <td><input class="tableCell" type="text" id="w3dl"  readonly ="readonly" /> </td>

        <td>Squat</td>
        <td> 6</td>
        <td> 5</td>
        <td> <input class="tableCell" type="text" id="w3s2"  readonly ="readonly" /></td>  
    </tr>
    <tr>

        <td>Bench press</td>
        <td> 6</td>
        <td> 5</td>
        <td> <input class="tableCell" type="text" id="w3bp1"  readonly ="readonly" /></td>

        <td></td>
        <td> </td>
        <td> </td>
        <td> </td>

        <td>Bench press</td>
        <td> 6</td>
        <td> 2</td>
        <td> <input class="tableCell" type="text" id="w3bp2"  readonly ="readonly" /></td>  
    </tr> 
    <tr>
        <th rowspan="2">4</th>

        <td>Squat</td>
        <td> 6</td>
        <td> 2</td>
        <td><input class="tableCell" type="text" id="w4s1"  readonly ="readonly" /> </td>

        <td>Deadlift</td>
        <td> 6</td>
        <td> 6</td>
        <td><input class="tableCell" type="text" id="w4dl"  readonly ="readonly" /> </td>

        <td>Squat</td>
        <td>6</td>
        <td>6</td>
        <td> <input class="tableCell" type="text" id="w4s2"  readonly ="readonly" /></td>  
    </tr>
    <tr>

        <td>Bench press</td>
        <td>6</td>
        <td>6</td>
        <td><input class="tableCell" type="text" id="w4bp1"  readonly ="readonly" /></td>

        <td></td>
        <td></td>
        <td></td>
        <td></td>

        <td>Squat</td>
        <td> 6</td>
        <td> 2</td>
        <td> <input class="tableCell" type="text" id="w4bp2"  readonly ="readonly" /></td>  
    </tr> 
    <tr>
        <th rowspan="2">5</th>

        <td>Squat</td>
        <td> 6</td>
        <td> 2</td>
        <td><input class="tableCell" type="text" id="w5s1"  readonly ="readonly" /> </td>

        <td>Deadlift</td>
        <td> 5</td>
        <td> 5</td>
        <td><input class="tableCell" type="text" id="w5dl"  readonly ="readonly" /> </td>

        <td>Squat</td>
        <td> 5</td>
        <td> 5</td>
        <td> <input class="tableCell" type="text" id="w5s2"  readonly ="readonly" /></td>  
    </tr>
    <tr>

        <td>Bench press</td>
        <td> 5</td>
        <td> 5</td>
        <td> <input class="tableCell" type="text" id="w5bp1"  readonly ="readonly" /></td>

        <td></td>
        <td> </td>
        <td> </td>
        <td></td>

        <td>Bench press</td>
        <td> 6</td>
        <td> 2</td>
        <td> <input class="tableCell" type="text" id="w5bp2"  readonly ="readonly" /></td>  
    </tr> 
    <tr>
        <th rowspan="2">6</th>

        <td>Squat</td>
        <td>6</td>
        <td> 2</td>
        <td><input class="tableCell" type="text" id="w6s1"  readonly ="readonly" /> </td>

        <td>Deadlift</td>
        <td> 4</td>
        <td> 4</td>
        <td><input class="tableCell" type="text" id="w6dl"  readonly ="readonly" /> </td>

        <td>Squat</td>
        <td> 4</td>
        <td> 4</td>
        <td> <input class="tableCell" type="text" id="w6s2"  readonly ="readonly" /></td>  
    </tr>
    <tr>

        <td>Bench press</td>
        <td> 4</td>
        <td> 4</td>
        <td> <input class="tableCell" type="text" id="w6bp1"  readonly ="readonly" /></td>

        <td></td>
        <td> </td>
        <td> </td>
        <td> </td>

        <td>Bench press</td>
        <td> 6</td>
        <td> 2</td>
        <td> <input class="tableCell" type="text" id="w6bp2"  readonly ="readonly" /></td>  
    </tr> 
    <tr>
        <th rowspan="2">7</th>

        <td>Squat</td>
        <td> 6</td>
        <td> 2</td>
        <td><input class="tableCell" type="text" id="w7s1"  readonly ="readonly" /> </td>

        <td>Deadlift</td>
        <td> 3</td>
        <td> 3</td>
        <td><input class="tableCell" type="text" id="w7dl"  readonly ="readonly" /> </td>

        <td>Squat</td>
        <td> 3</td>
        <td> 3</td>
        <td> <input class="tableCell" type="text" id="w7s2"  readonly ="readonly" /></td>  
    </tr>
    <tr>

        <td>Bench press</td>
        <td> 3</td>
        <td> 3</td>
        <td> <input class="tableCell" type="text" id="w7bp1"  readonly ="readonly" /></td>

        <td></td>
        <td> </td>
        <td> </td>
        <td> </td>

        <td>Bench press</td>
        <td> 6</td>
        <td> 2</td>
        <td> <input class="tableCell" type="text" id="w7bp2"  readonly ="readonly" /></td>  
    </tr> 
    <tr>
        <th rowspan="2">8</th>

        <td>Squat</td>
        <td> 6</td>
        <td> 2</td>
        <td><input class="tableCell" type="text" id="w8s1"  readonly ="readonly" /> </td>

        <td>Deadlift</td>
        <td> 2</td>
        <td> 2</td>
        <td><input class="tableCell" type="text" id="w8dl"  readonly ="readonly" /> </td>

        <td>Squat</td>
        <td> 2</td>
        <td> 2</td>
        <td> <input class="tableCell" type="text" id="w8s2"  readonly ="readonly" /></td>  
    </tr>
    <tr>

        <td>Bench press</td>
        <td> 2</td>
        <td> 2</td>
        <td> <input class="tableCell" type="text" id="w8bp1"  readonly ="readonly" /></td>

        <td></td>
        <td> </td>
        <td> </td>
        <td> </td>

        <td>Bench press</td>
        <td> 2</td>
        <td> 2</td>
        <td> <input class="tableCell" type="text" id="w8bp2"  readonly ="readonly" /></td>  
    </tr> 
    <tr>
        <th rowspan="2">9</th>

        <td>Squat</td>
        <td> 6</td>
        <td> 2</td>
        <td><input class="tableCell" type="text" id="w9s1"  readonly ="readonly" /> </td>

        <td>Deadlift</td>
        <td> 1</td>
        <td> 1</td>
        <td><input class="tableCell" type="text" id="w9dl"  readonly ="readonly" /> </td>

        <td>Squat</td>
        <td> 1</td>
        <td> 1</td>
        <td> <input class="tableCell" type="text" id="w9s2"  readonly ="readonly" /></td>  
    </tr>
    <tr>

        <td>Bench press</td>
        <td> 1</td>
        <td> 1</td>
        <td> <input class="tableCell" type="text" id="w9bp1"  readonly ="readonly" /></td>

        <td></td>
        <td> </td>
        <td> </td>
        <td> </td>

        <td>Bench press</td>
        <td> 6</td>
        <td> 2</td>
        <td> <input class="tableCell" type="text" id="w9bp2" readonly ="readonly" /></td>  
    </tr>  
     </table><br/>
     <table style ="margin: auto;">
    <tr>
        <td>For reading: </td>
        <td><a target="_new" href ="http://www.elitefts.com/sheiko/default.asp">Beginner Sheiko Training Programs</a></td>
    </tr>
    <tr>
        <td></td>
        <td><a target="_new" href ="http://muscleandbrawn.com/sheiko-powerlifting-training-system/">Sheiko Powerlifting Training System</a></td>
    </tr>
</table> 
</form>   