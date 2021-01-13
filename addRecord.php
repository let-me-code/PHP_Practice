<html>
    <head>
        <?php
        include_once('conn.php');
        ?>
    </head>

    <body>
        <section id="contact">
            <div class="contact-section">
            <div class="container">
                <form action="add.php" method='get' name='form'>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Your name</label>
                            <input type="text" class="form-control" name="name" required placeholder=" Enter Name">
                        </div>
                        <div class="form-group">
                            <label>Age</label>
                            <input type="number" min=0 max=150 class="form-control" name="age" required placeholder=" Enter Age" required>
                        </div>
                        <div class="form-group">
                            <label>Email Address</label>
                            <input type="email" class="form-control" name="email" placeholder=" Enter Email id">
                        </div>
                        <div>
                            <input type="submit" class="btn btn-default submit" name='submit' value="submit"></button>
                        </div>
                    </div>
                </form>
            </div>
            </div>
        </section>
    </body>
</html>
