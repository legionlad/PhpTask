<html>
<link rel="stylesheet" href="public/css/bootstrap.min.css">
<link rel="stylesheet" href="public/css/font-awesome.min.css">
<link rel="stylesheet" href="public/css/main.css">
<link rel="stylesheet" href="public/css/animate.css">
<link rel="stylesheet" href="public/css/responsive.css">
<script src="public/js/vendor/modernizr-2.6.2.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
<script src="public/js/bootstrap.min.js"></script>
<script src="public/js/plugins.js"></script>
<script src="public/js/main.js"></script>
<script src="public/js/wow.min.js"></script>

<body>
<div class="container ">

<div class="row d-flex justify-content-center">
    <div class="col-md-4">
        <h2>
            <?=$product['title']?>
        </h2>
        <img class="img-responsive" style="height: 40%; widht:40%;"  src="<?=$product['image_path']?>">

        <span>
            <?=$transaction_final_message?>
        </span>

        <span>
            Booking Name : <?=$name?>
        </span>

        <p>
            Price : <?=$product['price']?>
        </p>

</div>

</div>

</div>




</body>
</html>