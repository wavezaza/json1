<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <span id="textResult"> - </span>
    X<input type="text" id="x">
    Y<input type="text" id="y">
    <button id="btnAdd2" > GET </button>

    
</body>

<script>
    $(() => {
        $("#btnAdd2").click(() => {
            var x = $("#x").val();
            var y = $("#y").val();
            var url="http://cj-android-demon.herokuapp.com/json1.php"
            $.get(
                
                )
            });
        });
</script>
</html>
