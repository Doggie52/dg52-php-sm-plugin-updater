<?php
/**
 * dG52 PHP SourceMod (SM) Plugin Updater
 *
 * @author Douglas Stridsberg
 * @url http://code.google.com/p/dg52-php-sm-plugin-updater/
 * @email doggie52@gmail.com
 */

	// Initiate database
	$db = new SQLiteDatabase("db.sqlite");
	
	// If the form has not been submitted
	if(!isset($_GET['submit']))
	{
		echo "<form method=\"GET\">
				<table>
				<tr><td>Plugin's exact name:</td><td><input type=\"text\" name=\"name\" value=\"".$_GET['name']."\" /></td></tr>
				<tr><td>Plugin's forum URL:</td><td><input type=\"text\" name=\"url\" /></td></tr>
				<tr><td><input type=\"submit\" name=\"submit\" /></td></tr>
				</table>
			</form>";
	}
	else
	{
		// Insert the URL into a new row in the database along with the name of the plugin
		$db->query("INSERT INTO plugins (name, url)
			VALUES ('".$_GET['name']."', '".$_GET['url']."')");
		echo "<p>Plugin URL added, please <a href=\"plugins.php\">re-run the updater</a>!";
	}

?>