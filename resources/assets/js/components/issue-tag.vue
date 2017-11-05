<template>
    <div>
     <span class="tag is-primary" :style="tagCss"><slot></slot></span>
    </div>
</template>

<script>
    let Color = require('color');

    export default {
        props: ['background'],
        name: "issue-tag",
        computed: {
            tagCss: function() {
                var background = 'background-color: ' + this.background;
                var color = 'color: #ffffff';

                if (Color(this.background).light()) {
                    color = 'color: #000000';
                }
                return background + ';' + color;
            }
        }
    }
</script>

<style scoped>

</style>