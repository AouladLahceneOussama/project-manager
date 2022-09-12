<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDF</title>

    <style>
        *,
        :before,
        :after {
            box-sizing: border-box;
            border-width: 0;
            border-style: solid;
            border-color: #e5e7eb
        }

        :before,
        :after {
            --tw-content: ""
        }

        html {
            line-height: 1.5;
            -webkit-text-size-adjust: 100%;
            -moz-tab-size: 4;
            -o-tab-size: 4;
            tab-size: 4;
            font-family: Nunito, ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", Segoe UI Symbol, "Noto Color Emoji"
        }

        body {
            margin: 0;
            padding: 0;
            line-height: inherit;
            font-size:10px
        }

        hr {
            height: 0;
            color: inherit;
            border-top-width: 1px
        }

        abbr:where([title]) {
            -webkit-text-decoration: underline dotted;
            text-decoration: underline dotted
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-size: inherit;
            font-weight: inherit
        }

        a {
            color: inherit;
            text-decoration: inherit
        }

        b,
        strong {
            font-weight: bolder
        }

        code,
        kbd,
        samp,
        pre {
            font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, Liberation Mono, Courier New, monospace;
            font-size: 1em
        }

        small {
            font-size: 80%
        }

        sub,
        sup {
            font-size: 75%;
            line-height: 0;
            position: relative;
            vertical-align: baseline
        }

        sub {
            bottom: -.25em
        }

        sup {
            top: -.5em
        }

        table {
            text-indent: 0;
            border-color: inherit;
            border-collapse: collapse
        }

        button,
        input,
        optgroup,
        select,
        textarea {
            font-family: inherit;
            font-size: 100%;
            font-weight: inherit;
            line-height: inherit;
            color: inherit;
            margin: 0;
            padding: 0
        }

        button,
        select {
            text-transform: none
        }

        button,
        [type=button],
        [type=reset],
        [type=submit] {
            -webkit-appearance: button;
            background-color: transparent;
            background-image: none
        }

        :-moz-focusring {
            outline: auto
        }

        :-moz-ui-invalid {
            box-shadow: none
        }

        progress {
            vertical-align: baseline
        }

        ::-webkit-inner-spin-button,
        ::-webkit-outer-spin-button {
            height: auto
        }

        [type=search] {
            -webkit-appearance: textfield;
            outline-offset: -2px
        }

        ::-webkit-search-decoration {
            -webkit-appearance: none
        }

        ::-webkit-file-upload-button {
            -webkit-appearance: button;
            font: inherit
        }

        summary {
            display: list-item
        }

        blockquote,
        dl,
        dd,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        hr,
        figure,
        p,
        pre {
            margin: 0
        }

        fieldset {
            margin: 0;
            padding: 0
        }

        legend {
            padding: 0
        }

        ol,
        ul,
        menu {
            list-style: none;
            margin: 0;
            padding: 0
        }

        textarea {
            resize: vertical
        }

        input::-moz-placeholder,
        textarea::-moz-placeholder {
            opacity: 1;
            color: #9ca3af
        }

        input::placeholder,
        textarea::placeholder {
            opacity: 1;
            color: #9ca3af
        }

        button,
        [role=button] {
            cursor: pointer
        }

        :disabled {
            cursor: default
        }

        img,
        svg,
        video,
        canvas,
        audio,
        iframe,
        embed,
        object {
            display: block;
            vertical-align: middle
        }

        img,
        video {
            max-width: 100%;
            height: auto
        }

        [type=text],
        [type=email],
        [type=url],
        [type=password],
        [type=number],
        [type=date],
        [type=datetime-local],
        [type=month],
        [type=search],
        [type=tel],
        [type=time],
        [type=week],
        [multiple],
        textarea,
        select {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            background-color: #fff;
            border-color: #6b7280;
            border-width: 1px;
            border-radius: 0;
            padding: .5rem .75rem;
            font-size: 1rem;
            line-height: 1.5rem;
            --tw-shadow: 0 0 #0000
        }

        [type=text]:focus,
        [type=email]:focus,
        [type=url]:focus,
        [type=password]:focus,
        [type=number]:focus,
        [type=date]:focus,
        [type=datetime-local]:focus,
        [type=month]:focus,
        [type=search]:focus,
        [type=tel]:focus,
        [type=time]:focus,
        [type=week]:focus,
        [multiple]:focus,
        textarea:focus,
        select:focus {
            outline: 2px solid transparent;
            outline-offset: 2px;
            --tw-ring-inset: var(--tw-empty, );
            --tw-ring-offset-width: 0px;
            --tw-ring-offset-color: #fff;
            --tw-ring-color: #2563eb;
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow);
            border-color: #2563eb
        }

        input::-moz-placeholder,
        textarea::-moz-placeholder {
            color: #6b7280;
            opacity: 1
        }

        input::placeholder,
        textarea::placeholder {
            color: #6b7280;
            opacity: 1
        }

        ::-webkit-datetime-edit-fields-wrapper {
            padding: 0
        }

        ::-webkit-date-and-time-value {
            min-height: 1.5em
        }

        ::-webkit-datetime-edit,
        ::-webkit-datetime-edit-year-field,
        ::-webkit-datetime-edit-month-field,
        ::-webkit-datetime-edit-day-field,
        ::-webkit-datetime-edit-hour-field,
        ::-webkit-datetime-edit-minute-field,
        ::-webkit-datetime-edit-second-field,
        ::-webkit-datetime-edit-millisecond-field,
        ::-webkit-datetime-edit-meridiem-field {
            padding-top: 0;
            padding-bottom: 0
        }

        select {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 20 20'%3e%3cpath stroke='%236b7280' stroke-linecap='round' stroke-linejoin='round' stroke-width='1.5' d='M6 8l4 4 4-4'/%3e%3c/svg%3e");
            background-position: right .5rem center;
            background-repeat: no-repeat;
            background-size: 1.5em 1.5em;
            padding-right: 2.5rem;
            -webkit-print-color-adjust: exact;
            color-adjust: exact;
            print-color-adjust: exact
        }

        [multiple] {
            background-image: initial;
            background-position: initial;
            background-repeat: unset;
            background-size: initial;
            padding-right: .75rem;
            -webkit-print-color-adjust: unset;
            color-adjust: unset;
            print-color-adjust: unset
        }

        [type=checkbox],
        [type=radio] {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            padding: 0;
            -webkit-print-color-adjust: exact;
            color-adjust: exact;
            print-color-adjust: exact;
            display: inline-block;
            vertical-align: middle;
            background-origin: border-box;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
            flex-shrink: 0;
            height: 1rem;
            width: 1rem;
            color: #2563eb;
            background-color: #fff;
            border-color: #6b7280;
            border-width: 1px;
            --tw-shadow: 0 0 #0000
        }

        [type=checkbox] {
            border-radius: 0
        }

        [type=radio] {
            border-radius: 100%
        }

        [type=checkbox]:focus,
        [type=radio]:focus {
            outline: 2px solid transparent;
            outline-offset: 2px;
            --tw-ring-inset: var(--tw-empty, );
            --tw-ring-offset-width: 2px;
            --tw-ring-offset-color: #fff;
            --tw-ring-color: #2563eb;
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(2px + var(--tw-ring-offset-width)) var(--tw-ring-color);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow)
        }

        [type=checkbox]:checked,
        [type=radio]:checked {
            border-color: transparent;
            background-color: currentColor;
            background-size: 100% 100%;
            background-position: center;
            background-repeat: no-repeat
        }

        [type=checkbox]:checked {
            background-image: url("data:image/svg+xml,%3csvg viewBox='0 0 16 16' fill='white' xmlns='http://www.w3.org/2000/svg'%3e%3cpath d='M12.207 4.793a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0l-2-2a1 1 0 011.414-1.414L6.5 9.086l4.293-4.293a1 1 0 011.414 0z'/%3e%3c/svg%3e")
        }

        [type=radio]:checked {
            background-image: url("data:image/svg+xml,%3csvg viewBox='0 0 16 16' fill='white' xmlns='http://www.w3.org/2000/svg'%3e%3ccircle cx='8' cy='8' r='3'/%3e%3c/svg%3e")
        }

        [type=checkbox]:checked:hover,
        [type=checkbox]:checked:focus,
        [type=radio]:checked:hover,
        [type=radio]:checked:focus {
            border-color: transparent;
            background-color: currentColor
        }

        [type=checkbox]:indeterminate {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 16 16'%3e%3cpath stroke='white' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M4 8h8'/%3e%3c/svg%3e");
            border-color: transparent;
            background-color: currentColor;
            background-size: 100% 100%;
            background-position: center;
            background-repeat: no-repeat
        }

        [type=checkbox]:indeterminate:hover,
        [type=checkbox]:indeterminate:focus {
            border-color: transparent;
            background-color: currentColor
        }

        [type=file] {
            background: unset;
            border-color: inherit;
            border-width: 0;
            border-radius: 0;
            padding: 0;
            font-size: unset;
            line-height: inherit
        }

        [type=file]:focus {
            outline: 1px solid ButtonText;
            outline: 1px auto -webkit-focus-ring-color
        }

        *,
        :before,
        :after {
            --tw-border-spacing-x: 0;
            --tw-border-spacing-y: 0;
            --tw-translate-x: 0;
            --tw-translate-y: 0;
            --tw-rotate: 0;
            --tw-skew-x: 0;
            --tw-skew-y: 0;
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            --tw-pan-x: ;
            --tw-pan-y: ;
            --tw-pinch-zoom: ;
            --tw-scroll-snap-strictness: proximity;
            --tw-ordinal: ;
            --tw-slashed-zero: ;
            --tw-numeric-figure: ;
            --tw-numeric-spacing: ;
            --tw-numeric-fraction: ;
            --tw-ring-inset: ;
            --tw-ring-offset-width: 0px;
            --tw-ring-offset-color: #fff;
            --tw-ring-color: rgb(59 130 246 / .5);
            --tw-ring-offset-shadow: 0 0 #0000;
            --tw-ring-shadow: 0 0 #0000;
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
            --tw-blur: ;
            --tw-brightness: ;
            --tw-contrast: ;
            --tw-grayscale: ;
            --tw-hue-rotate: ;
            --tw-invert: ;
            --tw-saturate: ;
            --tw-sepia: ;
            --tw-drop-shadow: ;
            --tw-backdrop-blur: ;
            --tw-backdrop-brightness: ;
            --tw-backdrop-contrast: ;
            --tw-backdrop-grayscale: ;
            --tw-backdrop-hue-rotate: ;
            --tw-backdrop-invert: ;
            --tw-backdrop-opacity: ;
            --tw-backdrop-saturate: ;
            --tw-backdrop-sepia:
        }

        ::-webkit-backdrop {
            --tw-border-spacing-x: 0;
            --tw-border-spacing-y: 0;
            --tw-translate-x: 0;
            --tw-translate-y: 0;
            --tw-rotate: 0;
            --tw-skew-x: 0;
            --tw-skew-y: 0;
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            --tw-pan-x: ;
            --tw-pan-y: ;
            --tw-pinch-zoom: ;
            --tw-scroll-snap-strictness: proximity;
            --tw-ordinal: ;
            --tw-slashed-zero: ;
            --tw-numeric-figure: ;
            --tw-numeric-spacing: ;
            --tw-numeric-fraction: ;
            --tw-ring-inset: ;
            --tw-ring-offset-width: 0px;
            --tw-ring-offset-color: #fff;
            --tw-ring-color: rgb(59 130 246 / .5);
            --tw-ring-offset-shadow: 0 0 #0000;
            --tw-ring-shadow: 0 0 #0000;
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
            --tw-blur: ;
            --tw-brightness: ;
            --tw-contrast: ;
            --tw-grayscale: ;
            --tw-hue-rotate: ;
            --tw-invert: ;
            --tw-saturate: ;
            --tw-sepia: ;
            --tw-drop-shadow: ;
            --tw-backdrop-blur: ;
            --tw-backdrop-brightness: ;
            --tw-backdrop-contrast: ;
            --tw-backdrop-grayscale: ;
            --tw-backdrop-hue-rotate: ;
            --tw-backdrop-invert: ;
            --tw-backdrop-opacity: ;
            --tw-backdrop-saturate: ;
            --tw-backdrop-sepia:
        }

        ::backdrop {
            --tw-border-spacing-x: 0;
            --tw-border-spacing-y: 0;
            --tw-translate-x: 0;
            --tw-translate-y: 0;
            --tw-rotate: 0;
            --tw-skew-x: 0;
            --tw-skew-y: 0;
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            --tw-pan-x: ;
            --tw-pan-y: ;
            --tw-pinch-zoom: ;
            --tw-scroll-snap-strictness: proximity;
            --tw-ordinal: ;
            --tw-slashed-zero: ;
            --tw-numeric-figure: ;
            --tw-numeric-spacing: ;
            --tw-numeric-fraction: ;
            --tw-ring-inset: ;
            --tw-ring-offset-width: 0px;
            --tw-ring-offset-color: #fff;
            --tw-ring-color: rgb(59 130 246 / .5);
            --tw-ring-offset-shadow: 0 0 #0000;
            --tw-ring-shadow: 0 0 #0000;
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
            --tw-blur: ;
            --tw-brightness: ;
            --tw-contrast: ;
            --tw-grayscale: ;
            --tw-hue-rotate: ;
            --tw-invert: ;
            --tw-saturate: ;
            --tw-sepia: ;
            --tw-drop-shadow: ;
            --tw-backdrop-blur: ;
            --tw-backdrop-brightness: ;
            --tw-backdrop-contrast: ;
            --tw-backdrop-grayscale: ;
            --tw-backdrop-hue-rotate: ;
            --tw-backdrop-invert: ;
            --tw-backdrop-opacity: ;
            --tw-backdrop-saturate: ;
            --tw-backdrop-sepia:
        }

        .fixed {
            position: fixed
        }

        .absolute {
            position: absolute
        }

        .relative {
            position: relative
        }

        .top-0 {
            top: 0px
        }

        .right-0 {
            right: 0px
        }

        .left-0 {
            left: 0px
        }

        .z-0 {
            z-index: 0
        }

        .z-50 {
            z-index: 50
        }

        .mx-auto {
            margin-left: auto;
            margin-right: auto
        }

        .-mx-3 {
            margin-left: -.75rem;
            margin-right: -.75rem
        }

        .my-4 {
            margin-top: 1rem;
            margin-bottom: 1rem
        }

        .mx-8 {
            margin-left: 2rem;
            margin-right: 2rem
        }

        .my-3 {
            margin-top: .75rem;
            margin-bottom: .75rem
        }

        .ml-3 {
            margin-left: .75rem
        }

        .-ml-px {
            margin-left: -1px
        }

        .mt-4 {
            margin-top: 1rem
        }

        .mb-3 {
            margin-bottom: .75rem
        }

        .mb-4 {
            margin-bottom: 1rem
        }

        .mb-6 {
            margin-bottom: 1.5rem
        }

        .mb-1 {
            margin-bottom: .25rem
        }

        .mb-2 {
            margin-bottom: .5rem
        }

        .mb-0 {
            margin-bottom: 0
        }

        .mb-8 {
            margin-bottom: 2rem
        }

        .mt-6 {
            margin-top: 1.5rem
        }

        .mt-3 {
            margin-top: .75rem
        }

        .mt-8 {
            margin-top: 2rem
        }

        .ml-1 {
            margin-left: .25rem
        }

        .mt-2 {
            margin-top: .5rem
        }

        .mr-2 {
            margin-right: .5rem
        }

        .ml-2 {
            margin-left: .5rem
        }

        .ml-4 {
            margin-left: 1rem
        }

        .ml-12 {
            margin-left: 3rem
        }

        .-mt-px {
            margin-top: -1px
        }

        .-mr-2 {
            margin-right: -.5rem
        }

        .mt-1 {
            margin-top: .25rem
        }

        .block {
            display: block
        }

        .flex {
            display: flex
        }

        .inline-flex {
            display: inline-flex
        }

        .table {
            display: table
        }

        .grid {
            display: grid
        }

        .hidden {
            display: none
        }

        .h-5 {
            height: 1.25rem
        }

        .h-full {
            height: 100%
        }

        .h-px {
            height: 1px
        }

        .h-6 {
            height: 1.5rem
        }

        .h-8 {
            height: 2rem
        }

        .h-16 {
            height: 4rem
        }

        .h-10 {
            height: 2.5rem
        }

        .h-4 {
            height: 1rem
        }

        .h-20 {
            height: 5rem
        }

        .min-h-screen {
            min-height: 100vh
        }

        .w-5 {
            width: 1.25rem
        }

        .w-full {
            width: 100%
        }

        .w-8 {
            width: 2rem
        }

        .w-6 {
            width: 1.5rem
        }

        .w-1\/2 {
            width: 50%
        }

        .w-48 {
            width: 12rem
        }

        .w-5\/6 {
            width: 83.333333%
        }

        .w-auto {
            width: auto
        }

        .w-4 {
            width: 1rem
        }

        .w-32 {
            width: 8rem
        }

        .w-20 {
            width: 5rem
        }

        .min-w-0 {
            min-width: 0px
        }

        .max-w-7xl {
            max-width: 80rem
        }

        .max-w-full {
            max-width: 100%
        }

        .max-w-xl {
            max-width: 36rem
        }

        .max-w-6xl {
            max-width: 72rem
        }

        .flex-1 {
            flex: 1 1 0%
        }

        .flex-none {
            flex: none
        }

        .flex-auto {
            flex: 1 1 auto
        }

        .shrink-0 {
            flex-shrink: 0
        }

        .grow {
            flex-grow: 1
        }

        .origin-top-left {
            transform-origin: top left
        }

        .origin-top {
            transform-origin: top
        }

        .origin-top-right {
            transform-origin: top right
        }

        .scale-95 {
            --tw-scale-x: .95;
            --tw-scale-y: .95;
            transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skew(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
        }

        .scale-100 {
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skew(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
        }

        .transform {
            transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skew(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
        }

        .cursor-default {
            cursor: default
        }

        .cursor-pointer {
            cursor: pointer
        }

        .list-inside {
            list-style-position: inside
        }

        .list-disc {
            list-style-type: disc
        }

        .appearance-none {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none
        }

        .grid-cols-1 {
            grid-template-columns: repeat(1, minmax(0, 1fr))
        }

        .flex-col {
            flex-direction: column
        }

        .flex-wrap {
            flex-wrap: wrap
        }

        .items-start {
            align-items: flex-start
        }

        .items-end {
            align-items: flex-end
        }

        .items-center {
            align-items: center
        }

        .justify-start {
            justify-content: flex-start
        }

        .justify-end {
            justify-content: flex-end
        }

        .justify-center {
            justify-content: center
        }

        .justify-between {
            justify-content: space-between
        }

        .justify-items-center {
            justify-items: center
        }

        .space-x-2>:not([hidden])~:not([hidden]) {
            --tw-space-x-reverse: 0;
            margin-right: calc(.5rem * var(--tw-space-x-reverse));
            margin-left: calc(.5rem * calc(1 - var(--tw-space-x-reverse)))
        }

        .space-x-4>:not([hidden])~:not([hidden]) {
            --tw-space-x-reverse: 0;
            margin-right: calc(1rem * var(--tw-space-x-reverse));
            margin-left: calc(1rem * calc(1 - var(--tw-space-x-reverse)))
        }

        .space-x-8>:not([hidden])~:not([hidden]) {
            --tw-space-x-reverse: 0;
            margin-right: calc(2rem * var(--tw-space-x-reverse));
            margin-left: calc(2rem * calc(1 - var(--tw-space-x-reverse)))
        }

        .space-x-5>:not([hidden])~:not([hidden]) {
            --tw-space-x-reverse: 0;
            margin-right: calc(1.25rem * var(--tw-space-x-reverse));
            margin-left: calc(1.25rem * calc(1 - var(--tw-space-x-reverse)))
        }

        .space-y-1>:not([hidden])~:not([hidden]) {
            --tw-space-y-reverse: 0;
            margin-top: calc(.25rem * calc(1 - var(--tw-space-y-reverse)));
            margin-bottom: calc(.25rem * var(--tw-space-y-reverse))
        }

        .space-x-1>:not([hidden])~:not([hidden]) {
            --tw-space-x-reverse: 0;
            margin-right: calc(.25rem * var(--tw-space-x-reverse));
            margin-left: calc(.25rem * calc(1 - var(--tw-space-x-reverse)))
        }

        .justify-self-end {
            justify-self: end
        }

        .overflow-hidden {
            overflow: hidden
        }

        .overflow-y-auto {
            overflow-y: auto
        }

        .whitespace-nowrap {
            white-space: nowrap
        }

        .break-words {
            overflow-wrap: break-word
        }

        .rounded-md {
            border-radius: .375rem
        }

        .rounded-lg {
            border-radius: .5rem
        }

        .rounded-2xl {
            border-radius: 1rem
        }

        .rounded-full {
            border-radius: 9999px
        }

        .rounded-xl {
            border-radius: .75rem
        }

        .rounded {
            border-radius: .25rem
        }

        .rounded-l-md {
            border-top-left-radius: .375rem;
            border-bottom-left-radius: .375rem
        }

        .rounded-r-md {
            border-top-right-radius: .375rem;
            border-bottom-right-radius: .375rem
        }

        .rounded-t-2xl {
            border-top-left-radius: 1rem;
            border-top-right-radius: 1rem
        }

        .border {
            border-width: 1px
        }

        .border-0 {
            border-width: 0px
        }

        .border-l-4 {
            border-left-width: 4px
        }

        .border-b-0 {
            border-bottom-width: 0px
        }

        .border-b {
            border-bottom-width: 1px
        }

        .border-b-2 {
            border-bottom-width: 2px
        }

        .border-t {
            border-top-width: 1px
        }

        .border-r {
            border-right-width: 1px
        }

        .border-solid {
            border-style: solid
        }

        .border-gray-300 {
            --tw-border-opacity: 1;
            border-color: rgb(209 213 219 / var(--tw-border-opacity))
        }

        .border-indigo-400 {
            --tw-border-opacity: 1;
            border-color: rgb(129 140 248 / var(--tw-border-opacity))
        }

        .border-transparent {
            border-color: transparent
        }

        .border-gray-200 {
            --tw-border-opacity: 1;
            border-color: rgb(229 231 235 / var(--tw-border-opacity))
        }

        .border-gray-400 {
            --tw-border-opacity: 1;
            border-color: rgb(156 163 175 / var(--tw-border-opacity))
        }

        .border-gray-100 {
            --tw-border-opacity: 1;
            border-color: rgb(243 244 246 / var(--tw-border-opacity))
        }

        .border-b-transparent {
            border-bottom-color: transparent
        }

        .bg-white {
            --tw-bg-opacity: 1;
            background-color: rgb(255 255 255 / var(--tw-bg-opacity))
        }

        .bg-gray-200 {
            --tw-bg-opacity: 1;
            background-color: rgb(229 231 235 / var(--tw-bg-opacity))
        }

        .bg-gray-700 {
            --tw-bg-opacity: 1;
            background-color: rgb(55 65 81 / var(--tw-bg-opacity))
        }

        .bg-indigo-50 {
            --tw-bg-opacity: 1;
            background-color: rgb(238 242 255 / var(--tw-bg-opacity))
        }

        .bg-green-300 {
            --tw-bg-opacity: 1;
            background-color: rgb(134 239 172 / var(--tw-bg-opacity))
        }

        .bg-transparent {
            background-color: transparent
        }

        .bg-red-500 {
            --tw-bg-opacity: 1;
            background-color: rgb(239 68 68 / var(--tw-bg-opacity))
        }

        .bg-gray-300 {
            --tw-bg-opacity: 1;
            background-color: rgb(209 213 219 / var(--tw-bg-opacity))
        }

        .bg-gray-100 {
            --tw-bg-opacity: 1;
            background-color: rgb(243 244 246 / var(--tw-bg-opacity))
        }

        .bg-red-600 {
            --tw-bg-opacity: 1;
            background-color: rgb(220 38 38 / var(--tw-bg-opacity))
        }

        .bg-gray-800 {
            --tw-bg-opacity: 1;
            background-color: rgb(31 41 55 / var(--tw-bg-opacity))
        }

        .bg-clip-border {
            background-clip: border-box
        }

        .bg-clip-padding {
            background-clip: padding-box
        }

        .fill-current {
            fill: currentColor
        }

        .p-4 {
            padding: 1rem
        }

        .p-2 {
            padding: .5rem
        }

        .p-6 {
            padding: 1.5rem
        }

        .p-1 {
            padding: .25rem
        }

        .px-4 {
            padding-left: 1rem;
            padding-right: 1rem
        }

        .py-2 {
            padding-top: .5rem;
            padding-bottom: .5rem
        }

        .px-2 {
            padding-left: .5rem;
            padding-right: .5rem
        }

        .py-12 {
            padding-top: 3rem;
            padding-bottom: 3rem
        }

        .px-8 {
            padding-left: 2rem;
            padding-right: 2rem
        }

        .px-3 {
            padding-left: .75rem;
            padding-right: .75rem
        }

        .px-5 {
            padding-left: 1.25rem;
            padding-right: 1.25rem
        }

        .px-0 {
            padding-left: 0;
            padding-right: 0
        }

        .py-1 {
            padding-top: .25rem;
            padding-bottom: .25rem
        }

        .py-4 {
            padding-top: 1rem;
            padding-bottom: 1rem
        }

        .px-1 {
            padding-left: .25rem;
            padding-right: .25rem
        }

        .px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem
        }

        .py-3 {
            padding-top: .75rem;
            padding-bottom: .75rem
        }

        .py-6 {
            padding-top: 1.5rem;
            padding-bottom: 1.5rem
        }

        .py-5 {
            padding-top: 1.25rem;
            padding-bottom: 1.25rem
        }

        .pl-3 {
            padding-left: .75rem
        }

        .pr-4 {
            padding-right: 1rem
        }

        .pt-0 {
            padding-top: 0
        }

        .pb-2 {
            padding-bottom: .5rem
        }

        .pt-1 {
            padding-top: .25rem
        }

        .pt-8 {
            padding-top: 2rem
        }

        .pt-6 {
            padding-top: 1.5rem
        }

        .pt-2 {
            padding-top: .5rem
        }

        .pb-3 {
            padding-bottom: .75rem
        }

        .pt-4 {
            padding-top: 1rem
        }

        .pb-1 {
            padding-bottom: .25rem
        }

        .text-left {
            text-align: left
        }

        .text-center {
            text-align: center
        }

        .align-top {
            vertical-align: top
        }

        .align-middle {
            vertical-align: middle
        }

        .align-bottom {
            vertical-align: bottom
        }

        .font-sans {
            font-family: Nunito, ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", Segoe UI Symbol, "Noto Color Emoji"
        }

        .text-sm {
            font-size: .875rem;
            line-height: 1.25rem
        }

        .text-xl {
            font-size: 1.25rem;
            line-height: 1.75rem
        }

        .text-xs {
            font-size: .75rem;
            line-height: 1rem
        }

        .text-base {
            font-size: 1rem;
            line-height: 1.5rem
        }

        .text-lg {
            font-size: 1.125rem;
            line-height: 1.75rem
        }

        .font-medium {
            font-weight: 500
        }

        .font-semibold {
            font-weight: 600
        }

        .font-bold {
            font-weight: 700
        }

        .font-normal {
            font-weight: 400
        }

        .uppercase {
            text-transform: uppercase
        }

        .italic {
            font-style: italic
        }

        .leading-5 {
            line-height: 1.25rem
        }

        .leading-tight {
            line-height: 1.25
        }

        .leading-normal {
            line-height: 1.5
        }

        .leading-7 {
            line-height: 1.75rem
        }

        .tracking-wide {
            letter-spacing: .025em
        }

        .tracking-wider {
            letter-spacing: .05em
        }

        .tracking-widest {
            letter-spacing: .1em
        }

        .text-gray-500 {
            --tw-text-opacity: 1;
            color: rgb(107 114 128 / var(--tw-text-opacity))
        }

        .text-gray-700 {
            --tw-text-opacity: 1;
            color: rgb(55 65 81 / var(--tw-text-opacity))
        }

        .text-gray-800 {
            --tw-text-opacity: 1;
            color: rgb(31 41 55 / var(--tw-text-opacity))
        }

        .text-gray-400 {
            --tw-text-opacity: 1;
            color: rgb(156 163 175 / var(--tw-text-opacity))
        }

        .text-red-500 {
            --tw-text-opacity: 1;
            color: rgb(239 68 68 / var(--tw-text-opacity))
        }

        .text-white {
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity))
        }

        .text-red-400 {
            --tw-text-opacity: 1;
            color: rgb(248 113 113 / var(--tw-text-opacity))
        }

        .text-indigo-700 {
            --tw-text-opacity: 1;
            color: rgb(67 56 202 / var(--tw-text-opacity))
        }

        .text-gray-600 {
            --tw-text-opacity: 1;
            color: rgb(75 85 99 / var(--tw-text-opacity))
        }

        .text-slate-500 {
            --tw-text-opacity: 1;
            color: rgb(100 116 139 / var(--tw-text-opacity))
        }

        .text-green-800 {
            --tw-text-opacity: 1;
            color: rgb(22 101 52 / var(--tw-text-opacity))
        }

        .text-slate-400 {
            --tw-text-opacity: 1;
            color: rgb(148 163 184 / var(--tw-text-opacity))
        }

        .text-slate-700 {
            --tw-text-opacity: 1;
            color: rgb(51 65 85 / var(--tw-text-opacity))
        }

        .text-indigo-500 {
            --tw-text-opacity: 1;
            color: rgb(99 102 241 / var(--tw-text-opacity))
        }

        .text-green-600 {
            --tw-text-opacity: 1;
            color: rgb(22 163 74 / var(--tw-text-opacity))
        }

        .text-gray-900 {
            --tw-text-opacity: 1;
            color: rgb(17 24 39 / var(--tw-text-opacity))
        }

        .text-green-500 {
            --tw-text-opacity: 1;
            color: rgb(34 197 94 / var(--tw-text-opacity))
        }

        .text-red-600 {
            --tw-text-opacity: 1;
            color: rgb(220 38 38 / var(--tw-text-opacity))
        }

        .text-gray-200 {
            --tw-text-opacity: 1;
            color: rgb(229 231 235 / var(--tw-text-opacity))
        }

        .text-gray-300 {
            --tw-text-opacity: 1;
            color: rgb(209 213 219 / var(--tw-text-opacity))
        }

        .text-indigo-600 {
            --tw-text-opacity: 1;
            color: rgb(79 70 229 / var(--tw-text-opacity))
        }

        .underline {
            -webkit-text-decoration-line: underline;
            text-decoration-line: underline
        }

        .antialiased {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .opacity-70 {
            opacity: .7
        }

        .opacity-0 {
            opacity: 0
        }

        .opacity-100 {
            opacity: 1
        }

        .shadow-sm {
            --tw-shadow: 0 1px 2px 0 rgb(0 0 0 / .05);
            --tw-shadow-colored: 0 1px 2px 0 var(--tw-shadow-color);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
        }

        .shadow-none {
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
        }

        .shadow {
            --tw-shadow: 0 1px 3px 0 rgb(0 0 0 / .1), 0 1px 2px -1px rgb(0 0 0 / .1);
            --tw-shadow-colored: 0 1px 3px 0 var(--tw-shadow-color), 0 1px 2px -1px var(--tw-shadow-color);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
        }

        .shadow-md {
            --tw-shadow: 0 4px 6px -1px rgb(0 0 0 / .1), 0 2px 4px -2px rgb(0 0 0 / .1);
            --tw-shadow-colored: 0 4px 6px -1px var(--tw-shadow-color), 0 2px 4px -2px var(--tw-shadow-color);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
        }

        .shadow-lg {
            --tw-shadow: 0 10px 15px -3px rgb(0 0 0 / .1), 0 4px 6px -4px rgb(0 0 0 / .1);
            --tw-shadow-colored: 0 10px 15px -3px var(--tw-shadow-color), 0 4px 6px -4px var(--tw-shadow-color);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
        }

        .shadow-transparent {
            --tw-shadow-color: transparent;
            --tw-shadow: var(--tw-shadow-colored)
        }

        .outline-none {
            outline: 2px solid transparent;
            outline-offset: 2px
        }

        .ring-1 {
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)
        }

        .ring-gray-300 {
            --tw-ring-opacity: 1;
            --tw-ring-color: rgb(209 213 219 / var(--tw-ring-opacity))
        }

        .ring-black {
            --tw-ring-opacity: 1;
            --tw-ring-color: rgb(0 0 0 / var(--tw-ring-opacity))
        }

        .ring-opacity-5 {
            --tw-ring-opacity: .05
        }

        .transition {
            transition-property: color, background-color, border-color, fill, stroke, opacity, box-shadow, transform, filter, -webkit-text-decoration-color, -webkit-backdrop-filter;
            transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter;
            transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter, -webkit-text-decoration-color, -webkit-backdrop-filter;
            transition-timing-function: cubic-bezier(.4, 0, .2, 1);
            transition-duration: .15s
        }

        .transition-all {
            transition-property: all;
            transition-timing-function: cubic-bezier(.4, 0, .2, 1);
            transition-duration: .15s
        }

        .duration-150 {
            transition-duration: .15s
        }

        .duration-200 {
            transition-duration: .2s
        }

        .duration-75 {
            transition-duration: 75ms
        }

        .ease-in-out {
            transition-timing-function: cubic-bezier(.4, 0, .2, 1)
        }

        .ease-out {
            transition-timing-function: cubic-bezier(0, 0, .2, 1)
        }

        .ease-in {
            transition-timing-function: cubic-bezier(.4, 0, 1, 1)
        }

        .hover\:border-gray-300:hover {
            --tw-border-opacity: 1;
            border-color: rgb(209 213 219 / var(--tw-border-opacity))
        }

        .hover\:border-slate-700:hover {
            --tw-border-opacity: 1;
            border-color: rgb(51 65 85 / var(--tw-border-opacity))
        }

        .hover\:bg-gray-50:hover {
            --tw-bg-opacity: 1;
            background-color: rgb(249 250 251 / var(--tw-bg-opacity))
        }

        .hover\:bg-gray-100:hover {
            --tw-bg-opacity: 1;
            background-color: rgb(243 244 246 / var(--tw-bg-opacity))
        }

        .hover\:bg-slate-700:hover {
            --tw-bg-opacity: 1;
            background-color: rgb(51 65 85 / var(--tw-bg-opacity))
        }

        .hover\:bg-gray-700:hover {
            --tw-bg-opacity: 1;
            background-color: rgb(55 65 81 / var(--tw-bg-opacity))
        }

        .hover\:text-gray-500:hover {
            --tw-text-opacity: 1;
            color: rgb(107 114 128 / var(--tw-text-opacity))
        }

        .hover\:text-gray-400:hover {
            --tw-text-opacity: 1;
            color: rgb(156 163 175 / var(--tw-text-opacity))
        }

        .hover\:text-gray-800:hover {
            --tw-text-opacity: 1;
            color: rgb(31 41 55 / var(--tw-text-opacity))
        }

        .hover\:text-gray-700:hover {
            --tw-text-opacity: 1;
            color: rgb(55 65 81 / var(--tw-text-opacity))
        }

        .hover\:text-white:hover {
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity))
        }

        .hover\:text-gray-900:hover {
            --tw-text-opacity: 1;
            color: rgb(17 24 39 / var(--tw-text-opacity))
        }

        .focus\:z-10:focus {
            z-index: 10
        }

        .focus\:border-blue-300:focus {
            --tw-border-opacity: 1;
            border-color: rgb(147 197 253 / var(--tw-border-opacity))
        }

        .focus\:border-gray-500:focus {
            --tw-border-opacity: 1;
            border-color: rgb(107 114 128 / var(--tw-border-opacity))
        }

        .focus\:border-indigo-700:focus {
            --tw-border-opacity: 1;
            border-color: rgb(67 56 202 / var(--tw-border-opacity))
        }

        .focus\:border-gray-300:focus {
            --tw-border-opacity: 1;
            border-color: rgb(209 213 219 / var(--tw-border-opacity))
        }

        .focus\:border-indigo-300:focus {
            --tw-border-opacity: 1;
            border-color: rgb(165 180 252 / var(--tw-border-opacity))
        }

        .focus\:border-gray-900:focus {
            --tw-border-opacity: 1;
            border-color: rgb(17 24 39 / var(--tw-border-opacity))
        }

        .focus\:bg-indigo-100:focus {
            --tw-bg-opacity: 1;
            background-color: rgb(224 231 255 / var(--tw-bg-opacity))
        }

        .focus\:bg-gray-50:focus {
            --tw-bg-opacity: 1;
            background-color: rgb(249 250 251 / var(--tw-bg-opacity))
        }

        .focus\:bg-gray-100:focus {
            --tw-bg-opacity: 1;
            background-color: rgb(243 244 246 / var(--tw-bg-opacity))
        }

        .focus\:text-indigo-800:focus {
            --tw-text-opacity: 1;
            color: rgb(55 48 163 / var(--tw-text-opacity))
        }

        .focus\:text-gray-800:focus {
            --tw-text-opacity: 1;
            color: rgb(31 41 55 / var(--tw-text-opacity))
        }

        .focus\:text-gray-700:focus {
            --tw-text-opacity: 1;
            color: rgb(55 65 81 / var(--tw-text-opacity))
        }

        .focus\:text-gray-500:focus {
            --tw-text-opacity: 1;
            color: rgb(107 114 128 / var(--tw-text-opacity))
        }

        .focus\:outline-none:focus {
            outline: 2px solid transparent;
            outline-offset: 2px
        }

        .focus\:ring:focus {
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(3px + var(--tw-ring-offset-width)) var(--tw-ring-color);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)
        }

        .focus\:ring-indigo-200:focus {
            --tw-ring-opacity: 1;
            --tw-ring-color: rgb(199 210 254 / var(--tw-ring-opacity))
        }

        .focus\:ring-opacity-50:focus {
            --tw-ring-opacity: .5
        }

        .focus\:transition-shadow:focus {
            transition-property: box-shadow;
            transition-timing-function: cubic-bezier(.4, 0, .2, 1);
            transition-duration: .15s
        }

        .active\:bg-gray-100:active {
            --tw-bg-opacity: 1;
            background-color: rgb(243 244 246 / var(--tw-bg-opacity))
        }

        .active\:bg-gray-900:active {
            --tw-bg-opacity: 1;
            background-color: rgb(17 24 39 / var(--tw-bg-opacity))
        }

        .active\:text-gray-700:active {
            --tw-text-opacity: 1;
            color: rgb(55 65 81 / var(--tw-text-opacity))
        }

        .active\:text-gray-500:active {
            --tw-text-opacity: 1;
            color: rgb(107 114 128 / var(--tw-text-opacity))
        }

        .disabled\:bg-gray-100:disabled {
            --tw-bg-opacity: 1;
            background-color: rgb(243 244 246 / var(--tw-bg-opacity))
        }

        .disabled\:opacity-75:disabled {
            opacity: .75
        }

        .disabled\:opacity-25:disabled {
            opacity: .25
        }

        @media (prefers-color-scheme: dark) {
            .dark\:border-gray-700 {
                --tw-border-opacity: 1;
                border-color: rgb(55 65 81 / var(--tw-border-opacity))
            }

            .dark\:bg-gray-900 {
                --tw-bg-opacity: 1;
                background-color: rgb(17 24 39 / var(--tw-bg-opacity))
            }

            .dark\:bg-gray-800 {
                --tw-bg-opacity: 1;
                background-color: rgb(31 41 55 / var(--tw-bg-opacity))
            }

            .dark\:text-gray-500 {
                --tw-text-opacity: 1;
                color: rgb(107 114 128 / var(--tw-text-opacity))
            }

            .dark\:text-white {
                --tw-text-opacity: 1;
                color: rgb(255 255 255 / var(--tw-text-opacity))
            }

            .dark\:text-gray-400 {
                --tw-text-opacity: 1;
                color: rgb(156 163 175 / var(--tw-text-opacity))
            }
        }

        @media (min-width: 640px) {
            .sm\:-my-px {
                margin-top: -1px;
                margin-bottom: -1px
            }

            .sm\:ml-10 {
                margin-left: 2.5rem
            }

            .sm\:ml-6 {
                margin-left: 1.5rem
            }

            .sm\:ml-0 {
                margin-left: 0
            }

            .sm\:block {
                display: block
            }

            .sm\:flex {
                display: flex
            }

            .sm\:hidden {
                display: none
            }

            .sm\:h-20 {
                height: 5rem
            }

            .sm\:max-w-md {
                max-width: 28rem
            }

            .sm\:flex-1 {
                flex: 1 1 0%
            }

            .sm\:items-center {
                align-items: center
            }

            .sm\:justify-start {
                justify-content: flex-start
            }

            .sm\:justify-center {
                justify-content: center
            }

            .sm\:justify-between {
                justify-content: space-between
            }

            .sm\:rounded-lg {
                border-radius: .5rem
            }

            .sm\:px-6 {
                padding-left: 1.5rem;
                padding-right: 1.5rem
            }

            .sm\:pt-0 {
                padding-top: 0
            }

            .sm\:text-left {
                text-align: left
            }

            .sm\:text-right {
                text-align: right
            }
        }

        @media (min-width: 768px) {
            .md\:mb-0 {
                margin-bottom: 0
            }

            .md\:w-1\/2 {
                width: 50%
            }

            .md\:grid-cols-2 {
                grid-template-columns: repeat(2, minmax(0, 1fr))
            }

            .md\:border-t-0 {
                border-top-width: 0px
            }

            .md\:border-l {
                border-left-width: 1px
            }
        }

        @media (min-width: 1024px) {
            .lg\:px-8 {
                padding-left: 2rem;
                padding-right: 2rem
            }
        }
    </style>
