<template>
    <div v-show="isActive">
        <slot></slot>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component tab mounted.');
            this.isActive = this.selected
        },
        props: {
            name: { required: true},
            selected: { default: false }
        },
        data: function () {
            return {
                isActive: false
            }
        }
    }
</script>