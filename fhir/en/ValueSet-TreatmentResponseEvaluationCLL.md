# Treatment_Response_Evaluation_CLL - KIP Infrastructure v2.27.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Treatment_Response_Evaluation_CLL**

## ValueSet: Treatment_Response_Evaluation_CLL 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/TreatmentResponseEvaluationCLL | *Version*:2.27.2 |
| Active as of 2022-07-13 | *Computable Name*:TreatmentResponseEvaluationCLL |

 
Indikation for kemoterapi/behandling - CLL 

 **References** 

This value set is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)

### Logical Definition (CLD)

 

### Expansion

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "TreatmentResponseEvaluationCLL",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/TreatmentResponseEvaluationCLL",
  "version" : "2.27.2",
  "name" : "TreatmentResponseEvaluationCLL",
  "title" : "Treatment_Response_Evaluation_CLL",
  "status" : "active",
  "date" : "2022-07-13T00:00:00+02:00",
  "publisher" : "Sundhedsvæsenets Kvalitetsinstitut with Trifork Digital Health A/S",
  "contact" : [{
    "name" : "Sundhedsvæsenets Kvalitetsinstitut with Trifork Digital Health A/S",
    "telecom" : [{
      "system" : "url",
      "value" : "https://trifork.com"
    },
    {
      "system" : "email",
      "value" : "rbk@trifork.com"
    }]
  }],
  "description" : "Indikation for kemoterapi/behandling - CLL",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/TreatmentResponseEvaluation",
      "concept" : [{
        "code" : "complete_remission",
        "display" : "Complete remission (CR)"
      },
      {
        "code" : "complete_remission_incomplete_recovery",
        "display" : "Complete remission with incomplete recovery of the bone marrow (CRi)"
      },
      {
        "code" : "partial_response",
        "display" : "Partial response (PR)"
      },
      {
        "code" : "partial_response_lymphocytosis",
        "display" : "Partial response lymphocytose"
      },
      {
        "code" : "stable_disease",
        "display" : "Stable disease (SD/NC)"
      },
      {
        "code" : "progressive_disease",
        "display" : "Progressive disease (PD)"
      }]
    },
    {
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/GenericValues",
      "concept" : [{
        "code" : "not_performed",
        "display" : "Ikke evalueret"
      }]
    },
    {
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/Complications",
      "concept" : [{
        "code" : "mors",
        "display" : "Mors (før evaluering)"
      }]
    }]
  }
}

```
