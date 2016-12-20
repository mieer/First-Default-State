
window.onload = function() {
	'use strict';
	var ajaxWork = getXMLHttpRequestObject();
	ajaxWork.onreadystatechange = function () {
		if (ajaxWork.readyState == 4) {
			if ((ajaxWork.status >= 200 && ajaxWork.status < 300)
				|| (ajaxWork.status == 304)) {
					document.getElementById('ajaxElementId').innerHTML
						= ajaxWork.responseText;
				} else {
					document.getElementById('ajaxElementId').innerHTML
						= 'Error: element not found ' + ajaxWork.statusText;
				}
		}
	};
	document.getElementById('buttonId').onclick = function() {
		ajaxWork.open('GET', 'data/test.txt', true);
		ajaxWork.send(null)
	};
};