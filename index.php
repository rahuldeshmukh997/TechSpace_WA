<?php
    
    include_once 'header.php'

?>   
      
        <?php

        if(isset($_SESSION["useruid"])){

            echo "<p>Hello " . $_SESSION["useruid"] . "</p>";
                
        }
        ?>    

        <div class="row">
            <div class="news-1">
                <rssapp-wall id="VKfbIdtm7evBvq80"></rssapp-wall><script src="https://widget.rss.app/v1/wall.js" type="text/javascript" async></script>
            </div>
        </div>   
        <div class="row"> 
            <div class="news-2">
                <rssapp-wall id="jvX3M63UiWHhtZwz"></rssapp-wall><script src="https://widget.rss.app/v1/wall.js" type="text/javascript" async></script>
            </div>
        </div>


<?php
    include_once 'footer.php'
?>