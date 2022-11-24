<template>
    <label class="file_upload">
        <input @change="selectFile" name="file_name" type="file">SelectFile
    </label>
    <div v-if="targetFile">
        <img :src="targetFile" class="preview">
    </div>
</template>

<script>
export default {
    data() {
        return {
            targetFile: "",
        }
    },
    methods: {
        selectFile: function(event) {
            event.preventDefault();
            const file = event.target.files[0];
            this.targetFile = URL.createObjectURL(file);
            formData.append('name', 'file_name', this.targetFile);
        }
    },
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
        object-fit: cover;
    } 
</style>