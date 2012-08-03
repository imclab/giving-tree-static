<?
    $page_title = "Home";
    $page_template = "Main";
?>
<?php include("includes/_header.php"); ?>

<div class="row featured">
    <div class="twelve columns">
        <div class="orbit-wrapper" id="featured">
            <div>
                <div class="content">
                    <h1>Be the Millionth Child's Elf</h1>
                    <p>This year, we’ll have helped one million children. You could be the person who fulfils the unique holiday wish of our millionth child. </p>
                    <a href="donate.php" class="button radius">Become an Elf &raquo;</a>
                </div>
                <img src="http://placehold.it/980x367">
            </div>
            <div>
                <div class="content">
                    <h1>Lead a Holiday Wish Drive</h1>
                    <p>As the holidays get closer, your company or organization can help lead a drive by displaying wish cards for fellow workers, customers, members or friends. </p>
                    <a href="lead-a-drive.php" class="button radius">Lead a Holiday Wish Drive &raquo;</a>
                </div>
                <img src="http://placehold.it/980x367">
            </div>
            <div>
                <div class="content">
                    <h1>Cultivating Deep Roots</h1>
                    <p>Our roots in the communities we serve go deep thanks to our volunteers. Without them, we wouldn’t be able to put smiles on the faces of the kids we help. </p>
                    <a href="volunteer.php" class="button radius">Join Our Community &raquo;</a>
                </div>
                <img src="http://placehold.it/980x367">
            </div>
            <div>
                <div class="content">
                    <h1>Plant a Seed </h1>
                    <p>Putting a smile on a kid’s face doesn’t just happen. It takes the kindness of those who become part of our community of Elves. People who plant seeds by donating their time, a backpack or even a few dollars to fulfill the needs of children in low-income communities.</p>
                    <a href="volunteer.php" class="button radius">Plant a Seed Today &raquo;</a>
                </div>
                <img src="http://placehold.it/980x367">
            </div>
        </div>
        <ul class="button-group radius">
            <li><a href="#" class="button radius">Donate</a></li>
            <li><a href="#" class="button radius">Lead a Drive</a></li>
            <li><a href="#" class="button radius">Volunteer</a></li>
            <li><a href="#" class="button radius">Featured</a></li>
        </ul>
    </div>
</div>

<div class="row">
    <div class="four columns">
        <h3>970,516 Children</h3>
        <p>Have received holiday gifts or back-to-school supplies through
            Family Giving Tree since 1990</p>
    </div>
    <div class="four columns">
        <h3>1,123,228 Gifts</h3>
        <p>Delivered to needy children. We provide gifts during the holidays, 
            and back-to-school supplies during the school year.</p>
    </div>
    <div class="four columns">
        <h3>89%</h3>
        <p>of every donation we raise goes straight to participating charities</p>
    </div>
</div>

<div class="row">
    <div class="twelve columns">
        <h3>Bestowing Joy One Fulfilled Wish, One Backpack at a Time</h3>
        <div class="row">
            <div class="nine columns">
                <p>Since 1990, Family Giving Tree has been fulfilling the holiday wishes of children in low-income neighborhoods and providing backpacks stuffed with school supplies so they’re prepared to learn. It’s more than just gifts or rulers or pencils. It’s giving kids precious, happy memories. It’s amazing to know that we’ve put smiles on the faces of a million kids.</p>
                <a href="" class="small white button">Learn more about our roots &raquo;</a>
            </div>
            <div class="three columns">
                <img src="http://placehold.it/200x200">
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="twelve columns">
        <h3>News</h3>
        <div class="row">
            <div class="four columns">
                <h4>We're Heading Into our Holiday Wish Drive</h4>
                <p>As we wrap up our Back to School Drive, we’re heading right into our Holiday Wish Drive where you could help fulfill the unique holiday wish of an underserved child with a donation. Your company or organization can lead a drive or you can join our community of Elves. &hellip; <a href="">more &raquo;</a></p>
            </div>
            <div class="four columns">
                <h4>FGT on eBay</h4>
                <p>Looking for another way to support the Family Giving Tree?
                    Check out eBay&#8217;s Facebook page to see how you can help
                    without spending a penny. Simply complete the form and eBay will
                    donate a supply-filled&hellip; <a href="">more &raquo;</a></p>
            </div>
            <div class="four columns">
                <h4>ZurbWIRED</h4>
                <p>After three attempts to submit a winning application to the zany
                    folks at ZURB, and among so many excellent proposals from local
                    nonprofits at that, we&#8217;ve finally been chosen as this year&#8217;s&hellip;
                    <a href="">more &raquo;</a></p>
            </div>
            <!--
<div class="four columns">
                <h4>Back to School &amp; STEM</h4>
                <p>Children from low-income families have many barriers to success in the
                    classroom, let alone engaging in career fields related to Science,
                    Technology, Engineering and Mathematics (STEM)&hellip;
                    <a href="">more &raquo;</a></p>
            </div>
-->
        </div>
    </div>
</div>

<?php content_for('footer', function() { ?>
  <script src="http://fgnass.github.com/spin.js/dist/spin.min.js"></script>
  <script type="text/javascript"> 
     $(window).load(function() {
         $('#featured').orbit({ fluid: '16x6' });
         var opts = {
           lines: 13, // The number of lines to draw
           length: 7, // The length of each line
           width: 4, // The line thickness
           radius: 10, // The radius of the inner circle
           rotate: 0, // The rotation offset
           color: '#000', // #rgb or #rrggbb
           speed: 1, // Rounds per second
           trail: 60, // Afterglow percentage
           shadow: false, // Whether to render a shadow
           hwaccel: false, // Whether to use hardware acceleration
           className: 'spinner', // The CSS class to assign to the spinner
           zIndex: 2e9, // The z-index (defaults to 2000000000)
           top: 'auto', // Top position relative to parent in px
           left: 'auto' // Left position relative to parent in px
         };
         debugger
         var target = document.getElementById('featured');
         var spinner = new Spinner(opts).spin(target);
     });
  </script>
<?php })?>

<?php include("includes/_footer.php");  ?>
