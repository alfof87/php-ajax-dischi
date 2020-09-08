function getData(){
  $.ajax({
    url: "data.php",
    method: "GET",
    // data: {
    //   "poster" : poster,
    //   "title" : title,
    //   "author" : author,
    //   "genre" : genre,
    //   "year" : year
    // },
    success: function(data){

      printData(data["response"]);
    },
    error: function(error){
      console.log(error);
    }
  });
}
function printData(data){
  console.log(data);
  var template = $("#disk-template").html();
  var compiled = Handlebars.compile(template);
  var target = $("#disk ul");
  for (var i = 0; i < data.length; i++) {
    var cd = data[i];
    var diskHTML = compiled(disk);
    target.append(diskHTML);

  }
  }




function init(){
  console.log("hello world");
  getData();

}
$(document).ready(init);
