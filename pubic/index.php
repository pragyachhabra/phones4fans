<?php
include_once 'common.php';
?>

<!DOCTYPE html>
<!-- saved from url=(0022)http://easytelecom.se/ -->
<html class=" js svg"><!--<![endif]--><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
<title><?php echo $lang['PAGE_TITLE']; ?></title>
    <meta name="description" content="Vi leverar Molntjänster inom Telecom till Återförsäljare, Avancerade Återförsäljare och Operatörer">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Social meta tags -->
    <meta property="og:title" content="EasyTelecom : Telekomtjänster i Molnet"> 
    <meta property="og:description" content="Vi leverar Molntjänster inom Telecom till Återförsäljare, Avancerade Återförsäljare och Operatörer"> 
    <meta property="og:image" content=""> 


    <!-- Favicon -->
    <link rel="shortcut icon" href="http://easytelecom.se/favicon.ico" type="image/x-icon">

    <link rel="stylesheet" href="./index/main.css">
 

    <script async="" src="./index/analytics.js.download"></script><script src="./index/jquery.min.js.download"></script>
<style type="text/css">.c_germany{margin-right:10px;}</style>
<script>
if (hour < 18) {
    greeting = "Good day";
} else {
    greeting = "Good evening";
}

</script>


    <!--<base href="/">--><base href=".">
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', '', 'auto');
      ga('send', 'pageview');
    </script>
  </head>

  <body>
    <header class="header">

