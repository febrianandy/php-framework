<?php
function template_header(){
    return '<header>
                <nav>
                    <div class="nav-wrapper">
                        <a href="#!" class="brand-logo">Dashboard</a>
                        <ul class="right hide-on-med-and-down">
                            <li><a href="#home">Home</a></li>
                            <li><a href="#dashboard">Dashboard</a></li>
                            <li><a href="#settings">Settings</a></li>
                            <li><a href="#profile">Profile</a></li>
                            <li><a href="#logout">Logout</a></li>
                        </ul>
                    </div>
                </nav>
            </header>';
}

function template_sidebar(){
    return '<ul id="slide-out" class="sidenav">
                <li><div class="user-view">
                    <div class="background">
                        <img src="images/office.jpg">
                    </div>
                    <a href="#user"><img class="circle" src="images/yuna.jpg"></a>
                    <a href="#name"><span class="white-text name">John Doe</span></a>
                    <a href="#email"><span class="white-text email">jdandturk@gmail.com</span></a>
                </div></li>
                <li><a href="#home"><i class="material-icons">home</i>Home</a></li>
                <li><a href="#dashboard"><i class="material-icons">dashboard</i>Dashboard</a></li>
                <li><a href="#settings"><i class="material-icons">settings</i>Settings</a></li>
                <li><a href="#profile"><i class="material-icons">person</i>Profile</a></li>
                <li><a href="#logout"><i class="material-icons">exit_to_app</i>Logout</a></li>
            </ul>';
}

function template_footer(){
    return '<footer class="page-footer">
                <div class="container">
                    <div class="row">
                        <div class="col l6 s12">
                            <h5 class="white-text">Dashboard Footer</h5>
                            <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
                        </div>
                    </div>
                </div>
                <div class="footer-copyright">
                    <div class="container">
                        &copy; 2024 My Website
                    </div>
                </div>
            </footer>';
}

function get_template_html() {
    $header = template_header();
    $sidebar = template_sidebar();
    $footer = template_footer();
    $html = '<!doctype html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <meta http-equiv="X-UA-Compatible" content="ie=edge">
                <title>Dashboard</title>
                <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
                <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" media="screen,projection"/>
                <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
                <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
            </head>
            <body>
                ' . $header . '
                ' . $sidebar . '
                <main>
                    <div class="container">
                        
                    </div>
                </main>
                ' . $footer . '
            </body>
            </html>';
    echo $html;
}
