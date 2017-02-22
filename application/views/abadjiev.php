
    <ul class="breadcrumb">
	  <li><a href="./.">Cycles</a> <span class="divider">/</span></li>  
	  <li class="active">Ivan Abadjiev</li>
	</ul> 
 	<h1>Ivan Abadjiev and the bulgarian weightlifting system(week example)</h1>
<!-- <blockquote>

    "Зададох си въпроса защо представители на животинския свят поддържат и развиват своите физически качествапо друг
    модел на действие - при тях не съществуват периоди, раздели, микро и макро цикли - те нямат процентно натоварване - 
    те са винаги на 100%. Свърх качеството, с което оцеляват е на свръх ниво." 
     <footer> - Иван Абаджиев</footer>
</blockquote> -->
    <table>
        <tr> 
            <td>1 Max repetition front squat: </td>
            <td> 
                <input type="text" id="frontSquat"  class ="inputNumberForCalculation" placeholder="number like 123.4" />  <!-- onKeypress ="return isNumberKey(event)" -->
            </td>
        </tr>
        <tr>
            <td>1 Max repetition snatch: </td>    
             <td>
                <input type="text" id="snatch" class ="inputNumberForCalculation" placeholder="number like 123.4" /> 
            </td>
        </tr>
        <tr>
            <td>1 Max repetition clean and jerk: </td> 
             <td>
                <input type="text" id="cleanJerk" class ="inputNumberForCalculation" placeholder="number like 123.4"/> 
            </td>
          </tr>  
          <tr>
              <td>    </td>
              <td>
                <input type="button" id="calculateAbadjiev" class ="btn" value="Изчисли"/> <!-- calculate-button -->  
              </td>
          </tr>
    </table>  <br/>
    
<form name="order" >     
    <table border = '1' id ="cycle" class ="cycle-tables">  
        <tr>
            <th> </th>
            <th colspan ="3">Monday to Saturday</th>  
        </tr>
        <tr> 
            <th>Hours</th> 
            <th>Exercise</th>
            <th>Sets</th>
            <th>Weight</th> 
        </tr>
         <tr> 
            <th rowspan="2">8:30-9:00</th> 

            <td>Squat</td>
            <td>2</td>
            <td><input  class ="input_length" type="text" id="MTTF_bs1" readonly ="readonly" /></td> 
         </tr>
         <tr>  
            <td></td>
            <td>2</td>
            <td><input  class ="input_length"   type="text" id="MTTF_bs2" readonly ="readonly" /></td>
        </tr> 
        <tr>
            <th rowspan="2">9:30-10:15</th>
            <td>Snatch</td>
            <td>2</td>
            <td><input  class ="input_length"  type="text" id="MTTF_sn1" readonly ="readonly" /></td>
        </tr>
        <tr>
            <td> </td>
            <td>2</td>
            <td><input  class ="input_length"  type="text" id="MTTF_sn2" readonly ="readonly" /></td>
        </tr> 
        <tr>
            <th rowspan="2">10:45-11:30</th> 
            <td>Clean and Jerk</td>
            <td> 3</td>
            <td><input  class ="input_length"  type="text" id="MTTF_cj1" readonly ="readonly" /> </td> 
        </tr>
        <tr> 
            <td></td>
            <td>2</td>
            <td><input  class ="input_length"  type="text" id="MTTF_cj2" readonly ="readonly" /></td>
         </tr> 
        <tr>
            <th rowspan="2">12:00-12:45</th> 
            <td>Snatch</td>
            <td> 2</td>
            <td> <input  class ="input_length"  type="text" id="MTTF_sn2_1" readonly ="readonly" /></td> 
        </tr>
        <tr>
            <td></td>
            <td>2</td>
            <td> <input  class ="input_length"  type="text" id="MTTF_sn2_2" readonly ="readonly" /></td>
         </tr> 
        <tr>
            <th rowspan="2">13:00-13:30</th>
            <td>Front squat</td>
            <td> 1</td>
            <td> <input  class ="input_length"  type="text" id="MTTF_fs1" readonly ="readonly" /></td>
        </tr>
        <tr>

            <td></td>
            <td> 2</td>
            <td><input  class ="input_length"  type="text" id="MTTF_fs2" readonly ="readonly" /> </td>
        </tr> 
        <tr>
            <th rowspan="2">16:30-17:45</th>

            <td>Snatch</td>
            <td> 2</td>
            <td> <input  class ="input_length"  type="text" id="MTTF_sn3_1" readonly ="readonly" /></td>
        </tr>
        <tr>

            <td> </td>
            <td> 2 </td>
            <td>  <input  class ="input_length" type="text" id="MTTF_sn3_2" readonly ="readonly" /></td>
        </tr> 
        <tr>
            <th rowspan="2">18:00-18:30</th>

            <td>Clean and Jerk</td>
            <td> 3</td>
            <td><input class ="input_length" type="text" id="MTTF_cj2_1" readonly ="readonly" /> </td>
        </tr>
        <tr> 
            <td> </td>
            <td> 2</td>
            <td> <input class ="input_length" type="text" id="MTTF_cj2_2" readonly ="readonly" /></td> 
         </tr> 
        <tr>
            <th rowspan="2">19:00-19:45</th> 
            
            <td>Snatch</td>
            <td> 2</td>
            <td> <input class ="input_length" type="text" id="MTTF_sn4_1"  readonly ="readonly"/> </td>
         </tr>
        <tr>
            <td> </td>
            <td> 2</td>
            <td> <input class ="input_length" type="text" id="MTTF_sn4_2" readonly ="readonly" /> </td> 
        </tr> 
        <tr>
            <th rowspan="2">21:00-21:45</th>
            
            <td>Clean and Jerk</td>
            <td> 3</td>
            <td> <input class ="input_length" type="text" id="MTTF_cj3_1" readonly ="readonly" /> </td>
         </tr>
        <tr> 
            <td> </td>
            <td> 2</td>
            <td> <input class ="input_length" type="text" id="MTTF_cj3_2" readonly ="readonly" /> </td>
         </tr>  
    </table></span> 
</form>
<table style ="margin: auto;">
    <tr>
        <td> </td>
        <td><a target="_new" href ="https://www.youtube.com/watch?v=T8f72EHyLRQ">Ivan Abadjiev - Lecture Finland, 2000.</a></td>
    </tr>
    <tr>
        <td> </td>
        <td><a target="_new" href ="https://www.youtube.com/user/podiumgoldwlclub/videos">Ivan Abadjiev with Alex Krychev.</a></td>
    </tr>
</table>  
