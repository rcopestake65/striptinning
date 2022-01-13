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


        <!-- CORPORATE GOVERNANCE CODE COMPLIANCE GRID -->
        <div class="gov-grid-container">
            <h3 id="governance">AIM Rule 26 - Corporate Governance Code Compliance</h2>
                <h4>Deliver Growth</h4>
                <div class="gov-grid">

                    <div class="col col-header">QCA Principle</div>
                    <div class="col col-header">Application</div>
                    <div class="col col-header">Disclosure</div>
                    <div class="col col-a">
                        <h5>QCA Principle</h5>
                        <p>1. Establish a strategy and business model which promote long-term value for
                            shareholders</p>
                    </div>
                    <div class="col col-b">
                        <h5>Application</h5>
                        <p>The Board must be able to express a shared view of the Company's purpose, business
                            model and strategy. It sets out how the Company intends to deliver shareholder value in the
                            medium to long-term. It should demonstrate that the delivery of long-term growth is
                            underpinned by a
                            clear
                            set of values aimed at protecting the Company from unnecessary risk and securing its
                            long-term
                            future.</p>
                        <p>This view should be well communicated, both internally and externally.</p>
                    </div>
                    <div class="col col-c">
                        <h5>Disclosure</h5>
                        <p>The Group's business model and strategy is set out within the (Admission
                            Document). The Group's strategy is to remain a leading supplier of specialist connectors for
                            Glazing
                            for all classes of automotive vehicles manufactured worldwide and for the EV market to
                            become a
                            leading supplier of connector sub-assemblies. The strategy to execute this vision comprises
                            a
                            number
                            of key elements as follows:</p>
                        <ul>
                            <li>remain focussed on higher performance connectors for the Glazing sector, building on the
                                Company's
                                established position supplying higher specification and technology leading vehicles and
                                expanding
                                its global coverage, starting initially with greater sales effort into the NAFTA region;
                            </li>
                            <li>increase customer satisfaction and operating margins in the core Glazing business with a
                                sustained
                                investment in processes, systems (SAP implementation), people and automation;</li>
                            <li>rapidly invest to pursue its early mover advantage in the very fast growing new battery
                                cell
                                contact systems market, to establish a leadership position as customers move towards
                                this
                                new
                                solution;</li>
                            <li>pursue other innovative applications of its large size flexible printed circuit
                                technology,
                                which
                                is being increasingly adopted in the industry, in particular by the new generation of EV
                                vehicle
                                manufacturers; and</li>
                            <li>support this growth with increased investment in the Company's people, capabilities and
                                ESG
                                programme.</li>
                        </ul>
                        <p>The Group believes that this strategy will deliver long term value to shareholders.</p>
                    </div>
                    <!-- second row -->
                    <div class="col col-a">
                        <h5>QCA Principle</h5>
                        <p>2. Seek to understand and meet shareholder needs and expectations.</p>
                    </div>
                    <div class="col col-b">
                        <h5>Application</h5>
                        <p>The Directors must develop a good understanding of the needs and expectations of all elements
                            of the company's shareholder base.</p>
                        <p>
                            The board must manage shareholders’ expectations and should seek to understand the
                            motivations behind shareholder voting decisions.
                        </p>
                    </div>
                    <div class="col col-c">
                        <h5>Disclosure</h5>
                        <p>The Group recognises the importance of providing shareholders with clear and transparent
                            information on its financial performance position and prospects. It will do this through its
                            Annual Report and Accounts, AGM, interim results, RNS announcements and its website more
                            generally.</p>
                    </div>
                </div><!-- .gov-grid-->

        </div><!-- .gov-grid-container -->
    </div>

</div>


<?php endwhile; else: endif;?>