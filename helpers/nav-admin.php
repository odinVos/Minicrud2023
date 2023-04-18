<nav>
            <ul>
                <li>
                    <div class="logo">
                        <H1> Kranenburger </H1>
                    </div>  
                </li>
                
                <li id="active"><a href="index.php">Home</a></li>
                <li><a href="menu.php">Menu</a></li>
                <li class="login"><a href="edit_menu.php">Menu Editor</a></li>
                <li class="logged-in">
                    <div class="logged-in">
                        Ingelogt als: <b><?php echo ($_SESSION["username"]); ?>
                    </div> 
                </li>
            </ul>
        </nav>