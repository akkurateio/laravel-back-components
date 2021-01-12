@extends('back::layouts.mail')

@section('content')
    <table border="0" cellpadding="0" cellspacing="0" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%;"
           width="100%">
        <tbody>
        <tr>
            <td class="akk-products-box-s1"
                style="vertical-align: top; padding: 30px 40px 40px; background-color: {{ config('akk-style.colors.white') ?? '#fff' }}"
                valign="top" bgcolor="{{ config('akk-style.colors.white') ?? '#fff' }}">
                <table border="0" cellpadding="0" cellspacing="0"
                       style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%;" width="100%">
                    <tbody>
                    <tr>
                        <td class="akk-heading-s1" style="vertical-align: top;" valign="top">
                            <!--[if (gte mso 9)|(IE)]>
                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                <td width="100" valign="top">
                            <![endif]-->

                            <table class="akk-heading-col" border="0" cellpadding="0" cellspacing="0"
                                   align="left"
                                   style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%;"
                                   width="100%">
                                <tbody>
                                <tr>
                                    <td class="akk-fb-font"
                                        style="vertical-align: top; padding: 10px 0; font-family: {{ mail_styles('font') ?? '"Helvetica Neue", Arial, sans-serif' }}; font-size: 14px; font-weight: 400; line-height: 1.42; letter-spacing: -0.4px; color: {{ mail_styles('colors.black') ?? '#000' }};"
                                        valign="top">
                                        <p style="color: {{ mail_styles('colors.black') ?? '#000' }};">Bonjour,</p>
                                        <p style="color: {{ mail_styles('colors.black') ?? '#000' }};">vous recevez ce message suite la la création de votre compte {{ app_name() }}.</p>
                                        <p style="color: {{ mail_styles('colors.black') ?? '#000' }};">Cliquez sur le bouton ci-dessous pour confirmer votre adresse e-mail.</p>
                                        <div class="text-center">
                                            <a class="button button-primary"
                                               style="color: {{ mail_styles('colors.white') ?? '#fff' }}; background-color: {{ mail_styles('colors.primary') }};"
                                               href="{{ $url }}">
                                                Finaliser mon inscription
                                            </a>
                                        </div>
                                        <p style="color: {{ mail_styles('colors.black') ?? '#000' }};">Si vous n’avez rien demandé, vous pouvez ignorer cet e-mail.</p>
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
            </td>
        </tr>
        </tbody>
    </table>
@endsection
