<?php
    require "header.php";

    if (isset($_POST['message'])) {        
        ini_set('SMTP','smtp.orange.fr');
        ini_set('sendmail_from',$_POST['email']);
        $position_arobase = strpos($_POST['email'], '@');
        if($position_arobase === false)
            echo '<p>Votre email doit comporter un arobase.</p>';
        else {
            $retour=mail('boujemaouibilel@gmail.com','Envoi depuis page Contact', $_POST['message'], 'From : ' . $_POST['email']);
            if($retour)
                echo '<p style="top:75%; position:absolute;left:15%; color :red;">Votre message a été envoyé.</p>';
            else
                echo '<p>Erreur.</p>';    
        }
    }
    ?>
<div id="bcontact">
    <div class="contact">
    <form method="post" class="form" id="form1">
    <div id="form-main">
      <div id="form-div">

          <p class="name">
            <input name="name" type="name"  required class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" placeholder="Name" id="name" />
          </p>

          <p class="email">
            <input name="email" type="email"  required class="validate[required,custom[email]] feedback-input" id="email" placeholder="Email" />
          </p>

          <p class="text">
            <textarea name="message" type="message" required class="validate[required,length[6,300]] feedback-input" id="comment" placeholder="Comment"></textarea>
          </p>


          <div class="submit">
            <input type="submit" value="SEND" id="button-blue"/>
            <div class="ease"></div>
          </div>

      </div>
      </div>
    </form>

    <iframe  class="maps" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2633.502724574082!2d1.84552626577489!3d48.69587142008986!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e42765df2f01ed%3A0x6a5c14be8b10d1af!2s78610+Le+Perray-en-Yvelines!5e0!3m2!1sfr!2sfr!4v1554209059643!5m2!1sfr!2sfr" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
    
</div>

<?php
     require "footer.php";




