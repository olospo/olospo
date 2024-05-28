<?php /* Template Name: Optimisation */
get_header();

while ( have_posts() ) : the_post(); ?>

<section class="intro single">
  <div class="container">
    <div class="ten columns">
      <h1>WordPress <span class="stand_out">optimisation</span></h1>
    </div>
  </div>
</section>

<section class="pricing">
  <div class="container">
    <div class="heading twelve columns">
      <h2>Plan Pricing</h2>
      <p>Choose the support plan that suits your needs. All our plans are month-to-month, giving you the flexibility to adjust the level of support you need as your business grows. <a href="#form">Get started</a>.</p>
    </div>
  </div>
  <div class="container">
    <div class="price_plans">
      <div class="plan essentials six columns offset-by-three">
        <div class="title">
          <h3>WordPress <span class="highlight">Optimisation</span></h3>
          <strong>£800</strong>
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
          <li class="grey"><i class="fa-solid fa-xmark red"></i> Performance review</li>
          <li class="grey"><i class="fa-solid fa-xmark red"></i> Security review</li>
          
        </ul>
        <div class="cta">
          <p><a href="#form" class="button pink" id="select-essentials">Choose plan</a> <a href="#faq" class="button">More info</a></p>
        </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="before_after">
  <div class="container">
    <div class="heading twelve columns">
      <h3>Optimisation success</h3>
      <p>Before and after comparisons using <a href="https://pagespeed.web.dev" target="_blank">Google PageSpeed Insights</a></p>
    </div>
  </div>
  <div class="container">
    <div class="compare one-third column">
      <h4>A Productions</h4>
      <table>
        <th>
          <td>Before</td>
          <td>After</td>
        </th>
        <tr>
          <td>Performance</td>
          <td class="red">31</td>
          <td class="green">100</td>
        </tr>
        <tr>
          <td>Accessibility</td>
          <td class="yellow">88</td>
          <td class="green">97</td>
        </tr>
        <tr>
          <td>Best Practices</td>
          <td class="yellow">75</td>
          <td class="green">100</td>
        </tr>
        <tr>
          <td>SEO</td>
          <td class="green">98</td>
          <td class="green">100</td>
        </tr>
      </table>
    </div>
    <div class="compare one-third column">
      <h4>Expand BCG</h4>
      <table>
        <th>
          <td>Before</td>
          <td>After</td>
        </th>
        <tr>
          <td>Performance</td>
          <td class="yellow">70</td>
          <td class="green">98</td>
        </tr>
        <tr>
          <td>Accessibility</td>
          <td class="yellow">84</td>
          <td class="green">97</td>
        </tr>
        <tr>
          <td>Best Practices</td>
          <td class="yellow">92</td>
          <td class="green">100</td>
        </tr>
        <tr>
          <td>SEO</td>
          <td class="green">92</td>
          <td class="green">100</td>
        </tr>
      </table>
    </div>
    <div class="compare one-third column">
      <h4>Extreme Design</h4>
      <table>
        <th>
          <td>Before</td>
          <td>After</td>
        </th>
        <tr>
          <td>Performance</td>
          <td class="red">9</td>
          <td class="green">91</td>
        </tr>
        <tr>
          <td>Accessibility</td>
          <td class="yellow">82</td>
          <td class="green">83</td>
        </tr>
        <tr>
          <td>Best Practices</td>
          <td class="yellow">83</td>
          <td class="green">100</td>
        </tr>
        <tr>
          <td>SEO</td>
          <td class="yellow">86</td>
          <td class="green">92</td>
        </tr>
      </table>
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