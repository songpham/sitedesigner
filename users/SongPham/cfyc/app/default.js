        // Closes the sidebar menu
    $("#menu-close").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });

    // Opens the sidebar menu
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });
    
    /* adds/removes hidden class for main menu submenus */
    
    $('#desktop-nav a').click(function (e) {
		if($(this).parent('li').hasClass('active')){
			$( $(this).attr('href') ).hide();
		} else {
			e.preventDefault();
			$(this).tab('show');
		}
	});