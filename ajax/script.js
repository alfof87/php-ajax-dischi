function getData(){
  $.ajax({
    url: "data.php",
    method: "GET",
    success: function(data){
      console.log(data);
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
