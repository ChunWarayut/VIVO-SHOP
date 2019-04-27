<?PHP
session_start();  
	if(!isset($_REQUEST['content'])){
		$_REQUEST['content'] = "home";
	}
	$content = $_REQUEST['content']; 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>VIVO SHOP</title>

    <!-- Bootstrap CSS 4.3 -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>

<body>


    <div class="container">

        <header class="blog-header py-3">
            <img src="./imgs/banner.jpg" width="100%" height="" alt="Responsive image">
        </header>


        <div class="nav-scroller py-1 mb-2">
            <nav class="nav d-flex justify-content-between">
                <a class="p-2 text-muted" href="#"></a>
                <a class="p-2 text-muted" href="index.php">หน้าหลัก</a>
                <a class="p-2 text-muted" href="#">ข้อมูลสมาชิก</a>
                <a class="p-2 text-muted" href="index.php?content=product_type">รายการสินค้า</a>
                <a class="p-2 text-muted" href="#">การชำระเงิน</a>
                <a class="p-2 text-muted" href="#">รายงาน</a>
                <a class="p-2 text-muted" href="#"></a>
            </nav>
        </div>

        <div>
            <?php require_once("views/body.inc.php"); ?>
        </div>

    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>

<style>
@import url('https://fonts.googleapis.com/css?family=Kanit');

body {
    background-color: initial;
    font-family: 'Kanit', sans-serif;
    /* text-shadow: 4px 4px 4px #aaa; */
}
</style>