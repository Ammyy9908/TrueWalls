<!--Categories-->
<section class="section" id="collections">

<div class="container">
    <!--<h1 class="is-size-1">Collections</h1>-->
    <div class="columns">
        

<div class="column">
<a href="category/Abstracts/?cat=Abstract">
<div class="box first">
  <p class="title" style="color: #fff;">Abstracts</p>
  <p class="subtitle"><?php

$cat1="%abstract%";
$cat2="%abstracts%";
$sql = "SELECT * FROM galleryExamp WHERE title LIKE ? OR title LIKE ?";
$stmt = mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($stmt,$sql)) {
echo "Statement Error!";
}
else
{
mysqli_stmt_bind_param($stmt,"ss",$cat,$cat2);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

$count =mysqli_num_rows($result);
}
echo $count;

?> photos</p>

</div></a>
</div>
<div class="column">
<a href="category/Girls/?cat=Girl">
<div class="box second">
  <p class="title" style="color: #fff;">Girls</p>
  <p class="subtitle">  <?php

$cat="%girl%";
$cat2="%girls%";
$sql = "SELECT * FROM galleryExamp WHERE title LIKE ? OR title LIKE ?";
$stmt = mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($stmt,$sql)) {
echo "Statement Error!";
}
else
{
mysqli_stmt_bind_param($stmt,"ss",$cat,$cat2);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

$count =mysqli_num_rows($result);
}
echo $count;

?> Photos</p>

</div>
</a>
</div>
<div class="column">
<a href="category/Animals/?cat=Animal">
<div class="box third">
  <p class="title" style="color: #fff;">Animals</p>
  <p class="subtitle"><?php

$cat="%animal%";
$cat2="%animals%";
$sql = "SELECT * FROM galleryExamp WHERE title LIKE ? OR title LIKE ?";
$stmt = mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($stmt,$sql)) {
echo "Statement Error!";
}
else
{
mysqli_stmt_bind_param($stmt,"ss",$cat,$cat2);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

$count =mysqli_num_rows($result);
}
echo $count;

?> photos</p>

</div>
</a>
</div>
<div class="column">
<a href="category/Boys/?cat=Boy">
<div class="box fourth">
  <p class="title" style="color: #fff;">Boys</p>
  <p class="subtitle"><?php

$cat="%boy%";
$cat2="%boys%";
$sql = "SELECT * FROM galleryExamp WHERE title LIKE ? OR title LIKE ?";
$stmt = mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($stmt,$sql)) {
echo "Statement Error!";
}
else
{
mysqli_stmt_bind_param($stmt,"ss",$cat,$cat2);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

$count =mysqli_num_rows($result);
}
echo $count;

?> photos</p>

</div>
</a>
</div>
</div>
<div class="columns">
        

<div class="column">
<a href="category/Beaches/?cat=Beach">
<div class="box fifth">
  <p class="title" style="color: #fff;">Beachs</p>
  <p class="subtitle"><?php

$cat="%beach%";
$cat2="%beaches%";
$sql = "SELECT * FROM galleryExamp WHERE title LIKE ? OR title LIKE ?";
$stmt = mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($stmt,$sql)) {
echo "Statement Error!";
}
else
{
mysqli_stmt_bind_param($stmt,"ss",$cat,$cat2);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

$count =mysqli_num_rows($result);
}
echo $count;

?> photos</p>

</div>
</a>
</div>
<div class="column">
<a href="category/Portraits/?cat=Portrait">
<div class="box sixth">
  <p class="title" style="color: #fff;">Portraits</p>
  <p class="subtitle"><?php

$cat="%portrait%";
$cat2="%portraits%";
$sql = "SELECT * FROM galleryExamp WHERE title LIKE ? OR title LIKE ?";
$stmt = mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($stmt,$sql)) {
echo "Statement Error!";
}
else
{
mysqli_stmt_bind_param($stmt,"ss",$cat,$cat2);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

$count =mysqli_num_rows($result);
}
echo $count;

