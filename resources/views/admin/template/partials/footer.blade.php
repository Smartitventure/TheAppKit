<!-- footer start-->
<footer></footer>
<!-- footer end -->

<script src="https://code.jquery.com/jquery-1.12.4.min.js"
integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ"
crossorigin="anonymous">
<script/>
    <script src="{{ asset('asset/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('asset/js/jquery.ccpicker.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/simplePagination.js/1.4/jquery.simplePagination.min.js" integrity="sha512-J4OD+6Nca5l8HwpKlxiZZ5iF79e9sgRGSf0GxLsL1W55HHdg48AEiKCXqvQCNtA1NOMOVrw15DXnVuPpBm2mPg==" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/simplePagination.js/1.4/jquery.simplePagination.js" integrity="sha512-D8ZYpkcpCShIdi/rxpVjyKIo4+cos46+lUaPOn2RXe8Wl5geuxwmFoP+0Aj6wiZghAphh4LNxnPDiW4B802rjQ==" crossorigin="anonymous"></script>
	<script src="https://static.codepen.io/assets/common/stopExecutionOnTimeout-157cd5b220a5c80d4ff8e0e70ac069bffd87a61252088146915e8726e5d9f147.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-circle-progress/1.1.3/circle-progress.min.js"></script>
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.2/dist/jquery.validate.min.js"></script>

<script>
$(document).ready(function() {
  $("#formButton").click(function() {
    $("#form1").toggle();
  });
});
</script>

<script>
$(document).ready(function() {
  $("#shipping").click(function() {
    $("#form_shipping").toggle();
  });
});
</script>

<script>
function limitText(field, maxChar){
    $(field).attr('maxlength',maxChar);
}
</script>

<script>
function show() {
//Heading Color
  var x = document.getElementById("myHeadingColor").value;
  document.getElementById("heading").style.color = x;
}
window.addEventListener("load", () => {  
  document.getElementById("myHeadingColor").addEventListener("input",show); 
  show(); 
});
function subshow() {
//Sub-Heading Color
  var x = document.getElementById("mySubColor").value;
  document.getElementById("sub_heading").style.color = x;
}
window.addEventListener("load", () => {  
  document.getElementById("mySubColor").addEventListener("input",subshow); 
  subshow(); 
});
function parshow() {
//Paragraph Color
  var x = document.getElementById("myParagraphColor").value;
  document.getElementById("paragraph").style.color = x;
}
window.addEventListener("load", () => {  
  document.getElementById("myParagraphColor").addEventListener("input",parshow); 
  parshow(); 
});
function btnshow() {
//Button Color
  var x = document.getElementById("myButtonColor").value;
  document.getElementById("button").style.color = x;
}
window.addEventListener("load", () => {  
  document.getElementById("myButtonColor").addEventListener("input",btnshow); 
  btnshow(); 
});
function btnbgshow() {
//Button Background Color
  var x = document.getElementById("myButtonBgColor").value;
  document.getElementById("button").style.backgroundColor = x;
}
window.addEventListener("load", () => {  
  document.getElementById("myButtonBgColor").addEventListener("input",btnbgshow); 
  btnbgshow(); 
});
</script>

<script>
const headingshow = () => {
//Heading
  var x = document.getElementById("heading_size").value;
  if(x==='20'){
  document.getElementById("heading").style.fontSize = '20px';}
  else if (x==='18'){
  document.getElementById("heading").style.fontSize = '18px';}
  else if(x==='16'){
  document.getElementById("heading").style.fontSize = '16px';}
  else if (x==='14'){
  document.getElementById("heading").style.fontSize = '14px';}
  else if (x==='12'){
  document.getElementById("heading").style.fontSize = '12px';}
}
window.addEventListener("load", () => {  
  document.getElementById("heading_size").addEventListener("change",headingshow); 
  headingshow(); 
});
//Sub-Heading
const hshow = () => {
  var x = document.getElementById("sub_heading_size").value;
  if(x==='20'){
  document.getElementById("sub_heading").style.fontSize = '20px';}
  else if (x==='18'){
  document.getElementById("sub_heading").style.fontSize = '18px';}
  else if(x==='16'){
  document.getElementById("sub_heading").style.fontSize = '16px';}
  else if (x==='14'){
  document.getElementById("sub_heading").style.fontSize = '14px';}
  else if (x==='12'){
  document.getElementById("sub_heading").style.fontSize = '12px';}
}
window.addEventListener("load", () => {  
  document.getElementById("sub_heading_size").addEventListener("change",hshow); 
  hshow(); 
});
//paragraph
const pshow = () => {
  var x = document.getElementById("paragraph_size").value;
  if(x==='20'){
  document.getElementById("paragraph").style.fontSize = '20px';}
  else if (x==='18'){
  document.getElementById("paragraph").style.fontSize = '18px';}
  else if(x==='16'){
  document.getElementById("paragraph").style.fontSize = '16px';}
  else if (x==='14'){
  document.getElementById("paragraph").style.fontSize = '14px';}
  else if (x==='12'){
  document.getElementById("paragraph").style.fontSize = '12px';}
}
window.addEventListener("load", () => {  
  document.getElementById("paragraph_size").addEventListener("change",pshow); 
  pshow(); 
});
//button
const bshow = () => {
  var x = document.getElementById("button_size").value;
  if(x==='20'){
  document.getElementById("button").style.fontSize = '20px';}
  else if (x==='18'){
  document.getElementById("button").style.fontSize = '18px';}
  else if(x==='16'){
  document.getElementById("button").style.fontSize = '16px';}
  else if (x==='14'){
  document.getElementById("button").style.fontSize = '14px';}
  else if (x==='12'){
  document.getElementById("button").style.fontSize = '12px';}
}
window.addEventListener("load", () => {  
  document.getElementById("button_size").addEventListener("change",bshow); 
  bshow(); 
});
</script>

<script>
    $("#heading_name").keyup
        (function (e) {
            //Heading
            var value = this.value;
            $("#heading").html(value);       
    });
    $("#sub_heading_name").keyup
        (function (e) { 
            //Sub-Heading
            var valueh = this.value;
            $("#sub_heading").html(valueh);      
    });
    $("#paragraph_name").keyup
        (function (e) { 
            //paragraph
            var valuep = this.value;
            $("#paragraph").html(valuep);   
    });
    $("#image").change(function (e) { 
            // App Logo
            url = URL.createObjectURL(e.target.files[0]),
            $("#preview").attr("src",url);
            console.log(url);
                
    });
</script>
<script>
$(document).ready(function () {
$('#myform').validate({ // initialize the plugin
    rules: {
        name: {
            required: true,
        },
    },
    submitHandler: function (form) { // for demo  
        return false; // for dem
    }
});
});
</script>
<script>
jQuery(function ($) {
        $(".sidebar-dropdown > a").click(function() {
    $(".sidebar-submenu").slideUp(200);
    if (
        $(this)
        .parent()
        .hasClass("active")
    ) {
        $(".sidebar-dropdown").removeClass("active");
        $(this)
        .parent()
        .removeClass("active");
    } else {
        $(".sidebar-dropdown").removeClass("active");
        $(this)
        .next(".sidebar-submenu")
        .slideDown(200);
        $(this)
        .parent()
        .addClass("active");
    }
    });
});
</script>
<script>
    @if(session('status'))
    swal({
    title: '{{session('status')}}',
    icon: '{{session('statuscode')}}',
    button: "OK",
    });
    @endif
    $.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });
</script>                   
</body>

</html>