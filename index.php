<?php //include('header.php'); ?>
<html>
    <head>
        <link rel="stylesheet" href="style.css" type="text/css" media="screen" />
        <title>Academic Calender</title>
    </head>
    <body>
        <div id="container_demo">
            <div id="wrapper">
                <h1>Academic Calender</h1>
                <p class="change_link">This Application uses Google Calender account activation.<br/>Click the button below to enter the application using your Google account.</p>
                <p class="field">
                    <button name="submit" class="modern" onclick="window.location='https://accounts.google.com/o/oauth2/auth?client_id=962046158031-cqhd83bhf2n2j1qoiont15s4cs38u242.apps.googleusercontent.com&response_type=token&redirect_uri=http%3A%2F%2Flocalhost%3A80%2Findex.php&scope=https%3A%2F%2Fwww.googleapis.com%2Fauth%2Fuserinfo.email+https%3A%2F%2Fwww.googleapis.com%2Fauth%2Fuserinfo.profile'">Login using Google Account</i></button>
                </p>
                <script>
                    var query = location.href.split('#');
                    if(query[1] == "error=access_denied")
                    {
                        document.writeln("<p class='alert'>!!!ALERT!!!!<br/>You have denied acces to the Application.<br/>!!!ALERT!!!</p>");
                    }
                </script>
    <?php //include('sidebar.php'); ?>
    </body>
</html>

<? //include('footer.php'); ?>