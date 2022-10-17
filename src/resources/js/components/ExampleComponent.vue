<template>
    <div>
        <div class="outer__index">
            <a v-on:click="watcheLeft" class="outer__index__tag weekly">週間</a>
            <p v-on:click="watchCenter" class="outer__index__tag months">月間</p>
            <p v-on:click="watchRight" class="outer__index__tag years">年間</p>
        </div>
        <div class="outer__list">
            <p class="outer__list__title" v-if="left">週間継続ランキング</p>
            <p class="outer__list__title" v-if="center">月間継続ランキング</p>
            <p class="outer__list__title" v-if="right">年間継続ランキング</p>
            <div class="outer__article" v-for="(rank, index) in rankDate" :key="index">
                <p class="outer__article__index rank">{{ index + 1 }}</p>
                <p class="outer__article__index name">{{ rank.name }}</p>
                <p class="outer__article__index total">{{ rank.count }}</p>
            </div>
        </div>
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
            rankDate: this.ranks['weekly']
        };
    },
    props:{
        ranks:{},
    },
    methods: {
        watcheLeft: function() {
            this.rankDate = this.ranks['weekly'];
            this.left   = true;
            this.center = false;
            this.right = false;
        },
        watchCenter: function() {
            this.rankDate = this.ranks['month'];
            this.left   = false;
            this.center = true;
            this.right  = false;
        },
        watchRight: function() {
            this.rankDate = this.ranks['yearly'];
            this.left   = false;
            this.center = false;
            this.right  = true;
        }
    }
}
</script>
