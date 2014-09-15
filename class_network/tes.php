<?php
echo <<<END
	<form method=POST action=tes.php>
                <input name='name' type=text id="message_input">
                <input type="submit">
	</form>
END;
	if(isset($_POST['name']))
		echo $_POST[1];
?>