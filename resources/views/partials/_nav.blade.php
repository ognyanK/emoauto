<header class="site-header">
    <div class="header">
        <div class="logo">
            <img src="http://localhost:8000/images/logo.png" alt="" width="60px">
        </div>

        <div class="header-menu">
            <nav>
                <a id="home" href="/">Начало</a>
                <a href="#">Contanct Us</a>
            </nav>
        </div>

        <div class="hamburger">
            <img src="http://localhost:8000/images/hamburger.png" alt="">
            
            <ul class="header-dropdown">
                <li>
                    <a id="home_ham" href="/">Начало</a>
                </li>

                <li>
                    <a href="#">Contanct Us</a>
                </li>
            </ul>
        </div>
    </div>  
</header>
<script>
$(document).ready(function(){
    var URL = "/loadCategories";
    $.ajax({
      type: "GET",
      url: URL
    }).done(function( msg ) {
        for(var i=0;i<msg.length;i++){
            $( "<a href=\"/feed/"+msg[i]+"\">"+msg[i]+"</a>" ).insertAfter( "#home" );
            $( "<li><a href=\"/feed/"+msg[i]+"\">"+msg[i]+"</a></li>" ).appendTo( ".header-dropdown" );
        }
    });
});
</script>