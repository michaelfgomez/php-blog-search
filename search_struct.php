<!DOCTYPE html>
<html>
<head>
    <title>Search</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>

<div class="container">
    <div class="col-xs-6">
    <h4 class="text-center">Blog Search</h4>

        <form action="search_struct.php" method="post">
            <div class="input-group">
                <input name="search" type="text" class="form-control"> <!--keyword = search -->
                    <span class="input-group-btn">
                        <button name="submit" class="btn btn-default" type="submit">
                            <span class="glyphicon glyphicon-search"></span>
                        </button>
                    </span>
            </div>
        </form>

        <?php include "search_system.php"; ?>

    </div>
</div>


</body>
</html>
