<template>
    <app-layout title="Дисциплины">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Test
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <form @submit.prevent="submit">
                        <textarea v-model="form.q" class="w-full px-3 py-2 text-gray-700 border rounded-lg focus:outline-none" rows="4"></textarea>
                        <button type="submit" class="py-3 px-6 text-white rounded-lg bg-purple-600 shadow-lg block md:inline-block">Отправить</button>
                        
                    </form>
                </div>
            </div>
        </div>
    </app-layout>
</template>

<script>
  import { defineComponent } from 'vue'
  import {Inertia} from '@inertiajs/inertia'
  import AppLayout from '@/Layouts/AppLayout.vue'

  export default defineComponent({
    components: {AppLayout},
    data() { return {
      form: {q:""}
    }},
    methods:{
      submit(){
        Inertia.post('/test',this.form)
      }
    }
      
  })
</script>
