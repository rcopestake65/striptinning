<?php if(have_posts()): while(have_posts()): the_post();?>

<div class="page-container">
    <?php get_template_part('template-parts/section', 'menu-sidebar');?>


    <div class="content">
        <div class="page-title-mobile">

            <h1><?php the_title();?></h1>

        </div>
        <?php if(has_post_thumbnail()):?>
        <div class="img-zoom"><img src="<?php the_post_thumbnail_url();?>" alt="<?php the_title();?>"></div>

        <?php endif;?>
        <?php the_content();?>

        <div class="shareholder-content">
            <h2>Shareholder Information</h2>
            <h4>Information last updated 16 February 2022</h4>
            <p>Issued Share Capital</p>
            <p>15,137,369 Ordinary Shares of 1 pence each</p>

            <h4>Significant shareholders</h4>

            <table>
                <tr>
                    <th>Shareholder</th>
                    <th>Number of Ordinary Shares</th>
                    <th>Percentage of Issued Share Capital</th>
                </tr>
                <tr>
                    <td>Richard Barton</td>
                    <td>7,554,055</td>
                    <td>49.9%</td>
                </tr>
                <tr>
                    <td>Shard Capital Partners LLP</td>
                    <td>1,405,404</td>
                    <td>9.3%</td>
                </tr>
                <tr>
                    <td>River and Mercantile Asset Management Limited</td>
                    <td>964,733</td>
                    <td>6.4%</td>
                </tr>
                <tr>
                    <td>Anne Barton</td>
                    <td>864,965</td>
                    <td>5.7%</td>
                </tr>
                <tr>
                    <td>Crux Asset Management</td>
                    <td>627,076</td>
                    <td>4.1%</td>
                </tr>
                <tr>
                    <td>Amati Global Investors</td>
                    <td>569,999</td>
                    <td>3.8%</td>
                </tr>
                <tr>
                    <td>Canaccord Genuity Wealth Managememt</td>
                    <td>569,999</td>
                    <td>3.8%</td>
                </tr>
                <tr>
                    <td>Stephen O'Connor</td>
                    <td>365,609</td>
                    <td>2.4%</td>
                </tr>
            </table>

            <h4>AIM securities not in public hands</h4>
            <p>In so far as the Company is aware, the percentage of AIM securities not in public hands is 59.2%</p>
            <h4>Director shareholdings</h4>

            <table>

                <tr>
                    <th>Director</th>
                    <th>Number of Ordinary Shares</th>
                    <th>Percentage of Issued Share
                        Capital</th>
                </tr>
                <tr>
                    <td>Richard Barton</td>
                    <td>8,418,920<sup>1</sup></td>
                    <td>55.6%<sup>1</sup></td>
                </tr>
                <tr>
                    <td>Adam Le Van</td>
                    <td>3,000</td>
                    <td>0.0%</td>
                </tr>
                <tr>
                    <td>Paul George</td>
                    <td>10,810</td>
                    <td>0.1%</td>
                </tr>
                <tr>
                    <td>Matthew Taylor</td>
                    <td>21,622</td>
                    <td>0.1%</td>
                </tr>
            </table>
            <p> <sup>1</sup>Includes 864,865 shares held by his wife, Anne Barton</p>
        </div>


    </div>

</div>


<?php endwhile; else: endif;?>