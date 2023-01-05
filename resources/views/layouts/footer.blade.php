
	@section('footer')
		<p>Footer here</p>
	@show
	
	<script src="{{asset('/js/ajax/libs/jquery/jquery.min.js')}}"></script>
	<script src="{{asset('/js/bootstrap.min.js')}}"></script>
	<script type="text/javascript">
		$(document).ready(function(){

			// alert("okay");

			$('#branchcode').keyup(function(){

				var query = $(this).val();
				
				alert(query);

			});
		});
	</script>
</body>
</html>