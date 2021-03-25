<template>
    <div class="component-area">
        <div class="result-area">
            <div class="command-area">
                <p class="mb-1 font-big">ターミナルで以下のコマンドを実行してください。</p>
                <p class="font-small">権限エラーになる場合は先頭にsudoをつけて実行してください。</p>
                <p class="bg-white mt-5">$ chmod <span class="font-bold">{{ number }}</span> ファイル名／ディレクトリ名</p>
            </div>
            <div class="symbol-area">
                <p>変更後の権限</p>
                <p class="bg-white">{{ symbol }}</p>
            </div>
            <router-link :to="{ name: 'top' }" class="link-button">戻る</router-link>
        </div>
    </div>
</template>

<script>
export default {
    props: {
        symbol: {
            type: String,
            required: true
        },
        number: {
            type: String,
            required: true,
        }
    }
}
</script>