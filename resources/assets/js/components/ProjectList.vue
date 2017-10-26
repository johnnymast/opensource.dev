<template>
    <div>

        <div class="column project_column is-8">
            <projectcard v-for="project in projectcards" :title="project.title" :user="project.user" :content="project.content"></projectcard>
        </div>
    </div>
</template>

<script>
    export default {
        name: "projectlist",
        data() {
            return {
                projectcards: []
            };
        },
        mounted: function () {
            console.log('Mounted')

            axios.get('/test')
                .then(response => {
                    // JSON responses are automatically parsed.
                    console.log(response.data[0].title)
                    this.projectcards = response.data
                })
                .catch(e => {
                    this.errors.push(e)
                })
        }
    }
</script>