</head>

<body>

    <div class="bg-white">
        <x-table>
            <x-slot name="title">
                {{ __('Table of Projects ') }}
            </x-slot>
            <x-slot name="thead">
                <tr>
                    <th class="px-4 py-2 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">{{ __('Project') }}</th>
                    <th class="px-4 py-2 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">{{ __('Cree_Par') }}</th>
                    <th class="px-4 py-2 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">{{ __('Manager_Par') }}</th>
                    <th class="px-4 py-2 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">{{ __('Add le') }}</th>
                    <th class="px-4 py-2 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">{{ __('Total') }} (DH)</th>
                </tr>
            </x-slot>
            <x-slot name="tbody">
                @foreach($projects as $project)
                <tr>
                    <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                        <p class="px-2 mb-0 leading-tight text-xs text-slate-700">{{ $project->title }}</p>
                    </td>
                    <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                        <div class="flex px-2 py-1">
                            <div class="flex flex-col justify-center">
                                <h6 class="mb-0 leading-normal text-sm">{{ $project->user->name }}</h6>
                                <p class="mb-0 leading-tight text-xs text-slate-700">{{ $project->user->email }}</p>
                            </div>
                        </div>
                    </td>
                    <td class="p-2 align-middle bg-transparent border-b text-sm whitespace-nowrap shadow-transparent">
                        <div class="flex px-2 py-1">
                            <div class="flex flex-col justify-center">
                                <h6 class="mb-0 leading-normal text-sm">{{ $project->manager->name }}</h6>
                                <p class="mb-0 leading-tight text-xs text-slate-700">{{ $project->manager->email }}</p>
                            </div>
                        </div>
                    </td>
                    <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                        <span class="px-2 font-semibold leading-tight text-xs text-slate-700">{{ $project->created_at->diffForHumans() }}</span>
                    </td>
                    <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                        <span class="px-2 font-semibold leading-tight text-xs text-slate-700">{{ $project->total }}</span>
                    </td>
                </tr>
                @endforeach
            </x-slot>
        </x-table>
    </div>

</body>
</html>