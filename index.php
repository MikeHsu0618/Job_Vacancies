<?php
require_once('conn.php');
   
?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>job board 職缺報報</title>
	<style>
	.container {
		width: 1024px;
		margin: 0 auto;
		text-align: center;
	}

	.job {
		border: 1px solid grey;
		padding: 10px;
		width: 600px;
		margin: 0 auto;
		text-align-last: left;
	}

	.job ~ .job { /* job 與 job 的距離 */
		margin-top: 20px;
	}
	</style>
</head>

<body>
	<div class="container">
        <h1> Job board 職缺報報</h1>
            <div class="jobs">
                <?php
            $sql = "SELECT * FROM jobs ORDER BY created_at DESC";
            $result = mysqli_query($conn,$sql);
            if ($result->num_rows>0) { // num_rows 會告訴有幾筆資料。
        while($row = $result->fetch_assoc()) {
        
        echo '<div class="job">';
        echo   '<h2 class="job__title">' . $row['title'] . '</h2>';
        echo   '<p class="job__desc">' . $row['description'] . '</p>';
        echo   '<p class="job__salary">薪水範圍' . $row['salary'] . '</p>';
        echo   '<a class="job__link" href="' . $row['link'] .
        '">更多資訊</a>';
        echo "</div>";
        }
    }
                ?>
            </div>
	</div>
</body>

</html>