


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>My Portfolio</title>
        <meta name="viewport" content="width=device-width, intial-scale=1.0">
        <link href="">
        <link rel="stylesheet" href="phpgallery/style.css">
        
    </head>
    <body>
        <header>
            <a href="index.html" class="header-brand">mmtuts</a>
            <nav>
                <ul>
                    <li><a href="portfolio.html">Portfolio</a></li>
                    <li><a href="about.html">About me</a></li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
                <a href="case.html" class="header-cases">Cases</a>
            </nav>
        </header>
        <main>
            <section class="gallery-links">
                <div class="wrapper">
                    <h2>Gallery</h2>

                    <div class="gallery-container">
                        <?php
                        include_once 'includes/dbhinc.php';

                        $sql = "SELECT * FROM gallery ORDER BY orderGallery DESC";
                        $stmt = mysqli_stmt_init($conn);
                        if( !mysqli_stmt_prepare($stmt, $sql)) {
                            echo "SQL statement failed";
                        } else {
                            mysqli_stmt_execute($stmt);
                            $result = mysqli_stmt_get_result($stmt);

                            while ($row = mysqli_fetch_assoc($result)) {
                                echo '<a href="#">
                                <div style="background-image: url(img/gallery/'.$row["imgFullNameGallery"].');"></div>
                                <h3>'.$row["titleGallery"].'<h3>
                                <p>'.$row["descGallery"].'</p>
                                </a>';

                            }
                        }

                        echo '<a href="#">
                            <div></div>
                            <h3>This is a title</h3>
                            <p>This is a paragraph</p>
                        </a>';
                        ?>
                        <?php
                        if (isset($_SESSION['username'])) {
                            echo '<div class="gallery-upload">
                                <form action="includes/gallery-uploadinc.php" method="gallery" enctype="multipart/form-data">
                                    <input type="text" name="filename" placeholder="File name...">
                                    <input type="text" name="filetitle" placeholder="Image title...">
                                    <input type="text" name="filedesc" placeholder="Image description...">
                                    <input type="file" name="file">
                                    <button type="submit" name="submit"></button>
                                </form>
                            </div>';
                        }
                        ?>

                </div>