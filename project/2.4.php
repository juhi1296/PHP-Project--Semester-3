<?php

function dateDiff($start,$end)
{
	$start_ts=strtotime($start);
	$end_ts=strtotime($end);
	
	$diff=$end_ts-$start_ts;
	return round($diff/86400);
}

echo dateDiff("2016-01-07","2016-04-12").'days' ;
//echo dateDiff("2016-01-07", date('Y-m-d')).'days';


?>