<template>
    <section class="experience-section section">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="heading">
                        <h2><b>Work Experience</b></h2>
                        <h3 class="font-lite-black"><b>PAST EXPERIENCES</b></h3>
                    </div>
                </div><!-- col-sm-4 -->
                <div class="col-sm-8">

                    <div class="experience margin-b-50">
                        <h4><b>Chapter Lead</b></h4>
                        <h5 class="font-yellow"><b>8I Holdings Limited (<a href="https://www.goodwhale.com" target="_blank">https://www.goodwhale.com</a>)</b></h5>
                        <h6 class="margin-t-10">Nov 2020 - Present</h6>
                        <ul class="list">
                            <li>Establish and effectively communicate team priorities in line with the overall objectives of the organization.</li>
                            <li>Foster strategic alignment, streamline processes, and promote cohesive decision-making across multiple teams.</li>
                            <li>Clearly define performance expectations for individuals based on their roles and levels, ensuring alignment with organizational goals.</li>
                            <li>Conduct regular performance and development discussions, delivering constructive feedback and providing coaching as needed.</li>
                            <li>Formulate a comprehensive long-term technical outlook and roadmap, encompassing both current and future requirements, extending beyond team boundaries.</li>
                            <li>Continually refine the roadmap to address anticipated future needs and infrastructure demands.</li>
                            <li>Supervise system designs within the designated domain, critically evaluating product or system development code to resolve complex and ambiguous challenges.</li>
                            <li>Conduct thorough code reviews for fellow engineers, offering constructive feedback to ensure adherence to best practices such as style guidelines, code integrity, accuracy, testability, and efficiency.</li>
                        </ul>
                    </div><!-- experience -->

                    <div class="experience margin-b-50">
                        <h4><b>Full-Stack Web Developer</b></h4>
                        <h5 class="font-yellow"><b>Tripfez Travel Sdn Bhd (<a href="https://www.tripfez.com/en" target="_blank">https://www.tripfez.com</a>)</b></h5>
                        <h6 class="margin-t-10">May 2019 - Oct 2020</h6>
                        <ul class="list">
                            <li>Successfully revamped the existing website, resulting in the acquisition of 300 thousand users.</li>
                            <li>Developed and implemented a content management-based system for the company's new website with Laravel.</li>
                            <li>Re-architected the website using a microservice-based structure to enhance performance and scalability with Symfony.</li>
                            <li>Optimised API calls and minimised database queries for improved efficiency.</li>
                            <li>Integrated the BillPlz payment system, enabling consumers to make online bookings and payments.</li>
                            <li>Implemented Webpack to reduce file size and implement cache-busting techniques.</li>
                            <li>Built a component-based structure for Vue implementation on the website.</li>
                            <li>Configured and maintained an AWS-based infrastructure for the website.</li>
                            <li>Implemented security and cache layers (SSL wildcard certs, Fail2ban, FastCGI, Gzip).</li>
                            <li>Established a CI/CD flow with Circle CI, automating code testing and eliminating manual deployment.</li>
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

                    <div class="experience margin-b-50">
                        <h4><b>Co-Founder</b></h4>
                        <h5 class="font-yellow"><b>Renarium</b></h5>
                        <h6 class="margin-t-10">Jun 2016 - Apr 2017</h6>
                        <ul class="list">
                            <li>Developed an intermediary renting platform catering to the C-C market, facilitating the rental of household items.</li>
                            <li>Conducted comprehensive market research to identify target demographics, competitive landscape, and potential growth opportunities.</li>
                            <li>Validated user needs and preferences through user testing, ensuring the platform met their expectations and provided a seamless experience.</li>
                            <li>Utilized effective pitching strategies to secure funding for the project, effectively communicating its value proposition and market potential.</li>
                            <li>Organized and conducted user testing sessions to gather valuable feedback and insights, iteratively improving the platform based on user input.</li>
                        </ul>
                    </div><!-- experience -->

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
