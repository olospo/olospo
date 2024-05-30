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
      <h2>Plan pricing</h2>
      <p>Choose the support plan that suits your needs. All our plans are month-to-month, giving you the flexibility to adjust the level of support you need. <a href="#form">Get started</a>.</p>
    </div>
  </div>
  <div class="container">
    <div class="price_plans">
      <div class="plan essentials one-third column">
        <div class="title">
          <h3><span class="highlight">Essentials</span> Plan</h3>
          <strong>£100/month</strong>
        </div>
        <div class="content">
        <ul>
          <li class="heading"><strong>Support & updates</strong>
          <span class="tooltip">
            <i class="fa fa-question-circle"></i>
            <span class="tooltip-box">
              <p>Enjoy direct support for your website, with up to one hour of assistance every month. This includes monthly backups for data security and peace of mind, along with regular security updates to safeguard your site. Additionally, benefit from monthly WordPress + plugin updates to maintain optimal performance and security.</p>
            </span>
          </span>
          </li>
          <li><i class="fa-solid fa-check green"></i> Professional and friendly support</li>
          <li><i class="fa-solid fa-check green"></i> Up to 1 hour support each month</li>
          <li><i class="fa-solid fa-check yellow"></i> Monthly backups</li>
          <li><i class="fa-solid fa-check yellow"></i> Weekly security updates</li>
          <li><i class="fa-solid fa-check yellow"></i> Monthly WordPress + Plugin updates</li>
          
          <li class="heading"><strong>Website reviews</strong>
            <span class="tooltip">
              <i class="fa fa-question-circle"></i>
              <span class="tooltip-box">
                <p>Gain peace of mind with access to your website's live status updates and historical uptime data through your own Status Page.</p>
              </span>
            </span>
          </li>
          <li class="grey"><i class="fa-solid fa-xmark red"></i> Performance review</li>
          <li class="grey"><i class="fa-solid fa-xmark red"></i> Security review</li>
          
          <li class="heading"><strong>Website monitoring</strong>
            <span class="tooltip">
              <i class="fa fa-question-circle"></i>
              <span class="tooltip-box">
                <p>Gain peace of mind with access to your website's live status updates and historical uptime data through your own Status Page.</p>
              </span>
            </span>
          </li>
          <li><i class="fa-solid fa-check green"></i> Service status page</li>
          <li><i class="fa-solid fa-check yellow"></i> Uptime monitoring (every 30 mins)</li>
          <li class="grey"><i class="fa-solid fa-xmark red"></i> SSL Monitoring</li>
          <li class="grey"><i class="fa-solid fa-xmark red"></i> Domain Monitoring</li>
          <li class="grey"><i class="fa-solid fa-xmark red"></i> 404 Monitoring</li>
          
          <li class="heading"><strong>WordPress email</strong>
            <span class="tooltip">
              <i class="fa fa-question-circle"></i>
              <span class="tooltip-box">
                <p>Use of the default WordPress mailer.</p>
              </span>
            </span>
          </li>
          <li><i class="fa-solid fa-check yellow"></i> Standard PHP mailer</li>
          <li class="grey"><i class="fa-solid fa-xmark red"></i> Email monitoring</li>
          
          <li class="heading"><strong>On-going development</strong>
            <span class="tooltip">
              <i class="fa fa-question-circle"></i>
              <span class="tooltip-box">
                <p>Use of the default WordPress mailer.</p>
              </span>
            </span>
          </li>
          <li><i class="fa-solid fa-check green"></i> Github repository maintained</li>
          <li class="grey"><i class="fa-solid fa-xmark red"></i> Staging environment</li>
          <li><i class="fa-solid fa-check yellow"></i> Yearly consultancy meeting</li>
        </ul>
        <div class="cta">
          <p><a href="#form" class="button pink" id="select-essentials">Choose plan</a> <a href="#faq" class="button">More info</a></p>
        </div>
        </div>
      </div>
      <div class="plan advanced one-third column">
        <div class="title">
          <h3><span class="highlight">Advanced</span> Plan</h3>
          <strong>£200/month</strong>
        </div>
        <div class="content">
        <ul>
          <li class="heading"><strong>Support & updates</strong></li>
          <li><i class="fa-solid fa-check green"></i> Professional and friendly support</li>
          <li><i class="fa-solid fa-check green"></i> Up to 2 hours support each month</li>
          <li><i class="fa-solid fa-check green"></i> Daily backups</li>
          <li><i class="fa-solid fa-check yellow"></i> Weekly security updates</li>
          <li><i class="fa-solid fa-check green"></i> Weekly WordPress + Plugin updates</li>
          
          <li class="heading"><strong>Website reviews</strong></li>
          <li><i class="fa-solid fa-check yellow"></i> Monthly performance review</li>
          <li><i class="fa-solid fa-check yellow"></i> Monthly security review</li>
          
          <li class="heading"><strong>Website monitoring</strong></li>
          <li><i class="fa-solid fa-check green"></i> Service status page</li>
          <li><i class="fa-solid fa-check yellow"></i> Uptime monitoring (every 5 mins)</li>
          <li class="grey"><i class="fa-solid fa-xmark red"></i> SSL Monitoring</li>
          <li class="grey"><i class="fa-solid fa-xmark red"></i> Domain Monitoring</li>
          <li class="grey"><i class="fa-solid fa-xmark red"></i> 404 Monitoring</li>
          <li class="heading"><strong>WordPress email</strong></li>
          <li><i class="fa-solid fa-check green"></i> SMTP for improved email deliverability</li>
          <li><i class="fa-solid fa-check green"></i> Real-time email monitoring</li>
          
          <li class="heading"><strong>On-going development</strong></li>
          <li><i class="fa-solid fa-check green"></i> Github repository maintained</li>
          <li><i class="fa-solid fa-check green"></i> Staging environment</li>
          <li><i class="fa-solid fa-check yellow"></i> Yearly consultancy meeting</li>
        </ul>
        <div class="cta">
          <p><a href="#form" class="button orange" id="select-advanced">Choose plan</a> <a href="#faq" class="button">More info</a></p>
        </div>
        </div>
      </div>
      <div class="plan premium one-third column">
        <div class="title">
          <h3><span class="highlight">Premium</span> Plan</h3>
          <strong>£400/month</strong>
        </div>
        <div class="content">
        <ul>
          <li class="heading"><strong>Support & updates</strong></li>
          <li><i class="fa-solid fa-check green"></i> Professional and friendly support
            <span class="tooltip">
              <i class="fa fa-question-circle"></i>
              <span class="tooltip-box">
                <p>I do not outsource any of my work. When you choose to work with me, you can be assured that I will be your direct point of contact.</p>
              </span>
            </span>
          </li>
          <li><i class="fa-solid fa-check green"></i> Up to 4 hours support each month
            <span class="tooltip">
              <i class="fa fa-question-circle"></i>
              <span class="tooltip-box">
                <p>Up to one hour of dedicated support every month for resolving issues and making improvements to your website.</p>
              </span>
            </span>
          </li>
          <li><i class="fa-solid fa-check green"></i> Daily backups
            <span class="tooltip">
              <i class="fa fa-question-circle"></i>
              <span class="tooltip-box">
                <p>Taking daily backups of your site, providing peace of mind that your data is always secure and can be restored if needed.</p>
              </span>
            </span>
          </li>
          <li><i class="fa-solid fa-check green"></i> Daily security updates
            <span class="tooltip">
              <i class="fa fa-question-circle"></i>
              <span class="tooltip-box">
                <p>Protect your website from threats with daily security updates, keeping your site safe from vulnerabilities.</p>
              </span>
            </span>
          </li>
          <li><i class="fa-solid fa-check green"></i> Weekly WordPress + Plugin updates
            <span class="tooltip">
              <i class="fa fa-question-circle"></i>
              <span class="tooltip-box">
                <p>Keep your website running smoothly with weekly updates to WordPress core and plugins, ensuring optimal performance and security.</p>
              </span>
            </span>
          </li>
          <li class="heading"><strong>Website reviews</strong></li>
          <li><i class="fa-solid fa-check green"></i> Weekly performance review
            <span class="tooltip">
              <i class="fa fa-question-circle"></i>
              <span class="tooltip-box">
                <p>Receive a weekly performance review to identify areas for improvement and optimise your website's speed and user experience.</p>
              </span>
            </span>
          </li>
          <li><i class="fa-solid fa-check green"></i> Weekly security review
            <span class="tooltip">
              <i class="fa fa-question-circle"></i>
              <span class="tooltip-box">
                <p>Stay ahead of potential threats with weekly security assessments, identifying and addressing potential threats.</p>
              </span>
            </span>
          </li>
          <li class="heading"><strong>Website monitoring</strong></li>
          
          <li><i class="fa-solid fa-check green"></i> Service status page
            <span class="tooltip">
              <i class="fa fa-question-circle"></i>
              <span class="tooltip-box">
                <p>Gain peace of mind with access to your website's live status updates and historical uptime data through your own Status Page.</p>
              </span>
            </span>
          </li>
          
          <li><i class="fa-solid fa-check green"></i> Uptime monitoring (every 60 seconds)
            <span class="tooltip">
              <i class="fa fa-question-circle"></i>
              <span class="tooltip-box">
                <p>Benefit from uptime monitoring every 60 seconds, ensuring that your website is always accessible to users.</p>
              </span>
            </span>
          </li>
          <li><i class="fa-solid fa-check green"></i> SSL Monitoring
            <span class="tooltip">
              <i class="fa fa-question-circle"></i>
              <span class="tooltip-box">
                <p>Keep your SSL certificate valid and secure with continuous monitoring.</p>
              </span>
            </span>
          </li>
          <li><i class="fa-solid fa-check green"></i> Domain Monitoring
            <span class="tooltip">
              <i class="fa fa-question-circle"></i>
              <span class="tooltip-box">
                <p>Take your website monitoring to the next level with additional domain expiration monitoring and prevent domain expiry issues.</p>
              </span>
            </span>
          </li>
          <li><i class="fa-solid fa-xmark green"></i> 404 Monitoring
            <span class="tooltip">
              <i class="fa fa-question-circle"></i>
              <span class="tooltip-box">
                <p>Enhance user experience by detecting and logging 404 errors, allowing you to promptly fix broken links.</p>
              </span>
            </span>
          </li>
          <li class="heading"><strong>WordPress email</strong></li>
          <li><i class="fa-solid fa-check green"></i> SMTP for improved email deliverability
            <span class="tooltip">
              <i class="fa fa-question-circle"></i>
              <span class="tooltip-box">
                <p>SMTP email setup to enhance the deliverability and reliability of your emails, ensuring they reach the intended recipients.</p>
              </span>
            </span>
          </li>
          <li><i class="fa-solid fa-check green"></i> Real-time email monitoring
            <span class="tooltip">
              <i class="fa fa-question-circle"></i>
              <span class="tooltip-box">
                <p>Monitoring email deliverability in real-time to ensure no emails are lost or undelivered.</p>
              </span>
            </span>
          </li>
          <li class="heading"><strong>On-going development</strong></li>
          <li><i class="fa-solid fa-check green"></i> Github repository maintained
            <span class="tooltip">
              <i class="fa fa-question-circle"></i>
              <span class="tooltip-box">
                <p>Github repository for your website, facilitating version control and future updates.</p>
              </span>
            </span>
          </li>
          <li><i class="fa-solid fa-check green"></i> Staging environment
            <span class="tooltip">
              <i class="fa fa-question-circle"></i>
              <span class="tooltip-box">
                <p>Test changes in a dedicated staging environment before deploying them live, minimising risks and errors.</p>
              </span>
            </span>
          </li>
          <li><i class="fa-solid fa-check green"></i> Quarterly consultancy meeting
            <span class="tooltip">
              <i class="fa fa-question-circle"></i>
              <span class="tooltip-box">
                <p>Meet with me to review your website's progress, strategy, and future improvements.</p>
              </span>
            </span>
          </li>
        </ul>
        <div class="cta">
          <p><a href="#form" class="button green" id="select-premium">Choose plan</a> <a href="#faq" class="button">More info</a></p>
        </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="reviews">
  <div class="container">
    <div class="heading twelve columns">
      <h3>Customer reviews</h3>
    </div>
  </div>
  <div class="container">
    <div class="review four columns offset-by-two">
      <blockquote>
      <p>We have seen an immediate improvement in our website speed and performance. Working with Tom was very easy, and we will continue working with him on future projects.</p>
      <div class="rating">
        <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
      </div>
      <strong>Jazz Wing, Marketing Director<br /><span class="company">Extreme Design</span></strong>
      </blockquote>
    </div>
    <div class="review four columns">
      <blockquote>
      <p>Tom always provides an excellent, professional and diligent service. He's always delivered great work, on point, on time and on budget. I wouldn't hesitate in recommending him.</p>
      <div class="rating">
        <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
      </div>
      <strong>James Guest, Digital Consultant<br /><span class="company">JG Digital</span></strong>
      </blockquote>
    </div>
    <!-- <div class="review one-third column">
      <blockquote>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      <div class="rating">
        <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
      </div>
      <strong>Helen Smith, Office Manager<br /><span class="company">Minervation</span></strong>
      </blockquote>
    </div> -->
  </div>
