<?php /* Template Name: Maintenance */
get_header();

while ( have_posts() ) : the_post(); ?>

<section class="intro single">
  <div class="container">
    <div class="ten columns">
      <h1>WordPress support & <span class="stand_out">maintenance</span></h1>
    </div>
  </div>
</section>

<section class="pricing">
  <div class="container">
    <div class="heading twelve columns">
      <h2>Pricing</h2>
      <p>Find the best solution for you.</p>
    </div>
  </div>
  <div class="container">
    <div class="price_plans">
      <div class="plan essentials one-third column">
        <div class="title">
          <h3><span class="highlight">Essential</span> Support</h3>
          <strong>£100/month</strong>
        </div>
        <div class="content">
        <ul>
          <li class="heading"><strong>Support & updates</strong></li>
          <li><i class="fa-solid fa-check green"></i> Professional and friendly support</li>
          <li><i class="fa-solid fa-check green"></i> Up to 1 hour support each month</li>
          <li><i class="fa-solid fa-check green"></i> Monthly backups</li>
          <li><i class="fa-solid fa-check yellow"></i> Weekly security updates</li>
          <li><i class="fa-solid fa-check yellow"></i> Monthly WordPress + Plugin updates</li>
          
          <li class="heading"><strong>Website reviews</strong></li>
          <li class="grey"><i class="fa-solid fa-check red"></i> Performance review</li>
          <li class="grey"><i class="fa-solid fa-check red"></i> Security review</li>
          
          <li class="heading"><strong>Website monitoring</strong></li>
          <li><i class="fa-solid fa-check green"></i> Service status page</li>
          
          <li><i class="fa-solid fa-check yellow"></i> Uptime monitoring (30 min interval)</li>
          <li class="grey"><i class="fa-solid fa-xmark red"></i> SSL Monitoring</li>
          <li class="grey"><i class="fa-solid fa-xmark red"></i> Domain Monitoring</li>
          <li class="grey"><i class="fa-solid fa-xmark red"></i> 404 Monitoring</li>
          
          <li class="heading"><strong>WordPress email</strong></li>
          <li class="grey"><i class="fa-solid fa-xmark yellow"></i> Standard PHP mailer</li>
          <li class="grey"><i class="fa-solid fa-xmark red"></i> Email monitoring</li>
          
          <li class="heading"><strong>On-going development</strong></li>
          <li><i class="fa-solid fa-check green"></i> Github repository maintained</li>
          <li class="grey"><i class="fa-solid fa-check red"></i> Staging environment</li>
          <li><i class="fa-solid fa-check yellow"></i> Yearly consultancy meeting</li>
        </ul>
        </div>
      </div>
      <div class="plan advanced one-third column">
        <div class="title">
          <h3><span class="highlight">Advanced</span> Support</h3>
          <strong>£200/month</strong>
        </div>
        <div class="content">
        <ul>
          <li class="heading"><strong>Support & updates</strong></li>
          <li><i class="fa-solid fa-check green"></i> Professional and friendly support</li>
          <li><i class="fa-solid fa-check green"></i> Up to 2 hours support each month</li>
          <li><i class="fa-solid fa-check green"></i> Weekly backups</li>
          <li><i class="fa-solid fa-check yellow"></i> Weekly security updates</li>
          <li><i class="fa-solid fa-check green"></i> Weekly WordPress + Plugin updates </li>
          <li class="heading"><strong>Website reviews</strong></li>
          <li><i class="fa-solid fa-check yellow"></i> Monthly performance review</li>
          <li><i class="fa-solid fa-check yellow"></i> Monthly security review</li>
          <li class="heading"><strong>Website monitoring</strong></li>
          <li><i class="fa-solid fa-check green"></i> Service status page</li>
          <li><i class="fa-solid fa-check yellow"></i> Uptime monitoring (5 min interval)</li>
          <li class="grey"><i class="fa-solid fa-xmark red"></i> SSL Monitoring</li>
          <li class="grey"><i class="fa-solid fa-xmark red"></i> Domain Monitoring</li>
          <li class="grey"><i class="fa-solid fa-xmark red"></i> 404 Monitoring</li>
          <li class="heading"><strong>WordPress email</strong></li>
          <li><i class="fa-solid fa-check green"></i> SMTP for improved email deliverability</li>
          <li><i class="fa-solid fa-check yellow"></i> Weekly email monitoring</li>
          <li class="heading"><strong>On-going development</strong></li>
          <li><i class="fa-solid fa-check green"></i> Github repository maintained</li>
          <li><i class="fa-solid fa-check green"></i> Staging environment</li>
          <li><i class="fa-solid fa-check yellow"></i> Yearly consultancy meeting</li>
        </ul>
        </div>
      </div>
      <div class="plan premium one-third column">
        <div class="title">
          <h3><span class="highlight">Premium</span> Support</h3>
          <strong>£400/month</strong>
        </div>
        <div class="content">
        <ul>
          <li class="heading"><strong>Support & updates</strong></li>
          <li><i class="fa-solid fa-check green"></i> Professional and friendly support
            <span class="tooltip">
              <i class="fa fa-question-circle"></i>
              <span class="tooltip-box">
                Professional and friendly support details
              </span>
            </span>
          </li>
          <li><i class="fa-solid fa-check green"></i> Up to 4 hours support each month
            <span class="tooltip">
              <i class="fa fa-question-circle"></i>
              <span class="tooltip-box">
                Up to four hours of dedicated support every month for resolving issues and making improvements to your website.
              </span>
            </span>
            
          </li>
          <li><i class="fa-solid fa-check green"></i> Daily backups
            <span class="tooltip">
              <i class="fa fa-question-circle"></i>
              <span class="tooltip-box">
                Daily backups details
              </span>
            </span>
          </li>
          <li><i class="fa-solid fa-check green"></i> Daily security updates
            <span class="tooltip">
              <i class="fa fa-question-circle"></i>
              <span class="tooltip-box">
                Protect your website from emerging threats with daily security updates and monitoring.
              </span>
            </span>
          </li>
          <li><i class="fa-solid fa-check green"></i> Weekly WordPress + Plugin updates
            <span class="tooltip">
              <i class="fa fa-question-circle"></i>
              <span class="tooltip-box">
                Keep your website running smoothly with weekly updates to WordPress core and plugins, ensuring optimal performance and security.
              </span>
            </span>
          </li>
          <li class="heading"><strong>Website reviews</strong></li>
          <li><i class="fa-solid fa-check green"></i> Weekly performance review
            <span class="tooltip">
              <i class="fa fa-question-circle"></i>
              <span class="tooltip-box">
                Receive regular performance evaluations to identify areas for improvement and optimize your website's speed and user experience.
              </span>
            </span>
          </li>
          <li><i class="fa-solid fa-check green"></i> Weekly security review
            <span class="tooltip">
              <i class="fa fa-question-circle"></i>
              <span class="tooltip-box">
                Stay ahead of potential threats with weekly security assessments, safeguarding your website against vulnerabilities.
              </span>
            </span>
          </li>
          <li class="heading"><strong>Website monitoring</strong></li>
          
          <li><i class="fa-solid fa-check green"></i> Service status page
            <span class="tooltip">
              <i class="fa fa-question-circle"></i>
              <span class="tooltip-box">
                Gain peace of mind with access to your website's live status updates and historical uptime data through your own Status Page.
              </span>
            </span>
          </li>
          
          <li><i class="fa-solid fa-check green"></i> Uptime monitoring (60 second interval)
            <span class="tooltip">
              <i class="fa fa-question-circle"></i>
              <span class="tooltip-box">
                Protect your website from emerging threats with daily security updates and monitoring.
              </span>
            </span>
          </li>
          <li><i class="fa-solid fa-check green"></i> SSL Monitoring
            <span class="tooltip">
              <i class="fa fa-question-circle"></i>
              <span class="tooltip-box">
                Having a securely encrypted website is an absolute must nowadays. Make sure you're the first to know about any SSL certificate issues!
              </span>
            </span>
          </li>
          <li><i class="fa-solid fa-check green"></i> Domain Monitoring
            <span class="tooltip">
              <i class="fa fa-question-circle"></i>
              <span class="tooltip-box">
                Take your website monitoring to the next level with additional domain expiration monitoring and prevent domain expiry issues.
              </span>
            </span>
          </li>
          <li><i class="fa-solid fa-xmark green"></i> 404 Monitoring
            <span class="tooltip">
              <i class="fa fa-question-circle"></i>
              <span class="tooltip-box">
                404 Monitoring details
              </span>
            </span>
          </li>
          <li class="heading"><strong>WordPress email</strong></li>
          <li><i class="fa-solid fa-check green"></i> SMTP for improved email deliverability
            <span class="tooltip">
              <i class="fa fa-question-circle"></i>
              <span class="tooltip-box">
                SMTP for improved email deliverability details
              </span>
            </span>
          </li>
          <li><i class="fa-solid fa-check green"></i> Real-time email monitoring
            <span class="tooltip">
              <i class="fa fa-question-circle"></i>
              <span class="tooltip-box">
                Real-time email monitoring details
              </span>
            </span>
          </li>
          <li class="heading"><strong>On-going development</strong></li>
          <li><i class="fa-solid fa-check green"></i> Github repository maintained
            <span class="tooltip">
              <i class="fa fa-question-circle"></i>
              <span class="tooltip-box">
                Github repository maintained details
              </span>
            </span>
          </li>
          <li><i class="fa-solid fa-check green"></i> Staging environment
            <span class="tooltip">
              <i class="fa fa-question-circle"></i>
              <span class="tooltip-box">
                Test new features and updates safely in a staging environment, minimizing the risk of disruptions to your live website.
              </span>
            </span>
          </li>
          <li><i class="fa-solid fa-check green"></i> Quarterly consultancy meeting
            <span class="tooltip">
              <i class="fa fa-question-circle"></i>
              <span class="tooltip-box">
                Quarterly consultancy meeting details
              </span>
            </span>
          </li>
        </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- <section class="faq">
  <div class="container">
    <div class="heading twelve columns">
      <h2>Frequently asked questions</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
    </div>
  </div>
  <div class="container">
    <div class="accordion">
    <article class="accordionItem close">
      <div class="title accordionItemHeading">
        Title
        <span></span>
        <span></span>
      </div>
      <div class="accordionItemContent">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      </div>
    </article>
    <article class="accordionItem close">
      <div class="title accordionItemHeading">
        Title
        <span></span>
        <span></span>
      </div>
      <div class="accordionItemContent">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      </div>
    </article>
    <article class="accordionItem close">
      <div class="title accordionItemHeading">
        Title
        <span></span>
        <span></span>
      </div>
      <div class="accordionItemContent">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      </div>
    </article>
    <article class="accordionItem close">
      <div class="title accordionItemHeading">
        Title
        <span></span>
        <span></span>
      </div>
      <div class="accordionItemContent">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      </div>
    </article>
    </div>
  </div>
</section> -->

<?php get_template_part( 'inc/cta_contact' ); ?>

<?php endwhile; // end of the loop. ?>
<?php get_footer(); ?>