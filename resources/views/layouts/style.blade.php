<style>

	body, html {
	  height: 100%;
	  margin: 0;
	}

    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }

    #main-bg
    {
    	background-image: url('{{asset("/images/pngtree-white-abstract-vector-web-background-design-image_597636.jpg")}}');
    	background-size: cover;
    	background-repeat: no-repeat;
    	height: 100%;
    	background-position:center;
    }
</style>