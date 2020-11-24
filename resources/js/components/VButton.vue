<template>
    <button
        :disabled="disabled"
        class="transition w-full font-medium tracking-widest text-white uppercase focus:outline-none hover:shadow-none"
        :class="{'shadow-lg bg-black hover:bg-gray-900': !disabled, 'bg-gray-300 cursor-default': disabled}"
    >
        <slot />
    </button>
</template>

<script>
    export default {
        name: 'VButton',
        props: {
            disabled: {
                type: Boolean,
                default: false,
            }
        },
    }
</script>
