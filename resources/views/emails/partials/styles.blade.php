<style type="text/css">
    .button {
        text-decoration: none;
        display: inline-block;
        font-weight: bold;
        text-align: center;
        vertical-align: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        background-color: transparent;
        border: 2px solid transparent;
        padding: 0.375rem 0.75rem;
        font-size: 1rem;
        line-height: 1.5;
        border-radius: 0.25rem;
        transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    }
    .button-primary {
        background-color: {{ mail_styles('colors.primary') ?? '#1D199C' }};
        color: #fff;
    }
    .text-center {
        text-align: center;
    }

    @media screen {
    {{--@font-face {--}}
        {{--font-family: 'Katibeh';--}}
        {{--font-style: normal;--}}
        {{--font-weight: 400;--}}
        {{--src: local('Katibeh-Regular'), url({{ config() }}) format('truetype');--}}
    {{--}--}}
    }

    #outlook a {
        padding: 0;
    }

    div[style*="margin: 14px 0;"],
    div[style*="margin: 16px 0;"] {
        margin: 0 !important;
    }

    @media only screen and (min-width:621px) {
        .akk-container {
            width: 620px !important;
        }
    }

    @media only screen and (max-width:620px) {
        .akk-header-box-s1 .akk-header-box-in {
            padding: 24px 20px 30px !important
        }
        .akk-header-logo-s1,
        .akk-header-nav-s1,
        .akk-heading-s1 .akk-heading-action-in,
        .akk-heading-s1 .akk-heading-col {
            width: 100% !important
        }
        .akk-header-nav-s1 td {
            text-align: center !important
        }
        .akk-footer-box-s1 {
            padding-left: 10px !important;
            padding-right: 10px !important
        }
        .akk-footer-row-s1 .akk-footer-row-col {
            max-width: 100% !important
        }
        .akk-spacing.akk-m-footer-h-46 td,
        .akk-spacing.akk-m-footer-h-57 td {
            font-size: 20px !important;
            height: 20px !important;
            line-height: 20px !important
        }
        .akk-products-box-s1 {
            padding-left: 30px !important;
            padding-right: 30px !important
        }
        .akk-product-s1 .akk-product-summary,
        .akk-product-s1 .akk-product-title {
            padding-left: 0 !important;
            padding-right: 0 !important
        }
    }

    @media only screen and (max-width:525px) {
        .akk-header-box-s1 .akk-header-box-in {
            padding: 15px 10px 20px !important
        }
        .akk-header-title-s1 {
            font-size: 30px !important;
            line-height: 1.42 !important
        }
        .akk-spacing.akk-m-header-1 td {
            font-size: 100px !important;
            height: 100px !important;
            line-height: 100px !important
        }
        .akk-footer-box-s1 {
            padding: 5px 0 !important
        }
        .akk-footer-text-s1 br {
            display: none !important
        }
        .akk-products-box-s1 {
            padding: 15px 20px 25px !important
        }
    }
</style>
