<?php 
    include "inc/header.php";
     
?>
 <?php
            function __autoload($calss_name){
                echo $calss_name."<br>";
                include "inc/".$calss_name.".php";
            }
 ?>

    <div class="para">
        <?php
            class phpChild extends php{
                public function cms(){
                    echo "Child class constant and class name-> ".__CLASS__."<br>";
                    echo "Child class funtion and class name- > ".get_class($this)."<br>";
                }
                
                public function outMethod(){
                    parent::framework();
                }
           }
            
            $php = new phpChild;
            $php->framework();
            echo "<hr>";
            $php->cms();
            echo "<hr>";
            $php->outMethod();
            
        ?>
     </div>

<?php include "inc/footer.php"; ?>