<template>
    <layout>
        <div style="margin-top: 100px;">
            <div v-for="(erro, index) in errors" :key="index" style="border: 1px solid red; margin-bottom: 10px;">
                {{ erro }}
            </div>
            <form @submit.prevent="enviaFormulario">
                <input type="text" placeholder="Nome" v-model="form.nome" />
                <input type="text" placeholder="Abreviação" v-model="form.abreviacao" />
                <button type="submit">Cadastrar</button>
            </form>
        </div>
    </layout>
</template>

<script>

import Layout from '../../Layout';

export default {
    components: { Layout },
    data: () => {
        return {
            form: {
                nome: null,
                abreviacao: null,
            },
        }
    },

    methods: {
        enviaFormulario() {
            this.$inertia.post('/estado/inserir', this.form);
        }
    },

    props: {
        errors: Object
    },

};
</script>