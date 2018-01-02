<!doctype html>
<html>
<?php include_once '../header.php'; ?>
<style>
html{
    min-height:100%;/* make sure it is at least as tall as the viewport */
    position:relative;
}
body{
    height:100%; /* force the BODY element to match the height of the HTML element */
}

</style>
<body>

<!-- Header -->
<?php include_once 'nav.php'; ?>
 
<div class="allcontain">
    <div class="container">
        <div class="row">
            <div id="reset" class="col-md-12">
 
                <h1>What kind of trouble you met?</h1>
                <div class="container">
                  <div class="accordion-option">
                     <a href="javascript:void(0)" class="toggle-accordion active" accordion-id="#accordion"></a>
                </div>
                <div class="clearfix"></div>
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    
                    <!-- Tag 1 -->
                    <div class="panel panel-default">
                         <div class="panel-heading" role="tab" id="headingOne">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                I forget my customer ID
                                </a>
                            </h4>
                         </div>

                         <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                              <div class="panel-body">
                                   Please contact our customer service department.
                                   <li><span>Telephone : </span><span>+1 (561) 409 2205</span></li>
                                   <li><span>Email : </span><span>randysinometalresources@gmail.com</span></li>
                              </div>
                         </div>
                    </div>

                    <!-- Tag 1 -->
                    <div class="panel panel-default">
                         <div class="panel-heading" role="tab" id="headingTwo">
                              <h4 class="panel-title">
                                   <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                   I forget my password
                                   </a>
                              </h4>
                         </div>
                         <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                              <div class="panel-body">
                                   To reset password, please click <a href="">HERE</a>.
                              </div>
                         </div>
                    </div>

                     
               </div>
          </div>
                
 
            
        </div><!-- /map-outer -->
    </div> <!-- /row -->
</div>
</div>  
<?php include_once 'footer.php'; ?>
<script>
$(document).ready(function() {

  $(".toggle-accordion").on("click", function() {
    var accordionId = $(this).attr("accordion-id"),
      numPanelOpen = $(accordionId + ' .collapse.in').length;
    
    $(this).toggleClass("active");

    if (numPanelOpen == 0) {
      openAllPanels(accordionId);
    } else {
      closeAllPanels(accordionId);
    }
  })

  // openAllPanels = function(aId) {
  //   console.log("setAllPanelOpen");
  //   $(aId + ' .panel-collapse:not(".in")').collapse('show');
  // }
  // closeAllPanels = function(aId) {
  //   console.log("setAllPanelclose");
  //   $(aId + ' .panel-collapse.in').collapse('hide');
  // }
     
});
</script>
</body>
</html>