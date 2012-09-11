  
  <ul class="pager">
    <li class="previous">
      <?php echo previous_page_not_post(); ?>
    </li>
    <li class="next">
      <?php echo next_page_not_post(); ?>
    </li>
  </ul>

  <footer class="row">
    <div class="well">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>/?page_id=22">About Me</a>
      <p class="muted">© Taylor Lapeyre 2012</p>
      <p class="muted">You should follow me on twitter <a href="http://www.twitter.com/taylorlapeyre">here</a>.</p>
    </div>
  </footer>
  
  <!-- js files -->
  <script src="http://code.jquery.com/jquery-latest.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <!-- /js files -->
</body>
</html>