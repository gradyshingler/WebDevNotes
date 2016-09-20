<?php 
    require_once('../core/config.php');
    require_once('../includes/+basic_header.php');
    
    include_once('+topic_links.php');
?>
        <div class="method_container">
            <h3>Methods</h3>
            <div class="method_block">
                <div class="method"><h4>document.getElementById('id_String')</h4></div>
                <div class="description"><p>Gets the current element based on an id</p></div>        
            </div>
            <div class="method_block">
                <div class="method"><h4>addEventListener(name_of_event, function)</h4></div>
                <div class="description"><p>Used by an element to add an event listener.</p></div>        
            </div>
            <div class="method_block">
                <div class="method"><h4>.preventDefault()</h4></div>
                <div class="description"><p>Keeps the event from doing what it normally would do.</p></div>        
            </div>
            <div class="method_block">
                <div class="method"><h4>console.log(message)</h4></div>
                <div class="description"><p>Logs a message to the browser console.</p></div>        
            </div>
        </div>
        
        <div class="property_container"> 
            <h3>Properties</h3>
            <div class="property_block">
                <div class="property">value</div>
            </div>
            <div class="property_block">
                <div class="property">checked</div>
            </div>
            <div class="property_block">
                <div class="property">className</div>
            </div>
            <div class="property_block">
                <div class="property">id</div>
            </div>
        </div>

<?php 
    include_once('/includes/+basic_footer.php');    
?>