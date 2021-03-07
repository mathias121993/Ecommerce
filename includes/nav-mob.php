<nav>
    <ul>
        <?php
            include('nav.php');
            foreach($navItems as $item)
            {
                echo "<li><a href=\"$item[href]\" onclick='closeNav()'>$item[title]</a></li>";
            }
        ?>
    </ul>
</nav>