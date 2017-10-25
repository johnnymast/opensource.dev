<template>
    <div>

        <div class="column project_column is-8">
            <projectcard v-for="project in projectcards"></projectcard>
        </div>
    </div>
</template>

<script>
    export default {
        name: "projectlist",
        data() {
            return {
                projectcards: [
                    'one',
                    'two',
                    'tree'
                ]
            };
        }
    }
</script>
