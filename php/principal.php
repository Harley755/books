<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Books | Bibliothèque Virtuelle</title>
</head>

<body>
    <header>
        <div id="container_index">
            <div id="logo">
                <a href="#">BOOKS</a>
            </div>
            <nav id="nav-bar">
                <a href="#">
                    <?php echo $_SESSION['username'];?>
                </a>
                <a href="log_out.php">Log Out</a>
            </nav>
        </div>
    </header>

    <main>
        <section id="hero_banner">
            <div id="container_index2">
                <div id="title_description">
                    <h1>Discover the best computer books, cooking recipes, and others in the world</h1><br>
                    <h2>Book is the leading destination for finding and showcasing books of all genres</h2>
                </div>
                <div id="image_banner">
                    <img src="../images/image_banner_Wbg.jpg" alt="">
                </div>
            </div>
        </section>

        <section id="filter">
            <div id="container_filter">
                <div class="filter_thematique">
                    <div class="filter">
                        <p>Filter by : </p>
                    </div>
                    <div class="thematique">
                        <select name="thematique" id="thematique">
                                <option value="">Informatique</option>
                                <option value="">Cuisine</option>
                            </select>
                    </div>
                </div>
            </div>
            <div id="book">
                <h3>Titre du choix</h3>
                <div id="container_book">
                    <div class="book_div">
                        <div></div>
                        <h4>Book_name</h4>
                        <p>Edition</p>
                        <p>Page</p>
                        <h2>Auteur</h2>
                    </div>
                    <div class="book_div">
                        <div></div>
                        <h4>Book_name</h4>
                        <p>Edition</p>
                        <p>Page</p>
                        <h2>Auteur</h2>
                    </div>
                    <div class="book_div">
                        <div></div>
                        <h4>Book_name</h4>
                        <p>Edition</p>
                        <p>Page</p>
                        <h2>Auteur</h2>
                    </div>
                </div>
            </div>

            <div id="see_more">
                <a href="#">See more</a>
            </div>
        </section>
    </main>

    <footer>
        <div id="container_footer">
            <div id="logo_footer">
                <a href="#">BOOKS</a>
            </div>
            <div class="autor_footer">
                <div class="para_footer">
                    <p>Site By</p>
                </div>
                <div class="names_footer">
                    <a href="#">Brice GOUDALO</a>
                    <a href="#">Marc-Aurel HAZOUME</a>
                </div>
            </div>
            <div class="legal">
                <p>BOOKS © 2022</p>
            </div>
        </div>
    </footer>
</body>

</html>