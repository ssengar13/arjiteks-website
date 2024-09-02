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

<div class="rts-breadcrumb-area breadcrumb-bg bg_image">
    <div class="container">
        <div class="row align-items-center mt--100">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 breadcrumb-1">
                <h1 class="title">Blog Details</h1>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="bread-tag">
                    <a href="index.php">Home</a>
                    <span> / </span>
                    <a href="blog-details.php" class="active">Blog Details</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="rts-blog-list-area rts-section-gap">
    <div class="container">
        <div class="row g-5">
            <div class="col-xl-8 col-md-12 col-sm-12 col-12" style="overflow-y: scroll; height: 1310px">
                <?php
                $id = $_GET['id'];
                $sql = "SELECT * FROM blogs where id='$id'";

                $res = mysqli_query($conn, $sql);
                foreach ($res as $menu) {
                    $tags = explode(',', $menu['tags']);
                ?>
                    <div class="blog-single-post-listing details mb--0">
                        <div class="thumbnail">
                            <img src="./admin/upload/<?php echo $menu['img']; ?>" alt="Business-Blog" />

                        </div>
                        <div class="blog-listing-content">
                            <div class="user-info">
                                <div class="single">
                                    <i class="far fa-user-circle"></i>
                                    <span>by <?php echo $menu['created_by']; ?></span>
                                </div>
                                <div class="single">
                                    <i class="far fa-clock"></i>
                                    <span><?php echo $menu['created_at']; ?></span>
                                </div>
                                <div class="single">
                                    <i class="far fa-tags"></i>
                                    <span><?php echo $menu['type']; ?></span>
                                </div>
                            </div>
                            <h3 class="title">"<?php echo $menu['heading1']; ?>"</h3>
                            <p class="disc para-1">
                                <?php echo $menu['para1']; ?>
                            </p>
                            <p class="disc">
                                <?php echo $menu['bullets']; ?>
                            </p>


                            <p class="disc">
                                <?php echo $menu['conclusion']; ?>
                            </p>


                            <div class="row align-items-center">

                                <div class="col-lg-6 col-md-12">
                                    <div class="details-tag">
                                        <h6>Tags:</h6>
                                        <?php foreach ($tags as $tag) : ?>
                                            <button style="margin-bottom: 10px"><?php echo trim($tag); ?></button>
                                        <?php endforeach; ?>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-12">
                                    <div class="details-share social-wrapper-two">
                                        <h6 style="margin-right: 30px;;">Share:</h6>
                                        <a href="https://www.facebook.com/UnifiedVoiceCommunicationPvtLtd"><i class="fab fa-facebook-f"></i></a>
                                        <a href="https://twitter.c om/unifiedvoice1"><i class="fab fa-twitter"></i></a>
                                        <a href="https://instagram.com/uvcpl?igshid=MzRlODBiNWFlZA=="><i class="fab fa-instagram"></i></a>
                                        <a href="https://www.linkedin.com/company/unified-voice-communication-pvt-ltd/"><i class="fab fa-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>

                            <div class="replay-area-details">
                                <h4 class="title">Leave a Reply</h4>
                                <form action="#">
                                    <div class="row g-4">
                                        <div class="col-lg-6">
                                            <input type="text" placeholder="Your Name" />
                                        </div>
                                        <div class="col-lg-6">
                                            <input type="text" placeholder="Your Name" />
                                        </div>
                                        <div class="col-12">
                                            <input type="text" placeholder="Select Topic" />
                                            <textarea></textarea>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <a class="rts-btn btn-primary" href="#">Submit Message</a>
                        </div>
                    </div>
            </div>
            <div class="col-xl-4 col-md-12 col-sm-12 col-12">
                <div class="rts-single-wized search">
                    <div class="wized-header">
                        <h5 class="title">Search</h5>
                    </div>
                    <div class="wized-body">
                        <div class="rts-search-wrapper">
                            <!-- Updated form action and input name attribute -->
                            <form action="blog-grid.php" method="GET">
                                <input class="Search" type="text" name="keyword" placeholder="Enter Keyword" />
                                <button type="submit"><i class="fal fa-search"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="rts-single-wized Categories">
                    <div class="wized-header">
                        <h5 class="title">Categories</h5>
                    </div>
                    <div class="wized-body">
                        <ul class="single-categories">
                            <li>
                                <a href="blog-grid.php?type=Business">Business <i class="far fa-long-arrow-right"></i></a>
                            </li>
                        </ul>
                        <ul class="single-categories">
                            <li>
                                <a href="blog-grid.php?type=Information%20Technology">Information Technology<i class="far fa-long-arrow-right"></i></a>
                            </li>
                        </ul>
                        <ul class="single-categories">
                            <li>
                                <a href="blog-grid.php?type=Security">Security <i class="far fa-long-arrow-right"></i></a>
                            </li>
                        </ul>
                        <ul class="single-categories">
                            <li>
                                <a href="blog-grid.php?type=Telecommunications">Telecommunications<i class="far fa-long-arrow-right"></i></a>
                            </li>
                        </ul>
                        <ul class="single-categories">
                            <li>
                                <a href="blog-grid.php?type=Software">Software<i class="far fa-long-arrow-right"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>

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

                        if (mysqli_num_rows($latest_res) > 0) {
                            while ($menu = mysqli_fetch_assoc($latest_res)) {
                        ?>
                                <div class="recent-post-single">
                                    <div class="thumbnail">
                                        <a href="newblog.php?id=<?php echo $menu['id']; ?>"><img src="./admin/upload/<?php echo $menu['img']; ?>" style="height:90px; width:90px;" alt="Blog_post"></a>
                                    </div>
                                    <div class="content-area">
                                        <div class="user">
                                            <i class="fal fa-clock"></i>
                                            <span><?php echo htmlspecialchars($menu['created_at']); ?></span>
                                        </div>
                                        <a class="post-title" href="newblog.php?id=<?php echo $menu['id']; ?>">
                                            <h6 class="title"><?php echo htmlspecialchars($menu['heading1']); ?></h6>
                                        </a>
                                    </div>
                                </div>
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
<?php
                }
?>

<?php
include_once('footer.php');
?>