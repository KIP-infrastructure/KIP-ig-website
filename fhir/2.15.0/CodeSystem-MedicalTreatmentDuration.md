# Medical treatment duration - KIP Infrastructure v2.15.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Medical treatment duration**

## CodeSystem: Medical treatment duration 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/MedicalTreatmentDuration | *Version*:2.15.0 |
| Active as of 2022-07-06 | *Computable Name*:MedicalTreatmentDuration |

 
Medical treatment duration 

 This Code system is referenced in the content logical definition of the following value sets: 

* [MedicinVarighedDSR](ValueSet-MedicinVarighedDSR.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "MedicalTreatmentDuration",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/MedicalTreatmentDuration",
  "version" : "2.15.0",
  "name" : "MedicalTreatmentDuration",
  "title" : "Medical treatment duration",
  "status" : "active",
  "date" : "2022-07-06T00:00:00+02:00",
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
  "description" : "Medical treatment duration",
  "content" : "complete",
  "count" : 3,
  "concept" : [
    {
      "code" : "preoperative_peroperative",
      "display" : "Præ-/peroperativt",
      "definition" : "Præ-/peroperativt"
    },
    {
      "code" : "postoperative_1_day",
      "display" : "Postoperativ, 1 døgn",
      "definition" : "Postoperativ, 1 døgn"
    },
    {
      "code" : "postoperative_multiple_days",
      "display" : "Postoperativ, flere døgn",
      "definition" : "Postoperativ, flere døgn"
    }
  ]
}

```
