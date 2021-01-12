<template>
    <div ref="modal" class="akk-modal akk-modal-medium akk-modal-company">
        <div class="d-flex align-items-center justify-content-between">
            <h5>Ajouter une catégorie</h5>
            <a href="#" class="close" @click.stop="close(false)">
                <Icon name="Close" />
            </a>
        </div>
        <div class="">
            <form @submit.prevent="submit" class="mb-3">
                <div class="row">
                    <div class="col-12 col-sm-6">
                        <div class="form-group">
                            <label class="control-label" for="title">Titre</label>
                            <input
                                v-model="title"
                                id="title"
                                name="title"
                                ref="focus"
                                class="form-control form-control-sm"
                                type="text"
                            />
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label" for="overview">Description</label>
                    <input
                        v-model="overview"
                        name="overview"
                        id="overview"
                        class="form-control form-control-sm"
                        type="text"
                    />
                </div>
            </form>
            <div class="form-group d-flex justify-content-between">
                <button @click="close" class="btn btn-sm btn-outline-secondary">
                    Annuler
                </button>
                <button class="btn btn-sm btn-primary" type="submit">
                    Enregistrer & sélectionner
                </button>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    data() {
        return {
            title: '',
            overview: '',
        };
    },
    mounted() {
        this.$refs.focus.focus();
    },
    methods: {
        close() {
            this.$emit('close', false);
        },
        async submit() {
            const { title, overview } = this;
            const form = {
                title,
                overview,
            };
            const { data } = await axios.post(this.properties.url, form);
            this.$emit('close', data);
        },
    },
    computed: {
        properties() {
            return this.$store.state.modal.props;
        },
    },
};
</script>
