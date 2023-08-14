<?php /* Template Name: About */
get_header();

while ( have_posts() ) : the_post(); ?>

<section class="intro single">
  <div class="container">
    <div class="twelve columns">
      <h1><?php the_title(); ?></h1>
      <?php if( get_field('sub-title') ): ?>
      <p><?php the_field('sub-title'); ?></p>
      <?php endif; ?>
    </div>
  </div>
</section>

<section class="testimonials">
  <div class="arrow-down blue"></div>
  <div class="container">
    <div class="heading twelve columns">
      <h2>Testimonials</h2>
      <p>Some nice things clients have said about working with me. </p>
    </div>
  </div>
  <div class="container">
    <div class="twelve columns">
      <div class="six columns">
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
          <p>Creating websites can be stressful, working with Tom is enjoyable throughout. The sites he builds are super fast, professional and pixel-perfect. Already, after two significant and successfully client-pleasing sites, Tom is my go-to Developer. I look forward to our next project.</p>
          <strong>Chris Marsh, Designer<br /><span class="company">Think Marsh</span></strong>
          </blockquote>
        </article>
      </div>
      
      <div class="six columns">
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
          <strong>Meg Baldwin, Designer / Project Manager<br /><span class="company">The Group of Seven</span></strong>
          </blockquote>
        </article>
        
        
      </div>
    </div>
  </div>
</section>

<!-- <section class="different">
  <div class="arrow-down white"></div>
  <div class="container">
    <div class="heading twelve columns">
      <h2>What makes me different?</h2>
      <p>A few reasons why my approach stands out.</p>
    </div>
  </div>
  <div class="container">
    <div class="twelve columns">
      <div class="row">
        <article class="what one-third column">
          <h3>Design + Development</h3>
          <p>I do everything from start to finish. </p>
        </article>
      
        <article class="what one-third column">
          <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><path d="M152.1 38.2c9.9 8.9 10.7 24 1.8 33.9l-72 80c-4.4 4.9-10.6 7.8-17.2 7.9s-12.9-2.4-17.6-7L7 113C-2.3 103.6-2.3 88.4 7 79s24.6-9.4 33.9 0l22.1 22.1 55.1-61.2c8.9-9.9 24-10.7 33.9-1.8zm0 160c9.9 8.9 10.7 24 1.8 33.9l-72 80c-4.4 4.9-10.6 7.8-17.2 7.9s-12.9-2.4-17.6-7L7 273c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l22.1 22.1 55.1-61.2c8.9-9.9 24-10.7 33.9-1.8zM224 96c0-17.7 14.3-32 32-32H480c17.7 0 32 14.3 32 32s-14.3 32-32 32H256c-17.7 0-32-14.3-32-32zm0 160c0-17.7 14.3-32 32-32H480c17.7 0 32 14.3 32 32s-14.3 32-32 32H256c-17.7 0-32-14.3-32-32zM160 416c0-17.7 14.3-32 32-32H480c17.7 0 32 14.3 32 32s-14.3 32-32 32H192c-17.7 0-32-14.3-32-32zM48 368a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"/></svg>
          <h3>Communication</h3>
          <p>I pride myself on good communication. I provide regular updates on projects and make sure you are involved in the process at every step.</p>
        </article>
        
        <article class="what one-third column">
          <h3>Honesty</h3>
          <p>I will be completely up front with you. I won't sell you services you don't need.</p>
        </article>

      </div>
    </div>
  </div>
</section> -->

<?php get_template_part( 'inc/cta_contact' ); ?>

<?php endwhile; // end of the loop. ?>
<?php get_footer(); ?>