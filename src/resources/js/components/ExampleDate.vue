<template>
    <p class="area__time">{{ currentDate }}</p>
</template>

<script>
import dayjs from 'dayjs';
export default {
    el: '#hoge-date',
    data() {
        return {
            currentDate : ''
        }
    },
    methods: {
        tick () {
            this.currentDate = dayjs().locale('ja').format('YYYY MM/DD hh:mm:ss').toString()
            setTimeout(() => {
                this.tick()
            }, 1000)
        }
    },
    created() {
        this.tick()
    }
}
</script>