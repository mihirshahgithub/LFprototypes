//Create GLOBAL variable below here on line 2
var global_result;
//console logs happen in the document.ready function after the rest of the page is loaded. more specifically, they happen after the doc is loaded and the button is clicked
//in the .ajax call, console log happens in the code block of the success function
$(document).ready(function(){
	$('button').click(function(){
		console.log('click initiated');
		$.ajax({
			dataType: 'json',
			url: 'http://ax.itunes.apple.com/WebObjects/MZStoreServices.woa/ws/RSS/topMovies/json',
			success: function(result) {
				console.log('AJAX Success function called, with the following result:', result);
				global_result=result;
				var movie1_info=global_result.feed.entry[0]['im:image'][2].label;
				console.log(movie1_info);
				var movie_array=global_result.feed.entry[0]['im:image'][2].label;
				for(var i=0;i<movie_array.length;i++){
					var image_list=$('<img>').attr('src',movie_array[i]['im:image'][2]['label']);
					var movie_info=$('<div>').html(movie_array[i]['title']['label'],movie_array[i]['im:artist']['label']);
					$('#main').append(image_list, movie_info);

				}
			}
		});
		console.log('End of click function');
	});
});

