<template>
    <form :action="url" method="post" v-on:submit.prevent="storeArticle()">
        <div class="form-group">
            <input type="text" class="form-control" name="heading" v-model="article_data.heading"
                   placeholder="*Heading..." required>
        </div>
        <div class="form-group">
           <input type="file" id="featImg" v-on:change="onFeatureChg" class="form-control" accept="image/*" >
           <img id="preView" src="">
        </div>
        <div class="form-group">
            <select class="form-control" name="category_id" v-model="article_data.category_id">
                <option :value="category.id" v-for="category in categories">
                    {{category.name}}
                </option>
            </select>
        </div>
        <div class="form-group">
            <markdown-editor v-model="article_data.content" ref="markdownEditor"></markdown-editor>
        </div>
        <div class="text-grey">
            Tips for keywords: separate your keywords by space. Some popular keywords are:
        </div>
        <div class="form-group">
            <strong>Keywords: </strong>
            <label id="keywords-show">
                <span class='label label-info margin-right-5'
                      v-for="keyword in article_data.keywords.split(' ')">{{keyword}}</span>
            </label>
            <input type="text" id="keyword"
                   v-model="article_data.keywords"
                   class="form-control" name="keywords" placeholder="Keywords" required>
        </div>
        <div class="form-group">
            <div v-for="language in languages">
                <input :id="'radio-'+language.key" type="radio" name="language"
                       v-model="article_data.language"
                       :value="language.key" style="display:none;">
                <!-- <label :for="'radio-'+language.key">{{language.value}}</label> -->
            </div>
        </div>
        <div class="form-group">
            <input type="checkbox" name="is_comment_enabled"
                   value="1"
                   v-model="article_data.is_comment_enabled"
                   checked id="comment-enabled">
            <label for="comment-enabled">Comment Allowed</label>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-success" id="submit-btn">Submit</button>
        </div>
    </form>
</template>

<script>
    const reader = new FileReader;
    import markdownEditor from 'vue-simplemde/src/markdown-editor';
    import * as Ladda from 'ladda';
    import {alertError} from "@/script";
    let imgString = '';

    export default {
        name: "ArticleForm",
        components: {
            markdownEditor
        },
        props: {
            categories: {type: Array, required: true},
            languages: {type: Array, required: true},
            url: {type: String, required: true},
            method: {type: String, required: true},
            article: {
                type: Object,
                require: false,
                default: function () {
                    return {
                        heading: '',
                        category_id: 1,
                        content: '',
                        keywords: '',
                        language: 'eng',
                        is_comment_enabled: true,
                        featureImage : '',
                    }
                }
            }
        },
        data() {
            return {
                article_data: this.article,
            }
        },
        methods: {
            storeArticle() {
                let l = Ladda.create(document.querySelector('#submit-btn'));
                l.start();
                
                Vue.set(this.article_data,"featureImage",imgString);

                axios.request({
                    method: this.method,
                    url: this.url,
                    data: this.article_data

                }).then( (response) => {
                    l.stop();
                    location.href = response.data.redirect_url;

                }).catch( (error) => {
                    l.stop();
                    alertError(error.response.data.errorMsg);
                })
            },
            onFeatureChg(){
               let input = document.getElementById('featImg');
               /*reader.abort();*/
               reader.readAsDataURL(input.files[0]);
               
            }
        }
    }
    reader.onload = () => {
    let hiddenField = document.getElementById('featureImg');
    const dataURL = reader.result;
    const base64 = reader.result.split(",").pop();
    console.log(dataURL, base64);
    imgString = dataURL;
    let preView = document.getElementById('preView');
    preView.src = imgString;
  }
</script>

<style scoped>
    @import '~simplemde/dist/simplemde.min.css';
</style>