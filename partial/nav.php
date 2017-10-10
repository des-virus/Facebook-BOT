<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="index.php">Minh Phong 306</a>
        </div>
        <ul class="nav navbar-nav">
            <li><a href="index.php">Trang chủ</a></li>
            <li><a target="_blank" href="https://minhphong306.wordpress.com">Blog</a></li>
            <li><a href="data-mining.php">Data mining</a></li>

        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-user"></span> Đăng nhập</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Đăng xuất</a></li>
        </ul>
    </div>
</nav>

<script>
    $(document).ready(function () {
        $("li a[href='" + window.location.pathname.split('/')[2] + "']").parent().addClass('active');
    });
</script>