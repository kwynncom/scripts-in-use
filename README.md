# scripts-in-use
scripts I use all the time

iping - Only script in this repo for now.

iping pings both IPv4 and IPv6 until they both succeed within a few seconds of each other, or until max attempts.

Note that as I create the new edition in this repo (2021/07/05 6:35pm EDT / UTC -4), it is not the battle tested version.  That version is several versions 
back in my "code-fragments" repo.

GORY DETAILS:

Regarding $gotat-init:

The initial value is to a some degree arbitrary.  With that said, my thinking:

$gotat is the "got at" array that stores the time of 4's or 6's success.  

* I want them as numbers so I can immediately subtract them without messing with various conditions
* The values should be negative to mark them as "weird" / effectively uninitialized. -1 is the last second in 1969
* They need to be far enough apart in value that no one would use the difference as their "good if," or it's impossible given the min int.
* I'm making very sure I add a positive number (abs()) so that I don't overflow the integer space.

