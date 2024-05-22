<head>
    <meta charset="utf-8" />
    <link rel="shortcut icon" href="Images/icon.png" />
    <link rel="stylesheet" href="zxSTYLE.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<html>

<script>
$(document).ready(function(){
    $("button").click(function(){
        $(".center").toggle();
    });
});
</script>

<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        $(document).ready(function () {
            $("button").click(function () {
                $("#test1").text($("#1").val());
            });
        });

        $(document).ready(function () {
            $("#search_results").slideUp();
            $("#search_button").click(function (e) {
                e.preventDefault();
                ajax_search();
            });


        });

        function ajax_search() {
            $("#search_results").show();
            var search_val = $("#search_term").val();

            $.post("Include/find.php", { search_term: search_val }, function (data) {
                if (data.length > 0) {
                    $("#search_results").html(data);
                }
            })
        } 
    </script>


</head>

<body>

    <p>Name: <input type="text" id="1" value="Mickey Mouse"></p>

    <button>Show Value</button>

    <div>
        <p id="test1">This is a paragraph.</p>
    </div>


    <form id="searchform" method="post">
        <div>
            <label for="search_term">Search name/phone</label>
            <input type="text" name="search_term" id="search_term" />
            <input type="submit" value="search" id="search_button" />
        </div>
    </form>
    <div id="search_results"></div>

</body>

</html>