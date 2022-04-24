<?php
    include 'scoreboardinteract.php';
    session_start(); 

    $host_name = 'db5006574384.hosting-data.io';
    $database = 'dbs5453727';
    $user_name = 'dbu1706119';
    $password = 'Redwagon12!';

    $connect = mysqli_connect($host_name, $user_name, $password, $database);
    $sql = "SELECT User, email, pin FROM thegame";
    $result = $connect->query($sql);
?>

<html>
<head>
    <meta charset="UTF-8">
    <title>scoreboard</title>
    <link rel="stylesheet" href="assets/stylesheets/scoreboardstyle.css">
</head>
<body>
    <div class="background-image", id="full-size"><span></span></div>
    <div class="menu">
        <div class="navbar">
            <img src="assets/images/logo.png" class="logo">
            <ul>
               <li><a href="index.html">Home</a></li>
               <li><a href="scoreboard.html">Scoreboard</a></li>
               <li><a href="rules.html">Rules</a></li>
               <li><a href="game.html">The Game</a></li>
               <li><a href="login.html">Login</a></li>
            </ul>
        </div>
    </div>    
    <div class="square">
        <div class="enclose">
            <div data-reactroot="" class="leaderboard">
                <div class="rider firstranked"><div class="index">1</div>
                    <div class="text">
                    <div class="name"><?php echo getName(1, 1);?></div>
                    <div class="score"><?php echo getScore(1, 1)?></div>
                    </div>
                </div>
                <div class="rider"><div class="index">2</div>
                    <div class="text">
                    <div class="name"><?php echo getName(2, 1);?></div>
                    <div class="score"><?php echo getScore(2, 1)?></div>
                    </div>
                </div>
                <div class="rider"><div class="index">3</div>
                    <div class="text">
                    <div class="name"><?php echo getName(3, 1);?></div>
                    <div class="score"><?php echo getScore(3, 1)?></div>
                    </div>
                </div>
                <div class="rider"><div class="index">4</div>
                    <div class="text">
                    <div class="name"><?php echo getName(4, 1);?></div>
                    <div class="score"><?php echo getScore(4, 1)?></div>
                    </div>
                </div>
                <div class="rider"><div class="index">5</div>
                    <div class="text">
                    <div class="name"><?php echo getName(5, 1);?></div>
                    <div class="score"><?php echo getScore(5, 1)?></div>
                    </div>
                </div>
                <div class="rider"><div class="index">6</div>
                    <div class="text">
                    <div class="name"><?php echo getName(6, 1);?></div>
                    <div class="score"><?php echo getScore(6, 1)?></div>
                    </div>
                </div>
                <div class="rider"><div class="index">7</div>
                    <div class="text">
                    <div class="name"><?php echo getName(7, 1);?></div>
                    <div class="score"><?php echo getScore(7, 1)?></div>
                    </div>
                </div>
                <div class="rider"><div class="index">8</div>
                    <div class="text">
                    <div class="name"><?php echo getName(8, 1);?></div>
                    <div class="score"><?php echo getScore(8, 1)?></div>
                    </div>
                </div>
                <div class="rider"><div class="index">9</div>
                    <div class="text">
                    <div class="name"><?php echo getName(9, 1);?></div>
                    <div class="score"><?php echo getScore(9, 1)?></div>
                    </div>
                </div>
                <div class="rider"><div class="index">10</div>
                    <div class="text">
                    <div class="name"><?php echo getName(10, 1);?></div>
                    <div class="score"><?php echo getScore(10, 1)?></div>
                    </div>
                </div>
                <div class="rider"><div class="index">11</div>
                    <div class="text">
                    <div class="name"><?php echo getName(11, 1);?></div>
                    <div class="score"><?php echo getScore(11, 1)?></div>
                    </div>
                </div>
                <div class="rider"><div class="index">12</div>
                    <div class="text">
                    <div class="name"><?php echo getName(12, 1);?></div>
                    <div class="score"><?php echo getScore(12, 1)?></div>
                    </div>
                </div>
                <div class="rider"><div class="index">13</div>
                    <div class="text">
                    <div class="name"><?php echo getName(13, 1);?></div>
                    <div class="score"><?php echo getScore(13, 1)?></div>
                    </div>
                </div>
                <div class="rider"><div class="index">14</div>
                    <div class="text">
                    <div class="name"><?php echo getName(14, 1);?></div>
                    <div class="score"><?php echo getScore(14, 1)?></div>
                    </div>
                </div>
                <div class="rider"><div class="index">15</div>
                    <div class="text">
                    <div class="name"><?php echo getName(15, 1);?></div>
                    <div class="score"><?php echo getScore(15, 1)?></div>
                    </div>
                </div>
                <div class="rider"><div class="index">16</div>
                    <div class="text">
                    <div class="name"><?php echo getName(16, 1);?></div>
                    <div class="score"><?php echo getScore(16, 1)?></div>
                    </div>
                </div>
                <div class="rider"><div class="index">17</div>
                    <div class="text">
                    <div class="name"><?php echo getName(17, 1);?></div>
                    <div class="score"><?php echo getScore(17, 1)?></div>
                    </div>
                </div>
                <div class="rider"><div class="index">18</div>
                    <div class="text">
                    <div class="name"><?php echo getName(18, 1);?></div>
                    <div class="score"><?php echo getScore(18, 1)?></div>
                    </div>
                </div>
                <div class="rider"><div class="index">19</div>
                    <div class="text">
                    <div class="name"><?php echo getName(19, 1);?></div>
                    <div class="score"><?php echo getScore(19, 1)?></div>
                    </div>
                </div>
                <div class="rider"><div class="index">20</div>
                    <div class="text">
                    <div class="name"><?php echo getName(20, 1);?></div>
                    <div class="score"><?php echo getScore(20, 1)?></div>
                    </div>
                </div>
                <div class="rider"><div class="index">21</div>
                    <div class="text">
                    <div class="name"><?php echo getName(21, 1);?></div>
                    <div class="score"><?php echo getScore(21, 1)?></div>
                    </div>
                </div>
                <div class="rider"><div class="index">22</div>
                    <div class="text">
                    <div class="name"><?php echo getName(22, 1);?></div>
                    <div class="score"><?php echo getScore(22, 1)?></div>
                    </div>
                </div>
                <div class="rider"><div class="index">23</div>
                    <div class="text">
                    <div class="name"><?php echo getName(23, 1);?></div>
                    <div class="score"><?php echo getScore(23, 1)?></div>
                    </div>
                </div>
                <div class="rider"><div class="index">24</div>
                    <div class="text">
                    <div class="name"><?php echo getName(24, 1);?></div>
                    <div class="score"><?php echo getScore(24, 1)?></div>
                    </div>
                </div>
                <div class="rider"><div class="index">25</div>
                    <div class="text">
                    <div class="name"><?php echo getName(25, 1);?></div>
                    <div class="score"><?php echo getScore(25, 1)?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>