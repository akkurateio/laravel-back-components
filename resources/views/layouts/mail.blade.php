<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="format-detection" content="telephone=no">
    <meta name="x-apple-disable-message-reformatting">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@if(!empty($meta->title)){{$meta->title}}@else{{ app_name() }}@endif</title>

    @include('back::emails.partials.styles')

        <!--[if mso]>
    <style type=”text/css”>
        .mail-font{font-family:{{ mail_styles('font') ?? '"Helvetica Neue", Arial, sans-serif' }} !important;}
    </style>
    <![endif]-->
    <!--[if gte mso 9]>
    <xml>
        <o:OfficeDocumentSettings>
            <o:AllowPNG/>
            <o:PixelsPerInch>96</o:PixelsPerInch>
        </o:OfficeDocumentSettings>
    </xml>
    <![endif]-->
</head>
<body class="mail-font" style="
        -ms-text-size-adjust: 100%;
        -webkit-text-size-adjust: 100%;
        -webkit-font-smoothing: antialiased;
        box-sizing: border-box;
        color: {{ mail_styles('colors.black') ?? '#000' }};
        background-color: {{ mail_styles('colors.gray-lighter') ?? '#fff' }};
        font-family: {{ mail_styles('font') ?? '"Helvetica Neue", Arial, sans-serif' }};
        font-size: 16px;
        font-weight: 400;
        line-height: 1.3;
        margin: 0 !important;
        padding: 0;
        text-align: left;
        width: 100% !important;">
<div>
    <table style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%;" width="100%" border="0" cellpadding="0" cellspacing="0">
        <tbody>
        <tr>
            <td style="padding: 0; vertical-align: top;" align="center" valign="top">
                <!--[if (gte mso 9)|(IE)]>
                <table width="{{ mail_styles('sizes.templateWidth') ?? '600px' }}" align="center" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                        <td width="{{ mail_styles('sizes.templateWidth') ?? '600px' }}" align="center" valign="top">
                <![endif]-->

                <table class="akk-container" align="center" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%; Margin: 0 auto; max-width: {{ mail_styles('sizes.templateWidth') }};" width="100%" border="0" cellpadding="0" cellspacing="0">
                    <tbody>
                    <tr>
                        <td align="left" style="vertical-align: top; padding: 0 10px;" valign="top">
                            <span class="preheader" style="color: transparent; display: none; height: 0; max-height: 0; max-width: 0; opacity: 0; overflow: hidden; mso-hide: all; visibility: hidden; width: 0;"></span>

                            <table border="0" cellpadding="0" cellspacing="0" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%;" width="100%">
                                <tbody>
                                <tr>
                                    <td style="vertical-align: top; padding: 0; height: 20px; font-size: 20px; line-height: 20px;" valign="top">&nbsp;</td>
                                </tr>
                                </tbody>
                            </table>


                            <!-- Header Start -->
                        @include('back::emails.partials.header')
                        <!-- Header End -->

                            <!-- Content Start -->
                        @yield('content')
                        <!-- Content End -->

                            <!-- Footer Start -->
                        @include('back::emails.partials.footer')
                        <!-- Footer End -->

                            <table border="0" cellpadding="0" cellspacing="0" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%;" width="100%">
                                <tbody>
                                <tr>
                                    <td style="vertical-align: top; padding: 0; height: 20px; font-size: 20px; line-height: 20px;" valign="top">&nbsp;</td>
                                </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>
                    </tbody>
                </table>

                <!--[if (gte mso 9)|(IE)]>
                </td></tr></table>
                <![endif]-->
            </td>
        </tr>
        </tbody>
    </table>
</div>
</body>
</html>
