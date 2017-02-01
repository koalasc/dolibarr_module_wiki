<?php
/* Auteur <koalas@cilos.fr>
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program. If not, see <http://www.gnu.org/licenses/>.
 */


// Change this following line to use the correct relative path (../, ../../, etc)
require '../../main.inc.php';
// Change this following line to use the correct relative path from htdocs (do not remove DOL_DOCUMENT_ROOT)
dol_include_once('/core/lib/admin.lib.php');

$langs->load("wiki@wiki");

// Access control
if (! $user->admin) {
    accessforbidden();
}

// Parameters
$action = GETPOST('action', 'alpha');

if($action=='save') {
	
	foreach($_REQUEST['TDivers'] as $name=>$param) {
		
		dolibarr_set_const($db, $name, $param);
		
	}
	
}

/***************************************************
* PAGE
*
* Put here all code to build page
****************************************************/



llxHeader('','Gestion de wiki, à propos','');

$linkback='<a href="'.DOL_URL_ROOT.'/admin/modules.php">'.$langs->trans("BackToModuleList").'</a>';
print_fiche_titre('Gestion du wiki',$linkback,'setup');

showParameters();

function showParameters() {
	global $db,$conf,$langs;
	
	$html=new Form($db);
	
}
?>

<table width="100%" class="noborder">
	<tr class="liste_titre">
		<td>A propos</td>
		<td align="center">&nbsp;</td>
		</tr>
		<tr class="impair">
			<td valign="top">Module développé par </td>
			<td align="center">
				<a href="koalas@cilos.fr">koalas</a>
			</td>
		</td>
	</tr>
</table>
<?php

$db->close();
llxFooter('$Date: 2015/04/15 10:00:00 $ - $Revision: 1.1 $');
