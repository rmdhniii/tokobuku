<?php
include "../layout/header.php";
?>
<?php
include "../layout/menu.php";
?>

<div class="content-wrap">
    <div class="main">
        <div class="container-fluid">
            `
            <form action="" method="post">
                <div class="mb-3">
                    <label for="" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="" name="">
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>
    </div>
</div>



<div id="search">
    <button type="button" class="close">×</button>
    <form>
        <input type="search" value="" placeholder="type keyword(s) here" />
        <button type="submit" class="btn btn-primary">Search</button>
    </form>
</div>

<?php
include "../layout/footer.php";
?>