<link rel="stylesheet" href="../../styles/main.css">
<nav class="navbar" role="navigation">
  <div class="lineWrap">
  <div class="container">
      <a class="logo" href="/"></a>
      <ul class="primary-menu desktop-menu">
        <li class="primary-menu-alt hide-for-mobile foretag">
          <a href="/index.php"><?php echo $lang['MENU_HOME']; ?></a>
            <ul class="sub-menu" role="menu">
                <li class="primary-menu-alt-sub">
                  <a href="/index.php#Mobilabonnemang" data-scrollto="Mobilabonnemang"><?php echo $lang['MENU_mobile subscriptions']; ?></a>
                </li>            
                <li class="primary-menu-alt-sub">
                  <a href="/index.php#Mobilt-bredband" data-scrollto="Mobilt-bredband"><?php echo $lang['MENU_Mobile Broadband']; ?></a>
                </li>            
                <li class="primary-menu-alt-sub">
                  <a href="/index.php#Fastnatstelefoni" data-scrollto="Fastnatstelefoni"><?php echo $lang['MENU_Landline']; ?></a>
                </li>                
                <li class="primary-menu-alt-sub">
                  <a href="/index.php#Molnbaserade-tjanster" data-scrollto="Molnbaserade-tjanster"><?php echo $lang['MENU_Cloud-based gear']; ?></a>
                </li>                
                <li class="primary-menu-alt-sub">
                  <a href="/index.php#Mobilklient"><?php echo $lang['MENU_mobile Client']; ?></a>
                </li>
      <!--
                <li class="primary-menu-alt-sub">
                  <a href="/">Logga in</a>
                </li>     -->
            </ul>
        </li>
        <li class="primary-menu-alt hide-for-mobile aterforsaljare">
          <a href="/aterforsaljare.php"><?php echo $lang['MENU_Reseller']; ?></a>
            <ul class="sub-menu" role="menu">
                <li class="primary-menu-alt-sub">
                  <a href="/aterforsaljare.php#skapa-dina-egna-abonnemang" data-scrollto="skapa-dina-egna-abonnemang"><?php echo $lang['MENU_Create your own subscription']; ?></a>
                </li>            
                <li class="primary-menu-alt-sub">
                  <a href="/aterforsaljare.php#Kundtjanstsgranssnitt" data-scrollto="Kundtjanstsgranssnitt"><?php echo $lang['MENU_Customer Interface']; ?></a>
                </li>            
                <li class="primary-menu-alt-sub">
                  <a href="/aterforsaljare.php#Reskontrahantering" data-scrollto="Reskontrahantering"><?php echo $lang['MENU_ledger']; ?></a>
                </li>
            </ul>
        </li>        
        <li class="primary-menu-alt hide-for-mobile operator">
          <a href="/operator.php"><?php echo $lang['MENU_Operator']; ?></a>
            <ul class="sub-menu" role="menu">
                <li class="primary-menu-alt-sub">
                  <a href="/operator.php#skapa-dina-egna-abonnemang" data-scrollto="skapa-dina-egna-abonnemang"><?php echo $lang['MENU_ledger']; ?></a>
                </li>            
                <li class="primary-menu-alt-sub">
                  <a href="/operator.php#Kundtjanstsgranssnitt" data-scrollto="Kundtjanstsgranssnitt"><?php echo $lang['MENU_Customer Interfacee']; ?></a>
                </li>            
                <li class="primary-menu-alt-sub">
                  <a href="/operator.php#Reskontrahantering" data-scrollto="Reskontrahantering"><?php echo $lang['MENU_ledgerr']; ?></a>
                </li>                
                <li class="primary-menu-alt-sub">
                  <a href="/operator.php#Molnbaserade-tjanster" data-scrollto="Molnbaserade-tjanster"><?php echo $lang['MENU_cloud Servicess']; ?></a>
                </li>
            </ul>
        </li>    
        <li class="primary-menu-alt menu">
          <span class="menu-icon"></span>
              <div class="menu-fill">
                <ul class="sub-menu">
                  <li class="language-switch se">
                    <a class="en" href="/index.php">English</a>
                    <span class="lang-slider"></span>
              <!-- <input id="slider1" type="range" min="0" max="1" step="1" style="width: 80px; margin: 6px 0 0 0;" /> --> <!-- lang slider -->
                    <a class="sv" href="/index.php">Svenska</a>
                  </li>

                  <li class="hasSublevels desktopHidden">
                    <span class="activateSublevelsWrap">  
                      <span class="activateSublevels"></span>
                    </span>
                    <a href="/index.php">Företagskund</a>
                    <ul class="sub-menu-level-2" role="menu">
                        <li>
                          <a href="/index.php#Mobilabonnemang" data-scrollto="Mobilabonnemang">Mobilabonnemang</a>
                        </li>            
                        <li>
                          <a href="/index.php#Mobilt-bredband" data-scrollto="Mobilt-bredband">Mobilt bredband</a>
                        </li>            
                        <li>
                          <a href="/index.php#Fastnatstelefoni" data-scrollto="Fastnatstelefoni">Fastnät</a>
                        </li>                
                        <li>
                          <a href="/index.php#Molnbaserade-tjanster" data-scrollto="Molnbaserade-tjanster">Molnbaserade tjänster</a>
                        </li>                
                        <li>
                          <a href="/index.php#Mobilklient"  data-scrollto="Mobilklient">Mobilklient</a>
                        </li>
                    </ul>
                  </li>                   

                  <li class="hasSublevels desktopHidden">
                    <span class="activateSublevelsWrap">  
                      <span class="activateSublevels"></span>
                    </span>
                    <a href="/aterforsaljare.php">Återförsäljare</a>
                    <ul class="sub-menu-level-2" role="menu">
                        <li>
                          <a href="/aterforsaljare.php#skapa-dina-egna-abonnemang" data-scrollto="skapa-dina-egna-abonnemang">Skapa dina egna abonnemang</a>
                        </li>            
                        <li>
                          <a href="/aterforsaljare.php#Kundtjanstsgranssnitt" data-scrollto="Kundtjanstsgranssnitt">Kundtjänstsgränssnitt</a>
                        </li>            
                        <li>
                          <a href="/aterforsaljare.php#Reskontrahantering" data-scrollto="Reskontrahantering">Reskontrahantering</a>
                        </li>
                    </ul>
                  </li>                  

                   <li class="hasSublevels desktopHidden">
                    <span class="activateSublevelsWrap">  
                      <span class="activateSublevels"></span>
                    </span>
                    <a href="/operator.php">Operatör</a>
                    <ul class="sub-menu-level-2" role="menu">
                        <li>
                          <a href="/operator.php#skapa-dina-egna-abonnemang" data-scrollto="skapa-dina-egna-abonnemang">Vi hjälper er att bli egen operatör</a>
                        </li>            
                        <li>
                          <a href="/operator.php#Kundtjanstsgranssnitt" data-scrollto="Kundtjanstsgranssnitt">Kundtjänstsgränssnitt</a>
                        </li>            
                        <li>
                          <a href="/operator.php#Reskontrahantering" data-scrollto="Reskontrahantering">Reskontrahantering</a>
                        </li>                
                        <li>
                          <a href="/operator.php#Teknik-tjanster" data-scrollto="Teknik-tjanster">Teknik & Tjänster</a>
                        </li>
                    </ul>
                  </li>                  
                  <li>
                    <a href="/om.php"><?php echo $lang['MENU_If Easy Telecom']; ?></a>
                  </li>
                  <li>
                    <a href="/teknik.php"><?php echo $lang['MENU_Technique']; ?></a>
                  </li>

                  <li class="hasSublevels">
                    <span class="activateSublevelsWrap">  
                      <span class="activateSublevels"></span>
                    </span>
                    <a href="/kontakt.php"><?php echo $lang['MENU_Contact Us']; ?></a>
                    <ul class="sub-menu-level-2 menu-icons" role="menu">
                      <li>
                        <a href="/kontakt.php" class="phone">08-4030 7300</a>
                      </li>                      
                      <li>
                        <a href="/kontakt.php" class="email">info@easytelecom.se</a>
                      </li>                      
                      <li>
                        <a href="/kontakt.php" class="address"><?php echo $lang['MENU_address']; ?></a>
                      </li>
                    </ul>
                  </li>                    
        
                <li class="driftstatus">
                      <span class="label"><?php echo $lang['MENU_operating Status']; ?></span>
                      <span class="activateSublevelsWrap">  
                        <span class="activateSublevels"></span>
                      </span>
                      <ul class="sub-menu-level-2 driftstatus-text" role="menu">
                        <li class="check"><?php echo $lang['MENU_check']; ?></li>
                        <li class="updated"><?php echo $lang['MENU_checkb']; ?></li>
                      </ul>
                </li>
              </ul>
          </div>
        </li>
          <li class="primary-menu-alt hide-for-mobile aterforsaljare">
              <?php 

			  if(isSet($_GET['lang']))
			  {
			  $language = $_GET['lang'];}

        //DB Code Begins here
        include_once  '../ajax/db_connection.php';

        $query = "SELECT * FROM Language";

        if (!$result = mysql_query($query)) {
              exit(mysql_error());
          }

          // if query results contains rows then featch those rows 
          if(mysql_num_rows($result) > 0)
          {
            while($row = mysql_fetch_assoc($result, MYSQL_ASSOC))
            {
              $LangName[] =  $row['Name'];
              $LangCode[] =  $row['Code'];
            }
          }

        //DB Code ends here
          
        $langNameLength = count($LangName);
        $langCodeLength = count($LangCode);


        ?>
            <?php   
            if(isSet($_GET['lang']))
            {
            $language = $_GET['lang'];}     
            for($x = 0; $x < $langNameLength; $x++) { if ($language == $LangCode[$x]) { ?>
            <a href="index.php?lang=<?php echo $LangCode[$x] ?>"><img src="index/<?php echo $LangCode[$x] ?>.jpg" class="c_germany"><?php echo $LangName[$x] ?></a>
            <?php }} ?>

              <ul class="sub-menu" role="menu">
                      <li class="primary-menu-alt-sub">
					  <?php        
            for($x = 0; $x < $langNameLength; $x++) { if ($language != $LangCode[$x]) { ?>
            <a href="index.php?lang=<?php echo $LangCode[$x] ?>"><img src="index/<?php echo $LangCode[$x] ?>.jpg" class="c_germany"><?php echo $LangName[$x] ?></a>
					  <?php }} ?>

                  </li>

              </ul>
          </li>


      </ul>
  </div>
  </div>
