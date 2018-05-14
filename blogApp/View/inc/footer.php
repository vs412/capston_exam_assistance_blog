            <footer>
                <p class="italic"><strong><a href="<?=ROOT_URL?>" title="Homeage">Blogging</a></strong>  &nbsp; | &nbsp;
                <?php if (!empty($_SESSION['is_logged'])): ?>
                    You are connected as Admin - <a href="<?=ROOT_URL?>?p=admin&amp;a=logout">Logout</a> &nbsp; | &nbsp;
                    <a href="check_req.php">View All Pending Blogs</a>
                <?php else: ?>
                    <a href="<?=ROOT_URL?>?p=admin&amp;a=login">Admin Login</a>
                <?php endif ?>
                </p>
				<p>all right reserved @capston group 24</p>
            </footer>
        </div>
    </body>
</html>
