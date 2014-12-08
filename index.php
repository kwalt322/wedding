<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>The Wedding of Bill & Pete</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <meta name="viewport" content="width=device-width">

        <link href='http://fonts.googleapis.com/css?family=Lato:300' rel='stylesheet' type='text/css'>
       
       <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
       <script src="jquery.superscrollorama.js"></script>
       <script type="text/javascript" src="TweenMax.min.js"></script>








    <script>
        $(document).ready(function() {

            $("#submitbutton").click(function() {

                //find every span inside the contact form and remove it
                $("#contact").find("span").remove();

                if( $("#first").val() == "") {
                    $("#first").replaceWith("<input type='text' placeholder='FIRST NAME PLEASE!' id='first' name='first' style='width: 48%; float:left; background-color: rgba(255,255,255,.4)' />");
                    $("#first").focus();

                    return false;
                }

                if( $("#last").val() == "") {
                    $("#last").replaceWith("<input type='text' placeholder='LAST NAME PLEASE!' id='last' name='last' style='width: 48%; float:right; background-color: rgba(255,255,255,.4)' />");
                    $("#last").focus();

                    return false;
                }

                if( $("#message").val() == "") {
                    $("#message").replaceWith("<input type='text' placeholder='Why No Message?' id='message' name='message' style='width: 98%; background-color: rgba(255,255,255,.4)' />");
                    $("#message").focus();

                    return false;
                }


                $("#guest").submit();

            })



            $("#submitbutton2").click(function() {
                if( $("#comcom").val() == "") {
                    $("#comcom").replaceWith("<input type='text' placeholder='No ComCom!' id='comcom' name='comcom' />");
                    $("#comcom").focus();

                    return false;
                }

             $("#submitbutton2").submit();   

            })


        
        });
    </script>



    <script>
        $(document).ready(function() {
            var controller = $.superscrollorama();
            
           controller.addTween('#bird20', 
              TweenMax.from($('#bird20'),.5,{
                css:{opacity:0}}),
                50, 
                -350);

                controller.addTween('#bird20', 
                  TweenMax.from($('#bird20'),.5,{
                    css:{opacity:1}}),
                    50, 
                    -250); 

           controller.addTween('#bird19', 
              TweenMax.from($('#bird19'),.5,{
                css:{opacity:0}}),
                50, 
                -300); 

                controller.addTween('#bird19', 
                  TweenMax.from($('#bird19'),.5,{
                    css:{opacity:1}}),
                    50, 
                    -200);

           controller.addTween('#bird18', 
              TweenMax.from($('#bird18'),.5,{
                css:{opacity:0}}),
                50, 
                -250);

                controller.addTween('#bird18', 
                  TweenMax.from($('#bird18'),.5,{
                    css:{opacity:0}}),
                    50, 
                    -150); 

           controller.addTween('#bird17', 
              TweenMax.from($('#bird17'),.5,{
                css:{opacity:0}}),
                50, 
                -200);

                controller.addTween('#bird17', 
                  TweenMax.from($('#bird17'),.5,{
                    css:{opacity:0}}),
                    50, 
                    -100); 

           controller.addTween('#bird16', 
              TweenMax.from($('#bird16'),.5,{
                css:{opacity:0}}),
                50, 
                -150); 

                controller.addTween('#bird16', 
                  TweenMax.from($('#bird16'),.5,{
                    css:{opacity:0}}),
                    50, 
                    -50); 

           controller.addTween('#bird15', 
              TweenMax.from($('#bird15'),.5,{
                css:{opacity:0}}),
                50, 
                -100); 

                controller.addTween('#bird15', 
                  TweenMax.from($('#bird15'),.5,{
                    css:{opacity:0}}),
                    50, 
                    0); 

           controller.addTween('#bird14', 
              TweenMax.from($('#bird14'),.5,{
                css:{opacity:0}}),
                50, 
                -50); 

                controller.addTween('#bird14', 
                  TweenMax.from($('#bird14'),.5,{
                    css:{opacity:0}}),
                    50, 
                    50); 

           controller.addTween('#bird13', 
              TweenMax.from($('#bird13'),.5,{
                css:{opacity:0}}),
                50, 
                0); 

                controller.addTween('#bird13', 
                  TweenMax.from($('#bird13'),.5,{
                    css:{opacity:0}}),
                    50, 
                    100); 

           controller.addTween('#bird12', 
              TweenMax.from($('#bird12'),.5,{
                css:{opacity:0}}),
                50, 
                50); 

                controller.addTween('#bird12', 
                  TweenMax.from($('#bird12'),.5,{
                    css:{opacity:0}}),
                    50, 
                    150);

           controller.addTween('#bird11', 
              TweenMax.from($('#bird11'),.5,{
                css:{opacity:0}}),
                50, 
                100); 

                controller.addTween('#bird11', 
                  TweenMax.from($('#bird11'),.5,{
                    css:{opacity:0}}),
                    50, 
                    200);

           controller.addTween('#bird10', 
              TweenMax.from($('#bird10'),.5,{
                css:{opacity:0}}),
                50, 
                150); 

                controller.addTween('#bird10', 
                  TweenMax.from($('#bird10'),.5,{
                    css:{opacity:0}}),
                    50, 
                    250);

           controller.addTween('#bird9', 
              TweenMax.from($('#bird9'),.5,{
                css:{opacity:0}}),
                50, 
                200); 

                controller.addTween('#bird9', 
                  TweenMax.from($('#bird9'),.5,{
                    css:{opacity:0}}),
                    50, 
                    300);

           controller.addTween('#bird8', 
              TweenMax.from($('#bird8'),.5,{
                css:{opacity:0}}),
                50, 
                250);

                controller.addTween('#bird8', 
                  TweenMax.from($('#bird8'),.5,{
                    css:{opacity:0}}),
                    50, 
                    350); 

           controller.addTween('#bird7', 
              TweenMax.from($('#bird7'),.5,{
                css:{opacity:0}}),
                50, 
                300); 

                controller.addTween('#bird7', 
                  TweenMax.from($('#bird7'),.5,{
                    css:{opacity:0}}),
                    50, 
                    400); 

           controller.addTween('#bird6', 
              TweenMax.from($('#bird6'),.5,{
                css:{opacity:0}}),
                50, 
                350); 

                controller.addTween('#bird6', 
                  TweenMax.from($('#bird6'),.5,{
                    css:{opacity:0}}),
                    50, 
                    450); 

           controller.addTween('#bird5', 
              TweenMax.from($('#bird5'),.5,{
                css:{opacity:0}}),
                50, 
                400); 

                controller.addTween('#bird5', 
                  TweenMax.from($('#bird5'),.5,{
                    css:{opacity:0}}),
                    50, 
                    500); 

           controller.addTween('#bird4', 
              TweenMax.from($('#bird4'),.5,{
                css:{opacity:0}}),
                50, 
                450); 

                controller.addTween('#bird4', 
                  TweenMax.from($('#bird4'),.5,{
                    css:{opacity:0}}),
                    50, 
                    550); 

           controller.addTween('#bird3', 
              TweenMax.from($('#bird3'),.5,{
                css:{opacity:0}}),
                50, 
                500); 

                controller.addTween('#bird3', 
                  TweenMax.from($('#bird3'),.5,{
                    css:{opacity:0}}),
                    50, 
                    600);

           controller.addTween('#bird2', 
              TweenMax.from($('#bird2'),.5,{
                css:{opacity:0}}),
                50, 
                550);

                controller.addTween('#bird2', 
                  TweenMax.from($('#bird2'),.5,{
                    css:{opacity:0}}),
                    50, 
                    650);

            controller.addTween('#bird1', 
              TweenMax.from($('#bird1'),.5,{
                css:{opacity:0}}),
                50, 
                600); 

                controller.addTween('#bird1', 
                  TweenMax.from($('#bird1'),.5,{
                    css:{opacity:0}}),
                    50, 
                    700);

        




        });
    </script>



















