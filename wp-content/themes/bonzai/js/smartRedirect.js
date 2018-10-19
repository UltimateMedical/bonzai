( function() {
	//document.domain = 'ultimatemedical.edu'
	var slug = window.top.location.search
	console.log(slug)
	console.log(window.location.search)
	if (slug !== window.location.search) {
		window.location.href = window.location.origin + slug
	}
})()