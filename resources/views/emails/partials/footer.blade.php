<!-- START MODULE: Footer 1 -->
<table border="0" cellpadding="0" cellspacing="0" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%;"
       width="100%">
    <tbody>
    <tr>
        <td class="akk-footer-box-s1"
            style="vertical-align: top; padding: 21px 20px 14px; background-color: {{ mail_styles('colors.gray-lighter') ?? '#eee' }};"
            valign="top" bgcolor="{{ mail_styles('colors.gray-lighter') ?? '#eee' }}">
            <table border="0" cellpadding="0" cellspacing="0"
                   style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%;" width="100%">
                <tbody>
                <tr>
                    <td class="akk-footer-row-s1"
                        style="vertical-align: top; font-size: 0; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%;"
                        valign="top">
                        <!--[if (gte mso 9)|(IE)]>
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                <td width="280" style="width:280px;" valign="top">
                        <![endif]-->
                        <div class="akk-footer-row-col"
                             style="display: inline-block; width: 270px; max-width: 280px; vertical-align: top;">
                            <table border="0" cellpadding="0" cellspacing="0"
                                   style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%;" width="100%">
                                <tbody>
                                <tr>
                                    <td style="vertical-align: top; padding: 20px;" valign="top">
                                        <table border="0" cellpadding="0" cellspacing="0" class="akk-footer-text-s1"
                                               style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%;"
                                               width="100%">
                                            <tbody>
                                            <tr>
                                                <td class="akk-fb-font"
                                                    style="vertical-align: top;
                                                            font-family: {{ mail_styles('font') ?? '"Helvetica Neue", Arial, sans-serif' }};
                                                            font-size: 18px;
                                                            font-weight: 500;
                                                            line-height: 1.33;
                                                            letter-spacing: -0.2px;
                                                            color: {{ mail_styles('colors.black') ?? '#000' }}"
                                                    valign="top">Suivez-nous
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="akk-fb-font"
                                                    style="vertical-align: top;
                                                            padding: 11px 0 0;
                                                            font-family: {{ mail_styles('font') ?? '"Helvetica Neue", Arial, sans-serif' }};
                                                            font-size: 14px;
                                                            line-height: 1.43;
                                                            letter-spacing: -0.2px;
                                                            color: {{ mail_styles('colors.black') ?? '#000' }}"
                                                    valign="top">{{ mail_styles('footerText') ?? 'Restez informé des dernières nouveautés' }}
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                        <table class="akk-spacing akk-m-footer-h-57" border="0" cellpadding="0"
                                               cellspacing="0"
                                               style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%;"
                                               width="100%">
                                            <tbody>
                                            <tr>
                                                <td style="vertical-align: top; height: 27px; line-height: 27px; font-size: 27px;"
                                                    valign="top">&nbsp;
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                        <table border="0" cellpadding="0" cellspacing="0"
                                               style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%;"
                                               width="100%">
                                            <tbody>
                                            <tr>
                                                <td style="vertical-align: top; line-height: 1.3; font-family: {{ mail_styles('font') ?? '"Helvetica Neue", Arial, sans-serif' }}; font-size: 19px"
                                                    valign="top">
                                                    @if(config('general.socials'))
                                                        @foreach (config('general.socials') as $social => $uri)
                                                            <a href="{{$uri}}"
                                                               target="_blank"
                                                               style="text-decoration: none;">
                                                                <img src='{{asset("/images/rse/{$social}.png")}}'
                                                                     width="20" height="20" alt="{{ucfirst($social)}}"
                                                                     style="margin-right: .5rem; border: 0; line-height: 100%; outline: 0; -ms-interpolation-mode: bicubic; font-size: 14px; color: {{ mail_styles('colors.black') ?? '#000' }};"/>
                                                            </a>
                                                        @endforeach
                                                    @else
                                                        <p>Vous pouvez ajouter des réseaux dans config/general.php</p>
                                                    @endif
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <!--[if (gte mso 9)|(IE)]>
                        </td>
                        <td width="280" style="width:280px;" valign="top">
                        <![endif]-->
                        <div class="akk-footer-row-col"
                             style="display: inline-block; width: 270px; max-width: 280px; vertical-align: top;">
                            <table border="0" cellpadding="0" cellspacing="0"
                                   style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%;" width="100%">
                                <tbody>
                                <tr>
                                    <td style="vertical-align: top; padding: 20px;" valign="top">
                                        <table border="0" cellpadding="0" cellspacing="0" class="akk-footer-text-s1"
                                               style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%;"
                                               width="100%">
                                            <tbody>
                                            <tr>
                                                <td class="akk-fb-font"
                                                    style="vertical-align: top;
                                                            font-family: {{ mail_styles('font') ?? '"Helvetica Neue", Arial, sans-serif' }};
                                                            font-size: 18px;
                                                            font-weight: 500;
                                                            line-height: 1.33;
                                                            letter-spacing: -0.2px;
                                                            color: {{ mail_styles('colors.black') ?? '#000' }}"
                                                    valign="top">Contactez-nous
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="akk-fb-font"
                                                    style="vertical-align: top;
                                                            padding: 11px 0 0;
                                                            font-family: {{ mail_styles('font') }};
                                                            font-size: 18px;
                                                            font-weight: 500;
                                                            line-height: 1.33;
                                                            letter-spacing: -0.2px;
                                                            color: {{ mail_styles('colors.black') }};"
                                                    valign="top"><a href="tel:{{config('general.contact.phone')}}"
                                                                    style="text-decoration: none; color: {{ mail_styles('colors.black') ?? '#000' }};">{{config('general.contact.phone')}}</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="akk-fb-font"
                                                    style="vertical-align: top;
                                                            padding: 9px 0 0;
                                                            font-family: {{ mail_styles('font') ?? '"Helvetica Neue", Arial, sans-serif' }};
                                                            font-size: 14px;
                                                            font-weight: 500;
                                                            line-height: 1.7;
                                                            color: {{ mail_styles('colors.primary') ?? '#1D199C' }};"
                                                    valign="top"><a href="mailto:{{config('general.contact.email.support')}}"
                                                                    style="text-decoration: none; color: {{ mail_styles('colors.primary') ?? '#1D199C' }};">{{config('general.contact.email.support')}}</a>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <!--[if (gte mso 9)|(IE)]>
                        </td></tr></table>
                        <![endif]-->
                    </td>
                </tr>
                </tbody>
            </table>

            <p style="text-align: center; font-size: 11px; color: {{ mail_styles('colors.gray') ?? '#444444' }}; margin-bottom: 24px;" align="center">
                <strong>{{config('general.name') ?? app_name()}}</strong><br />
                {{config('general.address.street1')}}<br/>
                @if (!empty(config('general.address.street2')))
                    {{config('general.address.street2')}}<br/>
                @endif
                {{config('general.address.zip') ?? '34000'}} {{config('general.address.city') ?? 'Montpellier'}}<br/>
                {{config('general.address.country') ?? 'France'}}</p>

            <p style="text-align: center; font-size: 11px; color: {{ mail_styles('colors.gray-light') ?? '#999999' }};" align="center">© 2020 {{config('general.name') ?? app_name()}}. Tous droits réservés.</p>
        </td>
    </tr>
    </tbody>
</table>
<!-- END MODULE: Footer 1 -->
