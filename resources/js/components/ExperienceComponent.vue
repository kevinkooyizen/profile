<template>
    <section class="experience-section section">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="heading">
                        <h3><b>Work Experience</b></h3>
                        <h6 class="font-lite-black"><b>PAST EXPERIENCES</b></h6>
                    </div>
                </div><!-- col-sm-4 -->
                <div class="col-sm-8">

                    <div class="experience margin-b-50">
                        <h4><b>Full-Stack Web Developer</b></h4>
                        <h5 class="font-yellow"><b>Tripfez Travel Sdn Bhd (<a href="https://www.tripfez.com/en" target="_blank">https://www.tripfez.com</a>)</b></h5>
                        <h6 class="margin-t-10">May 2019 - Present</h6>
                        <ul class="list">
                            <li>Implemented a content management-based system for the company's new website.</li>
                            <li>Re-architectured the new website using a microservice-based structure.</li>
                            <li>Integrate a payment system(BillPlz) for consumers to make online bookings/payments.</li>
                            <li>Set up Webpack to reduce the served file size and busting cache</li>
                            <li>Built a component-based structure for the implementation of Vue in the website.</li>
                            <li>Set up the new servers(Ubuntu) for the new website where I implemented security and cache layers. - SSL wildcard certs, Fail2ban, FastCGI.</li>
                            <li>Set up the CI/CD(Continuous Integration/Continuous Deployment) flow to integrate automated testing of code, and remove the need for manual deployment of code</li>
                            <li>Documenting the entirety of our system’s back-end architecture.</li>
                            <li>Since the launch of the new website, the website has acquired 300 thousand users.</li>
                        </ul>
                    </div><!-- experience -->

                    <div class="experience margin-b-50">
                        <h4><b>Chief Technology Officer/Co-Founder</b></h4>
                        <h5 class="font-yellow"><b>Beacon Systems Sdn Bhd (<a href="https://www.beaconsbay.com" target="_blank">https://www.beaconsbay.com</a>)</b></h5>
                        <h6 class="margin-t-10">October 2017 - January 2019</h6>
                        <p class="font-semi-white margin-tb-30">The following projects were done in parallel throughout my time in the company and lead by myself with a team of 5 of us in total.</p>
                        <ul class="list margin-b-30">
                            <template v-for="(data, index) in beaconData">
                                <li class="collapsible" @click="beaconData[index].expandContent = !beaconData[index].expandContent">{{ data.title }}</li>
                                <transition name="slide-fade">
                                    <div class="content" v-if="beaconData[index].expandContent">
                                        <ul class="list">
                                            <li v-for="content in data.content">{{ content }}</li>
                                        </ul>
                                    </div>
                                </transition>
                            </template>
                        </ul>
                    </div><!-- experience -->

                    <!--<div class="experience margin-b-50">
                        <h4><b>Tier 1 Graduate Entrepreneurship Visa Holder</b></h4>
                        <h5 class="font-yellow"><b>Renarium/University of Manchester</b></h5>
                        <h6 class="margin-t-10">July 2016 - June 2017</h6>
                        <p class="font-semi-white margin-tb-30">
                            Was amongst the selected 20 candidates by the University of Manchester to be granted a Tier 1 Graduate Entrpreneurship Visa in the United Kingdom. Requirements for attaining the visa was to have viable business plans which were backed with solid market research data to prove as market validation.
                            <br><br>
                            Throughout the one year, I was self-learning on how to code by starting off in Python as I had minimal knowledge in coding at that time and felt like it was a necessary skill.
                            <br><br>
                            Throughout the one year, I attended boot camps and events that helped me as an individual to grow and learn how startups operate and build long-lasting connections. I had a good insight as to what struggles and challenges other businesses faced and was also exposed to the most common mistakes most businesses make which helped me a lot while I was building my own.
                        </p>
                    </div>&lt;!&ndash; experience &ndash;&gt;-->

                </div><!-- col-sm-8 -->
            </div><!-- row -->
        </div><!-- container -->

    </section><!-- experience-section -->
</template>

<script>
    export default {
        data() {
            return {
                displayContent: false,

                beaconData: [
                    {
                        title: 'Beacon Accounting Software',
                        expandContent: false,
                        content: [
                            'Build and lead the development team in building an accounting software which included stock control and HR features.',
                            'The system included features that allowed users to issue Invoices by mail or download them if they wish to store hard copy versions of them.',
                            'The system was integrated with Malaysia\'s Tax system(SST) to enable users to easily generate tax reports for them to submit to Malaysia\'s Tax Department.',
                            'The system could provide and auto-generate financial and accounting reports(Profit & Loss Statement, Balance Sheet, Trial Balance, General Ledger, etc…) for users.',
                            'Connected the system with a payment gateway(AsiaPay) to enable customers to bill/pay one other through the platform with pdf documents which have links attached to the payment system.',
                            'Built customizable invoice pdf documents to allow users to generate their own company\'s style invoice format.',
                            'Set-up a multi-tenancy database infrastructure to improve the security of the data and performance of the database querying.',
                            'Dwelled in building APIs to serve the purpose of utilising legacy codes to act as microservices in servers that contain older versions of PHP to communicate with updated servers.',
                            'Implemented and helped maintained a Git workflow for the development team.',
                            'Implemented Laravel Dusk to enable automated testing on the code to reduce the need for manual testing.',
                            'Managed relationship between clients and performed on-site demonstrations/training.',
                            'On-boarded over 200 businesses.',
                        ]
                    },
                    {
                        title: 'Sunway ITSSC - Project Management Software',
                        expandContent: false,
                        content: [
                            "Lead and managed to build a project management system to assist the client in managing their internal projects.",
                            "The system assisted the client in keeping track of their employees KPIs as well as generated monthly reports for the client's employees to stay on schedule for their tasks.",
                            "The system built contained dynamic checklists which the client could generate themselves.",
                        ]
                    },
                    {
                        title: 'Sunway ITSSC - Billing & Task Management Software',
                        expandContent: false,
                        content: [
                            "Lead and managed to build a task management system with billing features integrated within for the client to manage their internal tasks while also helping manage their financial documents which are associated with their tasks.",
                            "The system allows the client to produce dynamic financial documents(invoices, quotations & purchase orders) to allow the user to adjust the document output based on their own client’s needs.",
                        ]
                    },
                    {
                        title: 'Palace of the Golden Horses - E-Membership System',
                        expandContent: false,
                        content: [
                            "Removed the need for the customers of the client to use physical cards and hard copy feedback forms by creating features for the admins to create/edit surveys while also being able to see the results of the surveys through bar charts.",
                            "Implemented an E-membership system for the client to easier manage their customers.",
                        ]
                    },
                    {
                        title: 'Broadline - Commission management system',
                        expandContent: false,
                        content: [
                            "Implemented and helped maintained a Git workflow for the development team.",
                            "Updated code to utilise codes from a different server using the Laravel Framework by connecting it through APIs.",
                            "Build web scrapers to harvest commission data to cross-check and validate the integrity of the data sent by the commissioner.",
                        ]
                    },
                    {
                        title: 'Bravel - E-commerce Marketplace',
                        expandContent: false,
                        content: [
                            "Built an e-commerce platform to assist the client in setting up a C to C marketplace.",
                            "The platform allowed users to buy and sell products which are mainly sold by constant travellers.",
                        ]
                    },
                ]
            }
        },
        mounted() {
        }
    }
</script>
