<?php 
include '../header.php'; 
echo $header;
?>
<h1>
Arduino Binary Clock 
<date>
Aug 18, 2013
</date>
</h1>
<img class='imgbody' src='/images/clock.JPG' align='left'>
<p>My Arduino UNO has been in the closet since late last year.  I bought the board to teach myself something new, but soon became too busy and uninterested to tinker.  Now, with less than a week left before I go to college, I decided to get it out and take on my biggest electronics project ever.<br><br>

I have no idea how it originally came about, but I have been wanting a funky clock for quite some time.  Now that I am trying to gather some unique artifacts for my dorm room, I couldn't think of a better thing to have on my shelf than a custom built binary clock.  I mean - the girls love those right?<br><br>

While I will not go into the exact detail that went into this, I am going to share my photos from different stages in the project as well as my wiring and the code for the board.  For this particular project, a real time clock Module is useful but not necessary.
<h3>Materials</h3>
<ul>
<li>Arduino board and USB cable
<li>Some wire (I used CAT5 because it's colourful and was already laying around my house)
<li>Some small solder boards.  Got mine from eBay.
<li>12 led bulbs for the main display.
<li>12 10K resistors
<li>1 button
<li>A single, sizeable 1 x 4 plank
<li>Glass
<li>Plexiglass
<li>Assorted screws and nails 
</ul>
<img class='imgbody' src='/images/clock2.JPG' align='left'>
While time consuming, the case was not especially hard to build.  I made groves for the glass and plexiglass with my Skill Saw.  I drilled holes for the wires and screwed the whole assembly together.  The only tricky part was cutting the glass.  I was fortunate to have access to  "The Amazing Tile and Glass Cutter" to make really clean cuts with glass harvested from old picture frames in the basement.  My initial intent was to stain the wood but after sanding it down, I kept it plain.<br><br>


I left a hole in the top to access the USB port on the board.  Without it, there would be no way to fix bugs or reset the time if something went wrong.  Plus, I may want to add more features or more elaborate animation later on. <br><br>


I didn't have a good resistor size that would allow my LEDs to be visible yet dim enough to not be distracting at night so I also added a button on the top to toggle the LED display.  This particular button  was the left L1 and L2 keypad cannibalized from a broken PS2 controller. <br><br>

The back is not especially attractive but in the middle you can see the Real Time Clock module and it's watch battery.  It will keep the time even if the clock is not plugged in and is generally more accurate than the onboard Arduino clock.<br><br>

As far as cost goes, I bought most of the materials as different times.  Not including the Arduino itself, I'd estimate the total cost to be around $40.<br><br>
<center><img class='imgbody' src='/images/clock4.JPG' align='middle'>
<img class='imgbody' src='/images/clock3.JPG' align='middle'></center>
<h3>Programming</h3>
I used the Time library from  the Arduino playground, the DS1307RTC library that is included with time, and the Wire library which is built into the Arduino program.    Instead of writing 12 if statments for the hours and 60 for the minutes, I broke the numbers down into the ones and tens places.  Here is the sketch:<br><br>
<a href="http://pastebin.com/M9FXEAh8">http://pastebin.com/M9FXEAh8</a>

<?php
include '../footer.php';
echo $footer;
?>