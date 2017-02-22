<ul class="breadcrumb">
    <li><a href="./.">Cycles</a> <span class="divider">/</span></li>  
    <li class="active">Max repetition</li>
</ul> 
<h1> 1 Max repetition</h1>
<table border ="1" class="cycle-tables">
    <tr>
        <th>Weight :</th>
        <td><input type="text" id="max" class ="inputNumberForCalculation" placeholder ="number like 123.4"/></td>
    </tr>
    <tr>
        <th>Repetitions : </th>
        <td>
            <select id ="repetitions_select">
                <option value ="10">10</option>
                <option value ="9">9</option>
                <option value ="8">8</option>
                <option value ="7">7</option>
                <option value ="6">6</option>
                <option value ="5">5</option>
                <option value ="4">4</option>
                <option value ="3">3</option>
                <option value ="2">2</option> 
            </select>
        </td>
    </tr>
    <tr>
        <th><input type="button" id="calculate-1rep" value="Calculate" class ="btn"/></th>
        <td><input type ="text" id ="rep-max-result" readonly ="readonly" /></td> 
    </tr>
</table>
<br/>    