<!DOCTYPE html>
<html>
<head>
	<script src="http://demo.itsolutionstuff.com/plugin/jquery.js"></script>
	<link rel="stylesheet" href="http://demo.itsolutionstuff.com/plugin/bootstrap-3.min.css">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.0.1/min/dropzone.min.css" rel="stylesheet">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.2.0/min/dropzone.min.js"></script>
</head>
<body>


<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h2>PHP - Multiple Image upload using dropzone.js</h2>
            
            <!-- action will be file for indicate upload folder & database insert -->
			<form action="upload.php" enctype="multipart/form-data" class="dropzone" id="image-upload">
				<div>
					<h3>Upload Multiple Image By Click On Box</h3>
				</div>
			</form>
		</div>
	</div>
</div>


<script type="text/javascript">
        // image setting
	Dropzone.options.imageUpload = {
        // max file upload size
	maxFilesize:2,
        //validation extension
	acceptedFiles: ".jpeg,.jpg,.png,.gif",
	//add remove button
	addRemoveLinks: true,
	//allow multiple file upload
	uploadMultiple: false,
	//can click on image
	clickable: true,
	//default message
	dictDefaultMessage: "Drag your images",
	parallelUploads: 100,
	dictFileTooBig: 'Image is bigger than 8MB',
	
};



	
</script>


</body>
</html>