<script setup>
import BreezeButton from '@/Components/Button.vue';
import BreezeGuestLayout from '@/Layouts/Guest.vue';
import BreezeInput from '@/Components/Input.vue';
import BreezeLabel from '@/Components/Label.vue';
import BreezeValidationErrors from '@/Components/ValidationErrors.vue';
import { Head, Link, useForm } from '@inertiajs/inertia-vue3';

const form = useForm({
    username: '',
    firstName: '',
    middleName: '',
    lastName: '',
    email: '',
    password: '',
    password_confirmation: '',
    terms: false,
});

const submit = () => {
    form.post(route('register'), {
        onFinish: () => form.reset('password', 'password_confirmation'),
    });
};
</script>

<template>
    <BreezeGuestLayout>

        <Head title="Register" />

        <BreezeValidationErrors class="mb-4" />

        <form @submit.prevent="submit">
            <div>
                <BreezeLabel for="username" value="Username" />
                <BreezeInput id="username" type="text" class="block w-full mt-1" v-model="form.username" required
                    autofocus autocomplete="username" />
            </div>

            <div>
                <BreezeLabel for="firstName" value="First Name" />
                <BreezeInput id="firstName" type="text" class="block w-full mt-1" v-model="form.firstName"
                    autocomplete="firstName" />
            </div>

            <div>
                <BreezeLabel for="middleName" value="Middle Name" />
                <BreezeInput id="middleName" type="text" class="block w-full mt-1" v-model="form.middleName"
                    autocomplete="middleName" />
            </div>

            <div>
                <BreezeLabel for="lastName" value="Last Name" />
                <BreezeInput id="lastName" type="text" class="block w-full mt-1" v-model="form.lastName"
                    autocomplete="lastName" />
            </div>

            <div class="mt-4">
                <BreezeLabel for="email" value="Email" />
                <BreezeInput id="email" type="email" class="block w-full mt-1" v-model="form.email" required
                    autocomplete="username" />
            </div>

            <div class="mt-4">
                <BreezeLabel for="password" value="Password" />
                <BreezeInput id="password" type="password" class="block w-full mt-1" v-model="form.password" required
                    autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <BreezeLabel for="password_confirmation" value="Confirm Password" />
                <BreezeInput id="password_confirmation" type="password" class="block w-full mt-1"
                    v-model="form.password_confirmation" required autocomplete="new-password" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <Link :href="route('login')" class="text-sm text-gray-600 underline hover:text-gray-900">
                Already registered?
                </Link>

                <BreezeButton class="ml-4" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                    Register
                </BreezeButton>
            </div>
        </form>
    </BreezeGuestLayout>
</template>
