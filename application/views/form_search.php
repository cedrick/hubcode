<?php

	echo form_open(base_url() .'main/search');
	$search = array(
										'name' => 'search',
										'id'	 => 'search',
										'value'	 => isset($_POST['search']) ? $_POST['search'] : ''
									);
	$option = array(
                  	'Name'  => 'Name',
					'Birthday'  => 'Birthday',
                  	'Network'    => 'Network',
                );
	
                
									

?>
<table align="center">
  <tr>
      <td>
     	 Search
      </td>
      <td>
         <?php echo form_input($search); ?>
      </td>
  </tr>
  <tr>
    <td>
      Option:
    </td>
      <td>
         <?php echo form_dropdown('option',$option); ?>
      </td>
  </tr>
  <tr>
  	<td>
  		
  	</td>
    <td>  
        <?php echo form_submit(array('name' => 'submit_name', 'id' => 'submit_id', ), 'Search'); ?>
     </td>
   </tr>
</table>
<br />
<div align="center"> 
 <font color="#AA0000" face="Arial">
  <?php echo validation_errors(); ?>
 </font>    
</div>
<?php echo form_close(); ?>
<br /><br />