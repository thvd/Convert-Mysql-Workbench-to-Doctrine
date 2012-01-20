/* Author: Theodoor van Donge */




$(document).ready(function() {
	// Setup the dnd listeners.
	var dropZone = $('#drop_zone');
	dropZone.on('dragover', function(e) {
		e.stopPropagation();
		e.preventDefault();
		e.dataTransfer.dropEffect = 'copy'; // Explicitly show this is a copy.
	});
	
	dropZone.on('drop', function(e) {
		e.stopPropagation();
		e.preventDefault();
		
		var files = e.originalEvent.dataTransfer.files; // FileList object.

		// files is a FileList of File objects. List some properties.
		var output = [];
		for (var i = 0, f; f = files[i]; i++) {
			output.push('<li><strong>', f.name, '</strong> (', f.type || 'n/a', ') - ',
                  f.size, ' bytes, last modified: ',
                  f.lastModifiedDate.toLocaleDateString(), '</li>');
		}
		document.getElementById('list').innerHTML = '<ul>' + output.join('') + '</ul>';
	});
});
