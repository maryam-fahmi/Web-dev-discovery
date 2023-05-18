#!/usr/bin/perl -wT
use CGI ':standard';
use strict;
use CGI::Carp qw(warningsToBrowser fatalsToBrowser);

print "Content-Type: text/html\n\n";

print qq(<!DOCTYPE html>);
print qq(<html>);
print qq(<head>);
print qq(</head>);
print qq(<style> body{background-color: pink; color: navy;}</style>);
print qq(<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poor+Story&display=swap" rel="stylesheet">);

my $fn = param('first');
my $ln = param('last');
my $str = param('street');
my $city = param('city');
my $postalcode = param('pc');
my $prov = param('province');
my $phone = param('phone');
my $email = param('email');
my $phone_flag = 0;
my $postalcode_flag = 0;
my $email_flag = 0;

if ($phone =~ /[0-9]{10}$/){
    $phone_flag = 1; 
    print "Your phone num is: "; }
else {
    print "$phone number is written incorrectly \n";}

if ($postalcode =~ /^[A-Z][0-9][A-Z] [0-9][A-Z][0-9]$/){
    $postalcode_flag = 1;
    print "Your postal code is: ";}
else {
    print "$postalcode provided is invalid \n";}

if ($email =~ /^[a-z0-9.]+@[a-z0-9.-]+$/){
    $email_flag = 1;
    print "Your email is: "; }
else {
    print "$email provided is invalid \n";}

if ($phone_flag == 1 && $postalcode_flag == 1 && $email_flag == 1){
    print qq( "Your name is $fn $ln"  
          <p> "Your steet is $str" 
          <p> "Your city is $city" 
          <p> "Your postal code is $postalcode" 
          <p> "Your province is $prov" 
          <p> "Your phone number is $phone" 
          <p> "Your email is $email");}
          
print qq(</body>);
print qq(</html>);