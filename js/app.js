$(document).ready(function(){
//Fetch Data

function load(){
    $.ajax({
     url:"./php/select.php",
     type:"POST",
     success:function(data){
        $("tbody#data").html(data);
     }
    });
}
load();


// Insert Data
$(".submit").on("submit",function(e){
    e.preventDefault();
    var formData=new FormData(this);
    $.ajax({
          url:"./php/insert.php",
          type:"POST",
          data:formData,
          contentType:false,
          processData:false,
          success:function(data){
            load();
          }
    })
})

// Show Data

$(document).on("click","#edit",function(){
     $(".model").show();
     var Id=$(this).data("eid");

   $.ajax({
    url:"./php/show.php",
    type:"POST",
    data:{id:Id},
    success:function(data){
      $("#image_update").html(data);
    }
   })

});


$(".close").click(function(){
  $(".model").hide();
});


// Update Data

$("#update").on("submit",function(e){
  e.preventDefault();
  const name = $("#name").val();
  var Id=$("#id").val();
  var formData=new FormData(this);
  $.ajax({
        url:"./php/update.php",
        type:"POST",
        data:formData,
        contentType:false,
        processData:false,
        success:function(data){
          $(".model").hide();
          load();
        }
  })
})

// DELETE DATA

$(document).on('click','#delete',function(){
      var Id=$(this).data("did");
      $.ajax({
        url:"./php/delete.php",
        type:"POST",
        data:{id:Id},
        success:function(data){
          load();
        }

      })
})




});
