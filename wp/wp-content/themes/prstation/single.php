<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

get_header(); ?>
<?php get_template_part( 'template-parts/header/main'); ?>

<main class="l-single">
  <div class="l-single__breadcrumbs l-container">
    <?php get_template_part( 'template-parts/breadcrumbs'); ?>
  </div>
  <div class="l-single__inner l-container">
    <section class="l-single__content">
      <div class="l-single__top">
      	<span class="l-single__top-category">TECHNOLOGY</span>
      	<h1 class="l-single__top-title">GrabShare Launches New Enhanced Option for Better Transportation for Riders</h1>
      	<time class="l-single__top-date" datetime="07-03-19">July 3, 2019</time>
        <p class="l-single__top-author">Grab Holdings Inc.</p>
				<div class="l-single__top-eyecatch" style="background-image: url('https://placeimg.com/830/495/nature');"></div>
      </div>
      <div class="single-body">
      	<p>Grab, the leading super app in Southeast Asia, today signed a Memorandum of Understanding with MENDAKI Social Enterprise Network Singapore (SENSE), the employment and training arm of YAYASAN MENDAKI, pioneer self-help group to the Malay-Muslim community. The partnership underscores both parties’ support to SENSE’s job seekers who are interested in becoming Grab driver-partners through dedicated on-boarding and training programmes, as well as enabling Grab’s existing pool of driver-partners who are seeking other forms of gainful employment with the opportunity to upskill and re-skill through SENSE’s employment facilitation services. The partnership also seeks to actively engage the community at-large by providing easier access to economic opportunities and skills for ongoing career development.</p>
				<p>The MoU signing ceremony was graced by Guest-of-Honour Mr Zaqy Mohamad, Minister of State, Ministry of National Development & Ministry of Manpower and Deputy Chairman of MENDAKI. Mr. Yee Wee Tang, Country Head for Grab Singapore and Mohamad Faiz Selamat, Executive Director of MENDAKI SENSE, were also present to launch the partnership. The signing of the MOU was done at a Hari Raya celebration event, co-organised by Grab and National Private Hire Vehicle Association and (NPHVA). </p>
				<h2>H2 Lorem Ipsum</h2>
				<p>The MoU signing ceremony was graced by Guest-of-Honour Mr Zaqy Mohamad, Minister of State, Ministry of National Development & Ministry of Manpower and Deputy Chairman of MENDAKI. Mr. Yee Wee Tang, Country Head for Grab Singapore and Mohamad Faiz Selamat, Executive Director of MENDAKI SENSE</p>
				<h3>H3 Lorem Ipsum Dolor set Amet</h3>
				<p>The MoU signing ceremony was graced by Guest-of-Honour Mr Zaqy Mohamad, Minister of State, Ministry of National Development & Ministry of Manpower and Deputy Chairman of MENDAKI. Mr. Yee Wee Tang, Country Head for Grab Singapore and Mohamad Faiz Selamat, Executive Director of MENDAKI SENSE</p>
				<h4>H4 Lorem Ipsum Dolor set Amet</h4>
				<p>SENSE’s job seekers who are interested in becoming Grab driver-partners through dedicated on-boarding and training programmes, as well as enabling Grab’s existing pool of driver-partners who are seeking other forms of gainful employment with the opportunity to upskill and re-skill through SENSE’s employment facilitation services. The partnership also seeks to actively engage the community at-large by providing easier access to economic opportunities and skills for ongoing </p>
				<blockquote>‘Stay hungry, Stay foolish,’ said Steve, and his words became my torch to light my way.</blockquote>
				<p>SENSE’s job seekers who are interested in becoming Grab driver-partners through dedicated on-boarding and training programmes, as well as enabling Grab’s existing pool of driver-partners who are seeking other forms of gainful employment with the opportunity to upskill and re-skill through SENSE’s employment facilitation services. The partnership also seeks to actively engage the community at-large by providing easier access to economic opportunities and skills for ongoing career development.</p>
				<ul>
					<li>List 1</li>
					<li>List 2</li>
					<li>List 3</li>
				</ul>
				<ol>
					<li>List with number</li>
					<li>List with number</li>
					<li>List with number</li>
				</ol>
				<iframe width="830" height="430" src="https://www.youtube.com/embed/y6120QOlsfU?autoplay=1" frameborder="0"></iframe>
				<table>
					<tr>
						<td>Table</td>
						<td>Table</td>
						<td>Table</td>
						<td>Table</td>
					</tr>
					<tr>
						<td>Table</td>
						<td>Table</td>
						<td>Table</td>
						<td>Table</td>
					</tr>
					<tr>
						<td>Table</td>
						<td>Table</td>
						<td>Table</td>
						<td>Table</td>
					</tr>
				</table>
      </div>
      <div class="l-single__bottom">
      	<div class="l-single__bottom-tags">
      		<label class="l-single__bottom-tags-label">Keywords:</label>
      		<ul class="tags">
				    <li class="tags-item">
				      <a class="tag" href="#">Grab</a>
				    </li>
				    <li class="tags-item">
				      <a class="tag" href="#">Kickstarter</a>
				    </li>
				    <li class="tags-item">
				      <a class="tag" href="#">Ayala</a>
				    </li>
				    <li class="tags-item">
				      <a class="tag" href="#">AI</a>
				    </li>
				  </ul>
      	</div>
      	<div class="l-single__bottom-author">
      		<span class="l-single__bottom-author-name">Grab Holdings Inc.</span>
      		<p class="l-single__bottom-author-description">Grab is a Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
      	</div>
      </div>
      <div class="l-single__related">
      	<h2 class="l-single__related-title">Related Articles</h2>
      	<ul class="related-articles">
      		<?php for($i=0; $i<3; $i++) { ?>
      		<li class="related-articles__item">
      			<a class="related-articles__item-link" href="">
      				<article class="article-block article-block--related">
                <div class="article-block__image-wrapper">
                  <div class="article-block__image" style="background-image: url('https://placeimg.com/350/219/nature');"></div>
                </div>
                <div class="article-block__details">
                  <span class="article-block__category">Business</span>
                  <h3 class="article-block__title">GrabShare Launches New Enhanced Option for Better Transportation for Riders </h3>
                  <time class="article-block__date" datetime="07-3-19">July 3, 2019</time>
                  <p class="article-block__author">Grab Holdings Inc.</p>
                </div>
              </article>
      			</a>
      		</li>
      		<?php } ?>
      	</ul>
      </div>
    </section>
    <div class="l-single__sidebar">
      <a class="advertisement" href="#">Ads</a>
      <?php get_template_part( 'template-parts/sidebar/main'); ?>
    </div>
  </div>
</main>

<?php get_template_part( 'template-parts/footer/main'); ?>

<?php
get_footer();
