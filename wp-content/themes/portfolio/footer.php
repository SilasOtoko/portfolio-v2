    <footer>

    </footer>

    <script>
      /* Set the width of the side navigation to 250px */
      function openNav() {
        jQuery('.closebtn').removeClass('fade-out');
        document.getElementById("mySidenav").style.width = "100%";
        if (screen.width > 400) {
          // $('.sidenav').css({'border-left' : '2px solid #fbb94d', 'border-bottom' : '2px solid #fbb94d'});
          jQuery('.sidenav').css('box-shadow', '0px 0px 30px 10px rgba(100,100,100,0.17)')
        }
        jQuery('#sidebar nav').removeClass('fade-out');
        jQuery('#sidebar nav').addClass('fade-in');
      }

      /* Set the width of the side navigation to 0 */
      function closeNav() {
        jQuery('.closebtn').addClass('fade-out');
        document.getElementById("mySidenav").style.width = "0";
        jQuery('.sidenav').css('box-shadow', 'none');
        jQuery('#sidebar nav').removeClass('fade-in');
        jQuery('#sidebar nav').addClass('fade-out');
      }
    </script>

    <?php wp_footer(); ?>

  </body>
</html>
