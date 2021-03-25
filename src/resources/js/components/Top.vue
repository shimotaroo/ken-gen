<template>
    <div class="component-area">
        <div class="description-area">
            <p class="mb-0">変更したい権限を入力してください</p>
            <small>先頭のd、-、|は入力しないでください</small>
        </div>
        <div class="form-area">
            <form class="form" @submit.prevent="convert">
                <input type="text" v-model="permission_symbol" placeholder="rwxrwxrwx" autofocus>
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
            permission_symbol: ''
        }
    },
    methods: {
        async convert () {
            const postData = { 
                'symbol': this.permission_symbol
            }
            const response = await axios.post('/api/convert', postData);
            console.log(response);
            this.$router.push({name: 'result', params: {
                symbol: response.data.symbol,
                number: response.data.number
            }})
        }
    }
}
</script>
