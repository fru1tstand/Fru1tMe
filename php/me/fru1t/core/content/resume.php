<?php

use me\fru1t\core\templates\HeaderPage;

$body = <<<HTML
<div class="page-push"></div>
<div class="resume container padded">
  <section class="resume-header">
    <div class="title name">Kodlee Yin</div>
    <div class="email">ee@fru</div>
  </section>
  
  <div class="section-title">Experience</div>
  <section class="resume-experience">
    <!--<div class="entry">-->
      <!--<div class="entry-head">-->
        <!--<div class="entity"></div>-->
        <!--<div class="location"></div>-->
        <!--<div class="date"></div>-->
      <!--</div>-->
      <!--<div class="title"></div>-->
      <!--<ul class="responsibilities">-->
        <!--<li></li>-->
      <!--</ul>-->
    <!--</div>-->
    
    <div class="entry">
      <div class="entry-head">
        <div class="entity">Google</div>
        <div class="location">Kirkland, Washington</div>
        <div class="date">September '17 - Present</div>
      </div>
      <div class="title">Software Engineer</div>
      <ul class="responsibilities">
        <li>TBD...</li>
      </ul>
    </div>
    
    <div class="entry">
      <div class="entry-head">
        <div class="entity">Google</div>
        <div class="location">Multiple Locations</div>
        <div class="date">June - September <span class="green">'14</span>, <span class="blue">'15</span>, <span class="red">'16</span></div>
      </div>
      <div class="title">Software Engineering Intern</div>
      <ul class="responsibilities">
        <li class="green">Engineered Bigtable-based systems and implemented map-reduce jobs that
          improved site reliability</li>
        <li class="green">Collaborated with peers to create backend tools that interfaced with site
          databases for CSRs</li>
        <li class="blue">Composed frontend features and constructed experiments to evaluate their
          performance</li>
        <li class="blue">Added improvements to internal processes that severely improved code
          quality and maintainability</li>
        <li class="red">Forged new data pipelines and designed dashboards to monitor key metrics
          and introduce triggered alerts</li>
        <li class="red">Scripted code health and testing improvement programs to increase code
          transparency for faster development</li>
      </ul>
    </div>
    
    <div class="entry">
      <div class="entry-head">
        <div class="entity">Revenue Management Systems, Inc.</div>
        <div class="location">Seattle, Washington</div>
        <div class="date">January '14 - March '15</div>
      </div>
      <div class="title">Software Engineer</div>
      <ul class="responsibilities">
        <li>Built tools to automate mundane tasks</li>
        <li>Co-produced a web-based dashboard that tracked overall system health</li>
        <li>Developed a modern, responsive, mobile-first website</li>
      </ul>
    </div>
    
    <div class="entry">
      <div class="entry-head">
        <div class="entity">Mercer Island School District</div>
        <div class="location">Mercer Island, Washington</div>
        <div class="date">September '12 - July '13</div>
      </div>
      <div class="title">Web Application Developer</div>
      <ul class="responsibilities">
        <li>Created a dynamic web-based computer lab reservation system, complete with ticketing
          support; to be used by a 4,000 student school district</li>
      </ul>
    </div>
    
    <div class="entry">
      <div class="entry-head">
        <div class="entity">Fru1tMe</div>
        <div class="location">Seattle, Washington</div>
        <div class="date">'08 - Present</div>
      </div>
      <div class="title">Web Developer / Database Manager</div>
      <ul class="responsibilities">
        <li>Pioneering with experimental web technologies such as Canvas, WebAudio, and DOMApplications</li> 
        <li>Maintaining server hardware and infrastructure along with server security</li> 
        <li>Using professional video editing tools such as Adobe Premiere Pro and After Effects to edit production-quality videos</li> 
        <li>Supporting and maintaining multiple popular game servers that host 500+ member communities</li>
      </ul>
    </div>
  </section>
  
  <div class="section-title">Education and Achievements</div>
  <section class="education">
    <div class="entry">
      <div class="entry-head">
        <div class="entity">University of Washington</div>
        <div class="location">Seattle, Washington</div>
        <div class="date">September '14 - June '17</div>
      </div>
      <div class="title">Informatics - June 2017</div>
      <ul class="achievements">
        <li>First author to <a href="http://dl.acm.org/citation.cfm?id=3025720" target="_blank">
          Where No One Has Gone Before: The First Meta-Dataset of the World's Largest Fanfiction
          Repository</a>, CHI 2017</li>
        <li>Co-author to <a href="http://dl.acm.org/citation.cfm?id=2998342" target="_blank">More
          Than Peer Production: Fanfiction Communities as Sites of Distributed Mentoring</a>,
          CSCW 2017</li>
      </ul>
    </div>
    
    <div class="entry">
      <div class="entry-head">
        <div class="entity">Boy Scouts of America</div>
        <div class="location">Mercer Island, Washington</div>
        <div class="date">September '06 - September '13</div>
      </div>
      <div class="title">Eagle Scout - September 2013</div>
    </div>
  </section>
  
  <div class="section-title">Skills</div>
  <section class="skills">
    <ul>
      <li>Self-taught programmer with creative problem solving and a strong desire to expand
        knowledge</li>
      <li>Well versed in a multitude of programming patterns and paradigms in PHP, Java, JavaScript,
        and C#</li>
      <li>Deep understanding in dynamic web development and creating responsive designs, using HTML,
        SASS, CSS, jQuery (core, mobile, UI), and Closure.</li>
      <li>Heavy experience in relational databases using MySQL and MSSQL; along with data
        visualization experience with services like D3 and Tableau.</li>
      <li>Seasoned user of version control system Git with knowledge of SVN and Vault</li>
    </ul>
  </section>
  
  <div class="section-title">Interests</div>
  <section class="skills">
    <ul>
      <li>Outdoors and Sports - I love hiking, backpacking, camping, biking, skiing, and playing
        ping pong</li>
      <li>Public Speaking - I am no stranger to presentations, teaching, and drama improv</li>
      <li>Cooking - I mean… I’ve caught cereal on fire before, which I’ve been told, takes a lot
        of skill to do…</li>
    </ul>
  </section>
  
  <div class="section-title">Links</div>
  <section class="connect">
    <a href="https://www.linkedin.com/in/kodlee/" target="_blank">
      LinkedIn <i class="fa fa-linkedin"></i></a>
    <a href="https://github.com/fru1tstand" target="_blank">
      GitHub <i class="fa fa-github"></i></a>
    <a href="https://stackoverflow.com/users/1110934/kodlee-yin" target="_blank">
      Stack Overflow <i class="fa fa-stack-overflow"></i></a>
    <br />
    <a href="https://s3.amazonaws.com/ks_web/fru1t.me/about/KodleeYin-2017-08-09-PublicResume.docx">
      Download as .docx <i class="fa fa-file-word-o"></i></a>
    <a href="https://s3.amazonaws.com/ks_web/fru1t.me/about/KodleeYin-2017-08-09-PublicResume.pdf">
      Download as .pdf <i class="fa fa-file-pdf-o"></i></a>
  </section>
</div>
<div class="page-push"></div>
<div class="page-push"></div>
HTML;

HeaderPage::start()
    ->with(HeaderPage::FIELD_TITLE, "Resume")
    ->with(HeaderPage::FIELD_BODY, $body)
    ->render();
