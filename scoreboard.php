<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Scoreboard</title>
    <link rel="stylesheet" href="assets/stylesheets/scoreboardstyle.css">
</head>
<body>
    <div class="background-image", id="full-size"><span></span></div>
    <div class="menu">
        <div class="navbar">
            <img src="assets/images/logo.png" class="logo">
            <ul>
               <li><a href="index.html">Home</a></li>
               <li><a href="scoreboard.php">Scoreboard</a></li>
               <li><a href="rules.html">Rules</a></li>
               <li><a href="thegame.php">The Game</a></li>
               <li><a href="login.html">Login</a></li>
            </ul>
        </div>
    </div>

    <?php
    include 'scoreboardinteract.php';
    
    $conn = OpenCon();
    echo "Connected Successfully";
    ?>
    
    <div class="square">
        <div class="enclose">
            <div data-reactroot="" class="leaderboard">
                <div class="rider firstranked"><div class="index">1</div>
                    <div class="text">
                    <div class="name"><?php echo getName(1, 1);?></div>
                    <div class="score"><?php echo getScore(1, 1);?></div>
                    </div>
                </div>
                <div class="rider"><div class="index">2</div>
                    <div class="text">
                    <div class="name"><?php echo getName(2, 1);?></div>
                    <div class="score"><?php echo getScore(2, 1);?></div>
                    </div>
                </div>
                <div class="rider"><div class="index">3</div>
                    <div class="text">
                    <div class="name"><?php echo getName(3, 1);?></div>
                    <div class="score"><?php echo getScore(3, 1);?></div>
                    </div>
                </div>
                <div class="rider"><div class="index">4</div>
                    <div class="text">
                    <div class="name"><?php echo getName(4, 1);?></div>
                    <div class="score"><?php echo getScore(4, 1);?></div>
                    </div>
                </div>
                <div class="rider"><div class="index">5</div>
                    <div class="text">
                    <div class="name"><?php echo getName(5, 1);?></div>
                    <div class="score"><?php echo getScore(5, 1);?></div>
                    </div>
                </div>
                <div class="rider"><div class="index">6</div>
                    <div class="text">
                    <div class="name"><?php echo getName(6, 1);?></div>
                    <div class="score"><?php echo getScore(6, 1);?></div>
                    </div>
                </div>
                <div class="rider"><div class="index">7</div>
                    <div class="text">
                    <div class="name"><?php echo getName(7, 1);?></div>
                    <div class="score"><?php echo getScore(7, 1);?></div>
                    </div>
                </div>
                <div class="rider"><div class="index">8</div>
                    <div class="text">
                    <div class="name"><?php echo getName(8, 1);?></div>
                    <div class="score"><?php echo getScore(8, 1);?></div>
                    </div>
                </div>
                <div class="rider"><div class="index">9</div>
                    <div class="text">
                    <div class="name"><?php echo getName(9, 1);?></div>
                    <div class="score"><?php echo getScore(9, 1);?></div>
                    </div>
                </div>
                <div class="rider"><div class="index">10</div>
                    <div class="text">
                    <div class="name"><?php echo getName(10, 1);?></div>
                    <div class="score"><?php echo getScore(10, 1);?></div>
                    </div>
                </div>
                <div class="rider"><div class="index">11</div>
                    <div class="text">
                    <div class="name"><?php echo getName(11, 1);?></div>
                    <div class="score"><?php echo getScore(11, 1);?></div>
                    </div>
                </div>
                <div class="rider"><div class="index">12</div>
                    <div class="text">
                    <div class="name"><?php echo getName(12, 1);?></div>
                    <div class="score"><?php echo getScore(12, 1);?></div>
                    </div>
                </div>
                <div class="rider"><div class="index">13</div>
                    <div class="text">
                    <div class="name"><?php echo getName(13, 1);?></div>
                    <div class="score"><?php echo getScore(13, 1);?></div>
                    </div>
                </div>
                <div class="rider"><div class="index">14</div>
                    <div class="text">
                    <div class="name"><?php echo getName(14, 1);?></div>
                    <div class="score"><?php echo getScore(14, 1);?></div>
                    </div>
                </div>
                <div class="rider"><div class="index">15</div>
                    <div class="text">
                    <div class="name"><?php echo getName(15, 1);?></div>
                    <div class="score"><?php echo getScore(15, 1);?></div>
                    </div>
                </div>
                <div class="rider"><div class="index">16</div>
                    <div class="text">
                    <div class="name"><?php echo getName(16, 1);?></div>
                    <div class="score"><?php echo getScore(16, 1);?></div>
                    </div>
                </div>
                <div class="rider"><div class="index">17</div>
                    <div class="text">
                    <div class="name"><?php echo getName(17, 1);?></div>
                    <div class="score"><?php echo getScore(17, 1);?></div>
                    </div>
                </div>
                <div class="rider"><div class="index">18</div>
                    <div class="text">
                    <div class="name"><?php echo getName(18, 1);?></div>
                    <div class="score"><?php echo getScore(18, 1);?></div>
                    </div>
                </div>
                <div class="rider"><div class="index">19</div>
                    <div class="text">
                    <div class="name"><?php echo getName(19, 1);?></div>
                    <div class="score"><?php echo getScore(19, 1);?></div>
                    </div>
                </div>
                <div class="rider"><div class="index">20</div>
                    <div class="text">
                    <div class="name"><?php echo getName(20, 1);?></div>
                    <div class="score"><?php echo getScore(20, 1);?></div>
                    </div>
                </div>
                <div class="rider"><div class="index">21</div>
                    <div class="text">
                    <div class="name"><?php echo getName(21, 1);?></div>
                    <div class="score"><?php echo getScore(21, 1);?></div>
                    </div>
                </div>
                <div class="rider"><div class="index">22</div>
                    <div class="text">
                    <div class="name"><?php echo getName(22, 1);?></div>
                    <div class="score"><?php echo getScore(22, 1);?></div>
                    </div>
                </div>
                <div class="rider"><div class="index">23</div>
                    <div class="text">
                    <div class="name"><?php echo getName(23, 1);?></div>
                    <div class="score"><?php echo getScore(23, 1);?></div>
                    </div>
                </div>
                <div class="rider"><div class="index">24</div>
                    <div class="text">
                    <div class="name"><?php echo getName(24, 1);?></div>
                    <div class="score"><?php echo getScore(24, 1);?></div>
                    </div>
                </div>
                <div class="rider"><div class="index">25</div>
                    <div class="text">
                    <div class="name"><?php echo getName(25, 1);?></div>
                    <div class="score"><?php echo getScore(25, 1);?></div>
                    </div>
                </div>
                <div class="rider"><div class="index">26</div>
                    <div class="text">
                    <div class="name"><?php echo getName(26, 1);?></div>
                    <div class="score"><?php echo getScore(26, 1);?></div>
                    </div>
                </div>
                <div class="rider"><div class="index">27</div>
                    <div class="text">
                    <div class="name"><?php echo getName(27, 1);?></div>
                    <div class="score"><?php echo getScore(27, 1);?></div>
                    </div>
                </div>
                <div class="rider"><div class="index">28</div>
                    <div class="text">
                    <div class="name"><?php echo getName(28, 1);?></div>
                    <div class="score"><?php echo getScore(28, 1);?></div>
                    </div>
                </div>
                <div class="rider"><div class="index">29</div>
                    <div class="text">
                    <div class="name"><?php echo getName(29, 1);?></div>
                    <div class="score"><?php echo getScore(29, 1);?></div>
                    </div>
                </div>
                <div class="rider"><div class="index">30</div>
                    <div class="text">
                    <div class="name"><?php echo getName(30, 1);?></div>
                    <div class="score"><?php echo getScore(30, 1);?></div>
                    </div>
                </div>
                <div class="rider"><div class="index">31</div>
                    <div class="text">
                    <div class="name"><?php echo getName(31, 1);?></div>
                    <div class="score"><?php echo getScore(31, 1);?></div>
                    </div>
                </div>
                <div class="rider"><div class="index">32</div>
                    <div class="text">
                    <div class="name"><?php echo getName(32, 1);?></div>
                    <div class="score"><?php echo getScore(32, 1);?></div>
                    </div>
                </div>
                <div class="rider"><div class="index">33</div>
                    <div class="text">
                    <div class="name"><?php echo getName(33, 1);?></div>
                    <div class="score"><?php echo getScore(33, 1);?></div>
                    </div>
                </div>
                <div class="rider"><div class="index">34</div>
                    <div class="text">
                    <div class="name"><?php echo getName(34, 1);?></div>
                    <div class="score"><?php echo getScore(34, 1);?></div>
                    </div>
                </div>
                <div class="rider"><div class="index">35</div>
                    <div class="text">
                    <div class="name"><?php echo getName(35, 1);?></div>
                    <div class="score"><?php echo getScore(35, 1);?></div>
                    </div>
                </div>
                <div class="rider"><div class="index">36</div>
                    <div class="text">
                    <div class="name"><?php echo getName(36, 1);?></div>
                    <div class="score"><?php echo getScore(36, 1);?></div>
                    </div>
                </div>
                <div class="rider"><div class="index">37</div>
                    <div class="text">
                    <div class="name"><?php echo getName(37, 1);?></div>
                    <div class="score"><?php echo getScore(37, 1);?></div>
                    </div>
                </div>
                <div class="rider"><div class="index">38</div>
                    <div class="text">
                    <div class="name"><?php echo getName(38, 1);?></div>
                    <div class="score"><?php echo getScore(38, 1);?></div>
                    </div>
                </div>
                <div class="rider"><div class="index">39</div>
                    <div class="text">
                    <div class="name"><?php echo getName(39, 1);?></div>
                    <div class="score"><?php echo getScore(39, 1);?></div>
                    </div>
                </div>
                <div class="rider"><div class="index">40</div>
                    <div class="text">
                    <div class="name"><?php echo getName(40, 1);?></div>
                    <div class="score"><?php echo getScore(40, 1);?></div>
                    </div>
                </div>
                <div class="rider"><div class="index">41</div>
                    <div class="text">
                    <div class="name"><?php echo getName(41, 1);?></div>
                    <div class="score"><?php echo getScore(41, 1);?></div>
                    </div>
                </div>
                <div class="rider"><div class="index">42</div>
                    <div class="text">
                    <div class="name"><?php echo getName(42, 1);?></div>
                    <div class="score"><?php echo getScore(42, 1);?></div>
                    </div>
                </div>
                <div class="rider"><div class="index">43</div>
                    <div class="text">
                    <div class="name"><?php echo getName(43, 1);?></div>
                    <div class="score"><?php echo getScore(43, 1);?></div>
                    </div>
                </div>
                <div class="rider"><div class="index">44</div>
                    <div class="text">
                    <div class="name"><?php echo getName(44, 1);?></div>
                    <div class="score"><?php echo getScore(44, 1);?></div>
                    </div>
                </div>
                <div class="rider"><div class="index">45</div>
                    <div class="text">
                    <div class="name"><?php echo getName(45, 1);?></div>
                    <div class="score"><?php echo getScore(45, 1);?></div>
                    </div>
                </div>
                <div class="rider"><div class="index">46</div>
                    <div class="text">
                    <div class="name"><?php echo getName(46, 1);?></div>
                    <div class="score"><?php echo getScore(46, 1);?></div>
                    </div>
                </div>
                <div class="rider"><div class="index">47</div>
                    <div class="text">
                    <div class="name"><?php echo getName(47, 1);?></div>
                    <div class="score"><?php echo getScore(47, 1);?></div>
                    </div>
                </div>
                <div class="rider"><div class="index">48</div>
                    <div class="text">
                    <div class="name"><?php echo getName(48, 1);?></div>
                    <div class="score"><?php echo getScore(48, 1);?></div>
                    </div>
                </div>
                <div class="rider"><div class="index">49</div>
                    <div class="text">
                    <div class="name"><?php echo getName(49, 1);?></div>
                    <div class="score"><?php echo getScore(49, 1);?></div>
                    </div>
                </div>
                <div class="rider"><div class="index">50</div>
                    <div class="text">
                    <div class="name"><?php echo getName(50, 1);?></div>
                    <div class="score"><?php echo getScore(50, 1); CloseCon($conn);?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>