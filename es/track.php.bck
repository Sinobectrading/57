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
#contact {
	height: 900px
}

</style>
<body>

<!-- Header -->
<?php include_once 'nav.php'; ?>
 
<div class="allcontain">
    <div class="container">
    <div class="row">
        <div id="tc" class="col-md-12">
            <div class="col-md-4">

                <h1>Seguimiento de su orden</h1>

                <form class="form-inline" action="#" method="post" id="form-login">
                    <span class="input input--nao">
                        <input class="input__field input__field--nao valid" type="text" id="cidname" name="cidname"/>
                        <label class="input__label input__label--nao" for="cidname">
                            <span class="input__label-content input__label-content--nao">Identificación del cliente</span>
                        </label>
                        <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                            <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                        </svg>
                    </span>
                    <span class="input input--nao">
                        <input class="input__field input__field--nao" type="text" id="ponumber" name="ponumber" />
                        <label class="input__label input__label--nao" for="ponumber">
                            <span class="input__label-content input__label-content--nao">Número de orden</span>
                        </label>
                        <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                            <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                        </svg>
                    </span>
                         <!-- <input type="text" class="input-large valid" id="cidname" name="cidname" placeholder="Customer ID"> -->
                         <!-- <input type="text" class="input-large valid" id="ponumber" name="ponumber" placeholder="Order Number"> -->
                    <span class="input input--nao"><button class="btn btn-primary" id="track" name="track">Pista</button></span>
                 </form>

                <a href="#">Olvidó su identificación de cliente?</a>
                
            </div>

            <div id="trackimg" class="col-md-8 col-xs-12">
                <div id="add"></div>
                <div id="res">
                    <span id="title"></span>
                    <table id="ajaxresponse">
                         
                    </table>
                </div>  
                <img id="tmp" src="../image/rawpixel-com2.jpg" alt="">    
            </div>
        </div><!-- /map-outer -->
    </div> <!-- /row -->
</div>
</div>  
<?php include_once 'footer.php'; ?>
<script>
/*!
 * classie - class helper functions
 * from bonzo https://github.com/ded/bonzo
 * 
 * classie.has( elem, 'my-class' ) -> true/false
 * classie.add( elem, 'my-new-class' )
 * classie.remove( elem, 'my-unwanted-class' )
 * classie.toggle( elem, 'my-class' )
 */

/*jshint browser: true, strict: true, undef: true */
/*global define: false */

( function( window ) {

'use strict';

// class helper functions from bonzo https://github.com/ded/bonzo

function classReg( className ) {
  return new RegExp("(^|\\s+)" + className + "(\\s+|$)");
}

// classList support for class management
// altho to be fair, the api sucks because it won't accept multiple classes at once
var hasClass, addClass, removeClass;

if ( 'classList' in document.documentElement ) {
  hasClass = function( elem, c ) {
    return elem.classList.contains( c );
  };
  addClass = function( elem, c ) {
    elem.classList.add( c );
  };
  removeClass = function( elem, c ) {
    elem.classList.remove( c );
  };
}
else {
  hasClass = function( elem, c ) {
    return classReg( c ).test( elem.className );
  };
  addClass = function( elem, c ) {
    if ( !hasClass( elem, c ) ) {
      elem.className = elem.className + ' ' + c;
    }
  };
  removeClass = function( elem, c ) {
    elem.className = elem.className.replace( classReg( c ), ' ' );
  };
}

function toggleClass( elem, c ) {
  var fn = hasClass( elem, c ) ? removeClass : addClass;
  fn( elem, c );
}

var classie = {
  // full names
  hasClass: hasClass,
  addClass: addClass,
  removeClass: removeClass,
  toggleClass: toggleClass,
  // short names
  has: hasClass,
  add: addClass,
  remove: removeClass,
  toggle: toggleClass
};

// transport
if ( typeof define === 'function' && define.amd ) {
  // AMD
  define( classie );
} else {
  // browser global
  window.classie = classie;
}

})( window );

</script>
<script>
(function() {
    // trim polyfill : https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String/Trim
    if (!String.prototype.trim) {
        (function() {
            // Make sure we trim BOM and NBSP
            var rtrim = /^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g;
            String.prototype.trim = function() {
                return this.replace(rtrim, '');
            };
        })();
    }

    [].slice.call( document.querySelectorAll( 'input.input__field' ) ).forEach( function( inputEl ) {
        // in case the input is already filled..
        if( inputEl.value.trim() !== '' ) {
            classie.add( inputEl.parentNode, 'input--filled' );
        }

        // events:
        inputEl.addEventListener( 'focus', onInputFocus );
        inputEl.addEventListener( 'blur', onInputBlur );
    } );

    function onInputFocus( ev ) {
        classie.add( ev.target.parentNode, 'input--filled' );
    }

    function onInputBlur( ev ) {
        if( ev.target.value.trim() === '' ) {
            classie.remove( ev.target.parentNode, 'input--filled' );
        }
    }
})();
</script>
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
                    $("#cidname").attr("placeholder", "La identificación del cliente no existe.").val("");
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
                    $('#title').replaceWith('<span id="resulttitle"><h1>Su resultado de seguimiento de PO:</h1></span>');
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
                    $("#ponumber").attr("placeholder", "El número de pedido no existe.").val("");
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