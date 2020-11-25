<template>
    <div class="grid min-h-screen place-items-center">
        <div class="w-11/12 p-12 bg-white sm:w-8/12 md:w-1/2 lg:w-4/12 shadow-md rounded px-8 pt-6 pb-8 mb-4">
            <h1 class="text-xl font-semibold mb-6">Форма обратной связи</h1>

            <v-alert
                v-if="alert.type && alert.message"
                class="mb-6"
                :type="alert.type"
                :message="alert.message"
            />

            <validation-observer ref="form" v-slot="{ errors }">
                <div class="input-group mb-3">
                    <label for="name" class="block text-xs font-semibold text-gray-600 uppercase">Имя</label>
                    <validation-provider vid="name" v-slot="{ errors }">
                        <v-input v-model="form.name" id="name" placeholder="Имя"></v-input>
                        <small class="text-red-800">{{ errors[0] }}</small>
                    </validation-provider>
                </div>

                <div class="input-group mb-3">
                    <label for="phone" class="block text-xs font-semibold text-gray-600 uppercase"
                        >Номер телефона
                    </label>
                    <validation-provider vid="phone" v-slot="{ errors }">
                        <v-input v-model="form.phone" id="phone" placeholder="+7 (123) 456 78 90"></v-input>
                        <small class="text-red-900">{{ errors[0] }}</small>
                    </validation-provider>
                </div>

                <div class="input-group mb-3">
                    <label for="message" class="block text-xs font-semibold text-gray-600 uppercase">Сообщение</label>
                    <validation-provider vid="message" v-slot="{ errors }">
                        <v-text-area v-model="form.message" id="message" type="area" placeholder="Сообщение"></v-text-area>
                        <small class="text-red-900">{{ errors[0] }}</small>
                    </validation-provider>
                </div>

                <v-button class="py-3 mt-6" :disabled="submitting" @click.native="onSubmit">Отправить</v-button>
            </validation-observer>
        </div>
    </div>
</template>

<script>
    import VButton from './VButton.vue';
    import VInput from './VInput';
    import VTextArea from './VTextArea';
    import VAlert from './VAlert';
    import { ValidationObserver, ValidationProvider } from 'vee-validate';

    export default {
        name: 'Form',
        components: {
            VButton,
            VInput,
            VTextArea,
            VAlert,
            ValidationObserver,
            ValidationProvider,
        },
        data() {
            return {
                alert: {
                    type: '',
                    title: '',
                },
                form: {
                    name: '',
                    phone: '',
                    message: '',
                },
                submitting: false,
            };
        },
        methods: {
            async onSubmit() {
                try {
                    this.submitting = true;

                    this.alert = { type: '', message: '' };
                    this.$refs.form.setErrors([]);

                    const { data } = await this.$http.post('/api/form-requests', { ...this.form });

                    this.alert = { type: 'success', message: data.message };

                    this.form = {
                        name: '',
                        phone: '',
                        message: '',
                    }
                } catch (e) {
                    let message = 'Что то пошло не так.';

                    // Validation error
                    if (e?.response?.status === 422) {
                        message = e.response.data.message;

                        this.$refs.form.setErrors(e.response.data.errors);
                    }

                    this.alert = { type: 'error', message }
                } finally {
                    this.submitting = false;
                }
            }
        },
    }
</script>
