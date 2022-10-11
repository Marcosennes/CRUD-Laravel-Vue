<template>
    <layout>
        <div v-if="$page.props.flash.insercao">
            <div v-if="$page.props.flash.insercao.success" class="alert alert-success" role="alert">
                <p>{{$page.props.flash.insercao.message}}</p>
            </div>
            <div v-if="!$page.props.flash.insercao.success" class="alert alert-danger" role="alert">
                <p>{{$page.props.flash.insercao.message}}</p>
            </div>
        </div>
        <div v-if="$page.props.flash.exclusao">
            <div v-if="$page.props.flash.exclusao.success" class="alert alert-success" role="alert">
                <p>{{$page.props.flash.exclusao.message}}</p>
            </div>
            <div v-if="!$page.props.flash.exclusao.success" class="alert alert-danger" role="alert">
                <p>{{$page.props.flash.exclusao.message}}</p>
            </div>
        </div>
        <div>
            <b-button @click="toggleBusy">Toggle Busy State</b-button>

            <b-table responsive :items="estados" :busy="isBusy" :fields="fields" class="mt-3" outlined>
                <template #cell(acoes)="data">
                    <b-button size="sm" variant="warning" @click="alterar()">Alterar</b-button>
                    <b-button size="sm" variant="danger" @click="excluir(data.item.id)">Excluir</b-button>
                </template>
                <template #table-busy>
                    <div class="text-center text-danger my-2">
                        <b-spinner class="align-middle"></b-spinner>
                        <strong>Loading...</strong>
                    </div>
                </template>
            </b-table>
        </div>
    </layout>
</template>

<script>
import Layout from '../../Layout';

export default {
    components: { Layout },
    props: {
        estados: Array,
    },
    data() {
        return {
            isBusy: false,
            fields: [
                { key: 'nome', label: 'Nome', sortable: true, formatter: this.nomeFormatter },
                { key: 'abreviacao', label: 'Abreviação', sortable: true },
                { key: 'created_at', label: 'Criado em', sortable: true },
                { key: 'updated_at', label: 'Atualizado em', sortable: true },
                { key: 'acoes', label: 'Ações' },
            ],
            acoes: ["Editar", "Excluir"],
        }
    },
    methods: {
        toggleBusy() {
            this.isBusy = !this.isBusy
        },
        excluir(id) {
            if (confirm('Deseja realmente excluir este registro?')) {
                this.$inertia.delete(`/estado/excluir/${id}`);
            }
        },
    }
};
</script>