<script setup>
import { Link } from '@inertiajs/inertia-vue3';
const props = defineProps({
    patient: {
        type: Object,
        default: () => ({})
    },
});
</script>
<template>
    <h2>
        <Link :href="route('patients.show', patient.pid)">
        {{ patient.demographic.full_name }}
        </Link>
    </h2>
    <div class="patientInfo">
        <div class="dataBox">
            <div class="dataLine">
                <div class="label">PID</div>
                <div class="info">{{ patient.pid }}</div>
            </div>
            <div class="dataLine">
                <div class="label">
                    <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M6 3a1 1 0 011-1h.01a1 1 0 010 2H7a1 1 0 01-1-1zm2 3a1 1 0 00-2 0v1a2 2 0 00-2 2v1a2 2 0 00-2 2v.683a3.7 3.7 0 011.055.485 1.704 1.704 0 001.89 0 3.704 3.704 0 014.11 0 1.704 1.704 0 001.89 0 3.704 3.704 0 014.11 0 1.704 1.704 0 001.89 0A3.7 3.7 0 0118 12.683V12a2 2 0 00-2-2V9a2 2 0 00-2-2V6a1 1 0 10-2 0v1h-1V6a1 1 0 10-2 0v1H8V6zm10 8.868a3.704 3.704 0 01-4.055-.036 1.704 1.704 0 00-1.89 0 3.704 3.704 0 01-4.11 0 1.704 1.704 0 00-1.89 0A3.704 3.704 0 012 14.868V17a1 1 0 001 1h14a1 1 0 001-1v-2.132zM9 3a1 1 0 011-1h.01a1 1 0 110 2H10a1 1 0 01-1-1zm3 0a1 1 0 011-1h.01a1 1 0 110 2H13a1 1 0 01-1-1z"
                            clip-rule="evenodd"></path>
                    </svg>
                </div>
                <div class="info">{{ patient.demographic.dateOfBirth }}</div>
            </div>
        </div>

        <div class="dataBox">
            <div class="dataLine">
                <div class="label">SSN</div>
                <div class="info">{{ patient.demographic.socialSecurityNumber }}</div>
            </div>
            <div class="dataLine">
                <div class="label">
                    <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z">
                        </path>
                    </svg>
                </div>
                <div class="info">{{ patient.demographic.homePhone }}</div>
            </div>
        </div>

        <div class="dataBox">
            <div class="dataLine">
                <div class="label">
                    <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z">
                        </path>
                    </svg>
                </div>
                <div class="info">{{ patient.demographic.street }}</div>
            </div>
            <div class="dataLine">
                <div class="label">&nbsp;</div>
                <div class="info">
                    {{ patient.demographic.city }},
                    {{ patient.demographic.state }} - {{ patient.demographic.zip }}
                </div>
            </div>
        </div>

        <div class="dataBox">
            <div class="dataLine">
                <div class="label">INS</div>
                <div class="info">---</div>
            </div>
            <div class="dataLine">
                <div class="label">
                    <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z">
                        </path>
                    </svg>
                </div>
                <div class="info">---</div>
            </div>
        </div>

        <div class="dataBox">
            <div class="dataLine">
                <div class="label">POL</div>
                <div class="info">---</div>
            </div>
            <div class="dataLine">
                <div class="label">GRP</div>
                <div class="info">---</div>
            </div>
        </div>
    </div>
</template>
