# Medical treatment: when did the treatment begin - KIP Infrastructure v2.16.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Medical treatment: when did the treatment begin**

## CodeSystem: Medical treatment: when did the treatment begin 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/MedicalTreatmentStartOf | *Version*:2.16.0 |
| Active as of 2022-07-06 | *Computable Name*:MedicalTreatmentStartOf |

 
Medical treatment: when did the treatment begin compared to operation/procedure 

 This Code system is referenced in the content logical definition of the following value sets: 

* [MedicinalBehandlingPaabegyndtDHR](ValueSet-MedicinalBehandlingPaabegyndtDHR.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "MedicalTreatmentStartOf",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/MedicalTreatmentStartOf",
  "version" : "2.16.0",
  "name" : "MedicalTreatmentStartOf",
  "title" : "Medical treatment: when did the treatment begin",
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
  "description" : "Medical treatment: when did the treatment begin compared to operation/procedure",
  "content" : "complete",
  "count" : 4,
  "concept" : [
    {
      "code" : "before_operation",
      "display" : "Before operation",
      "definition" : "Before operation"
    },
    {
      "code" : "after_operation",
      "display" : "After operation",
      "definition" : "After operation"
    },
    {
      "code" : "day_after_operation",
      "display" : "The day after the operation",
      "definition" : "The day after the operation"
    },
    {
      "code" : "during_admission",
      "display" : "During admission",
      "definition" : "During admission"
    }
  ]
}

```
