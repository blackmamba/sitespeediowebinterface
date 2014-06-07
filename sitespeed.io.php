<!DOCTYPE html>
<html>
    <head>
        <title>welcome to eSpeedy portal</title>
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    </head>
    <body>
        
        
        <div class="container">
            <h1>Welcome to Sitespeed.io</h1>
            <form class="form-horizontal has-feedback" role="form">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="has-feedback">
                            
                            <input class="form-control" name="val" type="text" pattern="[0-9]*"  placeholder="please enter a number" required autofocus>
                            
                            <i class="fa fa-2x form-control-feedback"></i>
                            </input>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <button class="btn btn-lg btn-primary btn-block" type="submit">Convert</button>
                    </div>
                </div>
                
            </form>
            <?php
                echo '<pre>';
                // Outputs all the result of shellcommand "ls", and returns
                // the last output line into $last_line. Stores the return value
                // of the shell command in $retval.
                $last_line = system(escapeshellcmd('./257homebrew/bin/sitespeed.io'), $retval);
                // Printing additional info
                echo '
                </pre>
                            <hr />Return value: ' . $retval;                
            ?>
            
        </div>
        
    </body>
</html>