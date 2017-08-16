<template>
	<div class="dashboard">
		<h1>DashBoard</h1>
		<router-link :to="{name: 'test'}">test link</router-link>
	</div>
</template>

<script>
	import {mapActions} from 'vuex'
	export default {
		name: 'dashboard',
		data() {
			return {

			}
		},
		methods: {
			...mapActions({
				maxWell: 'maxWell'
			})
		},
		mounted() {
			this.maxWell()
		}
	}
</script>