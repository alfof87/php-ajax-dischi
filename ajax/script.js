function getData(){
  $.ajax({
    url: "data.php",
    method: "GET",
    data: {
      "poster" : poster,
      "title" : title,
      "author" : author,
      "genre" : genre,
      "year" : year
    },
    success: function(data){
      console.log(data);
      var template = $("#disk-template").html();
      var compiled = Handlebars.compile(template);
      var target = $("#disk ul");
      var diskHTML = compiled(disk);
      target.append(diskHTML);
    },
    error: function(error){
      console.log(error);
    }
  });
}




function init(){
  console.log("hello world");
  getData();
}
$(document).ready(init);
