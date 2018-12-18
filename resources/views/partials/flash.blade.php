 @if (session('status'))        
<script>
 $(document).ready(function() { 	

 	  swal({
                title: "Good job!",
                text: "{{ session('status') }}",
                buttonsStyling: false,
                confirmButtonClass: "btn btn-success",
                type: "success"
            }).catch(swal.noop)
	});			 
</script>
 @endif  

@if (session('errors'))        
<script>
 $(document).ready(function() {
 	  swal({
                title: "Error!",
                text: "Please correct errors and try again.",
                buttonsStyling: false,
                confirmButtonClass: "btn btn-danger",
                type: "warning"
            }).catch(swal.noop)
	});			 
</script>
 @endif  