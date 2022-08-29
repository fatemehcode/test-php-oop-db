<nav>
    <h1>
        <a href="<?php echo url_for('/index.php'); ?>">
          <img class="bike-icon" src="<?php echo url_for('/images/USDOT_bicycle_symbol.svg') ?>" /><br />
          Chain Gang
        </a>        
      </h1>
    <ul id="menu">
        <li><a href="<?php echo url_for('/bicycles.php'); ?>">View Our Inventory</a></li>
        <li><a href="<?php echo url_for('/about.php'); ?>">About Us</a></li>
        <li><a href="<?php echo url_for('/staff/login.php'); ?>">Login</a></li>
        <li><a href="<?php echo url_for('/staff/logout.php'); ?>">LogOut</a></li>
        <li><a href="<?php echo url_for('/staff/index.php'); ?>">Staff</a></li>
    </ul>
    <hr/>
</nav>