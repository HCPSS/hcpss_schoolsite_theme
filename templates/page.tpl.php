<footer class="footer-2" role="contentinfo">
  <div style="max-width: 68em; margin-left: auto; margin-right: auto;">
    <div class="footer-logo">
      <img class="school-logo" src="<?php print $logo;?>" alt="Logo image">
    </div>

    <ul>
      <li><a href="/" class="school-name" style="color: white;"><?php print $site_name; ?></a></li>
    </ul>

    <div class="footer-secondary-links">
      <ul>
        <li><a href="/about">Contact Us</a></li>
        <li><a href="/gsearch">Search</a></li>
      </ul>

      <ul class="footer-social">
        <li><a href="javascript:void(0)">
          <img src="https://raw.githubusercontent.com/thoughtbot/refills/master/source/images/twitter-logo-circle.png" alt="Twitter">
        </a></li>
        <li><a href="javascript:void(0)">
          <img src="https://raw.githubusercontent.com/thoughtbot/refills/master/source/images/facebook-logo-circle.png" alt="Facebook">
          </a></li>
      </ul>
    </div>
  </div>
</footer>

<header class="centered-navigation" role="banner">
  <div class="centered-navigation-wrapper">
    <a href="javascript:void(0)" id="js-centered-navigation-mobile-menu" class="centered-navigation-mobile-menu">MENU</a>
    <nav role="navigation">
      <ul id="js-centered-navigation-menu" class="centered-navigation-menu show">
        <li class="nav-link"><a href="javascript:void(0)">About</a></li>
        <li class="nav-link"><a href="/news">News</a></li>
        <li class="nav-link"><a href="/calendar">Calendar</a></li>
        <li class="nav-link"><a href="/school-staff">Our Staff</a></li>
        <li class="nav-link"><a href="javascript:void(0)">Academics</a></li>
        <li class="nav-link more"><a href="javascript:void(0)">Student Services</a>
          <ul class="submenu">
            <li><a href="javascript:void(0)">College Visits</a></li>
            <li><a href="javascript:void(0)">Graduation Requirements</a></li>
            <li><a href="javascript:void(0)">Scholarships</a></li>
            <li><a href="javascript:void(0)">Tutoring</a></li>
            <li><a href="javascript:void(0)">Work Permits</a></li>
          </ul>
        </li>
        <li class="nav-link more"><a href="javascript:void(0)">Student Life</a>
          <ul class="submenu">
            <li><a href="javascript:void(0)">Athletics</a></li>
            <li><a href="javascript:void(0)">Bell Schedules</a></li>
            <li><a href="javascript:void(0)">Band</a></li>
            <li><a href="javascript:void(0)">Activities &amp; Clubs</a></li>
            <li><a href="javascript:void(0)">School Newspaper</a></li>
          </ul>
        </li>
      </ul>
    </nav>
  </div>
</header>

<?php if (!empty($page['banner'])): ?>
  <?php print render($page['banner']); ?>
<?php endif; ?>

<div class="refills-wrapper">
  <div class="primary-content">

    <?php if (!empty($tabs)): ?>
      <div style="padding-top: 1em;">
        <?php print render($tabs); ?>
      </div>
    <?php endif; ?>
    <?php print render($page['content']); ?>
  </div>

  <?php if (!empty($page['sidebar_second'])): ?>
      <div class="sbar" role="complementary">
        <?php print render($page['sidebar_second']); ?>
      </div>  <!-- /#sidebar-second -->
  <?php endif; ?>

</div>

<footer class="footer" role="contentinfo">
  <div class="footer-logo">
    <img src="http://www.hcpss.org/f/mrb/base/hcpss-logo-outlined.png" alt="Logo image">
  </div>
  <div class="footer-links">
    <ul>
      <li><a href="/about">About</a></li>
      <li><a href="/news">News</a></li>
      <li><a href="/calendar">Calendar</a></li>
      <li><a href="/staff-list">Our Staff</a></li>
      <li><a href="/">Academics</a></li>
    </ul>
    <ul>
      <li><h3>Student Services</h3></li>
      <li><a href="javascript:void(0)">College Visits</a></li>
      <li><a href="javascript:void(0)">Graduation Requirements</a></li>
      <li><a href="javascript:void(0)">Scholarships</a></li>
      <li><a href="javascript:void(0)">Tutoring</a></li>
      <li><a href="javascript:void(0)">Work Permits</a></li>
    </ul>
    <ul>
      <li><h3>Student Life</h3></li>
      <li><a href="javascript:void(0)">Athletics</a></li>
      <li><a href="javascript:void(0)">Activities and Clubs</a></li>
      <li><a href="javascript:void(0)">School Newspaper</a></li>
    </ul>
    <ul>
      <li><h3>Essential Applications</h3></li>
      <li><a href="https://hcpss.me/fp/">Family Portal</a><br>Stay on top of your child’s grades and attendance</li>
      <li><a href="http://launch.customschoolapp.net/hcpss/">HCPSS Mobile App</a><br>Aggregate news and events from the district and your school</li>
      <li><a href="javascript:void(0)">Naviance</a><br>Identify colleges and careers that align with interests and goals</li>
      <li><a href="https://hcpss2.securesites.net/SchoolLocator/index.jsp">School & Bus Locator</a><br>Find your child’s school and view bus pickup times</li>
    </ul>
    <ul>
      <li><h3>HCPSS Resources</h3></li>
      <li><a href="http://www.hcpss.org/about-us/">About HCPSS</a><br>Learn more about the school system</li>
      <li><a href="http://www.hcpss.org/academics/">Curriculum & Academics</a><br>Get an overview of the HCPSS curriculum</li>
      <li><a href="http://www.hcpss.org/schools/enrollment-and-registration/">Enrollment & Registration</a><br>How to enroll your child in the school system</li>
      <li><a href="http://www.hcpss.org/food-services/">Food Services</a><br>View menus, meal prices, and make online payments</li>
      <li><a href="http://www.hcpss.org/about-us/forms/">HCPSS Forms</a><br>Health, medication, athletic, and application forms</li>
      <li><a href="http://www.hcpss.org/academics/testing/parcc/">PARCC Assessments</a><br>Learn more about the PARCC assessments</li>
      <li><a href="http://www.hcpss.org/board/policies/">Policies and Procedures</a><br>Review the policies set by the Board of Education</li>
      <li><a href="http://www.hcpss.org/about-us/handbook/">Student Handbook</a><br>Guidebook for expected student behavior</li>
    </ul>
    <ul>
      <li><h3>Get Involved</h3></li>
      <li><a href="http://www.lrhsptsa.org/">PTSA</a></li>
      <li><a href="http://www.lrhsboosters.com/">Boosters</a></li>
    </ul>
  </div>


  <hr>

  <p>Part of the Howard County Public School System</p>
</footer>
