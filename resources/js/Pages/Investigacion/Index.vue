<template>
    <AppLayout title="Dashboard">
        <div>

            <Boton as="link" :href="route('investigacion.create')">Registrar nuevo</Boton>
            <!--            <br>-->
            <!--            {{ personas }}-->
            <!--            <br>-->
            <TableBasic>
                <template #head>
                    <TableHead>Id</TableHead>
                    <TableHead>Apellidos</TableHead>
                    <TableHead>Nombres</TableHead>
                    <TableHead>Correo</TableHead>
                    <TableHead>Celular</TableHead>
                </template>

                <TableRow v-for="persona in personas" :key="persona.id">
                    <TableColumn>{{ persona.id }}</TableColumn>
                    <TableColumn>{{ persona.apellidos }}</TableColumn>
                    <TableColumn>{{ persona.nombres }}</TableColumn>
                    <TableColumn>{{ persona.correo }}</TableColumn>
                    <TableColumn>{{ persona.celular }}</TableColumn>
                </TableRow>

            </TableBasic>

        </div>
    </AppLayout>
</template>

<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";
import TableBasic from "@/Components/Tables/TableBasic.vue"
import TableColumn from "@/Components/Tables/TableColumn.vue"
import TableHead from "@/Components/Tables/TableHead.vue"
import TableRow from "@/Components/Tables/TableRow.vue"
import Boton from "@/Components/Boton.vue"

defineProps({
    personas: Array
})
</script>

<style scoped>

</style>
