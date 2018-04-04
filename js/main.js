function $(id) {
  return document.getElementById(id);
}

dragula([$('drag-elements')], {
  revertOnSpill: true
}).on('drop', function(el) {
 ($('drag-elements').children.length > 0)  
});

jQuery("button").click(function(){
	var id_articles=[];
	let elements = jQuery('.get_id');
 	for (let i = 0; i < elements.length && i < news_count; ++i) {	
		var get_id = elements[i].getAttribute('id');
		id_articles.push(get_id);	
	}

	//convertie mon taleau js en tableau json
	let json_data = JSON.stringify(id_articles);

	//envoie id_articles sur article_site_admin.php 
	xmlhttp = new XMLHttpRequest;
	xmlhttp.onreadystatechange = function() {
	    if (this.readyState == 4 && this.status == 200) {
	       console.log(this.responseText);
	    }
	};
	xmlhttp.open( "POST", "http://localhost/webzine_de_lamour/article_site_json.php", true);
	xmlhttp.setRequestHeader( "Content-Type", "application/json" );
	xmlhttp.send(json_data);
}); 
 