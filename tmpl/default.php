<?php // no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );?>
<div class="eventlist">
    <ul>
    <?php
    foreach($events as $event) { 
        $date = strtotime($event["start_time"]);
        ?>
        <li>
        <a href="https://www.facebook.com/<?php echo $event["eid"];?>" target="_blank">
            <img src="<?php echo $event["pic"];?>" alt="<?php echo $event["name"]?>">
            <h3><?php echo $event["name"];?></h3>
            <p><?php echo date('d-m-Y', $date);?>
                <?php if( date('H:i:s', $date) != "00:00:00") {
                    echo " ".JText::_('às')." ".date("H:i:s", $date);
                } ?>
            </p>
        </a>
        </li>
    <?php } ?>
    </ul>
</div>