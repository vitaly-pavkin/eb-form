<template>
    <textarea
        class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner"
        :value="value"
        :type="type"
        :placeholder="placeholder"
        @input="$emit('input', $event.target.value)"
    />
</template>

<script>
    export default {
        name: 'VTextArea',
        props: {
            value: String,
            placeholder: String,
            type: {
                type: String,
                default: 'text',
            },
        },
    }
</script>
