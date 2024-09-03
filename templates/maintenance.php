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

<?php get_template_part( 'inc/breadcrumbs' ); ?>
<section class="pricing">
  <div class="container">
    <div class="heading twelve columns">
      <h2>Plans</h2>
      <p>First things first, you’ll need to choose a plan. They all run on a month-to-month basis, giving you the flexibility to dial up or down the level of service you need. Already know what plan you need? <a href="#form">Let's get started</a>.</p>
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
          <li><i class="fa-solid fa-check yellow"></i> Monthly WordPress & Plugin updates</li>
          
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
          <li><i class="fa-solid fa-check green"></i> Service <a href="https://status.olospo.co.uk/796806460">status page</a></li>
          <li><i class="fa-solid fa-check yellow"></i> Uptime monitoring (every 30 mins)</li>
          <li class="grey"><i class="fa-solid fa-xmark red"></i> SSL monitoring</li>
          <li class="grey"><i class="fa-solid fa-xmark red"></i> Domain monitoring</li>
          <li class="grey"><i class="fa-solid fa-xmark red"></i> 404 monitoring</li>
          
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
          <li><i class="fa-solid fa-check green"></i> GitHub repository maintenance</li>
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
          <li><i class="fa-solid fa-check green"></i> Weekly WordPress & Plugin updates</li>
          
          <li class="heading"><strong>Website reviews</strong></li>
          <li><i class="fa-solid fa-check yellow"></i> Monthly performance review</li>
          <li><i class="fa-solid fa-check yellow"></i> Monthly security review</li>
          
          <li class="heading"><strong>Website monitoring</strong></li>
          <li><i class="fa-solid fa-check green"></i> Service <a href="https://status.olospo.co.uk/796806460">status page</a></li>
          <li><i class="fa-solid fa-check yellow"></i> Uptime monitoring (every 5 mins)</li>
          <li class="grey"><i class="fa-solid fa-xmark red"></i> SSL monitoring</li>
          <li class="grey"><i class="fa-solid fa-xmark red"></i> Domain monitoring</li>
          <li class="grey"><i class="fa-solid fa-xmark red"></i> 404 monitoring</li>
          <li class="heading"><strong>WordPress email</strong></li>
          <li><i class="fa-solid fa-check green"></i> Improved email deliverability (via SMTP)</li>
          <li><i class="fa-solid fa-check green"></i> Real-time email monitoring</li>
          
          <li class="heading"><strong>Ongoing development</strong></li>
          <li><i class="fa-solid fa-check green"></i> GitHub repository maintenance</li>
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
          <li><i class="fa-solid fa-check green"></i> Weekly WordPress & Plugin updates
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
          
          <li><i class="fa-solid fa-check green"></i> Service <a href="https://status.olospo.co.uk/796806460">status page</a>
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
          <li><i class="fa-solid fa-check green"></i> SSL monitoring
            <span class="tooltip">
              <i class="fa fa-question-circle"></i>
              <span class="tooltip-box">
                <p>Keep your SSL certificate valid and secure with continuous monitoring.</p>
              </span>
            </span>
          </li>
          <li><i class="fa-solid fa-check green"></i> Domain monitoring
            <span class="tooltip">
              <i class="fa fa-question-circle"></i>
              <span class="tooltip-box">
                <p>Take your website monitoring to the next level with additional domain expiration monitoring and prevent domain expiry issues.</p>
              </span>
            </span>
          </li>
          <li><i class="fa-solid fa-xmark green"></i> 404 monitoring
            <span class="tooltip">
              <i class="fa fa-question-circle"></i>
              <span class="tooltip-box">
                <p>Enhance user experience by detecting and logging 404 errors, allowing you to promptly fix broken links.</p>
              </span>
            </span>
          </li>
          <li class="heading"><strong>WordPress email</strong></li>
          <li><i class="fa-solid fa-check green"></i> Improved email deliverability (via SMTP)
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
          <li class="heading"><strong>Ongoing development</strong></li>
          <li><i class="fa-solid fa-check green"></i> GitHub repository maintenance
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
    <div class="review four columns">
      <blockquote>
      <p>We have been delighted with the service. We're confident that our websites are being looked after. Tom acts quickly whenever we have a query or request, and can always be relied on for good advice.</p>
      <div class="rating">
        <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
      </div>
      <strong>Vivienne Kennedy, Director<br /><span class="company">Broadmead BID</span></strong>
      </blockquote>
    </div>
    <div class="review four columns">
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
        <p>Getting started is easy. Get in touch via the <a href="#form">contact form</a> and I’ll set up an initial conversation to discuss your needs. Then, if you’d like to go ahead, I’ll get your site on the maintenance schedule.</p>
      </div>
    </article>
    <article class="accordionItem close">
      <div class="title accordionItemHeading">
        Which plan is best for me?
        <span></span>
        <span></span>
      </div>
      <div class="accordionItemContent">
        <p>An Essentials or Advanced plan suits most people’s support and maintenance needs. But if you’d like a more comprehensive service, such as advanced security measures and website monitoring, a Premium plan could be a better fit. If you're not sure which to choose, I’ll <a href="#form">help you pick a plan</a> that suits your requirements.</p>
      </div>
    </article>
    <article class="accordionItem close">
      <div class="title accordionItemHeading">
        Can I change my plan?
        <span></span>
        <span></span>
      </div>
      <div class="accordionItemContent">
        <p>My plans are built to be flexible. You can upgrade, downgrade or even cancel yours whenever you want.</p>
      </div>
    </article>
    <article class="accordionItem close">
      <div class="title accordionItemHeading">
        How will I be billed?
        <span></span>
        <span></span>
      </div>
      <div class="accordionItemContent">
        <p>You’ll be billed monthly. Invoices are generated on the 1st of each month, and the invoice payment term is 14 days.</p>
      </div>
    </article>
    <article class="accordionItem close">
      <div class="title accordionItemHeading">
        What does the maintenance plan cover?
        <span></span>
        <span></span>
      </div>
      <div class="accordionItemContent">
        <p>The hours in your maintenance plan cover the time I’ll spend fixing issues and improving your site. Any work you need outside of these hours will come at an extra cost. And just remember – this covers maintenance and support for your site, not general IT support.</p>
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
        <p>Support hours don’t roll into the next month. However, I follow a fair-use policy. You can expect flexibility without a strict hour-to-hour consistency, and any work you request outside this allocation costs more.</p>
      </div>
    </article>
    <article class="accordionItem close">
      <div class="title accordionItemHeading">
        Do you offer web hosting?
        <span></span>
        <span></span>
      </div>
      <div class="accordionItemContent">
        <p>Sadly, I don’t offer web hosting. However, I work with a reliable and trustworthy hosting provider I personally know – and, most importantly, can confidently recommend.</p>
      </div>
    </article>
    <article class="accordionItem close">
      <div class="title accordionItemHeading">
        Do you outsource any of your work? 
        <span></span>
        <span></span>
      </div>
      <div class="accordionItemContent">
        <p>I don’t outsource any of my work. If you choose to work with me, I’ll be your direct point of contact.</p>
      </div>
    </article>
    <article class="accordionItem close">
      <div class="title accordionItemHeading">
        Do you work with agencies? 
        <span></span>
        <span></span>
      </div>
      <div class="accordionItemContent">
        <p>I work with several agencies to maintain their client websites, and offer custom pricing based on their specific needs and number of sites. <a href="mailto:tom@olospo.co.uk">Get in touch</a> if you’d like to know more.</p>
      </div>
    </article>
    <article class="accordionItem close">
      <div class="title accordionItemHeading">
        Do you offer custom WordPress support and maintenance plans?
        <span></span>
        <span></span>
      </div>
      <div class="accordionItemContent">
        <p>Absolutely. If none of the above fits your business requirements, I’ll create a custom plan that’s specific to your unique needs. <a href="#form">Contact me</a> to discuss your requirements for a personalised support and maintenance plan.</p>
      </div>
    </article>
    </div>
  </div>
</section>

<section class="plan_form" id="form">
  <div class="container">
    <div class="heading twelve columns">
      <h3>Ready to get going?</h3>
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