?> photos</p>

</div>
</a>
</div>
<div class="column">
<a href="category/Technology/?cat=Technology">
<div class="box seventh">
  <p class="title" style="color: #fff;">Technology</p>
  <p class="subtitle"><?php

$cat="%technology%";
$cat2="%programmers%";
$sql = "SELECT * FROM galleryExamp WHERE title LIKE ? or title LIKE ?";
$stmt = mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($stmt,$sql)) {
echo "Statement Error!";
}
else
{
mysqli_stmt_bind_param($stmt,"ss",$cat,$cat2);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

$count =mysqli_num_rows($result);
}
echo $count;

?> photos</p>

</div>
</a>
</div>
<div class="column">
<a href="category/Architectures/?cat=Architecture">
<div class="box eighth">
  <p class="title" style="color: #fff;">Architectures</p>
  <p class="subtitle"><?php

$cat="%architecture%";
$cat2="%architectures%";
$sql = "SELECT * FROM galleryExamp WHERE title LIKE ? OR title LIKE ?";
$stmt = mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($stmt,$sql)) {
echo "Statement Error!";
}
else
{
mysqli_stmt_bind_param($stmt,"ss",$cat,$cat2);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

$count =mysqli_num_rows($result);
}
echo $count;

?> photos</p>

</div>
</a>
</div>
</div>
<div class="columns">
        

<div class="column">
<a href="category/Kids/?cat=Kid">
<div class="box ninth">
  <p class="title" style="color: #fff;">Kids</p>
  <p class="subtitle"><?php

$cat="%kid%";
$cat2="%kids%";
$sql = "SELECT * FROM galleryExamp WHERE title LIKE ? OR title LIKE ?";
$stmt = mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($stmt,$sql)) {
echo "Statement Error!";
}
else
{
mysqli_stmt_bind_param($stmt,"ss",$cat,$cat2);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

$count =mysqli_num_rows($result);
}
echo $count;

?> photos</p>
</div>
</a>
</div>
<div class="column">
<a href="category/Mountains/?cat=Mountain">
<div class="box tenth">
  <p class="title" style="color: #fff;">Mountains</p>
  <p class="subtitle">
<?php

$cat="%mountain%";
$cat2="%mountains%";
$sql = "SELECT * FROM galleryExamp WHERE title LIKE ? OR title Like ?";
$stmt = mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($stmt,$sql)) {
echo "Statement Error!";
}
else
{
mysqli_stmt_bind_param($stmt,"ss",$cat,$cat);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

$count =mysqli_num_rows($result);
}
echo $count;

?> photos</p>

</div>
</a>
</div>
<div class="column">
<a href="category/Flowers/?cat=Flower">
<div class="box eleventh">
  <p class="title" style="color: #fff;">Flowers</p>
  <p class="subtitle"><?php

$cat="%flower%";
$cat2="%flowers%";
$sql = "SELECT * FROM galleryExamp WHERE title LIKE ? OR title Like ?";
$stmt = mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($stmt,$sql)) {
echo "Statement Error!";
}
else
{
mysqli_stmt_bind_param($stmt,"ss",$cat,$cat2);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

$count =mysqli_num_rows($result);
}
echo $count;

?> photos</p>

</div>
</a>
</div>
<div class="column">
<a href="category/Cars/?cat=Car">
<div class="box twelth">
  <p class="title" style="color: #fff;">Cars</p>
  <p class="subtitle"><?php

$cat="%car%";
$cat2="%cars%";
$sql = "SELECT * FROM galleryExamp WHERE title LIKE ? OR title LIKE ?";
$stmt = mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($stmt,$sql)) {
echo "Statement Error!";
}
else
{
mysqli_stmt_bind_param($stmt,"ss",$cat,$cat2);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

$count =mysqli_num_rows($result);
}
echo $count;

?> photos</p>

</div>
</a>
</div>
</div>
</div>

</section>