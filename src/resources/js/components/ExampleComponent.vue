<template>
    <div class="outer__index">
        <a v-on:click="watcheLeft" class="outer__index__tag weekly">週間</a>
        <p v-on:click="watchCenter" class="outer__index__tag months">月間</p>
        <p v-on:click="watchRight" class="outer__index__tag years">年間</p>
    </div>
    <div class="outer__list">
        <p class="outer__list__title" v-if="left">週間ランキング</p>
        <p class="outer__list__title" v-if="center">月間ランキング</p>
        <p class="outer__list__title" v-if="right">年間ランキング</p>
    </div>
</template>

<script>
export default {
    el: '#list-tag',
    data() {
        return {
            left: true,
            center: false,
            right: false,
        };
    },
    methods: {
        watcheLeft: function() {
            this.left   = true;
            this.center = false;
            this.right = false;
        },
        watchCenter: function() {
            this.left   = false;
            this.center = true;
            this.right  = false;
        },
        watchRight: function() {
            this.left   = false;
            this.center = false;
            this.right  = true;
        }
    }
}
</script>
