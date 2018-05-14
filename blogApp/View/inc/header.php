<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title><?=\TestProject\Engine\Config::SITE_NAME?></title>
        <meta name="author" content="Pierre-Henry Soria" />
        <link rel="stylesheet" href="<?=ROOT_URL?>static/style.css" />
        <form action="http://localhost/exam_assistance_web/account.php?q=1"><input type="submit" value="Home" /></form>
        <form action="http://localhost/comment_page/"><input type="submit" value="Ask Doubt?" /></form>
        <form><input type="button" value="Request blog" onclick="window.location.href='request_blog.php'" /></form>
    </head>
    <div align =right>
    <?php
    echo  date("d-m-Y");
    echo ", ";
    echo  date("H:m:s");

?>
</div>
    <body>
        <div class="center">
</body>
