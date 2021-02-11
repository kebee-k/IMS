			
			<div class="footer">
				<div class="float-right">
					Beta Version <strong>1.0</strong>
				</div>
				<div>
					<strong>Copyright ©<?php echo date('Y');?> <a href="">Moti Engineering PLC</a></strong> 
					&nbsp;&nbsp;&nbsp;&nbsp;
					Developed by <a href=""><em>PS Department.</em></a> 
					
				</div>
			</div>
        </div>
		
		<?php 
			include ("small_chat.php"); 
			include("right-sidenav.php");
		?>
		
	</div>

    <!-- Mainly scripts -->
    <script src="../js/jquery-3.1.1.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.js"></script>
    <script src="../js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="../js/plugins/slimscroll/jquery.slimscroll.min.js"></script>   

    <!-- Custom and plugin javascript -->
    <script src="../js/inspinia.js"></script>
    <script src="../js/plugins/pace/pace.min.js"></script>
	
	<!-- Data Table -->
	<script src="../js/plugins/dataTables/datatables.min.js"></script>
    <script src="../js/plugins/dataTables/dataTables.bootstrap4.min.js"></script>
	
	<script>
        $(document).ready(function(){
            $('.dataTables-example').DataTable({
                pageLength: 25,
                responsive: true,
                dom: '<"html5buttons"B>lTfgitp',
                buttons: [
                    { extend: 'copy'},
                    {extend: 'csv'},
                    {extend: 'excel', title: 'ExampleFile'},
                    {extend: 'pdf', title: 'ExampleFile'},

                    {extend: 'print',
                     customize: function (win){
                            $(win.document.body).addClass('white-bg');
                            $(win.document.body).css('font-size', '10px');

                            $(win.document.body).find('table')
                                    .addClass('compact')
                                    .css('font-size', 'inherit');
                    }
                    }
                ]

            });

        });
		

    </script>

	<!-- Chosen dropdown searching  -->
    <script src="../js/plugins/chosen/chosen.jquery.js"></script>
	
	<!-- Chosen dropdown searching -->
	<script>
        $('.chosen-select').chosen({width: "100%"});
    </script>
	
	<!-- Data picker -->
   <script src="../js/plugins/datapicker/bootstrap-datepicker.js"></script>
	
	<!-- Date picker -->
	<script>
		var mem = $('#data_1 .input-group.date').datepicker({
			todayBtn: "linked",
			keyboardNavigation: false,
			forceParse: false,
			calendarWeeks: true,
			autoclose: true
		});
		
		$('#data_2 .input-group.date').datepicker({
			startView: 1,
			todayBtn: "linked",
			keyboardNavigation: false,
			forceParse: false,
			autoclose: true,
			format: "dd/mm/yyyy"
		});

		$('#data_3 .input-group.date').datepicker({
			startView: 2,
			todayBtn: "linked",
			keyboardNavigation: false,
			forceParse: false,
			autoclose: true
		});
		
		$('#data_4 .input-group.date').datepicker({
			minViewMode: 1,
			keyboardNavigation: false,
			forceParse: false,
			forceParse: false,
			autoclose: true,
			todayHighlight: true
		});

		$('#data_5 .input-daterange').datepicker({
			keyboardNavigation: false,
			forceParse: false,
			autoclose: true
		});
	</script>
	
	<!-- Input Mask-->
    <script src="../js/plugins/jasny/jasny-bootstrap.min.js"></script>
	
	 <!-- Switchery -->
	<script src="../js/plugins/switchery/switchery.js"></script>
   
	<!-- Switcher -->
	<script>
		var elem = document.querySelector('.js-switch');
            var switchery = new Switchery(elem, { color: '#1AB394' });

            var elem_2 = document.querySelector('.js-switch_2');
            var switchery_2 = new Switchery(elem_2, { color: '#ED5565' });

            var elem_3 = document.querySelector('.js-switch_3');
            var switchery_3 = new Switchery(elem_3, { color: '#1AB394' });

            var elem_4 = document.querySelector('.js-switch_4');
            var switchery_4 = new Switchery(elem_4, { color: '#f8ac59' });
                switchery_4.disable();
	</script>
	
	
	</body>
</html>
		