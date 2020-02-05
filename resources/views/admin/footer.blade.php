<!--footer-->
<div class="footer">
  <p>&copy; 2018 Starsnellore Dashboard. All Rights Reserved | Design by <a href="https://starsnellore.com/" target="_blank">Starsnellore</a></p>		
</div>
<!--//footer-->
</div>
</div>

<!-- Classie --><!-- for toggle left push menu script -->
<script src="{{ asset('public/js/classie.js') }}"></script>
<script>
  var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
  showLeftPush = document.getElementById( 'showLeftPush' ),
  body = document.body;

  showLeftPush.onclick = function() {
    classie.toggle( this, 'active' );
    classie.toggle( body, 'cbp-spmenu-push-toright' );
    classie.toggle( menuLeft, 'cbp-spmenu-open' );
    disableOther( 'showLeftPush' );
  };


  function disableOther( button ) {
    if( button !== 'showLeftPush' ) {
      classie.toggle( showLeftPush, 'disabled' );
    }
  }
</script>
<!-- //Classie --><!-- //for toggle left push menu script -->

<!--scrolling js-->
<script src="{{ asset('public/js/jquery.nicescroll.js') }}"></script>
<script src="{{ asset('public/js/scripts.js') }}"></script>
<!--//scrolling js-->

<!-- side nav js -->
<script src="{{ asset('public/js/SidebarNav.min.js') }}" type='text/javascript'></script>
<script>
  $('.sidebar-menu').SidebarNav()
</script>
<!-- //side nav js -->
<!--data tables-->
<script type="text/javascript">
  $(document).ready(function() {
    $('#example').DataTable( {
      "pagingType": "full_numbers"
    } );
  } );
</script>
<!--//data tables-->

</body>
</html>
