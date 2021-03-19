<template>
    <div>
        <div class="description-area">
            <p class="mb-0">変更したい権限を入力してください</p>
            <small>先頭のd、-、|は入力しないでください</small>
        </div>
        <v-form>
            <v-text-field
                placeholder="rwxrwxrwx"
            />
        </v-form>
        <v-btn
            class="px-5 py-5 grey lighten-5"
            elevation="2"
        >
            変換する
        </v-btn>
    </div>
</template>