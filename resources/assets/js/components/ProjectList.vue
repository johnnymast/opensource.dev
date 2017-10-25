<template>
    <div>

        <div class="column project_column is-8">
            <projectcard v-for="project in projectcards" :title="project.title" :user="project.title" :content="project.content"></projectcard>
        </div>
    </div>
</template>

<script>
    export default {
        name: "projectlist",
        data() {
            return {
                projectcards: [
                    {
                        title: 'title1',
                        user: 'user1',
                        content: 'This is the placeholder for content 1.\n'+
                        '           Phasellus nec iaculis mauris. <a data-v-17dd50a0=\"\">@bulmaio</a>.\n' +
                        '            <a data-v-17dd50a0=\"\" href=\"#\">#css</a> <a data-v-17dd50a0=\"\" href=\"#\">#responsive</a>'
                    },
                    {
                        title: 'title2',
                        user: 'user2',
                        content: "This is the placeholder for content 2.\n" +
                        "            Phasellus nec iaculis mauris. <a data-v-17dd50a0=\"\">@bulmaio</a>.\n" +
                        "            <a data-v-17dd50a0=\"\" href=\"#\">#css</a> <a data-v-17dd50a0=\"\" href=\"#\">#responsive</a><"
                    },
                    {
                        title: 'title3',
                        user: 'user3',
                        content: "This is the placeholder for content 3.\n" +
                        "            Phasellus nec iaculis mauris. <a data-v-17dd50a0=\"\">@bulmaio</a>.\n" +
                        "            <a data-v-17dd50a0=\"\" href=\"#\">#css</a> <a data-v-17dd50a0=\"\" href=\"#\">#responsive</a><"
                    }
                ]
            };
        }
    }
</script>
