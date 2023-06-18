<template>
    <section class="portfolio-section section">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="heading">
                        <h2><b>Portfolio</b></h2>
                        <h3 class="font-lite-black"><b>MY WORK</b></h3>
                    </div>
                </div><!-- col-sm-4 -->
                <div class="col-sm-8">
                    <div>
                        <span class="filter" v-bind:class="{ active: currentFilter === 'ALL' }" v-on:click="setFilter('ALL')">ALL</span>
                        <span class="filter" v-bind:class="{ active: currentFilter === 'flutter' }" v-on:click="setFilter('flutter')">Flutter</span>
                        <span class="filter" v-bind:class="{ active: currentFilter === 'laravel_vue' }" v-on:click="setFilter('laravel_vue')">Laravel + Vue</span>
                        <span class="filter" v-bind:class="{ active: currentFilter === 'vue' }" v-on:click="setFilter('vue')">Vue</span>
                        <span class="filter" v-bind:class="{ active: currentFilter === 'symfony_vue' }" v-on:click="setFilter('symfony_vue')">Symfony + Vue</span>
                    </div><!-- portfolioFilter -->
                </div><!-- col-sm-8 -->
            </div><!-- row -->
        </div><!-- container -->

        <transition-group class="projects" name="projects">
            <div class="project" v-if="currentFilter === project.category || currentFilter === 'ALL'" v-bind:key="project.title" v-for="project in projects">
                <a class="project-image-wrapper" :href="project.link" target="_blank">
                    <img class="project-image" v-bind:src="project.image" :alt="project.title">
                    <div class="gradient-overlay"></div>
                    <div class="circle">
                        <span class="project-title">{{ project.title }}</span>
                    </div>
                </a>
            </div>
        </transition-group>

    </section><!-- portfolio-section -->
</template>

<script>
export default {
    data() {
        return {
            currentFilter: 'ALL',
            projects: [
                {
                    title: "GoodWhale",
                    image: "images/goodwhale.jpg",
                    category: 'flutter',
                    link: 'https://www.goodwhale.com',
                },
                {
                    title: "Tripfez Travel",
                    image: "images/tripfez_home.png",
                    category: 'symfony_vue',
                    link: 'https://www.tripfez.com',
                },
                {
                    title: "Two Moles Ecommerce",
                    image: "images/two_moles.png",
                    category: 'laravel_vue',
                    link: 'https://www.twomoles.com',
                },
                {
                    title: "Beacon Accounting System",
                    image: "images/beacon.png",
                    category: 'laravel_vue',
                    link: 'https://www.beaconsbay.com',
                },
                {
                    title: "Stock Valuation Calculator",
                    image: "images/stock_valuation.png",
                    category: 'vue',
                    link: 'https://stocks.zenency.com',
                },
                {
                    title: "Mortgage Calculator",
                    image: "images/home_loan_calculator.png",
                    category: 'vue',
                    link: 'https://www.kooyizen.com/loan',
                },
                {
                    title: "Sudoku Solver",
                    image: "images/sudoku.png",
                    category: 'vue',
                    link: 'https://sudoku.zenency.com',
                },
            ]
        }
    },
    methods: {
        setFilter: function (filter) {
            this.currentFilter = filter;
        }
    }
}
</script>

<style scoped>
html, body {
    margin: 0;
    font-family: 'Dawning of a New Day', cursive;
}

.project-title {
    font-size: 16px
}

.filter {
    font-family: arial;
    padding: 6px 6px;
    cursor: pointer;
    border-radius: 6px;
    transition: all 0.35s;
}

.filter.active {
    box-shadow: 0px 1px 3px 0px #00000026;
}

.filter:hover {
    background: lightgray;
}

.projects {
    margin-bottom: 50px;
    margin-top: 25px;
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
}

.projects-enter {
    transform: scale(0.5) translatey(-80px);
    opacity: 0;
}

.projects-leave-to {
    transform: translatey(30px);
    opacity: 0;
}

.projects-leave-active {
    position: absolute;
    z-index: -1;
}

.circle {
    text-align: center;
    position: absolute;
    bottom: -38px;
    left: 40px;
    width: 100px;
    height: 100px;
    border-radius: 50px;
    /* 	border:1px solid black; */
    display: flex;
    box-shadow: 0px -4px 3px 0px #494d3257;
    justify-content: center;
    align-items: center;
    background-color: #fff;
    /* 	box-shadow:0px -3px 3px #484848a6; */
}

.project {
    transition: all .35s ease-in-out;
    margin: 10px;
    box-shadow: 0px 2px 8px lightgrey;
    border-radius: 3px;
    width: 180px;
    height: 200px;
    display: flex;
    flex-direction: column;
    align-items: center;
}

.project-image-wrapper {
    position: relative;
}

.gradient-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 150px;
    opacity: 0.09;
    background: linear-gradient(to bottom, rgba(0, 210, 247, 0.65) 0%, rgba(0, 210, 247, 0.64) 1%, rgba(0, 0, 0, 0) 100%),
    linear-gradient(to top, rgba(247, 0, 156, 0.65) 0%, rgba(247, 0, 156, 0.64) 1%, rgba(0, 0, 0, 0) 100%);
    border-bottom-left-radius: 10px;
    border-bottom-right-radius: 10px;
    border-top-left-radius: 3px;
    border-top-right-radius: 3px;
}

.project-image {
    width: 100%;
    height: 150px;
    border-bottom-left-radius: 5px;
    border-bottom-right-radius: 5px;
    border-top-left-radius: 3px;
    border-top-right-radius: 3px;
}
</style>