</nav>
    </header>

    <div class="main-content">
       <div class="front">
          <section class="promo-section paralax"> <!-- put img -->
            <div class="img"></div>
            <div class="container">
              <div class="promo-text">
                <h1 class="section-headline"><?php echo $lang['MENU_promo-text']; ?></h1>
                <p><?php echo $lang['MENU_sub-text']; ?></p>
              </div>
            </div>
            <div class="promo-menu-section">
              <div class="container">
                <ul class="promo-menu">
                  <!-- the alternatives -->
                  <li class="promo-menu-alt mobilabonnemang" data-scrollto="Mobilabonnemang"><span><?php echo $lang['MENU_mobile subscriptions']; ?></span></li><li class="promo-menu-alt mobilt-bredband" data-scrollto="Mobilt-bredband"><span><?php echo $lang['MENU_Mobile Broadband']; ?></span></li><li class="promo-menu-alt fastnatstelefoni" data-scrollto="Fastnatstelefoni"><span><?php echo $lang['MENU_Fixed network Phones']; ?></span></li><li class="promo-menu-alt molnbaserad-vaxel" data-scrollto="Molnbaserade-tjanster"><span><?php echo $lang['MENU_Cloud-based gear']; ?></span></li><li class="promo-menu-alt mobilklient" data-scrollto="Mobilklient"><span><?php echo $lang['MENU_mobile Client']; ?></span></li>		  
                </ul>
              </div>
            </div>
          </section>  
          <section class="box-section-3 bg-whitegrey content-section" id="Mobilabonnemang">
            <div class="container">
              <h2 class="section-headline center"><?php echo $lang['MENU_secone']; ?></h2>
              <div class="box-wrap one-three-slide">
                <div class="box green-1">
                  <h3 class="blocked-headline green-1"><?php echo $lang['MENU_subone']; ?></h3>
                  <div class="img-wrap">
                    <img srcset="../assets/img/foretagskund/Abonnemang1_645px.jpg  645w, 
                              ../assets/img/foretagskund/Abonnemang1_445px.jpg  445w,
                              ../assets/img/foretagskund/Abonnemang1_345px.jpg  345w" src="./index/Abonnemang1_645px.jpg" sizes="(min-width: 58.75em) 18.75em,(min-width: 40em) 29em, 18.75em" alt="Easy Flex">
                  </div>
                  <div class="content-wrap">
                    <table class="box-table">
                      <tbody><tr>
                        <td class="headline"><?php echo $lang['MENU_DESCRIPTION']; ?></td>
                        <td><?php echo $lang['MENU_Flexible']; ?></td>
                      </tr>             
                      <tr>
                        <td class="headline"><?php echo $lang['MENU_SETTING TIME']; ?></td>
                        <td><?php echo $lang['MENU_up to36']; ?></td>
                      </tr>               
                      <tr>
                        <td class="headline"><?php echo $lang['MENU_NOTICE PERIOD']; ?></td>
                        <td><?php echo $lang['MENU_up to3']; ?></td>
                      </tr>               
                      <tr>
                        <td class="headline"><?php echo $lang['MENU_BENEFITS']; ?></td>
                        <td><?php echo $lang['MENU_BENEFITS_O']; ?><br><br><br></td>
                      </tr>
                    </tbody></table>
                    <a href="http://easytelecom.se/produktsida_easyflex.php#" class="button grey"><?php echo $lang['MENU_readmore']; ?></a>
                  </div>
                </div>
                <div class="box green-2">
                  <h3 class="blocked-headline green-2"><?php echo $lang['MENU_subtwo']; ?></h3>
                  <div class="img-wrap">
                    <img srcset="../assets/img/foretagskund/Abonnemang2_645px.jpg  645w, 
                              ../assets/img/foretagskund/Abonnemang2_445px.jpg  445w,
                              ../assets/img/foretagskund/Abonnemang2_345px.jpg  345w" src="./index/Abonnemang2_645px.jpg" sizes="(min-width: 58.75em) 18.75em,(min-width: 40em) 29em, 18.75em" alt="Easy Flex">
                  </div>
                  <div class="content-wrap">
                    <table class="box-table">
                      <tbody><tr>
                        <td class="headline"><?php echo $lang['MENU_DESCRIPTION']; ?></td>
                        <td><?php echo $lang['MENU_flat']; ?></td>
                      </tr>             
                      <tr>
                        <td class="headline"><?php echo $lang['MENU_SETTING TIME']; ?></td>
                        <td><?php echo $lang['MENU_up to36']; ?></td>
                      </tr>               
                      <tr>
                        <td class="headline"><?php echo $lang['MENU_NOTICE PERIOD']; ?></td>
                        <td><?php echo $lang['MENU_up to3']; ?></td>
                      </tr>               
                      <tr>
                        <td class="headline"><?php echo $lang['MENU_BENEFITS']; ?></td>
                        <td><?php echo $lang['MENU_BENEFITS_T']; ?></td>
                      </tr>
                    </tbody></table>
                    <a href="http://easytelecom.se/produktsida_easylarge.php" class="button grey"><?php echo $lang['MENU_readmore']; ?></a>
                  </div>
                </div>
                <div class="box green-3">
                  <h3 class="blocked-headline green-3"><?php echo $lang['MENU_subthree']; ?></h3>
                  <div class="img-wrap">
                    <img srcset="../assets/img/foretagskund/Abonnemang3_645px.jpg  645w, 
                              ../assets/img/foretagskund/Abonnemang3_445px.jpg  445w,
                              ../assets/img/foretagskund/Abonnemang3_345px.jpg  345w" src="./index/Abonnemang3_645px.jpg" sizes="(min-width: 58.75em) 18.75em,(min-width: 40em) 29em, 18.75em" alt="Easy Flex">
                  </div>
                  <div class="content-wrap">
                    <table class="box-table">
                      <tbody><tr>
                        <td class="headline"><?php echo $lang['MENU_DESCRIPTION']; ?></td>
                        <td><?php echo $lang['MENU_Tak']; ?></td>
                      </tr>             
                      <tr>
                        <td class="headline"><?php echo $lang['MENU_SETTING TIME']; ?></td>
                        <td><?php echo $lang['MENU_up to36']; ?></td>
                      </tr>               
                      <tr>
                        <td class="headline"><?php echo $lang['MENU_NOTICE PERIOD']; ?></td>
                        <td><?php echo $lang['MENU_up to3']; ?></td>
                      </tr>               
                      <tr>
                        <td class="headline"><?php echo $lang['MENU_BENEFITS']; ?></td>
                        <td><?php echo $lang['MENU_BENEFITS_TH']; ?><br><br></td>
                      </tr>
                    </tbody></table>
                    <a href="http://easytelecom.se/produktsida_easycombo.php" class="button grey"><?php echo $lang['MENU_readmore']; ?></a>
                  </div>
                </div>
              </div>
            </div>
          </section>      
          <section class="box-section-3  bg-dark-grey content-section" id="Mobilt-bredband"> <!-- put img -->
            <div class="container">
              <h2 class="section-headline center"><?php echo $lang['MENU_secth']; ?></h2>
              <div class="box-wrap one-three-slide">
                <div class="box green-1">
                  <h3 class="blocked-headline green-1"><?php echo $lang['MENU_subone_one']; ?></h3>
                  <div class="img-wrap">
                    <img srcset="../assets/img/foretagskund/Mobilt-bredband-1_645px.jpg  645w, 
                              ../assets/img/foretagskund/Mobilt-bredband-1_445px.jpg  445w,
                              ../assets/img/foretagskund/Mobilt-bredband-1_345px.jpg  345w" src="./index/Mobilt-bredband-1_645px.jpg" sizes="(min-width: 58.75em) 18.75em,(min-width: 40em) 29em, 18.75em" alt="Easy Flex">

                  </div>
                  <div class="content-wrap">
                    <table class="box-table">
                      <tbody><tr>
                        <td class="headline"><?php echo $lang['MENU_DESCRIPTION']; ?></td>
                        <td><?php echo $lang['MENU_row_one']; ?></td>
                      </tr>             
                      <tr>
                        <td class="headline"><?php echo $lang['MENU_SETTING TIME']; ?></td>
                        <td><?php echo $lang['MENU_up to36']; ?></td>
                      </tr>               
                      <tr>
                        <td class="headline"><?php echo $lang['MENU_NOTICE PERIOD']; ?></td>
                        <td><?php echo $lang['MENU_up to3']; ?></td>
                      </tr>               
                      <tr>
                        <td class="headline"><?php echo $lang['MENU_BENEFITS']; ?></td>
                        <td><?php echo $lang['MENU_row_bottom1']; ?></td>
                      </tr>
                    </tbody></table>
                    <a href="http://easytelecom.se/produktsida_easymbb1.php" class="button grey"><?php echo $lang['MENU_readmore']; ?></a>
                  </div>
                </div>
                <div class="box green-2">
                  <h3 class="blocked-headline green-2"><?php echo $lang['MENU_subtwo_two']; ?></h3>
                  <div class="img-wrap">
                    <img srcset="../assets/img/foretagskund/Mobilt-bredband-2_645px.jpg  645w, 
                              ../assets/img/foretagskund/Mobilt-bredband-2_445px.jpg  445w,
                              ../assets/img/foretagskund/Mobilt-bredband-2_345px.jpg  345w" src="./index/Mobilt-bredband-2_645px.jpg" sizes="(min-width: 58.75em) 18.75em,(min-width: 40em) 29em, 18.75em" alt="Easy Flex">
                  </div>
                  <div class="content-wrap">
                    <table class="box-table">
                      <tbody><tr>
                        <td class="headline"><?php echo $lang['MENU_DESCRIPTION']; ?></td>
                        <td>20 GB data per månad</td>
                      </tr>             
                      <tr>
                        <td class="headline"><?php echo $lang['MENU_SETTING TIME']; ?></td>
                        <td><?php echo $lang['MENU_up to36']; ?></td>
                      </tr>
                      <tr>
                        <td class="headline"><?php echo $lang['MENU_NOTICE PERIOD']; ?></td>
                        <td><?php echo $lang['MENU_up to3']; ?></td>
                      </tr>               
                      <tr>
                        <td class="headline"><?php echo $lang['MENU_BENEFITS']; ?></td>
                        <td><?php echo $lang['MENU_row_bottom2']; ?><br><br><br></td>
                      </tr>
                    </tbody></table>
                    <a href="http://easytelecom.se/produktsida_easymbb2.php" class="button grey"><?php echo $lang['MENU_readmore']; ?>
                      
                    </a>
                  </div>
                </div>
                <div class="box green-3">
                  <h3 class="blocked-headline green-3"><?php echo $lang['MENU_subthree_three']; ?></h3>
                  <div class="img-wrap">
                    <img srcset="../assets/img/foretagskund/Mobilt-bredband-3_645px.jpg  645w, 
                              ../assets/img/foretagskund/Mobilt-bredband-3_445px.jpg  445w,
                              ../assets/img/foretagskund/Mobilt-bredband-3_345px.jpg  345w" src="./index/Mobilt-bredband-3_645px.jpg" sizes="(min-width: 58.75em) 18.75em,(min-width: 40em) 29em, 18.75em" alt="Easy Flex">
                  </div>
                  <div class="content-wrap">
                    <table class="box-table">
                      <tbody><tr>
                        <td class="headline"><?php echo $lang['MENU_DESCRIPTION']; ?></td>
                        <td>40 GB per månad</td>
                      </tr>             
                      <tr>
                        <td class="headline"><?php echo $lang['MENU_SETTING TIME']; ?></td>
                        <td><?php echo $lang['MENU_up to36']; ?></td>
                      </tr>               
                      <tr>
                        <td class="headline"><?php echo $lang['MENU_NOTICE PERIOD']; ?></td>
                        <td><?php echo $lang['MENU_up to3']; ?></td>
                      </tr>               
                      <tr>
                        <td class="headline"><?php echo $lang['MENU_BENEFITS']; ?></td>
                        <td><?php echo $lang['MENU_row_bottom3']; ?><br><br><br></td>
                      </tr>
                    </tbody></table>
                    <a href="http://easytelecom.se/produktsida_easymbb3.php" class="button grey"><?php echo $lang['MENU_readmore']; ?></a>
                  </div>
                </div>
              </div>
            </div>
          </section>        
          <section class="box-section-4 content-section bg-whitegrey fastnatstelefoni" id="Fastnatstelefoni"> <!-- put img -->
            <div class="container">
              <h2 class="section-headline center"><?php echo $lang['MENU_secforth']; ?></h2>
              <div class="box-wrap one-two-four-slide">
                <div class="box green-4">
                  <h3 class="blocked-headline green-2"><?php echo $lang['MENU_mobile_one']; ?></h3>
                  <div class="img-wrap">
                    <img srcset="../assets/img/foretagskund/Reception_645px.jpg  645w, 
                                  ../assets/img/foretagskund/Reception_445px.jpg  445w,
                                  ../assets/img/foretagskund/Reception_345px.jpg  345w" src="./index/Reception_345px.jpg" sizes="(min-width: 58.75em) 14em,22.5em" alt="Reception">
                  </div>
                  <div class="content-wrap">
                      <table class="box-table">
                        <tbody><tr>
                          <td class="headline"><?php echo $lang['MENU_DESCRIPTION']; ?></td>
                          <td><?php echo $lang['MENU_mobile_des_one']; ?></td>
                        </tr>             
                        <tr>
                          <td class="headline"><?php echo $lang['MENU_SETTING TIME']; ?></td>
                          <td><?php echo $lang['MENU_up to36']; ?>r</td>
                        </tr>               
                        <tr>
                          <td class="headline"><?php echo $lang['MENU_NOTICE PERIOD']; ?></td>
                          <td><?php echo $lang['MENU_up to3']; ?></td>
                        </tr>               
                        <tr>
                          <td class="headline"><?php echo $lang['MENU_BENEFITS']; ?></td>
                          <td><?php echo $lang['MENU_mobile_bottom_one']; ?></td>
                        </tr>
                      </tbody></table>
                    <!-- <a href="produktsida_reception.php" class="button grey">Läs mer</a> -->
                  </div>
                </div>
                <div class="box green-3">
                  <h3 class="blocked-headline green-2"><?php echo $lang['MENU_mobile_two']; ?></h3>
                  <div class="img-wrap">
                    <img srcset="../assets/img/foretagskund/Kontor_645px.jpg  645w, 
                                  ../assets/img/foretagskund/Kontor_445px.jpg  445w,
                                  ../assets/img/foretagskund/Kontor_345px.jpg  345w" src="./index/Kontor_645px.jpg" sizes="(min-width: 58.75em) 14em,22.5em" alt="Kontor">
                  </div>
                  <div class="content-wrap">
                      <table class="box-table">
                        <tbody><tr>
                          <td class="headline"><?php echo $lang['MENU_DESCRIPTION']; ?></td>
                          <td><?php echo $lang['MENU_mobile_des_two']; ?></td>
                        </tr>             
                        <tr>
                          <td class="headline"><?php echo $lang['MENU_SETTING TIME']; ?></td>
                          <td><?php echo $lang['MENU_up to36']; ?></td>
                        </tr>               
                        <tr>
                          <td class="headline"><?php echo $lang['MENU_NOTICE PERIOD']; ?></td>
                          <td><?php echo $lang['MENU_up to3']; ?></td>
                        </tr>               
                        <tr>
                          <td class="headline"><?php echo $lang['MENU_BENEFITS']; ?></td>
                          <td><?php echo $lang['MENU_mobile_bottom_two']; ?></td>
                        </tr>
                      </tbody></table>
                    <!-- <a href="produktsida_office.php" class="button grey">Läs mer</a> -->
                  </div>
                </div>
                <div class="box green-2">
                  <h3 class="blocked-headline green-2"><?php echo $lang['MENU_mobile_three']; ?></h3>
                  <div class="img-wrap">
                    <img srcset="../assets/img/foretagskund/Kundmottagare_645px.jpg  645w, 
                                  ../assets/img/foretagskund/Kundmottagare_445px.jpg  445w,
                                  ../assets/img/foretagskund/Kundmottagare_345px.jpg  345w" src="./index/Kundmottagare_645px.jpg" sizes="(min-width: 58.75em) 14em,22.5em" alt="Callcenter">
                  </div>
                  <div class="content-wrap">
                      <table class="box-table">
                        <tbody><tr>
                          <td class="headline"><?php echo $lang['MENU_DESCRIPTION']; ?></td>
                          <td><?php echo $lang['MENU_mobile_des_three']; ?></td>
                        </tr>             
                        <tr>
                          <td class="headline"><?php echo $lang['MENU_SETTING TIME']; ?></td>
                          <td><?php echo $lang['MENU_up to36']; ?></td>
                        </tr>               
                        <tr>
                          <td class="headline"><?php echo $lang['MENU_NOTICE PERIOD']; ?></td>
                          <td><?php echo $lang['MENU_up to3']; ?></td>
                        </tr>               
                        <tr>
                          <td class="headline"><?php echo $lang['MENU_BENEFITS']; ?></td>
                          <td><?php echo $lang['MENU_mobile_bottom_three']; ?></td>
                        </tr>
                      </tbody></table>
                    <!-- <a href="produktsida_callcenter.php" class="button grey">Läs mer</a> -->
                  </div>
                </div>  
                <div class="box green-1">
                  <h3 class="blocked-headline green-2"><?php echo $lang['MENU_mobile_forth']; ?></h3>
                  <div class="img-wrap">
                     <img srcset="../assets/img/foretagskund/Xxxx_645px.jpg  645w, 
                                  ../assets/img/foretagskund/Xxxx_445px.jpg  445w,
                                  ../assets/img/foretagskund/Xxxx_345px.jpg  345w" src="./index/Xxxx_645px.jpg" sizes="(min-width: 58.75em) 14em,22.5em" alt="Telemarketing">
                  </div>
                  <div class="content-wrap">
                      <table class="box-table">
                        <tbody><tr>
                          <td class="headline"><?php echo $lang['MENU_DESCRIPTION']; ?></td>
                          <td><?php echo $lang['MENU_mobile_des_forth']; ?></td>
                        </tr>             
                        <tr>
                          <td class="headline"><?php echo $lang['MENU_SETTING TIME']; ?></td>
                          <td><?php echo $lang['MENU_up to36']; ?></td>
                        </tr>               
                        <tr>
                          <td class="headline"><?php echo $lang['MENU_NOTICE PERIOD']; ?></td>
                          <td><?php echo $lang['MENU_up to3']; ?></td>
                        </tr>               
                        <tr>
                          <td class="headline"><?php echo $lang['MENU_BENEFITS']; ?></td>
                          <td><?php echo $lang['MENU_mobile_bottom_forth']; ?></td>
                        </tr>
                      </tbody></table>
                    <!-- <a href="produktsida_telemarketing.php" class="button grey">Läs mer</a> -->
                  </div>
                </div>
              </div>
            </div>
          </section>      
          <section class="longer-paragraphs bg-green-1 content-section clouds-bg" id="Molnbaserade-tjanster"><!-- put img -->
            <div class="container">
              <h2 class="section-headline"><?php echo $lang['MENU_secfifth']; ?></h2>
              <p><?php echo $lang['MENU_para_one']; ?></p>

              <p><?php echo $lang['MENU_para_two']; ?></p><p></p><p></p>
              
              <h3 class="blocked-headline green-4 small">Några exempel på vanliga växeltjänster.</h3>
              <div class="list-section-4">
                <ul class="list">
                  <li><?php echo $lang['voice mailboxes']; ?></li>
                  <li><?php echo $lang['call Recordings']; ?></li>
                  <li><?php echo $lang['Service classes']; ?></li>
            		  <li><?php echo $lang['EasyQueue']; ?></li>
            		  <li><?php echo $lang['documents Hotels']; ?></li>
            		  <li><?php echo $lang['Report']; ?></li>
                </ul>         
                <ul class="list">
                  <li><?php echo $lang['function codes']; ?></li>
                  <li><?php echo $lang['Interkomgrupper']; ?></li>
                  <li><?php echo $lang['remote Access']; ?></li>
            		  <li><?php echo $lang['EasyCRM']; ?></li>
            		  <li><?php echo $lang['digital signatures']; ?></li>
            		  <li><?php echo $lang['call Specifications']; ?></li>
                </ul>
                <ul class="list">
                  <li><?php echo $lang['Queue function']; ?></li>
                  <li><?php echo $lang['Hunting Groups']; ?></li>
                  <li><?php echo $lang['IVR menus']; ?></li>
            		  <li><?php echo $lang['call Recording']; ?></li>
            		  <li><?php echo $lang['multiple safety systems']; ?></li>
            		  <li><?php echo $lang['full MEX']; ?></li>
                </ul>         
                <ul class="list">
                  <li><?php echo $lang['pattern Menus']; ?></li>
                  <li><?php echo $lang['Telepo integration']; ?>/li>
                  <li><?php echo $lang['Alarm']; ?></li>
            		  <li><?php echo $lang['System Integration']; ?></li>
            		  <li><?php echo $lang['call diary']; ?></li>
            		  <li><?php echo $lang['Fixed and mobile telephony']; ?></li>
                </ul>
              </div>
            </div>
          </section>      
          <section class="longer-paragraphs content-section bg-dark-grey mobile-client-bg" id="Mobilklient">
            <div class="container">
              <h2 class="section-headline"><?php echo $lang['MENU_secfive']; ?></h2>
              <p><?php echo $lang['MENU_client_one']; ?></p>
              <p> <?php echo $lang['MENU_client_twoo']; ?></p>
              <p><?php echo $lang['MENU_client_three']; ?></p><p></p><p></p>
              <div class="qr-box">
                <img src="./index/QR-code_large.png">
                <span class="qr-text"><?php echo $lang['MENU_sign']; ?></span>
              </div>
               <a class="easyApp-button download-button button green icon-arrow" href="http://easytelecom.se/#"><span>Ladda ned EasyApp</span></a>  
              <div class="box-wrap mobilklient-slide slick-initialized slick-slider">
               
                  <div class="slick-list draggable" tabindex="0"><div class="slick-track" style="opacity: 1; width: 3840px; transform: translate3d(-960px, 0px, 0px);"><div class="box slick-slide slick-cloned" index="-3" style="width: 300px;">
                    <h3 class="blocked-headline green-1">Min info</h3>
                    <div class="img-wrap">
                      <img srcset="../assets/img/foretagskund/3_Min_info_645px.jpg  645w, 
                                  ../assets/img/foretagskund/3_Min_info_445px.jpg  445w,
                                  ../assets/img/foretagskund/3_Min_info_345px.jpg  345w" src="./index/3_Min_info_645px.jpg" sizes="(min-width: 58.75em) 18.75em,(min-width: 40em) 29em, 18.75em" alt="Min info">

                    </div>
                  </div><div class="box slick-slide slick-cloned" index="-2" style="width: 300px;">
                      <h3 class="blocked-headline green-2">Samtalsdagbok</h3>
                      <div class="img-wrap">
                        <img srcset="../assets/img/foretagskund/4_Samtalsdagbok_645px.jpg  645w, 
                                  ../assets/img/foretagskund/4_Samtalsdagbok_445px.jpg  445w,
                                  ../assets/img/foretagskund/4_Samtalsdagbok_345px.jpg  345w" src="./index/4_Samtalsdagbok_645px.jpg" sizes="(min-width: 58.75em) 18.75em,(min-width: 40em) 29em, 18.75em" alt="Samtalsdagbok">
                      </div>
                    </div><div class="box slick-slide slick-cloned" index="-1" style="width: 300px;">
                      <h3 class="blocked-headline green-3">Köer</h3>
                      <div class="img-wrap">
                      <img srcset="../assets/img/foretagskund/5_Koer_645px.jpg  645w, 
                                ../assets/img/foretagskund/5_Koer_445px.jpg  445w,
                                ../assets/img/foretagskund/5_Koer_345px.jpg  345w" src="./index/5_Koer_645px.jpg" sizes="(min-width: 58.75em) 18.75em,(min-width: 40em) 29em, 18.75em" alt="Köer">
                      </div>
                    </div><div class="box slick-slide slick-active" index="0" style="width: 300px;">
                    <h3 class="blocked-headline green-1"><?php echo $lang['MENU_login']; ?></h3>
                    <div class="img-wrap">
                      <img srcset="../assets/img/foretagskund/0_Inloggning_645px.jpg  645w, 
                                  ../assets/img/foretagskund/0_Inloggning_445px.jpg  445w,
                                  ../assets/img/foretagskund/0_Inloggning_345px.jpg  345w" src="./index/0_Inloggning_645px.jpg" sizes="(min-width: 58.75em) 18.75em,(min-width: 40em) 29em, 18.75em" alt="Inloggning">

                    </div>
                  </div><div class="box slick-slide slick-active" index="1" style="width: 300px;">
                    <h3 class="blocked-headline green-2"><?php echo $lang['MENU_mobile group']; ?></h3>
                    <div class="img-wrap">
                      <img srcset="../assets/img/foretagskund/1_Mobila_grupper_645px.jpg  645w, 
                                  ../assets/img/foretagskund/1_Mobila_grupper_445px.jpg  445w,
                                  ../assets/img/foretagskund/1_Mobila_grupper_345px.jpg  345w" src="./index/1_Mobila_grupper_645px.jpg" sizes="(min-width: 58.75em) 18.75em,(min-width: 40em) 29em, 18.75em" alt="Mobila grupper">
                    </div>
                  </div><div class="box slick-slide slick-active" index="2" style="width: 300px;">
                    <h3 class="blocked-headline green-3"><?php echo $lang['MENU_reference']; ?></h3>
                    <div class="img-wrap">
                     <img srcset="../assets/img/foretagskund/2_Hanvisning_645px.jpg  645w, 
                                  ../assets/img/foretagskund/2_Hanvisning_445px.jpg  445w,
                                  ../assets/img/foretagskund/2_Hanvisning_345px.jpg  345w" src="./index/2_Hanvisning_645px.jpg" sizes="(min-width: 58.75em) 18.75em,(min-width: 40em) 29em, 18.75em" alt="Hänvisning">
                    </div>
                  </div><div class="box slick-slide" index="3" style="width: 300px;">
                    <h3 class="blocked-headline green-1"><?php echo $lang['MENU_myinfo']; ?></h3>
                    <div class="img-wrap">
                      <img srcset="../assets/img/foretagskund/3_Min_info_645px.jpg  645w, 
                                  ../assets/img/foretagskund/3_Min_info_445px.jpg  445w,
                                  ../assets/img/foretagskund/3_Min_info_345px.jpg  345w" src="./index/3_Min_info_645px.jpg" sizes="(min-width: 58.75em) 18.75em,(min-width: 40em) 29em, 18.75em" alt="Min info">

                    </div>
                  </div><div class="box slick-slide" index="4" style="width: 300px;">
                      <h3 class="blocked-headline green-2"><?php echo $lang['MENU_Call diary']; ?></h3>
                      <div class="img-wrap">
                        <img srcset="../assets/img/foretagskund/4_Samtalsdagbok_645px.jpg  645w, 
                                  ../assets/img/foretagskund/4_Samtalsdagbok_445px.jpg  445w,
                                  ../assets/img/foretagskund/4_Samtalsdagbok_345px.jpg  345w" src="./index/4_Samtalsdagbok_645px.jpg" sizes="(min-width: 58.75em) 18.75em,(min-width: 40em) 29em, 18.75em" alt="Samtalsdagbok">
                      </div>
                    </div><div class="box slick-slide" index="5" style="width: 300px;">
                      <h3 class="blocked-headline green-3"><?php echo $lang['MENU_Queues']; ?></h3>
                      <div class="img-wrap">
                      <img srcset="../assets/img/foretagskund/5_Koer_645px.jpg  645w, 
                                ../assets/img/foretagskund/5_Koer_445px.jpg  445w,
                                ../assets/img/foretagskund/5_Koer_345px.jpg  345w" src="./index/5_Koer_645px.jpg" sizes="(min-width: 58.75em) 18.75em,(min-width: 40em) 29em, 18.75em" alt="Köer">
                      </div>
                    </div><div class="box slick-slide slick-cloned" index="6" style="width: 300px;">
                    <h3 class="blocked-headline green-1">Inloggning</h3>
                    <div class="img-wrap">
                      <img srcset="../assets/img/foretagskund/0_Inloggning_645px.jpg  645w, 
                                  ../assets/img/foretagskund/0_Inloggning_445px.jpg  445w,
                                  ../assets/img/foretagskund/0_Inloggning_345px.jpg  345w" src="./index/0_Inloggning_645px.jpg" sizes="(min-width: 58.75em) 18.75em,(min-width: 40em) 29em, 18.75em" alt="Inloggning">

                    </div>
                  </div><div class="box slick-slide slick-cloned" index="7" style="width: 300px;">
                    <h3 class="blocked-headline green-2">Mobila grupper</h3>
                    <div class="img-wrap">
                      <img srcset="../assets/img/foretagskund/1_Mobila_grupper_645px.jpg  645w, 
                                  ../assets/img/foretagskund/1_Mobila_grupper_445px.jpg  445w,
                                  ../assets/img/foretagskund/1_Mobila_grupper_345px.jpg  345w" src="./index/1_Mobila_grupper_645px.jpg" sizes="(min-width: 58.75em) 18.75em,(min-width: 40em) 29em, 18.75em" alt="Mobila grupper">
                    </div>
                  </div><div class="box slick-slide slick-cloned" index="8" style="width: 300px;">
                    <h3 class="blocked-headline green-3">Hänvisning</h3>
                    <div class="img-wrap">
                     <img srcset="../assets/img/foretagskund/2_Hanvisning_645px.jpg  645w, 
                                  ../assets/img/foretagskund/2_Hanvisning_445px.jpg  445w,
                                  ../assets/img/foretagskund/2_Hanvisning_345px.jpg  345w" src="./index/2_Hanvisning_645px.jpg" sizes="(min-width: 58.75em) 18.75em,(min-width: 40em) 29em, 18.75em" alt="Hänvisning">
                    </div>
                  </div></div></div>
                  
                          
                   
     
                            
                    
              <ul class="slick-dots" style="display: block;"><li class="slick-active"><button type="button" data-role="none">1</button></li><li class=""><button type="button" data-role="none">2</button></li></ul></div>
            </div>
          </section>
      </div>
    </div>
    
    <link rel="stylesheet" type="text/css" href="./index/style.css">
