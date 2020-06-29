<!-- choose category for topics!! -->
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>GoProToUniversity</title>
    <link rel="stylesheet" href="css/style.css" />
</head>
<body>
    <div id="header">
        <a id="logo" href="index.html"><img src="image/logo.png" alt="logo" /></a>
        <div id="webName">
            <h2>GOPRO TO UNIVERSITY</h2>
        </div>
    </div>
    <div id="menu">
        <ul id="main_menu">
            <li> <a href="index.html">Trang chủ</a> </li>
            <li> <a href="weeklyTest.php">Đề thi tuần</a></li>
            <li class="active"> <a href="testExams.html">Thi thử</a></li>
            <li> <a href="schedule.php">Thời khóa biểu</a></li>
            <li> <a href="document.php">Tài liệu</a></li>
            <li> <a href="news.php">Tin tức</a></li>
            <li> <a href="topic.php">Diễn đàn</a></li>
        </ul>

    </div>
    <h3 id="selectcat_name">HỌC SINH VUI LÒNG CHỌN MÔN HỌC ĐỂ THI THỬ</h3>
    <div id="listObject">
        <div class="sbox" id="math">
            <a href="view_listtopic.php?cat_id=1"><img src="./image/toan.jpg" /></a>
            <p>Toán</p>
        </div>
        <div class="sbox" id="chemistry">
            <a href="view_listtopic.php?cat_name=Hóa"><img src="./image/hoa.jpg" /></a>
            <p>Hóa</p>
        </div>
        <div class="sbox" id="english">
            <a href="view_listtopic.php?cat_name=Anh"><img src="./image/anh.jpg" /></a>
            <p>Tiếng Anh</p>
        </div>
        <div class="sbox" id="physic">
            <a href="view_listtopic.php?cat_name=Lý"><img src="./image/ly.jpg" /></a>
            <p>Lý</p>
        </div>
        <div class="sbox" id="biology">
            <a href="view_listtopic.php?cat_name=Sinh"><img src="./image/sinh.jpg" /></a>
            <p>Sinh</p>
        </div>
        <div class="sbox" id="history">
            <a href="view_listtopic.php?cat_name=Sử"><img src="./image/su.jpg" /></a>
            <p>Lịch Sử</p>
        </div>
        <div class="sbox" id="geography">
            <a href="view_listtopic.php?cat_name=Địa"><img src="./image/dia.jpg" /></a>
            <p>Địa lý</p>
        </div>
        <div class="sbox" id="law">
            <a href="view_listtopic.php?cat_name=GDCD"><img src="./image/gdcd.jpg" /></a>
            <p>GDCD</p>
        </div>
      
    </div>
</body>