#!/usr/bin/perl -wT
use CGI ':standard';
use strict;
use CGI::Carp qw(warningsToBrowser fatalsToBrowser);

print "Content-Type: text/html\n\n";

print qq(<!DOCTYPE html>);
print qq(<html>);
print qq(<head>);
print qq(<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poor+Story&display=swap" rel="stylesheet">);
print qq(<style>);
print qq(p {text-align: center; font-size: 100px; color: pink; font-family: 'Poor Story', cursive;});
print qq(</style></head>);
print qq(<body>);
print qq(<p>This is my first Perl program</p>);
print qq(</body>);
print qq(</html>);

 