<?php
session_start();
?>
<!DOCTYPE html>
<html>




    <head>

        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" type="text/css" href="CSS/homecss.css">
        <script src="JS/js.js"></script>
        <meta charset="UTF-8">
        <meta name="description" content="Stagair local spot">
        <meta name="keywords" content="Technolab, Stagairs, Workshops">
        <meta name="author" content="Ravi Breugom, Alexander Wallaard, Natascha van Baal">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="refresh" content="60">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>Technolab Stagairspot</title>
        <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
        <html xmlns="http://www.w3.org/1999/xhtml">
        

        <link rel="stylesheet" href="style.css" type="text/css" />

        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
        <script type="text/javascript" src="chat.js"></script>
        <script type="text/javascript">



            // ask user for name with popup prompt


            // default name is 'Guest'
            if (!name || name === ' ') {
                name = "Guest";
            }

            // strip tags
            name = name.replace(/(<([^>]+)>)/ig,"");

            // display name on page
            $("#name-area").html("You are: <span>" + name + "</span>");

            // kick off chat
            var chat =  new Chat();
            $(function() {

                chat.getState();

                // watch textarea for key presses
                $("#sendie").keydown(function(event) {

                    var key = event.which;

                    //all keys including return.
                    if (key >= 33) {

                        var maxLength = $(this).attr("maxlength");
                        var length = this.value.length;

                        // don't allow new content if length is maxed out
                        if (length >= maxLength) {
                            event.preventDefault();
                        }
                    }
                });
                // watch textarea for release of key press
                $('#sendie').keyup(function(e) {

                    if (e.keyCode == 13) {

                        var text = $(this).val();
                        var maxLength = $(this).attr("maxlength");
                        var length = text.length;

                        // send
                        if (length <= maxLength + 1) {

                            chat.send(text, name);
                            $(this).val("");

                        } else {

                            $(this).val(text.substring(0, maxLength));

                        }


                    }
                });

            });
        </script>

    </head>

    <body onload="setInterval('chat.update()', 1000)">

    <header>
        <div class="custom=padding">
            <nav>
                <a href="beveiligd.php"><img class="logo" src="img/WhatsApp%20Image%202018-09-20%20at%2010.44.00.jpeg" alt="Logo"></a>
                <ul class="menu-area">
                    <li><a href="Workshops/Workshop.php">Workshops</a></li>
                    <li><a href="agenda/agenda.php">Agenda</a></li>
                    <li><a href="leerdoelen/leerdoelen.php">Leerdoelen</a></li>
                    <li><a href="Contact/Contact.php">Contact</a></li>
                    <div class="dropdown">
                        <li><a class="dropbtn">&#9881;
                                <i class="fa fa-caret-down"></i>
                            </a></li>
                        <div class="dropdown-content">
                            <a href='uitloggen.php'>Uitloggen</a>
                            <a><?php

                                if($_SESSION['ingelogd'] == "ja"){
                                    echo $_SESSION['username'];

                                }
                                else{
                                    header("Location: login_form.php");
                                }

                                ?></a>
                        </div>
                    </div>
        </div>

    </header>
    <div id="welkomblok">
        <h1>Welkom <?php echo $_SESSION['username'];?></h1>
    </div>



    <div id="page-wrap">

        <h2>Technochat</h2>


        <p id="name-area"></p>

        <div id="chat-wrap"><div id="chat-area"></div></div>

        <form id="send-message-area">
            <p>Your message: </p>
            <textarea id="sendie" maxlength = '100' ></textarea>
        </form>

    </div>

    </body>

    </html>