<!doctype html>
<html>
<?php include_once 'header.php'; ?>
<style>
html{
    min-height:100%;/* make sure it is at least as tall as the viewport */
    position:relative;
}
body{
    height:100%; /* force the BODY element to match the height of the HTML element */
}
#contact {
	height: 900px
}

</style>
<body>

<!-- Header -->
<?php include_once 'nav.php'; ?>
 
<div class="allcontain">
    <div class="row">
        <div id="tc" class="col-md-12">
            <div class="col-md-4">

                <h1>Tracking Your Order</h1>

                <form class="form-inline" action="#" method="post" id="form-login">
                         <input type="text" class="input-large valid" id="cidname" name="cidname" placeholder="Customer ID">
                         <input type="text" class="input-large valid" id="ponumber" name="ponumber" placeholder="Order Number">
                         <button class="btn btn-primary" id="track" name="track">Track</button>
                 </form>

                <a href="#">Forgot your Customer ID?</a>
                
            </div>

            <div id="trackimg" class="col-md-8 col-xs-12">
                <div id="add"></div>
                <div id="res">
                    <span id="title"></span>
                    <table id="ajaxresponse">
                         
                    </table>
                </div>  
                <img id="tmp" src="image/track2.png" alt="">    
            </div>
        </div><!-- /map-outer -->
    </div> <!-- /row -->
</div>
  
<?php include_once 'footer.php'; ?>
<script>
$.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });
$("#track").prop('disabled', true);
$('#poreset').click(function(){
    $('.valid').val("");
    $("#ponumber").removeClass('err');
    $("#cidname").removeClass('err');
    $("#cidname").attr("placeholder", "Customer ID").val("");
    $("#ponumber").attr("placeholder", "PO number").val("");
    $("#track").prop('disabled', true);
    $('#resulttitle').replaceWith('<a href="#" id="title">Forgot your Customer ID?</a>');
    $('#ajaxresponse').empty();
    $('.addedDiv').empty();
});

// var povalid;
// var cidvalid;
// var result;
$(document).ready(function(){

$('#cidname').on({
    focus: function(){
        $("#ciderror").empty();
    },

    blur: function(){
        $.ajax({
            type: "POST",
            url:"cid.php",
            dataType: "json",
            data:{
                cidvalue:$('#cidname').val()
                },
            success: function(data){
                if (data.success) {
                    $("#cidname").removeClass('err');
                    $("#track").prop('disabled', false);
                    console.log('cidvalid');
                }           
                if(data.success == false) {
                    $("#cidname").addClass('err');
                    $("#cidname").attr("placeholder", "Customer ID doesn't exist,Please try again").val("");
                    $("#cidname").focus();
                    console.log("cid data is false");
                }
            },
            error:function(jqXHR, status, err){
                console.log("cid wrong");
            },
        });
    },

});

$('#title').on({
     click: function(){
          $('div#add').replaceWith('<div class="addedDiv" id="add">Please send email to: info@sinobecresources.com to require your customer ID.</div>');
          $('div.addedDiv').slideDown("slow");
     }
});
 
$('#track').on({ 
    click: function(event){
        event.preventDefault();
        // var ponumber = $('#ponumber').val();
        $.ajax({
            type: "POST",
            url:"po.php",
            dataType: "json",
            data:{
                povalue:$('#ponumber').val(),
                cidvalue:$('#cidname').val()
                },
            success: function(datat){
               if (datat.success) {
                    $("#tmp").fadeOut();
                    $('.addedDiv').empty();
                    $("#ponumber").removeClass('err');
                    $('#title').replaceWith('<span id="resulttitle"><h3>Your PO tracking result:</h3></span>');
                    $('#ajaxresponse').replaceWith('<table class="table table-hover table-responsive" id="ajaxresponse"><thead class="thead-inverse"><tr><td>AG PO#</td><td>SINOBEC PO#</td><td>Invoice #</td><td>SHIPPING REF</td><td>CONTAINER#</td><td>ETA</td></tr></thead><tbody></tbody></table>');
                    for (var i = 0; i < datat.size; i++) {  
                        var newString = ['<tr><td>'+datat.result[i].ag+'</td><td>'+datat.result[i].sinobec+'</td><td>'+datat.result[i].invoice+'</td><td>'+datat.result[i].shipref+'</td><td>'+datat.result[i].contref+'</td><td>'+datat.result[i].eta+'</td></tr>'].join('');
                        $('#ajaxresponse tbody').append(newString);
                    }
                     console.log('povalid');
                    // if(result == "cp") {
                    //  $("#track").prop('disabled', false);
                    // }
                }           
                else {
                    $("#ponumber").addClass('err');
                    $("#ponumber").attr("placeholder", "PO number does not exist!").val("");
                    $("#ponumber").focus();
                    console.log("po number is false");
                }
            },
            error:function(jqXHR, status, err){
                console.log("po wrong: "+status);
            },
        });
    },
});
});

</script>
</body>
</html>