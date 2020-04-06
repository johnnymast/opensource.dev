<template>
    <div>
        <a href="#" @click="clicked" class="card-header-icon" aria-label="more options">
            <span v-if="show_more === false" key="more">
            {{ label_show_less }}</span>
            <span v-else>
            {{ label_show_more }}</span>
            <span class="icon">
              <i class="fa"  v-bind:class="[ show_more == true ? 'fa-angle-down' : 'fa-angle-up']" aria-hidden="true"></i>
            </span>
        </a>
        <div class="content-wrapper" v-show="show_more == false">
            <slot></slot>
        </div>
    </div>
</template>

<script>
    export default {
        name: "issue-content",
        props: ['label_show_more', 'label_show_less'],
        data ()  {
            return {
                show_more: true,
            }
        },
        methods: {
            clicked () {
                this.show_more = (this.show_more !== true)
            }
        }
    }
</script>

<style scoped>

</style>