#!/usr/bin/perl -wT
use strict; 
use CGI; 

my $obj = new CGI;
my $datastring ="";

# read information from form
my $username = $obj->param( "name" );
my $email = $obj->param( "email" );
my @game_types = $obj->param( "game_types" );
my $game_type2="";
foreach my $game_type (@game_types) {
   $game_type2 .= "$game_type ";
}
my $game_system = $obj->param( "game_system" );
my $play_frequency = $obj->param( "play_frequency" );
my @fave_game = $obj->param( "fave_game" );
my $fave_game2="";
foreach my $game (@fave_game) {
   $fave_game2 .= "$game ";
}
my $interests = $obj->param( "interests" );

# Save the data into a text file

$datastring = "Saved Data\n\nUser name: $username:\nEmail: $email:\nGenres Intersted In: $game_type2\nPreferred Game System: $game_system\nPlay Frequency: $play_frequency\nFavorite Game: $fave_game2\nInterests: $interests\n\n";
open(OUTDATA, ">>data.txt") or die "Error in opening file data.txt";
print OUTDATA $datastring;
close(OUTDATA); 

#Send the info back
print $obj->header( "text/html" ),
	$obj->start_html(
        	-title    => "Form Data",			
		-topmargin =>"0"
        ),	
	$obj->h1("What You Submitted"),
	$obj->p("User name:  $username"),
	$obj->p("Email:  $email"),
	$obj->p("Genres Intersted In:  $game_type2"),
	$obj->p("Preferred System: $game_system"),	
	$obj->p("Play Frequency:  $play_frequency"),	
	$obj->p("Favorite Game:  $fave_game2"),	
	$obj->p("Interests: $interests"),
	$obj->end_html;
