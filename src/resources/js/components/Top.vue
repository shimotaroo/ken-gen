<template>
    <div class="component-area">
        <div class="description-area">
            <p class="mb-1 font-big">変更したい権限を入力してください</p>
            <small>先頭の「d」、「-」、「|」は入力しないでください</small><br>
            <small>現在「s」、「t」には対応できていません</small>
        </div>
        <div class="form-area">
            <!-- バリデーションメッセージ -->
            <div class="errors" v-if="validationMessages">
                <ul v-if="validationMessages.symbol">
                    <li v-for="message in validationMessages.symbol" :key="message">{{ message }}</li>
                </ul>
            </div>
            <!-- エラーメッセージ -->
            <p class="errors" v-if="errorMessage">{{ errorMessage }}</p>
            <form class="form" @submit.prevent="convert">
                <input type="text" v-model="permission_symbol" placeholder="rwxrwxrwx" maxlength="9">
                <div class="form-button">
                    <button type="submit">変換する</button>
                </div>
            </form>
        </div>
    </div>
</template>

<script>

export default {
    data () {
        return {
            permission_symbol: '',
            errorMessage: '',
            validationMessages: '',
        }
    },
    methods: {
        async convert () {
            const postData = { 
                'symbol': this.permission_symbol
            }
            await axios.post('/api/convert', postData)
            .then( response => {

                this.errorMessage = '';
                this.validationMessages = '';

                // バリデーションに引っかかった場合
                if (response.data.status === 422 ) {
                    this.validationMessages = response.data.errors;
                    return false;
                }
                // 入力値が正しくない場合
                if (response.data.error) {
                    this.errorMessage = response.data.error;
                    return false;
                }
                this.$router.push({name: 'result', params: {
                    symbol: response.data.symbol,
                    number: response.data.number
                }})
            })
            .catch( error => {
                console.log(error);
            })
        }
    }
}
</script>
