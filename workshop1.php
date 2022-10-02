<html>
<head><meta charset="UTF-8"></head>
<body>
    <?php
    $pdo = new PDO("mysql:host=localhost;dbname=blueshop; charset=utf8","root","");
    $pdo -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    
    $stmt = $pdo->prepare("SELECT * FROM member");
     $stmt -> execute();
     ?>
     <?php while($row = $stmt->fetch()):?>
        ชื่อสมาชิก: <?=$row["name"]."<br>"?> 
        ที่อยู่: <?=$row["address"]."<br>"?>
        อีเมล์: <?=$row["email"]."<br>"?>
        <img src="img/<?=$row["username"]?>.jpg" width="100">
        <?="<hr>"?>
        <?php endwhile; ?>
        

</body>
</html>