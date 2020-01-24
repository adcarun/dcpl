<li class="divider-vertical"></li>
<li><a href="javascript:void(0);" class="">Welcome: <?php echo $_SESSION['objLogin']->Name ?></a></li>
<li class="dropdown pull-right dropdown-user">
    <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-reorder"></i>&nbsp;<b class="caret"></b></a>
    <ul class="dropdown-menu">
        <!-- Just a button demostrating how loading of widgets could happen, check main.js- - uiDemo() -->
        <li>
            <!-- Modal div is at the bottom of the page before including javascript code -->
            <a href="#modal-user-settings" role="button" data-toggle="modal"><i class="glyphicon-keys"></i> Change Password</a>
        </li>
        <li>
            <a href="./logout.php"><i class="icon-lock"></i>Log out</a>
        </li>
    </ul>
</li>