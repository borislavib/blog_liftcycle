<ul class="breadcrumb">
  <li><a href="./.">Contacts</a> <span class="divider">/</span></li>  
  <li class="active">Contacts</li>
</ul> 
<?php   
	// echo validation_errors('<label class="error">', '</label>');
	echo form_open(current_url(), $this->data['form_properties']);  
	
	if($this->data['response'] !== null) //isset($_POST['submit'])
	{
		echo "<div class = 'alert alert-success'>";
		echo $this->data['response'];
		echo  "</div>";
	} 
?>
<table class = 'table table-bordered'>
	<tr>
		<td><?php echo form_label('Name: ', 'name'); ?> </td>
		<td>
			<input type = "text" name = "name" value="<?php echo ($reset) ? '' : set_value('name'); ?>"/>
			<?php echo form_error('name', '<label class="error">', '</label>'); ?>
		</td>
	</tr>
	<tr>
		<td><?php echo form_label('E-mail: ', 'email'); ?> </td>
		<td>
			<input type = "text" name = "email" value="<?php echo ($reset) ? '' : set_value('email'); ?>"/>
			<?php echo form_error('email', '<label class="error">', '</label>'); ?>
		</td>
	</tr>
	<tr>
		<td><?php echo form_label('Message: ', 'message'); ?> </td> 
		 
		<td class = 'span6' >
			<textarea name = 'message' cols = '50' rows = '15' class ='row-fluid span12'><?php echo ($reset) ? '' : set_value('message'); ?></textarea>
			<?php echo form_error('message', '<label class="error">', '</label>'); ?>
		</td> 
	</tr>	
	<?php 
		if ($show_spam_protection) {
			echo "<tr>
				<td style ='width: 15%;'>" . form_label('Anti-spam: ' . $spam_question, 'spam_protection'). 
				"</td>
				<td style ='width: 15%;' >" . form_input('spam_protection', ($reset) ? '' : set_value('spam_protection') );
			echo form_error('spam_protection', '<label class="error">', '</label>'); 
				echo "</td>
				</tr>"; 
		}	  

		
		echo "<tr><td>";
		?>
		<input name = 'company' type = "text" style='display:none;' value = "aaaaaaa" />
		<?php 	
		echo "</td>
			<td>".form_input($this->data['submit_properties']) . "</td>
			</tr>"; 		
	?> 
</table>

<?php
	echo form_close();
?>  
<table >  
    <tr>
    	<td>Е-mail:</td>
        <th>borislav <span class ="italic">at</span>&#160; liftcycle&#160;<span class ="italic">dot</span>&#160; org </th> 
    </tr> 
</table><hr/> 