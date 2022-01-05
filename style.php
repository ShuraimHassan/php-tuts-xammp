@tailwind base;
@tailwind components;
@tailwind utilities;
<?php

/*** set the content type header ***/
/*** Without this header, it wont work ***/
header("Content-type: text/css");
$font_family = 'Arial, Helvetica, sans-serif';
$font_size = '3rem';
$border = '1px solid #888888';
?>

@font-face {
font-family: 'Elianto';
font-style: normal;
font-weight: 400;
src: local('Elianto'), url('https://fonts.cdnfonts.com/s/19471/Elianto-Regular.woff') format('woff');
}
@import url('https://fonts.googleapis.com/css2?family=Island+Moments&family=Spline+Sans:wght@600&display=swap');


.headingFirst{
color: #ffff;
background-color: #003355;
padding: 20px;
text-align: center;
font-family: 'Elianto', sans-serif;
font-size: <?php echo $font_size; ?>;
}
body{
font-family: 'Spline Sans', sans-serif;
}