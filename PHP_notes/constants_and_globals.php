<?php 
    require_once('../core/config.php');
    require_once('../includes/+basic_header.php');
    
    //include_once('../includes/+nav_links.php');
    include_once('+topic_links.php');
?>
<div id='content'>
    <h3>The Constants and Globals of PHP</h3>

    Built in Constants

    <ul>
        <li>__LINE__ : <?=__LINE__?></li>

        <li>__FILE__ : <?=__FILE__?></li>

        <li>__DIR__ : <?=__DIR__?></li>

        <li>__FUNCTION__ : <?=__FUNCTION__?></li>

        <li>__CLASS__ : <?=__CLASS__?></li>

        <li>__TRAIT__ : <?=__TRAIT__?></li>

        <li>__METHOD__ : <?=__METHOD__?></li>

        <li>__NAMESPACE__ : <?=__NAMESPACE__?></li>
    </ul>
</div>
<div id='side_bar'>
</div>
<?php
    include_once('../includes/+basic_footer.php');    
?>