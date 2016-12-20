function getXMLHttpRequestObject() {
	var ajaxWork = null;
	if (window.XMLHttpRequest) {
		ajaxWork = new XMLHttpRequest();
	} else if (window.ActiveXObject) { // Older IE
		ajaxWork = new ActiveXObject('MSXML2.XMLHTTP.3.0');
	}
	return ajaxWork;
}
