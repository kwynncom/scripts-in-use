base62 prints crypto secure random strings with characters that do not break copy and paste, specifically [A-Za-z0-9]

It is best to read this file in "raw" version or locally.  On the web, newlines don't display correctly.

Example output:

$ base62
1vZftVgkfD3GadwP4WlJ
$ base62
sV0Ou3MvZpjzysbHcKda
$ base62 30
r8TxMaBRVXessgBqVzI6kj0Dp06PTd
$ base62 5
gGWE4

INSTALLATION

sudo bash base62_install.sh

MORE INFO

It's base62 because it's almost base64 encoding but without the / or +.  / and + will usually break up the string when you 
try to copy / clipboard it.  The main purpose is to generate strong passwords that I can copy and paste without grief.  

It's crypto secure because it uses PHP's random_int() function, which says "Generates cryptographically secure pseudo-random integers."

ALGORITHM

I created this in early 2018.  When I look at it in mid-2021, I had to think about my algoritm a moment.  Here it is:

The ASCII number for 'A', 'a', and '0' are put in $basea (base array).  
Then for each character requested-- 0 .. ($len - 1) in the $i loop--I set the $j counter and $ri becomes the random number.  
Iterate until we figure out which $basea to add to
When we are within the right $basea range, add the random number to the base, and break / end the inner loop.

As best I remember, I was going for pithy.  It works, so I'm not going to touch it.


SOURCES / BACKGROUND:
https://www.php.net/manual/en/function.random-int.php
https://kwynn.com/t/7/11/blog.html  - See "Feb 2, 2018 - base62"
***
https://github.com/kwynncom/kwynn-php-general-utils/blob/c3222882f638e48e07958a22d634c7b9298fbd36/kwutils.php - lines 190 - 203
