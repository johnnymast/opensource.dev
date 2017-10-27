<template>
    <div>
        <div class="columns">
            <div v-for="set in projectcards" class="column project_column is-4">
                <projectcard v-for="project in set" :title="project.title" :user="project.user"
                             :content="project.content"></projectcard>
            </div>
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
            axios.get('/test')
                .then(response => {
                    // JSON responses are automatically parsed.
                    this.projectcards = response.data
                })
                .catch(e => {
                    // this.errors.push(e)
                })
        }
    }
</script>