<div id="easyChat">
    <div id="easyChatInner">
    	<div id="ecChatOffline">
            <p>Chatten är för närvarande offline.</p>
            <p>Du kan även skicka e-post till oss på <a href="mailto:info@easytelecom.se">info@easytelecom.se</a>, eller ringa 08-4030 7300.</p>
        </div>
        <div id="ecOperators"><div class="ecHeader"></div><ul></ul></div>
        <div id="ecVisitors"><div class="ecHeader"></div><ul></ul></div>
        <div id="ecStartWrp">
            <div id="ecMainHeader">
                <span class="txt"></span>
                <span class="icon ec-icon-chat"></span>
            </div>
            <div id="ecStartBody"></div>
        </div>
    </div>
</div>
<svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="800" style="display:none">
    <defs>
        <filter id="goo">
            <fegaussianblur in="SourceGraphic" stdDeviation="10" result="blur"></fegaussianblur>
            <fecolormatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo"></fecolormatrix>
            <fecomposite in="SourceGraphic" in2="goo"></fecomposite>
        </filter>
    </defs>
</svg>
<script type="text/template" id="ecStartBodyAdminTemplate">
    <table id="ecAdminLogin">
        <tr>
            <td class="input"><input id="ecUsername" placeholder="Användarnamn"></td>
        </tr>
        <tr>
            <td class="input"><input id="ecPassword" type="password" placeholder="Lösenord"></td>
        </tr>
        <tr class="input">
            <td colspan="2"><input type="button" id="ecStartJoin" value="Logga in"></td>
        </tr>
    </table>
