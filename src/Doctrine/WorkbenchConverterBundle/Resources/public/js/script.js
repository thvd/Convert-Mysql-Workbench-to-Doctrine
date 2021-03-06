/* Author: Theodoor van Donge */


$(document).ready(function() {
	// Setup the dnd listeners.
	var dropZone = $(this),
		files = [];
	
	dropZone.on('dragover', function(e) {
		e.stopPropagation();
		e.preventDefault();
		e.originalEvent.dataTransfer.dropEffect = 'copy'; // Explicitly show this is a copy.
	});
	
	dropZone.on('drop', function(e) {
		e.stopPropagation();
		e.preventDefault();
		
		files = e.originalEvent.dataTransfer.files; // FileList object.

		// files is a FileList of File objects. List some properties.
		var output = [];
		
		for (var i = 0, f; f = files[i]; i++) {
			output.push('<li><strong>', f.name, '</strong> (', f.type || 'n/a', ') - ',
				  f.size, ' bytes, last modified: ',
				  f.lastModifiedDate.toLocaleDateString(), '</li>');
		}
		$('#list').html('<ul>' + output.join('') + '</ul>');
	});
	
	
	$('#convert').on('click', function(e) {
		if (files.length < 1) {
			alert('No files found.');
			return;
		}
		
		var /*ajax = new XMLHttpRequest(),*/
			formData = new FormData();
		
		formData.append('form[workbenchfile]', files[0]);
		formData.append('form[_token]', csrf_token);
		
		
		/*ajax.addEventListener('load', function(e) {
			var response = e.target.response;
			$('#output').val(response);
		}, false);
		ajax.open('POST', convert_path);
		ajax.send(formData);
		*/
		
		$.ajax({
			url: convert_path,
			type: 'POST',
			data: formData,
		    contentType: false,
		    processData: false
		}).done(function(response) {
			$('#output').val(response);
		});
	});
});
