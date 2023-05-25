<html>
    <head></head>
    <body></body>
    <?php 
    if(DB::connection()->getPdo()){
        echo "DB Connected.....";
        echo DB::connection()->getDatabaseName();

    }
    
    
    ?>
    
    
    
    
    </html>