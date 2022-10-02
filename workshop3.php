<head>
    <meta charset="UTF-8">
</head>
<body>
    <?php
    $pdo = new PDO("mysql:host=localhost;dbname=blueshop; charset=utf8","root","");
    $pdo -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    $stmt = $pdo -> prepare("SELECT * FROM member");
    $stmt -> execute();
    ?>
    <?php while($row = $stmt->fetch()):?>
        <a href="detail.php?username=<?=$row["username"]?>">
        <img src="img/<?=$row["username"]?>.jpg" width="100">
    </a><br>
            ชื่อสมาชิก: <?=$row["name"]."<br>"?> 
            <?="<hr>"?>
     <?php endwhile; ?>

</body>
</html>

