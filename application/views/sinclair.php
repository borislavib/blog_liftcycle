 
    <ul class="breadcrumb">
        <li><a href="./.">Cycles</a> <span class="divider">/</span></li>  
        <li class="active">Sinclair</li>
    </ul>  
<input type ='hidden' value = 'sinclair' id = 'name_cycle'/>
<input type ='hidden' value = '10' id = 'id_cycle'/>
 
<table border="1" class ="cycle-tables" > 
        <tr>
            <th>Bodyweight</th>
            <th><input type="text" placeholder="число като 123.4" id ="bodyweight" class ='inputNumberForCalculation'/></th>
        </tr>   
        <tr> 
            <th>Lifted weight</th>
            <th><input type="text" placeholder="число като 123.4" id = "liftedweight" class ='inputNumberForCalculation'/></th> 
        </tr>
        <tr>
            <td></td>
            <td>
                <select name="" id ="genderChoose">
                    <option value ="m">Male</option>
                    <option value ="f">Female</option>
                </select>
            </td>
        </tr>
        <tr>
            <td><input type="button" value="Calculate" id = "calculateSinclair" class ='btn'/></td>
            <td><input type="text" id ="result"/></td>
        </tr> 
</table><br/>
<table style ="margin: auto;">
    <tr>
        <td>  </td>
        <td><a target="_new" href ="http://en.wikipedia.org/wiki/Sinclair_Coefficients">Sinclair Coefficients</a></td>
    </tr>
</table> 
