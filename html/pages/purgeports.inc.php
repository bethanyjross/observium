<?php

foreach (dbFetchRows("SELECT * FROM `ports` WHERE `deleted` = '1'") as $port)
{
  echo("<div style='font-weight: bold;'>Deleting port " . $port['interface_id'] . " - " . $port['ifDescr']);
  delete_port($port['interface_id']);
  echo("</div>");
}

?>
