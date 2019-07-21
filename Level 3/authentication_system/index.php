<?php
    include "header.php";
?>


        <main>
            <div class="container">
                <div class="wrapper-main">
                    <section class="section-default">
                        <?php
                            //checks if user is logged in or out and prints statements accordingly
                            if (isset($_SESSION['userId'])){
                                echo '<p class="login-status">You are logged in!</p>';
                            }
                            else{
                                echo '<p class="login-status">You are logged out!</p>';
                            }
                        ?>
                    </section>
                </div>
            </div>

        </main>
        
        
<?php
    include "footer.php";
?>