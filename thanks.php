<?php
/* $Id$ */

require_once './include/prepend.inc';
commonHeader("Thanks");
?>

<h1>Thanks</h1>

<p>
<?php print_link("http://www.easydns.com/?V=698570efeb62a6e2", "easyDNS"); ?> provides
DNS services for the php domains.
</p>

<p>
<?php print_link("http://promote.pair.com/direct.pl?php.net", "pair Networks"); ?> provides
the servers and bandwidth for CVS and mailing list services.
</p>

<p>
<?php print_link("http://www.rackshack.net/", "RackShack"); ?> provides
the server and bandwidth for www.php.net.
</p>

<p>
<?php print_link("http://www.rackspace.com/", "Rackspace"); ?> provides
the server and bandwidth for various php.net services and builds.
</p>

<p>
<?php print_link("http://www.redundant.com/", "Redundant Networks"); ?> provides
the server and bandwidth that run various services and websites for php.net.
</p>

<p>
<?php print_link("http://www.simplicato.com/?a=1007", "Simplicato"); ?> provides a
server and resources to help php.net.
</p>

<p>
And special thanks to all the companies who donate server space and bandwidth to host
our international array of <?php print_link("/mirrors.php", "mirror sites");?>.
</p>

<h1>Thanks Emeritus</h1>
<p>Special 'legacy' thanks go to the people and companies who have helped us in our past.</p>

<p><?php print_link("http://www.synacor.com", "Synacor"); ?> provided us with many terabytes of 
bandwidth and hosting for www.php.net and others for many years.</p>

<p><?php print_link("http://www.vasoftware.com", "VA Software Corp."); ?> helped us by donating a server and resources
to enable us to build manuals and distribute our content via rsync.</p>

<p>PHP.net is very grateful for all their support.</p>

<?php commonFooter(); ?>
