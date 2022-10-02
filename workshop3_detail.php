<head>
    <meta charset="UTF-8">
</head>
<body>
    <?php
    $pdo = new PDO("mysql:host=localhost;dbname=blueshop; charset=utf8","root","");
    $pdo -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    $stmt = $pdo -> prepare("SELECT * FROM member WHERE username=?");
    $stmt -> bindParam(1, $_GET["username"]);
    $stmt -> execute();
    ?>
    <?php $row = $stmt->fetch()?>
        <img src="img/<?=$row["username"]?>.jpg" width="100"><br>
                ชื่อสมาชิก: <?=$row["name"]."<br>"?> 
                ที่อยู่: <?=$row["address"]."<br>"?>
                อีเมล์: <?=$row["email"]."<br>"?>
                <?="<hr>"?>
         

</body>
</html>


