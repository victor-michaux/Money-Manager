<template>
    <tr v-bind:class="operation.type">
        <td>{{ operation.title }}</td>
        <td>{{ operation.amount }}</td>
        <td>{{ readableDate }}</td>
        <td>{{ operation.category }}</td>
    </tr>
</template>

<script>
    export default {
        mounted() {
            console.log("Component operation-item mounted");
        },
        props: ['operation'],
        computed: {
            cssStyle: function () {
                switch (this.operation.type) {
                    case 'expense':
                        return 'table-danger'
                    case 'income':
                        return 'table-success'
                    default:
                        return null
                }
            },
            readableDate: function () {
                return new Date(this.operation.date).toLocaleDateString("fr-FR")
            }
        }
    }
</script>
