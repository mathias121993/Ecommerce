<nav>
    <ul>
        <?php
            include('nav.php');
            foreach($navItems as $item)
            {
                echo "<li><a href=\"$item[href]\">$item[title]</a></li>";
            }
        ?>
    </ul>
</nav>