<?php
    require_once(__DIR__.'/../core/config.php');
    require_once(__DIR__.'/../includes/+basic_header.php');

    include_once(__DIR__.'/+topic_links.php');
?>

<h3>Overview</h3>
<p>JavaScript enables a web developer change html on the fly.</p>

<h3>Debugging Tips</h3>

<p>To show a message in the console use: console.log("message")</p>

<h3>When not to use JS</h3>

<p>JS should not be used for</p>

<ul>
    <li>Anything dealing with hover or focus. This can usually be done with CSS.
        <ul>
            <li>Image Swaps</li>
            <li>Rollover Menus</li>
            <li>Tooltips</li>
            <li>etc...</li>
        </ul>
    </li>
    <li>Animations that can be done with CSS3</li>
    <li>HTML5 form controls should be used to get different elements in forms
        <ul>
            <li>Range Controls</li>
            <li>Sliders</li>
            <li>etc...</li>
        </ul>
    </li>
</ul>

<div class="topic">
    <h3>Built in Objects</h3>
    <ul>
        <li>document</li>
        <li>window</li>
    </ul>
    
</div>
        
<?php require_once('../includes/+basic_footer.php'); ?>
