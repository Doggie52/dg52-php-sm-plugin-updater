# Welcome to the dG52 PHP SourceMod Plugin Updater

dG52 PHP SourceMod Plugin Updater grabs a list of the plugins installed on your SourceMod-enabled Source Dedicated Server (SRCDS). It then queries the SourceMod plugin search and subsequently the AlliedModders' forums for the latest version. After having found the URL of the plugin's forum post it saves this in an SQLite database for future searches.

## Requirements
 * The `openssl.dll` extension for PHP. Remove the semicolon before the line `;extension=php_openssl.dll` in `php.ini` or add it yourself.
 * (For SQLite usage) The `php_sqlite.dll` extension for PHP. Remove the semicolon before the line `;extension=php_sqlite.dll` in `php.ini` or add it yourself.

## Usage instructions
 * Download the archive and extract to your webserver's `htdocs` directory.
 * Configure the script by opening [`config.php`](config.php) in your favorite text-editor and editing the variables listed.
 * Open the [`install.php`](install.php) file in your browser and let it create the database.

You're done! Open [`plugins.php`](plugins.php) in your browser and follow the instructions.

If the plugin can not find a matching forum URL for a certain plugin, it will tell you so. You can then choose to click the affected plugin's name and add the forum URL yourself!

## Notes
**Make sure your script is hosted somewhere only YOU can access it. Do NOT put this on a public webserver - bad things can happen.**

Feel free to discuss the plugin and contact me directly via e-mail or via the [thread at AlliedModders.net](http://forums.alliedmods.net/showthread.php?t=135649).

The script queries the search and forum pages directly - these can take a long time to download so be patient! The script can take around a minute to complete.

The script uses the [srcds rcon](http://www.phpclasses.org/package/4897-PHP-Send-RCON-commands-to-a-Source-based-game-server.html) PHP class by Geert Broekmans.

Please remember that the script entirely relies on that plugin authors keep their plugin version up-to-date on the forum post.

### To-do
 * find a way to minimize load-times
 * enable setting a plugin and/or time limit
 * refine UI somewhat, allow selectively choosing what plugins to update
 * allow users to update plugins directly from the script
 * allow cron and e-mail notifications
 * allow multiple servers to be set-up

## Further reading
 * [(unofficial) SRCDS information](http://www.srcds.com)
 * [SourceMod](http://www.sourcemod.net)
