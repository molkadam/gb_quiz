<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">GB Quiz </a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="index.php">Home</a></li>
      <li><a href="dashboard.php">Dashboard</a></li>
      <li><a href="admin_dashboard.php">Admin Dashboard</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
        <?php
        if(!empty($_SESSION['user_id']))
        {
        ?>
        <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Welcome <?php echo ucfirst($_SESSION['name']);?></a></li>
        <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
        <?php
        }
        else
        {
        ?>
        <li><a href="register.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        <?php
        }
        ?>
      
    </ul>
  </div>
</nav>