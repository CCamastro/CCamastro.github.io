<?php

// Create DOM from URL or file
$html = file_get_html('https://catalog.swanlibraries.net/client/en_US/lps/search/detailnonmodal/ent:$002f$002fSD_ILS$002f0$002fSD_ILS:1445380/one?qu=9780062300546');

foreach($html->find('.asyncFieldSD_ITEM_STATUS') as $duedate) {
    $duedates[] = $duedate->plaintext;
}

foreach ($duedates as $duedate) {
	If ($duedate contains 'Due'){
		$duedate = $strtotime($trim($duedate, "Due "));
		echo $duedate;
	}
}	
?>