</script>
<script type="text/template" id="ecChatTemplate">
    <div class="ecChatWrap" data-guid="!guid">
        <div class="ecChatMsgs">
			<div class="ecChatMsgsInner"></div>
		</div>

        <div class="chat-input-bar">
            <div class="chat-info-container">

            </div>
            <div class="chat-effect-container">
                <div class="chat-effect-bar"></div>
            </div>
            <div class="chat-input-wrapper">
                <i class="ec-icon-edit"></i>
                <span class="ecChatLine"></span>
                <div class="chat-input ecChatMsg" contenteditable></div>
                <button class="chat-send ecChatMsgSend">
                    <i class="ec-icon-paperplane"></i>
                </button>
            </div>
        </div>
    </div>
</script>
<script type="text/template" id="ecAdminChatTemplate">
    <div class="ecChatWrap" data-guid="!guid">
        <div class="ecChatMsgs">
			<div class="ecChatMsgsInner"></div>
		</div>

        <div class="chat-input-bar">
            <div class="chat-info-container">

            </div>
            <div class="chat-effect-container">
                <div class="chat-effect-bar"></div>
            </div>
            <div class="chat-input-wrapper">
                <i class="ec-icon-edit"></i>
                <div class="chat-input ecChatMsg" contenteditable></div>
                <span class="ecChatLine"></span>
                <button class="chat-send ecChatMsgSend">
                    <i class="ec-icon-paperplane"></i>
                </button>
            </div>
        </div>
    </div>
