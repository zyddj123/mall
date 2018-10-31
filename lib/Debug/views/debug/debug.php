<!DOCTYPE html>
<html lang="en">
<head>
    <title>程序出错了</title>
    <style>
        [v-cloak]{
            display:none;
        }
    </style>
<style type="text/css">/*!
 * Bootstrap v4.1.3 (https://getbootstrap.com/)
 * Copyright 2011-2018 The Bootstrap Authors
 * Copyright 2011-2018 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
 */
:root {
  --blue: #007bff;
  --indigo: #6610f2;
  --purple: #6f42c1;
  --pink: #e83e8c;
  --red: #dc3545;
  --orange: #fd7e14;
  --yellow: #ffc107;
  --green: #28a745;
  --teal: #20c997;
  --cyan: #17a2b8;
  --white: #fff;
  --gray: #6c757d;
  --gray-dark: #343a40;
  --primary: #007bff;
  --secondary: #6c757d;
  --success: #28a745;
  --info: #17a2b8;
  --warning: #ffc107;
  --danger: #dc3545;
  --light: #f8f9fa;
  --dark: #343a40;
  --breakpoint-xs: 0;
  --breakpoint-sm: 576px;
  --breakpoint-md: 768px;
  --breakpoint-lg: 992px;
  --breakpoint-xl: 1200px;
  --font-family-sans-serif: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
  --font-family-monospace: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
}
*,
*::before,
*::after {
  box-sizing: border-box;
}
html {
  font-family: sans-serif;
  line-height: 1.15;
  -webkit-text-size-adjust: 100%;
  -ms-text-size-adjust: 100%;
  -ms-overflow-style: scrollbar;
  -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
}
@-ms-viewport {
  width: device-width;
}
article,
aside,
figcaption,
figure,
footer,
header,
hgroup,
main,
nav,
section {
  display: block;
}
body {
  margin: 0;
  font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
  font-size: 1rem;
  font-weight: 400;
  line-height: 1.5;
  color: #212529;
  text-align: left;
  background-color: #fff;
}
[tabindex="-1"]:focus {
  outline: 0 !important;
}
hr {
  box-sizing: content-box;
  height: 0;
  overflow: visible;
}
h1,
h2,
h3,
h4,
h5,
h6 {
  margin-top: 0;
  margin-bottom: 0.5rem;
}
p {
  margin-top: 0;
  margin-bottom: 1rem;
}
abbr[title],
abbr[data-original-title] {
  text-decoration: underline;
  -webkit-text-decoration: underline dotted;
  text-decoration: underline dotted;
  cursor: help;
  border-bottom: 0;
}
address {
  margin-bottom: 1rem;
  font-style: normal;
  line-height: inherit;
}
ol,
ul,
dl {
  margin-top: 0;
  margin-bottom: 1rem;
}
ol ol,
ul ul,
ol ul,
ul ol {
  margin-bottom: 0;
}
dt {
  font-weight: 700;
}
dd {
  margin-bottom: 0.5rem;
  margin-left: 0;
}
blockquote {
  margin: 0 0 1rem;
}
dfn {
  font-style: italic;
}
b,
strong {
  font-weight: bolder;
}
small {
  font-size: 80%;
}
sub,
sup {
  position: relative;
  font-size: 75%;
  line-height: 0;
  vertical-align: baseline;
}
sub {
  bottom: -0.25em;
}
sup {
  top: -0.5em;
}
a {
  color: #007bff;
  text-decoration: none;
  background-color: transparent;
  -webkit-text-decoration-skip: objects;
}
a:hover {
  color: #0056b3;
  text-decoration: underline;
}
a:not([href]):not([tabindex]) {
  color: inherit;
  text-decoration: none;
}
a:not([href]):not([tabindex]):hover,
a:not([href]):not([tabindex]):focus {
  color: inherit;
  text-decoration: none;
}
a:not([href]):not([tabindex]):focus {
  outline: 0;
}
pre,
code,
kbd,
samp {
  font-family: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
  font-size: 1em;
}
pre {
  margin-top: 0;
  margin-bottom: 1rem;
  overflow: auto;
  -ms-overflow-style: scrollbar;
}
figure {
  margin: 0 0 1rem;
}
img {
  vertical-align: middle;
  border-style: none;
}
svg {
  overflow: hidden;
  vertical-align: middle;
}
table {
  border-collapse: collapse;
}
caption {
  padding-top: 0.75rem;
  padding-bottom: 0.75rem;
  color: #6c757d;
  text-align: left;
  caption-side: bottom;
}
th {
  text-align: inherit;
}
label {
  display: inline-block;
  margin-bottom: 0.5rem;
}
button {
  border-radius: 0;
}
button:focus {
  outline: 1px dotted;
  outline: 5px auto -webkit-focus-ring-color;
}
input,
button,
select,
optgroup,
textarea {
  margin: 0;
  font-family: inherit;
  font-size: inherit;
  line-height: inherit;
}
button,
input {
  overflow: visible;
}
button,
select {
  text-transform: none;
}
button,
html [type="button"],
[type="reset"],
[type="submit"] {
  -webkit-appearance: button;
}
button::-moz-focus-inner,
[type="button"]::-moz-focus-inner,
[type="reset"]::-moz-focus-inner,
[type="submit"]::-moz-focus-inner {
  padding: 0;
  border-style: none;
}
input[type="radio"],
input[type="checkbox"] {
  box-sizing: border-box;
  padding: 0;
}
input[type="date"],
input[type="time"],
input[type="datetime-local"],
input[type="month"] {
  -webkit-appearance: listbox;
}
textarea {
  overflow: auto;
  resize: vertical;
}
fieldset {
  min-width: 0;
  padding: 0;
  margin: 0;
  border: 0;
}
legend {
  display: block;
  width: 100%;
  max-width: 100%;
  padding: 0;
  margin-bottom: 0.5rem;
  font-size: 1.5rem;
  line-height: inherit;
  color: inherit;
  white-space: normal;
}
progress {
  vertical-align: baseline;
}
[type="number"]::-webkit-inner-spin-button,
[type="number"]::-webkit-outer-spin-button {
  height: auto;
}
[type="search"] {
  outline-offset: -2px;
  -webkit-appearance: none;
}
[type="search"]::-webkit-search-cancel-button,
[type="search"]::-webkit-search-decoration {
  -webkit-appearance: none;
}
::-webkit-file-upload-button {
  font: inherit;
  -webkit-appearance: button;
}
output {
  display: inline-block;
}
summary {
  display: list-item;
  cursor: pointer;
}
template {
  display: none;
}
[hidden] {
  display: none !important;
}
h1,
h2,
h3,
h4,
h5,
h6,
.h1,
.h2,
.h3,
.h4,
.h5,
.h6 {
  margin-bottom: 0.5rem;
  font-family: inherit;
  font-weight: 500;
  line-height: 1.2;
  color: inherit;
}
h1,
.h1 {
  font-size: 2.5rem;
}
h2,
.h2 {
  font-size: 2rem;
}
h3,
.h3 {
  font-size: 1.75rem;
}
h4,
.h4 {
  font-size: 1.5rem;
}
h5,
.h5 {
  font-size: 1.25rem;
}
h6,
.h6 {
  font-size: 1rem;
}
.lead {
  font-size: 1.25rem;
  font-weight: 300;
}
.display-1 {
  font-size: 6rem;
  font-weight: 300;
  line-height: 1.2;
}
.display-2 {
  font-size: 5.5rem;
  font-weight: 300;
  line-height: 1.2;
}
.display-3 {
  font-size: 4.5rem;
  font-weight: 300;
  line-height: 1.2;
}
.display-4 {
  font-size: 3.5rem;
  font-weight: 300;
  line-height: 1.2;
}
hr {
  margin-top: 1rem;
  margin-bottom: 1rem;
  border: 0;
  border-top: 1px solid rgba(0, 0, 0, 0.1);
}
small,
.small {
  font-size: 80%;
  font-weight: 400;
}
mark,
.mark {
  padding: 0.2em;
  background-color: #fcf8e3;
}
.list-unstyled {
  padding-left: 0;
  list-style: none;
}
.list-inline {
  padding-left: 0;
  list-style: none;
}
.list-inline-item {
  display: inline-block;
}
.list-inline-item:not(:last-child) {
  margin-right: 0.5rem;
}
.initialism {
  font-size: 90%;
  text-transform: uppercase;
}
.blockquote {
  margin-bottom: 1rem;
  font-size: 1.25rem;
}
.blockquote-footer {
  display: block;
  font-size: 80%;
  color: #6c757d;
}
.blockquote-footer::before {
  content: "\2014   \A0";
}
.img-fluid {
  max-width: 100%;
  height: auto;
}
.img-thumbnail {
  padding: 0.25rem;
  background-color: #fff;
  border: 1px solid #dee2e6;
  border-radius: 0.25rem;
  max-width: 100%;
  height: auto;
}
.figure {
  display: inline-block;
}
.figure-img {
  margin-bottom: 0.5rem;
  line-height: 1;
}
.figure-caption {
  font-size: 90%;
  color: #6c757d;
}
code {
  font-size: 87.5%;
  color: #e83e8c;
  word-break: break-word;
}
a > code {
  color: inherit;
}
kbd {
  padding: 0.2rem 0.4rem;
  font-size: 87.5%;
  color: #fff;
  background-color: #212529;
  border-radius: 0.2rem;
}
kbd kbd {
  padding: 0;
  font-size: 100%;
  font-weight: 700;
}
pre {
  display: block;
  font-size: 87.5%;
  color: #212529;
}
pre code {
  font-size: inherit;
  color: inherit;
  word-break: normal;
}
.pre-scrollable {
  max-height: 340px;
  overflow-y: scroll;
}
.container {
  width: 100%;
  padding-right: 15px;
  padding-left: 15px;
  margin-right: auto;
  margin-left: auto;
}
@media (min-width: 576px) {
  .container {
    max-width: 540px;
  }
}
@media (min-width: 768px) {
  .container {
    max-width: 720px;
  }
}
@media (min-width: 992px) {
  .container {
    max-width: 960px;
  }
}
@media (min-width: 1200px) {
  .container {
    max-width: 1140px;
  }
}
.container-fluid {
  width: 100%;
  padding-right: 15px;
  padding-left: 15px;
  margin-right: auto;
  margin-left: auto;
}
.row {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  margin-right: -15px;
  margin-left: -15px;
}
.no-gutters {
  margin-right: 0;
  margin-left: 0;
}
.no-gutters > .col,
.no-gutters > [class*="col-"] {
  padding-right: 0;
  padding-left: 0;
}
.col-1,
.col-2,
.col-3,
.col-4,
.col-5,
.col-6,
.col-7,
.col-8,
.col-9,
.col-10,
.col-11,
.col-12,
.col,
.col-auto,
.col-sm-1,
.col-sm-2,
.col-sm-3,
.col-sm-4,
.col-sm-5,
.col-sm-6,
.col-sm-7,
.col-sm-8,
.col-sm-9,
.col-sm-10,
.col-sm-11,
.col-sm-12,
.col-sm,
.col-sm-auto,
.col-md-1,
.col-md-2,
.col-md-3,
.col-md-4,
.col-md-5,
.col-md-6,
.col-md-7,
.col-md-8,
.col-md-9,
.col-md-10,
.col-md-11,
.col-md-12,
.col-md,
.col-md-auto,
.col-lg-1,
.col-lg-2,
.col-lg-3,
.col-lg-4,
.col-lg-5,
.col-lg-6,
.col-lg-7,
.col-lg-8,
.col-lg-9,
.col-lg-10,
.col-lg-11,
.col-lg-12,
.col-lg,
.col-lg-auto,
.col-xl-1,
.col-xl-2,
.col-xl-3,
.col-xl-4,
.col-xl-5,
.col-xl-6,
.col-xl-7,
.col-xl-8,
.col-xl-9,
.col-xl-10,
.col-xl-11,
.col-xl-12,
.col-xl,
.col-xl-auto {
  position: relative;
  width: 100%;
  min-height: 1px;
  padding-right: 15px;
  padding-left: 15px;
}
.col {
  -ms-flex-preferred-size: 0;
  flex-basis: 0;
  -ms-flex-positive: 1;
  flex-grow: 1;
  max-width: 100%;
}
.col-auto {
  -ms-flex: 0 0 auto;
  flex: 0 0 auto;
  width: auto;
  max-width: none;
}
.col-1 {
  -ms-flex: 0 0 8.333333%;
  flex: 0 0 8.333333%;
  max-width: 8.333333%;
}
.col-2 {
  -ms-flex: 0 0 16.666667%;
  flex: 0 0 16.666667%;
  max-width: 16.666667%;
}
.col-3 {
  -ms-flex: 0 0 25%;
  flex: 0 0 25%;
  max-width: 25%;
}
.col-4 {
  -ms-flex: 0 0 33.333333%;
  flex: 0 0 33.333333%;
  max-width: 33.333333%;
}
.col-5 {
  -ms-flex: 0 0 41.666667%;
  flex: 0 0 41.666667%;
  max-width: 41.666667%;
}
.col-6 {
  -ms-flex: 0 0 50%;
  flex: 0 0 50%;
  max-width: 50%;
}
.col-7 {
  -ms-flex: 0 0 58.333333%;
  flex: 0 0 58.333333%;
  max-width: 58.333333%;
}
.col-8 {
  -ms-flex: 0 0 66.666667%;
  flex: 0 0 66.666667%;
  max-width: 66.666667%;
}
.col-9 {
  -ms-flex: 0 0 75%;
  flex: 0 0 75%;
  max-width: 75%;
}
.col-10 {
  -ms-flex: 0 0 83.333333%;
  flex: 0 0 83.333333%;
  max-width: 83.333333%;
}
.col-11 {
  -ms-flex: 0 0 91.666667%;
  flex: 0 0 91.666667%;
  max-width: 91.666667%;
}
.col-12 {
  -ms-flex: 0 0 100%;
  flex: 0 0 100%;
  max-width: 100%;
}
.order-first {
  -ms-flex-order: -1;
  order: -1;
}
.order-last {
  -ms-flex-order: 13;
  order: 13;
}
.order-0 {
  -ms-flex-order: 0;
  order: 0;
}
.order-1 {
  -ms-flex-order: 1;
  order: 1;
}
.order-2 {
  -ms-flex-order: 2;
  order: 2;
}
.order-3 {
  -ms-flex-order: 3;
  order: 3;
}
.order-4 {
  -ms-flex-order: 4;
  order: 4;
}
.order-5 {
  -ms-flex-order: 5;
  order: 5;
}
.order-6 {
  -ms-flex-order: 6;
  order: 6;
}
.order-7 {
  -ms-flex-order: 7;
  order: 7;
}
.order-8 {
  -ms-flex-order: 8;
  order: 8;
}
.order-9 {
  -ms-flex-order: 9;
  order: 9;
}
.order-10 {
  -ms-flex-order: 10;
  order: 10;
}
.order-11 {
  -ms-flex-order: 11;
  order: 11;
}
.order-12 {
  -ms-flex-order: 12;
  order: 12;
}
.offset-1 {
  margin-left: 8.333333%;
}
.offset-2 {
  margin-left: 16.666667%;
}
.offset-3 {
  margin-left: 25%;
}
.offset-4 {
  margin-left: 33.333333%;
}
.offset-5 {
  margin-left: 41.666667%;
}
.offset-6 {
  margin-left: 50%;
}
.offset-7 {
  margin-left: 58.333333%;
}
.offset-8 {
  margin-left: 66.666667%;
}
.offset-9 {
  margin-left: 75%;
}
.offset-10 {
  margin-left: 83.333333%;
}
.offset-11 {
  margin-left: 91.666667%;
}
@media (min-width: 576px) {
  .col-sm {
    -ms-flex-preferred-size: 0;
    flex-basis: 0;
    -ms-flex-positive: 1;
    flex-grow: 1;
    max-width: 100%;
  }
  .col-sm-auto {
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: auto;
    max-width: none;
  }
  .col-sm-1 {
    -ms-flex: 0 0 8.333333%;
    flex: 0 0 8.333333%;
    max-width: 8.333333%;
  }
  .col-sm-2 {
    -ms-flex: 0 0 16.666667%;
    flex: 0 0 16.666667%;
    max-width: 16.666667%;
  }
  .col-sm-3 {
    -ms-flex: 0 0 25%;
    flex: 0 0 25%;
    max-width: 25%;
  }
  .col-sm-4 {
    -ms-flex: 0 0 33.333333%;
    flex: 0 0 33.333333%;
    max-width: 33.333333%;
  }
  .col-sm-5 {
    -ms-flex: 0 0 41.666667%;
    flex: 0 0 41.666667%;
    max-width: 41.666667%;
  }
  .col-sm-6 {
    -ms-flex: 0 0 50%;
    flex: 0 0 50%;
    max-width: 50%;
  }
  .col-sm-7 {
    -ms-flex: 0 0 58.333333%;
    flex: 0 0 58.333333%;
    max-width: 58.333333%;
  }
  .col-sm-8 {
    -ms-flex: 0 0 66.666667%;
    flex: 0 0 66.666667%;
    max-width: 66.666667%;
  }
  .col-sm-9 {
    -ms-flex: 0 0 75%;
    flex: 0 0 75%;
    max-width: 75%;
  }
  .col-sm-10 {
    -ms-flex: 0 0 83.333333%;
    flex: 0 0 83.333333%;
    max-width: 83.333333%;
  }
  .col-sm-11 {
    -ms-flex: 0 0 91.666667%;
    flex: 0 0 91.666667%;
    max-width: 91.666667%;
  }
  .col-sm-12 {
    -ms-flex: 0 0 100%;
    flex: 0 0 100%;
    max-width: 100%;
  }
  .order-sm-first {
    -ms-flex-order: -1;
    order: -1;
  }
  .order-sm-last {
    -ms-flex-order: 13;
    order: 13;
  }
  .order-sm-0 {
    -ms-flex-order: 0;
    order: 0;
  }
  .order-sm-1 {
    -ms-flex-order: 1;
    order: 1;
  }
  .order-sm-2 {
    -ms-flex-order: 2;
    order: 2;
  }
  .order-sm-3 {
    -ms-flex-order: 3;
    order: 3;
  }
  .order-sm-4 {
    -ms-flex-order: 4;
    order: 4;
  }
  .order-sm-5 {
    -ms-flex-order: 5;
    order: 5;
  }
  .order-sm-6 {
    -ms-flex-order: 6;
    order: 6;
  }
  .order-sm-7 {
    -ms-flex-order: 7;
    order: 7;
  }
  .order-sm-8 {
    -ms-flex-order: 8;
    order: 8;
  }
  .order-sm-9 {
    -ms-flex-order: 9;
    order: 9;
  }
  .order-sm-10 {
    -ms-flex-order: 10;
    order: 10;
  }
  .order-sm-11 {
    -ms-flex-order: 11;
    order: 11;
  }
  .order-sm-12 {
    -ms-flex-order: 12;
    order: 12;
  }
  .offset-sm-0 {
    margin-left: 0;
  }
  .offset-sm-1 {
    margin-left: 8.333333%;
  }
  .offset-sm-2 {
    margin-left: 16.666667%;
  }
  .offset-sm-3 {
    margin-left: 25%;
  }
  .offset-sm-4 {
    margin-left: 33.333333%;
  }
  .offset-sm-5 {
    margin-left: 41.666667%;
  }
  .offset-sm-6 {
    margin-left: 50%;
  }
  .offset-sm-7 {
    margin-left: 58.333333%;
  }
  .offset-sm-8 {
    margin-left: 66.666667%;
  }
  .offset-sm-9 {
    margin-left: 75%;
  }
  .offset-sm-10 {
    margin-left: 83.333333%;
  }
  .offset-sm-11 {
    margin-left: 91.666667%;
  }
}
@media (min-width: 768px) {
  .col-md {
    -ms-flex-preferred-size: 0;
    flex-basis: 0;
    -ms-flex-positive: 1;
    flex-grow: 1;
    max-width: 100%;
  }
  .col-md-auto {
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: auto;
    max-width: none;
  }
  .col-md-1 {
    -ms-flex: 0 0 8.333333%;
    flex: 0 0 8.333333%;
    max-width: 8.333333%;
  }
  .col-md-2 {
    -ms-flex: 0 0 16.666667%;
    flex: 0 0 16.666667%;
    max-width: 16.666667%;
  }
  .col-md-3 {
    -ms-flex: 0 0 25%;
    flex: 0 0 25%;
    max-width: 25%;
  }
  .col-md-4 {
    -ms-flex: 0 0 33.333333%;
    flex: 0 0 33.333333%;
    max-width: 33.333333%;
  }
  .col-md-5 {
    -ms-flex: 0 0 41.666667%;
    flex: 0 0 41.666667%;
    max-width: 41.666667%;
  }
  .col-md-6 {
    -ms-flex: 0 0 50%;
    flex: 0 0 50%;
    max-width: 50%;
  }
  .col-md-7 {
    -ms-flex: 0 0 58.333333%;
    flex: 0 0 58.333333%;
    max-width: 58.333333%;
  }
  .col-md-8 {
    -ms-flex: 0 0 66.666667%;
    flex: 0 0 66.666667%;
    max-width: 66.666667%;
  }
  .col-md-9 {
    -ms-flex: 0 0 75%;
    flex: 0 0 75%;
    max-width: 75%;
  }
  .col-md-10 {
    -ms-flex: 0 0 83.333333%;
    flex: 0 0 83.333333%;
    max-width: 83.333333%;
  }
  .col-md-11 {
    -ms-flex: 0 0 91.666667%;
    flex: 0 0 91.666667%;
    max-width: 91.666667%;
  }
  .col-md-12 {
    -ms-flex: 0 0 100%;
    flex: 0 0 100%;
    max-width: 100%;
  }
  .order-md-first {
    -ms-flex-order: -1;
    order: -1;
  }
  .order-md-last {
    -ms-flex-order: 13;
    order: 13;
  }
  .order-md-0 {
    -ms-flex-order: 0;
    order: 0;
  }
  .order-md-1 {
    -ms-flex-order: 1;
    order: 1;
  }
  .order-md-2 {
    -ms-flex-order: 2;
    order: 2;
  }
  .order-md-3 {
    -ms-flex-order: 3;
    order: 3;
  }
  .order-md-4 {
    -ms-flex-order: 4;
    order: 4;
  }
  .order-md-5 {
    -ms-flex-order: 5;
    order: 5;
  }
  .order-md-6 {
    -ms-flex-order: 6;
    order: 6;
  }
  .order-md-7 {
    -ms-flex-order: 7;
    order: 7;
  }
  .order-md-8 {
    -ms-flex-order: 8;
    order: 8;
  }
  .order-md-9 {
    -ms-flex-order: 9;
    order: 9;
  }
  .order-md-10 {
    -ms-flex-order: 10;
    order: 10;
  }
  .order-md-11 {
    -ms-flex-order: 11;
    order: 11;
  }
  .order-md-12 {
    -ms-flex-order: 12;
    order: 12;
  }
  .offset-md-0 {
    margin-left: 0;
  }
  .offset-md-1 {
    margin-left: 8.333333%;
  }
  .offset-md-2 {
    margin-left: 16.666667%;
  }
  .offset-md-3 {
    margin-left: 25%;
  }
  .offset-md-4 {
    margin-left: 33.333333%;
  }
  .offset-md-5 {
    margin-left: 41.666667%;
  }
  .offset-md-6 {
    margin-left: 50%;
  }
  .offset-md-7 {
    margin-left: 58.333333%;
  }
  .offset-md-8 {
    margin-left: 66.666667%;
  }
  .offset-md-9 {
    margin-left: 75%;
  }
  .offset-md-10 {
    margin-left: 83.333333%;
  }
  .offset-md-11 {
    margin-left: 91.666667%;
  }
}
@media (min-width: 992px) {
  .col-lg {
    -ms-flex-preferred-size: 0;
    flex-basis: 0;
    -ms-flex-positive: 1;
    flex-grow: 1;
    max-width: 100%;
  }
  .col-lg-auto {
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: auto;
    max-width: none;
  }
  .col-lg-1 {
    -ms-flex: 0 0 8.333333%;
    flex: 0 0 8.333333%;
    max-width: 8.333333%;
  }
  .col-lg-2 {
    -ms-flex: 0 0 16.666667%;
    flex: 0 0 16.666667%;
    max-width: 16.666667%;
  }
  .col-lg-3 {
    -ms-flex: 0 0 25%;
    flex: 0 0 25%;
    max-width: 25%;
  }
  .col-lg-4 {
    -ms-flex: 0 0 33.333333%;
    flex: 0 0 33.333333%;
    max-width: 33.333333%;
  }
  .col-lg-5 {
    -ms-flex: 0 0 41.666667%;
    flex: 0 0 41.666667%;
    max-width: 41.666667%;
  }
  .col-lg-6 {
    -ms-flex: 0 0 50%;
    flex: 0 0 50%;
    max-width: 50%;
  }
  .col-lg-7 {
    -ms-flex: 0 0 58.333333%;
    flex: 0 0 58.333333%;
    max-width: 58.333333%;
  }
  .col-lg-8 {
    -ms-flex: 0 0 66.666667%;
    flex: 0 0 66.666667%;
    max-width: 66.666667%;
  }
  .col-lg-9 {
    -ms-flex: 0 0 75%;
    flex: 0 0 75%;
    max-width: 75%;
  }
  .col-lg-10 {
    -ms-flex: 0 0 83.333333%;
    flex: 0 0 83.333333%;
    max-width: 83.333333%;
  }
  .col-lg-11 {
    -ms-flex: 0 0 91.666667%;
    flex: 0 0 91.666667%;
    max-width: 91.666667%;
  }
  .col-lg-12 {
    -ms-flex: 0 0 100%;
    flex: 0 0 100%;
    max-width: 100%;
  }
  .order-lg-first {
    -ms-flex-order: -1;
    order: -1;
  }
  .order-lg-last {
    -ms-flex-order: 13;
    order: 13;
  }
  .order-lg-0 {
    -ms-flex-order: 0;
    order: 0;
  }
  .order-lg-1 {
    -ms-flex-order: 1;
    order: 1;
  }
  .order-lg-2 {
    -ms-flex-order: 2;
    order: 2;
  }
  .order-lg-3 {
    -ms-flex-order: 3;
    order: 3;
  }
  .order-lg-4 {
    -ms-flex-order: 4;
    order: 4;
  }
  .order-lg-5 {
    -ms-flex-order: 5;
    order: 5;
  }
  .order-lg-6 {
    -ms-flex-order: 6;
    order: 6;
  }
  .order-lg-7 {
    -ms-flex-order: 7;
    order: 7;
  }
  .order-lg-8 {
    -ms-flex-order: 8;
    order: 8;
  }
  .order-lg-9 {
    -ms-flex-order: 9;
    order: 9;
  }
  .order-lg-10 {
    -ms-flex-order: 10;
    order: 10;
  }
  .order-lg-11 {
    -ms-flex-order: 11;
    order: 11;
  }
  .order-lg-12 {
    -ms-flex-order: 12;
    order: 12;
  }
  .offset-lg-0 {
    margin-left: 0;
  }
  .offset-lg-1 {
    margin-left: 8.333333%;
  }
  .offset-lg-2 {
    margin-left: 16.666667%;
  }
  .offset-lg-3 {
    margin-left: 25%;
  }
  .offset-lg-4 {
    margin-left: 33.333333%;
  }
  .offset-lg-5 {
    margin-left: 41.666667%;
  }
  .offset-lg-6 {
    margin-left: 50%;
  }
  .offset-lg-7 {
    margin-left: 58.333333%;
  }
  .offset-lg-8 {
    margin-left: 66.666667%;
  }
  .offset-lg-9 {
    margin-left: 75%;
  }
  .offset-lg-10 {
    margin-left: 83.333333%;
  }
  .offset-lg-11 {
    margin-left: 91.666667%;
  }
}
@media (min-width: 1200px) {
  .col-xl {
    -ms-flex-preferred-size: 0;
    flex-basis: 0;
    -ms-flex-positive: 1;
    flex-grow: 1;
    max-width: 100%;
  }
  .col-xl-auto {
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: auto;
    max-width: none;
  }
  .col-xl-1 {
    -ms-flex: 0 0 8.333333%;
    flex: 0 0 8.333333%;
    max-width: 8.333333%;
  }
  .col-xl-2 {
    -ms-flex: 0 0 16.666667%;
    flex: 0 0 16.666667%;
    max-width: 16.666667%;
  }
  .col-xl-3 {
    -ms-flex: 0 0 25%;
    flex: 0 0 25%;
    max-width: 25%;
  }
  .col-xl-4 {
    -ms-flex: 0 0 33.333333%;
    flex: 0 0 33.333333%;
    max-width: 33.333333%;
  }
  .col-xl-5 {
    -ms-flex: 0 0 41.666667%;
    flex: 0 0 41.666667%;
    max-width: 41.666667%;
  }
  .col-xl-6 {
    -ms-flex: 0 0 50%;
    flex: 0 0 50%;
    max-width: 50%;
  }
  .col-xl-7 {
    -ms-flex: 0 0 58.333333%;
    flex: 0 0 58.333333%;
    max-width: 58.333333%;
  }
  .col-xl-8 {
    -ms-flex: 0 0 66.666667%;
    flex: 0 0 66.666667%;
    max-width: 66.666667%;
  }
  .col-xl-9 {
    -ms-flex: 0 0 75%;
    flex: 0 0 75%;
    max-width: 75%;
  }
  .col-xl-10 {
    -ms-flex: 0 0 83.333333%;
    flex: 0 0 83.333333%;
    max-width: 83.333333%;
  }
  .col-xl-11 {
    -ms-flex: 0 0 91.666667%;
    flex: 0 0 91.666667%;
    max-width: 91.666667%;
  }
  .col-xl-12 {
    -ms-flex: 0 0 100%;
    flex: 0 0 100%;
    max-width: 100%;
  }
  .order-xl-first {
    -ms-flex-order: -1;
    order: -1;
  }
  .order-xl-last {
    -ms-flex-order: 13;
    order: 13;
  }
  .order-xl-0 {
    -ms-flex-order: 0;
    order: 0;
  }
  .order-xl-1 {
    -ms-flex-order: 1;
    order: 1;
  }
  .order-xl-2 {
    -ms-flex-order: 2;
    order: 2;
  }
  .order-xl-3 {
    -ms-flex-order: 3;
    order: 3;
  }
  .order-xl-4 {
    -ms-flex-order: 4;
    order: 4;
  }
  .order-xl-5 {
    -ms-flex-order: 5;
    order: 5;
  }
  .order-xl-6 {
    -ms-flex-order: 6;
    order: 6;
  }
  .order-xl-7 {
    -ms-flex-order: 7;
    order: 7;
  }
  .order-xl-8 {
    -ms-flex-order: 8;
    order: 8;
  }
  .order-xl-9 {
    -ms-flex-order: 9;
    order: 9;
  }
  .order-xl-10 {
    -ms-flex-order: 10;
    order: 10;
  }
  .order-xl-11 {
    -ms-flex-order: 11;
    order: 11;
  }
  .order-xl-12 {
    -ms-flex-order: 12;
    order: 12;
  }
  .offset-xl-0 {
    margin-left: 0;
  }
  .offset-xl-1 {
    margin-left: 8.333333%;
  }
  .offset-xl-2 {
    margin-left: 16.666667%;
  }
  .offset-xl-3 {
    margin-left: 25%;
  }
  .offset-xl-4 {
    margin-left: 33.333333%;
  }
  .offset-xl-5 {
    margin-left: 41.666667%;
  }
  .offset-xl-6 {
    margin-left: 50%;
  }
  .offset-xl-7 {
    margin-left: 58.333333%;
  }
  .offset-xl-8 {
    margin-left: 66.666667%;
  }
  .offset-xl-9 {
    margin-left: 75%;
  }
  .offset-xl-10 {
    margin-left: 83.333333%;
  }
  .offset-xl-11 {
    margin-left: 91.666667%;
  }
}
.table {
  width: 100%;
  margin-bottom: 1rem;
  background-color: transparent;
}
.table th,
.table td {
  padding: 0.75rem;
  vertical-align: top;
  border-top: 1px solid #dee2e6;
}
.table thead th {
  vertical-align: bottom;
  border-bottom: 2px solid #dee2e6;
}
.table tbody + tbody {
  border-top: 2px solid #dee2e6;
}
.table .table {
  background-color: #fff;
}
.table-sm th,
.table-sm td {
  padding: 0.3rem;
}
.table-bordered {
  border: 1px solid #dee2e6;
}
.table-bordered th,
.table-bordered td {
  border: 1px solid #dee2e6;
}
.table-bordered thead th,
.table-bordered thead td {
  border-bottom-width: 2px;
}
.table-borderless th,
.table-borderless td,
.table-borderless thead th,
.table-borderless tbody + tbody {
  border: 0;
}
.table-striped tbody tr:nth-of-type(odd) {
  background-color: rgba(0, 0, 0, 0.05);
}
.table-hover tbody tr:hover {
  background-color: rgba(0, 0, 0, 0.075);
}
.table-primary,
.table-primary > th,
.table-primary > td {
  background-color: #b8daff;
}
.table-hover .table-primary:hover {
  background-color: #9fcdff;
}
.table-hover .table-primary:hover > td,
.table-hover .table-primary:hover > th {
  background-color: #9fcdff;
}
.table-secondary,
.table-secondary > th,
.table-secondary > td {
  background-color: #d6d8db;
}
.table-hover .table-secondary:hover {
  background-color: #c8cbcf;
}
.table-hover .table-secondary:hover > td,
.table-hover .table-secondary:hover > th {
  background-color: #c8cbcf;
}
.table-success,
.table-success > th,
.table-success > td {
  background-color: #c3e6cb;
}
.table-hover .table-success:hover {
  background-color: #b1dfbb;
}
.table-hover .table-success:hover > td,
.table-hover .table-success:hover > th {
  background-color: #b1dfbb;
}
.table-info,
.table-info > th,
.table-info > td {
  background-color: #bee5eb;
}
.table-hover .table-info:hover {
  background-color: #abdde5;
}
.table-hover .table-info:hover > td,
.table-hover .table-info:hover > th {
  background-color: #abdde5;
}
.table-warning,
.table-warning > th,
.table-warning > td {
  background-color: #ffeeba;
}
.table-hover .table-warning:hover {
  background-color: #ffe8a1;
}
.table-hover .table-warning:hover > td,
.table-hover .table-warning:hover > th {
  background-color: #ffe8a1;
}
.table-danger,
.table-danger > th,
.table-danger > td {
  background-color: #f5c6cb;
}
.table-hover .table-danger:hover {
  background-color: #f1b0b7;
}
.table-hover .table-danger:hover > td,
.table-hover .table-danger:hover > th {
  background-color: #f1b0b7;
}
.table-light,
.table-light > th,
.table-light > td {
  background-color: #fdfdfe;
}
.table-hover .table-light:hover {
  background-color: #ececf6;
}
.table-hover .table-light:hover > td,
.table-hover .table-light:hover > th {
  background-color: #ececf6;
}
.table-dark,
.table-dark > th,
.table-dark > td {
  background-color: #c6c8ca;
}
.table-hover .table-dark:hover {
  background-color: #b9bbbe;
}
.table-hover .table-dark:hover > td,
.table-hover .table-dark:hover > th {
  background-color: #b9bbbe;
}
.table-active,
.table-active > th,
.table-active > td {
  background-color: rgba(0, 0, 0, 0.075);
}
.table-hover .table-active:hover {
  background-color: rgba(0, 0, 0, 0.075);
}
.table-hover .table-active:hover > td,
.table-hover .table-active:hover > th {
  background-color: rgba(0, 0, 0, 0.075);
}
.table .thead-dark th {
  color: #fff;
  background-color: #212529;
  border-color: #32383e;
}
.table .thead-light th {
  color: #495057;
  background-color: #e9ecef;
  border-color: #dee2e6;
}
.table-dark {
  color: #fff;
  background-color: #212529;
}
.table-dark th,
.table-dark td,
.table-dark thead th {
  border-color: #32383e;
}
.table-dark.table-bordered {
  border: 0;
}
.table-dark.table-striped tbody tr:nth-of-type(odd) {
  background-color: rgba(255, 255, 255, 0.05);
}
.table-dark.table-hover tbody tr:hover {
  background-color: rgba(255, 255, 255, 0.075);
}
@media (max-width: 575.98px) {
  .table-responsive-sm {
    display: block;
    width: 100%;
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
    -ms-overflow-style: -ms-autohiding-scrollbar;
  }
  .table-responsive-sm > .table-bordered {
    border: 0;
  }
}
@media (max-width: 767.98px) {
  .table-responsive-md {
    display: block;
    width: 100%;
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
    -ms-overflow-style: -ms-autohiding-scrollbar;
  }
  .table-responsive-md > .table-bordered {
    border: 0;
  }
}
@media (max-width: 991.98px) {
  .table-responsive-lg {
    display: block;
    width: 100%;
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
    -ms-overflow-style: -ms-autohiding-scrollbar;
  }
  .table-responsive-lg > .table-bordered {
    border: 0;
  }
}
@media (max-width: 1199.98px) {
  .table-responsive-xl {
    display: block;
    width: 100%;
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
    -ms-overflow-style: -ms-autohiding-scrollbar;
  }
  .table-responsive-xl > .table-bordered {
    border: 0;
  }
}
.table-responsive {
  display: block;
  width: 100%;
  overflow-x: auto;
  -webkit-overflow-scrolling: touch;
  -ms-overflow-style: -ms-autohiding-scrollbar;
}
.table-responsive > .table-bordered {
  border: 0;
}
.form-control {
  display: block;
  width: 100%;
  height: calc(2.25rem + 2px);
  padding: 0.375rem 0.75rem;
  font-size: 1rem;
  line-height: 1.5;
  color: #495057;
  background-color: #fff;
  background-clip: padding-box;
  border: 1px solid #ced4da;
  border-radius: 0.25rem;
  transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}
@media screen and (prefers-reduced-motion: reduce) {
  .form-control {
    transition: none;
  }
}
.form-control::-ms-expand {
  background-color: transparent;
  border: 0;
}
.form-control:focus {
  color: #495057;
  background-color: #fff;
  border-color: #80bdff;
  outline: 0;
  box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
}
.form-control::-webkit-input-placeholder {
  color: #6c757d;
  opacity: 1;
}
.form-control::-moz-placeholder {
  color: #6c757d;
  opacity: 1;
}
.form-control:-ms-input-placeholder {
  color: #6c757d;
  opacity: 1;
}
.form-control::-ms-input-placeholder {
  color: #6c757d;
  opacity: 1;
}
.form-control::placeholder {
  color: #6c757d;
  opacity: 1;
}
.form-control:disabled,
.form-control[readonly] {
  background-color: #e9ecef;
  opacity: 1;
}
select.form-control:focus::-ms-value {
  color: #495057;
  background-color: #fff;
}
.form-control-file,
.form-control-range {
  display: block;
  width: 100%;
}
.col-form-label {
  padding-top: calc(0.375rem + 1px);
  padding-bottom: calc(0.375rem + 1px);
  margin-bottom: 0;
  font-size: inherit;
  line-height: 1.5;
}
.col-form-label-lg {
  padding-top: calc(0.5rem + 1px);
  padding-bottom: calc(0.5rem + 1px);
  font-size: 1.25rem;
  line-height: 1.5;
}
.col-form-label-sm {
  padding-top: calc(0.25rem + 1px);
  padding-bottom: calc(0.25rem + 1px);
  font-size: 0.875rem;
  line-height: 1.5;
}
.form-control-plaintext {
  display: block;
  width: 100%;
  padding-top: 0.375rem;
  padding-bottom: 0.375rem;
  margin-bottom: 0;
  line-height: 1.5;
  color: #212529;
  background-color: transparent;
  border: solid transparent;
  border-width: 1px 0;
}
.form-control-plaintext.form-control-sm,
.form-control-plaintext.form-control-lg {
  padding-right: 0;
  padding-left: 0;
}
.form-control-sm {
  height: calc(1.8125rem + 2px);
  padding: 0.25rem 0.5rem;
  font-size: 0.875rem;
  line-height: 1.5;
  border-radius: 0.2rem;
}
.form-control-lg {
  height: calc(2.875rem + 2px);
  padding: 0.5rem 1rem;
  font-size: 1.25rem;
  line-height: 1.5;
  border-radius: 0.3rem;
}
select.form-control[size],
select.form-control[multiple] {
  height: auto;
}
textarea.form-control {
  height: auto;
}
.form-group {
  margin-bottom: 1rem;
}
.form-text {
  display: block;
  margin-top: 0.25rem;
}
.form-row {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  margin-right: -5px;
  margin-left: -5px;
}
.form-row > .col,
.form-row > [class*="col-"] {
  padding-right: 5px;
  padding-left: 5px;
}
.form-check {
  position: relative;
  display: block;
  padding-left: 1.25rem;
}
.form-check-input {
  position: absolute;
  margin-top: 0.3rem;
  margin-left: -1.25rem;
}
.form-check-input:disabled ~ .form-check-label {
  color: #6c757d;
}
.form-check-label {
  margin-bottom: 0;
}
.form-check-inline {
  display: -ms-inline-flexbox;
  display: inline-flex;
  -ms-flex-align: center;
  align-items: center;
  padding-left: 0;
  margin-right: 0.75rem;
}
.form-check-inline .form-check-input {
  position: static;
  margin-top: 0;
  margin-right: 0.3125rem;
  margin-left: 0;
}
.valid-feedback {
  display: none;
  width: 100%;
  margin-top: 0.25rem;
  font-size: 80%;
  color: #28a745;
}
.valid-tooltip {
  position: absolute;
  top: 100%;
  z-index: 5;
  display: none;
  max-width: 100%;
  padding: 0.25rem 0.5rem;
  margin-top: 0.1rem;
  font-size: 0.875rem;
  line-height: 1.5;
  color: #fff;
  background-color: rgba(40, 167, 69, 0.9);
  border-radius: 0.25rem;
}
.was-validated .form-control:valid,
.form-control.is-valid,
.was-validated .custom-select:valid,
.custom-select.is-valid {
  border-color: #28a745;
}
.was-validated .form-control:valid:focus,
.form-control.is-valid:focus,
.was-validated .custom-select:valid:focus,
.custom-select.is-valid:focus {
  border-color: #28a745;
  box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.25);
}
.was-validated .form-control:valid ~ .valid-feedback,
.was-validated .form-control:valid ~ .valid-tooltip,
.form-control.is-valid ~ .valid-feedback,
.form-control.is-valid ~ .valid-tooltip,
.was-validated .custom-select:valid ~ .valid-feedback,
.was-validated .custom-select:valid ~ .valid-tooltip,
.custom-select.is-valid ~ .valid-feedback,
.custom-select.is-valid ~ .valid-tooltip {
  display: block;
}
.was-validated .form-control-file:valid ~ .valid-feedback,
.was-validated .form-control-file:valid ~ .valid-tooltip,
.form-control-file.is-valid ~ .valid-feedback,
.form-control-file.is-valid ~ .valid-tooltip {
  display: block;
}
.was-validated .form-check-input:valid ~ .form-check-label,
.form-check-input.is-valid ~ .form-check-label {
  color: #28a745;
}
.was-validated .form-check-input:valid ~ .valid-feedback,
.was-validated .form-check-input:valid ~ .valid-tooltip,
.form-check-input.is-valid ~ .valid-feedback,
.form-check-input.is-valid ~ .valid-tooltip {
  display: block;
}
.was-validated .custom-control-input:valid ~ .custom-control-label,
.custom-control-input.is-valid ~ .custom-control-label {
  color: #28a745;
}
.was-validated .custom-control-input:valid ~ .custom-control-label::before,
.custom-control-input.is-valid ~ .custom-control-label::before {
  background-color: #71dd8a;
}
.was-validated .custom-control-input:valid ~ .valid-feedback,
.was-validated .custom-control-input:valid ~ .valid-tooltip,
.custom-control-input.is-valid ~ .valid-feedback,
.custom-control-input.is-valid ~ .valid-tooltip {
  display: block;
}
.was-validated .custom-control-input:valid:checked ~ .custom-control-label::before,
.custom-control-input.is-valid:checked ~ .custom-control-label::before {
  background-color: #34ce57;
}
.was-validated .custom-control-input:valid:focus ~ .custom-control-label::before,
.custom-control-input.is-valid:focus ~ .custom-control-label::before {
  box-shadow: 0 0 0 1px #fff, 0 0 0 0.2rem rgba(40, 167, 69, 0.25);
}
.was-validated .custom-file-input:valid ~ .custom-file-label,
.custom-file-input.is-valid ~ .custom-file-label {
  border-color: #28a745;
}
.was-validated .custom-file-input:valid ~ .custom-file-label::after,
.custom-file-input.is-valid ~ .custom-file-label::after {
  border-color: inherit;
}
.was-validated .custom-file-input:valid ~ .valid-feedback,
.was-validated .custom-file-input:valid ~ .valid-tooltip,
.custom-file-input.is-valid ~ .valid-feedback,
.custom-file-input.is-valid ~ .valid-tooltip {
  display: block;
}
.was-validated .custom-file-input:valid:focus ~ .custom-file-label,
.custom-file-input.is-valid:focus ~ .custom-file-label {
  box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.25);
}
.invalid-feedback {
  display: none;
  width: 100%;
  margin-top: 0.25rem;
  font-size: 80%;
  color: #dc3545;
}
.invalid-tooltip {
  position: absolute;
  top: 100%;
  z-index: 5;
  display: none;
  max-width: 100%;
  padding: 0.25rem 0.5rem;
  margin-top: 0.1rem;
  font-size: 0.875rem;
  line-height: 1.5;
  color: #fff;
  background-color: rgba(220, 53, 69, 0.9);
  border-radius: 0.25rem;
}
.was-validated .form-control:invalid,
.form-control.is-invalid,
.was-validated .custom-select:invalid,
.custom-select.is-invalid {
  border-color: #dc3545;
}
.was-validated .form-control:invalid:focus,
.form-control.is-invalid:focus,
.was-validated .custom-select:invalid:focus,
.custom-select.is-invalid:focus {
  border-color: #dc3545;
  box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.25);
}
.was-validated .form-control:invalid ~ .invalid-feedback,
.was-validated .form-control:invalid ~ .invalid-tooltip,
.form-control.is-invalid ~ .invalid-feedback,
.form-control.is-invalid ~ .invalid-tooltip,
.was-validated .custom-select:invalid ~ .invalid-feedback,
.was-validated .custom-select:invalid ~ .invalid-tooltip,
.custom-select.is-invalid ~ .invalid-feedback,
.custom-select.is-invalid ~ .invalid-tooltip {
  display: block;
}
.was-validated .form-control-file:invalid ~ .invalid-feedback,
.was-validated .form-control-file:invalid ~ .invalid-tooltip,
.form-control-file.is-invalid ~ .invalid-feedback,
.form-control-file.is-invalid ~ .invalid-tooltip {
  display: block;
}
.was-validated .form-check-input:invalid ~ .form-check-label,
.form-check-input.is-invalid ~ .form-check-label {
  color: #dc3545;
}
.was-validated .form-check-input:invalid ~ .invalid-feedback,
.was-validated .form-check-input:invalid ~ .invalid-tooltip,
.form-check-input.is-invalid ~ .invalid-feedback,
.form-check-input.is-invalid ~ .invalid-tooltip {
  display: block;
}
.was-validated .custom-control-input:invalid ~ .custom-control-label,
.custom-control-input.is-invalid ~ .custom-control-label {
  color: #dc3545;
}
.was-validated .custom-control-input:invalid ~ .custom-control-label::before,
.custom-control-input.is-invalid ~ .custom-control-label::before {
  background-color: #efa2a9;
}
.was-validated .custom-control-input:invalid ~ .invalid-feedback,
.was-validated .custom-control-input:invalid ~ .invalid-tooltip,
.custom-control-input.is-invalid ~ .invalid-feedback,
.custom-control-input.is-invalid ~ .invalid-tooltip {
  display: block;
}
.was-validated .custom-control-input:invalid:checked ~ .custom-control-label::before,
.custom-control-input.is-invalid:checked ~ .custom-control-label::before {
  background-color: #e4606d;
}
.was-validated .custom-control-input:invalid:focus ~ .custom-control-label::before,
.custom-control-input.is-invalid:focus ~ .custom-control-label::before {
  box-shadow: 0 0 0 1px #fff, 0 0 0 0.2rem rgba(220, 53, 69, 0.25);
}
.was-validated .custom-file-input:invalid ~ .custom-file-label,
.custom-file-input.is-invalid ~ .custom-file-label {
  border-color: #dc3545;
}
.was-validated .custom-file-input:invalid ~ .custom-file-label::after,
.custom-file-input.is-invalid ~ .custom-file-label::after {
  border-color: inherit;
}
.was-validated .custom-file-input:invalid ~ .invalid-feedback,
.was-validated .custom-file-input:invalid ~ .invalid-tooltip,
.custom-file-input.is-invalid ~ .invalid-feedback,
.custom-file-input.is-invalid ~ .invalid-tooltip {
  display: block;
}
.was-validated .custom-file-input:invalid:focus ~ .custom-file-label,
.custom-file-input.is-invalid:focus ~ .custom-file-label {
  box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.25);
}
.form-inline {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-flow: row wrap;
  flex-flow: row wrap;
  -ms-flex-align: center;
  align-items: center;
}
.form-inline .form-check {
  width: 100%;
}
@media (min-width: 576px) {
  .form-inline label {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-align: center;
    align-items: center;
    -ms-flex-pack: center;
    justify-content: center;
    margin-bottom: 0;
  }
  .form-inline .form-group {
    display: -ms-flexbox;
    display: flex;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    -ms-flex-flow: row wrap;
    flex-flow: row wrap;
    -ms-flex-align: center;
    align-items: center;
    margin-bottom: 0;
  }
  .form-inline .form-control {
    display: inline-block;
    width: auto;
    vertical-align: middle;
  }
  .form-inline .form-control-plaintext {
    display: inline-block;
  }
  .form-inline .input-group,
  .form-inline .custom-select {
    width: auto;
  }
  .form-inline .form-check {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-align: center;
    align-items: center;
    -ms-flex-pack: center;
    justify-content: center;
    width: auto;
    padding-left: 0;
  }
  .form-inline .form-check-input {
    position: relative;
    margin-top: 0;
    margin-right: 0.25rem;
    margin-left: 0;
  }
  .form-inline .custom-control {
    -ms-flex-align: center;
    align-items: center;
    -ms-flex-pack: center;
    justify-content: center;
  }
  .form-inline .custom-control-label {
    margin-bottom: 0;
  }
}
.btn {
  display: inline-block;
  font-weight: 400;
  text-align: center;
  white-space: nowrap;
  vertical-align: middle;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  border: 1px solid transparent;
  padding: 0.375rem 0.75rem;
  font-size: 1rem;
  line-height: 1.5;
  border-radius: 0.25rem;
  transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}
@media screen and (prefers-reduced-motion: reduce) {
  .btn {
    transition: none;
  }
}
.btn:hover,
.btn:focus {
  text-decoration: none;
}
.btn:focus,
.btn.focus {
  outline: 0;
  box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
}
.btn.disabled,
.btn:disabled {
  opacity: 0.65;
}
.btn:not(:disabled):not(.disabled) {
  cursor: pointer;
}
a.btn.disabled,
fieldset:disabled a.btn {
  pointer-events: none;
}
.btn-primary {
  color: #fff;
  background-color: #007bff;
  border-color: #007bff;
}
.btn-primary:hover {
  color: #fff;
  background-color: #0069d9;
  border-color: #0062cc;
}
.btn-primary:focus,
.btn-primary.focus {
  box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.5);
}
.btn-primary.disabled,
.btn-primary:disabled {
  color: #fff;
  background-color: #007bff;
  border-color: #007bff;
}
.btn-primary:not(:disabled):not(.disabled):active,
.btn-primary:not(:disabled):not(.disabled).active,
.show > .btn-primary.dropdown-toggle {
  color: #fff;
  background-color: #0062cc;
  border-color: #005cbf;
}
.btn-primary:not(:disabled):not(.disabled):active:focus,
.btn-primary:not(:disabled):not(.disabled).active:focus,
.show > .btn-primary.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.5);
}
.btn-secondary {
  color: #fff;
  background-color: #6c757d;
  border-color: #6c757d;
}
.btn-secondary:hover {
  color: #fff;
  background-color: #5a6268;
  border-color: #545b62;
}
.btn-secondary:focus,
.btn-secondary.focus {
  box-shadow: 0 0 0 0.2rem rgba(108, 117, 125, 0.5);
}
.btn-secondary.disabled,
.btn-secondary:disabled {
  color: #fff;
  background-color: #6c757d;
  border-color: #6c757d;
}
.btn-secondary:not(:disabled):not(.disabled):active,
.btn-secondary:not(:disabled):not(.disabled).active,
.show > .btn-secondary.dropdown-toggle {
  color: #fff;
  background-color: #545b62;
  border-color: #4e555b;
}
.btn-secondary:not(:disabled):not(.disabled):active:focus,
.btn-secondary:not(:disabled):not(.disabled).active:focus,
.show > .btn-secondary.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.2rem rgba(108, 117, 125, 0.5);
}
.btn-success {
  color: #fff;
  background-color: #28a745;
  border-color: #28a745;
}
.btn-success:hover {
  color: #fff;
  background-color: #218838;
  border-color: #1e7e34;
}
.btn-success:focus,
.btn-success.focus {
  box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.5);
}
.btn-success.disabled,
.btn-success:disabled {
  color: #fff;
  background-color: #28a745;
  border-color: #28a745;
}
.btn-success:not(:disabled):not(.disabled):active,
.btn-success:not(:disabled):not(.disabled).active,
.show > .btn-success.dropdown-toggle {
  color: #fff;
  background-color: #1e7e34;
  border-color: #1c7430;
}
.btn-success:not(:disabled):not(.disabled):active:focus,
.btn-success:not(:disabled):not(.disabled).active:focus,
.show > .btn-success.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.5);
}
.btn-info {
  color: #fff;
  background-color: #17a2b8;
  border-color: #17a2b8;
}
.btn-info:hover {
  color: #fff;
  background-color: #138496;
  border-color: #117a8b;
}
.btn-info:focus,
.btn-info.focus {
  box-shadow: 0 0 0 0.2rem rgba(23, 162, 184, 0.5);
}
.btn-info.disabled,
.btn-info:disabled {
  color: #fff;
  background-color: #17a2b8;
  border-color: #17a2b8;
}
.btn-info:not(:disabled):not(.disabled):active,
.btn-info:not(:disabled):not(.disabled).active,
.show > .btn-info.dropdown-toggle {
  color: #fff;
  background-color: #117a8b;
  border-color: #10707f;
}
.btn-info:not(:disabled):not(.disabled):active:focus,
.btn-info:not(:disabled):not(.disabled).active:focus,
.show > .btn-info.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.2rem rgba(23, 162, 184, 0.5);
}
.btn-warning {
  color: #212529;
  background-color: #ffc107;
  border-color: #ffc107;
}
.btn-warning:hover {
  color: #212529;
  background-color: #e0a800;
  border-color: #d39e00;
}
.btn-warning:focus,
.btn-warning.focus {
  box-shadow: 0 0 0 0.2rem rgba(255, 193, 7, 0.5);
}
.btn-warning.disabled,
.btn-warning:disabled {
  color: #212529;
  background-color: #ffc107;
  border-color: #ffc107;
}
.btn-warning:not(:disabled):not(.disabled):active,
.btn-warning:not(:disabled):not(.disabled).active,
.show > .btn-warning.dropdown-toggle {
  color: #212529;
  background-color: #d39e00;
  border-color: #c69500;
}
.btn-warning:not(:disabled):not(.disabled):active:focus,
.btn-warning:not(:disabled):not(.disabled).active:focus,
.show > .btn-warning.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.2rem rgba(255, 193, 7, 0.5);
}
.btn-danger {
  color: #fff;
  background-color: #dc3545;
  border-color: #dc3545;
}
.btn-danger:hover {
  color: #fff;
  background-color: #c82333;
  border-color: #bd2130;
}
.btn-danger:focus,
.btn-danger.focus {
  box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.5);
}
.btn-danger.disabled,
.btn-danger:disabled {
  color: #fff;
  background-color: #dc3545;
  border-color: #dc3545;
}
.btn-danger:not(:disabled):not(.disabled):active,
.btn-danger:not(:disabled):not(.disabled).active,
.show > .btn-danger.dropdown-toggle {
  color: #fff;
  background-color: #bd2130;
  border-color: #b21f2d;
}
.btn-danger:not(:disabled):not(.disabled):active:focus,
.btn-danger:not(:disabled):not(.disabled).active:focus,
.show > .btn-danger.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.5);
}
.btn-light {
  color: #212529;
  background-color: #f8f9fa;
  border-color: #f8f9fa;
}
.btn-light:hover {
  color: #212529;
  background-color: #e2e6ea;
  border-color: #dae0e5;
}
.btn-light:focus,
.btn-light.focus {
  box-shadow: 0 0 0 0.2rem rgba(248, 249, 250, 0.5);
}
.btn-light.disabled,
.btn-light:disabled {
  color: #212529;
  background-color: #f8f9fa;
  border-color: #f8f9fa;
}
.btn-light:not(:disabled):not(.disabled):active,
.btn-light:not(:disabled):not(.disabled).active,
.show > .btn-light.dropdown-toggle {
  color: #212529;
  background-color: #dae0e5;
  border-color: #d3d9df;
}
.btn-light:not(:disabled):not(.disabled):active:focus,
.btn-light:not(:disabled):not(.disabled).active:focus,
.show > .btn-light.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.2rem rgba(248, 249, 250, 0.5);
}
.btn-dark {
  color: #fff;
  background-color: #343a40;
  border-color: #343a40;
}
.btn-dark:hover {
  color: #fff;
  background-color: #23272b;
  border-color: #1d2124;
}
.btn-dark:focus,
.btn-dark.focus {
  box-shadow: 0 0 0 0.2rem rgba(52, 58, 64, 0.5);
}
.btn-dark.disabled,
.btn-dark:disabled {
  color: #fff;
  background-color: #343a40;
  border-color: #343a40;
}
.btn-dark:not(:disabled):not(.disabled):active,
.btn-dark:not(:disabled):not(.disabled).active,
.show > .btn-dark.dropdown-toggle {
  color: #fff;
  background-color: #1d2124;
  border-color: #171a1d;
}
.btn-dark:not(:disabled):not(.disabled):active:focus,
.btn-dark:not(:disabled):not(.disabled).active:focus,
.show > .btn-dark.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.2rem rgba(52, 58, 64, 0.5);
}
.btn-outline-primary {
  color: #007bff;
  background-color: transparent;
  background-image: none;
  border-color: #007bff;
}
.btn-outline-primary:hover {
  color: #fff;
  background-color: #007bff;
  border-color: #007bff;
}
.btn-outline-primary:focus,
.btn-outline-primary.focus {
  box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.5);
}
.btn-outline-primary.disabled,
.btn-outline-primary:disabled {
  color: #007bff;
  background-color: transparent;
}
.btn-outline-primary:not(:disabled):not(.disabled):active,
.btn-outline-primary:not(:disabled):not(.disabled).active,
.show > .btn-outline-primary.dropdown-toggle {
  color: #fff;
  background-color: #007bff;
  border-color: #007bff;
}
.btn-outline-primary:not(:disabled):not(.disabled):active:focus,
.btn-outline-primary:not(:disabled):not(.disabled).active:focus,
.show > .btn-outline-primary.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.5);
}
.btn-outline-secondary {
  color: #6c757d;
  background-color: transparent;
  background-image: none;
  border-color: #6c757d;
}
.btn-outline-secondary:hover {
  color: #fff;
  background-color: #6c757d;
  border-color: #6c757d;
}
.btn-outline-secondary:focus,
.btn-outline-secondary.focus {
  box-shadow: 0 0 0 0.2rem rgba(108, 117, 125, 0.5);
}
.btn-outline-secondary.disabled,
.btn-outline-secondary:disabled {
  color: #6c757d;
  background-color: transparent;
}
.btn-outline-secondary:not(:disabled):not(.disabled):active,
.btn-outline-secondary:not(:disabled):not(.disabled).active,
.show > .btn-outline-secondary.dropdown-toggle {
  color: #fff;
  background-color: #6c757d;
  border-color: #6c757d;
}
.btn-outline-secondary:not(:disabled):not(.disabled):active:focus,
.btn-outline-secondary:not(:disabled):not(.disabled).active:focus,
.show > .btn-outline-secondary.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.2rem rgba(108, 117, 125, 0.5);
}
.btn-outline-success {
  color: #28a745;
  background-color: transparent;
  background-image: none;
  border-color: #28a745;
}
.btn-outline-success:hover {
  color: #fff;
  background-color: #28a745;
  border-color: #28a745;
}
.btn-outline-success:focus,
.btn-outline-success.focus {
  box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.5);
}
.btn-outline-success.disabled,
.btn-outline-success:disabled {
  color: #28a745;
  background-color: transparent;
}
.btn-outline-success:not(:disabled):not(.disabled):active,
.btn-outline-success:not(:disabled):not(.disabled).active,
.show > .btn-outline-success.dropdown-toggle {
  color: #fff;
  background-color: #28a745;
  border-color: #28a745;
}
.btn-outline-success:not(:disabled):not(.disabled):active:focus,
.btn-outline-success:not(:disabled):not(.disabled).active:focus,
.show > .btn-outline-success.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.5);
}
.btn-outline-info {
  color: #17a2b8;
  background-color: transparent;
  background-image: none;
  border-color: #17a2b8;
}
.btn-outline-info:hover {
  color: #fff;
  background-color: #17a2b8;
  border-color: #17a2b8;
}
.btn-outline-info:focus,
.btn-outline-info.focus {
  box-shadow: 0 0 0 0.2rem rgba(23, 162, 184, 0.5);
}
.btn-outline-info.disabled,
.btn-outline-info:disabled {
  color: #17a2b8;
  background-color: transparent;
}
.btn-outline-info:not(:disabled):not(.disabled):active,
.btn-outline-info:not(:disabled):not(.disabled).active,
.show > .btn-outline-info.dropdown-toggle {
  color: #fff;
  background-color: #17a2b8;
  border-color: #17a2b8;
}
.btn-outline-info:not(:disabled):not(.disabled):active:focus,
.btn-outline-info:not(:disabled):not(.disabled).active:focus,
.show > .btn-outline-info.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.2rem rgba(23, 162, 184, 0.5);
}
.btn-outline-warning {
  color: #ffc107;
  background-color: transparent;
  background-image: none;
  border-color: #ffc107;
}
.btn-outline-warning:hover {
  color: #212529;
  background-color: #ffc107;
  border-color: #ffc107;
}
.btn-outline-warning:focus,
.btn-outline-warning.focus {
  box-shadow: 0 0 0 0.2rem rgba(255, 193, 7, 0.5);
}
.btn-outline-warning.disabled,
.btn-outline-warning:disabled {
  color: #ffc107;
  background-color: transparent;
}
.btn-outline-warning:not(:disabled):not(.disabled):active,
.btn-outline-warning:not(:disabled):not(.disabled).active,
.show > .btn-outline-warning.dropdown-toggle {
  color: #212529;
  background-color: #ffc107;
  border-color: #ffc107;
}
.btn-outline-warning:not(:disabled):not(.disabled):active:focus,
.btn-outline-warning:not(:disabled):not(.disabled).active:focus,
.show > .btn-outline-warning.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.2rem rgba(255, 193, 7, 0.5);
}
.btn-outline-danger {
  color: #dc3545;
  background-color: transparent;
  background-image: none;
  border-color: #dc3545;
}
.btn-outline-danger:hover {
  color: #fff;
  background-color: #dc3545;
  border-color: #dc3545;
}
.btn-outline-danger:focus,
.btn-outline-danger.focus {
  box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.5);
}
.btn-outline-danger.disabled,
.btn-outline-danger:disabled {
  color: #dc3545;
  background-color: transparent;
}
.btn-outline-danger:not(:disabled):not(.disabled):active,
.btn-outline-danger:not(:disabled):not(.disabled).active,
.show > .btn-outline-danger.dropdown-toggle {
  color: #fff;
  background-color: #dc3545;
  border-color: #dc3545;
}
.btn-outline-danger:not(:disabled):not(.disabled):active:focus,
.btn-outline-danger:not(:disabled):not(.disabled).active:focus,
.show > .btn-outline-danger.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.5);
}
.btn-outline-light {
  color: #f8f9fa;
  background-color: transparent;
  background-image: none;
  border-color: #f8f9fa;
}
.btn-outline-light:hover {
  color: #212529;
  background-color: #f8f9fa;
  border-color: #f8f9fa;
}
.btn-outline-light:focus,
.btn-outline-light.focus {
  box-shadow: 0 0 0 0.2rem rgba(248, 249, 250, 0.5);
}
.btn-outline-light.disabled,
.btn-outline-light:disabled {
  color: #f8f9fa;
  background-color: transparent;
}
.btn-outline-light:not(:disabled):not(.disabled):active,
.btn-outline-light:not(:disabled):not(.disabled).active,
.show > .btn-outline-light.dropdown-toggle {
  color: #212529;
  background-color: #f8f9fa;
  border-color: #f8f9fa;
}
.btn-outline-light:not(:disabled):not(.disabled):active:focus,
.btn-outline-light:not(:disabled):not(.disabled).active:focus,
.show > .btn-outline-light.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.2rem rgba(248, 249, 250, 0.5);
}
.btn-outline-dark {
  color: #343a40;
  background-color: transparent;
  background-image: none;
  border-color: #343a40;
}
.btn-outline-dark:hover {
  color: #fff;
  background-color: #343a40;
  border-color: #343a40;
}
.btn-outline-dark:focus,
.btn-outline-dark.focus {
  box-shadow: 0 0 0 0.2rem rgba(52, 58, 64, 0.5);
}
.btn-outline-dark.disabled,
.btn-outline-dark:disabled {
  color: #343a40;
  background-color: transparent;
}
.btn-outline-dark:not(:disabled):not(.disabled):active,
.btn-outline-dark:not(:disabled):not(.disabled).active,
.show > .btn-outline-dark.dropdown-toggle {
  color: #fff;
  background-color: #343a40;
  border-color: #343a40;
}
.btn-outline-dark:not(:disabled):not(.disabled):active:focus,
.btn-outline-dark:not(:disabled):not(.disabled).active:focus,
.show > .btn-outline-dark.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.2rem rgba(52, 58, 64, 0.5);
}
.btn-link {
  font-weight: 400;
  color: #007bff;
  background-color: transparent;
}
.btn-link:hover {
  color: #0056b3;
  text-decoration: underline;
  background-color: transparent;
  border-color: transparent;
}
.btn-link:focus,
.btn-link.focus {
  text-decoration: underline;
  border-color: transparent;
  box-shadow: none;
}
.btn-link:disabled,
.btn-link.disabled {
  color: #6c757d;
  pointer-events: none;
}
.btn-lg,
.btn-group-lg > .btn {
  padding: 0.5rem 1rem;
  font-size: 1.25rem;
  line-height: 1.5;
  border-radius: 0.3rem;
}
.btn-sm,
.btn-group-sm > .btn {
  padding: 0.25rem 0.5rem;
  font-size: 0.875rem;
  line-height: 1.5;
  border-radius: 0.2rem;
}
.btn-block {
  display: block;
  width: 100%;
}
.btn-block + .btn-block {
  margin-top: 0.5rem;
}
input[type="submit"].btn-block,
input[type="reset"].btn-block,
input[type="button"].btn-block {
  width: 100%;
}
.fade {
  transition: opacity 0.15s linear;
}
@media screen and (prefers-reduced-motion: reduce) {
  .fade {
    transition: none;
  }
}
.fade:not(.show) {
  opacity: 0;
}
.collapse:not(.show) {
  display: none;
}
.collapsing {
  position: relative;
  height: 0;
  overflow: hidden;
  transition: height 0.35s ease;
}
@media screen and (prefers-reduced-motion: reduce) {
  .collapsing {
    transition: none;
  }
}
.dropup,
.dropright,
.dropdown,
.dropleft {
  position: relative;
}
.dropdown-toggle::after {
  display: inline-block;
  width: 0;
  height: 0;
  margin-left: 0.255em;
  vertical-align: 0.255em;
  content: "";
  border-top: 0.3em solid;
  border-right: 0.3em solid transparent;
  border-bottom: 0;
  border-left: 0.3em solid transparent;
}
.dropdown-toggle:empty::after {
  margin-left: 0;
}
.dropdown-menu {
  position: absolute;
  top: 100%;
  left: 0;
  z-index: 1000;
  display: none;
  float: left;
  min-width: 10rem;
  padding: 0.5rem 0;
  margin: 0.125rem 0 0;
  font-size: 1rem;
  color: #212529;
  text-align: left;
  list-style: none;
  background-color: #fff;
  background-clip: padding-box;
  border: 1px solid rgba(0, 0, 0, 0.15);
  border-radius: 0.25rem;
}
.dropdown-menu-right {
  right: 0;
  left: auto;
}
.dropup .dropdown-menu {
  top: auto;
  bottom: 100%;
  margin-top: 0;
  margin-bottom: 0.125rem;
}
.dropup .dropdown-toggle::after {
  display: inline-block;
  width: 0;
  height: 0;
  margin-left: 0.255em;
  vertical-align: 0.255em;
  content: "";
  border-top: 0;
  border-right: 0.3em solid transparent;
  border-bottom: 0.3em solid;
  border-left: 0.3em solid transparent;
}
.dropup .dropdown-toggle:empty::after {
  margin-left: 0;
}
.dropright .dropdown-menu {
  top: 0;
  right: auto;
  left: 100%;
  margin-top: 0;
  margin-left: 0.125rem;
}
.dropright .dropdown-toggle::after {
  display: inline-block;
  width: 0;
  height: 0;
  margin-left: 0.255em;
  vertical-align: 0.255em;
  content: "";
  border-top: 0.3em solid transparent;
  border-right: 0;
  border-bottom: 0.3em solid transparent;
  border-left: 0.3em solid;
}
.dropright .dropdown-toggle:empty::after {
  margin-left: 0;
}
.dropright .dropdown-toggle::after {
  vertical-align: 0;
}
.dropleft .dropdown-menu {
  top: 0;
  right: 100%;
  left: auto;
  margin-top: 0;
  margin-right: 0.125rem;
}
.dropleft .dropdown-toggle::after {
  display: inline-block;
  width: 0;
  height: 0;
  margin-left: 0.255em;
  vertical-align: 0.255em;
  content: "";
}
.dropleft .dropdown-toggle::after {
  display: none;
}
.dropleft .dropdown-toggle::before {
  display: inline-block;
  width: 0;
  height: 0;
  margin-right: 0.255em;
  vertical-align: 0.255em;
  content: "";
  border-top: 0.3em solid transparent;
  border-right: 0.3em solid;
  border-bottom: 0.3em solid transparent;
}
.dropleft .dropdown-toggle:empty::after {
  margin-left: 0;
}
.dropleft .dropdown-toggle::before {
  vertical-align: 0;
}
.dropdown-menu[x-placement^="top"],
.dropdown-menu[x-placement^="right"],
.dropdown-menu[x-placement^="bottom"],
.dropdown-menu[x-placement^="left"] {
  right: auto;
  bottom: auto;
}
.dropdown-divider {
  height: 0;
  margin: 0.5rem 0;
  overflow: hidden;
  border-top: 1px solid #e9ecef;
}
.dropdown-item {
  display: block;
  width: 100%;
  padding: 0.25rem 1.5rem;
  clear: both;
  font-weight: 400;
  color: #212529;
  text-align: inherit;
  white-space: nowrap;
  background-color: transparent;
  border: 0;
}
.dropdown-item:hover,
.dropdown-item:focus {
  color: #16181b;
  text-decoration: none;
  background-color: #f8f9fa;
}
.dropdown-item.active,
.dropdown-item:active {
  color: #fff;
  text-decoration: none;
  background-color: #007bff;
}
.dropdown-item.disabled,
.dropdown-item:disabled {
  color: #6c757d;
  background-color: transparent;
}
.dropdown-menu.show {
  display: block;
}
.dropdown-header {
  display: block;
  padding: 0.5rem 1.5rem;
  margin-bottom: 0;
  font-size: 0.875rem;
  color: #6c757d;
  white-space: nowrap;
}
.dropdown-item-text {
  display: block;
  padding: 0.25rem 1.5rem;
  color: #212529;
}
.btn-group,
.btn-group-vertical {
  position: relative;
  display: -ms-inline-flexbox;
  display: inline-flex;
  vertical-align: middle;
}
.btn-group > .btn,
.btn-group-vertical > .btn {
  position: relative;
  -ms-flex: 0 1 auto;
  flex: 0 1 auto;
}
.btn-group > .btn:hover,
.btn-group-vertical > .btn:hover {
  z-index: 1;
}
.btn-group > .btn:focus,
.btn-group > .btn:active,
.btn-group > .btn.active,
.btn-group-vertical > .btn:focus,
.btn-group-vertical > .btn:active,
.btn-group-vertical > .btn.active {
  z-index: 1;
}
.btn-group .btn + .btn,
.btn-group .btn + .btn-group,
.btn-group .btn-group + .btn,
.btn-group .btn-group + .btn-group,
.btn-group-vertical .btn + .btn,
.btn-group-vertical .btn + .btn-group,
.btn-group-vertical .btn-group + .btn,
.btn-group-vertical .btn-group + .btn-group {
  margin-left: -1px;
}
.btn-toolbar {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  -ms-flex-pack: start;
  justify-content: flex-start;
}
.btn-toolbar .input-group {
  width: auto;
}
.btn-group > .btn:first-child {
  margin-left: 0;
}
.btn-group > .btn:not(:last-child):not(.dropdown-toggle),
.btn-group > .btn-group:not(:last-child) > .btn {
  border-top-right-radius: 0;
  border-bottom-right-radius: 0;
}
.btn-group > .btn:not(:first-child),
.btn-group > .btn-group:not(:first-child) > .btn {
  border-top-left-radius: 0;
  border-bottom-left-radius: 0;
}
.dropdown-toggle-split {
  padding-right: 0.5625rem;
  padding-left: 0.5625rem;
}
.dropdown-toggle-split::after,
.dropup .dropdown-toggle-split::after,
.dropright .dropdown-toggle-split::after {
  margin-left: 0;
}
.dropleft .dropdown-toggle-split::before {
  margin-right: 0;
}
.btn-sm + .dropdown-toggle-split,
.btn-group-sm > .btn + .dropdown-toggle-split {
  padding-right: 0.375rem;
  padding-left: 0.375rem;
}
.btn-lg + .dropdown-toggle-split,
.btn-group-lg > .btn + .dropdown-toggle-split {
  padding-right: 0.75rem;
  padding-left: 0.75rem;
}
.btn-group-vertical {
  -ms-flex-direction: column;
  flex-direction: column;
  -ms-flex-align: start;
  align-items: flex-start;
  -ms-flex-pack: center;
  justify-content: center;
}
.btn-group-vertical .btn,
.btn-group-vertical .btn-group {
  width: 100%;
}
.btn-group-vertical > .btn + .btn,
.btn-group-vertical > .btn + .btn-group,
.btn-group-vertical > .btn-group + .btn,
.btn-group-vertical > .btn-group + .btn-group {
  margin-top: -1px;
  margin-left: 0;
}
.btn-group-vertical > .btn:not(:last-child):not(.dropdown-toggle),
.btn-group-vertical > .btn-group:not(:last-child) > .btn {
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}
.btn-group-vertical > .btn:not(:first-child),
.btn-group-vertical > .btn-group:not(:first-child) > .btn {
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}
.btn-group-toggle > .btn,
.btn-group-toggle > .btn-group > .btn {
  margin-bottom: 0;
}
.btn-group-toggle > .btn input[type="radio"],
.btn-group-toggle > .btn input[type="checkbox"],
.btn-group-toggle > .btn-group > .btn input[type="radio"],
.btn-group-toggle > .btn-group > .btn input[type="checkbox"] {
  position: absolute;
  clip: rect(0, 0, 0, 0);
  pointer-events: none;
}
.input-group {
  position: relative;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  -ms-flex-align: stretch;
  align-items: stretch;
  width: 100%;
}
.input-group > .form-control,
.input-group > .custom-select,
.input-group > .custom-file {
  position: relative;
  -ms-flex: 1 1 auto;
  flex: 1 1 auto;
  width: 1%;
  margin-bottom: 0;
}
.input-group > .form-control + .form-control,
.input-group > .form-control + .custom-select,
.input-group > .form-control + .custom-file,
.input-group > .custom-select + .form-control,
.input-group > .custom-select + .custom-select,
.input-group > .custom-select + .custom-file,
.input-group > .custom-file + .form-control,
.input-group > .custom-file + .custom-select,
.input-group > .custom-file + .custom-file {
  margin-left: -1px;
}
.input-group > .form-control:focus,
.input-group > .custom-select:focus,
.input-group > .custom-file .custom-file-input:focus ~ .custom-file-label {
  z-index: 3;
}
.input-group > .custom-file .custom-file-input:focus {
  z-index: 4;
}
.input-group > .form-control:not(:last-child),
.input-group > .custom-select:not(:last-child) {
  border-top-right-radius: 0;
  border-bottom-right-radius: 0;
}
.input-group > .form-control:not(:first-child),
.input-group > .custom-select:not(:first-child) {
  border-top-left-radius: 0;
  border-bottom-left-radius: 0;
}
.input-group > .custom-file {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-align: center;
  align-items: center;
}
.input-group > .custom-file:not(:last-child) .custom-file-label,
.input-group > .custom-file:not(:last-child) .custom-file-label::after {
  border-top-right-radius: 0;
  border-bottom-right-radius: 0;
}
.input-group > .custom-file:not(:first-child) .custom-file-label {
  border-top-left-radius: 0;
  border-bottom-left-radius: 0;
}
.input-group-prepend,
.input-group-append {
  display: -ms-flexbox;
  display: flex;
}
.input-group-prepend .btn,
.input-group-append .btn {
  position: relative;
  z-index: 2;
}
.input-group-prepend .btn + .btn,
.input-group-prepend .btn + .input-group-text,
.input-group-prepend .input-group-text + .input-group-text,
.input-group-prepend .input-group-text + .btn,
.input-group-append .btn + .btn,
.input-group-append .btn + .input-group-text,
.input-group-append .input-group-text + .input-group-text,
.input-group-append .input-group-text + .btn {
  margin-left: -1px;
}
.input-group-prepend {
  margin-right: -1px;
}
.input-group-append {
  margin-left: -1px;
}
.input-group-text {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-align: center;
  align-items: center;
  padding: 0.375rem 0.75rem;
  margin-bottom: 0;
  font-size: 1rem;
  font-weight: 400;
  line-height: 1.5;
  color: #495057;
  text-align: center;
  white-space: nowrap;
  background-color: #e9ecef;
  border: 1px solid #ced4da;
  border-radius: 0.25rem;
}
.input-group-text input[type="radio"],
.input-group-text input[type="checkbox"] {
  margin-top: 0;
}
.input-group-lg > .form-control,
.input-group-lg > .input-group-prepend > .input-group-text,
.input-group-lg > .input-group-append > .input-group-text,
.input-group-lg > .input-group-prepend > .btn,
.input-group-lg > .input-group-append > .btn {
  height: calc(2.875rem + 2px);
  padding: 0.5rem 1rem;
  font-size: 1.25rem;
  line-height: 1.5;
  border-radius: 0.3rem;
}
.input-group-sm > .form-control,
.input-group-sm > .input-group-prepend > .input-group-text,
.input-group-sm > .input-group-append > .input-group-text,
.input-group-sm > .input-group-prepend > .btn,
.input-group-sm > .input-group-append > .btn {
  height: calc(1.8125rem + 2px);
  padding: 0.25rem 0.5rem;
  font-size: 0.875rem;
  line-height: 1.5;
  border-radius: 0.2rem;
}
.input-group > .input-group-prepend > .btn,
.input-group > .input-group-prepend > .input-group-text,
.input-group > .input-group-append:not(:last-child) > .btn,
.input-group > .input-group-append:not(:last-child) > .input-group-text,
.input-group > .input-group-append:last-child > .btn:not(:last-child):not(.dropdown-toggle),
.input-group > .input-group-append:last-child > .input-group-text:not(:last-child) {
  border-top-right-radius: 0;
  border-bottom-right-radius: 0;
}
.input-group > .input-group-append > .btn,
.input-group > .input-group-append > .input-group-text,
.input-group > .input-group-prepend:not(:first-child) > .btn,
.input-group > .input-group-prepend:not(:first-child) > .input-group-text,
.input-group > .input-group-prepend:first-child > .btn:not(:first-child),
.input-group > .input-group-prepend:first-child > .input-group-text:not(:first-child) {
  border-top-left-radius: 0;
  border-bottom-left-radius: 0;
}
.custom-control {
  position: relative;
  display: block;
  min-height: 1.5rem;
  padding-left: 1.5rem;
}
.custom-control-inline {
  display: -ms-inline-flexbox;
  display: inline-flex;
  margin-right: 1rem;
}
.custom-control-input {
  position: absolute;
  z-index: -1;
  opacity: 0;
}
.custom-control-input:checked ~ .custom-control-label::before {
  color: #fff;
  background-color: #007bff;
}
.custom-control-input:focus ~ .custom-control-label::before {
  box-shadow: 0 0 0 1px #fff, 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
}
.custom-control-input:active ~ .custom-control-label::before {
  color: #fff;
  background-color: #b3d7ff;
}
.custom-control-input:disabled ~ .custom-control-label {
  color: #6c757d;
}
.custom-control-input:disabled ~ .custom-control-label::before {
  background-color: #e9ecef;
}
.custom-control-label {
  position: relative;
  margin-bottom: 0;
}
.custom-control-label::before {
  position: absolute;
  top: 0.25rem;
  left: -1.5rem;
  display: block;
  width: 1rem;
  height: 1rem;
  pointer-events: none;
  content: "";
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  background-color: #dee2e6;
}
.custom-control-label::after {
  position: absolute;
  top: 0.25rem;
  left: -1.5rem;
  display: block;
  width: 1rem;
  height: 1rem;
  content: "";
  background-repeat: no-repeat;
  background-position: center center;
  background-size: 50% 50%;
}
.custom-checkbox .custom-control-label::before {
  border-radius: 0.25rem;
}
.custom-checkbox .custom-control-input:checked ~ .custom-control-label::before {
  background-color: #007bff;
}
.custom-checkbox .custom-control-input:checked ~ .custom-control-label::after {
  background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3E%3Cpath fill='%23fff' d='M6.564.75l-3.59 3.612-1.538-1.55L0 4.26 2.974 7.25 8 2.193z'/%3E%3C/svg%3E");
}
.custom-checkbox .custom-control-input:indeterminate ~ .custom-control-label::before {
  background-color: #007bff;
}
.custom-checkbox .custom-control-input:indeterminate ~ .custom-control-label::after {
  background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 4 4'%3E%3Cpath stroke='%23fff' d='M0 2h4'/%3E%3C/svg%3E");
}
.custom-checkbox .custom-control-input:disabled:checked ~ .custom-control-label::before {
  background-color: rgba(0, 123, 255, 0.5);
}
.custom-checkbox .custom-control-input:disabled:indeterminate ~ .custom-control-label::before {
  background-color: rgba(0, 123, 255, 0.5);
}
.custom-radio .custom-control-label::before {
  border-radius: 50%;
}
.custom-radio .custom-control-input:checked ~ .custom-control-label::before {
  background-color: #007bff;
}
.custom-radio .custom-control-input:checked ~ .custom-control-label::after {
  background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3E%3Ccircle r='3' fill='%23fff'/%3E%3C/svg%3E");
}
.custom-radio .custom-control-input:disabled:checked ~ .custom-control-label::before {
  background-color: rgba(0, 123, 255, 0.5);
}
.custom-select {
  display: inline-block;
  width: 100%;
  height: calc(2.25rem + 2px);
  padding: 0.375rem 1.75rem 0.375rem 0.75rem;
  line-height: 1.5;
  color: #495057;
  vertical-align: middle;
  background: #fff url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 4 5'%3E%3Cpath fill='%23343a40' d='M2 0L0 2h4zm0 5L0 3h4z'/%3E%3C/svg%3E") no-repeat right 0.75rem center;
  background-size: 8px 10px;
  border: 1px solid #ced4da;
  border-radius: 0.25rem;
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
}
.custom-select:focus {
  border-color: #80bdff;
  outline: 0;
  box-shadow: 0 0 0 0.2rem rgba(128, 189, 255, 0.5);
}
.custom-select:focus::-ms-value {
  color: #495057;
  background-color: #fff;
}
.custom-select[multiple],
.custom-select[size]:not([size="1"]) {
  height: auto;
  padding-right: 0.75rem;
  background-image: none;
}
.custom-select:disabled {
  color: #6c757d;
  background-color: #e9ecef;
}
.custom-select::-ms-expand {
  opacity: 0;
}
.custom-select-sm {
  height: calc(1.8125rem + 2px);
  padding-top: 0.375rem;
  padding-bottom: 0.375rem;
  font-size: 75%;
}
.custom-select-lg {
  height: calc(2.875rem + 2px);
  padding-top: 0.375rem;
  padding-bottom: 0.375rem;
  font-size: 125%;
}
.custom-file {
  position: relative;
  display: inline-block;
  width: 100%;
  height: calc(2.25rem + 2px);
  margin-bottom: 0;
}
.custom-file-input {
  position: relative;
  z-index: 2;
  width: 100%;
  height: calc(2.25rem + 2px);
  margin: 0;
  opacity: 0;
}
.custom-file-input:focus ~ .custom-file-label {
  border-color: #80bdff;
  box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
}
.custom-file-input:focus ~ .custom-file-label::after {
  border-color: #80bdff;
}
.custom-file-input:disabled ~ .custom-file-label {
  background-color: #e9ecef;
}
.custom-file-input:lang(en) ~ .custom-file-label::after {
  content: "Browse";
}
.custom-file-label {
  position: absolute;
  top: 0;
  right: 0;
  left: 0;
  z-index: 1;
  height: calc(2.25rem + 2px);
  padding: 0.375rem 0.75rem;
  line-height: 1.5;
  color: #495057;
  background-color: #fff;
  border: 1px solid #ced4da;
  border-radius: 0.25rem;
}
.custom-file-label::after {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  z-index: 3;
  display: block;
  height: 2.25rem;
  padding: 0.375rem 0.75rem;
  line-height: 1.5;
  color: #495057;
  content: "Browse";
  background-color: #e9ecef;
  border-left: 1px solid #ced4da;
  border-radius: 0 0.25rem 0.25rem 0;
}
.custom-range {
  width: 100%;
  padding-left: 0;
  background-color: transparent;
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
}
.custom-range:focus {
  outline: none;
}
.custom-range:focus::-webkit-slider-thumb {
  box-shadow: 0 0 0 1px #fff, 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
}
.custom-range:focus::-moz-range-thumb {
  box-shadow: 0 0 0 1px #fff, 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
}
.custom-range:focus::-ms-thumb {
  box-shadow: 0 0 0 1px #fff, 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
}
.custom-range::-moz-focus-outer {
  border: 0;
}
.custom-range::-webkit-slider-thumb {
  width: 1rem;
  height: 1rem;
  margin-top: -0.25rem;
  background-color: #007bff;
  border: 0;
  border-radius: 1rem;
  transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
  -webkit-appearance: none;
  appearance: none;
}
@media screen and (prefers-reduced-motion: reduce) {
  .custom-range::-webkit-slider-thumb {
    transition: none;
  }
}
.custom-range::-webkit-slider-thumb:active {
  background-color: #b3d7ff;
}
.custom-range::-webkit-slider-runnable-track {
  width: 100%;
  height: 0.5rem;
  color: transparent;
  cursor: pointer;
  background-color: #dee2e6;
  border-color: transparent;
  border-radius: 1rem;
}
.custom-range::-moz-range-thumb {
  width: 1rem;
  height: 1rem;
  background-color: #007bff;
  border: 0;
  border-radius: 1rem;
  transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
  -moz-appearance: none;
  appearance: none;
}
@media screen and (prefers-reduced-motion: reduce) {
  .custom-range::-moz-range-thumb {
    transition: none;
  }
}
.custom-range::-moz-range-thumb:active {
  background-color: #b3d7ff;
}
.custom-range::-moz-range-track {
  width: 100%;
  height: 0.5rem;
  color: transparent;
  cursor: pointer;
  background-color: #dee2e6;
  border-color: transparent;
  border-radius: 1rem;
}
.custom-range::-ms-thumb {
  width: 1rem;
  height: 1rem;
  margin-top: 0;
  margin-right: 0.2rem;
  margin-left: 0.2rem;
  background-color: #007bff;
  border: 0;
  border-radius: 1rem;
  transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
  appearance: none;
}
@media screen and (prefers-reduced-motion: reduce) {
  .custom-range::-ms-thumb {
    transition: none;
  }
}
.custom-range::-ms-thumb:active {
  background-color: #b3d7ff;
}
.custom-range::-ms-track {
  width: 100%;
  height: 0.5rem;
  color: transparent;
  cursor: pointer;
  background-color: transparent;
  border-color: transparent;
  border-width: 0.5rem;
}
.custom-range::-ms-fill-lower {
  background-color: #dee2e6;
  border-radius: 1rem;
}
.custom-range::-ms-fill-upper {
  margin-right: 15px;
  background-color: #dee2e6;
  border-radius: 1rem;
}
.custom-control-label::before,
.custom-file-label,
.custom-select {
  transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}
@media screen and (prefers-reduced-motion: reduce) {
  .custom-control-label::before,
  .custom-file-label,
  .custom-select {
    transition: none;
  }
}
.nav {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  padding-left: 0;
  margin-bottom: 0;
  list-style: none;
}
.nav-link {
  display: block;
  padding: 0.5rem 1rem;
}
.nav-link:hover,
.nav-link:focus {
  text-decoration: none;
}
.nav-link.disabled {
  color: #6c757d;
}
.nav-tabs {
  border-bottom: 1px solid #dee2e6;
}
.nav-tabs .nav-item {
  margin-bottom: -1px;
}
.nav-tabs .nav-link {
  border: 1px solid transparent;
  border-top-left-radius: 0.25rem;
  border-top-right-radius: 0.25rem;
}
.nav-tabs .nav-link:hover,
.nav-tabs .nav-link:focus {
  border-color: #e9ecef #e9ecef #dee2e6;
}
.nav-tabs .nav-link.disabled {
  color: #6c757d;
  background-color: transparent;
  border-color: transparent;
}
.nav-tabs .nav-link.active,
.nav-tabs .nav-item.show .nav-link {
  color: #495057;
  background-color: #fff;
  border-color: #dee2e6 #dee2e6 #fff;
}
.nav-tabs .dropdown-menu {
  margin-top: -1px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}
.nav-pills .nav-link {
  border-radius: 0.25rem;
}
.nav-pills .nav-link.active,
.nav-pills .show > .nav-link {
  color: #fff;
  background-color: #007bff;
}
.nav-fill .nav-item {
  -ms-flex: 1 1 auto;
  flex: 1 1 auto;
  text-align: center;
}
.nav-justified .nav-item {
  -ms-flex-preferred-size: 0;
  flex-basis: 0;
  -ms-flex-positive: 1;
  flex-grow: 1;
  text-align: center;
}
.tab-content > .tab-pane {
  display: none;
}
.tab-content > .active {
  display: block;
}
.navbar {
  position: relative;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  -ms-flex-align: center;
  align-items: center;
  -ms-flex-pack: justify;
  justify-content: space-between;
  padding: 0.5rem 1rem;
}
.navbar > .container,
.navbar > .container-fluid {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  -ms-flex-align: center;
  align-items: center;
  -ms-flex-pack: justify;
  justify-content: space-between;
}
.navbar-brand {
  display: inline-block;
  padding-top: 0.3125rem;
  padding-bottom: 0.3125rem;
  margin-right: 1rem;
  font-size: 1.25rem;
  line-height: inherit;
  white-space: nowrap;
}
.navbar-brand:hover,
.navbar-brand:focus {
  text-decoration: none;
}
.navbar-nav {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-direction: column;
  flex-direction: column;
  padding-left: 0;
  margin-bottom: 0;
  list-style: none;
}
.navbar-nav .nav-link {
  padding-right: 0;
  padding-left: 0;
}
.navbar-nav .dropdown-menu {
  position: static;
  float: none;
}
.navbar-text {
  display: inline-block;
  padding-top: 0.5rem;
  padding-bottom: 0.5rem;
}
.navbar-collapse {
  -ms-flex-preferred-size: 100%;
  flex-basis: 100%;
  -ms-flex-positive: 1;
  flex-grow: 1;
  -ms-flex-align: center;
  align-items: center;
}
.navbar-toggler {
  padding: 0.25rem 0.75rem;
  font-size: 1.25rem;
  line-height: 1;
  background-color: transparent;
  border: 1px solid transparent;
  border-radius: 0.25rem;
}
.navbar-toggler:hover,
.navbar-toggler:focus {
  text-decoration: none;
}
.navbar-toggler:not(:disabled):not(.disabled) {
  cursor: pointer;
}
.navbar-toggler-icon {
  display: inline-block;
  width: 1.5em;
  height: 1.5em;
  vertical-align: middle;
  content: "";
  background: no-repeat center center;
  background-size: 100% 100%;
}
@media (max-width: 575.98px) {
  .navbar-expand-sm > .container,
  .navbar-expand-sm > .container-fluid {
    padding-right: 0;
    padding-left: 0;
  }
}
@media (min-width: 576px) {
  .navbar-expand-sm {
    -ms-flex-flow: row nowrap;
    flex-flow: row nowrap;
    -ms-flex-pack: start;
    justify-content: flex-start;
  }
  .navbar-expand-sm .navbar-nav {
    -ms-flex-direction: row;
    flex-direction: row;
  }
  .navbar-expand-sm .navbar-nav .dropdown-menu {
    position: absolute;
  }
  .navbar-expand-sm .navbar-nav .nav-link {
    padding-right: 0.5rem;
    padding-left: 0.5rem;
  }
  .navbar-expand-sm > .container,
  .navbar-expand-sm > .container-fluid {
    -ms-flex-wrap: nowrap;
    flex-wrap: nowrap;
  }
  .navbar-expand-sm .navbar-collapse {
    display: -ms-flexbox !important;
    display: flex !important;
    -ms-flex-preferred-size: auto;
    flex-basis: auto;
  }
  .navbar-expand-sm .navbar-toggler {
    display: none;
  }
}
@media (max-width: 767.98px) {
  .navbar-expand-md > .container,
  .navbar-expand-md > .container-fluid {
    padding-right: 0;
    padding-left: 0;
  }
}
@media (min-width: 768px) {
  .navbar-expand-md {
    -ms-flex-flow: row nowrap;
    flex-flow: row nowrap;
    -ms-flex-pack: start;
    justify-content: flex-start;
  }
  .navbar-expand-md .navbar-nav {
    -ms-flex-direction: row;
    flex-direction: row;
  }
  .navbar-expand-md .navbar-nav .dropdown-menu {
    position: absolute;
  }
  .navbar-expand-md .navbar-nav .nav-link {
    padding-right: 0.5rem;
    padding-left: 0.5rem;
  }
  .navbar-expand-md > .container,
  .navbar-expand-md > .container-fluid {
    -ms-flex-wrap: nowrap;
    flex-wrap: nowrap;
  }
  .navbar-expand-md .navbar-collapse {
    display: -ms-flexbox !important;
    display: flex !important;
    -ms-flex-preferred-size: auto;
    flex-basis: auto;
  }
  .navbar-expand-md .navbar-toggler {
    display: none;
  }
}
@media (max-width: 991.98px) {
  .navbar-expand-lg > .container,
  .navbar-expand-lg > .container-fluid {
    padding-right: 0;
    padding-left: 0;
  }
}
@media (min-width: 992px) {
  .navbar-expand-lg {
    -ms-flex-flow: row nowrap;
    flex-flow: row nowrap;
    -ms-flex-pack: start;
    justify-content: flex-start;
  }
  .navbar-expand-lg .navbar-nav {
    -ms-flex-direction: row;
    flex-direction: row;
  }
  .navbar-expand-lg .navbar-nav .dropdown-menu {
    position: absolute;
  }
  .navbar-expand-lg .navbar-nav .nav-link {
    padding-right: 0.5rem;
    padding-left: 0.5rem;
  }
  .navbar-expand-lg > .container,
  .navbar-expand-lg > .container-fluid {
    -ms-flex-wrap: nowrap;
    flex-wrap: nowrap;
  }
  .navbar-expand-lg .navbar-collapse {
    display: -ms-flexbox !important;
    display: flex !important;
    -ms-flex-preferred-size: auto;
    flex-basis: auto;
  }
  .navbar-expand-lg .navbar-toggler {
    display: none;
  }
}
@media (max-width: 1199.98px) {
  .navbar-expand-xl > .container,
  .navbar-expand-xl > .container-fluid {
    padding-right: 0;
    padding-left: 0;
  }
}
@media (min-width: 1200px) {
  .navbar-expand-xl {
    -ms-flex-flow: row nowrap;
    flex-flow: row nowrap;
    -ms-flex-pack: start;
    justify-content: flex-start;
  }
  .navbar-expand-xl .navbar-nav {
    -ms-flex-direction: row;
    flex-direction: row;
  }
  .navbar-expand-xl .navbar-nav .dropdown-menu {
    position: absolute;
  }
  .navbar-expand-xl .navbar-nav .nav-link {
    padding-right: 0.5rem;
    padding-left: 0.5rem;
  }
  .navbar-expand-xl > .container,
  .navbar-expand-xl > .container-fluid {
    -ms-flex-wrap: nowrap;
    flex-wrap: nowrap;
  }
  .navbar-expand-xl .navbar-collapse {
    display: -ms-flexbox !important;
    display: flex !important;
    -ms-flex-preferred-size: auto;
    flex-basis: auto;
  }
  .navbar-expand-xl .navbar-toggler {
    display: none;
  }
}
.navbar-expand {
  -ms-flex-flow: row nowrap;
  flex-flow: row nowrap;
  -ms-flex-pack: start;
  justify-content: flex-start;
}
.navbar-expand > .container,
.navbar-expand > .container-fluid {
  padding-right: 0;
  padding-left: 0;
}
.navbar-expand .navbar-nav {
  -ms-flex-direction: row;
  flex-direction: row;
}
.navbar-expand .navbar-nav .dropdown-menu {
  position: absolute;
}
.navbar-expand .navbar-nav .nav-link {
  padding-right: 0.5rem;
  padding-left: 0.5rem;
}
.navbar-expand > .container,
.navbar-expand > .container-fluid {
  -ms-flex-wrap: nowrap;
  flex-wrap: nowrap;
}
.navbar-expand .navbar-collapse {
  display: -ms-flexbox !important;
  display: flex !important;
  -ms-flex-preferred-size: auto;
  flex-basis: auto;
}
.navbar-expand .navbar-toggler {
  display: none;
}
.navbar-light .navbar-brand {
  color: rgba(0, 0, 0, 0.9);
}
.navbar-light .navbar-brand:hover,
.navbar-light .navbar-brand:focus {
  color: rgba(0, 0, 0, 0.9);
}
.navbar-light .navbar-nav .nav-link {
  color: rgba(0, 0, 0, 0.5);
}
.navbar-light .navbar-nav .nav-link:hover,
.navbar-light .navbar-nav .nav-link:focus {
  color: rgba(0, 0, 0, 0.7);
}
.navbar-light .navbar-nav .nav-link.disabled {
  color: rgba(0, 0, 0, 0.3);
}
.navbar-light .navbar-nav .show > .nav-link,
.navbar-light .navbar-nav .active > .nav-link,
.navbar-light .navbar-nav .nav-link.show,
.navbar-light .navbar-nav .nav-link.active {
  color: rgba(0, 0, 0, 0.9);
}
.navbar-light .navbar-toggler {
  color: rgba(0, 0, 0, 0.5);
  border-color: rgba(0, 0, 0, 0.1);
}
.navbar-light .navbar-toggler-icon {
  background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(0, 0, 0, 0.5)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E");
}
.navbar-light .navbar-text {
  color: rgba(0, 0, 0, 0.5);
}
.navbar-light .navbar-text a {
  color: rgba(0, 0, 0, 0.9);
}
.navbar-light .navbar-text a:hover,
.navbar-light .navbar-text a:focus {
  color: rgba(0, 0, 0, 0.9);
}
.navbar-dark .navbar-brand {
  color: #fff;
}
.navbar-dark .navbar-brand:hover,
.navbar-dark .navbar-brand:focus {
  color: #fff;
}
.navbar-dark .navbar-nav .nav-link {
  color: rgba(255, 255, 255, 0.5);
}
.navbar-dark .navbar-nav .nav-link:hover,
.navbar-dark .navbar-nav .nav-link:focus {
  color: rgba(255, 255, 255, 0.75);
}
.navbar-dark .navbar-nav .nav-link.disabled {
  color: rgba(255, 255, 255, 0.25);
}
.navbar-dark .navbar-nav .show > .nav-link,
.navbar-dark .navbar-nav .active > .nav-link,
.navbar-dark .navbar-nav .nav-link.show,
.navbar-dark .navbar-nav .nav-link.active {
  color: #fff;
}
.navbar-dark .navbar-toggler {
  color: rgba(255, 255, 255, 0.5);
  border-color: rgba(255, 255, 255, 0.1);
}
.navbar-dark .navbar-toggler-icon {
  background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(255, 255, 255, 0.5)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E");
}
.navbar-dark .navbar-text {
  color: rgba(255, 255, 255, 0.5);
}
.navbar-dark .navbar-text a {
  color: #fff;
}
.navbar-dark .navbar-text a:hover,
.navbar-dark .navbar-text a:focus {
  color: #fff;
}
.card {
  position: relative;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-direction: column;
  flex-direction: column;
  min-width: 0;
  word-wrap: break-word;
  background-color: #fff;
  background-clip: border-box;
  border: 1px solid rgba(0, 0, 0, 0.125);
  border-radius: 0.25rem;
}
.card > hr {
  margin-right: 0;
  margin-left: 0;
}
.card > .list-group:first-child .list-group-item:first-child {
  border-top-left-radius: 0.25rem;
  border-top-right-radius: 0.25rem;
}
.card > .list-group:last-child .list-group-item:last-child {
  border-bottom-right-radius: 0.25rem;
  border-bottom-left-radius: 0.25rem;
}
.card-body {
  -ms-flex: 1 1 auto;
  flex: 1 1 auto;
  padding: 1.25rem;
}
.card-title {
  margin-bottom: 0.75rem;
}
.card-subtitle {
  margin-top: -0.375rem;
  margin-bottom: 0;
}
.card-text:last-child {
  margin-bottom: 0;
}
.card-link:hover {
  text-decoration: none;
}
.card-link + .card-link {
  margin-left: 1.25rem;
}
.card-header {
  padding: 0.75rem 1.25rem;
  margin-bottom: 0;
  background-color: rgba(0, 0, 0, 0.03);
  border-bottom: 1px solid rgba(0, 0, 0, 0.125);
}
.card-header:first-child {
  border-radius: calc(0.25rem - 1px) calc(0.25rem - 1px) 0 0;
}
.card-header + .list-group .list-group-item:first-child {
  border-top: 0;
}
.card-footer {
  padding: 0.75rem 1.25rem;
  background-color: rgba(0, 0, 0, 0.03);
  border-top: 1px solid rgba(0, 0, 0, 0.125);
}
.card-footer:last-child {
  border-radius: 0 0 calc(0.25rem - 1px) calc(0.25rem - 1px);
}
.card-header-tabs {
  margin-right: -0.625rem;
  margin-bottom: -0.75rem;
  margin-left: -0.625rem;
  border-bottom: 0;
}
.card-header-pills {
  margin-right: -0.625rem;
  margin-left: -0.625rem;
}
.card-img-overlay {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  padding: 1.25rem;
}
.card-img {
  width: 100%;
  border-radius: calc(0.25rem - 1px);
}
.card-img-top {
  width: 100%;
  border-top-left-radius: calc(0.25rem - 1px);
  border-top-right-radius: calc(0.25rem - 1px);
}
.card-img-bottom {
  width: 100%;
  border-bottom-right-radius: calc(0.25rem - 1px);
  border-bottom-left-radius: calc(0.25rem - 1px);
}
.card-deck {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-direction: column;
  flex-direction: column;
}
.card-deck .card {
  margin-bottom: 15px;
}
@media (min-width: 576px) {
  .card-deck {
    -ms-flex-flow: row wrap;
    flex-flow: row wrap;
    margin-right: -15px;
    margin-left: -15px;
  }
  .card-deck .card {
    display: -ms-flexbox;
    display: flex;
    -ms-flex: 1 0 0%;
    flex: 1 0 0%;
    -ms-flex-direction: column;
    flex-direction: column;
    margin-right: 15px;
    margin-bottom: 0;
    margin-left: 15px;
  }
}
.card-group {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-direction: column;
  flex-direction: column;
}
.card-group > .card {
  margin-bottom: 15px;
}
@media (min-width: 576px) {
  .card-group {
    -ms-flex-flow: row wrap;
    flex-flow: row wrap;
  }
  .card-group > .card {
    -ms-flex: 1 0 0%;
    flex: 1 0 0%;
    margin-bottom: 0;
  }
  .card-group > .card + .card {
    margin-left: 0;
    border-left: 0;
  }
  .card-group > .card:first-child {
    border-top-right-radius: 0;
    border-bottom-right-radius: 0;
  }
  .card-group > .card:first-child .card-img-top,
  .card-group > .card:first-child .card-header {
    border-top-right-radius: 0;
  }
  .card-group > .card:first-child .card-img-bottom,
  .card-group > .card:first-child .card-footer {
    border-bottom-right-radius: 0;
  }
  .card-group > .card:last-child {
    border-top-left-radius: 0;
    border-bottom-left-radius: 0;
  }
  .card-group > .card:last-child .card-img-top,
  .card-group > .card:last-child .card-header {
    border-top-left-radius: 0;
  }
  .card-group > .card:last-child .card-img-bottom,
  .card-group > .card:last-child .card-footer {
    border-bottom-left-radius: 0;
  }
  .card-group > .card:only-child {
    border-radius: 0.25rem;
  }
  .card-group > .card:only-child .card-img-top,
  .card-group > .card:only-child .card-header {
    border-top-left-radius: 0.25rem;
    border-top-right-radius: 0.25rem;
  }
  .card-group > .card:only-child .card-img-bottom,
  .card-group > .card:only-child .card-footer {
    border-bottom-right-radius: 0.25rem;
    border-bottom-left-radius: 0.25rem;
  }
  .card-group > .card:not(:first-child):not(:last-child):not(:only-child) {
    border-radius: 0;
  }
  .card-group > .card:not(:first-child):not(:last-child):not(:only-child) .card-img-top,
  .card-group > .card:not(:first-child):not(:last-child):not(:only-child) .card-img-bottom,
  .card-group > .card:not(:first-child):not(:last-child):not(:only-child) .card-header,
  .card-group > .card:not(:first-child):not(:last-child):not(:only-child) .card-footer {
    border-radius: 0;
  }
}
.card-columns .card {
  margin-bottom: 0.75rem;
}
@media (min-width: 576px) {
  .card-columns {
    -webkit-column-count: 3;
    -moz-column-count: 3;
    column-count: 3;
    -webkit-column-gap: 1.25rem;
    -moz-column-gap: 1.25rem;
    column-gap: 1.25rem;
    orphans: 1;
    widows: 1;
  }
  .card-columns .card {
    display: inline-block;
    width: 100%;
  }
}
.accordion .card:not(:first-of-type):not(:last-of-type) {
  border-bottom: 0;
  border-radius: 0;
}
.accordion .card:not(:first-of-type) .card-header:first-child {
  border-radius: 0;
}
.accordion .card:first-of-type {
  border-bottom: 0;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}
.accordion .card:last-of-type {
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}
.breadcrumb {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  padding: 0.75rem 1rem;
  margin-bottom: 1rem;
  list-style: none;
  background-color: #e9ecef;
  border-radius: 0.25rem;
}
.breadcrumb-item + .breadcrumb-item {
  padding-left: 0.5rem;
}
.breadcrumb-item + .breadcrumb-item::before {
  display: inline-block;
  padding-right: 0.5rem;
  color: #6c757d;
  content: "/";
}
.breadcrumb-item + .breadcrumb-item:hover::before {
  text-decoration: underline;
}
.breadcrumb-item + .breadcrumb-item:hover::before {
  text-decoration: none;
}
.breadcrumb-item.active {
  color: #6c757d;
}
.pagination {
  display: -ms-flexbox;
  display: flex;
  padding-left: 0;
  list-style: none;
  border-radius: 0.25rem;
}
.page-link {
  position: relative;
  display: block;
  padding: 0.5rem 0.75rem;
  margin-left: -1px;
  line-height: 1.25;
  color: #007bff;
  background-color: #fff;
  border: 1px solid #dee2e6;
}
.page-link:hover {
  z-index: 2;
  color: #0056b3;
  text-decoration: none;
  background-color: #e9ecef;
  border-color: #dee2e6;
}
.page-link:focus {
  z-index: 2;
  outline: 0;
  box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
}
.page-link:not(:disabled):not(.disabled) {
  cursor: pointer;
}
.page-item:first-child .page-link {
  margin-left: 0;
  border-top-left-radius: 0.25rem;
  border-bottom-left-radius: 0.25rem;
}
.page-item:last-child .page-link {
  border-top-right-radius: 0.25rem;
  border-bottom-right-radius: 0.25rem;
}
.page-item.active .page-link {
  z-index: 1;
  color: #fff;
  background-color: #007bff;
  border-color: #007bff;
}
.page-item.disabled .page-link {
  color: #6c757d;
  pointer-events: none;
  cursor: auto;
  background-color: #fff;
  border-color: #dee2e6;
}
.pagination-lg .page-link {
  padding: 0.75rem 1.5rem;
  font-size: 1.25rem;
  line-height: 1.5;
}
.pagination-lg .page-item:first-child .page-link {
  border-top-left-radius: 0.3rem;
  border-bottom-left-radius: 0.3rem;
}
.pagination-lg .page-item:last-child .page-link {
  border-top-right-radius: 0.3rem;
  border-bottom-right-radius: 0.3rem;
}
.pagination-sm .page-link {
  padding: 0.25rem 0.5rem;
  font-size: 0.875rem;
  line-height: 1.5;
}
.pagination-sm .page-item:first-child .page-link {
  border-top-left-radius: 0.2rem;
  border-bottom-left-radius: 0.2rem;
}
.pagination-sm .page-item:last-child .page-link {
  border-top-right-radius: 0.2rem;
  border-bottom-right-radius: 0.2rem;
}
.badge {
  display: inline-block;
  padding: 0.25em 0.4em;
  font-size: 75%;
  font-weight: 700;
  line-height: 1;
  text-align: center;
  white-space: nowrap;
  vertical-align: baseline;
  border-radius: 0.25rem;
}
.badge:empty {
  display: none;
}
.btn .badge {
  position: relative;
  top: -1px;
}
.badge-pill {
  padding-right: 0.6em;
  padding-left: 0.6em;
  border-radius: 10rem;
}
.badge-primary {
  color: #fff;
  background-color: #007bff;
}
.badge-primary[href]:hover,
.badge-primary[href]:focus {
  color: #fff;
  text-decoration: none;
  background-color: #0062cc;
}
.badge-secondary {
  color: #fff;
  background-color: #6c757d;
}
.badge-secondary[href]:hover,
.badge-secondary[href]:focus {
  color: #fff;
  text-decoration: none;
  background-color: #545b62;
}
.badge-success {
  color: #fff;
  background-color: #28a745;
}
.badge-success[href]:hover,
.badge-success[href]:focus {
  color: #fff;
  text-decoration: none;
  background-color: #1e7e34;
}
.badge-info {
  color: #fff;
  background-color: #17a2b8;
}
.badge-info[href]:hover,
.badge-info[href]:focus {
  color: #fff;
  text-decoration: none;
  background-color: #117a8b;
}
.badge-warning {
  color: #212529;
  background-color: #ffc107;
}
.badge-warning[href]:hover,
.badge-warning[href]:focus {
  color: #212529;
  text-decoration: none;
  background-color: #d39e00;
}
.badge-danger {
  color: #fff;
  background-color: #dc3545;
}
.badge-danger[href]:hover,
.badge-danger[href]:focus {
  color: #fff;
  text-decoration: none;
  background-color: #bd2130;
}
.badge-light {
  color: #212529;
  background-color: #f8f9fa;
}
.badge-light[href]:hover,
.badge-light[href]:focus {
  color: #212529;
  text-decoration: none;
  background-color: #dae0e5;
}
.badge-dark {
  color: #fff;
  background-color: #343a40;
}
.badge-dark[href]:hover,
.badge-dark[href]:focus {
  color: #fff;
  text-decoration: none;
  background-color: #1d2124;
}
.jumbotron {
  padding: 2rem 1rem;
  margin-bottom: 2rem;
  background-color: #e9ecef;
  border-radius: 0.3rem;
}
@media (min-width: 576px) {
  .jumbotron {
    padding: 4rem 2rem;
  }
}
.jumbotron-fluid {
  padding-right: 0;
  padding-left: 0;
  border-radius: 0;
}
.alert {
  position: relative;
  padding: 0.75rem 1.25rem;
  margin-bottom: 1rem;
  border: 1px solid transparent;
  border-radius: 0.25rem;
}
.alert-heading {
  color: inherit;
}
.alert-link {
  font-weight: 700;
}
.alert-dismissible {
  padding-right: 4rem;
}
.alert-dismissible .close {
  position: absolute;
  top: 0;
  right: 0;
  padding: 0.75rem 1.25rem;
  color: inherit;
}
.alert-primary {
  color: #004085;
  background-color: #cce5ff;
  border-color: #b8daff;
}
.alert-primary hr {
  border-top-color: #9fcdff;
}
.alert-primary .alert-link {
  color: #002752;
}
.alert-secondary {
  color: #383d41;
  background-color: #e2e3e5;
  border-color: #d6d8db;
}
.alert-secondary hr {
  border-top-color: #c8cbcf;
}
.alert-secondary .alert-link {
  color: #202326;
}
.alert-success {
  color: #155724;
  background-color: #d4edda;
  border-color: #c3e6cb;
}
.alert-success hr {
  border-top-color: #b1dfbb;
}
.alert-success .alert-link {
  color: #0b2e13;
}
.alert-info {
  color: #0c5460;
  background-color: #d1ecf1;
  border-color: #bee5eb;
}
.alert-info hr {
  border-top-color: #abdde5;
}
.alert-info .alert-link {
  color: #062c33;
}
.alert-warning {
  color: #856404;
  background-color: #fff3cd;
  border-color: #ffeeba;
}
.alert-warning hr {
  border-top-color: #ffe8a1;
}
.alert-warning .alert-link {
  color: #533f03;
}
.alert-danger {
  color: #721c24;
  background-color: #f8d7da;
  border-color: #f5c6cb;
}
.alert-danger hr {
  border-top-color: #f1b0b7;
}
.alert-danger .alert-link {
  color: #491217;
}
.alert-light {
  color: #818182;
  background-color: #fefefe;
  border-color: #fdfdfe;
}
.alert-light hr {
  border-top-color: #ececf6;
}
.alert-light .alert-link {
  color: #686868;
}
.alert-dark {
  color: #1b1e21;
  background-color: #d6d8d9;
  border-color: #c6c8ca;
}
.alert-dark hr {
  border-top-color: #b9bbbe;
}
.alert-dark .alert-link {
  color: #040505;
}
@-webkit-keyframes progress-bar-stripes {
  from {
    background-position: 1rem 0;
  }
  to {
    background-position: 0 0;
  }
}
@keyframes progress-bar-stripes {
  from {
    background-position: 1rem 0;
  }
  to {
    background-position: 0 0;
  }
}
.progress {
  display: -ms-flexbox;
  display: flex;
  height: 1rem;
  overflow: hidden;
  font-size: 0.75rem;
  background-color: #e9ecef;
  border-radius: 0.25rem;
}
.progress-bar {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-direction: column;
  flex-direction: column;
  -ms-flex-pack: center;
  justify-content: center;
  color: #fff;
  text-align: center;
  white-space: nowrap;
  background-color: #007bff;
  transition: width 0.6s ease;
}
@media screen and (prefers-reduced-motion: reduce) {
  .progress-bar {
    transition: none;
  }
}
.progress-bar-striped {
  background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-size: 1rem 1rem;
}
.progress-bar-animated {
  -webkit-animation: progress-bar-stripes 1s linear infinite;
  animation: progress-bar-stripes 1s linear infinite;
}
.media {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-align: start;
  align-items: flex-start;
}
.media-body {
  -ms-flex: 1;
  flex: 1;
}
.list-group {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-direction: column;
  flex-direction: column;
  padding-left: 0;
  margin-bottom: 0;
}
.list-group-item-action {
  width: 100%;
  color: #495057;
  text-align: inherit;
}
.list-group-item-action:hover,
.list-group-item-action:focus {
  color: #495057;
  text-decoration: none;
  background-color: #f8f9fa;
}
.list-group-item-action:active {
  color: #212529;
  background-color: #e9ecef;
}
.list-group-item {
  position: relative;
  display: block;
  padding: 0.75rem 1.25rem;
  margin-bottom: -1px;
  background-color: #fff;
  border: 1px solid rgba(0, 0, 0, 0.125);
}
.list-group-item:first-child {
  border-top-left-radius: 0.25rem;
  border-top-right-radius: 0.25rem;
}
.list-group-item:last-child {
  margin-bottom: 0;
  border-bottom-right-radius: 0.25rem;
  border-bottom-left-radius: 0.25rem;
}
.list-group-item:hover,
.list-group-item:focus {
  z-index: 1;
  text-decoration: none;
}
.list-group-item.disabled,
.list-group-item:disabled {
  color: #6c757d;
  background-color: #fff;
}
.list-group-item.active {
  z-index: 2;
  color: #fff;
  background-color: #007bff;
  border-color: #007bff;
}
.list-group-flush .list-group-item {
  border-right: 0;
  border-left: 0;
  border-radius: 0;
}
.list-group-flush:first-child .list-group-item:first-child {
  border-top: 0;
}
.list-group-flush:last-child .list-group-item:last-child {
  border-bottom: 0;
}
.list-group-item-primary {
  color: #004085;
  background-color: #b8daff;
}
.list-group-item-primary.list-group-item-action:hover,
.list-group-item-primary.list-group-item-action:focus {
  color: #004085;
  background-color: #9fcdff;
}
.list-group-item-primary.list-group-item-action.active {
  color: #fff;
  background-color: #004085;
  border-color: #004085;
}
.list-group-item-secondary {
  color: #383d41;
  background-color: #d6d8db;
}
.list-group-item-secondary.list-group-item-action:hover,
.list-group-item-secondary.list-group-item-action:focus {
  color: #383d41;
  background-color: #c8cbcf;
}
.list-group-item-secondary.list-group-item-action.active {
  color: #fff;
  background-color: #383d41;
  border-color: #383d41;
}
.list-group-item-success {
  color: #155724;
  background-color: #c3e6cb;
}
.list-group-item-success.list-group-item-action:hover,
.list-group-item-success.list-group-item-action:focus {
  color: #155724;
  background-color: #b1dfbb;
}
.list-group-item-success.list-group-item-action.active {
  color: #fff;
  background-color: #155724;
  border-color: #155724;
}
.list-group-item-info {
  color: #0c5460;
  background-color: #bee5eb;
}
.list-group-item-info.list-group-item-action:hover,
.list-group-item-info.list-group-item-action:focus {
  color: #0c5460;
  background-color: #abdde5;
}
.list-group-item-info.list-group-item-action.active {
  color: #fff;
  background-color: #0c5460;
  border-color: #0c5460;
}
.list-group-item-warning {
  color: #856404;
  background-color: #ffeeba;
}
.list-group-item-warning.list-group-item-action:hover,
.list-group-item-warning.list-group-item-action:focus {
  color: #856404;
  background-color: #ffe8a1;
}
.list-group-item-warning.list-group-item-action.active {
  color: #fff;
  background-color: #856404;
  border-color: #856404;
}
.list-group-item-danger {
  color: #721c24;
  background-color: #f5c6cb;
}
.list-group-item-danger.list-group-item-action:hover,
.list-group-item-danger.list-group-item-action:focus {
  color: #721c24;
  background-color: #f1b0b7;
}
.list-group-item-danger.list-group-item-action.active {
  color: #fff;
  background-color: #721c24;
  border-color: #721c24;
}
.list-group-item-light {
  color: #818182;
  background-color: #fdfdfe;
}
.list-group-item-light.list-group-item-action:hover,
.list-group-item-light.list-group-item-action:focus {
  color: #818182;
  background-color: #ececf6;
}
.list-group-item-light.list-group-item-action.active {
  color: #fff;
  background-color: #818182;
  border-color: #818182;
}
.list-group-item-dark {
  color: #1b1e21;
  background-color: #c6c8ca;
}
.list-group-item-dark.list-group-item-action:hover,
.list-group-item-dark.list-group-item-action:focus {
  color: #1b1e21;
  background-color: #b9bbbe;
}
.list-group-item-dark.list-group-item-action.active {
  color: #fff;
  background-color: #1b1e21;
  border-color: #1b1e21;
}
.close {
  float: right;
  font-size: 1.5rem;
  font-weight: 700;
  line-height: 1;
  color: #000;
  text-shadow: 0 1px 0 #fff;
  opacity: 0.5;
}
.close:not(:disabled):not(.disabled) {
  cursor: pointer;
}
.close:not(:disabled):not(.disabled):hover,
.close:not(:disabled):not(.disabled):focus {
  color: #000;
  text-decoration: none;
  opacity: 0.75;
}
button.close {
  padding: 0;
  background-color: transparent;
  border: 0;
  -webkit-appearance: none;
}
.modal-open {
  overflow: hidden;
}
.modal-open .modal {
  overflow-x: hidden;
  overflow-y: auto;
}
.modal {
  position: fixed;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 1050;
  display: none;
  overflow: hidden;
  outline: 0;
}
.modal-dialog {
  position: relative;
  width: auto;
  margin: 0.5rem;
  pointer-events: none;
}
.modal.fade .modal-dialog {
  transition: -webkit-transform 0.3s ease-out;
  transition: transform 0.3s ease-out;
  transition: transform 0.3s ease-out, -webkit-transform 0.3s ease-out;
  -webkit-transform: translate(0, -25%);
  transform: translate(0, -25%);
}
@media screen and (prefers-reduced-motion: reduce) {
  .modal.fade .modal-dialog {
    transition: none;
  }
}
.modal.show .modal-dialog {
  -webkit-transform: translate(0, 0);
  transform: translate(0, 0);
}
.modal-dialog-centered {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-align: center;
  align-items: center;
  min-height: calc(100% - (0.5rem * 2));
}
.modal-dialog-centered::before {
  display: block;
  height: calc(100vh - (0.5rem * 2));
  content: "";
}
.modal-content {
  position: relative;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-direction: column;
  flex-direction: column;
  width: 100%;
  pointer-events: auto;
  background-color: #fff;
  background-clip: padding-box;
  border: 1px solid rgba(0, 0, 0, 0.2);
  border-radius: 0.3rem;
  outline: 0;
}
.modal-backdrop {
  position: fixed;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 1040;
  background-color: #000;
}
.modal-backdrop.fade {
  opacity: 0;
}
.modal-backdrop.show {
  opacity: 0.5;
}
.modal-header {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-align: start;
  align-items: flex-start;
  -ms-flex-pack: justify;
  justify-content: space-between;
  padding: 1rem;
  border-bottom: 1px solid #e9ecef;
  border-top-left-radius: 0.3rem;
  border-top-right-radius: 0.3rem;
}
.modal-header .close {
  padding: 1rem;
  margin: -1rem -1rem -1rem auto;
}
.modal-title {
  margin-bottom: 0;
  line-height: 1.5;
}
.modal-body {
  position: relative;
  -ms-flex: 1 1 auto;
  flex: 1 1 auto;
  padding: 1rem;
}
.modal-footer {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-align: center;
  align-items: center;
  -ms-flex-pack: end;
  justify-content: flex-end;
  padding: 1rem;
  border-top: 1px solid #e9ecef;
}
.modal-footer > :not(:first-child) {
  margin-left: 0.25rem;
}
.modal-footer > :not(:last-child) {
  margin-right: 0.25rem;
}
.modal-scrollbar-measure {
  position: absolute;
  top: -9999px;
  width: 50px;
  height: 50px;
  overflow: scroll;
}
@media (min-width: 576px) {
  .modal-dialog {
    max-width: 500px;
    margin: 1.75rem auto;
  }
  .modal-dialog-centered {
    min-height: calc(100% - (1.75rem * 2));
  }
  .modal-dialog-centered::before {
    height: calc(100vh - (1.75rem * 2));
  }
  .modal-sm {
    max-width: 300px;
  }
}
@media (min-width: 992px) {
  .modal-lg {
    max-width: 800px;
  }
}
.tooltip {
  position: absolute;
  z-index: 1070;
  display: block;
  margin: 0;
  font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
  font-style: normal;
  font-weight: 400;
  line-height: 1.5;
  text-align: left;
  text-align: start;
  text-decoration: none;
  text-shadow: none;
  text-transform: none;
  letter-spacing: normal;
  word-break: normal;
  word-spacing: normal;
  white-space: normal;
  line-break: auto;
  font-size: 0.875rem;
  word-wrap: break-word;
  opacity: 0;
}
.tooltip.show {
  opacity: 0.9;
}
.tooltip .arrow {
  position: absolute;
  display: block;
  width: 0.8rem;
  height: 0.4rem;
}
.tooltip .arrow::before {
  position: absolute;
  content: "";
  border-color: transparent;
  border-style: solid;
}
.bs-tooltip-top,
.bs-tooltip-auto[x-placement^="top"] {
  padding: 0.4rem 0;
}
.bs-tooltip-top .arrow,
.bs-tooltip-auto[x-placement^="top"] .arrow {
  bottom: 0;
}
.bs-tooltip-top .arrow::before,
.bs-tooltip-auto[x-placement^="top"] .arrow::before {
  top: 0;
  border-width: 0.4rem 0.4rem 0;
  border-top-color: #000;
}
.bs-tooltip-right,
.bs-tooltip-auto[x-placement^="right"] {
  padding: 0 0.4rem;
}
.bs-tooltip-right .arrow,
.bs-tooltip-auto[x-placement^="right"] .arrow {
  left: 0;
  width: 0.4rem;
  height: 0.8rem;
}
.bs-tooltip-right .arrow::before,
.bs-tooltip-auto[x-placement^="right"] .arrow::before {
  right: 0;
  border-width: 0.4rem 0.4rem 0.4rem 0;
  border-right-color: #000;
}
.bs-tooltip-bottom,
.bs-tooltip-auto[x-placement^="bottom"] {
  padding: 0.4rem 0;
}
.bs-tooltip-bottom .arrow,
.bs-tooltip-auto[x-placement^="bottom"] .arrow {
  top: 0;
}
.bs-tooltip-bottom .arrow::before,
.bs-tooltip-auto[x-placement^="bottom"] .arrow::before {
  bottom: 0;
  border-width: 0 0.4rem 0.4rem;
  border-bottom-color: #000;
}
.bs-tooltip-left,
.bs-tooltip-auto[x-placement^="left"] {
  padding: 0 0.4rem;
}
.bs-tooltip-left .arrow,
.bs-tooltip-auto[x-placement^="left"] .arrow {
  right: 0;
  width: 0.4rem;
  height: 0.8rem;
}
.bs-tooltip-left .arrow::before,
.bs-tooltip-auto[x-placement^="left"] .arrow::before {
  left: 0;
  border-width: 0.4rem 0 0.4rem 0.4rem;
  border-left-color: #000;
}
.tooltip-inner {
  max-width: 200px;
  padding: 0.25rem 0.5rem;
  color: #fff;
  text-align: center;
  background-color: #000;
  border-radius: 0.25rem;
}
.popover {
  position: absolute;
  top: 0;
  left: 0;
  z-index: 1060;
  display: block;
  max-width: 276px;
  font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
  font-style: normal;
  font-weight: 400;
  line-height: 1.5;
  text-align: left;
  text-align: start;
  text-decoration: none;
  text-shadow: none;
  text-transform: none;
  letter-spacing: normal;
  word-break: normal;
  word-spacing: normal;
  white-space: normal;
  line-break: auto;
  font-size: 0.875rem;
  word-wrap: break-word;
  background-color: #fff;
  background-clip: padding-box;
  border: 1px solid rgba(0, 0, 0, 0.2);
  border-radius: 0.3rem;
}
.popover .arrow {
  position: absolute;
  display: block;
  width: 1rem;
  height: 0.5rem;
  margin: 0 0.3rem;
}
.popover .arrow::before,
.popover .arrow::after {
  position: absolute;
  display: block;
  content: "";
  border-color: transparent;
  border-style: solid;
}
.bs-popover-top,
.bs-popover-auto[x-placement^="top"] {
  margin-bottom: 0.5rem;
}
.bs-popover-top .arrow,
.bs-popover-auto[x-placement^="top"] .arrow {
  bottom: calc((0.5rem + 1px) * -1);
}
.bs-popover-top .arrow::before,
.bs-popover-auto[x-placement^="top"] .arrow::before,
.bs-popover-top .arrow::after,
.bs-popover-auto[x-placement^="top"] .arrow::after {
  border-width: 0.5rem 0.5rem 0;
}
.bs-popover-top .arrow::before,
.bs-popover-auto[x-placement^="top"] .arrow::before {
  bottom: 0;
  border-top-color: rgba(0, 0, 0, 0.25);
}
.bs-popover-top .arrow::after,
.bs-popover-auto[x-placement^="top"] .arrow::after {
  bottom: 1px;
  border-top-color: #fff;
}
.bs-popover-right,
.bs-popover-auto[x-placement^="right"] {
  margin-left: 0.5rem;
}
.bs-popover-right .arrow,
.bs-popover-auto[x-placement^="right"] .arrow {
  left: calc((0.5rem + 1px) * -1);
  width: 0.5rem;
  height: 1rem;
  margin: 0.3rem 0;
}
.bs-popover-right .arrow::before,
.bs-popover-auto[x-placement^="right"] .arrow::before,
.bs-popover-right .arrow::after,
.bs-popover-auto[x-placement^="right"] .arrow::after {
  border-width: 0.5rem 0.5rem 0.5rem 0;
}
.bs-popover-right .arrow::before,
.bs-popover-auto[x-placement^="right"] .arrow::before {
  left: 0;
  border-right-color: rgba(0, 0, 0, 0.25);
}
.bs-popover-right .arrow::after,
.bs-popover-auto[x-placement^="right"] .arrow::after {
  left: 1px;
  border-right-color: #fff;
}
.bs-popover-bottom,
.bs-popover-auto[x-placement^="bottom"] {
  margin-top: 0.5rem;
}
.bs-popover-bottom .arrow,
.bs-popover-auto[x-placement^="bottom"] .arrow {
  top: calc((0.5rem + 1px) * -1);
}
.bs-popover-bottom .arrow::before,
.bs-popover-auto[x-placement^="bottom"] .arrow::before,
.bs-popover-bottom .arrow::after,
.bs-popover-auto[x-placement^="bottom"] .arrow::after {
  border-width: 0 0.5rem 0.5rem 0.5rem;
}
.bs-popover-bottom .arrow::before,
.bs-popover-auto[x-placement^="bottom"] .arrow::before {
  top: 0;
  border-bottom-color: rgba(0, 0, 0, 0.25);
}
.bs-popover-bottom .arrow::after,
.bs-popover-auto[x-placement^="bottom"] .arrow::after {
  top: 1px;
  border-bottom-color: #fff;
}
.bs-popover-bottom .popover-header::before,
.bs-popover-auto[x-placement^="bottom"] .popover-header::before {
  position: absolute;
  top: 0;
  left: 50%;
  display: block;
  width: 1rem;
  margin-left: -0.5rem;
  content: "";
  border-bottom: 1px solid #f7f7f7;
}
.bs-popover-left,
.bs-popover-auto[x-placement^="left"] {
  margin-right: 0.5rem;
}
.bs-popover-left .arrow,
.bs-popover-auto[x-placement^="left"] .arrow {
  right: calc((0.5rem + 1px) * -1);
  width: 0.5rem;
  height: 1rem;
  margin: 0.3rem 0;
}
.bs-popover-left .arrow::before,
.bs-popover-auto[x-placement^="left"] .arrow::before,
.bs-popover-left .arrow::after,
.bs-popover-auto[x-placement^="left"] .arrow::after {
  border-width: 0.5rem 0 0.5rem 0.5rem;
}
.bs-popover-left .arrow::before,
.bs-popover-auto[x-placement^="left"] .arrow::before {
  right: 0;
  border-left-color: rgba(0, 0, 0, 0.25);
}
.bs-popover-left .arrow::after,
.bs-popover-auto[x-placement^="left"] .arrow::after {
  right: 1px;
  border-left-color: #fff;
}
.popover-header {
  padding: 0.5rem 0.75rem;
  margin-bottom: 0;
  font-size: 1rem;
  color: inherit;
  background-color: #f7f7f7;
  border-bottom: 1px solid #ebebeb;
  border-top-left-radius: calc(0.3rem - 1px);
  border-top-right-radius: calc(0.3rem - 1px);
}
.popover-header:empty {
  display: none;
}
.popover-body {
  padding: 0.5rem 0.75rem;
  color: #212529;
}
.carousel {
  position: relative;
}
.carousel-inner {
  position: relative;
  width: 100%;
  overflow: hidden;
}
.carousel-item {
  position: relative;
  display: none;
  -ms-flex-align: center;
  align-items: center;
  width: 100%;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  -webkit-perspective: 1000px;
  perspective: 1000px;
}
.carousel-item.active,
.carousel-item-next,
.carousel-item-prev {
  display: block;
  transition: -webkit-transform 0.6s ease;
  transition: transform 0.6s ease;
  transition: transform 0.6s ease, -webkit-transform 0.6s ease;
}
@media screen and (prefers-reduced-motion: reduce) {
  .carousel-item.active,
  .carousel-item-next,
  .carousel-item-prev {
    transition: none;
  }
}
.carousel-item-next,
.carousel-item-prev {
  position: absolute;
  top: 0;
}
.carousel-item-next.carousel-item-left,
.carousel-item-prev.carousel-item-right {
  -webkit-transform: translateX(0);
  transform: translateX(0);
}
@supports ((-webkit-transform-style: preserve-3d) or (transform-style: preserve-3d)) {
  .carousel-item-next.carousel-item-left,
  .carousel-item-prev.carousel-item-right {
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
  }
}
.carousel-item-next,
.active.carousel-item-right {
  -webkit-transform: translateX(100%);
  transform: translateX(100%);
}
@supports ((-webkit-transform-style: preserve-3d) or (transform-style: preserve-3d)) {
  .carousel-item-next,
  .active.carousel-item-right {
    -webkit-transform: translate3d(100%, 0, 0);
    transform: translate3d(100%, 0, 0);
  }
}
.carousel-item-prev,
.active.carousel-item-left {
  -webkit-transform: translateX(-100%);
  transform: translateX(-100%);
}
@supports ((-webkit-transform-style: preserve-3d) or (transform-style: preserve-3d)) {
  .carousel-item-prev,
  .active.carousel-item-left {
    -webkit-transform: translate3d(-100%, 0, 0);
    transform: translate3d(-100%, 0, 0);
  }
}
.carousel-fade .carousel-item {
  opacity: 0;
  transition-duration: 0.6s;
  transition-property: opacity;
}
.carousel-fade .carousel-item.active,
.carousel-fade .carousel-item-next.carousel-item-left,
.carousel-fade .carousel-item-prev.carousel-item-right {
  opacity: 1;
}
.carousel-fade .active.carousel-item-left,
.carousel-fade .active.carousel-item-right {
  opacity: 0;
}
.carousel-fade .carousel-item-next,
.carousel-fade .carousel-item-prev,
.carousel-fade .carousel-item.active,
.carousel-fade .active.carousel-item-left,
.carousel-fade .active.carousel-item-prev {
  -webkit-transform: translateX(0);
  transform: translateX(0);
}
@supports ((-webkit-transform-style: preserve-3d) or (transform-style: preserve-3d)) {
  .carousel-fade .carousel-item-next,
  .carousel-fade .carousel-item-prev,
  .carousel-fade .carousel-item.active,
  .carousel-fade .active.carousel-item-left,
  .carousel-fade .active.carousel-item-prev {
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
  }
}
.carousel-control-prev,
.carousel-control-next {
  position: absolute;
  top: 0;
  bottom: 0;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-align: center;
  align-items: center;
  -ms-flex-pack: center;
  justify-content: center;
  width: 15%;
  color: #fff;
  text-align: center;
  opacity: 0.5;
}
.carousel-control-prev:hover,
.carousel-control-prev:focus,
.carousel-control-next:hover,
.carousel-control-next:focus {
  color: #fff;
  text-decoration: none;
  outline: 0;
  opacity: 0.9;
}
.carousel-control-prev {
  left: 0;
}
.carousel-control-next {
  right: 0;
}
.carousel-control-prev-icon,
.carousel-control-next-icon {
  display: inline-block;
  width: 20px;
  height: 20px;
  background: transparent no-repeat center center;
  background-size: 100% 100%;
}
.carousel-control-prev-icon {
  background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' viewBox='0 0 8 8'%3E%3Cpath d='M5.25 0l-4 4 4 4 1.5-1.5-2.5-2.5 2.5-2.5-1.5-1.5z'/%3E%3C/svg%3E");
}
.carousel-control-next-icon {
  background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' viewBox='0 0 8 8'%3E%3Cpath d='M2.75 0l-1.5 1.5 2.5 2.5-2.5 2.5 1.5 1.5 4-4-4-4z'/%3E%3C/svg%3E");
}
.carousel-indicators {
  position: absolute;
  right: 0;
  bottom: 10px;
  left: 0;
  z-index: 15;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-pack: center;
  justify-content: center;
  padding-left: 0;
  margin-right: 15%;
  margin-left: 15%;
  list-style: none;
}
.carousel-indicators li {
  position: relative;
  -ms-flex: 0 1 auto;
  flex: 0 1 auto;
  width: 30px;
  height: 3px;
  margin-right: 3px;
  margin-left: 3px;
  text-indent: -999px;
  cursor: pointer;
  background-color: rgba(255, 255, 255, 0.5);
}
.carousel-indicators li::before {
  position: absolute;
  top: -10px;
  left: 0;
  display: inline-block;
  width: 100%;
  height: 10px;
  content: "";
}
.carousel-indicators li::after {
  position: absolute;
  bottom: -10px;
  left: 0;
  display: inline-block;
  width: 100%;
  height: 10px;
  content: "";
}
.carousel-indicators .active {
  background-color: #fff;
}
.carousel-caption {
  position: absolute;
  right: 15%;
  bottom: 20px;
  left: 15%;
  z-index: 10;
  padding-top: 20px;
  padding-bottom: 20px;
  color: #fff;
  text-align: center;
}
.align-baseline {
  vertical-align: baseline !important;
}
.align-top {
  vertical-align: top !important;
}
.align-middle {
  vertical-align: middle !important;
}
.align-bottom {
  vertical-align: bottom !important;
}
.align-text-bottom {
  vertical-align: text-bottom !important;
}
.align-text-top {
  vertical-align: text-top !important;
}
.bg-primary {
  background-color: #007bff !important;
}
a.bg-primary:hover,
a.bg-primary:focus,
button.bg-primary:hover,
button.bg-primary:focus {
  background-color: #0062cc !important;
}
.bg-secondary {
  background-color: #6c757d !important;
}
a.bg-secondary:hover,
a.bg-secondary:focus,
button.bg-secondary:hover,
button.bg-secondary:focus {
  background-color: #545b62 !important;
}
.bg-success {
  background-color: #28a745 !important;
}
a.bg-success:hover,
a.bg-success:focus,
button.bg-success:hover,
button.bg-success:focus {
  background-color: #1e7e34 !important;
}
.bg-info {
  background-color: #17a2b8 !important;
}
a.bg-info:hover,
a.bg-info:focus,
button.bg-info:hover,
button.bg-info:focus {
  background-color: #117a8b !important;
}
.bg-warning {
  background-color: #ffc107 !important;
}
a.bg-warning:hover,
a.bg-warning:focus,
button.bg-warning:hover,
button.bg-warning:focus {
  background-color: #d39e00 !important;
}
.bg-danger {
  background-color: #dc3545 !important;
}
a.bg-danger:hover,
a.bg-danger:focus,
button.bg-danger:hover,
button.bg-danger:focus {
  background-color: #bd2130 !important;
}
.bg-light {
  background-color: #f8f9fa !important;
}
a.bg-light:hover,
a.bg-light:focus,
button.bg-light:hover,
button.bg-light:focus {
  background-color: #dae0e5 !important;
}
.bg-dark {
  background-color: #343a40 !important;
}
a.bg-dark:hover,
a.bg-dark:focus,
button.bg-dark:hover,
button.bg-dark:focus {
  background-color: #1d2124 !important;
}
.bg-white {
  background-color: #fff !important;
}
.bg-transparent {
  background-color: transparent !important;
}
.border {
  border: 1px solid #dee2e6 !important;
}
.border-top {
  border-top: 1px solid #dee2e6 !important;
}
.border-right {
  border-right: 1px solid #dee2e6 !important;
}
.border-bottom {
  border-bottom: 1px solid #dee2e6 !important;
}
.border-left {
  border-left: 1px solid #dee2e6 !important;
}
.border-0 {
  border: 0 !important;
}
.border-top-0 {
  border-top: 0 !important;
}
.border-right-0 {
  border-right: 0 !important;
}
.border-bottom-0 {
  border-bottom: 0 !important;
}
.border-left-0 {
  border-left: 0 !important;
}
.border-primary {
  border-color: #007bff !important;
}
.border-secondary {
  border-color: #6c757d !important;
}
.border-success {
  border-color: #28a745 !important;
}
.border-info {
  border-color: #17a2b8 !important;
}
.border-warning {
  border-color: #ffc107 !important;
}
.border-danger {
  border-color: #dc3545 !important;
}
.border-light {
  border-color: #f8f9fa !important;
}
.border-dark {
  border-color: #343a40 !important;
}
.border-white {
  border-color: #fff !important;
}
.rounded {
  border-radius: 0.25rem !important;
}
.rounded-top {
  border-top-left-radius: 0.25rem !important;
  border-top-right-radius: 0.25rem !important;
}
.rounded-right {
  border-top-right-radius: 0.25rem !important;
  border-bottom-right-radius: 0.25rem !important;
}
.rounded-bottom {
  border-bottom-right-radius: 0.25rem !important;
  border-bottom-left-radius: 0.25rem !important;
}
.rounded-left {
  border-top-left-radius: 0.25rem !important;
  border-bottom-left-radius: 0.25rem !important;
}
.rounded-circle {
  border-radius: 50% !important;
}
.rounded-0 {
  border-radius: 0 !important;
}
.clearfix::after {
  display: block;
  clear: both;
  content: "";
}
.d-none {
  display: none !important;
}
.d-inline {
  display: inline !important;
}
.d-inline-block {
  display: inline-block !important;
}
.d-block {
  display: block !important;
}
.d-table {
  display: table !important;
}
.d-table-row {
  display: table-row !important;
}
.d-table-cell {
  display: table-cell !important;
}
.d-flex {
  display: -ms-flexbox !important;
  display: flex !important;
}
.d-inline-flex {
  display: -ms-inline-flexbox !important;
  display: inline-flex !important;
}
@media (min-width: 576px) {
  .d-sm-none {
    display: none !important;
  }
  .d-sm-inline {
    display: inline !important;
  }
  .d-sm-inline-block {
    display: inline-block !important;
  }
  .d-sm-block {
    display: block !important;
  }
  .d-sm-table {
    display: table !important;
  }
  .d-sm-table-row {
    display: table-row !important;
  }
  .d-sm-table-cell {
    display: table-cell !important;
  }
  .d-sm-flex {
    display: -ms-flexbox !important;
    display: flex !important;
  }
  .d-sm-inline-flex {
    display: -ms-inline-flexbox !important;
    display: inline-flex !important;
  }
}
@media (min-width: 768px) {
  .d-md-none {
    display: none !important;
  }
  .d-md-inline {
    display: inline !important;
  }
  .d-md-inline-block {
    display: inline-block !important;
  }
  .d-md-block {
    display: block !important;
  }
  .d-md-table {
    display: table !important;
  }
  .d-md-table-row {
    display: table-row !important;
  }
  .d-md-table-cell {
    display: table-cell !important;
  }
  .d-md-flex {
    display: -ms-flexbox !important;
    display: flex !important;
  }
  .d-md-inline-flex {
    display: -ms-inline-flexbox !important;
    display: inline-flex !important;
  }
}
@media (min-width: 992px) {
  .d-lg-none {
    display: none !important;
  }
  .d-lg-inline {
    display: inline !important;
  }
  .d-lg-inline-block {
    display: inline-block !important;
  }
  .d-lg-block {
    display: block !important;
  }
  .d-lg-table {
    display: table !important;
  }
  .d-lg-table-row {
    display: table-row !important;
  }
  .d-lg-table-cell {
    display: table-cell !important;
  }
  .d-lg-flex {
    display: -ms-flexbox !important;
    display: flex !important;
  }
  .d-lg-inline-flex {
    display: -ms-inline-flexbox !important;
    display: inline-flex !important;
  }
}
@media (min-width: 1200px) {
  .d-xl-none {
    display: none !important;
  }
  .d-xl-inline {
    display: inline !important;
  }
  .d-xl-inline-block {
    display: inline-block !important;
  }
  .d-xl-block {
    display: block !important;
  }
  .d-xl-table {
    display: table !important;
  }
  .d-xl-table-row {
    display: table-row !important;
  }
  .d-xl-table-cell {
    display: table-cell !important;
  }
  .d-xl-flex {
    display: -ms-flexbox !important;
    display: flex !important;
  }
  .d-xl-inline-flex {
    display: -ms-inline-flexbox !important;
    display: inline-flex !important;
  }
}
@media print {
  .d-print-none {
    display: none !important;
  }
  .d-print-inline {
    display: inline !important;
  }
  .d-print-inline-block {
    display: inline-block !important;
  }
  .d-print-block {
    display: block !important;
  }
  .d-print-table {
    display: table !important;
  }
  .d-print-table-row {
    display: table-row !important;
  }
  .d-print-table-cell {
    display: table-cell !important;
  }
  .d-print-flex {
    display: -ms-flexbox !important;
    display: flex !important;
  }
  .d-print-inline-flex {
    display: -ms-inline-flexbox !important;
    display: inline-flex !important;
  }
}
.embed-responsive {
  position: relative;
  display: block;
  width: 100%;
  padding: 0;
  overflow: hidden;
}
.embed-responsive::before {
  display: block;
  content: "";
}
.embed-responsive .embed-responsive-item,
.embed-responsive iframe,
.embed-responsive embed,
.embed-responsive object,
.embed-responsive video {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  width: 100%;
  height: 100%;
  border: 0;
}
.embed-responsive-21by9::before {
  padding-top: 42.857143%;
}
.embed-responsive-16by9::before {
  padding-top: 56.25%;
}
.embed-responsive-4by3::before {
  padding-top: 75%;
}
.embed-responsive-1by1::before {
  padding-top: 100%;
}
.flex-row {
  -ms-flex-direction: row !important;
  flex-direction: row !important;
}
.flex-column {
  -ms-flex-direction: column !important;
  flex-direction: column !important;
}
.flex-row-reverse {
  -ms-flex-direction: row-reverse !important;
  flex-direction: row-reverse !important;
}
.flex-column-reverse {
  -ms-flex-direction: column-reverse !important;
  flex-direction: column-reverse !important;
}
.flex-wrap {
  -ms-flex-wrap: wrap !important;
  flex-wrap: wrap !important;
}
.flex-nowrap {
  -ms-flex-wrap: nowrap !important;
  flex-wrap: nowrap !important;
}
.flex-wrap-reverse {
  -ms-flex-wrap: wrap-reverse !important;
  flex-wrap: wrap-reverse !important;
}
.flex-fill {
  -ms-flex: 1 1 auto !important;
  flex: 1 1 auto !important;
}
.flex-grow-0 {
  -ms-flex-positive: 0 !important;
  flex-grow: 0 !important;
}
.flex-grow-1 {
  -ms-flex-positive: 1 !important;
  flex-grow: 1 !important;
}
.flex-shrink-0 {
  -ms-flex-negative: 0 !important;
  flex-shrink: 0 !important;
}
.flex-shrink-1 {
  -ms-flex-negative: 1 !important;
  flex-shrink: 1 !important;
}
.justify-content-start {
  -ms-flex-pack: start !important;
  justify-content: flex-start !important;
}
.justify-content-end {
  -ms-flex-pack: end !important;
  justify-content: flex-end !important;
}
.justify-content-center {
  -ms-flex-pack: center !important;
  justify-content: center !important;
}
.justify-content-between {
  -ms-flex-pack: justify !important;
  justify-content: space-between !important;
}
.justify-content-around {
  -ms-flex-pack: distribute !important;
  justify-content: space-around !important;
}
.align-items-start {
  -ms-flex-align: start !important;
  align-items: flex-start !important;
}
.align-items-end {
  -ms-flex-align: end !important;
  align-items: flex-end !important;
}
.align-items-center {
  -ms-flex-align: center !important;
  align-items: center !important;
}
.align-items-baseline {
  -ms-flex-align: baseline !important;
  align-items: baseline !important;
}
.align-items-stretch {
  -ms-flex-align: stretch !important;
  align-items: stretch !important;
}
.align-content-start {
  -ms-flex-line-pack: start !important;
  align-content: flex-start !important;
}
.align-content-end {
  -ms-flex-line-pack: end !important;
  align-content: flex-end !important;
}
.align-content-center {
  -ms-flex-line-pack: center !important;
  align-content: center !important;
}
.align-content-between {
  -ms-flex-line-pack: justify !important;
  align-content: space-between !important;
}
.align-content-around {
  -ms-flex-line-pack: distribute !important;
  align-content: space-around !important;
}
.align-content-stretch {
  -ms-flex-line-pack: stretch !important;
  align-content: stretch !important;
}
.align-self-auto {
  -ms-flex-item-align: auto !important;
  align-self: auto !important;
}
.align-self-start {
  -ms-flex-item-align: start !important;
  align-self: flex-start !important;
}
.align-self-end {
  -ms-flex-item-align: end !important;
  align-self: flex-end !important;
}
.align-self-center {
  -ms-flex-item-align: center !important;
  align-self: center !important;
}
.align-self-baseline {
  -ms-flex-item-align: baseline !important;
  align-self: baseline !important;
}
.align-self-stretch {
  -ms-flex-item-align: stretch !important;
  align-self: stretch !important;
}
@media (min-width: 576px) {
  .flex-sm-row {
    -ms-flex-direction: row !important;
    flex-direction: row !important;
  }
  .flex-sm-column {
    -ms-flex-direction: column !important;
    flex-direction: column !important;
  }
  .flex-sm-row-reverse {
    -ms-flex-direction: row-reverse !important;
    flex-direction: row-reverse !important;
  }
  .flex-sm-column-reverse {
    -ms-flex-direction: column-reverse !important;
    flex-direction: column-reverse !important;
  }
  .flex-sm-wrap {
    -ms-flex-wrap: wrap !important;
    flex-wrap: wrap !important;
  }
  .flex-sm-nowrap {
    -ms-flex-wrap: nowrap !important;
    flex-wrap: nowrap !important;
  }
  .flex-sm-wrap-reverse {
    -ms-flex-wrap: wrap-reverse !important;
    flex-wrap: wrap-reverse !important;
  }
  .flex-sm-fill {
    -ms-flex: 1 1 auto !important;
    flex: 1 1 auto !important;
  }
  .flex-sm-grow-0 {
    -ms-flex-positive: 0 !important;
    flex-grow: 0 !important;
  }
  .flex-sm-grow-1 {
    -ms-flex-positive: 1 !important;
    flex-grow: 1 !important;
  }
  .flex-sm-shrink-0 {
    -ms-flex-negative: 0 !important;
    flex-shrink: 0 !important;
  }
  .flex-sm-shrink-1 {
    -ms-flex-negative: 1 !important;
    flex-shrink: 1 !important;
  }
  .justify-content-sm-start {
    -ms-flex-pack: start !important;
    justify-content: flex-start !important;
  }
  .justify-content-sm-end {
    -ms-flex-pack: end !important;
    justify-content: flex-end !important;
  }
  .justify-content-sm-center {
    -ms-flex-pack: center !important;
    justify-content: center !important;
  }
  .justify-content-sm-between {
    -ms-flex-pack: justify !important;
    justify-content: space-between !important;
  }
  .justify-content-sm-around {
    -ms-flex-pack: distribute !important;
    justify-content: space-around !important;
  }
  .align-items-sm-start {
    -ms-flex-align: start !important;
    align-items: flex-start !important;
  }
  .align-items-sm-end {
    -ms-flex-align: end !important;
    align-items: flex-end !important;
  }
  .align-items-sm-center {
    -ms-flex-align: center !important;
    align-items: center !important;
  }
  .align-items-sm-baseline {
    -ms-flex-align: baseline !important;
    align-items: baseline !important;
  }
  .align-items-sm-stretch {
    -ms-flex-align: stretch !important;
    align-items: stretch !important;
  }
  .align-content-sm-start {
    -ms-flex-line-pack: start !important;
    align-content: flex-start !important;
  }
  .align-content-sm-end {
    -ms-flex-line-pack: end !important;
    align-content: flex-end !important;
  }
  .align-content-sm-center {
    -ms-flex-line-pack: center !important;
    align-content: center !important;
  }
  .align-content-sm-between {
    -ms-flex-line-pack: justify !important;
    align-content: space-between !important;
  }
  .align-content-sm-around {
    -ms-flex-line-pack: distribute !important;
    align-content: space-around !important;
  }
  .align-content-sm-stretch {
    -ms-flex-line-pack: stretch !important;
    align-content: stretch !important;
  }
  .align-self-sm-auto {
    -ms-flex-item-align: auto !important;
    align-self: auto !important;
  }
  .align-self-sm-start {
    -ms-flex-item-align: start !important;
    align-self: flex-start !important;
  }
  .align-self-sm-end {
    -ms-flex-item-align: end !important;
    align-self: flex-end !important;
  }
  .align-self-sm-center {
    -ms-flex-item-align: center !important;
    align-self: center !important;
  }
  .align-self-sm-baseline {
    -ms-flex-item-align: baseline !important;
    align-self: baseline !important;
  }
  .align-self-sm-stretch {
    -ms-flex-item-align: stretch !important;
    align-self: stretch !important;
  }
}
@media (min-width: 768px) {
  .flex-md-row {
    -ms-flex-direction: row !important;
    flex-direction: row !important;
  }
  .flex-md-column {
    -ms-flex-direction: column !important;
    flex-direction: column !important;
  }
  .flex-md-row-reverse {
    -ms-flex-direction: row-reverse !important;
    flex-direction: row-reverse !important;
  }
  .flex-md-column-reverse {
    -ms-flex-direction: column-reverse !important;
    flex-direction: column-reverse !important;
  }
  .flex-md-wrap {
    -ms-flex-wrap: wrap !important;
    flex-wrap: wrap !important;
  }
  .flex-md-nowrap {
    -ms-flex-wrap: nowrap !important;
    flex-wrap: nowrap !important;
  }
  .flex-md-wrap-reverse {
    -ms-flex-wrap: wrap-reverse !important;
    flex-wrap: wrap-reverse !important;
  }
  .flex-md-fill {
    -ms-flex: 1 1 auto !important;
    flex: 1 1 auto !important;
  }
  .flex-md-grow-0 {
    -ms-flex-positive: 0 !important;
    flex-grow: 0 !important;
  }
  .flex-md-grow-1 {
    -ms-flex-positive: 1 !important;
    flex-grow: 1 !important;
  }
  .flex-md-shrink-0 {
    -ms-flex-negative: 0 !important;
    flex-shrink: 0 !important;
  }
  .flex-md-shrink-1 {
    -ms-flex-negative: 1 !important;
    flex-shrink: 1 !important;
  }
  .justify-content-md-start {
    -ms-flex-pack: start !important;
    justify-content: flex-start !important;
  }
  .justify-content-md-end {
    -ms-flex-pack: end !important;
    justify-content: flex-end !important;
  }
  .justify-content-md-center {
    -ms-flex-pack: center !important;
    justify-content: center !important;
  }
  .justify-content-md-between {
    -ms-flex-pack: justify !important;
    justify-content: space-between !important;
  }
  .justify-content-md-around {
    -ms-flex-pack: distribute !important;
    justify-content: space-around !important;
  }
  .align-items-md-start {
    -ms-flex-align: start !important;
    align-items: flex-start !important;
  }
  .align-items-md-end {
    -ms-flex-align: end !important;
    align-items: flex-end !important;
  }
  .align-items-md-center {
    -ms-flex-align: center !important;
    align-items: center !important;
  }
  .align-items-md-baseline {
    -ms-flex-align: baseline !important;
    align-items: baseline !important;
  }
  .align-items-md-stretch {
    -ms-flex-align: stretch !important;
    align-items: stretch !important;
  }
  .align-content-md-start {
    -ms-flex-line-pack: start !important;
    align-content: flex-start !important;
  }
  .align-content-md-end {
    -ms-flex-line-pack: end !important;
    align-content: flex-end !important;
  }
  .align-content-md-center {
    -ms-flex-line-pack: center !important;
    align-content: center !important;
  }
  .align-content-md-between {
    -ms-flex-line-pack: justify !important;
    align-content: space-between !important;
  }
  .align-content-md-around {
    -ms-flex-line-pack: distribute !important;
    align-content: space-around !important;
  }
  .align-content-md-stretch {
    -ms-flex-line-pack: stretch !important;
    align-content: stretch !important;
  }
  .align-self-md-auto {
    -ms-flex-item-align: auto !important;
    align-self: auto !important;
  }
  .align-self-md-start {
    -ms-flex-item-align: start !important;
    align-self: flex-start !important;
  }
  .align-self-md-end {
    -ms-flex-item-align: end !important;
    align-self: flex-end !important;
  }
  .align-self-md-center {
    -ms-flex-item-align: center !important;
    align-self: center !important;
  }
  .align-self-md-baseline {
    -ms-flex-item-align: baseline !important;
    align-self: baseline !important;
  }
  .align-self-md-stretch {
    -ms-flex-item-align: stretch !important;
    align-self: stretch !important;
  }
}
@media (min-width: 992px) {
  .flex-lg-row {
    -ms-flex-direction: row !important;
    flex-direction: row !important;
  }
  .flex-lg-column {
    -ms-flex-direction: column !important;
    flex-direction: column !important;
  }
  .flex-lg-row-reverse {
    -ms-flex-direction: row-reverse !important;
    flex-direction: row-reverse !important;
  }
  .flex-lg-column-reverse {
    -ms-flex-direction: column-reverse !important;
    flex-direction: column-reverse !important;
  }
  .flex-lg-wrap {
    -ms-flex-wrap: wrap !important;
    flex-wrap: wrap !important;
  }
  .flex-lg-nowrap {
    -ms-flex-wrap: nowrap !important;
    flex-wrap: nowrap !important;
  }
  .flex-lg-wrap-reverse {
    -ms-flex-wrap: wrap-reverse !important;
    flex-wrap: wrap-reverse !important;
  }
  .flex-lg-fill {
    -ms-flex: 1 1 auto !important;
    flex: 1 1 auto !important;
  }
  .flex-lg-grow-0 {
    -ms-flex-positive: 0 !important;
    flex-grow: 0 !important;
  }
  .flex-lg-grow-1 {
    -ms-flex-positive: 1 !important;
    flex-grow: 1 !important;
  }
  .flex-lg-shrink-0 {
    -ms-flex-negative: 0 !important;
    flex-shrink: 0 !important;
  }
  .flex-lg-shrink-1 {
    -ms-flex-negative: 1 !important;
    flex-shrink: 1 !important;
  }
  .justify-content-lg-start {
    -ms-flex-pack: start !important;
    justify-content: flex-start !important;
  }
  .justify-content-lg-end {
    -ms-flex-pack: end !important;
    justify-content: flex-end !important;
  }
  .justify-content-lg-center {
    -ms-flex-pack: center !important;
    justify-content: center !important;
  }
  .justify-content-lg-between {
    -ms-flex-pack: justify !important;
    justify-content: space-between !important;
  }
  .justify-content-lg-around {
    -ms-flex-pack: distribute !important;
    justify-content: space-around !important;
  }
  .align-items-lg-start {
    -ms-flex-align: start !important;
    align-items: flex-start !important;
  }
  .align-items-lg-end {
    -ms-flex-align: end !important;
    align-items: flex-end !important;
  }
  .align-items-lg-center {
    -ms-flex-align: center !important;
    align-items: center !important;
  }
  .align-items-lg-baseline {
    -ms-flex-align: baseline !important;
    align-items: baseline !important;
  }
  .align-items-lg-stretch {
    -ms-flex-align: stretch !important;
    align-items: stretch !important;
  }
  .align-content-lg-start {
    -ms-flex-line-pack: start !important;
    align-content: flex-start !important;
  }
  .align-content-lg-end {
    -ms-flex-line-pack: end !important;
    align-content: flex-end !important;
  }
  .align-content-lg-center {
    -ms-flex-line-pack: center !important;
    align-content: center !important;
  }
  .align-content-lg-between {
    -ms-flex-line-pack: justify !important;
    align-content: space-between !important;
  }
  .align-content-lg-around {
    -ms-flex-line-pack: distribute !important;
    align-content: space-around !important;
  }
  .align-content-lg-stretch {
    -ms-flex-line-pack: stretch !important;
    align-content: stretch !important;
  }
  .align-self-lg-auto {
    -ms-flex-item-align: auto !important;
    align-self: auto !important;
  }
  .align-self-lg-start {
    -ms-flex-item-align: start !important;
    align-self: flex-start !important;
  }
  .align-self-lg-end {
    -ms-flex-item-align: end !important;
    align-self: flex-end !important;
  }
  .align-self-lg-center {
    -ms-flex-item-align: center !important;
    align-self: center !important;
  }
  .align-self-lg-baseline {
    -ms-flex-item-align: baseline !important;
    align-self: baseline !important;
  }
  .align-self-lg-stretch {
    -ms-flex-item-align: stretch !important;
    align-self: stretch !important;
  }
}
@media (min-width: 1200px) {
  .flex-xl-row {
    -ms-flex-direction: row !important;
    flex-direction: row !important;
  }
  .flex-xl-column {
    -ms-flex-direction: column !important;
    flex-direction: column !important;
  }
  .flex-xl-row-reverse {
    -ms-flex-direction: row-reverse !important;
    flex-direction: row-reverse !important;
  }
  .flex-xl-column-reverse {
    -ms-flex-direction: column-reverse !important;
    flex-direction: column-reverse !important;
  }
  .flex-xl-wrap {
    -ms-flex-wrap: wrap !important;
    flex-wrap: wrap !important;
  }
  .flex-xl-nowrap {
    -ms-flex-wrap: nowrap !important;
    flex-wrap: nowrap !important;
  }
  .flex-xl-wrap-reverse {
    -ms-flex-wrap: wrap-reverse !important;
    flex-wrap: wrap-reverse !important;
  }
  .flex-xl-fill {
    -ms-flex: 1 1 auto !important;
    flex: 1 1 auto !important;
  }
  .flex-xl-grow-0 {
    -ms-flex-positive: 0 !important;
    flex-grow: 0 !important;
  }
  .flex-xl-grow-1 {
    -ms-flex-positive: 1 !important;
    flex-grow: 1 !important;
  }
  .flex-xl-shrink-0 {
    -ms-flex-negative: 0 !important;
    flex-shrink: 0 !important;
  }
  .flex-xl-shrink-1 {
    -ms-flex-negative: 1 !important;
    flex-shrink: 1 !important;
  }
  .justify-content-xl-start {
    -ms-flex-pack: start !important;
    justify-content: flex-start !important;
  }
  .justify-content-xl-end {
    -ms-flex-pack: end !important;
    justify-content: flex-end !important;
  }
  .justify-content-xl-center {
    -ms-flex-pack: center !important;
    justify-content: center !important;
  }
  .justify-content-xl-between {
    -ms-flex-pack: justify !important;
    justify-content: space-between !important;
  }
  .justify-content-xl-around {
    -ms-flex-pack: distribute !important;
    justify-content: space-around !important;
  }
  .align-items-xl-start {
    -ms-flex-align: start !important;
    align-items: flex-start !important;
  }
  .align-items-xl-end {
    -ms-flex-align: end !important;
    align-items: flex-end !important;
  }
  .align-items-xl-center {
    -ms-flex-align: center !important;
    align-items: center !important;
  }
  .align-items-xl-baseline {
    -ms-flex-align: baseline !important;
    align-items: baseline !important;
  }
  .align-items-xl-stretch {
    -ms-flex-align: stretch !important;
    align-items: stretch !important;
  }
  .align-content-xl-start {
    -ms-flex-line-pack: start !important;
    align-content: flex-start !important;
  }
  .align-content-xl-end {
    -ms-flex-line-pack: end !important;
    align-content: flex-end !important;
  }
  .align-content-xl-center {
    -ms-flex-line-pack: center !important;
    align-content: center !important;
  }
  .align-content-xl-between {
    -ms-flex-line-pack: justify !important;
    align-content: space-between !important;
  }
  .align-content-xl-around {
    -ms-flex-line-pack: distribute !important;
    align-content: space-around !important;
  }
  .align-content-xl-stretch {
    -ms-flex-line-pack: stretch !important;
    align-content: stretch !important;
  }
  .align-self-xl-auto {
    -ms-flex-item-align: auto !important;
    align-self: auto !important;
  }
  .align-self-xl-start {
    -ms-flex-item-align: start !important;
    align-self: flex-start !important;
  }
  .align-self-xl-end {
    -ms-flex-item-align: end !important;
    align-self: flex-end !important;
  }
  .align-self-xl-center {
    -ms-flex-item-align: center !important;
    align-self: center !important;
  }
  .align-self-xl-baseline {
    -ms-flex-item-align: baseline !important;
    align-self: baseline !important;
  }
  .align-self-xl-stretch {
    -ms-flex-item-align: stretch !important;
    align-self: stretch !important;
  }
}
.float-left {
  float: left !important;
}
.float-right {
  float: right !important;
}
.float-none {
  float: none !important;
}
@media (min-width: 576px) {
  .float-sm-left {
    float: left !important;
  }
  .float-sm-right {
    float: right !important;
  }
  .float-sm-none {
    float: none !important;
  }
}
@media (min-width: 768px) {
  .float-md-left {
    float: left !important;
  }
  .float-md-right {
    float: right !important;
  }
  .float-md-none {
    float: none !important;
  }
}
@media (min-width: 992px) {
  .float-lg-left {
    float: left !important;
  }
  .float-lg-right {
    float: right !important;
  }
  .float-lg-none {
    float: none !important;
  }
}
@media (min-width: 1200px) {
  .float-xl-left {
    float: left !important;
  }
  .float-xl-right {
    float: right !important;
  }
  .float-xl-none {
    float: none !important;
  }
}
.position-static {
  position: static !important;
}
.position-relative {
  position: relative !important;
}
.position-absolute {
  position: absolute !important;
}
.position-fixed {
  position: fixed !important;
}
.position-sticky {
  position: -webkit-sticky !important;
  position: sticky !important;
}
.fixed-top {
  position: fixed;
  top: 0;
  right: 0;
  left: 0;
  z-index: 1030;
}
.fixed-bottom {
  position: fixed;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 1030;
}
@supports ((position: -webkit-sticky) or (position: sticky)) {
  .sticky-top {
    position: -webkit-sticky;
    position: sticky;
    top: 0;
    z-index: 1020;
  }
}
.sr-only {
  position: absolute;
  width: 1px;
  height: 1px;
  padding: 0;
  overflow: hidden;
  clip: rect(0, 0, 0, 0);
  white-space: nowrap;
  border: 0;
}
.sr-only-focusable:active,
.sr-only-focusable:focus {
  position: static;
  width: auto;
  height: auto;
  overflow: visible;
  clip: auto;
  white-space: normal;
}
.shadow-sm {
  box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075) !important;
}
.shadow {
  box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15) !important;
}
.shadow-lg {
  box-shadow: 0 1rem 3rem rgba(0, 0, 0, 0.175) !important;
}
.shadow-none {
  box-shadow: none !important;
}
.w-25 {
  width: 25% !important;
}
.w-50 {
  width: 50% !important;
}
.w-75 {
  width: 75% !important;
}
.w-100 {
  width: 100% !important;
}
.w-auto {
  width: auto !important;
}
.h-25 {
  height: 25% !important;
}
.h-50 {
  height: 50% !important;
}
.h-75 {
  height: 75% !important;
}
.h-100 {
  height: 100% !important;
}
.h-auto {
  height: auto !important;
}
.mw-100 {
  max-width: 100% !important;
}
.mh-100 {
  max-height: 100% !important;
}
.m-0 {
  margin: 0 !important;
}
.mt-0,
.my-0 {
  margin-top: 0 !important;
}
.mr-0,
.mx-0 {
  margin-right: 0 !important;
}
.mb-0,
.my-0 {
  margin-bottom: 0 !important;
}
.ml-0,
.mx-0 {
  margin-left: 0 !important;
}
.m-1 {
  margin: 0.25rem !important;
}
.mt-1,
.my-1 {
  margin-top: 0.25rem !important;
}
.mr-1,
.mx-1 {
  margin-right: 0.25rem !important;
}
.mb-1,
.my-1 {
  margin-bottom: 0.25rem !important;
}
.ml-1,
.mx-1 {
  margin-left: 0.25rem !important;
}
.m-2 {
  margin: 0.5rem !important;
}
.mt-2,
.my-2 {
  margin-top: 0.5rem !important;
}
.mr-2,
.mx-2 {
  margin-right: 0.5rem !important;
}
.mb-2,
.my-2 {
  margin-bottom: 0.5rem !important;
}
.ml-2,
.mx-2 {
  margin-left: 0.5rem !important;
}
.m-3 {
  margin: 1rem !important;
}
.mt-3,
.my-3 {
  margin-top: 1rem !important;
}
.mr-3,
.mx-3 {
  margin-right: 1rem !important;
}
.mb-3,
.my-3 {
  margin-bottom: 1rem !important;
}
.ml-3,
.mx-3 {
  margin-left: 1rem !important;
}
.m-4 {
  margin: 1.5rem !important;
}
.mt-4,
.my-4 {
  margin-top: 1.5rem !important;
}
.mr-4,
.mx-4 {
  margin-right: 1.5rem !important;
}
.mb-4,
.my-4 {
  margin-bottom: 1.5rem !important;
}
.ml-4,
.mx-4 {
  margin-left: 1.5rem !important;
}
.m-5 {
  margin: 3rem !important;
}
.mt-5,
.my-5 {
  margin-top: 3rem !important;
}
.mr-5,
.mx-5 {
  margin-right: 3rem !important;
}
.mb-5,
.my-5 {
  margin-bottom: 3rem !important;
}
.ml-5,
.mx-5 {
  margin-left: 3rem !important;
}
.p-0 {
  padding: 0 !important;
}
.pt-0,
.py-0 {
  padding-top: 0 !important;
}
.pr-0,
.px-0 {
  padding-right: 0 !important;
}
.pb-0,
.py-0 {
  padding-bottom: 0 !important;
}
.pl-0,
.px-0 {
  padding-left: 0 !important;
}
.p-1 {
  padding: 0.25rem !important;
}
.pt-1,
.py-1 {
  padding-top: 0.25rem !important;
}
.pr-1,
.px-1 {
  padding-right: 0.25rem !important;
}
.pb-1,
.py-1 {
  padding-bottom: 0.25rem !important;
}
.pl-1,
.px-1 {
  padding-left: 0.25rem !important;
}
.p-2 {
  padding: 0.5rem !important;
}
.pt-2,
.py-2 {
  padding-top: 0.5rem !important;
}
.pr-2,
.px-2 {
  padding-right: 0.5rem !important;
}
.pb-2,
.py-2 {
  padding-bottom: 0.5rem !important;
}
.pl-2,
.px-2 {
  padding-left: 0.5rem !important;
}
.p-3 {
  padding: 1rem !important;
}
.pt-3,
.py-3 {
  padding-top: 1rem !important;
}
.pr-3,
.px-3 {
  padding-right: 1rem !important;
}
.pb-3,
.py-3 {
  padding-bottom: 1rem !important;
}
.pl-3,
.px-3 {
  padding-left: 1rem !important;
}
.p-4 {
  padding: 1.5rem !important;
}
.pt-4,
.py-4 {
  padding-top: 1.5rem !important;
}
.pr-4,
.px-4 {
  padding-right: 1.5rem !important;
}
.pb-4,
.py-4 {
  padding-bottom: 1.5rem !important;
}
.pl-4,
.px-4 {
  padding-left: 1.5rem !important;
}
.p-5 {
  padding: 3rem !important;
}
.pt-5,
.py-5 {
  padding-top: 3rem !important;
}
.pr-5,
.px-5 {
  padding-right: 3rem !important;
}
.pb-5,
.py-5 {
  padding-bottom: 3rem !important;
}
.pl-5,
.px-5 {
  padding-left: 3rem !important;
}
.m-auto {
  margin: auto !important;
}
.mt-auto,
.my-auto {
  margin-top: auto !important;
}
.mr-auto,
.mx-auto {
  margin-right: auto !important;
}
.mb-auto,
.my-auto {
  margin-bottom: auto !important;
}
.ml-auto,
.mx-auto {
  margin-left: auto !important;
}
@media (min-width: 576px) {
  .m-sm-0 {
    margin: 0 !important;
  }
  .mt-sm-0,
  .my-sm-0 {
    margin-top: 0 !important;
  }
  .mr-sm-0,
  .mx-sm-0 {
    margin-right: 0 !important;
  }
  .mb-sm-0,
  .my-sm-0 {
    margin-bottom: 0 !important;
  }
  .ml-sm-0,
  .mx-sm-0 {
    margin-left: 0 !important;
  }
  .m-sm-1 {
    margin: 0.25rem !important;
  }
  .mt-sm-1,
  .my-sm-1 {
    margin-top: 0.25rem !important;
  }
  .mr-sm-1,
  .mx-sm-1 {
    margin-right: 0.25rem !important;
  }
  .mb-sm-1,
  .my-sm-1 {
    margin-bottom: 0.25rem !important;
  }
  .ml-sm-1,
  .mx-sm-1 {
    margin-left: 0.25rem !important;
  }
  .m-sm-2 {
    margin: 0.5rem !important;
  }
  .mt-sm-2,
  .my-sm-2 {
    margin-top: 0.5rem !important;
  }
  .mr-sm-2,
  .mx-sm-2 {
    margin-right: 0.5rem !important;
  }
  .mb-sm-2,
  .my-sm-2 {
    margin-bottom: 0.5rem !important;
  }
  .ml-sm-2,
  .mx-sm-2 {
    margin-left: 0.5rem !important;
  }
  .m-sm-3 {
    margin: 1rem !important;
  }
  .mt-sm-3,
  .my-sm-3 {
    margin-top: 1rem !important;
  }
  .mr-sm-3,
  .mx-sm-3 {
    margin-right: 1rem !important;
  }
  .mb-sm-3,
  .my-sm-3 {
    margin-bottom: 1rem !important;
  }
  .ml-sm-3,
  .mx-sm-3 {
    margin-left: 1rem !important;
  }
  .m-sm-4 {
    margin: 1.5rem !important;
  }
  .mt-sm-4,
  .my-sm-4 {
    margin-top: 1.5rem !important;
  }
  .mr-sm-4,
  .mx-sm-4 {
    margin-right: 1.5rem !important;
  }
  .mb-sm-4,
  .my-sm-4 {
    margin-bottom: 1.5rem !important;
  }
  .ml-sm-4,
  .mx-sm-4 {
    margin-left: 1.5rem !important;
  }
  .m-sm-5 {
    margin: 3rem !important;
  }
  .mt-sm-5,
  .my-sm-5 {
    margin-top: 3rem !important;
  }
  .mr-sm-5,
  .mx-sm-5 {
    margin-right: 3rem !important;
  }
  .mb-sm-5,
  .my-sm-5 {
    margin-bottom: 3rem !important;
  }
  .ml-sm-5,
  .mx-sm-5 {
    margin-left: 3rem !important;
  }
  .p-sm-0 {
    padding: 0 !important;
  }
  .pt-sm-0,
  .py-sm-0 {
    padding-top: 0 !important;
  }
  .pr-sm-0,
  .px-sm-0 {
    padding-right: 0 !important;
  }
  .pb-sm-0,
  .py-sm-0 {
    padding-bottom: 0 !important;
  }
  .pl-sm-0,
  .px-sm-0 {
    padding-left: 0 !important;
  }
  .p-sm-1 {
    padding: 0.25rem !important;
  }
  .pt-sm-1,
  .py-sm-1 {
    padding-top: 0.25rem !important;
  }
  .pr-sm-1,
  .px-sm-1 {
    padding-right: 0.25rem !important;
  }
  .pb-sm-1,
  .py-sm-1 {
    padding-bottom: 0.25rem !important;
  }
  .pl-sm-1,
  .px-sm-1 {
    padding-left: 0.25rem !important;
  }
  .p-sm-2 {
    padding: 0.5rem !important;
  }
  .pt-sm-2,
  .py-sm-2 {
    padding-top: 0.5rem !important;
  }
  .pr-sm-2,
  .px-sm-2 {
    padding-right: 0.5rem !important;
  }
  .pb-sm-2,
  .py-sm-2 {
    padding-bottom: 0.5rem !important;
  }
  .pl-sm-2,
  .px-sm-2 {
    padding-left: 0.5rem !important;
  }
  .p-sm-3 {
    padding: 1rem !important;
  }
  .pt-sm-3,
  .py-sm-3 {
    padding-top: 1rem !important;
  }
  .pr-sm-3,
  .px-sm-3 {
    padding-right: 1rem !important;
  }
  .pb-sm-3,
  .py-sm-3 {
    padding-bottom: 1rem !important;
  }
  .pl-sm-3,
  .px-sm-3 {
    padding-left: 1rem !important;
  }
  .p-sm-4 {
    padding: 1.5rem !important;
  }
  .pt-sm-4,
  .py-sm-4 {
    padding-top: 1.5rem !important;
  }
  .pr-sm-4,
  .px-sm-4 {
    padding-right: 1.5rem !important;
  }
  .pb-sm-4,
  .py-sm-4 {
    padding-bottom: 1.5rem !important;
  }
  .pl-sm-4,
  .px-sm-4 {
    padding-left: 1.5rem !important;
  }
  .p-sm-5 {
    padding: 3rem !important;
  }
  .pt-sm-5,
  .py-sm-5 {
    padding-top: 3rem !important;
  }
  .pr-sm-5,
  .px-sm-5 {
    padding-right: 3rem !important;
  }
  .pb-sm-5,
  .py-sm-5 {
    padding-bottom: 3rem !important;
  }
  .pl-sm-5,
  .px-sm-5 {
    padding-left: 3rem !important;
  }
  .m-sm-auto {
    margin: auto !important;
  }
  .mt-sm-auto,
  .my-sm-auto {
    margin-top: auto !important;
  }
  .mr-sm-auto,
  .mx-sm-auto {
    margin-right: auto !important;
  }
  .mb-sm-auto,
  .my-sm-auto {
    margin-bottom: auto !important;
  }
  .ml-sm-auto,
  .mx-sm-auto {
    margin-left: auto !important;
  }
}
@media (min-width: 768px) {
  .m-md-0 {
    margin: 0 !important;
  }
  .mt-md-0,
  .my-md-0 {
    margin-top: 0 !important;
  }
  .mr-md-0,
  .mx-md-0 {
    margin-right: 0 !important;
  }
  .mb-md-0,
  .my-md-0 {
    margin-bottom: 0 !important;
  }
  .ml-md-0,
  .mx-md-0 {
    margin-left: 0 !important;
  }
  .m-md-1 {
    margin: 0.25rem !important;
  }
  .mt-md-1,
  .my-md-1 {
    margin-top: 0.25rem !important;
  }
  .mr-md-1,
  .mx-md-1 {
    margin-right: 0.25rem !important;
  }
  .mb-md-1,
  .my-md-1 {
    margin-bottom: 0.25rem !important;
  }
  .ml-md-1,
  .mx-md-1 {
    margin-left: 0.25rem !important;
  }
  .m-md-2 {
    margin: 0.5rem !important;
  }
  .mt-md-2,
  .my-md-2 {
    margin-top: 0.5rem !important;
  }
  .mr-md-2,
  .mx-md-2 {
    margin-right: 0.5rem !important;
  }
  .mb-md-2,
  .my-md-2 {
    margin-bottom: 0.5rem !important;
  }
  .ml-md-2,
  .mx-md-2 {
    margin-left: 0.5rem !important;
  }
  .m-md-3 {
    margin: 1rem !important;
  }
  .mt-md-3,
  .my-md-3 {
    margin-top: 1rem !important;
  }
  .mr-md-3,
  .mx-md-3 {
    margin-right: 1rem !important;
  }
  .mb-md-3,
  .my-md-3 {
    margin-bottom: 1rem !important;
  }
  .ml-md-3,
  .mx-md-3 {
    margin-left: 1rem !important;
  }
  .m-md-4 {
    margin: 1.5rem !important;
  }
  .mt-md-4,
  .my-md-4 {
    margin-top: 1.5rem !important;
  }
  .mr-md-4,
  .mx-md-4 {
    margin-right: 1.5rem !important;
  }
  .mb-md-4,
  .my-md-4 {
    margin-bottom: 1.5rem !important;
  }
  .ml-md-4,
  .mx-md-4 {
    margin-left: 1.5rem !important;
  }
  .m-md-5 {
    margin: 3rem !important;
  }
  .mt-md-5,
  .my-md-5 {
    margin-top: 3rem !important;
  }
  .mr-md-5,
  .mx-md-5 {
    margin-right: 3rem !important;
  }
  .mb-md-5,
  .my-md-5 {
    margin-bottom: 3rem !important;
  }
  .ml-md-5,
  .mx-md-5 {
    margin-left: 3rem !important;
  }
  .p-md-0 {
    padding: 0 !important;
  }
  .pt-md-0,
  .py-md-0 {
    padding-top: 0 !important;
  }
  .pr-md-0,
  .px-md-0 {
    padding-right: 0 !important;
  }
  .pb-md-0,
  .py-md-0 {
    padding-bottom: 0 !important;
  }
  .pl-md-0,
  .px-md-0 {
    padding-left: 0 !important;
  }
  .p-md-1 {
    padding: 0.25rem !important;
  }
  .pt-md-1,
  .py-md-1 {
    padding-top: 0.25rem !important;
  }
  .pr-md-1,
  .px-md-1 {
    padding-right: 0.25rem !important;
  }
  .pb-md-1,
  .py-md-1 {
    padding-bottom: 0.25rem !important;
  }
  .pl-md-1,
  .px-md-1 {
    padding-left: 0.25rem !important;
  }
  .p-md-2 {
    padding: 0.5rem !important;
  }
  .pt-md-2,
  .py-md-2 {
    padding-top: 0.5rem !important;
  }
  .pr-md-2,
  .px-md-2 {
    padding-right: 0.5rem !important;
  }
  .pb-md-2,
  .py-md-2 {
    padding-bottom: 0.5rem !important;
  }
  .pl-md-2,
  .px-md-2 {
    padding-left: 0.5rem !important;
  }
  .p-md-3 {
    padding: 1rem !important;
  }
  .pt-md-3,
  .py-md-3 {
    padding-top: 1rem !important;
  }
  .pr-md-3,
  .px-md-3 {
    padding-right: 1rem !important;
  }
  .pb-md-3,
  .py-md-3 {
    padding-bottom: 1rem !important;
  }
  .pl-md-3,
  .px-md-3 {
    padding-left: 1rem !important;
  }
  .p-md-4 {
    padding: 1.5rem !important;
  }
  .pt-md-4,
  .py-md-4 {
    padding-top: 1.5rem !important;
  }
  .pr-md-4,
  .px-md-4 {
    padding-right: 1.5rem !important;
  }
  .pb-md-4,
  .py-md-4 {
    padding-bottom: 1.5rem !important;
  }
  .pl-md-4,
  .px-md-4 {
    padding-left: 1.5rem !important;
  }
  .p-md-5 {
    padding: 3rem !important;
  }
  .pt-md-5,
  .py-md-5 {
    padding-top: 3rem !important;
  }
  .pr-md-5,
  .px-md-5 {
    padding-right: 3rem !important;
  }
  .pb-md-5,
  .py-md-5 {
    padding-bottom: 3rem !important;
  }
  .pl-md-5,
  .px-md-5 {
    padding-left: 3rem !important;
  }
  .m-md-auto {
    margin: auto !important;
  }
  .mt-md-auto,
  .my-md-auto {
    margin-top: auto !important;
  }
  .mr-md-auto,
  .mx-md-auto {
    margin-right: auto !important;
  }
  .mb-md-auto,
  .my-md-auto {
    margin-bottom: auto !important;
  }
  .ml-md-auto,
  .mx-md-auto {
    margin-left: auto !important;
  }
}
@media (min-width: 992px) {
  .m-lg-0 {
    margin: 0 !important;
  }
  .mt-lg-0,
  .my-lg-0 {
    margin-top: 0 !important;
  }
  .mr-lg-0,
  .mx-lg-0 {
    margin-right: 0 !important;
  }
  .mb-lg-0,
  .my-lg-0 {
    margin-bottom: 0 !important;
  }
  .ml-lg-0,
  .mx-lg-0 {
    margin-left: 0 !important;
  }
  .m-lg-1 {
    margin: 0.25rem !important;
  }
  .mt-lg-1,
  .my-lg-1 {
    margin-top: 0.25rem !important;
  }
  .mr-lg-1,
  .mx-lg-1 {
    margin-right: 0.25rem !important;
  }
  .mb-lg-1,
  .my-lg-1 {
    margin-bottom: 0.25rem !important;
  }
  .ml-lg-1,
  .mx-lg-1 {
    margin-left: 0.25rem !important;
  }
  .m-lg-2 {
    margin: 0.5rem !important;
  }
  .mt-lg-2,
  .my-lg-2 {
    margin-top: 0.5rem !important;
  }
  .mr-lg-2,
  .mx-lg-2 {
    margin-right: 0.5rem !important;
  }
  .mb-lg-2,
  .my-lg-2 {
    margin-bottom: 0.5rem !important;
  }
  .ml-lg-2,
  .mx-lg-2 {
    margin-left: 0.5rem !important;
  }
  .m-lg-3 {
    margin: 1rem !important;
  }
  .mt-lg-3,
  .my-lg-3 {
    margin-top: 1rem !important;
  }
  .mr-lg-3,
  .mx-lg-3 {
    margin-right: 1rem !important;
  }
  .mb-lg-3,
  .my-lg-3 {
    margin-bottom: 1rem !important;
  }
  .ml-lg-3,
  .mx-lg-3 {
    margin-left: 1rem !important;
  }
  .m-lg-4 {
    margin: 1.5rem !important;
  }
  .mt-lg-4,
  .my-lg-4 {
    margin-top: 1.5rem !important;
  }
  .mr-lg-4,
  .mx-lg-4 {
    margin-right: 1.5rem !important;
  }
  .mb-lg-4,
  .my-lg-4 {
    margin-bottom: 1.5rem !important;
  }
  .ml-lg-4,
  .mx-lg-4 {
    margin-left: 1.5rem !important;
  }
  .m-lg-5 {
    margin: 3rem !important;
  }
  .mt-lg-5,
  .my-lg-5 {
    margin-top: 3rem !important;
  }
  .mr-lg-5,
  .mx-lg-5 {
    margin-right: 3rem !important;
  }
  .mb-lg-5,
  .my-lg-5 {
    margin-bottom: 3rem !important;
  }
  .ml-lg-5,
  .mx-lg-5 {
    margin-left: 3rem !important;
  }
  .p-lg-0 {
    padding: 0 !important;
  }
  .pt-lg-0,
  .py-lg-0 {
    padding-top: 0 !important;
  }
  .pr-lg-0,
  .px-lg-0 {
    padding-right: 0 !important;
  }
  .pb-lg-0,
  .py-lg-0 {
    padding-bottom: 0 !important;
  }
  .pl-lg-0,
  .px-lg-0 {
    padding-left: 0 !important;
  }
  .p-lg-1 {
    padding: 0.25rem !important;
  }
  .pt-lg-1,
  .py-lg-1 {
    padding-top: 0.25rem !important;
  }
  .pr-lg-1,
  .px-lg-1 {
    padding-right: 0.25rem !important;
  }
  .pb-lg-1,
  .py-lg-1 {
    padding-bottom: 0.25rem !important;
  }
  .pl-lg-1,
  .px-lg-1 {
    padding-left: 0.25rem !important;
  }
  .p-lg-2 {
    padding: 0.5rem !important;
  }
  .pt-lg-2,
  .py-lg-2 {
    padding-top: 0.5rem !important;
  }
  .pr-lg-2,
  .px-lg-2 {
    padding-right: 0.5rem !important;
  }
  .pb-lg-2,
  .py-lg-2 {
    padding-bottom: 0.5rem !important;
  }
  .pl-lg-2,
  .px-lg-2 {
    padding-left: 0.5rem !important;
  }
  .p-lg-3 {
    padding: 1rem !important;
  }
  .pt-lg-3,
  .py-lg-3 {
    padding-top: 1rem !important;
  }
  .pr-lg-3,
  .px-lg-3 {
    padding-right: 1rem !important;
  }
  .pb-lg-3,
  .py-lg-3 {
    padding-bottom: 1rem !important;
  }
  .pl-lg-3,
  .px-lg-3 {
    padding-left: 1rem !important;
  }
  .p-lg-4 {
    padding: 1.5rem !important;
  }
  .pt-lg-4,
  .py-lg-4 {
    padding-top: 1.5rem !important;
  }
  .pr-lg-4,
  .px-lg-4 {
    padding-right: 1.5rem !important;
  }
  .pb-lg-4,
  .py-lg-4 {
    padding-bottom: 1.5rem !important;
  }
  .pl-lg-4,
  .px-lg-4 {
    padding-left: 1.5rem !important;
  }
  .p-lg-5 {
    padding: 3rem !important;
  }
  .pt-lg-5,
  .py-lg-5 {
    padding-top: 3rem !important;
  }
  .pr-lg-5,
  .px-lg-5 {
    padding-right: 3rem !important;
  }
  .pb-lg-5,
  .py-lg-5 {
    padding-bottom: 3rem !important;
  }
  .pl-lg-5,
  .px-lg-5 {
    padding-left: 3rem !important;
  }
  .m-lg-auto {
    margin: auto !important;
  }
  .mt-lg-auto,
  .my-lg-auto {
    margin-top: auto !important;
  }
  .mr-lg-auto,
  .mx-lg-auto {
    margin-right: auto !important;
  }
  .mb-lg-auto,
  .my-lg-auto {
    margin-bottom: auto !important;
  }
  .ml-lg-auto,
  .mx-lg-auto {
    margin-left: auto !important;
  }
}
@media (min-width: 1200px) {
  .m-xl-0 {
    margin: 0 !important;
  }
  .mt-xl-0,
  .my-xl-0 {
    margin-top: 0 !important;
  }
  .mr-xl-0,
  .mx-xl-0 {
    margin-right: 0 !important;
  }
  .mb-xl-0,
  .my-xl-0 {
    margin-bottom: 0 !important;
  }
  .ml-xl-0,
  .mx-xl-0 {
    margin-left: 0 !important;
  }
  .m-xl-1 {
    margin: 0.25rem !important;
  }
  .mt-xl-1,
  .my-xl-1 {
    margin-top: 0.25rem !important;
  }
  .mr-xl-1,
  .mx-xl-1 {
    margin-right: 0.25rem !important;
  }
  .mb-xl-1,
  .my-xl-1 {
    margin-bottom: 0.25rem !important;
  }
  .ml-xl-1,
  .mx-xl-1 {
    margin-left: 0.25rem !important;
  }
  .m-xl-2 {
    margin: 0.5rem !important;
  }
  .mt-xl-2,
  .my-xl-2 {
    margin-top: 0.5rem !important;
  }
  .mr-xl-2,
  .mx-xl-2 {
    margin-right: 0.5rem !important;
  }
  .mb-xl-2,
  .my-xl-2 {
    margin-bottom: 0.5rem !important;
  }
  .ml-xl-2,
  .mx-xl-2 {
    margin-left: 0.5rem !important;
  }
  .m-xl-3 {
    margin: 1rem !important;
  }
  .mt-xl-3,
  .my-xl-3 {
    margin-top: 1rem !important;
  }
  .mr-xl-3,
  .mx-xl-3 {
    margin-right: 1rem !important;
  }
  .mb-xl-3,
  .my-xl-3 {
    margin-bottom: 1rem !important;
  }
  .ml-xl-3,
  .mx-xl-3 {
    margin-left: 1rem !important;
  }
  .m-xl-4 {
    margin: 1.5rem !important;
  }
  .mt-xl-4,
  .my-xl-4 {
    margin-top: 1.5rem !important;
  }
  .mr-xl-4,
  .mx-xl-4 {
    margin-right: 1.5rem !important;
  }
  .mb-xl-4,
  .my-xl-4 {
    margin-bottom: 1.5rem !important;
  }
  .ml-xl-4,
  .mx-xl-4 {
    margin-left: 1.5rem !important;
  }
  .m-xl-5 {
    margin: 3rem !important;
  }
  .mt-xl-5,
  .my-xl-5 {
    margin-top: 3rem !important;
  }
  .mr-xl-5,
  .mx-xl-5 {
    margin-right: 3rem !important;
  }
  .mb-xl-5,
  .my-xl-5 {
    margin-bottom: 3rem !important;
  }
  .ml-xl-5,
  .mx-xl-5 {
    margin-left: 3rem !important;
  }
  .p-xl-0 {
    padding: 0 !important;
  }
  .pt-xl-0,
  .py-xl-0 {
    padding-top: 0 !important;
  }
  .pr-xl-0,
  .px-xl-0 {
    padding-right: 0 !important;
  }
  .pb-xl-0,
  .py-xl-0 {
    padding-bottom: 0 !important;
  }
  .pl-xl-0,
  .px-xl-0 {
    padding-left: 0 !important;
  }
  .p-xl-1 {
    padding: 0.25rem !important;
  }
  .pt-xl-1,
  .py-xl-1 {
    padding-top: 0.25rem !important;
  }
  .pr-xl-1,
  .px-xl-1 {
    padding-right: 0.25rem !important;
  }
  .pb-xl-1,
  .py-xl-1 {
    padding-bottom: 0.25rem !important;
  }
  .pl-xl-1,
  .px-xl-1 {
    padding-left: 0.25rem !important;
  }
  .p-xl-2 {
    padding: 0.5rem !important;
  }
  .pt-xl-2,
  .py-xl-2 {
    padding-top: 0.5rem !important;
  }
  .pr-xl-2,
  .px-xl-2 {
    padding-right: 0.5rem !important;
  }
  .pb-xl-2,
  .py-xl-2 {
    padding-bottom: 0.5rem !important;
  }
  .pl-xl-2,
  .px-xl-2 {
    padding-left: 0.5rem !important;
  }
  .p-xl-3 {
    padding: 1rem !important;
  }
  .pt-xl-3,
  .py-xl-3 {
    padding-top: 1rem !important;
  }
  .pr-xl-3,
  .px-xl-3 {
    padding-right: 1rem !important;
  }
  .pb-xl-3,
  .py-xl-3 {
    padding-bottom: 1rem !important;
  }
  .pl-xl-3,
  .px-xl-3 {
    padding-left: 1rem !important;
  }
  .p-xl-4 {
    padding: 1.5rem !important;
  }
  .pt-xl-4,
  .py-xl-4 {
    padding-top: 1.5rem !important;
  }
  .pr-xl-4,
  .px-xl-4 {
    padding-right: 1.5rem !important;
  }
  .pb-xl-4,
  .py-xl-4 {
    padding-bottom: 1.5rem !important;
  }
  .pl-xl-4,
  .px-xl-4 {
    padding-left: 1.5rem !important;
  }
  .p-xl-5 {
    padding: 3rem !important;
  }
  .pt-xl-5,
  .py-xl-5 {
    padding-top: 3rem !important;
  }
  .pr-xl-5,
  .px-xl-5 {
    padding-right: 3rem !important;
  }
  .pb-xl-5,
  .py-xl-5 {
    padding-bottom: 3rem !important;
  }
  .pl-xl-5,
  .px-xl-5 {
    padding-left: 3rem !important;
  }
  .m-xl-auto {
    margin: auto !important;
  }
  .mt-xl-auto,
  .my-xl-auto {
    margin-top: auto !important;
  }
  .mr-xl-auto,
  .mx-xl-auto {
    margin-right: auto !important;
  }
  .mb-xl-auto,
  .my-xl-auto {
    margin-bottom: auto !important;
  }
  .ml-xl-auto,
  .mx-xl-auto {
    margin-left: auto !important;
  }
}
.text-monospace {
  font-family: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
}
.text-justify {
  text-align: justify !important;
}
.text-nowrap {
  white-space: nowrap !important;
}
.text-truncate {
  overflow: hidden;
  text-overflow: ellipsis;
  white-space: nowrap;
}
.text-left {
  text-align: left !important;
}
.text-right {
  text-align: right !important;
}
.text-center {
  text-align: center !important;
}
@media (min-width: 576px) {
  .text-sm-left {
    text-align: left !important;
  }
  .text-sm-right {
    text-align: right !important;
  }
  .text-sm-center {
    text-align: center !important;
  }
}
@media (min-width: 768px) {
  .text-md-left {
    text-align: left !important;
  }
  .text-md-right {
    text-align: right !important;
  }
  .text-md-center {
    text-align: center !important;
  }
}
@media (min-width: 992px) {
  .text-lg-left {
    text-align: left !important;
  }
  .text-lg-right {
    text-align: right !important;
  }
  .text-lg-center {
    text-align: center !important;
  }
}
@media (min-width: 1200px) {
  .text-xl-left {
    text-align: left !important;
  }
  .text-xl-right {
    text-align: right !important;
  }
  .text-xl-center {
    text-align: center !important;
  }
}
.text-lowercase {
  text-transform: lowercase !important;
}
.text-uppercase {
  text-transform: uppercase !important;
}
.text-capitalize {
  text-transform: capitalize !important;
}
.font-weight-light {
  font-weight: 300 !important;
}
.font-weight-normal {
  font-weight: 400 !important;
}
.font-weight-bold {
  font-weight: 700 !important;
}
.font-italic {
  font-style: italic !important;
}
.text-white {
  color: #fff !important;
}
.text-primary {
  color: #007bff !important;
}
a.text-primary:hover,
a.text-primary:focus {
  color: #0062cc !important;
}
.text-secondary {
  color: #6c757d !important;
}
a.text-secondary:hover,
a.text-secondary:focus {
  color: #545b62 !important;
}
.text-success {
  color: #28a745 !important;
}
a.text-success:hover,
a.text-success:focus {
  color: #1e7e34 !important;
}
.text-info {
  color: #17a2b8 !important;
}
a.text-info:hover,
a.text-info:focus {
  color: #117a8b !important;
}
.text-warning {
  color: #ffc107 !important;
}
a.text-warning:hover,
a.text-warning:focus {
  color: #d39e00 !important;
}
.text-danger {
  color: #dc3545 !important;
}
a.text-danger:hover,
a.text-danger:focus {
  color: #bd2130 !important;
}
.text-light {
  color: #f8f9fa !important;
}
a.text-light:hover,
a.text-light:focus {
  color: #dae0e5 !important;
}
.text-dark {
  color: #343a40 !important;
}
a.text-dark:hover,
a.text-dark:focus {
  color: #1d2124 !important;
}
.text-body {
  color: #212529 !important;
}
.text-muted {
  color: #6c757d !important;
}
.text-black-50 {
  color: rgba(0, 0, 0, 0.5) !important;
}
.text-white-50 {
  color: rgba(255, 255, 255, 0.5) !important;
}
.text-hide {
  font: 0/0 a;
  color: transparent;
  text-shadow: none;
  background-color: transparent;
  border: 0;
}
.visible {
  visibility: visible !important;
}
.invisible {
  visibility: hidden !important;
}
@media print {
  *,
  *::before,
  *::after {
    text-shadow: none !important;
    box-shadow: none !important;
  }
  a:not(.btn) {
    text-decoration: underline;
  }
  abbr[title]::after {
    content: " (" attr(title) ")";
  }
  pre {
    white-space: pre-wrap !important;
  }
  pre,
  blockquote {
    border: 1px solid #adb5bd;
    page-break-inside: avoid;
  }
  thead {
    display: table-header-group;
  }
  tr,
  img {
    page-break-inside: avoid;
  }
  p,
  h2,
  h3 {
    orphans: 3;
    widows: 3;
  }
  h2,
  h3 {
    page-break-after: avoid;
  }
  @page {
    size: a3;
  }
  body {
    min-width: 992px !important;
  }
  .container {
    min-width: 992px !important;
  }
  .navbar {
    display: none;
  }
  .badge {
    border: 1px solid #000;
  }
  .table {
    border-collapse: collapse !important;
  }
  .table td,
  .table th {
    background-color: #fff !important;
  }
  .table-bordered th,
  .table-bordered td {
    border: 1px solid #dee2e6 !important;
  }
  .table-dark {
    color: inherit;
  }
  .table-dark th,
  .table-dark td,
  .table-dark thead th,
  .table-dark tbody + tbody {
    border-color: #dee2e6;
  }
  .table .thead-dark th {
    color: inherit;
    border-color: #dee2e6;
  }
}


.pre {
  background-color: black;
  color: white;
  padding: 15px;
  width: 100%;
  margin-top: 15px;
}
li.active {
  background-color: rgba(30, 221, 221, 0.616);
}
pre {
  color: white;
}
.word-break {
  word-wrap: break-word;
  word-break: normal;
}
.codepre {
  height: 800px;
  overflow: scroll;
}

</style></head>

<body class="login-body">

<div class="container-fluid">
    <div id="app" v-cloak>
        <div class="row" >
            <div class="col-md-4">
                <div class="pre">
                    <div><?php echo $msg; ?></div>
                    <span><?php echo $data->class.'('.$data->getErrortype().')'.'<br>'; ?></span>
                    <h3 class="word-break" style="color:red;"><?php echo $data->errstr.'<br>'; ?></h3>
                    <span><?php echo $data->file.':'.$data->line.'<br>'; ?></span>
                </div>
                <div class="pre" >
                    <div class="alert " :class="{ 'alert-warning' : isActive(trace.id),'alert-info':!isActive(trace.id)}" v-for="trace in traces" @click="changeActive(trace.id)">
                        <strong class="word-break">
                        {{trace.file}}
                            <span class="badge">
                                :{{trace.line}}
                            </span>
                            <a :href="url(trace.file,trace.line)">打开文件</a>
                        </strong> 
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div v-show="trace.id==active" class="pre codepre" v-for="trace in traces">
                    <span>{{trace.file}}</span>
                    <pre><ol><li :value="content.line" :class="{ active : trace.line==content.line}" v-for="content in trace.contents">{{content.content}}</li></ol></pre>
                </div>
            </div>
        </div> 
    </div>   
</div>
<script>
    DATA=<?php echo $contents; ?>;
</script>
<script type="text/javascript">!function(e){var t={};function n(r){if(t[r])return t[r].exports;var i=t[r]={i:r,l:!1,exports:{}};return e[r].call(i.exports,i,i.exports,n),i.l=!0,i.exports}n.m=e,n.c=t,n.d=function(e,t,r){n.o(e,t)||Object.defineProperty(e,t,{enumerable:!0,get:r})},n.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},n.t=function(e,t){if(1&t&&(e=n(e)),8&t)return e;if(4&t&&"object"==typeof e&&e&&e.__esModule)return e;var r=Object.create(null);if(n.r(r),Object.defineProperty(r,"default",{enumerable:!0,value:e}),2&t&&"string"!=typeof e)for(var i in e)n.d(r,i,function(t){return e[t]}.bind(null,i));return r},n.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return n.d(t,"a",t),t},n.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},n.p="./",n(n.s=1)}([function(e,t){var n;n=function(){return this}();try{n=n||Function("return this")()||(0,eval)("this")}catch(e){"object"==typeof window&&(n=window)}e.exports=n},function(e,t,n){"use strict";n(2),n(4),new(function(e){return e&&e.__esModule?e:{default:e}}(n(6)).default)({el:"#app",data:function(){return{traces:DATA,active:0}},methods:{changeActive:function(e){this.active=e},isActive:function(e){return this.active==e},url:function(e,t){return"code:/"+(e=(e=e||" ").replace(/\\/g,"/"))+":"+t}}})},function(e,t,n){},,function(e,t,n){},,function(e,t,n){(function(t,n){
/*!
 * Vue.js v2.5.17
 * (c) 2014-2018 Evan You
 * Released under the MIT License.
 */
e.exports=function(){"use strict";var e=Object.freeze({});function r(e){return null==e}function i(e){return null!=e}function o(e){return!0===e}function a(e){return"string"==typeof e||"number"==typeof e||"symbol"==typeof e||"boolean"==typeof e}function s(e){return null!==e&&"object"==typeof e}var c=Object.prototype.toString;function u(e){return"[object Object]"===c.call(e)}function l(e){var t=parseFloat(String(e));return 0<=t&&Math.floor(t)===t&&isFinite(e)}function f(e){return null==e?"":"object"==typeof e?JSON.stringify(e,null,2):String(e)}function p(e){var t=parseFloat(e);return isNaN(t)?e:t}function d(e,t){for(var n=Object.create(null),r=e.split(","),i=0;i<r.length;i++)n[r[i]]=!0;return t?function(e){return n[e.toLowerCase()]}:function(e){return n[e]}}var v=d("slot,component",!0),h=d("key,ref,slot,slot-scope,is");function m(e,t){if(e.length){var n=e.indexOf(t);if(-1<n)return e.splice(n,1)}}var y=Object.prototype.hasOwnProperty;function g(e,t){return y.call(e,t)}function _(e){var t=Object.create(null);return function(n){return t[n]||(t[n]=e(n))}}var b=/-(\w)/g,$=_(function(e){return e.replace(b,function(e,t){return t?t.toUpperCase():""})}),w=_(function(e){return e.charAt(0).toUpperCase()+e.slice(1)}),x=/\B([A-Z])/g,C=_(function(e){return e.replace(x,"-$1").toLowerCase()}),k=Function.prototype.bind?function(e,t){return e.bind(t)}:function(e,t){function n(n){var r=arguments.length;return r?1<r?e.apply(t,arguments):e.call(t,n):e.call(t)}return n._length=e.length,n};function A(e,t){t=t||0;for(var n=e.length-t,r=new Array(n);n--;)r[n]=e[n+t];return r}function O(e,t){for(var n in t)e[n]=t[n];return e}function T(e){for(var t={},n=0;n<e.length;n++)e[n]&&O(t,e[n]);return t}function S(e,t,n){}var E=function(e,t,n){return!1},j=function(e){return e};function I(e,t){if(e===t)return!0;var n=s(e),r=s(t);if(!n||!r)return!n&&!r&&String(e)===String(t);try{var i=Array.isArray(e),o=Array.isArray(t);if(i&&o)return e.length===t.length&&e.every(function(e,n){return I(e,t[n])});if(i||o)return!1;var a=Object.keys(e),c=Object.keys(t);return a.length===c.length&&a.every(function(n){return I(e[n],t[n])})}catch(n){return!1}}function L(e,t){for(var n=0;n<e.length;n++)if(I(e[n],t))return n;return-1}function N(e){var t=!1;return function(){t||(t=!0,e.apply(this,arguments))}}var M="data-server-rendered",P=["component","directive","filter"],D=["beforeCreate","created","beforeMount","mounted","beforeUpdate","updated","beforeDestroy","destroyed","activated","deactivated","errorCaptured"],F={optionMergeStrategies:Object.create(null),silent:!1,productionTip:!1,devtools:!1,performance:!1,errorHandler:null,warnHandler:null,ignoredElements:[],keyCodes:Object.create(null),isReservedTag:E,isReservedAttr:E,isUnknownElement:E,getTagNamespace:S,parsePlatformTagName:j,mustUseProp:E,_lifecycleHooks:D};function R(e,t,n,r){Object.defineProperty(e,t,{value:n,enumerable:!!r,writable:!0,configurable:!0})}var H,B=/[^\w.$]/,U="__proto__"in{},V="undefined"!=typeof window,z="undefined"!=typeof WXEnvironment&&!!WXEnvironment.platform,K=z&&WXEnvironment.platform.toLowerCase(),J=V&&window.navigator.userAgent.toLowerCase(),q=J&&/msie|trident/.test(J),W=J&&0<J.indexOf("msie 9.0"),G=J&&0<J.indexOf("edge/"),Z=(J&&J.indexOf("android"),J&&/iphone|ipad|ipod|ios/.test(J)||"ios"===K),X=(J&&/chrome\/\d+/.test(J),{}.watch),Y=!1;if(V)try{var Q={};Object.defineProperty(Q,"passive",{get:function(){Y=!0}}),window.addEventListener("test-passive",null,Q)}catch(_){}var ee=function(){return void 0===H&&(H=!V&&!z&&void 0!==t&&"server"===t.process.env.VUE_ENV),H},te=V&&window.__VUE_DEVTOOLS_GLOBAL_HOOK__;function ne(e){return"function"==typeof e&&/native code/.test(e.toString())}var re,ie="undefined"!=typeof Symbol&&ne(Symbol)&&"undefined"!=typeof Reflect&&ne(Reflect.ownKeys);re="undefined"!=typeof Set&&ne(Set)?Set:function(){function e(){this.set=Object.create(null)}return e.prototype.has=function(e){return!0===this.set[e]},e.prototype.add=function(e){this.set[e]=!0},e.prototype.clear=function(){this.set=Object.create(null)},e}();var oe=S,ae=0,se=function(){this.id=ae++,this.subs=[]};se.prototype.addSub=function(e){this.subs.push(e)},se.prototype.removeSub=function(e){m(this.subs,e)},se.prototype.depend=function(){se.target&&se.target.addDep(this)},se.prototype.notify=function(){for(var e=this.subs.slice(),t=0,n=e.length;t<n;t++)e[t].update()},se.target=null;var ce=[];function ue(e){se.target&&ce.push(se.target),se.target=e}function le(){se.target=ce.pop()}var fe=function(e,t,n,r,i,o,a,s){this.tag=e,this.data=t,this.children=n,this.text=r,this.elm=i,this.ns=void 0,this.context=o,this.fnContext=void 0,this.fnOptions=void 0,this.fnScopeId=void 0,this.key=t&&t.key,this.componentOptions=a,this.componentInstance=void 0,this.parent=void 0,this.raw=!1,this.isStatic=!1,this.isRootInsert=!0,this.isComment=!1,this.isCloned=!1,this.isOnce=!1,this.asyncFactory=s,this.asyncMeta=void 0,this.isAsyncPlaceholder=!1},pe={child:{configurable:!0}};pe.child.get=function(){return this.componentInstance},Object.defineProperties(fe.prototype,pe);var de=function(e){void 0===e&&(e="");var t=new fe;return t.text=e,t.isComment=!0,t};function ve(e){return new fe(void 0,void 0,void 0,String(e))}function he(e){var t=new fe(e.tag,e.data,e.children,e.text,e.elm,e.context,e.componentOptions,e.asyncFactory);return t.ns=e.ns,t.isStatic=e.isStatic,t.key=e.key,t.isComment=e.isComment,t.fnContext=e.fnContext,t.fnOptions=e.fnOptions,t.fnScopeId=e.fnScopeId,t.isCloned=!0,t}var me=Array.prototype,ye=Object.create(me);["push","pop","shift","unshift","splice","sort","reverse"].forEach(function(e){var t=me[e];R(ye,e,function(){for(var n=[],r=arguments.length;r--;)n[r]=arguments[r];var i,o=t.apply(this,n),a=this.__ob__;switch(e){case"push":case"unshift":i=n;break;case"splice":i=n.slice(2)}return i&&a.observeArray(i),a.dep.notify(),o})});var ge=Object.getOwnPropertyNames(ye),_e=!0;function be(e){_e=e}var $e=function(e){this.value=e,this.dep=new se,this.vmCount=0,R(e,"__ob__",this),Array.isArray(e)?((U?function(e,t,n){e.__proto__=t}:function(e,t,n){for(var r=0,i=n.length;r<i;r++){var o=n[r];R(e,o,t[o])}})(e,ye,ge),this.observeArray(e)):this.walk(e)};function we(e,t){var n;if(s(e)&&!(e instanceof fe))return g(e,"__ob__")&&e.__ob__ instanceof $e?n=e.__ob__:_e&&!ee()&&(Array.isArray(e)||u(e))&&Object.isExtensible(e)&&!e._isVue&&(n=new $e(e)),t&&n&&n.vmCount++,n}function xe(e,t,n,r,i){var o=new se,a=Object.getOwnPropertyDescriptor(e,t);if(!a||!1!==a.configurable){var s=a&&a.get;s||2!==arguments.length||(n=e[t]);var c=a&&a.set,u=!i&&we(n);Object.defineProperty(e,t,{enumerable:!0,configurable:!0,get:function(){var t=s?s.call(e):n;return se.target&&(o.depend(),u&&(u.dep.depend(),Array.isArray(t)&&function e(t){for(var n=void 0,r=0,i=t.length;r<i;r++)(n=t[r])&&n.__ob__&&n.__ob__.dep.depend(),Array.isArray(n)&&e(n)}(t))),t},set:function(t){var r=s?s.call(e):n;t===r||t!=t&&r!=r||(c?c.call(e,t):n=t,u=!i&&we(t),o.notify())}})}}function Ce(e,t,n){if(Array.isArray(e)&&l(t))return e.length=Math.max(e.length,t),e.splice(t,1,n),n;if(t in e&&!(t in Object.prototype))return e[t]=n;var r=e.__ob__;return e._isVue||r&&r.vmCount?n:r?(xe(r.value,t,n),r.dep.notify(),n):e[t]=n}function ke(e,t){if(Array.isArray(e)&&l(t))e.splice(t,1);else{var n=e.__ob__;e._isVue||n&&n.vmCount||g(e,t)&&(delete e[t],n&&n.dep.notify())}}$e.prototype.walk=function(e){for(var t=Object.keys(e),n=0;n<t.length;n++)xe(e,t[n])},$e.prototype.observeArray=function(e){for(var t=0,n=e.length;t<n;t++)we(e[t])};var Ae=F.optionMergeStrategies;function Oe(e,t){if(!t)return e;for(var n,r,i,o=Object.keys(t),a=0;a<o.length;a++)r=e[n=o[a]],i=t[n],g(e,n)?u(r)&&u(i)&&Oe(r,i):Ce(e,n,i);return e}function Te(e,t,n){return n?function(){var r="function"==typeof t?t.call(n,n):t,i="function"==typeof e?e.call(n,n):e;return r?Oe(r,i):i}:t?e?function(){return Oe("function"==typeof t?t.call(this,this):t,"function"==typeof e?e.call(this,this):e)}:t:e}function Se(e,t){return t?e?e.concat(t):Array.isArray(t)?t:[t]:e}function Ee(e,t,n,r){var i=Object.create(e||null);return t?O(i,t):i}Ae.data=function(e,t,n){return n?Te(e,t,n):t&&"function"!=typeof t?e:Te(e,t)},D.forEach(function(e){Ae[e]=Se}),P.forEach(function(e){Ae[e+"s"]=Ee}),Ae.watch=function(e,t,n,r){if(e===X&&(e=void 0),t===X&&(t=void 0),!t)return Object.create(e||null);if(!e)return t;var i={};for(var o in O(i,e),t){var a=i[o],s=t[o];a&&!Array.isArray(a)&&(a=[a]),i[o]=a?a.concat(s):Array.isArray(s)?s:[s]}return i},Ae.props=Ae.methods=Ae.inject=Ae.computed=function(e,t,n,r){if(!e)return t;var i=Object.create(null);return O(i,e),t&&O(i,t),i},Ae.provide=Te;var je=function(e,t){return void 0===t?e:t};function Ie(e,t,n){"function"==typeof t&&(t=t.options),function(e,t){var n=e.props;if(n){var r,i,o={};if(Array.isArray(n))for(r=n.length;r--;)"string"==typeof(i=n[r])&&(o[$(i)]={type:null});else if(u(n))for(var a in n)i=n[a],o[$(a)]=u(i)?i:{type:i};e.props=o}}(t),function(e,t){var n=e.inject;if(n){var r=e.inject={};if(Array.isArray(n))for(var i=0;i<n.length;i++)r[n[i]]={from:n[i]};else if(u(n))for(var o in n){var a=n[o];r[o]=u(a)?O({from:o},a):{from:a}}}}(t),function(e){var t=e.directives;if(t)for(var n in t){var r=t[n];"function"==typeof r&&(t[n]={bind:r,update:r})}}(t);var r=t.extends;if(r&&(e=Ie(e,r,n)),t.mixins)for(var i=0,o=t.mixins.length;i<o;i++)e=Ie(e,t.mixins[i],n);var a,s={};for(a in e)c(a);for(a in t)g(e,a)||c(a);function c(r){var i=Ae[r]||je;s[r]=i(e[r],t[r],n,r)}return s}function Le(e,t,n,r){if("string"==typeof n){var i=e[t];if(g(i,n))return i[n];var o=$(n);if(g(i,o))return i[o];var a=w(o);return g(i,a)?i[a]:i[n]||i[o]||i[a]}}function Ne(e,t,n,r){var i=t[e],o=!g(n,e),a=n[e],s=De(Boolean,i.type);if(-1<s)if(o&&!g(i,"default"))a=!1;else if(""===a||a===C(e)){var c=De(String,i.type);(c<0||s<c)&&(a=!0)}if(void 0===a){a=function(e,t,n){if(g(t,"default")){var r=t.default;return e&&e.$options.propsData&&void 0===e.$options.propsData[n]&&void 0!==e._props[n]?e._props[n]:"function"==typeof r&&"Function"!==Me(t.type)?r.call(e):r}}(r,i,e);var u=_e;be(!0),we(a),be(u)}return a}function Me(e){var t=e&&e.toString().match(/^\s*function (\w+)/);return t?t[1]:""}function Pe(e,t){return Me(e)===Me(t)}function De(e,t){if(!Array.isArray(t))return Pe(t,e)?0:-1;for(var n=0,r=t.length;n<r;n++)if(Pe(t[n],e))return n;return-1}function Fe(e,t,n){if(t)for(var r=t;r=r.$parent;){var i=r.$options.errorCaptured;if(i)for(var o=0;o<i.length;o++)try{if(!1===i[o].call(r,e,t,n))return}catch(e){Re(e,r,"errorCaptured hook")}}Re(e,t,n)}function Re(e,t,n){if(F.errorHandler)try{return F.errorHandler.call(null,e,t,n)}catch(e){He(e)}He(e)}function He(e,t,n){if(!V&&!z||"undefined"==typeof console)throw e;console.error(e)}var Be,Ue,Ve=[],ze=!1;function Ke(){ze=!1;for(var e=Ve.slice(0),t=Ve.length=0;t<e.length;t++)e[t]()}var Je=!1;if(void 0!==n&&ne(n))Ue=function(){n(Ke)};else if("undefined"==typeof MessageChannel||!ne(MessageChannel)&&"[object MessageChannelConstructor]"!==MessageChannel.toString())Ue=function(){setTimeout(Ke,0)};else{var qe=new MessageChannel,We=qe.port2;qe.port1.onmessage=Ke,Ue=function(){We.postMessage(1)}}if("undefined"!=typeof Promise&&ne(Promise)){var Ge=Promise.resolve();Be=function(){Ge.then(Ke),Z&&setTimeout(S)}}else Be=Ue;function Ze(e,t){var n;if(Ve.push(function(){if(e)try{e.call(t)}catch(e){Fe(e,t,"nextTick")}else n&&n(t)}),ze||(ze=!0,Je?Ue():Be()),!e&&"undefined"!=typeof Promise)return new Promise(function(e){n=e})}var Xe=new re;function Ye(e){!function e(t,n){var r,i,o=Array.isArray(t);if(!(!o&&!s(t)||Object.isFrozen(t)||t instanceof fe)){if(t.__ob__){var a=t.__ob__.dep.id;if(n.has(a))return;n.add(a)}if(o)for(r=t.length;r--;)e(t[r],n);else for(r=(i=Object.keys(t)).length;r--;)e(t[i[r]],n)}}(e,Xe),Xe.clear()}var Qe,et=_(function(e){var t="&"===e.charAt(0),n="~"===(e=t?e.slice(1):e).charAt(0),r="!"===(e=n?e.slice(1):e).charAt(0);return{name:e=r?e.slice(1):e,once:n,capture:r,passive:t}});function tt(e){function t(){var e=arguments,n=t.fns;if(!Array.isArray(n))return n.apply(null,arguments);for(var r=n.slice(),i=0;i<r.length;i++)r[i].apply(null,e)}return t.fns=e,t}function nt(e,t,n,i,o){var a,s,c,u;for(a in e)s=e[a],c=t[a],u=et(a),r(s)||(r(c)?(r(s.fns)&&(s=e[a]=tt(s)),n(u.name,s,u.once,u.capture,u.passive,u.params)):s!==c&&(c.fns=s,e[a]=c));for(a in t)r(e[a])&&i((u=et(a)).name,t[a],u.capture)}function rt(e,t,n){var a;e instanceof fe&&(e=e.data.hook||(e.data.hook={}));var s=e[t];function c(){n.apply(this,arguments),m(a.fns,c)}r(s)?a=tt([c]):i(s.fns)&&o(s.merged)?(a=s).fns.push(c):a=tt([s,c]),a.merged=!0,e[t]=a}function it(e,t,n,r,o){if(i(t)){if(g(t,n))return e[n]=t[n],o||delete t[n],!0;if(g(t,r))return e[n]=t[r],o||delete t[r],!0}return!1}function ot(e){return a(e)?[ve(e)]:Array.isArray(e)?function e(t,n){var s,c,u,l,f=[];for(s=0;s<t.length;s++)r(c=t[s])||"boolean"==typeof c||(l=f[u=f.length-1],Array.isArray(c)?0<c.length&&(at((c=e(c,(n||"")+"_"+s))[0])&&at(l)&&(f[u]=ve(l.text+c[0].text),c.shift()),f.push.apply(f,c)):a(c)?at(l)?f[u]=ve(l.text+c):""!==c&&f.push(ve(c)):at(c)&&at(l)?f[u]=ve(l.text+c.text):(o(t._isVList)&&i(c.tag)&&r(c.key)&&i(n)&&(c.key="__vlist"+n+"_"+s+"__"),f.push(c)));return f}(e):void 0}function at(e){return i(e)&&i(e.text)&&!1===e.isComment}function st(e,t){return(e.__esModule||ie&&"Module"===e[Symbol.toStringTag])&&(e=e.default),s(e)?t.extend(e):e}function ct(e){return e.isComment&&e.asyncFactory}function ut(e){if(Array.isArray(e))for(var t=0;t<e.length;t++){var n=e[t];if(i(n)&&(i(n.componentOptions)||ct(n)))return n}}function lt(e,t,n){n?Qe.$once(e,t):Qe.$on(e,t)}function ft(e,t){Qe.$off(e,t)}function pt(e,t,n){Qe=e,nt(t,n||{},lt,ft),Qe=void 0}function dt(e,t){var n={};if(!e)return n;for(var r=0,i=e.length;r<i;r++){var o=e[r],a=o.data;if(a&&a.attrs&&a.attrs.slot&&delete a.attrs.slot,o.context!==t&&o.fnContext!==t||!a||null==a.slot)(n.default||(n.default=[])).push(o);else{var s=a.slot,c=n[s]||(n[s]=[]);"template"===o.tag?c.push.apply(c,o.children||[]):c.push(o)}}for(var u in n)n[u].every(vt)&&delete n[u];return n}function vt(e){return e.isComment&&!e.asyncFactory||" "===e.text}function ht(e,t){t=t||{};for(var n=0;n<e.length;n++)Array.isArray(e[n])?ht(e[n],t):t[e[n].key]=e[n].fn;return t}var mt=null;function yt(e){for(;e&&(e=e.$parent);)if(e._inactive)return!0;return!1}function gt(e,t){if(t){if(e._directInactive=!1,yt(e))return}else if(e._directInactive)return;if(e._inactive||null===e._inactive){e._inactive=!1;for(var n=0;n<e.$children.length;n++)gt(e.$children[n]);_t(e,"activated")}}function _t(e,t){ue();var n=e.$options[t];if(n)for(var r=0,i=n.length;r<i;r++)try{n[r].call(e)}catch(n){Fe(n,e,t+" hook")}e._hasHookEvent&&e.$emit("hook:"+t),le()}var bt=[],$t=[],wt={},xt=!1,Ct=!1,kt=0;function At(){var e,t;for(Ct=!0,bt.sort(function(e,t){return e.id-t.id}),kt=0;kt<bt.length;kt++)t=(e=bt[kt]).id,wt[t]=null,e.run();var n=$t.slice(),r=bt.slice();kt=bt.length=$t.length=0,wt={},xt=Ct=!1,function(e){for(var t=0;t<e.length;t++)e[t]._inactive=!0,gt(e[t],!0)}(n),function(e){for(var t=e.length;t--;){var n=e[t],r=n.vm;r._watcher===n&&r._isMounted&&_t(r,"updated")}}(r),te&&F.devtools&&te.emit("flush")}var Ot=0,Tt=function(e,t,n,r,i){this.vm=e,i&&(e._watcher=this),e._watchers.push(this),r?(this.deep=!!r.deep,this.user=!!r.user,this.lazy=!!r.lazy,this.sync=!!r.sync):this.deep=this.user=this.lazy=this.sync=!1,this.cb=n,this.id=++Ot,this.active=!0,this.dirty=this.lazy,this.deps=[],this.newDeps=[],this.depIds=new re,this.newDepIds=new re,this.expression="","function"==typeof t?this.getter=t:(this.getter=function(e){if(!B.test(e)){var t=e.split(".");return function(e){for(var n=0;n<t.length;n++){if(!e)return;e=e[t[n]]}return e}}}(t),this.getter||(this.getter=function(){})),this.value=this.lazy?void 0:this.get()};Tt.prototype.get=function(){var e;ue(this);var t=this.vm;try{e=this.getter.call(t,t)}catch(e){if(!this.user)throw e;Fe(e,t,'getter for watcher "'+this.expression+'"')}finally{this.deep&&Ye(e),le(),this.cleanupDeps()}return e},Tt.prototype.addDep=function(e){var t=e.id;this.newDepIds.has(t)||(this.newDepIds.add(t),this.newDeps.push(e),this.depIds.has(t)||e.addSub(this))},Tt.prototype.cleanupDeps=function(){for(var e=this.deps.length;e--;){var t=this.deps[e];this.newDepIds.has(t.id)||t.removeSub(this)}var n=this.depIds;this.depIds=this.newDepIds,this.newDepIds=n,this.newDepIds.clear(),n=this.deps,this.deps=this.newDeps,this.newDeps=n,this.newDeps.length=0},Tt.prototype.update=function(){this.lazy?this.dirty=!0:this.sync?this.run():function(e){var t=e.id;if(null==wt[t]){if(wt[t]=!0,Ct){for(var n=bt.length-1;kt<n&&bt[n].id>e.id;)n--;bt.splice(n+1,0,e)}else bt.push(e);xt||(xt=!0,Ze(At))}}(this)},Tt.prototype.run=function(){if(this.active){var e=this.get();if(e!==this.value||s(e)||this.deep){var t=this.value;if(this.value=e,this.user)try{this.cb.call(this.vm,e,t)}catch(e){Fe(e,this.vm,'callback for watcher "'+this.expression+'"')}else this.cb.call(this.vm,e,t)}}},Tt.prototype.evaluate=function(){this.value=this.get(),this.dirty=!1},Tt.prototype.depend=function(){for(var e=this.deps.length;e--;)this.deps[e].depend()},Tt.prototype.teardown=function(){if(this.active){this.vm._isBeingDestroyed||m(this.vm._watchers,this);for(var e=this.deps.length;e--;)this.deps[e].removeSub(this);this.active=!1}};var St={enumerable:!0,configurable:!0,get:S,set:S};function Et(e,t,n){St.get=function(){return this[t][n]},St.set=function(e){this[t][n]=e},Object.defineProperty(e,n,St)}var jt={lazy:!0};function It(e,t,n){var r=!ee();"function"==typeof n?(St.get=r?Lt(t):n,St.set=S):(St.get=n.get?r&&!1!==n.cache?Lt(t):n.get:S,St.set=n.set?n.set:S),Object.defineProperty(e,t,St)}function Lt(e){return function(){var t=this._computedWatchers&&this._computedWatchers[e];if(t)return t.dirty&&t.evaluate(),se.target&&t.depend(),t.value}}function Nt(e,t,n,r){return u(n)&&(n=(r=n).handler),"string"==typeof n&&(n=e[n]),e.$watch(t,n,r)}function Mt(e,t){if(e){for(var n=Object.create(null),r=ie?Reflect.ownKeys(e).filter(function(t){return Object.getOwnPropertyDescriptor(e,t).enumerable}):Object.keys(e),i=0;i<r.length;i++){for(var o=r[i],a=e[o].from,s=t;s;){if(s._provided&&g(s._provided,a)){n[o]=s._provided[a];break}s=s.$parent}if(!s&&"default"in e[o]){var c=e[o].default;n[o]="function"==typeof c?c.call(t):c}}return n}}function Pt(e,t){var n,r,o,a,c;if(Array.isArray(e)||"string"==typeof e)for(n=new Array(e.length),r=0,o=e.length;r<o;r++)n[r]=t(e[r],r);else if("number"==typeof e)for(n=new Array(e),r=0;r<e;r++)n[r]=t(r+1,r);else if(s(e))for(a=Object.keys(e),n=new Array(a.length),r=0,o=a.length;r<o;r++)c=a[r],n[r]=t(e[c],c,r);return i(n)&&(n._isVList=!0),n}function Dt(e,t,n,r){var i,o=this.$scopedSlots[e];if(o)n=n||{},r&&(n=O(O({},r),n)),i=o(n)||t;else{var a=this.$slots[e];a&&(a._rendered=!0),i=a||t}var s=n&&n.slot;return s?this.$createElement("template",{slot:s},i):i}function Ft(e){return Le(this.$options,"filters",e)||j}function Rt(e,t){return Array.isArray(e)?-1===e.indexOf(t):e!==t}function Ht(e,t,n,r,i){var o=F.keyCodes[t]||n;return i&&r&&!F.keyCodes[t]?Rt(i,r):o?Rt(o,e):r?C(r)!==t:void 0}function Bt(e,t,n,r,i){if(n&&s(n)){var o;Array.isArray(n)&&(n=T(n));var a=function(a){if("class"===a||"style"===a||h(a))o=e;else{var s=e.attrs&&e.attrs.type;o=r||F.mustUseProp(t,s,a)?e.domProps||(e.domProps={}):e.attrs||(e.attrs={})}a in o||(o[a]=n[a],i&&((e.on||(e.on={}))["update:"+a]=function(e){n[a]=e}))};for(var c in n)a(c)}return e}function Ut(e,t){var n=this._staticTrees||(this._staticTrees=[]),r=n[e];return r&&!t||zt(r=n[e]=this.$options.staticRenderFns[e].call(this._renderProxy,null,this),"__static__"+e,!1),r}function Vt(e,t,n){return zt(e,"__once__"+t+(n?"_"+n:""),!0),e}function zt(e,t,n){if(Array.isArray(e))for(var r=0;r<e.length;r++)e[r]&&"string"!=typeof e[r]&&Kt(e[r],t+"_"+r,n);else Kt(e,t,n)}function Kt(e,t,n){e.isStatic=!0,e.key=t,e.isOnce=n}function Jt(e,t){if(t&&u(t)){var n=e.on=e.on?O({},e.on):{};for(var r in t){var i=n[r],o=t[r];n[r]=i?[].concat(i,o):o}}return e}function qt(e){e._o=Vt,e._n=p,e._s=f,e._l=Pt,e._t=Dt,e._q=I,e._i=L,e._m=Ut,e._f=Ft,e._k=Ht,e._b=Bt,e._v=ve,e._e=de,e._u=ht,e._g=Jt}function Wt(t,n,r,i,a){var s,c=a.options;g(i,"_uid")?(s=Object.create(i))._original=i:i=(s=i)._original;var u=o(c._compiled),l=!u;this.data=t,this.props=n,this.children=r,this.parent=i,this.listeners=t.on||e,this.injections=Mt(c.inject,i),this.slots=function(){return dt(r,i)},u&&(this.$options=c,this.$slots=this.slots(),this.$scopedSlots=t.scopedSlots||e),c._scopeId?this._c=function(e,t,n,r){var o=nn(s,e,t,n,r,l);return o&&!Array.isArray(o)&&(o.fnScopeId=c._scopeId,o.fnContext=i),o}:this._c=function(e,t,n,r){return nn(s,e,t,n,r,l)}}function Gt(e,t,n,r){var i=he(e);return i.fnContext=n,i.fnOptions=r,t.slot&&((i.data||(i.data={})).slot=t.slot),i}function Zt(e,t){for(var n in t)e[$(n)]=t[n]}qt(Wt.prototype);var Xt={init:function(e,t,n,r){if(e.componentInstance&&!e.componentInstance._isDestroyed&&e.data.keepAlive){var o=e;Xt.prepatch(o,o)}else(e.componentInstance=function(e,t,n,r){var o={_isComponent:!0,parent:mt,_parentVnode:e,_parentElm:n||null,_refElm:r||null},a=e.data.inlineTemplate;return i(a)&&(o.render=a.render,o.staticRenderFns=a.staticRenderFns),new e.componentOptions.Ctor(o)}(e,0,n,r)).$mount(t?e.elm:void 0,t)},prepatch:function(t,n){var r=n.componentOptions;!function(t,n,r,i,o){var a=!!(o||t.$options._renderChildren||i.data.scopedSlots||t.$scopedSlots!==e);if(t.$options._parentVnode=i,t.$vnode=i,t._vnode&&(t._vnode.parent=i),t.$options._renderChildren=o,t.$attrs=i.data.attrs||e,t.$listeners=r||e,n&&t.$options.props){be(!1);for(var s=t._props,c=t.$options._propKeys||[],u=0;u<c.length;u++){var l=c[u],f=t.$options.props;s[l]=Ne(l,f,n,t)}be(!0),t.$options.propsData=n}r=r||e;var p=t.$options._parentListeners;t.$options._parentListeners=r,pt(t,r,p),a&&(t.$slots=dt(o,i.context),t.$forceUpdate())}(n.componentInstance=t.componentInstance,r.propsData,r.listeners,n,r.children)},insert:function(e){var t,n=e.context,r=e.componentInstance;r._isMounted||(r._isMounted=!0,_t(r,"mounted")),e.data.keepAlive&&(n._isMounted?((t=r)._inactive=!1,$t.push(t)):gt(r,!0))},destroy:function(e){var t=e.componentInstance;t._isDestroyed||(e.data.keepAlive?function e(t,n){if(!(n&&(t._directInactive=!0,yt(t))||t._inactive)){t._inactive=!0;for(var r=0;r<t.$children.length;r++)e(t.$children[r]);_t(t,"deactivated")}}(t,!0):t.$destroy())}},Yt=Object.keys(Xt);function Qt(t,n,a,c,u){if(!r(t)){var l=a.$options._base;if(s(t)&&(t=l.extend(t)),"function"==typeof t){var f,p,d,v,h,m,y;if(r(t.cid)&&void 0===(t=function(e,t,n){if(o(e.error)&&i(e.errorComp))return e.errorComp;if(i(e.resolved))return e.resolved;if(o(e.loading)&&i(e.loadingComp))return e.loadingComp;if(!i(e.contexts)){var a=e.contexts=[n],c=!0,u=function(){for(var e=0,t=a.length;e<t;e++)a[e].$forceUpdate()},l=N(function(n){e.resolved=st(n,t),c||u()}),f=N(function(t){i(e.errorComp)&&(e.error=!0,u())}),p=e(l,f);return s(p)&&("function"==typeof p.then?r(e.resolved)&&p.then(l,f):i(p.component)&&"function"==typeof p.component.then&&(p.component.then(l,f),i(p.error)&&(e.errorComp=st(p.error,t)),i(p.loading)&&(e.loadingComp=st(p.loading,t),0===p.delay?e.loading=!0:setTimeout(function(){r(e.resolved)&&r(e.error)&&(e.loading=!0,u())},p.delay||200)),i(p.timeout)&&setTimeout(function(){r(e.resolved)&&f(null)},p.timeout))),c=!1,e.loading?e.loadingComp:e.resolved}e.contexts.push(n)}(f=t,l,a)))return p=f,d=n,v=a,h=c,m=u,(y=de()).asyncFactory=p,y.asyncMeta={data:d,context:v,children:h,tag:m},y;n=n||{},pn(t),i(n.model)&&function(e,t){var n=e.model&&e.model.prop||"value",r=e.model&&e.model.event||"input";(t.props||(t.props={}))[n]=t.model.value;var o=t.on||(t.on={});i(o[r])?o[r]=[t.model.callback].concat(o[r]):o[r]=t.model.callback}(t.options,n);var g=function(e,t,n){var o=t.options.props;if(!r(o)){var a={},s=e.attrs,c=e.props;if(i(s)||i(c))for(var u in o){var l=C(u);it(a,c,u,l,!0)||it(a,s,u,l,!1)}return a}}(n,t);if(o(t.options.functional))return function(t,n,r,o,a){var s=t.options,c={},u=s.props;if(i(u))for(var l in u)c[l]=Ne(l,u,n||e);else i(r.attrs)&&Zt(c,r.attrs),i(r.props)&&Zt(c,r.props);var f=new Wt(r,c,a,o,t),p=s.render.call(null,f._c,f);if(p instanceof fe)return Gt(p,r,f.parent,s);if(Array.isArray(p)){for(var d=ot(p)||[],v=new Array(d.length),h=0;h<d.length;h++)v[h]=Gt(d[h],r,f.parent,s);return v}}(t,g,n,a,c);var _=n.on;if(n.on=n.nativeOn,o(t.options.abstract)){var b=n.slot;n={},b&&(n.slot=b)}!function(e){for(var t=e.hook||(e.hook={}),n=0;n<Yt.length;n++){var r=Yt[n];t[r]=Xt[r]}}(n);var $=t.options.name||u;return new fe("vue-component-"+t.cid+($?"-"+$:""),n,void 0,void 0,void 0,a,{Ctor:t,propsData:g,listeners:_,tag:u,children:c},f)}}}var en=1,tn=2;function nn(e,t,n,c,u,l){return(Array.isArray(n)||a(n))&&(u=c,c=n,n=void 0),o(l)&&(u=tn),function(e,t,n,a,c){return i(n)&&i(n.__ob__)?de():(i(n)&&i(n.is)&&(t=n.is),t?(Array.isArray(a)&&"function"==typeof a[0]&&((n=n||{}).scopedSlots={default:a[0]},a.length=0),c===tn?a=ot(a):c===en&&(a=function(e){for(var t=0;t<e.length;t++)if(Array.isArray(e[t]))return Array.prototype.concat.apply([],e);return e}(a)),"string"==typeof t?(l=e.$vnode&&e.$vnode.ns||F.getTagNamespace(t),u=F.isReservedTag(t)?new fe(F.parsePlatformTagName(t),n,a,void 0,void 0,e):i(f=Le(e.$options,"components",t))?Qt(f,n,e,a,t):new fe(t,n,a,void 0,void 0,e)):u=Qt(t,n,e,a),Array.isArray(u)?u:i(u)?(i(l)&&function e(t,n,a){if(t.ns=n,"foreignObject"===t.tag&&(n=void 0,a=!0),i(t.children))for(var s=0,c=t.children.length;s<c;s++){var u=t.children[s];i(u.tag)&&(r(u.ns)||o(a)&&"svg"!==u.tag)&&e(u,n,a)}}(u,l),i(n)&&function(e){s(e.style)&&Ye(e.style),s(e.class)&&Ye(e.class)}(n),u):de()):de());var u,l,f}(e,t,n,c,u)}var rn,on,an,sn,cn,un,ln,fn=0;function pn(e){var t=e.options;if(e.super){var n=pn(e.super);if(n!==e.superOptions){e.superOptions=n;var r=function(e){var t,n=e.options,r=e.extendOptions,i=e.sealedOptions;for(var o in n)n[o]!==i[o]&&(t||(t={}),t[o]=dn(n[o],r[o],i[o]));return t}(e);r&&O(e.extendOptions,r),(t=e.options=Ie(n,e.extendOptions)).name&&(t.components[t.name]=e)}}return t}function dn(e,t,n){if(Array.isArray(e)){var r=[];n=Array.isArray(n)?n:[n],t=Array.isArray(t)?t:[t];for(var i=0;i<e.length;i++)(0<=t.indexOf(e[i])||n.indexOf(e[i])<0)&&r.push(e[i]);return r}return e}function vn(e){this._init(e)}function hn(e){return e&&(e.Ctor.options.name||e.tag)}function mn(e,t){return Array.isArray(e)?-1<e.indexOf(t):"string"==typeof e?-1<e.split(",").indexOf(t):(n=e,"[object RegExp]"===c.call(n)&&e.test(t));var n}function yn(e,t){var n=e.cache,r=e.keys,i=e._vnode;for(var o in n){var a=n[o];if(a){var s=hn(a.componentOptions);s&&!t(s)&&gn(n,o,r,i)}}}function gn(e,t,n,r){var i=e[t];!i||r&&i.tag===r.tag||i.componentInstance.$destroy(),e[t]=null,m(n,t)}vn.prototype._init=function(t){var n,r,i,o,a=this;a._uid=fn++,a._isVue=!0,t&&t._isComponent?function(e,t){var n=e.$options=Object.create(e.constructor.options),r=t._parentVnode;n.parent=t.parent,n._parentVnode=r,n._parentElm=t._parentElm,n._refElm=t._refElm;var i=r.componentOptions;n.propsData=i.propsData,n._parentListeners=i.listeners,n._renderChildren=i.children,n._componentTag=i.tag,t.render&&(n.render=t.render,n.staticRenderFns=t.staticRenderFns)}(a,t):a.$options=Ie(pn(a.constructor),t||{},a),function(e){var t=e.$options,n=t.parent;if(n&&!t.abstract){for(;n.$options.abstract&&n.$parent;)n=n.$parent;n.$children.push(e)}e.$parent=n,e.$root=n?n.$root:e,e.$children=[],e.$refs={},e._watcher=null,e._inactive=null,e._directInactive=!1,e._isMounted=!1,e._isDestroyed=!1,e._isBeingDestroyed=!1}((a._renderProxy=a)._self=a),function(e){e._events=Object.create(null),e._hasHookEvent=!1;var t=e.$options._parentListeners;t&&pt(e,t)}(a),function(t){t._vnode=null,t._staticTrees=null;var n=t.$options,r=t.$vnode=n._parentVnode,i=r&&r.context;t.$slots=dt(n._renderChildren,i),t.$scopedSlots=e,t._c=function(e,n,r,i){return nn(t,e,n,r,i,!1)},t.$createElement=function(e,n,r,i){return nn(t,e,n,r,i,!0)};var o=r&&r.data;xe(t,"$attrs",o&&o.attrs||e,null,!0),xe(t,"$listeners",n._parentListeners||e,null,!0)}(a),_t(a,"beforeCreate"),(r=Mt((n=a).$options.inject,n))&&(be(!1),Object.keys(r).forEach(function(e){xe(n,e,r[e])}),be(!0)),function(e){e._watchers=[];var t=e.$options;t.props&&function(e,t){var n=e.$options.propsData||{},r=e._props={},i=e.$options._propKeys=[];e.$parent&&be(!1);var o=function(o){i.push(o);var a=Ne(o,t,n,e);xe(r,o,a),o in e||Et(e,"_props",o)};for(var a in t)o(a);be(!0)}(e,t.props),t.methods&&function(e,t){for(var n in e.$options.props,t)e[n]=null==t[n]?S:k(t[n],e)}(e,t.methods),t.data?function(e){var t=e.$options.data;u(t=e._data="function"==typeof t?function(e,t){ue();try{return e.call(t,t)}catch(e){return Fe(e,t,"data()"),{}}finally{le()}}(t,e):t||{})||(t={});for(var n,r=Object.keys(t),i=e.$options.props,o=(e.$options.methods,r.length);o--;){var a=r[o];i&&g(i,a)||36!==(n=(a+"").charCodeAt(0))&&95!==n&&Et(e,"_data",a)}we(t,!0)}(e):we(e._data={},!0),t.computed&&function(e,t){var n=e._computedWatchers=Object.create(null),r=ee();for(var i in t){var o=t[i],a="function"==typeof o?o:o.get;r||(n[i]=new Tt(e,a||S,S,jt)),i in e||It(e,i,o)}}(e,t.computed),t.watch&&t.watch!==X&&function(e,t){for(var n in t){var r=t[n];if(Array.isArray(r))for(var i=0;i<r.length;i++)Nt(e,n,r[i]);else Nt(e,n,r)}}(e,t.watch)}(a),(o=(i=a).$options.provide)&&(i._provided="function"==typeof o?o.call(i):o),_t(a,"created"),a.$options.el&&a.$mount(a.$options.el)},rn=vn,on={get:function(){return this._data}},an={get:function(){return this._props}},Object.defineProperty(rn.prototype,"$data",on),Object.defineProperty(rn.prototype,"$props",an),rn.prototype.$set=Ce,rn.prototype.$delete=ke,rn.prototype.$watch=function(e,t,n){if(u(t))return Nt(this,e,t,n);(n=n||{}).user=!0;var r=new Tt(this,e,t,n);return n.immediate&&t.call(this,r.value),function(){r.teardown()}},cn=/^hook:/,(sn=vn).prototype.$on=function(e,t){if(Array.isArray(e))for(var n=0,r=e.length;n<r;n++)this.$on(e[n],t);else(this._events[e]||(this._events[e]=[])).push(t),cn.test(e)&&(this._hasHookEvent=!0);return this},sn.prototype.$once=function(e,t){var n=this;function r(){n.$off(e,r),t.apply(n,arguments)}return r.fn=t,n.$on(e,r),n},sn.prototype.$off=function(e,t){var n=this;if(!arguments.length)return n._events=Object.create(null),n;if(Array.isArray(e)){for(var r=0,i=e.length;r<i;r++)this.$off(e[r],t);return n}var o=n._events[e];if(!o)return n;if(!t)return n._events[e]=null,n;if(t)for(var a,s=o.length;s--;)if((a=o[s])===t||a.fn===t){o.splice(s,1);break}return n},sn.prototype.$emit=function(e){var t=this,n=t._events[e];if(n){n=1<n.length?A(n):n;for(var r=A(arguments,1),i=0,o=n.length;i<o;i++)try{n[i].apply(t,r)}catch(n){Fe(n,t,'event handler for "'+e+'"')}}return t},(un=vn).prototype._update=function(e,t){var n=this;n._isMounted&&_t(n,"beforeUpdate");var r=n.$el,i=n._vnode,o=mt;(mt=n)._vnode=e,i?n.$el=n.__patch__(i,e):(n.$el=n.__patch__(n.$el,e,t,!1,n.$options._parentElm,n.$options._refElm),n.$options._parentElm=n.$options._refElm=null),mt=o,r&&(r.__vue__=null),n.$el&&(n.$el.__vue__=n),n.$vnode&&n.$parent&&n.$vnode===n.$parent._vnode&&(n.$parent.$el=n.$el)},un.prototype.$forceUpdate=function(){this._watcher&&this._watcher.update()},un.prototype.$destroy=function(){var e=this;if(!e._isBeingDestroyed){_t(e,"beforeDestroy"),e._isBeingDestroyed=!0;var t=e.$parent;!t||t._isBeingDestroyed||e.$options.abstract||m(t.$children,e),e._watcher&&e._watcher.teardown();for(var n=e._watchers.length;n--;)e._watchers[n].teardown();e._data.__ob__&&e._data.__ob__.vmCount--,e._isDestroyed=!0,e.__patch__(e._vnode,null),_t(e,"destroyed"),e.$off(),e.$el&&(e.$el.__vue__=null),e.$vnode&&(e.$vnode.parent=null)}},qt((ln=vn).prototype),ln.prototype.$nextTick=function(e){return Ze(e,this)},ln.prototype._render=function(){var t,n=this,r=n.$options,i=r.render,o=r._parentVnode;o&&(n.$scopedSlots=o.data.scopedSlots||e),n.$vnode=o;try{t=i.call(n._renderProxy,n.$createElement)}catch(r){Fe(r,n,"render"),t=n._vnode}return t instanceof fe||(t=de()),t.parent=o,t};var _n,bn,$n,wn=[String,RegExp,Array],xn={KeepAlive:{name:"keep-alive",abstract:!0,props:{include:wn,exclude:wn,max:[String,Number]},created:function(){this.cache=Object.create(null),this.keys=[]},destroyed:function(){for(var e in this.cache)gn(this.cache,e,this.keys)},mounted:function(){var e=this;this.$watch("include",function(t){yn(e,function(e){return mn(t,e)})}),this.$watch("exclude",function(t){yn(e,function(e){return!mn(t,e)})})},render:function(){var e=this.$slots.default,t=ut(e),n=t&&t.componentOptions;if(n){var r=hn(n),i=this.include,o=this.exclude;if(i&&(!r||!mn(i,r))||o&&r&&mn(o,r))return t;var a=this.cache,s=this.keys,c=null==t.key?n.Ctor.cid+(n.tag?"::"+n.tag:""):t.key;a[c]?(t.componentInstance=a[c].componentInstance,m(s,c),s.push(c)):(a[c]=t,s.push(c),this.max&&s.length>parseInt(this.max)&&gn(a,s[0],s,this._vnode)),t.data.keepAlive=!0}return t||e&&e[0]}}};_n=vn,$n={get:function(){return F}},Object.defineProperty(_n,"config",$n),_n.util={warn:oe,extend:O,mergeOptions:Ie,defineReactive:xe},_n.set=Ce,_n.delete=ke,_n.nextTick=Ze,_n.options=Object.create(null),P.forEach(function(e){_n.options[e+"s"]=Object.create(null)}),O((_n.options._base=_n).options.components,xn),_n.use=function(e){var t=this._installedPlugins||(this._installedPlugins=[]);if(-1<t.indexOf(e))return this;var n=A(arguments,1);return n.unshift(this),"function"==typeof e.install?e.install.apply(e,n):"function"==typeof e&&e.apply(null,n),t.push(e),this},_n.mixin=function(e){return this.options=Ie(this.options,e),this},function(e){e.cid=0;var t=1;e.extend=function(e){e=e||{};var n=this,r=n.cid,i=e._Ctor||(e._Ctor={});if(i[r])return i[r];var o=e.name||n.options.name,a=function(e){this._init(e)};return((a.prototype=Object.create(n.prototype)).constructor=a).cid=t++,a.options=Ie(n.options,e),a.super=n,a.options.props&&function(e){var t=e.options.props;for(var n in t)Et(e.prototype,"_props",n)}(a),a.options.computed&&function(e){var t=e.options.computed;for(var n in t)It(e.prototype,n,t[n])}(a),a.extend=n.extend,a.mixin=n.mixin,a.use=n.use,P.forEach(function(e){a[e]=n[e]}),o&&(a.options.components[o]=a),a.superOptions=n.options,a.extendOptions=e,a.sealedOptions=O({},a.options),i[r]=a}}(_n),bn=_n,P.forEach(function(e){bn[e]=function(t,n){return n?("component"===e&&u(n)&&(n.name=n.name||t,n=this.options._base.extend(n)),"directive"===e&&"function"==typeof n&&(n={bind:n,update:n}),this.options[e+"s"][t]=n):this.options[e+"s"][t]}}),Object.defineProperty(vn.prototype,"$isServer",{get:ee}),Object.defineProperty(vn.prototype,"$ssrContext",{get:function(){return this.$vnode&&this.$vnode.ssrContext}}),Object.defineProperty(vn,"FunctionalRenderContext",{value:Wt}),vn.version="2.5.17";var Cn=d("style,class"),kn=d("input,textarea,option,select,progress"),An=function(e,t,n){return"value"===n&&kn(e)&&"button"!==t||"selected"===n&&"option"===e||"checked"===n&&"input"===e||"muted"===n&&"video"===e},On=d("contenteditable,draggable,spellcheck"),Tn=d("allowfullscreen,async,autofocus,autoplay,checked,compact,controls,declare,default,defaultchecked,defaultmuted,defaultselected,defer,disabled,enabled,formnovalidate,hidden,indeterminate,inert,ismap,itemscope,loop,multiple,muted,nohref,noresize,noshade,novalidate,nowrap,open,pauseonexit,readonly,required,reversed,scoped,seamless,selected,sortable,translate,truespeed,typemustmatch,visible"),Sn="http://www.w3.org/1999/xlink",En=function(e){return":"===e.charAt(5)&&"xlink"===e.slice(0,5)},jn=function(e){return En(e)?e.slice(6,e.length):""},In=function(e){return null==e||!1===e};function Ln(e,t){return{staticClass:Nn(e.staticClass,t.staticClass),class:i(e.class)?[e.class,t.class]:t.class}}function Nn(e,t){return e?t?e+" "+t:e:t||""}function Mn(e){return Array.isArray(e)?function(e){for(var t,n="",r=0,o=e.length;r<o;r++)i(t=Mn(e[r]))&&""!==t&&(n&&(n+=" "),n+=t);return n}(e):s(e)?function(e){var t="";for(var n in e)e[n]&&(t&&(t+=" "),t+=n);return t}(e):"string"==typeof e?e:""}var Pn={svg:"http://www.w3.org/2000/svg",math:"http://www.w3.org/1998/Math/MathML"},Dn=d("html,body,base,head,link,meta,style,title,address,article,aside,footer,header,h1,h2,h3,h4,h5,h6,hgroup,nav,section,div,dd,dl,dt,figcaption,figure,picture,hr,img,li,main,ol,p,pre,ul,a,b,abbr,bdi,bdo,br,cite,code,data,dfn,em,i,kbd,mark,q,rp,rt,rtc,ruby,s,samp,small,span,strong,sub,sup,time,u,var,wbr,area,audio,map,track,video,embed,object,param,source,canvas,script,noscript,del,ins,caption,col,colgroup,table,thead,tbody,td,th,tr,button,datalist,fieldset,form,input,label,legend,meter,optgroup,option,output,progress,select,textarea,details,dialog,menu,menuitem,summary,content,element,shadow,template,blockquote,iframe,tfoot"),Fn=d("svg,animate,circle,clippath,cursor,defs,desc,ellipse,filter,font-face,foreignObject,g,glyph,image,line,marker,mask,missing-glyph,path,pattern,polygon,polyline,rect,switch,symbol,text,textpath,tspan,use,view",!0),Rn=function(e){return Dn(e)||Fn(e)};function Hn(e){return Fn(e)?"svg":"math"===e?"math":void 0}var Bn=Object.create(null),Un=d("text,number,password,search,email,tel,url");function Vn(e){return"string"==typeof e?document.querySelector(e)||document.createElement("div"):e}var zn=Object.freeze({createElement:function(e,t){var n=document.createElement(e);return"select"!==e||t.data&&t.data.attrs&&void 0!==t.data.attrs.multiple&&n.setAttribute("multiple","multiple"),n},createElementNS:function(e,t){return document.createElementNS(Pn[e],t)},createTextNode:function(e){return document.createTextNode(e)},createComment:function(e){return document.createComment(e)},insertBefore:function(e,t,n){e.insertBefore(t,n)},removeChild:function(e,t){e.removeChild(t)},appendChild:function(e,t){e.appendChild(t)},parentNode:function(e){return e.parentNode},nextSibling:function(e){return e.nextSibling},tagName:function(e){return e.tagName},setTextContent:function(e,t){e.textContent=t},setStyleScope:function(e,t){e.setAttribute(t,"")}}),Kn={create:function(e,t){Jn(t)},update:function(e,t){e.data.ref!==t.data.ref&&(Jn(e,!0),Jn(t))},destroy:function(e){Jn(e,!0)}};function Jn(e,t){var n=e.data.ref;if(i(n)){var r=e.context,o=e.componentInstance||e.elm,a=r.$refs;t?Array.isArray(a[n])?m(a[n],o):a[n]===o&&(a[n]=void 0):e.data.refInFor?Array.isArray(a[n])?a[n].indexOf(o)<0&&a[n].push(o):a[n]=[o]:a[n]=o}}var qn=new fe("",{},[]),Wn=["create","activate","update","remove","destroy"];function Gn(e,t){return e.key===t.key&&(e.tag===t.tag&&e.isComment===t.isComment&&i(e.data)===i(t.data)&&function(e,t){if("input"!==e.tag)return!0;var n,r=i(n=e.data)&&i(n=n.attrs)&&n.type,o=i(n=t.data)&&i(n=n.attrs)&&n.type;return r===o||Un(r)&&Un(o)}(e,t)||o(e.isAsyncPlaceholder)&&e.asyncFactory===t.asyncFactory&&r(t.asyncFactory.error))}function Zn(e,t,n){var r,o,a={};for(r=t;r<=n;++r)i(o=e[r].key)&&(a[o]=r);return a}var Xn={create:Yn,update:Yn,destroy:function(e){Yn(e,qn)}};function Yn(e,t){(e.data.directives||t.data.directives)&&function(e,t){var n,r,i,o=e===qn,a=t===qn,s=er(e.data.directives,e.context),c=er(t.data.directives,t.context),u=[],l=[];for(n in c)r=s[n],i=c[n],r?(i.oldValue=r.value,tr(i,"update",t,e),i.def&&i.def.componentUpdated&&l.push(i)):(tr(i,"bind",t,e),i.def&&i.def.inserted&&u.push(i));if(u.length){var f=function(){for(var n=0;n<u.length;n++)tr(u[n],"inserted",t,e)};o?rt(t,"insert",f):f()}if(l.length&&rt(t,"postpatch",function(){for(var n=0;n<l.length;n++)tr(l[n],"componentUpdated",t,e)}),!o)for(n in s)c[n]||tr(s[n],"unbind",e,e,a)}(e,t)}var Qn=Object.create(null);function er(e,t){var n,r,i,o=Object.create(null);if(!e)return o;for(n=0;n<e.length;n++)(r=e[n]).modifiers||(r.modifiers=Qn),(o[(i=r,i.rawName||i.name+"."+Object.keys(i.modifiers||{}).join("."))]=r).def=Le(t.$options,"directives",r.name);return o}function tr(e,t,n,r,i){var o=e.def&&e.def[t];if(o)try{o(n.elm,e,n,r,i)}catch(r){Fe(r,n.context,"directive "+e.name+" "+t+" hook")}}var nr=[Kn,Xn];function rr(e,t){var n=t.componentOptions;if(!(i(n)&&!1===n.Ctor.options.inheritAttrs||r(e.data.attrs)&&r(t.data.attrs))){var o,a,s=t.elm,c=e.data.attrs||{},u=t.data.attrs||{};for(o in i(u.__ob__)&&(u=t.data.attrs=O({},u)),u)a=u[o],c[o]!==a&&ir(s,o,a);for(o in(q||G)&&u.value!==c.value&&ir(s,"value",u.value),c)r(u[o])&&(En(o)?s.removeAttributeNS(Sn,jn(o)):On(o)||s.removeAttribute(o))}}function ir(e,t,n){-1<e.tagName.indexOf("-")?or(e,t,n):Tn(t)?In(n)?e.removeAttribute(t):(n="allowfullscreen"===t&&"EMBED"===e.tagName?"true":t,e.setAttribute(t,n)):On(t)?e.setAttribute(t,In(n)||"false"===n?"false":"true"):En(t)?In(n)?e.removeAttributeNS(Sn,jn(t)):e.setAttributeNS(Sn,t,n):or(e,t,n)}function or(e,t,n){if(In(n))e.removeAttribute(t);else{if(q&&!W&&"TEXTAREA"===e.tagName&&"placeholder"===t&&!e.__ieph){var r=function(t){t.stopImmediatePropagation(),e.removeEventListener("input",r)};e.addEventListener("input",r),e.__ieph=!0}e.setAttribute(t,n)}}var ar={create:rr,update:rr};function sr(e,t){var n=t.elm,o=t.data,a=e.data;if(!(r(o.staticClass)&&r(o.class)&&(r(a)||r(a.staticClass)&&r(a.class)))){var s=function(e){for(var t=e.data,n=e,r=e;i(r.componentInstance);)(r=r.componentInstance._vnode)&&r.data&&(t=Ln(r.data,t));for(;i(n=n.parent);)n&&n.data&&(t=Ln(t,n.data));return function(e,t){return i(e)||i(t)?Nn(e,Mn(t)):""}(t.staticClass,t.class)}(t),c=n._transitionClasses;i(c)&&(s=Nn(s,Mn(c))),s!==n._prevClass&&(n.setAttribute("class",s),n._prevClass=s)}}var cr,ur,lr,fr,pr,dr,vr={create:sr,update:sr},hr=/[\w).+\-_$\]]/;function mr(e){var t,n,r,i,o,a=!1,s=!1,c=!1,u=!1,l=0,f=0,p=0,d=0;for(r=0;r<e.length;r++)if(n=t,t=e.charCodeAt(r),a)39===t&&92!==n&&(a=!1);else if(s)34===t&&92!==n&&(s=!1);else if(c)96===t&&92!==n&&(c=!1);else if(u)47===t&&92!==n&&(u=!1);else if(124!==t||124===e.charCodeAt(r+1)||124===e.charCodeAt(r-1)||l||f||p){switch(t){case 34:s=!0;break;case 39:a=!0;break;case 96:c=!0;break;case 40:p++;break;case 41:p--;break;case 91:f++;break;case 93:f--;break;case 123:l++;break;case 125:l--}if(47===t){for(var v=r-1,h=void 0;0<=v&&" "===(h=e.charAt(v));v--);h&&hr.test(h)||(u=!0)}}else void 0===i?(d=r+1,i=e.slice(0,r).trim()):m();function m(){(o||(o=[])).push(e.slice(d,r).trim()),d=r+1}if(void 0===i?i=e.slice(0,r).trim():0!==d&&m(),o)for(r=0;r<o.length;r++)i=yr(i,o[r]);return i}function yr(e,t){var n=t.indexOf("(");if(n<0)return'_f("'+t+'")('+e+")";var r=t.slice(0,n),i=t.slice(n+1);return'_f("'+r+'")('+e+(")"!==i?","+i:i)}function gr(e){console.error("[Vue compiler]: "+e)}function _r(e,t){return e?e.map(function(e){return e[t]}).filter(function(e){return e}):[]}function br(e,t,n){(e.props||(e.props=[])).push({name:t,value:n}),e.plain=!1}function $r(e,t,n){(e.attrs||(e.attrs=[])).push({name:t,value:n}),e.plain=!1}function wr(e,t,n){e.attrsMap[t]=n,e.attrsList.push({name:t,value:n})}function xr(t,n,r,i,o,a){var s;(i=i||e).capture&&(delete i.capture,n="!"+n),i.once&&(delete i.once,n="~"+n),i.passive&&(delete i.passive,n="&"+n),"click"===n&&(i.right?(n="contextmenu",delete i.right):i.middle&&(n="mouseup")),i.native?(delete i.native,s=t.nativeEvents||(t.nativeEvents={})):s=t.events||(t.events={});var c={value:r.trim()};i!==e&&(c.modifiers=i);var u=s[n];Array.isArray(u)?o?u.unshift(c):u.push(c):s[n]=u?o?[c,u]:[u,c]:c,t.plain=!1}function Cr(e,t,n){var r=kr(e,":"+t)||kr(e,"v-bind:"+t);if(null!=r)return mr(r);if(!1!==n){var i=kr(e,t);if(null!=i)return JSON.stringify(i)}}function kr(e,t,n){var r;if(null!=(r=e.attrsMap[t]))for(var i=e.attrsList,o=0,a=i.length;o<a;o++)if(i[o].name===t){i.splice(o,1);break}return n&&delete e.attrsMap[t],r}function Ar(e,t,n){var r=n||{},i=r.number,o="$$v";r.trim&&(o="(typeof $$v === 'string'? $$v.trim(): $$v)"),i&&(o="_n("+o+")");var a=Or(t,o);e.model={value:"("+t+")",expression:'"'+t+'"',callback:"function ($$v) {"+a+"}"}}function Or(e,t){var n=function(e){if(e=e.trim(),cr=e.length,e.indexOf("[")<0||e.lastIndexOf("]")<cr-1)return-1<(fr=e.lastIndexOf("."))?{exp:e.slice(0,fr),key:'"'+e.slice(fr+1)+'"'}:{exp:e,key:null};for(ur=e,fr=pr=dr=0;!Sr();)Er(lr=Tr())?Ir(lr):91===lr&&jr(lr);return{exp:e.slice(0,pr),key:e.slice(pr+1,dr)}}(e);return null===n.key?e+"="+t:"$set("+n.exp+", "+n.key+", "+t+")"}function Tr(){return ur.charCodeAt(++fr)}function Sr(){return cr<=fr}function Er(e){return 34===e||39===e}function jr(e){var t=1;for(pr=fr;!Sr();)if(Er(e=Tr()))Ir(e);else if(91===e&&t++,93===e&&t--,0===t){dr=fr;break}}function Ir(e){for(var t=e;!Sr()&&(e=Tr())!==t;);}var Lr,Nr="__r",Mr="__c";function Pr(e,t,n,r,i){var o,a,s,c,u;t=(o=t)._withTask||(o._withTask=function(){Je=!0;var e=o.apply(null,arguments);return Je=!1,e}),n&&(a=t,s=e,c=r,u=Lr,t=function e(){null!==a.apply(null,arguments)&&Dr(s,e,c,u)}),Lr.addEventListener(e,t,Y?{capture:r,passive:i}:r)}function Dr(e,t,n,r){(r||Lr).removeEventListener(e,t._withTask||t,n)}function Fr(e,t){if(!r(e.data.on)||!r(t.data.on)){var n=t.data.on||{},o=e.data.on||{};Lr=t.elm,function(e){if(i(e[Nr])){var t=q?"change":"input";e[t]=[].concat(e[Nr],e[t]||[]),delete e[Nr]}i(e[Mr])&&(e.change=[].concat(e[Mr],e.change||[]),delete e[Mr])}(n),nt(n,o,Pr,Dr,t.context),Lr=void 0}}var Rr={create:Fr,update:Fr};function Hr(e,t){if(!r(e.data.domProps)||!r(t.data.domProps)){var n,o,a,s,c=t.elm,u=e.data.domProps||{},l=t.data.domProps||{};for(n in i(l.__ob__)&&(l=t.data.domProps=O({},l)),u)r(l[n])&&(c[n]="");for(n in l){if(o=l[n],"textContent"===n||"innerHTML"===n){if(t.children&&(t.children.length=0),o===u[n])continue;1===c.childNodes.length&&c.removeChild(c.childNodes[0])}if("value"===n){var f=r(c._value=o)?"":String(o);s=f,(a=c).composing||"OPTION"!==a.tagName&&!function(e,t){var n=!0;try{n=document.activeElement!==e}catch(e){}return n&&e.value!==t}(a,s)&&!function(e,t){var n=e.value,r=e._vModifiers;if(i(r)){if(r.lazy)return!1;if(r.number)return p(n)!==p(t);if(r.trim)return n.trim()!==t.trim()}return n!==t}(a,s)||(c.value=f)}else c[n]=o}}}var Br={create:Hr,update:Hr},Ur=_(function(e){var t={},n=/:(.+)/;return e.split(/;(?![^(]*\))/g).forEach(function(e){if(e){var r=e.split(n);1<r.length&&(t[r[0].trim()]=r[1].trim())}}),t});function Vr(e){var t=zr(e.style);return e.staticStyle?O(e.staticStyle,t):t}function zr(e){return Array.isArray(e)?T(e):"string"==typeof e?Ur(e):e}var Kr,Jr=/^--/,qr=/\s*!important$/,Wr=function(e,t,n){if(Jr.test(t))e.style.setProperty(t,n);else if(qr.test(n))e.style.setProperty(t,n.replace(qr,""),"important");else{var r=Zr(t);if(Array.isArray(n))for(var i=0,o=n.length;i<o;i++)e.style[r]=n[i];else e.style[r]=n}},Gr=["Webkit","Moz","ms"],Zr=_(function(e){if(Kr=Kr||document.createElement("div").style,"filter"!==(e=$(e))&&e in Kr)return e;for(var t=e.charAt(0).toUpperCase()+e.slice(1),n=0;n<Gr.length;n++){var r=Gr[n]+t;if(r in Kr)return r}});function Xr(e,t){var n=t.data,o=e.data;if(!(r(n.staticStyle)&&r(n.style)&&r(o.staticStyle)&&r(o.style))){var a,s,c=t.elm,u=o.staticStyle,l=o.normalizedStyle||o.style||{},f=u||l,p=zr(t.data.style)||{};t.data.normalizedStyle=i(p.__ob__)?O({},p):p;var d=function(e,t){for(var n,r={},i=e;i.componentInstance;)(i=i.componentInstance._vnode)&&i.data&&(n=Vr(i.data))&&O(r,n);(n=Vr(e.data))&&O(r,n);for(var o=e;o=o.parent;)o.data&&(n=Vr(o.data))&&O(r,n);return r}(t);for(s in f)r(d[s])&&Wr(c,s,"");for(s in d)(a=d[s])!==f[s]&&Wr(c,s,null==a?"":a)}}var Yr={create:Xr,update:Xr};function Qr(e,t){if(t&&(t=t.trim()))if(e.classList)-1<t.indexOf(" ")?t.split(/\s+/).forEach(function(t){return e.classList.add(t)}):e.classList.add(t);else{var n=" "+(e.getAttribute("class")||"")+" ";n.indexOf(" "+t+" ")<0&&e.setAttribute("class",(n+t).trim())}}function ei(e,t){if(t&&(t=t.trim()))if(e.classList)-1<t.indexOf(" ")?t.split(/\s+/).forEach(function(t){return e.classList.remove(t)}):e.classList.remove(t),e.classList.length||e.removeAttribute("class");else{for(var n=" "+(e.getAttribute("class")||"")+" ",r=" "+t+" ";0<=n.indexOf(r);)n=n.replace(r," ");(n=n.trim())?e.setAttribute("class",n):e.removeAttribute("class")}}function ti(e){if(e){if("object"==typeof e){var t={};return!1!==e.css&&O(t,ni(e.name||"v")),O(t,e),t}return"string"==typeof e?ni(e):void 0}}var ni=_(function(e){return{enterClass:e+"-enter",enterToClass:e+"-enter-to",enterActiveClass:e+"-enter-active",leaveClass:e+"-leave",leaveToClass:e+"-leave-to",leaveActiveClass:e+"-leave-active"}}),ri=V&&!W,ii="transition",oi="animation",ai="transition",si="transitionend",ci="animation",ui="animationend";ri&&(void 0===window.ontransitionend&&void 0!==window.onwebkittransitionend&&(ai="WebkitTransition",si="webkitTransitionEnd"),void 0===window.onanimationend&&void 0!==window.onwebkitanimationend&&(ci="WebkitAnimation",ui="webkitAnimationEnd"));var li=V?window.requestAnimationFrame?window.requestAnimationFrame.bind(window):setTimeout:function(e){return e()};function fi(e){li(function(){li(e)})}function pi(e,t){var n=e._transitionClasses||(e._transitionClasses=[]);n.indexOf(t)<0&&(n.push(t),Qr(e,t))}function di(e,t){e._transitionClasses&&m(e._transitionClasses,t),ei(e,t)}function vi(e,t,n){var r=mi(e,t),i=r.type,o=r.timeout,a=r.propCount;if(!i)return n();var s=i===ii?si:ui,c=0,u=function(){e.removeEventListener(s,l),n()},l=function(t){t.target===e&&++c>=a&&u()};setTimeout(function(){c<a&&u()},o+1),e.addEventListener(s,l)}var hi=/\b(transform|all)(,|$)/;function mi(e,t){var n,r=window.getComputedStyle(e),i=r[ai+"Delay"].split(", "),o=r[ai+"Duration"].split(", "),a=yi(i,o),s=r[ci+"Delay"].split(", "),c=r[ci+"Duration"].split(", "),u=yi(s,c),l=0,f=0;return t===ii?0<a&&(n=ii,l=a,f=o.length):t===oi?0<u&&(n=oi,l=u,f=c.length):f=(n=0<(l=Math.max(a,u))?u<a?ii:oi:null)?n===ii?o.length:c.length:0,{type:n,timeout:l,propCount:f,hasTransform:n===ii&&hi.test(r[ai+"Property"])}}function yi(e,t){for(;e.length<t.length;)e=e.concat(e);return Math.max.apply(null,t.map(function(t,n){return gi(t)+gi(e[n])}))}function gi(e){return 1e3*Number(e.slice(0,-1))}function _i(e,t){var n=e.elm;i(n._leaveCb)&&(n._leaveCb.cancelled=!0,n._leaveCb());var o=ti(e.data.transition);if(!r(o)&&!i(n._enterCb)&&1===n.nodeType){for(var a=o.css,c=o.type,u=o.enterClass,l=o.enterToClass,f=o.enterActiveClass,d=o.appearClass,v=o.appearToClass,h=o.appearActiveClass,m=o.beforeEnter,y=o.enter,g=o.afterEnter,_=o.enterCancelled,b=o.beforeAppear,$=o.appear,w=o.afterAppear,x=o.appearCancelled,C=o.duration,k=mt,A=mt.$vnode;A&&A.parent;)k=(A=A.parent).context;var O=!k._isMounted||!e.isRootInsert;if(!O||$||""===$){var T=O&&d?d:u,S=O&&h?h:f,E=O&&v?v:l,j=O&&b||m,I=O&&"function"==typeof $?$:y,L=O&&w||g,M=O&&x||_,P=p(s(C)?C.enter:C),D=!1!==a&&!W,F=wi(I),R=n._enterCb=N(function(){D&&(di(n,E),di(n,S)),R.cancelled?(D&&di(n,T),M&&M(n)):L&&L(n),n._enterCb=null});e.data.show||rt(e,"insert",function(){var t=n.parentNode,r=t&&t._pending&&t._pending[e.key];r&&r.tag===e.tag&&r.elm._leaveCb&&r.elm._leaveCb(),I&&I(n,R)}),j&&j(n),D&&(pi(n,T),pi(n,S),fi(function(){di(n,T),R.cancelled||(pi(n,E),F||($i(P)?setTimeout(R,P):vi(n,c,R)))})),e.data.show&&(t&&t(),I&&I(n,R)),D||F||R()}}}function bi(e,t){var n=e.elm;i(n._enterCb)&&(n._enterCb.cancelled=!0,n._enterCb());var o=ti(e.data.transition);if(r(o)||1!==n.nodeType)return t();if(!i(n._leaveCb)){var a=o.css,c=o.type,u=o.leaveClass,l=o.leaveToClass,f=o.leaveActiveClass,d=o.beforeLeave,v=o.leave,h=o.afterLeave,m=o.leaveCancelled,y=o.delayLeave,g=o.duration,_=!1!==a&&!W,b=wi(v),$=p(s(g)?g.leave:g),w=n._leaveCb=N(function(){n.parentNode&&n.parentNode._pending&&(n.parentNode._pending[e.key]=null),_&&(di(n,l),di(n,f)),w.cancelled?(_&&di(n,u),m&&m(n)):(t(),h&&h(n)),n._leaveCb=null});y?y(x):x()}function x(){w.cancelled||(e.data.show||((n.parentNode._pending||(n.parentNode._pending={}))[e.key]=e),d&&d(n),_&&(pi(n,u),pi(n,f),fi(function(){di(n,u),w.cancelled||(pi(n,l),b||($i($)?setTimeout(w,$):vi(n,c,w)))})),v&&v(n,w),_||b||w())}}function $i(e){return"number"==typeof e&&!isNaN(e)}function wi(e){if(r(e))return!1;var t=e.fns;return i(t)?wi(Array.isArray(t)?t[0]:t):1<(e._length||e.length)}function xi(e,t){!0!==t.data.show&&_i(t)}var Ci=function(e){var t,n,s={},c=e.modules,u=e.nodeOps;for(t=0;t<Wn.length;++t)for(s[Wn[t]]=[],n=0;n<c.length;++n)i(c[n][Wn[t]])&&s[Wn[t]].push(c[n][Wn[t]]);function l(e){var t=u.parentNode(e);i(t)&&u.removeChild(t,e)}function f(e,t,n,r,a,c,l){if(i(e.elm)&&i(c)&&(e=c[l]=he(e)),e.isRootInsert=!a,!function(e,t,n,r){var a=e.data;if(i(a)){var c=i(e.componentInstance)&&a.keepAlive;if(i(a=a.hook)&&i(a=a.init)&&a(e,!1,n,r),i(e.componentInstance))return p(e,t),o(c)&&function(e,t,n,r){for(var o,a=e;a.componentInstance;)if(i(o=(a=a.componentInstance._vnode).data)&&i(o=o.transition)){for(o=0;o<s.activate.length;++o)s.activate[o](qn,a);t.push(a);break}v(n,e.elm,r)}(e,t,n,r),!0}}(e,t,n,r)){var f=e.data,d=e.children,m=e.tag;i(m)?(e.elm=e.ns?u.createElementNS(e.ns,m):u.createElement(m,e),g(e),h(e,d,t),i(f)&&y(e,t)):o(e.isComment)?e.elm=u.createComment(e.text):e.elm=u.createTextNode(e.text),v(n,e.elm,r)}}function p(e,t){i(e.data.pendingInsert)&&(t.push.apply(t,e.data.pendingInsert),e.data.pendingInsert=null),e.elm=e.componentInstance.$el,m(e)?(y(e,t),g(e)):(Jn(e),t.push(e))}function v(e,t,n){i(e)&&(i(n)?n.parentNode===e&&u.insertBefore(e,t,n):u.appendChild(e,t))}function h(e,t,n){if(Array.isArray(t))for(var r=0;r<t.length;++r)f(t[r],n,e.elm,null,!0,t,r);else a(e.text)&&u.appendChild(e.elm,u.createTextNode(String(e.text)))}function m(e){for(;e.componentInstance;)e=e.componentInstance._vnode;return i(e.tag)}function y(e,n){for(var r=0;r<s.create.length;++r)s.create[r](qn,e);i(t=e.data.hook)&&(i(t.create)&&t.create(qn,e),i(t.insert)&&n.push(e))}function g(e){var t;if(i(t=e.fnScopeId))u.setStyleScope(e.elm,t);else for(var n=e;n;)i(t=n.context)&&i(t=t.$options._scopeId)&&u.setStyleScope(e.elm,t),n=n.parent;i(t=mt)&&t!==e.context&&t!==e.fnContext&&i(t=t.$options._scopeId)&&u.setStyleScope(e.elm,t)}function _(e,t,n,r,i,o){for(;r<=i;++r)f(n[r],o,e,t,!1,n,r)}function b(e){var t,n,r=e.data;if(i(r))for(i(t=r.hook)&&i(t=t.destroy)&&t(e),t=0;t<s.destroy.length;++t)s.destroy[t](e);if(i(t=e.children))for(n=0;n<e.children.length;++n)b(e.children[n])}function $(e,t,n,r){for(;n<=r;++n){var o=t[n];i(o)&&(i(o.tag)?(w(o),b(o)):l(o.elm))}}function w(e,t){if(i(t)||i(e.data)){var n,r=s.remove.length+1;for(i(t)?t.listeners+=r:t=function(e,t){function n(){0==--n.listeners&&l(e)}return n.listeners=t,n}(e.elm,r),i(n=e.componentInstance)&&i(n=n._vnode)&&i(n.data)&&w(n,t),n=0;n<s.remove.length;++n)s.remove[n](e,t);i(n=e.data.hook)&&i(n=n.remove)?n(e,t):t()}else l(e.elm)}function x(e,t,n,r){for(var o=n;o<r;o++){var a=t[o];if(i(a)&&Gn(e,a))return o}}function C(e,t,n,a){if(e!==t){var c=t.elm=e.elm;if(o(e.isAsyncPlaceholder))i(t.asyncFactory.resolved)?O(e.elm,t,n):t.isAsyncPlaceholder=!0;else if(o(t.isStatic)&&o(e.isStatic)&&t.key===e.key&&(o(t.isCloned)||o(t.isOnce)))t.componentInstance=e.componentInstance;else{var l,p=t.data;i(p)&&i(l=p.hook)&&i(l=l.prepatch)&&l(e,t);var d=e.children,v=t.children;if(i(p)&&m(t)){for(l=0;l<s.update.length;++l)s.update[l](e,t);i(l=p.hook)&&i(l=l.update)&&l(e,t)}r(t.text)?i(d)&&i(v)?d!==v&&function(e,t,n,o,a){for(var s,c,l,p=0,d=0,v=t.length-1,h=t[0],m=t[v],y=n.length-1,g=n[0],b=n[y],w=!a;p<=v&&d<=y;)r(h)?h=t[++p]:r(m)?m=t[--v]:Gn(h,g)?(C(h,g,o),h=t[++p],g=n[++d]):Gn(m,b)?(C(m,b,o),m=t[--v],b=n[--y]):Gn(h,b)?(C(h,b,o),w&&u.insertBefore(e,h.elm,u.nextSibling(m.elm)),h=t[++p],b=n[--y]):(Gn(m,g)?(C(m,g,o),w&&u.insertBefore(e,m.elm,h.elm),m=t[--v]):(r(s)&&(s=Zn(t,p,v)),r(c=i(g.key)?s[g.key]:x(g,t,p,v))?f(g,o,e,h.elm,!1,n,d):Gn(l=t[c],g)?(C(l,g,o),t[c]=void 0,w&&u.insertBefore(e,l.elm,h.elm)):f(g,o,e,h.elm,!1,n,d)),g=n[++d]);v<p?_(e,r(n[y+1])?null:n[y+1].elm,n,d,y,o):y<d&&$(0,t,p,v)}(c,d,v,n,a):i(v)?(i(e.text)&&u.setTextContent(c,""),_(c,null,v,0,v.length-1,n)):i(d)?$(0,d,0,d.length-1):i(e.text)&&u.setTextContent(c,""):e.text!==t.text&&u.setTextContent(c,t.text),i(p)&&i(l=p.hook)&&i(l=l.postpatch)&&l(e,t)}}}function k(e,t,n){if(o(n)&&i(e.parent))e.parent.data.pendingInsert=t;else for(var r=0;r<t.length;++r)t[r].data.hook.insert(t[r])}var A=d("attrs,class,staticClass,staticStyle,key");function O(e,t,n,r){var a,s=t.tag,c=t.data,u=t.children;if(r=r||c&&c.pre,t.elm=e,o(t.isComment)&&i(t.asyncFactory))return t.isAsyncPlaceholder=!0;if(i(c)&&(i(a=c.hook)&&i(a=a.init)&&a(t,!0),i(a=t.componentInstance)))return p(t,n),!0;if(i(s)){if(i(u))if(e.hasChildNodes())if(i(a=c)&&i(a=a.domProps)&&i(a=a.innerHTML)){if(a!==e.innerHTML)return!1}else{for(var l=!0,f=e.firstChild,d=0;d<u.length;d++){if(!f||!O(f,u[d],n,r)){l=!1;break}f=f.nextSibling}if(!l||f)return!1}else h(t,u,n);if(i(c)){var v=!1;for(var m in c)if(!A(m)){v=!0,y(t,n);break}!v&&c.class&&Ye(c.class)}}else e.data!==t.text&&(e.data=t.text);return!0}return function(e,t,n,a,c,l){if(!r(t)){var p,d=!1,v=[];if(r(e))d=!0,f(t,v,c,l);else{var h=i(e.nodeType);if(!h&&Gn(e,t))C(e,t,v,a);else{if(h){if(1===e.nodeType&&e.hasAttribute(M)&&(e.removeAttribute(M),n=!0),o(n)&&O(e,t,v))return k(t,v,!0),e;p=e,e=new fe(u.tagName(p).toLowerCase(),{},[],void 0,p)}var y=e.elm,g=u.parentNode(y);if(f(t,v,y._leaveCb?null:g,u.nextSibling(y)),i(t.parent))for(var _=t.parent,w=m(t);_;){for(var x=0;x<s.destroy.length;++x)s.destroy[x](_);if(_.elm=t.elm,w){for(var A=0;A<s.create.length;++A)s.create[A](qn,_);var T=_.data.hook.insert;if(T.merged)for(var S=1;S<T.fns.length;S++)T.fns[S]()}else Jn(_);_=_.parent}i(g)?$(0,[e],0,0):i(e.tag)&&b(e)}}return k(t,v,d),t.elm}i(e)&&b(e)}}({nodeOps:zn,modules:[ar,vr,Rr,Br,Yr,V?{create:xi,activate:xi,remove:function(e,t){!0!==e.data.show?bi(e,t):t()}}:{}].concat(nr)});W&&document.addEventListener("selectionchange",function(){var e=document.activeElement;e&&e.vmodel&&Ii(e,"input")});var ki={inserted:function(e,t,n,r){"select"===n.tag?(r.elm&&!r.elm._vOptions?rt(n,"postpatch",function(){ki.componentUpdated(e,t,n)}):Ai(e,t,n.context),e._vOptions=[].map.call(e.options,Si)):("textarea"===n.tag||Un(e.type))&&(e._vModifiers=t.modifiers,t.modifiers.lazy||(e.addEventListener("compositionstart",Ei),e.addEventListener("compositionend",ji),e.addEventListener("change",ji),W&&(e.vmodel=!0)))},componentUpdated:function(e,t,n){if("select"===n.tag){Ai(e,t,n.context);var r=e._vOptions,i=e._vOptions=[].map.call(e.options,Si);i.some(function(e,t){return!I(e,r[t])})&&(e.multiple?t.value.some(function(e){return Ti(e,i)}):t.value!==t.oldValue&&Ti(t.value,i))&&Ii(e,"change")}}};function Ai(e,t,n){Oi(e,t),(q||G)&&setTimeout(function(){Oi(e,t)},0)}function Oi(e,t,n){var r=t.value,i=e.multiple;if(!i||Array.isArray(r)){for(var o,a,s=0,c=e.options.length;s<c;s++)if(a=e.options[s],i)o=-1<L(r,Si(a)),a.selected!==o&&(a.selected=o);else if(I(Si(a),r))return void(e.selectedIndex!==s&&(e.selectedIndex=s));i||(e.selectedIndex=-1)}}function Ti(e,t){return t.every(function(t){return!I(t,e)})}function Si(e){return"_value"in e?e._value:e.value}function Ei(e){e.target.composing=!0}function ji(e){e.target.composing&&(e.target.composing=!1,Ii(e.target,"input"))}function Ii(e,t){var n=document.createEvent("HTMLEvents");n.initEvent(t,!0,!0),e.dispatchEvent(n)}function Li(e){return!e.componentInstance||e.data&&e.data.transition?e:Li(e.componentInstance._vnode)}var Ni={model:ki,show:{bind:function(e,t,n){var r=t.value,i=(n=Li(n)).data&&n.data.transition,o=e.__vOriginalDisplay="none"===e.style.display?"":e.style.display;r&&i?(n.data.show=!0,_i(n,function(){e.style.display=o})):e.style.display=r?o:"none"},update:function(e,t,n){var r=t.value;!r!=!t.oldValue&&((n=Li(n)).data&&n.data.transition?(n.data.show=!0,r?_i(n,function(){e.style.display=e.__vOriginalDisplay}):bi(n,function(){e.style.display="none"})):e.style.display=r?e.__vOriginalDisplay:"none")},unbind:function(e,t,n,r,i){i||(e.style.display=e.__vOriginalDisplay)}}},Mi={name:String,appear:Boolean,css:Boolean,mode:String,type:String,enterClass:String,leaveClass:String,enterToClass:String,leaveToClass:String,enterActiveClass:String,leaveActiveClass:String,appearClass:String,appearActiveClass:String,appearToClass:String,duration:[Number,String,Object]};function Pi(e){var t=e&&e.componentOptions;return t&&t.Ctor.options.abstract?Pi(ut(t.children)):e}function Di(e){var t={},n=e.$options;for(var r in n.propsData)t[r]=e[r];var i=n._parentListeners;for(var o in i)t[$(o)]=i[o];return t}function Fi(e,t){if(/\d-keep-alive$/.test(t.tag))return e("keep-alive",{props:t.componentOptions.propsData})}var Ri={name:"transition",props:Mi,abstract:!0,render:function(e){var t=this,n=this.$slots.default;if(n&&(n=n.filter(function(e){return e.tag||ct(e)})).length){var r=this.mode,i=n[0];if(function(e){for(;e=e.parent;)if(e.data.transition)return!0}(this.$vnode))return i;var o=Pi(i);if(!o)return i;if(this._leaving)return Fi(e,i);var s="__transition-"+this._uid+"-";o.key=null==o.key?o.isComment?s+"comment":s+o.tag:a(o.key)?0===String(o.key).indexOf(s)?o.key:s+o.key:o.key;var c,u,l=(o.data||(o.data={})).transition=Di(this),f=this._vnode,p=Pi(f);if(o.data.directives&&o.data.directives.some(function(e){return"show"===e.name})&&(o.data.show=!0),p&&p.data&&(c=o,(u=p).key!==c.key||u.tag!==c.tag)&&!ct(p)&&(!p.componentInstance||!p.componentInstance._vnode.isComment)){var d=p.data.transition=O({},l);if("out-in"===r)return this._leaving=!0,rt(d,"afterLeave",function(){t._leaving=!1,t.$forceUpdate()}),Fi(e,i);if("in-out"===r){if(ct(o))return f;var v,h=function(){v()};rt(l,"afterEnter",h),rt(l,"enterCancelled",h),rt(d,"delayLeave",function(e){v=e})}}return i}}},Hi=O({tag:String,moveClass:String},Mi);function Bi(e){e.elm._moveCb&&e.elm._moveCb(),e.elm._enterCb&&e.elm._enterCb()}function Ui(e){e.data.newPos=e.elm.getBoundingClientRect()}function Vi(e){var t=e.data.pos,n=e.data.newPos,r=t.left-n.left,i=t.top-n.top;if(r||i){e.data.moved=!0;var o=e.elm.style;o.transform=o.WebkitTransform="translate("+r+"px,"+i+"px)",o.transitionDuration="0s"}}delete Hi.mode;var zi={Transition:Ri,TransitionGroup:{props:Hi,render:function(e){for(var t=this.tag||this.$vnode.data.tag||"span",n=Object.create(null),r=this.prevChildren=this.children,i=this.$slots.default||[],o=this.children=[],a=Di(this),s=0;s<i.length;s++){var c=i[s];c.tag&&null!=c.key&&0!==String(c.key).indexOf("__vlist")&&(o.push(c),((n[c.key]=c).data||(c.data={})).transition=a)}if(r){for(var u=[],l=[],f=0;f<r.length;f++){var p=r[f];p.data.transition=a,p.data.pos=p.elm.getBoundingClientRect(),n[p.key]?u.push(p):l.push(p)}this.kept=e(t,null,u),this.removed=l}return e(t,null,o)},beforeUpdate:function(){this.__patch__(this._vnode,this.kept,!1,!0),this._vnode=this.kept},updated:function(){var e=this.prevChildren,t=this.moveClass||(this.name||"v")+"-move";e.length&&this.hasMove(e[0].elm,t)&&(e.forEach(Bi),e.forEach(Ui),e.forEach(Vi),this._reflow=document.body.offsetHeight,e.forEach(function(e){if(e.data.moved){var n=e.elm,r=n.style;pi(n,t),r.transform=r.WebkitTransform=r.transitionDuration="",n.addEventListener(si,n._moveCb=function e(r){r&&!/transform$/.test(r.propertyName)||(n.removeEventListener(si,e),n._moveCb=null,di(n,t))})}}))},methods:{hasMove:function(e,t){if(!ri)return!1;if(this._hasMove)return this._hasMove;var n=e.cloneNode();e._transitionClasses&&e._transitionClasses.forEach(function(e){ei(n,e)}),Qr(n,t),n.style.display="none",this.$el.appendChild(n);var r=mi(n);return this.$el.removeChild(n),this._hasMove=r.hasTransform}}}};vn.config.mustUseProp=An,vn.config.isReservedTag=Rn,vn.config.isReservedAttr=Cn,vn.config.getTagNamespace=Hn,vn.config.isUnknownElement=function(e){if(!V)return!0;if(Rn(e))return!1;if(e=e.toLowerCase(),null!=Bn[e])return Bn[e];var t=document.createElement(e);return-1<e.indexOf("-")?Bn[e]=t.constructor===window.HTMLUnknownElement||t.constructor===window.HTMLElement:Bn[e]=/HTMLUnknownElement/.test(t.toString())},O(vn.options.directives,Ni),O(vn.options.components,zi),vn.prototype.__patch__=V?Ci:S,vn.prototype.$mount=function(e,t){return r=e=e&&V?Vn(e):void 0,i=t,(n=this).$el=r,n.$options.render||(n.$options.render=de),_t(n,"beforeMount"),new Tt(n,function(){n._update(n._render(),i)},S,null,!0),i=!1,null==n.$vnode&&(n._isMounted=!0,_t(n,"mounted")),n;var n,r,i},V&&setTimeout(function(){F.devtools&&te&&te.emit("init",vn)},0);var Ki,Ji=/\{\{((?:.|\n)+?)\}\}/g,qi=/[-.*+?^${}()|[\]\/\\]/g,Wi=_(function(e){var t=e[0].replace(qi,"\\$&"),n=e[1].replace(qi,"\\$&");return new RegExp(t+"((?:.|\\n)+?)"+n,"g")}),Gi={staticKeys:["staticClass"],transformNode:function(e,t){t.warn;var n=kr(e,"class");n&&(e.staticClass=JSON.stringify(n));var r=Cr(e,"class",!1);r&&(e.classBinding=r)},genData:function(e){var t="";return e.staticClass&&(t+="staticClass:"+e.staticClass+","),e.classBinding&&(t+="class:"+e.classBinding+","),t}},Zi={staticKeys:["staticStyle"],transformNode:function(e,t){t.warn;var n=kr(e,"style");n&&(e.staticStyle=JSON.stringify(Ur(n)));var r=Cr(e,"style",!1);r&&(e.styleBinding=r)},genData:function(e){var t="";return e.staticStyle&&(t+="staticStyle:"+e.staticStyle+","),e.styleBinding&&(t+="style:("+e.styleBinding+"),"),t}},Xi=d("area,base,br,col,embed,frame,hr,img,input,isindex,keygen,link,meta,param,source,track,wbr"),Yi=d("colgroup,dd,dt,li,options,p,td,tfoot,th,thead,tr,source"),Qi=d("address,article,aside,base,blockquote,body,caption,col,colgroup,dd,details,dialog,div,dl,dt,fieldset,figcaption,figure,footer,form,h1,h2,h3,h4,h5,h6,head,header,hgroup,hr,html,legend,li,menuitem,meta,optgroup,option,param,rp,rt,source,style,summary,tbody,td,tfoot,th,thead,title,tr,track"),eo=/^\s*([^\s"'<>\/=]+)(?:\s*(=)\s*(?:"([^"]*)"+|'([^']*)'+|([^\s"'=<>`]+)))?/,to="[a-zA-Z_][\\w\\-\\.]*",no="((?:"+to+"\\:)?"+to+")",ro=new RegExp("^<"+no),io=/^\s*(\/?)>/,oo=new RegExp("^<\\/"+no+"[^>]*>"),ao=/^<!DOCTYPE [^>]+>/i,so=/^<!\--/,co=/^<!\[/,uo=!1;"x".replace(/x(.)?/g,function(e,t){uo=""===t});var lo,fo,po,vo,ho,mo,yo,go,_o=d("script,style,textarea",!0),bo={},$o={"&lt;":"<","&gt;":">","&quot;":'"',"&amp;":"&","&#10;":"\n","&#9;":"\t"},wo=/&(?:lt|gt|quot|amp);/g,xo=/&(?:lt|gt|quot|amp|#10|#9);/g,Co=d("pre,textarea",!0),ko=function(e,t){return e&&Co(e)&&"\n"===t[0]},Ao=/^@|^v-on:/,Oo=/^v-|^@|^:/,To=/([^]*?)\s+(?:in|of)\s+([^]*)/,So=/,([^,\}\]]*)(?:,([^,\}\]]*))?$/,Eo=/^\(|\)$/g,jo=/:(.*)$/,Io=/^:|^v-bind:/,Lo=/\.[^.]+/g,No=_(function(e){return(Ki=Ki||document.createElement("div")).innerHTML=e,Ki.textContent});function Mo(e,t,n){return{type:1,tag:e,attrsList:t,attrsMap:function(e){for(var t={},n=0,r=e.length;n<r;n++)t[e[n].name]=e[n].value;return t}(t),parent:n,children:[]}}function Po(e,t){var n,r,i,o;(r=Cr(n=e,"key"))&&(n.key=r),e.plain=!e.key&&!e.attrsList.length,(o=Cr(i=e,"ref"))&&(i.ref=o,i.refInFor=function(e){for(var t=i;t;){if(void 0!==t.for)return!0;t=t.parent}return!1}()),function(e){if("slot"===e.tag)e.slotName=Cr(e,"name");else{var t;"template"===e.tag?(t=kr(e,"scope"),e.slotScope=t||kr(e,"slot-scope")):(t=kr(e,"slot-scope"))&&(e.slotScope=t);var n=Cr(e,"slot");n&&(e.slotTarget='""'===n?'"default"':n,"template"===e.tag||e.slotScope||$r(e,"slot",n))}}(e),function(e){var t;(t=Cr(e,"is"))&&(e.component=t),null!=kr(e,"inline-template")&&(e.inlineTemplate=!0)}(e);for(var a=0;a<po.length;a++)e=po[a](e,t)||e;!function(e){var t,n,r,i,o,a,s,c,u,l,f,p,d,v=e.attrsList;for(t=0,n=v.length;t<n;t++)if(r=i=v[t].name,o=v[t].value,Oo.test(r))if(e.hasBindings=!0,(a=Ro(r))&&(r=r.replace(Lo,"")),Io.test(r))r=r.replace(Io,""),o=mr(o),s=!1,a&&(a.prop&&(s=!0,"innerHtml"===(r=$(r))&&(r="innerHTML")),a.camel&&(r=$(r)),a.sync&&xr(e,"update:"+$(r),Or(o,"$event"))),s||!e.component&&yo(e.tag,e.attrsMap.type,r)?br(e,r,o):$r(e,r,o);else if(Ao.test(r))xr(e,r=r.replace(Ao,""),o,a,!1);else{var h=(r=r.replace(Oo,"")).match(jo),m=h&&h[1];m&&(r=r.slice(0,-(m.length+1))),u=r,l=i,f=o,p=m,d=a,((c=e).directives||(c.directives=[])).push({name:u,rawName:l,value:f,arg:p,modifiers:d}),c.plain=!1}else $r(e,r,JSON.stringify(o)),!e.component&&"muted"===r&&yo(e.tag,e.attrsMap.type,r)&&br(e,r,"true")}(e)}function Do(e){var t;if(t=kr(e,"v-for")){var n=function(e){var t=e.match(To);if(t){var n={};n.for=t[2].trim();var r=t[1].trim().replace(Eo,""),i=r.match(So);return i?(n.alias=r.replace(So,""),n.iterator1=i[1].trim(),i[2]&&(n.iterator2=i[2].trim())):n.alias=r,n}}(t);n&&O(e,n)}}function Fo(e,t){e.ifConditions||(e.ifConditions=[]),e.ifConditions.push(t)}function Ro(e){var t=e.match(Lo);if(t){var n={};return t.forEach(function(e){n[e.slice(1)]=!0}),n}}var Ho=/^xmlns:NS\d+/,Bo=/^NS\d+:/;function Uo(e){return Mo(e.tag,e.attrsList.slice(),e.parent)}var Vo,zo,Ko,Jo=[Gi,Zi,{preTransformNode:function(e,t){if("input"===e.tag){var n,r=e.attrsMap;if(!r["v-model"])return;if((r[":type"]||r["v-bind:type"])&&(n=Cr(e,"type")),r.type||n||!r["v-bind"]||(n="("+r["v-bind"]+").type"),n){var i=kr(e,"v-if",!0),o=i?"&&("+i+")":"",a=null!=kr(e,"v-else",!0),s=kr(e,"v-else-if",!0),c=Uo(e);Do(c),wr(c,"type","checkbox"),Po(c,t),c.processed=!0,c.if="("+n+")==='checkbox'"+o,Fo(c,{exp:c.if,block:c});var u=Uo(e);kr(u,"v-for",!0),wr(u,"type","radio"),Po(u,t),Fo(c,{exp:"("+n+")==='radio'"+o,block:u});var l=Uo(e);return kr(l,"v-for",!0),wr(l,":type",n),Po(l,t),Fo(c,{exp:i,block:l}),a?c.else=!0:s&&(c.elseif=s),c}}}}],qo={expectHTML:!0,modules:Jo,directives:{model:function(e,t,n){var r,i,o,a,s,c,u,l,f,p,d,v,h,m,y=t.value,g=t.modifiers,_=e.tag,b=e.attrsMap.type;if(e.component)return Ar(e,y,g),!1;if("select"===_)h=y,xr(e,"change",'var $$selectedVal = Array.prototype.filter.call($event.target.options,function(o){return o.selected}).map(function(o){var val = "_value" in o ? o._value : o.value;return '+((m=g)&&m.number?"_n(val)":"val")+"});"+" "+Or(h,"$event.target.multiple ? $$selectedVal : $$selectedVal[0]"),null,!0);else if("input"===_&&"checkbox"===b)c=e,u=y,f=(l=g)&&l.number,p=Cr(c,"value")||"null",d=Cr(c,"true-value")||"true",v=Cr(c,"false-value")||"false",br(c,"checked","Array.isArray("+u+")?_i("+u+","+p+")>-1"+("true"===d?":("+u+")":":_q("+u+","+d+")")),xr(c,"change","var $$a="+u+",$$el=$event.target,$$c=$$el.checked?("+d+"):("+v+");if(Array.isArray($$a)){var $$v="+(f?"_n("+p+")":p)+",$$i=_i($$a,$$v);if($$el.checked){$$i<0&&("+Or(u,"$$a.concat([$$v])")+")}else{$$i>-1&&("+Or(u,"$$a.slice(0,$$i).concat($$a.slice($$i+1))")+")}}else{"+Or(u,"$$c")+"}",null,!0);else if("input"===_&&"radio"===b)r=e,i=y,a=(o=g)&&o.number,s=Cr(r,"value")||"null",br(r,"checked","_q("+i+","+(s=a?"_n("+s+")":s)+")"),xr(r,"change",Or(i,s),null,!0);else if("input"===_||"textarea"===_)!function(e,t,n){var r=e.attrsMap.type,i=n||{},o=i.lazy,a=i.number,s=i.trim,c=!o&&"range"!==r,u=o?"change":"range"===r?Nr:"input",l="$event.target.value";s&&(l="$event.target.value.trim()"),a&&(l="_n("+l+")");var f=Or(t,l);c&&(f="if($event.target.composing)return;"+f),br(e,"value","("+t+")"),xr(e,u,f,null,!0),(s||a)&&xr(e,"blur","$forceUpdate()")}(e,y,g);else if(!F.isReservedTag(_))return Ar(e,y,g),!1;return!0},text:function(e,t){t.value&&br(e,"textContent","_s("+t.value+")")},html:function(e,t){t.value&&br(e,"innerHTML","_s("+t.value+")")}},isPreTag:function(e){return"pre"===e},isUnaryTag:Xi,mustUseProp:An,canBeLeftOpenTag:Yi,isReservedTag:Rn,getTagNamespace:Hn,staticKeys:(Vo=Jo,Vo.reduce(function(e,t){return e.concat(t.staticKeys||[])},[]).join(","))},Wo=_(function(e){return d("type,tag,attrsList,attrsMap,plain,parent,children,attrs"+(e?","+e:""))}),Go=/^([\w$_]+|\([^)]*?\))\s*=>|^function\s*\(/,Zo=/^[A-Za-z_$][\w$]*(?:\.[A-Za-z_$][\w$]*|\['[^']*?']|\["[^"]*?"]|\[\d+]|\[[A-Za-z_$][\w$]*])*$/,Xo={esc:27,tab:9,enter:13,space:32,up:38,left:37,right:39,down:40,delete:[8,46]},Yo={esc:"Escape",tab:"Tab",enter:"Enter",space:" ",up:["Up","ArrowUp"],left:["Left","ArrowLeft"],right:["Right","ArrowRight"],down:["Down","ArrowDown"],delete:["Backspace","Delete"]},Qo=function(e){return"if("+e+")return null;"},ea={stop:"$event.stopPropagation();",prevent:"$event.preventDefault();",self:Qo("$event.target !== $event.currentTarget"),ctrl:Qo("!$event.ctrlKey"),shift:Qo("!$event.shiftKey"),alt:Qo("!$event.altKey"),meta:Qo("!$event.metaKey"),left:Qo("'button' in $event && $event.button !== 0"),middle:Qo("'button' in $event && $event.button !== 1"),right:Qo("'button' in $event && $event.button !== 2")};function ta(e,t,n){var r=t?"nativeOn:{":"on:{";for(var i in e)r+='"'+i+'":'+na(i,e[i])+",";return r.slice(0,-1)+"}"}function na(e,t){if(!t)return"function(){}";if(Array.isArray(t))return"["+t.map(function(t){return na(e,t)}).join(",")+"]";var n=Zo.test(t.value),r=Go.test(t.value);if(t.modifiers){var i="",o="",a=[];for(var s in t.modifiers)if(ea[s])o+=ea[s],Xo[s]&&a.push(s);else if("exact"===s){var c=t.modifiers;o+=Qo(["ctrl","shift","alt","meta"].filter(function(e){return!c[e]}).map(function(e){return"$event."+e+"Key"}).join("||"))}else a.push(s);return a.length&&(i+="if(!('button' in $event)&&"+a.map(ra).join("&&")+")return null;"),o&&(i+=o),"function($event){"+i+(n?"return "+t.value+"($event)":r?"return ("+t.value+")($event)":t.value)+"}"}return n||r?t.value:"function($event){"+t.value+"}"}function ra(e){var t=parseInt(e,10);if(t)return"$event.keyCode!=="+t;var n=Xo[e],r=Yo[e];return"_k($event.keyCode,"+JSON.stringify(e)+","+JSON.stringify(n)+",$event.key,"+JSON.stringify(r)+")"}var ia={on:function(e,t){e.wrapListeners=function(e){return"_g("+e+","+t.value+")"}},bind:function(e,t){e.wrapData=function(n){return"_b("+n+",'"+e.tag+"',"+t.value+","+(t.modifiers&&t.modifiers.prop?"true":"false")+(t.modifiers&&t.modifiers.sync?",true":"")+")"}},cloak:S},oa=function(e){this.options=e,this.warn=e.warn||gr,this.transforms=_r(e.modules,"transformCode"),this.dataGenFns=_r(e.modules,"genData"),this.directives=O(O({},ia),e.directives);var t=e.isReservedTag||E;this.maybeComponent=function(e){return!t(e.tag)},this.onceId=0,this.staticRenderFns=[]};function aa(e,t){var n=new oa(t);return{render:"with(this){return "+(e?sa(e,n):'_c("div")')+"}",staticRenderFns:n.staticRenderFns}}function sa(e,t){if(e.staticRoot&&!e.staticProcessed)return ca(e,t);if(e.once&&!e.onceProcessed)return ua(e,t);if(e.for&&!e.forProcessed)return f=t,p=(l=e).for,d=l.alias,v=l.iterator1?","+l.iterator1:"",h=l.iterator2?","+l.iterator2:"",l.forProcessed=!0,"_l(("+p+"),function("+d+v+h+"){return "+sa(l,f)+"})";if(e.if&&!e.ifProcessed)return la(e,t);if("template"!==e.tag||e.slotTarget){if("slot"===e.tag)return function(e,t){var n=e.slotName||'"default"',r=pa(e,t),i="_t("+n+(r?","+r:""),o=e.attrs&&"{"+e.attrs.map(function(e){return $(e.name)+":"+e.value}).join(",")+"}",a=e.attrsMap["v-bind"];return!o&&!a||r||(i+=",null"),o&&(i+=","+o),a&&(i+=(o?"":",null")+","+a),i+")"}(e,t);var n;if(e.component)a=e.component,c=t,u=(s=e).inlineTemplate?null:pa(s,c,!0),n="_c("+a+","+fa(s,c)+(u?","+u:"")+")";else{var r=e.plain?void 0:fa(e,t),i=e.inlineTemplate?null:pa(e,t,!0);n="_c('"+e.tag+"'"+(r?","+r:"")+(i?","+i:"")+")"}for(var o=0;o<t.transforms.length;o++)n=t.transforms[o](e,n);return n}return pa(e,t)||"void 0";var a,s,c,u,l,f,p,d,v,h}function ca(e,t){return e.staticProcessed=!0,t.staticRenderFns.push("with(this){return "+sa(e,t)+"}"),"_m("+(t.staticRenderFns.length-1)+(e.staticInFor?",true":"")+")"}function ua(e,t){if(e.onceProcessed=!0,e.if&&!e.ifProcessed)return la(e,t);if(e.staticInFor){for(var n="",r=e.parent;r;){if(r.for){n=r.key;break}r=r.parent}return n?"_o("+sa(e,t)+","+t.onceId+++","+n+")":sa(e,t)}return ca(e,t)}function la(e,t,n,r){return e.ifProcessed=!0,function e(t,n,r,i){if(!t.length)return i||"_e()";var o=t.shift();return o.exp?"("+o.exp+")?"+a(o.block)+":"+e(t,n,r,i):""+a(o.block);function a(e){return r?r(e,n):e.once?ua(e,n):sa(e,n)}}(e.ifConditions.slice(),t,n,r)}function fa(e,t){var n,r,i="{",o=function(e,t){var n=e.directives;if(n){var r,i,o,a,s="directives:[",c=!1;for(r=0,i=n.length;r<i;r++){o=n[r],a=!0;var u=t.directives[o.name];u&&(a=!!u(e,o,t.warn)),a&&(c=!0,s+='{name:"'+o.name+'",rawName:"'+o.rawName+'"'+(o.value?",value:("+o.value+"),expression:"+JSON.stringify(o.value):"")+(o.arg?',arg:"'+o.arg+'"':"")+(o.modifiers?",modifiers:"+JSON.stringify(o.modifiers):"")+"},")}return c?s.slice(0,-1)+"]":void 0}}(e,t);o&&(i+=o+","),e.key&&(i+="key:"+e.key+","),e.ref&&(i+="ref:"+e.ref+","),e.refInFor&&(i+="refInFor:true,"),e.pre&&(i+="pre:true,"),e.component&&(i+='tag:"'+e.tag+'",');for(var a=0;a<t.dataGenFns.length;a++)i+=t.dataGenFns[a](e);if(e.attrs&&(i+="attrs:{"+ha(e.attrs)+"},"),e.props&&(i+="domProps:{"+ha(e.props)+"},"),e.events&&(i+=ta(e.events,!1,t.warn)+","),e.nativeEvents&&(i+=ta(e.nativeEvents,!0,t.warn)+","),e.slotTarget&&!e.slotScope&&(i+="slot:"+e.slotTarget+","),e.scopedSlots&&(i+=(n=e.scopedSlots,r=t,"scopedSlots:_u(["+Object.keys(n).map(function(e){return function e(t,n,r){return n.for&&!n.forProcessed?(i=t,a=r,s=(o=n).for,c=o.alias,u=o.iterator1?","+o.iterator1:"",l=o.iterator2?","+o.iterator2:"",o.forProcessed=!0,"_l(("+s+"),function("+c+u+l+"){return "+e(i,o,a)+"})"):"{key:"+t+",fn:function("+String(n.slotScope)+"){return "+("template"===n.tag?n.if?n.if+"?"+(pa(n,r)||"undefined")+":undefined":pa(n,r)||"undefined":sa(n,r))+"}}";var i,o,a,s,c,u,l}(e,n[e],r)}).join(",")+"]),")),e.model&&(i+="model:{value:"+e.model.value+",callback:"+e.model.callback+",expression:"+e.model.expression+"},"),e.inlineTemplate){var s=function(e,t){var n=e.children[0];if(1===n.type){var r=aa(n,t.options);return"inlineTemplate:{render:function(){"+r.render+"},staticRenderFns:["+r.staticRenderFns.map(function(e){return"function(){"+e+"}"}).join(",")+"]}"}}(e,t);s&&(i+=s+",")}return i=i.replace(/,$/,"")+"}",e.wrapData&&(i=e.wrapData(i)),e.wrapListeners&&(i=e.wrapListeners(i)),i}function pa(e,t,n,r,i){var o=e.children;if(o.length){var a=o[0];if(1===o.length&&a.for&&"template"!==a.tag&&"slot"!==a.tag)return(r||sa)(a,t);var s=n?function(e,t){for(var n=0,r=0;r<e.length;r++){var i=e[r];if(1===i.type){if(da(i)||i.ifConditions&&i.ifConditions.some(function(e){return da(e.block)})){n=2;break}(t(i)||i.ifConditions&&i.ifConditions.some(function(e){return t(e.block)}))&&(n=1)}}return n}(o,t.maybeComponent):0,c=i||va;return"["+o.map(function(e){return c(e,t)}).join(",")+"]"+(s?","+s:"")}}function da(e){return void 0!==e.for||"template"===e.tag||"slot"===e.tag}function va(e,t){return 1===e.type?sa(e,t):3===e.type&&e.isComment?(r=e,"_e("+JSON.stringify(r.text)+")"):"_v("+(2===(n=e).type?n.expression:ma(JSON.stringify(n.text)))+")";var n,r}function ha(e){for(var t="",n=0;n<e.length;n++){var r=e[n];t+='"'+r.name+'":'+ma(r.value)+","}return t.slice(0,-1)}function ma(e){return e.replace(/\u2028/g,"\\u2028").replace(/\u2029/g,"\\u2029")}function ya(e,t){try{return new Function(e)}catch(n){return t.push({err:n,code:e}),S}}new RegExp("\\b"+"do,if,for,let,new,try,var,case,else,with,await,break,catch,class,const,super,throw,while,yield,delete,export,import,return,switch,default,extends,finally,continue,debugger,function,arguments".split(",").join("\\b|\\b")+"\\b"),new RegExp("\\b"+"delete,typeof,void".split(",").join("\\s*\\([^\\)]*\\)|\\b")+"\\s*\\([^\\)]*\\)");var ga,_a,ba=(ga=function(e,t){var n=function(e,t){lo=t.warn||gr,mo=t.isPreTag||E,yo=t.mustUseProp||E,go=t.getTagNamespace||E,po=_r(t.modules,"transformNode"),vo=_r(t.modules,"preTransformNode"),ho=_r(t.modules,"postTransformNode"),fo=t.delimiters;var n,r,i=[],o=!1!==t.preserveWhitespace,a=!1,s=!1;function c(e){e.pre&&(a=!1),mo(e.tag)&&(s=!1);for(var n=0;n<ho.length;n++)ho[n](e,t)}return function(e,t){for(var n,r,i=[],o=t.expectHTML,a=t.isUnaryTag||E,s=t.canBeLeftOpenTag||E,c=0;e;){if(n=e,r&&_o(r)){var u=0,l=r.toLowerCase(),f=bo[l]||(bo[l]=new RegExp("([\\s\\S]*?)(</"+l+"[^>]*>)","i")),p=e.replace(f,function(e,n,r){return u=r.length,_o(l)||"noscript"===l||(n=n.replace(/<!\--([\s\S]*?)-->/g,"$1").replace(/<!\[CDATA\[([\s\S]*?)]]>/g,"$1")),ko(l,n)&&(n=n.slice(1)),t.chars&&t.chars(n),""});c+=e.length-p.length,e=p,A(l,c-u,c)}else{var d=e.indexOf("<");if(0===d){if(so.test(e)){var v=e.indexOf("--\x3e");if(0<=v){t.shouldKeepComment&&t.comment(e.substring(4,v)),x(v+3);continue}}if(co.test(e)){var h=e.indexOf("]>");if(0<=h){x(h+2);continue}}var m=e.match(ao);if(m){x(m[0].length);continue}var y=e.match(oo);if(y){var g=c;x(y[0].length),A(y[1],g,c);continue}var _=C();if(_){k(_),ko(r,e)&&x(1);continue}}var b=void 0,$=void 0,w=void 0;if(0<=d){for($=e.slice(d);!(oo.test($)||ro.test($)||so.test($)||co.test($)||(w=$.indexOf("<",1))<0);)d+=w,$=e.slice(d);b=e.substring(0,d),x(d)}d<0&&(b=e,e=""),t.chars&&b&&t.chars(b)}if(e===n){t.chars&&t.chars(e);break}}function x(t){c+=t,e=e.substring(t)}function C(){var t=e.match(ro);if(t){var n,r,i={tagName:t[1],attrs:[],start:c};for(x(t[0].length);!(n=e.match(io))&&(r=e.match(eo));)x(r[0].length),i.attrs.push(r);if(n)return i.unarySlash=n[1],x(n[0].length),i.end=c,i}}function k(e){var n=e.tagName,c=e.unarySlash;o&&("p"===r&&Qi(n)&&A(r),s(n)&&r===n&&A(n));for(var u,l,f,p=a(n)||!!c,d=e.attrs.length,v=new Array(d),h=0;h<d;h++){var m=e.attrs[h];uo&&-1===m[0].indexOf('""')&&(""===m[3]&&delete m[3],""===m[4]&&delete m[4],""===m[5]&&delete m[5]);var y=m[3]||m[4]||m[5]||"",g="a"===n&&"href"===m[1]?t.shouldDecodeNewlinesForHref:t.shouldDecodeNewlines;v[h]={name:m[1],value:(u=y,l=g,f=l?xo:wo,u.replace(f,function(e){return $o[e]}))}}p||(i.push({tag:n,lowerCasedTag:n.toLowerCase(),attrs:v}),r=n),t.start&&t.start(n,v,p,e.start,e.end)}function A(e,n,o){var a,s;if(null==n&&(n=c),null==o&&(o=c),e&&(s=e.toLowerCase()),e)for(a=i.length-1;0<=a&&i[a].lowerCasedTag!==s;a--);else a=0;if(0<=a){for(var u=i.length-1;a<=u;u--)t.end&&t.end(i[u].tag,n,o);i.length=a,r=a&&i[a-1].tag}else"br"===s?t.start&&t.start(e,[],!0,n,o):"p"===s&&(t.start&&t.start(e,[],!1,n,o),t.end&&t.end(e,n,o))}A()}(e,{warn:lo,expectHTML:t.expectHTML,isUnaryTag:t.isUnaryTag,canBeLeftOpenTag:t.canBeLeftOpenTag,shouldDecodeNewlines:t.shouldDecodeNewlines,shouldDecodeNewlinesForHref:t.shouldDecodeNewlinesForHref,shouldKeepComment:t.comments,start:function(e,o,u){var l=r&&r.ns||go(e);q&&"svg"===l&&(o=function(e){for(var t=[],n=0;n<e.length;n++){var r=e[n];Ho.test(r.name)||(r.name=r.name.replace(Bo,""),t.push(r))}return t}(o));var f,p,d,v,h,m=Mo(e,o,r);l&&(m.ns=l),"style"!==(f=m).tag&&("script"!==f.tag||f.attrsMap.type&&"text/javascript"!==f.attrsMap.type)||ee()||(m.forbidden=!0);for(var y=0;y<vo.length;y++)m=vo[y](m,t)||m;if(a||(null!=kr(p=m,"v-pre")&&(p.pre=!0),m.pre&&(a=!0)),mo(m.tag)&&(s=!0),a?function(e){var t=e.attrsList.length;if(t)for(var n=e.attrs=new Array(t),r=0;r<t;r++)n[r]={name:e.attrsList[r].name,value:JSON.stringify(e.attrsList[r].value)};else e.pre||(e.plain=!0)}(m):m.processed||(Do(m),function(e){var t=kr(e,"v-if");if(t)e.if=t,Fo(e,{exp:t,block:e});else{null!=kr(e,"v-else")&&(e.else=!0);var n=kr(e,"v-else-if");n&&(e.elseif=n)}}(m),null!=kr(d=m,"v-once")&&(d.once=!0),Po(m,t)),n?i.length||n.if&&(m.elseif||m.else)&&Fo(n,{exp:m.elseif,block:m}):n=m,r&&!m.forbidden)if(m.elseif||m.else)v=m,(h=function(e){for(var t=e.length;t--;){if(1===e[t].type)return e[t];e.pop()}}(r.children))&&h.if&&Fo(h,{exp:v.elseif,block:v});else if(m.slotScope){r.plain=!1;var g=m.slotTarget||'"default"';(r.scopedSlots||(r.scopedSlots={}))[g]=m}else r.children.push(m),m.parent=r;u?c(m):(r=m,i.push(m))},end:function(){var e=i[i.length-1],t=e.children[e.children.length-1];t&&3===t.type&&" "===t.text&&!s&&e.children.pop(),i.length-=1,r=i[i.length-1],c(e)},chars:function(e){if(r&&(!q||"textarea"!==r.tag||r.attrsMap.placeholder!==e)){var t,n,i=r.children;(e=s||e.trim()?"script"===(t=r).tag||"style"===t.tag?e:No(e):o&&i.length?" ":"")&&(!a&&" "!==e&&(n=function(e,t){var n=fo?Wi(fo):Ji;if(n.test(e)){for(var r,i,o,a=[],s=[],c=n.lastIndex=0;r=n.exec(e);){c<(i=r.index)&&(s.push(o=e.slice(c,i)),a.push(JSON.stringify(o)));var u=mr(r[1].trim());a.push("_s("+u+")"),s.push({"@binding":u}),c=i+r[0].length}return c<e.length&&(s.push(o=e.slice(c)),a.push(JSON.stringify(o))),{expression:a.join("+"),tokens:s}}}(e))?i.push({type:2,expression:n.expression,tokens:n.tokens,text:e}):" "===e&&i.length&&" "===i[i.length-1].text||i.push({type:3,text:e}))}},comment:function(e){r.children.push({type:3,text:e,isComment:!0})}}),n}(e.trim(),t);!1!==t.optimize&&function(e,t){e&&(zo=Wo(t.staticKeys||""),Ko=t.isReservedTag||E,function e(t){if(t.static=function(e){return 2!==e.type&&(3===e.type||!(!e.pre&&(e.hasBindings||e.if||e.for||v(e.tag)||!Ko(e.tag)||function(e){for(;e.parent;){if("template"!==(e=e.parent).tag)return!1;if(e.for)return!0}return!1}(e)||!Object.keys(e).every(zo))))}(t),1===t.type){if(!Ko(t.tag)&&"slot"!==t.tag&&null==t.attrsMap["inline-template"])return;for(var n=0,r=t.children.length;n<r;n++){var i=t.children[n];e(i),i.static||(t.static=!1)}if(t.ifConditions)for(var o=1,a=t.ifConditions.length;o<a;o++){var s=t.ifConditions[o].block;e(s),s.static||(t.static=!1)}}}(e),function e(t,n){if(1===t.type){if((t.static||t.once)&&(t.staticInFor=n),t.static&&t.children.length&&(1!==t.children.length||3!==t.children[0].type))return void(t.staticRoot=!0);if(t.staticRoot=!1,t.children)for(var r=0,i=t.children.length;r<i;r++)e(t.children[r],n||!!t.for);if(t.ifConditions)for(var o=1,a=t.ifConditions.length;o<a;o++)e(t.ifConditions[o].block,n)}}(e,!1))}(n,t);var r=aa(n,t);return{ast:n,render:r.render,staticRenderFns:r.staticRenderFns}},function(e){function t(t,n){var r=Object.create(e),i=[],o=[];if(r.warn=function(e,t){(t?o:i).push(e)},n)for(var a in n.modules&&(r.modules=(e.modules||[]).concat(n.modules)),n.directives&&(r.directives=O(Object.create(e.directives||null),n.directives)),n)"modules"!==a&&"directives"!==a&&(r[a]=n[a]);var s=ga(t,r);return s.errors=i,s.tips=o,s}return{compile:t,compileToFunctions:(n=t,r=Object.create(null),function(e,t,i){(t=O({},t)).warn,delete t.warn;var o=t.delimiters?String(t.delimiters)+e:e;if(r[o])return r[o];var a=n(e,t),s={},c=[];return s.render=ya(a.render,c),s.staticRenderFns=a.staticRenderFns.map(function(e){return ya(e,c)}),r[o]=s})};var n,r})(qo).compileToFunctions;function $a(e){return(_a=_a||document.createElement("div")).innerHTML=e?'<a href="\n"/>':'<div a="\n"/>',0<_a.innerHTML.indexOf("&#10;")}var wa=!!V&&$a(!1),xa=!!V&&$a(!0),Ca=_(function(e){var t=Vn(e);return t&&t.innerHTML}),ka=vn.prototype.$mount;return vn.prototype.$mount=function(e,t){if((e=e&&Vn(e))===document.body||e===document.documentElement)return this;var n=this.$options;if(!n.render){var r=n.template;if(r)if("string"==typeof r)"#"===r.charAt(0)&&(r=Ca(r));else{if(!r.nodeType)return this;r=r.innerHTML}else e&&(r=function(e){if(e.outerHTML)return e.outerHTML;var t=document.createElement("div");return t.appendChild(e.cloneNode(!0)),t.innerHTML}(e));if(r){var i=ba(r,{shouldDecodeNewlines:wa,shouldDecodeNewlinesForHref:xa,delimiters:n.delimiters,comments:n.comments},this),o=i.render,a=i.staticRenderFns;n.render=o,n.staticRenderFns=a}}return ka.call(this,e,t)},vn.compile=ba,vn}()}).call(this,n(0),n(7).setImmediate)},function(e,t,n){(function(e){var r=void 0!==e&&e||"undefined"!=typeof self&&self||window,i=Function.prototype.apply;function o(e,t){this._id=e,this._clearFn=t}t.setTimeout=function(){return new o(i.call(setTimeout,r,arguments),clearTimeout)},t.setInterval=function(){return new o(i.call(setInterval,r,arguments),clearInterval)},t.clearTimeout=t.clearInterval=function(e){e&&e.close()},o.prototype.unref=o.prototype.ref=function(){},o.prototype.close=function(){this._clearFn.call(r,this._id)},t.enroll=function(e,t){clearTimeout(e._idleTimeoutId),e._idleTimeout=t},t.unenroll=function(e){clearTimeout(e._idleTimeoutId),e._idleTimeout=-1},t._unrefActive=t.active=function(e){clearTimeout(e._idleTimeoutId);var t=e._idleTimeout;t>=0&&(e._idleTimeoutId=setTimeout(function(){e._onTimeout&&e._onTimeout()},t))},n(8),t.setImmediate="undefined"!=typeof self&&self.setImmediate||void 0!==e&&e.setImmediate||this&&this.setImmediate,t.clearImmediate="undefined"!=typeof self&&self.clearImmediate||void 0!==e&&e.clearImmediate||this&&this.clearImmediate}).call(this,n(0))},function(e,t,n){(function(e,t){!function(e,n){"use strict";if(!e.setImmediate){var r,i=1,o={},a=!1,s=e.document,c=Object.getPrototypeOf&&Object.getPrototypeOf(e);c=c&&c.setTimeout?c:e,"[object process]"==={}.toString.call(e.process)?r=function(e){t.nextTick(function(){l(e)})}:function(){if(e.postMessage&&!e.importScripts){var t=!0,n=e.onmessage;return e.onmessage=function(){t=!1},e.postMessage("","*"),e.onmessage=n,t}}()?function(){var t="setImmediate$"+Math.random()+"$",n=function(n){n.source===e&&"string"==typeof n.data&&0===n.data.indexOf(t)&&l(+n.data.slice(t.length))};e.addEventListener?e.addEventListener("message",n,!1):e.attachEvent("onmessage",n),r=function(n){e.postMessage(t+n,"*")}}():e.MessageChannel?function(){var e=new MessageChannel;e.port1.onmessage=function(e){l(e.data)},r=function(t){e.port2.postMessage(t)}}():s&&"onreadystatechange"in s.createElement("script")?function(){var e=s.documentElement;r=function(t){var n=s.createElement("script");n.onreadystatechange=function(){l(t),n.onreadystatechange=null,e.removeChild(n),n=null},e.appendChild(n)}}():r=function(e){setTimeout(l,0,e)},c.setImmediate=function(e){"function"!=typeof e&&(e=new Function(""+e));for(var t=new Array(arguments.length-1),n=0;n<t.length;n++)t[n]=arguments[n+1];var a={callback:e,args:t};return o[i]=a,r(i),i++},c.clearImmediate=u}function u(e){delete o[e]}function l(e){if(a)setTimeout(l,0,e);else{var t=o[e];if(t){a=!0;try{!function(e){var t=e.callback,r=e.args;switch(r.length){case 0:t();break;case 1:t(r[0]);break;case 2:t(r[0],r[1]);break;case 3:t(r[0],r[1],r[2]);break;default:t.apply(n,r)}}(t)}finally{u(e),a=!1}}}}}("undefined"==typeof self?void 0===e?this:e:self)}).call(this,n(0),n(9))},function(e,t){var n,r,i=e.exports={};function o(){throw new Error("setTimeout has not been defined")}function a(){throw new Error("clearTimeout has not been defined")}function s(e){if(n===setTimeout)return setTimeout(e,0);if((n===o||!n)&&setTimeout)return n=setTimeout,setTimeout(e,0);try{return n(e,0)}catch(t){try{return n.call(null,e,0)}catch(t){return n.call(this,e,0)}}}!function(){try{n="function"==typeof setTimeout?setTimeout:o}catch(e){n=o}try{r="function"==typeof clearTimeout?clearTimeout:a}catch(e){r=a}}();var c,u=[],l=!1,f=-1;function p(){l&&c&&(l=!1,c.length?u=c.concat(u):f=-1,u.length&&d())}function d(){if(!l){var e=s(p);l=!0;for(var t=u.length;t;){for(c=u,u=[];++f<t;)c&&c[f].run();f=-1,t=u.length}c=null,l=!1,function(e){if(r===clearTimeout)return clearTimeout(e);if((r===a||!r)&&clearTimeout)return r=clearTimeout,clearTimeout(e);try{r(e)}catch(t){try{return r.call(null,e)}catch(t){return r.call(this,e)}}}(e)}}function v(e,t){this.fun=e,this.array=t}function h(){}i.nextTick=function(e){var t=new Array(arguments.length-1);if(arguments.length>1)for(var n=1;n<arguments.length;n++)t[n-1]=arguments[n];u.push(new v(e,t)),1!==u.length||l||s(d)},v.prototype.run=function(){this.fun.apply(null,this.array)},i.title="browser",i.browser=!0,i.env={},i.argv=[],i.version="",i.versions={},i.on=h,i.addListener=h,i.once=h,i.off=h,i.removeListener=h,i.removeAllListeners=h,i.emit=h,i.prependListener=h,i.prependOnceListener=h,i.listeners=function(e){return[]},i.binding=function(e){throw new Error("process.binding is not supported")},i.cwd=function(){return"/"},i.chdir=function(e){throw new Error("process.chdir is not supported")},i.umask=function(){return 0}}]);</script></body>
</html>
