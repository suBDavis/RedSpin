<?php 
include '../header.php'; 
echo $header;
?>
<h1>How to set SRV records for Minecraft Servers.
<date>Feb 5, 2013</date>
</h1>
<img class='imgbody' src='/images/godaddy-logo.png' align='center' width=730 height=200>
I've read at least 6 or 7 bad articles on how to set up SRV records on GoDaddy's website, including the how-to from GoDaddy itself.  They are all terrible. I had to piece together slivers of useful information and figure out how to set one up myself.  After much suffering, cursing and drinking (OK maybe not drinking) I decided to create this article: "How to ACTUALLY set up SRV records".<br><br>


First, a little bit about SRV records. An SRV record specifies a port on which a connection to a machine will be made so that the DNS server knows where to direct your web client. This is especially useful when your server is not listening on the default port for it's service. In my tutorial, I will look at port 25565, the default Minecraft server port.<br><br>

Log into GoDaddy and navigate to the DNS page.  You want to edit the DNS records.<br><br>

You want to first add an "A" record with the IP (and only the IP) of your server.  Use the template I have provided with the three record above, and for "Host" put in something small that denotes your service. Example: 'mc' for Minecraft, 'talk' for a VoIP service etc. This is not where your port number goes. Yet.<br><br>

Next, scroll down to the SRV record section.  This is the part that seems to be very poorly documented.<br><br>

Set each of the columns like this:<br><br>

Service: something beginning with an underscore ( _ ) that names your service.  It does not have to be anything in particular.  Example '_minecraft'<br><br>

Protocol: must also begin with an underscore and is generally '_tcp'  See <a href='http://www.diffen.com/difference/TCP_vs_UDP'>HERE</a> for the differences.  Minecraft will be a '_tcp' protocol.<br><br>

Name: this must be the same as what you entered for the A record Host.  I used 'mc'.<br><br>

Priority : enter 0<br><br>

Weight : enter 0<br><br>

Port : put the service port number here.  Example '25564' for my Minecraft server.  Yours WILL PROBABLY be different.<br><br>

Target : this one is important.  Enter the FULL URL.  This is the exact same thing you will enter in the client to connect to your server.  Example 'mc.redspin.net'  (NOTE: if you are using '@' to have just the domain name point to your service, you must also use '@' for the name and you must put in only your domain Example 'redspin.net')<br><br>

TTL : Time to live just notes how long the DNS server will keep your record before checking for an update.  The smallest TTL is best.<br><br>

This should work, but could take a few days to aggregate to other DNS servers.  If you have any problems, send an email to bdavis<span style='display:none;'>foobar</span>@redspin.net with your settings and how long ago you set them.<br><br>
<?php
include '../footer.php';
echo $footer;
?>