</script>
<script type="text/template" id="ecStartBodyVisitorTemplate">
    <table id="ecVisitorStart">
        <tr>
            <td class="input">
                <span class="ec-icon ec-icon-person"></span>
                <input id="ecUserNickname" placeholder="Namn *" value="">
            </td>
        </tr>
        <tr>
            <td class="input">
                <span class="ec-icon ec-icon-view_headline"></span>
                <select id="ecUserType">
                    <option value="">Ärende</option>
                    <option value="Mobilt">Mobilt</option>
                    <option value="Fast">Fast telefoni</option>
                    <option value="Faktura">Faktura</option>
                    <option value="Operatör">Operatör</option>
                    <option value="Reseller">Återförsäljare</option>
                    <option value="Ovrig">Övrigt</option>
                </select>
            </td>
        </tr>
        <tr>
            <td class="input">
                <span class="ec-icon ec-icon-chat"></span>
                <input id="ecStartQuestion" placeholder="Fråga *" value="">
            </td>
        </tr>
        <tr>
            <td class="input">
                <span class="ec-icon ec-icon-email"></span>
                <input id="ecUserEmail" placeholder="E-post" value="">
            </td>
        </tr>
        <tr>
            <td class="input">
                <span class="ec-icon ec-icon-call"></span>
                <input id="ecUserPhone" placeholder="Telefon" value="">
            </td>
        </tr>
        <tr class="input">
            <td colspan="2">
                <span class="ec-icon ec-icon-chevron_right"></span>
                <input type="button" id="ecStartJoin" value="Starta chatt">
            </td>
        </tr>
    </table>
