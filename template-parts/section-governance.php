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
            <h3 id="governance">AIM Rule 26 – QCA Corporate Governance Code Compliance Table</h2>

                <div class="gov-grid">

                    <div class="col col-header">QCA Principle</div>
                    <div class="col col-header border">Application</div>
                    <div class="col col-header">Disclosure</div>
                    <div class="col-main-header">
                        <h4>Deliver Growth</h4>
                    </div>

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
                            The board must manage shareholders' expectations and should seek to understand the
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
                    <!-- third row -->
                    <div class="col col-a">
                        <h5>QCA Principle</h5>
                        <p>3. Take into account wider stakeholder and social responsibilities and their implications for
                            long-term success.</p>
                    </div>
                    <div class="col col-b">
                        <h5>Application</h5>
                        <p>Long-term success relies upon good relations with a range of different stakeholder groups
                            both internal (workforce) and external (suppliers, customers, regulators and others). The
                            board needs to identify the company's stakeholders and understand their needs, interests and
                            expectations.</p>
                        <p>Where matters that relate to the company's impact on society, the communities within which it
                            operates or the environment have the potential to affect the company's ability to deliver
                            shareholder value over the medium to long-term, then those matters must be integrated into
                            the company's strategy and business model.</p>
                        <p>Feedback is an essential part of all control mechanisms. Systems need to be in place to
                            solicit, consider and act on feedback from all stakeholder groups.</p>
                    </div>
                    <div class="col col-c">
                        <h5>Disclosure</h5>
                        <p>The Group recognises the importance of good relationships with its stakeholders to deliver
                            its vision and strategy. As set out in the Admission Document the Group plans to establish
                            an employee share option scheme, seeks to maintain excellent relationship with customers and
                            suppliers. The Group has been independently assessed as an ESG leader among 30 companies in
                            the Auto-Parts industry.</p>
                    </div>
                    <!-- fourth row -->
                    <div class="col col-a">
                        <h5>QCA Principle</h5>
                        <p>4. Embed effective risk management, considering both opportunities and threats, throughout
                            the
                            Group.</p>
                    </div>
                    <div class="col col-b">
                        <h5>Application</h5>

                        <p>The board needs to ensure that the company's risk management framework identifies and
                            addresses all relevant risks in order to execute and deliver strategy; companies need to
                            consider their extended business, including the company's supply chain, from key suppliers
                            to end-customer.</p>
                        <p>Setting strategy includes determining the extent of exposure to the identified risks that the
                            company is able to bear and willing to take (risk tolerance and risk appetite).</p>
                    </div>
                    <div class="col col-c">
                        <h5>Disclosure</h5>
                        <p>Supported by the Board has overall responsibility for the system of internal control and for
                            reviewing its effectiveness in managing risks. The Directors have set out the risks
                            currently faced by the Group within the Admission document.</p>
                    </div>
                    <!--second section-->
                    <!-- <div class="col col-header">QCA Principle</div>
                    <div class="col col-header border">Application</div>
                    <div class="col col-header">Disclosure</div> -->
                    <div class="col-main-header">
                        <h4>MAINTAIN A DYNAMIC MANAGEMENT FRAMEWORK</h4>
                    </div>
                    <!-- section 2 row 1 -->
                    <div class="col col-a">
                        <h5>QCA Principle</h5>
                        <p>5. Maintain the board as a well-functioning, balanced team led by the chair.</p>
                    </div>
                    <div class="col col-b">
                        <h5>Application</h5>
                        <p>The board members have a collective responsibility and legal obligation to promote the
                            interests of the company and are collectively responsible for defining corporate governance
                            arrangements. Ultimate responsibility for the quality of, and approach to, corporate
                            governance lies with the chair of the board.</p>
                        <p>The board (and any committees) should be provided with high quality information in a timely
                            manner to facilitate proper assessment of the matters requiring a decision or insight.</p>
                        <p>The board should have an appropriate balance between executive and non-executive directors
                            and should have at least two independent non-executive directors. Independence is a board
                            judgement.</p>
                        <p>The board should be supported by committees (e.g. audit, remuneration, nomination) that have
                            the necessary skills and knowledge to discharge their duties and responsibilities
                            effectively.</p>
                        <p>Directors must commit the time necessary to fulfil their roles.</p>
                    </div>
                    <div class="col col-c">
                        <h5>Disclosure</h5>
                        <p>The Board is responsible for managing the Company including all business and financial
                            risks. The Board comprises an Independent Chair, CEO, CFO and two other Independent
                            Non-Executive Directors Biographies of the Directors are set out [link]. The Board has
                            established three committees Audit, Remuneration and Nominations to support its work.</p>
                    </div>
                    <!-- section 2 row 2 -->
                    <div class="col col-a">
                        <h5>QCA Principle</h5>
                        <p>6. Ensure that between them the Directors have the necessary up-to-date experience, skills
                            and capabilities.</p>
                    </div>
                    <div class="col col-b">
                        <h5>Application</h5>
                        <p>The Board must have an appropriate balance of sector, financial and public markets skills and
                            experience, as well as an appropriate balance of personal qualities and capabilities. The
                            Board should understand and challenge its own diversity, including gender balance as part of
                            its composition.</p>
                        <p>The Board should not be dominated by one person or a group of people. Strong personal bonds
                            can be important but can also divide a Board.</p>
                        <p>As companies evolve, the mix of skills and experience required on the Board will change and
                            Board composition will need to evolve to reflect this change.</p>

                    </div>
                    <div class="col col-c">
                        <h5>Disclosure</h5>
                        <p>Through the combination of executive and non-executive directors the Company believes that
                            the board has an appropriate balance of the automotive sector sector, financial and public
                            markets skills and experience, as well as an appropriate balance of personal qualities and
                            capabilities, with no one dominant person or group. </p>
                    </div>
                    <!-- section 2 row 3 -->
                    <div class="col col-a">
                        <h5>QCA Principle</h5>
                        <p>7. Evaluate Board performance based on clear and relevant objectives, seeking continuous
                            improvement.</p>
                    </div>
                    <div class="col col-b">
                        <h5>Application</h5>
                        <p>The Board should regularly review the effectiveness of its performance as a unit, as well
                            as that of its committees and the individual directors.</p>
                        <p>The Board performance review may be carried out internally or, ideally, externally
                            facilitated from time to time. The review should identify development or mentoring needs of
                            individual directors or the wider senior management team.</p>
                        <p>Membership of the Board to be periodically refreshed. Succession planning is a vital task for
                            boards. No member of the Board should become indispensable.
                        </p>

                    </div>
                    <div class="col col-c">
                        <h5>Disclosure</h5>
                        <p>The Board will evaluate its performance on a regular basis seeking feedback from external
                            parties as appropriate. The Chair will assess the performance of individual directors on an
                            annual basis and facilitate a discussion on the Board's collective performance.</p>
                    </div>
                    <!-- section 2 row 4 -->
                    <div class="col col-a">
                        <h5>QCA Principle</h5>
                        <p>8. Promote a corporate culture that is based on ethical values and behaviours.</p>
                    </div>
                    <div class="col col-b">
                        <h5>Application</h5>
                        <p>The Board should embody and promote a corporate culture that is based on sound ethical values
                            and behaviours and use it as an asset and a source of competitive advantage.</p>
                        <p>The policy set by the Board should be visible in the actions and decisions of the Chief
                            Executive and the rest of the management team. Corporate values should guide the objectives
                            and strategy of the Company.</p>
                        <p>The culture should be visible in every aspect of the business, including recruitment,
                            nominations, training and engagement. The performance and reward system should endorse the
                            desired ethical behaviours across all levels of the Company.</p>
                        <p>The corporate culture should be recognisable throughout the disclosures in the annual report,
                            website and any other statements issued by the Company.</p>

                        </p>

                    </div>
                    <div class="col col-c">
                        <h5>Disclosure</h5>
                        <p>The Group's corporate culture is based on trust, openness and communication and strong
                            ethical principles. The Board has established a range of policies to underpin its desired
                            culture. [Link to policies like anti bribery and corruption etc]

                        </p>
                    </div>
                    <!-- section 2 row 5 -->
                    <div class="col col-a">
                        <h5>QCA Principle</h5>
                        <p>9. Maintain governance structures and processes that are fit for purpose and support good
                            decision making by the Board.9. Maintain governance structures and processes that are fit
                            for purpose and support good decision making by the Board.</p>
                    </div>
                    <div class="col col-b">
                        <h5>Application</h5>
                        <p>The Company should maintain governance structures and processes in line with its corporate
                            culture and appropriate to its:</p>
                        <ul>
                            <li>Size and complexity; and</li>

                            <li>Capacity, appetite and tolerance for risk.</li>
                        </ul>
                        <p>The governance structures should evolve over time in parallel with its objectives, strategy
                            and business model to reflect the development of the Company.</p>

                    </div>
                    <div class="col col-c">
                        <h5>Disclosure</h5>
                        <p>The Board has overall responsibility for promoting the success of the Group. The Executive
                            Directors have day-to-day responsibility for the operational management of the Group's
                            activities. The Non-Executive Directors are responsible for bringing independent and
                            objective judgment to Board decisions.</p>
                        <p>There is a clear division of responsibilities at the head of the Company between the running
                            of the Board and the running of the Group's operations.</p>
                        <p>The role of the Chairman is to manage the Board in the best interests of its stakeholders,
                            ensuring that shareholders' views are communicated to the Board and that the Non-executive
                            Directors are properly briefed on matters, and to be responsible for the Board's integrity
                            and effectiveness, ensuring that no individual or group dominates the Board's
                            decision-making. The Chairman has overall responsibility for corporate governance matters in
                            the Group.</p>
                        </p>
                    </div>
                    <!--third section-->
                    <!-- <div class="col col-header">QCA Principle</div>
                    <div class="col col-header border">Application</div>
                    <div class="col col-header">Disclosure</div> -->
                    <div class="col-main-header">
                        <h4>BUILD TRUST</h4>
                    </div>
                    <!-- section 3 row 1 -->
                    <div class="col col-a">
                        <h5>QCA Principle</h5>
                        <p>10. Communicate how the Company is governed and is performing by maintaining a dialogue with
                            shareholders and other relevant stakeholders.10. Communicate how the Company is governed and
                            is performing by maintaining a dialogue with shareholders and other relevant stakeholders
                        </p>
                    </div>
                    <div class="col col-b">
                        <h5>Application</h5>
                        <p>A healthy dialogue should exist between the Board and all of its stakeholders, including
                            shareholders, to enable all interested parties to come to informed decisions about the
                            Company.</p>
                        <p>In particular, appropriate communication and reporting structures should exist between the
                            Board and all constituent parts of its shareholder base. This will assist:</p>
                        <ul>
                            <li>The communication of shareholders' views to the Board; and</li>
                            <li>The shareholders' understanding of the unique circumstances and constraints faced by the
                                Company.
                                It should be clear where these communication practices are described (annual report or
                                website).</li>
                        </ul>


                    </div>
                    <div class="col col-c">
                        <h5>Disclosure</h5>
                        <p>As explained under Principle 2 the Group recognises the importance of providing stakeholders
                            and shareholders with clear and transparent information on its financial performance
                            position and prospects. It will do this through its Annual Report and Accounts, AGM, interim
                            results, RNS announcements and its website more generally.
                        </p>
                    </div>
                </div><!-- .gov-grid-->

        </div><!-- .gov-grid-container -->
    </div>

</div>


<?php endwhile; else: endif;?>