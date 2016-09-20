<?php
    require_once('core/config.php');
    require_once('includes/+basic_header.php');
    
    include_once('includes/+nav_links.php');
?>      
        <h2>Purpose</h2>
        
        <p>This web page is to designed to help formulate and organize useful an essential items dealing with web development. The site itself is to be used as a practice and sandbox to understand the various aspects of web development.</p>
        
        <pre>
            <?php
                print_r ($system);
            ?>
        </pre>
        
    </body>
</html>
