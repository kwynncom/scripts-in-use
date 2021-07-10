# scripts-in-use
scripts I use all the time

iping pings both IPv4 and IPv6 until they both succeed within a few seconds of each other, or until max attempts.

It is best to read this file in "raw" version or locally.  On the web, newlines don't display correctly.

INSTALLATION
sudo bash iping_install.sh

Installation also does 2 tests, with sample results below.

USAGE
iping

Again, see sample below.  In the normal, non-installation case, there will be no headers about the 2 tests and only 1 run.


GORY DETAILS:

Regarding $gotat-init:

The initial value is to a some degree arbitrary.  With that said, my thinking:

$gotat is the "got at" array that stores the time of 4's or 6's success.  

* I want them as numbers so I can immediately subtract them without messing with various conditions
* The values should be negative to mark them as "weird" / effectively uninitialized. -1 is the last second in 1969
* They need to be far enough apart in value that no one would use the difference as their "good if," or it's impossible given the min int.
* I'm making very sure I add a positive number (abs()) so that I don't overflow the integer space.

EXAMPLE:

sudo bash iping_install.sh
Testing local version
IPv4: PING  (34.193.238.16) 56(84) bytes of data.
64 bytes from ec2-34-193-238-16.compute-1.amazonaws.com (34.193.238.16): icmp_seq=1 ttl=41 time=36.6 ms
** IPv4 OK *****
IPv6: PING kwynn.com(2600:1f18:23ab:9500:acc1:69c5:2674:8c03 (2600:1f18:23ab:9500:acc1:69c5:2674:8c03)) 56 data bytes
64 bytes from 2600:1f18:23ab:9500:acc1:69c5:2674:8c03 (2600:1f18:23ab:9500:acc1:69c5:2674:8c03): icmp_seq=1 ttl=232 time=36.7 ms
** IPv6 OK *****
** BOTH OK *** v0.2.2 - July 5, 2021, 10:37pm EDT / UTC -4
*** TESTING INSTALLED VERSION
IPv4: PING  (34.193.238.16) 56(84) bytes of data.
64 bytes from ec2-34-193-238-16.compute-1.amazonaws.com (34.193.238.16): icmp_seq=1 ttl=41 time=36.6 ms
** IPv4 OK *****
IPv6: PING kwynn.com(2600:1f18:23ab:9500:acc1:69c5:2674:8c03 (2600:1f18:23ab:9500:acc1:69c5:2674:8c03)) 56 data bytes
64 bytes from 2600:1f18:23ab:9500:acc1:69c5:2674:8c03 (2600:1f18:23ab:9500:acc1:69c5:2674:8c03): icmp_seq=1 ttl=232 time=36.8 ms
** IPv6 OK *****
** BOTH OK *** v0.2.2 - July 5, 2021, 10:37pm EDT / UTC -4
