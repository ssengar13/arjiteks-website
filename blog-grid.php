<?php
include_once('header.php');
?>

<?php
$servername = "localhost";
$username = "root";
$password = "Ywynbw2z2!@123";
$dbname = "blogs";

$conn = mysqli_connect($servername, $username, $password, $dbname);
?>
<!-- start breadcrumb area -->
<div class="rts-breadcrumb-area breadcrumb-bg bg_image">
    <div class="container">
        <div class="row align-items-center mt--100">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 breadcrumb-1">
                <h1 class="title">Latest Posts</h1>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="bread-tag">
                    <a href="index.php">Home</a>
                    <span> / </span>
                    <a href="blog-grid.php" class="active">Latest Posts</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end breadcrumb area -->
<!-- rts blog grid area -->
<div class="rts-blog-grid-area rts-section-gap">
    <div class="container">
        <div class="row g-5">
            <div class="col-xl-8 col-md-12 col-sm-12 col-12 pr--40 pr_md--0 pr_sm-controler--0">
                <!-- start blog grid inner -->

                <?php
                // Establish the database connection (assuming $conn is already initialized)
                // ...

                // Check if a search keyword or type is provided
                if (isset($_GET['keyword']) && !empty($_GET['keyword'])) {
                    $keyword = $_GET['keyword'];
                    $sql = "SELECT * FROM blogs WHERE heading1 LIKE '%$keyword%' OR tags LIKE '%$keyword%'";
                } elseif (isset($_GET['type']) && !empty($_GET['type'])) {
                    $type = $_GET['type'];
                    $sql = "SELECT * FROM blogs WHERE type = '$type'";
                } else {
                    $sql = "SELECT * FROM blogs";
                }

                $res = mysqli_query($conn, $sql);

                // Loop through each row in the result set
                while ($menu1 = mysqli_fetch_assoc($res)) {
                    // Fetch the next row
                    $menu2 = mysqli_fetch_assoc($res);
                ?>
                    <div class="row g-5">
                        <!-- Blog Post 1 -->
                        <div class="col-lg-6 col-md-6 col-sm-12 col-12 mt-5 mb-3">
                            <div class="blog-grid-inner">
                                <div class="blog-header">
                                    <a class="thumbnail" href="newblog.php?id=<?php echo $menu1['id']; ?>">
                                        <img src="./admin/upload/<?php echo $menu1['img']; ?>" style="height: 330px; width:430px;" alt="Business_Blog">
                                    </a>
                                    <div class="blog-info">
                                        <div class="user">
                                            <i class="fal fa-user-circle"></i>
                                            <span>by <?php echo $menu1['created_by']; ?></span>
                                        </div>
                                        <div class="user">
                                            <i class="fal fa-tags"></i>
                                            <span><?php echo $menu1['type']; ?></span>
                                        </div>
                                    </div>
                                    <div class="date mb-3">
                                        <h6 class="title"><?php echo date('d', strtotime($menu1['created_at'])); ?></h6>
                                        <span><?php echo date('M', strtotime($menu1['created_at'])); ?></span>
                                    </div>
                                </div>
                                <div class="blog-body" style="height:180px;">
                                    <a href="newblog.php?id=<?php echo $menu1['id']; ?>">
                                        <h5 class="title">
                                            <?php echo $menu1['heading1']; ?>
                                        </h5>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <?php
                        if ($menu2) {
                        ?>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12 mt-5 mb-3">
                                <div class="blog-grid-inner">
                                    <div class="blog-header">
                                        <a class="thumbnail" href="newblog.php?id=<?php echo $menu1['id']; ?>">
                                            <img src="./admin/upload/<?php echo $menu2['img']; ?>" style="height: 330px; width:430px;" alt="Business_Blog">
                                        </a>
                                        <div class="blog-info">
                                            <div class="user">
                                                <i class="fal fa-user-circle"></i>
                                                <span>by <?php echo $menu2['created_by']; ?></span>
                                            </div>
                                            <div class="user">
                                                <i class="fal fa-tags"></i>
                                                <span><?php echo $menu2['type']; ?></span>
                                            </div>
                                        </div>
                                        <div class="date mb-3">
                                            <h6 class="title"><?php echo date('d', strtotime($menu1['created_at'])); ?></h6>
                                            <span><?php echo date('M', strtotime($menu1['created_at'])); ?></span>
                                        </div>
                                    </div>
                                    <div class="blog-body" style="height:180px;">
                                        <a href="newblog.php?id=<?php echo $menu2['id']; ?>">
                                            <h5 class="title">
                                                <?php echo $menu2['heading1']; ?>
                                            </h5>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                <?php
                }
                mysqli_free_result($res);
                ?>
            </div>

            <!--rts blog wized area -->
            <div class="col-xl-4 col-md-12 col-sm-12 col-12">
                <div class="rts-single-wized search">
                    <div class="wized-header">
                        <h5 class="title">Search</h5>
                    </div>
                    <div class="wized-body">
                        <div class="rts-search-wrapper">
                            <form action="" method="GET">
                                <input class="Search" type="text" name="keyword" placeholder="Enter Keyword">
                                <button type="submit"><i class="fal fa-search"></i></button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="rts-single-wized Categories">
                    <div class="wized-header">
                        <h5 class="title">
                            Categories
                        </h5>
                    </div>

                    <div class="wized-body">
                        <ul class="single-categories">
                            <li><a href="blog-grid.php?type=Buisness">Buisness <i class="far fa-long-arrow-right"></i></a></li>
                        </ul>
                        <ul class="single-categories">
                            <li><a href="blog-grid.php?type=Information Technology">Information Technology<i class="far fa-long-arrow-right"></i></a></li>
                        </ul>
                        <ul class="single-categories">
                            <li><a href="blog-grid.php?type=Security">Security<i class="far fa-long-arrow-right"></i></a></li>
                        </ul>
                        <ul class="single-categories">
                            <li><a href="blog-grid.php?type=Telecommunications">Telecommunications<i class="far fa-long-arrow-right"></i></a></li>
                        </ul>
                        <ul class="single-categories">
                            <li><a href="blog-grid.php?type=Software">Software<i class="far fa-long-arrow-right"></i></a></li>
                        </ul>
                    </div>
                </div>
                <!-- single wizered End -->
                <!-- single wizered start -->
                <div class="rts-single-wized Recent-post">
                    <div class="wized-header">
                        <h5 class="title">
                            Recent Posts
                        </h5>
                    </div>
                    <div class="wized-body">
                        <?php

                        $latest_sql = "SELECT * FROM blogs ORDER BY created_at DESC LIMIT 4";
                        $latest_res = mysqli_query($conn, $latest_sql);

                        // Check if there are any results
                        if (mysqli_num_rows($latest_res) > 0) {
                            while ($menu = mysqli_fetch_assoc($latest_res)) {
                        ?>
                                <!-- recent-post -->
                                <div class="recent-post-single">
                                    <div class="thumbnail">
                                        <a href="newblog.php?id=<?php echo $menu['id']; ?>"><img src="./admin/upload/<?php echo $menu['img']; ?>" style="height:90px; width:90px;" alt="Blog_post"></a>
                                    </div>
                                    <div class="content-area">
                                        <div class="user">
                                            <i class="fal fa-clock"></i>
                                            <span><?php echo $menu['created_at']; ?></span>
                                        </div>
                                        <a class="post-title" href="newblog.php?id=<?php echo $menu['id']; ?>">
                                            <h6 class="title"><?php echo $menu['heading1']; ?></h6>
                                        </a>
                                    </div>
                                </div>
                                <!-- recent-post End -->
                        <?php
                            }
                        } else {
                            echo '<p>No recent posts found.</p>';
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- rts blog grid area end -->

<?php
include_once('footer.php');
?>