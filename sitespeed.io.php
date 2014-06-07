<!DOCTYPE html>
<html>
    <head>
        <title>welcome to eSpeedy portal</title>
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="./css/main.css">
    </head>
    <body>
        
        
        <div class="container">
            <h1>Welcome to Sitespeed.io</h1>
            <form class="form-horizontal has-feedback" role="form">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="has-feedback">
                            
                            <input class="form-control" name="val" type="url"  placeholder="please enter a url" required autofocus>
                            
                            <i class="fa fa-2x form-control-feedback"></i>
                            </input>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <button class="btn btn-lg btn-primary btn-block" type="submit">Analyze!</button>
                    </div>
                </div>
                
            </form>
            <h2>Results of executing the command:</h2>
            <?php
                echo '<div class="pre"> <pre>';
                // Outputs all the result of shellcommand "ls", and returns
                // the last output line into $last_line. Stores the return value
                // of the shell command in $retval.
                $last_line = system(escapeshellcmd('./257sitespeedio/bin/sitespeed.io'), $retval);
                // Printing additional info
                echo '
                </pre></div>
                            <hr />Return value: ' . $retval;                
            ?>
            
        </div>
        
    </body>
</html>