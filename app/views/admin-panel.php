<?php include '../config/db.php';?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!--LINKS-->

    <link rel="stylesheet" href="../public_html/css/admin-panel.css" type="text/css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Add icon library -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>

<!-- Top Bar Section -->

   <div class="top-bar-section">
       <div class="top-bar-container">
           <img src="../public_html/img/admin/profile-pic.jpg" alt="">
           <p>Welcome - Mr F_name</p>
           <div class="social"><a href="#" class="fa fa-facebook"></a></div>
           <div class="social"><a href="#" class="fa fa-twitter"></a></div>
           <div class="social"><a href="#" class="fa fa-instagram"></a></div>
           <div class="social"><a href="#" class="fa fa-youtube"></a></div>
           <div class="social"><a href="#" class="fa fa-whatsapp"></a></div>
       </div>
   </div>

   <!-- Menu Bar Section -->

   <div class="menu-bar-section">
       <div class="mobile-nav-btn">
           <img class="mobile-nav-img" src="../public_html/img/admin/menu.png" alt="">
       </div>

       <div class="hide-show-menu">
       <ul>
           <a href=""><li><img src="../public_html/img/admin/home.png" alt="">Home</li></a>
           <a href=""><li><img src="../public_html/img/admin/pages-icon.png" alt="">Pages</li></a>
           <a class="last-li" href=""><li><img src="../public_html/img/admin/contact-form.png" alt="">Forms</li></a>

       </ul>
       </div>

   </div>

   <div class="mobile-menu-show-hide">
       <ul>
           <a href=""><li><img src="../public_html/img/admin/home.png" alt="">Home</li></a>
           <a href=""><li><img src="../public_html/img/admin/pages-icon.png" alt="">Pages</li></a>
           <a class="last-li" href=""><li><img src="../public_html/img/admin/contact-form.png" alt="">Forms</li></a>
       </ul>
       </div>

       <!-- Main Content Section -->

<div class="main-content-section">

   <!-- Admin Dashboard Banner-->

   <div class="page-info-container">

         <div class="left-content-page-info">
             <img src="../public_html/img/admin/cog.png" alt="">
             <h4>Admin Dashboard</h4>
         </div>

         <div class="right-content-page-info">
             <p class="page-info-edit1" >// Kurbit Designs</p>
             <a class="page-info-edit2" href="../public_html\index.php">Home</a>
         </div>

   </div>

   <!-- Social Media Section -->

   <div class="Social-Media-container">
        <div class="social-media-title-box">
           <img src="../public_html/img/admin/social-media.png" alt="">
           <h4>Social Media Content</h4>
        </div>

        <div class="Social-boxes">
            <img src="../public_html/img/admin/facebook.png" alt="">
          <p>Facebook - <a href="">N/A</a></p>

         <div class="wrap-social-btn-inputs">
          <form action="">
              <button class="button-delete">Delete</button>
              <button class="button-update">Update</button>
              <input type="" placeholder="Enter Facebook URL">
          </form>
         </div>
        </div>

        <div class="Social-boxes">
            <img src="../public_html/img/admin/twitter.png" alt="">
          <p>Twitter - <a href="">N/A</a></p>

          <div class="wrap-social-btn-inputs">
          <form action="">
              <button class="button-delete">Delete</button>
              <button class="button-update">Update</button>
              <input type="" placeholder="Enter Twitter URL">
          </form>
        </div>
        </div>


        <div class="Social-boxes">
            <img src="../public_html/img/admin/instagram.png" alt="">
          <p>Instagram - <a href="">N/A</a></p>

          <div class="wrap-social-btn-inputs">
          <form action="">
          <button class="button-delete">Delete</button>
              <button class="button-update">Update</button>
              <input type="" placeholder="Enter Instagram URL">
          </form>
        </div>
        </div>

        <div class="Social-boxes">
            <img src="../public_html/img/admin/youtube.png" alt="">
          <p>YouTube- <a href="">N/A</a></p>

          <div class="wrap-social-btn-inputs">
          <form action="">
              <button class="button-delete">Delete</button>
              <button class="button-update">Update</button>
              <input type="" placeholder="Enter YouTube URL">
          </form>
        </div>
        </div>

        <div class="Social-boxes">
            <img src="../public_html/img/admin/whatsapp.png" alt="">
          <p>WhatsApp - <a href="">N/A</a></p>

          <div class="wrap-social-btn-inputs">
          <form action="">
              <button class="button-delete">Delete</button>
              <button class="button-update">Update</button>
              <input type="" placeholder="Enter WhatsApp Number">
          </form>
        </div>
        </div>

    </div>

    <div class="site-info-container">
        <div class="site-info-title-box">
           <img src="../public_html/img/admin/social-media.png" alt="">
           <h4>Site Information Content</h4>
        </div>

        <div class="site-info-container-content">

            <form action="">
                <p>Favicon - </p><img src="" alt="">
                <input type="file"
       id="avatar" name="avatar"
       accept="image/png, image/jpeg">
       <p>Favicons must 32x32 in size</p>
                <button>Upload</button>
            </form>

            <form action="">
            <p>Website Name: </p>
               <p>Kurbit Designs</p>
                <button>Update</button>
            </form>

        </div>
</div>
    
   <script src="../js/admin.js"></script>

</body>

