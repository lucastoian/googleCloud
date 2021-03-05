<?php
$dsn = 'pgsql:host=34.65.31.3 port=5432 dbname=postgres user=postgres password=Azorel12';
$db = new PDO($dsn);
?>
<html>
    <head>
        <title>Title</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/uikit.min.css" />
        <script src="js/uikit.min.js"></script>
        <script src="js/uikit-icons.min.js"></script>
        
    </head>
    <body>
    <?php
echo 'PHP version: ' . phpversion();
?>
    <div class="uk-background-fixed  " style="background-image: url(img/background.jpg);">
        <nav class="uk-navbar-container uk-margin " uk-navbar>
            <div class="uk-navbar-left ">
        
                <a class="uk-navbar-item uk-logo" href="#">Logo</a>
        
                <ul class="uk-navbar-nav">
                    <li>
                        <a href="#">
                            <span class="uk-icon uk-margin-small-right" uk-icon="icon: star"></span>
                            Features
                        </a>
                    </li>
                </ul>
        
                <div class="uk-navbar-item">
                    <div>Some <a href="#">Link</a></div>
                </div>
        
                <div class="uk-navbar-item">
                    <form action="javascript:void(0)">
                        <input class="uk-input uk-form-width-small" type="text" placeholder="Input">
                        <button class="uk-button uk-button-default">Button</button>
                    </form>
                </div>
        
            </div>
        </nav>

        

            <div class="uk-child-width-1-1 uk-child-width-1-3@l uk-text-center " uk-grid>

                            <?php 
                
               
                
                
                $sql = "SELECT G.nome, G.img
                        FROM game AS G;";

               

                foreach($db->query($sql) as $g){ ?>
                    <div>
                    <div class="uk-card uk-card-hover uk-card-secondary">
                        
                            <div class="uk-card-title"><h1 class = "uk-text-bold"><?php print($g['nome']) ?></h1></div>
                            <div calss = "uk-card-body">  <div class="uk-background-cover uk-height-medium uk-panel uk-flex uk-flex-center uk-flex-middle" style="background-image: url(<?php print($g['img']) ?>);"></div>  </div>
                            <div class = "uk-card-footer"><span class="uk-label-success uk-padding-small">BEST PRICE   </span><span class="uk-label-warning uk-padding-small">20.30$</span></div>
                    </div>
                    
                    </div>
                    <?php
                }?>


            <div>
        

           



        </div>
        <?php
//close_pg_connection($db);
        ?>
       
        
    </body>
</html>