</script>
<script type="text/template" id="ecChatMsgTemplate">
    <div class="ecChatMsgWrp !classes">
        <div class="ecChatName">
            <span class="ecChatInitials" title="!nickname">!initials</span>
        </div>
        <div class="ecMsgTxt">
            !msg
        </div>
    </div>
</script>
<script src="./index/socket.io.js.download"></script>
<script src="./index/script.js.download"></script>
<script>
    jQuery(function($){
        var mode = 'visitor';
        //mode = 'visitor';
        (new easyChat).boot(mode);
    });
</script>
    <footer class="footer">
       
  <div class="container">
    <div class="footer-section">
      <h3>Kontakta oss</h3>
      <ul class="icon-menu">
        <li class="phone"><a href="tel:08-4030 7300" target="_blank"><span class="hide-for-mobile">08-4030 7300</span></a></li>
        <li class="email"><a href="mailto:info@easytelecom.se" target="_blank"><span class="hide-for-mobile">info@easytelecom.se</span></a></li>
        <li class="address"><a class="hide-for-mobile" href="https://goo.gl/maps/lb2H7" target="_blank">Easytelecom AB<br>Box 2033<br>750 02 Uppsala</a></li>
      </ul>

    </div>    
    <div class="footer-section footer-menu-section">
      <h3>Meny</h3>
      <ul class="footer-menu">
          <li>
            <a href="http://easytelecom.se/index.php"><?php echo $lang['MENU_HOME']; ?></a>
          </li>
          <li>
             <a href="http://easytelecom.se/index.php#Mobilklient"><?php echo $lang['MENU_mobile Client']; ?></a>
          </li>
          <li>
            <a href="http://easytelecom.se/aterforsaljare.php"><?php echo $lang['MENU_Reseller']; ?></a>
          </li>
          <li>
              <a href="http://easytelecom.se/teknik.php"><?php echo $lang['MENU_Technique']; ?></a>
          </li>    	  
          <li>
            <a href="http://easytelecom.se/operator.php"><?php echo $lang['MENU_Operator']; ?></a>
          </li>
          <li>
              <a href="http://easytelecom.se/om.php"><?php echo $lang['MENU_If Easy Telecom']; ?></a>
          </li>
          <li>
              <a href="http://easytelecom.se/index.php#Molnbaserade-tjanster"><?php echo $lang['MENU_Cloud-based services']; ?></a>
          </li>	  
          <li style="width: 70%; margin-top: 5px; display: none;">
              <img src="./index/Rating.png">
          </li>
          <li>

          </li>
      </ul>
    </div>    

    <div class="footer-section easyAppSection">
        <h3>EasyApp</h3>
         <span class="up-top-link"></span>
        <div style="display: block;overflow: hidden;">
        <img src="./index/Footer_QR_code.png" alt="QR-code" class="easyApp-qr">
        <span class="easyApp-text"><?php echo $lang['downloadone']; ?></span>        
        <span class="easyApp-button button white">Ladda ned EasyApp</span>
            </div>

    </div>
      
  </div>
  <div class="footer-info">
      <div class="container">
        <span class="org-info" style="float:left;display: block;max-width: 600px">Copyright © EasyTelecom 2014 | <?php echo $lang['Org. nr']; ?>. 556848-2375 | <?php echo $lang['VAT-nr']; ?>. SE 556848-237501</span>
        <ul class="social-links" style="float: right;">
          <li><a href="https://www.facebook.com/pages/EasyTelecom/159275107515172" target="_blank"><img src="./index/Footer_FB_icon.png" alt="Facebook"></a></li>
          <li><a target="_blank" href="https://twitter.com/EasyTelecomAB"><img src="./index/Footer_Twitter_icon.png" alt="Twitter"></a></li>
          <li style="float: right;"><img src="./index/Rating.png" style="margin-top:-10px"></li>
            <li style="float: right;"><img src="./index/gasell-2016.png" style="margin:-10px 4px 0 7px"></li>
        </ul>
      </div>
  </div>
    </footer>

    <!-- scripts/scripts.js -->
    <script src="./index/plugins.js.download"></script>
    <script src="./index/ui.js.download"></script>



</body></html>