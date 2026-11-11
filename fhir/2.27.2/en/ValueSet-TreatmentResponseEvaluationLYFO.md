# Treatment_Response_Evaluation_LYFO - KIP Infrastructure v2.27.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Treatment_Response_Evaluation_LYFO**

## ValueSet: Treatment_Response_Evaluation_LYFO 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/TreatmentResponseEvaluationLYFO | *Version*:2.27.2 |
| Active as of 2022-07-27 | *Computable Name*:TreatmentResponseEvaluationLYFO |

 
Indikation for kemoterapi/behandling - LYFO 

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
  "id" : "TreatmentResponseEvaluationLYFO",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/TreatmentResponseEvaluationLYFO",
  "version" : "2.27.2",
  "name" : "TreatmentResponseEvaluationLYFO",
  "title" : "Treatment_Response_Evaluation_LYFO",
  "status" : "active",
  "date" : "2022-07-27T00:00:00+02:00",
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
  "description" : "Indikation for kemoterapi/behandling - LYFO",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/TreatmentResponseEvaluation",
      "concept" : [{
        "code" : "complete_remission",
        "display" : "Komplet remission (CR)"
      },
      {
        "code" : "uncertain_complete_remission",
        "display" : "Usikker komplet remission (CRu)"
      },
      {
        "code" : "partial_remission",
        "display" : "Partiel remission (PR)"
      },
      {
        "code" : "stable_disease",
        "display" : "Stabil sygdom (SD/NC)"
      },
      {
        "code" : "progressive_disease",
        "display" : "Progressiv sygdom (PD)"
      }]
    }]
  }
}

```
