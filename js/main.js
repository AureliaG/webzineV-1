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
		console.log(id_articles);
	}
});