	<!-- Bootstrap core JavaScript -->
    <script src="/assets/jquery/jquery.min.js"></script>
    <script src="/assets/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script type="text/javascript">
	$(document).ready(function() {
	    $("#sendbtn").click(
	        function(){
	            $.ajax({
	                url:      "core/ajax_comment.php",
	                type:     "POST",
	                dataType: "html",
	                data: $("#form").serialize(),
	                success: function(response) {
	                    $('#result_ajax').html(response);
	                    $('#name').val("");
	                    $('#email').val("");
	                    $('#comment').val("");
	                    getComments();
	                },
	                error: function(response) {
	                    $('#result_ajax').html('Ошибка.');
	                }
	            });
	            return false; 
	        }
	    );
	});

	window.onload = function(){
        getComments();
    };

	function getComments() {
		var id = $('#id').val();
        $.post('core/ajax_getcomments.php', { id: id }, function(data) {
            $('#comments').html(data);
        })
	};
	</script>
