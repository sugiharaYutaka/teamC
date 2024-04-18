<head>
    <link rel="stylesheet" href="css/header.css">
    <meta name="viewport" content="width=device-width,initial-scale=0.8">
</head>
<div id="hamberger">
    <nav>
        <ul>
            <h3>KOBE DENSHI</h3>
            <li><a href="home.php">HOME</a></li>
            <li><a href="mypage.php">PROFILE</a></li>
            <li><a href="QandA.php">Q & A</a></li>
            <li><a href="question.php">QUENTION</a></li>
            <li><a href="post.php">POST</a></li>
            <li><a href="article.php">ARTICLE</a></li>
        </ul>
        <button onclick="location.href='logout.php'">LOGOUT
        </button>
    </nav>
    <div class="toggle-btn">
        <span></span>
        <span></span>
        <span></span>
    </div>

    <div id="mask"></div>
</div>
<header>
    <div id="hamberger-area"></div>
    <a id="header" href="home.php">
        <h1>KOBE DENSHI</h1>
    </a>
    <button id="user" onclick="location.href='loginform.php'">LOGIN
    </button>
    <div id="menuarea"></div>
</header>
<script src="script/header.js"></script>