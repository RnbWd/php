$('document').ready(function(){
        $( "#main" ).accordion({
          heightStyle: "content"
        });      
        <?php 
        if (isset($_SESSION['error']))
        {
          foreach($_SESSION['error'] as $key => $value) 
          {                                 
        ?>
          $(<?= "'#".$key."'" ?>).append(<?= $value ?>); 
        <?php  
          }
          unset($_SESSION['error']);
        }

        if (isset($_SESSION['message']))
        { 
         ?>
          $('p').replaceWith(<?= "'<p>".$_SESSION['message']."</p>'" ?>); 
        <?php
          unset($_SESSION['message']);
        } 
         ?>
      });