$(function(){

	var fx = {
		"initModal" : function(){
			if($(".modal-window").length == 0){
				$("<div>").attr("id", "jquery-overlay").appendTo("body");
				return $("<div>")
						.addClass("modal-window")
						.appendTo("body");

			}
			else {
				return $(".modal-window");
			}
		}
	}

/*$(function(){
		$.ajaxSetup({
		headers:{
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr(
				'content');*

		}
	});*/

	$("a.prod_more").on("click", function(event){
		event.preventDefault();
		var data = $(this).attr("data-id");
		modal = fx.initModal();
		$("<a>").attr("href", "#")
				.addClass("modal-close-btn")
				.html("&times;")
				.click(function(event){
					event.preventDefault()
					$(".modal-window").remove();
					$("#jquery-overlay").remove();

				}).appendTo(modal);
		$.ajax({
			type: "Post",
			url: "/ajax",
			data: "id="+data,
			success: function(data){
				modal.append(data);

			},
			error: function(msg){
				modal.append(msg);
			}
		}) ;
	});
})