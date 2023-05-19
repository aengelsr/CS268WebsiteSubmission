
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">


		 <!--custom style-->
		 <link rel="stylesheet" href="style/index.css">

		 <!--Style for icons-->
		 <script src="https://kit.fontawesome.com/48e57d5629.js" crossorigin="anonymous"></script>    
	 

        <title>Admin Section - Dashboard</title>

<style>
	.create-user-content {
  width: 100%;
  background-color: #eee;
  padding: 30px 0;
}

.create-user form {
  margin: 0 auto;
  width: 40%;
  display: flex;
  justify-content: center;
  flex-wrap: wrap;
}

.create-user form input {
  width: 80%;
  border-radius: 100px;
  padding: 6px 10px;
  margin-bottom: 10px;
}

.create-user form button {
  width: 40%;
  border-radius: 100px;
  padding: 6px 10px;
  margin-bottom: 10px;
  background-color: #40A9F5;
  border: none;
  color: #fff;
}
</style>

    </head>

    <body>
        
		<nav class="nav">
			<div class="nav-menu flex-row">
				<div class="nav-brand">
					<a href="index.html" class="text-gray">Freedom Reigns</a>
				</div>
				<div class="toggle-collapse">
					<div class="toggle-icons">
						<i class="fas fa-bars"></i>
					</div>
				</div>
        <div>
                <ul class="nav-items">
                    <li class="nav-link">
                        <a href="index.html">Home</a>
                    </li>
                    <li class="nav-link">
                        <a href="archive.html">Archive</a>
                    </li>
                    <li class="nav-link">
                        <a href="aboutMe.html">About Me</a>
                    </li>
                    <li class="nav-link">
                        <a href="contact.php">Contact Us</a>
                    </li>
                    <li class="nav-link">
                        <a href="gallery.php">Gallery</a>
                    </li>
                    <li class="nav-link">
                        <a href="books-display.php">Books</a>
                    </li>
                    
                </ul>
            </div>
				<div class="social text-gray">
					<a href="https://www.facebook.com/abby.murphy.98"><i class="fab fa-facebook-f"></i></a>
					<a href="https://www.instagram.com/abby_msnr/"><i class="fab fa-instagram"></i></a>
				</div>
			</div>
		</nav>
        <!-- Admin Page Wrapper -->
        <div class="admin-wrapper">

        <div class="left-sidebar">
                <ul>
                    <li><a href="create-user.php">Manage User</a></li>
                    <li><a href="books.php">Manage Books</a></li>
                </ul>
            </div>

            <!-- Admin Content -->
            <div class="admin-content">

                <div class="manage-user-content">
                    <h2 class="page-title">Manage Books</h2>
					<br>
                </div>
				<div class="create-user-content">
                    <h2 class="page-title">Add Books</h2>

					<div class="create-user">
						<form class="form-signup" action="books-database.php" method="post">
						  <input type="text" name="title" placeholder="title...">
						  <input type="text" name="author" placeholder="author...">
						  <input type="text" name="summary" placeholder="summary">

						  <button type="submit" name="create-books">Add Book</button>
						</form>
					  </div>
                </div>
            </div>
            <!-- // Admin Content -->

        </div>
        <!-- // Page Wrapper -->

        </div>
        <!-- // Page Wrapper -->



        <!-- JQuery -->
        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <!-- Ckeditor -->
        <script
            src="https://cdn.ckeditor.com/ckeditor5/12.2.0/classic/ckeditor.js"></script>
        <!-- Custom Script -->
        <script src="../assets/js/scripts.js"></script>

    </body>

</html>