<?php
include "Include/header.php";
?>

<title>SQL</title>

<body>

<div class="row">
    <div class="column side"><br>
    </div>

    <div class="column middle">
        <div class="container">
            <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
                <div class="row">
                    <div class="col-25"><label>SQL Query</label></div>
                    <div class="col-75">
                    <textarea name="query" placeholder="Wrtie a SQL code to execute" style="height:100px"></textarea>
                    </div>
                </div>
                <div class="row">
                    <input type="submit" name="submit" value="Submit" />
                </div>
            </form>
        </div>

        
        
        <?php
            if(isset($_POST['submit'])){
                
            $sql = $_POST['query'];
            include "tableprint.php";
            printTable($sql, $conn);
        }


        ?>

<div class="column side"><br>
        <p>.</p>
    </div>




    </div>
</div>


</html>