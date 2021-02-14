<html style="font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif; font-size: 100%; line-height: 1.6em; margin: 0; padding: 0;">
<head>
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Formulaire de contact</title>
</head>
<body bgcolor="#f6f6f6" style="font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif; font-size: 100%; line-height: 1.6em; -webkit-font-smoothing: antialiased; height: 100%; -webkit-text-size-adjust: none; width: 100% !important; margin: 0; padding: 0;">

    <!-- body -->
    <table class="body-wrap" bgcolor="#f6f6f6" style="font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif; font-size: 100%; line-height: 1.6em; width: 100%; margin: 0; padding: 20px;">
        <tr style="font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif; font-size: 100%; line-height: 1.6em; margin: 0; padding: 0;">
            <td style="font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif; font-size: 100%; line-height: 1.6em; margin: 0; padding: 0;"></td>
            <td class="container" bgcolor="#FFFFFF" style="font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif; font-size: 100%; line-height: 1.6em; clear: both !important; display: block !important; max-width: 600px !important; Margin: 0 auto; padding: 20px; border: 1px solid #f0f0f0;">

                <!-- content -->
                <div class="content" style="font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif; font-size: 100%; line-height: 1.6em; display: block; max-width: 600px; margin: 0 auto; padding: 0;">
                    <table style="font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif; font-size: 100%; line-height: 1.6em; width: 100%; margin: 0; padding: 0;">
                        <tr style="font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif; font-size: 100%; line-height: 1.6em; margin: 0; padding: 0;">
                            <td style="font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif; font-size: 100%; line-height: 1.6em; margin: 0; padding: 0;">
                                <p style="font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 1.6em; font-weight: normal; margin: 0; padding: 0;"></p>
                                <table width="100%" >
                                    <tr>
                                        <td>
                                            <h1 style="font-family: 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif; font-size: 27px; line-height: 1.2em; color: #111111; font-weight: 200; margin: 10px 0 10px; padding: 0;">
                                            </h1>
                                        </td>
                                        <td>
                                            <center>
                                                <img src="{{ asset('backend/assets/images/logo-inverse.png') }}" alt="Logo" title="Logo" style="display:block" width="200" height="70">
                                           </center>
                                        </td>
                                    </tr>
                                </table>

                                <table width="100%" height="100%" style="background-color:#f5f5f5">
                                    <tr>
                                        <td>
                                    <p style="font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 1.6em; font-weight: normal; margin: 0 0 10px; padding: 0;background-color:#f5f5f5">
                                    </p>
                                    <h2 style="font-family: 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif; font-size: 28px; line-height: 1.2em; color: #111111; background-color:#f5f5f5;  font-weight: 200; margin: 20px 0 10px; padding: 0;"></h2>
                                    <p style="font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif; font-size: 16px; line-height: 1.6em; font-weight: normal; margin: 0 0 10px; padding: 0;background-color:#f5f5f5 ">
                                         <h1 style="color:#32CD32; text-align: center;">Cher Admin l'utilisateur 
                                         </br> {{$user['nom']}} {{$user['email']}} à envoyer un message</h1>
                                         <h3 style="color:#0000FF; text-align: center;">Téléphone :  {{$user['phone']}} </h3>
                                    </p>
                                     <center>
                                    <!-- /cordonéé -->

                                        <p style="font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif; font-size: 25px; line-height: 1.0em; font-weight: normal; margin: 40px 0 10px; padding: 0; text-align: center;background-color:#f5f5f5">


                                         <table class="action" align="center" width="100%" cellpadding="0" cellspacing="0" >
                                            <tr>
                                                <td align="center">
                                                    <table width="100%" border="0" cellpadding="0" cellspacing="0">
                                                        <tr>
                                                            <td align="center">
                                                                <table border="0" cellpadding="0" cellspacing="0">
                                                                    <tr>
                                                                        <td>
                                                                            <p style="font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif; font-size: 25px; line-height: 1.6em; font-weight: normal; margin: 0 0 10px; padding: 0;">
                                                                               {{$user['message']}}
                                                                            </p>
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                        </table>
                                         </p>
                                         </td>
                                         </tr>
                                </table>

                                <div align="center" style="margin-top: 30px;">
                                    <table style="font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif; font-size: 100%; line-height: 1.6em; width: 90%; margin: 0; padding: 0;">
                                        <tr style="font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif; font-size: 100%; line-height: 1.6em; margin: 0; padding: 0;">
                                            <td align="center" style="font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif; font-size: 100%; line-height: 1.6em; margin: 0; padding: 0;">
                                                <table width="100%" style="border-top:1px solid #DDD;">
                                                    <tr>
                                                        <td align="center">
                                                            <p style="font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif; font-size: 12px; line-height: 1.6em; color: #666666; font-weight: normal; margin: 0 0 10px; padding: 0;">   &copy; {{ date('Y') }} EvalNet. Tous les droits réservés .</p>
                                                        </td>


                                                    </tr>
                                                </table>

                                            </td>
                                        </tr>
                                    </table>

                                </div>
                            </td>
                        </tr>

                    </table>
                </div>
                <!-- /content -->

            </td>
            <td style="font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif; font-size: 100%; line-height: 1.6em; margin: 0; padding: 0;"></td>
        </tr>

    </table>
    <!-- /body -->
    <!-- footer -->
    <table class="footer-wrap" style="font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif; font-size: 100%; line-height: 1.6em; clear: both !important; width: 100%; margin: 0; padding: 0;">
        <tr style="font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif; font-size: 100%; line-height: 1.6em; margin: 0; padding: 0;">
            <td style="font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif; font-size: 100%; line-height: 1.6em; margin: 0; padding: 0;"></td>
            <td class="container" style="font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif; font-size: 100%; line-height: 1.6em; clear: both !important; display: block !important; max-width: 600px !important; margin: 0 auto; padding: 0;">

                <!-- content -->
                <div class="content" style="font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif; font-size: 100%; line-height: 1.6em; display: block; max-width: 600px; margin: 0 auto; padding: 0;">

                </div>
                <!-- /content -->
            </td>
            <td style="font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif; font-size: 100%; line-height: 1.6em; margin: 0; padding: 0;"></td>
        </tr>
    </table>
    <!-- /footer -->
</body>
</html>
