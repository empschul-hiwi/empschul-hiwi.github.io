---
layout: page
image: assets/images/Banner_Mobiles Labor1.png
title: Mobiles Labor
---
$('.accordion-item .heading').on('click', function(e) {
    e.preventDefault();

    // Add the correct active class
    if($(this).closest('.accordion-item').hasClass('active')) {
        // Remove active classes
        $('.accordion-item').removeClass('active');
    } else {
        // Remove active classes
        $('.accordion-item').removeClass('active');

        // Add the active class
        $(this).closest('.accordion-item').addClass('active');
    }

    // Show the content
    var $content = $(this).next();
    $content.slideToggle(100);
    $('.accordion-item .content').not($content).slideUp('fast');
});

  <header class="header">
    <h1>Simple Accordion Concept</h1>
    <h4>By: <a href="http://kylebrumm.com" target="_blank">Kyle Brumm</a></h4>
</header>

<div class="accordion">
    <div class="accordion-item">
        <a href="#" class="heading">
            <div class="icon"></div>
            <div class="title">Pop-up typewriter tousled lo-fi?</div>
        </a>

        <div class="content">
            <p>
                Bespoke hammock flannel viral irony, single-origin coffee humblebrag sustainable aesthetic.  Disrupt tacos gentrify, kombucha leggings quinoa pop-up flannel craft beer health goth.  Brunch health goth dreamcatcher celiac cold-pressed, ugh four loko.  Butcher banjo direct trade, echo park shabby chic you probably haven't heard of them 3 wolf moon poutine schlitz vegan.  YOLO sartorial whatever, polaroid quinoa chambray pickled green juice.  Gentrify everyday carry literally squid.  Sriracha beard literally, tilde fixie tumblr slow-carb brooklyn shabby chic cred wayfarers offal.
            </p>
        </div>
    </div>

    <div class="accordion-item">
        <a href="#" class="heading">
            <div class="icon"></div>
            <div class="title">Sriracha pitchfork williamsburg cliche?</div>
        </a>

        <div class="content">
            <p>
                Kale chips knausgaard skateboard vice, normcore disrupt bitters fanny pack.  Gochujang cliche kale chips, vice ramps semiotics distillery.  Organic lumbersexual ugh yr literally actually.  Occupy master cleanse iPhone, microdosing literally pickled cronut waistcoat.  Pug VHS 90's asymmetrical meh swag humblebrag, you probably haven't heard of them everyday carry pinterest chicharrones ugh.  Keytar intelligentsia trust fund, tumblr roof party single-origin coffee ramps.  Everyday carry messenger bag pabst, pug mlkshk stumptown polaroid flexitarian helvetica celiac seitan.
            </p>
        </div>
    </div>

    <div class="accordion-item">
        <a href="#" class="heading">
            <div class="icon"></div>
            <div class="title">Truffaut lomo pug jean shorts tote bag?</div>
        </a>

        <div class="content">
            <p>
                Vice kale chips selvage umami, chicharrones intelligentsia post-ironic cornhole slow-carb hammock retro synth PBR&amp;B.  Small batch waistcoat helvetica, gastropub disrupt man braid fap everyday carry hashtag tumblr you probably haven't heard of them schlitz knausgaard.  Cronut blog narwhal pop-up tilde.  Scenester PBR&amp;B microdosing, twee bespoke authentic swag banh mi sartorial fashion axe neutra brooklyn cornhole.  Pickled brunch chartreuse, ugh everyday carry drinking vinegar cray street art chillwave church-key cornhole tilde biodiesel keffiyeh.  Disrupt venmo crucifix, listicle locavore cardigan readymade.  Pabst shoreditch scenester mlkshk art party franzen, photo booth occupy lomo bushwick bitters williamsburg synth hella wayfarers.
            </p>
        </div>
    </div>

    <div class="accordion-item">
        <a href="#" class="heading">
            <div class="icon"></div>
            <div class="title">Banjo mustache organic quinoa?</div>
        </a>

        <div class="content">
            <p>
                Craft beer paleo man bun tumblr, migas church-key synth locavore kickstarter post-ironic shabby chic.  Microdosing migas portland, literally VHS normcore kickstarter sustainable single-origin coffee occupy cardigan.  Viral venmo lomo, craft beer distillery kickstarter messenger bag fashion axe keffiyeh tofu celiac sustainable health goth deep v.  Bushwick sustainable raw denim kale chips.  Intelligentsia migas craft beer listicle, affogato messenger bag kitsch truffaut artisan irony scenester sartorial vice ennui hoodie.  Man bun blog cronut, truffaut celiac kogi photo booth quinoa direct trade  normcore iPhone.  Disrupt synth chartreuse, actually lumbersexual schlitz health goth ennui skateboard gochujang kinfolk trust fund farm-to-table.
            </p>
        </div>
    </div>
</div>

