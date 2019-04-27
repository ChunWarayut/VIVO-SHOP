<center>
    <h1>หน้าหลัก</h1>
</center>
<div class="float-right">
    <form class="form-inline">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
</div>
<?PHP 
    for ($i=0; $i < count($product); $i++) { 
    ?>
    <div class="card" style="width:20rem;margin:20px 0 24px 0">
        <img class="card-img-top" src="./imgs/products/<?PHP echo $product[$i]['Pro_Picture']; ?>" alt="image" style="width:100%">
        <div class="card-body">
            <h4 class="card-title">  ชื่อสินค้า <?PHP echo $product[$i]['Pro_Name']; ?></h4>
            <p class="card-text"> ราคาสินค้า <?PHP echo $product[$i]['Pro_Price']; ?> บาท</p> 
        </div>
    </div>
<?PHP
    }
    ?>