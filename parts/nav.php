<ul class="menu">
    <?php
        $pagename = basename($_SERVER['REQUEST_URI'], '.php');
        $pages = json_decode(file_get_contents("./data/pages.json"), true);
        foreach ($pages as $page) {
            if ($pagename == $page['name']) {
                $class = ' class="current"';
            } else {
                $class = '';
            }

            echo '<li' . $class . '><a href="' . $page['name'] . '.php">' . $page['title'] . '</a></li>';
        }
    ?>
</ul>