<template>
    <layout>
        <div v-if="$page.props.flash.success">
            <div class="alert alert-success" role="alert">
                {{ $page.props.flash.success }}
            </div>
        </div>
        <!-- <div v-for="estado in estados" :key="estados">
            {{ estado.nome }} - {{ estado.abreviacao }}
        </div> -->
        <div>
            <b-button @click="toggleBusy">Toggle Busy State</b-button>

            <b-table :items="estados" :busy="isBusy" class="mt-3" outlined>
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

};
</script>