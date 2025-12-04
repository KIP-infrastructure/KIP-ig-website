# Treatment_Response_Evaluation_CLL - KIP Infrastructure v2.16.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Treatment_Response_Evaluation_CLL**

## ValueSet: Treatment_Response_Evaluation_CLL (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/TreatmentResponseEvaluationCLL | *Version*:2.16.0 |
| Active as of 2022-07-13 | *Computable Name*:TreatmentResponseEvaluationCLL |

 
Indikation for kemoterapi/behandling - CLL 

 **References** 

This value set is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)

### Logical Definition (CLD)

 

### Expansion

This value set contains 8 concepts

-------

 Explanation of the columns that may appear on this page: 

| | |
| :--- | :--- |
| Level | A few code lists that FHIR defines are hierarchical - each code is assigned a level. In this scheme, some codes are under other codes, and imply that the code they are under also applies |
| System | The source of the definition of the code (when the value set draws in codes defined elsewhere) |
| Code | The code (used as the code in the resource instance) |
| Display | The display (used in the*display*element of a[Coding](http://hl7.org/fhir/R4/datatypes.html#Coding)). If there is no display, implementers should not simply display the code, but map the concept into their application |
| Definition | An explanation of the meaning of the concept |
| Comments | Additional notes about how to use the code |



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "TreatmentResponseEvaluationCLL",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/TreatmentResponseEvaluationCLL",
  "version" : "2.16.0",
  "name" : "TreatmentResponseEvaluationCLL",
  "title" : "Treatment_Response_Evaluation_CLL",
  "status" : "active",
  "experimental" : true,
  "date" : "2022-07-13T00:00:00+02:00",
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
  "description" : "Indikation for kemoterapi/behandling - CLL",
  "compose" : {
    "include" : [
      {
        "system" : "https://kip.rkkp.dk/fhir/CodeSystem/TreatmentResponseEvaluation",
        "concept" : [
          {
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
          }
        ]
      },
      {
        "system" : "https://kip.rkkp.dk/fhir/CodeSystem/GenericValues",
        "concept" : [
          {
            "code" : "not_performed",
            "display" : "Ikke evalueret"
          }
        ]
      },
      {
        "system" : "https://kip.rkkp.dk/fhir/CodeSystem/Complications",
        "concept" : [
          {
            "code" : "mors",
            "display" : "Mors (før evaluering)"
          }
        ]
      }
    ]
  }
}

```
