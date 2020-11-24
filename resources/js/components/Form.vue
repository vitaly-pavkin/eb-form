<template>
    <div class="grid min-h-screen place-items-center">
        <div class="w-11/12 p-12 bg-white sm:w-8/12 md:w-1/2 lg:w-4/12 shadow-md rounded px-8 pt-6 pb-8 mb-4">
            <h1 class="text-xl font-semibold">Форма обратной связи</h1>
            <div class="mt-6">
                <label for="name" class="block mt-2 text-xs font-semibold text-gray-600 uppercase">Имя</label>
                <v-input v-model="form.name" id="name" placeholder="Имя"></v-input>

                <label for="phone" class="block mt-2 text-xs font-semibold text-gray-600 uppercase"
                    >Номер телефона
                </label>
                <v-input v-model="form.phone" id="phone" placeholder="Номер телефона"></v-input>

                <label for="message" class="block mt-2 text-xs font-semibold text-gray-600 uppercase">Сообщение</label>
                <v-text-area v-model="form.message" id="message" type="area" placeholder="Сообщение"></v-text-area>

                <v-button class="py-3 mt-6" :disabled="submitting" @click.native="onSubmit">Отправить</v-button>
            </div>
        </div>
    </div>
</template>

<script>
    import VButton from './VButton.vue';
    import VInput from './VInput';
    import VTextArea from './VTextArea';

    export default {
        name: 'Form',
        components: {
            VButton,
            VInput,
            VTextArea,
        },
        data() {
            return {
                form: {
                    name: '',
                    phone: '',
                    message: '',
                },
                submitting: false,
            };
        },
        methods: {
            onSubmit() {
                this.submitting = true;

                console.log(this.form);

                setTimeout(() => this.submitting = false, 1000)
            }
        },
    }
</script>
