<?php

require('./config.php');

if(empty($user->rights->wiki->wikiv)) exit;

# Variable definition
$title = ' Dokuwiki';

# Function load onglets dolibarr
llxHeader('','',$helpurl,'',0,0,'','');

# Load titre 
print_barre_liste($title);

# Forcer le style pour cette page wiki

print '<style>
.notopnoleftnoright {
    	z-index: 9;
	position: fixed;
	background: rgb(255, 255, 255) none repeat scroll 0% 0%;
	width: 50%;
}
.paginationnext {
	display:none;
}
#id-right {
	background: #fff;
}
input.vmenusearchselectcombo {
 	display:none;
}

</style>


';

print '<iframe name="dokuwiki" src="'.DOL_URL_ROOT.'/wiki/doku.php" frameborder="0" style="top: 46px ;position: absolute;" height="95%" width="89%;overflow-x:hidden"></iframe> ';



