<template>
    <label class="file_upload">
        <input name="file_upload" type="file">SelectFile
    </label>
    <!-- ファイルアップロードのタイミングでプレビュー画像を表示したい -->
    <div v-show="isShow">
        <img src="/image/fuji.png" alt="/" class="preview">
    </div>
</template>

<script>
// axios 画像アップロードする
export default {
    data() {
        return {
            isShow: true
        }
    },
    methods: {
        //
    }
}

</script>

<style lang='scss'>
    input[type="file"] {
        display: none;
    }
    .file_upload {
        font-size: 10px;
        color: rgba(0, 0, 0, 0.5);
        padding: 10px 40px;
        background: rgba(169, 169, 169, 0.35);
        border-radius: 3px;
        cursor: pointer;
    }
    .preview {
        width: 55px;
        height: 55px;
        background-color: #000;
        object-fit: cover;
    } 
</style>