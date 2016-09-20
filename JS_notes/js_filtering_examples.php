<?php 
    require_once('../core/config.php');
    require_once('../includes/+basic_header.php');
    
    include_once('+topic_links.php');
?>
<div id='content'>
    <h3>Filtering objects</h3>

    <div class="filter_example_1">
        <h4>Select Filter</h4>
        <ul id="filter_choices">
            <li id="all" class="selected"><a href="#all" onclick='toggleFilter("all")'>All</a></li>
            <li id="animal"><a href='#animals' onclick='toggleFilter("animal")'>Animals</a></li>
            <li id="food"><a href='#food' onclick='toggleFilter("food")'>Food</a></li>
            <li id="letter3"><a href='#3letter' onclick='toggleFilter("letter3")'>3 Letter Word</a></li>
            <li id="letter5"><a href='#5letter' onclick='toggleFilter("letter5")'>5 Letter Word</a></li>
        </ul>

        <h5 id="filter_current_display_title">Currently Showing All</h5>

        <div id="filter_display_objects">
            <ul id="display_list">
                <li class='selected animal letter3'>
                    <div class="display_block">
                        <p>Cow</p>
                    </div>
                </li>
                <li class='selected food letter5'>
                    <div class="display_block">
                        <p>Bread</p>
                    </div>
                </li>
                <li class='selected food letter5'>
                    <div class="display_block">
                        <p>Pizza</p>
                    </div>
                </li>
                <li class='selected animal letter3'>
                    <div class="display_block">
                        <p>Dog</p>
                    </div>
                </li>
                <li class='selected food'>
                    <div class="display_block">
                        <p>Macaroni & Cheese</p>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
<?php 
    include_once('../includes/+basic_footer.php');    
?>