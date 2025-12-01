# Treatment cause - unplanned - KIP Infrastructure v2.14.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Treatment cause - unplanned**

## CodeSystem: Treatment cause - unplanned 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/TreatmentCause | *Version*:2.14.2 |
| Active as of 2022-06-29 | *Computable Name*:TreatmentCause |

 
Treatment cause - unplanned 

 This Code system is referenced in the content logical definition of the following value sets: 

* [ExtraordinaryTreatmenCause](ValueSet-ExtraordinaryTreatmenCause.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "TreatmentCause",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/TreatmentCause",
  "version" : "2.14.2",
  "name" : "TreatmentCause",
  "title" : "Treatment cause - unplanned",
  "status" : "active",
  "date" : "2022-06-29T00:00:00+02:00",
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
  "description" : "Treatment cause - unplanned",
  "content" : "complete",
  "count" : 2,
  "concept" : [
    {
      "code" : "toxicity",
      "display" : "Toxicity",
      "definition" : "Toxicity / Toksicitet SNOMED-CT: 75478009"
    },
    {
      "code" : "insufficient_response",
      "display" : "Insufficient response",
      "definition" : "Insufficient response / Utilstrækkelige repons"
    }
  ]
}

```
