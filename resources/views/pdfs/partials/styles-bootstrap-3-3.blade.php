<style>
    /*!
 * Bootstrap v3.3.7 (http://getbootstrap.com)
 * Copyright 2011-2016 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
 */
    /*! normalize.css v3.0.3 | MIT License | github.com/necolas/normalize.css */
    html {
        font-family: sans-serif;
        -webkit-text-size-adjust: 100%;
        -ms-text-size-adjust: 100%
    }

    body {
        margin: 0
    }

    article, aside, details, figcaption, figure, footer, header, hgroup, main, menu, nav, section, summary {
        display: block
    }

    audio, canvas, progress, video {
        display: inline-block;
        vertical-align: baseline
    }

    audio:not([controls]) {
        display: none;
        height: 0
    }

    [hidden], template {
        display: none
    }

    a {
        background-color: transparent
    }

    a:active, a:hover {
        outline: 0
    }

    abbr[title] {
        border-bottom: 1px dotted
    }

    b, strong {
        font-weight: 700
    }

    dfn {
        font-style: italic
    }

    h1 {
        margin: .67em 0;
        font-size: 2em
    }

    mark {
        color: #000;
        background: #ff0
    }

    small {
        font-size: 80%
    }

    sub, sup {
        position: relative;
        font-size: 75%;
        line-height: 0;
        vertical-align: baseline
    }

    sup {
        top: -.5em
    }

    sub {
        bottom: -.25em
    }

    img {
        border: 0
    }

    svg:not(:root) {
        overflow: hidden
    }

    figure {
        margin: 1em 40px
    }

    hr {
        height: 0;
        -webkit-box-sizing: content-box;
        -moz-box-sizing: content-box;
        box-sizing: content-box
    }

    pre {
        overflow: auto
    }

    code, kbd, pre, samp {
        font-family: monospace, monospace;
        font-size: 1em
    }

    button, input, optgroup, select, textarea {
        margin: 0;
        font: inherit;
        color: inherit
    }

    button {
        overflow: visible
    }

    button, select {
        text-transform: none
    }

    button, html input[type=button], input[type=reset], input[type=submit] {
        -webkit-appearance: button;
        cursor: pointer
    }

    button[disabled], html input[disabled] {
        cursor: default
    }

    button::-moz-focus-inner, input::-moz-focus-inner {
        padding: 0;
        border: 0
    }

    /*! Source: https://github.com/h5bp/html5-boilerplate/blob/master/src/css/main.css */
    /*@media print {*/
    /*    *, :after, :before {*/
    /*        color: #000 !important;*/
    /*        text-shadow: none !important;*/
    /*        background: 0 0 !important;*/
    /*        -webkit-box-shadow: none !important;*/
    /*        box-shadow: none !important*/
    /*    }*/

    /*    a, a:visited {*/
    /*        text-decoration: underline*/
    /*    }*/

    /*    a[href]:after {*/
    /*        content: " (" attr(href) ")"*/
    /*    }*/

    /*    abbr[title]:after {*/
    /*        content: " (" attr(title) ")"*/
    /*    }*/

    /*    a[href^="javascript:"]:after, a[href^="#"]:after {*/
    /*        content: ""*/
    /*    }*/

    /*    blockquote, pre {*/
    /*        border: 1px solid #999;*/
    /*        page-break-inside: avoid*/
    /*    }*/

    /*    thead {*/
    /*        display: table-header-group*/
    /*    }*/

    /*    img, tr {*/
    /*        page-break-inside: avoid*/
    /*    }*/

    /*    img {*/
    /*        max-width: 100% !important*/
    /*    }*/

    /*    h2, h3, p {*/
    /*        orphans: 3;*/
    /*        widows: 3*/
    /*    }*/

    /*    h2, h3 {*/
    /*        page-break-after: avoid*/
    /*    }*/

    /*    .btn > .caret, .dropup > .btn > .caret {*/
    /*        border-top-color: #000 !important*/
    /*    }*/

    /*    .label {*/
    /*        border: 1px solid #000*/
    /*    }*/

    /*    !*.table {*!*/
    /*    !*    border-collapse: collapse !important*!*/
    /*    !*}*!*/

    /*    !*.table td, .table th {*!*/
    /*    !*    background-color: #fff !important*!*/
    /*    !*}*!*/

    /*    !*.table-bordered td, .table-bordered th {*!*/
    /*    !*    border: 1px solid #ddd !important*!*/
    /*    !*}*!*/
    /*}*/

    * {
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box
    }

    :after, :before {
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box
    }

    html {
        font-size: 10px;
        -webkit-tap-highlight-color: rgba(0, 0, 0, 0)
    }

    body {
        font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
        font-size: 14px;
        line-height: 1.42857143;
        color: #333;
        background-color: #fff
    }

    button, input, select, textarea {
        font-family: inherit;
        font-size: inherit;
        line-height: inherit
    }

    a {
        color: #337ab7;
        text-decoration: none
    }

    a:focus, a:hover {
        color: #23527c;
        text-decoration: underline
    }

    a:focus {
        outline: 5px auto -webkit-focus-ring-color;
        outline-offset: -2px
    }

    figure {
        margin: 0
    }

    img {
        vertical-align: middle
    }

    .img-rounded {
        border-radius: 6px
    }

    .img-thumbnail {
        display: inline-block;
        max-width: 100%;
        height: auto;
        padding: 4px;
        line-height: 1.42857143;
        background-color: #fff;
        border: 1px solid #ddd;
        border-radius: 4px;
        -webkit-transition: all .2s ease-in-out;
        -o-transition: all .2s ease-in-out;
        transition: all .2s ease-in-out
    }

    .img-circle {
        border-radius: 50%
    }

    hr {
        margin-top: 20px;
        margin-bottom: 20px;
        border: 0;
        border-top: 1px solid #eee
    }

    .sr-only {
        position: absolute;
        width: 1px;
        height: 1px;
        padding: 0;
        margin: -1px;
        overflow: hidden;
        clip: rect(0, 0, 0, 0);
        border: 0
    }

    .sr-only-focusable:active, .sr-only-focusable:focus {
        position: static;
        width: auto;
        height: auto;
        margin: 0;
        overflow: visible;
        clip: auto
    }

    [role=button] {
        cursor: pointer
    }

    .h1, .h2, .h3, .h4, .h5, .h6, h1, h2, h3, h4, h5, h6 {
        font-family: inherit;
        font-weight: 500;
        line-height: 1.1;
        color: inherit
    }

    .h1 .small, .h1 small, .h2 .small, .h2 small, .h3 .small, .h3 small, .h4 .small, .h4 small, .h5 .small, .h5 small, .h6 .small, .h6 small, h1 .small, h1 small, h2 .small, h2 small, h3 .small, h3 small, h4 .small, h4 small, h5 .small, h5 small, h6 .small, h6 small {
        font-weight: 400;
        line-height: 1;
        color: #777
    }

    .h1, .h2, .h3, h1, h2, h3 {
        margin-top: 20px;
        margin-bottom: 10px
    }

    .h1 .small, .h1 small, .h2 .small, .h2 small, .h3 .small, .h3 small, h1 .small, h1 small, h2 .small, h2 small, h3 .small, h3 small {
        font-size: 65%
    }

    .h4, .h5, .h6, h4, h5, h6 {
        margin-top: 10px;
        margin-bottom: 10px
    }

    .h4 .small, .h4 small, .h5 .small, .h5 small, .h6 .small, .h6 small, h4 .small, h4 small, h5 .small, h5 small, h6 .small, h6 small {
        font-size: 75%
    }

    .h1, h1 {
        font-size: 36px
    }

    .h2, h2 {
        font-size: 30px
    }

    .h3, h3 {
        font-size: 24px
    }

    .h4, h4 {
        font-size: 18px
    }

    .h5, h5 {
        font-size: 14px
    }

    .h6, h6 {
        font-size: 12px
    }

    p {
        margin: 0 0 10px
    }

    .lead {
        margin-bottom: 20px;
        font-size: 16px;
        font-weight: 300;
        line-height: 1.4
    }

    @media (min-width: 768px) {
        .lead {
            font-size: 21px
        }
    }

    .small, small {
        font-size: 85%
    }

    .mark, mark {
        padding: .2em;
        background-color: #fcf8e3
    }

    .text-left {
        text-align: left
    }

    .text-right {
        text-align: right
    }

    .text-center {
        text-align: center
    }

    .text-justify {
        text-align: justify
    }

    .text-nowrap {
        white-space: nowrap
    }

    .text-lowercase {
        text-transform: lowercase
    }

    .text-uppercase {
        text-transform: uppercase
    }

    .text-capitalize {
        text-transform: capitalize
    }

    .text-muted {
        color: #777
    }

    .text-primary {
        color: #337ab7
    }

    a.text-primary:focus, a.text-primary:hover {
        color: #286090
    }

    .text-success {
        color: #3c763d
    }

    a.text-success:focus, a.text-success:hover {
        color: #2b542c
    }

    .text-info {
        color: #31708f
    }

    a.text-info:focus, a.text-info:hover {
        color: #245269
    }

    .text-warning {
        color: #8a6d3b
    }

    a.text-warning:focus, a.text-warning:hover {
        color: #66512c
    }

    .text-danger {
        color: #a94442
    }

    a.text-danger:focus, a.text-danger:hover {
        color: #843534
    }

    .bg-primary {
        color: #fff;
        background-color: #337ab7
    }

    a.bg-primary:focus, a.bg-primary:hover {
        background-color: #286090
    }

    .bg-success {
        background-color: #dff0d8
    }

    a.bg-success:focus, a.bg-success:hover {
        background-color: #c1e2b3
    }

    .bg-info {
        background-color: #d9edf7
    }

    a.bg-info:focus, a.bg-info:hover {
        background-color: #afd9ee
    }

    .bg-warning {
        background-color: #fcf8e3
    }

    a.bg-warning:focus, a.bg-warning:hover {
        background-color: #f7ecb5
    }

    .bg-danger {
        background-color: #f2dede
    }

    a.bg-danger:focus, a.bg-danger:hover {
        background-color: #e4b9b9
    }

    ol, ul {
        margin-top: 0;
        margin-bottom: 10px
    }

    ol ol, ol ul, ul ol, ul ul {
        margin-bottom: 0
    }

    .list-unstyled {
        padding-left: 0;
        list-style: none
    }

    .list-inline {
        padding-left: 0;
        margin-left: -5px;
        list-style: none
    }

    .list-inline > li {
        display: inline-block;
        padding-right: 5px;
        padding-left: 5px
    }

    address {
        margin-bottom: 20px;
        font-style: normal;
        line-height: 1.42857143
    }

    code, kbd, pre, samp {
        font-family: Menlo, Monaco, Consolas, "Courier New", monospace
    }

    code {
        padding: 2px 4px;
        font-size: 90%;
        color: #c7254e;
        background-color: #f9f2f4;
        border-radius: 4px
    }

    kbd {
        padding: 2px 4px;
        font-size: 90%;
        color: #fff;
        background-color: #333;
        border-radius: 3px;
        -webkit-box-shadow: inset 0 -1px 0 rgba(0, 0, 0, .25);
        box-shadow: inset 0 -1px 0 rgba(0, 0, 0, .25)
    }

    kbd kbd {
        padding: 0;
        font-size: 100%;
        font-weight: 700;
        -webkit-box-shadow: none;
        box-shadow: none
    }

    pre {
        display: block;
        padding: 9.5px;
        margin: 0 0 10px;
        font-size: 13px;
        line-height: 1.42857143;
        color: #333;
        word-break: break-all;
        word-wrap: break-word;
        background-color: #f5f5f5;
        border: 1px solid #ccc;
        border-radius: 4px
    }

    pre code {
        padding: 0;
        font-size: inherit;
        color: inherit;
        white-space: pre-wrap;
        background-color: transparent;
        border-radius: 0
    }

    .pre-scrollable {
        max-height: 340px;
        overflow-y: scroll
    }

    .container {
        padding-right: 15px;
        padding-left: 15px;
        margin-right: auto;
        margin-left: auto
    }

    @media (min-width: 768px) {
        .container {
            width: 750px
        }
    }

    @media (min-width: 992px) {
        .container {
            width: 970px
        }
    }

    @media (min-width: 1200px) {
        .container {
            width: 1170px
        }
    }

    .container-fluid {
        padding-right: 15px;
        padding-left: 15px;
        margin-right: auto;
        margin-left: auto
    }

    .row {
        margin-right: -15px;
        margin-left: -15px
    }

    .col-lg-1, .col-lg-10, .col-lg-11, .col-lg-12, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-md-1, .col-md-10, .col-md-11, .col-md-12, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-sm-1, .col-sm-10, .col-sm-11, .col-sm-12, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-xs-1, .col-xs-10, .col-xs-11, .col-xs-12, .col-xs-2, .col-xs-3, .col-xs-4, .col-xs-5, .col-xs-6, .col-xs-7, .col-xs-8, .col-xs-9 {
        position: relative;
        min-height: 1px;
        padding-right: 15px;
        padding-left: 15px
    }

    .col-xs-1, .col-xs-10, .col-xs-11, .col-xs-12, .col-xs-2, .col-xs-3, .col-xs-4, .col-xs-5, .col-xs-6, .col-xs-7, .col-xs-8, .col-xs-9 {
        float: left
    }

    .col-xs-12 {
        width: 100%
    }

    .col-xs-11 {
        width: 91.66666667%
    }

    .col-xs-10 {
        width: 83.33333333%
    }

    .col-xs-9 {
        width: 75%
    }

    .col-xs-8 {
        width: 66.66666667%
    }

    .col-xs-7 {
        width: 58.33333333%
    }

    .col-xs-6 {
        width: 50%
    }

    .col-xs-5 {
        width: 41.66666667%
    }

    .col-xs-4 {
        width: 33.33333333%
    }

    .col-xs-3 {
        width: 25%
    }

    .col-xs-2 {
        width: 16.66666667%
    }

    .col-xs-1 {
        width: 8.33333333%
    }

    .col-xs-pull-12 {
        right: 100%
    }

    .col-xs-pull-11 {
        right: 91.66666667%
    }

    .col-xs-pull-10 {
        right: 83.33333333%
    }

    .col-xs-pull-9 {
        right: 75%
    }

    .col-xs-pull-8 {
        right: 66.66666667%
    }

    .col-xs-pull-7 {
        right: 58.33333333%
    }

    .col-xs-pull-6 {
        right: 50%
    }

    .col-xs-pull-5 {
        right: 41.66666667%
    }

    .col-xs-pull-4 {
        right: 33.33333333%
    }

    .col-xs-pull-3 {
        right: 25%
    }

    .col-xs-pull-2 {
        right: 16.66666667%
    }

    .col-xs-pull-1 {
        right: 8.33333333%
    }

    .col-xs-pull-0 {
        right: auto
    }

    .col-xs-push-12 {
        left: 100%
    }

    .col-xs-push-11 {
        left: 91.66666667%
    }

    .col-xs-push-10 {
        left: 83.33333333%
    }

    .col-xs-push-9 {
        left: 75%
    }

    .col-xs-push-8 {
        left: 66.66666667%
    }

    .col-xs-push-7 {
        left: 58.33333333%
    }

    .col-xs-push-6 {
        left: 50%
    }

    .col-xs-push-5 {
        left: 41.66666667%
    }

    .col-xs-push-4 {
        left: 33.33333333%
    }

    .col-xs-push-3 {
        left: 25%
    }

    .col-xs-push-2 {
        left: 16.66666667%
    }

    .col-xs-push-1 {
        left: 8.33333333%
    }

    .col-xs-push-0 {
        left: auto
    }

    .col-xs-offset-12 {
        margin-left: 100%
    }

    .col-xs-offset-11 {
        margin-left: 91.66666667%
    }

    .col-xs-offset-10 {
        margin-left: 83.33333333%
    }

    .col-xs-offset-9 {
        margin-left: 75%
    }

    .col-xs-offset-8 {
        margin-left: 66.66666667%
    }

    .col-xs-offset-7 {
        margin-left: 58.33333333%
    }

    .col-xs-offset-6 {
        margin-left: 50%
    }

    .col-xs-offset-5 {
        margin-left: 41.66666667%
    }

    .col-xs-offset-4 {
        margin-left: 33.33333333%
    }

    .col-xs-offset-3 {
        margin-left: 25%
    }

    .col-xs-offset-2 {
        margin-left: 16.66666667%
    }

    .col-xs-offset-1 {
        margin-left: 8.33333333%
    }

    .col-xs-offset-0 {
        margin-left: 0
    }

    @media (min-width: 768px) {
        .col-sm-1, .col-sm-10, .col-sm-11, .col-sm-12, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9 {
            float: left
        }

        .col-sm-12 {
            width: 100%
        }

        .col-sm-11 {
            width: 91.66666667%
        }

        .col-sm-10 {
            width: 83.33333333%
        }

        .col-sm-9 {
            width: 75%
        }

        .col-sm-8 {
            width: 66.66666667%
        }

        .col-sm-7 {
            width: 58.33333333%
        }

        .col-sm-6 {
            width: 50%
        }

        .col-sm-5 {
            width: 41.66666667%
        }

        .col-sm-4 {
            width: 33.33333333%
        }

        .col-sm-3 {
            width: 25%
        }

        .col-sm-2 {
            width: 16.66666667%
        }

        .col-sm-1 {
            width: 8.33333333%
        }

        .col-sm-pull-12 {
            right: 100%
        }

        .col-sm-pull-11 {
            right: 91.66666667%
        }

        .col-sm-pull-10 {
            right: 83.33333333%
        }

        .col-sm-pull-9 {
            right: 75%
        }

        .col-sm-pull-8 {
            right: 66.66666667%
        }

        .col-sm-pull-7 {
            right: 58.33333333%
        }

        .col-sm-pull-6 {
            right: 50%
        }

        .col-sm-pull-5 {
            right: 41.66666667%
        }

        .col-sm-pull-4 {
            right: 33.33333333%
        }

        .col-sm-pull-3 {
            right: 25%
        }

        .col-sm-pull-2 {
            right: 16.66666667%
        }

        .col-sm-pull-1 {
            right: 8.33333333%
        }

        .col-sm-pull-0 {
            right: auto
        }

        .col-sm-push-12 {
            left: 100%
        }

        .col-sm-push-11 {
            left: 91.66666667%
        }

        .col-sm-push-10 {
            left: 83.33333333%
        }

        .col-sm-push-9 {
            left: 75%
        }

        .col-sm-push-8 {
            left: 66.66666667%
        }

        .col-sm-push-7 {
            left: 58.33333333%
        }

        .col-sm-push-6 {
            left: 50%
        }

        .col-sm-push-5 {
            left: 41.66666667%
        }

        .col-sm-push-4 {
            left: 33.33333333%
        }

        .col-sm-push-3 {
            left: 25%
        }

        .col-sm-push-2 {
            left: 16.66666667%
        }

        .col-sm-push-1 {
            left: 8.33333333%
        }

        .col-sm-push-0 {
            left: auto
        }

        .col-sm-offset-12 {
            margin-left: 100%
        }

        .col-sm-offset-11 {
            margin-left: 91.66666667%
        }

        .col-sm-offset-10 {
            margin-left: 83.33333333%
        }

        .col-sm-offset-9 {
            margin-left: 75%
        }

        .col-sm-offset-8 {
            margin-left: 66.66666667%
        }

        .col-sm-offset-7 {
            margin-left: 58.33333333%
        }

        .col-sm-offset-6 {
            margin-left: 50%
        }

        .col-sm-offset-5 {
            margin-left: 41.66666667%
        }

        .col-sm-offset-4 {
            margin-left: 33.33333333%
        }

        .col-sm-offset-3 {
            margin-left: 25%
        }

        .col-sm-offset-2 {
            margin-left: 16.66666667%
        }

        .col-sm-offset-1 {
            margin-left: 8.33333333%
        }

        .col-sm-offset-0 {
            margin-left: 0
        }
    }

    @media (min-width: 992px) {
        .col-md-1, .col-md-10, .col-md-11, .col-md-12, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9 {
            float: left
        }

        .col-md-12 {
            width: 100%
        }

        .col-md-11 {
            width: 91.66666667%
        }

        .col-md-10 {
            width: 83.33333333%
        }

        .col-md-9 {
            width: 75%
        }

        .col-md-8 {
            width: 66.66666667%
        }

        .col-md-7 {
            width: 58.33333333%
        }

        .col-md-6 {
            width: 50%
        }

        .col-md-5 {
            width: 41.66666667%
        }

        .col-md-4 {
            width: 33.33333333%
        }

        .col-md-3 {
            width: 25%
        }

        .col-md-2 {
            width: 16.66666667%
        }

        .col-md-1 {
            width: 8.33333333%
        }

        .col-md-pull-12 {
            right: 100%
        }

        .col-md-pull-11 {
            right: 91.66666667%
        }

        .col-md-pull-10 {
            right: 83.33333333%
        }

        .col-md-pull-9 {
            right: 75%
        }

        .col-md-pull-8 {
            right: 66.66666667%
        }

        .col-md-pull-7 {
            right: 58.33333333%
        }

        .col-md-pull-6 {
            right: 50%
        }

        .col-md-pull-5 {
            right: 41.66666667%
        }

        .col-md-pull-4 {
            right: 33.33333333%
        }

        .col-md-pull-3 {
            right: 25%
        }

        .col-md-pull-2 {
            right: 16.66666667%
        }

        .col-md-pull-1 {
            right: 8.33333333%
        }

        .col-md-pull-0 {
            right: auto
        }

        .col-md-push-12 {
            left: 100%
        }

        .col-md-push-11 {
            left: 91.66666667%
        }

        .col-md-push-10 {
            left: 83.33333333%
        }

        .col-md-push-9 {
            left: 75%
        }

        .col-md-push-8 {
            left: 66.66666667%
        }

        .col-md-push-7 {
            left: 58.33333333%
        }

        .col-md-push-6 {
            left: 50%
        }

        .col-md-push-5 {
            left: 41.66666667%
        }

        .col-md-push-4 {
            left: 33.33333333%
        }

        .col-md-push-3 {
            left: 25%
        }

        .col-md-push-2 {
            left: 16.66666667%
        }

        .col-md-push-1 {
            left: 8.33333333%
        }

        .col-md-push-0 {
            left: auto
        }

        .col-md-offset-12 {
            margin-left: 100%
        }

        .col-md-offset-11 {
            margin-left: 91.66666667%
        }

        .col-md-offset-10 {
            margin-left: 83.33333333%
        }

        .col-md-offset-9 {
            margin-left: 75%
        }

        .col-md-offset-8 {
            margin-left: 66.66666667%
        }

        .col-md-offset-7 {
            margin-left: 58.33333333%
        }

        .col-md-offset-6 {
            margin-left: 50%
        }

        .col-md-offset-5 {
            margin-left: 41.66666667%
        }

        .col-md-offset-4 {
            margin-left: 33.33333333%
        }

        .col-md-offset-3 {
            margin-left: 25%
        }

        .col-md-offset-2 {
            margin-left: 16.66666667%
        }

        .col-md-offset-1 {
            margin-left: 8.33333333%
        }

        .col-md-offset-0 {
            margin-left: 0
        }
    }

    @media (min-width: 1200px) {
        .col-lg-1, .col-lg-10, .col-lg-11, .col-lg-12, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9 {
            float: left
        }

        .col-lg-12 {
            width: 100%
        }

        .col-lg-11 {
            width: 91.66666667%
        }

        .col-lg-10 {
            width: 83.33333333%
        }

        .col-lg-9 {
            width: 75%
        }

        .col-lg-8 {
            width: 66.66666667%
        }

        .col-lg-7 {
            width: 58.33333333%
        }

        .col-lg-6 {
            width: 50%
        }

        .col-lg-5 {
            width: 41.66666667%
        }

        .col-lg-4 {
            width: 33.33333333%
        }

        .col-lg-3 {
            width: 25%
        }

        .col-lg-2 {
            width: 16.66666667%
        }

        .col-lg-1 {
            width: 8.33333333%
        }

        .col-lg-pull-12 {
            right: 100%
        }

        .col-lg-pull-11 {
            right: 91.66666667%
        }

        .col-lg-pull-10 {
            right: 83.33333333%
        }

        .col-lg-pull-9 {
            right: 75%
        }

        .col-lg-pull-8 {
            right: 66.66666667%
        }

        .col-lg-pull-7 {
            right: 58.33333333%
        }

        .col-lg-pull-6 {
            right: 50%
        }

        .col-lg-pull-5 {
            right: 41.66666667%
        }

        .col-lg-pull-4 {
            right: 33.33333333%
        }

        .col-lg-pull-3 {
            right: 25%
        }

        .col-lg-pull-2 {
            right: 16.66666667%
        }

        .col-lg-pull-1 {
            right: 8.33333333%
        }

        .col-lg-pull-0 {
            right: auto
        }

        .col-lg-push-12 {
            left: 100%
        }

        .col-lg-push-11 {
            left: 91.66666667%
        }

        .col-lg-push-10 {
            left: 83.33333333%
        }

        .col-lg-push-9 {
            left: 75%
        }

        .col-lg-push-8 {
            left: 66.66666667%
        }

        .col-lg-push-7 {
            left: 58.33333333%
        }

        .col-lg-push-6 {
            left: 50%
        }

        .col-lg-push-5 {
            left: 41.66666667%
        }

        .col-lg-push-4 {
            left: 33.33333333%
        }

        .col-lg-push-3 {
            left: 25%
        }

        .col-lg-push-2 {
            left: 16.66666667%
        }

        .col-lg-push-1 {
            left: 8.33333333%
        }

        .col-lg-push-0 {
            left: auto
        }

        .col-lg-offset-12 {
            margin-left: 100%
        }

        .col-lg-offset-11 {
            margin-left: 91.66666667%
        }

        .col-lg-offset-10 {
            margin-left: 83.33333333%
        }

        .col-lg-offset-9 {
            margin-left: 75%
        }

        .col-lg-offset-8 {
            margin-left: 66.66666667%
        }

        .col-lg-offset-7 {
            margin-left: 58.33333333%
        }

        .col-lg-offset-6 {
            margin-left: 50%
        }

        .col-lg-offset-5 {
            margin-left: 41.66666667%
        }

        .col-lg-offset-4 {
            margin-left: 33.33333333%
        }

        .col-lg-offset-3 {
            margin-left: 25%
        }

        .col-lg-offset-2 {
            margin-left: 16.66666667%
        }

        .col-lg-offset-1 {
            margin-left: 8.33333333%
        }

        .col-lg-offset-0 {
            margin-left: 0
        }
    }

    /*table {*/
    /*    background-color: transparent*/
    /*}*/

    /*caption {*/
    /*    padding-top: 8px;*/
    /*    padding-bottom: 8px;*/
    /*    color: #777;*/
    /*    text-align: left*/
    /*}*/

    /*th {*/
    /*    text-align: left*/
    /*}*/

    /*.table {*/
    /*    width: 100%;*/
    /*    max-width: 100%;*/
    /*    margin-bottom: 20px*/
    /*}*/

    /*.table>tbody>tr>td,.table>tbody>tr>th,.table>tfoot>tr>td,.table>tfoot>tr>th,.table>thead>tr>td,.table>thead>tr>th {*/
    /*    padding: 8px;*/
    /*    line-height: 1.42857143;*/
    /*    vertical-align: top;*/
    /*    border-top: 1px solid #ddd*/
    /*}*/

    /*.table>thead>tr>th {*/
    /*    vertical-align: bottom;*/
    /*    border-bottom: 2px solid #ddd*/
    /*}*/

    /*.table>caption+thead>tr:first-child>td,.table>caption+thead>tr:first-child>th,.table>colgroup+thead>tr:first-child>td,.table>colgroup+thead>tr:first-child>th,.table>thead:first-child>tr:first-child>td,.table>thead:first-child>tr:first-child>th {*/
    /*    border-top: 0*/
    /*}*/

    /*.table>tbody+tbody {*/
    /*    border-top: 2px solid #ddd*/
    /*}*/

    /*.table .table {*/
    /*    background-color: #fff*/
    /*}*/

    /*.table-condensed>tbody>tr>td,.table-condensed>tbody>tr>th,.table-condensed>tfoot>tr>td,.table-condensed>tfoot>tr>th,.table-condensed>thead>tr>td,.table-condensed>thead>tr>th {*/
    /*    padding: 5px*/
    /*}*/

    /*.table-bordered {*/
    /*    border: 1px solid #ddd*/
    /*}*/

    /*.table-bordered>tbody>tr>td,.table-bordered>tbody>tr>th,.table-bordered>tfoot>tr>td,.table-bordered>tfoot>tr>th,.table-bordered>thead>tr>td,.table-bordered>thead>tr>th {*/
    /*    border: 1px solid #ddd*/
    /*}*/

    /*.table-bordered>thead>tr>td,.table-bordered>thead>tr>th {*/
    /*    border-bottom-width: 2px*/
    /*}*/

    /*.table-striped>tbody>tr:nth-of-type(odd) {*/
    /*    background-color: #f9f9f9*/
    /*}*/

    /*.table-hover>tbody>tr:hover {*/
    /*    background-color: #f5f5f5*/
    /*}*/

    /*table col[class*=col-] {*/
    /*    position: static;*/
    /*    display: table-column;*/
    /*    float: none*/
    /*}*/

    /*table td[class*=col-],table th[class*=col-] {*/
    /*    position: static;*/
    /*    display: table-cell;*/
    /*    float: none*/
    /*}*/

    /*.table>tbody>tr.active>td,.table>tbody>tr.active>th,.table>tbody>tr>td.active,.table>tbody>tr>th.active,.table>tfoot>tr.active>td,.table>tfoot>tr.active>th,.table>tfoot>tr>td.active,.table>tfoot>tr>th.active,.table>thead>tr.active>td,.table>thead>tr.active>th,.table>thead>tr>td.active,.table>thead>tr>th.active {*/
    /*    background-color: #f5f5f5*/
    /*}*/

    /*.table-hover>tbody>tr.active:hover>td,.table-hover>tbody>tr.active:hover>th,.table-hover>tbody>tr:hover>.active,.table-hover>tbody>tr>td.active:hover,.table-hover>tbody>tr>th.active:hover {*/
    /*    background-color: #e8e8e8*/
    /*}*/

    /*.table>tbody>tr.success>td,.table>tbody>tr.success>th,.table>tbody>tr>td.success,.table>tbody>tr>th.success,.table>tfoot>tr.success>td,.table>tfoot>tr.success>th,.table>tfoot>tr>td.success,.table>tfoot>tr>th.success,.table>thead>tr.success>td,.table>thead>tr.success>th,.table>thead>tr>td.success,.table>thead>tr>th.success {*/
    /*    background-color: #dff0d8*/
    /*}*/

    /*.table-hover>tbody>tr.success:hover>td,.table-hover>tbody>tr.success:hover>th,.table-hover>tbody>tr:hover>.success,.table-hover>tbody>tr>td.success:hover,.table-hover>tbody>tr>th.success:hover {*/
    /*    background-color: #d0e9c6*/
    /*}*/

    /*.table>tbody>tr.info>td,.table>tbody>tr.info>th,.table>tbody>tr>td.info,.table>tbody>tr>th.info,.table>tfoot>tr.info>td,.table>tfoot>tr.info>th,.table>tfoot>tr>td.info,.table>tfoot>tr>th.info,.table>thead>tr.info>td,.table>thead>tr.info>th,.table>thead>tr>td.info,.table>thead>tr>th.info {*/
    /*    background-color: #d9edf7*/
    /*}*/

    /*.table-hover>tbody>tr.info:hover>td,.table-hover>tbody>tr.info:hover>th,.table-hover>tbody>tr:hover>.info,.table-hover>tbody>tr>td.info:hover,.table-hover>tbody>tr>th.info:hover {*/
    /*    background-color: #c4e3f3*/
    /*}*/

    /*.table>tbody>tr.warning>td,.table>tbody>tr.warning>th,.table>tbody>tr>td.warning,.table>tbody>tr>th.warning,.table>tfoot>tr.warning>td,.table>tfoot>tr.warning>th,.table>tfoot>tr>td.warning,.table>tfoot>tr>th.warning,.table>thead>tr.warning>td,.table>thead>tr.warning>th,.table>thead>tr>td.warning,.table>thead>tr>th.warning {*/
    /*    background-color: #fcf8e3*/
    /*}*/

    /*.table-hover>tbody>tr.warning:hover>td,.table-hover>tbody>tr.warning:hover>th,.table-hover>tbody>tr:hover>.warning,.table-hover>tbody>tr>td.warning:hover,.table-hover>tbody>tr>th.warning:hover {*/
    /*    background-color: #faf2cc*/
    /*}*/

    /*.table>tbody>tr.danger>td,.table>tbody>tr.danger>th,.table>tbody>tr>td.danger,.table>tbody>tr>th.danger,.table>tfoot>tr.danger>td,.table>tfoot>tr.danger>th,.table>tfoot>tr>td.danger,.table>tfoot>tr>th.danger,.table>thead>tr.danger>td,.table>thead>tr.danger>th,.table>thead>tr>td.danger,.table>thead>tr>th.danger {*/
    /*    background-color: #f2dede*/
    /*}*/

    /*.table-hover>tbody>tr.danger:hover>td,.table-hover>tbody>tr.danger:hover>th,.table-hover>tbody>tr:hover>.danger,.table-hover>tbody>tr>td.danger:hover,.table-hover>tbody>tr>th.danger:hover {*/
    /*    background-color: #ebcccc*/
    /*}*/

    /*.table-responsive {*/
    /*    min-height: .01%;*/
    /*    overflow-x: auto*/
    /*}*/

    output {
        display: block;
        padding-top: 7px;
        font-size: 14px;
        line-height: 1.42857143;
        color: #555
    }

    .btn {
        display: inline-block;
        padding: 6px 12px;
        margin-bottom: 0;
        font-size: 14px;
        font-weight: 400;
        line-height: 1.42857143;
        text-align: center;
        white-space: nowrap;
        vertical-align: middle;
        -ms-touch-action: manipulation;
        touch-action: manipulation;
        cursor: pointer;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        background-image: none;
        border: 1px solid transparent;
        border-radius: 4px
    }

    .btn.active.focus, .btn.active:focus, .btn.focus, .btn:active.focus, .btn:active:focus, .btn:focus {
        outline: 5px auto -webkit-focus-ring-color;
        outline-offset: -2px
    }

    .btn.focus, .btn:focus, .btn:hover {
        color: #333;
        text-decoration: none
    }

    .btn.active, .btn:active {
        background-image: none;
        outline: 0;
        -webkit-box-shadow: inset 0 3px 5px rgba(0, 0, 0, .125);
        box-shadow: inset 0 3px 5px rgba(0, 0, 0, .125)
    }

    .btn.disabled, .btn[disabled], fieldset[disabled] .btn {
        cursor: not-allowed;
        filter: alpha(opacity=65);
        -webkit-box-shadow: none;
        box-shadow: none;
        opacity: .65
    }

    a.btn.disabled, fieldset[disabled] a.btn {
        pointer-events: none
    }

    .btn-default {
        color: #333;
        background-color: #fff;
        border-color: #ccc
    }

    .btn-default.focus, .btn-default:focus {
        color: #333;
        background-color: #e6e6e6;
        border-color: #8c8c8c
    }

    .btn-default:hover {
        color: #333;
        background-color: #e6e6e6;
        border-color: #adadad
    }

    .btn-default.active, .btn-default:active, .open > .dropdown-toggle.btn-default {
        color: #333;
        background-color: #e6e6e6;
        border-color: #adadad
    }

    .btn-default.active.focus, .btn-default.active:focus, .btn-default.active:hover, .btn-default:active.focus, .btn-default:active:focus, .btn-default:active:hover, .open > .dropdown-toggle.btn-default.focus, .open > .dropdown-toggle.btn-default:focus, .open > .dropdown-toggle.btn-default:hover {
        color: #333;
        background-color: #d4d4d4;
        border-color: #8c8c8c
    }

    .btn-default.active, .btn-default:active, .open > .dropdown-toggle.btn-default {
        background-image: none
    }

    .btn-default.disabled.focus, .btn-default.disabled:focus, .btn-default.disabled:hover, .btn-default[disabled].focus, .btn-default[disabled]:focus, .btn-default[disabled]:hover, fieldset[disabled] .btn-default.focus, fieldset[disabled] .btn-default:focus, fieldset[disabled] .btn-default:hover {
        background-color: #fff;
        border-color: #ccc
    }

    .btn-default .badge {
        color: #fff;
        background-color: #333
    }

    .btn-primary {
        color: #fff;
        background-color: #337ab7;
        border-color: #2e6da4
    }

    .btn-primary.focus, .btn-primary:focus {
        color: #fff;
        background-color: #286090;
        border-color: #122b40
    }

    .btn-primary:hover {
        color: #fff;
        background-color: #286090;
        border-color: #204d74
    }

    .btn-primary.active, .btn-primary:active, .open > .dropdown-toggle.btn-primary {
        color: #fff;
        background-color: #286090;
        border-color: #204d74
    }

    .btn-primary.active.focus, .btn-primary.active:focus, .btn-primary.active:hover, .btn-primary:active.focus, .btn-primary:active:focus, .btn-primary:active:hover, .open > .dropdown-toggle.btn-primary.focus, .open > .dropdown-toggle.btn-primary:focus, .open > .dropdown-toggle.btn-primary:hover {
        color: #fff;
        background-color: #204d74;
        border-color: #122b40
    }

    .btn-primary.active, .btn-primary:active, .open > .dropdown-toggle.btn-primary {
        background-image: none
    }

    .btn-primary.disabled.focus, .btn-primary.disabled:focus, .btn-primary.disabled:hover, .btn-primary[disabled].focus, .btn-primary[disabled]:focus, .btn-primary[disabled]:hover, fieldset[disabled] .btn-primary.focus, fieldset[disabled] .btn-primary:focus, fieldset[disabled] .btn-primary:hover {
        background-color: #337ab7;
        border-color: #2e6da4
    }

    .btn-primary .badge {
        color: #337ab7;
        background-color: #fff
    }

    .btn-success {
        color: #fff;
        background-color: #5cb85c;
        border-color: #4cae4c
    }

    .btn-success.focus, .btn-success:focus {
        color: #fff;
        background-color: #449d44;
        border-color: #255625
    }

    .btn-success:hover {
        color: #fff;
        background-color: #449d44;
        border-color: #398439
    }

    .btn-success.active, .btn-success:active, .open > .dropdown-toggle.btn-success {
        color: #fff;
        background-color: #449d44;
        border-color: #398439
    }

    .btn-success.active.focus, .btn-success.active:focus, .btn-success.active:hover, .btn-success:active.focus, .btn-success:active:focus, .btn-success:active:hover, .open > .dropdown-toggle.btn-success.focus, .open > .dropdown-toggle.btn-success:focus, .open > .dropdown-toggle.btn-success:hover {
        color: #fff;
        background-color: #398439;
        border-color: #255625
    }

    .btn-success.active, .btn-success:active, .open > .dropdown-toggle.btn-success {
        background-image: none
    }

    .btn-success.disabled.focus, .btn-success.disabled:focus, .btn-success.disabled:hover, .btn-success[disabled].focus, .btn-success[disabled]:focus, .btn-success[disabled]:hover, fieldset[disabled] .btn-success.focus, fieldset[disabled] .btn-success:focus, fieldset[disabled] .btn-success:hover {
        background-color: #5cb85c;
        border-color: #4cae4c
    }

    .btn-success .badge {
        color: #5cb85c;
        background-color: #fff
    }

    .btn-info {
        color: #fff;
        background-color: #5bc0de;
        border-color: #46b8da
    }

    .btn-info.focus, .btn-info:focus {
        color: #fff;
        background-color: #31b0d5;
        border-color: #1b6d85
    }

    .btn-info:hover {
        color: #fff;
        background-color: #31b0d5;
        border-color: #269abc
    }

    .btn-info.active, .btn-info:active, .open > .dropdown-toggle.btn-info {
        color: #fff;
        background-color: #31b0d5;
        border-color: #269abc
    }

    .btn-info.active.focus, .btn-info.active:focus, .btn-info.active:hover, .btn-info:active.focus, .btn-info:active:focus, .btn-info:active:hover, .open > .dropdown-toggle.btn-info.focus, .open > .dropdown-toggle.btn-info:focus, .open > .dropdown-toggle.btn-info:hover {
        color: #fff;
        background-color: #269abc;
        border-color: #1b6d85
    }

    .btn-info.active, .btn-info:active, .open > .dropdown-toggle.btn-info {
        background-image: none
    }

    .btn-info.disabled.focus, .btn-info.disabled:focus, .btn-info.disabled:hover, .btn-info[disabled].focus, .btn-info[disabled]:focus, .btn-info[disabled]:hover, fieldset[disabled] .btn-info.focus, fieldset[disabled] .btn-info:focus, fieldset[disabled] .btn-info:hover {
        background-color: #5bc0de;
        border-color: #46b8da
    }

    .btn-info .badge {
        color: #5bc0de;
        background-color: #fff
    }

    .btn-warning {
        color: #fff;
        background-color: #f0ad4e;
        border-color: #eea236
    }

    .btn-warning.focus, .btn-warning:focus {
        color: #fff;
        background-color: #ec971f;
        border-color: #985f0d
    }

    .btn-warning:hover {
        color: #fff;
        background-color: #ec971f;
        border-color: #d58512
    }

    .btn-warning.active, .btn-warning:active, .open > .dropdown-toggle.btn-warning {
        color: #fff;
        background-color: #ec971f;
        border-color: #d58512
    }

    .btn-warning.active.focus, .btn-warning.active:focus, .btn-warning.active:hover, .btn-warning:active.focus, .btn-warning:active:focus, .btn-warning:active:hover, .open > .dropdown-toggle.btn-warning.focus, .open > .dropdown-toggle.btn-warning:focus, .open > .dropdown-toggle.btn-warning:hover {
        color: #fff;
        background-color: #d58512;
        border-color: #985f0d
    }

    .btn-warning.active, .btn-warning:active, .open > .dropdown-toggle.btn-warning {
        background-image: none
    }

    .btn-warning.disabled.focus, .btn-warning.disabled:focus, .btn-warning.disabled:hover, .btn-warning[disabled].focus, .btn-warning[disabled]:focus, .btn-warning[disabled]:hover, fieldset[disabled] .btn-warning.focus, fieldset[disabled] .btn-warning:focus, fieldset[disabled] .btn-warning:hover {
        background-color: #f0ad4e;
        border-color: #eea236
    }

    .btn-warning .badge {
        color: #f0ad4e;
        background-color: #fff
    }

    .btn-danger {
        color: #fff;
        background-color: #d9534f;
        border-color: #d43f3a
    }

    .btn-danger.focus, .btn-danger:focus {
        color: #fff;
        background-color: #c9302c;
        border-color: #761c19
    }

    .btn-danger:hover {
        color: #fff;
        background-color: #c9302c;
        border-color: #ac2925
    }

    .btn-danger.active, .btn-danger:active, .open > .dropdown-toggle.btn-danger {
        color: #fff;
        background-color: #c9302c;
        border-color: #ac2925
    }

    .btn-danger.active.focus, .btn-danger.active:focus, .btn-danger.active:hover, .btn-danger:active.focus, .btn-danger:active:focus, .btn-danger:active:hover, .open > .dropdown-toggle.btn-danger.focus, .open > .dropdown-toggle.btn-danger:focus, .open > .dropdown-toggle.btn-danger:hover {
        color: #fff;
        background-color: #ac2925;
        border-color: #761c19
    }

    .btn-danger.active, .btn-danger:active, .open > .dropdown-toggle.btn-danger {
        background-image: none
    }

    .btn-danger.disabled.focus, .btn-danger.disabled:focus, .btn-danger.disabled:hover, .btn-danger[disabled].focus, .btn-danger[disabled]:focus, .btn-danger[disabled]:hover, fieldset[disabled] .btn-danger.focus, fieldset[disabled] .btn-danger:focus, fieldset[disabled] .btn-danger:hover {
        background-color: #d9534f;
        border-color: #d43f3a
    }

    .btn-danger .badge {
        color: #d9534f;
        background-color: #fff
    }

    .btn-link {
        font-weight: 400;
        color: #337ab7;
        border-radius: 0
    }

    .btn-link, .btn-link.active, .btn-link:active, .btn-link[disabled], fieldset[disabled] .btn-link {
        background-color: transparent;
        -webkit-box-shadow: none;
        box-shadow: none
    }

    .btn-link, .btn-link:active, .btn-link:focus, .btn-link:hover {
        border-color: transparent
    }

    .btn-link:focus, .btn-link:hover {
        color: #23527c;
        text-decoration: underline;
        background-color: transparent
    }

    .btn-link[disabled]:focus, .btn-link[disabled]:hover, fieldset[disabled] .btn-link:focus, fieldset[disabled] .btn-link:hover {
        color: #777;
        text-decoration: none
    }

    .btn-group-lg > .btn, .btn-lg {
        padding: 10px 16px;
        font-size: 18px;
        line-height: 1.3333333;
        border-radius: 6px
    }

    .btn-group-sm > .btn, .btn-sm {
        padding: 5px 10px;
        font-size: 12px;
        line-height: 1.5;
        border-radius: 3px
    }

    .btn-group-xs > .btn, .btn-xs {
        padding: 1px 5px;
        font-size: 12px;
        line-height: 1.5;
        border-radius: 3px
    }

    .btn-block {
        display: block;
        width: 100%
    }

    .btn-block + .btn-block {
        margin-top: 5px
    }

    input[type=button].btn-block, input[type=reset].btn-block, input[type=submit].btn-block {
        width: 100%
    }

    .label {
        display: inline;
        padding: .2em .6em .3em;
        font-size: 75%;
        font-weight: 700;
        line-height: 1;
        color: #fff;
        text-align: center;
        white-space: nowrap;
        vertical-align: baseline;
        border-radius: .25em
    }

    a.label:focus, a.label:hover {
        color: #fff;
        text-decoration: none;
        cursor: pointer
    }

    .label:empty {
        display: none
    }

    .btn .label {
        position: relative;
        top: -1px
    }

    .label-default {
        background-color: #777
    }

    .label-default[href]:focus, .label-default[href]:hover {
        background-color: #5e5e5e
    }

    .label-primary {
        background-color: #337ab7
    }

    .label-primary[href]:focus, .label-primary[href]:hover {
        background-color: #286090
    }

    .label-success {
        background-color: #5cb85c
    }

    .label-success[href]:focus, .label-success[href]:hover {
        background-color: #449d44
    }

    .label-info {
        background-color: #5bc0de
    }

    .label-info[href]:focus, .label-info[href]:hover {
        background-color: #31b0d5
    }

    .label-warning {
        background-color: #f0ad4e
    }

    .label-warning[href]:focus, .label-warning[href]:hover {
        background-color: #ec971f
    }

    .label-danger {
        background-color: #d9534f
    }

    .label-danger[href]:focus, .label-danger[href]:hover {
        background-color: #c9302c
    }

    .badge {
        display: inline-block;
        min-width: 10px;
        padding: 3px 7px;
        font-size: 12px;
        font-weight: 700;
        line-height: 1;
        color: #fff;
        text-align: center;
        white-space: nowrap;
        vertical-align: middle;
        background-color: #777;
        border-radius: 10px
    }

    .badge:empty {
        display: none
    }

    .btn .badge {
        position: relative;
        top: -1px
    }

    .btn-group-xs > .btn .badge, .btn-xs .badge {
        top: 0;
        padding: 1px 5px
    }

    a.badge:focus, a.badge:hover {
        color: #fff;
        text-decoration: none;
        cursor: pointer
    }

    .thumbnail {
        display: block;
        padding: 4px;
        margin-bottom: 20px;
        line-height: 1.42857143;
        background-color: #fff;
        border: 1px solid #ddd;
        border-radius: 4px;
        -webkit-transition: border .2s ease-in-out;
        -o-transition: border .2s ease-in-out;
        transition: border .2s ease-in-out
    }

    .thumbnail a > img, .thumbnail > img {
        margin-right: auto;
        margin-left: auto
    }

    a.thumbnail.active, a.thumbnail:focus, a.thumbnail:hover {
        border-color: #337ab7
    }

    .thumbnail .caption {
        padding: 9px;
        color: #333
    }

    .alert {
        padding: 15px;
        margin-bottom: 20px;
        border: 1px solid transparent;
        border-radius: 4px
    }

    .alert h4 {
        margin-top: 0;
        color: inherit
    }

    .alert .alert-link {
        font-weight: 700
    }

    .alert > p, .alert > ul {
        margin-bottom: 0
    }

    .alert > p + p {
        margin-top: 5px
    }

    .alert-dismissable, .alert-dismissible {
        padding-right: 35px
    }

    .alert-dismissable .close, .alert-dismissible .close {
        position: relative;
        top: -2px;
        right: -21px;
        color: inherit
    }

    .alert-success {
        color: #3c763d;
        background-color: #dff0d8;
        border-color: #d6e9c6
    }

    .alert-success hr {
        border-top-color: #c9e2b3
    }

    .alert-success .alert-link {
        color: #2b542c
    }

    .alert-info {
        color: #31708f;
        background-color: #d9edf7;
        border-color: #bce8f1
    }

    .alert-info hr {
        border-top-color: #a6e1ec
    }

    .alert-info .alert-link {
        color: #245269
    }

    .alert-warning {
        color: #8a6d3b;
        background-color: #fcf8e3;
        border-color: #faebcc
    }

    .alert-warning hr {
        border-top-color: #f7e1b5
    }

    .alert-warning .alert-link {
        color: #66512c
    }

    .alert-danger {
        color: #a94442;
        background-color: #f2dede;
        border-color: #ebccd1
    }

    .alert-danger hr {
        border-top-color: #e4b9c0
    }

    .alert-danger .alert-link {
        color: #843534
    }

    .center-block {
        display: block;
        margin-right: auto;
        margin-left: auto
    }

    .pull-right {
        float: right !important
    }

    .pull-left {
        float: left !important
    }

    .hide {
        display: none !important
    }

    .show {
        display: block !important
    }

    .invisible {
        visibility: hidden
    }

    .text-hide {
        font: 0/0 a;
        color: transparent;
        text-shadow: none;
        background-color: transparent;
        border: 0
    }

    .hidden {
        display: none !important
    }

    .affix {
        position: fixed
    }

    @-ms-viewport {
        width: device-width
    }

    .visible-lg, .visible-md, .visible-sm, .visible-xs {
        display: none !important
    }

    .visible-lg-block, .visible-lg-inline, .visible-lg-inline-block, .visible-md-block, .visible-md-inline, .visible-md-inline-block, .visible-sm-block, .visible-sm-inline, .visible-sm-inline-block, .visible-xs-block, .visible-xs-inline, .visible-xs-inline-block {
        display: none !important
    }

    @media (max-width: 767px) {
        .visible-xs {
            display: block !important
        }

        table.visible-xs {
            display: table !important
        }

        tr.visible-xs {
            display: table-row !important
        }

        td.visible-xs, th.visible-xs {
            display: table-cell !important
        }
    }

    @media (max-width: 767px) {
        .visible-xs-block {
            display: block !important
        }
    }

    @media (max-width: 767px) {
        .visible-xs-inline {
            display: inline !important
        }
    }

    @media (max-width: 767px) {
        .visible-xs-inline-block {
            display: inline-block !important
        }
    }

    @media (min-width: 768px) and (max-width: 991px) {
        .visible-sm {
            display: block !important
        }

        table.visible-sm {
            display: table !important
        }

        tr.visible-sm {
            display: table-row !important
        }

        td.visible-sm, th.visible-sm {
            display: table-cell !important
        }
    }

    @media (min-width: 768px) and (max-width: 991px) {
        .visible-sm-block {
            display: block !important
        }
    }

    @media (min-width: 768px) and (max-width: 991px) {
        .visible-sm-inline {
            display: inline !important
        }
    }

    @media (min-width: 768px) and (max-width: 991px) {
        .visible-sm-inline-block {
            display: inline-block !important
        }
    }

    @media (min-width: 992px) and (max-width: 1199px) {
        .visible-md {
            display: block !important
        }

        table.visible-md {
            display: table !important
        }

        tr.visible-md {
            display: table-row !important
        }

        td.visible-md, th.visible-md {
            display: table-cell !important
        }
    }

    @media (min-width: 992px) and (max-width: 1199px) {
        .visible-md-block {
            display: block !important
        }
    }

    @media (min-width: 992px) and (max-width: 1199px) {
        .visible-md-inline {
            display: inline !important
        }
    }

    @media (min-width: 992px) and (max-width: 1199px) {
        .visible-md-inline-block {
            display: inline-block !important
        }
    }

    @media (min-width: 1200px) {
        .visible-lg {
            display: block !important
        }

        table.visible-lg {
            display: table !important
        }

        tr.visible-lg {
            display: table-row !important
        }

        td.visible-lg, th.visible-lg {
            display: table-cell !important
        }
    }

    @media (min-width: 1200px) {
        .visible-lg-block {
            display: block !important
        }
    }

    @media (min-width: 1200px) {
        .visible-lg-inline {
            display: inline !important
        }
    }

    @media (min-width: 1200px) {
        .visible-lg-inline-block {
            display: inline-block !important
        }
    }

    @media (max-width: 767px) {
        .hidden-xs {
            display: none !important
        }
    }

    @media (min-width: 768px) and (max-width: 991px) {
        .hidden-sm {
            display: none !important
        }
    }

    @media (min-width: 992px) and (max-width: 1199px) {
        .hidden-md {
            display: none !important
        }
    }

    @media (min-width: 1200px) {
        .hidden-lg {
            display: none !important
        }
    }

    .visible-print {
        display: none !important
    }

    @media print {
        .visible-print {
            display: block !important
        }

        table.visible-print {
            display: table !important
        }

        tr.visible-print {
            display: table-row !important
        }

        td.visible-print, th.visible-print {
            display: table-cell !important
        }
    }

    .visible-print-block {
        display: none !important
    }

    @media print {
        .visible-print-block {
            display: block !important
        }
    }

    .visible-print-inline {
        display: none !important
    }

    @media print {
        .visible-print-inline {
            display: inline !important
        }
    }

    .visible-print-inline-block {
        display: none !important
    }

    @media print {
        .visible-print-inline-block {
            display: inline-block !important
        }
    }

    @media print {
        .hidden-print {
            display: none !important
        }
    }

    /*# sourceMappingURL=bootstrap.min.css.map */
</style>
