<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('miscellaneouses', function (Blueprint $table) {
            $table->foreignId('encounterMisc')->primary()->index()->unique()->constrained('encounters', 'encounter');

            $table->string('mammographyCertificateNumber', 64)->nullable();
            $table->string('claimReason', 64)->nullable();
            $table->string('originalReferenceNumber', 64)->nullable();
            $table->enum('delayReason', ['AuthorizationDelays', 'DelayCertifyingProvider', 'DelayCustomMadeAppliances', 'DelayEligibilityDetermination', 'DelayPriorApproval', 'DelaySupplyingBillingForms', 'Litigation', 'OriginalDeniedNotBillingLimit', 'Other', 'ProofEligibilityUnavailable', ''])->nullable();
            $table->string('claimNote', 64)->nullable();
            $table->string('codeClaimNote', 64)->nullable();
            $table->enum('lineNote', ['AdditionalInformation', 'GoalPlans', 'Payment', 'ThirdPartyOrganizationNot', ''])->nullable();
            $table->string('codeLineNote', 64)->nullable();
            $table->enum('reportType', ['AdmissionSummary', 'Certification', 'DentalModels', 'DiagnosticReport', 'DischargeSummary', ''])->nullable();
            $table->enum('reportTransmission', ['AvailableProviderSite', 'ByFax', 'ByMail', 'ElectronicOnly', 'Email', ''])->nullable();
            $table->string('attachmentControlNumber', 64)->nullable();
            $table->boolean('medicaidServicesEP')->default(false);
            $table->boolean('referralGiven')->default(false);
            $table->enum('condition1', ['NewServicesRequested', 'NotUsed', 'PatientRefusedReferral', 'UnderTreatment', ''])->nullable();
            $table->enum('condition2', ['NewServicesRequested', 'NotUsed', 'PatientRefusedReferral', 'UnderTreatment', ''])->nullable();
            $table->enum('condition3', ['NewServicesRequested', 'NotUsed', 'PatientRefusedReferral', 'UnderTreatment', ''])->nullable();

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('miscellaneouses');
    }
};
