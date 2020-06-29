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
        <a href="admin.php">回到管理頁</a>
            <form action="handle_add.php" method="post">
    <div>職缺名稱：<input type="text" name="title" /></div>
    <div>職缺敘述：<textarea name="description" id="description" cols="18" rows="10"></textarea></div>
    <div>職缺薪水：<input type="text" name="salary" /></div>
    <div>職缺連結：<input type="text" name="link" /></div>
    <input type="submit" value="送出" />
    </form>
	</div>
</body>

</html>


<?php

?>