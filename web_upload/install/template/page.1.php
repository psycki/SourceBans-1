<?php
	if(!defined("IN_SB")){echo "You should not be here. Only follow links!";die();}
	?>
	<div id="install-progress">
<b><u>Installation Progress</u></b><br />
Step 1: License Agreement<br />
Step 2: Database Information<br />
Step 3: System Requirements<br />
Step 4: Table Creation<br />
Step 5: Initial Setup<br />
</div>
<div id="submit-introduction">

To use this webpanel software, you are required to read and accept the following license. If you do not agree with the license, then go and make your own ban/admin system.<br /><br />
An explanation  of this license is available <a href="https://www.gnu.org/licenses/gpl.html" target="_blank">here</a>.
</div>
<form action="index.php?p=submit" method="POST" enctype="multipart/form-data">
<div id="submit-main"><h3>GNU GENERAL PUBLIC LICENSE - Version 3</h3>
<textarea id="license" cols="105" rows="15" name="license">
This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program.  If not, see <http://www.gnu.org/licenses/>.
</textarea>
<br /><br />

<input type="checkbox" name="accept" id="accept" /><span style="cursor:pointer;" onclick="($('accept').checked?$('accept').checked=false:$('accept').checked=true)"> I have read, and accept the license</span>

<div align="center">
<input type="button" TABINDEX=2 onclick="checkAccept()" name="button" class="btn ok" id="button" value="Ok" /></div>
</div>
</form>
<script type="text/javascript">
$E('html').onkeydown = function(event){
	var event = new Event(event);
	if (event.key == 'enter' ) checkAccept();
};
function checkAccept()
{
	if($('accept').checked)
		window.location = "index.php?step=2";
	else
	{
		ShowBox('Error', 'If you do not accept the license, you may NOT install this web panel.', 'red', '', true);
	}
}
</script>
