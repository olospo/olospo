<?php /* Template Name: About */
get_header();

while ( have_posts() ) : the_post(); ?>

<section class="testimonials">
  <div class="container">
    <div class="heading twelve columns">
      <h2>Testimonials</h2>
      <p>Nice things clients have said about working with me. </p>
    </div>
  </div>
  <div class="container">
    <div class="quotes twelve columns">
      <div class="quotes__one six columns">
        <article class="quote">
          <blockquote>
          <p>We worked with Tom to improve our existing WordPress website. After being told by other companies that the website needed replacing, Tom took on the challenge to help us update it, improving the performance and fixing elements that had broken or never worked well.</p>
          <p>Tom was pro-active, professional and kept us informed at all times. Tom was transparent about what was and wasn’t possible due to the age of the site and we have seen an immediate improvement in our website speed and performance. Working with Tom was very easy, and we will continue working with him on future projects.</p>
          <strong>Jazz Wing, Marketing Director<br /><span class="company">Extreme Design</span></strong>
          </blockquote>
        </article>
      
        <article class="quote">
          <blockquote>
          <p>Developers need to be good communicators (most aren't). They need to be good planners and good timekeepers (most aren't). They need to listen and turn the project's creative vision into something that works in the real world. Tom has all of these qualities in spades and I wouldn't hesitate to recommend him for any website project.</p>
          <strong>Andre Tomlin, Managing Director<br /><span class="company">Minervation</span></strong>
          </blockquote>
        </article>
        
        <article class="quote">
          <blockquote>
          <p>Tom always provides an excellent, professional and diligent service. His design and WordPress development skills are fantastic and he's always delivered great work, on point, on time and on budget. I wouldn't hesitate to recommend Tom</p>
          <strong>James Guest, Digital & Web3 Consultant<br /><span class="company">JG Digital</span></strong>
          </blockquote>
        </article>
        
        <article class="quote">
          <blockquote>
          <p>Creating websites can be stressful, but working with Tom is enjoyable throughout. The sites he builds are super fast, professional and pixel-perfect. Already, after two significant and successfully projects, Tom is my go-to Developer. I look forward to our next project.</p>
          <strong>Chris Marsh, Designer<br /><span class="company">Think Marsh</span></strong>
          </blockquote>
        </article>
        
        
      </div>
      
      <div class="quotes__two six columns">
        <article class="quote">
          <blockquote>
          <p>We needed a complete refresh of our website and having worked with Tom previously; were really happy he was able to help us again.</p>
          <p>He created a really strong creative and technical brief that answered all the requirements we had left with him. He also helped optimise the site design to work better for mobile screens.</p>
            
          <p>He was patient, diligent and worked to a clearly defined scope of work, making adjustments where needed and offering advice throughout the whole process.</p>
            
          <p>Tom handled all the technical requirements and oversaw the move to the new site without any hitches. He has also continued to assist with enquiries and any technical issues that arose. We are really happy with the end result and would be really happy to recommend Tom.</p>
          <strong>Mark Taylor, Managing Director<br /><span class="company">A Productions</span></strong>
          </blockquote>
        </article>
        
        <article class="quote">
          <blockquote>
          <p>I have worked with Tom over the past couple of years and from the moment we started collaborating, it was clear that I was in capable hands. Tom displays an impressive ability to understand my vision and translate it into a fully functional website. He has great attention to detail and dedication to creating a seamless user experience.</p><p> Tom is always responsive and professional and offers valuable insight where he can. What really sets Tom apart from other developers I have worked with is his commitment to delivering results beyond expectations - he always meets deadlines, despite the chaos of working along side an agency and any challenges that arise are handled swiftly and effectively. If you are in search of a developer that who is reliable and will go the extra mile with your website then I would highly recommend using Tom. I look forward to continuing our collaboration in the future!</p>
          <strong>Meg Baldwin, Designer & Project Manager<br /><span class="company">The Group of Seven</span></strong>
          </blockquote>
        </article>
        
        
      </div>
    </div>
  </div>
</section>

<section class="clients">
  <div class="container">
    <div class="heading twelve columns">
      <h2>Clients</h2>
      <p>Some of the clients I've had the privilege to work with over the past 10 years.</p>
    </div>
  </div>
  <div class="container">
    <div class="twelve columns">
      <ul>
        <li><img src="<?php bloginfo('template_directory'); ?>/img/clients/oxford-uni.jpg" alt="Oxford University" /></li>
        <li><img src="<?php bloginfo('template_directory'); ?>/img/clients/nhs.jpg" alt="NHS" /></li>
        <li><img src="<?php bloginfo('template_directory'); ?>/img/clients/bcg.jpg" alt="Boston Consulting Group" /></li>
        <li><img src="<?php bloginfo('template_directory'); ?>/img/clients/diageo.jpg" alt="Diageo" /></li>
        <li><img src="<?php bloginfo('template_directory'); ?>/img/clients/vodafone.jpg" alt="Vodafone" /></li>
        <li><img src="<?php bloginfo('template_directory'); ?>/img/clients/suez.jpg" alt="SUEZ" /></li>
        <li><img src="<?php bloginfo('template_directory'); ?>/img/clients/aardman.jpg" alt="Aardman Animations" /></li>
        <li><img src="<?php bloginfo('template_directory'); ?>/img/clients/aproductions.jpg" alt="A Productions" /></li>
      </ul>
    </div>
  </div>
</section>

<?php get_template_part( 'inc/cta_contact' ); ?>

<?php endwhile; // end of the loop. ?>
<?php get_footer(); ?>