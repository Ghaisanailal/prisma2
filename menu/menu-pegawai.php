<div class="container-fluid">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>

        <a class="navbar-brand" href="index.php">
            <i class="glyphicon glyphicon-grain"></i>
            <b>Dispekael</b> <span class="badge"><?php echo $_SESSION['level']; ?></span></a>
    </div>
    <?php
    $ids = $_SESSION['id'];
    ?>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
            <li><a href="?page=users-tampil"> <i class="glyphicon glyphicon-user"></i> USERS </a></li>
            <li><a href="?page=tampil-nilai"> <i class="glyphicon glyphicon-blackboard"></i> NILAI SEMINAR</a></li>
            <li><a href="?page=ubah&id=<?php echo $ids ?>"><i class="glyphicon glyphicon-cog"></i> SET</a></li>
            <li><a href="logout.php"> <i class="glyphicon glyphicon-log-out"></i> KELUAR</a></li>
        </ul>
    </div>
</div>