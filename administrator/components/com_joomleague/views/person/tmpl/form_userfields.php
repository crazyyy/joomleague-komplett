<?php 
defined('_JEXEC') or die('Restricted access');

//echo '<pre>',print_r($this->userfields,true),'</pre><br>';

?>

<fieldset class="adminform">
<legend>
<?php
echo JText::_('JL_ADMIN_PERSON_EDIT_USERFIELDS');
?>
</legend>



<table class='admintable'>
<?php
foreach( $this->userfields as $field )
{
$fieldname = $field->fieldname;    
?>
<tr>
<td width="20%" class="key" style="text-align:right; vertical-align:top;" >
<label for="<?php echo $field->fieldname; ?>"><?php echo JText::_($field->description); ?></label>
</td>
<td style="text-align:left; vertical-align:top;" >
<input	class="text_area" type="text" name="<?php echo $field->fieldname; ?>" id="title" size="55"
maxlength="20" value="<?php echo $this->person->$fieldname ?>" />
</td>
</tr>
<?php                    
}
?>
</table>
</fieldset>            