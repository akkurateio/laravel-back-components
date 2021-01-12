<!-- START MODULE: Header 1 -->
<table border="0" cellpadding="0" cellspacing="0" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%;"
       width="100%">
    <tbody>
    <tr>
        <td class="akk-header-box-s1 bg-primary"
            style="vertical-align: top; background-color: {{ mail_styles('colors.primary') ?? '#1D199C' }};width: {{mail_styles('sizes.templateWidth') ?? '600px'}}"
            width="{{mail_styles('sizes.templateStyle') ?? '600px'}}" valign="top" bgcolor="{{ mail_styles('colors.primary') ?? '#1D199C' }}">
            <div class="akk-header-box-in" style="padding: 24px 30px 40px;">
                <table border="0" cellpadding="0" cellspacing="0"
                       style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%;" width="100%">
                    <tbody>
                    <tr>
                        <td style="vertical-align: top;" valign="top">
                            <!--[if (gte mso 9)|(IE)]>
                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                    <td width="240" valign="top">
                            <![endif]-->
                            <table class="akk-header-logo-s1" align="left" border="0" cellpadding="0" cellspacing="0"
                                   style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: {{mail_styles('brand.full.width') ?? 180}}px;" width="{{mail_styles('brand.full.width') ?? 180 }}'">
                                <tbody>
                                <tr>
                                    <td style="vertical-align: top; padding: 10px 10px 32px;" valign="top">
                                        <a href="{{ url('/') }}" style="text-decoration: none;">
                                            @if(config('general.theme'))
                                                <img src="{{ asset('images/mail/'. config('general.theme') .'-full-white.png') }}" alt="{{ general_config('name') ?? app_name() }}" width="{{mail_styles('brand.full.width')}}"/>
                                            @endif
                                        </a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                            <!--[if (gte mso 9)|(IE)]>
                            </td>
                            <td width="300" valign="" align="left" style="text-align:right;">
                            <![endif]-->
                            <table class="akk-header-nav-s1" align="left" border="0" cellpadding="0" cellspacing="0"
                                   style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
                                <tbody>
                                <tr>
                                    <td class="akk-fb-font"
                                        style="vertical-align: top; padding: 9px 10px 10px; font-family: {{ mail_styles('font') ?? '"Helvetica Neue", Arial, sans-serif' }}; font-size: 20px; line-height: 1"
                                        valign="top"><a
                                                href="{{ url('/') }}"
                                                style="text-decoration: none;
                                                        font-size: 14px;
                                                        font-weight: 500;
                                                        color: {{ mail_styles('colors.white') ?? '#fff' }};">{!! nl2br(mail_styles('baseline') ?? 'Akkurate Boilerplate') !!}</a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                            <!--[if (gte mso 9)|(IE)]>
                            </td></tr></table>
                            <![endif]-->
                        </td>
                    </tr>
                    <tr>
                        <td style="vertical-align: top;" valign="top">
                            <table class="akk-spacing akk-m-header-1" border="0" cellpadding="0" cellspacing="0"
                                   style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%;" width="100%">
                                <tbody>
                                <tr>
                                    <td style="vertical-align: top; height: 0; line-height: 0; font-size: 0;"
                                        valign="top">&nbsp;
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td style="vertical-align: top;" valign="top">
                            <table border="0" cellpadding="0" cellspacing="0"
                                   style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%;" width="100%">
                                <tbody>
                                {{--<tr>--}}
                                    {{--<td class="akk-fb-font"--}}
                                        {{--style="vertical-align: top; padding: 0 10px; font-family: {{ mail_styles('font') }}; font-size: 14px; font-weight: 500; color: {{ mail_styles('colors.white') }}"--}}
                                        {{--valign="top"><a--}}
                                                {{--style="text-decoration: none; cursor: text; color: {{ mail_styles('colors.white') }};">{{ $now->formatLocalized('%a %d %B %Y') }}</a></td>--}}
                                {{--</tr>--}}
                                <tr>
                                    <td class="akk-header-title-s1 akk-fb-font"
                                        style="vertical-align: top; padding: 13px 10px 0; letter-spacing: -0.7px; line-height: 1.27; font-family: {{ mail_styles('font') ?? '"Helvetica Neue", Arial, sans-serif' }}; font-size: 36px; font-weight: 800; color: {{ mail_styles('colors.white') ?? '#fff' }}"
                                        valign="top">{{ $subject ?? '' }}
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <!--[if gte mso 9]>
            </div>
            <p style="margin:0;mso-hide:all">
                <o:p xmlns:o="urn:schemas-microsoft-com:office:office">&nbsp;</o:p>
            </p>
            </v:textbox>
            </v:rect>
            <![endif]-->
        </td>
    </tr>
    </tbody>
</table>
<!-- END MODULE: Header 1 -->


