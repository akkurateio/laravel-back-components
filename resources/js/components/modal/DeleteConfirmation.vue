<template>
    <div ref="modal" class="akk-modal akk-modal-default">
        <div class="header d-flex justify-content-between align-items-center">
            <h5 class="modal-title" id="validateConfirmModalLabel">
                Confirmation
            </h5>
            <button @click="close(false)" class="close" type="button">
                <Icon name="close" />
            </button>
        </div>
        <div class="body text-center py-4">
            <div class="text-lg font-bold" v-if="sentence" v-html="sentence"></div>
            <div class="text-lg font-bold" v-else>Confirmez-vous la suppression <br />de cette entrée ?</div>
        </div>
        <div class="footer d-flex align-items-center justify-content-between">
            <button
                type="button"
                @click="close(false)"
                class="btn btn-outline-secondary text-xs"
            >
                Annuler
            </button>
            <button
                type="button"
                @click="confirm()"
                class="btn btn-primary text-xs font-bold"
            >
                Confirmer
            </button>
        </div>
    </div>
</template>

<script>
export default {
    name: 'modalDeleteConfirmation',
    props: ['sentence'],
    methods: {
        confirm() {
            this.$emit('close', true);
        },
        close() {
            this.$emit('close', null);
        },
    },
};
</script>
<style scoped></style>
