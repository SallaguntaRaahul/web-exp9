<!DOCTYPE html>
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.8.2/angular.min.js"></script>
        <script>
            function check(){
                var username = document.getElementById('name').value;
                var http=new XMLHttpRequest();
                http.open('POST','user.php',true);
                http.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
                http.send('username='+username);
                http.onreadystatechange = function(){
                    if(http.readyState === 4 && http.status === 200){
                        document.getElementById('status').innerHTML = http.responseText;
                    }
                };
            }
        </script>
    </head>
    <body>
        <h1>New User Sign Up!!!</h1>
        <fieldset style="width:30%">
            Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" id="name" onkeyup="check()">
            <span id="status" style="display:inline-flex;"></span><br><br>
            Email:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" id="email"><br><br>
            Password:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="password" id="password"><br><br><!-- comment -->
            Re-Enter Password:&nbsp;&nbsp;&nbsp;<input type="password" id="password"><br><br>
            <input type="submit" value="Create Account"><br><br>
        </fieldset>
        
    </body>
</html>
