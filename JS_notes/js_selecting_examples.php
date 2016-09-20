<?php 
    require_once('../core/config.php');
    require_once('../includes/+basic_header.php');
    
    include_once('+topic_links.php');
?>
        <h3>Examples of Selecting one of many choices</h3>
        
        <h4>changing inner content</h4>
        
        <ul>
            <li><a href="#e1.1" onclick="changeInner('choice','You have chosen one')">Choice 1</a></li>
            <li><a href="#e1.2" onclick="changeInner('choice','You have chosen two')">Choice 2</a></li>
        </ul>
        
        <p id="choice">choice 1 or 2</p>
        
        <div class="js_example1_container">
            <h4>Image Selector</h4>
            <div class="featured_image">
                <img id="featured_image" src="/includes/images/letter_A.png" alt="image of the letter A" height="43" width="50">
            </div>
            <div class="image_choices">
                <div id="image_choice_1" class="selected">
                    <a href="#e2.1" onclick="JS_changeImage('1')">
                        <img id="example_img_1" src="/includes/images/letter_A.png" alt="image of the letter A" height="43" width="50">
                    </a>
                </div>
                <div id="image_choice_2">
                    <a href="#e2.2" onclick="JS_changeImage('2')">
                        <img id="example_img_2" src="/includes/images/letter_B.png" alt="image of the letter B" height="43" width="50">
                    </a>
                </div>
                <div id="image_choice_3">
                    <a href="#e2.3" onclick="JS_changeImage('3')">
                        <img id="example_img_3" src="/includes/images/letter_C.png" alt="image of the letter C" height="43" width="50">
                    </a>
                </div>
            </div>
        </div>
        

<?php 
    include_once('../includes/+basic_footer.php');    
?>