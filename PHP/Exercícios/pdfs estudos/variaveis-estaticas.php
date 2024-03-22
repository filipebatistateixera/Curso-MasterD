<html>
<body>
    <p>
        <?php
        function contador()
        {
            static $ct = 0;
            echo $ct;
            $ct++;
        }
        contador();
        contador();
        contador();
        contador();
        contador();
        ?>
    </p>
</body>
</html>