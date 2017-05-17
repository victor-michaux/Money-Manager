<template>
    <div>
        <div class="row">
            <div class="col-sm-12">
                <div id="displaySelection" class="card">
                    <nav class="nav nav-pills justify-content-center">
                        <div class="nav-link" v-for="tab in tabs" :class="{ 'active': tab.isActive }" @click="selectTab(tab)">{{ tab.name }}</div>
                    </nav>
                </div>
            </div>
        </div>
        <div>
            <slot></slot>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component tabs mounted.');
            this.isActive = this.selected
        },
        data: function () {
            return {
                tabs: []
            }
        },
        created: function () {
            this.tabs = this.$children;
        },
        methods: {
            selectTab: function (selectedTab) {
                this.tabs.forEach(function (tab) {
                    tab.isActive = (tab.name === selectedTab.name)
                });
            }
        }
    }
</script>