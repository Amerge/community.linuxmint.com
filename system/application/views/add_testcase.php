<div class="art-content">
<div class="art-Post">
    <div class="art-Post-body">
<div class="art-Post-inner">
    <h2 class="art-PostHeaderIcon-wrapper">
        <span class="art-PostHeader"><img src="/img/icons/iso.png" align="absmiddle"/>&nbsp;New Test Case</span>
    </h2>
    <div class="art-PostContent">

<table cellspacing="2" cellpadding="5">
	<tr>
		<td valign="top">			
					<?php echo form_open("iso/save_testcase"); ?>
					<input type="hidden" name="action" value="add"/>
					<table>												
					<tr><th>Name:</th><td><input type="text" size=60 name="name"/></td></tr>
					<tr><th nowrap>How to reproduce:</th><td><textarea name="reproducing"></textarea></td></tr>
					<tr><th nowrap>What to expect:</th><td><textarea name="expecting"></textarea></td></tr>					
					<tr><th nowrap>Additional notes:</th><td><textarea name="notes"></textarea></td></tr>
					<tr><td colspan="2"><input type="submit" value="New"/></td></tr>
					</form> 		
					</table>
		</td>
	</tr>
</table>

</div>
    <div class="cleared"></div>
</div>

    </div>
</div>
</div>
</div>

<script type="text/javascript">
	CKEDITOR.replace( 'reproducing' );
	CKEDITOR.replace( 'expecting' );
	CKEDITOR.replace( 'notes' );
</script>
