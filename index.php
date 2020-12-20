
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    form {
        width: 100%;
        text-align:center;

        margin:0 auto;
    }
    form input{
        width : 400px;
        height:20px;
    }
    button{
        height:20px ;
    }
</style>
<body>
    <form action = 'result.php' method = "post">
        <input type="text" name = 'search'>
        <button type="submit">Search</button>
    </form>
    

</body>
</html>

