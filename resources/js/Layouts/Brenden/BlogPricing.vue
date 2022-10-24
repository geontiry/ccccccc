<template>
    <table class="table table-bordered pricing-table text-center shadow-sm rounded">
    <thead>
    <tr>
        <th class=""><p>123</p></th>
        <th v-for="price in prices.items" :key="price.id" class="bg-primary">
            <h4 class="mb-0 text-light">
                {{price.name}}
            </h4>
        </th>
    </tr>
    </thead>
    <tbody>
        <tr v-for="(feature,i) in prices.features" :key="feature.id">
            <td class="text-left feature-td">{{feature}}</td>
            <td v-for="(priceFeature, j) in prices.items.map(item => item.features[i])" :key="priceFeature.id"
                class="txt-color"
                >{{j}}
                <Boolean v-if="typeof priceFeature === 'boolean'" :value="priceFeature"/>
                <span v-else v-html="priceFeature"></span>
            </td>
        </tr>
        <tr>
            <td class="text-left feature-td">Price</td>
            <td v-for="price in prices.items" :key="price.id">
                <span class="price">
                    <span class="symbol">
                    {{price.amount.symbol}}
                    </span>
                    <span class="whole text-dark">
                    {{price.amount.whole}}
                    </span>
                    <span class="suffix">
                    {{price.amount.suffix}}
                    </span>
                </span>
            </td>
        </tr>
    </tbody>
</table>
</template><script>
import Boolean from "@/Layouts/Brenden/Boolean.vue";

    export default {
        props: {
            value: Boolean
        },
        components: {
            Boolean,
        },
         data() {
    return {
        prices: {
            features: ['REST API', 'SDK Libraries', 'Monthly plan', 'Email addresses', 'Sends monthly', 'Receives monthly', 'Bulk operations', 'Custom domains', 'Web interface', 'Support'],
            items: {
                name: 'Trial', features: [ 'true', 'true', '10 day evaluation', 100, 1000, 1000, false, false, false, 'Standard'], amount: { symbol: '$', whole: '0', suffix: '10 days' }
            }
        }
    }
    }
}
</script>