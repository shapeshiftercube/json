var xhttp = new XMLHttpRequest();
xhttp.onreadystatechange = function() {
	if (this.readyState == 4 && this.status == 200) {
		//console.log(xhttp.responseText);
		// Typical action to be performed when the document is ready:
		var response = JSON.parse(xhttp.responseText);
		//get the length of the object
		var obj_num = Object.keys(response).length;
		var turbines = response;
		var output = '<table id="table_id" class="display"><thead><tr><th>Part ID</th><th>Turbine  Part Status</th></tr></thead><tbody>';
		for(var i = 1; i <= obj_num;i++){
			
			var a = Number(turbines[i]['id']);
		
			if((a%3 == 0 )&& (a%5 == 0)){
				output += '<tr><td>'+a+'</td><td>Coating Damage and Lightning Strike' + '</td></tr>';
			}
			else if( a % 3 == 0){
				output += '<tr><td>'+a+'</td><td>Coating Damage' + '</td></tr>';
			}
			else if ( a % 5 == 0){
				output += '<tr><td>'+a+'</td><td>Lightning Strike' + '</td></tr>';
			}
			else{
				output += '<tr><td>'+a+'</td><td>No issues</td></tr>';
			}
		}
		output += '</tbody><tfoot><tr><th>Turbine ID</th><th>Turbine Status</th></tr></tfoot></table>'
		document.getElementById("table_id").innerHTML = output;
	}
};
xhttp.open("GET", "turbines.json", true);
xhttp.send();