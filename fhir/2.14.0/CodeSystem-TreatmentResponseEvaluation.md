# Treatment response evaluation - KIP Infrastructure v2.14.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Treatment response evaluation**

## CodeSystem: Treatment response evaluation 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/TreatmentResponseEvaluation | *Version*:2.14.0 |
| Active as of 2025-07-10 | *Computable Name*:TreatmentResponseEvaluation |

 
Treatment response evaluation 

 This Code system is referenced in the content logical definition of the following value sets: 

* [BehandlingsResponsEvalueringLYFO](ValueSet-BehandlingsResponsEvalueringLYFO.md)
* [BehandlingsresponsCML](ValueSet-BehandlingsresponsCML.md)
* [TreatmentResponseALD](ValueSet-TreatmentResponseALD.md)
* [TreatmentResponseDAMYDA](ValueSet-TreatmentResponseDAMYDA.md)
* [TreatmentResponseEvaluationCLL](ValueSet-TreatmentResponseEvaluationCLL.md)
* [TreatmentResponseEvaluationLYFO](ValueSet-TreatmentResponseEvaluationLYFO.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "TreatmentResponseEvaluation",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/TreatmentResponseEvaluation",
  "version" : "2.14.0",
  "name" : "TreatmentResponseEvaluation",
  "title" : "Treatment response evaluation",
  "status" : "active",
  "date" : "2025-07-10T00:00:00+02:00",
  "publisher" : "Sundhedsvæsenets Kvalitetsinstitut with Trifork Digital Health A/S",
  "contact" : [
    {
      "name" : "Sundhedsvæsenets Kvalitetsinstitut with Trifork Digital Health A/S",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://trifork.com"
        },
        {
          "system" : "email",
          "value" : "rbk@trifork.com"
        }
      ]
    }
  ],
  "description" : "Treatment response evaluation",
  "caseSensitive" : false,
  "content" : "complete",
  "count" : 23,
  "concept" : [
    {
      "code" : "complete_remission",
      "display" : "Complete remission (CR)",
      "definition" : "Complete remission (CR)",
      "concept" : [
        {
          "code" : "complete_remission_incomplete_recovery",
          "display" : "Complete remission with incomplete recovery of bone marrow (CRi)",
          "definition" : "Complete remission with incomplete recovery of bone marrow (CRi)"
        },
        {
          "code" : "uncertain_complete_remission",
          "display" : "Uncertain complete remission (CRu)",
          "definition" : "Uncertain complete remission (CRu)"
        },
        {
          "code" : "complete_remission_metabolic_structurally",
          "display" : "Metabolic and strukturally CR",
          "definition" : "Metabolic and strukturally CR / CR (metabolisk og skrukturelt CR, bedømt med PET/CT)"
        },
        {
          "code" : "complete_remission_metabolic",
          "display" : "Metabolic CR",
          "definition" : "Metabolic CR / CR (metabolisk CR, men med strukturel restsygdom, bedømt med PET/CT)"
        },
        {
          "code" : "partial_remission",
          "display" : "Partial remission (PR)",
          "definition" : "Partial remission (PR)"
        },
        {
          "code" : "metabolic_cr",
          "display" : "CMR (metabolisk CR, deauville 1-3)",
          "definition" : "CMR (metabolisk CR, deauville 1-3)"
        },
        {
          "code" : "metabolic_pmr_4",
          "display" : "PMR (metabolisk PR, deauville 4)",
          "definition" : "PMR (metabolisk PR, deauville 4)"
        },
        {
          "code" : "metabolic_pmr_5",
          "display" : "PMR (metabolisk PR, deauville 5)",
          "definition" : "PMR (metabolisk PR, deauville 5)"
        }
      ]
    },
    {
      "code" : "complete_response",
      "display" : "Complete Response",
      "definition" : "Complete Response",
      "concept" : [
        {
          "code" : "stringent_complete_response",
          "display" : "Stringent Complete Response",
          "definition" : "Stringent Complete Response"
        },
        {
          "code" : "presumed_complete_response",
          "display" : "Presumed Complete Response",
          "definition" : "Presumed Complete Response"
        },
        {
          "code" : "complete_hematological_response",
          "display" : "Complete Hematological response (CHR)",
          "definition" : "Complete Hematological response (CHR)"
        },
        {
          "code" : "complete_cytogenetic_response",
          "display" : "Complete cytogenetic response (CCyR)",
          "definition" : "Complete cytogenetic response (CCyR)"
        }
      ]
    },
    {
      "code" : "partial_response",
      "display" : "Partial response (PR)",
      "definition" : "Partial response (PR)",
      "concept" : [
        {
          "code" : "very_good_partial_response",
          "display" : "Very Good Partial Response",
          "definition" : "Very Good Partial Response"
        },
        {
          "code" : "partial_response_lymphocytosis",
          "display" : "Partial response (PR) lymphocytosis",
          "definition" : "Partial response (PR) lymphocytosis"
        },
        {
          "code" : "partial_cytogenetic_response",
          "display" : "Partial cytogenetic response (PCyR)",
          "definition" : "Partial cytogenetic response (PCyR)"
        }
      ]
    },
    {
      "code" : "major_molecular_response",
      "display" : "Major molecular response (MMR)",
      "definition" : "Major molecular response (MMR)"
    },
    {
      "code" : "minimal_response",
      "display" : "Minimal response",
      "definition" : "Minimal response"
    },
    {
      "code" : "uncertain_response",
      "display" : "Uncertain response",
      "definition" : "Uncertain response"
    },
    {
      "code" : "stable_disease",
      "display" : "Stable disease (SD/NC)",
      "definition" : "Stable disease (SD/NC)"
    },
    {
      "code" : "progressive_disease",
      "display" : "Progressive disease (PD)",
      "definition" : "Progressive disease (PD)"
    }
  ]
}

```