</section>

<section class="faq" id="faq">
  <div class="container">
    <div class="heading twelve columns">
      <h3>Frequently asked questions</h3>
    </div>
  </div>
  <div class="container">
    <div class="accordion eight columns offset-by-two">
    <article class="accordionItem close">
      <div class="title accordionItemHeading">
        How do I get started?
        <span></span>
        <span></span>
      </div>
      <div class="accordionItemContent">
        Getting started is easy. Simply <strong>contact me</strong> via the <a href="#form">contact form</a> and I’ll set up an initial consultation to discuss your needs and get your site on our maintenance schedule.
      </div>
    </article>
    <article class="accordionItem close">
      <div class="title accordionItemHeading">
        Which plan is best for me?
        <span></span>
        <span></span>
      </div>
      <div class="accordionItemContent">
        The <strong>Essentials</strong> or <strong>Advanced</strong> plans suit most people, offering reliable support and maintenance. However, if you require more comprehensive services, such as advanced security measures and website monitoring, the <strong>Premium</strong> plan might be a better fit. If you're unsure which plan to choose, I’m here to <a href="#form">help you pick</a> the one best suited to your needs.
      </div>
    </article>
    <article class="accordionItem close">
      <div class="title accordionItemHeading">
        Can I change my plan?
        <span></span>
        <span></span>
      </div>
      <div class="accordionItemContent">
        <p>Yes, the plans are <strong>flexible</strong>, and you can upgrade, downgrade or cancel your plan at any time.</p>
      </div>
    </article>
    <article class="accordionItem close">
      <div class="title accordionItemHeading">
        How will I be billed?
        <span></span>
        <span></span>
      </div>
      <div class="accordionItemContent">
        <p>Plans are <strong>billed on a monthly basis</strong>. Invoices are generated on the 1st of each month.</p>
        <p>Invoice payment terms are 14 days.</p>
      </div>
    </article>
    <article class="accordionItem close">
      <div class="title accordionItemHeading">
        What does the maintenance plan cover?
        <span></span>
        <span></span>
      </div>
      <div class="accordionItemContent">
        <p>The hours included in each plan cover resolving issues and making improvements to your website. Any work requested outside of the agreed support hours is at additional cost.</p>
        
        <p>This covers maintenance and support specifically for your website. Please note, it does not extend to general IT support.</p>
      </div>
    </article>
    <article class="accordionItem close">
      <div class="title accordionItemHeading">
        What is your typical response time?
        <span></span>
        <span></span>
      </div>
      <div class="accordionItemContent">
        <p>I aim to respond to all support requests within 48 hours during my working hours, which are 9am to 5pm (Monday to Thursday)</p>
        <p>For urgent inquiries outside of these hours, such as weekends or holidays, I strive to address them as promptly as possible upon my return to work.</p>
      </div>
    </article>
    <article class="accordionItem close">
      <div class="title accordionItemHeading">
        Do support hours roll over to the next month?
        <span></span>
        <span></span>
      </div>
      <div class="accordionItemContent">
        <p>No, Support hours do not roll over to the next month; they reset at the start of each month. I follow a fair-use policy, allowing flexibility in usage without strict hour-to-hour consistency.</p>
        <p>Any work requested outside of the support hours is at additional cost.</p>
      </div>
    </article>
    <article class="accordionItem close">
      <div class="title accordionItemHeading">
        Do you offer web hosting?
        <span></span>
        <span></span>
      </div>
      <div class="accordionItemContent">
        No, I do not provide web hosting services. However, I work closely with a <strong>reliable and trustworthy hosting provider</strong> whom I know well and can confidently recommend.
      </div>
    </article>
    <article class="accordionItem close">
      <div class="title accordionItemHeading">
        Do you outsource any of your work? 
        <span></span>
        <span></span>
      </div>
      <div class="accordionItemContent">
        No, I do not outsource <strong>any</strong> of my work. When you choose to work with me, you can be assured that I will be your direct point of contact.
      </div>
    </article>
    <article class="accordionItem close">
      <div class="title accordionItemHeading">
        Do you work with agencies? 
        <span></span>
        <span></span>
      </div>
      <div class="accordionItemContent">
        Yes, I work with several agencies in maintaining their client websites and offer <strong>custom pricing</strong> based on the specific needs and number of sites. <a href="mailto:tom@olospo.co.uk">Get in touch to discuss in more detail</a>
      </div>
    </article>
    <article class="accordionItem close">
      <div class="title accordionItemHeading">
        Do you offer custom WordPress support and maintenance plans?
        <span></span>
        <span></span>
      </div>
      <div class="accordionItemContent">
        Yes, I understand that every business has unique needs. If our plans don’t fit your requirements, we can create a <strong>custom plan</strong> tailored specifically to your needs. <a href="#form">Contact me</a> to discuss your requirements for a personalised support and maintenance plan. 
      </div>
    </article>
    </div>
  </div>
</section>

<section class="plan_form" id="form">
  <div class="container">
    <div class="heading twelve columns">
      <h3>Get started</h3>
      <p>Fill out the form below to get your maintenance plan started.</p>
    </div>
  </div>
  <div class="container">
    <div class="eight columns offset-by-two">
      <?php echo do_shortcode('[ninja_form id=2]'); ?>
    </div>
  </div>
</section>

<?php endwhile; // end of the loop. ?>
<?php get_footer(); ?>