<!--/-/-/-/-/-/-/-/-/-/-/-/-/-/-/-/-/-/-/-/-/-/-/-/-/-/-/-/-/-/-->

    
    </head>



    <body>

        <div class="logo">
            <img src="images/logo.svg">
        </div>

        <div class="arrow">
            <img src="images/arrow.svg">
        </div>

        <p>So You're EnGAYged seeks to match LGBT and allied couples with wedding vendors who actively support LGBT rights and freedoms, including, but not limited to, same-sex marriage. By highlighting voices from within the LGBT community, So You're EnGAYged works to build a supportive source that can dispense advice, recommendations, and support to couples in the wedding planning process. As a writer for So You're EnGAYged, Ms. Sparrow is delighted to share the handmade details of her own special day.</p>

        <div class="squiggle">
            <img src="images/squiggle.svg">
        </div>



        <div class="dovearea" >
            <img id="bird1" src="images/bird1.svg">
            <img id="bird2" src="images/bird2.svg">
            <img id="bird3" src="images/bird3.svg">
            <img id="bird4" src="images/bird4.svg">
            <img id="bird5" src="images/bird5.svg">
            <img id="bird6" src="images/bird6.svg">
            <img id="bird7" src="images/bird7.svg">
            <img id="bird8" src="images/bird1.svg">
            <img id="bird9" src="images/bird2.svg">
            <img id="bird10" src="images/bird3.svg">
            <img id="bird11" src="images/bird4.svg">
            <img id="bird12" src="images/bird5.svg">
            <img id="bird13" src="images/bird6.svg">
            <img id="bird14" src="images/bird7.svg">
            <img id="bird15" src="images/bird1.svg">
            <img id="bird16" src="images/bird2.svg">
            <img id="bird17" src="images/bird3.svg">
            <img id="bird18" src="images/bird4.svg">
            <img id="bird19" src="images/bird5.svg">
            <img id="bird20" src="images/bird6.svg">
        </div>













        <p>Before I proposed, I had no knowledge of anything wedding related. I thought all weddings were like those in Bride Magazine or on Oxygen. Then I discovered wedding blogs, and all of a sudden I had a spreadsheet with 200 crafts that I needed to make for the wedding. Yes, agonizing for a month over our invitation design - because maybe our names would look better one millimeter to the left? - drove me a little crazy, but I kind of miss it now. My fiancee, Jen, would joke fun that I viewed our wedding as a craft show, and sometimes I think she was right.</p>

        <div class="heart">
            <img src="images/heart.svg">
        </div>


