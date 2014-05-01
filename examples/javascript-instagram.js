$.ajax({
	type: "GET",
	dataType: "jsonp",
	cache: false,
	url: "https://api.instagram.com/v1/users/[USER_ID]/media/recent/?client_id=[CLIENT_ID]", // example url
	success: function(data) {
		console.log(data); // data is a json object that you can iterate through
	},
	error: function(xhr, ajaxOptions, thrownError) {
		console.log(xhr.status, thrownError);
	}
});