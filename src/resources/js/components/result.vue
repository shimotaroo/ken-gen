<template>
    <div>
        <div class="result-area">
            <p>ターミナルで以下のコマンドを実行してください。</p>
            <p>$ chmod {{ number }} ファイル名／ディレクトリ名</p>
            <p>権限エラーになる場合は先頭にsudoをつけて実行してください。</p>
            <p>$ sudo chmod {{ number }} ファイル名／ディレクトリ名</p>
        </div>
    </div>
</template>

<script>
export default {
    props: {
        number: {
            type: String,
            required: true,
        }
    }
}
</script>