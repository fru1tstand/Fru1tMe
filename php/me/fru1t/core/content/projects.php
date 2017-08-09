<?php
namespace me\fru1t\core\content;

use me\fru1t\core\Project;
use me\fru1t\core\templates\EmptyPage;
use me\fru1t\core\templates\projects\TimelineElement;

/** @var Project[] $projects */
$projects = [
//    Project::create()
//        ->setDateBegin("")
//        ->setDateEnd("")
//        ->setDateRunning("")
//
//        ->setTitle("")
//        ->setTech(json_encode([]))
//        ->setImages(json_encode([
//        ]))
//        ->setShortDescription("")
//        ->setLongDescription(""
//            . "<div></div>"
//
//            . "<div class='subtitle'></div>"
//            . "<div></div>"
//        )
//        ->setLinks(json_encode([
//        ])),

    Project::create()
        ->setDateBegin("June 2017")
        ->setDateEnd("Present")
        ->setDateRunning("work in progress")

        ->setTitle("Stream Tools / Window Manager / Stats Tracker")
        ->setTech(json_encode(["Java", "JavaFX, Gradle"]))
        ->setImages(json_encode([
            "https://s3.amazonaws.com/ks_web/fru1t.me/projects/stream-tools-2.gif",
            "https://s3.amazonaws.com/ks_web/fru1t.me/projects/stream-tools-1.gif"
        ]))
        ->setShortDescription("A stats tracker and window manager for live streamers.")
        ->setLongDescription(""
            . "<div>Growing out of the frustration of having to set up Open Broadcaster Software
            (OBS) to re-hook all the finicky windows in order to live stream properly, I set out
            to solve this issue with my own solution. Alongside a previous idea of creating a live
            graphical APM/stats program, I decided to bundle these two ideas together.</div>"

            . "<div class='subtitle'>Features</div>"
            . "<div><ul>
              <li>Text-based stats tracker (APM, mouse movement, summary statistics)</li>
              <li>Graph-based stats (APM, Mouse)</li>
              <li>Modular design allows for multiple windows of the same tool</li>
              <li>Save settings to disk allows sharing of setups</li>
              <li>Active window hooks (enable/disable certain windows depending on the currently focused window)</li>
              <li>Web browser</li>
            </ul></div>"
        )
        ->setLinks(json_encode([
            "Video Test Run in Half-Life 2: Update", "https://www.youtube.com/watch?v=2f_jawXKgE0",
            "GitHub", "https://github.com/fru1tstand/stream-tools",
        ])),

    Project::create()
        ->setDateBegin("December 2016")
        ->setDateEnd("May 2017")
        ->setDateRunning("6 months")

        ->setTitle("ExceptionNull")
        ->setTech(json_encode(["Java, HTML, SASSy CSS", "Spring, Spring Boot, Pebble, Tomcat"]))
        ->setImages(json_encode([
            "https://s3.amazonaws.com/ks_web/fru1t.me/projects/enull-1.gif",
            "https://s3.amazonaws.com/ks_web/fru1t.me/projects/enull-2.gif",
            "https://s3.amazonaws.com/ks_web/fru1t.me/projects/enull-3.gif",
            "https://s3.amazonaws.com/ks_web/fru1t.me/projects/enull-4.gif",
            "https://s3.amazonaws.com/ks_web/fru1t.me/projects/enull-5.gif"
        ]))
        ->setShortDescription("The journey of the college senior project we call Capstone.")
        ->setLongDescription(""
            . "<div>Gabriel Ho (PM), Chengsu Chen (Design), Jonathan Li (Dev), and I (Dev) set out
            to graduate. That's pretty much the summary of this milestone.</div>"

            . "<div class='subtitle'>&quot;Problem Statement&quot;</div>"
            . "<div>There is a 3.6% unemployment rate and 263,000 unfilled jobs in the tech
            industry as of 2017. This, despite the fact that there were 116,00 tech graduates
            across colleges in America in 2016. Schools do an amazing job of giving us the
            foundational skills to work in tech but there is a gap between the classroom and the
            office. Our platform aims to bridge the void through challenges that emphasize
            best-practices and real-world interactions. In addition, every paying user will be
            putting money towards goodwill causes for those who may not be able to afford it.</div>"

            . "<div class='subtitle'>&quot;Our Solution&quot;</div>"
            . "<div>Exception Null is a gamified code-learning platform that presents you with
            interesting and challenging real-world problems. This is done through a network of
            peer-reviewers (called gurus) and learners (called users). Users will opt into a
            challenge (with a choice of single-player, group-challenge, and a versus option for
            both). From here, users with work to solve a real-world problem. Their solutions will
            be reviewed by gurus that provide detailed feedback and scores.</div>"
        )
        ->setLinks(json_encode([
            "Promotional Video", "https://www.youtube.com/watch?v=N6DLzTWoCuY",
            "GitHub", "https://github.com/DumplingLTD/ExceptionNull"
        ])),

    Project::create()
        ->setDateBegin("April 2016")
        ->setDateEnd("May 2017")
        ->setDateRunning("1 year")

        ->setTitle("Distributed Mentoring: A Fanfiction Independent Study")
        ->setTech(json_encode(["MySQL, Java, PHP, CSS", "Tableau, Amazon AWS"]))
        ->setImages(json_encode([
            "https://s3.amazonaws.com/ks_web/fru1t.me/projects/ff-2.gif",
            "https://s3.amazonaws.com/ks_web/fru1t.me/projects/ff-3.gif",
            "https://s3.amazonaws.com/ks_web/fru1t.me/projects/ff-4.gif",
            "https://s3.amazonaws.com/ks_web/fru1t.me/projects/ff-5.gif",
            "https://s3.amazonaws.com/ks_web/fru1t.me/projects/ff-6.gif"
        ]))
        ->setShortDescription("Does distributed mentoring have a positive effect on writing ability
        as demonstrated by several attributes and writing quality?")
        ->setLongDescription(""
            . "<div>I spent a year with a team of researchers, digging into the world of fanfiction
            writing. We eventually scraped more than 800GBs worth of data into a database and with
            the help of Tableau, parsed through the mess of information.</div>"

            . "<div class='subtitle'>Chi 2017 (First Author)</div>"
            . "<div>With its roots dating to popular television shows of the 1960s such as Star
            Trek, fanfiction has blossomed into an extremely widespread form of creative expression.
            The transition from printed zines to online fanfiction repositories has facilitated this
            growth in popularity, with millions of fans writing stories and adding daily to sites
            such as Archive Of Our Own, Fanfiction.net, FIMfiction.net, and many others. Enthusiasts
            are sharing their writing, reading stories written by others, and helping each other to
            grow as writers. Yet, this domain is often undervalued by society and understudied by
            researchers. To facilitate the study of this large but often marginalized community, we
            present a fully anonymized data release (via differential privacy) of the metadata from
            a large fanfiction site (to protect author privacy, story, profile, and review text is
            excluded, and only metadata is provided). We use visual analytics techniques to draw
            several intriguing insights from the data and show the potential for future research.
            We hope other researchers can use this data to explore further questions related to
            online fanfiction communities.</div>"

            . "<div class='subtitle'>CSCW 2017</div>"
            . "<div>From Harry Potter to American Horror Story, fanfiction is extremely popular
            among young people. Sites such as Fanfiction.net host millions of stories, with
            thousands more posted each day. Enthusiasts are sharing their writing and reading
            stories written by others. Exactly how does a generation known more for videogame
            expertise than long-form writing become so engaged in reading and writing in these
            communities? Via a nine-month ethnographic investigation of fanfiction communities that
            included participant observation, interviews, a thematic analysis of 4,500 reader
            reviews and an in-depth case study of a discussion group, we found that members of
            fanfiction communities spontaneously mentor each other in open forums, and that this
            mentoring builds upon previous interactions in a way that is distinct from traditional
            forms of mentoring and made possible by the affordances of networked publics. This work
            extends and develops the theory of distributed mentoring. Our findings illustrate how
            distributed mentoring supports fanfiction authors as they work to develop their writing
            skills. We believe distributed mentoring holds potential for supporting learning in a
            variety of formal and informal learning environments.</div>"
        )
        ->setLinks(json_encode([
            "Our CHI Note 2017 Paper Website", "http://research.fru1t.me/",
            "CHI 2017 Paper", "http://dl.acm.org/citation.cfm?id=3025720",
            "CSCW 2017 Paper", "http://dl.acm.org/citation.cfm?id=2998342",
            "GitHub", "https://github.com/fru1tstand/hcde-fanfiction-study"
        ])),

    Project::create()
        ->setDateBegin("August 2015")
        ->setDateEnd("September 2015")
        ->setDateRunning("1 month")

        ->setTitle("SLICK")
        ->setTech(json_encode(["Java"]))
        ->setShortDescription("a Simple Lightweight dependency InjeCtion frameworK.")
        ->setLongDescription(""
            . "<div>Fresh out of an internship, I wanted to dive deeper in dependency injection, and 
            what better way than implementing my own solution. At the time, I was rewriting the
            engine I was using for Powerbot scripting (see below), so the development was focused
            around that logic.</div>"

            . "<div class='subtitle'>Constructor Injection</div>"
            . "<div>This is the core concept behind Slick's implementation of DI. Instead of always 
            having to type <pre>new Objects(with, a, lot, of, dependencies)</pre>, it's a simple
            <pre>slick.get(WhatIWant.class)</pre>.</div>"

            . "<div class='subtitle'>Recursive Injection</div>"
            . "<div>If a dependency is not met for a specific class, Slick will recursively attempt
            to instantiate dependent class objects, until all dependencies are met. This allows for
            very highly flexible use cases.</div>"

            . "<div class='subtitle'><pre>#provide</pre> non-injectable types</div>"
            . "<div>If there's an external API that you need to use, but can't be wrapped, you can
            simply <pre>slick.provide(api)</pre> it for use by your dependent classes. This will
            store it as a singleton instance for injection later on.</div>"

            . "<div class='subtitle'>Strong Singleton Binding</div>"
            . "<div>Require that a class be singleton through all uses? Annotate it
            <pre>@Singleton</pre> and that's it! Slick enforces that both class definition and
            constructor parameter be annotated to maintain code clarity. Alternatively, one can
            also simply #provide the instance.</div>"
        )
        ->setLinks(json_encode([
            "GitHub", "https://github.com/fru1tstand/powerbot-scripting/blob/master/src/me/fru1t/slick/Slick.java"
        ])),

    Project::create()
        ->setDateBegin("May 2015")
        ->setDateEnd("July 2017")
        ->setDateRunning("~2 years")

        ->setTitle("PHP 7.1 Commons")
        ->setTech(json_encode(["PHP 7.1"]))
        ->setShortDescription("Much like the Apache commons for Java, PHP commons aims to provide
        an extension to the PHP language by drastically reducing boilerplate code required for PHP
        based projects.")
        ->setLongDescription(""
            . "<div>Starting originally as a package to hold the common utilities throughout the
            PHP based projects I worked on, PHP commons has morphed into a PHP 7.1 abusing machine
            to tackle the issues of the PHP language.</div>"

            . "<div class='subtitle'>Language</div>"
            . "<div>PHP is a language that gets a lot of flack due to its mix of naming conventions
            and irregular styles. The language package attempts to mitigate some of these by
            providing standard, safe methods for accessing parameters, checking preconditions, using
            sessions, etc. This package also provides java-like importing via PHP's
            <pre>spl_autoload</pre>ing features, so no more <pre>include</pre>s!</div>"

            . "<div class='subtitle'>MySQL</div>"
            . "<div>No one likes connecting to the database, verifying the connection, executing a
            query, validating and verifying the query went through, then setting up control
            structures to handle the resulting data, and then finally tearing down. The MySQL
            package removes all this boilerplate by exposing a very succinct interface that handles
            all this for you. If more flexibility is needed, the underlying structures are always
            available for use.</div>"

            . "<div class='subtitle'>Router</div>"
            . "<div>Exposes only a centralized router page to the public server domain, creating an
            environment of guaranteed entry. No more <pre>include</pre>s or <pre>require</pre>s.
            This package simply helps lock down your server environment instead of the more
            traditional &quot;expose all public .php files.&quot;</div>"

            . "<div class='subtitle'>Template</div>"
            . "<div>A lightweight, superfast templating engine that outperforms all other templating
            platforms on the market. Supports nested templating and template field guarantees. No
            special syntax introduced.</div>"
        )
        ->setLinks(json_encode([
            "GitHub", "https://github.com/fru1tstand/php-commons"
        ])),

    Project::create()
        ->setDateBegin("May 2015")
        ->setDateEnd("June 2015")
        ->setDateRunning("1 month")

        ->setTitle("INFO 200 Poster Project")
        ->setTech(json_encode(["HTML, SASSy CSS", "Twitter Bootstrap"]))
        ->setImages(json_encode([
            "https://s3.amazonaws.com/ks_web/fru1t.me/projects/i200-poster-ss-1.gif",
            "https://s3.amazonaws.com/ks_web/fru1t.me/projects/i200-poster-ss-2.gif",
            "https://s3.amazonaws.com/ks_web/fru1t.me/projects/i200-poster-ss-3.gif",
        ]))
        ->setShortDescription("A class project done completely abusing Twitter Bootstrap. Mind you,
        this was for a 4-person team. Why can't I just study what I want to instead of having to
        make useless stuff like this? /rant")
        ->setLongDescription(""
            . "<div>At the end of this class's quarter, students (myself included) had to create a
            representation of a solution to a data driven issue. Instead of a poster, I opted to
            create a semi-live mock up of my group's idea.</div>"

            . "<div>Because the informatics program is built around the interaction of people with
            technology and data, I developed the site with a very customizable interface. The
            mock includes internationalization, allowing to change the language between 5
            different presets. The mock also allows for customization of the color theme,
            provided by Bootswatch.</div>"

            . "<div class='subtitle'>Our Idea</div>"
            . "<div>Students and staff at the University of Washington often run into the issue of
            being unable to find a quiet place to study. Our goal is to bring together these people
            with quality study spaces. Be it simply a quiet place, a room with classmates, or a
            hangout spot with friends, our focus is to save time by figuring out how busy places
            are, so you don't have to.</div>"
        )
        ->setLinks(json_encode([
            "GitHub", "https://github.com/fru1tstand/Info200-Poster-Project",
            "Live Site", "http://info.fru1t.me/"
        ])),

    Project::create()
        ->setDateBegin("February 2015")
        ->setDateEnd("June 2015")
        ->setDateRunning("4 months")

        ->setTitle("Stak - The Task Organizer")
        ->setTech(json_encode(["PHP, MySQL, HTML, SASSy CSS, JavaScript", "Facebook PHP API"]))
        ->setImages(json_encode([
            "https://s3.amazonaws.com/ks_web/fru1t.me/projects/stak-ss-1.gif",
            "https://s3.amazonaws.com/ks_web/fru1t.me/projects/stak-ss-2.gif",
        ]))
        ->setShortDescription("An idea for a gamified, easy to use, portable checklist with a
        multitude of features.")
        ->setLongDescription(""
            . "<div>Stak started out as a complex bundle of ideas that stemmed from my frustration at 
            current homework-management systems. A change in one assignment's due date cascaded 
            issues all the way down through 30+ assignments which all needed to be changed 
            individually. So Stak was conceived to fill the functionality that was lacking in 
            current systems.</div>"

            . "<div class='subtitle'>Bulk Task Management</div>"
            . "<div>Tired of manually modifying repeated tasks one by one? See how Stak provides a 
            powerful bulk editor for recurring unique assignments.</div>"

            . "<div class='subtitle'>Reminders</div>"
            . "<div>Projects or large tasks aren't meant to be done on the day they're due. So why 
            are they only shown once? Stak integrates reminders for those looming projects and even 
            allows you to segment them down to more manageable bite-sized pieces.</div>"

            . "<div class='subtitle'>100% Modular</div>"
            . "<div>Don't like or need a feature? or two? or three? Disable them! Stak is designed 
            with you in mind, providing plugins and features that matter to you, and allowing you 
            to completely fit out your experience with what only YOU need.</div>"
        )
        ->setLinks(json_encode([
            "GitHub", "https://github.com/fru1tstand/Fru1tMe-Stak",
            "Prototype", "http://stak.fru1t.me/"
        ])),

    Project::create()
        ->setDateBegin("May 2014")
        ->setDateEnd("April 2015")
        ->setDateRunning("1 year")

        ->setTitle("Visual Music Project")
        ->setTech(json_encode(["JavaScript, HTML, CSS", "jQuery, Web Audio Engine"]))
        ->setImages(json_encode([
            "https://s3.amazonaws.com/ks_web/fru1t.me/projects/vmp-ss-1.gif",
            "https://s3.amazonaws.com/ks_web/fru1t.me/projects/vmp-ss-2.gif",
            "https://s3.amazonaws.com/ks_web/fru1t.me/projects/vmp-ss-3.gif",
            "https://s3.amazonaws.com/ks_web/fru1t.me/projects/vmp-ss-4.gif"
        ]))
        ->setShortDescription("A modular, customizable, browser-based audio spectrum analyzer.")
        ->setLongDescription(""
            . "<div>After watching some music videos with fancy audio spectrum analyzers, I got to
            thinking: &quot;why aren't these a popular thing anymore?&quot;. Looking towards
            windows media player and the numerous visualizations available, I was inspired to
            create something similar in providing a framework for which users could create their
            own designs easily without touching the music itself. Here's to &quot;Bars and Waves
            &quot; from WMP.</div>"
        )
        ->setLinks(json_encode([
            "The Inspiration", "https://www.youtube.com/watch?v=gkime9M4z34",
            "GitHub", "https://github.com/fru1tstand/ks-vmp",
            "Live Demo", "http://vmp.fru1t.me/"
        ])),

    Project::create()
        ->setDateBegin("2011")
        ->setDateEnd("June 2013")
        ->setDateRunning("~1.5 years")

        ->setTitle("Mercer Island High School Computer Reservation System")
        ->setTech(json_encode(["PHP, HTML, CSS, MySQL", "Active Directory"]))
        ->setShortDescription("Starting as a side project in High School, this system morphed into
        my senior project, collecting me the hours required before my senior year even started.")
        ->setLongDescription(""
            . "<div>Mercer Island High School had multiple computer labs and laptop carts that were
            available for teachers to reserve for their classroom. The system in place at the time
            was showing its age and needed a revamp. I took on the responsibility of redesigning
            and implementing a completely new system.</div>"
        ),

    Project::create()
        ->setDateBegin("2011")
        ->setDateEnd("January 2014")
        ->setDateRunning("~3.5 years")

        ->setTitle("KodleeShare: Minecraft")
        ->setTech(json_encode(["Java, PHP, MySQL, HTML, CSS, JavaScript", "Bukkit"]))
        ->setImages(json_encode([
            "https://s3.amazonaws.com/ks_web/fru1t.me/projects/mc-ss-5.gif",
            "https://s3.amazonaws.com/ks_web/fru1t.me/projects/mc-ss-3.gif",
            "https://s3.amazonaws.com/ks_web/fru1t.me/projects/mc-ss-4.gif",
            "https://s3.amazonaws.com/ks_web/fru1t.me/projects/mc-ss-6.gif",
            "https://s3.amazonaws.com/ks_web/fru1t.me/projects/mc-ss-7.gif",
            "https://s3.amazonaws.com/ks_web/fru1t.me/projects/mc-ss-8.gif",
            "https://s3.amazonaws.com/ks_web/fru1t.me/projects/mc-ss-1.gif",
            "https://s3.amazonaws.com/ks_web/fru1t.me/projects/mc-ss-2.gif"
        ]))
        ->setShortDescription("A project that started as a small friends-only game server, turned
            into something much larger after partnering with the right person.")
        ->setLongDescription(""
            . "<div>Kodleeshare's Minecraft server was a game server started as a place for my friends
            to play Minecraft together. Starting as a simple vanilla server, we eventually moved to
            Bukkit and its plugin platform to provide extras like administrative functions, game
            content, and more. At the request of a fellow friend named Carson Beck, we partnered
            up and started advertising on various platforms; one of which was Roblox. We turned from
            a server having 5-6 people iteratively, into 10+ constantly.</div>"

            . "<div class='subtitle'>My Contributions</div>"
            . "<div>With my partner working the PR side of things, I was tasked with providing the
            service. I created plugins that helped our admin team keep peace within the walls
            of our server, managed the server hardware so that our uptime was near 100%, and created
            a web portal for users to manage their in-game accounts. The drive to create a fun and
            popular platform drove me to gain a deeper understanding of database management,
            hardware/server infrastructure, front end development, back end development, and game
            development.</div>"

            . "<div class='subtitle'>Why It Ended</div>"
            . "<div>With changing interests and an aging platform, in December of 2014, we decided
            to pull the plug on what was one of the most enjoyable two years of our high school
            lives. We were surprised at how long it lasted in the first place, exceeding our own
            expectations; but the end was still bittersweet, as it meant the closing of a chapter
            in our lives. Carson Beck and I poured our hearts and souls into the community and
            we received tenfold the amount back from our users. For that, we thank everyone who
            was a part of it.</div>"
        )
        ->setLinks(json_encode([
            "First Map Snapshot (11/19/2011, 56MB)", "https://s3.amazonaws.com/ks_minecraft/11-11-19.zip",
            "Last Map Snapshot (11/13/2013, 1.6GB)", "https://s3.amazonaws.com/ks_minecraft/13-11-13_7-27.zip"
        ])),

    Project::create()
        ->setDateBegin("February 2011")
        ->setDateEnd("July 2013")
        ->setDateRunning("2.5 years")

        ->setTitle("KodleeShare: MIDI")
        ->setTech(json_encode([
            "HTML, CSS, MySQL, PHP, JavaScript",
            "jQuery",
            "Adobe Premiere Pro, Adobe After Effects, FL Studio, Guitar Pro 6"
        ]))
        ->setImages(json_encode([
            "https://s3.amazonaws.com/ks_web/fru1t.me/projects/ks-midi-ss-0.gif",
            "https://s3.amazonaws.com/ks_web/fru1t.me/projects/ks-midi-ss-1.gif",
            "https://s3.amazonaws.com/ks_web/fru1t.me/projects/ks-midi-ss-2.gif",
            "https://s3.amazonaws.com/ks_web/fru1t.me/projects/ks-midi-ss-3.gif",
            "https://s3.amazonaws.com/ks_web/fru1t.me/projects/ks-midi-ss-4.gif",
        ]))
        ->setShortDescription("Free popular music in MIDI for everyone. Videos sold separately.")
        ->setLongDescription(""
            . "<div>The very second website I created (albeit, not the first rendition of it) was
            this glory of a site. I was at the height of my interest for video editing and music,
            and I concluded that a dynamic website would be the perfect way to store everything
            and get some experience with relational databases.</div>"

            . "<div class='subtitle'>Why MIDI?</div>"
            . "<div>At the time, MIDI samples were easy to find, clean up, and redistribute.
            Piggy backing off of popular songs also provided a means for attracting attention to
            the project. This allowed me to experiment with a ton of database and web technologies
            on a site that had a moderate amount of live data flowing.</div>"

            . "<div class='subtitle'>Search</div>"
            . "<div>Don't even ask how this is implemented. But it works (sorta). Playing around
            with weights, full-text search, and other things that shouldn't be done via relational
            databases.</div>"

            . "<div class='subtitle'>Parallax</div>"
            . "<div>Laggy to no end, but at the time, was the coolest thing out there. Still is
            today when implemented correctly.</div>"
        )
        ->setLinks(json_encode([
            "YouTube Channel", "https://www.youtube.com/user/Fru1TStanD",
            "Most Recent Video", "https://www.youtube.com/watch?v=DS5F0IIb7tc",
            "Live Site", "http://kodleeshare.net/"
        ])),

    Project::create()
        ->setDateBegin("September 2010")
        ->setDateEnd("August 2017")
        ->setDateRunning("~7 years, on and off")

        ->setTitle("My Personal Website")
        ->setTech(json_encode(["PHP, HTML, SASSy CSS, JavaScript"]))
        ->setImages(json_encode([
            "https://s3.amazonaws.com/ks_web/fru1t.me/projects/fru1tme-ss-1.gif",
            "https://s3.amazonaws.com/ks_web/fru1t.me/projects/fru1tme-ss-2.gif",
            "https://s3.amazonaws.com/ks_web/fru1t.me/projects/fru1tme-ss-3.gif",
            "https://s3.amazonaws.com/ks_web/fru1t.me/projects/fru1tme-ss-4.gif",
        ]))
        ->setShortDescription("This old thing that gets updated every once in a while reflects what
        I've learned through the years, which is cool to see its progression through the Way Back
        Machine (aka the internet archive).")
        ->setLongDescription(""
            . "<div>Fru1t.Me is simply my personal website/portfolio where I dump my doings through
            the years. It's almost like a diary, without the overly embarrassing things.</div>"
        )
        ->setLinks(json_encode([
            "Way Back Machine (October 2010 Snapshot)", "https://web.archive.org/web/20101229143041/http://kodleeshare.net/",
            "GitHub", "https://github.com/fru1tstand/fru1tme",
            "Live Site (hint. you're on it)", "#"
        ])),

		Project::create()
        ->setDateBegin("2007")
        ->setDateEnd("September 2015")
				->setDateRunning("~8 years")

				->setTitle("RSBuddy / Powerbot / Runescape Scripting")
				->setTech(json_encode(["Java, PHP, MySQL, HTML, CSS", "RSBuddy API, Powerbot API, Apache"]))
        ->setImages(json_encode([
            "https://s3.amazonaws.com/ks_web/fru1t.me/projects/powerbot-ss-1.gif",
            "https://s3.amazonaws.com/ks_web/fru1t.me/projects/powerbot-ss-2.gif",
            "https://s3.amazonaws.com/ks_web/fru1t.me/projects/powerbot-ss-3.gif",
            "https://s3.amazonaws.com/ks_web/fru1t.me/projects/powerbot-ss-4.gif",
            "https://s3.amazonaws.com/ks_web/fru1t.me/projects/powerbot-ss-5.gif"
        ]))
        ->setShortDescription("Everyone has a video game story of how they started programming. This is mine.")
        ->setLongDescription(""
            . "<div>Runescape was the all the rave when I was in elementary and partially middle
            school. Setting itself apart from the entertainment crowd that included Neopets,
            Maplestory, and adobe shockwave/flash game websites, Runescape commanded an immersive
            MMO/RPG game within the confines of a browser via Java. But as with all games, you want
            to be the bigger, better player; or in the case of Runescape, have the highest level in a
            specific skill. Enter scripting. Scripting, against the rules of Runescape, enabled
            automating tasks (like mining, firemaking, etc) so that your character would level up
            while you were away from the computer. While a game killer, this earned bragging rights
            amongst friends, and ultimately, popularity.</div>"

            . "<div class='subtitle'>The Start</div>"
            . "<div>As a scripter, you would use an API from a handful of providers that did
            the hard work for you (figuring memory locations, providing hooks, etc). All you had to
            do was write the actions you wanted to character to perform (like, walk to a location,
            click specific interface icons to use items, or do actions). With a huge community and
            tons of example scripts, getting started was a matter of copy-pasting lines and
            compiling. This was a great dive introduction into programming as you had tangible
            products from the get-go. The curiosity of performing different actions, or figuring
            out ways to get around anti-scripting methodologies employed by Jagex (Runescape's
            creator), led to the improvement in my programming ability. My motivation was no longer
            to have the most powerful character, but rather, have the most useful and widely
            known scripts.</div>"

            . "<div class='subtitle'>My Contributions</div>"
            . "<div>I started this adventure into scripting when I was in the 7th grade. By the time
            the scene quieted down some 4-5 years later, I had more than 250,000 unique users use my
            scripts, at a peak of 10,000 unique concurrent users. I created a total of 8 scripts
            which each focused on a different skill within the Runescape realm, with two flagship
            scripts garnering ~70% of my userbase. As the exhilaration of creating the biggest and
            best script pushed me to expand my scripts functionality, the technology turned away
            from in-game features, to out-of-game features like metrics, analytics, and stats
            tracking on a personal website, throwing me into database management, front end
            development, and back end development.</div>")

        ->setLinks(json_encode([
            "Powerbot Account Page", "https://www.powerbot.org/community/profile/938443-fru1tstand/",
            "GitHub for Scripts", "https://github.com/fru1tstand/RSBot",
            "GitHub for Frameworks", "https://github.com/fru1tstand/powerbot-scripting"
        ])),
];

$projectsHtml = "";
for ($i = 0; $i < count($projects); $i++) {
	$projectsHtml .= TimelineElement::renderFromProject($projects[$i], $i);
}

$body = <<<HTML
<div class="page-push"></div>

<div class="container padded">
	<div class="timeline">$projectsHtml</div>
</div>

<script>
  (function() {
    let elements = document.querySelectorAll('.timeline > .controller');
    for (let i = 0; i < elements.length; i++) {
      elements[i].addEventListener('change', function() {
        let images = this.nextElementSibling.querySelectorAll('img');
        for (let j = 0; j < images.length; j++) {
          if (images[j].src != images[j].dataset.src) {
            images[j].src = images[j].dataset.src;
          }
        }
      });
    }
  } ());
</script>
HTML;

EmptyPage::start()
	->with(EmptyPage::FIELD_HTML_TITLE, "Projects")
	->with(EmptyPage::FIELD_BODY, $body)
	->render();
