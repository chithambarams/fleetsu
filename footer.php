<div class="twelve columns footer-text">
	<p>Copyright &copy; Chithambaram 2017</p>
</div>

<script type="text/javascript">
	$(document).ready(function()
	{
		$(".generate_random_id").click(function(e)
		{
			e.preventDefault();
			$.ajax({
				type: "POST",
				dataType: "HTML",
				url: "./ajax/generateRandomID.php",
				success: function(response)
				{
					$("#device_id").val(response);
				}
			});
		});

		$(".print_current_date").click(function(e)
		{
			e.preventDefault();
			$.ajax({
				type: "POST",
				dataType: "HTML",
				url: "./ajax/getUTCTime.php",
				success: function(response)
				{
					$("#current_date").val(response);
				}
			});
		});

		$(".update_device").click(function(e)
		{
			e.preventDefault();

			var device_id = $(this).data('value');

			$.redirect('updateDevice.php', { 'devID': device_id });
		});
	});
</script>