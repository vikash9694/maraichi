
<?php
include("code/get-form-list.php");
while($row=$menuQuery->fetch_assoc()){
// $sql = $row->fetch_assoc();



?>

<section class="hero" style="background-image: url('images/<?php echo  $row['section1-image']; ?>');>">
    <div class="container">
        <div class="text-box">
            <h1> <?php echo  $row['section1-heading']; ?></h1>
            <p><?php echo  $row['section1-subheading']; ?></p>
            <button class="btn">order now</button>
        </div>
    </div>
</section>



<section class="our-menu">
    <div class="container">
        <div class="menu-box">
            <h2><?php echo  $row['section2-heading']; ?></h2>
            <p><?php echo  $row['section2-subheading']; ?></p>
            <button class="btn">see menu</button>
        </div>
    </div>
</section>

<div class="menu-img">
    <img src="images/<?php echo  $row['section3-image'];   ?>" alt="">
</div>



<section class="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="img-box">
                    <img src="images/<?php echo  $row['section4-image']; ?>" alt="">
                </div>
            </div>
            <div class="col-lg-6 col-md-6 d-flex align-items-center">
                <div class="text-box">
                    <h2><?php echo  $row['section4-heading']; ?></h2>
                    <p><?php echo  $row['section4-subheading']; ?></p>
                    <button class="btn">Tell me more</button>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="discount">
    <div class="container position-relative">
        <div class="row">
            <div class="col-lg-2 col-md-3 d-flex">
                <div class="text-box">
                    <h1><?php echo  $row['section5-discount-code']; ?></h1>
                    <h3>discount</h3>
                    <h2>on tacos!</h2>
                </div>
            </div>
            <div class="col-lg-10 col-md-9">
                <div class="img-box">
                    <img src="images/<?php echo  $row['section5-image']; ?>"  alt="">
                </div>
            </div>
        </div>
    </div>
</section>


<section class="about offer">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 order-lg-2 order-md-2">
                <div class="img-box">
                    <img src="images/<?php echo  $row['section6-image']; ?>" alt="">
                </div>
            </div>
            <div class="col-lg-6 col-md-6 d-flex align-items-center order-lg-1 order-md-1">
                <div class="text-box">
                    <h2><?php echo  $row['section6-heading']; ?> </h2>
                    <p><?php echo  $row['section6-subheading']; ?> </p>
                    <button class="btn">see offer</button>
                </div>
            </div>


        </div>
    </div>
</section>



<section class="marichi" style="background-image: url('images/<?php echo $row['section7-image'] ?>')">
    <div class="container">
        <div class="marichi-box">
            <div class="img-box">
                <img src="images/<?php echo  $row['section7-logo']; ?>" alt="">
            </div>
            <div class="text-box">
                <h3><?php echo  $row['section7-heading']; ?></h3>
                <h4><?php echo  $row['section7-subheading']; ?></h4>
            </div>
        </div>
    </div>
</section>


<section class="our-menu form">
    <div class="container">
        <div class="menu-box">
            <h2><?php echo  $row['section-new']; ?></h2>
            <p><?php echo  $row['section-subnew']; ?></p>

            <form>
                <input type="email" placeholder="Your email">
                <button class="btn">Subscribe</button>
            </form>
        </div>
    </div>
</section>


<?php
}
?>