<p id="jump">Speak now, or forever hold your peace:</p>

        <form id="guest" action="comments.php" method="post">

            <input type="text" placeholder="First Name" id="first" name="first"></textarea>

            <input type="text" placeholder="Last Name" id="last" name="last"></textarea>

            <textarea type="text" id="message" placeholder="RSVP" name="message"></textarea>

            <!--<select name="status" id="status">
                <option value="YES!">YES!</option>
                <option value="...no">...no</option>
            </select>-->

            <input type="button" id="submitbutton" value="RSVP">

        </form>

       <!-- <div class="divider"></div>  -->


<div class="commentsection">
        

    <?php

            $first = $_REQUEST["first"];
            $last = $_REQUEST["last"];
            $message = $_REQUEST["message"];



        $dbc = @mysqli_connect( "sql.kucdinteractive.com", "kucd_kwalton", "2033306", "kucd_kwalton");
        $sql = "select first, last, message, id from wedding";
            $results = @mysqli_query( $dbc, $sql);
        
        while($row = mysqli_fetch_array($results) ) {
            echo "<form id='comoncom' action='comments2.php' method='post'><p>&quot;" . $row['message'] . "&quot; <span class='author'>// " . $row['first'] . " " . $row['last'] . "</p>";

                    $sql2 = "select subcom from subcomments where id=". $row['id'];
                    $answer = @mysqli_query( $dbc, $sql2);
                
                while($row2 = mysqli_fetch_array($answer) ) {
                    echo "<p class='subcomment'><span class='white'>&gt;</span> " . $row2['subcom'] . "</p>";
   
                    }
			echo "<input type='hidden' name='id' value=\"$row[id]\" />";
			echo "<input type='text' id='comcom' name='comcom' placeholder='Comment on this Comment'  />";
			echo "<br/><input type='submit' id='submitbutton2' value='COMMENT'>";
		    //echo $sql2;
            echo "</form>";

        }

    ?>

</div>



     

    </body>
</html>



