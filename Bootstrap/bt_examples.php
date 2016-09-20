<?php 
    require_once(__DIR__.'/../core/config.php');
    require_once(__DIR__.'/../includes/+basic_header.php');
    
    include_once(__DIR__. '/+topic_links.php');
?>
<div id='content'>
    <h3>Bootstrap Examples</h3>
    <!-- A general Drop Down
    ------------------------------ -->
    <h4>Dropdowns</h4>
    <div class="dropdown">
        <button id="dLabel" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Dropdown trigger
            <span class="caret"></span>
        </button>
        <ul class="dropdown-menu" aria-labelledby="dLabel">
            <li><a href="#">option 1</a></li>
            <li><a href="#">option 2</a></li>
            <li><a href="#">option 3</a></li>
        </ul>
    </div>

    
</div>
<?php 
    include_once(__DIR__.'/../includes/+basic_footer.php');
?>