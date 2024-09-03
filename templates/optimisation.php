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
      <div class="plan optimisation ten columns offset-by-one">
        <div class="title">
          <h3>WordPress <span class="highlight">Optimisation</span></h3>
          <strong>£800</strong>
        </div>
        <div class="content">
          <ul class="three columns">
            <li class="heading"><strong>Database</strong></li>
            <li><i class="fa-solid fa-check green"></i> Optimise database tables</li>
            <li><i class="fa-solid fa-check green"></i> Clean post revisions</li>
            <li><i class="fa-solid fa-check green"></i> Remove spam and deleted comments</li>
          </ul>
          <ul class="three columns">
            <li class="heading"><strong>Optimisation</strong></li>
            <li><i class="fa-solid fa-check green"></i> Server Optimisation</li>
            <li><i class="fa-solid fa-check green"></i> Image Optimisation</li>
            <li><i class="fa-solid fa-check green"></i> Code Optimisation</li>
          </ul>
          <ul class="three columns">  
            <li class="heading"><strong>Caching</strong>
              <span class="tooltip">
                <i class="fa fa-question-circle"></i>
                <span class="tooltip-box">
                  <p>Caching is the process of storing a temporary version of your site locally so it can be retrieved by the user in an instant. It’s a sure-fire way to ensure that web pages load at lightning-fast speed.</p>
                </span>
              </span>
            </li>
            <li><i class="fa-solid fa-check green"></i> Effective caching policy</li>
            <li><i class="fa-solid fa-check green"></i> Preloading</li>
            <li><i class="fa-solid fa-check green"></i> GZIP Compression</li>
          </ul>
          <ul class="three columns">
            <li class="heading"><strong>Minify</strong></li>
            <p>
            <li><i class="fa-solid fa-check green"></i> HTML, CSS and JS Minify</li>
            <li><i class="fa-solid fa-check green"></i> Asynchronous loading </li>
            <li><i class="fa-solid fa-check green"></i> Optimise fonts</li>
            
          </ul>
          <div class="row">
            <div class="cta twelve columns">
              <p><a href="#form" class="button green" id="select-essentials">Choose plan</a> <a href="#faq" class="button">More info</a></p>
            </div>
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

<?php endwhile; // end of the loop. ?>
<?php get_footer(); ?>